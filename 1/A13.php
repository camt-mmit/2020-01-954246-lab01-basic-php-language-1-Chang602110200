<?php //602110200 Hongxiang Chang
    printf("Input menu number: ");
    fscanf(STDIN, "%f", $menu);
if($number==1){
    printf("Input number (price %%discount): ");
    fscanf(STDIN, "%f %f", $price,$discount);
    printf("price %.2f discount %.2f netprice %.2f\n", $price, $dist_cost = $price * $discount/100, $netprice= $price - $dist_cost);
}elseif($number==2){
    printf("Input number (number1 number2): ");
    fscanf(STDIN, "%f %f", $x,$y);
    if($x>$y){
        printf("%f\n greater than %f\n", $x, $y);
    }elseif($x<$y){
        printf("%f\n less than %f\n", $x, $y);
    }else printf("%f\n equal to %f\n", $x, $y);
}else($number==3){ exit(0)
}
?>