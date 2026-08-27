<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Registration System')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f3f0fa] min-h-screen">

    <!-- Top bar -->
    <div class="bg-[#6b4fa0] h-1 w-full"></div>

    <!-- Navbar -->
    <nav class="bg-white border-b border-purple-100 shadow-sm px-6 py-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-[#c4b0e8] flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#6b4fa0]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0121 13c0 5.523-4.477 10-9 10S3 18.523 3 13c0-.725.093-1.428.267-2.1L12 14z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-700 text-[#3b2a6b] leading-tight font-semibold">College of Information Technology</p>
                    <p class="text-xs text-purple-400 leading-tight">Student Registration System</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('students.index') }}"
                   class="text-sm text-purple-600 font-medium px-4 py-2 rounded-lg hover:bg-purple-50 transition-colors">
                    All Students
                </a>
                <a href="{{ route('students.create') }}"
                   class="text-sm bg-[#6b4fa0] text-white font-medium px-4 py-2 rounded-lg hover:bg-[#5a3f8a] transition-colors">
                    + Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Page content -->
    <div class="max-w-5xl mx-auto mt-8 px-4 pb-16">

        @if (session('success'))
            <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-lg mb-6 text-sm">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="flex items-start gap-3 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6 text-sm">
                <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                </svg>
                <div>
                    <p class="font-semibold mb-1">Please fix the following errors:</p>
                    <ul class="list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <div class="border-t border-purple-100 bg-white mt-auto py-4 text-center text-xs text-purple-300">
        &copy; {{ date('Y') }} College of Information Technology &mdash; Student Registration System
    </div>

</body>
</html>
