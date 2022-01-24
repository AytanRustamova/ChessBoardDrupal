<?php
class Knight{
    
    static function Verification(){
        $r1=rand(1,8); // sutun
        $r2=rand(1,8); // setir
        

        $y1=$r1+1;
        $y2=$r2-2;

        $y3=$r1-1;
        $y4=$r2-2;

        $y5=$r1-1;
        $y6=$r2+2;

        $y7=$r1+1;
        $y8=$r2+2;

        $y9=$r1+2;
        $y10=$r2-1;

        $y11=$r1-2;
        $y12=$r2-1;

        $y13=$r1-2;
        $y14=$r2+1;

        $y15=$r1+2;
        $y16=$r2+1;


        for($b=1;$b<=8;$b++){
        if($b%2==1){
        for($a=1;$a<=8;$a++){
        if($a%2==1){
        $s="a";
        }
        else{
        $s="b";
        }
        if(($a==$y1 && $b==$y2) || ($a==$y3 && $b==$y4) || ($a==$y5 && $b==$y6) || ($a==$y7 && $b==$y8) || ($a==$y9 && $b==$y10) || ($a==$y11 && $b==$y12) || ($a==$y13 && $b==$y14) || ($a==$y15 && $b==$y16)){
        $s="c";
        }

        if($r1==$a && $r2==$b){
        echo "<div class='".$s."'><img id='at' src='at.jpg'></div>";
        }
        else{
        echo "<div class='".$s."'></div>";
        }

        }

        }
        else{

        for($a=1;$a<=8;$a++){

        if($a%2==1){
        $s="b";
        }
        else{
        $s="a";
        }
        if(($a==$y1 && $b==$y2) || ($a==$y3 && $b==$y4) || ($a==$y5 && $b==$y6) || ($a==$y7 && $b==$y8) || ($a==$y9 && $b==$y10) || ($a==$y11 && $b==$y12) || ($a==$y13 && $b==$y14) || ($a==$y15 && $b==$y16)){
        $s="c";
        }
        if($r1==$a && $r2==$b){
        echo "<div class='".$s."'><img id='at' src='at.jpg'></div>";
        }
        else{
        echo "<div class='".$s."'></div>";
        }

        }



        }


        }
        
        
    }
}