/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('tutorialWebApp', [
    'ngRoute'
]);



  
  
/**
 * Configure the Routes
 */
app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
        $routeProvider
                // Home
                .when("/", {templateUrl: "openclick/partials/home.html", controller: "PageCtrl"})
                // Pages
                .when("/about", {templateUrl: "openclick/partials/about.html", controller: "PageCtrl"})
                .when("/faq", {templateUrl: "openclick/partials/faq.html", controller: "PageCtrl"})
                .when("/pricing", {templateUrl: "openclick/partials/pricing.html", controller: "PageCtrl"})
                .when("/services", {templateUrl: "openclick/partials/services.html", controller: "PageCtrl"})
                .when("/contact", {templateUrl: "openclick/partials/contact.html", controller: "PageCtrl"})
                // Blog
                .when("/blog", {templateUrl: "openclick/partials/blog.html", controller: "BlogCtrl"})
                .when("/blog/post", {templateUrl: "openclick/partials/blog_item.html", controller: "BlogCtrl"})
                // else 404
                .otherwise("/404", {templateUrl: "openclick/partials/404.html", controller: "PageCtrl"});

        //$locationProvider.html5Mode(true); 
    }]);

/**
 * Controls the Blog
 */
app.controller('BlogCtrl', function (/* $scope, $location, $http */) {
    console.log("Blog Controller reporting for duty.");
});

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
    console.log("Controller PageCtrl INICIO.");
 

    $("#btn1").click(function () {
        $("p").append(" <b>Appended text</b>.");
    });
    $("#btn2").click(function () {
        $("ol").append("<li>Appended item</li>");
    });


    /* PLUGIN ONHOVER SPRITE - INICIO*/
    $('#disenioweb').spriteOnHover();
    $('#hosting').spriteOnHover();
    $('#identidad').spriteOnHover({fps: 20});
    $('#fotografia').spriteOnHover({fps: 20});
    $('#impresos').spriteOnHover({fps: 30});
    $.scrollIt({
        topOffset: -60
    });

    $('.clients').find('img').mouseover(function () {
        this.src = this.src.replace('a.jpg', '.jpg');
    }).mouseout(function () {
        this.src = this.src.replace('.jpg', 'a.jpg');
    });
    /* PLUGIN ONHOVER SPRITE - INICIO*/
    
    /* PLUGIN SCROLLIT- INICIO*/
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
    });
     $().UItoTop({easingType: 'easeOutQuart'});
     
     
     /* PLUGIN SCROLLIT- FIN*/
      
      
     /* INICIO- MIXitUp FOTOS */
    mixItUp();
    /* FIN - MIXitUp FOTOS */
    

    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    });

    // Activates Tooltips for Social Links
    $('.tooltip-social').tooltip({
        selector: "a[data-toggle=tooltip]"
    });
    
    console.log("Controller PageCtrl FIN !!.");
    
});

function mixItUp() {

    var filterList = {
        init: function () {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });
        },
        hoverEffect: function () {
            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                    },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                    }
            );
        }
    };
    // Run the show!
    filterList.init();
}