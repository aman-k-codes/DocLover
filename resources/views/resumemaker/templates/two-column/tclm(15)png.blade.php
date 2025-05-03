<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>tclm(15)png</title>
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
            margin: 40px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
        }

        h2 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 25px;
            color: #1a1a1a;
        }

        h3 {
            font-size: 12px;
            font-weight: bold;
        }

        p {
            margin: 5px 0;
            line-height: 1.5;
        }

        .container {
            display: flex;
            flex-direction: row;
        }

        .left {
            width: 70%;
            padding-right: 30px;
        }

        .right {
            width: 30%;
            padding-left: 20px;
            border-left: 1px solid #ccc;
        }

        .section-title {
            color: #0046be;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 25px;
            font-size: 11px;
        }

        ul {
            margin: 0 0 10px 20px;
            padding: 0;
        }

        li {
            margin-bottom: 6px;
        }

        .job {
            margin-top: 15px;
        }

        .job-title {
            font-weight: bold;
        }

        .job-company {
            font-style: italic;
        }

        .small-text {
            font-size: 11px;
        }

        .contact-info {
            text-align: right;
        }

        .contact-info p {
            margin: 3px 0;
        }

        .bullet {
            list-style-type: disc;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <table width="100%">
        <tr>
            <td>
                <h1>First Last</h1>
                <h2 style="margin: 0; font-size: 16px;">Marketing Manager</h2>
                <p style="max-width: 500px;">
                    Marketing Manager with five years of experience leading product development and distribution. Led
                    teams of 5–15 people across technology, business, and design departments.
                </p>
            </td>
            <td class="contact-info">
                <p>San Francisco, CA 12345</p>
                <p>+1 234 567-890</p>
                <p><a href="#">first.last@resumeworded.com</a></p>
                <p><a href="#">linkedin.com/in/resumeworded</a></p>
            </td>
        </tr>
    </table>

    <div class="container">
        <!-- LEFT COLUMN -->
        <div class="left">
            <div class="section">
                <p class="section-title">Experience</p>

                <div class="job">
                    <h3>Resume Worded, New York, NY</h3>
                    <p class="job-title">Marketing Manager</p>
                    <p class="small-text">January 2020 – Present</p>
                    <ul class="bullet">
                        <li>Developed new scoring techniques by driving initiatives such as marketing performance
                            reports, reporting a 35% marketing performance increase in 6 months.</li>
                        <li>Increased site traffic by 15% by developing, executing, and measuring integrated,
                            multi-channel marketing strategies.</li>
                        <li>Gained an increase in annual revenue by 60% through organizing and implementing direct and
                            digital marketing strategies.</li>
                        <li>Managed a $1.5 million marketing budget while creating a budget surplus with consistent
                            sales.</li>
                    </ul>
                </div>

                <div class="job">
                    <h3>Growthsi, Remote</h3>
                    <p class="job-title">Marketing Coordinator</p>
                    <p class="small-text">July 2016 – January 2020</p>
                    <ul class="bullet">
                        <li>Maintained the yearly cost saving of 15% by investigating options on cost, quality, and the
                            company’s needs.</li>
                        <li>Generated over $1.5 million in revenue through digital marketing for over 30 events.</li>
                        <li>Managed all marketing and promotional materials valued at up to $1.3 million by ordering,
                            tracking, and reviewing inventory levels.</li>
                    </ul>
                </div>

                <div class="job">
                    <h3>Resume Worded, Boston, MA</h3>
                    <p class="job-title">Operations Assistant</p>
                    <p class="small-text">January 2012 – June 2016</p>
                    <ul class="bullet">
                        <li>Maintained responsibility for operations and staffing for 20 associates across multiple
                            facilities with more than $3M in inventory.</li>
                        <li>Supervised the quality of service, procurement and distribution of products to 70,000+
                            customers.</li>
                        <li>Coordinated operations of over 150 stores and distribution centers nationwide.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="right">

            <div class="section">
                <p class="section-title">Skills</p>
                <ul>
                    <li>Facebook Ads</li>
                    <li>Print Media</li>
                    <li>Social Media Management</li>
                    <li>SEO</li>
                    <li>Drupal</li>
                    <li>SEM</li>
                </ul>
            </div>

            <div class="section">
                <p class="section-title">Education</p>
                <p><strong>Resume Worded University</strong><br>
                    Master of Business Management<br>
                    January 2012<br>
                    New York, NY</p>
                <ul>
                    <li>Awards: Resume Worded Teaching Fellow (Top 10%)</li>
                    <li>Completed one-year study abroad with Singapore University</li>
                </ul>
            </div>

            <div class="section">
                <p class="section-title">Other</p>
                <ul>
                    <li>Volunteer 20 hours/month at the ABC foundation</li>
                    <li>Operations Specialist certified (2016)</li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>
