<?php
	class NightsWatch {
		public function recruit($pers) {
			if (method_exists($pers, 'fight'))
				$pers->fight();
		}
		public function fight() {
			
		}
	}
?>
