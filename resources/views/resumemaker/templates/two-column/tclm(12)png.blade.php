<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(12)png</title>
  <style>
    @page {
      margin: 0;
      padding: 0;
      size: A4;
    }
    body {
      font-family: Arial, sans-serif;
      color: #000;
      margin: 0;
      padding: 0;
      font-size: 12px;
    }

    .wrapper {
      border: 1px solid #222;
      padding: 30px;
      margin: 20px;
    }

    .name {
      text-align: center;
    }

    .name h1 {
      font-size: 28px;
      margin: 0;
    }

    .name h2 {
      font-size: 14px;
      font-weight: normal;
      margin: 5px 0 15px 0;
      letter-spacing: 1px;
    }

    .divider {
      border-top: 1px solid #000;
      margin: 15px 0;
    }

    .contact {
      text-align: center;
      font-size: 12px;
    }

    .contact span {
      margin: 0 10px;
      display: inline-block;
    }

    .section {
      margin-top: 25px;
    }

    .section-title {
      font-size: 14px;
      font-weight: bold;
      text-transform: uppercase;
      border-bottom: 1px solid #000;
      padding-bottom: 4px;
      margin-bottom: 10px;
    }

    .education-entry, .experience-entry {
      margin-bottom: 15px;
    }

    .edu-date, .exp-date {
      font-weight: bold;
      width: 100px;
      display: inline-block;
    }

    .edu-title, .exp-title {
      font-weight: bold;
    }

    .edu-org, .exp-org {
      font-style: italic;
      color: #555;
    }

    .skills-grid {
      display: table;
      width: 100%;
      margin-top: 10px;
    }

    .skill-item {
      display: table-cell;
      padding: 5px;
      text-align: center;
      width: 25%;
      vertical-align: middle;
    }

    .reference-entry {
      display: inline-block;
      width: 48%;
      vertical-align: top;
    }

    .reference-entry p {
      margin: 3px 0;
    }

    .bold {
      font-weight: bold;
    }

  </style>
</head>
<body>

  <div class="wrapper">
    <div class="name">
      <h1>Nilesh Navrang</h1>
      <h2>HEAD MANAGER</h2>
    </div>

    <div class="contact">
      <span><img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> +123-456-7890</span>
      <span><img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> 123 Anywhere Street., Any City</span>
      <span><img src="{{public_path('assets/resume-icon/mail.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> hello@reallygreatsite.com</span>
    </div>

    <div class="divider"></div>

    <div class="section">
      <div class="section-title">About Me</div>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
      </p>
    </div>

    <div class="section">
      <div class="section-title">Education</div>

      <div class="education-entry">
        <span class="edu-date">2020 - 2023</span>
        <span class="edu-org">Wardiere University</span><br>
        <span class="edu-title">Master of Business Management</span><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet sem nec risus egestas accumsan...</p>
      </div>

      <div class="education-entry">
        <span class="edu-date">2016 - 2020</span>
        <span class="edu-org">Borcelle University</span><br>
        <span class="edu-title">Bachelor of Business Management</span><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet sem nec risus egestas accumsan...</p>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Experience</div>

      <div class="experience-entry">
        <span class="exp-date">2023 - NOW</span>
        <span class="exp-org">Borcelle Studio</span><br>
        <span class="exp-title">Head Manager</span><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet sem nec risus egestas accumsan...</p>
      </div>

      <div class="experience-entry">
        <span class="exp-date">2022 - 2023</span>
        <span class="exp-org">Liceria & Co.</span><br>
        <span class="exp-title">General Manager</span><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet sem nec risus egestas accumsan...</p>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Skills</div>
      <div class="skills-grid">
        <div class="skill-item">• Leadership</div>
        <div class="skill-item">• Digital Marketing</div>
        <div class="skill-item">• Communication</div>
        <div class="skill-item">• Innovation</div>
        <div class="skill-item">• Analytics</div>
        <div class="skill-item">• Teamwork</div>
        <div class="skill-item">• Problem Solving</div>
        <div class="skill-item">• Collaboration</div>
      </div>
    </div>

    <div class="section">
      <div class="section-title">References</div>
      <div class="reference-entry">
        <p class="bold">Aarya Agarwal</p>
        <p>CEO of Borcelle Company</p>
        <p><span class="bold">Phone:</span> 123-456-7890</p>
        <p><span class="bold">Social:</span> @reallygreatsite</p>
      </div>

      <div class="reference-entry">
        <p class="bold">Sharin Varma</p>
        <p>HRD of Borcelle Company</p>
        <p><span class="bold">Phone:</span> 123-456-7890</p>
        <p><span class="bold">Social:</span> @reallygreatsite</p>
      </div>
    </div>
  </div>

</body>
</html>
