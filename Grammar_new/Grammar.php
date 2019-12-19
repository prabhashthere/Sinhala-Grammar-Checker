<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidath";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$conn->set_charset("utf8");
//mysqli_query($conn, "use sidath;");


if (isset($_POST['text'])) {
    $word = $_POST['text'];
    $snt = str_replace('.','',$word);
    $wod_arr = explode(" ",$snt);
    $str = "NOUN_ALL SINHALA LEXICON (1.0) \n";
    if (!$conn) {
        var_dump("connection fail");
        die("Connection failed: " . mysqli_connect_error());
    }
    foreach ($wod_arr as $wrd){
        $sql = "SELECT * FROM noun where name=N'$wrd' ";
//        $sql = "SELECT * FROM noun limit 10";
        $result = mysqli_query($conn, $sql);
//        var_dump($sql);
//        var_dump($result);
//        return;
        if(mysqli_num_rows($result) > 0){
//            var_dump($result);
//        return;
            while($row = mysqli_fetch_assoc($result)) {
                $str .= $row["name"].$row["des"]."\n";
//                var_dump($row["des"]);
//                return;
            }
        }

    }
    $str .= "----";
    $myfile = fopen("noun_real.lfg", "w");
    fwrite($myfile,$str);
    fclose($myfile);

    if ($word != '') {
        $word_array = explode(". ",$word);
        $sent_array = array();
        foreach ($word_array as $sentense) {
            if(substr($sentense, -1)==" " |substr($sentense, -1)=="\n"){
                $sentense = substr($sentense, 0, -1);
            }
            if(strlen($sentense)>=3) {

                $commond = 'xle -e "create-parser grammar.lfg; parse {' . $sentense . '};exit;"';
                $result = shell_exec($commond);
                 $lines = explode("\n",$result);
                foreach ($lines as $line) {
                    if(strpos($line,'solution')){
                        $ans = explode(" ",$line);
                    }
                }
//                var_dump(json_encode($result));
//                return;
//                $ans1 = explode(" ",$lines[5]);
                $arry = array();
                if($ans[0] == 0 ){
                    $commond = 'xle -e "create-parser error.lfg; parse {' . $sentense . '};print-fs-as-prolog; exit; "';
                    $result = shell_exec($commond);
                    $lines = explode("\n",$result);
                    foreach ($lines as $line) {
                        if(strpos($line,'solution')){
                            $ans = explode(" ",$line);
                        }
                    }

                    if($ans[0]==0){
                        array_push($arry,"0");
                        array_push($arry,$sentense.". "."(Incomplete_or_Bad_Grammar)");
                        array_push($sent_array,$arry);


                    }else{
                        $fil = file_get_contents('fs1.pl');
                        $file = explode("'",$fil);
                        foreach ($file as $fl){
                            if(strpos($fl,"Mismatch")){
                                array_push($arry,"0");
                                array_push($arry,$sentense.".(".$fl.") ");
                                array_push($sent_array,$arry);
                            }
                        }
                        unlink("fs1.pl");

                    }

                }else{
                    array_push($arry,"1");
                    array_push($arry,$sentense.". ");
                    array_push($sent_array,$arry);
                }
            }


        }
        echo json_encode($sent_array);
        return;
    }



}