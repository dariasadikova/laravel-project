@extends('layout')
@section('content')
<div class="card" style="width: 68rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->name}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->short_desc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <div class="d-inline-flex gap-1" style="gap: 10px">
        <a href="/article/{{$article->id}}/edit" class="btn btn-primary">Update article</a>
        <a href="#" class="btn btn-secondary">Add comment</a>
        <form action="/article/{{$article->id}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
  </div>
</div>
@endsection