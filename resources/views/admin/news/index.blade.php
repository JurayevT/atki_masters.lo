@extends('admin.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('ad.news.create') }}" class="btn btn-success ms-3 mb-3">Qo'shish</a>
    <div class="row justify-content-start">
        <div class="col-md-10">
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
            <table class="table">
                <thead>
                  <tr class="text-center">
                    <th>Id</th>
                    <th>Rasm</th>
                    <th>Sarlavha</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                    <tr class="text-center">
                        <td>{{ $new->id }}</td>
                        <td style="width: 30%">
                            <img class="card-img-top" src="{{ '/storage/' . $new->news_foto }}" alt="{{ $new->news_title }}" style="max-height: 20vw">
                        </td>
                        <td>
                            <p class="mt-3 mt-md-5 fs-4">{{ $new->news_title }}</p>
                        </td>
                        <td>
                            <div class="mt-3 mt-md-5">
                                <a href="{{ route('ad.news.edit', $new->id) }}" class="btn btn-warning">Update</a>
                                <form action="{{ route('ad.news.destroy', $new->id) }}" data-confirm="test" class="d-inline" method="post" >
                                    @csrf 
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Dalete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
