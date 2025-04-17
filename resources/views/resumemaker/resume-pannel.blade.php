@extends('sw.layout.master')

@section('title', 'Resume Builder Panel | DocLover')
@section('meta_description',
    'Create your resume interactively with sections, input forms, and live PDF preview using
    our resume builder.')
@section('meta_keywords', 'Resume Builder, Online Resume Maker, Interactive Resume Panel, Build Resume, Resume Preview')

@section('content')
    <div class="flex">

        <!-- Sidebar Tabs -->
        <div class="w-1/5 bg-white border-r p-6 shadow-sm">
            <h3 class="text-lg font-semibold mb-6 text-gray-800 flex items-center gap-2">
                <i class="fas fa-edit text-blue-500"></i> Edit Sections
            </h3>
            <ul class="space-y-2 text-sm text-gray-700">
                <li>
                    <a href="#personal-info"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-user text-gray-400 w-4"></i> Personal Details
                    </a>
                </li>
                <li>
                    <a href="#job-preferences"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-briefcase text-gray-400 w-4"></i> Job Preferences
                    </a>
                </li>
                <li>
                    <a href="#experience"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-building text-gray-400 w-4"></i> Work Experience
                    </a>
                </li>
                <li>
                    <a href="#education"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-graduation-cap text-gray-400 w-4"></i> Education
                    </a>
                </li>
                <li>
                    <a href="#skills"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-tools text-gray-400 w-4"></i> Skills
                    </a>
                </li>
                <li>
                    <a href="#courses"
                        class="flex items-center gap-2 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition">
                        <i class="fas fa-book text-gray-400 w-4"></i> Courses
                    </a>
                </li>
            </ul>
        </div>


        <!-- Main Content -->
        <div class="w-4/5 mx-auto p-10 bg-white">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-semibold text-gray-900">Edit My Career Profile</h2>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Account Settings</a>
            </div>

            <form method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Personal Info -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fas fa-id-card text-blue-500"></i>
                        Personal Details
                    </h3>

                    <div class="flex items-center gap-6 mb-6">
                        <div class="w-24 h-24 bg-gray-100 border rounded-full flex items-center justify-center shadow-sm">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-blue-600 cursor-pointer hover:underline">
                                Upload Photo
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="first_name" placeholder="First Name" value="Nilesh"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        <input type="text" name="last_name" placeholder="Last Name" value="Navrang"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        <input type="text" name="location" placeholder="e.g. Houston, TX"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                        <input type="email" name="email" placeholder="you@example.com" value="nileshnavrang7@gmail.com"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800" />
                    </div>
                </section>


                <!-- Job Preferences -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-briefcase text-blue-500"></i> Job Preferences
                    </h3>
                    <p class="text-sm text-gray-500 mb-6">
                        Tell us about the job you want. We use this info to recommend the best jobs for you.
                    </p>

                    <!-- Target Roles -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-bullseye mr-1 text-gray-500"></i> Target Roles:
                        </label>
                        <div id="targetRolesContainer" class="space-y-2">
                            <input type="text" name="target_role[]" placeholder="Job Title" class="form-input w-full" />
                        </div>
                        <button type="button" onclick="addTargetRole()" class="mt-2 text-sm text-blue-600 hover:underline">
                            + Add another role
                        </button>
                        <p class="text-xs text-gray-500 mt-1">Add up to 5 roles to improve recommendations.</p>
                    </div>

                    <!-- Preferred Locations -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-map-marker-alt mr-1 text-gray-500"></i> Preferred Locations:
                        </label>
                        <div id="preferredLocationsContainer" class="space-y-2">
                            <input type="text" name="preferred_location[]" placeholder="e.g. London"
                                class="form-input w-full" />
                        </div>
                        <button type="button" onclick="addPreferredLocation()"
                            class="mt-2 text-sm text-blue-600 hover:underline">
                            + Add another location
                        </button>
                        <p class="text-xs text-gray-500 mt-1">You can specify up to 5 preferred locations.</p>
                    </div>
                </section>


                <!-- Work Experience -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border" id="experience">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-briefcase text-blue-500"></i> Work Experience
                    </h3>
                    <p class="text-sm text-gray-500 mb-6">
                        Highlight your professional background. Focus on achievements and responsibilities.
                    </p>

                    <div id="experienceContainer" class="space-y-6">
                        <div class="border border-blue-100 rounded-lg p-5 bg-blue-50/10 shadow-sm relative">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Company</label>
                                    <input type="text" name="company[]" placeholder="Company Name" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Job Title</label>
                                    <input type="text" name="role[]" placeholder="Job Title" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Date</label>
                                    <input type="text" name="start_date[]" placeholder="e.g. Jan 2020" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Date</label>
                                    <input type="text" name="end_date[]" placeholder="e.g. Present" class="form-input mt-1 w-full" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Responsibilities / Achievements</label>
                                <textarea name="description[]" rows="3" placeholder="Describe your role..." class="form-textarea mt-1 w-full"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addExperience()" class="mt-4 inline-block text-sm text-blue-600 hover:underline">
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
                        block.className = 'border border-blue-100 rounded-lg p-5 bg-blue-50/10 shadow-sm relative';

                        block.innerHTML = `
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Company</label>
                                    <input type="text" name="company[]" placeholder="Company Name" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Job Title</label>
                                    <input type="text" name="role[]" placeholder="Job Title" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Date</label>
                                    <input type="text" name="start_date[]" placeholder="e.g. Jan 2020" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Date</label>
                                    <input type="text" name="end_date[]" placeholder="e.g. Present" class="form-input mt-1 w-full" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Responsibilities / Achievements</label>
                                <textarea name="description[]" rows="3" placeholder="Describe your role..." class="form-textarea mt-1 w-full"></textarea>
                            </div>
                        `;

                        container.appendChild(block);
                    }
                    </script>


                <!-- Education -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border" id="education">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-graduation-cap text-blue-500"></i> Education
                    </h3>
                    <p class="text-sm text-gray-500 mb-6">List your degrees and academic highlights.</p>

                    <div id="educationContainer" class="space-y-6">
                        <div class="border border-indigo-100 rounded-lg p-5 bg-indigo-50/10 shadow-sm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Institute / University</label>
                                    <input type="text" name="institute[]" placeholder="e.g. ABC University" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Degree / Program</label>
                                    <input type="text" name="degree[]" placeholder="e.g. B.Sc. Computer Science" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Year</label>
                                    <input type="text" name="start_year[]" placeholder="e.g. 2018" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Year</label>
                                    <input type="text" name="end_year[]" placeholder="e.g. 2022" class="form-input mt-1 w-full" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Coursework / Highlights</label>
                                <textarea name="edu_description[]" rows="3" placeholder="Mention honors, GPA, etc." class="form-textarea mt-1 w-full"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="addEducation()" class="mt-4 inline-block text-sm text-blue-600 hover:underline">
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
                        block.className = 'border border-indigo-100 rounded-lg p-5 bg-indigo-50/10 shadow-sm';

                        block.innerHTML = `
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Institute / University</label>
                                    <input type="text" name="institute[]" placeholder="e.g. ABC University" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Degree / Program</label>
                                    <input type="text" name="degree[]" placeholder="e.g. B.Sc. Computer Science" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Start Year</label>
                                    <input type="text" name="start_year[]" placeholder="e.g. 2018" class="form-input mt-1 w-full" />
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700">End Year</label>
                                    <input type="text" name="end_year[]" placeholder="e.g. 2022" class="form-input mt-1 w-full" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700">Coursework / Highlights</label>
                                <textarea name="edu_description[]" rows="3" placeholder="Mention honors, GPA, etc." class="form-textarea mt-1 w-full"></textarea>
                            </div>
                        `;

                        container.appendChild(block);
                    }
                    </script>





                <!-- Skills -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-tools text-blue-500"></i> Skills
                    </h3>

                    <div id="skillsContainer" class="flex flex-wrap gap-2 mt-4">
                        @foreach (['Time Management', 'Highly responsible and reliable', 'Adaptability', 'Analytical Thinking', 'Collaboration & Teamwork', 'Good team player', 'Creative Problem Solving'] as $skill)
                            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full text-gray-700 border flex items-center gap-1">
                                {{ $skill }}
                                <button type="button" onclick="this.parentElement.remove()" class="text-gray-400 hover:text-red-500 ml-1">
                                    &times;
                                </button>
                            </span>
                        @endforeach
                    </div>

                    <div class="mt-4 flex items-center gap-2">
                        <input type="text" id="newSkillInput" placeholder="Enter skill" class="form-input text-sm w-64" />
                        <button type="button" onclick="addSkill()" class="text-sm px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                            + Add Skill
                        </button>
                    </div>
                </section>


                <!-- Courses -->
                <section class="mb-12 bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-book-reader text-blue-500"></i> Courses
                    </h3>

                    <div id="coursesContainer" class="space-y-3 mt-4">
                        <!-- You can pre-populate here with a loop if needed -->
                    </div>

                    <div class="mt-4 flex items-center gap-2">
                        <input type="text" id="newCourseInput" placeholder="Enter course title" class="form-input text-sm w-64" />
                        <button type="button" onclick="addCourse()" class="text-sm px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                            + Add Course
                        </button>
                    </div>
                </section>


                <!-- Buttons -->
                <div class="flex justify-end space-x-3 pt-6 border-t mt-6">
                    <button type="button"
                        class="px-6 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-100">Cancel</button>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
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
    <script>
        function addTargetRole() {
            const container = document.getElementById('targetRolesContainer');
            if (container.children.length < 5) {
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'target_role[]';
                input.placeholder = 'Job Title';
                input.className = 'form-input w-full';
                container.appendChild(input);
            }
        }

        function addPreferredLocation() {
            const container = document.getElementById('preferredLocationsContainer');
            if (container.children.length < 5) {
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'preferred_location[]';
                input.placeholder = 'e.g. London';
                input.className = 'form-input w-full';
                container.appendChild(input);
            }
        }
    </script>

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
            span.className = 'bg-gray-100 text-sm px-3 py-1 rounded-full text-gray-700 border flex items-center gap-1';
            span.innerHTML = `${value} <button type="button" onclick="this.parentElement.remove()" class="text-gray-400 hover:text-red-500 ml-1">&times;</button>`;

            container.appendChild(span);
            input.value = '';
        }

        function addCourse() {
            const input = document.getElementById('newCourseInput');
            const value = input.value.trim();
            if (!value) return;

            const container = document.getElementById('coursesContainer');
            if (container.children.length >= 5) {
                alert('You can only add up to 5 courses.');
                return;
            }

            const div = document.createElement('div');
            div.className = 'flex items-center justify-between bg-gray-50 border rounded px-3 py-2';
            div.innerHTML = `<span class="text-sm text-gray-700">${value}</span>
                             <button type="button" onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700 text-sm">&times;</button>`;

            container.appendChild(div);
            input.value = '';
        }
    </script>


@endsection
