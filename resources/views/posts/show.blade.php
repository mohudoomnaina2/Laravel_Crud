@extends('layouts.app')
@section('title', 'View Page')
    
@section('pageContentTitle')
Show Page   
@endsection
@section('content')
   <div class="container">
    <input type="button" class="btn btn-xs btn-primary" onclick="window.location.href='{{route('posts.index')}}'" value="Back" name="Back" /><br><br>
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
            <tr>
                    <td>{{ $sno++ }}</th>
                    <td>{{ $posts->Name }}</th>
                    <td>{{ $posts->Email }}</td>
                    <td>{{ $posts->postTitle }}</td>
                    <td>{{ $posts->postContent }}</td>
           </tr>
        </tbody>
      </table>
   </div>
@endsection