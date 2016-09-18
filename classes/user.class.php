<?php
class user{
  //accessed by sub or normal class;
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;
  
  public function __construct($user_level){
	  $this->user_level = $user_level;
  }
  
  public function __destruct(){
  }
  
  //sets values based on parameters
  public function setLName($last)
  {
	  $this->last_name = $last;
  }
  
  //gets a value from class
  public function getLName(){
    return $this->last_name;
  
  }
  

  public function setFName($first){
    $this->first_name = $first;
  }
  public function getFName(){
    return $this->first_name;
  }

	
}




















?>