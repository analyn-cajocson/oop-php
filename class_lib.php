<?
	class person {
		var $name;
		public $height;
		protected $social_insurance;
		private $pinn_number;

		function __construct($persons_name) {
			$this->set_name($persons_name);
		}
		private function get_pinn_number(){
			return $this->pinn_number;;
		}
	

	}

	class employee extends person {
		function __contruct($employee_name){
			$this->set_name($employee_name);
		}

	}



?>
