<?php
	$boost = 45;
	$s = glob("./secret_stash/s_*");
	echo "Secrets shared: ".(count($s)+$boost); 
?>