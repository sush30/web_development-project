<html>
<head>
      <title>
	  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
         <style>
	      .me {
  min-height: 75rem;
  padding-top: 4.5rem;
  padding-left: 4.5rem;
  padding-right: 4.5rem;
}
</style>
	  
	  
	  
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('my_cntrlr/home'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="me">
     <table class="table table-hover">
  <thead>
    <tr>
       <th scope="col">No.</th>
      <th scope="col">Transaction ID</th>
       <th scope="col">Property ID</th>
        <th scope="col">Service Name</th>
         <th scope="col">Amount Charged</th>
          <th scope="col">Amount Paid</th>
           <th scope="col">Amount Due</th>
      <th scope="col">Transaction Date</th>
     
    </tr>
    </thead>
    <tbody>
    <?php 

      $no=1;
    foreach($user_data as $key=> $value)
    {

   
  
     echo "<tr>
     
      <td>".$no."</td>
      <td>".$value['transaction_id']."</td>
      <td>".$value['property_id']."</td>
     
      <td>".$value['service_name']."</td>
      <td>".$value['amount_charged']."</td>
      <td>".$value['amount_paid']."</td>
      <td>".$value['amount_due']."</td>
      <td>".$value['trans_date']."</td>
        
    </tr>";
      $no=$no+1;
     }
     ?>
	
   </tbody>
</table>	
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



</html>