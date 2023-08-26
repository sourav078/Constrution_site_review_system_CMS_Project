@extends('admin.master')

@section('body')
    <h1>{{ $category->name }}'s Files</h1>
    <ul>
        @foreach($category->files as $file)
            <li>
                <a href="{{ asset($file->path) }}" target="_blank">{{ $file->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
