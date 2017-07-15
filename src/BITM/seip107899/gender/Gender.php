<?php
namespace ATOMIC\BITM\seip107899\gender;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;



class Gender{
    
    public $id="";
    public $gender="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    
    public function __construct($gender=false){
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("atomic13");
    }
    
    public function prepare($data=array()){
        if(is_array($data) && array_key_exists('name', $data)){
            $this->name=$data['name'];
            $this->gender=$data['gender'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    
    public function index(){
       $_gender=array();
       
        $sql="SELECT * FROM gender";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_gender[]=$row;
        }
        return $_gender;
    }
    
  
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM gender WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        //var_dump($this->name)or die();
      
        $sql="INSERT INTO gender(name, gender) VALUES('".$this->name."', '".$this->gender."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>gender Data Added Sucessfully.!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>gender Data Not Added Sucessfully.!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `gender` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $gender = mysql_fetch_object($result);
        
        return $gender;
       
    }
    
    public function update(){
       $sql = "UPDATE  `atomic13`.`gender` SET  `name` =  '".$this->name."', `gender` =  '".$this->gender."' WHERE  `gender`.`id` =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>gender Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>gender Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
       
        
    
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
        else{
            $sql = "DELETE FROM gender WHERE id=$id";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>gender Data Deleted Sucessfully!</strong></div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Success!gender Data Not Deleted Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        }
    }
    
    
    
    
    
}

?>
