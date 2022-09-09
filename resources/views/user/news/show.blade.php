@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
               <div class="card">
                    <img src="{{ '/storage/' . $news->news_foto }}" alt="{{ $news->news_title }}" style="width: 100%; height:40vw">
                    <div class="card-body">
                        <h3 class="card-title text-center">
                            {{ $news->news_title }}
                        </h3>
                        <p class="card-text" style="text-indent: 1rem">
                            {{ $news->news_content }}
                        </p>
                        <div>
                            <p class="text-success fw-bolder mt-4 mb-2" style="float: left">
                                Muallif: {{ $user->firstname }}
                            </p>
                            <p class="text-success fw-bolder mt-4 mb-2" style="float: right">
                                Kategoriya: {{ $news->category }}
                            </p>
                        </div>
                    </div>
               </div>
        </div>
    </div>
</div>
@endsection
