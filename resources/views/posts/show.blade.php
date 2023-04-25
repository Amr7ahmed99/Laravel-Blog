@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{$post['title']}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$post['posted_by']}}</h5>
                    <p class="card-text">{{$post['description']}}</p>
                    <p class="card-text">{{$post['created_at']}}</p>
                    <a href="/posts" class="btn btn-primary">BACK</a>
                </div>
            </div>    
        </div>
    </div>
@endsection