@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 offset-0 col-md-6 offset-md-3">
                <form method="POST" action="{{ route('posts.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" cols="30" rows="5" name="description" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Post Creator</label>
                        <select class= "form-control" name="user_id" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}"> {{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection