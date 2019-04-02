@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>Create a new category</h1>
    </div>
    <div class="panel-body">
      <form action="{{ route('category.store') }}" method="post">
        {{csrf_field()}}

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="" placeholder="">
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Store Category</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@stop
