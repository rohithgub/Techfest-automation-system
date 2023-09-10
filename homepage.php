<html>
    <head>
         <title>homepage</title>
         <style>
            #back{
            background-image:url("homepagebg.png");
            background-repeat: no-repeat;
            background-size:cover;
            }
            .dropdown {
	  position: relative;
	  display: inline-block;
      text-decoration: none;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  z-index: 1;
	}

	.dropdown:hover .dropdown-content {
	  display: block;
	}
    a {
  text-decoration: none;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 16px;
  font-weight: 400;
 
  font-size: 20px;
  color:#000000;
        margin: 20px;
        MARGIN-TOP:10PX;
}
#id1{
    margin-top:20px;
}
         </style>
    </head>
    

<body id=back>
    <DIv id="id1">
    <a href="homepage.php">HOME</a>
    <div class="dropdown">
	  <a href="#" style:text-decoration:none>EVENTS</a>
	  <div class="dropdown-content">
	    <a href="techevents3.PHP"target=_blank>&nbsp&nbsp&nbspTech</a>
	    <a href="techevents2.php"target=_blank>&nbsp&nbsp&nbspNonTech</a>
	  </div>
	</div>
    <a href="index.php">REGISTER</a>
    <a href="contactus.php">CONTACT US</a>
    <a href="login.php">ADMIN</a>
    </DIv>
</body>
</html>
