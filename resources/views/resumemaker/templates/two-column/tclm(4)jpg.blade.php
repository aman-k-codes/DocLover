<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jonathan Patterson Resume</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
            size: A4;
        }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            display: table;
        }
        .left, .right {
            display: table-cell;
            vertical-align: top;
        }
        .left {
            width: 35%;
            background-color: #eaeaea;
            padding: 15px;
        }
        .right {
            width: 65%;
            padding: 20px;
            height: 96%;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 2px;
        }
        h2 {
            font-size: 14px;
            color: #555;
            margin-top: 0;
        }
        .section-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
            margin-bottom: 5px;
            border-bottom: 1px solid #ccc;
        }
        .skill-bar {
            background-color: #ccc;
            height: 6px;
            margin-bottom: 8px;
            width: 100%;
        }
        .skill-fill {
            background-color: #333;
            height: 6px;
        }
        .label-bold {
            font-weight: bold;
        }
        .mb-10 { margin-bottom: 10px; }
        ul {
            margin-top: 5px;
            padding-left: 15px;
        }
        .experience-header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Column -->
        <div class="left">
            <div class="mb-10">
                <p class="contact-info" style="margin-bottom: 12px;">
                    <img src="{{public_path('assets/resume-icon/mail.svg')}}" style="height: 18px;width:18px; margin-right: 8px; vertical-align: middle;" alt="">
                    jonathan.patterson@example.com
                </p>
                <p class="contact-info" style="margin-bottom: 12px;">
                    <img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px; vertical-align: middle;" alt="">
                    +1-415-555-0135
                </p>
                <p class="contact-info">
                    <img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px; vertical-align: middle;" alt="">
                    742 Evergreen Terrace, Springfield
                </p>
            </div>



            <div class="section-title">Education</div>
            <p class="label-bold">Bachelor of Fine Arts in Graphic Design</p>
            <p>Rhode Island School of Design · 2010–2014</p>
            <p>Graduated with Honors. Focused on Visual Communication and Typography.</p>

            <p class="label-bold">Associate Degree in Visual Arts</p>
            <p>New York School of Visual Arts · 2008–2010</p>
            <p>Foundation studies in color theory, design, and multimedia arts.</p>

            <div class="section-title">Skills</div>
            <p>Adobe Photoshop</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 95%;"></div></div>
            <p>Adobe Illustrator</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 90%;"></div></div>
            <p>UI/UX Design</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 80%;"></div></div>
            <p>Brand Identity</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div>

            <div class="section-title">References</div>
            <p class="label-bold">Emily Rodriguez</p>
            <p>Creative Director, BlueWave Media</p>
            <p>Phone: +1-310-555-0178</p>
            <p>Supervised Jonathan during major rebranding projects.</p>

            <p class="label-bold">Michael Stevens</p>
            <p>Art Director, Visionary Labs</p>
            <p>Phone: +1-312-555-0193</p>
            <p>Worked closely with Jonathan on various product launches.</p>
        </div>

        <!-- Right Column -->
        <div class="right">
            <h1>Jonathan Patterson</h1>
            <h2>Graphic Designer & Visual Storyteller</h2>

            <div class="section-title">Profile</div>
            <p>Creative and detail-oriented Graphic Designer with 8+ years of experience developing engaging and innovative digital and print designs. Adept at visual strategy, branding, and user-centered design solutions that drive company growth and improve brand awareness.</p>

            <div class="section-title">Experience</div>

            <div class="experience-header">
                <span>BlueWave Media</span><span>2019–2022</span>
            </div>
            <p><strong>Senior Graphic Designer</strong></p>
            <p>Led the design team for brand development, advertising campaigns, and digital projects for major clients.</p>
            <ul>
                <li>Redesigned the company's brand identity, increasing brand recognition by 30%.</li>
                <li>Developed visual assets for social media, resulting in a 50% boost in engagement rates.</li>
            </ul>

            <div class="experience-header">
                <span>Visionary Labs</span><span>2017–2019</span>
            </div>
            <p><strong>Graphic Designer</strong></p>
            <p>Created web graphics, promotional materials, and product packaging designs.</p>
            <ul>
                <li>Collaborated with UI/UX teams to improve website design and navigation.</li>
                <li>Won the "Best Packaging Design" award at the 2018 Design Excellence Awards.</li>
            </ul>

            <div class="experience-header">
                <span>PixelCraft Studios</span><span>2015–2017</span>
            </div>
            <p><strong>Junior Graphic Designer</strong></p>
            <p>Supported senior designers in creating visuals for print and digital platforms.</p>
            <ul>
                <li>Designed brochures, flyers, and trade show materials for client campaigns.</li>
                <li>Assisted in developing visual content for e-commerce websites, boosting sales by 15%.</li>
            </ul>
        </div>
    </div>
</body>
</html>
