@extends('admin.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('ad.news.create') }}" class="btn btn-success ms-3 mb-3">Qo'shish</a>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
               @foreach ($news as $new)
                   <div class="card my-3 mx-2 p-0 shadow-sm" style="float: left; width:18rem">
                       <img class="card-img-top" src="{{ '/storage/' . $new->news_foto }}" style="height:15rem" alt="Card image cap">
                       <div class="card-body">
                       <h5 class="card-title">{{ $new->news_title }}</h5>
                       <p class="card-text">{{ Str::of($new->news_content)->limit(65, ' ...') }}</p>
                       <a href="{{ route('ad.news.show') }}" class="btn btn-primary">Batafsil...</a>
                       <span style="float: right; font-size:1.2rem; color:rgb(8, 158, 58)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>
                        {{ $new->views }}
                    </span>
                       </div>
                   </div>
               @endforeach
        </div>

    </div>
</div>
@endsection
