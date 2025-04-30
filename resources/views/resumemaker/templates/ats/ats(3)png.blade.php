<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ats(3)png</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 40px;
            color: #000;
        }

        h1,
        h2 {
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .header,
        .section {
            margin-bottom: 20px;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .contact {
            text-align: center;
            font-size: 12px;
        }

        .note {
            font-size: 11px;
            font-style: italic;
            margin-top: 10px;
            border-top: 1px solid #000;
            padding-top: 5px;
        }

        .job-title {
            font-weight: bold;
        }

        .date-range {
            float: right;
            font-style: italic;
        }

        .clear {
            clear: both;
        }

        ul {
            margin: 5px 0 0 20px;
        }

        .education,
        .skills {
            font-size: 12px;
        }

        .section-title {
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
            position: relative;
            text-transform: uppercase;
        }

        .section-title::after {
            content: "";
            display: block;
            margin: 5px auto 0;
            width: 100%;
            border-bottom: 2px solid #000;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="name">AARAV SHARMA</div>
        <div class="contact">
            Bangalore, India • +91-9876543210 • aarav.sharma@email.com • linkedin.com/in/aaravsharma
        </div>
        <div class="note">
            NB: The Summary section is completely optional. However, if you have valuable experience that doesn’t fit in
            your experience section below (e.g. you're changing careers), you can include one.
        </div>
    </div>

    <div class="section">
        <div class="section-title">Professional Experience</div>
        <div class="section-line"></div>

        <div class="job">
            <div>
                <span class="job-title">Infosys Ltd, Bangalore, India – Senior Software Engineer</span>
                <span class="date-range">2020 – Present</span>
            </div>
            <div class="clear"></div>
            <ul>
                <li>Developed REST APIs using Laravel and integrated with Angular front-end, serving 100k+ users/month.
                </li>
                <li>Led a team of 5 developers, delivering projects with 98% on-time completion rate.</li>
                <li>Optimized MySQL queries reducing average response time by 35%.</li>
                <li>Integrated AWS SES for email automation, improving user engagement by 22%.</li>
            </ul>
        </div>

        <div class="job">
            <div>
                <span class="job-title">Wipro Ltd, Hyderabad, India – Web Developer</span>
                <span class="date-range">2017 – 2020</span>
            </div>
            <div class="clear"></div>
            <ul>
                <li>Created dynamic web apps using PHP and ReactJS, handling over 50,000 daily users.</li>
                <li>Collaborated with UX team to revamp UI/UX, boosting customer satisfaction scores by 18%.</li>
                <li>Implemented CI/CD using GitLab and Jenkins, reducing deployment time by 60%.</li>
            </ul>
        </div>

        <div class="job">
            <div>
                <span class="job-title">TechNova Pvt Ltd, Pune, India – Intern Developer</span>
                <span class="date-range">2016 – 2017</span>
            </div>
            <div class="clear"></div>
            <ul>
                <li>Assisted in building internal tools in PHP and JavaScript to automate HR reports.</li>
                <li>Contributed to testing and documentation of key modules.</li>
                <li>Recognized as “Best Intern” among 40 peers for commitment and performance.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Education</div>
        <div class="section-line"></div>
        <p><strong>National Institute of Technology, Trichy</strong>, Tamil Nadu – <em>B.Tech in Computer Science</em>
            (2016)</p>
        <ul>
            <li>CGPA: 8.5/10</li>
            <li>Final Year Project: Real-time vehicle tracking system using GPS and PHP backend.</li>
            <li>Co-Lead of the college coding club “ByteMasters”.</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Skills & Other</div>
        <div class="section-line"></div>
        <p>
            <strong>Programming:</strong> PHP (Laravel), JavaScript (React, Angular), Python, SQL<br>
            <strong>Tools:</strong> Git, AWS (SES, EC2, S3), Jenkins, Docker, Postman<br>
            <strong>Certifications:</strong> AWS Certified Developer Associate, Google Data Analytics<br>
            <strong>Personal Project:</strong> Developed a multi-file converter (PDF ↔ ZIP, JPG, DOCX, etc.) with a
            clean UI, deployed on Heroku.
        </p>
    </div>

</body>

</html>
