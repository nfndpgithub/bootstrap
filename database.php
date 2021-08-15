<?php

class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname;
    private $mysqli;
    private $result;
    private $records;
    private $affected;

    function __construct($par_dbname){
        $this->dbname = $par_dbname;
        $this->Connect();
    }
    function Connect(){
      $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
      if($this->mysqli->connect_errno){
          printf("Konekcija neuspešna: %s\n", $this->mysqli->connect_error);
          exit();
      }
      $this->mysqli->set_charset("utf8");
  }
  function register(){
      /* $_SESSION['firstName']=$_POST['firstName'];
      $_SESSION['lastName']=$_POST['lastName']; */

      echo "usao";
      $firstName=$this->mysqli->escape_string($_POST['firstName']);
      $lastName=$this->mysqli->escape_string($_POST['lastName']);
      $email=$this->mysqli->escape_string($_POST['email']);
      $phone=$this->mysqli->escape_string($_POST['phone']);
      $ulica=$this->mysqli->escape_string($_POST['ulica']);
      $grad=$this->mysqli->escape_string($_POST['grad']);
      $drzava=$this->mysqli->escape_string($_POST['drzava']);
      $user_id= $this->random_num(20);

        $result=$this->mysqli->query("select * from users where email='$email'");
        if($result->num_rows>0){
            $_SESSION['message']='Vec postoji prijava sa tim email-om';
            echo"postji vec"; //preusmeri na error
        }else{
            $sql="insert into users (user_id,ime,prezime,tel,email,ulica,grad,drzava) values ('$user_id','$firstName','$lastName','$phone','$email','$ulica','$grad','$drzava')";
            if($this->mysqli->query($sql)){
                $_SESSION['logged_in']=true;
                $_SESSION['message']='registrovao si se uspesno';

                echo "bravo regitrovao si se";
            }
        }
  }
  function ExecuteQuery($query){
    $this->result = $this->mysqli->query($query);
    if($this->result){
        if(isset($this->result->num_rows)){
            $this->records = $this->result->num_rows;
        }
        if(isset($this->result->affected_rows)){
            $this->affected = $this->result->affected_rows;

        }
        return true;
    }else{
        return false;
    }
}
function getResult(){
  return $this->result;
}


function check_login($con){
        
        if(isset($_SESSION['user_id'])){
            $id= $_SESSION['user_id'];
            $query="select * from users where user_id='$id' limit 1";

            $result=mysqli_query($con, $query);

            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);
                return $user_data;
            }
            //ako je ulogovan a ako nije smisli
            //stranica "Vec ste se prijavli za kurs"

        }
        
        
        
        

    }
function random_num($length){
            $text="";
            if($length<5){
              $length=5;
            }
            $len= rand(4,$length);
            for ($i=0; $i < $len; $i++) {
              // code...
              $text.=rand(0,9);
            }
            return $text;
          }


}
