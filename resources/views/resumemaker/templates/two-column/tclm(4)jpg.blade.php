<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>tclm(4)jpg</title>
    <style>
        @page{
            margin: 0;
            padding: 0;
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
                <p>📧 hello@reallygreatsite.com</p>
                <p>📞 +123-456-7890</p>
                <p>🏠 123 Anywhere St., Any City</p>
            </div>

            <div class="section-title">Education</div>
            <p class="label-bold">Your Degree Name Here</p>
            <p>Really Good University · 2013–2015</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <p class="label-bold">Your Degree Name Here</p>
            <p>Really Good University · 2011–2013</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <div class="section-title">Skills</div>
            <p>Amazing Skill Here</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 90%;"></div></div>
            <p>Amazing Skill Here</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 70%;"></div></div>
            <p>Amazing Skill Here</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 50%;"></div></div>
            <p>Amazing Skill Here</p>
            <div class="skill-bar"><div class="skill-fill" style="width: 80%;"></div></div>

            <div class="section-title">References</div>
            <p class="label-bold">Reference Name</p>
            <p>Company Name</p>
            <p>Phone: +123-456-7890</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <p class="label-bold">Reference Name</p>
            <p>Company Name</p>
            <p>Phone: +123-456-7890</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <!-- Right Column -->
        <div class="right">
            <h1>Jonathan Patterson</h1>
            <h2>GRAPHIC DESIGNER</h2>

            <div class="section-title">Profile</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sollicitudin nulla. Duis fermentum dapibus quam nec ullamcorper...</p>

            <div class="section-title">Experience</div>

            <div class="experience-header">
                <span>Really Great Company</span><span>2019–2022</span>
            </div>
            <p><strong>Senior Graphic Designer</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul>
                <li>Phasellus tristique pulvinar rutrum.</li>
                <li>Aenean molestie massa nunc, at eleifend nisl.</li>
            </ul>

            <div class="experience-header">
                <span>Really Great Company</span><span>2017–2019</span>
            </div>
            <p><strong>Graphic Designer</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul>
                <li>Phasellus tristique pulvinar rutrum.</li>
                <li>Aenean molestie massa nunc, at eleifend nisl.</li>
            </ul>

            <div class="experience-header">
                <span>Really Great Company</span><span>2015–2017</span>
            </div>
            <p><strong>Junior Graphic Designer</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul>
                <li>Phasellus tristique pulvinar rutrum.</li>
                <li>Duis tellus erat, consequat vitae consectetur et.</li>
            </ul>
        </div>
    </div>
</body>
</html>
