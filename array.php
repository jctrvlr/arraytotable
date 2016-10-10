<?php

class html {
	protected $html;

	public function getHTML(){
	 
	 return $this->html;
	}
}
class htmlArray extends html{
  public function getArray(array $array) {
	$this->html = '<table border="1 cellspacing="0" cellpadding="2">';
	foreach($array as $row=>$value) {
 	  $this->html .= '<tr>';
	  foreach($value as $key=>$value2){
	    $this->html .= '<td>' . $value2 . '</td>'; 
	  }
	  $this->html .= '</tr>';
  }
  $this->html .= '</table>';
  return $this->html;
}
}
$array = array 
   (
         array('Office Space' , 'Comedy' , 'Mike Judge' ),
	       array('Matrix' , 'Action' , 'Andy / Larry Wachowski' ),
	             array('Lost In Translation' , 'Comedy / Drama' , 'Sofia
		     Coppola' ),
		           array('A Beautiful Mind' , 'Drama' , 'Ron Howard' ),
			         array('Napoleon Dynamite' , 'Comedy' , 'Jared
				 Hess' )
				    );

$obj = new htmlArray;

echo $obj->getArray($array);


?>
