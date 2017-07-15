<?php
namespace ATOMIC\BITM\seip107899\summary;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;

$conn=mysql_connect("localhost","root","");
mysql_select_db("atomic13");

class Summary{
    
    public $id="";
    public $summary="";
    public $company="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    
    public function __construct(){
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("atomic13");
    }
    
    public function prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('company', $data)){
            $this->company=$data['company'];
            $this->summary=$data['summary'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    
    public function index(){
       $_summary=array();
       
        $sql="SELECT * FROM summary";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_summary[]=$row;
        }
        return $_summary;
    }
    
  
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM summary WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        //var_dump($this->company)or die();
      
        $sql="INSERT INTO summary(company, summary) VALUES('".$this->company."', '".$this->summary."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Summary Data Added Sucessfully.!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>Summary Data Not Added Sucessfully.!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `summary` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $summary = mysql_fetch_object($result);
        
        return $summary;
       
    }
    
    public function update(){
       $sql = "UPDATE  `atomic13`.`summary` SET  `company` =  '".$this->company."', `summary` =  '".$this->summary."' WHERE  `summary`.`id` =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>Summary Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Summary Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
       
        
    
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
        else{
            $sql = "DELETE FROM summary WHERE id=$id";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>Summary Data Deleted Sucessfully!</strong></div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Summary Data Not Deleted Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
        }
    }
    
    
    
    
    
}

?>
