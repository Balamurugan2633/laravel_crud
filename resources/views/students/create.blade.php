@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Name">
        <input type="email" name="email" class="form-control mb-2" placeholder="Email">
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone">
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
