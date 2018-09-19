<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_cntrlr extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('login_form');
	}

	public function login()
	{
		$username= $this->input->post('username');
		$password= $this->input->post('password');

		$this->load->model('my_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$value=$this->my_model->login($username,$password);
		$cnt=count($value);
		if($cnt)
		{
          
	     	$data = array("user_name" => $username,
	                      "password"=>$password);
	     	$this->session->set_userdata($data);
	     	$this->load->view('home');
		}
		else
		{
			$this->load->view('login_form');
	     	echo "<br><br>wrong input.. pls try again";
		}

	}


public function test()
{
	$this->load->model('my_model');
	$this->load->helper('url');
	if($this->my_model->check_consumer_id_session())
	{
		$msg=array("message"=>"consumer id set well");
		$this->load->view('message',$msg);
		

	}
	else
	{
		$msg=array("message"=>"consumer id not set well");
		$this->load->view('message',$msg);
		
	}
  if($this->my_model->check_property_id_session())
	{
		$msg=array("message"=>"property id set well");
		$this->load->view('message',$msg);
		
	}
	else
	{
		$msg=array("message"=>"property id  not set well");
		$this->load->view('message',$msg);
		
	}


}


public function admin($option)
{
	$this->load->model('my_model');
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->helper('form');
	$user=$this->session->userdata('user_name');
	$password=$this->session->userdata('password');
	if($user && $password)
	{
		switch ($option) {
			case 'view':
				# code...
			     $this->load->view('admin_panel');
				break;
			case "receive":
			      $user_name= $this->input->post('user_name');
			      $password=$this->input->post('password');
			      $new_password=$this->input->post('new_password');
			      $conf_password=$this->input->post('conf_password');
			      $data=array("user_name"=>$user_name,
			                    "password"=>$password,
			                   "new_password"=>$new_password,
			                   "conf_password"=>$conf_password);
			      $this->my_model->admin_setting($data);
                  
			    break;
			
			default:
				# code...
			    $this->load->view('home');
				break;
		}
	}
	$this->my_model->check_consumer_id_session();
}
public function home()
{   
    $this->load->library('session');
	$this->load->helper('form');
	$this->load->helper('url');
	if(($this->session->userdata('user_name')) && ($this->session->userdata('password')))
	   {
	   	$this->load->view('home');
        }
     else
     {
     	$this->load->view('login_form');
     }
}




 public function add_consumer()
	 {  
	 	$this->load->helper('form');
	 	$this->load->helper('url');
	 	$this->load->library('session');
	 	$flg1=$this->session->userdata('user_name');
	 	$flg2=$this->session->userdata('password');
        if($flg1 && $flg2)
        {
           $this->load->view('add_consumer');	
        }
	 	
	 }

 public function add_func()
	 {  

	 	$this->load->helper('form');
	 	$this->load->helper('url');
	 	$user_name= $this->input->post('user');
	 	$this->load->model('my_model');
	 	
	 	if(isset($user_name))
	 	{
	 		$this->my_model->add_consumer($user_name);
	 	}
	 	else
	 	{
	 		 $this->load->view('add_consumer');
	 		 echo ' <p style="color: red;"> Enter consumer name...</p>';
	 	}
       
	 }




 public function add_user()
	 {  
	 	$this->load->helper('form');
	 	$this->load->helper('url');
	 	$this->load->library('session');
	 	$flg1=$this->session->userdata('user_name');
	 	$flg2=$this->session->userdata('password');
        if($flg1 && $flg2)
        {
           $this->load->view('add_user');	
        }
	 	
	 }




 public function add_user_func()
	 {  

	 	$this->load->helper('form');
	 	$this->load->helper('url');
	 	$this->load->model('my_model');
	 	

	 	$user_name= $this->input->post('user_name');
	 	$name= $this->input->post('name');
	 	$password= $this->input->post('password');
	 	$conf_password= $this->input->post('conf_password');
	 	
	 	if($password != $conf_password)
	 	{
	 		$this->load->view('add_user');
	 		echo  ' <p style="color: red;"> Password doesnot match... try again</p>';
	 	}
	 	else
	 	{
           if(isset($user_name))
	 	   {
	 		  $this->my_model->add_user($name,$user_name,$password);
	 	   }
	 	  else
	 	   {
	 		 $this->load->view('add_user');
	 		 echo ' <p style="color: red;"> Enter user name...</p>';
	 	   }
	 	}
	 	
	 	
       
	 }

public function lod_consumer_id()
{
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->view('set_consumer_id_form');
}



public function lod_property_id()
{
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->view('set_property_id_form');
}



public function set_consumer_id()
{   
	$consumer_id= $this->input->post('consumer_id');
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->model('my_model');

	$flg=$this->my_model->check_consumer_id_db($consumer_id);
	if($flg)
	{
		$data = array("consumer_id" => $consumer_id);
	    $this->session->set_userdata($data);
	    $msg=array("message"=>"Consumer Id successfully updated...");
	    $this->load->view('success',$msg);
	}
	else
	{
		$this->load->view('set_consumer_id_form');
		echo "Wrong input try again.....";
	}
}


public function set_property_id()
{   
	$property_id= $this->input->post('property_id');
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('session');
    $this->load->model('my_model');

	$flg=$this->my_model->check_property_id_db($property_id);
	if($flg)
	{

	$data = array("property_id" => $property_id);
	$this->session->set_userdata($data);
	$msg=array("message"=>"Property Id successfully updated...");
	$this->load->view('success',$msg);
	}
    else
    {
    	$this->load->view('set_property_id_form');
    	echo "Wrong input try again...";
    }
}




public function set_property_form()
{
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
    $this->load->model('my_model');
    $flg=$this->my_model->check_consumer_id_session();
    if($flg)
    {
    	$data=$this->my_model->get_consumer_name($this->session->userdata('consumer_id'));
    	$data=$data['0'];
    	$this->load->view('insert_property_form',$data);
    }
    else
    {
    	$this->load->view('set_consumer_id_form');
    }

}

public function set_property_db()
{
	    $city=$this->input->post('city');
		$road=$this->input->post('road');
		$district=$this->input->post('district');
		$state=$this->input->post('state');
		$countery=$this->input->post('countery');
		$pin=$this->input->post('pin');
		$descrip=$this->input->post('dtext');
        $this->load->library('session');

        if(isset($countery))
        {
            
     	$user=$this->session->userdata('user_name');
     	$id=$this->session->userdata('consumer_id');
     	$data=array("city"=> $city,
	                 "road"=> $road,
	                 "district"=> $district,
	                 "state"=> $state,
	                 "countery"=> $countery,
	                  "pin"=> $pin,
	                 "user_name"=> $user,
	                  "consumer_id"=> $id);
     	$this->load->model('my_model');
     	$this->my_model->set_property($data, $descrip);
		
        }
        else
        {
        	$this->load->view('home');
        }
		
}




public function set_inspection_form()
{
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
    $this->load->model('my_model');
    $flg1=$this->my_model->check_consumer_id_session();
    $flg2=$this->my_model->check_property_id_session();
    if($flg1 && $flg2)
    {
    	$data=$this->my_model->get_consumer_name($this->session->userdata('consumer_id'));
    	$data=$data['0'];
    	$this->load->view('insert_inspection_form',$data);
		
    }
    else
    {   
    	$data=array("message"=>" Set consumer Id and property ID first..");
    	$this->load->view('message',$data);
    }

}



public function set_inspection_db()
{
        $this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->library('session');
        $this->load->model('my_model');

     
         $inspector=$this->input->post('inspector');
         $id=$this->session->userdata('property_id');
         $date=$this->input->post('date');
         $details=$this->input->post('details');
         if(isset($details))
         {
         	 $data = array('inspector' =>$inspector ,
                          'property_id'=>$id,
                           'date'=>$date,
                           'details'=>$details );
         
         $this->my_model->set_inspection($data);
	
         }
        else
        {
        	$this->load->view('home');
        }

}





public function set_transac_form()
{
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
    $this->load->model('my_model');
    $flg1=$this->my_model->check_consumer_id_session();
    $flg2=$this->my_model->check_property_id_session();
    if($flg1 && $flg2)
    {
    	$data=$this->my_model->get_consumer_name($this->session->userdata('consumer_id'));
    	$data=$data['0'];
    	$this->load->view('insert_transac_form',$data);
    }
    else
    {   
    	$data=array("message"=>" Set consumer Id and property ID first..");
    	$this->load->view('message',$data);
    }
}



public function set_transac_db()
{
    
		$service=$this->input->post('service');
	    $amount=$this->input->post('amount');
	    $amount_paid=$this->input->post('amount_paid');
	    $due=$this->input->post('due');
	    $date=$this->input->post('date');
        $this->load->library('session');
     	$user=$this->session->userdata('user_name');
     	$id=$this->session->userdata('property_id');
         if(isset($amount))
         {
         	  $data=array("service"=>$service,
                    "amount"=>$amount,
                    "amount_paid"=>$amount_paid,
                    "due"=>$due,
                     "date"=>$date,
                    "user_name"=>$user,
                    "id"=>$id);
        $this->load->model('my_model');
        $this->my_model->set_transac($data);

         }
      
}




public function update($option)
{   

	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
	 $this->load->model('my_model');
	switch ($option) {
		case "view_form":
			# code...
		     $this->load->view('update_cst_details');
			break;
		case "property_details":
              $flg1=$this->my_model->check_property_id_session();
              $flg2=$this->my_model->check_consumer_id_session();
              if($flg1 && $flg2)
              {
                $this->my_model->upd_property();
              }
              else
              {
              	$data=array("message"=>" Set consumer Id and property ID first..");
    	        $this->load->view('message',$data);
              }
		    break;

	    case "inspec_details":
               $flg1=$this->my_model->check_property_id_session();
              $flg2=$this->my_model->check_consumer_id_session();
              if($flg1 && $flg2)
              {
                $this->my_model->upd_inspec();
              }
              else
              {
              	$data=array("message"=>" Set consumer Id and property ID first..");
    	        $this->load->view('message',$data);
              }
		    break;

		    
		default:
			# code...
		   $this->load->view('home');
			break;
	}
}





public function set_property_update()
	{   
		$city=$this->input->post('city');
		$road=$this->input->post('road');
		$district=$this->input->post('district');
		$state=$this->input->post('state');
		$countery=$this->input->post('countery');
		$pin=$this->input->post('pin');
		$descrip=$this->input->post('dtext');
        $property_id=$this->input->post('property_id');
		$this->load->library('session');
     	$user=$this->session->userdata('user_name');
     	$id=$this->session->userdata('consumer_id');
     	$data=array(
                      "property_id"=>$property_id,
     		          "city"=> $city,
	                 "road"=> $road,
	                 "district"=> $district,
	                 "state"=> $state,
	                 "countery"=> $countery,
	                  "pin"=> $pin,
	                 "user_name"=> $user,
	                  "consumer_id"=> $id);
     	$this->load->model('my_model');
     	$this->my_model->set_property_update($data, $descrip);
     	
	}
	




public function set_inspec_update()
	{   
		$this->load->helper('url');
     	$this->load->helper('form');
		$inspector=$this->input->post('inspector');
		$date=$this->input->post('date');
		$details=$this->input->post('details');
		$this->load->library('session');
     	if(isset($details))
     	{
     		$id=$this->session->userdata('property_id');
     	$data=array(
                      "inspector"=>$inspector,
     		          "date"=> $date,
	                 "details"=> $details,
	                 "property_id"=> $id);
     	$this->load->model('my_model');
     	$this->my_model->set_inspec_update($data);
     	
     	}
       else
       {
       	$data=array("message"=> "nothing to change....write something in the details box...");

       	$this->load->view('message',$data);
       }

     	
	}
	





public function show_view($option)
{   
	
		$this->load->helper('url');
     	$this->load->helper('form');
     	$this->load->model('my_model');
     	$this->load->library('session');
     	$property_id=$this->session->userdata('property_id');
     	$consumer_id=$this->session->userdata('consumer_id');
     	
	switch ($option) {
		case "view_front":
			# code...
		       $this->load->view('view_menu');
			break;
		case "crnt_consumer":
		       if($this->my_model->check_consumer_id_session() && $this->my_model->check_consumer_id_db($consumer_id))
		       {
		       	$this->my_model->load_view('crnt_consumer');
		       }
		       else
		       {
		       	$data=array("message"=>"Check consumer ID or it is not present in the database...");
		       	$this->load->view('message',$data);
		       }

		    break;
	    case "crnt_transac":
	            if($this->my_model->check_property_id_session() )
		       {
		       	
		       	$this->my_model->load_view('crnt_transac');

		       }
                 else
		       {
		       	$data=array("message"=>"Check property ID ...");
		       	$this->load->view('message',$data);
		       }

		    break;
        case "crnt_inspec":
                 if($this->my_model->check_property_id_session() )
		       {
		       	$this->my_model->load_view('crnt_inspec');
		       }
                 else
		       {
		       	$data=array("message"=>"Check property ID ...");
		       	$this->load->view('message',$data);
		       }

		    break;
	    case "crnt_property":
	             if($this->my_model->check_property_id_session() && $this->my_model->check_property_id_db($property_id))
		       {
		       	$this->my_model->load_view('crnt_property');
		       }
                 else
		       {
		       	$data=array("message"=>"Check property ID or it is not present in the database...");
		       	$this->load->view('message',$data);
		       }

		    break;
        case "all_consumer":
                 $this->my_model->load_view('all_consumer');
		    break;
        case "all_transac":
                 $this->my_model->load_view('all_transac');

		    break;
	    case "all_inspec":
	            $this->my_model->load_view('all_inspec');

		    break;
 	    case "all_property":
 	            $this->my_model->load_view('all_property');

		    break;
		default:
			# code...
		    $this->load->view('home');

			break;
	}
}

















public function test1()
{   
	$this->load->helper('url');
	$this->load->helper('form');
	$data = array('id' => '1234',"consumer_name"=>"Rahul" );
	$this->load->view('insert_transac_form', $data);
}

























































}
