<?php

require_once ('Color.class.php');

class Vertex {
	private $_x;
	private $_y;
	private $_z;
	private $_color;
	private $_w = 1;
	static $verbose = false;

	function __construct($arr) {
		$this->_x = $arr['x'];
		$this->_y = $arr['y'];
		$this->_z = $arr['z'];
		if (!empty($arr['w']) && isset($arr['w']))
			$this->_w = $arr['w'];
		if (!empty($arr['color']) && isset($arr['color']) && ($arr['color'] instanceof Color))
			$this->_color = $arr['color'];
		else
			$this->_color = new Color (array('red' => 255, 'green' => 255, 'blue' => 255));
		if (Self::$verbose) {
			return (printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n",
			$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue));
		}
	}


	function __destruct() {
		if (Self::$verbose) {
			return (printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n",
			$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue));
		}
	}


	function __toString() {
		if (Self::$verbose){
			return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f Color( red: %3d, green: %3d, blue: %3d ) )",
			array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
		} else{
			return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )",
			array($this->_x, $this->_y, $this->_z, $this->_w)));

		}
	}

	public function setX($val) {
		$this->_x = $val;
	}

	public function getX() {
		return ($this->_x);
	}

	public function setY($val) {
		$this->_x = $val;
	}

	public function getY() {
		return ($this->_y);
	}

	public function setZ($val) {
		$this->_x = $val;
	}

	public function getZ() {
		return ($this->_z);
	}

	public function setW($val) {
		$this->_x = $val;
	}

	public function getW() {
		return ($this->_w);
	}

	public function setColor($val) {
		$this->_x = $val;
	}

	public function getColor() {
		return ($this->_color);
	}

	public static function doc() {
		$read = file_get_contents("Vertex.doc.txt");
		echo "$read";
	}
}

?>
