$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/* activate sidebar on docs page */
$('#sidebar').affix({
  offset: {
    top: 135
  }
});

/* activate scrollspy menu on docs page */
var $body   = $(document.body);
var navHeight = $('#sidebar.nav').outerHeight(true) + 0;

$body.scrollspy({
  target: '#leftCol',
  offset: navHeight
});

/* smooth scrolling sections on docs page */
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

/* For switching forms on Signup */
$('a#changeToFree').on( 'click', function() {
  $('#angel-signup-form').hide();
  $('#free-signup-form').show();
});

$('a#changeToAngel').on( 'click', function() {
  $('#angel-signup-form').show();
  $('#free-signup-form').hide();
});


/* For the terminal */
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

/* Milestone email */
$('.milestone-email-trigger').on('click', function() {
  $(this).removeClass('fa-envelope');
  $('.milestone-form-container').toggle();
  console.log("Something");
});



$(function(){
  var elem;
  elem = $('#typed');
  $("#typed").typed({
    strings: ["pingkong monitor ^750 myshop.com"],
    typeSpeed: 80,
    startDelay: 3000,
    contentType: 'text',
    cursorChar: "▌",
    onStringTyped: function() {
      elem.siblings('.typed-cursor').css({ display: "block" });;

      window.setTimeout(function() {
        $('.typed-cursor').hide();
        $('#first-output').show();  
      }, 1000);
      
    }
    
  });
});


