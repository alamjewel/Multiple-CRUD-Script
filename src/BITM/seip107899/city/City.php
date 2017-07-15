<?php
namespace ATOMIC\BITM\seip107899\city;

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
$conn=mysql_connect("localhost","root","");
mysql_select_db("atomic13");

class City{
    
    public $id="";
    public $city="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
   public function __construct($city=false){
        
    }
    
    public function index(){
        $city=array();
        $sql="SELECT * FROM city";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $city[]=$row;
        }
        return $city;
        
    }
    
   public function prepare($data=array()){
        if(is_array($data) && array_key_exists('name', $data)){
            $this->name=$data['name'];
            $this->city=$data['city'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM city WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    
    public function store(){
        $sql="INSERT INTO city(name, city) VALUES('".$this->name."','".$this->city."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>City Data Added Sucessfully!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>City Data Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
    }
    
   public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `city` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $city = mysql_fetch_object($result);
        
        return $city;
       
    }
    
     public function update(){
        //Utility::dd($this->id);
        //echo $this-id.$this->name;die();
       $sql = "UPDATE  city SET  name =  '".$this->name."', city =  '".$this->city."' WHERE  id =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>City Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>City Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
     public function delete($id=null){
        if(is_null($id)){
            return;
        }
        else{
            $sql = "DELETE FROM city WHERE id=$id";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>City Data Deleted Sucessfully!</strong></div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Success!City Data Not Deleted Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        }
    }
    
    
    
    
    
}

?>
