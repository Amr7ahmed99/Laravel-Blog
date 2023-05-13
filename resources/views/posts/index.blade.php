@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center my-3"><a href={{ route('posts.create') }}><button
                        class="btn btn-success btn-md">Create Post</button></a></div>
            <div class="col-12 col-md-8 offset-md-2 offset-0">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Posted By</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="postsTableBody" >
                        {{-- blade directives --}}
                        @foreach ($posts as $post)
                            <tr onclick="destroyPost(event, {{$post->id}})">
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user? $post->user->name: "user not found" }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                                        class="btn btn-info btn-md">View</a>
                                    <a href=" {{ route('posts.edit', ['post' => $post->id]) }} "
                                        class="btn btn-primary btn-md">Edit</a>
                                    <button class="btn btn-danger btn-md">
                                            Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
