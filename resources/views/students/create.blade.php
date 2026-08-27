@extends('layouts.app')

@section('title', 'Student Registration Form')

@section('content')

<!-- Page header -->
<div class="mb-6">
    <h1 class="text-2xl font-bold text-[#3b2a6b]">Student Registration</h1>
    <p class="text-sm text-purple-400 mt-1">Fill in the form below to register a new student.</p>
</div>

<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Section: Academic Information -->
    <div class="bg-white rounded-xl shadow-sm border border-purple-100 mb-5">
        <div class="px-6 py-4 border-b border-purple-50">
            <h2 class="text-sm font-semibold text-[#6b4fa0] uppercase tracking-wide">Academic Information</h2>
        </div>
        <div class="px-6 py-5 grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Student ID <span class="text-red-400">*</span></label>
                <input type="text" name="student_id" value="{{ old('student_id') }}"
                       placeholder="e.g. 2024-00001"
                       class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
            </div>
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Program <span class="text-red-400">*</span></label>
                <input type="text" name="program" value="{{ old('program') }}"
                       placeholder="e.g. BSIT"
                       class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
            </div>
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Year Level <span class="text-red-400">*</span></label>
                <select name="year_level"
                        class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                    <option value="">Select Year Level</option>
                    <option value="1st Year" @selected(old('year_level') == '1st Year')>1st Year</option>
                    <option value="2nd Year" @selected(old('year_level') == '2nd Year')>2nd Year</option>
                    <option value="3rd Year" @selected(old('year_level') == '3rd Year')>3rd Year</option>
                    <option value="4th Year" @selected(old('year_level') == '4th Year')>4th Year</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section: Personal Information -->
    <div class="bg-white rounded-xl shadow-sm border border-purple-100 mb-5">
        <div class="px-6 py-4 border-b border-purple-50">
            <h2 class="text-sm font-semibold text-[#6b4fa0] uppercase tracking-wide">Personal Information</h2>
        </div>
        <div class="px-6 py-5 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div>
                    <label class="block text-xs font-medium text-purple-700 mb-1">First Name <span class="text-red-400">*</span></label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                           placeholder="Juan"
                           class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-purple-700 mb-1">Middle Name</label>
                    <input type="text" name="middle_name" value="{{ old('middle_name') }}"
                           placeholder="Optional"
                           class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-purple-700 mb-1">Last Name <span class="text-red-400">*</span></label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                           placeholder="Dela Cruz"
                           class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-xs font-medium text-purple-700 mb-1">Date of Birth <span class="text-red-400">*</span></label>
                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                           class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-purple-700 mb-1">Gender <span class="text-red-400">*</span></label>
                    <select name="gender"
                            class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
                        <option value="">Select Gender</option>
                        <option value="Male" @selected(old('gender') == 'Male')>Male</option>
                        <option value="Female" @selected(old('gender') == 'Female')>Female</option>
                        <option value="Other" @selected(old('gender') == 'Other')>Other</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Address <span class="text-red-400">*</span></label>
                <textarea name="address" rows="3"
                          placeholder="Street, Barangay, City, Province"
                          class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">{{ old('address') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Section: Contact & Photo -->
    <div class="bg-white rounded-xl shadow-sm border border-purple-100 mb-6">
        <div class="px-6 py-4 border-b border-purple-50">
            <h2 class="text-sm font-semibold text-[#6b4fa0] uppercase tracking-wide">Contact & Photo</h2>
        </div>
        <div class="px-6 py-5 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Email Address <span class="text-red-400">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}"
                       placeholder="juan@example.com"
                       class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
            </div>
            <div>
                <label class="block text-xs font-medium text-purple-700 mb-1">Mobile Number <span class="text-red-400">*</span></label>
                <input type="text" name="mobile_number" value="{{ old('mobile_number') }}"
                       placeholder="09XXXXXXXXX"
                       class="w-full text-sm border border-purple-200 rounded-lg px-3 py-2 text-gray-700 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition">
            </div>
            <div class="md:col-span-2">
                <label class="block text-xs font-medium text-purple-700 mb-1">Profile Picture <span class="text-red-400">*</span></label>
                <div class="border-2 border-dashed border-purple-200 rounded-lg px-4 py-5 text-center bg-purple-50 hover:bg-purple-100 transition cursor-pointer">
                    <input type="file" name="profile_picture" accept="image/png, image/jpeg, image/jpg"
                           class="w-full text-sm text-purple-500 file:mr-3 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-medium file:bg-[#6b4fa0] file:text-white hover:file:bg-[#5a3f8a] cursor-pointer">
                    <p class="text-xs text-purple-400 mt-2">JPG, JPEG, or PNG &mdash; max 2MB</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex items-center justify-between">
        <a href="{{ route('students.index') }}" class="text-sm text-purple-400 hover:text-purple-600 transition-colors">
            &larr; Back to Students
        </a>
        <button type="submit"
                class="bg-[#6b4fa0] text-white text-sm font-semibold px-8 py-2.5 rounded-lg hover:bg-[#5a3f8a] transition-colors shadow-sm">
            Submit Registration
        </button>
    </div>

</form>
@endsection
