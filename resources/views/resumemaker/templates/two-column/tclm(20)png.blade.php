<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Resume</title>
  <style>
    @page {
      margin: 0;
      size: A4;
    }

    body {
      font-family: DejaVu Sans, sans-serif;
      font-size: 12px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .container {
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    .header {
      border: 2px solid #000;
      padding: 10px;
      width: 100%;
    }

    .name-title {
      background-color: #dfeaf3;
      padding: 10px;
    }

    .contact {
      text-align: right;
      font-size: 12px;
      padding: 10px;
    }

    .section {
      margin-top: 15px;
    }

    .section-title {
      font-size: 14px;
      font-weight: bold;
      border-top: 1px solid #000;
      padding-top: 5px;
      margin-top: 10px;
      margin-bottom: 5px;
    }

    .bold {
      font-weight: bold;
    }

    .edu-date {
      background-color: #000;
      color: #fff;
      font-weight: bold;
      font-size: 11px;
      padding: 2px 4px;
      margin: 4px 0;
    }

    ul {
      margin: 5px 0 10px 15px;
      padding: 0;
    }

    li {
      margin-bottom: 4px;
    }

    .left-col, .right-col {
      vertical-align: top;
      padding: 5px;
    }

    .left-col {
      width: 40%;
    }

    .right-col {
      width: 60%;
    }

    h1 {
      margin: 0;
      font-size: 22px;
    }

    h2 {
      margin: 5px 0 0 0;
      font-size: 14px;
      font-weight: normal;
    }

    p {
      margin: 3px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- HEADER -->
    <table class="header">
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
    <table>
      <tr>
        <!-- LEFT COLUMN -->
        <td class="left-col">
          <div class="section">
            <div class="section-title">EDUCATION</div>
            <div class="edu-date">AUG 2015 - JUN 2019</div>
            <p class="bold">B.S. Computer Science</p>
            <p>(GPA: 3.8)</p>
            <p class="bold">University of Miami</p>
            <p>Miami, FL</p>
          </div>

          <div class="section">
            <div class="section-title">SKILLS</div>
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
            <div class="section-title">ACHIEVEMENTS</div>
            <p class="bold">Hackathon Winner</p>
            <p>Devpost<br>JUL 2018</p>
            <p>Stood first at Devpost’s 2018 HackMIT for developing a unique fitness tracking application with 4 team members.</p>
          </div>
        </td>

        <!-- RIGHT COLUMN -->
        <td class="right-col">
          <div class="section">
            <div class="section-title">CAREER OBJECTIVE</div>
            <p>
              With experience in software development and testing, I aim to join World Fuel Services and support its mission of leading the energy industry. My passion for technology and sustainability inspires me to develop applications that ensure seamless operations for supplying natural gas.
            </p>
          </div>

          <div class="section">
            <div class="section-title">WORK EXPERIENCE</div>

            <div class="edu-date">APR 2022 - Current</div>
            <p class="bold">Junior Software Developer</p>
            <p>Ryder System, <span class="bold">Miami, FL</span></p>
            <ul>
              <li>Maintained MongoDB database, decreasing downtime by 11%.</li>
              <li>Developed real-time tracking system for 7+ fleet vehicles.</li>
              <li>Integrated Google Maps API for route optimization.</li>
              <li>Used ML algorithms to boost forecasting accuracy by <span class="bold">42%</span>.</li>
            </ul>

            <div class="edu-date">JAN 2020 - DEC 2021</div>
            <p class="bold">Software Test Engineer</p>
            <p>Modernizing Medicine, <span class="bold">Boca Raton, FL</span></p>
            <ul>
              <li>Debugged software, boosting performance by 53%.</li>
              <li>Introduced new API strategy, reduced errors by 39%.</li>
              <li>Reduced load times by <span class="bold">2 seconds</span>.</li>
              <li>Identified 21 bugs during code review.</li>
            </ul>

            <div class="edu-date">JUL 2019 - NOV 2019</div>
            <p class="bold">Software Engineer Intern</p>
            <p>Kaseya, <span class="bold">Miami, FL</span></p>
            <ul>
              <li>Built iOS app interface, <span class="bold">2,518 downloads in 3 months</span>.</li>
              <li>Automated scraping saved 7 hours/week.</li>
              <li>Improved productivity by 26% with DevOps practices.</li>
              <li>Fixed 12 bugs/code on average during peer reviews.</li>
            </ul>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
