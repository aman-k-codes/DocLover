<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>tclm(1)png</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
            color: #000;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: table;
        }

        .left {
            width: 40%;
            display: table-cell;
            vertical-align: top;
            background-color: #f4f4f4;
            padding: 20px;
            height: 95%;
            /* overflow: hidden */
        }

        .right {
            width: 60%;
            display: table-cell;
            vertical-align: top;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin: 0;
        }

        .subtitle {
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .section-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .contact p {
            margin: 3px 0;
        }

        ul {
            margin: 0;
            padding-left: 18px;
        }

        .bold {
            font-weight: bold;
        }

        .section {
            margin-bottom: 15px;
        }

        .job-title {
            font-weight: bold;
            margin-bottom: 2px;
        }

        .job-date {
            font-size: 11px;
            color: #555;
            margin-bottom: 5px;
        }

        .award {
            margin-bottom: 10px;
        }

        .icon-line {
            margin-bottom: 2px;
            display: flex;
            align-items: center;
        }

        .icon-line img {
            width: 18px;
            height: 18px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <div>
                <h1>{{ (Cache::get('resume_data', 'default')['first_name'] ?? '') . ' ' . (Cache::get('resume_data', 'default')['last_name'] ?? '') }}
                </h1>
                <div class="subtitle">{{ Cache::get('resume_data', 'default')['designation'] ?? '' }}</div>
            </div>
            {{-- @dd(Cache::get('resume_data', 'default')); --}}
            <div class="section">
                <div class="section-title">Contact</div>
                <div class="contact">
                    <div class="icon-line">
                        <img src="{{ public_path('assets/resume-icon/call.svg') }}" alt="">
                        +91-{{ Cache::get('resume_data', 'default')['phone'] ?? '' }}
                    </div>

                    <div class="icon-line">
                        <img src="{{ public_path('assets/resume-icon/mail.svg') }}" alt="">
                        {{ Cache::get('resume_data', 'default')['email'] ?? '' }}
                    </div>
                    <div class="icon-line">
                        <img src="{{ public_path('assets/resume-icon/location.svg') }}" alt="">
                        {{ Cache::get('resume_data', 'default')['location'] ?? '' }}
                    </div>
                    {{-- <div class="icon-line">
                        <img src="{{public_path('assets/resume-icon/linkedin.svg')}}" alt="">
                        <span>{{ Cache::get('resume_data', 'default')['linkedin'] ?? '' }}</span>
                    </div> --}}
                </div>
            </div>

            <div class="section">
                <div class="section-title">Education</div>
                @if (!blank(Cache::get('resume_data', [])))
                    @foreach (Cache::get('resume_data', 'default')['institute'] as $key => $item)
                        @if ($item)
                            <p><span class="bold">{{ Cache::get('resume_data', 'default')['degree'][$key] }} |
                                    {{ (Cache::get('resume_data', 'default')['start_year'][$key] ?? '') . '-' . (Cache::get('resume_data', 'default')['end_year'][$key] ?? '') }}</span><br>{{ Cache::get('resume_data', 'default')['institute'][$key] }}<br>Seattle,
                                WA</p>
                        @endif
                    @endforeach
                @endif
            </div>

            <div class="section">
                <div class="section-title">Skills</div>
                <ul>
                    {{-- @dd(Cache::get('resume_data', [])); --}}
                    @if (!blank(Cache::get('resume_data', [])))
                        @foreach (Cache::get('resume_data', 'default')['skills'] as $key => $item)
                            @if ($item)
                                <li>{{ Cache::get('resume_data', 'default')['skills'][$key] }}</li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="section">
                <div class="section-title">Awards</div>
                @if (!blank(Cache::get('resume_data', [])))
                    @foreach (Cache::get('resume_data', 'default')['awardTitle'] as $key => $item)
                        @if ($item)
                            <div class="award">
                                <div class="job-date">{{ Cache::get('resume_data', 'default')['awardDate'][$key] }}</div>
                                <div><span class="bold">{{ Cache::get('resume_data', 'default')['awardTitle'][$key] }}</span> |
                                    {{ Cache::get('resume_data', 'default')['awardInstitute'][$key] }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

            <div class="section">
                <div class="section-title">Preferences</div>
                @php
                    $resumeData = Cache::get('resume_data', []);
                    $roles = $resumeData['target_role'] ?? [];
                    $locations = $resumeData['preferred_location'] ?? [];
                @endphp

                <div class="preferences-container" style="display: flex; gap: 40px;">
                    <div class="preference-jobs" style="flex: 1;">
                        <div class="bold" style="margin-bottom: 10px;">Preferred Job Roles</div>
                        @if (!empty($roles))
                            <ul>
                                @foreach ($roles as $role)
                                    @if ($role)
                                        <li>{{ $role }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        @else
                            <p>No preferred roles listed.</p>
                        @endif
                    </div>

                    <div class="preference-locations" style="flex: 1;">
                        <div class="bold" style="margin-bottom: 10px;">Preferred Locations</div>
                        @if (!empty($locations))
                            <ul>
                                @foreach ($locations as $location)
                                    @if ($location)
                                        <li>{{ $location }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        @else
                            <p>No preferred locations listed.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-title">Social Links</div>

                @php
                    $data = Cache::get('resume_data', 'default');
                    $socials = [
                        'LinkedIn' => $data['linkedin'] ?? '',
                        'Twitter' => $data['twitter'] ?? '',
                        'Facebook' => $data['facebook'] ?? '',
                        'Instagram' => $data['instagram'] ?? '',
                        'GitHub' => $data['github'] ?? '',
                    ];
                @endphp

                <ul>
                    @foreach ($socials as $platform => $url)
                        @if (!empty($url))
                            <li>
                                <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" style="color: #0073b1;">
                                    {{ $platform }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

        </div>

        <div class="right">
            <div class="section">
                <div class="section-title">Career Objective</div>
                @php
                    $summary = Cache::get('resume_data', 'default')['summary'] ?? null;
                @endphp

                @if (!empty($summary))
                    <p>{{ $summary }}</p>
                @endif
            </div>


            <div class="section">
                <div class="section-title">Experience</div>

                @php
                    $data = Cache::get('resume_data', 'default');
                @endphp

                @if (!empty($data['company']))
                    @foreach ($data['company'] as $key => $company)
                        @if (!empty($company))
                            <div class="job-title">
                                {{ $company }}{{ !empty($data['role'][$key]) ? ' | ' . $data['role'][$key] : '' }}
                            </div>
                            <div class="job-date">
                                {{ ($data['start_date'][$key] ?? '') . ' – ' . ($data['end_date'][$key] ?? '') }}
                            </div>
                            @if (!empty($data['description'][$key]))
                                <ul>
                                    @foreach (explode("\n", $data['description'][$key]) as $point)
                                        @if (!empty(trim($point)))
                                            <li>{{ trim($point) }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    @endforeach
                @endif
            </div>


            <div class="section">
                <div class="section-title">Projects</div>

                @php
                    $data = Cache::get('resume_data', 'default');
                @endphp

                @if (!empty($data['project_title']))
                    @foreach ($data['project_title'] as $key => $title)
                        @if (!empty($title))
                            <div class="job-title">{{ $title }}</div>
                            <div class="job-date">
                                {{ $data['tech_stack'][$key] ?? '' }}
                            </div>
                            @if (!empty($data['project_description'][$key]))
                                <ul>
                                    @foreach (explode("\n", $data['project_description'][$key]) as $point)
                                        @if (!empty(trim($point)))
                                            <li>{{ trim($point) }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    @endforeach
                @endif
            </div>


        </div>
    </div>
</body>

</html>
