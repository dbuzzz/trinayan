$(document).ready(function () {

      
      
$('nav .nav-item > a, .top_head li > a, .scroll').click(function(e) {
  e.preventDefault();
  var target = $($(this).attr('href'));
  if (target.length) {
    var offset = ($(window).width() > 990) ? 50 : 50;
    var scrollTo = target.offset().top - offset;
    $('body, html').animate({ scrollTop: scrollTo + 'px' }, 500);
  }
});


$(".hamburger").click(function(){
	$(this).toggleClass("is-active");
  });

	



 if ($(window).width() > 990 ) {
	  $(window).scroll(function() {
		if ($(this).scrollTop() > 768){  
			$('nav').addClass("south_nav");
		
		  }
		  else{
			$('nav').removeClass("south_nav");
		  }
		});
	}



if ($(window).width() < 991) {
	$("span.navbar-toggler-icon").click(function () {
		$(this).toggleClass("cross");
	});
}

$('.getintouch').click(function(){
    $('.form-right').toggleClass('open')
})
$('.close_fm').click(function(){
    $('.form-right').toggleClass('open')
})


$('.readmore').click(function(){
    $(this).prev('.more_cont').show();
    $(this).toggleClass('read-less');
    
    if($(this).hasClass('read-less'))
    {
        $(this).text('Read Less...')
    }
    else {
        
         $(this).text('Read More...');
         $(this).prev('.more_cont').hide();
    }
})

wow = new WOW({
	boxClass: "wow", // default
	animateClass: "animated", // default
	offset: 0, // default
	mobile: true, // default
	live: true, // default
});
wow.init()  



// $(window).scroll(function () {
//       var highlightsTop = $('#highlights').offset().top;
//       var windowHeight = $(window).height();
//       var scrollTop = $(window).scrollTop();

//       if (scrollTop > highlightsTop - windowHeight + 100) {
//         // Offset of 100 pixels from the bottom of the window
//         $('.animate_boxx').each(function (index) {
//           var that = $(this);
//           setTimeout(function () {
//             that.addClass('active');
//           }, index * 400); // Adjust the delay (500 milliseconds in this example)
//         });
//       }
// });

 $(".counter").counterUp({
  delay: 40,
  time: 4000
});


if ($(window).width() > 991) {
    
    gsap.registerPlugin(ScrollTrigger);

let horizontalSection = document.querySelector('.gallery_slide');

console.log(horizontalSection.scrollWidth);

gsap.to('.gallery_slide', {
  x: () => horizontalSection.scrollWidth * -1,
  xPercent: 100,
  scrollTrigger: {
    trigger: '.gallery_slide',
    start: 'center center',
    end: '+=2000px',
    pin: '.gallery',
    scrub: true,
    invalidateOnRefresh: true
  }
});

/*
gsap.registerPlugin(ScrollTrigger);


const gallerySlide = document.querySelector(".gallery_slide");
const gallerySlideWidth = gallerySlide.offsetWidth;
console.log("Gallery Slide Width" + gallerySlideWidth)


gsap.to(".gallery_slide", {
    scrollTrigger: {
        trigger: ".gallery_slide",
        scrub: true,
        pin: true,
        start: "top 6%",
        end: "+=400%",  
        markers: false,
    },
    x: `-${gallerySlideWidth}px`, // Use the calculated width to set the x property
    y: 0,
    duration: 3,
    ease: "slow",
});
*/

}




 gsap.to(".about_img img", {
            scrollTrigger: {trigger: ".about_img img", scrub: 1, start: "top center", end: "bottom top",  
          },  scale:1.2,  progress: 1,  stagger: .5, 
            
});

const scrollTriggerOptions = {
  scrub: 1,
  start: "top 80%",
  end: "bottom top",
};

const animateElement = (element, options) => {
  gsap.to(element, {
    duration: 1,
    ...options,
    scrollTrigger: { trigger: element, ...scrollTriggerOptions },
  });
};

animateElement(".anime_bottom", { x: 70, progress: 1, stagger: 0.5 });
animateElement(".anime_left", { x: 50, progress: 1, stagger: 0.5 });
animateElement(".x1", { x: 80, progress: 1, stagger: 0.5 });
animateElement(".x2", { x: 70, progress: 1, stagger: 0.5 });
animateElement(".x3", { x: 50, progress: 1, stagger: 0.5 });
animateElement(".x4", { x: 80, progress: 1, stagger: 0.5 });
animateElement(".x5", { x: 70, progress: 1, stagger: 0.5 });
animateElement(".x6", { x: 50, progress: 1, stagger: 0.5 });


const treeAnimation = (element, props) => {
  gsap.to(element, {
    scrollTrigger: { trigger: element, ...scrollTriggerOptions },
    ...props,
  });
};

treeAnimation(".leftree", { y: -50, progress: 1, stagger: 0.5 });
treeAnimation(".rightree", { x: -40, progress: 1, stagger: 0.5 });



if ($(window).width() < 991) {
    

 $('.gallery_slide').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      loop:false,
      autoPlay:true,
     autoplaySpeed: 2000,
     pauseOnHover:false,
      centerMode: !0, 
      centerPadding: "60px",
      arrows:false,
      responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "100px",
      }
    },
     {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "30px",
      }
    },
    ]
    });
    
    
