@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="my-3">Yangilik qo'shish</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-2 py-2" role="alert">
                    <div>{{ $message }}</div>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger py-2 alert-block">
                    <div>{{ $message }}</div>
                </div>
            @endif
            <form method="post" action="{{ route('ad.news.store') }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group my-3">
                  <label for="category">Yangilik katogoriyasi</label>
                  <input type="text" class="form-control" name="category" placeholder="ta'lim, sport..." required>
                </div>
                <div class="form-group my-3">
                  <label for="news_foto">Foto</label>
                  <input type="file" class="form-control" name="news_foto" required>
                </div>
                <div class="form-group my-3">
                  <label for="news_title">Sarlavha</label>
                  <input type="text" class="form-control" name="news_title" placeholder="yangilik sarlavhasini kiriting" required>
                </div>
                <div class="form-group my-3">
                  <label for="news_content">Yangilik contenti</label>
                  <textarea class="form-control" name="news_content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Qo'shish</button>
              </form>

        </div>
    </div>
</div>
@endsection
