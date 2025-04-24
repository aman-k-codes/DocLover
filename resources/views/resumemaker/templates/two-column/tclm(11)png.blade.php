<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Resume</title>
  <style>
    @page {
      margin: 0;
      padding: 0;
    }
    body {
      margin: 0;
      font-family: DejaVu Sans, sans-serif;
      font-size: 12px;
    }
    .container {
      display: table;
      width: 100%;
      table-layout: fixed;
    }
    .left {
      display: table-cell;
      width: 35%;
      background-color: #0A3D62;
      color: white;
      padding: 15px;
    }
    .right {
      display: table-cell;
      width: 65%;
      padding: 20px;
      color: #000;
    }
    h1 {
      font-size: 20px;
      margin-bottom: 5px;
    }
    h2 {
      font-size: 14px;
      margin-bottom: 10px;
    }
    .section-title {
      font-weight: bold;
      font-size: 13px;
      text-transform: uppercase;
      margin-top: 20px;
      margin-bottom: 5px;
      border-bottom: 1px solid #ccc;
    }
    .job-title {
      font-weight: bold;
      margin-top: 10px;
    }
    .company {
      font-style: italic;
      margin-bottom: 5px;
    }
    ul {
      padding-left: 18px;
      margin-top: 5px;
      margin-bottom: 10px;
    }
    .left h3 {
      font-size: 14px;
      margin-top: 20px;
      border-bottom: 1px dashed #ccc;
      padding-bottom: 3px;
    }
    .highlight {
      font-weight: bold;
    }
    .blue-box {
      color: white;
      font-weight: bold;
      font-size: 14px;
      margin-bottom: 10px;
    }
    .left p, .left li {
      color: white;
    }
    .contact p {
      margin: 4px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Left Column -->
    <div class="left">
      <div class="blue-box">BUSINESS<br>INTELLIGENCE<br>ANALYST</div>

      <h3>EDUCATION</h3>
      <p><strong>M.S.</strong><br>
      Computer Science<br>
      San Diego State University<br>
      Feb 2016 - June 2018<br>
      San Diego, CA</p>

      <p><strong>B.S.</strong><br>
      Computer Science<br>
      National University<br>
      Aug 2011 - May 2015<br>
      San Diego, CA</p>

      <h3>SKILLS</h3>
      <ul>
        <li>Google Analytics 4</li>
        <li>Data Cleaning</li>
        <li>SQL</li>
        <li>Custom Funnels</li>
        <li>Power BI</li>
        <li>Data Analysis</li>
        <li>Data Attribution</li>
        <li>BigQuery</li>
      </ul>

      <h3>CERTIFICATIONS</h3>
      <p>YEAR 2019<br>Google Analytics Individual Qualification (GAIQ)</p>
      <p>YEAR 2018<br>Advanced Google Analytics</p>
      <p>YEAR 2016<br>Google Data Analytics Professional Certificate (GDAC)</p>
    </div>

    <!-- Right Column -->
    <div class="right">
      <h1>Ashley Taylor</h1>
      <div class="contact">
        <p>ashley.taylor@email.com | (123) 456-7890</p>
        <p>San Diego, C | <u>LinkedIn</u></p>
      </div>

      <div class="section-title">Career Objective</div>
      <p>Seeking a challenging role as a business intelligence analyst at Qualcomm, where I can apply my extensive background in data science. I aim to use advanced Google Analytics techniques to extract actionable insights from complex datasets and expedite decision-making.</p>

      <div class="section-title">Work Experience</div>

      <p class="job-title">MARCH 2021 – CURRENT</p>
      <p class="company">Data Scientist | Illumina | San Diego, CA</p>
      <ul>
        <li>Pioneered advanced segmenting in GA4, creating 3 successful marketing campaigns.</li>
        <li>Uncovered insights helping Illumina capitalize on 9 market trends.</li>
        <li>Trained junior analysts on data analysis techniques.</li>
        <li>Introduced attribution models, <span class="highlight">increasing ROI by 8.4%</span>.</li>
      </ul>

      <p class="job-title">JULY 2019 – FEBRUARY 2021</p>
      <p class="company">Data Analyst | ServiceNow | San Diego, CA</p>
      <ul>
        <li>Integrated data from 6 sources, improving meeting efficiency by 11 minutes.</li>
        <li>Used GA to track patterns for 3 clients, <span class="highlight">boosting engagement by 47%</span>.</li>
        <li>Revamped cleaning process, raising predictive accuracy by 9%.</li>
        <li>Reduced SQL reporting time by 16 minutes.</li>
      </ul>

      <p class="job-title">DECEMBER 2018 – MAY 2019</p>
      <p class="company">Data Analyst Intern | Teradata | San Diego, CA</p>
      <ul>
        <li><span class="highlight">Cleaned 1.3 GB of raw data</span>, improving accuracy.</li>
        <li>Used GA attribution models for better spend analysis.</li>
        <li>Analyzed BigQuery, reported 2 bottlenecks.</li>
        <li>Created Power BI dashboards.</li>
      </ul>

      <div class="section-title">Achievements</div>
      <ul>
        <li><strong>2022</strong> – Grew Annual Revenue by 11% with Custom Funnels | Illumina</li>
        <li><strong>2014</strong> – First Prize in Google Analytics Hackathon | National University</li>
      </ul>
    </div>
  </div>
</body>
</html>
