<?php
namespace ATOMIC\BITM\seip107899\email;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;

class Email{
    
    public $id="";
    public $name="";
    public $email="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    
    public function __construct($email=false){
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("atomic13");
        
    }
    public function prepare($data=array()){
       if(is_array($data) && array_key_exists("name", $data)){
           $this->name  = $data['name'];
           $this->email = $data['email'];
           if(array_key_exists("id",$data) && !empty($data)){
               $this->id = $data['id'];
            }
        }
        return $this;
        
        
    }
    
    public function index(){
        $_email=array();
        $sql="SELECT * FROM email";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_email[]=$row;
        }
        return $_email;
    }
    

    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM email WHERE id='$id'";
            $result=mysql_query($sql);
            $email=mysql_fetch_object($result);
            return $email;
        }
        
    }
    
   public function store(){
       //Utility::dd($this->name);
        $sql="INSERT INTO email(name, email) VALUES('".$this->name."','".$this->email."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Book Data Added Sucessfully!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>Book Data Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
   public function edit($id=null){
        if (is_null($id)){
            return;
        }
        else{
            $sql="SELECT * FROM email where id=".$id;
            $result= mysql_query($sql);
            $email=mysql_fetch_object($result);
            return $email;
        }
        
    }
    
     public function update(){
        //Utility::dd($this->email);
        $sql="UPDATE email set name='".$this->name."', email='".$this->email."' WHERE id=".$this->id;
        $result=mysql_query($sql);
        if($result){
          Message::set('<div class="alert alert-success"><strong>email Data updated Sucessfully!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>email Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
         else{
            $sql="Delete FROM email where id=".$id;
            $result= mysql_query($sql);
             if($result){
              Message::set('<div class="alert alert-success"><strong>email Data deleteed Sucessfully!</strong> </div>');
             }
             else{
              Message::set('<div class="alert alert-warning"><strong>email Data Not deleted Sucessfully!</strong> </div>');
             }
             Utility::redirect('index.php');
        
        }
   
    }
    
    
    
    
    
}

?>

