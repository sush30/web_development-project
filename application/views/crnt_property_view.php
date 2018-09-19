<html>
<head>
      <title>
	  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <style>
	            body {
                    min-height: 75rem;
                    padding-top: 4.5rem;
                      }
	         .my
			 {
			  margin-top: 15%;
			  margin-left: 40%;
			  }
			
	        .card-body, .card-header
			{
			 
			  background-color: #00cccc;
			}
		
	  </style>
	  
</head>
<body>

       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('my_cntrlr/home'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1 style="">Property Details</h1>
		<hr>
        <p class="lead">Property details of current property Id</p>
	 	<hr>
		  <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Property ID:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $property_id; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Consumer ID:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $consumer_id; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >City:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $city; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Road:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $road; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >District:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $district; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >State:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $state; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Countery:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $countery; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Pin:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $pin; ?></div>
		  </p>
        <hr>
		 <p >
		     <div class="tam" style="font-size:24;color:red;display: inline; padding-left: 10px;" >Date of entery:</div><div class="content" style="font-size=18; padding-left: 10px;display: inline;"><?php echo $time; ?></div>
		  </p>
        <hr>
	 <br>
	 <h4 style="">Property Description :</h4>
	 <hr>
	 <p>
	      <main role="main" class="container" style=" color: #006680;">
             <div class="jumbotron">
	     <p ><?php echo $description; ?></p>
		    </div>
    </main>
	 </p>
      <a class="btn btn-info" href="success.html" >Home</a>
      </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



</html>