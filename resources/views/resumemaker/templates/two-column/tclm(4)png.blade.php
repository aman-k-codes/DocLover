<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      margin: 40px;
      color: #000;
      line-height: 1.6;
    }
    .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    .left, .right {
      vertical-align: top;
      padding: 10px;
    }
    .left {
      width: 35%;
      border-right: 2px solid #000;
    }
    .right {
      width: 60%;
      padding-left: 20px;
    }
    h1 {
      font-size: 22px;
      margin-bottom: 10px;
      text-transform: uppercase;
      color: #333;
    }
    .title {
      font-weight: bold;
      margin-bottom: 10px;
      font-size: 16px;
    }
    .section-title {
      font-weight: bold;
      font-size: 14px;
      border-bottom: 2px solid black;
      margin-top: 20px;
      margin-bottom: 10px;
      padding-bottom: 2px;
      text-transform: uppercase;
      color: #000;
    }
    ul {
      padding-left: 20px;
      margin: 5px 0;
    }
    li {
      margin-bottom: 5px;
    }
    .small {
      font-size: 11px;
      color: #555;
    }
    .contact p {
      margin: 4px 0;
      color: #555;
    }
    .contact .bold {
      font-weight: bold;
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <h1>John Smith</h1>
      <div class="title">Chief Executive Officer</div>
      <div class="contact">
        <p><span class="bold">📧</span> johnsmith@beamjobs.com</p>
        <p><span class="bold">📞</span> (123) 456-7890</p>
        <p><span class="bold">📍</span> Houston, TX</p>
        <p><span class="bold">🔗</span> linkedin.com/in/johnsmith</p>
      </div>

      <div class="section-title">Objective</div>
      <p>Resume objective is an eye-catching statement of your career intent that’s placed on top of your resume...</p>

      <div class="section-title">Education</div>
      <p class="bold">B.S. Statistics</p>
      <p>University of Maryland<br/>
      <span class="small">September 2006 - April 2010<br/>College Park, MD</span></p>

      <div class="section-title">Skills</div>
      <ul>
        <li>Leadership</li>
        <li>Product Strategy</li>
        <li>Product Expansion</li>
        <li>Agile Development</li>
        <li>A/B testing and experimentation</li>
      </ul>

      <div class="section-title">Certifications</div>
      <ul>
        <li>PMP, IRN</li>
        <li>Product Research</li>
        <li>B2B Marketing</li>
      </ul>
    </div>

    <div class="right">
      <div class="section-title">Work Experience</div>

      <p class="bold">Chief Executive Officer</p>
      <p>Amazon — January 2017 - current | Houston, TX</p>
      <ul>
        <li>Managed a portfolio... over $6M in annual revenue</li>
        <li>Played an active role in recruitment...</li>
        <li>Directly managed 4 junior PMs and 6 mid-level PMs...</li>
        <li>Led expansion of the product into the virtual event...</li>
      </ul>

      <p class="bold">Department Head</p>
      <p>Shopify — January 2013 - January 2017 | Houston, TX</p>
      <ul>
        <li>Performed cohort analysis that identified...</li>
        <li>Led the development for a new B2C SaaS product...</li>
        <li>Identified product gaps in Google Analytics...</li>
        <li>Led a team of one full-time employee and three contractors</li>
      </ul>

      <p class="bold">Product Manager</p>
      <p>Ebay — April 2010 - January 2013 | Houston, TX</p>
      <ul>
        <li>Implemented a referral program for highly active...</li>
        <li>Implemented a long-term pricing experiment...</li>
        <li>Worked closely with leadership to present key indicators...</li>
      </ul>
    </div>
  </div>
</body>
</html>
