<?php
include_once('UnholyFactory.class.php');

	class Fighter extends UnholyFactory{


		public function __construct($val) {
			$this->absorb($val);
		}
	}
?>
