<?php

    $fl = fopen("test.txt","r");
$total =0;
$tp=0;
$tn =0;
$fp=0;
$fn=0;
$r="";
    while(! feof($fl))  {
        $total++;
    $result = fgets($fl);
    $label = substr($result,0,2);

    $sent = substr($result,2);
//        for ($i=0; $i < count($sent); $i++) {
//            $sent[$i] = iconv("Unicode", "UTF-8", $sent[$i]); // converting to UTF8
//        }
//        $sent = iconv("Unicode", "UTF-8", substr($result,2)); //UTF-8
        print ($sent);
        $commond = 'xle -e "create-parser grammar.lfg; parse {' . $sent . '};exit;"';
        $result = shell_exec($commond);
        $lines = explode("\n",$result);
        foreach ($lines as $line) {
            if(strpos($line,'solution')){
                $ans = explode(" ",$line);
            }
        }
//        $r.= $ans[0]."-".$total." ";
        if($label =="0 " & $ans[0]=="0"){
            $tn++;
        }else if($label =="0 " & $ans[0]>0){
            $fp++;
        }else if($label =="1 " & $ans[0]=="0"){
            $fn++;
        }else if($label =="1 " & $ans[0]>0){
            $tp++;
        }
//        if($total==10){
//            break;
//        }

    }
    echo json_encode(array(['total'=>$total,'tn'=>$tn,'fp'=>$fp,'fn'=>$fn,'tp'=>$tp]));
    return;