// Put any custom js here
$(function() {

  // Click logo to go back to top
  $('.to-top').on('click', function(e) {
    e.preventDefault();
    $('body,html').animate({scrollTop : 0},250);
  });

  $('.navbar-toggle').click(function() {
    $(this).toggleClass('rotate');
    $('nav').slideToggle(400);
  });

  var winWidth = $(window).width();

  if (winWidth < 600) {
    $('nav li a').click(function() {
      $('nav').slideUp();
    });
    console.log($(window).width());
  }

  // Pinned header
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $('header').addClass('pinned');
    } else {
        $('header').removeClass('pinned');
    }

    // Remove current class from navigation item when user hits top of page
    if (scroll === 0) {
      $('nav li').removeClass('current');
    }
  });

  // One page navigation
  $('nav').onePageNav({ scrollSpeed: 250 });

  // Learn more button
  $('.intro .btn').click(function(e) {
    var winHeight = $(window).height();
    e.preventDefault();
    $('body,html').animate({scrollTop : winHeight},250);
  });

  // Contact form
  // $('#contactForm').ajaxForm(function() {
  //   if ($('#contactForm input, #contactForm textarea').hasClass('parsley-success')) {
  //     $('.success').fadeIn("fast").delay(5000).fadeOut("fast");
  //     $('#contactForm').resetForm();
  //     $('#contactForm input, #contactForm textarea').removeClass('parsley-success');
  //   }
  // });

  // Placeholder fix
  $('input, textarea').placeholder();
  
});