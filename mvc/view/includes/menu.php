<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
    
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
         <li><a href="createCourse.php">Create course</a></li>
          <li><a href="viewCourses.php">view courses</a></li>
          <li><a href="createExam.php">Create exam</a></li>
          <li><a href="viewExam.php">view exam</a></li>
          <li><a href="createMatters.php">Create subject</a></li>
          <li><a href="viewMatter.php">View subject</a></li>
          <li><a href="Question.php">add Question</a></li>
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
      <li class=""><a href="#">Home</a></li>
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
                  <li class=""><a href="home.php">home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-align-justify"></span></a></li>
          <li class="dropdown last">
            <a href="#" class="dropdown-toggle"  data-toggle="dropdown">Course <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="createCourse.php">Create course</a></li>
          <li><a href="registration.php">view courses</a></li>
          <li><a href="#">modify Courses</a></li>
          
            
            <li class="divider"></li>
              <li><a href="#">delete Courses</a></li>
            

         
        
            </ul>
          </li>


          <li class="dropdown last">
            <a href="viewExam.php" class="dropdown-toggle" data-toggle="dropdown">exam <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="createExam.php">Create exam</a></li>
          <li><a href="viewExam.php">view exam</a></li>
          <li><a href="#">modify exam</a></li>
          
         
             
              <li class="divider"></li>
              <li><a href="#">delete exam</a></li>
            </ul>
          </li>


           <li class="dropdown last">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">subject<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-education"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="createMatters.php">Createsubject</a></li>
          <li><a href="viewMatter.php">view subject</a></li>
          <li><a href="#">modify subject</a></li>
         
         
          <li class="divider"></li>
              <li><a href="#">delete subject</a></li>
            </ul>
          </li>


           <li class="dropdown last">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="createCourse.php">Personal information</a></li>
         
         
         
          <li class="divider"></li>
              <li><a href="#">Sign off</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</aside>