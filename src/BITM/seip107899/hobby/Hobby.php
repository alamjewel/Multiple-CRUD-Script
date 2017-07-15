<?php
namespace ATOMIC\BITM\seip107899\hobby;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;



class Hobby{
    
    public $id="";
    public $hobby="";
    public $name="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
   public function __construct($hobby=false){
       $conn=mysql_connect("localhost","root","");
       mysql_select_db("atomic13");
        
    }
    public function prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_KEY_exists('name', $data)){
            $this->name  = $data['name'];
            $this->hobby = implode(", ",$data['hobby']);
            if(array_key_exists('id',$data) && !empty($data)){
                $this->id = $data['id'];
            }
        }
        return $this;
    }
    
    public function index(){
      $_hobby=array();
        $sql="SELECT * FROM hobby";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_hobby[]=$row;
        }
        return $_hobby;
    }
    public function store(){
        //Utility::dd($this->hobby);
        $sql="INSERT INTO hobby(name, hobby) VALUES('".$this->name."','".$this->hobby."')";
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Hobby Data Added Sucessfully!</strong></div>');
        }else{
            
             Message::set('<div class="alert alert-warning"><strong>Hobby Data Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
    }
    
    public function view($id=null){
         if(is_null($id)){
            return;
        }else{
            $sql="SELECT * FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            $hobby=mysql_fetch_object($result);
            return $hobby;
        }
        
    }
    
    
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }else{
            $sql="SELECT * FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            $hobby=mysql_fetch_object($result);
            return $hobby;
        }
    }
    
    public function update(){
            $sql="UPDATE hobby set name='".$this->name."', hobby='".$this->hobby."' WHERE id=".$this->id;
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Hobby Data updated Sucessfully!</strong> </div>');
            }else{
                Message::set('<div class="alert alert-warning"><strong>Hobby Data Not updated Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        
        
    }
    public function delete($id=null){
         if(is_null($id)){
            return;
        }else{
            $sql="DELETE FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Hobby Data Deleted Sucessfully!</strong> </div>');
            }else{
              Message::set('<div class="alert alert-warning"><strong>Hobby Data Not Deleted  Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        }
    
}
}

?>
