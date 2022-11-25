<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }
    public function index(Request $request)
    {
        $news = News::all();

        return view('user.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|max:100',
            'news_foto' => 'required|mimes:jpg|max:5120',
            'news_title' => 'required|max:255',
            'news_content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("error", "Ma'lumot kiritishda xatolik kuzatildi")->withInput();
        }

        $data = new News;
        $data->category = $request->category;
        $data->author_id = auth('web')->user()->id;
        
        $title = str_split(trim($request->news_title), 5);

        $title[0] = str_replace(' ', '', $title[0]);
        $title[0] = str_replace('"', '', $title[0]);
        $title[0] = str_replace("'", '', $title[0]);
        $title[0] = str_replace("-", '', $title[0]);

        if ($request->file('news_foto')) {
            $extension = $request->file('news_foto')->getClientOriginalExtension();
            $fileNameToStore = $title[0] . rand(1, 99) . '_' . time() . '.' . $extension;
            $request->file('news_foto')->storeAs('news', $fileNameToStore, 'public');
            $data->news_foto = "news/" . $fileNameToStore;
        }

        $data->news_title = $request->news_title;
        $data->news_content = $request->news_content;

        $data->save();
        return redirect()->route('ad.news.index')->with("success", "Ma'lumot yuborildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $user = User::findOrFail($news->author_id);

        static $kirdi = false;

        if (isset($user_ip_address) && $user_ip_address != $request->ip()) {
            $request->session()->forget('id');
        }

        if ($request->session()->has('id') and $id != $request->session()->get('id')) {
            $kirdi = false;
        }
        if ($id == $request->session()->get('id')) {
            $kirdi = true;
        }

        $user_ip_address=$request->ip();

        if (!$kirdi) {
            $news->views++;
            $news->save();
            $kirdi=true;
        }
        
        $request->session()->put('id', $id);

        return view('user.news.show', compact('news', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('admin.news.update', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        return redirect()->route('ad.news.index')->with("error", "Ma'lumot o'chirildi");
    }
}
