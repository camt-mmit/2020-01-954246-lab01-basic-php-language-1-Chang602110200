<?php //602110200 Hongxiang Chang
    printf("input (%number1 %number2): ");
    fscanf(STDIN, "%f %f", $a,$b);
    if ($a>$b) printf ("%f\n greater than %f\n", $a, $b);
    else if ($a<$b) printf("%f\n less than %f\n", $a, $b);
    else printf ("%f\n equal to %f\n", $a,$b);
