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
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="success.html" role="button">View Current Consumer Details</a>
     <br>
	 <br>
<a class="btn btn-secondary" href="<?php echo site_url('my_cntrlr/show_view/crnt_consumer'); ?>" >Consumer Details</a>
<a class="btn btn-info" href="<?php echo site_url('my_cntrlr/show_view/crnt_transac'); ?>" >Transaction Details</a>
<a class="btn btn-warning" href="<?php echo site_url('my_cntrlr/show_view/crnt_inspec'); ?>" >Inspection Details</a>
<a class="btn btn-danger" href="<?php echo site_url('my_cntrlr/show_view/crnt_property'); ?>" >Property Details</a>

<!--
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button>
	  </div>
-->	  
    </main>
	
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="success.html" role="button">View All Consumer;</a>
		<a class="btn btn-secondary" href="<?php echo site_url('my_cntrlr/show_view/all_consumer'); ?>" >Consumer List</a>
<a class="btn btn-info" href="<?php echo site_url('my_cntrlr/show_view/all_transac'); ?>" >Transaction </a>
<a class="btn btn-warning" href="<?php echo site_url('my_cntrlr/show_view/all_inspec'); ?>" >Inspection </a>
<a class="btn btn-danger" href="<?php echo site_url('my_cntrlr/show_view/all_property'); ?>" >Property </a>

      </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



</html>