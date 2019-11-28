@extends('layouts.app')

@section('content')
<h3 class="mt-5">Create Post </h3>
<form action="{{ action('PostController@store') }}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="1" selected>Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
