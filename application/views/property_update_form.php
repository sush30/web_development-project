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
  
      </div>
    </nav>




<div class="container">
<div class="container">

<?php echo form_open('my_cntrlr/set_property_update','class="form-signin"');  ?>
  <fieldset>
    <h2> Enter property details</h2>
  <h5>Location</h5>
  <table class="table table-borderless">
  <tr>
    <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Property ID</label>
      <input type="text" name="property_id" class="form-control" value="<?php echo $property_id; ?>" id="exampleInputPassword1" >
    </div>
  <td>
    <div class="form-group">
      <label for="exampleInputPassword1">City</label>
      <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" id="exampleInputPassword1" placeholder="City">
    </div>

   </td>
   <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Road</label>
      <input type="text" name="road" class="form-control" value="<?php echo $road; ?>" id="exampleInputPassword1" placeholder="Road">
    </div>

   </td>
   </tr>
   <tr>
  <td>
    <div class="form-group">
      <label for="district">District</label>
      <input type="text" name="district" class="form-control"  value="<?php echo $district; ?>" placeholder="District">
    </div>

   </td>
   <td>
    <div class="form-group">
      <label for="state">State</label>
      <input type="text" name="state" class="form-control"  value="<?php echo $state; ?>" placeholder="State">
    </div>

   </td>
   </tr>
   <tr>
  <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Countery</label>
      <input type="text" name="countery" class="form-control" value="<?php echo $countery; ?>" id="exampleInputPassword1" placeholder="Countery">
    </div>

   </td>
   <td>
    <div class="form-group">
      <label for="exampleInputPassword1">Pin/ZIP</label>
      <input type="text" name="pin" class="form-control" id="exampleInputPassword1" value="<?php echo $pin; ?>" placeholder="Pin/ZIP">
    </div>

   </td>
   </tr>
  
  </table>
  
    <div class="form-group">
      <label for="exampleTextarea">Property Description</label>
      <textarea class="form-control" name="dtext" id="exampleTextarea" rows="5" > <?php echo $description; ?></textarea>
    </div>
 
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



</html>