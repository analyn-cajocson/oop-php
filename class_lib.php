<?
	class person {
		var $name;
		public $height;
		protected $social_insurance;
		private $spinn_number;

		function __construct($persons_name) {
			$this->name = $persons_name;
		}
		function set_name($new_name){
			$this->name = $new_name;
		}
		function get_name(){
			return $this->name;
		}
	

	}



?>
