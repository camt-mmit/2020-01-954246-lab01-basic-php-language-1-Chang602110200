<?php //602110200 Hongxiang Chang
echo "input price %%discount: ";
fscanf(STDIN, "%d %d", $a,$b);
$b=$a*$b*0.01;
$c=$a-$b;
echo "price %d, discount %d,net price %f",$a,$b,$c;
