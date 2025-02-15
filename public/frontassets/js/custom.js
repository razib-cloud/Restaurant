var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});


$(window).on('load', function () {
  // Preloader
  $('.loader').fadeOut();
  $('.loader-mask').delay(350).fadeOut('slow');
});


// wow js
new WOW().init();

// photo gallery script
$(document).ready(function () {
  var $lightbox = $('#lightbox');
  $('[data-target="#lightbox"]').on('click', function (event) {
    var $img = $(this).find('img'),
      src = $img.attr('src'),
      alt = $img.attr('alt'),
      css = {
        'maxWidth': $(window).width() - 100,
        'maxHeight': $(window).height() - 100
      };
    $lightbox.find('img').attr('src', src);
    $lightbox.find('img').attr('alt', alt);
    $lightbox.find('img').css(css);
  });
  $lightbox.on('shown.bs.modal', function (e) {
    var $img = $lightbox.find('img');
    $lightbox.find('.modal-dialog').css({
      'width': $img.width()
    });
    $lightbox.find('.close').removeClass('hidden');
  });
});

// comingsoon page countdown js
(function () {
  if (document.getElementById("days") !== null) {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

    let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = '2025',
      dayMonth = "02/30/",
      birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
      x = setInterval(function () {
        const now = new Date().getTime(),
          distance = countDown - now;

        let days = Math.floor(distance / (day));
        let hours = Math.floor((distance % (day)) / (hour));
        let minutes = Math.floor((distance % (hour)) / (minute));
        let seconds = Math.floor((distance % (minute)) / second);

        document.getElementById("days").innerText = days,
          document.getElementById("hours").innerText = hours,
          document.getElementById("minutes").innerText = minutes,
          document.getElementById("seconds").innerText = seconds;

        //do something later when date is reached
        if (distance < 0) {
          clearInterval(x);
          var items = document.querySelectorAll(".compaign_countdown");
          for (var i = 0; i <= items.length; i++) {
            if (typeof items[i] !== 'undefined') {
              items[i].style.display = "none";
            }
          }
        }
        //seconds
      }, 0)
  }
}());
// Get the button
var backButton = document.getElementById("back-to-top-btn");

if ($('#element').length) {

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      backButton.style.display = "block";
    } else {
      backButton.style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  backButton.addEventListener("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });
}

$(document).ready(function () {
  comparisonTable(".comparison-table ul li.active");

  // DIRTY Responsive pricing table JS
  $(".comparison-table ul").on("click", "li", function () {
    comparisonTable(this);

    $('.comparison-table ul li').removeClass('active');
    $(this).addClass('active');
  });
  // Initialize the media query
  var mediaQuery = window.matchMedia('(max-width: 992px)');
  // Add a listen event
  mediaQuery.addListener(doSomething);
  // On load
  doSomething(mediaQuery);
});

// Function to do something with the media query
function doSomething(mediaQuery) {
  if (mediaQuery.matches) {
    $('.sep').attr('colspan', 4);
  } else {
    $('.sep').attr('colspan', 4);
  }
}

function comparisonTable(el) {
  if ($('.comparison-table').length) {
    var width = $(document).width();

    if (width >= 992) {
      // $('.new-windows-tables-btn td:eq(0)').attr('colspan', 4);
      $('.comparison-table table tr td').removeAttr('style');
      $('.new-windows-tables-btn td:not(:eq(0))').attr('style', 'display: none !important');
    } else {
      // $('.new-windows-tables-btn td:eq(0)').removeAttr('colspan');

      var pos = $(el).index() + 1;
      $.each($('.comparison-table tbody tr td'), function (index, elem) {
        if ($(this).index() == pos || $(this).index() == 0) {
          $(this).attr('style', 'display: table-cell !important');
        } else {
          $(this).attr('style', 'display: none !important');
        }
      });
    }
  }
}

$(window).on('resize', function () {
  comparisonTable(".comparison-table ul li.active");
});

// 
$(document).ready(function () {
  function toggleButton() {
    if ($(window).width() <= 991) {
      $('.hide-button').show(); // Show the button for screens 991px or less
    } else {
      $('.hide-button').hide(); // Hide the button for larger screens
    }
  }

  // Initial check
  toggleButton();

  // Check on window resize
  $(window).resize(function () {
    toggleButton();
  });
});



$(document).ready(function () {
  var owl = $('.testimonials-con .owl-carousel');
  owl.owlCarousel({
    margin: 30,
    nav: true,
    loop: true,
    dots: false,
    navText: [
      "<img src='assets/images/left-arrow-image.png' alt='Left'>", // Left arrow image
      "<img src='assets/images/right-arrow-image.png' alt='Right'>" // Right arrow image
    ],
    autoplay: true,
    autoplayTimeout: 4500,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });
});

var popupImage = document.querySelector("#popupImage");

// photo gallery script for choosing images
document.addEventListener("DOMContentLoaded", function () {
  var images = [
    "assets/images/gallery-img1.jpg",
    "assets/images/gallery-img2.jpg",
    "assets/images/gallery-img3.jpg",
    "assets/images/gallery-img4.jpg",
    "assets/images/gallery-img5.jpg",
    "assets/images/gallery-img6.jpg",
    "assets/images/gallery-img7.jpg",
  ];
  var currentIndex = 0;
  var popupImage = document.getElementById("popupImage");

  if (popupImage) {
    popupImage.addEventListener("click", function () {
      this.src = images[currentIndex];
      currentIndex = (currentIndex + 1) % images.length;
    });
  }
});

// banner carousel smoothness

$(document).ready(function () {
  // Initialize the carousel
  $('#carouselExampleIndicators').carousel({
    interval: 3000, // Change slide every 3 seconds
    pause: "hover" // Pause on hover
  });

  // Disable sliding animation by removing transition classes
  $('.carousel-inner .carousel-item').css({
    transition: 'none',
    opacity: 0
  });

  // Show the first item immediately
  $('.carousel-inner .carousel-item.active').css('opacity', 1);

  // Event listener for slide event
  $('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {
    // Hide the current item
    $(e.relatedTarget).css('opacity', 0);
    // Show the next item
    $(e.relatedTarget).animate({
      opacity: 1
    }, 500); // Fade in the next item
  });
});