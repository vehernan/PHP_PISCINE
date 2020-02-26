#!/usr/bin/php
<?php
echo ("Enter a number: $n")
$open = fopen('php://stdin', 'r');
	while (!feof($open))
	{
		echo "Enter a number: ";
		$input = fgets($open);
		$input = str_replace("\n", "", $input);
		if (is_numeric($input))
		{
			if ($input % 2 == 0)
				echo "The number" . " $input" . " is even\n";
			else
				echo "The number" . " $input" . " is odd\n";
		}
		else
			echo "'". "$input" . "'" . " is not a number\n";
	}
	fclose($open);
	
?>