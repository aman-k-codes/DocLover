@extends('sw.layout.master')

@section('title', 'Resume Builder Panel | CraftMyDoc')
@section('meta_description',
    'Create your resume interactively with sections, input forms, and live PDF preview using
    our resume builder.')
@section('meta_keywords', 'Resume Builder, Online Resume Maker, Interactive Resume Panel, Build Resume, Resume Preview')
@php
    // dd(Cache::get('resume_data', 'default'));
    $Skills = Cache::get('resume_data', 'default')['skills'] ?? [];
@endphp
@section('content')
    <div class="flex">

        <!-- Main Content -->
        <div class="w-full md:w-4/5 mx-auto p-2 md:p-10 bg-white">
            <form method="POST" action="{{ route('resume.collectAllData') }}" enctype="multipart/form-data">
                @csrf
                <!-- Personal Info -->
                <section id="personal-info" class="mb-12 bg-white p-6 rounded-xl border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fas fa-id-card text-blue-500"></i>
                        Personal Details
                    </h3>

                    <div class="flex items-center gap-6 mb-6">
                        <div id="dropZone"
                            class="w-24 h-24 bg-gray-100 border rounded-full flex items-center justify-center shadow-sm overflow-hidden cursor-pointer"
                            ondragover="handleDragOver(event)" ondrop="handleDrop(event)">
                            <img id="photoPreview"
                                src="{{ Cache::get('photo', null) ? asset('public/uploads/' . Cache::get('photo', null)) : '' }}"
                                alt="Preview" class="w-full h-full object-cover hidden" />
                            <i id="defaultIcon" class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <div>
                            <label for="photoUpload"
                                class="text-sm font-medium text-blue-600 cursor-pointer hover:underline">
                                Upload Photo
                            </label>
                            <input type="file" id="photoUpload" name="photo" accept="image/*" class="hidden"
                                onchange="previewPhoto(this)" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- First Name -->
                        <div>
                            <label for="first_name" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-user text-gray-500"></i> First Name
                            </label>
                            <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                value="{{ Cache::get('resume_data', 'default')['first_name'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="last_name" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-user text-gray-500"></i> Last Name
                            </label>
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                                value="{{ Cache::get('resume_data', 'default')['last_name'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Designation -->
                        <div>
                            <label for="designation" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-briefcase text-gray-500"></i> Designation
                            </label>
                            <input type="text" name="designation" id="designation" placeholder="Designation"
                                value="{{ Cache::get('resume_data', 'default')['designation'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Location -->
                        <div>
                            <label for="location" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-location-dot text-gray-500"></i> Location
                            </label>
                            <input type="text" name="location" id="location" placeholder="e.g. Houston, TX"
                                value="{{ Cache::get('resume_data', 'default')['location'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-envelope text-gray-500"></i> Email
                            </label>
                            <input type="email" name="email" id="email" placeholder="you@example.com"
                                value="{{ Cache::get('resume_data', 'default')['email'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-phone text-gray-500"></i> Phone
                            </label>
                            <input type="text" name="phone" id="phone" placeholder="+91-123456789"
                                value="{{ Cache::get('resume_data', 'default')['phone'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>

                        <!-- Website -->
                        <div>
                            <label for="website" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fas fa-globe text-gray-500"></i> Website
                            </label>
                            <input type="text" name="website" id="website" placeholder="www.example.com"
                                value="{{ Cache::get('resume_data', 'default')['website'] ?? '' }}"
                                class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        </div>
                    </div>

                </section>

                <script>
                    function previewPhoto(input) {
                        const file = input.files[0];
                        const reader = new FileReader();
                        const preview = document.getElementById('photoPreview');
                        const icon = document.getElementById('defaultIcon');

                        if (file) {
                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                preview.classList.remove('hidden');
                                icon.classList.add('hidden');
                            };
                            reader.readAsDataURL(file);
                        }
                    }

                    function handleDragOver(event) {
                        event.preventDefault(); // Prevent the default behavior to allow drop
                        const dropZone = document.getElementById('dropZone');
                        dropZone.classList.add('bg-gray-200'); // Change background on drag over
                    }

                    function handleDrop(event) {
                        event.preventDefault();
                        const dropZone = document.getElementById('dropZone');
                        dropZone.classList.remove('bg-gray-200'); // Reset background

                        const file = event.dataTransfer.files[0];
                        if (file && file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            const preview = document.getElementById('photoPreview');
                            const icon = document.getElementById('defaultIcon');

                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                preview.classList.remove('hidden');
                                icon.classList.add('hidden');
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                </script>

                <section id="summary" class="mb-12 bg-white p-6 rounded-xl border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-align-left text-blue-500"></i> Summary
                    </h3>
                    <textarea rows="5" name='summary' placeholder="Write a brief professional summary..."
                        class="form-textarea w-full text-sm resize-none rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700">{{ Cache::get('resume_data', 'default')['summary'] ?? '' }}</textarea>
                </section>


                <section id="job-preferences" class="mb-12 bg-white p-8 rounded-xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-briefcase text-blue-600"></i> Job Preferences
                    </h3>
                    <p class="text-sm text-gray-600 mb-6">
                        Tell us about the job you want. We use this info to recommend the best jobs for you.
                    </p>

                    <!-- Target Roles -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-bullseye mr-1 text-gray-500"></i> Target Roles:
                        </label>
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['target_role'] as $role)
                                @if ($role)
                                    <div id="targetRolesContainer" class="space-y-4 mt-2">
                                        <input type="text" name="target_role[]" placeholder="Job Title"
                                            value="{{ $role }}"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div id="targetRolesContainer"
                            class="space-y-4 w-full py-2
                                                focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2">
                            <input type="text" name="target_role[]" placeholder="Job Title"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                        </div>
                        <button type="button" onclick="addTargetRole()"
                            class="mt-2 text-sm text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                            + Add another role
                        </button>
                        <p class="text-xs text-gray-500 mt-1">Add up to 5 roles to improve recommendations.</p>
                    </div>

                    <!-- Preferred Locations -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-map-marker-alt mr-1 text-gray-500"></i> Preferred Locations:
                        </label>
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['preferred_location'] as $location)
                                @if ($location)
                                    <div id="preferredLocationsContainer" class="space-y-4 mt-2">
                                        <input type="text" name="preferred_location[]" placeholder="e.g. London"
                                            value="{{ $location }}"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div id="preferredLocationsContainer"
                            class="space-y-4 w-full py-2
                                                focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2">
                            <input type="text" name="preferred_location[]" placeholder="e.g. London"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                        </div>
                        <button type="button" onclick="addPreferredLocation()"
                            class="mt-2 text-sm text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                            + Add another location
                        </button>
                        <p class="text-xs text-gray-500 mt-1">You can specify up to 5 preferred locations.</p>
                    </div>
                </section>

                <script>
                    function addTargetRole() {
                        const container = document.getElementById('targetRolesContainer');
                        const newInput = document.createElement('input');
                        newInput.type = 'text';
                        newInput.name = 'target_role[]';
                        newInput.placeholder = 'Job Title';
                        newInput.classList.add('w-full', 'px-4', 'py-2', 'border', 'border-gray-300', 'rounded-lg',
                            'focus:outline-none', 'focus:ring-2', 'focus:ring-blue-500', 'text-gray-700', 'mt-2');
                        container.appendChild(newInput);
                    }

                    function addPreferredLocation() {
                        const container = document.getElementById('preferredLocationsContainer');
                        const newInput = document.createElement('input');
                        newInput.type = 'text';
                        newInput.name = 'preferred_location[]';
                        newInput.placeholder = 'e.g. London';
                        newInput.classList.add('w-full', 'px-4', 'py-2', 'border', 'border-gray-300', 'rounded-lg',
                            'focus:outline-none', 'focus:ring-2', 'focus:ring-blue-500', 'text-gray-700', 'mt-2');
                        container.appendChild(newInput);
                    }
                </script>

                <!-- Work Experience -->
                <section id="experience" class="mb-12 bg-white p-8 rounded-xl border border-gray-200" id="experience">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-briefcase text-blue-600"></i> Work Experience
                    </h3>
                    <p class="text-sm text-gray-600 mb-6">
                        Highlight your professional background. Focus on achievements and responsibilities.
                    </p>

                    <div id="experienceContainer" class="space-y-6">
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['company'] as $key => $item)
                                @if ($item)
                                    <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Company</label>
                                                <input type="text" name="company[]" placeholder="Company Name"
                                                    value="{{ Cache::get('resume_data', 'default')['company'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Job Title</label>
                                                <input type="text" name="role[]" placeholder="Job Title"
                                                    value="{{ Cache::get('resume_data', 'default')['role'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Start Date</label>
                                                <input type="text" name="start_date[]" placeholder="e.g. Jan 2020"
                                                    value="{{ Cache::get('resume_data', 'default')['start_date'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">End Date</label>
                                                <input type="text" name="end_date[]" placeholder="e.g. Present"
                                                    value="{{ Cache::get('resume_data', 'default')['end_date'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Responsibilities /
                                                Achievements</label>
                                            <textarea name="description[]" rows="3" placeholder="Describe your role..."
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2">{{ Cache::get('resume_data', 'default')['description'][$key] }}</textarea>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Company</label>
                                    <input type="text" name="company[]" placeholder="Company Name"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Job Title</label>
                                    <input type="text" name="role[]" placeholder="Job Title"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Date</label>
                                    <input type="text" name="start_date[]" placeholder="e.g. Jan 2020"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Date</label>
                                    <input type="text" name="end_date[]" placeholder="e.g. Present"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Responsibilities / Achievements</label>
                                <textarea name="description[]" rows="3" placeholder="Describe your role..."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addExperience()"
                        class="mt-4 inline-block text-sm text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        + Add another job
                    </button>
                </section>

                <script>
                    function addExperience() {
                        const container = document.getElementById('experienceContainer');
                        if (container.children.length >= 5) {
                            alert('You can only add up to 5 work experience entries.');
                            return;
                        }

                        const block = document.createElement('div');
                        block.className = 'rounded-lg bg-blue-50/10 shadow-sm relative';

                        block.innerHTML = `
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Company</label>
                                                        <input type="text" name="company[]" placeholder="Company Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Job Title</label>
                                                        <input type="text" name="role[]" placeholder="Job Title" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Start Date</label>
                                                        <input type="text" name="start_date[]" placeholder="e.g. Jan 2020" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">End Date</label>
                                                        <input type="text" name="end_date[]" placeholder="e.g. Present" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="text-sm font-medium text-gray-700">Responsibilities / Achievements</label>
                                                    <textarea name="description[]" rows="3" placeholder="Describe your role..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
                                                </div>
                                            `;

                        container.appendChild(block);
                    }
                </script>


                <section id="education" class="mb-12 bg-white p-8 rounded-xl border border-gray-200" id="education">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-graduation-cap text-blue-600"></i> Education
                    </h3>
                    <p class="text-sm text-gray-600 mb-6">List your degrees and academic highlights.</p>

                    <div id="educationContainer" class="space-y-6">
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['institute'] as $key => $item)
                                @if ($item)
                                    <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Institute /
                                                    University</label>
                                                <input type="text" name="institute[]"
                                                    placeholder="e.g. ABC University"
                                                    value="{{ Cache::get('resume_data', 'default')['institute'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Degree / Program</label>
                                                <input type="text" name="degree[]"
                                                    placeholder="e.g. B.Sc. Computer Science"
                                                    value="{{ Cache::get('resume_data', 'default')['degree'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Start Year</label>
                                                <input type="number" name="start_year[]" placeholder="e.g. 2018"
                                                    value="{{ Cache::get('resume_data', 'default')['start_year'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">End Year</label>
                                                <input type="number" name="end_year[]" placeholder="e.g. 2022"
                                                    value="{{ Cache::get('resume_data', 'default')['end_year'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Coursework /
                                                Highlights</label>
                                            <textarea name="edu_description[]" rows="3" placeholder="Mention honors, GPA, etc."
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2">{{ Cache::get('resume_data', 'default')['edu_description'][$key] }}</textarea>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Institute / University</label>
                                    <input type="text" name="institute[]" placeholder="e.g. ABC University"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Degree / Program</label>
                                    <input type="text" name="degree[]" placeholder="e.g. B.Sc. Computer Science"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Year</label>
                                    <input type="number" name="start_year[]" placeholder="e.g. 2018"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Year</label>
                                    <input type="number" name="end_year[]" placeholder="e.g. 2022"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Coursework / Highlights</label>
                                <textarea name="edu_description[]" rows="3" placeholder="Mention honors, GPA, etc."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addEducation()"
                        class="mt-4 inline-block text-sm text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        + Add another degree
                    </button>
                </section>

                <script>
                    function addEducation() {
                        const container = document.getElementById('educationContainer');
                        if (container.children.length >= 5) {
                            alert('You can only add up to 5 education entries.');
                            return;
                        }

                        const block = document.createElement('div');
                        block.className = 'rounded-lg bg-blue-50/10 shadow-sm relative';

                        block.innerHTML = `
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Institute / University</label>
                                                        <input type="text" name="institute[]" placeholder="e.g. ABC University" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Degree / Program</label>
                                                        <input type="text" name="degree[]" placeholder="e.g. B.Sc. Computer Science" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Start Year</label>
                                                        <input type="number" name="start_year[]" placeholder="e.g. 2018" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">End Year</label>
                                                        <input type="number" name="end_year[]" placeholder="e.g. 2022" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="text-sm font-medium text-gray-700">Coursework / Highlights</label>
                                                    <textarea name="edu_description[]" rows="3" placeholder="Mention honors, GPA, etc." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
                                                </div>
                                            `;

                        container.appendChild(block);
                    }
                </script>

                <!-- Skills -->
                <section id="skills" class="mb-12 bg-white p-6 rounded-2xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-3">
                        <i class="fas fa-tools text-blue-600"></i>
                        Skills
                    </h3>

                    <div id="skillsContainer" class="flex flex-wrap gap-3 mt-2">
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach ($Skills as $key => $skill)
                                <span
                                    class="bg-blue-50 text-sm px-4 py-1.5 rounded-full text-blue-800 border border-blue-200 flex items-center gap-2 shadow-sm hover transition">
                                    <i class="fas fa-check-circle text-blue-400 text-xs"></i>
                                    {{ $skill }}
                                    <button type="button" onclick="this.parentElement.remove()"
                                        class="text-blue-400 hover:text-red-500 focus:outline-none">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                    <input type="text" name="skills[]" value="{{ $skill }}" hidden>
                                </span>
                            @endforeach
                        @endif
                    </div>

                    <div class="mt-6 flex flex-col sm:flex-row items-start sm:items-center gap-3">
                        <input type="text" id="newSkillInput" placeholder="Type a skill and hit add"
                            class="form-input w-full sm:w-72 text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 transition" />
                        <button type="button" onclick="addSkill()"
                            class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-5 py-2 rounded-lg transition shadow-sm">
                            + Add Skill
                        </button>
                    </div>
                </section>

                <script>
                    function addSkill() {
                        const input = document.getElementById('newSkillInput');
                        const value = input.value.trim();
                        if (!value) return;

                        const container = document.getElementById('skillsContainer');
                        if (container.children.length >= 10) {
                            alert('You can only add up to 10 skills.');
                            return;
                        }

                        const span = document.createElement('span');
                        span.className =
                            'bg-blue-50 text-sm px-4 py-1.5 rounded-full text-blue-800 border border-blue-200 flex items-center gap-2 shadow-sm hover transition';
                        span.innerHTML = `<i class="fas fa-check-circle text-blue-400 text-xs"></i> ${value}
                                                <button type="button" onclick="this.parentElement.remove()" class="text-blue-400 hover:text-red-500 focus:outline-none">
                                                    <i class="fas fa-times-circle"></i>
                                                </button>
                                                <input type="text" name="skills[]" value="${value}" hidden>`;

                        container.appendChild(span);
                        input.value = '';
                    }
                </script>


                <!-- Projects -->
                <section id="projects" class="mb-12 bg-white p-8 rounded-xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-project-diagram text-blue-600"></i> Projects
                    </h3>
                    <p class="text-sm text-gray-600 mb-6">
                        Share key projects you’ve worked on. Focus on objectives, technologies, and impact.
                    </p>

                    <div id="projectsContainer" class="space-y-6">
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['project_title'] as $key => $item)
                                @if ($item)
                                    <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Project Title</label>
                                                <input type="text" name="project_title[]" placeholder="Project Title"
                                                    value="{{ Cache::get('resume_data', 'default')['project_title'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                            <div>
                                                <label class="text-sm font-medium text-gray-700">Tech Stack</label>
                                                <input type="text" name="tech_stack[]"
                                                    placeholder="e.g. Laravel, React, MySQL"
                                                    value="{{ Cache::get('resume_data', 'default')['tech_stack'][$key] }}"
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Project Description</label>
                                            <textarea name="project_description[]" rows="3" placeholder="Briefly describe the project..."
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2">{{ Cache::get('resume_data', 'default')['project_description'][$key] }}</textarea>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        <div class="rounded-lg bg-blue-50/10 shadow-sm relative">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Project Title</label>
                                    <input type="text" name="project_title[]" placeholder="Project Title"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Tech Stack</label>
                                    <input type="text" name="tech_stack[]" placeholder="e.g. Laravel, React, MySQL"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Project Description</label>
                                <textarea name="project_description[]" rows="3" placeholder="Briefly describe the project..."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addProject()"
                        class="mt-4 inline-block text-sm text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        + Add another project
                    </button>
                </section>

                <script>
                    function addProject() {
                        const container = document.getElementById('projectsContainer');
                        if (container.children.length >= 5) {
                            alert('You can only add up to 5 projects.');
                            return;
                        }

                        const block = document.createElement('div');
                        block.className = 'rounded-lg bg-blue-50/10 shadow-sm relative';

                        block.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                <div>
                    <label class="text-sm font-medium text-gray-700">Project Title</label>
                    <input type="text" name="project_title[]" placeholder="Project Title"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-700">Tech Stack</label>
                    <input type="text" name="tech_stack[]" placeholder="e.g. Laravel, React, MySQL"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                </div>
            </div>
            <div>
                <label class="text-sm font-medium text-gray-700">Project Description</label>
                <textarea name="project_description[]" rows="3" placeholder="Briefly describe the project..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 mt-2"></textarea>
            </div>
        `;

                        container.appendChild(block);
                    }
                </script>


                <!-- Courses -->
                <section id="courses" class="mb-12 bg-white p-6 rounded-2xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-3">
                        <i class="fas fa-book-reader text-indigo-600"></i> Courses
                    </h3>

                    <div id="coursesContainer" class="space-y-4 mt-2">
                        <!-- Course entries will be appended here -->

                        @if (!blank(Cache::get('resume_data', [])) )
                            @foreach (Cache::get('resume_data', 'default')['courseTitle'] ?? [] as $key => $item)
                                @if ($item)
                                    <div
                                        class="bg-indigo-50 border border-indigo-200 rounded-lg p-4 shadow-sm transition space-y-1">
                                        <div class="flex justify-between items-center">
                                            <span
                                                class="text-sm font-semibold text-indigo-800">{{ Cache::get('resume_data', 'default')['courseTitle'][$key] }}</span>
                                            <input type="text" id="" name="courseTitle[]"
                                                value="{{ Cache::get('resume_data', 'default')['courseTitle'][$key] }}"
                                                hidden>
                                            <button type="button" onclick="this.closest('div').remove()"
                                                class="text-indigo-400 hover:text-red-500 transition text-sm focus:outline-none">
                                                <i class="fas fa-times-circle"></i>
                                            </button>
                                        </div>
                                        <div class="text-xs text-gray-600"><input type="text" id=""
                                                name="coursePlatform[]"
                                                value="{{ Cache::get('resume_data', 'default')['coursePlatform'][$key] }}"
                                                hidden><strong>Platform:</strong>{{ Cache::get('resume_data', 'default')['coursePlatform'][$key] }}
                                        </div>
                                        <div class="text-xs text-gray-600"><input type="text" id=""
                                                name="courseDuration[]"
                                                value="{{ Cache::get('resume_data', 'default')['courseDuration'][$key] }}"
                                                hidden><strong>Duration:</strong>{{ Cache::get('resume_data', 'default')['courseDuration'][$key] }}
                                        </div>
                                        <div class="text-xs text-gray-600"><input type="text" id=""
                                                name="courseDescription[]"
                                                value="{{ Cache::get('resume_data', 'default')['courseDescription'][$key] }}"
                                                hidden><strong>Description:</strong>{{ Cache::get('resume_data', 'default')['courseDescription'][$key] }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    <!-- Input Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                        <input type="text" id="courseTitle" placeholder="Course Title"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                        <input type="text" id="coursePlatform" placeholder="Platform (e.g., Coursera, Udemy)"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                        <input type="text" id="courseDuration" placeholder="Duration (e.g., 6 weeks)"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                        <input type="text" id="courseDescription" placeholder="Short Description"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700" />
                    </div>

                    <!-- Add Button -->
                    <div class="mt-4">
                        <button type="button" onclick="addCourse()"
                            class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-5 py-2 rounded-lg transition shadow-sm">
                            <i class="fas fa-plus mr-1"></i> Add Course
                        </button>
                    </div>
                </section>

                <script>
                    function addCourse() {
                        const title = document.getElementById('courseTitle').value.trim();
                        const platform = document.getElementById('coursePlatform').value.trim();
                        const duration = document.getElementById('courseDuration').value.trim();
                        const description = document.getElementById('courseDescription').value.trim();

                        if (!title) {
                            alert("Course title is required.");
                            return;
                        }

                        const container = document.getElementById('coursesContainer');
                        if (container.children.length >= 5) {
                            alert('You can only add up to 5 courses.');
                            return;
                        }

                        const div = document.createElement('div');
                        div.className = 'bg-indigo-50 border border-indigo-200 rounded-lg p-4 shadow-sm transition space-y-1';

                        div.innerHTML = `
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-indigo-800">${title}</span>
                                    <input type="text" id="" name="courseTitle[]" value="${title}" hidden>
                                    <button type="button" onclick="this.closest('div').remove()" class="text-indigo-400 hover:text-red-500 transition text-sm focus:outline-none">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </div>
                                ${platform ? `<div class="text-xs text-gray-600"><input type="text" id="" name="coursePlatform[]" value="${platform}" hidden><strong>Platform:</strong> ${platform}</div>` : ''}
                                ${duration ? `<div class="text-xs text-gray-600"><input type="text" id="" name="courseDuration[]" value="${duration}" hidden><strong>Duration:</strong> ${duration}</div>` : ''}
                                ${description ? `<div class="text-xs text-gray-600"><input type="text" id="" name="courseDescription[]" value="${description}" hidden><strong>Description:</strong> ${description}</div>` : ''}
                            `;

                        container.appendChild(div);

                        // Clear inputs
                        document.getElementById('courseTitle').value = '';
                        document.getElementById('coursePlatform').value = '';
                        document.getElementById('courseDuration').value = '';
                        document.getElementById('courseDescription').value = '';
                    }
                </script>

                <!-- Awards -->
                <section id="awards" class="mb-12 bg-white p-6 rounded-2xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-3">
                        <i class="fas fa-trophy text-yellow-500"></i> Awards
                    </h3>

                    <div id="awardsContainer" class="space-y-4 mt-2">
                        @if (!blank(Cache::get('resume_data', [])))
                            @foreach (Cache::get('resume_data', 'default')['awardTitle'] ?? [] as $key => $item)
                                @if ($item)
                                    <div
                                        class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 shadow-sm transition space-y-1">
                                        <div class="flex justify-between items-center">
                                            <span class="text-sm font-semibold text-yellow-800">
                                                {{ $item }}
                                            </span>
                                            <input type="text" name="awardTitle[]" value="{{ $item }}"
                                                hidden>
                                            <button type="button" onclick="this.closest('div').remove()"
                                                class="text-yellow-400 hover:text-red-500 transition text-sm focus:outline-none">
                                                <i class="fas fa-times-circle"></i>
                                            </button>
                                        </div>
                                        <div class="text-xs text-gray-600">
                                            <input type="text" name="awardInstitute[]"
                                                value="{{ Cache::get('resume_data')['awardInstitute'][$key] ?? '' }}"
                                                hidden>
                                            <strong>Institute:</strong>
                                            {{ Cache::get('resume_data')['awardInstitute'][$key] ?? '' }}
                                        </div>
                                        <div class="text-xs text-gray-600">
                                            <input type="text" name="awardDate[]"
                                                value="{{ Cache::get('resume_data')['awardDate'][$key] ?? '' }}" hidden>
                                            <strong>Date:</strong> {{ Cache::get('resume_data')['awardDate'][$key] ?? '' }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    <!-- Input Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
                        <input type="text" id="awardTitle" placeholder="Award Title"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 text-gray-700" />
                        <input type="text" id="awardInstitute" placeholder="Institute"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 text-gray-700" />
                        <input type="text" id="awardDate" placeholder="Date (e.g., June 2023)"
                            class="form-input text-sm px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 text-gray-700" />
                    </div>

                    <!-- Add Button -->
                    <div class="mt-4">
                        <button type="button" onclick="addAward()"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm px-5 py-2 rounded-lg transition shadow-sm">
                            <i class="fas fa-plus mr-1"></i> Add Award
                        </button>
                    </div>
                </section>

                <script>
                    function addAward() {
                        const title = document.getElementById('awardTitle').value.trim();
                        const institute = document.getElementById('awardInstitute').value.trim();
                        const date = document.getElementById('awardDate').value.trim();

                        if (!title) {
                            alert("Award title is required.");
                            return;
                        }

                        const container = document.getElementById('awardsContainer');
                        if (container.children.length >= 5) {
                            alert('You can only add up to 5 awards.');
                            return;
                        }

                        const div = document.createElement('div');
                        div.className = 'bg-yellow-50 border border-yellow-200 rounded-lg p-4 shadow-sm transition space-y-1';

                        div.innerHTML = `
            <div class="flex justify-between items-center">
                <span class="text-sm font-semibold text-yellow-800">${title}</span>
                <input type="text" name="awardTitle[]" value="${title}" hidden>
                <button type="button" onclick="this.closest('div').remove()" class="text-yellow-400 hover:text-red-500 transition text-sm focus:outline-none">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            ${institute ? `<div class="text-xs text-gray-600"><input type="text" name="awardInstitute[]" value="${institute}" hidden><strong>Institute:</strong> ${institute}</div>` : ''}
            ${date ? `<div class="text-xs text-gray-600"><input type="text" name="awardDate[]" value="${date}" hidden><strong>Date:</strong> ${date}</div>` : ''}
        `;

                        container.appendChild(div);

                        // Clear inputs
                        document.getElementById('awardTitle').value = '';
                        document.getElementById('awardInstitute').value = '';
                        document.getElementById('awardDate').value = '';
                    }
                </script>


                <section id="social-media" class="mb-12 bg-white p-8 rounded-xl border border-gray-200">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-3">
                        <i class="fas fa-share-alt text-blue-600"></i>
                        Social Media Links
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- LinkedIn URL -->
                        <div>
                            <label for="linkedin" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fab fa-linkedin text-blue-700"></i> LinkedIn
                            </label>
                            <input type="url" name="linkedin" id="linkedin"
                                value="{{ !blank(Cache::get('resume_data', [])) ? Cache::get('resume_data', 'default')['linkedin'] : '' }}"
                                placeholder="https://www.linkedin.com/in/yourname"
                                class="w-full mt-2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 shadow-sm transition-all hover:border-blue-300" />
                        </div>

                        <!-- Twitter URL -->
                        <div>
                            <label for="twitter" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fab fa-twitter text-sky-500"></i> Twitter
                            </label>
                            <input type="url" name="twitter" id="twitter"
                                value="{{ Cache::get('resume_data', []) ? Cache::get('resume_data', 'default')['twitter'] : '' }}"
                                placeholder="https://twitter.com/yourhandle"
                                class="w-full mt-2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 shadow-sm transition-all hover:border-blue-300" />
                        </div>

                        <!-- Facebook URL -->
                        <div>
                            <label for="facebook" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fab fa-facebook text-blue-600"></i> Facebook
                            </label>
                            <input type="url" name="facebook" id="facebook"
                                value="{{ Cache::get('resume_data', []) ? Cache::get('resume_data', 'default')['facebook'] : '' }}"
                                placeholder="https://facebook.com/yourprofile"
                                class="w-full mt-2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 shadow-sm transition-all hover:border-blue-300" />
                        </div>

                        <!-- Instagram URL -->
                        <div>
                            <label for="instagram" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fab fa-instagram text-pink-500"></i> Instagram
                            </label>
                            <input type="url" name="instagram" id="instagram"
                                value="{{ Cache::get('resume_data', []) ? Cache::get('resume_data', 'default')['instagram'] : '' }}"
                                placeholder="https://www.instagram.com/yourhandle"
                                class="w-full mt-2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 shadow-sm transition-all hover:border-blue-300" />
                        </div>

                        <!-- GitHub URL -->
                        <div>
                            <label for="github" class="text-sm font-medium text-gray-600 flex items-center gap-2">
                                <i class="fab fa-github text-gray-800"></i> GitHub
                            </label>
                            <input type="url" name="github" id="github"
                                value="{{ Cache::get('resume_data', []) ? Cache::get('resume_data', 'default')['github'] : '' }}"
                                placeholder="https://github.com/yourusername"
                                class="w-full mt-2 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800 shadow-sm transition-all hover:border-blue-300" />
                        </div>
                    </div>
                </section>



                <!-- Buttons -->
                <div class="flex justify-center md:justify-end space-x-3 pt-6 border-t mt-6">
                    <button type="button"
                        class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">Cancel</button>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Build</button>
                </div>
            </form>
        </div>

        <!-- Input Styles -->
        <style>
            .form-input {
                @apply bg-gray-100 border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300;
            }
        </style>

    </div>

    <style>
        .input-style {
            @apply w-full px-4 py-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white;
        }
    </style>


    <script>
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80, // adjust offset as needed
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

@endsection
