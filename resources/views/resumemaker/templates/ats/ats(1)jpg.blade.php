<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resume - Seema Chaudhry</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background: #f0f2f5;
            color: #333;
        }

        .container {
            background: #fff;
            max-width: 900px;
            margin: 40px auto;
            padding: 50px 40px;
            border-left: 10px solid #4a90e2;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 5px;
            color: #222;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .subheading {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .contact-info {
            font-size: 14px;
            color: #555;
            margin-bottom: 30px;
        }

        .contact-info span {
            display: inline-block;
            margin-right: 20px;
        }

        .section {
            margin-top: 35px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 5px;
            margin-bottom: 15px;
            border-bottom: 2px solid #4a90e2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section p {
            font-size: 15px;
            line-height: 1.6;
        }

        .education-entry,
        .experience-entry {
            margin-bottom: 25px;
        }

        .education-entry h4,
        .experience-entry h4 {
            font-size: 16px;
            margin: 0 0 5px 0;
            font-weight: bold;
            color: #111;
        }

        .date {
            float: right;
            font-size: 13px;
            color: #888;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .skills li {
            width: 45%;
            margin-bottom: 10px;
            font-size: 14px;
        }

        ul {
            padding-left: 20px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Seema Chaudhry</h1>
        <p class="subheading">Graphic Designer</p>

        <div class="contact-info">
            <span>📞 +123-456-7890</span>
            <span>📍 123 Anywhere St, Any City</span>
            <span>🌐 www.reallygreatsite.com</span>
            <span>📧 hello@reallygreatsite.com</span>
        </div>

        <div class="section">
            <div class="section-title">About Me</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="section">
            <div class="section-title">Education</div>
            <div class="education-entry">
                <h4>Rimberio University <span class="date">2019–2023</span></h4>
                <p>Bachelor’s Degree in Design (Major: Graphic Design)</p>
            </div>
            <div class="education-entry">
                <h4>Rimberio University <span class="date">2018–2019</span></h4>
                <p>Foundation Course in Visual Arts</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Skills</div>
            <ul class="skills">
                <li>Visual Imagination</li>
                <li>Typography</li>
                <li>Digital Illustration</li>
                <li>Design Software</li>
                <li>Communication</li>
                <li>UI/UX Design</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Work Experience</div>

            <div class="experience-entry">
                <h4>Aldenair & Partners – Graphic Designer <span class="date">2024–Present</span></h4>
                <p>Led brand identity projects and managed visual content for digital campaigns.</p>
                <ul>
                    <li>Developed engaging graphics for marketing and social media platforms.</li>
                    <li>Collaborated with UI/UX teams to create user-centered designs.</li>
                </ul>
            </div>

            <div class="experience-entry">
                <h4>Thynk Unlimited – Graphic Designer <span class="date">2019–2023</span></h4>
                <p>Worked on multimedia designs including brochures, logos, and web mockups.</p>
                <ul>
                    <li>Delivered high-quality visual assets aligned with client requirements.</li>
                    <li>Improved design efficiency by creating reusable templates.</li>
                </ul>
            </div>

            <div class="experience-entry">
                <h4>Wardiere Inc – Graphic Designer <span class="date">2018–2019</span></h4>
                <p>Assisted senior designers in creating assets for print and digital media.</p>
                <ul>
                    <li>Contributed to branding guidelines and visual standards.</li>
                    <li>Maintained consistency across all marketing materials.</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
