<?php 

class maxHeap{

	private $data, $count;

	public function __construct(){
		$this->data = array();
		$this->count = 0;
	}

	public function __destruct(){
		unset($this->data);
	}

	public function size(){
		return $this->count;
	}

	public function isEmpty(){
		return $this->count == 0;
	}
}

