<?php
namespace ATOMIC\BITM\seip107899\terms;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;

class Termsandcondition{
    
    public $id="";
    public $terms="";
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
            $this->terms=$data['terms'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    
    public function index(){
       $_terms=array();
       
        $sql="SELECT * FROM terms";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_terms[]=$row;
        }
        return $_terms;
    }
    
  
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM terms WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        $sql="INSERT INTO terms(name, terms) VALUES('".$this->name."', '".$this->terms."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Terms Data Added Sucessfully.!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>Terms Data Not Added Sucessfully.!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `terms` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $terms = mysql_fetch_object($result);
        
        return $terms;
       
    }
    
    public function update(){
       $sql = "UPDATE  `atomic13`.`terms` SET  `name` =  '".$this->name."', `terms` =  '".$this->terms."' WHERE  `terms`.`id` =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>Terms Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Terms Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
       
        
    
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
        else{
            $sql = "DELETE FROM terms WHERE id=$id";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>Terms Data Deleted Sucessfully!</strong></div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Terms Data Not Deleted Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        }
    }
    
    
    
    
    
}

?>
