@extends('layouts.app')
@section('content')

<table class="table table-hover">
  <div class="panel-heading">
    <h4>Trashed posts</h4>
  </div>
<thead>
  <th>Image Name</th>
  <th>Title</th>

  <th>Restore </th>
  <th>Delete</th>
</thead>
<tbody>
  @if($posts->count() > 0)
  @foreach($posts as $post)
  <tr>
    <td><img src="{{$post->featured}}" alt="{{ $post->title }}" width="50px" height="70px"></td>
    <td>{{ $post->title }}</td>

    <td>
      <a href="{{ route('post.restore', ['id'=>$post->id]) }}" class="btn btn-success" >Restore</a>
    </td>
    <td>
      <a href="{{ route('post.kill', ['id'=>$post->id]) }}" class="btn btn-danger" >Delete</a>
    </td>
  </tr>
  @endforeach
  @else
  <tr>
    <th colspan="5" class="text-center">No trashed posts</th>
  </tr>
  @endif
</tbody>
</table>

@stop