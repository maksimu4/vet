<?php

function cut_string($string,$length)
{
	if($length&&strlen($string)>$length)
	{
		$str = implode(array_slice(explode('<br>',wordwrap($string,$length,'<br>',false)),0,1));
         
		$string=($str).' ...'.'<br>';
		
	}	
	return $string;
}
?>