@extends('layouts.app')
@section('title', 'View Page')
    
@section('pageContentTitle')
View Page   
@endsection
@section('content')
   <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Post Title</th>
            <th scope="col">Post Content</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $sno++ }}</th>
                    <th>{{ $post->Name }}</th>
                    <td>{{ $post->Email }}</td>
                    <td>{{ $post->postTitle }}</td>
                    <td>{{ $post->postContent }}</td>
                </tr>
           @endforeach
        </tbody>
      </table>
   </div>
@endsection