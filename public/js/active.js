$(document).ready(function () {
    var url = window.location;
    $('ul.navbar-nav a.nav-link[href="'+ url +'"]').addClass('active-link');
    $('ul.navbar-nav a.nav-link').filter(function() {
            return this.href == url;
    }).addClass('active-link');   
});
