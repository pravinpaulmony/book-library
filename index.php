<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fa4/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap/popper.min.js"></script>
  <script src="assets/bootstrap/bootstrap.min.js"></script>
  <script src="index.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark text-center">
  <a class="navbar-brand" href="#"><h5 class="nav-link text-uppercase font-weight-bold text-warning"><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;BOOK LIBRARY</h5></a>
</nav>
  
<div class="container-fluid p-3">
  <div class="row">
	<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="card bg-light"><div class="card-body">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="form-group mt-1">
				<label class="font-weight-bold threed">Customer Name</label>
				<input type="text" class="form-control" id="customer_name" name="customer_name" autocomplete="nope">
			</div>
		</div>
		<div class="col-lg-12 col-md-4 col-sm-6">
			<div class="form-group">
				<label class="font-weight-bold threed">Product Name</label>
				<input type="text" class="form-control" id="product_name" name="product_name" autocomplete="nope">
			</div>
		</div>
		<div class="col-lg-12 col-md-4 col-sm-6">
			<div class="form-group ">
				<label class="font-weight-bold threed">Product Price</label>
				<input type="number" class="form-control" id="product_price" name="product_price" value="0">
				<div class="slidecontainer">
				  <input type="range" min="0" max="500" value="0" class="slider" id="product_range">
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-4 col-sm-6">
			<div class="form-group">
				<button class="btn button_8 btn-md btn-block" id="search_data" onclick="getdata()"><i class="fa fa-search"></i>&nbsp;&nbsp;Search for Books</button>
			</div>
		</div>
	</div></div>
	</div>
	
	<div class="col-sm-12 col-md-12 col-lg-9">
	<div class="card bg-light" id="table_head"><div class="card-body">
		<div class="table-responsive">
		  <div class='text-center loader'><span class='spinner-border text-primary'></span></div>
	  </div>
	</div></div>
	</div>
  </div>
</div>
</body>
</html>