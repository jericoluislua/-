<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

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
            <a href="/" class="navbar-brand" id='website' onclick="headerChange()">ＪＬＬ</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav centered-navbar">
                <li><a href="/FILES" class='link' id="file" onclick="headerChange();">ＦＩＬＥＳ</a></li>
                <li><a href='/PROJECTS' class='link' id="project" onclick="headerChange();">ＰＲＯＪＥＣＴＳ</a></li>
                <li><a href='/ME' class='link' id="life" onclick="headerChange();">ＭＥ</a></li>
                <li><a href="/HOBBIES" class='link' id="hobby" onclick="headerChange();">ＨＯＢＢＩＥＳ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/LOGOUT" class="link" id="logout">ＬＯＧＯＵＴ</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<script>
    /*https://stackoverflow.com/questions/10750603/jquery-detect-a-window-width-change-but-not-a-height-change*/
    function headerChange(){
        if($(window).width() < 387){
            console.log('Page is smaller than 387');
            document.getElementById("h1project").innerHTML = "ＰＲＯＪＥＣＴＳ";
        }
        else if ($(window).width() > 388 && $(window).width() < 569) {
            console.log('Page is smaller than 498');
            document.getElementById("h1index").innerHTML = "Ｗ Ｅ Ｂ Ｓ Ｉ Ｔ Ｅ";
            document.getElementById("h1project").innerHTML = "Ｐ Ｒ Ｏ Ｊ Ｅ Ｃ Ｔ Ｓ";
            document.getElementById("h1hobbyindex").innerHTML = "Ｈ Ｏ Ｂ Ｂ Ｉ Ｅ Ｓ";
        }
        else if($(window).width() <= 570){
            console.log('Page is bigger than 498');
            document.getElementById("h1index").innerHTML = "Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ";
            document.getElementById("h1project").innerHTML = "Ｐ　Ｒ　Ｏ　Ｊ　Ｅ　Ｃ　Ｔ　Ｓ";
            document.getElementById("h1hobbyindex").innerHTML = "Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ";
        }
    }
</script>
<div class="container">

    <h1 id="<?= $id ?>"><?= $heading ?></h1>