<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resume - Seema Chaudhry</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 40px 50px;
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
            /* border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc; */
        }

        .contact-bar span {
            margin: 0 10px;
        }

        .section {
            margin-top: 25px;
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
            margin-bottom: 15px;
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
    </style>
</head>

<body>

    <div class="header">
        <h1>SEEMA CHAUDHRY</h1>
        <p>Graphic Designer</p>
    </div>

    <div class="contact-bar">
        <span>+123-456-7890</span>
        <span>123 Anywhere St, Any City</span>
        <span>www.reallygreatsite.com</span>
        <span>hello@reallygreatsite.com</span>
    </div>

    <div class="section">
        <div class="section-title">About Me</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</p>
    </div>

    <div class="section">
        <div class="section-title">Education</div>
        <div class="education">
            <div class="edu-entry">
                <div class="row">
                    <div class="left">RIMBERIO UNIVERSITY</div>
                    <div class="right">2019–2023</div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="edu-entry">
                <div class="info">
                    <p class="bold">RIMBERIO UNIVERSITY</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="date">2018–2019</div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Skill</div>
        <ul class="skills">
            <li>Visual Imagination</li>
            <li>Typography</li>
            <li>Digital Illustration</li>
            <li>Lorem Design Software</li>
            <li>Communication</li>
            <li>UI/UX Design</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Work Experience</div>

        <div class="work">
            <div class="work-entry">
                <div class="info">
                    <p class="bold">Aldenair & Partners – Graphic Designer</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="job-points">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <div class="date">2024–NOW</div>
            </div>

            <div class="work-entry" style="display:flex">
                <div class="info">
                    <p class="bold">Thynk Unlimited – Graphic Designer</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="job-points">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <div class="date">2019–2023</div>
            </div>

            <div class="work-entry">
                <div class="info">
                    <p class="bold">Wardiere Inc – Graphic Designer</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="job-points">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <div class="date">2018–2019</div>
            </div>
        </div>
    </div>

</body>

</html>
