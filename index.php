<?php

$firstName = 'Matty';
$lastName = 'Jamson';
$position = 'UX/UI Designer';

$aboutMe = [
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec tortor a eleifend. Proin nec ligula vel sem luctus porttitor. Cras at interdum libero. Donec nec mauris velit.',
    'Vestibulum eu eros tortor. Aliquam cursus nunc mauris, nec congue tortor pretium et. Pellentesque feugiat justo in metus laoreet consectetur. Mauris at tempor ipsum, sit amet etae posuere. Nunc auctor sollicitudin sem ut molestie. Pellentesque ligula sapien, ullamcorper et tempor id, congue ac sapien.',
];

$personalSkills = [
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.',
    'skills' => [
        ['name' => 'Communication', 'score' => 85],
        ['name' => 'Team work', 'score' => 80],
        ['name' => 'Leadership', 'score' => 95],
        ['name' => 'Management', 'score' => 85],
    ],
];

$professionalSkills = [
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.',
    'skills' => [
        ['name' => 'Create Wireframe', 'score' => 9],
        ['name' => 'Axure', 'score' => 8],
        ['name' => 'Illustrator', 'score' => 9],
        ['name' => 'Photoshop', 'score' => 7],
        ['name' => 'Digital Marketing', 'score' => 4],
    ],
];
//Я не смог догадаться как впихнуть этот скрипт в массив с опытом
$dt1= new DateTime('2013-01-01');
$dt2= new DateTime ('now');
$result1 = $dt1->diff($dt2);
$dt3= new DateTime ('2011-03-11');
$dt4= new DateTime ('2012-12-12');
$result2= $dt4 ->diff($dt3);
$dt5= new DateTime ('2009-07-09');
$dt6= new DateTime ('2011-04-11');
$result3= $dt6 ->diff($dt5);
$dt7= new DateTime ('2001-05-15');
$result4= $dt2 -> diff($dt7);
function declension($value = 1, $wordForms1 = ['лет', 'год', 'лет'], $wordForms2 = ['месяцев', 'месяц', 'месяца'])
{
    $array = [2,0,1,1,1,2];
    return $wordForms1[($value%100>4&&$value%100<20)?2:$array[($value%10<5)?$value%10:5]];
    return $wordForms2[($value%100>4&&$value%100<20)?2:$array[($value%10<5)?$value%10:5]];
}


