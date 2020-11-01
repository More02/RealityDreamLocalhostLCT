<?php
class DataHolder  {
	public $id = 0;
	// public function __construct($id)
    // {
    //     $this->id = $id;
    // }

	public function __toString()
    {
        return (string)$this->$id;
    }
}
$a = new DataHolder;
?>