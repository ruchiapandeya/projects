<?php
	class UserObj {
		private $id;//this will act as bidder/provider id depending on the role
		private $email;
		private $name;
		
		public function getId() { return $this->id; } 
		public function getEmail() { return $this->email; } 
		public function getName() { return $this->name; } 
		public function setId($x) { $this->id = $x; } 
		public function setEmail($x) { $this->email = $x; } 
		public function setName($x) { $this->name = $x; } 
		}
?>