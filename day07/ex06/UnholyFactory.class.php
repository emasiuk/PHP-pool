<?php

	class UnholyFactory {
		private $_foot_soldier = 0;
		private $_assasin = 0;
		private $_archer = 0;
		public function absorb($val){
			if ($val instanceof CrippledSoldier)
			 	$this->FATAL_ERROR();
			if ($val instanceof Archer && $this->_archer == 0) {
				echo "(Factory absorbed a fighter of type archer)\n";
				$this->_archer = 1;
			} elseif ($this->_archer == 1 && $val instanceof Archer)
				echo "(Factory already absorbed a fighter of type archer)\n";


			if ($val instanceof Assassin && $this->_assasin == 0) {
				echo "(Factory absorbed a fighter of type assassin)\n";
				$this->_assasin = 1;
			} elseif ($this->_assasin == 1 && $val instanceof Assassin)
				echo "(Factory already absorbed a fighter of type assassin)\n";


			if ($val instanceof Footsoldier && $this->_foot_soldier == 0) {
				echo "(Factory absorbed a fighter of type foot soldier)\n";
				$this->_foot_soldier = 1;
			} elseif ($this->_foot_soldier == 1 && $val instanceof Footsoldier)
				echo "(Factory already absorbed a fighter of type foot soldier)\n";

			if ($val instanceof Llama) {
				echo "(Factory can't absorb this, it's not a fighter)\n";
			}
		}

		public function fabricate($pers) {
			if ($pers === 'llama')
			{
				echo "(Factory hasn't absorbed any fighter of type llama)\n";
				return (NULL);
			} else {
				echo "(Factory fabricates a fighter of type " .$pers. ")\n";
				if ($pers === "assassin")
					return (new Assassin);
				if ($pers === "foot soldier")
					return (new Footsoldier);
				if ($pers === "archer")
					return (new Archer);
			}
		}
	}
?>
