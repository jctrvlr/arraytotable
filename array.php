<?php

class html {
	protected $html;

	public function getHTML(){
	 
	 return $this->html;
	}
}
class htmlArray extends html{
  public function numElements(array $array) {
    $num_ele = count($array);
    return $num_ele;
  }
  public function getArray(array $array) {
	$num_ele = numElements($array);

	$this->html_table = '<table border="1 cellspacing="0" cellpadding="2"><tr>';
	foreach($array as $row) {
	  $this->html_table .= "<tr>";
	  foreach($row as $column) {
	    $this->html_table .= "<td>$column</td>";
	  }
	  $this->html_table .= "</tr>";
	}
	$this->html_table .= "</table>";

	return $this->html_table;
  }

}


?>