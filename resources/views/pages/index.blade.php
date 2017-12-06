@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id  }}</td>
                <td>{{ $page->title  }}</td>
                <td><a class="btn btn-info" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
            </tr>
        @endforeach
    </table>

    {{ $pages->links() }}

@endsection