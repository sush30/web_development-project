<?php

class my_model extends CI_Model{


function login($username,$password)
{
	$this->load->database();
	$query="SELECT * FROM `user` WHERE `user_name` = '".$username."' AND `passwoard` LIKE '".$password."' ORDER BY `name` ASC";
	$value=$this->db->query($query);
	return $value->result_array();
}

function check_consumer_id_session()
{
	$this->load->library('session');
	$data=$this->session->userdata('consumer_id');
	if(isset($data))
	{
		return 1;

	}
	else
	{
		return 0;
	}
}







   function add_consumer($user_name)
   {
      $this->load->helper('url');
      $this->load->helper('form');
     $this->load->database();
       $stamp=getdate();
       $id=$stamp['0'];

     $query="INSERT INTO `consumer` (`id`, `consumer_name`) VALUES (".$id.", '".$user_name."');";
     if($this->db->query($query))
        {
          $data=array("message"=>" Consumer added successfully....");
          $this->load->view('success',$data);
        }
      else
      {
         $data=array("message"=>" Error...can't add this user.");
          $this->load->view('message',$data);
      }

   }



 function add_user($name,$user_name,$password)
   {
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->database();
      $query="SELECT * FROM `user` WHERE `user_name` = '".$user_name."' AND `passwoard` LIKE '".$password."' ORDER BY `name` ASC";
      $value=$this->db->query($query);
      $row=$value->num_rows();
      if(!$row)
      {
             $stamp=getdate();
            $id=$stamp['0'];
      
         $query="INSERT INTO `user` (`id`, `name`, `user_name`, `passwoard`, `desig`) VALUES ('".$id."', '".$name."', '".$user_name."', '".$password."', NULL);";
     if($this->db->query($query))
        {
          $data=array("message"=>" User added successfully....");
          $this->load->view('success',$data);
        }
      else
      {
         $data=array("message"=>" Error...can't add this user. choose different user_name and try again");
         $this->load->view('add_user');
          $this->load->view('message',$data);
      }

      }
      else
      {
             
              $data=array("message"=>"User already exist with this credential.");
              $this->load->view('message',$data);
      }
      
         
   }





function check_property_id_session()
{
	$this->load->library('session');
	$data=$this->session->userdata('property_id');
	if(isset($data))
	{
		return 1;

	}
	else
	{
		return 0;
	}
}



function check_consumer_id_db($id)
{
	$this->load->database();
	$query="SELECT * FROM `consumer` WHERE `id` =".$id;
	$value=$this->db->query($query);
	$cnt=count($value->result_array());
	
	if($cnt)
	{
		return 1;

	}
	else
	{
		return 0;
	}
}


function check_property_id_db($id)
{
	$this->load->database();
	$query="SELECT * FROM `property_details` WHERE `property_id` =".$id;
	$value=$this->db->query($query);
	$cnt=count($value->result_array());
	if($cnt)
	{
		return 1;

	}
	else
	{
		return 0;
	}
}


function get_consumer_name($consumer_id)
{
   $this->load->database();
	$query="SELECT * FROM `consumer` WHERE `id` =".$consumer_id;
	$value=$this->db->query($query);
	$cnt=count($value->result_array());
	if($cnt)
	{
		return $value->result_array();
	}
	else
	{
		return NULL;
	}
}


function admin_setting($data)
{
    $this->load->model('my_model');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->helper('form');
    $this->load->database();

    $query=" SELECT * FROM `user` WHERE `user_name` LIKE '".$data['user_name']."' AND `passwoard` LIKE '".$data['password']."' ORDER BY `name` ASC";
    $result=$this->db->query($query);

    $row=$result->num_rows();
    if($row)
    {  

      if($data['new_password'] == $data['conf_password'])
      {
        $query1="UPDATE `user` SET `passwoard` = '".$data['new_password']."' WHERE `user`.`user_name` = '".$data['user_name']."' AND `user`.`passwoard` = '".$data['password']."';";
        if($this->db->query($query1))
        {
          $data=array("message"=>" passwoard updated successfully....");
          $this->load->view('message',$data);
        }
        else
        {
          $data=array("message"=>" passwoard updation not successful....");
          $this->load->view('message',$data);
        }

      }
     else
     {  
        $this->load->view('admin_panel');
        $data=array("message"=>" password does not match....");
          $this->load->view('message',$data);
     }
/*
      $this->load->view()
      $value=$result->result_array();
      $desig=$value[0]["desig"];
      if($desig==="root")
      {

      }

      */
      }
      else
      {

          $data=array("message"=>" username or password is wrong....");
          $this->load->view('message',$data);
      }
    
}







function set_property($data, $descrip)
{
	 $this->load->helper('url');
     $this->load->helper('form');
 
 	 $this->load->database();
 
      $this->load->library('session');
 	     $stamp=getdate();
         $id=$stamp['0'];
 	     $query="INSERT INTO `property_details` (`property_id`,`consumer_id`, `property_no`,`user_name`, `city`, `road`, `district`, `state`, `countery`, `pin`, `time`) VALUES ('".$id."','". $data['consumer_id']."','','". $data['user_name']."', '". $data['city']."', '". $data['road']."', '". $data['district']." ', '". $data['state']."', '". $data['countery']."', '". $data['pin']."', CURRENT_TIMESTAMP);";
 
    $this->load->helper('file');
   
   if( $this->db->query($query))
      {
        $data=array("property_id"=>$id);
        $this->session->set_userdata($data);
 	    $string="all_files/abhi/property/file".$id.".txt";
 	    
        $file= fopen($string, 'w+');
        fwrite($file,$descrip);
        $data=array("message"=>"property details inserted successfully...");
        fclose($file);
        $this->load->view('success',$data);
        
     }
    else
    {
       $data=array("message"=>"property details not inserted.....error..");
     
       $this->load->view('no_success',$data);

    }  
   
}
 	


function set_inspection($data)
{
    $stamp=getdate();
    $id=$stamp['0'];
    $this->load->database();
    $this->load->helper('file');
    $query="INSERT INTO `inspection` (`inspection_id`, `property_id`, `inspector`, `inspection_date`) VALUES (".$id.", '".$data['property_id']."', '".$data['inspector']."', '".$data['date']."');";
    

      $id2=$data['property_id'];
      
      $string="all_files/abhi/property_inspec/file".$id2.".txt";
 
      $file= fopen($string, 'w+');
      fwrite($file,$data['details']);
      if($this->db->query($query))
    
      {
         $data=array("message"=>"Inspection details inserted successfully...");
         $this->load->view('success',$data);
      }
   else
     {
         $data=array("message"=>"Inspection details not inserted ....");
         $this->load->view('message',$data);
   
     }
}




function set_transac($data)
{
	$this->load->database();
    $this->load->helper('form');
    $this->load->helper('url');
    
    $stamp=getdate();
    $id=$stamp['0'];

    $query="INSERT INTO `transaction` (`transaction_id`, `property_id`, `user_id`, `service_name`, `amount_charged`, `amount_paid`, `amount_due`, `trans_date`) VALUES (".$id.", '".$data['id']."', '".$data['user_name']."', '".$data['service']."', '".$data['amount']."', '".$data['amount_paid']."', '".$data['due']."', '".$data['date']."');";
   if( $this->db->query($query))
   {
    $data=array("message"=>"Transaction details inserted successfully...");
    $this->load->view('success',$data);
   }
   else
   {
       $data=array("message"=>"Transaction details not inserted ....");
    $this->load->view('message',$data);
   
   }
}








