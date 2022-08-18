$(document).ready(function () {

    // Search 
    $(".search-box i").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-overlay-close").on("click", function () {
        $(".search-overlay").removeClass("search-overlay-active");
    });
    // Search End 

    // Mobile Nav
    $("#menu1").metisMenu();
    // MObile Nav End

    // Side menubar
    $("#close-btn, .nav_menu").click(function () {
        $("#mySidenav, .body-bg").toggleClass("active");
    });


});