@extends('layouts.app')
@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Registered Students</h1>
    @foreach ($students as $s)
        <a href="{{ route('students.show', $s) }}" class="block border-b py-2 hover:bg-gray-50">
            {{ $s->student_id }} - {{ $s->first_name }} {{ $s->last_name }}
        </a>
    @endforeach
</div>
@endsection