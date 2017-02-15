<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Pixel Star Homepage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/demo.css') }}" /> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.79639.js') }}"></script>
	<noscript>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styleNoJS.css') }}" />
	</noscript>

  </head>
  <body>
    @yield('header')

    @yield('content')

    @yield('footer')


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.ba-cond.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.slitslider.js') }}"></script>
    <script type="text/javascript"> 
      $(function() {
      
        var Page = (function() {

          var $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();
      });
    

      $('.nav-item').click(function(){
        $(".nav-item").removeClass("active");
        $(this).addClass("active");
      });

      $('a[href^="#"]').on('click', function(event) {
          var target = $(this.getAttribute('href'));
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 1000);
          }
      });

      $('.logo').on('click', function(event) {
          $('html, body').animate({ scrollTop: 0 }, 'slow', function () {
          });
      });

    </script>
  </body>
</html>