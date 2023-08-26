@extends('admin.master')

@section('body')
    <h1>Assign Tasks</h1>
    <form action="{{ route('admin.tasks.storeAssignedTasks') }}" method="post">
        @csrf
        <input type="hidden" name="selected_tasks" value="{{ implode(',', $selectedTaskIds) }}">
        <label>Select Surveyor:</label>
        <select name="surveyer_id" id="surveyer_id">
            @foreach($surveyers as $surveyer)
                <option value="{{ $surveyer->id }}">{{ $surveyer->name }}</option>
            @endforeach
        </select>
        <button type="submit">Confirm Assign</button>
    </form>
@endsection
