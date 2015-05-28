<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		  moves.php
* @Package:		Bantus
* @Author:		David Thevenin
*
*****************************************************/
?>
<!DOCTYPE html>
<html ng-app="CapoeiraMoves">
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

    <script src="theme/bantus/technics.js"></script>

</head>
  <body layout="column" ng-controller="AppCtrl">

    <md-toolbar layout="row">
      <button ng-click="toggleSidenav('left')" hide-gt-sm class="menuBtn">
        <md-icon md-svg-icon="menu" ></md-icon>
      </button>
      <h1 class="md-toolbar-tools" layout-align-gt-sm="center">Bantus Capoeira's moves</h1>
    </md-toolbar>
	  
	<div layout="row" flex>
	  <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$mdMedia('gt-sm')">
	  <md-tabs md-dynamic-height md-border-bottom>
		<div ng-init="moveTypes = ['Footwork', 'Ataque', 'Defesa', 'Floreios']"></div>
		<md-tab ng-repeat="type in moveTypes" label="{{type}}">
		  <md-list>
			<div ng-repeat="sub_technics in technics | filter:{type:type}">
			  <md-subheader class="md-no-sticky">{{sub_technics.sub_type}}</md-subheader>
			  <md-list-item ng-repeat="item in sub_technics.list | filter:{level:selectedLevels}:contains">
				<md-button ng-click="technics.selectMove(item)" ng-class="{'selected' : item === technics.selected }">
				  <h4>{{item.name}}</h4>
				</md-button>
			  </md-list-item>
			</div>
		  </md-list>
		</md-tab>
	  </md-tabs>
	  </md-sidenav>

	  <div layout="column" id="content">
		<md-content class="md-padding move_description">

			<h2><?php get_page_title(); ?></h2>
			<h4><?php get_page_movetype(); ?></h4><h4><?php get_page_movesubtype(); ?></h4>

		  <?php get_page_content(); ?>

		</md-content>
	  </div>

	</div>
	
	
</div><!-- end wrapper -->
	    <!-- Angular Material Dependencies -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.js"></script>

	<script src="theme/bantus/CapoeiraMoves.js"></script>

	
</body>
</html>


<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

?>
