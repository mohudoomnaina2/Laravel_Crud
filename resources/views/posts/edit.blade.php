@extends('layouts.app')
@section('title', 'Edit Page')
@section('pageContentTitle')
Edit Page   
@endsection
@section('content')
    <div class="container">
        <form method="post" action="/posts/{{ $posts->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" name="Name" value="{{ $posts->Name }}" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Enter Email address</label>
              <input type="email" class="form-control" name="Email" value="{{ $posts->Email }}" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="post_title">Enter Post Title</label>
                <input type="text" name="postTitle" value="{{ $posts->postTitle }}" class="form-control" id="post_title">
            </div>
            <div class="form-group">
                <label for="name">Enter Content</label>
                <input type="text" name="postContent" value="{{ $posts->postContent }}" class="form-control" id="name">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection