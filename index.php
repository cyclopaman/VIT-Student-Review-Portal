<!DOCTYPE html>
<head>

	<title>VIT REview SYstem</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 	<link rel="stylesheet" href="css/vegas.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script type="text/javascript" src="js/jquery.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body
			{
				background: #ffffff;
   				font-family: 'Rajdhani', sans-serif;
    			font-weight: 400;
			}

		html,body 
			{
 				width: 100%;
  				overflow-x: hidden;
			}
		html 	
			{
  				font-size: 100%;
			}

h1,h2,h3 {
  font-weight: 500;
  letter-spacing: 0.3rem;
  text-transform: uppercase;
}

h1 {
  font-size: 2.8rem;
  font-weight: 700;
}

h2 {
  color: #ffffff;
  padding-bottom: 10px;
}

h3 {
  font-size: 1rem;
  line-height: 2rem;
}

p {
  color: #828282;
  letter-spacing: 0.8px;
  line-height: 28px;
}

strong {
  color: #f1c11a;
  font-weight: 700;
}


#slideshow {
  top: 0;
  left: 0;
  z-index: -10;
  width: 100vw;
  backface-visibility: hidden;
}


/* home section */
#home {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
        align-items: center;
  text-align: center;
  height: 100vh;
  color: #ffffff;
}

#home .home-thumb {
  text-align: center;
}

#home .btn {
    background: transparent;
    border: 3px solid #ffffff;
    border-radius: 0px;
    color: #ffffff;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 14px 36px;
    margin-top: 42px;
    margin-right: 16px;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

#home .btn:hover {
  background: #f1c11a;
  color: #ffffff;
  border-color: transparent;
}

#home .btn-success {
    background: #ffffff;
    color: #242424;
    border-color: transparent;
}

</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("a").hover(function(){
      $("a").addClass("animated bounce");
    });
  });
</script>
</head>
<body>

<div id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">Welcome people of VIT</h1>
          			<h3 class="wow fadeInUp" data-wow-delay="0.6s">Here We present you the    <strong>student Portal</strong>and <strong>Teachers Portal</strong></h3>
          			 <a href="student.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" >Student Portal</a>
        			 <a href="teachers.php" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" >Teachers Portal</a>
				</div>
			</div>

		</div>
	</div>		
</div>



<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>