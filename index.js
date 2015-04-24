var app = angular.module ('CapoeiraTechnics', ['ngMaterial']);

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

});