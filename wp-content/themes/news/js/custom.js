$(document).ready(function () {

    // Search 
    $(".search-box").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-overlay-close").on("click", function () {
        $(".search-overlay").removeClass("search-overlay-active");
    });
    // Search End 

    // Side menubar
    $("#close-btn, .nav_menu").click(function () {
        $("#mySidenav, .body-bg").toggleClass("active");
    });
    // Sidebar End 

    // Scroll Top Header 
    $(window).scroll(function () {
        var $height = $(window).scrollTop();
        if ($height > 400) {
            $('.scroll_header').addClass('active');
        } else {
            $('.scroll_header').removeClass('active');
        }
    });
    // Scroll Top Header End 


    // Newsletter 
    setTimeout(function () {
        $('.newsletter').fadeIn('fast');
    }, 7000);
    $('.newsletter_close').click(function () {
        $('.newsletter').toggleClass('active');
    })
    // Newsletter End 


    // Dark Mode 
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    const currentTheme = localStorage.getItem('theme');

    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
    // Dark Mode End 


});