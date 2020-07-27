<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
	<h1>Bootstrap Components</h1>
	<nav class="navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#">This is a dropdown Navigation Bar</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		    </ul>
		    <span class="navbar-text">
		      Navbar text with an inline element
		    </span>
	  </div>
	</nav>
	<br>
		<div class="dropdown">
	  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Our Team Members
	  </a>

	  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	    <a class="dropdown-item" href="#">Vivek - 34</a>
	    <a class="dropdown-item" href="#">Raj - 35</a>
	    <a class="dropdown-item" href="#">Rohan - 36</a>
	    <a class="dropdown-item" href="#">Heeth - 37</a>
	    <a class="dropdown-item" href="#">Pratik - 38</a>
	  </div>
	</div>
	<br>
	<div class="alert alert-success" role="alert">
	  A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
	</div>
	<div class="alert alert-danger" role="alert">
	  A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
	</div>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
	  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<div class="d-flex justify-content-center">
	  <div class="spinner-border" role="status">
	    <span class="sr-only">Loading...</span>
	  </div>
	</div>
	<div class="btn-group" role="group" aria-label="Basic example">
	  <button type="button" class="btn btn-primary">This</button>
	  <button type="button" class="btn btn-secondary">Is</button>
	  <button type="button" class="btn btn-warning">A</button>
	  <button type="button" class="btn btn-danger">Button</button>
	  <button type="button" class="btn btn-success">Group</button>
	</div>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="google.jpg" class="d-block w-50" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="amazon.jpg" class="d-block w-50" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="insta.jpg" class="d-block w-50" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<p>
	  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
	    Collapse Example
	  </a>
	</p>
	<div class="collapse" id="collapseExample">
	  <div class="card card-body">
	    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	  </div>
	</div>
	<div class="jumbotron">
	  <h1 class="display-4">Hello, world!</h1>
	  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item"><a class="page-link" href="#">Next</a></li>
	  </ul>
	</nav>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
	</div>
	<br>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
	</div>
	<br>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
	</div>
	<br>

</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>