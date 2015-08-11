<?
	class person {
		var $name;

		function __construct($persons_name) {
			$this->set_name($persons_name);
		}
		function get_namer(){
			return $this->name;
		}
	
		protected function set_name($new_name){
			if ($new_name != "Jimmy Two Guns") {
				$this->name = strtoupper($new_name);
			}
		}
	

	}

	class employee extends person {
		function __contruct($employee_name){
			$this->set_name($employee_name);
		}

		protected function set_name($new_name){
			if ($new_name == "Stefan Sucks"){
				$this->name = $new_name;
			}
			else if ($new_name == "Johnny Fingers"){
				person::set_name($new_name);
			}
		}

	}



?>
