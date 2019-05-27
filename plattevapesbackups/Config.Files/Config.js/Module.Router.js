var PlatteVape = angular.module("PlatteVape", ["ngRoute"]);
PlatteVape.config(function($routeProvider) {
  $routeProvider
    .when("/", {
      templateUrl: "../Web-Layout/Home/Home.php",
    })
    .when("/about", {
      templateUrl: "../Web-Layout/About/About.php",
    });
  // .when("/green", {
  // templateUrl: "green.htm",
  // })
  // .when("/blue", {
  // templateUrl: "blue.htm",
  // });
});
