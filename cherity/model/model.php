<?php 
class model 
{
    public $connection="";
        public function __construct()
        {
            
            // database connections
            try 
            {
                $this->connection=new mysqli("localhost","root","","cherity");
                if($this->connection)
                {
                    //  echo "<div class='alert alert-success mx-auto text-center col-md-6 mt-4'>connection successfully</div>";
                } 
            }
            catch(Exception $e)
            {
                echo "<div class='alert alert-danger mx-auto text-center col-md-6 mt-4'>Somthing went wrong connection not stablished</div>";
            
            }
        }
    
        // create a member function for insert alldata
        public function insert_data($table,$data)
        {
             $key=array_keys($data);
             //print_r($key);
             $key1=implode(",",$key);
             //print_r($key1);
             $value=array_values($data);
            //print_r($value);
             $value1=implode("','",$value);
             //print_r($value1)
            //  echo $insert="insert into $table($key1) values('$value1')"; exit();
             $insert="insert into $table($key1) values('$value1')";
             
            // insert into tbl_contact(text_firstname,text_lastname,text_email,text_mobile,text_message,text_datetime) values('hitesh','joshi','hitesh@gmail.com','9998003879','hi','20/09/2022 09:28:27 am')
            
             $exe=mysqli_query($this->connection,$insert);
             return $exe;
        }
        }
        
    
?>