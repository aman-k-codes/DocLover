<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>smpl(10)png</title>
    <style>
         @page {
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            color: #000;
            margin: 40px;
            font-size: 12px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            color: #002D62;
            letter-spacing: 2px;
        }
        .title {
            font-size: 14px;
            letter-spacing: 1px;
        }
        .contact {
            text-align: center;
            font-size: 10px;
            margin-top: 10px;
        }
        .section-title {
            background-color: #002D62;
            color: #fff;
            text-align: center;
            padding: 5px;
            font-weight: bold;
            margin-top: 20px;
            letter-spacing: 1px;
        }
        .content {
            margin-top: 10px;
        }
        .job {
            margin-bottom: 10px;
        }
        .job-title {
            font-weight: bold;
            color: #002D62;
        }
        .job-date {
            float: right;
            font-weight: bold;
        }
        ul {
            margin: 5px 0 10px 20px;
        }
        .education {
            margin-top: 10px;
        }
        .skills {
            margin-top: 10px;
        }
        .skill-list {
            columns: 3;
            -webkit-columns: 3;
            -moz-columns: 3;
            list-style: disc inside;
            padding-left: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="name">Nilesh Navrang</div>
        <div class="title">Graphic Designer</div>
        <div class="contact">
            <img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> +123-456-7890 &nbsp;&nbsp;<img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> 123 Anywhere St., Any City &nbsp;&nbsp;•&nbsp;&nbsp; <img src="{{public_path('assets/resume-icon/website.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> www.seemadesigns.com &nbsp;&nbsp;•&nbsp;&nbsp; <img src="{{public_path('assets/resume-icon/mail.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> seemadesigns@email.com
        </div>
    </div>

    <div class="section-title">ABOUT ME</div>
    <div class="content">
        <p>Creative and skilled Graphic Designer with 5+ years of experience in branding, print design, and digital media. Known for strong attention to detail, innovative concepts, and excellent communication skills. Passionate about visual storytelling and delivering effective solutions to clients.</p>
    </div>

    <div class="section-title">WORK EXPERIENCE</div>
    <div class="content">
        <div class="job">
            <div class="job-title">Aldenaire & Partners – Graphic Designer <span class="job-date">2024–Present</span></div>
            <p>Designed creative assets for digital and print media, collaborated with marketing teams to create campaigns, and developed brand guidelines for clients.</p>
            <ul>
                <li>Designed logos, brochures, and social media content for various clients</li>
                <li>Managed multiple projects simultaneously while meeting tight deadlines</li>
                <li>Developed web designs and collaborated with developers for responsive design</li>
            </ul>
        </div>
        <div class="job">
            <div class="job-title">Thynk Unlimited – Graphic Designer <span class="job-date">2019–2023</span></div>
            <p>Created compelling designs for both print and digital platforms, focusing on client satisfaction and high-quality delivery of assets.</p>
            <ul>
                <li>Worked closely with the art director to brainstorm and create visual concepts</li>
                <li>Produced marketing materials such as flyers, banners, and promotional content</li>
                <li>Assisted in creating user interfaces and user experiences for mobile applications</li>
            </ul>
        </div>
        <div class="job">
            <div class="job-title">Wardiere Inc – Graphic Designer <span class="job-date">2018–2019</span></div>
            <p>Worked on a variety of design projects, from branding to creating marketing collateral, while enhancing the company’s visual identity.</p>
            <ul>
                <li>Collaborated with clients to understand their vision and developed designs accordingly</li>
                <li>Managed the production of printed materials including brochures, posters, and business cards</li>
                <li>Provided design support for digital marketing campaigns</li>
            </ul>
        </div>
    </div>

    <div class="section-title">EDUCATION</div>
    <div class="education">
        <p><strong>RIMBERIO UNIVERSITY</strong> – 2019–2023<br>Bachelor of Arts in Graphic Design</p>
        <p><strong>ABC ART SCHOOL</strong> – 2017–2019<br>Associate Degree in Graphic Design</p>
    </div>

    <div class="section-title">SKILLS</div>
    <div class="skills">
        <ul class="skill-list">
            <li>Adobe Creative Suite (Photoshop, Illustrator, InDesign)</li>
            <li>Typography</li>
            <li>UI/UX Design</li>
            <li>Branding</li>
            <li>Web Design</li>
            <li>Digital Illustration</li>
            <li>Print Design</li>
            <li>Communication</li>
            <li>Attention to Detail</li>
        </ul>
    </div>
</body>
</html>