$('.connectivity').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      loop:false,
      dots:true,
      autoPlay:true,
     autoplaySpeed: 2000,
     pauseOnHover:false,
      centerMode: !0, 
      centerPadding: "60px",
      arrows:false,
      responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "0px",
      }
    },
     {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "0px",
      }
    },
    ]
    });    
   
}


$('.floor_slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      loop:false,
      autoPlay:true,
      autoplaySpeed: 2000,
      pauseOnHover:false,
      arrows:false,
      dots:true,
      responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "100px",
      }
    },
     {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "30px",
      }
    },
    ]
});

$('.majesty').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  loop: true,
  autoplay: true, // Corrected autoPlay to autoplay
  autoplaySpeed: 4000,
  speed: 1200,
  pauseOnHover: false,
  arrows: false,
    responsive: [
{
breakpoint: 767,
settings: {
  centerMode: true,
centerPadding: '30px',
slidesToShow: 1,
}
},
]
});





if ($(window).width() < 991) {
    
    $('.navbar-nav .nav-link').click(function(){
        $('.navbar-collapse').removeClass('show');
        $('.hamburger').removeClass('is-active')
    })
    
 $('.mb-slide').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      loop:false,
      autoPlay:true,
     autoplaySpeed: 2000,
     pauseOnHover:false,
      centerMode: !0, 
      centerPadding: "60px",
      arrows:false,
      responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: "30px",
      }
    },
     {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "30px",
      }
    },
    ]
    });
   
}

});


//DLF contact form validation and submit the form using AJAX
$(document).ready(function() {
    
    //Phone number validation method (custom)
    $.validator.addMethod("phoneRegex", function(value, element) {
    // Define your regular expression pattern for phone number validation
     var pattern = /^\d+$/;

    // Test the value against the pattern
    return this.optional(element) || pattern.test(value);
  }, "Please enter a valid phone number");
  
  
$('.contact_form').each(function(index, form){
   $(form).validate({
    rules: {
      name: 'required',
      visit_time: 'required',
      mobile: {
        required: true,
        phoneRegex: true, // Regex pattern to allow ()+_ and digits
        minlength: 10,
        maxlength: 12, // Modify the maximum length if needed
      },
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      name: 'This field is required',
      visit_time: 'This field is required',
      mobile: {
        required: 'This field is required',
        phoneRegex: 'Please enter a valid phone number',
      },
      email: {
        required: 'This field is required',
        email: 'Please enter a valid email address'
      },
  
    },
    submitHandler: function(form) {
     // Prevent the default form submission
      event.preventDefault();

    var formData = new FormData(form); // Create a FormData object to store the form data
    const contactFormBtn = document.getElementById('contact_form_btn');
    contactFormBtn.setAttribute('disabled', true);

    $.ajax({
      url: 'contact_form_backend.php',
      type: 'POST',
      data: formData,
      dataType: 'json', // Explicitly specify the expected response type as JSON
      contentType: false, // Set contentType to false, as we are using FormData
      processData: false, // Set processData to false, as we are using FormData
      success: function(response) {
           //again active the form submit button
            contactFormBtn.removeAttribute('disabled', false);
        // Clear any previous error messages
        $('#errorContainer').empty();

        // Check the response from the server
        if (response && response.status === 'success') {
            var brochure = $('input[name="brochure"]').val();
            if(brochure){
                $('#brochure').modal('hide');
            }
          form.reset();
          window.location.href = "thanks.php";
        } else if (response && response.status === 'error') {
          // If the response contains error messages, display them
          var errors = response.errors;
           $('.error').remove()

          $.each(errors, function(key, value) {
            $err_label = '<label class="error">'+ value +'</label>'
            $('input[name="'+key+'"]').after($err_label);
          });
        }
      },
      error: function(xhr, status, error) {
        console.log(error); // Log any errors for debugging
      }
    });
//   });
    }
  }); 
  });
 
});

