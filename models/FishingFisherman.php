<?php

class FishingFisherman extends DbObject {
    public $user_id;
    public $state;
    public $timezone;

    public function getUser()
    {
        return AuthService::getInstance($this->w)->getUser($this->user_id);
    }

    public function getContact() {
        return $this->getUser()->getContact();
    }

    public function getFullName() {
        return $this->getContact()->getFullName();
    }
  
}