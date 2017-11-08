@extends('layouts.app')

@section('content')
  @include('admin.includes.errors')
  <h2 class="text-center">
    Create a new category
  </h2>
  <div class="panel panel-default">
    <div class="panel-heading">
      Create a new post
    </div>
    <div class="panel-body">
      <form class="" action="{{ route('category.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" value="" class="form-control">
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Store Category</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
