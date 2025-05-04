<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(18)png</title>
  <style>
    @page {
      margin: 0;
      padding: 0;
      size: A4;
    }
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      height: 98%;
      margin: 0;
      padding: 0;
    }

    .container {
      display: table;
      width: 100%;
      table-layout: fixed;
    }

    .sidebar {
      display: table-cell;
      width: 30%;
      height: 98%;
      background-color: #eae1f7;
      padding: 20px;
      vertical-align: top;
    }

    .main {
      display: table-cell;
      width: 70%;
      padding: 20px;
      vertical-align: top;
    }

    h1 {
      font-size: 22px;
      margin: 0;
    }

    h2 {
      font-size: 14px;
      margin: 15px 0 5px;
      text-transform: uppercase;
      color: #333;
    }

    h3 {
      font-size: 13px;
      margin: 10px 0 3px;
      font-weight: bold;
    }

    p {
      margin: 5px 0;
    }

    ul {
      margin: 5px 0 10px 20px;
      padding: 0;
    }

    li {
      margin-bottom: 5px;
    }

    .contact-info {
      margin-bottom: 20px;
    }

    .bold {
      font-weight: bold;
    }

    .progress-bar {
      margin: 5px 0 15px;
    }

    .progress-label {
      font-weight: bold;
      display: inline-block;
      width: 50%;
    }

    .progress {
      display: inline-block;
      background: #ccc;
      height: 8px;
      width: 45%;
      vertical-align: middle;
      margin-left: 5px;
    }

    .fill-98 { width: 98%; background-color: #8c63c4; }
    .fill-97 { width: 97%; background-color: #8c63c4; }
    .fill-96 { width: 96%; background-color: #8c63c4; }
    .fill-95 { width: 95%; background-color: #8c63c4; }

    .section-divider {
      border-top: 1px solid #bbb;
      margin: 15px 0;
    }

    .license-box {
      border-top: 1px solid #000;
      margin-top: 20px;
      padding-top: 5px;
    }

    a {
      color: #333;
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h1>Nilesh Navrang</h1>
    <p><strong>Emergency Room Nurse</strong></p>

    <div class="contact-info">
      <p><img src="{{public_path('assets/resume-icon/mail.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> sandrabell@email.com</p>
      <p><img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> (123) 456-7890</p>
      <p><img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> Austin, TX</p>
      <p><img src="{{public_path('assets/resume-icon/linkedin.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""><a href="#">LinkedIn</a></p>
    </div>

    <h2>Education</h2>
    <p class="bold">Bachelor of Science in Nursing (BSN)</p>
    <p>Nursing<br>Concordia University Texas<br>AUG 2009 - SEP 2011<br>Austin, TX</p>

    <p class="bold">Licensed Practical Nurse (LPN) Diploma</p>
    <p>Nursing<br>Concordia University Texas<br>MAY 2008 - JUL 2009<br>Austin, TX</p>

    <h2>Key Skills</h2>
    <ul>
      <li>Triage Expertise</li>
      <li>Patient Care & Support</li>
      <li>Cardiac Emergency</li>
      <li>Trauma Nursing Skills</li>
      <li>Crisis Management</li>
      <li>Multitasking</li>
      <li>Critical Thinking</li>
    </ul>

    <h2>Certifications</h2>
    <ul>
      <li>Certified Emergency Nurse – JAN 2012</li>
      <li>Basic Life Support – MAR 2010</li>
      <li>Trauma Nursing Core Course – SEP 2008</li>
    </ul>

    <div class="license-box">
      <p><strong>License Number: 11223344</strong></p>
    </div>
  </div>

  <!-- Main content -->
  <div class="main">
    <h2>Summary</h2>
    <p>
      Experienced Emergency Room (ER) nurse with a proven background in critical cardiac emergency care and triage, bringing 14 years of experience to the Heart Hospital of Austin. Acknowledged for maintaining a 97% success rate for 350+ cases. I yearn to provide immediate and high-quality cardiac care for all emergencies.
    </p>

    <h2>Professional Skills</h2>
    <div class="progress-bar">
      <div class="progress-label">Triage Expertise</div>
      <div class="progress"><div class="fill-98"></div></div>
    </div>
    <div class="progress-bar">
      <div class="progress-label">Multitasking</div>
      <div class="progress"><div class="fill-95"></div></div>
    </div>
    <div class="progress-bar">
      <div class="progress-label">Trauma Nursing Skills</div>
      <div class="progress"><div class="fill-95"></div></div>
    </div>
    <div class="progress-bar">
      <div class="progress-label">Critical Thinking</div>
      <div class="progress"><div class="fill-97"></div></div>
    </div>
    <div class="progress-bar">
      <div class="progress-label">Crisis Management</div>
      <div class="progress"><div class="fill-96"></div></div>
    </div>

    <h2>Medical Experience</h2>

    <h3>ER Nurse | St. David’s HealthCare, Austin, TX</h3>
    <p><strong>Department:</strong> Emergency Room (ER)</p>
    <p><strong>NOV 2017 – PRESENT</strong></p>
    <ul>
      <li>Maintained a 97% success rate in 379 cardiac emergencies</li>
      <li>Decreased response time by 23 minutes via efficient communication protocols</li>
      <li>Improved ER workflow by 32% while maintaining care quality</li>
    </ul>

    <h3>Urgent Care Nurse | Baylor Scott & White Health, Dallas, TX</h3>
    <p><strong>Department:</strong> Emergency Room (ER)</p>
    <p><strong>MAY 2012 – OCT 2017</strong></p>
    <ul>
      <li>Provided immediate care to 134 emergency patients</li>
      <li>Handled 17 critical, near-death situations</li>
      <li>Diagnosed common injuries efficiently</li>
    </ul>

    <h3>Trauma Nurse Coordinator | North Austin Medical Center, Austin, TX</h3>
    <p><strong>Department:</strong> Emergency Room (ER)</p>
    <p><strong>FEB 2009 – APR 2012</strong></p>
    <ul>
      <li>Led 3 initiatives reducing trauma complications by 13%</li>
      <li>Implemented digital record system for 22% faster data entry</li>
      <li>Monitored weekly progress of 43 trauma patients</li>
    </ul>

    <h2>Professional Associations</h2>
    <ul>
      <li>Emergency Nurses Association (ENA)</li>
      <li>American Nurses Association (ANA)</li>
    </ul>
  </div>
</div>

</body>
</html>
