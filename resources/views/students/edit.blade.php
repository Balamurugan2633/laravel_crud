@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="name" class="form-control mb-2" value="{{ $student->name }}">
        <input type="email" name="email" class="form-control mb-2" value="{{ $student->email }}">
        <input type="text" name="phone" class="form-control mb-2" value="{{ $student->phone }}">
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
