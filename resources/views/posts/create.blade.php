@extends('layouts.app')
@section('title', 'Create Page')
@section('pageContentTitle')
Create Page   
@endsection
@section('content')
    <div class="container">
        <form method="post" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" name="Name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Enter Email address</label>
              <input type="email" class="form-control" name="Email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="post_title">Enter Post Title</label>
                <input type="text" name="postTitle" class="form-control" id="post_title">
            </div>
            <div class="form-group">
                <label for="name">Enter Content</label>
                <input type="text" name="postContent" class="form-control" id="name">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection