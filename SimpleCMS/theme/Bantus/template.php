<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Cardinal theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html ng-app="CapoeiraTechnics">
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">

	<link rel="stylesheet" type="text/css" href="theme/bantus/style.css" media="all" />
    <meta name="viewport" content="initial-scale=1" />

</head>
  <body layout="column" ng-controller="AppCtrl">

    <md-toolbar layout="row">
      <button ng-click="toggleSidenav('left')" hide-gt-sm class="menuBtn">
        <md-icon md-svg-icon="menu" ></md-icon>
      </button>
      <h1 class="md-toolbar-tools" layout-align-gt-sm="center"><?php get_page_title(); ?></h1>
    </md-toolbar>
	  
	 <?php get_page_content(); ?>
	
</div><!-- end wrapper -->
	    <!-- Angular Material Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.js"></script>
	
	<script src="theme/bantus/index.js"></script>
	<script src="theme/bantus/technics.js"></script>

	
</body>
</html>
