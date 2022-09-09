@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
               @foreach ($news as $new)
                   <div class="row my-4 shadow-sm">
                       
                    <img class="col-md-4 p-0" src="{{ '/storage/' . $new->news_foto }}" style="height:35vh" alt="{{ $new->news_title }}">
                       
                        <div class="col-md-8 px-2 py-3">

                            <span style="float: right; font-size:1.2rem; color:rgb(8, 158, 58)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                {{ $new->views }}
                            </span>

                            <h5 class="card-title text-center mt-md-3" style="font-size: 2rem">{{ $new->news_title }}</h5>
                            <p class="card-text my-3 mb-md-5" style="text-indent: 1rem">{{ Str::of($new->news_content)->limit(250, ' ...') }}</p>
                            <a href="{{ route('news.show', $new->id) }}" class="btn btn-primary">Batafsil...</a>
                            <p class="card-text text-muted" style="float: right; font-weight:500">Post qo'yilgan vaqt:
                            <span style="color: rgb(9, 122, 52); font-weight: 700">
                                <?php
                                    $due_date = new DateTime($new->created_at);

                                    $today = new DateTime();
                                    $months = $due_date->diff($today);

                                    if ($months->m > 1) {
                                        echo $months->m . ' oy oldin';    
                                    }
                                    elseif ($months->d > 1) {
                                        echo $months->d . ' kun oldin';    
                                    }
                                    elseif ($months->h > 1) {
                                        echo $months->h . ' soat oldin';    
                                    }
                                    elseif ($months->i > 1) {
                                        echo $months->i . ' minut oldin';    
                                    }
                                    elseif ($months->s > 1) {
                                        echo $months->s . ' sekund oldin';    
                                    }

                                ?>
                                </span>
                            </p>
                       </div>
                   </div>
               @endforeach
        </div>
    </div>
</div>
@endsection