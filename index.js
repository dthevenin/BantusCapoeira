var app = angular.module ('CapoeiraTechnics', ['ngMaterial']);

app.config (function ($mdIconProvider) {
  $mdIconProvider.icon ("menu", "./assets/menu.svg", 24);
});

app.controller('AppCtrl', function($scope, $mdSidenav, $sce){

  function patchData () {
    technics.forEach (function (sub_item) {
      sub_item.list.forEach (function (item) {
        item.type = sub_item.type;
        item.sub_type = sub_item.sub_type;
      });
    });
  }
  patchData ();

  $scope.technics = technics;//[0].list;

  $scope.technics.selected = technics[0].list [0];

  $scope.toggleSidenav = function(menuId) {
    $mdSidenav(menuId).toggle();
  };
 
  $scope.technics.selectMove = function (item) {
    $scope.technics.selected = item;
  }

  $scope.generateYoutubeLink = function (code) {
    return $sce.trustAsResourceUrl ("https://www.youtube.com/embed/" + code);
  }
  
  $scope.selectedLevels = [0, 1]; 

  $scope.contains = function (expected, actual) {  
    return actual.indexOf(expected) > -1;
  };

});