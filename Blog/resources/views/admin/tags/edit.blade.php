@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>Edit tag:{{ $tag->tag }}</h1>
    </div>
    <div class="panel-body">
      <form action="{{ route('tag.update', ['id'=> $tag->id]) }}" method="post">
        {{csrf_field()}}

        <div class="form-group">
          <label for="name">Tag</label>
          <input type="text" class="form-control" value="{{ $tag->tag }}" name="tag" id="" placeholder="">
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Update Tag</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@stop
