// fix bg resizing bug

//**************** */



$('#mobile-nav').click(function(event) {
    $('nav').toggleClass('active');
  });
$(document).scroll(function(){
    $('nav').removeClass('active');
});
$( "section" ).click(function() {
    $('nav').removeClass("active");
});

function menuClose() {
    $('nav').removeClass('active');
}
function menu() {
    $('nav').addClass('active');
}