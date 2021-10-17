@extends('layout')
@section('title', $post->title)
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    <div class="card mt-3">
        <div class="card-body">
            <h5>Id: </h5><p class="card-text">{!! $post->id !!}</p><br>
            <h5>Title: </h5><p class="card-title">{{ $post->title }}</p><br>
            <h5>Content: </h5><p class="card-text">{!! $post->displayBody !!}</p><br>
            <h5>Created At: </h5><p class="card-text">{!! $post->created_at !!}</p><br>
            <h5>Updated At: </h5><p class="card-text">{!! $post->updated_at !!}</p>
        </div>
        <div class="card-footer text-end">
            <form method="POST" action="{{route('posts.destroy', ['post'=> $post->id])}}">
                @method('DELETE')
                @csrf
                <a class="btn btn-warning" href="{{route('posts.edit', ['post'=>$post->id])}}">edit</a>
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </div>
    </div>
@endsection
