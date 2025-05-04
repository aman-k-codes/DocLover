<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>tclm(8)png</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
            size: A4;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            font-size: 12px;
            color: #000;
        }

        .header {
            padding-bottom: 10px;
            border-bottom: 2px solid #000;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
        }

        .title {
            font-size: 14px;
            margin-top: 5px;
        }

        .contact {
            background-color: #f0f0f0;
            padding: 8px 12px;
            margin-top: 12px;
            font-size: 12px;
        }

        .contact span {
            margin-right: 15px;
        }

        .columns {
            display: table;
            width: 100%;
            margin-top: 20px;
        }

        .left,
        .right {
            display: table-cell;
            vertical-align: top;
        }

        .left {
            width: 35%;
            padding-right: 20px;
        }

        .right {
            width: 65%;
        }

        .section-title {
            font-weight: bold;
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 6px;
        }

        .sub-section {
            margin-bottom: 14px;
        }

        .sub-section h4 {
            margin: 0;
            font-size: 13px;
            font-weight: bold;
        }

        .sub-section p {
            margin: 2px 0;
        }

        ul {
            padding-left: 16px;
            margin: 5px 0;
        }

        ul li {
            margin-bottom: 4px;
        }

        .italic {
            font-style: italic;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Nilesh Navrang</h1>
        <div class="title">College Applicant</div>
        <div class="contact">
            <span> <img src="{{ public_path('assets/resume-icon/mail.svg') }}"
                    style="height: 18px;width:18px; margin-right: 8px;" alt="">
                christopherwill70@gmail.com</span>
            <span><img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> (123) 456-7890</span>
            <span><img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> New Haven, CT</span>
            <span><img src="{{public_path('assets/resume-icon/linkedin.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt="">LinkedIn</span>
        </div>
    </div>

    <div class="columns">
        <div class="left">
            <div class="section-title">EDUCATION</div>
            <p><strong>Aug 2020 — Current</strong><br>
                <span class="italic">Expected graduation: May 2024</span><br>
                <strong>New Haven Academy</strong><br>
                New Haven, CT
            </p>

            <div class="section-title">SKILLS</div>
            <ul>
                <li>Critical Thinking</li>
                <li>Research Skills</li>
                <li>Adaptability</li>
                <li>Emotional Intelligence</li>
                <li>Public Speaking</li>
                <li>Teamwork</li>
                <li>Creativity</li>
            </ul>

            <div class="section-title">AWARDS</div>
            <p><strong>Best Volunteer Service Award (Youth)</strong><br>
                Mayor’s Office<br>
                Dec 2023<br>
                Presented with a gold award by the Mayor for exceptional volunteering work in the locality.</p>
        </div>

        <div class="right">
            <div class="section-title">CAREER OBJECTIVE</div>
            <p>Dedicated student with a proven track record in volunteering, aspiring to attain a Bachelor of Arts in
                sociology at Yale University to prepare myself to create innovative solutions for society and contribute
                to the institution’s legacy of fostering leaders and changemakers.</p>

            <div class="section-title">WORK EXPERIENCE</div>
            <div class="sub-section">
                <h4>Barista</h4>
                <p><strong>East Rock Coffee</strong></p>
                <p>Sept 2022 – Nov 2023 | <strong>New Haven, CT</strong></p>
                <ul>
                    <li>Served an average of 78 customers daily, focusing on prompt and friendly service, <span
                            class="italic bold">maintaining a customer satisfaction rate of 94%</span> as per feedback
                        forms.</li>
                    <li>Learned and became proficient in preparing 29 types of coffee and tea beverages, consistently
                        praised for quality and accurate brewing.</li>
                    <li>Initiated the use of eco-friendly products like reusable dishes, cups, and metal straws,
                        reducing the shop’s carbon footprint by 21% within five months.</li>
                </ul>
            </div>

            <div class="section-title">PROJECTS & EXTRACURRICULAR ACTIVITIES</div>
            <p><strong>2021</strong><br>
                Organized a clean-up and fundraising event for a local charity in the first year of high school.</p>

            <div class="section-title">VOLUNTEER EXPERIENCE</div>
            <div class="sub-section">
                <h4>Team Leader</h4>
                <p><strong>Local Youth Volunteering Program</strong></p>
                <p>Dec 2023 | <strong>New Haven, CT</strong></p>
                <ul>
                    <li><span class="italic bold">Managed a team of 4 youth volunteers</span>, conducting their training
                        and scheduling.</li>
                    <li>Spent time at 7 senior centers and nursing homes, engaging with the elderly through fun games
                        and puzzles.</li>
                </ul>
            </div>

            <div class="sub-section">
                <h4>Volunteer</h4>
                <p><strong>Homeless Shelter Support</strong></p>
                <p>Oct 2022 | <strong>New Haven, CT</strong></p>
                <ul>
                    <li>Provided shelter and food to a total of 37 homeless individuals per night.</li>
                    <li>Contributed to cleaning all shelters, <span class="italic bold">lowering incidents of theft and
                            misconduct by 12%</span> within one month.</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
