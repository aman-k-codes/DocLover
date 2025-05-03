<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>tclm(24)png</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      color: #000;
    }

    .container {
      display: flex;
      width: 100%;
      border: 5px solid #000;
    }

    .sidebar {
      background-color: #1a1a1a;
      color: white;
      width: 30%;
      padding: 20px;
    }

    .main {
      width: 70%;
      padding: 30px 20px 20px 20px;
    }

    h1 {
      font-size: 22px;
      font-weight: bold;
    }

    h2 {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    h3 {
      font-size: 14px;
      font-weight: bold;
      margin-top: 15px;
    }

    p, li {
      font-size: 12px;
      margin: 5px 0;
      line-height: 1.4;
    }

    ul {
      padding-left: 18px;
      margin-top: 5px;
    }

    .contact p {
      font-size: 11px;
      margin: 4px 0;
    }

    .section {
      margin-top: 25px;
    }

    .bold {
      font-weight: bold;
    }

    .small {
      font-size: 11px;
    }

    .job-title {
      font-weight: bold;
      margin-bottom: 3px;
    }

    .org {
      font-weight: bold;
      margin-bottom: 2px;
    }

    .date-location {
      font-style: italic;
      margin-bottom: 6px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Left Sidebar -->
    <div class="sidebar">
      <h1>JOHN SMITH</h1>
      <p>Chief Executive Officer</p>

      <div class="section contact">
        <p>📧 johnsmith@beamjobs.com</p>
        <p>📞 (123) 456-7890</p>
        <p>📍 Houston, TX</p>
        <p>🔗 linkedin.com/in/johnsmith</p>
      </div>

      <div class="section">
        <h3>OBJECTIVE</h3>
        <p>Resume objective is an eye-catching statement of your career intent that's placed on top of your resume. The resume objective provides a 2-3 sentence snapshot of your professional experience, skills, and achievements, and explains why they make you the right candidate for the job.</p>
      </div>

      <div class="section">
        <h3>EDUCATION</h3>
        <p><strong>B.S.</strong><br>Statistics<br><strong>University of Maryland</strong><br>
        📅 September 2006 – April 2010<br>📍 College Park, MD</p>
      </div>

      <div class="section">
        <h3>SKILLS</h3>
        <ul>
          <li>Leadership</li>
          <li>Product Strategy</li>
          <li>Product Expansion</li>
          <li>Agile Development</li>
          <li>A/B testing and experimentation</li>
        </ul>
      </div>

      <div class="section">
        <h3>CERTS</h3>
        <ul>
          <li>PMP, IRN</li>
          <li>Product Research</li>
          <li>B2B Marketing</li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main">
      <h2>WORK EXPERIENCE</h2>

      <!-- Amazon -->
      <div class="section">
        <p class="job-title">Chief Executive Officer</p>
        <p class="org">Amazon</p>
        <p class="date-location">January 2017 – current | Houston, TX</p>
        <ul>
          <li>Managed a portfolio of small, medium, and large product initiatives united under a clear product strategy that generated over $6M in annual revenue</li>
          <li>Played an active role in the recruitment process, leading the expansion of the product team from 5 PMs and engineers to over 20</li>
          <li>Directly managed 4 junior PMs and 6 mid-level PMs and provided regular job performance feedback to improve the team's output by 18% year over year</li>
          <li>Led expansion of the product into the virtual event ticketing space which grew over 110% from 2019 to 2020</li>
        </ul>
      </div>

      <!-- Shopify -->
      <div class="section">
        <p class="job-title">Department Head</p>
        <p class="org">Shopify</p>
        <p class="date-location">January 2013 – January 2017 | Houston, TX</p>
        <ul>
          <li>Performed cohort analysis that identified an opportunity to reduce pricing by 25% for a segment of users boosting yearly revenue by $720,000</li>
          <li>Led the development for a new B2C SaaS product to enable students to check their writing for grammar and plagiarism which grew to 120,000 daily active users in the first year</li>
          <li>Identified product gaps in Google Analytics and led design of new features across engineering and design resulting in a yearly revenue increase of $3.1M through increased engagement</li>
          <li>Led a team of one full-time employee and three contractors</li>
        </ul>
      </div>

      <!-- Ebay -->
      <div class="section">
        <p class="job-title">Product Manager</p>
        <p class="org">Ebay</p>
        <p class="date-location">April 2010 – January 2013 | Houston, TX</p>
        <ul>
          <li>Implemented a referral program for highly active customers which led to a net increase in new users of 27,000 annually</li>
          <li>Implemented a long-term pricing experiment that improved customer lifetime value by 22%</li>
          <li>Worked closely with leadership to present key indicators of product growth and adoption leading to the close of a $4.1M series B</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
