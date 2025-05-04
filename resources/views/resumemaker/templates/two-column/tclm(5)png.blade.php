<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>tclm(5)png</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
            size: A4;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            font-size: 12px;
            color: #000;
        }
        .header {
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
        }
        .title {
            color: #2F80ED;
            font-size: 16px;
            margin-top: 5px;
            font-weight: bold;
        }
        .contact {
            margin-top: 10px;
        }
        .contact span {
            margin-right: 15px;
        }
        .section-title {
            font-weight: bold;
            font-size: 14px;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .columns {
            display: table;
            width: 100%;
        }
        .left, .right {
            display: table-cell;
            vertical-align: top;
            padding-right: 20px;
        }
        .left {
            width: 35%;
        }
        .right {
            width: 65%;
        }
        .sub-section {
            margin-bottom: 15px;
        }
        .sub-section h4 {
            margin: 0;
            font-size: 13px;
            font-weight: bold;
        }
        .sub-section p {
            margin: 2px 0;
            font-size: 12px;
        }
        ul {
            padding-left: 16px;
            margin: 5px 0;
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nilesh Navrang</h1>
        <div class="title">Chief Executive Officer</div>
        <div class="contact">
            <span>
                <img src="{{public_path('assets/resume-icon/mail.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt="">
                johnsmith@beamjobs.com
            </span>
            <span>
                <img src="{{public_path('assets/resume-icon/call.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt="">
                (123) 456-7890
            </span>
            <span>
                <img src="{{public_path('assets/resume-icon/linkedin.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt="">
                /in/johnsmith
            </span>
            <span>
                <img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt="">
                Houston, TX
            </span>
        </div>
    </div>

    <div class="section-title">CAREER OBJECTIVE</div>
    <p>
        Results-driven and adaptive executive with a proven track record of driving strategic growth and innovation.
        Seeking to leverage extensive leadership experience and data-informed decision-making to optimize organizational
        efficiency and product excellence at HashiCorp.
    </p>

    <div class="columns">
        <div class="left">
            <div class="section-title">EDUCATION</div>
            <div class="sub-section">
                <h4>B.S. Statistics</h4>
                <p><strong>University of Maryland</strong></p>
                <p><img src="{{public_path('assets/resume-icon/date.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> September 2006 – April 2010</p>
                <p><img src="{{public_path('assets/resume-icon/location.svg')}}" style="height: 18px;width:18px; margin-right: 8px;" alt=""> College Park, MD</p>
                <p><strong>GPA:</strong> 3.8/4.0</p>
                <p><strong>Relevant Coursework:</strong> Data Analysis, Probability Theory, Machine Learning, Regression Analysis</p>
            </div>

            <div class="section-title">SKILLS</div>
            <ul>
                <li>Leadership & Team Building</li>
                <li>Strategic Product Management</li>
                <li>Market & Competitive Analysis</li>
                <li>Agile & Scrum Methodologies</li>
                <li>Product Lifecycle Management</li>
                <li>Data Analytics (SQL, Tableau, Excel)</li>
                <li>A/B Testing & User Research</li>
            </ul>

            <div class="section-title">CERTIFICATIONS</div>
            <ul>
                <li>Project Management Professional (PMP) - PMI</li>
                <li>Certified Product Manager (CPM) - AIPMM</li>
                <li>Certificate in B2B Growth Marketing - Coursera</li>
            </ul>

            <div class="section-title">AWARDS & ACHIEVEMENTS</div>
            <ul>
                <li>Forbes 30 Under 30 in Enterprise Technology (2021)</li>
                <li>Best Leadership in Innovation Award – Amazon Product Division (2020)</li>
                <li>Top 10 Product Managers to Watch – TechInsider (2019)</li>
            </ul>
        </div>

        <div class="right">
            <div class="section-title">WORK EXPERIENCE</div>

            <div class="sub-section">
                <h4>Chief Executive Officer</h4>
                <p><strong>Amazon</strong></p>
                <p>📅 January 2017 – current | 📍 Houston, TX</p>
                <ul>
                    <li>Managed a portfolio of initiatives generating $6M+ in annual revenue through focused product strategy and customer engagement.</li>
                    <li>Led a cross-functional team of over 20, including PMs, designers, and engineers, improving delivery velocity by 35%.</li>
                    <li>Launched a new customer analytics dashboard reducing churn by 12% through actionable insights.</li>
                    <li>Established OKRs and KPI-driven culture increasing team alignment and strategic clarity.</li>
                </ul>
            </div>

            <div class="sub-section">
                <h4>Department Head</h4>
                <p><strong>Shopify</strong></p>
                <p>📅 January 2013 – January 2017 | 📍 Houston, TX</p>
                <ul>
                    <li>Performed cohort analysis that identified a 25% pricing optimization opportunity, boosting annual revenue by $720,000.</li>
                    <li>Led the development of a B2C SaaS product with 120,000 daily active users in its first year.</li>
                    <li>Drove feature innovation using Google Analytics insights, increasing annual revenue by $3.1M.</li>
                    <li>Managed a hybrid team of full-time staff and contractors, ensuring timely delivery and high code quality.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
