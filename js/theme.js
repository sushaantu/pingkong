$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/* activate sidebar */
$('#sidebar').affix({
  offset: {
    top: 135
  }
});

/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('#sidebar.nav').outerHeight(true) + 0;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});

/* smooth scrolling sections */
$('#sidebar.nav li a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 0
        }, 1000);
        return false;
      }
    }
});