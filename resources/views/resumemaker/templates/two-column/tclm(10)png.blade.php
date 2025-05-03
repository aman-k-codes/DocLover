<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>tclm(10)png</title>
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
            padding: 0;
            color: #333;
        }
        .container {
            display: table;
            width: 100%;
        }
        .left, .right {
            display: table-cell;
            vertical-align: top;
            padding: 20px;
        }
        .left {
            width: 65%;
            border-right: 1px solid #ccc;
        }
        .right {
            width: 35%;
            background-color: #f9f9f9;
        }
        .name-header {
            font-size: 26px;
            font-weight: bold;
            color: #377dff;
        }
        .job-title {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
        }
        .section-title {
            font-size: 14px;
            color: #377dff;
            font-weight: bold;
            margin-top: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 4px;
        }
        .contact-box {
            background-color: #377dff;
            color: #fff;
            padding: 15px;
            font-size: 12px;
            margin-bottom: 20px;
        }
        .contact-box p {
            margin: 5px 0;
            color: #fff;
        }
        .right h4 {
            font-size: 13px;
            margin-bottom: 5px;
            color: #377dff;
        }
        .edu-block {
            margin-bottom: 15px;
        }
        .edu-block p {
            margin: 2px 0;
        }
        .bold {
            font-weight: bold;
        }
        .language {
            margin-top: 10px;
        }
        .language p {
            margin: 3px 0;
        }
        .circle-bar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 4px solid #ddd;
            position: relative;
            display: inline-block;
            margin-right: 10px;
        }
        .circle-bar-inner {
            position: absolute;
            top: 15px;
            left: 10px;
            font-size: 10px;
            font-weight: bold;
        }
        ul {
            margin-top: 5px;
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        .language-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="left">
            <div class="name-header">Nilesh Navrang</div>
            <div class="job-title">Title of Job You’re Looking for</div>

            <div class="section-title">OBJECTIVE</div>
            <p>Quantitatively driven mathematics and economics major seeking to leverage my data analysis and business understanding skills as a business analyst upon graduation in 2022. Eager to share knowledge gained from undergraduate projects and to learn from supervisors and teammates.</p>

            <div class="section-title">GENERAL SKILLS</div>
            <ul>
                <li>Programming: SQL, Python (Pandas, scikit-learn)</li>
                <li>Modeling: Linear and logistic regressions</li>
                <li>Data Visualization: Excel, Google Sheets, Matplotlib, Tableau</li>
                <li>Critical Thinking</li>
                <li>Presentations</li>
            </ul>

            <div class="section-title">PROJECTS & SKILLS SUMMARY</div>

            <p class="bold">Modelling - NFL Fantasy Football</p>
            <ul>
                <li>Plotted data in 2D graph to view results for determining weekly lineups for NFL fantasy football...</li>
                <li>Generated data from a variety of sources to identify gaps in the market for company to potentially build and market a new industrial product.</li>
            </ul>

            <p class="bold">Programming - NFL Fantasy Football</p>
            <ul>
                <li>Compiled 4 years of NFL fantasy football projection data from 5 independent sources into MySQL database.</li>
                <li>Aggregated data from IMDB and Rotten Tomatoes...</li>
            </ul>

            <p class="bold">Team-oriented - NFL Fantasy Football</p>
            <ul>
                <li>Captained Long Island University's intramural soccer team...</li>
                <li>Led a community outreach effort for team to volunteer at the YMCA...</li>
            </ul>
        </div>

        <div class="right">
            <div class="contact-box">
                <p>baileyhuff@email.com</p>
                <p>(123) 456-7890</p>
                <p>Brooklyn, NY</p>
                <p><u>LinkedIn</u></p>
            </div>

            <h4>EDUCATION</h4>

            <div class="edu-block">
                <p class="bold">Master in Mathematics & Economics</p>
                <p>Long Island, University</p>
                <p>📅 September 2021 - April 2023</p>
                <p>📍Brookville, NY</p>
            </div>

            <div class="edu-block">
                <p class="bold">Bachelor of Science, Mathematics & Economics</p>
                <p>Long Island University</p>
                <p>📅 September 2017 - April 2021</p>
                <p>📍Brookville, NY</p>
            </div>

            <h4>AWARDS</h4>
            <p class="bold">Dean’s List</p>
            <p>Long Island, University</p>
            <p>📅 MONTH 20XX</p>

            <h4>LANGUAGES</h4>

            <div class="language">
                <div class="language-row">
                    <div class="circle-bar">
                        <div class="circle-bar-inner">95%</div>
                    </div>
                    <p>English</p>
                </div>
                <div class="language-row">
                    <div class="circle-bar">
                        <div class="circle-bar-inner">85%</div>
                    </div>
                    <p>Spanish</p>
                </div>
                <div class="language-row">
                    <div class="circle-bar">
                        <div class="circle-bar-inner">75%</div>
                    </div>
                    <p>German</p>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
