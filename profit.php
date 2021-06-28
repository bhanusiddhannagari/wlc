<?php
$b = 9;
$v = 2;
$s = 3;
$vpp = 10;
$spp = 15;
$profit=0;
for ($i=2;$i<=9;$i+=2)
    {
    
       if ($s >0){

        $profit=$profit+15;
        $s = $s-1;
        // echo $s;
    }
       elseif ($v > 0) {
            $profit = $profit+10;
            $v = $v-1;
            // echo $v;
        
        }
    
    }

   
print((int)$profit)

?>
