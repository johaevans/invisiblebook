<?php
	$boost = 5;
	$s = glob("./secret_stash/s_*");
	echo "Apologies shared: ".(count($s)+$boost); 
?>