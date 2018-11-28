import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function(){
  var title = $("title").text();
  console.log(title + " is ready.");
});


$(document).ready(() => {
    $('.js--toggle-menu').click(() => {
    	$( ".navbar-nav" ).addClass( "js--nav" );
        $('body').toggleClass('disabled-scrolling');
    });
    $('.js--toggle-close').click(() => {
    	$( ".navbar-nav" ).removeClass( "js--nav" );
        $('body').toggleClass('disabled-scrolling');
    });
    $('.nav-link').click(() => {
    	$( ".navbar-nav" ).removeClass( "js--nav" );
        $('body').toggleClass('disabled-scrolling');
    });
});

$('.navbar-nav').on('click', ' a[href^="#"]', function (event) {
    event.preventDefault();
    // var headerHeight = $('header').outerHeight();
    var headerHeight = 100;

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - headerHeight
    }, 1000);

});