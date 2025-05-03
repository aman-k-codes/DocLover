<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(27)png</title>
  <style>
    @page{
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

    table {
      width: 100%;
      border-collapse: collapse;
    }

    .main-table td {
      vertical-align: top;
    }

    .left {
      width: 35%;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .right {
      width: 65%;
      padding: 20px;
    }

    h1 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    h2 {
      font-size: 14px;
      margin-top: 20px;
      border-bottom: 1px solid #000;
      padding-bottom: 3px;
    }

    h3 {
      font-size: 12px;
      margin-top: 10px;
      font-weight: bold;
    }

    p {
      margin: 4px 0;
      font-size: 11px;
      line-height: 1.5;
    }

    ul {
      margin: 5px 0 10px 15px;
      padding: 0;
    }

    li {
      margin-bottom: 4px;
    }

    .progress-bar {
      background-color: #ccc;
      height: 5px;
      width: 100%;
      margin-bottom: 10px;
    }

    .progress {
      background-color: #000;
      height: 5px;
    }

    .job {
      margin-top: 15px;
    }

    .job-company {
      font-size: 11px;
      font-weight: bold;
    }

    .job-title {
      font-size: 12px;
      font-weight: bold;
    }

    .job-dates {
      float: right;
      font-size: 10px;
    }

    .clearfix {
      clear: both;
    }
  </style>
</head>
<body>
  <table class="main-table">
    <tr>
      <!-- LEFT COLUMN -->
      <td class="left">
        <h1>Nilesh Navrang</h1>
        <p>Marketing Manager</p>

        <h2>CONTACT</h2>
        <p>+123-456-7890</p>
        <p>123 Anywhere St, Any City</p>
        <p>www.reallygreatsite.com</p>
        <p>hello@reallygreatsite.com</p>

        <h2>EDUCATION</h2>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>
        <p><strong>BORCELLE UNIVERSITY</strong><br>Lorem ipsum dolor<br>2020 - 2023</p>

        <h2>SKILLS</h2>
        <p>Market Analysis</p>
        <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
        <p>Sales</p>
        <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
        <p>Techniques</p>
        <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
        <p>Development</p>
        <div class="progress-bar"><div class="progress" style="width: 75%;"></div></div>
        <p>Management</p>
        <div class="progress-bar"><div class="progress" style="width: 88%;"></div></div>

        <h2>EXPERTISE</h2>
        <p>Strategic Planning</p>
        <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
        <p>Communication</p>
        <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
        <p>Data Analysis</p>
        <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
        <p>Digital Marketing</p>
        <div class="progress-bar"><div class="progress" style="width: 88%;"></div></div>
      </td>

      <!-- RIGHT COLUMN -->
      <td class="right">
        <h2>ABOUT ME</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <h2>WORK EXPERIENCE</h2>

        <div class="job">
          <p class="job-company">AROWWAI INDUSTRIES <span class="job-dates">NOW–2024</span></p>
          <div class="clearfix"></div>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <ul>
            <li>Led campaign strategy and digital outreach</li>
            <li>Increased engagement by 27%</li>
          </ul>
        </div>

        <div class="job">
          <p class="job-company">GINYARD INTERNATIONAL CO. <span class="job-dates">2023–2022</span></p>
          <div class="clearfix"></div>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <ul>
            <li>Collaborated with marketing team on quarterly campaigns</li>
            <li>Designed internal data analysis dashboard</li>
          </ul>
        </div>

        <div class="job">
          <p class="job-company">INGOUDE COMPANY <span class="job-dates">2021–2020</span></p>
          <div class="clearfix"></div>
          <p class="job-title">Office Marketing</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <ul>
            <li>Drafted marketing material for local clients</li>
            <li>Managed CRM tools for lead tracking</li>
          </ul>
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
