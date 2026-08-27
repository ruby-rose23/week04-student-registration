@extends('layouts.app')

@section('title', 'Student Profile')

@section('content')

<!-- Back link -->
<div class="mb-5">
    <a href="{{ route('students.index') }}" class="inline-flex items-center gap-1 text-sm text-purple-400 hover:text-purple-600 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
        Back to Students
    </a>
</div>

<!-- Profile card -->
<div class="bg-white rounded-xl shadow-sm border border-purple-100 overflow-hidden">

    <!-- Header band -->
    <div class="h-24 bg-gradient-to-r from-[#c4b0e8] to-[#a78fd4]"></div>

    <!-- Avatar + name -->
    <div class="px-8 pb-6 -mt-12">
        <div class="flex flex-col md:flex-row md:items-end gap-5">
            <img src="{{ asset('storage/' . $student->profile_picture) }}"
                 alt="{{ $student->full_name }}"
                 class="w-24 h-24 object-cover rounded-xl border-4 border-white shadow-md flex-shrink-0">
            <div class="md:mb-2">
                <h1 class="text-xl font-bold text-[#3b2a6b]">{{ $student->full_name }}</h1>
                <p class="text-sm text-purple-400">{{ $student->program }} &mdash; {{ $student->year_level }}</p>
            </div>
            <div class="md:ml-auto md:mb-2">
                <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $student->student_id }}
                </span>
            </div>
        </div>
    </div>

    <div class="border-t border-purple-50 px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Left column -->
            <div class="space-y-4">
                <h2 class="text-xs font-semibold text-purple-400 uppercase tracking-wide mb-3">Personal Details</h2>

                <div>
                    <p class="text-xs text-purple-400 font-medium">Date of Birth</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->date_of_birth->format('F d, Y') }}</p>
                </div>
                <div>
                    <p class="text-xs text-purple-400 font-medium">Gender</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->gender }}</p>
                </div>
                <div>
                    <p class="text-xs text-purple-400 font-medium">Address</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->address }}</p>
                </div>
            </div>

            <!-- Right column -->
            <div class="space-y-4">
                <h2 class="text-xs font-semibold text-purple-400 uppercase tracking-wide mb-3">Contact Information</h2>

                <div>
                    <p class="text-xs text-purple-400 font-medium">Email Address</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->email }}</p>
                </div>
                <div>
                    <p class="text-xs text-purple-400 font-medium">Mobile Number</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->mobile_number }}</p>
                </div>
                <div>
                    <p class="text-xs text-purple-400 font-medium">Program</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->program }}</p>
                </div>
                <div>
                    <p class="text-xs text-purple-400 font-medium">Year Level</p>
                    <p class="text-sm text-gray-700 mt-0.5">{{ $student->year_level }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer actions -->
    <div class="border-t border-purple-50 px-8 py-4 bg-purple-50 flex justify-end">
        <a href="{{ route('students.create') }}"
           class="text-sm bg-[#6b4fa0] text-white font-medium px-5 py-2 rounded-lg hover:bg-[#5a3f8a] transition-colors shadow-sm">
            + Register Another Student
        </a>
    </div>
</div>

@endsection
