<?php
$amount = 398;
$initialAmount = $amount;
$winAverage =0.8;
$lossAverage = -1;
$initialI = 664;
//$initialI = 141*4.2;
$dividedBy = 20;
$chances = array($winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$winAverage,$lossAverage,$lossAverage,$lossAverage,$lossAverage,$lossAverage,$lossAverage,$lossAverage,$lossAverage);
//echo $amount/50 . 'is';
//echo $chances[rand(0,4)];
//echo $amount += $chances[rand(0,4)];
$loss = 0;
$win = 0;
$output='';
$consecutiveArrayData = array();
for($i=0; $i<$initialI; $i++){
    $index = mt_rand(0,19);
    $multiplier = (floor(((round($amount,2))/$dividedBy)/10))*10; if($multiplier<10){break;} if($multiplier>250){$multiplier=250;}
    //$multiplier = (round($amount,2)/$dividedBy);
    //$multiplier = 10;
    $result = 0;
    if($chances[$index] == $winAverage){
        $result = $chances[$index];
        $win++;
        $consecutiveArrayData[$i]=1;
    }else{
        $result = $chances[$index];
        $loss++;
        $consecutiveArrayData[$i]=-1;
    }
    $result = round(($result*$multiplier),2);
    $amount += round($result,2);
    if ( $i == 0 )
    {
        $max = $amount;
        $min = $amount;
    }
    else if ( $max < $amount )
    {
        $max = round($amount,2);
    }
    else if ( $amount < $min )
    {
        $min = round($amount,2);
    }
    $output .= $result . ' and amount ' . round($amount,2) . '<br>';
}
consecutive($consecutiveArrayData);
echo 'Trades : '.($win+$loss).' <br/>MaximumAmount : '.$max.' & MinimumAmount : '.$min .' <br/>InitialAmount : '.$initialAmount. '<br/> FinalAmount : ' . round($amount,2) .'</br>Diff : '. round(($amount-$initialAmount),2)  .'<br>Win : ' . $win . ' & Loss : ' .$loss;
echo '<br/>Win %age : ' .round((($win/($win+$loss))*100),2) .'<br/><br/>' ;
echo $output;
function consecutive($consecutiveArrayData){
    $iresult = array();
    $ic = 0;
    foreach ($consecutiveArrayData as $k=>$v) {
        if(($v < 0 && $ic <=0) || ($v > 0 && $ic >=0)) {
            $ic+=$v;
        } else {
            $iresult[] = $ic;
            $ic=$v;
        }
    }
    $iresult[] = $ic;
    echo 'ConsecutiveWins : '.max($iresult).' ConsecutiveLosses : '.min($iresult)*-1 .'<br/>';
}
?>