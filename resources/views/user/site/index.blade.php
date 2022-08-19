@extends('user.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Bosh sahifa') }}</div>
                <img src="/images/index.jpg" alt="" class="card-image image-fluent">
                <h2 class="card-title text-center">
                    Bu asosiy sahifa.
                </h2>
                <p class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere facilis harum neque consectetur mollitia impedit obcaecati magnam eius perferendis maiores, totam atque, assumenda tempore ea adipisci odit tenetur. Eos fuga quaerat odit, vel, quisquam qui id illum laudantium laborum pariatur tempora magnam? Sed corporis, debitis animi nam repellendus eligendi saepe? Accusantium non beatae obcaecati, minus illum doloribus vitae consequuntur perferendis dolores optio nemo, quisquam mollitia molestias odio earum magnam in. Est perspiciatis consequuntur quae provident necessitatibus quas quo, delectus ex temporibus quos et enim impedit nostrum praesentium, culpa sequi libero cum vel sed velit rem similique unde itaque? Numquam, nam!
                </p>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
            <div class="card">
                <img src="" alt="" class="card-image image-fluent">
                <h2 class="card-title text-center">
                    Bu asosiy sahifa.
                </h2>
                <p class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere facilis harum neque consectetur mollitia impedit obcaecati magnam eius perferendis maiores, totam atque, assumenda tempore ea adipisci odit tenetur. Eos fuga quaerat odit, vel, quisquam qui id illum laudantium laborum pariatur tempora magnam? Sed corporis, debitis animi nam repellendus eligendi saepe? Accusantium non beatae obcaecati, minus illum doloribus vitae consequuntur perferendis dolores optio nemo, quisquam mollitia molestias odio earum magnam in. Est perspiciatis consequuntur quae provident necessitatibus quas quo, delectus ex temporibus quos et enim impedit nostrum praesentium, culpa sequi libero cum vel sed velit rem similique unde itaque? Numquam, nam!
                </p>
            </div>
        </div>
    </div>
</div>


@endsection