function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode != 45 && charCode > 31
    && (charCode < 48 || charCode > 57))
     return false;

  return true;
}

//DLF contact form validation and submit the form using AJAX ends

//DLF Get In Touch form validation and submit the form using AJAX
// $(document).ready(function() {
    
//     //Phone number validation method (custom)
//     $.validator.addMethod("phoneRegex", function(value, element) {
//     // Define your regular expression pattern for phone number validation
//      var pattern = /^\d+$/;

//     // Test the value against the pattern
//     return this.optional(element) || pattern.test(value);
//   }, "Please enter a valid phone number");
  
  
//   $('#getInTouchForm').validate({
//     rules: {
//       name: 'required',
//       mobile: {
//         required: true,
//         phoneRegex: true, // Regex pattern to allow ()+_ and digits
//         minlength: 10,
//         maxlength: 12, // Modify the maximum length if needed
//       },
//       email: {
//         required: true,
//         email: true
//       },
//     },
//     messages: {
//       name: 'This field is required',
//       mobile: {
//         required: 'This field is required',
//         phoneRegex: 'Please enter a valid phone number',
//       },
//       email: {
//         required: 'This field is required',
//         email: 'Please enter a valid email address'
//       },
  
//     },
//     submitHandler: function(form) {
//      // Prevent the default form submission
//       event.preventDefault();

//     var formData = new FormData(form); // Create a FormData object to store the form data
//     const contactFormBtn = document.getElementById('get_in_touch_form_btn');
//     contactFormBtn.setAttribute('disabled', true);

//     $.ajax({
//       url: 'contact_form_backend.php',
//       type: 'POST',
//       data: formData,
//       dataType: 'json', // Explicitly specify the expected response type as JSON
//       contentType: false, // Set contentType to false, as we are using FormData
//       processData: false, // Set processData to false, as we are using FormData
//       success: function(response) {
//           //again active the form submit button
//             contactFormBtn.removeAttribute('disabled', false);
//         // Clear any previous error messages
//         $('#errorContainer').empty();

//         // Check the response from the server
//         if (response && response.status === 'success') {
//           // If the response is 'success', the form submission was successful
//           // You can redirect the user to a success page or perform any other actions
//           //$('#thankyou_popup').modal('show');
//           window.location.href = "thanks.php";
//           form.reset();
//         } else if (response && response.status === 'error') {
//           // If the response contains error messages, display them
//           var errors = response.errors;

//           $.each(errors, function(key, value) {
//             $('#' + key + 'Error').text(value);
//             $('#' + key + 'Error').removeAttr("style");
//           });
//         }
//       },
//       error: function(xhr, status, error) {
//         console.log(error); // Log any errors for debugging
//       }
//     });
// //   });
//     }
//   });
// });
//DLF Get In Touch form validation and submit the form using AJAX ends

$('#brochure').on('hidden.bs.modal', function(){
     $('#download_brochure').validate().resetForm();
     $('#download_brochure')[0].reset();
});














	


