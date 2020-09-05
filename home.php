<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Online Resume</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

</head>

<body class="container-fluid" id="home_pg">

<div class="cover">
    <div class="row logo" id="pt0">
        <div class="col-sm-2"><a href="home.php"><img src="img/logo.png" width="30%"></a></div>
    </div>

    <div class="row name" id="pt1">
        <div class="col-sm-2"></div>
        <div class="col-sm-4"><h1 class="name">Kelly Ryoo</h1></div>
        <div class="col-sm-6"></div>
    </div>
</div>

<!--
<div class="nav" id="sidenav">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Me</a></li>
    <li><a href="#">Education</a></li>
    <li><a href="#">Experience</a></li>
    <li><a href="#">Projects</a></li>
  </ul>
</div>

-->


<div class="education">
    <div class="education-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center"><h2>Education</h2></div>
            <div class="col-sm-12"><hr class="line"></hr></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><img class="logo" src="img/cornell.gif"></img></div>
            <div class="col-sm-4">
                <h3 class="school-name">Cornell University</h3>
                <p class="year">2020 ~ Present</p>
                <p class="degree">Bachleor of Arts in Computer Science</p>
                <p class="courses">Relevant Courses: Linear Algebra, Object Oriented Programming with Data
                    Structures, Intro to IOS Development
                </p>
            </div>
            <div class="col-sm-3"></div>
        </div>

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><img class="logo" src="img/tino.png"></img></div>
            <div class="col-sm-4">
                <h3 class="school-name">Cupertino High School</h3>
                <p class="year">2016 ~ 2020</p>
                <p class="degree">High School Diploma</p>
                <p class="courses">Relevant Coures: AP Computer Science A, AP Calculus BC</p>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>



<div class="experience">
    <div class="experience-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center"><h2>Experience</h2></div>
            <div class="col-sm-12"><hr class="line"></hr></div>
        </div>

        <!-- hashtag -->
        <div class="row el-row">
            <div class="col-sm-2"></div>

            <div class="col-sm-3 ">
                <h3 class="align-top">Hashtag Systems Inc.</h3>
                <p>Jul 2019 ~ present</p>
            </div>
            
            <div class="col-sm-5">
                <h5 class="ex-title">Web Developer Intern</h5>
                <p>Learning and working with languages (HTML, CSS, and some Javascript and PHP), along with frameworks (Bootstrap) and WordPress; Translating .psd files into code</p>
            </div>

            <div class="col-sm-2"></div>
        </div>

        <!-- hatch -->
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-sm-3 ">
                <h3 class="align-top">Hatch Learning</h3>
                <p>Sept 2020 ~ present</p>
            </div>
            
            <div class="col-sm-5">
                <h5 class="ex-title">Coding Instructor</h5>
                <p>Teaching children (K~12) coding.</p>
            </div>

            <div class="col-sm-2"></div>
        </div>

        <!-- rancho -->
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-sm-3 ">
                <h3 class="align-top">Rancho Rinconada</h3>
                <p>Jun 2019 ~ Feb 2020</p>
            </div>
            
            <div class="col-sm-5">
                <h5 class="ex-title">Swim Instructor</h5>
                <p>Teaching children (aged 4 ~ 12) the basics of swimming, refining strokes and technique through private or group lessons.</p>
            </div>

            <div class="col-sm-2"></div>
        </div>
        

    </div>
</div>

<div class="projects">
    <div class="projects-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center"><h2>Projects</h2></div>
            <div class="col-sm-12"><hr class="line"></hr></div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <ul>
                    <li>Hidden Treasure - text-based 'textadventure' game using java (2019)</li>
                    <li>Samurai's Revenge - fighting adventure game using javaFx (2019)</li>
                    <li>Minesweeper - minesweeper game using javaFx (2019)</li>
                </ul>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="github" onclick="location.href='https://github.com/kelly-ryoo'"><a href="https://github.com/kelly-ryoo">Github</a></button>
            </div>
        </div>
    </div>
</div>



<div class="Activities">
    <div class="activities-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center"><h2>Activities</h2></div>
            <div class="col-sm-12"><hr class="line"></hr></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Tino UNICEF</h3>
                <p>May 2019 ~ April 2020</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">President</h5>
                <p> Managing and supervising the officer team; planning and directing all major club events and meetings; carrying out UNICEF’s mission of spreading more awareness about international issues and fundraising for the organization.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Cupertino Interact</h3>
                <p>May 2019 ~ April 2020</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">Vice President</h5>
                <p>Collaborating with other officers to execute fundraisers and external events; working closely with the President to supervise members and officers to ensure all necessary tasks are completed.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Core Scholar</h3>
                <p>May 2018 ~ June 2020</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">Scholar</h5>
                <p>Nominated by World Core English teacher as a Core Scholar to tutor 10th grade English students, guiding them through feedback and advice about their essays and projects.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Competitive Swimming</h3>
                <p>May 2016 ~ June 2020</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">Swimmer</h5>
                <p>Nominated by World Core English teacher as a Core Scholar to tutor 10th grade English students, guiding them through feedback and advice about their essays and projects.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row el-row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Tino UNICEF</h3>
                <p>May 2018 ~ May 2019</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">Outreach Coordinator</h5>
                <p>Selected and led a 10-person Outreach Committee; visited elementary schools together to hold presentations and activities teaching the youth of our community about world issues and UNICEF’s missions.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3 ">
                <h3 class="align-top">Cupertino Interact</h3>
                <p>May 2018 ~ May 2019</p>
            </div>
            <div class="col-sm-5">
                <h5 class="ex-title">International Project Chair</h5>
                <p>Collaborated with 8 other students in the school district to organize and execute 2 charity events (a dance and a dinner) throughout the 2018-2019 academic year, donating a profit of $3000 to SOS Children’s Villages as an effort to fight the Venezuelean Humanitarian Crisis.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>


<div class="skills">
    <div class="skills-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center"><h2>Skills</h2></div>
            <div class="col-sm-12"><hr class="line"></hr></div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <ul>
                    <li>Java</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>WordPress</li>
                    <li>Bootstrap</li>
                </ul>
                <ul>
                    <li>Korean</li>
                    <li>Spanish</li>
                    <li>Japanese</li>
                    <li>Arabic</li>
                </ul>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>




</body>
</html>