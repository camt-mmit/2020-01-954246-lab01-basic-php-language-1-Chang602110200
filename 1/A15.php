<?PHP //602110200 Hongxiang Chang
    printf("input ueage unit : ");
    fscanf(STDIN, "%d", $unit);
    if($unit==0){
        printf ("price of electricity bill=0");
    }elseif($unit>=1 & $unit<=5){
        print ("price of electricity bill=10");
    }elseif($unit>=6 & $unit<=10){ 
        printf ("price of electricity bill= %d\n",$price=3*($unit-5)+10);
    }elseif($unit>=11 & $unit<=15){
        printf ("price of electricity bill= %d\n",$price=5*($unit-10)+10+3*(10-5)+10);
    }else{
        printf ("price of electricity bill= %d\n",$price=10*($unit-15)+5*($unit-10)+3*(10-5)+10);
    }
 