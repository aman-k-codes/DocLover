<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>smpl(1)jpg</title>
    <style>
         @page {
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 40px;
            color: #000;
        }
        h1, h2 {
            margin: 10px 0;
        }
        h1 {
            font-size: 24px;
            text-transform: uppercase;
        }
        h2 {
            font-size: 18px;
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }
        .section {
            margin-bottom: 10px;
        }
        .header, .contact, .references {
            text-align: center;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .contact-info {
            margin-top: 10px;
            font-size: 13px;
            text-align: center;
            margin-bottom: 15px;
        }
        .education-entry, .experience-entry {
            margin-bottom: 10px;
        }
        .skills ul {
            list-style: disc;
            columns: 2;
            margin-left: 20px;
            padding: 0;
        }
        .references-table {
            width: 100%;
            margin-top: 10px;
        }
        .references-table td {
            vertical-align: top;
            padding: 5px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>{{ (Cache::get('resume_data', 'default')['first_name'] ?? '') . ' ' . (Cache::get('resume_data', 'default')['last_name'] ?? '') }}</h1>
        <p>{{ Cache::get('resume_data', 'default')['designation'] ?? '' }}</p>
    </div>

    <div class="contact-info">
        Phone: +91-{{ Cache::get('resume_data', 'default')['phone'] ?? '' }} | Email: {{ Cache::get('resume_data', 'default')['email'] ?? '' }} | Website: {{ Cache::get('resume_data', 'default')['website'] ?? '' }}
    </div>

    <div class="section">
        <h2>ABOUT ME</h2>
        <p>{{ Cache::get('resume_data', 'default')['summary'] ?? '' }}</p>
    </div>

    <div class="section">
    <h2>EDUCATION</h2>
    @php
        $data = Cache::get('resume_data', 'default');
    @endphp

    @if (!blank($data) && !empty($data['institute']))
        @foreach ($data['institute'] as $key => $institute)
            @if (!empty($institute))
                <div class="education-entry">
                    <strong>{{ ($data['start_year'][$key] ?? '') }} - {{ ($data['end_year'][$key] ?? '') }}</strong><br>
                    {{ $data['degree'][$key] ?? '' }} - {{ $institute }}
                    {{-- @if (!empty($data['edu_description'][$key]))
                        <div>{{ $data['edu_description'][$key] }}</div>
                    @endif --}}
                </div>
            @endif
        @endforeach
    @endif
</div>


    <div class="section">
    <h2>EXPERIENCE</h2>
    @php
        $resumeData = Cache::get('resume_data', 'default');
    @endphp

    @if (!blank($resumeData['company']))
        @foreach ($resumeData['company'] as $key => $company)
            @if (!empty($company))
                <div class="experience-entry">
                    <strong>{{ $resumeData['start_date'][$key] ?? '' }} – {{ $resumeData['end_date'][$key] ?? '' }}</strong><br>
                    {{ $resumeData['role'][$key] ?? '' }}, {{ $company }}<br>
                    @if (!empty($resumeData['description'][$key]))
                        @foreach (explode("\n", $resumeData['description'][$key]) as $point)
                            @if (!empty(trim($point)))
                                • {{ trim($point) }}<br>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endif
        @endforeach
    @endif
</div>


    <div class="section skills">
    <h2>SKILLS</h2>
    <ul style="list-style: none; padding: 0; margin: 0;">
        @php
            $skills = Cache::get('resume_data', 'default')['skills'] ?? [];
        @endphp

        @foreach ($skills as $skill)
            @if (!empty($skill))
                <li style="display: inline-block; padding: 6px 12px; margin: 5px; background-color: #5f9ea0; color: white; border-radius: 20px;">
                    {{ $skill }}
                </li>
            @endif
        @endforeach
    </ul>
</div>


    <div class="section">
    <h2>PROJECTS</h2>

    @php
        $projects = Cache::get('resume_data', 'default');
    @endphp

    @if (!empty($projects['project_title']))
        @foreach ($projects['project_title'] as $key => $title)
            @if (!empty($title))
                <div class="project-entry">
                    <strong>{{ $projects['tech_stack'][$key] ?? '' }}</strong><br>
                    {{ $title }}<br>
                    @if (!empty($projects['project_description'][$key]))
                        @foreach (explode("\n", $projects['project_description'][$key]) as $point)
                            @if (!empty(trim($point)))
                                • {{ trim($point) }}<br>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endif
        @endforeach
    @endif
</div>



    <div class="section">
        <h2>REFERENCES</h2>
        <table class="references-table" border="0">
            <tr>
                <td>
                    <strong>Niranjan Devi</strong><br>
                    CEO, Wardiere Company<br>
                    Phone: 123-456-7890<br>
                    Email: niranjan@wardiere.com
                </td>
                <td>
                    <strong>Aarya Agarwal</strong><br>
                    HR Manager, Wardiere Company<br>
                    Phone: 123-456-7890<br>
                    Email: aarya@wardiere.com
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
