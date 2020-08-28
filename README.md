<!DOCTYPE html>
<html>
<head>
	<title>E learning platform</title>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ACZERON</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">preparation</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">IIT-JEE</a>
          <a class="dropdown-item" href="#">NEET</a>
          <a class="dropdown-item" href="#">NDA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">UPSC</a>
        </div>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT US</a>
       </li>





      <li class="nav-item">
        <a class="login-details btn btn-success" href="login.php">login</a>
      </li>

    </ul>

    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic11.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>prepare at home</h3>
        <p>study anytime,anywhere with us.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pic10.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Enroll for DLP program</h3>
        <p>available for all subjects</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pic3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to our E-learning platform</h3>
        <p>learn from home !</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section>
	<div >
		<h3 class="text-center">About us</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/pic7.jpg" class="img-fluid" about-img>
			</div>
			
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">E-learning program</h2>
				<P class="py-4">Our comprehensive e-learning programs for K3, K10, K12, NEET, JEE, UPSC & Bank Exams from India's best teachers. Join today for better tomorrow.</P>
				<a href="about.php" class="btn btn-success">Read more</a>

			</div>
			
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">our services</h2>	
	</div>
	 		<div class="container-fluid">
	 			<div class="row">
	 				<div class="col-lg-4 col-md-4 col-12">


	 					<div class="card">
  <img class="card-img-top" src="images/pic8.jpg" alt="Card image">
                             <div class="card-body">
    							<h4 class="card-title">IIT-JEE MAINS </h4>
    							<p class="card-text">learn physics,chemistry and mathematics.</p>
    							<a href="#" class="btn btn-primary">learn more</a>
                             </div>
                         </div>





  	 				
  	 				</div>

  
	 				<div class="card">
  <img class="card-img-top" src="images/pic9.jpg" alt="Card image">
                             <div class="card-body">
    							<h4 class="card-title">UPSC civil srvices</h4>
    							<p class="card-text">covers all content</p>
    							<a href="#" class="btn btn-primary">learn more</a>
                             </div>
                    </div> 	

	 			</div>

	 		</div>
</section>

<h4 class="bg-white text-center">FEEDBACK FORM</h4>
<section>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>


			<div class="form-group">
				<label>mobile number</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>


			<div class="form-group">
				<label>email</label>
				<input type="email" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>comment</label>

				<textarea class="form-control" name="comment"></textarea>
			</div>
			 


<button type="submit" class="btn btn-success">Submit</button>
</form>


		</form>
	</div>

</section>

<footer>
	
	<p class="p-3 bg-dark text-white text-center" >@aczeronE-learningplatform
	</p>
<!--
<p class="p-3 bg-dark text-white text-center">All rights reserved</p>-->
</footer>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</head>
<body>

</body>
</html>
