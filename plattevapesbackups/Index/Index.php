<?php
    // function reDirHomePage(){
        
    //     if(isset($_COOKIE['LoggedIn'])){
	// 		if($_COOKIE['LoggedIn'] == true){
	// 			header('location: ../HomePage/HomePage.php');
	// 		}
    //     }
        
	// 	elseif(isset($_SESSION['LoggedIn'])){
	// 		if($_SESSION['LoggedIn'] == true){
	// 			header('location: ../HomePage/HomePage.php');
	// 		}
    //     }
	// }
	// reDirHomePage();//Found in login system
			
	// 	require_once('../Components/Statik/Header/Header.php');
  ?>




<!Doctype html>
<head>
 <?php require_once('../Config.Files/Config.php/API.CDN.Config.php');
include_once("../Config.Files/Server/Server.Controller/InfoControls.php");
  ?>
</head>




<body>
	<div id="PlatteVape"  ng-app="PlatteVape">

		<a href="#!">Home</a>
		<a href="#!about">about2</a>


		<slide-Show></slide-Show>
		<div ng-view></div>

	</div>
</body>





<script>
// //  var PlatteVape = angular.module("PlatteVape", []);
// PlatteVape.controller("ImageSlider", [
//   "$scope",
//   "$http",
//   function($scope, $http) {
// 	  alert('alert');

//     // ($scope.InitAccountListing = function() {
//     //   $http({
//     //     method: "get",
//     //     url: "./AdminController.php?VariableSetter=true",
//     //   }).then(function(response, data) {
//     //     console.log("User Data Initialized");
//     //     $scope.Records = response.data;

//     //   });
//     // }),
//   },
  
// ]); 
// var PlatteVape = Module forcontrollers and total app module........................


PlatteVape.controller("EditAccount", [
  "$scope",
  "$http",
  function($scope, $http) {

    // ($scope.InitAccountListing = function() {
    //   $http({
    //     method: "get",
    //     url: "./AdminController.php?VariableSetter=true",
    //   }).then(function(response, data) {
    //     console.log("User Data Initialized");
    //     $scope.Records = response.data;

    //   });
    // }),
  },
  
]); // End of Login System and Controller...




// -------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------
//++++++++++++++++++++++++This is how you create reuasable components

        PlatteVape.directive("navBar", function() {
  return {
	templateUrl : "../Web-Layout/Statik/NavBar.php"
	// template: "";
  };
});
        PlatteVape.directive("slideShow", function() {
  return {
	templateUrl : "../Web-Layout/NG-Comp/SlideShow.php"
  };
});

        
        </script>