  function upd_property()
   {
     $this->load->database();
     $this->load->helper('url');
     $this->load->library('session');
     $consumer_id=$this->session->userdata('consumer_id');
      $id=$this->session->userdata('property_id');


            $query="SELECT * FROM `property_details` WHERE `property_id` =".$id;
            $blb=$this->db->query($query);
            if($blb)
            {
            $data=$blb->result_array();
            $data=$data['0'];
              $this->load->helper('file');
              $string="all_files/abhi/property/file".$id.".txt";
              $file=fopen($string, 'r');
              $des=fread($file,filesize($string));
              
              $data["description"]=$des;
              $data["property_id"]=$id;
              
            $this->load->view('property_update_form',$data);

            }
            else
            {   
            	$data=array("message"=>" Error in date base..... could not load the previous data.");
            	$this->load->view('message',$data);
            }
        
     }








  function set_property_update($data, $descrip)
 {
  
     $this->load->helper('url');
     $this->load->helper('form');
 
     $this->load->database();
  

    $query1="SELECT * FROM `property_details` WHERE `property_id` =".$data['property_id'];
    $value=$this->db->query($query1);
    $rows=$value->num_rows();
    if($rows)
    {
      
    
    $query="UPDATE `property_details` SET `city` = '". $data['city']."',`road` = '".$data['road']."', `district` = '". $data['district']." ', `state` = '". $data['state']."', `countery` = '". $data['countery']."', `pin` = '". $data['pin']."' WHERE `property_details`.`property_id` ='".$data['property_id']."';";

    $this->load->helper('file');
    $string="all_files/abhi/property/file".$data['property_id'].".txt";

 
     
     $file= fopen($string, 'w+');
     fwrite($file,$descrip);
     fclose($file);
      if($this->db->query($query))
     {

       $data=array("message"=>"property details inserted successfully...");
     
       $this->load->view('success',$data);

    }
   else
    {
      $data=array("message"=>"property details not inserted.....error..");
     
      $this->load->view('message',$data);

    } 
  }
    
}






function upd_inspec()
{
	$this->load->database();
     $this->load->helper('url');
     $this->load->library('session');
     $consumer_id=$this->session->userdata('consumer_id');
      $id=$this->session->userdata('property_id');


            $query="SELECT * FROM `inspection` WHERE `property_id` =".$id;
            $blb=$this->db->query($query);
            if($blb)
            {
            $data=$blb->result_array();
            $data=$data['0'];
              $this->load->helper('file');
              $string="all_files/abhi/property_inspec/file".$id.".txt";
              $file=fopen($string, 'r');
              $des=fread($file,filesize($string));
            
              $data["description"]=$des;
              $data["property_id"]=$id;
              $data["consumer_id"]=$consumer_id;
            $this->load->view('inspec_update_form',$data);

            }
            else
            {   
            	$data=array("message"=>" Error in date base..... could not load the previous data.");
            	$this->load->view('message',$data);
            }
}




function set_inspec_update($data)

{
    $this->load->database();
    $this->load->helper('file');
    $query="UPDATE `inspection` SET `inspector` = '".$data['inspector']."', `inspection_date` = '".$data['date']."' WHERE `inspection`.`property_id` = ".$data['property_id'].";";


    
    $this->load->helper('file');
    $string="all_files/abhi/property_inspec/file".$data['property_id'].".txt";

     
     $descrip=$data["details"];
     $file= fopen($string, 'w+');
     fwrite($file,$descrip);
     fclose($file);
      if($this->db->query($query))
     {

       $data=array("message"=>"Inspection details inserted successfully...");
     
       $this->load->view('success',$data);

    }
   else
    {
      $data=array("message"=>"Inspection details not inserted.....error..");
     
      $this->load->view('message',$data);

    } 


}






function load_view($option)
{  

      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('session');
      $consumer_id=$this->session->userdata('consumer_id');
      $property_id=$this->session->userdata('property_id');
      
      $this->load->database();
  switch ($option) {
    case "crnt_consumer":
      # code...
         $query="SELECT * FROM `consumer` WHERE `id` =".$consumer_id;
         $value=$this->db->query($query);
         $row=$value->num_rows();
      if($row)
       {
          $data=$value->result_array();
      // $data=$data['0'];
          $pass['user_data']=$data;
          $this->load->view('crnt_consumer_view',$pass);
       }
      else
      {
          $data=array("message"=>"no data found");
         $this->load->view('message',$data);
      }
      break;
    case "crnt_transac":
             echo $property_id;
             $query="SELECT * FROM `transaction` WHERE `property_id` ='".$property_id."';";
            $value=$this->db->query($query);
            $row=$value->num_rows();
         if($row)
         {
           $data=$value->result_array();
         // $data=$data['0'];
          $pass['user_data']=$data;
          $this->load->view('crnt_transac_view',$pass);
         }
        else
        {
          $data=array("message"=>"no data found");
         $this->load->view('message',$data);
        }
        break;
    case "crnt_inspec":
          $query="SELECT * FROM `inspection` WHERE `property_id` =".$property_id;
          $value=$this->db->query($query);
          $row=$value->num_rows();
          if($row)
          {
            $data=$value->result_array();
            $data=$data[0];
             $this->load->helper('file');
            $string="all_files/abhi/property_inspec/file".$data['property_id'].".txt";
            $file=fopen($string, 'r');
            $des=fread($file,filesize($string));
              
              $data["description"]=$des;
              
            $this->load->view('crnt_inspec_view',$data);

          }
          else
          {
            $data=array("message"=>"This id is not present in the database...");
            $this->load->view('message',$data);
          }
      break;
      

     case "crnt_property":
          $query="SELECT * FROM `property_details` WHERE `property_id` =".$property_id;
          $value=$this->db->query($query);
          $row=$value->num_rows();
          if($row)
          {
            $data=$value->result_array();
            $data=$data[0];
             $this->load->helper('file');
            $string="all_files/abhi/property/file".$data['property_id'].".txt";
            $file=fopen($string, 'r');
            $des=fread($file,filesize($string));
              
              $data["description"]=$des;
              
            $this->load->view('crnt_property_view',$data);

          }
          else
          {
            $data=array("message"=>"This id is not present in the database...");
            $this->load->view('message',$data);
          }
      break;

     case "all_consumer":
           $query="SELECT * FROM `consumer` ";
           $result=$this->db->query($query);
           if($result)
           {

            $value=$result->result_array();
            $obj["user_data"]=$value;
            $this->load->view('all_consumer_view',$obj);
           }
             else
          {
            $data=array("message"=>"No data present in the database...");
            $this->load->view('message',$data);
          }

       break;
     case "all_property":
             $query="SELECT * FROM `property_details` ";
           $result=$this->db->query($query);
           if($result)
           {

            $value=$result->result_array();
            $obj["user_data"]=$value;
            $this->load->view('all_property_view',$obj);
           }
             else
          {
            $data=array("message"=>"No data present in the database...");
            $this->load->view('message',$data);
          }


       break;
     case "all_transac":
              $query="SELECT * FROM `transaction` ";
           $result=$this->db->query($query);
           if($result)
           {

            $value=$result->result_array();
            $obj["user_data"]=$value;
            $this->load->view('all_transac_view',$obj);
           }
             else
          {
            $data=array("message"=>"No data present in the database...");
            $this->load->view('message',$data);
          }


       break;
     case "all_inspec":
                     $query="SELECT * FROM `inspection` ";
           $result=$this->db->query($query);
           if($result)
           {

            $value=$result->result_array();
            $obj["user_data"]=$value;
            $this->load->view('all_inspection_view',$obj);
           }
             else
          {
            $data=array("message"=>"No data present in the database...");
            $this->load->view('message',$data);
          }
       break;

    default:
      # code...
      break;
  }
}



















}
?>