<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Jasmine Tala Resume</title>
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

        h1 {
            color: #0074d9;
            font-size: 28px;
            margin: 0;
        }

        h2 {
            font-size: 14px;
            color: #333;
            margin-top: 0;
        }

        .section-title {
            color: #0074d9;
            padding: 5px;
            margin-top: 5px;
            font-weight: bold;
        }

        .contact {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .contact p {
            margin: 2px 0;
        }

        .content-block {
            border-top: 2px solid #ccc;
            padding-top: 5px;
            margin-top: 5px;
        }

        ul {
            padding-left: 15px;
            margin: 5px 0;
        }

        li {
            margin-bottom: 5px;
        }

        .job-title {
            font-weight: bold;
        }

        .label {
            font-weight: bold;
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .name-title {
            max-width: 60%;
        }

        .contact {
            max-width: 35%;
            text-align: right;
        }

        .summary-table {
            width: 100%;
        }

        .summary-table td:last-child {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header-flex">
        <table class="summary-table">
            <tr>
                <td class="name-title">
                    <h1>Jasmine Tala</h1>
                    <h2>Frontend Developer</h2>
                </td>
                <td class="contact">
                    <p>(212) 555-6789</p>
                    <p>jasminetala.dev@gmail.com</p>
                    <p>Brooklyn, NY</p>
                    <p>LinkedIn: <a href="https://linkedin.com/in/jasminetala">linkedin.com/in/jasminetala</a></p>
                    <p>GitHub: <a href="https://github.com/jasminetala">github.com/jasminetala</a></p>
                </td>
            </tr>
        </table>
    </div>


    <div class="section-title">SUMMARY/OBJECTIVE</div>
    <div class="content-block">
        <p>Detail-oriented Frontend Developer with over 5 years of experience building responsive and user-centric web
            applications. Proficient in JavaScript, React, and UI/UX principles. Passionate about crafting intuitive and
            elegant digital experiences that drive user engagement and satisfaction.</p>
    </div>

    <div class="section-title">WORK EXPERIENCE</div>
    <div class="content-block">
        <p class="job-title">Senior Frontend Developer</p>
        <p><span class="label">BluePixel Technologies | New York, NY | 2021 – Present</span></p>
        <ul>
            <li>Led the redesign of the company's main SaaS dashboard, improving usability scores by 40%.</li>
            <li>Developed modular, reusable React components to accelerate development and maintain consistency.</li>
            <li>Collaborated closely with product and design teams in Agile sprints to deliver timely releases.</li>
            <li>Implemented performance optimizations, decreasing page load time by 35%.</li>
        </ul>

        <p class="job-title">Frontend Developer</p>
        <p><span class="label">Nova Web Studio | Jersey City, NJ | 2018 – 2021</span></p>
        <ul>
            <li>Built and maintained mobile-first websites using HTML5, CSS3, JavaScript, and Bootstrap.</li>
            <li>Integrated RESTful APIs for dynamic content rendering on client-facing applications.</li>
            <li>Worked on SEO improvements that increased organic traffic by 25% over 6 months.</li>
        </ul>
    </div>

    <div class="section-title">SKILLS</div>
    <div class="content-block">
        <ul>
            <li>JavaScript, React.js, HTML5, CSS3</li>
            <li>Redux, REST APIs, Git/GitHub</li>
            <li>UI/UX Design, Figma, Responsive Design</li>
            <li>Webpack, Babel, npm/yarn</li>
            <li>Agile/Scrum Methodologies</li>
            <li>Communication, Problem-Solving, Time Management</li>
        </ul>
    </div>

    <div class="section-title">EDUCATION</div>
    <div class="content-block">
        <p><span class="label">School:</span> Hunter College, City University of New York</p>
        <p><span class="label">Degree:</span> B.S. in Computer Science</p>
        <p><span class="label">Years:</span> 2014 – 2018</p>
        <p><span class="label">City, State:</span> New York, NY</p>
    </div>

    <div class="section-title">CERTIFICATIONS/LICENSES</div>
    <div class="content-block">
        <ul>
            <li>Certified Front-End Web Developer – FreeCodeCamp (2020)</li>
            <li>JavaScript Algorithms and Data Structures – Coursera (2021)</li>
        </ul>
    </div>

</body>

</html>
