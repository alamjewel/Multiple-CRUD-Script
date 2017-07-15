<?php
namespace ATOMIC\BITM\seip107899\book;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;


$conn=mysql_connect("localhost","root","");
mysql_select_db("atomic13");
class Book{
    
    public $id="";
    public $title="";
    public $created="";
    public $modified="";
    public $deleted_at="";
    
    
   public function __construct($title=false){
        
    }
    
   public function prepare($data=array()){
       if(is_array($data) && array_key_exists("title", $data)){
           $this->title  = $data['title'];
           $this->author = $data['author'];
           if(array_key_exists("id",$data) && !empty($data)){
               $this->id = $data['id'];
            }
        }
        return $this;
        
        
    }
    
    
    public function index(){
        $_books=array();
        $sql="SELECT * FROM book";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_books[]=$row;
        }
        return $_books;
    }
    
    public function view($id=null){
        //Utility::dd($id);
        if(is_null($id)){
            return;
        }
        
        else{
            $sql="SELECT * FROM book WHERE id='$id'";
            $result=mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function store(){
        $sql="INSERT INTO book(title, author) VALUES('".$this->title."','".$this->author."')";
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
            $sql="SELECT * FROM book where id=".$id;
            $result= mysql_query($sql);
            $book=mysql_fetch_object($result);
            return $book;
        }
        
    }
    
    public function update(){
        
        $sql="UPDATE book set title='".$this->title."', author='".$this->author."' WHERE id=".$this->id;
        $result=mysql_query($sql);
        if($result){
          Message::set('<div class="alert alert-success"><strong>Book Data updated Sucessfully!</strong> </div>');
        }else{
            Message::set('<div class="alert alert-warning"><strong>Book Data Not updated Sucessfully!</strong> </div>');
        }
        Utility::redirect('index.php');
        
    }
    public function delete($id=null){
        if(is_null($id)){
            return;
        }
         else{
            $sql="Delete FROM book where id=".$id;
            $result= mysql_query($sql);
             if($result){
              Message::set('<div class="alert alert-success"><strong>Book Data deleteed Sucessfully!</strong> </div>');
             }
             else{
              Message::set('<div class="alert alert-warning"><strong>Book Data Not deleted Sucessfully!</strong> </div>');
             }
             Utility::redirect('index.php');
        
        }
   
    }
}

?>
