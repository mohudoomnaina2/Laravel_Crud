@extends('layouts.app')
@section('title', 'View Page')
    
@section('pageContentTitle')
View Page   
@endsection
@section('content')
   <div class="container">
    <input type="button" class="btn btn-xs btn-primary" onclick="window.location.href='posts/create'" value="Add" name="Add" /><br><br>
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
                    <td style="cursor:pointer;" onclick="window.location.href='posts/{{ $post->id }}'">{{ $sno++ }}</th>
                    <td style="cursor:pointer;" onclick="window.location.href='posts/{{ $post->id }}'">{{ $post->Name }}</th>
                    <td style="cursor:pointer;" onclick="window.location.href='posts/{{ $post->id }}'">{{ $post->Email }}</td>
                    <td style="cursor:pointer;" onclick="window.location.href='posts/{{ $post->id }}'">{{ $post->postTitle }}</td>
                    <td style="cursor:pointer;" onclick="window.location.href='posts/{{ $post->id }}'">{{ $post->postContent }}</td>
                    <td><input type="button" class="btn btn-xs btn-primary" onclick="window.location.href='posts/{{ $post->id }}/edit'" value="Edit" name="edit" /></td>
                    <td>
                      <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        {{-- {{ method_field('DELETE') }} --}}
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <input type="submit" onclick="return confirm('Are You Sure U Want To Delete This Record');" class="btn btn-xs btn-danger" value="Delete" name="delete" />
                      </form>
                    </td>
                </tr>
           @endforeach
        </tbody>
      </table>
   </div>
@endsection