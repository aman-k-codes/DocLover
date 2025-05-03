<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(27)png</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      color: #333;
      background-color: #f9f9f9;
    }

    .container {
      display: flex;
      width: 100%;
      min-height: 100vh;
    }

    .left {
      width: 35%;
      background-color: #f0f0f0;
      padding: 30px 20px;
    }

    .right {
      width: 65%;
      padding: 30px 30px 20px 30px;
    }

    h1 {
      font-size: 26px;
      font-weight: bold;
      color: #111;
    }

    h2 {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #111;
      border-bottom: 1px solid #333;
      padding-bottom: 5px;
    }

    h3 {
      font-size: 12px;
      font-weight: bold;
      margin: 20px 0 5px 0;
    }

    p {
      font-size: 11px;
      line-height: 1.6;
      margin: 5px 0;
    }

    ul {
      padding-left: 20px;
      margin: 5px 0;
    }

    li {
      margin-bottom: 4px;
    }

    .contact p {
      margin: 8px 0;
    }

    .section {
      margin-top: 20px;
    }

    .section h3 {
      margin-top: 15px;
    }

    .progress-bar {
      background-color: #ddd;
      height: 5px;
      margin: 5px 0 10px 0;
    }

    .progress {
      background-color: #111;
      height: 5px;
    }

    .job {
      margin-top: 15px;
    }

    .job-title {
      font-weight: bold;
      font-size: 12px;
    }

    .job-company {
      text-transform: uppercase;
      font-size: 11px;
      color: #111;
    }

    .job-dates {
      float: right;
      font-size: 11px;
    }

    .clearfix {
      clear: both;
    }

    .about {
      margin-top: 15px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Left Sidebar -->
    <div class="left">
      <h1>ANAISHA PARVATI</h1>
      <p>Marketing Manager</p>

      <div class="section contact">
        <p>📞 +123-456-7890</p>
        <p>📍 123 Anywhere St, Any City</p>
        <p>🌐 www.reallygreatsite.com</p>
        <p>✉️ hello@reallygreatsite.com</p>
      </div>

      <div class="section">
        <h2>EDUCATION</h2>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>
      </div>

      <div class="section">
        <h2>SKILLS</h2>
        <p>• Market Analysis</p>
        <div class="progress-bar"><div class="progress" style="width: 90%"></div></div>
        <p>• Sales</p>
        <div class="progress-bar"><div class="progress" style="width: 85%"></div></div>
        <p>• Techniques</p>
        <div class="progress-bar"><div class="progress" style="width: 80%"></div></div>
        <p>• Development</p>
        <div class="progress-bar"><div class="progress" style="width: 75%"></div></div>
        <p>• Management</p>
        <div class="progress-bar"><div class="progress" style="width: 88%"></div></div>
      </div>

      <div class="section">
        <h2>EXPERTISE</h2>
        <p>• Strategic Planning</p>
        <div class="progress-bar"><div class="progress" style="width: 90%"></div></div>
        <p>• Communication</p>
        <div class="progress-bar"><div class="progress" style="width: 85%"></div></div>
        <p>• Data Analysis</p>
        <div class="progress-bar"><div class="progress" style="width: 80%"></div></div>
        <p>• Digital Marketing</p>
        <div class="progress-bar"><div class="progress" style="width: 88%"></div></div>
      </div>
    </div>

    <!-- Right Content -->
    <div class="right">
      <div class="section">
        <h2>ABOUT ME</h2>
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="section">
        <h2>WORK EXPERIENCE</h2>

        <div class="job">
          <p class="job-company">AROWWAI INDUSTRIES <span class="job-dates">NOW–2024</span></p>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
          </ul>
        </div>

        <div class="job">
          <p class="job-company">GINYARD INTERNATIONAL CO. <span class="job-dates">2023–2022</span></p>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
          </ul>
        </div>

        <div class="job">
          <p class="job-company">INGOUDE COMPANY <span class="job-dates">2021–2020</span></p>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
