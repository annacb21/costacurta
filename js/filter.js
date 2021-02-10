// Add active class to the current control button (highlight it)
$(document).ready(function () {
  var url = window.location;
  $('#filterList a[href="'+ url +'"]').addClass('active-filter');
  $('#filterList a').filter(function() {
          return this.href == url || this.href == url + "#articoli";
  }).addClass('active-filter');

});
