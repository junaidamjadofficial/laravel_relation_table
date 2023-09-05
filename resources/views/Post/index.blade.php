@extends('Post.layouts')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Post title</th>
        <th scope="col">Comment</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        @if ($item->comment->created_at != null)
        <td>{{$item->comment->created_at->diffForHumans()}}</td>
        @endif
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
