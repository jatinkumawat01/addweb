<?php
function caseReverse($str)
{
	if($str >= 'a' && $str <= 'z'){  
		$str = strtoupper($str); 

	}
	elseif($str >= 'A' && $str <= 'Z'){  
		$str = strtolower($str);  
	}  

	echo "after  $str <br>";
}




$str = "h";
echo " befor $str <br>";
echo caseReverse($str);

?>
