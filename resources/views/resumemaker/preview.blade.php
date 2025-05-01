@extends('sw.layout.master')

@section('title', 'Resume Preview & Download | CraftMyDoc')
@section('meta_description', 'Preview and download your resume as a professional PDF with CraftMyDoc.')
@section('meta_keywords', 'Resume Preview, Resume Download, Online Resume Maker, PDF Resume, Download Resume')

@section('content')
    <div class="max-w-5xl mx-auto mt-10 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
            <i class="fas fa-file-alt text-blue-500"></i> Resume Preview
        </h1>

        <!-- Resume Preview Iframe or Container -->
        <div class="border rounded overflow-hidden shadow mb-6">
            <iframe src="{{ route('resume.getResumeTemplate') }}" class="w-full h-[800px]" frameborder="0"></iframe>
        </div>

        <!-- Download Button -->
        <div class="text-right">
            <a href="{{ route('resumeTemp.download.PDF') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                <i class="fas fa-download mr-2"></i> Download Resume (PDF)
            </a>
        </div>
    </div>
@endsection
