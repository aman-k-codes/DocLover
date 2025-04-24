<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Saul Garza Resume</title>
    <style>
        @page {
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
            color: #000;
            background: #fff;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #000;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .header h2 {
            font-size: 16px;
            font-weight: normal;
            margin-top: 5px;
        }

        .contact {
            font-size: 12px;
            padding: 8px 0;
            border-top: 1px solid #000;
        }

        .contact span {
            margin: 0 5px;
        }

        .contact a {
            color: #0000EE;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            /* margin-top: 20px; */
        }

        .left, .right {
            vertical-align: top;
        }

        .left {
            width: 30%;
            padding-right: 20px;
            border-right: 1px solid #000;
        }

        .right {
            width: 70%;
            padding: 0px 20px;
        }

        .section-title {
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 8px;
            /* border-bottom: 1px solid #000; */
            padding-bottom: 4px;
        }

        .job-title {
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .job-dates {
            font-style: italic;
            font-size: 11px;
            margin-bottom: 5px;
        }

        ul {
            margin-top: 5px;
            margin-bottom: 10px;
            padding-left: 20px;
        }

        /* p {
            margin: 4px 4px;
        } */
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>SAUL GARZA</h1>
            <h2>Title of Job You’re Looking for</h2>
            <div class="contact">
                <span>(123) 456-7890</span> |
                <span>saul.garza@email.com</span> |
                <span><a href="#">LinkedIn</a></span> |
                <span>New York, NY</span>
            </div>
        </div>

        <table>
            <tr>
                <td class="left">
                    <div class="section-title">EDUCATION</div>
                    <p><strong>Name of University</strong><br>
                        Degree earned<br>
                        Years attended<br>
                        City, State
                    </p>

                    <div class="section-title">SKILLS</div>
                    <ul>
                        <li>Communication</li>
                        <li>Leadership</li>
                        <li>Problem-solving</li>
                        <li>Time Management</li>
                        <li>Analytical Thinking</li>
                        <li>MS Office (Word, Excel)</li>
                        <li>Creativity</li>
                        <li>Conflict Resolution</li>
                        <li>Hardworking</li>
                    </ul>
                </td>

                <td class="right">
                    <div class="section-title">OBJECTIVE/SUMMARY</div>
                    <p>
                        A resume objective is an eye-catching statement of your career intent placed on top of your resume.
                        It provides a 2–3 sentence snapshot of your professional experience, skills, and achievements.
                    </p>

                    <div class="section-title">WORK EXPERIENCE</div>

                    <p class="job-title">Company, Location | Title</p>
                    <p class="job-dates">MONTH 20XX - PRESENT</p>
                    <ul>
                        <li>Grew digital marketing ROI by 14%.</li>
                        <li>Started job descriptions with active verbs.</li>
                    </ul>

                    <p class="job-title">Company, Location | Title</p>
                    <p class="job-dates">MONTH 20XX - MONTH 20XX</p>
                    <ul>
                        <li>Created training plans for 30+ clients.</li>
                        <li>Used past tense for previous roles.</li>
                    </ul>

                    <div class="section-title">PROJECTS & OTHER ACTIVITIES</div>

                    <p class="job-title">Organization | Title</p>
                    <p class="job-dates">MONTH 20XX - PRESENT</p>
                    <ul>
                        <li>Formatted like work experience.</li>
                    </ul>

                    <p class="job-title">Organization | Title</p>
                    <p class="job-dates">MONTH 20XX - PRESENT</p>
                    <ul>
                        <li>Formatted like work experience.</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>
