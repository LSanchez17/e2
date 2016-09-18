<?php
class admin extends user{
	
	
  public function __construct($user_level, $user_id){
	  $this->user_level = $user_level;
	  $this->user_id = $user_id;
	  parent::__construct($user_level, $user_id);

  }
  
  public function __destruct(){
	  
	  
  }
  
/*
  //sets values based on parameters
  public function __set($UserType, $Email)
  {
	  $this->user_type = $UserType;
	  $this->email_address = $Email;
  }
  
  //gets a value from class
  public function _get(){
	  return $this->user_type;
          return $this->email_address;
	  
  }
*/


//sets values based on parameters
  public function setmail($Email)
  {
	  $this->email_address = $Email;
  }
  

  
  //gets a value from class
  public function getmail(){
          return $this->email_address;
	  
  }
  
  public function gettype(){
          return $this->user_type;
  }
  
  public function getID(){
          return $this->user_id;
  }
  
  
 public function settype($type){
     $this->user_type = $type;
}

 public function getype(){
    return $this->user_type;
}


 public function setlevel($level){
     $this->user_level = $level;
}

 public function getlevel(){
    return $this->user_level;
}

}
?>