@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 offset-0">
                <form method="post" action="{{ url('posts/create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" cols="30" rows="5" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="creator" class="form-label">Creator </label>
                        <input type="text" class="form-control" id="creator" name= "creator">
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection
