<?php 
$s = 2;
$load =array(10 ,60 ,50, 15, 20);
$ld = $load;
for ($i=0;$i<5;$i++)	
	{
		if ($ld[$i] < 50	)
			$s = $s/2	;
			// echo "less than 50" .$s;
		else
			$s = $s*$s+1;
		}
print(	(int)$s)
 ?>
