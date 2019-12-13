<?php
include_once "connect.php";

    if(!empty($_GET['r'])) {
?>
        <script>alert("登入失敗，請重新登入！");</script>
<?
    to("index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./cssjs/bootstrap.min.css">
    <link rel="stylesheet" href="./cssjs/all.min.css">
    <link rel="stylesheet" href="./cssjs/animate.css">

    <style>
        body {
            font-family: "Gotham SSm A", "Gotham SSm B", "PingFang TC", "Microsoft JhengHei", "PMingLiU", sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-size: 14px;
            line-height: 1.42857;
            color: #333;
            background: #F5F5F5;
        }

        #header {
            width: 100vw;
            height: 70px;
            background: white;
            position: fixed;
            z-index: 999;
        }

        #topbar {
            width: 65%;
            height: 100%;
            margin: 0 auto;
            position: relative;
        }

        #about-btn1 {
            width: 100px;
            height: 50px;
            background-image: url(./svg/official.svg);
            margin: 20px auto;
            cursor: pointer;
        }

        #about-btn2 {
            width: 100px;
            height: 50px;
            background-image: url(./svg/private.svg);
            margin: 20px auto;
            display: none;
            cursor: pointer;
        }

        #official {
            width: 600px;
            height: 450px;
            background-image: url(./svg/official-bg.svg);
            margin: 0 auto;
        }

        #private {
            width: 600px;
            height: 450px;
            background-image: url(./svg/private-bg.svg);
            margin: 0 auto;
            display: none;
        }

        #about {
            width: 500px;
            height: 232px;
            margin: 10px auto;
            padding-left: 35px;
        }

        #about td {
            border-bottom: 1px solid #333;
            padding: 10px;
        }

        #login {
            cursor: pointer;
        }

        #modal {
            display: none;
            width: 100%;
            height: 100vh;
            background: rgba(200, 200, 200, 0.7);
            position: absolute;
            z-index: 90;
            top: 0;
            left: 0;
        }

        #loginform{
          background: white;
          width: 300px;
          height: 250px;
          position: absolute;
          left: calc(50vw - 150px);
          top: calc(50vh - 125px);
          border: 1px solid #999;
          box-shadow: 0 0 5px #ccc;
          text-align: center;
          padding: 20px;
        }

        #exp1 {
            width: 415px;
            height: 180px;
            background: white;
            border: 1px solid #333;
            border-radius: 20px;
            position: absolute;
            top: 238px;
            left: 55px;
        }

        #exp2 {
            width: 400px;
            height: 200px;
            background: white;
            border: 1px solid #333;
            border-radius: 20px;
            position: absolute;
            bottom: 140px;
            right: 95px;
        }

        #company {
            font-size: 24px;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        #title {
            font-size: 18px;
            position: absolute;
            top: 70px;
            left: 20px;
        }

        #detailbtn {
            width: 200px;
            height: 200px;
            background-image: url(./svg/detail.svg);
            position: absolute;
            bottom: 60px;
            right: 100px;
            cursor: pointer;
        }

        #detailinfo {
            width: 1100px;
            height: 800px;
            background: #FFFFF3;
            z-index: 999;
            display: none;
            position: relative;
            background-image: url(./svg/detailinfo_bg.svg); 
            background-repeat: no-repeat;
        }

        #closebtn {
            width: 60px;
            height: 60px;
            background-image: url(./svg/closebtn.svg);
            background-repeat: no-repeat;
            position: absolute;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
        }

        #detaillist {
            width: 600px;
            margin: 0 auto;
            padding-top: 125px;
        }

        #portfolio {
            background-image: url(./svg/portfolio_bg.svg);
            position: relative;
        }

        #carouselExampleIndicators {
            width: 850px;
            height: 500px;
            position: absolute;
            top: 150px;
            right: 0;
        }

        #contact {
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(./img/contact.jpg);
            background-size: cover;
            background-position: fixed;
            background-repeat: no-repeat;
            position: relative;
        }

        #contactinfo {
            width: 300px;
            height: 200px;
            font-size: 60px;
            font-weight: 300;
            color: white;
            position: absolute;
            top: 150px;
            left: 100px;
            opacity: 0.4;
        }

        .row div {
            height: 800px;
        }

        .row {
            padding-top: 70px;
        }

        .logo {
            width: 200px;
            height: 70px;
            position: absolute;
            left: 0;
        }

        .btn-group {
            position: absolute;
            top: 15px;
            right: 0;
        }

        .cover {
            background-size: cover;
            padding: 100px;
            position: relative;
        }

        .quote {
            position: absolute;
            top: 200px;
            right: 70px;
            font-size: 41px;
            font-weight: 300;
            filter: drop-shadow(2px 2px 2px #333);
        }

        .welcome {
            position: absolute;
            top: 500px;
            right: 140px;
            font-size: 16px;
        }

        .arrow {
            position: absolute;
            top: 580px;
            right: 280px;
        }

        .bgimgabt {
            background-image: url(./svg/about-bg.svg);
            background-size: cover;
            background-position: fixed;
        }
    </style>
</head>

<body>
    <div id="header">
        <div id="topbar">
            <div class="logo">
                <a href="index.php"><img src="./svg/resume_logo.svg" alt="resume_logo"></a>
            </div>
            <div class="btn-group">
                <button type="button" class="btn border-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="./svg/menu.svg" alt="menu">
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#aboutall">About</a>
                    <a class="dropdown-item" href="#experience">Experience</a>
                    <a class="dropdown-item" href="#character">Character</a>
                    <a class="dropdown-item" href="#portfolio">Portfolio</a>
                    <a class="dropdown-item" href="#contact">Contact</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="login">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div id="modal">
        <div id="loginform">
            <form action="./api/login.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="user">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="pw">
                  </div>
                </div>
                <button type="submit" class="btn btn-dark">Log in</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- cover -->
            <div class="col-12 cover" style="background-image:url(./img/<?=find("cover",['sh'=>1])['file'];?>)">
                <span class="quote">- <?=find("cover",['sh'=>1])['text'];?> -</span>
                <span class="welcome fadeInUp wow">
                    Hi! Thank you for visiting my web pages.<br>
                    Hope you could know well about me <br>
                    after reading my stories!
                </span>
                <span class="arrow bounceIn wow">
                    <img src="./svg/arrow.svg">
                </span>
            </div>
            <!-- about -->
            <div id="aboutall" class="col-12 bg-white bgimgabt" style="background-image:url(./svg/about_bg.svg)">
                <div id="about-btn1"></div>
                <div id="about-btn2"></div>
                <div id="official"></div>
                <div id="private"></div>
                <div id="about">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>&nbsp;<?=find("about",1)['name'];?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>&nbsp;<?=find("about",1)['age'];?></td>
                        </tr>
                        <tr>
                            <td>Education</td>
                            <td>&nbsp;<?=find("about",1)['education'];?></td>
                        </tr>
                        <tr>
                            <td>Abilities</td>
                            <td>&nbsp;<?=find("about",1)['abilities'];?></td>
                        </tr>
                        <tr>
                            <td>Skills</td>
                            <td>&nbsp;<?=find("about",1)['skills'];?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- experience -->
            <div id="experience" class="col-12 bg-light" style="background-image:url(./svg/experience_bg.svg); position:relative">
                <div id="exp1"  class="bounceInUp wow">
                    <div id="company" style="font-weight:bold">
                        <?=find("experience",1)['company'];?>
                        <img src="./img/<?=find("experience",1)['file'];?>" style="width:170px; height:40px">
                    </div>
                    <div id="title">
                        <table>
                            <tr>
                                <td style="font-weight:bold"><?=find("experience",1)['title'];?></td>
                            </tr>
                            <tr>
                                <td>
                                    <?=find("experience",1)['time'];?>
                                    (<?=find("experience",1)['period'];?>)
                                </td>
                            </tr>
                            <tr>
                                <td><?=find("experience",1)['content'];?></td>
                            </tr>
                        </table>
                    
                    </div>
                </div>
                <div id="exp2" class="bounceInUp wow">
                    <div id="company" style="font-weight:bold">
                        <?=find("experience",2)['company'];?>
                        <img src="./img/<?=find("experience",2)['file'];?>" style="width:170px; height:40px">
                    </div>
                    <div id="title">
                        <table>
                            <tr>
                                <td style="font-weight:bold"><?=find("experience",2)['title'];?></td>
                            </tr>
                            <tr>
                                <td>
                                    <?=find("experience",2)['time'];?>
                                    (<?=find("experience",2)['period'];?>)
                                </td>
                            </tr>
                            <tr>
                                <td><?=find("experience",2)['content'];?></td>
                            </tr>
                        </table>
                    
                    </div>
                </div>
            </div>
            <!-- character -->
            <div id="character" class="col-12" style="background-image:url(./svg/character_bg.svg); position:relative">
                <div id="detailinfo">
                    <div id="detaillist">
                        <table>
                            <tr>
                                <td style="font-size:30px"><?=find("special",1)['title'];?></td>
                            </tr>
                            <tr>
                                <td><?=find("special",1)['text'];?><br><br><br><br><br></td>
                            </tr>
                            <tr>
                                <td style="font-size:30px"><?=find("special",2)['title'];?></td>
                            </tr>
                            <tr>
                                <td><?=find("special",2)['text'];?><br><br><br><br><br></td>
                            </tr>
                            <tr>
                                <td style="font-size:30px"><?=find("special",3)['title'];?></td>
                            </tr>
                            <tr>
                                <td><?=find("special",3)['text'];?></td>
                            </tr>
                        </table>
                    </div>
                    <div id="closebtn"></div>
                </div>
                <div id="detailbtn" class="lightSpeedIn wow"></div>
            </div>
            <!-- portfolio -->
            <div class="col-12" id="portfolio">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./img/<?=find("portfolio",1)['file'];?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="./img/<?=find("portfolio",2)['file'];?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="./img/<?=find("portfolio",3)['file'];?>" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <!-- contact -->
            <div class="col-12" id="contact">
                <div id="contactinfo">
                    <table>
                        <tr>
                            <td><?=find("contact",1)['email'];?></td>
                        </tr>
                        <tr>
                            <td style="font-size: 24px">Feel free to get in touch.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="./cssjs/jquery-3.4.1.min.js"></script>
    <script src="./cssjs/bootstrap.bundle.min.js"></script>
    <script src="./cssjs/wow.min.js"></script>
    <script>
        new WOW().init()
        $("#login").on("click", function () {
            $("#modal").show();
            $("#modal").css("top",0);
            $("body").css("overflow","hidden");
        })
        
        $("#about-btn1").on("click", function () {
            $("#about-btn1").hide();
            $("#about-btn2").show();
            $("#official").hide();
            $("#private").show();
        })

        $("#about-btn2").on("click", function () {
            $("#about-btn2").hide();
            $("#about-btn1").show();
            $("#private").hide();
            $("#official").show();
        })

        $("#detailbtn").on("click", function () {
            $("#detailinfo").show();
        })

        $("#closebtn").on("click", function () {
            $("#detailinfo").hide();
        })
    </script>
</body>

</html>