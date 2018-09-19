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
    <!--
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    -->
      </div>
    </nav>



 <main role="main" class="container">
      <div class="jumbotron">
        <h1>Consumer:</h1>
        <p class="lead">Consumer Name: <?php echo $consumer_name; ?><br>Consumer ID:  <?php echo $id; ?> </p>
    
       </div>
    </main>



<div class=container>     
<?php echo form_open('my_cntrlr/set_inspection_db','class="form-signin"');  ?>
  <fieldset>
    <h2> Enter Inspection Details</h2>
  <hr>
  <table class="table table-borderless">
  <tr>
  <td>
    <div class="form-group">
	<?php echo validation_errors();?>
	<?php echo form_open('my_cntrlr')?>
      <label for="exampleInputPassword1">Inspected By</label>
      <input name="inspector" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
    </div>

   </td>
  
   <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Inspection Date</label>
      <input type="date" name="date" class="form-control" id="exampleInputPassword1" placeholder="Road" required>
    </div>

   </td>
   </tr>
   <tr>
  <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Enter Inspection details</label>
      <textarea class="form-control" name="details" id="exampleInputPassword1" placeholder="Enter details " rows="5"  required></textarea>
    </div>

   </td>
   </tr>
   
   </table>
   <button type="submit" class="btn btn-primary">Submit</button>
   </fieldset>
 </form>
   </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



</html>