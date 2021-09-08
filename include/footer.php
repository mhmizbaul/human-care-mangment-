

<footer class="footer-main" id="contact_area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="#">
                                    <h4>Human Care Management System</h4>
                                </a>
                            </figure>
                        </div>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fa fa-map-marker"></i> 
                                <p>Dhanmondi,Dhaka</p>
                            </li>
                            <li class="item">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                <a href="#">
                                    <p>admin@donation.com</p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fa fa-phone" aria-hidden="true"></i> 
                                <p>01751348267</p>
                            </li>
                            <li class="item"> <a href="https://kalagachiarfhs.com">.</a> </li>
                        </ul>
                        <ul class="list-inline social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h6>Important Links</h6>
                    <ul class="menu-link">
                        <li> <a href="http://www.bdrcs.org/"> <i class="fa fa-angle-right" aria-hidden="true"></i>Red Crescent Society</a> </li>
                        <li> <a href="https://www.sandhani.org/"> <i class="fa fa-angle-right" aria-hidden="true"></i>Sandhani </a> </li>
                        <li> <a href="http://www.dmc.gov.bd/"> <i class="fa fa-angle-right" aria-hidden="true"></i>Dhaka Medical College</a> </li>
                        <li> <a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Blood Donation Management</a> </li>
                        <li> <a href="https://www.ssmcbd.net/"> <i class="fa fa-angle-right" aria-hidden="true"></i>Sir Salimullah Medical College</a> </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h6>Software Panel</h6>
                    <ul class="menu-link">
                        <li> <a href="admin"> <i class="fa fa-angle-right" aria-hidden="true"></i>Admin Login</a> </li>
                        <li> <a href="donor"> <i class="fa fa-angle-right" aria-hidden="true"></i>Donor Login</a> </li>
                        <li> <a href="fund"> <i class="fa fa-angle-right" aria-hidden="true"></i>Fund Login</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <div class="container">
                    <div class="row">
                        <p class="text-center">&copy; Copyright <?php echo date("Y"); ?>. All Rights Reserved by <a id="test" href="#">Human Care Management System</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="scroll-to-top scroll-to-target" data-target=".header-top"> <span class="icon fa fa-angle-up"></span></div>
<script src="plugins/jquery.js"></script><script src="plugins/bootstrap.min.js"></script><script src="plugins/bootstrap-select.min.js"></script><script src="plugins/slick/slick.min.js"></script><script src="plugins/fancybox/jquery.fancybox.min.js"></script><script src="plugins/validate.js"></script><script src="plugins/wow.js"></script><script src="plugins/jquery-ui.js"></script><script src="plugins/timePicker.js"></script><script src="js/script.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-XXXXX-Y', 'auto');ga('send', 'pageview');</script> 
<script type="text/javascript">
    /*Scroll to top when arrow up clicked BEGIN*/
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('#back2Top').fadeIn();
        } else {
            $('#back2Top').fadeOut();
        }
    });
    $(document).ready(function() {
        $("#back2Top").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
        
    });
</script>

<script type="text/javascript">
   var quadimages = document.querySelectorAll("#quad figure");
   for(i=0; i<quadimages.length; i++) {
      quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") }); 
  }
</script>
<script type="text/javascript">

    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 2000, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});
});
</script>
</body>
</html>