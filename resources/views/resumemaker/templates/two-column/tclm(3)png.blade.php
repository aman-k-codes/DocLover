<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>tclm(3)png</title>
    <style>
        @page {
            margin: 0;
            size: A4;
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
            /* width: 100%; */
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
            /* padding-right: 20px; */
            border-right: 1px solid #000;
        }

        .right {
            width: 65%;
            padding: 0px 20px;
            height: 85%;
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

        <table >
            <tr>
                <td class="left">
                    <div class="section-title">EDUCATION</div>
                    <p><strong>New York University (NYU)</strong><br>
                        Bachelor of Science in Computer Science<br>
                        2015 – 2019<br>
                        New York, NY
                    </p>
                    <p><strong>Massachusetts Institute of Technology (MIT)</strong><br>
                        Master of Science in Data Science<br>
                        2019 – 2021<br>
                        Cambridge, MA
                    </p>

                    <div class="section-title">SKILLS</div>
                    <ul>
                        <li><strong>Technical Skills:</strong> Python, JavaScript, PHP, SQL, HTML5, CSS3</li>
                        <li><strong>Frameworks:</strong> React.js, Node.js, Laravel, Django</li>
                        <li><strong>Tools:</strong> Git, Docker, AWS, Figma, JIRA</li>
                        <li><strong>Soft Skills:</strong> Communication, Leadership, Team Collaboration</li>
                        <li><strong>Problem-Solving:</strong> Analytical thinking, Critical reasoning</li>
                        <li><strong>Time Management:</strong> Efficient multitasking and prioritization</li>
                        <li><strong>Office Tools:</strong> Microsoft Word, Excel, PowerPoint, Outlook</li>
                        <li><strong>Creativity:</strong> Innovative solution development, UX Design</li>
                        <li><strong>Other:</strong> Conflict resolution, Hardworking, Adaptability</li>
                    </ul>
                </td>


                <td class="right">
                    <div class="section-title">OBJECTIVE/SUMMARY</div>
                    <p>
                        Highly motivated and detail-oriented Software Engineer with 4+ years of experience in web development, cloud solutions,
                        and cross-functional team leadership. Skilled in designing scalable applications and driving innovation through
                        collaboration and critical thinking. Seeking to leverage technical expertise and creativity to contribute to a dynamic tech environment.
                    </p>

                    <div class="section-title">WORK EXPERIENCE</div>

                    <p class="job-title">Google, Mountain View, CA | Front-End Developer</p>
                    <p class="job-dates">June 2021 - Present</p>
                    <ul>
                        <li>Developed and maintained highly responsive web applications using React.js and Next.js.</li>
                        <li>Collaborated with UX/UI teams to enhance the user experience, boosting user engagement by 22%.</li>
                        <li>Optimized website performance, reducing load times by 35% using code-splitting and lazy loading strategies.</li>
                        <li>Led a team of 5 developers in an Agile environment, delivering projects 15% ahead of schedule.</li>
                    </ul>

                    <p class="job-title">Amazon, Seattle, WA | Software Engineer</p>
                    <p class="job-dates">July 2019 - May 2021</p>
                    <ul>
                        <li>Designed backend microservices using Node.js and AWS Lambda, improving API response time by 28%.</li>
                        <li>Integrated third-party APIs and automated order processing workflows for Amazon Retail.</li>
                        <li>Implemented unit and integration testing, achieving 90% code coverage and reducing bugs by 18%.</li>
                        <li>Mentored 3 junior developers, fostering skill growth and increasing team productivity.</li>
                    </ul>

                    <div class="section-title">PROJECTS & OTHER ACTIVITIES</div>

                    <p class="job-title">Personal Project | Portfolio Website</p>
                    <p class="job-dates">January 2023 - Present</p>
                    <ul>
                        <li>Designed and deployed a personal portfolio site using Next.js, TailwindCSS, and Vercel.</li>
                        <li>Showcases projects in web development, machine learning, and UI/UX design.</li>
                    </ul>

                    <p class="job-title">Hackathon Winner | TechCrunch Disrupt</p>
                    <p class="job-dates">October 2022</p>
                    <ul>
                        <li>Led a 4-person team to victory by developing a real-time AI-driven recommendation engine within 24 hours.</li>
                        <li>Recognized for innovation, scalability, and technical excellence among 200+ participants.</li>
                    </ul>
                </td>

            </tr>
        </table>
    </div>
    {{-- @dd('helop'); --}}
</body>

</html>
