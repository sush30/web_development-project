<html>
<head>
      <title>
	  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
     <html>
<head>
      <title>
	  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style >
      #bt{
         margin-right: 30px;
         margin-left: 0px;
      }
      .btn btn-info{
        margin-top: 50px;
      }
    </style>
</head>
<body>


          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo site_url('my_cntrlr/home'); ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor11">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('my_cntrlr/home'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('my_cntrlr/test'); ?>">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
 <!--   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  -->
  </div>
</nav>







<div class="container">
   
    <fieldset>
	      <div class="jumbotron">
            <h1 class="display-3">Welcome !</h1>
            <p class="lead">This is the welcome page for the updation of consumer details and related property details for the company PALEO PROPERTY.</p>
            <hr class="my-4">
            <p>It is an admin panel for logging the new users for the backend purpose.</p>
            <p class="lead">
            <a class="btn btn-primary btn-lg" href="<?php echo site_url('my_cntrlr/admin/view'); ?>" role="button">Admin Panel</a>
           </p>


            
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active show" data-toggle="tab" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-toggle="tab" href="#disabled">Update</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Choose Here</a>
    <div class="dropdown-menu">
      
      <a class="dropdown-item" href="<?php echo site_url('my_cntrlr/show_view/view_front'); ?>">View</a>
      <a class="dropdown-item" href="<?php echo site_url('my_cntrlr/update/view_form'); ?>">Update</a>
      <a class="dropdown-item" href="<?php echo site_url('my_cntrlr/select_consumer_dlt'); ?>">Delete</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo site_url('my_cntrlr/add_consumer'); ?>">Add consumer</a>
    </div>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active show" id="home">
    <p>IT IS THE HOME PAGE OF ADMIN PANEL</p>
  </div>
  <div class="tab-pane fade" id="profile">
    <p>ONLY REGISTERED USERS ON 'USERS' DATABASE CAN ACCESS THIS ADMIN PANEL.</p>
  </div>
  <div class="tab-pane fade" id="disabled">
    <p>THE REGISTERED USERS ON 'USERS' DATABASE CAN BE UPDATE ,DELETE, CHANGE OR ADD ANY CONSUMER DETAILS WITHIN THE RESPECTIVE PROPERTY TRANSACTION AND INSPECTION DATABASE</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>


         </div>
	 <table class="table table-borderless">	
       
      <tr>
           
			<td>
	   
             
            <a class="btn btn-primary  btn-block" href="<?php echo site_url('my_cntrlr/set_property_form'); ?>" role="button">Enter Property Details</a>
             <a class="btn btn-primary  btn-block" href="<?php echo site_url('my_cntrlr/set_inspection_form'); ?>" role="button">Enter Inspection Details</a>
              <a class="btn btn-primary  btn-block" href="<?php echo site_url('my_cntrlr/set_transac_form'); ?>" role="button">Enter Transaction Details</a>
    

 
		
	<table class="table table-borderless">
	   <tr>
	      <td>
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary btn-lg">Generate Report</button>
                 <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                 <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
               <a class="dropdown-item" href="<?php echo site_url('Pdf_controller/gen_report_inspection'); ?>">Inspection Reort</a>
               <a class="dropdown-item" href="<?php echo site_url('Pdf_controller/gen_report_transaction'); ?>">Transaction Recipt</a>
			    <a class="dropdown-item" href="<?php echo site_url('Pdf_controller/gen_report'); ?>">Monthly Business Report</a>
               </div>
           </div>
		   </td>
		   
		   
		   </tr>
		   </table>
		   
		   </td>

        <td>
                   <main role="main" class="container">
                      <div class="jumbotron">
                      <h3>Set Default </h3>
                      <p class="lead">After you logged in, please select these two default value before any other operation.</p>
    
                     <br>
                    <br>
   
                       <a class="btn btn-info" href="<?php echo site_url('my_cntrlr/lod_consumer_id'); ?>" >Default Consumer ID</a>
              <a class="btn btn-info" href="<?php echo site_url('my_cntrlr/lod_property_id'); ?>" >Default Property ID</a>
                     </div>

                 </main>

            </td>
		   </tr>
		   </table>
</div>
			
			
    </fieldset>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>






</html>