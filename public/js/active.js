$(document).ready(function () {
    var url = window.location;
    $('ul.navbar-nav a.nav-link[href="'+ url +'"]').addClass('active');
    $('ul.navbar-nav a.dropdown-item[href="'+ url +'"]').addClass('active-drop');
    $('ul.navbar-nav a.nav-link').filter(function() {
            return this.href == url;
    }).addClass('active');   
    $('ul.navbar-nav a.dropdown-item').filter(function() {
        return this.href == url;
    }).addClass('active-drop'); 
});
