import os
import subprocess


notation = [ '','+fin','+nonf', '+non','+past','+passive','+2sg', '+2pl', '+1sg','+1pl', '+3sg','+3pl', '+3sgf']
#$term = ['verb \n', 'finite, \n' , 'non finite, \n', 'mix verb, \n', 'pre verb, \n', 'simple, \n', 'causative, \n', 'imperative, \n', 'bless, \n', 'non past, \n', 'අතීත ක්‍රියා, \n','passive, \n','2nd person singular, \n','2nd person plural, \n','1st person singular, \n','1st person plural, \n', '3rd person singular, \n','3rd person plural, \n','3rd person singular feminine, \n'];
term = ['',"@(VERVF fin)", "@(VERVF nonf)", "@(TENSE nonpast)", "@(TENSE past)", "@(TENSE passive)", "@(PERS 2 sg yes)", "@(PERS 2 pl yes)", "@(PERS 1 sg yes)", "@(PERS 1 pl yes)", "{@(PERS 3 sg yes) | @(PERS 3 pl no) | @(PERS 3 sg no)}" , "@(PERS 3 pl yes)", "@(PERS 2 sg yes)"]


file_stering = 'VERB SINHALA LEXICON (1.0)'+"\n\n"
file_r = open('words.txt', 'r')
# file_w = open('all_verb.lfg', 'w')
#file_w.write(file_stering)

for line in file_r:
    file_stering = ""
##    print(line)
    str(line).rstrip()
##    str(line).replace('\r','')
##    command = "echo "+str(line).rstrip()+" | lookup sinhala.bin"
    command = "foma -l sin.foma -e up -e "+str(line).rstrip()+" -s -1"
##    print(command)
    result = subprocess.getoutput(command)
    print(result)
            #result = os.popen(command).read()
#     result = result.split("\n")
#     if result[-1] != '???':
#         out = result[-1]
# ##        print(result[-2])
#         file_stering = file_stering + str(line).rstrip() + "  V   *  "
#         myArray  = result[-2].split()
# ##        print(myArray[1])
#         for x in range(len(myArray)):
#             if x == 1 :
#                 file_stering = file_stering + " @(OPT-TRANS "+myArray[x]+") "
#             else:
#                 if myArray[x] in notation :
#                     file_stering = file_stering + term[notation.index(myArray[x])]+" "
#
#         file_stering = file_stering + ". \n"
#         if len(myArray) != 1 :
#             file_w.write(file_stering)
#
# file_w.write("----")





##        foreach (word_array as wrd){
##            $commond = 'foma -l sin.foma -e up -e '+wrd+' -s';
##            $result=exec($commond);
##            if($result != '???'){
##                $file_stering += $wrd+"  V    *  ";
##                $myArray = explode(" ", $result);
##                for ($i = 0; $i < sizeof($myArray); $i++) {
##                    if ($i == 0) {
##                        $file_stering += "@(OPT-TRANS "+$myArray[$i].") ";
##                    } else {
##                        $file_stering += $term[array_search($myArray[$i], $notation)]+"  " ;
##                    }
##                }
##                $file_stering += ". \n";
##            }
##        }
##        $file = fopen("verb.lfg", "w");
##        fwrite($file,$file_stering);
##        fclose($file);
