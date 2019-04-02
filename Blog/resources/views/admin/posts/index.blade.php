@extends('layouts.app')
@section('content')

<table class="table table-hover">
  <div class="panel-heading">
    <h4>Published posts</h4>
  </div>
<thead>
  <th>Image Name</th>
  <th>Title</th>
  <th>Edit</th>
  <th>Trash </th>
</thead>
<tbody>
  @if($posts->count() > 0)
  @foreach($posts as $post)
  <tr>
    <td><img src="{{$post->featured}}" alt="{{ $post->title }}" width="50px" height="70px"></td>
    <td>{{ $post->title }}</td>
    <td>
      <a href="{{ route('post.edit', ['id'=>$post->id]) }}" class="btn btn-info" >Edit</a>
    </td>
    <td>
      <a href="{{ route('post.delete', ['id'=>$post->id]) }}" class="btn btn-danger" >Trash</a>
    </td>
  </tr>
  @endforeach

  @else
  <tr>
    <th colspan="5" class="text-center">No published posts</th>
  </tr>
  @endif
</tbody>
</table>

@stop
