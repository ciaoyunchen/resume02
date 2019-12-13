<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <link rel="stylesheet" href="./cssjs/bootstrap.min.css">
    <link rel="stylesheet" href="./cssjs/all.min.css">
    
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

        a {
            display: block;
            width: 100%;
            height: 100%;
            color: #333;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #333;
        }

        table:not(:first-child) {
            margin-top: 30px;
        }

        table input {
            width: 600px;
            padding: 10px;
        }

        table textarea {
            width: 600px;
            padding: 10px;
        }

        span input {
            border-radius: 10px;
            font-size: 14px;
        }

        #covertr input {
            width: 100%;
            padding: 10px;
        }

        #header {
            width: 100vw;
            height: 70px;
            background: white;
            position: fixed;
            z-index: 999;
        }

        #topbar {
            width: 70%;
            height: 100%;
            margin: 0 auto;
            position: relative;
        }

        #cover {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 5;
            background: rgba(51,51,51,0.4);
            top: 0;
            left: 0;
            overflow: auto;
        }

        #coverr {
            width: 50%;
            height: 50%;
            position: absolute;
            z-index: 5;
            background: #ffffff;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            overflow: auto;
        }

        .logo {
            width: 200px;
            height: 70px;
            position: absolute;
            left: 0;
        }

        .item {
            height: calc(100vh - 100px);
            padding: 30px;
        }

        .row {
            padding-top: 70px;
        }

        .col-2 {
            padding-top: 30px;
        }
        
        .col-2 button {
            margin: 10px;
        }

        .content {
            width: 800px;
            margin: 30px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div id="cover" style="display: none">
        <div id="coverr">
            <a style="width:10px; height:10px; position:absolute; right:3px; top:4px; cursor:pointer; z-index:999" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:998"></div>
        </div>
    </div>
    <!-- header -->
    <div id="header">
        <div id="topbar">
            <div class="logo">
                <a href="index.php"><img src="./svg/resume_logo.svg" alt="resume_logo"></a>
            </div>
        </div>
    </div>
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-2 item">
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=cover">Cover</a></button>
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=about">About</a></button>
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=experience">Experience</a></button>
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=character">Character</a></button>
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=portfolio">Portfolio</a></button>
                <button type="button" class="btn btn-outline-dark col-12"><a href="?do=contact">Contact</a></button>
            </div>
            <div class="col-10 item" style="overflow:auto">

                <?php
                $do = (!empty($_GET['do']))?$_GET['do']:"cover";
                $path = "./admin/" . $do . ".php";
                if(file_exists($path)) {
                    include $path;
                }else {
                    include "./admin/cover.php";
                }
                ?>
        
            </div>
        </div>
    </div>
    <div class="container-fulid bg-dark" style="height: 30px">
    </div>
    <script src="./cssjs/jquery-3.4.1.min.js"></script>
    <script src="./cssjs/bootstrap.bundle.min.js"></script>
    <script>
        function op(x,y,url) {
            $(x).fadeIn()
            if(y)
            $(y).fadeIn()
            if(y && url)
            $(y).load(url)
        }
        function cl(x) {
            $(x).fadeOut();
        }
    </script>
</body>

</html>