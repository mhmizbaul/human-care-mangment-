<style type="text/css">

.dropdown-menu > li.kopie > a {
    padding-left:5px;
}

.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
 top:0;left:100%;
 margin-top:-6px;margin-left:-1px;
 -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
}

.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 3px;
  width: 0;
}

.dropdown-submenu:hover>a:after {
    border-left-color:#555;
}

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: none;
}  

@media (max-width: 767px) {

  .navbar-nav  {
   display: inline;
}
.navbar-default .navbar-brand {
    display: inline;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
}
.navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
}
.navbar-default .navbar-nav .open .dropdown-menu > li > a {
   color: #333;
}
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
   background-color: #ccc;
}

.navbar-nav .open .dropdown-menu {
   border-bottom: 1px solid white; 
   border-radius: 0;
}
.dropdown-menu {
  padding-left: 10px;
}
.dropdown-menu .dropdown-menu {
  padding-left: 20px;
}
.dropdown-menu .dropdown-menu .dropdown-menu {
  padding-left: 30px;
}
li.dropdown.open {
    border: 0px solid red;
}

}

@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
}
#navbar {
    text-align: center;
}
} 
.navbar1 li a:hover {
    color: black !important;
} 

</style>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"> <a href="index.php">Home</a> </li>
                <!--  <li> <a href="donor-list">Donor</a> </li> -->
                <li class="dropdown navbar1">
                  <a href="#" class="dropdown-toggle" data-toggle="">Donor <b class="caret"></b></a> 

                  <ul class="dropdown-menu">
                      <li  style="color: black"><a style="color: black" href="blood_donor_list.php">Blood</a></li>
                      <li style="color: black"><a style="color: black" href="eye_donor_list.php">Eye</a></li>
                      <li style="color: black" class=""><a style="color: black" href="kidney_donor_list.php">Kidney</a></li> 
                  </ul>
              </li>
              <li> <a href="life-time-donor">Life time Donor</a> </li>
              <li> <a href="evergreen_fund_list.php">Evergreen Fund</a> </li>
              <li> <a href="health_tips.php">Health Tips</a> </li>
              <li> <a href="news.php">News</a> </li>
              <li> <a href="events.php">Events</a> </li>
              <li> <a href="gallery.php">Gallery</a> </li>
              <li> <a href="about_us.php">About Us</a> </li>
              <li> <a href="contact_us.php">Contact Us</a> </li>
          </ul>
      </div>
  </div>
</nav>
