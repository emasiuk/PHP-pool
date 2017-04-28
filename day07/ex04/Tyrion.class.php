<?php
	class Tyrion extends Lannister {
		public function sleepWith($class) {
			if ($class instanceof Jaime)
				echo ("Not even if I'm drunk !\n");
			if ($class instanceof Sansa)
				echo ("Let's do this\n");
			if ($class instanceof Cersei)
				echo ("Not even if I'm drunk !\n");
		}
	}
?>
