var currentUrl = window.location.href;

$('ul.navbar-nav a.nav-link').each(function(){
    var linkUrl = $(this).attr('href');

    if (currentUrl.indexOf(linkUrl) !== -1) {
        $(this).closest('li').addClass('active');
    }
});