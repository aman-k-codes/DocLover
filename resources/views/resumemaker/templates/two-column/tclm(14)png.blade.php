<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>tclm(14)png</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
            size: A4;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 98%;
            font-size: 12px;
            color: #333;
        }

        .container {
            display: table;
            width: 100%;
            height: 100%;
        }

        .left {
            display: table-cell;
            width: 70%;
            padding: 25px;
            vertical-align: top;
        }

        .right {
            display: table-cell;
            width: 30%;
            height: 97%;
            background-color: #f7f7f7;
            padding: 25px;
            vertical-align: top;
        }

        h1 {
            color: #2e6cdf;
            font-size: 24px;
            margin: 0 0 5px 0;
        }

        h2 {
            font-size: 14px;
            color: #111;
            margin: 20px 0 10px;
            text-transform: uppercase;
        }

        h3 {
            font-size: 13px;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .date-range {
            float: right;
            font-weight: normal;
            font-size: 12px;
            color: #000;
        }

        ul {
            padding-left: 18px;
            margin-top: 5px;
        }

        ul li {
            margin-bottom: 5px;
        }

        .job-title {
            font-weight: bold;
        }

        .right h2 {
            color: #2e6cdf;
        }

        .right p,
        .right li {
            font-size: 12px;
            margin: 5px 0;
        }

        .small-heading {
            font-style: italic;
            font-weight: bold;
            margin-top: 10px;
        }

        .section-divider {
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- LEFT CONTENT -->
        <div class="left">
            <h1>First Last</h1>
            <p><strong>Data Scientist</strong></p>
            <p>
                Data Scientist with three years of experience in analyzing large data sets and coming up with
                data-driven insights for early-stage technology companies. Worked in teams of 8-12 team members.
            </p>

            <h2>Work Experience</h2>

            <div>
                <p><span class="job-title">Junior Data Scientist</span> <span class="date-range">Nov 2015 –
                        Present</span><br>
                    Resume Worded, New York, NY</p>
                <ul>
                    <li>Launched Miami office with lead Director and recruited a new team of 10 employees; grew office
                        revenue by 200%.</li>
                    <li>Led first major A/B testing campaign, resulting in 7.5% increased conversions.</li>
                    <li>Built dashboards saving 10+ hours/week of reporting work.</li>
                    <li>Reduced signup drop-offs from 65% to 15% using ML techniques.</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <div>
                <p><span class="job-title">Business Analyst</span> <span class="date-range">Jun 2013 – Oct
                        2015</span><br>
                    Growthsi, San Francisco, CA</p>
                <ul>
                    <li>Led redesigns of mobile app and pricing strategy.</li>
                    <li>Increased revenue by 35% and margin by 12% through strategic pricing.</li>
                    <li>Developed training programs and cut onboarding time by 50%.</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <div>
                <p><span class="job-title">Business Development Consultant</span> <span class="date-range">Aug 2010 –
                        Jan 2013</span><br>
                    Resume Worded’s Exciting Company, New York, NY</p>
                <ul>
                    <li>Liaised with C-suite clients and boosted engagement for 100k+ member platform.</li>
                    <li>Strengthened partnerships with 6 major travel partners.</li>
                    <li>Executed referral program yielding 50% growth and $2MM revenue increase.</li>
                </ul>
            </div>
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="right">
            <h2>Contact</h2>
            <p>Denver, OH (Open to Remote)</p>
            <p>+1-234-456-789</p>
            <p>email@resumeworded.com</p>
            <p>linkedin.com/in/username</p>
            <p>github.com/resumeworded</p>

            <h2>Skills</h2>

            <p class="small-heading">Data Visualization/Engineering:</p>
            <ul>
                <li>Tableau (Advanced)</li>
                <li>Looker (Experienced)</li>
                <li>Segment</li>
                <li>Amplitude</li>
            </ul>

            <p class="small-heading">Techniques:</p>
            <ul>
                <li>Hypothesis Testing</li>
                <li>Recommendation Engines</li>
                <li>Customer Segmentation Analysis</li>
            </ul>

            <p class="small-heading">Tools and Frameworks:</p>
            <ul>
                <li>ElasticSearch</li>
                <li>Python (Keras, Scikit-learn)</li>
                <li>Hadoop</li>
                <li>Databases (MySQL)</li>
            </ul>

            <p><em>Don’t forget to use Resume Worded to scan your resume before you send it off.</em></p>

            <h2>Education</h2>
            <p><strong>Resume Worded University</strong><br>
                Bachelor of Engineering<br>
                Major in Computer Science<br>
                Minors in Mathematics and Statistics<br>
                Boston, MA – May 2018</p>
            <p>Awards: Dean’s List 2012 (Top 10%)</p>

            <h2>Other</h2>
            <ul>
                <li>Volunteered in a 3-month data science project</li>
                <li>ABC Certification (2022)</li>
                <li>Completed 10+ competitions on Kaggle in 2021</li>
            </ul>
        </div>
    </div>

</body>

</html>
