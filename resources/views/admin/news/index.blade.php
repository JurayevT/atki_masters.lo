@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('ad.news.create') }}" class="btn btn-success">Qo'shish</a>
        </div>
    </div>
</div>
@endsection