$workExperience = [
    [
        'start_date' => '2013-01-01',
        'end_date' => null,
        'company' => 'Flash media inc.',
        'position' => 'SENIOR UX/UI DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2011-03-01',
        'end_date' => '2012-12-31',
        'company' => 'Codedash Studio',
        'position' => 'UX DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2009-07-15',
        'end_date' => '2011-04-28',
        'company' => 'Foursqure Studio',
        'position' => 'VISUAL / UI DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
];

$diplomas = [
    [
        'date' => 'JANUARY, 2007',
        'company' => 'Master Degree Of Design',
        'position' => 'UNIVERSITY OF DESIGN',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'date' => 'JUNE, 2004',
        'company' => 'Bachelor Of Arts',
        'position' => 'UNIVERSITY OF DESIGN',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'date' => 'JANUARY, 2001',
        'company' => 'Master Degree Of Design',
        'position' => 'UNIVERSITY OF DESIGN',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
];

$portfolio = [
    'filter' => [
        ['data_filter' => '*', 'text' => 'All'],
        ['data_filter' => '.branding', 'text' => 'Branding'],
        ['data_filter' => '.illustration', 'text' => 'Illustration'],
        ['data_filter' => '.wordpress', 'text' => 'Wordpress'],
        ['data_filter' => '.site-template', 'text' => 'Site Template'],
    ],
    'gallery' => [
        [
            'text' => 'Project Name',
            'title' => 'Project Name 1',
            'filters' => ['wordpress'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 2',
            'filters' => ['branding', 'illustration'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 3',
            'filters' => ['illustration'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 4',
            'filters' => ['branding', 'illustration'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 5',
            'filters' => ['illustration', 'photos'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 6',
            'filters' => ['branding', 'photos'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 7',
            'filters' => ['illustration', 'photos'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
        [
            'text' => 'Project Name',
            'title' => 'Project Name 8',
            'filters' => ['site-template'],
            'href' => 'http://via.placeholder.com/800x600',
            'src' => 'http://via.placeholder.com/300x150',
        ],
    ],
];

$references = [
    [
        'testimonial' => '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”',
        'image' => 'http://via.placeholder.com/100x100',
        'person' => 'Jonathan Doe',
        'position' => 'Project Manager, Matrix Media',
    ],
    [
        'testimonial' => '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”',
        'image' => 'http://via.placeholder.com/100x100',
        'person' => 'Jonathan Doe',
        'position' => 'Project Manager, Matrix Media',
    ],
    [
        'testimonial' => '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”',
        'image' => 'http://via.placeholder.com/100x100',
        'person' => 'Jonathan Doe',
        'position' => 'Project Manager, Matrix Media',
    ],
    [
        'testimonial' => '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”',
        'image' => 'http://via.placeholder.com/100x100',
        'person' => 'Jonathan Doe',
        'position' => 'Project Manager, Matrix Media',
    ],
];

$contacts = [
    ['type' => 'google-plus'],
    ['type' => 'facebook'],
    ['type' => 'dribbble'],
    ['type' => 'behance'],
    ['type' => 'linkdin'],
    ['type' => 'twitter'],
    ['type' => 'instagram'],
    ['type' => 'vimeo'],
];

?><!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Landing Page for Presenting Your Resume">
    <meta name="keywords" content="one page, responsive, html template, responsive landing page">
    <meta name="author" content="ThinkingCoder">
    <title>Flatr - vCard, CV, Resume & Portfolio template</title>
    <!-- FAVICON  -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/bootstrap/css/normalize.css" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/wowjs/animate.min.css">
    <link rel="stylesheet" href="lib/pretty-photo/prettyPhoto.css">
    <!-- Template CSS -->
    <link rel="stylesheet" id="colors" href="css/layout1-color1.css" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- =========================================
   Navigation
   ========================================== -->
<!--start mobile navigation-->
<div class="nav visible-xs fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-outline inverse btn-sm navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
                    <i class="fa fa-bars ico-sm"></i></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase">
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#introduction">introduction</a>
                    </li>
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#skillset">skillset</a>
                    </li>
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#experience">experience</a>
                    </li>
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#portfolio">portfolio</a>
                    </li>
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#references">references</a>
                    </li>
                    <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#connect">connect</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end mobile navigation-->
<nav class="nav-container hidden-xs">
    <ul class="nav">
        <li class="page-scroll">
            <a href="#introduction">introduction</a>
        </li>
        <li class="page-scroll">
            <a href="#skillset">skills</a>
        </li>
        <li class="page-scroll">
            <a href="#experience">experience</a>
        </li>
        <li class="page-scroll">
            <a href="#portfolio">portfolio</a>
        </li>
        <li class="page-scroll">
            <a href="#references">references</a>
        </li>
        <li class="page-scroll">
            <a href="#connect">connect</a>
        </li>
    </ul>
</nav>
<!-- =========================================
   Main Container
   ========================================== -->
<div class="container main-container">
    <div class="row">
        <!-- =========================================
           HEADER
           ========================================== -->
        <header>
            <div class="col-md-12 extra-offset-md">
                <button class="btn btn-transparent">
                    <svg>
                        <use xlink:href="img/svg/icons.svg#download"></use>
                    </svg>
                    Download resume
                </button>
                <div class="resume-title">
                    <h2>Matty</h2>
                    <h2>Jamson</h2>
                    <div class="resume-designation extra-offset-md">
                        <span class="border"></span>
                        <span>UX/UI Designer 
                        <?php
                        echo '<br>';
                        echo $result4->y . 'лет'. '<br>'. $result4->m.'месяцев'. '<br>'. $result4->d.'дней';
                        ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="header-overlay"></div>
        </header>
        <!-- =========================================
           ABOUT ME
           ========================================== -->
        <section id="introduction">
            <div class="col-md-offset-1 col-md-10">
                <h2 class="title">About Me</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec tortor a eleifend. Proin nec ligula vel sem luctus porttitor. Cras at interdum libero. Donec nec mauris velit.</p>
                <p>Vestibulum eu eros tortor. Aliquam cursus nunc mauris, nec congue tortor pretium et. Pellentesque feugiat justo in metus laoreet consectetur. Mauris at tempor ipsum, sit amet etae posuere. Nunc auctor sollicitudin sem ut molestie. Pellentesque ligula sapien, ullamcorper et tempor id, congue ac sapien.</p>
            </div>
        </section>
        <!-- =========================================
           SKILL
           ========================================== -->
        <section id="skillset">
            <div class="col-md-offset-1 col-md-5 offset-lt">
                <h2 class="title">Personal Skills</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.</p>
                <div class="skill-wrapper">
                    <!--skill-->
                    <ul class="skill" id="skills">
                        <li>
                            <p>Communication</p>
                            <div class="skill-bar wow slideInLeft" data-width="85">
                                <span class="skill-tip"></span>
                            </div>
                        </li>
                        <li>
                            <p>Team work</p>
                            <div class="skill-bar wow slideInLeft" data-width="80">
                                <span class="skill-tip"></span>
                            </div>
                        </li>
                        <li>
                            <p>Leadership</p>
                            <div class="skill-bar wow slideInLeft" data-width="95">
                                <span class="skill-tip"></span>
                            </div>
                        </li>
                        <li>
                            <p>Management</p>
                            <div class="skill-bar wow slideInLeft" data-width="85">
                                <span class="skill-tip"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 offset-rt">
                <h2 class="title">Professional Skills</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.</p>
                <ul class="skill-dots" id="skill-dots">
                    <li class="skill">
                        <span class="skill-title">Create Wireframe</span>
                        <div class="skill-progress" data-score="9"></div>
                    </li>
                    <li class="skill">
                        <span class="skill-title">Axure</span>
                        <div class="skill-progress" data-score="8"></div>
                    </li>
                    <li class="skill">
                        <span class="skill-title">Illustrator</span>
                        <div class="skill-progress" data-score="9"></div>
                    </li>
                    <li class="skill">
                        <span class="skill-title">Photoshop</span>
                        <div class="skill-progress" data-score="7"></div>
                    </li>
                    <li class="skill">
                        <span class="skill-title">Digital Marketing</span>
                        <div class="skill-progress" data-score="4"></div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- =========================================
           WORK
           ========================================== -->
        <section id="experience">
            <div class="col-md-offset-1 col-md-5  offset-lt">
                <h2 class="title">WORK EXPERIENCE</h2>
                <hr>
                <div class="timeline-centered">
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                                <?php
                                echo "Начальная дата - ";
                                echo $dt1->format('Y-m-d');
                                echo '<br>';
                                echo "В целом - ";
                                echo "$result1->y"  . declension(7, ['год', 'года', 'лет']);
                                echo '<br>';
                                echo "$result1->m"  . declension(1, ['месяцев', 'месяц']);
                                ?>
                            </div>
                            <h3 class="company">Flash media inc.</h3>
                            <p class="designation">SENIOR UX/UI DESIGNER </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                                <?php
                                echo "Начальная дата - ";
                                echo $dt3->format('Y-m-d');
                                echo '<br>';
                                echo "Конечная дата - ";
                                echo $dt4->format('Y-m-d');
                                echo '<br>';
                                echo "В целом - ";
                                echo "$result2->y"  . declension(1, ['год', 'года', 'лет']);
                                echo '<br>';
                                echo "$result2->m"  . declension(1, ['месяцев', 'месяц']);
                                ?>
                            </div>
                            <h3 class="company">Codedash Studio</h3>
                            <p class="designation">UX DESIGNER </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                            <?php
                                echo "Начальная дата - ";
                                echo $dt5->format('Y-m-d');
                                echo '<br>';
                                echo "Конечная дата - ";
                                echo $dt6->format('Y-m-d');
                                echo '<br>';
                                echo "В целом - ";
                                echo "$result3->y"  . declension(1, ['год', 'года', 'лет']);
                                echo '<br>';
                                echo "$result3->m"  . declension(1, ['месяцев', 'месяц']);
                                ?>
                            </div>
                            <h3 class="company">Foursqure Studio</h3>
                            <p class="designation">VISUAL / UI DESIGNER </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-5  offset-rt">
                <h2 class="title">EDUCATION & DIPLOMAS</h2>
                <hr>
                <div class="timeline-centered">
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                                JANUARY, 2007
                            </div>
                            <h3 class="company">Master Degree Of Design</h3>
                            <p class="designation">UNIVERSITY OF DESIGN</p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                                JUNE, 2004
                            </div>
                            <h3 class="company">Bachelor Of Arts</h3>
                            <p class="designation">UNIVERSITY OF DESIGN </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon"></div>
                            <div class="timeline-label">
                                JANUARY, 2001
                            </div>
                            <h3 class="company">Master Degree Of Design</h3>
                            <p class="designation">UNIVERSITY OF DESIGN </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- =========================================
           PORTFOLIO
           ========================================== -->
        <section id="portfolio">
            <div class="col-md-offset-1 col-md-10">
                <h2 class="title">PORTFOLIO</h2>
                <hr>
                <div class="clearfix"></div>
                <div class="porfolio-wrapper">
                    <div class="portfolioFilter">
                        <ul>
                            <li>
                                <a href="#" data-filter="*"  class="current">All</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".branding">Branding</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".illustration">Illustration</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".wordpress">Wordpress</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".site-template">Site Template</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="portfolioContainer gallery">
                        <li class="wordpress item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 1" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="branding illustration item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 2" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="illustration item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 3" href="http://via.placeholder.com/400x300"><i class="fa fa-image"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="branding illustration item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 4" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="illustration photos item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 5" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="branding photos item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 6" href="https://vimeo.com/244717336"><i class="fa fa-video-camera"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="illustration photos item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 7" href="https://www.youtube.com/watch?v=0vrdgDdPApQ"><i class="fa fa-video-camera"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                        <li class="site-template item">
                            <div class="lightCon">
                                <div class="hoverBox">
                                    <ul class="hover-box-inner">
                                        <li>
                                            <a data-gal="prettyPhoto[gallery1]" title="Project Name 8" href="videos/movie.mp4"><i class="fa fa-video-camera"></i></a>
                                        </li>
                                        <li>
                                            <h4>Project Name</h4>
                                        </li>
                                    </ul>
                                </div>
                                <img src="http://via.placeholder.com/300x150" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- =========================================
           REFERENCES
           ========================================== -->
        <section id="references" class="testimonial-outer">
            <div class="col-md-offset-1 col-md-10">
                <h2 class="title">REFERENCES</h2>
                <hr>
            </div>
            <div class="clearfix"></div>
            <div class="testimonial-wrapper">
                <div class="col-md-offset-1 col-md-5 offset-lt">
                    <!--testimonial-block-->
                    <div class="testimonial">
                        <div class="testimonialblock">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”</p>
                        </div>
                        <div class="user-wrapper">
                            <img src="http://via.placeholder.com/100x100" alt="">
                            <div class="user-detail">
                                <p class="title">Jonathan doe</p>
                                <p>PROJECT MANAGER, MATRIX MEDIA</p>
                            </div>
                        </div>
                    </div>
                    <!--testimonial-block ends-->
                </div>
                <div class="col-md-5 offset-rt">
                    <!--testimonial-block-->
                    <div class="testimonial">
                        <div class="testimonialblock">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”</p>
                        </div>
                        <div class="user-wrapper">
                            <img src="http://via.placeholder.com/100x100" alt="">
                            <div class="user-detail">
                                <p class="title">Jonathan doe</p>
                                <p>PROJECT MANAGER, MATRIX MEDIA</p>
                            </div>
                        </div>
                    </div>
                    <!--testimonial-block ends-->
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="col-md-offset-1 col-md-5 offset-lt">
                    <!--testimonial-block-->
                    <div class="testimonial">
                        <div class="testimonialblock">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”</p>
                        </div>
                        <div class="user-wrapper">
                            <img src="http://via.placeholder.com/100x100" alt="">
                            <div class="user-detail">
                                <p class="title">Jonathan doe</p>
                                <p>PROJECT MANAGER, MATRIX MEDIA</p>
                            </div>
                        </div>
                    </div>
                    <!--testimonial-block ends-->
                </div>
                <div class="col-md-5 offset-rt">
                    <!--testimonial-block-->
                    <div class="testimonial">
                        <div class="testimonialblock">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.”</p>
                        </div>
                        <div class="user-wrapper">
                            <img src="http://via.placeholder.com/100x100" alt="">
                            <div class="user-detail">
                                <p class="title">Jonathan doe</p>
                                <p>PROJECT MANAGER, MATRIX MEDIA</p>
                            </div>
                        </div>
                    </div>
                    <!--testimonial-block ends-->
                </div>
            </div>
        </section>
        <!-- =========================================
           CONNECT ME
           ========================================== -->
        <section id="connect" class="connect padding-bottom-0">
            <div class="col-md-offset-1 col-md-10">
                <h2 class="title">CONNECT ME</h2>
                <ul class="social-links social-border">
                    <li class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></a></i></li>
                    <li class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></li>
                    <li class="behance"><i class="fa fa-behance" aria-hidden="true"></i></li>
                    <li class="linkdin"><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    <li class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    <li class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    <li class="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></li>
                </ul>
                <hr>
            </div>
            <div class="map_outer">
                <div id="map"></div>
                <!--contact form-->
                <div class="contact_form col-md-4 col-sm-7 col-xs-11">
                    <p>Drop me a line</p>
                    <div class="alert alert-success hidden" id="successMessage">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <div class="alert alert-danger hidden" id="errorMessage">
                        <strong>Error!</strong> There was an error sending your message.
                    </div>
                    <form action="php/submitForm.php" method="POST" name="emailSubmission">
                        <div class="col-md-12 ">
                            <label>Enter name</label>
                            <input type="text" class="minimal" name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="col-md-12">
                            <label>Enter email</label>
                            <input type="text" class="minimal" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-12 ">
                            <label>Enter Subject</label>
                            <input type="text" class="minimal" name="subject" id="subject" placeholder="Enter subject">
                        </div>
                        <div class="col-md-12">
                            <label>Enter message</label>
                            <textarea class="minimal" name="message" id="message" placeholder="Enter message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-md btn-primary inverse pull-right" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!--end of Main container-->
</div>
<!-- =========================================
   Footer
   ========================================== -->
<footer>
    © 2017 Flatos.com All right reserved.
    <a href="#">Theme Elite production</a>
</footer>
<!-- =========================
   PRELOADER
   ============================== -->
<div class="loader-wrapper">
    <div class="preload"></div>
</div>
<!-- =========================================
   Scripts
   ========================================== -->
<!-- jQuery -->
<script src="lib/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!-- JQuery Easing -->
<script src="lib/jquery/jquery.easing.min.js"></script>
<!-- Retina LIbrary-->
<script src="lib/retina/retina.min.js"></script>
<!--Wow -->
<script src="lib/wowjs/wow.min.js"></script>
<!-- Isotope Plugin -->
<script src="lib/isotope/isotope.pkgd.js"></script>
<!-- Pretty-Photo Gallery -->
<script src="lib/pretty-photo/jquery.prettyPhoto.min.js"></script>
<!-- Jquery Validator -->
<script src='lib/jquery/jquery.validate.min.js'></script>
<!-- Google Maps -->
<script src="lib/googlemaps/infobubble.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDMQqDC0jmMiZmHAbC_q57Zq3e2obnLMw"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.702603, -73.788742), // New York
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var infowindow = new InfoBubble({
            shadowStyle: 0,
            padding: 30,
            backgroundColor: '#fff',
            borderRadius: 7,
            arrowSize: 10,
            borderWidth: 0,
            maxWidth: 245,
            borderColor: '#2c2c2c',
            disableAutoPan: true,
            hideCloseButton: true,
            arrowPosition: 30,
            backgroundClassName: 'transparent',
            arrowStyle: 0
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            icon: new google.maps.MarkerImage('img/svg/marker.svg',
                null, null, null, new google.maps.Size(50, 50)),
            map: map,
            title: 'yo'
        });
        google.maps.event.addListener(marker, 'click', (function(marker) {
            return function() {
                infowindow.setContent('\u003cp\u003eCollins Street West Victoria 8007 Australia.\u003c/p\u003e\u003cp\u003eCall : +1800 1234 56789\u003c/p\u003e');
                infowindow.open(map, marker);
            }
        })(marker));
    }
</script>
<!-- Template Custom scripts -->
<script src="js/scripts.min.js"></script>
</body>
</html>