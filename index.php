<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="./indexStyle/css/all.min.css" />
    <link rel="stylesheet" href="./indexStyle/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./indexStyle/css/templatemo-style.css" />
    <title>Machine Test</title>
  </head>
  <body>
    <!-- Welcome Section -->
    <section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="./indexStyle/img/mini-profile-bg-01.jpg">
      <div class="container-fluid tm-brand-container-outer">
        <div class="row">
          <div class="col-12">
            <!-- Logo Area -->
            <!-- Black transparent bg -->
            <div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
              <div class="tm-brand-container text-center">
                <h1 class="tm-brand-name">Machine Test</h1>
                <p class="tm-brand-description mb-0">Toobler Software Company</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tm-bg-white-transparent tm-welcome-container">
        <div class="container-fluid">
          <div class="row h-100">
            <!-- Welcome Text -->
            <!-- White transparent bg -->
            <div class="col-md-7 tm-welcome-left-col">
              <div class="tm-welcome-left">
                <h2 class="tm-welcome-title">Welcome to Login Section</h2>
                
              </div>
            </div>
            <!-- Brown bg -->
            <div class="col-md-5">
              <div class="tm-welcome-right">
                
                <div class="tm-portfolio-item" style="margin-left:50px;">
                            <div class="tm-portfolio-name text-white tm-bg-black">
                                <a href="user/userLogin.php">Login</a>
                            </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Welcome section -->
<!-- row -->
        <div class="row">
          <footer class="col-12">
            <p class="text-center tm-copyright-text">
            Copyright 2022 Machine Test
            </p>
          </footer>
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- section -->
    <script src="./indexStyle/js/jquery.min.js"></script>
    <script src="./indexStyle/js/parallax.min.js"></script>
    <script>
      function detectMsBrowser() {
        using_ms_browser =
          navigator.appName == "Microsoft Internet Explorer" ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Edge") > -1) ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Trident") > -1);

        if (using_ms_browser == true) {
          alert(
            "Please use Chrome or Firefox for the best browsing experience!"
          );
        }
      }
      function setBrandMarginTop() {
        var bottomContainerHeight = $(".tm-welcome-container").height();

        $(".tm-brand-container-outer").css({
          "margin-top": -bottomContainerHeight + "px"
        });
      }

      $(function() {
        setBrandMarginTop();
        detectMsBrowser();

        // Handle window resize event
        $(window).resize(function() {
          setBrandMarginTop();
        });
      });
    </script>
  </body>
</html>