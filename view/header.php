<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <script src="/js/jscript.js"></script>
    <title><?= $title ?></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!--
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='/'>ＳＥＬＦ</a>
        </div>
        -->
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class='link'><a href='/website' id="home">ＷＥＢＳＩＴＥ</a></li>
                <li class='link'><a href='/me' id="personal">ＭＥ</a></li>
                <li class='link'><a href='/projects' id="project">ＰＲＯＪＥＣＴＳ</a></li>

                    <li  class="dropdown link"><a class="dropbtn" id="hobby">ＨＯＢＢＩＥＳ</a>
                        <div class="dropdown-content">
                                <a href='/hobbies/basketball'>basketball</a>
                                <a href='/hobbies/dancing'>dancing</a>
                        </div>
                    </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <h3><?= $heading?></h3>