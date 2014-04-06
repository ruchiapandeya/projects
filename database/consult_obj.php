<?php
	class ConsultObj {
		private $id;
		private $password;
		private $name;
		private $email;
		private $phone;
		private $country;
		private $city;
		
		public function getId() { return $this->id; }
		public function getPassword() { return $this->password; } 
		public function getName() { return $this->name; } 
		public function getEmail() { return $this->email; } 
		public function getPhone() { return $this->phone; } 
		public function getCompany() { return $this->company; } 
		public function getCountry() { return $this->country; } 
		public function getCity() { return $this->city; } 
		public function getApproval_state() { return $this->approval_state; } 
		public function setId($x) { $this->id = $x; }
		public function setPassword($x) { $this->password = $x; } 
		public function setName($x) { $this->name = $x; } 
		public function setEmail($x) { $this->email = $x; } 
		public function setPhone($x) { $this->phone = $x; } 
		public function setCompany($x) { $this->company = $x; } 
		public function setCountry($x) { $this->country = $x; } 
		public function setCity($x) { $this->city = $x; } 
		public function setApproval_state($x) { $this->approval_state = $x; }
		}
?>