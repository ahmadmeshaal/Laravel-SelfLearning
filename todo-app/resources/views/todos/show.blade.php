@extends('layouts.app')
@section('title', 'Task Details')
@section('content')
<h2>Task Details</h2>

<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">{{$todo->task}}</h5>
        <p class="card-text">Status: {{$todo->completed ? 'Completed' : 'Not Completed' }}</p>
        <a href="{{route('todos.edit', $todo->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{route('todos.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection