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

var bounce = new Bounce();
bounce
.scale({
  from: { x: 0, y: 0 },
  to: { x: 1, y: 1 },
  duration: 2500,
  stiffness: 6,
});

bounce.applyTo($(".terminal")).then(function() { 
  console.log("Animation Complete"); 
});

var bounce2 = new Bounce();
bounce2
.scale({
    from: { x: 1, y: 1 },
    to: { x: 0.1, y: 2.3 },
    easing: "sway",
    delay: 3000,
    stiffness: 2
  })

bounce2.applyTo($(".label")).then(function() { 
  console.log("Label Animation Complete"); 
});
