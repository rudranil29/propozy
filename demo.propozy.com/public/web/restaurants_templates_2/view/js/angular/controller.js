app.controller('webCtrl', function($scope, $rootScope, $filter, $stateParams, $state) { 
	
	$scope.$on('$viewContentLoaded', function(){ 
	});
	 $scope.data = {
		"header": {
			"logo": "images/logo.png",
			"menu": [{
				"name": "HOME",
				"$$hashKey": "object:1"
			}, {
				"name": "ABOUT",
				"$$hashKey": "object:2"
			}, {
				"name": "SERVICES",
				"$$hashKey": "object:3"
			}, {
				"name": "MENU",
				"$$hashKey": "object:4"
			},{
				"name": "GALLERY",
				"$$hashKey": "object:5"
			},{
				"name": "CHEFS",
				"$$hashKey": "object:6"	
			},{
				"name": "FEEDBACK",
				"$$hashKey": "object:7"
			},{
				"name": "Contact Us",
				"$$hashKey": "object:7"
			}]
		},
		"banner":[{
			"image":"images/slider/slider-img-1.jpg",
			"text1":"The Best Healthy Food",
			"text2":"Lorem ipsum dolor sit amectetur adipici"
		},{
			"image":"images/slider/slider-img-2.jpg",
			"text1":"Mind Blowing Ambiance",
			"text2":"Lorem ipsum dolor sit ametectetur adipis"
		},{
			"image":"images/slider/slider-img-3.jpg",
			"text1":"Best Country Sea Food",
			"text2":"Lorem ipsum dolor sit ansectetur adipis"
		}],
		"about":{
			"title":"About",
			"subtitle":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.",
			"image":"images/features.jpg",
			"text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum. lobcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum. Rem ea ducimus quos quae quo.",
			"label1":"Bootstrap",
			"text1":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum",
			"label2":"Responisve Theme",
			"text2":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet.",
			"label3":"HTML5/CSS3",
			"text3":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet."
		},
		"service":{
			"title":"Services",
			"subtitle":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.",
			"services":[{
				"title":"Breakfast",
				"text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.",
				"image":"images/breakfast.jpg"
			},{
				"title":"Lunch",
				"text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.",
				"image":"images/lunch.jpg"
			},{
				"title":"Dinner",
				"text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.",
				"image":"images/dinner.jpg"
			}],
			"service1":{
				"title1":"Buffeat",
				"text1":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.",
				"title2":"Parties",
				"text2":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.",
				"title3":"Rooms",
				"text3":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla."
			}
		},
		"foodmenu":{
			"title":"Menu Card",
			"subtitle":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.",
			"menu": [{
				"foodname":"Chicken Masala",
				"price":"$5.00",
				"details":"with butter"
			},{
				"foodname":"Chicken Masala",
				"price":"$5.00",
				"details":"with butter"
			},{
				"foodname":"Chicken Masala",
				"price":"$5.00",
				"details":"with butter"
			},{
				"foodname":"Chicken Masala",
				"price":"$5.00",
				"details":"with butter"
			},{
				"foodname":"Chicken Masala",
				"price":"$5.00",
				"details":"with butter"
			}]
		},
		"gallery":{
			"gal":[{
				"image":"images/img-portfolio/portfolio1.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio2.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio3.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio4.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio5.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio6.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio1.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio2.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio3.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio4.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio5.jpg",
				"text":"Add a description of the image here"
			},{
				"image":"images/img-portfolio/portfolio6.jpg",
				"text":"Add a description of the image here"
			}]	
		},
		"info":{
			"title":"Stats",
			"subtitle":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.",
			"branch":"Branch",
			"n1":"12",
			"drinks":"Drinks",
			"n2":"87",
			"dishes":"Dishes",
			"n3":"152",
			"customer":"Customers",
			"n4":"56500"
		},
		"chefs":{
			"title":"Chefs",
			"team":[{
				"image":"images/img-teams/team1.jpg",
				"name":"Chris Willam",
				"description":"Lorem ipsum dolor sit amet, consectetur adipisic"
			},{
				"image":"images/img-teams/team2.jpg",
				"name":"Chris Willam",
				"description":"Lorem ipsum dolor sit amet, consectetur adipisic"
			},{
				"image":"images/img-teams/team3.jpg",
				"name":"Chris Willam",
				"description":"Lorem ipsum dolor sit amet, consectetur adipisic"
			}]
		},
		"feedback":{
			"title":"Customer Feedback",
			"comment":"Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.",
			"image":"http://keenthemes.com/assets/bootsnipp/img1-small.jpg",
			"name":"Lina Mars",
			"post":"Commercial Director"

		},
		"contact":{
			"title":"Contact Us",
			"subtitle":"We love feedback. Fill out the form below and we'll get back to you as soon as possible. in minus distinctio dolores ipsam.",
			"address":"2901 E Baltimore St, Baltimore, MD 21224, USA",
			"mobile":"+1 800-712-8823",
			"label":"Write Us",
			"email":"info@simpleinformation.com",
			"image":"images/logo.png",
			"desc":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et porro quos iste ratione doloribus asperiores, error omnis delectus rerum sapiente. Et, aliquam modi beatae quae in perferendis ab est fugiat!",
			"label1":"News & Updates",
			"desc1":"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et porro quos iste ratione doloribus asperiores, error omnis delectus rerum sapiente. Et, aliquam modi beatae quae in perferendis ab est fugiat!",
			"desc2":"Lorem ipsum dolor sit amet",
			"copyright":"Copyright © 2018. simpleinformation.com"
		}
	}
});
