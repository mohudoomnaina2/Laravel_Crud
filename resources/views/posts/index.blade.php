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
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
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
                    <td><input type="submit" onclick="window.location.href='posts/{{ $post->id }}/edit'" value="Edit" name="edit" />
                    <td><input type="submit" name="delete" onclick="window.location.href='posts/{{ $post->id }}'" value="Delete" />
                </tr>
           @endforeach
        </tbody>
      </table>
   </div>
@endsection