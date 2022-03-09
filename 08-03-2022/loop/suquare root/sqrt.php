<?php



function squareRoot($number){
	if ($number > 0)
	{
		$root = $number / 3;
		for ($i = 0; $i < 32; $i++)
			$root = ($root + $number / $root) / 2;


		return $root;

	}

	else

	{

	return NAN;

	}

}
$num=$_GET["number"];
echo squareRoot($num) . "<br>";
