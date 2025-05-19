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
                                <div><span class="bold">{{ Cache::get('resume_data', 'default')['awardTitle'][$key] }}</span> | {{ Cache::get('resume_data', 'default')['awardInstitute'][$key] }}</div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>

        <div class="right">
            <div class="section">
                <div class="section-title">Career Objective</div>
                <p>Motivated and results-driven academic professional seeking to leverage strong research, data
                    analysis, and project management skills within a reputable university setting. Dedicated to
                    fostering a collaborative learning environment and contributing to innovative research projects.</p>
            </div>

            <div class="section">
                <div class="section-title">Experience</div>

                <div class="job-title">Research Assistant | University of Washington</div>
                <div class="job-date">August 2022 – Present</div>
                <ul>
                    <li>Assisted in developing and implementing machine learning algorithms for predictive analysis
                        projects.</li>
                    <li>Compiled, processed, and analyzed large datasets, improving research accuracy by 15%.</li>
                    <li>Presented research findings at two academic conferences attended by 500+ professionals.</li>
                </ul>

                <div class="job-title">Lab Engineer Intern | TechLab Seattle</div>
                <div class="job-date">June 2021 – August 2021</div>
                <ul>
                    <li>Supported senior engineers in experimental setups, data collection, and reporting for technology
                        innovation projects.</li>
                    <li>Contributed to lab safety improvements, reducing incidents by 25% over the summer term.</li>
                </ul>

                <div class="job-title">Data Analyst Intern | DataSolve Inc.</div>
                <div class="job-date">January 2021 – May 2021</div>
                <ul>
                    <li>Cleaned, transformed, and visualized large datasets to support business decision-making
                        processes.</li>
                    <li>Optimized data pipelines, resulting in a 20% faster data processing time.</li>
                </ul>

                <div class="job-title">Teaching Assistant | Seattle Central College</div>
                <div class="job-date">September 2020 – December 2020</div>
                <ul>
                    <li>Assisted professors in grading assignments, preparing lab materials, and mentoring students in
                        computer science courses.</li>
                    <li>Held weekly tutoring sessions, improving average student grades by 12%.</li>
                </ul>

                <div class="job-title">IT Support Intern | Northbridge Tech Solutions</div>
                <div class="job-date">May 2020 – August 2020</div>
                <ul>
                    <li>Provided technical support for hardware and software issues across 200+ employee workstations.
                    </li>
                    <li>Streamlined troubleshooting documentation, reducing ticket resolution time by 18%.</li>
                </ul>
            </div>

            <div class="section">
                <div class="section-title">Projects</div>

                <div class="job-title">AI-Powered Student Portal</div>
                <div class="job-date">January 2023 – April 2023</div>
                <ul>
                    <li>Designed and developed an AI-integrated portal to assist students in managing coursework and
                        schedules.</li>
                    <li>Achieved a 90% positive feedback rate from the pilot user group of 100 students.</li>
                </ul>

                <div class="job-title">Data Visualization Dashboard</div>
                <div class="job-date">September 2022 – December 2022</div>
                <ul>
                    <li>Built interactive dashboards using Tableau and Python for research data reporting.</li>
                    <li>Reduced data interpretation time for faculty members by approximately 30%.</li>
                </ul>

                <div class="job-title">Smart Attendance System</div>
                <div class="job-date">May 2022 – August 2022</div>
                <ul>
                    <li>Developed a face-recognition-based attendance system using Python and OpenCV libraries.</li>
                    <li>Improved attendance accuracy and reduced manual errors by 40% across pilot departments.</li>
                </ul>

                <div class="job-title">Research Paper Management Tool</div>
                <div class="job-date">January 2022 – April 2022</div>
                <ul>
                    <li>Created a web application for organizing, annotating, and referencing academic research papers
                        efficiently.</li>
                    <li>Enhanced research productivity for students and faculty members by providing smart search and
                        auto-citation features.</li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>
