<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Professional Resume</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
        }

        .container {
            display: flex;
            width: 100%;
            /* margin: 30px auto; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .left-panel {
            width: 90%;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 30px 20px;
            text-align: center;
        }

        .right-panel {
            width: 70%;
            padding: 40px 30px;
        }

        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #ecf0f1;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0 5px;
        }

        p.role {
            font-size: 16px;
            color: #bdc3c7;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }

        p,
        li {
            font-size: 14px;
            margin: 8px 0;
        }

        .section {
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li::before {
            content: "• ";
            color: #3498db;
            font-weight: bold;
        }

        .left-panel h2 {
            color: #ecf0f1;
            border-color: #7f8c8d;
        }

        .contact-info,
        .skills,
        .languages {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="summary-table">
            <tr>
                <td class="bold">
                    <div class="left-panel">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            alt="Profile Image" class="profile-img">
                        <h1>Nilesh Navrang</h1>
                        <p class="role">Software Developer</p>

                        <div class="contact-info">
                            <h2>Contact</h2>
                            <p>Email: john.doe@example.com</p>
                            <p>Phone: +1 234 567 890</p>
                            <p>Location: City, Country</p>
                        </div>

                        <div class="skills">
                            <h2>Skills</h2>
                            <ul>
                                <li>HTML, CSS, JavaScript</li>
                                <li>PHP, Laravel, MySQL</li>
                                <li>ReactJS, NodeJS</li>
                                <li>REST APIs, Git</li>
                            </ul>
                        </div>

                        <div class="languages">
                            <h2>Languages</h2>
                            <ul>
                                <li>English - Fluent</li>
                                <li>Hindi - Native</li>
                                <li>French - Basic</li>
                            </ul>
                        </div>
                    </div>
                </td>
                <td class="bold">
                    <div class="right-panel">
                        <div class="section">
                            <h2>About Me</h2>
                            <p>Passionate software developer with 3+ years of experience building web applications and
                                mobile responsive designs. Strong background in backend development and database
                                management.</p>
                        </div>

                        <div class="section">
                            <h2>Experience</h2>
                            <p><strong>Software Engineer</strong> — ABC Technologies (2022 - Present)</p>
                            <ul>
                                <li>Developed and maintained web applications using Laravel and Vue.js.</li>
                                <li>Implemented REST APIs and third-party integrations.</li>
                            </ul>

                            <p><strong>Web Developer Intern</strong> — XYZ Solutions (2021 - 2022)</p>
                            <ul>
                                <li>Worked on frontend development with HTML, CSS, and JavaScript.</li>
                                <li>Assisted in migrating legacy projects to modern frameworks.</li>
                            </ul>
                        </div>

                        <div class="section">
                            <h2>Education</h2>
                            <p><strong>Master of Computer Science</strong> — XYZ University (2020 - 2022)</p>
                            <p><strong>Bachelor of Computer Applications</strong> — ABC College (2017 - 2020)</p>
                        </div>

                        <div class="section">
                            <h2>Certifications</h2>
                            <ul>
                                <li>Certified Laravel Developer (2022)</li>
                                <li>AWS Cloud Practitioner (2023)</li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    {{-- @dd(
    'hello world'
    ) --}}
</body>

</html>
