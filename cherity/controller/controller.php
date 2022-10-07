<?php 
require_once("model/model.php");
class controller extends model 
{
 
  public function __construct()
  {
   parent::__construct();
   // store data in contact table
   if(isset($_POST["reg"]))
       {
        date_default_timezone_set("Asia/Calcutta");
        $fnm=$_POST["fname"];
        $lnm=$_POST["lname"];
        $em=$_POST["email"];
        $pass=md5($_POST["pass"]);
        $cpass=md5($_POST["cpass"]);
        $mob=$_POST["mobile"];
        $add=$_POST["address"];
        $rdatetime=date("d/m/Y H:i:s a");
        $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"phone"=>$mob,"address"=>$add,"rdatetime"=>$rdatetime);
        $chk=$this->insert_data('tbl_customer',$data);
        if($chk){
          echo "<script>
          confirm('you are registretion in successfully')
          </script>";
        }else
        {
          echo "not record found";
        }
    }
   
{
if(isset($_SERVER["PATH_INFO"]))
    {
      switch($_SERVER["PATH_INFO"])
      {
        case '/':
          require_once("index.php");
         
           require_once("header.php");
           require_once("navbar.php");
           require_once("slider.php");
            require_once("content.php");
          //  require_once("registretion.php");
          //   require_once("contactus.php");
            require_once("footer.php");
          break;

          case '/login':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
             require_once("login.php");
             require_once("footer.php");
            break;
  

          case '/impact':
            require_once("index.php");
             require_once("header.php");
             require_once("navbar.php");
              require_once("impact.php");
              require_once("footer.php");
            break;

            case '/about':
              require_once("index.php");
               require_once("header.php");
               require_once("navbar.php");
                require_once("about.php");
                require_once("footer.php");
              break;
    

          case '/contactus':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
             require_once("contactus.php");
             require_once("footer.php");
            break;

            case '/registretion':
              require_once("index.php");
              require_once("header.php");
              require_once("navbar.php");
               require_once("registretion.php");
               require_once("footer.php");
              break;
            case '/event':
              require_once("index.php");
              require_once("header.php");
              require_once("navbar.php");
               require_once("event.php");
               require_once("footer.php");
              break;
          default:
          require_once("index.php");
          require_once("header.php");
          require_once("navbar.php");
          require_once("404.php");
          require_once("footer.php");
          break;         
        }
      }
     }
  }
}
  $obj=new controller();
?>