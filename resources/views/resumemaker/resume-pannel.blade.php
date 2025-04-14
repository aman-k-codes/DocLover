@extends('sw.layout.master')

@section('title', 'Resume Builder Panel | DocLover')
@section('meta_description', 'Create your resume interactively with sections, input forms, and live PDF preview using
    our resume builder.')
@section('meta_keywords', 'Resume Builder, Online Resume Maker, Interactive Resume Panel, Build Resume, Resume Preview')

@section('content')
    <div class="flex">

        <!-- Sidebar Tabs -->
        <div class="w-1/4 bg-white border-r p-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-700">Edit Sections</h3>
            <ul class="space-y-3 text-sm text-gray-600">
                <li><a href="#personal-info" class="hover:text-blue-600">Personal Details</a></li>
                <li><a href="#job-preferences" class="hover:text-blue-600">Job Preferences</a></li>
                <li><a href="#experience" class="hover:text-blue-600">Work Experience</a></li>
                <li><a href="#education" class="hover:text-blue-600">Education</a></li>
                <li><a href="#skills" class="hover:text-blue-600">Skills</a></li>
                <li><a href="#courses" class="hover:text-blue-600">Courses</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 mx-auto p-10 bg-white">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-semibold text-gray-900">Edit My Career Profile</h2>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Account Settings</a>
            </div>

            <form method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Personal Info -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Personal details</h3>
                    <div class="flex items-start space-x-6 mb-6">
                        <div class="w-20 h-20 bg-gray-100 border rounded flex items-center justify-center">
                            <span class="text-gray-400 text-sm">👤</span>
                        </div>
                        <div class="pt-1">
                            <label class="text-blue-600 text-sm font-medium cursor-pointer hover:underline">Upload
                                photo</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="first_name" placeholder="First Name" value="Nilesh"
                            class="form-input" />
                        <input type="text" name="last_name" placeholder="Last Name" value="Navrang" class="form-input" />
                        <input type="text" name="location" placeholder="e.g. Houston, TX" class="form-input" />
                        <input type="email" name="email" placeholder="you@example.com" value="nileshnavrang7@gmail.com"
                            class="form-input" />
                    </div>
                </section>

                <!-- Job Preferences -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Job preferences</h3>
                    <p class="text-sm text-gray-500 mb-4">Tell us about the job you want. We use this info to recommend the
                        best jobs for you.</p>

                    <div class="mb-5 p-4 border rounded-lg bg-gray-50">
                        <label class="block text-sm font-medium text-gray-700 mb-1">🎯 Target Role:</label>
                        <input type="text" name="target_role" placeholder="Job Title" class="form-input w-full" />
                        <p class="text-xs text-gray-500 mt-1">Similar jobs may have different titles. Add up to 5 to get
                            more recommendations.</p>
                    </div>

                    <div class="p-4 border rounded-lg bg-gray-50">
                        <label class="block text-sm font-medium text-gray-700 mb-1">📍 Selected Location:</label>
                        <input type="text" name="preferred_location" placeholder="e.g. London"
                            class="form-input w-full" />
                        <p class="text-xs text-gray-500 mt-1">Add up to 5 locations</p>
                    </div>
                </section>

                <!-- Work Experience -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Work experience</h3>
                    <p class="text-sm text-gray-500 mb-4">Show your relevant experience (last 10 years). Use bullet points
                        to describe achievements.</p>
                    <a href="#" class="text-blue-600 text-sm font-medium hover:underline">+ Add employment</a>
                </section>

                <!-- Education -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Education</h3>
                    <p class="text-sm text-gray-500 mb-4">A varied education sums up the value that your background will
                        bring to a job.</p>
                    <a href="#" class="text-blue-600 text-sm font-medium hover:underline">+ Add education</a>
                </section>

                <!-- Skills -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Skills</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach (['Time Management', 'Highly responsible and reliable', 'Adaptability', 'Analytical Thinking', 'Collaboration & Teamwork', 'Good team player', 'Creative Problem Solving'] as $skill)
                            <span
                                class="bg-gray-100 text-sm px-3 py-1 rounded-full text-gray-700 border">{{ $skill }}
                                <span class="text-gray-400 ml-1">+</span></span>
                        @endforeach
                    </div>
                    <a href="#" class="text-blue-600 text-sm font-medium mt-3 inline-block hover:underline">+ Add
                        skill</a>
                </section>

                <!-- Courses -->
                <section class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Courses</h3>
                    <a href="#" class="text-blue-600 text-sm font-medium hover:underline">+ Add course</a>
                </section>

                <!-- Buttons -->
                <div class="flex justify-end space-x-3 pt-6 border-t mt-6">
                    <button type="button"
                        class="px-6 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-100">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>

        <!-- Input Styles -->
        <style>
            .form-input {
                @apply bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300;
            }
        </style>

    </div>

    <style>
        .input-style {
            @apply w-full px-4 py-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white;
        }
    </style>
@endsection
