<?php


//$files = ['a1'];
$notation = ['+verb', '+fin','+nonf','+mixV','+preV', '+sim','+caus', '+imp','+bless', '+non','+past','+passive','+2sg', '+2pl', '+1sg','+1pl', '+3sg','+3pl', '+3sgf'];
//$term = ['verb \n', 'finite, \n' , 'non finite, \n', 'mix verb, \n', 'pre verb, \n', 'simple, \n', 'causative, \n', 'imperative, \n', 'bless, \n', 'non past, \n', 'අතීත ක්‍රියා, \n','passive, \n','2nd person singular, \n','2nd person plural, \n','1st person singular, \n','1st person plural, \n', '3rd person singular, \n','3rd person plural, \n','3rd person singular feminine, \n'];
$term = ["ක්‍රියා පදයකි", "අවසාන" , "අනවසාන", "මිශ්‍ර ක්‍රියා", "පුර්ව ක්‍රියා" , "සරල", "ප්‍රයෝජ්‍ය ක්‍රියා", "විධි ක්‍රියා", "ආශිර්වාද ක්‍රියා", "අතීත නොවන", "අතීත","කාර්මකාරක","මධ්‍යම පුරුෂ, ඒක වචන","මධ්‍යම පුරුෂ, බහු වචන","උත්තම පුරුෂ, ඒක වචන","උත්තම පුරුෂ, බහු වචන", "ප්‍රථම පුරුෂ, ඒක වචන","ප්‍රථම පුරුෂ, බහු වචන","ප්‍රථම පුරුෂ, ඒක වචන, ස්ත්‍රී ලිංග"];

if(isset($_POST['word'])){
    $word = $_POST['word'];
//    echo $word;
        if($word !=''){
            $result ='';
            $cmd='';

            $commond = 'foma -l sin.foma -e up -e '.$word.' -s';

            $result=exec($commond);
//            echo $result;
//           // echo $word.'| lookup sin.fst';
//            return;
            if( $result != '???') {

                //echo $result." ".$commond;
                //
                $ans = "";
                $myArray = explode(" ", $result);
                for ($i = 0; $i < sizeof($myArray); $i++) {
                    if ($i == 0) {
                        $ans = "ක්‍රියා මූලය : " . $myArray[$i] . $ans;
                    } else {
                        $ans = $term[array_search($myArray[$i], $notation)] . ", " . $ans;
                    }
                }

                echo $ans;
                return;
            }

//            foreach ($files as $file){
////            $result.=$file;
//            $commond = 'echo '.$word.' | lookup sin.fst';
////            $cmd.=$commond."\n";
//            $result= exec($commond);
//            if( $result != '???'){
//
////                echo $result;
////                return;
//                $ans="";
//                $myArray = explode(" ", $result);
//                for($i=0; $i < sizeof($myArray);$i++){
//                    if($i ==0){
//                        $ans = "ක්‍රියා මූලය : ".$myArray[$i].$ans;
//                    }else{
//                        $ans = $term[array_search($myArray[$i], $notation)].", ".$ans;
//                    }
//                }
//
//                echo $ans;
//                return;
//            }
//        }
//
//        echo $result;
////            echo $cmd;
//            return;


    }else{
        echo "සෙවීමට අවශ්‍ය ක්‍රියාපදය ඇතුලු කරන්න";
    }
}else{
    echo "සෙවීමට අවශ්‍ය ක්‍රියාපදය ඇතුලු කරන්න";
}

?>
