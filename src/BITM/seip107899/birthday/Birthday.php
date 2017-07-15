<?php
namespace ATOMIC\BITM\seip107899\birthday;

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;


class Birthday{
    
    public $id="";
    public $birthday="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    public function __construct(){
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("atomic13");
    }
    
    public function prepare($data=array()){
        if(is_array($data) && array_key_exists('name', $data)){
            $this->name=$data['name'];
            $this->birthday=$data['birthday'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    
    public function index(){
       $_birthday=array();
       
        $sql="SELECT * FROM birthday";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_birthday[]=$row;
        }
        return $_birthday;
    }
    
  
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM birthday WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        //var_dump($this->name)or die();
      
        $sql="INSERT INTO birthday(name, birthday) VALUES('".$this->name."', '".$this->birthday."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Birthday Data Added Sucessfully.!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>Birthday Data Not Added Sucessfully.!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `birthday` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $birthday = mysql_fetch_object($result);
        
        return $birthday;
       
    }
    
    public function update(){
       $sql = "UPDATE  `atomic13`.`birthday` SET  `name` =  '".$this->name."', `birthday` =  '".$this->birthday."' WHERE  `birthday`.`id` =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>Birthday Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Birthday Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
       
        
    
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
        else{
            $sql = "DELETE FROM birthday WHERE id=$id";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>Birthday Data Deleted Sucessfully!</strong></div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Success!Birthday Data Not Deleted Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        }
    }
    
    
    
    
    
}

?>
