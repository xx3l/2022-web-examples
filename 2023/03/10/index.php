<?php
$a = new class {
	private $p = [];
	public function __get($p) {
		return $this->$p ?? $this->p[$p] ?? null;
	}
	public function __set($p, $v) {
		if (isset($this->$p)) $this->$p = $v;
		else $this->p[$p] = $v;
		return true;
	}
};
$a->z = 10;
print $a->z;