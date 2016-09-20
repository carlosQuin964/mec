<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <style>.navbar-inverse{background: #098F85;}</style>
    
</head>
<body>

<header class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div version="2.0" id="header">
    <div class="pull-left"><a title="Home" name="Home" href="/"><img src="img/LogoUniversidades.gif" width="70"></a></div>
    <div class="pull-right"><a title="Home" name="Home" href="#" class="navbar-brand nav navbar-right">MEC</a></div></div>
    <div version="2.0" id="menu"><div class="navbar-header pull-left">
        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"> </span><span class="icon-bar"> </span><span class="icon-bar"> </span>
        </button>    
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="_menu">
         <li><a href="Ehome.php">home</a></li>
         <li><a href="seeCourse.php">view Courses</a></li>

         
          
        </ul></div></div>
        </div>
</header>

<!-- nav global -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".global-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Mec</a>
  </div>
  <div class="collapse navbar-collapse global-navbar-collapse">
    <ul class="nav navbar-nav" id="home">
      <li class=""><a href="Ehome.php">Home</a></li>
      <li class=""><a href="#">personal information</a></li>
      <li><a href="lagout.php">Sign off</a></li>
           

  </div><!-- /.nav-collapse -->
</nav>

<!--nav sidebar -->
<aside>
  <nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
      <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".view-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Menú<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer"></span></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse view-navbar-collapse">
        <ul class="nav navbar-nav" id="homes">
                  <li class=""><a href="Ehome.php">home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-align-justify"></span></a></li>
          <li class="dropdown last">
            
            <ul class="dropdown-menu forAnimate" role="menu">
         
          
            
            <li class="divider"></li>
              <li><a href="#">delete Courses</a></li>
            

         
        
            </ul>
          </li>


          <li class="dropdown last">
            <a href="viewExam.php" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="seeCourse.php">view Courses</a></li>
          
         
          
         
             
              <li class="divider"></li>
              
            </ul>
          </li>


           <li class="dropdown last">
            
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="../addTeacher.php">create Teacher</a></li>
          
         
         
          <li class="divider"></li>
              
            </ul>
          </li>


           <li class="dropdown last">
            
            <ul class="dropdown-menu forAnimate" role="menu">
          
         
         
         
          <li class="divider"></li>
              <li><a href="#">Sign off</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</aside>