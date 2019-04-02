@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
  <ul class="list-group">
    @foreach($errors->all() as $error)
      <li class="list-group-item text-danger">
        {{ $error }}
      </li>
    @endforeach
  </ul>
@endif

  <div class="panel panel-default">
    <div class="panel-heading">
      Edit Post: {{ $post->title }}
    </div>
    <div class="panel-body">
      <form action="{{ route('post.update', ['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="" placeholder="" value="{{ $post->title }}">
        </div>

        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" class="form-control" name="featured" id="" placeholder="">
        </div>
        <div class="form-group">
          <label for="category">Select a category</label>
          <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
              <option value="{{ $category->id  }}"
                @if($post->category->id == $category->id)
                  selected
                @endif
              >{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tags">Select tags</label>
          @foreach($tags as $tag)
          <div class="checkbox">
            <label> <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
              @foreach($post->tags as $t)
                  @if($tag->id == $t->id)
                      checked
                  @endif
              @endforeach
            > {{ $tag->tag }} </label>
          </div>
          @endforeach
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" rows="8" cols="80" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Update Post</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@stop
