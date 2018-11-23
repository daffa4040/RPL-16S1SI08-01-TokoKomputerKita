<?php
	class user{
		private $user_id;
		private $surename;
		private $username;
		private $passwd;
		private $address;
		private $phonenumb;
		private $useremail;
	}

	function setUser_id(){
		$this->user_id=$user_id;
	}
	function getUser_id(){
		return $this->user_id;
	}

	function setSurename(){
		$this->surename=$surename;
	}
	function getSurename(){
		return $this->surename;
	}

	function setUsername(){
		$this->username=$username;
	}
	function getUsername(){
		return $this->username;
	}

	function setPasswd{
		$this->passwd=$passwd
	}
	function getPasswd(){
		return $this->passwd;
	}

	function setAddress(){
		$this->address=$address;
	}
	function getAddress(){
		return $this->address;
	}

	function setPhonenumber(){
		$this->phonenumb=$phonenumb;
	}
	function getPhonenumber(){
		return $this->phonenumb;
	}

	function setUseremail(){
		$this->useremail=$useremail;
	}
	function getPhonenumber(){
		return $this->useremail;
	}
?>