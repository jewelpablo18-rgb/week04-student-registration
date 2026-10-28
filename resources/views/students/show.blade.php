@extends('layouts.app')
@section('content')
<div class="bg-white p-6 rounded shadow">
    <img src="{{ asset('storage/'.$student->profile_picture) }}" class="w-40 h-40 object-cover rounded-full mb-4">
    <h1 class="text-2xl font-bold">{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</h1>
    <p>Student ID: {{ $student->student_id }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Mobile: {{ $student->mobile_number }}</p>
    <p>Birthdate: {{ $student->date_of_birth }}</p>
    <p>Gender: {{ $student->gender }}</p>
    <p>Program: {{ $student->program }} - {{ $student->year_level }}</p>
    <p>Address: {{ $student->address }}</p>
    <a href="{{ route('students.create') }}" class="text-blue-600 underline">Register another</a>
</div>
@endsection