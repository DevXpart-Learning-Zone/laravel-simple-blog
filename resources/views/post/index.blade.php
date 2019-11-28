@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">1</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td> {{ $post->status == 1 ? 'Active' : 'Inactive' }} </td>
            <td>
                <a href="/posts/{{ $post->id }}">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
