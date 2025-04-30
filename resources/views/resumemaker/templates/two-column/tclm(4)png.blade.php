<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume - John Smith</title>
  <style>
    @page {
      margin: 0;
      padding: 0;
      size: A4;
    }

    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      margin: 0;
      padding: 10px;
      color: #000;
      line-height: 1.6;
    }

    table.container {
      width: 100%;
      border-collapse: collapse;
    }

    td.left, td.right {
      vertical-align: top;
      padding: 10px;
    }

    td.left {
      width: 35%;
      border-right: 2px solid #000;
    }

    td.right {
      width: 65%;
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
      margin: 6px 0;
      color: #555;
    }

    .contact img {
      vertical-align: middle;
      margin-right: 5px;
    }

    .bold {
      font-weight: bold;
      color: #000;
    }
  </style>
</head>

<body>

  <table class="container">
    <tr>
      <td class="left">
        <h1>John Smith</h1>
        <div class="title">Chief Executive Officer</div>
        <div class="contact">
          <p><img src="path/to/email-icon.png" width="14" alt="Email Icon"> johnsmith@beamjobs.com</p>
          <p><img src="path/to/phone-icon.png" width="14" alt="Phone Icon"> (123) 456-7890</p>
          <p><img src="path/to/location-icon.png" width="14" alt="Location Icon"> Houston, TX, USA</p>
          <p><img src="path/to/linkedin-icon.png" width="14" alt="LinkedIn Icon"> linkedin.com/in/johnsmith</p>
        </div>

        <div class="section-title">Profile</div>
        <p>Dynamic and result-driven CEO with over 15 years of leadership experience scaling startups into industry leaders. Proven expertise in corporate strategy, team leadership, and business development across tech and retail industries.</p>

        <div class="section-title">Education</div>
        <p class="bold">Master of Business Administration (MBA)</p>
        <p>Harvard Business School<br />
          <span class="small">Graduated: 2010 | Boston, MA</span>
        </p>

        <p class="bold">Bachelor of Science in Statistics</p>
        <p>University of Maryland<br />
          <span class="small">Graduated: 2006 | College Park, MD</span>
        </p>

        <div class="section-title">Skills</div>
        <ul>
          <li>Executive Leadership</li>
          <li>Strategic Planning & Execution</li>
          <li>Global Market Expansion</li>
          <li>Financial Planning & Analysis</li>
          <li>Data-Driven Decision Making</li>
          <li>Organizational Development</li>
        </ul>

        <div class="section-title">Certifications</div>
        <ul>
          <li>Project Management Professional (PMP)</li>
          <li>Certified Scrum Product Owner (CSPO)</li>
          <li>Advanced Executive Leadership Program – Stanford GSB</li>
        </ul>
      </td>

      <td class="right">
        <div class="section-title">Work Experience</div>

        <p class="bold">Chief Executive Officer</p>
        <p>Amazon Inc. — January 2017 - Present | Houston, TX</p>
        <ul>
          <li>Directed corporate strategy, resulting in a 40% revenue increase over 3 years, reaching $8M annual revenue.</li>
          <li>Expanded operations into 3 new international markets, boosting global presence by 25%.</li>
          <li>Developed and implemented a company-wide agile transformation strategy, increasing product delivery speed by 30%.</li>
          <li>Mentored 10+ directors across different departments, improving cross-functional collaboration by 20%.</li>
        </ul>

        <p class="bold">Director of Product Management</p>
        <p>Shopify Inc. — January 2013 - January 2017 | Austin, TX</p>
        <ul>
          <li>Led product development for 5 SaaS products, resulting in $3.5M incremental revenue.</li>
          <li>Introduced data-driven experimentation frameworks, reducing time-to-market by 22%.</li>
          <li>Built and managed a cross-functional team of 15 engineers, designers, and marketers.</li>
          <li>Grew enterprise client base by 18% year-over-year through tailored product innovations.</li>
        </ul>

        <p class="bold">Product Manager</p>
        <p>eBay Inc. — April 2010 - January 2013 | San Jose, CA</p>
        <ul>
          <li>Implemented a customer loyalty program, increasing repeat purchase rate by 12% within 6 months.</li>
          <li>Designed and executed A/B tests on pricing models, driving a 9% lift in conversion rates.</li>
          <li>Collaborated closely with executive leadership to define key performance metrics (KPIs) for new initiatives.</li>
        </ul>
      </td>
    </tr>
  </table>

</body>

</html>
