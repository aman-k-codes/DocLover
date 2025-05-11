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
                                    <td class="bold">{{ (Cache::get('resume_data', 'default')['start_year'][$key] ?? '') . '-' . (Cache::get('resume_data', 'default')['end_year'][$key] ?? '') }}</td>
                                </tr>
                            </table>
                            <div class="info">
                                <p>{{ Cache::get('resume_data', 'default')['degree'][$key] }}</p>
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
            <li>Adobe Photoshop</li>
            <li>Adobe Illustrator</li>
            <li>UI/UX Design</li>
            <li>Figma & Sketch</li>
            <li>Branding & Identity</li>
            <li>Typography & Layout</li>
            <li>Typography & Layout</li>
            <li>Typography & Layout</li>
            <li>Typography & Layout</li>
            <li>Typography & Layout</li>
        </ul>
    </div>


    <!-- Add this section just before the closing </body> tag -->

    <div class="section">
        <div class="section-title">Training & Certification</div>
        <div class="education">
            <div class="edu-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Adobe Certified Expert (ACE) – Photoshop</td>
                        <td class="bold">2022</td>
                    </tr>
                </table>
                <p>Credential earned for advanced proficiency in Adobe Photoshop CC.</p>
            </div>
            <div class="edu-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Google UX Design Professional Certificate</td>
                        <td class="bold">2021</td>
                    </tr>
                </table>
                <p>Completed through Coursera, focusing on UX principles, prototyping, and user research.</p>
            </div>
            <div class="edu-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Skillshare – Branding for Designers</td>
                        <td class="bold">2020</td>
                    </tr>
                </table>
                <p>Trained in crafting compelling brand identities and visual storytelling.</p>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="section-title">Work Experience</div>

        <div class="work">
            <div class="work-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Thynk Unlimited – Senior Graphic Designer</td>
                        <td class="bold">2020–Present</td>
                    </tr>
                </table>
                <div class="info">
                    <p>Led creative projects for digital campaigns, brand development, and UI design.</p>
                    <ul class="job-points">
                        <li>Designed marketing assets for over 25 successful campaigns.</li>
                        <li>Collaborated with developers and marketers to optimize visuals across platforms.</li>
                    </ul>
                </div>
                {{-- <div class="date">2020–Now</div> --}}
            </div>

            <div class="work-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Creative Pixels – Graphic Designer</td>
                        <td class="bold">2018–2020</td>
                    </tr>
                </table>
                <div class="info">
                    <p>Worked on a variety of design projects ranging from brochures to web mockups.</p>
                    <ul class="job-points">
                        <li>Contributed to UI revamp projects for multiple clients.</li>
                        <li>Produced digital assets for social media and web platforms.</li>
                    </ul>
                </div>
            </div>

            <div class="work-entry">
                <table class="summary-table">
                    <tr>
                        <td class="bold">Wardiere Inc – Junior Graphic Designer</td>
                        <td class="bold">2017–2018</td>
                    </tr>
                </table>
                <div class="info">
                    <p>Assisted the design team in producing graphics for print and digital use.</p>
                    <ul class="job-points">
                        <li>Created infographics, flyers, and internal newsletters.</li>
                        <li>Maintained consistency with brand guidelines across all designs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- @dd('footer') --}}
</body>

</html>
