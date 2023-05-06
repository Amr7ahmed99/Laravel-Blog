@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 offset-0">
                <form method="post" action="{{ route('posts.update', ['post'=> $post->id]) }}">
                    @csrf
                    @method('post')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" cols="30" rows="5" name="description" >{{$post['description']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Creator</label>
                        {{-- <input type="text" class="form-control" id="creator" name= "creator" value="{{$post->user->name}}"> --}}
                        <select class= "form-control" name="user_id" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" {{$user->id == $post->user->id? "selected":null}}>
                                    {{$user->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection
