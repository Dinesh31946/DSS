// ************* onscroll navbar js file starts *************

      $(function(){
        $(window).scroll(function (){
          if($(window).scrollTop() > 500) {
            $('nav').addClass('dark');
          }
          else {
            $('nav').removeClass('dark');
          }
        });
      });

      // ************* onscroll navbar js file ends here *************

      // ************* navbar js file starts *************

      $(window).on('scroll', function(){
        if($(this).scrollTop()){
          $('nav').addClass('black');
        }
        else{
          $('nav').removeClass('black');
        }
      });

    // Active current page file

    function activeLinksControll(){
      $('.menu-list .nav-item').click(function(){
        // remove active class from any links
        $('.nav-item').removeClass('active')
        // add active class to a
        $(this).closet('.nav-item').addClass('active')
      });
    }

    // ************* navbar js file ends *************


      // ************* preloader js file starts *************

      var preloader = document.getElementById('loading');

      function myFunction(){
        preloader.style.display = 'none';
      }

      // ************* preloader js file ends *************


      $('.count').counterUp({
        delay:10,
        time:1500
      });

      
      // ************* Contact form Ajax function *************
      jQuery('#frmContactus').on('submit', function(e){
        jQuery('#success_msg').html('');
        jQuery('#submit').html('Please Wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
          url : 'ajax/submit.php',
          type : 'post',
          data : jQuery('#frmContactus').serialize(),
          success : function(result){

            // this code has been changed on 15th jan 2020

            swal("Thank You", "Message Has Been Successfully Sent!", "success")
            jQuery('#submit').html('Send');
            jQuery('#submit').attr('disabled',false);
            jQuery('#frmContactus')[0].reset();
            
          }
        });
        e.preventDefault();
      });

      // ************* scrolltop btn js starts file *************

      //Get the Button:
      mybutton = document.getElementById('myBtn');

      //When the user scrolls down 50px from the top of the document show the button:
      window.onscroll = function() {scrollFunction()};

      function scrollFunction(){
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
          mybutton.style.display = "block";
        }
        else{
          mybutton.style.display = "none"
        }
      };

      //When the user clicks on the scroll button, scroll to the top of the document:
      function topFunction(){
        document.body.scrolltop = 0; //for Safari
        document.documentElement.scrollTop = 0; //for Chrome, Firefox, IE and Opera
      };

      // ************* scrolltop btn js ends file *************


      // ************* chatbot js starts file *************

       $(document).ready(function(){
          $(".chat_on").click(function(){
              $(".Layout").toggle();
              $(".chat_on").hide(300);
          });
          
             $(".chat_close_icon").click(function(){
              $(".Layout").hide();
                 $(".chat_on").show(300);
          });
          
      });

      // ************* chatbot js ends file *************


      // ************* newsletter js starts file *************

      $('#newsletter_form').on('submit', function(e){
        $('#save').html('Please Wait');
        $('#save').attr('disabled',true);
        $.ajax({
          url : 'ajax/newsletter.php',
          type : 'post',
          data : $('#newsletter_form').serialize(),
          success : function(result){

            swal("Thank You", "For Subscribing Our News Letter", "success")
            $('#save').html('Subscribe');
            $('#save').attr('disabled',false);
            $('#newsletter_form')[0].reset();
            
          }
        });
        e.preventDefault();
      });

      // ************* newsletter js ends file *************



      // ************* footer newsletter js starts file *************

      $('#newsletter_footer').on('submit', function(e){
        $('#footer_save').html('Please Wait');
        $('#footer_save').attr('disabled',true);
        $.ajax({
          url : 'ajax/newsletter.php',
          type : 'post',
          data : $('#newsletter_footer').serialize(),
          success : function(result){

            swal("Thank You", "For Subscribing Our News Letter", "success")
            $('#footer_save').html('Subscribe');
            $('#footer_save').attr('disabled',false);
            $('#newsletter_footer')[0].reset();
            
          }
        });
        e.preventDefault();
      });

      // ************* footer newsletter js starts file *************



      // ************* newsletter js ends file *************

      $('.js-scroll-trigger').click(function(){
        $('.navbar-collapse').collapse('hide');
      });

      // ************* newsletter js ends file *************
