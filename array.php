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
	$this->html .= '<tr>';
	$first = true;
	foreach($array[1] as $key=>$value){
		$this->html .= '<th>' . $value . '</th>';
	  }
	$this->html .= '</tr>';
	foreach($array as $key=>$value) {
 	  if($first) {
	    $first = false;
	    continue;
	  }  
	  $this->html .= '<tr>';
	  foreach($value as $key2=>$value2){
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
