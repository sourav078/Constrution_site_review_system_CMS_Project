@extends('admin.master')

@section('body')
    <h1>Task List</h1>
    <form action="{{ route('admin.tasks.assign') }}" method="post">
        @csrf
        <label>Select Tasks:</label>
        <select name="selected_tasks[]" id="selected_tasks" multiple>
            @foreach($taskColumns as $column)
                <option value="{{ $column }}">{{ $column }}</option>
            @endforeach
        </select>
        <button type="submit">Assign Tasks</button>
    </form>
@endsection
