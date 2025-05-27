<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ats(1)jpg</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 2px;
            margin: 0;
        }

        .header p {
            font-size: 13px;
            margin: 4px 0 10px 0;
        }

        .contact-bar {
            background-color: #f0f0f0;
            padding: 10px;
            font-size: 11px;
            text-align: center;
        }

        .contact-bar span {
            margin: 0 10px;
        }

        .section {
            margin-top: 5px;
        }

        .section-title {
            background-color: #dce3ea;
            color: #000;
            padding: 5px 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .section p {
            margin: 5px 0;
        }

        .bold {
            font-weight: bold;
        }

        .row {
            width: 100%;
            overflow: hidden;
            margin-bottom: 2px;
        }

        .education,
        .work {
            margin-bottom: 10px;
        }

        .edu-entry,
        .work-entry {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .edu-entry .info,
        .work-entry .info {
            width: 75%;
        }

        .edu-entry .date,
        .work-entry .date {
            width: 20%;
            text-align: right;
            font-size: 11px;
        }

        ul.skills {
            padding-left: 20px;
            display: grid;
            grid-template-columns: 50% 50%;
            list-style-type: disc;
            font-size: 12px;
        }

        ul.job-points {
            padding-left: 20px;
            list-style-type: disc;
            font-size: 12px;
        }

        .info-table,
        .summary-table {
            width: 100%;
        }

        .summary-table td:last-child {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>{{ (Cache::get('resume_data', 'default')['first_name'] ?? '') . ' ' . (Cache::get('resume_data', 'default')['last_name'] ?? '') }}
        </h1>
        <p>{{ Cache::get('resume_data', 'default')['designation'] ?? '' }}</p>
    </div>

    <div class="contact-bar">
        <span>+91-{{ Cache::get('resume_data', 'default')['phone'] ?? '' }}</span>
        <span>{{ Cache::get('resume_data', 'default')['location'] ?? '' }}</span>
        <span>{{ Cache::get('resume_data', 'default')['website'] ?? '' }}</span>
        <span>{{ Cache::get('resume_data', 'default')['email'] ?? '' }}</span>
    </div>

    <div class="section">
        <div class="section-title">About Me</div>
        <p>{{ Cache::get('resume_data', 'default')['summary'] ?? '' }}</p>
    </div>

    <div class="section">
    <div class="section-title">Education</div>
    <div class="education">
        @if (!blank(Cache::get('resume_data', [])))
            @foreach (Cache::get('resume_data', 'default')['institute'] as $key => $item)
                @if ($item)
                    <div class="edu-entry">
                        <table class="summary-table">
                            <tr>
                                <td class="bold">{{ Cache::get('resume_data', 'default')['institute'][$key] }}</td>
                                <td class="bold">
                                    {{ (Cache::get('resume_data', 'default')['start_year'][$key] ?? '') . '-' . (Cache::get('resume_data', 'default')['end_year'][$key] ?? '') }}
                                </td>
                            </tr>
                        </table>
                        <div class="info">
                            <p>{{ Cache::get('resume_data', 'default')['degree'][$key] ?? '' }}</p>
                            @if (!empty(Cache::get('resume_data', 'default')['edu_description'][$key]))
                                <p>{{ Cache::get('resume_data', 'default')['edu_description'][$key] }}</p>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
    <style>
        ul.skills-inline {
            padding-left: 0;
            list-style: none;
            font-size: 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 0px 20px;
        }

        ul.skills-inline li {
            display: inline-block;
            background-color: #f0f0f0;
            padding: 4px 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
    <div class="section">
        <div class="section-title">Skill</div>
        <ul class="skills-inline">
            {{-- @dd(Cache::get('resume_data', [])); --}}
            @if (!blank(Cache::get('resume_data', [])))
                @foreach (Cache::get('resume_data', 'default')['skills'] ?? [] as $key => $item)
                    @if ($item)
                        <li>{{ Cache::get('resume_data', 'default')['skills'][$key] }}</li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>


    <!-- Add this section just before the closing </body> tag -->

    <div class="section">
        <div class="section-title">Training & Certification</div>
        <div class="education">
            @if (!blank(Cache::get('resume_data', [])))
                @foreach (Cache::get('resume_data', 'default')['courseTitle'] ?? [] as $key => $item)
                    @if ($item)
                        <div class="edu-entry">
                            <table class="summary-table">
                                <tr>
                                    <td class="bold">
                                        {{ Cache::get('resume_data', 'default')['coursePlatform'][$key] . ' - ' . Cache::get('resume_data', 'default')['coursePlatform'][$key] }}
                                    </td>
                                    <td class="bold">
                                        {{ Cache::get('resume_data', 'default')['courseDuration'][$key] }}</td>
                                </tr>
                            </table>
                            <p>{{ Cache::get('resume_data', 'default')['courseDescription'][$key] }}</p>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>


    <div class="section">
        <div class="section-title">Work Experience</div>

        <div class="work">
            @if (!blank(Cache::get('resume_data', [])))
                @foreach (Cache::get('resume_data', 'default')['company'] as $key => $item)
                    @if ($item)
                        <div class="work-entry">
                            <table class="summary-table">
                                <tr>
                                    <td class="bold">{{ Cache::get('resume_data', 'default')['company'][$key] .' - '. Cache::get('resume_data', 'default')['role'][$key]}}</td>
                                    <td class="bold">{{ Cache::get('resume_data', 'default')['start_date'][$key] .' - '. Cache::get('resume_data', 'default')['end_date'][$key]}}</td>
                                </tr>
                            </table>
                            <div class="info">
                                <p>{{ Cache::get('resume_data', 'default')['description'][$key]}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="section">
    <div class="section-title">Projects</div>
    <div class="project">
        @if (!blank(Cache::get('resume_data', [])))
            @foreach (Cache::get('resume_data', 'default')['project_title'] ?? [] as $key => $item)
                @if ($item)
                    <div class="work-entry">
                        <table class="summary-table">
                            <tr>
                                <td class="bold">{{ Cache::get('resume_data', 'default')['project_title'][$key] }}</td>
                                <td class="bold">
                                    {{ Cache::get('resume_data', 'default')['tech_stack'][$key] ?? '' }}
                                </td>
                            </tr>
                        </table>
                        <div class="info">
                            @if (!empty(Cache::get('resume_data', 'default')['project_description'][$key]))
                                <p>{{ Cache::get('resume_data', 'default')['project_description'][$key] }}</p>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>

</body>

</html>
