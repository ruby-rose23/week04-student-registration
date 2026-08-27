@extends('layouts.app')

@section('title', 'Registered Students')

@section('content')

<!-- Page header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-[#3b2a6b]">Registered Students</h1>
        <p class="text-sm text-purple-400 mt-1">{{ $students->count() }} student(s) on record</p>
    </div>
    <a href="{{ route('students.create') }}"
       class="text-sm bg-[#6b4fa0] text-white font-medium px-4 py-2 rounded-lg hover:bg-[#5a3f8a] transition-colors shadow-sm">
        + Register New
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-purple-100">
    @if ($students->isEmpty())
        <div class="py-20 text-center">
            <div class="w-14 h-14 rounded-full bg-purple-50 flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-purple-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                </svg>
            </div>
            <p class="text-sm font-medium text-purple-700">No students registered yet</p>
            <p class="text-xs text-purple-400 mt-1">Get started by registering the first student.</p>
            <a href="{{ route('students.create') }}"
               class="inline-block mt-4 text-sm bg-[#6b4fa0] text-white font-medium px-5 py-2 rounded-lg hover:bg-[#5a3f8a] transition-colors">
                Register a Student
            </a>
        </div>
    @else
        <!-- Table header -->
        <div class="grid grid-cols-12 px-6 py-3 border-b border-purple-50 text-xs font-semibold text-purple-400 uppercase tracking-wide">
            <div class="col-span-5">Student</div>
            <div class="col-span-3">ID Number</div>
            <div class="col-span-3">Program</div>
            <div class="col-span-1"></div>
        </div>

        <div class="divide-y divide-purple-50">
            @foreach ($students as $student)
                <a href="{{ route('students.show', $student->id) }}"
                   class="grid grid-cols-12 items-center px-6 py-4 hover:bg-purple-50 transition-colors group">
                    <div class="col-span-5 flex items-center gap-3">
                        <img src="{{ asset('storage/' . $student->profile_picture) }}"
                             alt="{{ $student->full_name }}"
                             class="w-10 h-10 object-cover rounded-full border-2 border-purple-100 flex-shrink-0">
                        <span class="text-sm font-medium text-[#3b2a6b]">{{ $student->full_name }}</span>
                    </div>
                    <div class="col-span-3 text-sm text-gray-500">{{ $student->student_id }}</div>
                    <div class="col-span-3 text-sm text-gray-500">{{ $student->program }}</div>
                    <div class="col-span-1 text-right">
                        <svg class="w-4 h-4 text-purple-300 group-hover:text-purple-500 transition-colors ml-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</div>

@endsection
