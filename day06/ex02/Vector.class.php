<?php
	class Vector
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w = 1;
        static $verbose = false;

		function __construct($arr)
		{
			if (isset($arr['dest']) && $arr['dest'] instanceof Vertex)
			{
				if (isset($arr['orig']) && $arr['orig'] instanceof Vertex)
					$orig = new Vertex (array('x' => $arr['orig']->getX(), 'y' => $arr['orig']->getY(), 'z' => $arr['orig']->getZ()));
				else {
					$orig = new Vertex (array('x' => 0, 'y' => 0, 'z' => 0));
				}
				$this->_x = $arr['dest']->getX() - $orig->getX();
				$this->_y = $arr['dest']->getY() - $orig->getY();
				$this->_z = $arr['dest']->getZ() - $orig->getZ();
				$this->_w = 0;
			}
			if (Self::$verbose) {
				printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
			}
		}

		public function magnitude() {
			return ((float)sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)));
		}

		public function normalize() {
			$val = $this->magnitude();
			if ($val == 1) {
				return clone $this;
			}
			return (new Vector(array('dest' => new Vertex(array('x' => $this->_x / $val, 'y' => $this->_y / $val, 'z' => $this->_z / $val)))));
		}

		public function add(Vector $rhs)
		{
			return (new Vector(array('dest' => new Vertex(array('x' => $this->_x + $rhs->_x, 'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z)))));
		}

		public function sub(Vector $rhs)
		{
			return (new Vector(array('dest' => new Vertex(array('x' => $this->_x - $rhs->_x, 'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z)))));
		}

		public function opposite ()
		{
			return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1)))));
		}

		public function scalarProduct($k)
		{
			return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k)))));
		}

		public function dotProduct(Vector $rhs)
		{
			return ((float)($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z));
		}

		public function cos(Vector $rhs) {
			return (float)($this->dotProduct($rhs)/($this->magnitude() * sqrt(($rhs->_x * $rhs->_x) + ($rhs->_y * $rhs->_y) + ($rhs->_z * $rhs->_z))));
		}

		public function crossProduct(Vector $rhs) {
			return (new Vector(array('dest' => new Vertex(array('x' => ($this->_y * $rhs->_z) - ($this->_z * $rhs->_y), 'y' => ($this->_z * $rhs->_x) - ($this->_x * $rhs->_z),
			'z' => ($this->_x * $rhs->_y) - ($this->_y * $rhs->_x))))));
		}

		function __destruct()
		{
			if (Self::$verbose) {
				printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
			}
		}

		function __toString()
		{
			if (Self::$verbose) {
				return (vsprintf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
			}
		}





		public function getX()
		{
			return ($this->_x);
		}

		public function getY()
		{
			return ($this->_y);
		}

		public function getZ()
		{
			return ($this->_z);
		}

		public function getW()
		{
			return ($this->_w);
		}

		public static function doc()
        {
            echo ("\n");
            $filetext = file_get_contents('Vector.doc.txt');
            echo ($filetext);
        }
	}
?>
