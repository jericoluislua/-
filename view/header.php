<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a href="/" class="navbar-brand" id="<?= $activew ?>">ＪＬＬ</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav centered-navbar">
                <li><a href="/FILES" id="<?= $activef ?>">ＦＩＬＥＳ</a></li>
                <li><a href='/PROJECTS' id="<?= $activep ?>">ＰＲＯＪＥＣＴＳ</a></li>
                <li><a href='/ME' id="<?= $activel ?>">ＭＥ</a></li>
                <li><a href="/HOBBIES" id="<?= $activeh ?>">ＨＯＢＢＩＥＳ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/LOGOUT" class="link" id="logout">ＬＯＧＯＵＴ</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div id="<?= $bg ?>" align="center">
    <div id="btnopendiv"><a id="<?= $btnw ?>" class="btn" onclick="openIndex()">Ｗ　Ｅ　Ｌ　Ｃ　Ｏ　Ｍ　Ｅ</a></div>
</div>
<div class="container maincontainer" id="<?= $container ?>">
        <div id="heading">
            <h1 id="<?= $id ?>"><?= $heading ?></h1>