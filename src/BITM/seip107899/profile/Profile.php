<?php
namespace ATOMIC\BITM\seip107899\profile;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;

class Profile{
    
    public $id="";
    public $picture="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    
   public function __construct(){
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("atomic13");
    }
    
    public function prepare($data=array()){
       // Utility::dd($data);
        if(is_array($data) && array_key_exists('name', $data)){
            $this->name=$data['name'];
            $this->image=$data['image'];
            if(array_key_exists('id',$data) &&  !empty($data)){
                $this->id=$data['id'];
            }
        }
      
        return $this;
       
    }
    
    public function index(){
       $_profile=array();
       
        $sql="SELECT * FROM profile";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_profile[]=$row;
        }
        return $_profile;
    }
    
  
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM profile WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        //var_dump($this->name)or die();
      
        $sql="INSERT INTO profile(name, image) VALUES('".$this->name."', '".$this->image."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>profile Data Added Sucessfully.!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>profile Data Not Added Sucessfully.!</strong></div>');
        }
        Utility::redirect('index.php');
        
    }
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }
        $query = "SELECT * FROM `profile` WHERE id = ".$id;
       
        $result = mysql_query($query); 
        $profile = mysql_fetch_object($result);
        
        return $profile;
       
    }
    
    public function update(){
       $sql = "UPDATE  `atomic13`.`profile` SET  `name` =  '".$this->name."', `image` =  '".$this->image."' WHERE  `profile`.`id` =".$this->id;
       $result=mysql_query($sql);
     //echo $this->id;
      if($result){
          Message::set('<div class="alert alert-success"><strong>profile Data updated Sucessfully.!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>profile Data Not updated Sucessfully!</strong> </div>');
        }
        //Utility::redirect('index.php');
        
    }
       
        
    
    public function delete($image=null){
        if(is_null($image)){
            return;
        }
        else{
            $sql = "DELETE FROM profile WHERE image='$image'";
            $result=mysql_query($sql);
            if($result){
               Message::set('<div class="alert alert-success"><strong>profile Data Deleted Sucessfully!</strong></div>');
            }else{
                Message::set('<div class="alert alert-warning"><strong>Success!profile Data Not Deleted Sucessfully!</strong></div>');
            }
            return $image;
            }
    }
    
    
    
    
    
}

?>