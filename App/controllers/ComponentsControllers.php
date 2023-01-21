<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\SessionControllers;


use \Core\View;
/**
 * ComponentsControllers controller
 * 
 * PHP version 5.4
 */
class ComponentsControllers {
 
  public function __construct(){
    $this->usersmodel=new UserModel();
    $this->comp_control=new SessionControllers();
  }

  public function headerCollectUserInfos(){
    $result= $this->usersmodel->searchUserConnect();
    return $result;
  }

  public function header_nav_bar_session(){
        return $this->comp_control->sessionUpdate();
        // $this->usersmodel->MatchUserNavBar();
  }
  public function disconnect(){
    $this->comp_control->closeSessionAction();
  }
    
}
