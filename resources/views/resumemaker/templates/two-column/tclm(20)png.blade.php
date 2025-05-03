<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(20)png</title>
  <style>
    @page {
      margin: 0;
      padding: 0;
      size: A4;
    }
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .container {
      padding: 20px;
    }

    .header {
      border: 2px solid #000;
      padding: 15px;
    }

    .name-title {
      background-color: #dfeaf3;
      padding: 15px;
    }

    .name-title h1 {
      font-size: 22px;
      margin: 0;
    }

    .name-title h2 {
      font-size: 14px;
      font-weight: normal;
      margin: 5px 0 0 0;
    }

    .contact {
      text-align: right;
      vertical-align: top;
      font-size: 12px;
    }

    .section {
      margin-top: 20px;
    }

    .section h3 {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 5px;
      border-top: 1px solid #000;
      padding-top: 5px;
    }

    .bold {
      font-weight: bold;
    }

    .edu-date {
      background-color: #000;
      color: #fff;
      display: inline-block;
      padding: 2px 5px;
      font-weight: bold;
      margin-bottom: 3px;
    }

    ul {
      margin: 5px 0 10px 20px;
      padding: 0;
    }

    li {
      margin-bottom: 5px;
    }

    .two-column {
      width: 100%;
    }

    .two-column td {
      vertical-align: top;
      padding: 5px;
    }

    .left-col {
      width: 35%;
    }

    .right-col {
      width: 65%;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- HEADER -->
    <table class="header" width="100%">
      <tr>
        <td class="name-title">
          <h1>Liam Wilson</h1>
          <h2>Software Engineer</h2>
        </td>
        <td class="contact">
          <p>liam.wilson@email.com</p>
          <p>(123) 456-7890</p>
          <p>Miami, FL</p>
          <p>LinkedIn</p>
        </td>
      </tr>
    </table>

    <!-- MAIN BODY -->
    <table class="two-column">
      <tr>
        <!-- LEFT COLUMN -->
        <td class="left-col">
          <div class="section">
            <h3>EDUCATION</h3>
            <div class="edu-date">AUG 2015 - JUN 2019</div>
            <p><span class="bold">B.S. Computer Science</span><br>(GPA: 3.8)</p>
            <p><span class="bold">University of Miami</span><br>Miami, FL</p>
          </div>

          <div class="section">
            <h3>SKILLS</h3>
            <ul>
              <li>JavaScript</li>
              <li>MySQL</li>
              <li>MongoDB</li>
              <li>Python</li>
              <li>Back-End Development</li>
              <li>Front-End Development</li>
              <li>Debugging</li>
              <li>DevOps</li>
              <li>API Development</li>
            </ul>
          </div>

          <div class="section">
            <h3>ACHIEVEMENTS</h3>
            <p><span class="bold">Hackathon Winner</span><br>Devpost<br>JUL 2018</p>
            <p>Stood first at Devpost’s 2018 HackMIT for developing a unique fitness tracking application with 4 team members.</p>
          </div>
        </td>

        <!-- RIGHT COLUMN -->
        <td class="right-col">
          <div class="section">
            <h3>CAREER OBJECTIVE</h3>
            <p>
              With experience in software development and testing, I aim to join World Fuel Services and support its mission of leading the energy industry. My passion for technology and sustainability inspires me to develop applications that ensure seamless operations for supplying natural gas.
            </p>
          </div>

          <div class="section">
            <h3>WORK EXPERIENCE</h3>

            <p><span class="edu-date">APR 2022 - Current</span><br>
            <span class="bold">Junior Software Developer</span><br>
            Ryder System, <span class="bold">Miami, FL</span></p>
            <ul>
              <li>Coordinated with 4 engineers to maintain a large database on MongoDB, decreasing RyderGyde app’s downtime cases by 11%.</li>
              <li>Developed a real-time tracking system for fleet management, helping the company locate up to 7 fleet vehicles simultaneously.</li>
              <li>Integrated Google Maps API for geo-tracking, planning routes 16 minutes quicker.</li>
              <li>Leveraged ML algorithms for forecasting accuracy by <span class="bold">42%</span>.</li>
            </ul>

            <p><span class="edu-date">JAN 2020 - DEC 2021</span><br>
            <span class="bold">Software Test Engineer</span><br>
            Modernizing Medicine, <span class="bold">Boca Raton, FL</span></p>
            <ul>
              <li>Debugged high-priority software, improving performance by 53%.</li>
              <li>Introduced a new API strategy, reducing errors by 39%.</li>
              <li>Reduced load times by <span class="bold">2 seconds</span>.</li>
              <li>Helped find 21 undetected bugs with senior engineers.</li>
            </ul>

            <p><span class="edu-date">JUL 2019 - NOV 2019</span><br>
            <span class="bold">Software Engineer Intern</span><br>
            Kaseya, <span class="bold">Miami, FL</span></p>
            <ul>
              <li>Built responsive iOS app interface, <span class="bold">2,518 downloads in 3 months</span>.</li>
              <li>Saved 7 hours/week via automated Python web scraping.</li>
              <li>DevOps training: improved productivity by 26%.</li>
              <li>Improved peer intern code quality; avg 12 bugs fixed/code.</li>
            </ul>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
