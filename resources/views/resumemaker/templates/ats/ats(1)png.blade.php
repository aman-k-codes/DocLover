<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume</title>
    <style>
         @page {
            margin: 0;
        }
        body {
            font-family: 'Times New Roman', serif;
            background: #fff;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .contact-info {
            font-size: 12px;
            margin-top: 5px;
        }

        .section {
            margin-top: 30px;
        }

        .section-title {
            font-weight: bold;
            border-bottom: 1px solid #000;
            margin-bottom: 10px;
            font-size: 16px;
            text-transform: uppercase;
        }

        .job {
            margin-bottom: 15px;
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }

        .job-title {
            margin: 5px 0;
            font-style: italic;
        }

        ul {
            padding-left: 20px;
            margin: 5px 0;
        }

        .education,
        .skills {
            margin-top: 10px;
        }

        .skills span {
            display: inline-block;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>First Last</h1>
        <div class="contact-info">
            Bay Area, California • +1-234-456-789 • professionalemail@resumeworded.com • linkedin.com/in/username
        </div>
    </div>

    <div class="section">
        <div class="section-title">Summary</div>
        <p>
            Big Data Engineer with twelve years of experience designing and executing solutions for complex business
            problems.
            Migrated local infrastructures to AWS, using [Skill 1] and [Skill 2].
        </p>
    </div>

    <div class="section">
        <div class="section-title">Professional Experience</div>

        <div class="job">
            <div class="job-header">
                <div>Resume Worded, New York, NY</div>
                <div>Jun 2020 – Present</div>
            </div>
            <div class="job-title">Quality Engineer</div>
            <ul>
                <li>Attained 25% growth in revenue and customers by analyzing business needs and designing a new data
                    warehouse.</li>
                <li>Led 10 data initiatives that reduced operating costs by 20% and created customized programming
                    options.</li>
                <li>Built a Big Data platform for processing social media data using Java, Hive, and Hadoop.</li>
                <li>Integrated Hadoop into traditional ETL to load structured and unstructured data.</li>
            </ul>
        </div>

        <div class="job">
            <div class="job-header">
                <div>Growthsi, New York, NY</div>
                <div>Jan 2016 – May 2020</div>
            </div>
            <div class="job-title">Quality Engineer</div>
            <ul>
                <li>Worked with 15 teams to identify and solve data issues with large unstructured datasets.</li>
                <li>Developed pricing strategy boosting margins by 4%.</li>
                <li>Automated ETL across millions of rows, reducing manual workload by 25% monthly.</li>
            </ul>
        </div>

        <div class="job">
            <div class="job-header">
                <div>Third Company, San Diego, CA</div>
                <div>May 2008 – Dec 2014</div>
            </div>
            <div class="job-title">Business Analyst</div>
            <ul>
                <li>Built FIT system that saved $40,000 annually in vendor costs for a web app with 5,000 daily users.
                </li>
                <li>Used Spark in Python for large-scale streaming data processing, improving speed by 65%.</li>
                <li>Converted business needs to Tableau reports, saving 10 hours/week of manual work.</li>
            </ul>
        </div>
    </div>

    <div class="section education">
        <div class="section-title">Education</div>
        <div class="job-header">
            <div>Resume Worded University, San Francisco, CA</div>
            <div>May 2008</div>
        </div>
        <div>B.S. in Business Management, Minor in Data Analytics</div>
        <ul>
            <li>Resume Worded Teaching Fellow (Top 5)</li>
            <li>Dean’s List 2012 (Top 10%)</li>
            <li>Study abroad in Singapore University</li>
        </ul>
    </div>

    <div class="section skills">
        <div class="section-title">Skills & Other</div>
        <p><strong>Skills:</strong> Modeling and Design, Data Analytics, Big Data Processing, AWS, Statistical Modeling,
            Hive, Hadoop, ETL, Java</p>
        <p><strong>Volunteering:</strong> 20 hrs/month at AFG foundation, 3-month city pro-bono projects</p>
        <p><strong>Projects:</strong> Forecasting tool using trends & reference lines, saving 30 hrs/week</p>
    </div>
</body>

</html>
