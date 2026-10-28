@extends('layouts.app')
@section('content')
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow space-y-4">
    @csrf
    <h1 class="text-2xl font-bold">Student Registration</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input name="student_id" value="{{ old('student_id') }}" placeholder="Student ID" class="border p-2 rounded">
        <input name="email" type="email" value="{{ old('email') }}" placeholder="Email" class="border p-2 rounded">
        <input name="first_name" value="{{ old('first_name') }}" placeholder="First Name" class="border p-2 rounded">
        <input name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name (optional)" class="border p-2 rounded">
        <input name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" class="border p-2 rounded">
        <input name="mobile_number" value="{{ old('mobile_number') }}" placeholder="Mobile Number" class="border p-2 rounded">
        <input name="date_of_birth" type="date" value="{{ old('date_of_birth') }}" class="border p-2 rounded">
        <select name="gender" class="border p-2 rounded">
            <option value="">Gender</option>
            @foreach (['Male','Female','Other'] as $g)
                <option value="{{ $g }}" @selected(old('gender') == $g)>{{ $g }}</option>
            @endforeach
        </select>
        <select name="program" class="border p-2 rounded">
            <option value="">Program</option>
            @foreach (['BSIT','BSCS','BSIS'] as $p)
                <option value="{{ $p }}" @selected(old('program') == $p)>{{ $p }}</option>
            @endforeach
        </select>
        <select name="year_level" class="border p-2 rounded">
            <option value="">Year Level</option>
            @foreach (['1st Year','2nd Year','3rd Year','4th Year'] as $y)
                <option value="{{ $y }}" @selected(old('year_level') == $y)>{{ $y }}</option>
            @endforeach
        </select>
    </div>

    <textarea name="address" placeholder="Address" class="border p-2 rounded w-full">{{ old('address') }}</textarea>
    <input type="file" name="profile_picture" class="w-full">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Register</button>
</form>
@endsection