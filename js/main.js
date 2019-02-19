$(".navbar-burger").click(function() {
    
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
});
window.addEventListener("scroll", function(){
  $(".navbar-burger").removeClass("is-active");
  $(".navbar-menu").removeClass("is-active");
});

