<?php 
 
require  "navbar.html.php"; 

if(isset($_POST['roundsubmit'])){

// table 2 of html section
$rounds10array = [$_REQUEST['roundb10'], $_REQUEST['roundc10'], $_REQUEST['roundd10'],
                  $_REQUEST['rounde10'], $_REQUEST['roundf10'], $_REQUEST['roundg10'],
                  $_REQUEST['roundh10'], $_REQUEST['roundi10'], $_REQUEST['roundj10'],
                  $_REQUEST['roundk10'], $_REQUEST['roundl10'], $_REQUEST['roundm10'],
                  $_REQUEST['roundn10'], $_REQUEST['roundo10'], $_REQUEST['roundp10'],
                  $_REQUEST['roundq10'], $_REQUEST['roundr10']]; 
$rounds10 = array_sum($rounds10array);

$rounds11array = [$_REQUEST['roundb11'], $_REQUEST['roundc11'], $_REQUEST['roundd11'],
                  $_REQUEST['roundh11'], $_REQUEST['roundi11'], $_REQUEST['roundj11'],
                  $_REQUEST['rounde11'], $_REQUEST['roundf11'], $_REQUEST['roundg11'],
                  $_REQUEST['roundk11'], $_REQUEST['roundl11'], $_REQUEST['roundm11'],
                  $_REQUEST['roundn11'], $_REQUEST['roundo11'], $_REQUEST['roundp11'],
                  $_REQUEST['roundq11'], $_REQUEST['roundr11']]; 
$rounds11 = array_sum($rounds11array);

$rounds12array = [$_REQUEST['roundb12'], $_REQUEST['roundc12'], $_REQUEST['roundd12'],
                  $_REQUEST['rounde12'], $_REQUEST['roundf12'], $_REQUEST['roundg12'],
                  $_REQUEST['roundh12'], $_REQUEST['roundi12'], $_REQUEST['roundj12'],
                  $_REQUEST['roundk12'], $_REQUEST['roundl12'], $_REQUEST['roundm12'],
                  $_REQUEST['roundn12'], $_REQUEST['roundo12'], $_REQUEST['roundp12'],
                  $_REQUEST['roundq12'], $_REQUEST['roundr12']]; 
$rounds12 = array_sum($rounds12array);

$rounds13array = [$_REQUEST['roundb13'], $_REQUEST['roundc13'], $_REQUEST['roundd13'],
                  $_REQUEST['rounde13'], $_REQUEST['roundf13'], $_REQUEST['roundg13'],
                  $_REQUEST['roundh13'], $_REQUEST['roundi13'], $_REQUEST['roundj13'],
                  $_REQUEST['roundk13'], $_REQUEST['roundl13'], $_REQUEST['roundm13'],
                  $_REQUEST['roundn13'], $_REQUEST['roundo13'], $_REQUEST['roundp13'],
                  $_REQUEST['roundq13'], $_REQUEST['roundr13']]; 
$rounds13 = array_sum($rounds13array);

$rounds14array = [$_REQUEST['roundb14'], $_REQUEST['roundc14'], $_REQUEST['roundd14'],
                  $_REQUEST['rounde14'], $_REQUEST['roundf14'], $_REQUEST['roundg14'],
                  $_REQUEST['roundh14'], $_REQUEST['roundi14'], $_REQUEST['roundj14'],
                  $_REQUEST['roundk14'], $_REQUEST['roundl14'], $_REQUEST['roundm14'],
                  $_REQUEST['roundn14'], $_REQUEST['roundo14'], $_REQUEST['roundp14'],
                  $_REQUEST['roundq14'], $_REQUEST['roundr14']]; 
$rounds14 = array_sum($rounds14array);

$rounds15array = [$_REQUEST['roundb15'], $_REQUEST['roundc15'], $_REQUEST['roundd15'],
                  $_REQUEST['rounde15'], $_REQUEST['roundf15'], $_REQUEST['roundg15'],
                  $_REQUEST['roundh15'], $_REQUEST['roundi15'], $_REQUEST['roundj15'],
                  $_REQUEST['roundk15'], $_REQUEST['roundl15'], $_REQUEST['roundm15'],
                  $_REQUEST['roundn15'], $_REQUEST['roundo15'], $_REQUEST['roundp15'],
                  $_REQUEST['roundq15'], $_REQUEST['roundr15']]; 
$rounds15 = array_sum($rounds15array);

$rounds16array = [$_REQUEST['roundb16'], $_REQUEST['roundc16'], $_REQUEST['roundd16'],
                  $_REQUEST['rounde16'], $_REQUEST['roundf16'], $_REQUEST['roundg16'],
                  $_REQUEST['roundh16'], $_REQUEST['roundi16'], $_REQUEST['roundj16'],
                  $_REQUEST['roundk16'], $_REQUEST['roundl16'], $_REQUEST['roundm16'],
                  $_REQUEST['roundn16'], $_REQUEST['roundo16'], $_REQUEST['roundp16'],
                  $_REQUEST['roundq16'], $_REQUEST['roundr16']]; 
$rounds16 = array_sum($rounds16array);

$rounds17array = [$_REQUEST['roundb17'], $_REQUEST['roundc17'], $_REQUEST['roundd17'],
                  $_REQUEST['rounde17'], $_REQUEST['roundf17'], $_REQUEST['roundg17'],
                  $_REQUEST['roundh17'], $_REQUEST['roundi17'], $_REQUEST['roundj17'],
                  $_REQUEST['roundk17'], $_REQUEST['roundl17'], $_REQUEST['roundm17'],
                  $_REQUEST['roundn17'], $_REQUEST['roundo17'], $_REQUEST['roundp17'],
                  $_REQUEST['roundq17'], $_REQUEST['roundr17']]; 
$rounds17 = array_sum($rounds17array);

$rounds18array = [$_REQUEST['roundb18'], $_REQUEST['roundc18'], $_REQUEST['roundd18'],
                  $_REQUEST['rounde18'], $_REQUEST['roundf18'], $_REQUEST['roundg18'],
                  $_REQUEST['roundh18'], $_REQUEST['roundi18'], $_REQUEST['roundj18'],
                  $_REQUEST['roundk18'], $_REQUEST['roundl18'], $_REQUEST['roundm18'],
                  $_REQUEST['roundn18'], $_REQUEST['roundo18'], $_REQUEST['roundp18'],
                  $_REQUEST['roundq18'], $_REQUEST['roundr18']]; 
$rounds18 = array_sum($rounds18array);

$rounds19array = [$_REQUEST['roundb19'], $_REQUEST['roundc19'], $_REQUEST['roundd19'],
                  $_REQUEST['rounde19'], $_REQUEST['roundf19'], $_REQUEST['roundg19'],
                  $_REQUEST['roundh19'], $_REQUEST['roundi19'], $_REQUEST['roundj19'],
                  $_REQUEST['roundk19'], $_REQUEST['roundl19'], $_REQUEST['roundm19'],
                  $_REQUEST['roundn19'], $_REQUEST['roundo19'], $_REQUEST['roundp19'],
                  $_REQUEST['roundq19'], $_REQUEST['roundr19']]; 
$rounds19 = array_sum($rounds19array);

$rounds20array = [$_REQUEST['roundb20'], $_REQUEST['roundc20'], $_REQUEST['roundd20'],
                  $_REQUEST['rounde20'], $_REQUEST['roundf20'], $_REQUEST['roundg20'],
                  $_REQUEST['roundh20'], $_REQUEST['roundi20'], $_REQUEST['roundj20'],
                  $_REQUEST['roundk20'], $_REQUEST['roundl20'], $_REQUEST['roundm20'],
                  $_REQUEST['roundn20'], $_REQUEST['roundo20'], $_REQUEST['roundp20'],
                  $_REQUEST['roundq20'], $_REQUEST['roundr20']]; 
$rounds20 = array_sum($rounds20array);

$rounds21array = [$_REQUEST['roundb21'], $_REQUEST['roundc21'], $_REQUEST['roundd21'],
                  $_REQUEST['rounde21'], $_REQUEST['roundf21'], $_REQUEST['roundg21'],
                  $_REQUEST['roundh21'], $_REQUEST['roundi21'], $_REQUEST['roundj21'],
                  $_REQUEST['roundk21'], $_REQUEST['roundl21'], $_REQUEST['roundm21'],
                  $_REQUEST['roundn21'], $_REQUEST['roundo21'], $_REQUEST['roundp21'],
                  $_REQUEST['roundq21'], $_REQUEST['roundr21']]; 
$rounds21 = array_sum($rounds21array);

$rounds22array = [$_REQUEST['roundb22'], $_REQUEST['roundc22'], $_REQUEST['roundd22'],
                  $_REQUEST['rounde22'], $_REQUEST['roundf22'], $_REQUEST['roundg22'],
                  $_REQUEST['roundh22'], $_REQUEST['roundi22'], $_REQUEST['roundj22'],
                  $_REQUEST['roundk22'], $_REQUEST['roundl22'], $_REQUEST['roundm22'],
                  $_REQUEST['roundn22'], $_REQUEST['roundo22'], $_REQUEST['roundp22'],
                  $_REQUEST['roundq22'], $_REQUEST['roundr22']]; 
$rounds22 = array_sum($rounds22array);

$rounds23array = [$_REQUEST['roundb23'], $_REQUEST['roundc23'], $_REQUEST['roundd23'],
                  $_REQUEST['rounde23'], $_REQUEST['roundf23'], $_REQUEST['roundg23'],
                  $_REQUEST['roundh23'], $_REQUEST['roundi23'], $_REQUEST['roundj23'],
                  $_REQUEST['roundk23'], $_REQUEST['roundl23'], $_REQUEST['roundm23'],
                  $_REQUEST['roundn23'], $_REQUEST['roundo23'], $_REQUEST['roundp23'],
                  $_REQUEST['roundq23'], $_REQUEST['roundr23']]; 
$rounds23 = array_sum($rounds23array);

$rounds24array = [$_REQUEST['roundb24'], $_REQUEST['roundc24'], $_REQUEST['roundd24'],
                  $_REQUEST['rounde24'], $_REQUEST['roundf24'], $_REQUEST['roundg24'],
                  $_REQUEST['roundh24'], $_REQUEST['roundi24'], $_REQUEST['roundj24'],
                  $_REQUEST['roundk24'], $_REQUEST['roundl24'], $_REQUEST['roundm24'],
                  $_REQUEST['roundn24'], $_REQUEST['roundo24'], $_REQUEST['roundp24'],
                  $_REQUEST['roundq24'], $_REQUEST['roundr24']]; 
$rounds24 = array_sum($rounds24array);

$rounds25array = [$_REQUEST['roundb25'], $_REQUEST['roundc25'], $_REQUEST['roundd25'],
                  $_REQUEST['rounde25'], $_REQUEST['roundf25'], $_REQUEST['roundg25'],
                  $_REQUEST['roundh25'], $_REQUEST['roundi25'], $_REQUEST['roundj25'],
                  $_REQUEST['roundk25'], $_REQUEST['roundl25'], $_REQUEST['roundm25'],
                  $_REQUEST['roundn25'], $_REQUEST['roundo25'], $_REQUEST['roundp25'],
                  $_REQUEST['roundq25'], $_REQUEST['roundr25']]; 
$rounds25 = array_sum($rounds25array);

$rounds26array = [$_REQUEST['roundb26'], $_REQUEST['roundc26'], $_REQUEST['roundd26'],
                  $_REQUEST['rounde26'], $_REQUEST['roundf26'], $_REQUEST['roundg26'],
                  $_REQUEST['roundh26'], $_REQUEST['roundi26'], $_REQUEST['roundj26'],
                  $_REQUEST['roundk26'], $_REQUEST['roundl26'], $_REQUEST['roundm26'],
                  $_REQUEST['roundn26'], $_REQUEST['roundo26'], $_REQUEST['roundp26'],
                  $_REQUEST['roundq26'], $_REQUEST['roundr26']]; 
$rounds26 = array_sum($rounds26array);

$rounds27array = [$_REQUEST['roundb27'], $_REQUEST['roundc27'], $_REQUEST['roundd27'],
                  $_REQUEST['rounde27'], $_REQUEST['roundf27'], $_REQUEST['roundg27'],
                  $_REQUEST['roundh27'], $_REQUEST['roundi27'], $_REQUEST['roundj27'],
                  $_REQUEST['roundk27'], $_REQUEST['roundl27'], $_REQUEST['roundm27'],
                  $_REQUEST['roundn27'], $_REQUEST['roundo27'], $_REQUEST['roundp27'],
                  $_REQUEST['roundq27'], $_REQUEST['roundr27']]; 
$rounds27 = array_sum($rounds27array);

$rounds28array = [$_REQUEST['roundb28'], $_REQUEST['roundc28'], $_REQUEST['roundd28'],
                  $_REQUEST['rounde28'], $_REQUEST['roundf28'], $_REQUEST['roundg28'],
                  $_REQUEST['roundh28'], $_REQUEST['roundi28'], $_REQUEST['roundj28'],
                  $_REQUEST['roundk28'], $_REQUEST['roundl28'], $_REQUEST['roundm28'],
                  $_REQUEST['roundn28'], $_REQUEST['roundo28'], $_REQUEST['roundp28'],
                  $_REQUEST['roundq28'], $_REQUEST['roundr28']]; 
$rounds28 = array_sum($rounds28array);

$rounds29array = [$_REQUEST['roundb29'], $_REQUEST['roundc29'], $_REQUEST['roundd29'],
                  $_REQUEST['rounde29'], $_REQUEST['roundf29'], $_REQUEST['roundg29'],
                  $_REQUEST['roundh29'], $_REQUEST['roundi29'], $_REQUEST['roundj29'],
                  $_REQUEST['roundk29'], $_REQUEST['roundl29'], $_REQUEST['roundm29'],
                  $_REQUEST['roundn29'], $_REQUEST['roundo29'], $_REQUEST['roundp29'],
                  $_REQUEST['roundq29'], $_REQUEST['roundr29']]; 
$rounds29 = array_sum($rounds29array);

$rounds30array = [$_REQUEST['roundb30'], $_REQUEST['roundc30'], $_REQUEST['roundd30'],
                  $_REQUEST['rounde30'], $_REQUEST['roundf30'], $_REQUEST['roundg30'],
                  $_REQUEST['roundh30'], $_REQUEST['roundi30'], $_REQUEST['roundj30'],
                  $_REQUEST['roundk30'], $_REQUEST['roundl30'], $_REQUEST['roundm30'],
                  $_REQUEST['roundn30'], $_REQUEST['roundo30'], $_REQUEST['roundp30'],
                  $_REQUEST['roundq30'], $_REQUEST['roundr30']]; 
$rounds30 = array_sum($rounds30array);

$rounds31array = [$_REQUEST['roundb31'], $_REQUEST['roundc31'], $_REQUEST['roundd31'],
                  $_REQUEST['rounde31'], $_REQUEST['roundf31'], $_REQUEST['roundg31'],
                  $_REQUEST['roundh31'], $_REQUEST['roundi31'], $_REQUEST['roundj31'],
                  $_REQUEST['roundk31'], $_REQUEST['roundl31'], $_REQUEST['roundm31'],
                  $_REQUEST['roundn31'], $_REQUEST['roundo31'], $_REQUEST['roundp31'],
                  $_REQUEST['roundq31'], $_REQUEST['roundr31']]; 
$rounds31 = array_sum($rounds31array);

$rounds32array = [$_REQUEST['roundb32'], $_REQUEST['roundc32'], $_REQUEST['roundd32'],
                  $_REQUEST['rounde32'], $_REQUEST['roundf32'], $_REQUEST['roundg32'],
                  $_REQUEST['roundh32'], $_REQUEST['roundi32'], $_REQUEST['roundj32'],
                  $_REQUEST['roundk32'], $_REQUEST['roundl32'], $_REQUEST['roundm32'],
                  $_REQUEST['roundn32'], $_REQUEST['roundo32'], $_REQUEST['roundp32'],
                  $_REQUEST['roundq32'], $_REQUEST['roundr32']]; 
$rounds32 = array_sum($rounds32array);

$rounds33array = [$_REQUEST['roundb33'], $_REQUEST['roundc33'], $_REQUEST['roundd33'],
                  $_REQUEST['rounde33'], $_REQUEST['roundf33'], $_REQUEST['roundg33'],
                  $_REQUEST['roundh33'], $_REQUEST['roundi33'], $_REQUEST['roundj33'],
                  $_REQUEST['roundk33'], $_REQUEST['roundl33'], $_REQUEST['roundm33'],
                  $_REQUEST['roundn33'], $_REQUEST['roundo33'], $_REQUEST['roundp33'],
                  $_REQUEST['roundq33'], $_REQUEST['roundr33']]; 
$rounds33 = array_sum($rounds33array);

$rounds34array = [$_REQUEST['roundb34'], $_REQUEST['roundc34'], $_REQUEST['roundd34'],
                  $_REQUEST['rounde34'], $_REQUEST['roundf34'], $_REQUEST['roundg34'],
                  $_REQUEST['roundh34'], $_REQUEST['roundi34'], $_REQUEST['roundj34'],
                  $_REQUEST['roundk34'], $_REQUEST['roundl34'], $_REQUEST['roundm34'],
                  $_REQUEST['roundn34'], $_REQUEST['roundo34'], $_REQUEST['roundp34'],
                  $_REQUEST['roundq34'], $_REQUEST['roundr34']]; 
$rounds34 = array_sum($rounds34array);

$rounds35array = [$_REQUEST['roundb35'], $_REQUEST['roundc35'], $_REQUEST['roundd35'],
                  $_REQUEST['rounde35'], $_REQUEST['roundf35'], $_REQUEST['roundg35'],
                  $_REQUEST['roundh35'], $_REQUEST['roundi35'], $_REQUEST['roundj35'],
                  $_REQUEST['roundk35'], $_REQUEST['roundl35'], $_REQUEST['roundm35'],
                  $_REQUEST['roundn35'], $_REQUEST['roundo35'], $_REQUEST['roundp35'],
                  $_REQUEST['roundq35'], $_REQUEST['roundr35']]; 
$rounds35 = array_sum($rounds35array);

$rounds36array = [$_REQUEST['roundb36'], $_REQUEST['roundc36'], $_REQUEST['roundd36'],
                  $_REQUEST['rounde36'], $_REQUEST['roundf36'], $_REQUEST['roundg36'],
                  $_REQUEST['roundh36'], $_REQUEST['roundi36'], $_REQUEST['roundj36'],
                  $_REQUEST['roundk36'], $_REQUEST['roundl36'], $_REQUEST['roundm36'],
                  $_REQUEST['roundn36'], $_REQUEST['roundo36'], $_REQUEST['roundp36'],
                  $_REQUEST['roundq36'], $_REQUEST['roundr36']]; 
$rounds36 = array_sum($rounds36array);

$rounds37array = [$_REQUEST['roundb37'], $_REQUEST['roundc37'], $_REQUEST['roundd37'],
                  $_REQUEST['rounde37'], $_REQUEST['roundf37'], $_REQUEST['roundg37'],
                  $_REQUEST['roundh37'], $_REQUEST['roundi37'], $_REQUEST['roundj37'],
                  $_REQUEST['roundk37'], $_REQUEST['roundl37'], $_REQUEST['roundm37'],
                  $_REQUEST['roundn37'], $_REQUEST['roundo37'], $_REQUEST['roundp37'],
                  $_REQUEST['roundq37'], $_REQUEST['roundr37']]; 
$rounds37 = array_sum($rounds37array);

$rounds38array = [$_REQUEST['roundb38'], $_REQUEST['roundc38'], $_REQUEST['roundd38'],
                  $_REQUEST['rounde38'], $_REQUEST['roundf38'], $_REQUEST['roundg38'],
                  $_REQUEST['roundh38'], $_REQUEST['roundi38'], $_REQUEST['roundj38'],
                  $_REQUEST['roundk38'], $_REQUEST['roundl38'], $_REQUEST['roundm38'],
                  $_REQUEST['roundn38'], $_REQUEST['roundo38'], $_REQUEST['roundp38'],
                  $_REQUEST['roundq38'], $_REQUEST['roundr38']]; 
$rounds38 = array_sum($rounds38array);

$rounds39array = [$_REQUEST['roundb39'], $_REQUEST['roundc39'], $_REQUEST['roundd39'],
                  $_REQUEST['rounde39'], $_REQUEST['roundf39'], $_REQUEST['roundg39'],
                  $_REQUEST['roundh39'], $_REQUEST['roundi39'], $_REQUEST['roundj39'],
                  $_REQUEST['roundk39'], $_REQUEST['roundl39'], $_REQUEST['roundm39'],
                  $_REQUEST['roundn39'], $_REQUEST['roundo39'], $_REQUEST['roundp39'],
                  $_REQUEST['roundq39'], $_REQUEST['roundr39']]; 
$rounds39 = array_sum($rounds39array);

$rounds40array = [$_REQUEST['roundb40'], $_REQUEST['roundc40'], $_REQUEST['roundd40'],
                  $_REQUEST['rounde40'], $_REQUEST['roundf40'], $_REQUEST['roundg40'],
                  $_REQUEST['roundh40'], $_REQUEST['roundi40'], $_REQUEST['roundj40'],
                  $_REQUEST['roundk40'], $_REQUEST['roundl40'], $_REQUEST['roundm40'],
                  $_REQUEST['roundn40'], $_REQUEST['roundo40'], $_REQUEST['roundp40'],
                  $_REQUEST['roundq40'], $_REQUEST['roundr40']]; 
$rounds40 = array_sum($rounds40array);

$rounds41array = [$_REQUEST['roundb41'], $_REQUEST['roundc41'], $_REQUEST['roundd41'],
                  $_REQUEST['rounde41'], $_REQUEST['roundf41'], $_REQUEST['roundg41'],
                  $_REQUEST['roundh41'], $_REQUEST['roundi41'], $_REQUEST['roundj41'],
                  $_REQUEST['roundk41'], $_REQUEST['roundl41'], $_REQUEST['roundm41'],
                  $_REQUEST['roundn41'], $_REQUEST['roundo41'], $_REQUEST['roundp41'],
                  $_REQUEST['roundq41'], $_REQUEST['roundr41']]; 
$rounds41 = array_sum($rounds41array);

$rounds42array = [$_REQUEST['roundb42'], $_REQUEST['roundc42'], $_REQUEST['roundd42'],
                  $_REQUEST['rounde42'], $_REQUEST['roundf42'], $_REQUEST['roundg42'],
                  $_REQUEST['roundh42'], $_REQUEST['roundi42'], $_REQUEST['roundj42'],
                  $_REQUEST['roundk42'], $_REQUEST['roundl42'], $_REQUEST['roundm42'],
                  $_REQUEST['roundn42'], $_REQUEST['roundo42'], $_REQUEST['roundp42'],
                  $_REQUEST['roundq42'], $_REQUEST['roundr42']]; 
$rounds42 = array_sum($rounds42array);

$rounds43array = [$_REQUEST['roundb43'], $_REQUEST['roundc43'], $_REQUEST['roundd43'],
                  $_REQUEST['rounde43'], $_REQUEST['roundf43'], $_REQUEST['roundg43'],
                  $_REQUEST['roundh43'], $_REQUEST['roundi43'], $_REQUEST['roundj43'],
                  $_REQUEST['roundk43'], $_REQUEST['roundl43'], $_REQUEST['roundm43'],
                  $_REQUEST['roundn43'], $_REQUEST['roundo43'], $_REQUEST['roundp43'],
                  $_REQUEST['roundq43'], $_REQUEST['roundr43']]; 
$rounds43 = array_sum($rounds43array);

$rounds44array = [$_REQUEST['roundb44'], $_REQUEST['roundc44'], $_REQUEST['roundd44'],
                  $_REQUEST['rounde44'], $_REQUEST['roundf44'], $_REQUEST['roundg44'],
                  $_REQUEST['roundh44'], $_REQUEST['roundi44'], $_REQUEST['roundj44'],
                  $_REQUEST['roundk44'], $_REQUEST['roundl44'], $_REQUEST['roundm44'],
                  $_REQUEST['roundn44'], $_REQUEST['roundo44'], $_REQUEST['roundp44'],
                  $_REQUEST['roundq44'], $_REQUEST['roundr44']]; 
$rounds44 = array_sum($rounds44array);

$rounds2array = [$rounds10 , $rounds11 , $rounds12 , $rounds13 , $rounds14 , $rounds15 , $rounds16 ,
                  $rounds17 , $rounds18 , $rounds19 , $rounds20 , $rounds21 , $rounds22 , $rounds23 ,
                  $rounds24 , $rounds25 , $rounds26 , $rounds27 , $rounds28 , $rounds29 , $rounds30 ,
                  $rounds31 , $rounds32 , $rounds33 , $rounds34 , $rounds35 , $rounds36 , $rounds37 ,
                  $rounds38 , $rounds39 , $rounds40 , $rounds41 , $rounds42 , $rounds43 , $rounds44];

$rounds2 = array_sum($rounds2array);
$_SESSION['rounds2'] = $rounds2;

$roundb3array =[$_REQUEST['roundb10'], $_REQUEST['roundb11'], $_REQUEST['roundb12'],
                $_REQUEST['roundb13'], $_REQUEST['roundb14'], $_REQUEST['roundb15'],
                $_REQUEST['roundb16'], $_REQUEST['roundb17'], $_REQUEST['roundb18'],
                $_REQUEST['roundb19'], $_REQUEST['roundb20'], $_REQUEST['roundb21'],
                $_REQUEST['roundb22'], $_REQUEST['roundb23'], $_REQUEST['roundb24'],
                $_REQUEST['roundb25'], $_REQUEST['roundb26'], $_REQUEST['roundb27'],
                $_REQUEST['roundb28'], $_REQUEST['roundb29'], $_REQUEST['roundb30'], 
                $_REQUEST['roundb31'], $_REQUEST['roundb32'], $_REQUEST['roundb33'], 
                $_REQUEST['roundb34'], $_REQUEST['roundb35'], $_REQUEST['roundb36'], 
                $_REQUEST['roundb37'], $_REQUEST['roundb38'], $_REQUEST['roundb39'], 
                $_REQUEST['roundb40'], $_REQUEST['roundb41'], $_REQUEST['roundb42'], 
                $_REQUEST['roundb43'], $_REQUEST['roundb44']]; 
$roundb3 = array_sum($roundb3array);

$roundc3array = [$_REQUEST['roundc10'], $_REQUEST['roundc11'], $_REQUEST['roundc12'],
$_REQUEST['roundc13'], $_REQUEST['roundc14'] , $_REQUEST['roundc15'],
$_REQUEST['roundc16'],$_REQUEST['roundc17'],$_REQUEST['roundc18'],
$_REQUEST['roundc19'],$_REQUEST['roundc20'],$_REQUEST['roundc21'],
$_REQUEST['roundc22'],$_REQUEST['roundc23'],$_REQUEST['roundc24'],
$_REQUEST['roundc25'] , $_REQUEST['roundc26'],$_REQUEST['roundc27'],
 $_REQUEST['roundc28'], $_REQUEST['roundc29'],
$_REQUEST['roundc30'], $_REQUEST['roundc31'] , $_REQUEST['roundc32'],
$_REQUEST['roundc33'],$_REQUEST['roundc34'],$_REQUEST['roundc35'],
$_REQUEST['roundc36'],$_REQUEST['roundc37'],$_REQUEST['roundc38'],
$_REQUEST['roundc39'],$_REQUEST['roundc40'],$_REQUEST['roundc41'],
$_REQUEST['roundc42'] , $_REQUEST['roundc43'], $_REQUEST['roundc44']]; 
$roundc3 = array_sum($roundc3array);

$roundd3array = [$_REQUEST['roundd10'], $_REQUEST['roundd11'], $_REQUEST['roundd12'],
$_REQUEST['roundd13'], $_REQUEST['roundd14'] , $_REQUEST['roundd15'],
$_REQUEST['roundd16'],$_REQUEST['roundd17'],$_REQUEST['roundd18'],
$_REQUEST['roundd19'],$_REQUEST['roundd20'],$_REQUEST['roundd21'],
$_REQUEST['roundd22'],$_REQUEST['roundd23'],$_REQUEST['roundd24'],
$_REQUEST['roundd25'] , $_REQUEST['roundd26'],$_REQUEST['roundd27'],
 $_REQUEST['roundd28'], $_REQUEST['roundd29'],
$_REQUEST['roundd30'], $_REQUEST['roundd31'] , $_REQUEST['roundd32'],
$_REQUEST['roundd33'],$_REQUEST['roundd34'],$_REQUEST['roundd35'],
$_REQUEST['roundd36'],$_REQUEST['roundd37'],$_REQUEST['roundd38'],
$_REQUEST['roundd39'],$_REQUEST['roundd40'],$_REQUEST['roundd41'],
$_REQUEST['roundd42'] , $_REQUEST['roundd43'], $_REQUEST['roundd44']]; 
$roundd3 = array_sum($roundd3array);

$rounde3array = [$_REQUEST['rounde10'], $_REQUEST['rounde11'], $_REQUEST['rounde12'],
$_REQUEST['rounde13'], $_REQUEST['rounde14'] , $_REQUEST['rounde15'],
$_REQUEST['rounde16'],$_REQUEST['rounde17'],$_REQUEST['rounde18'],
$_REQUEST['rounde19'],$_REQUEST['rounde20'],$_REQUEST['rounde21'],
$_REQUEST['rounde22'],$_REQUEST['rounde23'],$_REQUEST['rounde24'],
$_REQUEST['rounde25'] , $_REQUEST['rounde26'],$_REQUEST['rounde27'],
 $_REQUEST['rounde28'], $_REQUEST['rounde29'],
$_REQUEST['rounde30'], $_REQUEST['rounde31'] , $_REQUEST['rounde32'],
$_REQUEST['rounde33'],$_REQUEST['rounde34'],$_REQUEST['rounde35'],
$_REQUEST['rounde36'],$_REQUEST['rounde37'],$_REQUEST['rounde38'],
$_REQUEST['rounde39'],$_REQUEST['rounde40'],$_REQUEST['rounde41'],
$_REQUEST['rounde42'] , $_REQUEST['rounde43'], $_REQUEST['rounde44']]; 
$rounde3 = array_sum($rounde3array);

$roundf3array = [$_REQUEST['roundf10'], $_REQUEST['roundf11'], $_REQUEST['roundf12'],
$_REQUEST['roundf13'], $_REQUEST['roundf14'] , $_REQUEST['roundf15'],
$_REQUEST['roundf16'],$_REQUEST['roundf17'],$_REQUEST['roundf18'],
$_REQUEST['roundf19'],$_REQUEST['roundf20'],$_REQUEST['roundf21'],
$_REQUEST['roundf22'],$_REQUEST['roundf23'],$_REQUEST['roundf24'],
$_REQUEST['roundf25'] , $_REQUEST['roundf26'],$_REQUEST['roundf27'],
 $_REQUEST['roundf28'], $_REQUEST['roundf29'],
$_REQUEST['roundf30'], $_REQUEST['roundf31'] , $_REQUEST['roundf32'],
$_REQUEST['roundf33'],$_REQUEST['roundf34'],$_REQUEST['roundf35'],
$_REQUEST['roundf36'],$_REQUEST['roundf37'],$_REQUEST['roundf38'],
$_REQUEST['roundf39'],$_REQUEST['roundf40'],$_REQUEST['roundf41'],
$_REQUEST['roundf42'] , $_REQUEST['roundf43'], $_REQUEST['roundf44']]; 
$roundf3 = array_sum($roundf3array);

$roundg3array = [$_REQUEST['roundg10'], $_REQUEST['roundg11'], $_REQUEST['roundg12'],
$_REQUEST['roundg13'], $_REQUEST['roundg14'] , $_REQUEST['roundg15'],
$_REQUEST['roundg16'],$_REQUEST['roundg17'],$_REQUEST['roundg18'],
$_REQUEST['roundg19'],$_REQUEST['roundg20'],$_REQUEST['roundg21'],
$_REQUEST['roundg22'],$_REQUEST['roundg23'],$_REQUEST['roundg24'],
$_REQUEST['roundg25'] , $_REQUEST['roundg26'],$_REQUEST['roundg27'],
$_REQUEST['roundg28'], $_REQUEST['roundg29'],
$_REQUEST['roundg30'], $_REQUEST['roundg31'] , $_REQUEST['roundg32'],
$_REQUEST['roundg33'],$_REQUEST['roundg34'],$_REQUEST['roundg35'],
$_REQUEST['roundg36'],$_REQUEST['roundg37'],$_REQUEST['roundg38'],
$_REQUEST['roundg39'],$_REQUEST['roundg40'],$_REQUEST['roundg41'],
$_REQUEST['roundg42'] , $_REQUEST['roundg43'], $_REQUEST['roundg44']]; 
$roundg3 = array_sum($roundg3array);

$roundh3array = [$_REQUEST['roundh10'], $_REQUEST['roundh11'], $_REQUEST['roundh12'],
$_REQUEST['roundh13'], $_REQUEST['roundh14'] , $_REQUEST['roundh15'],
$_REQUEST['roundh16'],$_REQUEST['roundh17'],$_REQUEST['roundh18'],
$_REQUEST['roundh19'],$_REQUEST['roundh20'],$_REQUEST['roundh21'],
$_REQUEST['roundh22'],$_REQUEST['roundh23'],$_REQUEST['roundh24'],
$_REQUEST['roundh25'] , $_REQUEST['roundh26'],$_REQUEST['roundh27'],
$_REQUEST['roundh28'], $_REQUEST['roundh29'],
$_REQUEST['roundh30'], $_REQUEST['roundh31'] , $_REQUEST['roundh32'],
$_REQUEST['roundh33'],$_REQUEST['roundh34'],$_REQUEST['roundh35'],
$_REQUEST['roundh36'],$_REQUEST['roundh37'],$_REQUEST['roundh38'],
$_REQUEST['roundh39'],$_REQUEST['roundh40'],$_REQUEST['roundh41'],
$_REQUEST['roundh42'] , $_REQUEST['roundh43'], $_REQUEST['roundh44']]; 
$roundh3 = array_sum($roundh3array);

$roundi3array = [$_REQUEST['roundi10'], $_REQUEST['roundi11'], $_REQUEST['roundi12'],
$_REQUEST['roundi13'], $_REQUEST['roundi14'] , $_REQUEST['roundi15'],
$_REQUEST['roundi16'],$_REQUEST['roundi17'],$_REQUEST['roundi18'],
$_REQUEST['roundi19'],$_REQUEST['roundi20'],$_REQUEST['roundi21'],
$_REQUEST['roundi22'],$_REQUEST['roundi23'],$_REQUEST['roundi24'],
$_REQUEST['roundi25'] , $_REQUEST['roundi26'],$_REQUEST['roundi27'],
$_REQUEST['roundi28'], $_REQUEST['roundi29'],
$_REQUEST['roundi30'], $_REQUEST['roundi31'] , $_REQUEST['roundi32'],
$_REQUEST['roundi33'],$_REQUEST['roundi34'],$_REQUEST['roundi35'],
$_REQUEST['roundi36'],$_REQUEST['roundi37'],$_REQUEST['roundi38'],
$_REQUEST['roundi39'],$_REQUEST['roundi40'],$_REQUEST['roundi41'],
$_REQUEST['roundi42'] , $_REQUEST['roundi43'], $_REQUEST['roundi44']]; 
$roundi3 = array_sum($roundi3array);

$roundj3array = [$_REQUEST['roundj10'], $_REQUEST['roundj11'], $_REQUEST['roundj12'],
$_REQUEST['roundj13'], $_REQUEST['roundj14'] , $_REQUEST['roundj15'],
$_REQUEST['roundj16'],$_REQUEST['roundj17'],$_REQUEST['roundj18'],
$_REQUEST['roundj19'],$_REQUEST['roundj20'],$_REQUEST['roundj21'],
$_REQUEST['roundj22'],$_REQUEST['roundj23'],$_REQUEST['roundj24'],
$_REQUEST['roundj25'] , $_REQUEST['roundj26'],$_REQUEST['roundj27'],
$_REQUEST['roundj28'], $_REQUEST['roundj29'],
$_REQUEST['roundj30'], $_REQUEST['roundj31'] , $_REQUEST['roundj32'],
$_REQUEST['roundj33'],$_REQUEST['roundj34'],$_REQUEST['roundj35'],
$_REQUEST['roundj36'],$_REQUEST['roundj37'],$_REQUEST['roundj38'],
$_REQUEST['roundj39'],$_REQUEST['roundj40'],$_REQUEST['roundj41'],
$_REQUEST['roundj42'] , $_REQUEST['roundj43'], $_REQUEST['roundj44']]; 
$roundj3 = array_sum($roundj3array);

$roundk3array = [$_REQUEST['roundk10'], $_REQUEST['roundk11'], $_REQUEST['roundk12'],
                 $_REQUEST['roundk13'], $_REQUEST['roundk14'], $_REQUEST['roundk15'],
                 $_REQUEST['roundk16'], $_REQUEST['roundk17'], $_REQUEST['roundk18'],
                 $_REQUEST['roundk19'], $_REQUEST['roundk20'], $_REQUEST['roundk21'],
                 $_REQUEST['roundk22'], $_REQUEST['roundk23'], $_REQUEST['roundk24'],
                 $_REQUEST['roundk25'], $_REQUEST['roundk26'], $_REQUEST['roundk27'],
                 $_REQUEST['roundk28'], $_REQUEST['roundk29'], $_REQUEST['roundk30'], 
                 $_REQUEST['roundk31'], $_REQUEST['roundk32'], $_REQUEST['roundk33'], 
                 $_REQUEST['roundk34'], $_REQUEST['roundk35'], $_REQUEST['roundk36'], 
                 $_REQUEST['roundk37'], $_REQUEST['roundk38'], $_REQUEST['roundk39'], 
                 $_REQUEST['roundk40'], $_REQUEST['roundk41'], $_REQUEST['roundk42'], 
                 $_REQUEST['roundk43'], $_REQUEST['roundk44']]; 
$roundk3 = array_sum($roundk3array);

$roundl3array = [$_REQUEST['roundl10'], $_REQUEST['roundl11'], $_REQUEST['roundl12'],
$_REQUEST['roundl13'], $_REQUEST['roundl14'] , $_REQUEST['roundl15'],
$_REQUEST['roundl16'],$_REQUEST['roundl17'],$_REQUEST['roundl18'],
$_REQUEST['roundl19'],$_REQUEST['roundl20'],$_REQUEST['roundl21'],
$_REQUEST['roundl22'],$_REQUEST['roundl23'],$_REQUEST['roundl24'],
$_REQUEST['roundl25'] , $_REQUEST['roundl26'],$_REQUEST['roundl27'],
$_REQUEST['roundl28'], $_REQUEST['roundl29'],
$_REQUEST['roundl30'], $_REQUEST['roundl31'] , $_REQUEST['roundl32'],
$_REQUEST['roundl33'],$_REQUEST['roundl34'],$_REQUEST['roundl35'],
$_REQUEST['roundl36'],$_REQUEST['roundl37'],$_REQUEST['roundl38'],
$_REQUEST['roundl39'],$_REQUEST['roundl40'],$_REQUEST['roundl41'],
$_REQUEST['roundl42'] , $_REQUEST['roundl43'], $_REQUEST['roundl44']]; 
$roundl3 = array_sum($roundl3array);

$roundm3array = [$_REQUEST['roundm10'], $_REQUEST['roundm11'], $_REQUEST['roundm12'],
$_REQUEST['roundm13'], $_REQUEST['roundm14'] , $_REQUEST['roundm15'],
$_REQUEST['roundm16'],$_REQUEST['roundm17'],$_REQUEST['roundm18'],
$_REQUEST['roundm19'],$_REQUEST['roundm20'],$_REQUEST['roundm21'],
$_REQUEST['roundm22'],$_REQUEST['roundm23'],$_REQUEST['roundm24'],
$_REQUEST['roundm25'] , $_REQUEST['roundm26'],$_REQUEST['roundm27'],
$_REQUEST['roundm28'], $_REQUEST['roundm29'],
$_REQUEST['roundm30'], $_REQUEST['roundm31'] , $_REQUEST['roundm32'],
$_REQUEST['roundm33'],$_REQUEST['roundm34'],$_REQUEST['roundm35'],
$_REQUEST['roundm36'],$_REQUEST['roundm37'],$_REQUEST['roundm38'],
$_REQUEST['roundm39'],$_REQUEST['roundm40'],$_REQUEST['roundm41'],
$_REQUEST['roundm42'] , $_REQUEST['roundm43'], $_REQUEST['roundm44']]; 
$roundm3 = array_sum($roundm3array);


$roundn3array = [$_REQUEST['roundn10'], $_REQUEST['roundn11'], $_REQUEST['roundn12'],
                 $_REQUEST['roundn13'], $_REQUEST['roundn14'], $_REQUEST['roundn15'],
                 $_REQUEST['roundn16'], $_REQUEST['roundn17'], $_REQUEST['roundn18'],
                 $_REQUEST['roundn19'], $_REQUEST['roundn20'], $_REQUEST['roundn21'],
                 $_REQUEST['roundn22'], $_REQUEST['roundn23'], $_REQUEST['roundn24'],
                 $_REQUEST['roundn25'], $_REQUEST['roundn26'], $_REQUEST['roundn27'],
                 $_REQUEST['roundn28'], $_REQUEST['roundn29'], $_REQUEST['roundn30'], 
                 $_REQUEST['roundn31'], $_REQUEST['roundn32'], $_REQUEST['roundn33'], 
                 $_REQUEST['roundn34'], $_REQUEST['roundn35'], $_REQUEST['roundn36'], 
                 $_REQUEST['roundn37'], $_REQUEST['roundn38'], $_REQUEST['roundn39'], 
                 $_REQUEST['roundn40'], $_REQUEST['roundn41'], $_REQUEST['roundn42'], 
                 $_REQUEST['roundn43'], $_REQUEST['roundn44']]; 
$roundn3 = array_sum($roundn3array);

$roundo3array = [$_REQUEST['roundo10'], $_REQUEST['roundo11'], $_REQUEST['roundo12'],
$_REQUEST['roundo13'], $_REQUEST['roundo14'] , $_REQUEST['roundo15'],
$_REQUEST['roundo16'],$_REQUEST['roundo17'],$_REQUEST['roundo18'],
$_REQUEST['roundo19'],$_REQUEST['roundo20'],$_REQUEST['roundo21'],
$_REQUEST['roundo22'],$_REQUEST['roundo23'],$_REQUEST['roundo24'],
$_REQUEST['roundo25'] , $_REQUEST['roundo26'],$_REQUEST['roundo27'],
$_REQUEST['roundo28'], $_REQUEST['roundo29'],
$_REQUEST['roundo30'], $_REQUEST['roundo31'] , $_REQUEST['roundo32'],
$_REQUEST['roundo33'],$_REQUEST['roundo34'],$_REQUEST['roundo35'],
$_REQUEST['roundo36'],$_REQUEST['roundo37'],$_REQUEST['roundo38'],
$_REQUEST['roundo39'],$_REQUEST['roundo40'],$_REQUEST['roundo41'],
$_REQUEST['roundo42'] , $_REQUEST['roundo43'], $_REQUEST['roundo44']]; 
$roundo3 = array_sum($roundo3array);

$roundp3array = [$_REQUEST['roundp10'], $_REQUEST['roundp11'], $_REQUEST['roundp12'],
$_REQUEST['roundp13'], $_REQUEST['roundp14'] , $_REQUEST['roundp15'],
$_REQUEST['roundp16'],$_REQUEST['roundp17'],$_REQUEST['roundp18'],
$_REQUEST['roundp19'],$_REQUEST['roundp20'],$_REQUEST['roundp21'],
$_REQUEST['roundp22'],$_REQUEST['roundp23'],$_REQUEST['roundp24'],
$_REQUEST['roundp25'] , $_REQUEST['roundp26'],$_REQUEST['roundp27'],
$_REQUEST['roundp28'], $_REQUEST['roundp29'],
$_REQUEST['roundp30'], $_REQUEST['roundp31'] , $_REQUEST['roundp32'],
$_REQUEST['roundp33'],$_REQUEST['roundp34'],$_REQUEST['roundp35'],
$_REQUEST['roundp36'],$_REQUEST['roundp37'],$_REQUEST['roundp38'],
$_REQUEST['roundp39'],$_REQUEST['roundp40'],$_REQUEST['roundp41'],
$_REQUEST['roundp42'] , $_REQUEST['roundp43'], $_REQUEST['roundp44']]; 
$roundp3 = array_sum($roundp3array);

$roundq3array = [$_REQUEST['roundq10'], $_REQUEST['roundq11'], $_REQUEST['roundq12'],
$_REQUEST['roundq13'], $_REQUEST['roundq14'] , $_REQUEST['roundq15'],
$_REQUEST['roundq16'],$_REQUEST['roundq17'],$_REQUEST['roundq18'],
$_REQUEST['roundq19'],$_REQUEST['roundq20'],$_REQUEST['roundq21'],
$_REQUEST['roundq22'],$_REQUEST['roundq23'],$_REQUEST['roundq24'],
$_REQUEST['roundq25'] , $_REQUEST['roundq26'],$_REQUEST['roundq27'],
$_REQUEST['roundq28'], $_REQUEST['roundq29'],
$_REQUEST['roundq30'], $_REQUEST['roundq31'] , $_REQUEST['roundq32'],
$_REQUEST['roundq33'],$_REQUEST['roundq34'],$_REQUEST['roundq35'],
$_REQUEST['roundq36'],$_REQUEST['roundq37'],$_REQUEST['roundq38'],
$_REQUEST['roundq39'],$_REQUEST['roundq40'],$_REQUEST['roundq41'],
$_REQUEST['roundq42'] , $_REQUEST['roundq43'], $_REQUEST['roundq44']]; 
$roundq3 = array_sum($roundq3array);

$roundr3array = [$_REQUEST['roundr10'], $_REQUEST['roundr11'], $_REQUEST['roundr12'],
$_REQUEST['roundr13'], $_REQUEST['roundr14'] , $_REQUEST['roundr15'],
$_REQUEST['roundr16'],$_REQUEST['roundr17'],$_REQUEST['roundr18'],
$_REQUEST['roundr19'],$_REQUEST['roundr20'],$_REQUEST['roundr21'],
$_REQUEST['roundr22'],$_REQUEST['roundr23'],$_REQUEST['roundr24'],
$_REQUEST['roundr25'] , $_REQUEST['roundr26'],$_REQUEST['roundr27'],
$_REQUEST['roundr28'], $_REQUEST['roundr29'],
$_REQUEST['roundr30'], $_REQUEST['roundr31'] , $_REQUEST['roundr32'],
$_REQUEST['roundr33'],$_REQUEST['roundr34'],$_REQUEST['roundr35'],
$_REQUEST['roundr36'],$_REQUEST['roundr37'],$_REQUEST['roundr38'],
$_REQUEST['roundr39'],$_REQUEST['roundr40'],$_REQUEST['roundr41'],
$_REQUEST['roundr42'] , $_REQUEST['roundr43'], $_REQUEST['roundr44']]; 
$roundr3 = array_sum($roundr3array);


// MAT : = (B3*B4)*$X$5*$Y$5
$roundb5 = floatval($roundb3) * floatval($_REQUEST['roundb4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundc5 = floatval($roundc3) * floatval($_REQUEST['roundc4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundd5 = floatval($rounde3) * floatval($_REQUEST['rounde4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$rounde5 = floatval($roundd3) * floatval($_REQUEST['roundd4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundf5 = floatval($roundf3) * floatval($_REQUEST['roundf4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundg5 = floatval($roundg3) * floatval($_REQUEST['roundg4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundh5 = floatval($roundh3) * floatval($_REQUEST['roundh4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundi5 = floatval($roundj3) * floatval($_REQUEST['roundj4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundj5 = floatval($roundi3) * floatval($_REQUEST['roundi4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundk5 = floatval($roundk3) * floatval($_REQUEST['roundk4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundl5 = floatval($roundl3) * floatval($_REQUEST['roundl4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundm5 = floatval($roundm3) * floatval($_REQUEST['roundm4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundn5 = floatval($roundn3) * floatval($_REQUEST['roundn4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundo5 = floatval($roundo3) * floatval($_REQUEST['roundo4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundp5 = floatval($roundp3) * floatval($_REQUEST['roundp4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundq5 = floatval($roundq3) * floatval($_REQUEST['roundq4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);
$roundr5 = floatval($roundr3) * floatval($_REQUEST['roundr4']) * floatval($_REQUEST['roundx5']) * floatval($_REQUEST['roundy5']);

$rounde2array =  [$roundb5 , $roundc5 , $roundd5 , $rounde5 , $roundf5 , $roundg5 , $roundh5 ,
                  $roundi5 , $roundj5 , $roundk5 , $roundl5 , $roundm5 , $roundn5 , $roundo5 ,
                  $roundp5 , $roundq5 , $roundr5];
$rounde2 = array_sum($rounde2array);

$roundb7 = floatval($roundb3) * floatval($_REQUEST['roundb6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundc7 = floatval($roundc3) * floatval($_REQUEST['roundc6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundd7 = floatval($roundd3) * floatval($_REQUEST['roundd6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$rounde7 = floatval($rounde3) * floatval($_REQUEST['rounde6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundf7 = floatval($roundf3) * floatval($_REQUEST['roundf6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundg7 = floatval($roundg3) * floatval($_REQUEST['roundg6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundh7 = floatval($roundh3) * floatval($_REQUEST['roundh6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundi7 = floatval($roundi3) * floatval($_REQUEST['roundi6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundj7 = floatval($roundj3) * floatval($_REQUEST['roundj6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundk7 = floatval($roundk3) * floatval($_REQUEST['roundk6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundl7 = floatval($roundl3) * floatval($_REQUEST['roundl6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundm7 = floatval($roundm3) * floatval($_REQUEST['roundm6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundn7 = floatval($roundn3) * floatval($_REQUEST['roundn6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundo7 = floatval($roundo3) * floatval($_REQUEST['roundo6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundp7 = floatval($roundp3) * floatval($_REQUEST['roundp6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundq7 = floatval($roundq3) * floatval($_REQUEST['roundq6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);
$roundr7 = floatval($roundr3) * floatval($_REQUEST['roundr6']) * floatval($_REQUEST['roundx7']) * floatval($_REQUEST['roundy7']);

$roundn2array =  [$roundb7 , $roundc7 , $roundd7 , $rounde7 , $roundf7 , $roundg7 , $roundh7 ,
                  $roundi7 , $roundj7 , $roundk7 , $roundl7 , $roundm7 , $roundn7 , $roundo7 ,
                  $roundp7 , $roundq7 , $roundr7];
$roundn2 = array_sum($roundn2array);

$roundr1 = floatval(isset($_SESSION['jobinfoe26']) ? $_SESSION['jobinfoe26'] : ''); 
$roundq2 = round(($roundn2 / $roundr1), 4);   
$rounde1 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-';

$_SESSION['rounde2'] = $rounde2;
$_SESSION['roundn2'] = $roundn2;

}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .roundsubmit {
        padding: 10px 20px;
        display: inline-block;
        margin: auto;
        border-radius: 50px !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset;
        background: linear-gradient(-45deg,#037ffc ,#0b11bf );
        color: white;
        text-align: center;
        line-height: normal;
        font-family: 'Raleway', sans-serif;
        font-size: 1em;
        font-weight: bold;
        text-decoration: none;
        text-shadow: 0 1px 0 rgba(255,255,255,.8);
        vertical-align: middle;
        outline: none;
        position: fixed;
        bottom: 10px;
        right: 10px;    
    }
</style>

<body>
    <div class="section">
        <form action="" method='POST' >
        <h1 style="text-align: center;position:sticky;top:0;background-color:white;">Round Sheet</h1>
        <table id="data-table_1" border="1">
            <tr style="position:sticky;top:8.5%;background-color:white;">
                <td></td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
                <td>W</td>
                <td>X</td>
                <td>Y</td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">1</td>
                <td></td>
                <td>JOB NAME:</td>
                <td><input type="text" name="rounde1" class="custom-input" readonly value="<?php if(isset($rounde1)){echo $rounde1 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>hours@</td>
                <td><input type="text" name="roundr1" class="custom-input" readonly value="<?php if(isset($roundr1)){ echo $roundr1 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>OLD Factor</th>
                <th>Factor 4/2021</th>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">2</td>
                <th></th>
                <td>New Material = </td>
                <td><input type="text" name="rounde2" class="custom-input" readonly value="<?php if(isset($rounde2)){ echo $rounde2 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Net Labor = </td>
                <td></td>
                <td></td>
                <td><input type="text" name="roundn2" class="quantity" step="any" readonly value="<?php if(isset($roundn2)){ echo $roundn2 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td><input type="text" name="roundq2" readonly value="<?php if(isset($roundq2)){ echo $roundq2 ;} else { echo 0 ;} ?>"></td>
                <td></td>
                <td><input type="text" name="rounds2" readonly value="<?php if(isset($rounds2)){echo $rounds2 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">3</td>
                <td>L.F.</td>
                <td><input type="text" name="roundb3" readonly value="<?php if(isset($_POST['roundb3'])){echo $roundb3 ;}  ?>"></td>
                <td><input type="text" name="roundc3" readonly value="<?php if(isset($_POST['roundc3'])){echo $roundc3 ;}   ?>"></td>
                <td><input type="text" name="roundd3" readonly value="<?php if(isset($_POST['roundd3'])){echo $roundd3 ;}   ?>"></td>
                <td><input type="text" name="rounde3" readonly value="<?php if(isset($_POST['rounde3'])){echo $rounde3 ;}   ?>"></td>
                <td><input type="text" name="roundf3" readonly value="<?php if(isset($_POST['roundf3'])){echo $roundf3 ;}   ?>"></td>
                <td><input type="text" name="roundg3" readonly value="<?php if(isset($_POST['roundg3'])){echo $roundg3 ;}   ?>"></td>
                <td><input type="text" name="roundh3" readonly value="<?php if(isset($_POST['roundh3'])){echo $roundh3 ;}   ?>"></td>
                <td><input type="text" name="roundi3" readonly value="<?php if(isset($_POST['roundi3'])){echo $roundi3 ;}   ?>"></td>
                <td><input type="text" name="roundj3" readonly value="<?php if(isset($_POST['roundj3'])){echo $roundj3 ;}   ?>"></td>
                <td><input type="text" name="roundk3" readonly value="<?php if(isset($_POST['roundk3'])){echo $roundk3 ;}   ?>"></td>
                <td><input type="text" name="roundl3" readonly value="<?php if(isset($_POST['roundl3'])){echo $roundl3 ;}   ?>"></td>
                <td><input type="text" name="roundm3" readonly value="<?php if(isset($_POST['roundm3'])){echo $roundm3 ;}   ?>"></td>
                <td><input type="text" name="roundn3" readonly value="<?php if(isset($_POST['roundn3'])){echo $roundn3 ;}   ?>"></td>
                <td><input type="text" name="roundo3" readonly value="<?php if(isset($_POST['roundo3'])){echo $roundo3 ;}   ?>"></td>
                <td><input type="text" name="roundp3" readonly value="<?php if(isset($_POST['roundp3'])){echo $roundp3 ;}   ?>"></td>
                <td><input type="text" name="roundq3" readonly value="<?php if(isset($_POST['roundq3'])){echo $roundq3 ;}   ?>"></td>
                <td><input type="text" name="roundr3" readonly value="<?php if(isset($_POST['roundr3'])){echo $roundr3 ;}   ?>"></td>
                <td><input type="text" name="rounds3" readonly value="<?php if(isset($rounds3)){echo $rounds3 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">4</td>
                <td>mat factor</td>
                <td><input type="text" name="roundb4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundb4'])){ echo $_REQUEST['roundb4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundc4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundc4'])){ echo $_REQUEST['roundc4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundd4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundd4'])){ echo $_REQUEST['roundd4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="rounde4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['rounde4'])){ echo $_REQUEST['rounde4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundf4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundf4'])){ echo $_REQUEST['roundf4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundg4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundg4'])){ echo $_REQUEST['roundg4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundh4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundh4'])){ echo $_REQUEST['roundh4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundi4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundi4'])){ echo $_REQUEST['roundi4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundj4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundj4'])){ echo $_REQUEST['roundj4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundk4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundk4'])){ echo $_REQUEST['roundk4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundl4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundl4'])){ echo $_REQUEST['roundl4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundm4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundm4'])){ echo $_REQUEST['roundm4'] ;} else{ echo 1 ;} ?>" ></td>
                <td><input type="text" name="roundn4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundn4'])){ echo $_REQUEST['roundn4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundo4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundo4'])){ echo $_REQUEST['roundo4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundp4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundp4'])){ echo $_REQUEST['roundp4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundq4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundq4'])){ echo $_REQUEST['roundq4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundr4"  class="quantity" step="any" value="<?php if(isset($_REQUEST['roundr4'])){ echo $_REQUEST['roundr4'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="rounds4" value="<?php if(isset($rounds4)){echo $rounds4 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">5</td>
                <td>MAT.</td>
                <td><input type="text" name="roundb5" readonly value="<?php if(isset($_POST['roundb5'])){echo $roundb5 ;}   ?>"></td>
                <td><input type="text" name="roundc5" readonly value="<?php if(isset($_POST['roundc5'])){echo $roundc5 ;}   ?>"></td>
                <td><input type="text" name="roundd5" readonly value="<?php if(isset($_POST['roundd5'])){echo $roundd5 ;}   ?>"></td>
                <td><input type="text" name="rounde5" readonly value="<?php if(isset($_POST['rounde5'])){echo $rounde5 ;}   ?>"></td>
                <td><input type="text" name="roundf5" readonly value="<?php if(isset($_POST['roundf5'])){echo $roundf5 ;}   ?>"></td>
                <td><input type="text" name="roundg5" readonly value="<?php if(isset($_POST['roundg5'])){echo $roundg5 ;}   ?>"></td>
                <td><input type="text" name="roundh5" readonly value="<?php if(isset($_POST['roundh5'])){echo $roundh5 ;}   ?>"></td>
                <td><input type="text" name="roundi5" readonly value="<?php if(isset($_POST['roundi5'])){echo $roundi5 ;}   ?>"></td>
                <td><input type="text" name="roundj5" readonly value="<?php if(isset($_POST['roundj5'])){echo $roundj5 ;}   ?>"></td>
                <td><input type="text" name="roundk5" readonly value="<?php if(isset($_POST['roundk5'])){echo $roundk5 ;}   ?>"></td>
                <td><input type="text" name="roundl5" readonly value="<?php if(isset($_POST['roundl5'])){echo $roundl5 ;}   ?>"></td>
                <td><input type="text" name="roundm5" readonly value="<?php if(isset($_POST['roundm5'])){echo $roundm5 ;}   ?>"></td>
                <td><input type="text" name="roundn5" readonly value="<?php if(isset($_POST['roundn5'])){echo $roundn5 ;}   ?>"></td>
                <td><input type="text" name="roundo5" readonly value="<?php if(isset($_POST['roundo5'])){echo $roundo5 ;}   ?>"></td>
                <td><input type="text" name="roundp5" readonly value="<?php if(isset($_POST['roundp5'])){echo $roundp5 ;}   ?>"></td>
                <td><input type="text" name="roundq5" readonly value="<?php if(isset($_POST['roundq5'])){echo $roundq5 ;}   ?>"></td>
                <td><input type="text" name="roundr5" readonly value="<?php if(isset($_POST['roundr5'])){echo $roundr5 ;}   ?>"></td>
                <td><input type="text" name="rounds5" readonly value="<?php if(isset($rounds5)){echo $rounds5 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" name="roundx5" class="quantity" step="any" value="<?php if(isset($_POST['roundx5'])){echo $_POST['roundx5'];} else{ echo 1 ;}?>"></td>
                <td><input type="text" name="roundy5" class="quantity" step="any" value="<?php if(isset($_POST['roundy5'])){echo $_POST['roundy5'];} else{ echo 1 ;}?>"></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">6</td>
                <td>Lab factor</td>
                <td><input type="text" name="roundb6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundb6'])){ echo $_REQUEST['roundb6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundc6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundc6'])){ echo $_REQUEST['roundc6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundd6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundd6'])){ echo $_REQUEST['roundd6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="rounde6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['rounde6'])){ echo $_REQUEST['rounde6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundf6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundf6'])){ echo $_REQUEST['roundf6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundg6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundg6'])){ echo $_REQUEST['roundg6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundh6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundh6'])){ echo $_REQUEST['roundh6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundi6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundi6'])){ echo $_REQUEST['roundi6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundj6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundj6'])){ echo $_REQUEST['roundj6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundk6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundk6'])){ echo $_REQUEST['roundk6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundl6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundl6'])){ echo $_REQUEST['roundl6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundm6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundm6'])){ echo $_REQUEST['roundm6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundn6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundn6'])){ echo $_REQUEST['roundn6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundo6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundo6'])){ echo $_REQUEST['roundo6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundp6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundp6'])){ echo $_REQUEST['roundp6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundq6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundq6'])){ echo $_REQUEST['roundq6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="roundr6" class="quantity" step="any" class="custom-input" value="<?php if(isset($_REQUEST['roundr6'])){ echo $_REQUEST['roundr6'] ;} else{ echo 1 ;} ?>"></td>
                <td><input type="text" name="rounds6" class="custom-input" value="<?php if(isset($rounds6)){echo $rounds6 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">7</td>
                <td>LAB.</td>
                <td><input type="text" name="roundb7" readonly value="<?php if(isset($_POST['roundb7'])){echo $roundb7 ;}   ?>"></td>
                <td><input type="text" name="roundc7" readonly value="<?php if(isset($_POST['roundc7'])){echo $roundc7 ;}   ?>"></td>
                <td><input type="text" name="roundd7" readonly value="<?php if(isset($_POST['roundd7'])){echo $roundd7 ;}   ?>"></td>
                <td><input type="text" name="rounde7" readonly value="<?php if(isset($_POST['rounde7'])){echo $rounde7 ;}   ?>"></td>
                <td><input type="text" name="roundf7" readonly value="<?php if(isset($_POST['roundf7'])){echo $roundf7 ;}   ?>"></td>
                <td><input type="text" name="roundg7" readonly value="<?php if(isset($_POST['roundg7'])){echo $roundg7 ;}   ?>"></td>
                <td><input type="text" name="roundh7" readonly value="<?php if(isset($_POST['roundh7'])){echo $roundh7 ;}   ?>"></td>
                <td><input type="text" name="roundi7" readonly value="<?php if(isset($_POST['roundi7'])){echo $roundi7 ;}   ?>"></td>
                <td><input type="text" name="roundj7" readonly value="<?php if(isset($_POST['roundj7'])){echo $roundj7 ;}   ?>"></td>
                <td><input type="text" name="roundk7" readonly value="<?php if(isset($_POST['roundk7'])){echo $roundk7 ;}   ?>"></td>
                <td><input type="text" name="roundl7" readonly value="<?php if(isset($_POST['roundl7'])){echo $roundl7 ;}   ?>"></td>
                <td><input type="text" name="roundm7" readonly value="<?php if(isset($_POST['roundm7'])){echo $roundm7 ;}   ?>"></td>
                <td><input type="text" name="roundn7" readonly value="<?php if(isset($_POST['roundn7'])){echo $roundn7 ;}   ?>"></td>
                <td><input type="text" name="roundo7" readonly value="<?php if(isset($_POST['roundo7'])){echo $roundo7 ;}   ?>"></td>
                <td><input type="text" name="roundp7" readonly value="<?php if(isset($_POST['roundp7'])){echo $roundp7 ;}   ?>"></td>
                <td><input type="text" name="roundq7" readonly value="<?php if(isset($_POST['roundq7'])){echo $roundq7 ;}   ?>"></td>
                <td><input type="text" name="roundr7" readonly value="<?php if(isset($_POST['roundr7'])){echo $roundr7 ;}   ?>"></td>
                <td><input type="text" name="rounds7" readonly value="<?php if(isset($rounds7)){echo $rounds7 ;} else { echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" name="roundx7" class="quantity" step="any" value="<?php if(isset($_POST['roundx7'])){echo $_POST['roundx7'] ;} else{ echo 1 ;}?>"></td>
                <td><input type="text" name="roundy7" class="quantity" step="any" value="<?php if(isset($_POST['roundy7'])){echo $_POST['roundy7'] ;} else{ echo 1 ;}?>"></td>
            </tr>
            <tr style="position:sticky; top:0; background-color:white;">
            <td style="position:sticky;left:0;background-color:white;">8</td>
                <th style="position:sticky; left:0; background-color:white;">Sheet</th>
                <th><input type="text" name="name" class="custom-input" value="4" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="8" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="6" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="10" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="12" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="14" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="16" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="18" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="20" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="22" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="24" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="26" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="28" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="30" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="32" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="34" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="36" readonly></th>
                <th><input type="text" name="name" class="custom-input" value="Total" readonlys></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
            <td style="position:sticky;left:0;background-color:white;">9</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb10" class="custom-input" value="<?php if(isset($_POST['roundb10'])){echo $_POST['roundb10'] ;}   ?>"></td>
                <td><input type="text" name="roundc10" class="custom-input" value="<?php if(isset($_POST['roundc10'])){echo $_POST['roundc10'] ;}   ?>"></td>
                <td><input type="text" name="roundd10" class="custom-input" value="<?php if(isset($_POST['roundd10'])){echo $_POST['roundd10'] ;}   ?>"></td>
                <td><input type="text" name="rounde10" class="custom-input" value="<?php if(isset($_POST['rounde10'])){echo $_POST['rounde10'] ;}   ?>"></td>
                <td><input type="text" name="roundf10" class="custom-input" value="<?php if(isset($_POST['roundf10'])){echo $_POST['roundf10'] ;}   ?>"></td>
                <td><input type="text" name="roundg10" class="custom-input" value="<?php if(isset($_POST['roundg10'])){echo $_POST['roundg10'] ;}   ?>"></td>
                <td><input type="text" name="roundh10" class="custom-input" value="<?php if(isset($_POST['roundh10'])){echo $_POST['roundh10'] ;}   ?>"></td>
                <td><input type="text" name="roundi10" class="custom-input" value="<?php if(isset($_POST['roundi10'])){echo $_POST['roundi10'] ;}   ?>"></td>
                <td><input type="text" name="roundj10" class="custom-input" value="<?php if(isset($_POST['roundj10'])){echo $_POST['roundj10'] ;}   ?>"></td>
                <td><input type="text" name="roundk10" class="custom-input" value="<?php if(isset($_POST['roundk10'])){echo $_POST['roundk10'] ;}   ?>"></td>
                <td><input type="text" name="roundl10" class="custom-input" value="<?php if(isset($_POST['roundl10'])){echo $_POST['roundl10'] ;}   ?>"></td>
                <td><input type="text" name="roundm10" class="custom-input" value="<?php if(isset($_POST['roundm10'])){echo $_POST['roundm10'] ;}   ?>"></td>
                <td><input type="text" name="roundn10" class="custom-input" value="<?php if(isset($_POST['roundn10'])){echo $_POST['roundn10'] ;}   ?>"></td>
                <td><input type="text" name="roundo10" class="custom-input" value="<?php if(isset($_POST['roundo10'])){echo $_POST['roundo10'] ;}   ?>"></td>
                <td><input type="text" name="roundp10" class="custom-input" value="<?php if(isset($_POST['roundp10'])){echo $_POST['roundp10'] ;}   ?>"></td>
                <td><input type="text" name="roundq10" class="custom-input" value="<?php if(isset($_POST['roundq10'])){echo $_POST['roundq10'] ;}   ?>"></td>
                <td><input type="text" name="roundr10" class="custom-input" value="<?php if(isset($_POST['roundr10'])){echo $_POST['roundr10'] ;}   ?>"></td>
                <td><input type="text" name="rounds10" class="custom-input" value="<?php if(isset($rounds10)){echo $rounds10 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position:sticky;left:0;background-color:white;">10</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb11" class="custom-input" value="<?php if(isset($_POST['roundb11'])){echo $_POST['roundb11']  ;}   ?>"></td>
                <td><input type="text" name="roundc11" class="custom-input" value="<?php if(isset($_POST['roundc11'])){echo $_POST['roundc11']  ;}   ?>"></td>
                <td><input type="text" name="roundd11" class="custom-input" value="<?php if(isset($_POST['roundd11'])){echo $_POST['roundd11']  ;}   ?>"></td>
                <td><input type="text" name="rounde11" class="custom-input" value="<?php if(isset($_POST['rounde11'])){echo $_POST['rounde11']  ;}   ?>"></td>
                <td><input type="text" name="roundf11" class="custom-input" value="<?php if(isset($_POST['roundf11'])){echo $_POST['roundf11']  ;}   ?>"></td>
                <td><input type="text" name="roundg11" class="custom-input" value="<?php if(isset($_POST['roundg11'])){echo $_POST['roundg11']  ;}   ?>"></td>
                <td><input type="text" name="roundh11" class="custom-input" value="<?php if(isset($_POST['roundh11'])){echo $_POST['roundh11']  ;}   ?>"></td>
                <td><input type="text" name="roundi11" class="custom-input" value="<?php if(isset($_POST['roundi11'])){echo $_POST['roundi11']  ;}   ?>"></td>
                <td><input type="text" name="roundj11" class="custom-input" value="<?php if(isset($_POST['roundj11'])){echo $_POST['roundj11']  ;}   ?>"></td>
                <td><input type="text" name="roundk11" class="custom-input" value="<?php if(isset($_POST['roundk11'])){echo $_POST['roundk11']  ;}   ?>"></td>
                <td><input type="text" name="roundl11" class="custom-input" value="<?php if(isset($_POST['roundl11'])){echo $_POST['roundl11']  ;}   ?>"></td>
                <td><input type="text" name="roundm11" class="custom-input" value="<?php if(isset($_POST['roundm11'])){echo $_POST['roundm11']  ;}   ?>"></td>
                <td><input type="text" name="roundn11" class="custom-input" value="<?php if(isset($_POST['roundn11'])){echo $_POST['roundn11']  ;}   ?>"></td>
                <td><input type="text" name="roundo11" class="custom-input" value="<?php if(isset($_POST['roundo11'])){echo $_POST['roundo11']  ;}   ?>"></td>
                <td><input type="text" name="roundp11" class="custom-input" value="<?php if(isset($_POST['roundp11'])){echo $_POST['roundp11']  ;}   ?>"></td>
                <td><input type="text" name="roundq11" class="custom-input" value="<?php if(isset($_POST['roundq11'])){echo $_POST['roundq11']  ;}   ?>"></td>
                <td><input type="text" name="roundr11" class="custom-input" value="<?php if(isset($_POST['roundr11'])){echo $_POST['roundr11']  ;}   ?>"></td>
                <td><input type="text" name="rounds11" class="custom-input" value="<?php if(isset($rounds11)){echo $rounds11 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position:sticky;left:0;background-color:white;">11</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb12" class="custom-input" value="<?php if(isset($_POST['roundb12'])){echo $_POST['roundb12']  ;}   ?>"></td>
                <td><input type="text" name="roundc12" class="custom-input" value="<?php if(isset($_POST['roundc12'])){echo $_POST['roundc12']  ;}   ?>"></td>
                <td><input type="text" name="roundd12" class="custom-input" value="<?php if(isset($_POST['roundd12'])){echo $_POST['roundd12']  ;}   ?>"></td>
                <td><input type="text" name="rounde12" class="custom-input" value="<?php if(isset($_POST['rounde12'])){echo $_POST['rounde12']  ;}   ?>"></td>
                <td><input type="text" name="roundf12" class="custom-input" value="<?php if(isset($_POST['roundf12'])){echo $_POST['roundf12']  ;}   ?>"></td>
                <td><input type="text" name="roundg12" class="custom-input" value="<?php if(isset($_POST['roundg12'])){echo $_POST['roundg12']  ;}   ?>"></td>
                <td><input type="text" name="roundh12" class="custom-input" value="<?php if(isset($_POST['roundh12'])){echo $_POST['roundh12']  ;}   ?>"></td>
                <td><input type="text" name="roundi12" class="custom-input" value="<?php if(isset($_POST['roundi12'])){echo $_POST['roundi12']  ;}   ?>"></td>
                <td><input type="text" name="roundj12" class="custom-input" value="<?php if(isset($_POST['roundj12'])){echo $_POST['roundj12']  ;}   ?>"></td>
                <td><input type="text" name="roundk12" class="custom-input" value="<?php if(isset($_POST['roundk12'])){echo $_POST['roundk12']  ;}   ?>"></td>
                <td><input type="text" name="roundl12" class="custom-input" value="<?php if(isset($_POST['roundl12'])){echo $_POST['roundl12']  ;}   ?>"></td>
                <td><input type="text" name="roundm12" class="custom-input" value="<?php if(isset($_POST['roundm12'])){echo $_POST['roundm12']  ;}   ?>"></td>
                <td><input type="text" name="roundn12" class="custom-input" value="<?php if(isset($_POST['roundn12'])){echo $_POST['roundn12']  ;}   ?>"></td>
                <td><input type="text" name="roundo12" class="custom-input" value="<?php if(isset($_POST['roundo12'])){echo $_POST['roundo12']  ;}   ?>"></td>
                <td><input type="text" name="roundp12" class="custom-input" value="<?php if(isset($_POST['roundp12'])){echo $_POST['roundp12']  ;}   ?>"></td>
                <td><input type="text" name="roundq12" class="custom-input" value="<?php if(isset($_POST['roundq12'])){echo $_POST['roundq12']  ;}   ?>"></td>
                <td><input type="text" name="roundr12" class="custom-input" value="<?php if(isset($_POST['roundr12'])){echo $_POST['roundr12']  ;}   ?>"></td>
                <td><input type="text" name="rounds12" class="custom-input" value="<?php if(isset($rounds12)){echo $rounds12 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position:sticky;left:0;background-color:white;">12</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb13" class="custom-input" value="<?php if(isset($_POST['roundb13'])){echo $_POST['roundb13']  ;}   ?>"></td>
                <td><input type="text" name="roundc13" class="custom-input" value="<?php if(isset($_POST['roundc13'])){echo $_POST['roundc13']  ;}   ?>"></td>
                <td><input type="text" name="roundd13" class="custom-input" value="<?php if(isset($_POST['roundd13'])){echo $_POST['roundd13']  ;}   ?>"></td>
                <td><input type="text" name="rounde13" class="custom-input" value="<?php if(isset($_POST['rounde13'])){echo $_POST['rounde13']  ;}   ?>"></td>
                <td><input type="text" name="roundf13" class="custom-input" value="<?php if(isset($_POST['roundf13'])){echo $_POST['roundf13']  ;}   ?>"></td>
                <td><input type="text" name="roundg13" class="custom-input" value="<?php if(isset($_POST['roundg13'])){echo $_POST['roundg13']  ;}   ?>"></td>
                <td><input type="text" name="roundh13" class="custom-input" value="<?php if(isset($_POST['roundh13'])){echo $_POST['roundh13']  ;}   ?>"></td>
                <td><input type="text" name="roundi13" class="custom-input" value="<?php if(isset($_POST['roundi13'])){echo $_POST['roundi13']  ;}   ?>"></td>
                <td><input type="text" name="roundj13" class="custom-input" value="<?php if(isset($_POST['roundj13'])){echo $_POST['roundj13']  ;}   ?>"></td>
                <td><input type="text" name="roundk13" class="custom-input" value="<?php if(isset($_POST['roundk13'])){echo $_POST['roundk13']  ;}   ?>"></td>
                <td><input type="text" name="roundl13" class="custom-input" value="<?php if(isset($_POST['roundl13'])){echo $_POST['roundl13']  ;}   ?>"></td>
                <td><input type="text" name="roundm13" class="custom-input" value="<?php if(isset($_POST['roundm13'])){echo $_POST['roundm13']  ;}   ?>"></td>
                <td><input type="text" name="roundn13" class="custom-input" value="<?php if(isset($_POST['roundn13'])){echo $_POST['roundn13']  ;}   ?>"></td>
                <td><input type="text" name="roundo13" class="custom-input" value="<?php if(isset($_POST['roundo13'])){echo $_POST['roundo13']  ;}   ?>"></td>
                <td><input type="text" name="roundp13" class="custom-input" value="<?php if(isset($_POST['roundp13'])){echo $_POST['roundp13']  ;}   ?>"></td>
                <td><input type="text" name="roundq13" class="custom-input" value="<?php if(isset($_POST['roundq13'])){echo $_POST['roundq13']  ;}   ?>"></td>
                <td><input type="text" name="roundr13" class="custom-input" value="<?php if(isset($_POST['roundr13'])){echo $_POST['roundr13']  ;}   ?>"></td>
                <td><input type="text" name="rounds13" class="custom-input" value="<?php if(isset($rounds13)){echo $rounds13 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">13</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb14" class="custom-input" value="<?php if(isset($_POST['roundb14'])){echo $_POST['roundb14']  ;}   ?>"></td>
                <td><input type="text" name="roundc14" class="custom-input" value="<?php if(isset($_POST['roundc14'])){echo $_POST['roundc14']  ;}   ?>"></td>
                <td><input type="text" name="roundd14" class="custom-input" value="<?php if(isset($_POST['roundd14'])){echo $_POST['roundd14']  ;}   ?>"></td>
                <td><input type="text" name="rounde14" class="custom-input" value="<?php if(isset($_POST['rounde14'])){echo $_POST['rounde14']  ;}   ?>"></td>
                <td><input type="text" name="roundf14" class="custom-input" value="<?php if(isset($_POST['roundf14'])){echo $_POST['roundf14']  ;}   ?>"></td>
                <td><input type="text" name="roundg14" class="custom-input" value="<?php if(isset($_POST['roundg14'])){echo $_POST['roundg14']  ;}   ?>"></td>
                <td><input type="text" name="roundh14" class="custom-input" value="<?php if(isset($_POST['roundh14'])){echo $_POST['roundh14']  ;}   ?>"></td>
                <td><input type="text" name="roundi14" class="custom-input" value="<?php if(isset($_POST['roundi14'])){echo $_POST['roundi14']  ;}   ?>"></td>
                <td><input type="text" name="roundj14" class="custom-input" value="<?php if(isset($_POST['roundj14'])){echo $_POST['roundj14']  ;}   ?>"></td>
                <td><input type="text" name="roundk14" class="custom-input" value="<?php if(isset($_POST['roundk14'])){echo $_POST['roundk14']  ;}   ?>"></td>
                <td><input type="text" name="roundl14" class="custom-input" value="<?php if(isset($_POST['roundl14'])){echo $_POST['roundl14']  ;}   ?>"></td>
                <td><input type="text" name="roundm14" class="custom-input" value="<?php if(isset($_POST['roundm14'])){echo $_POST['roundm14']  ;}   ?>"></td>
                <td><input type="text" name="roundn14" class="custom-input" value="<?php if(isset($_POST['roundn14'])){echo $_POST['roundn14']  ;}   ?>"></td>
                <td><input type="text" name="roundo14" class="custom-input" value="<?php if(isset($_POST['roundo14'])){echo $_POST['roundo14']  ;}   ?>"></td>
                <td><input type="text" name="roundp14" class="custom-input" value="<?php if(isset($_POST['roundp14'])){echo $_POST['roundp14']  ;}   ?>"></td>
                <td><input type="text" name="roundq14" class="custom-input" value="<?php if(isset($_POST['roundq14'])){echo $_POST['roundq14']  ;}   ?>"></td>
                <td><input type="text" name="roundr14" class="custom-input" value="<?php if(isset($_POST['roundr14'])){echo $_POST['roundr14']  ;}   ?>"></td>
                <td><input type="text" name="rounds14" class="custom-input" value="<?php if(isset($rounds14)){echo $rounds14 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position:sticky;left:0;background-color:white;">14</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb15" class="custom-input" value="<?php if(isset($_POST['roundb15'])){echo $_POST['roundb15']  ;}   ?>"></td>
                <td><input type="text" name="roundc15" class="custom-input" value="<?php if(isset($_POST['roundc15'])){echo $_POST['roundc15']  ;}   ?>"></td>
                <td><input type="text" name="roundd15" class="custom-input" value="<?php if(isset($_POST['roundd15'])){echo $_POST['roundd15']  ;}   ?>"></td>
                <td><input type="text" name="rounde15" class="custom-input" value="<?php if(isset($_POST['rounde15'])){echo $_POST['rounde15']  ;}   ?>"></td>
                <td><input type="text" name="roundf15" class="custom-input" value="<?php if(isset($_POST['roundf15'])){echo $_POST['roundf15']  ;}   ?>"></td>
                <td><input type="text" name="roundg15" class="custom-input" value="<?php if(isset($_POST['roundg15'])){echo $_POST['roundg15']  ;}   ?>"></td>
                <td><input type="text" name="roundh15" class="custom-input" value="<?php if(isset($_POST['roundh15'])){echo $_POST['roundh15']  ;}   ?>"></td>
                <td><input type="text" name="roundi15" class="custom-input" value="<?php if(isset($_POST['roundi15'])){echo $_POST['roundi15']  ;}   ?>"></td>
                <td><input type="text" name="roundj15" class="custom-input" value="<?php if(isset($_POST['roundj15'])){echo $_POST['roundj15']  ;}   ?>"></td>
                <td><input type="text" name="roundk15" class="custom-input" value="<?php if(isset($_POST['roundk15'])){echo $_POST['roundk15']  ;}   ?>"></td>
                <td><input type="text" name="roundl15" class="custom-input" value="<?php if(isset($_POST['roundl15'])){echo $_POST['roundl15']  ;}   ?>"></td>
                <td><input type="text" name="roundm15" class="custom-input" value="<?php if(isset($_POST['roundm15'])){echo $_POST['roundm15']  ;}   ?>"></td>
                <td><input type="text" name="roundn15" class="custom-input" value="<?php if(isset($_POST['roundn15'])){echo $_POST['roundn15']  ;}   ?>"></td>
                <td><input type="text" name="roundo15" class="custom-input" value="<?php if(isset($_POST['roundo15'])){echo $_POST['roundo15']  ;}   ?>"></td>
                <td><input type="text" name="roundp15" class="custom-input" value="<?php if(isset($_POST['roundp15'])){echo $_POST['roundp15']  ;}   ?>"></td>
                <td><input type="text" name="roundq15" class="custom-input" value="<?php if(isset($_POST['roundq15'])){echo $_POST['roundq15']  ;}   ?>"></td>
                <td><input type="text" name="roundr15" class="custom-input" value="<?php if(isset($_POST['roundr15'])){echo $_POST['roundr15']  ;}   ?>"></td>
                <td><input type="text" name="rounds15" class="custom-input" value="<?php if(isset($rounds15)){echo $rounds15 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">15</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb16" class="custom-input" value="<?php if(isset($_POST['roundb16'])){echo $_POST['roundb16']  ;}   ?>"></td>
                <td><input type="text" name="roundc16" class="custom-input" value="<?php if(isset($_POST['roundc16'])){echo $_POST['roundc16']  ;}   ?>"></td>
                <td><input type="text" name="roundd16" class="custom-input" value="<?php if(isset($_POST['roundd16'])){echo $_POST['roundd16']  ;}   ?>"></td>
                <td><input type="text" name="rounde16" class="custom-input" value="<?php if(isset($_POST['rounde16'])){echo $_POST['rounde16']  ;}   ?>"></td>
                <td><input type="text" name="roundf16" class="custom-input" value="<?php if(isset($_POST['roundf16'])){echo $_POST['roundf16']  ;}   ?>"></td>
                <td><input type="text" name="roundg16" class="custom-input" value="<?php if(isset($_POST['roundg16'])){echo $_POST['roundg16']  ;}   ?>"></td>
                <td><input type="text" name="roundh16" class="custom-input" value="<?php if(isset($_POST['roundh16'])){echo $_POST['roundh16']  ;}   ?>"></td>
                <td><input type="text" name="roundi16" class="custom-input" value="<?php if(isset($_POST['roundi16'])){echo $_POST['roundi16']  ;}   ?>"></td>
                <td><input type="text" name="roundj16" class="custom-input" value="<?php if(isset($_POST['roundj16'])){echo $_POST['roundj16']  ;}   ?>"></td>
                <td><input type="text" name="roundk16" class="custom-input" value="<?php if(isset($_POST['roundk16'])){echo $_POST['roundk16']  ;}   ?>"></td>
                <td><input type="text" name="roundl16" class="custom-input" value="<?php if(isset($_POST['roundl16'])){echo $_POST['roundl16']  ;}   ?>"></td>
                <td><input type="text" name="roundm16" class="custom-input" value="<?php if(isset($_POST['roundm16'])){echo $_POST['roundm16']  ;}   ?>"></td>
                <td><input type="text" name="roundn16" class="custom-input" value="<?php if(isset($_POST['roundn16'])){echo $_POST['roundn16']  ;}   ?>"></td>
                <td><input type="text" name="roundo16" class="custom-input" value="<?php if(isset($_POST['roundo16'])){echo $_POST['roundo16']  ;}   ?>"></td>
                <td><input type="text" name="roundp16" class="custom-input" value="<?php if(isset($_POST['roundp16'])){echo $_POST['roundp16']  ;}   ?>"></td>
                <td><input type="text" name="roundq16" class="custom-input" value="<?php if(isset($_POST['roundq16'])){echo $_POST['roundq16']  ;}   ?>"></td>
                <td><input type="text" name="roundr16" class="custom-input" value="<?php if(isset($_POST['roundr16'])){echo $_POST['roundr16']  ;}   ?>"></td>
                <td><input type="text" name="rounds16" class="custom-input" value="<?php if(isset($rounds16)){echo $rounds16 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">16</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb17" class="custom-input" value="<?php if(isset($_POST['roundb17'])){echo $_POST['roundb17']  ;}   ?>"></td>
                <td><input type="text" name="roundc17" class="custom-input" value="<?php if(isset($_POST['roundc17'])){echo $_POST['roundc17']  ;}   ?>"></td>
                <td><input type="text" name="roundd17" class="custom-input" value="<?php if(isset($_POST['roundd17'])){echo $_POST['roundd17']  ;}   ?>"></td>
                <td><input type="text" name="rounde17" class="custom-input" value="<?php if(isset($_POST['rounde17'])){echo $_POST['rounde17']  ;}   ?>"></td>
                <td><input type="text" name="roundf17" class="custom-input" value="<?php if(isset($_POST['roundf17'])){echo $_POST['roundf17']  ;}   ?>"></td>
                <td><input type="text" name="roundg17" class="custom-input" value="<?php if(isset($_POST['roundg17'])){echo $_POST['roundg17']  ;}   ?>"></td>
                <td><input type="text" name="roundh17" class="custom-input" value="<?php if(isset($_POST['roundh17'])){echo $_POST['roundh17']  ;}   ?>"></td>
                <td><input type="text" name="roundi17" class="custom-input" value="<?php if(isset($_POST['roundi17'])){echo $_POST['roundi17']  ;}   ?>"></td>
                <td><input type="text" name="roundj17" class="custom-input" value="<?php if(isset($_POST['roundj17'])){echo $_POST['roundj17']  ;}   ?>"></td>
                <td><input type="text" name="roundk17" class="custom-input" value="<?php if(isset($_POST['roundk17'])){echo $_POST['roundk17']  ;}   ?>"></td>
                <td><input type="text" name="roundl17" class="custom-input" value="<?php if(isset($_POST['roundl17'])){echo $_POST['roundl17']  ;}   ?>"></td>
                <td><input type="text" name="roundm17" class="custom-input" value="<?php if(isset($_POST['roundm17'])){echo $_POST['roundm17']  ;}   ?>"></td>
                <td><input type="text" name="roundn17" class="custom-input" value="<?php if(isset($_POST['roundn17'])){echo $_POST['roundn17']  ;}   ?>"></td>
                <td><input type="text" name="roundo17" class="custom-input" value="<?php if(isset($_POST['roundo17'])){echo $_POST['roundo17']  ;}   ?>"></td>
                <td><input type="text" name="roundp17" class="custom-input" value="<?php if(isset($_POST['roundp17'])){echo $_POST['roundp17']  ;}   ?>"></td>
                <td><input type="text" name="roundq17" class="custom-input" value="<?php if(isset($_POST['roundq17'])){echo $_POST['roundq17']  ;}   ?>"></td>
                <td><input type="text" name="roundr17" class="custom-input" value="<?php if(isset($_POST['roundr17'])){echo $_POST['roundr17']  ;}   ?>"></td>
                <td><input type="text" name="rounds17" class="custom-input" value="<?php if(isset($rounds17)){echo $rounds17 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">17</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb18" class="custom-input" value="<?php if(isset($_POST['roundb18'])){echo $_POST['roundb18']  ;}   ?>"></td>
                <td><input type="text" name="roundc18" class="custom-input" value="<?php if(isset($_POST['roundc18'])){echo $_POST['roundc18']  ;}   ?>"></td>
                <td><input type="text" name="roundd18" class="custom-input" value="<?php if(isset($_POST['roundd18'])){echo $_POST['roundd18']  ;}   ?>"></td>
                <td><input type="text" name="rounde18" class="custom-input" value="<?php if(isset($_POST['rounde18'])){echo $_POST['rounde18']  ;}   ?>"></td>
                <td><input type="text" name="roundf18" class="custom-input" value="<?php if(isset($_POST['roundf18'])){echo $_POST['roundf18']  ;}   ?>"></td>
                <td><input type="text" name="roundg18" class="custom-input" value="<?php if(isset($_POST['roundg18'])){echo $_POST['roundg18']  ;}   ?>"></td>
                <td><input type="text" name="roundh18" class="custom-input" value="<?php if(isset($_POST['roundh18'])){echo $_POST['roundh18']  ;}   ?>"></td>
                <td><input type="text" name="roundi18" class="custom-input" value="<?php if(isset($_POST['roundi18'])){echo $_POST['roundi18']  ;}   ?>"></td>
                <td><input type="text" name="roundj18" class="custom-input" value="<?php if(isset($_POST['roundj18'])){echo $_POST['roundj18']  ;}   ?>"></td>
                <td><input type="text" name="roundk18" class="custom-input" value="<?php if(isset($_POST['roundk18'])){echo $_POST['roundk18']  ;}   ?>"></td>
                <td><input type="text" name="roundl18" class="custom-input" value="<?php if(isset($_POST['roundl18'])){echo $_POST['roundl18']  ;}   ?>"></td>
                <td><input type="text" name="roundm18" class="custom-input" value="<?php if(isset($_POST['roundm18'])){echo $_POST['roundm18']  ;}   ?>"></td>
                <td><input type="text" name="roundn18" class="custom-input" value="<?php if(isset($_POST['roundn18'])){echo $_POST['roundn18']  ;}   ?>"></td>
                <td><input type="text" name="roundo18" class="custom-input" value="<?php if(isset($_POST['roundo18'])){echo $_POST['roundo18']  ;}   ?>"></td>
                <td><input type="text" name="roundp18" class="custom-input" value="<?php if(isset($_POST['roundp18'])){echo $_POST['roundp18']  ;}   ?>"></td>
                <td><input type="text" name="roundq18" class="custom-input" value="<?php if(isset($_POST['roundq18'])){echo $_POST['roundq18']  ;}   ?>"></td>
                <td><input type="text" name="roundr18" class="custom-input" value="<?php if(isset($_POST['roundr18'])){echo $_POST['roundr18']  ;}   ?>"></td>
                <td><input type="text" name="rounds18" class="custom-input" value="<?php if(isset($rounds18)){echo $rounds18 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">18</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb19" class="custom-input" value="<?php if(isset($_POST['roundb19'])){echo $_POST['roundb19']  ;}   ?>"></td>
                <td><input type="text" name="roundc19" class="custom-input" value="<?php if(isset($_POST['roundc19'])){echo $_POST['roundc19']  ;}   ?>"></td>
                <td><input type="text" name="roundd19" class="custom-input" value="<?php if(isset($_POST['roundd19'])){echo $_POST['roundd19']  ;}   ?>"></td>
                <td><input type="text" name="rounde19" class="custom-input" value="<?php if(isset($_POST['rounde19'])){echo $_POST['rounde19']  ;}   ?>"></td>
                <td><input type="text" name="roundf19" class="custom-input" value="<?php if(isset($_POST['roundf19'])){echo $_POST['roundf19']  ;}   ?>"></td>
                <td><input type="text" name="roundg19" class="custom-input" value="<?php if(isset($_POST['roundg19'])){echo $_POST['roundg19']  ;}   ?>"></td>
                <td><input type="text" name="roundh19" class="custom-input" value="<?php if(isset($_POST['roundh19'])){echo $_POST['roundh19']  ;}   ?>"></td>
                <td><input type="text" name="roundi19" class="custom-input" value="<?php if(isset($_POST['roundi19'])){echo $_POST['roundi19']  ;}   ?>"></td>
                <td><input type="text" name="roundj19" class="custom-input" value="<?php if(isset($_POST['roundj19'])){echo $_POST['roundj19']  ;}   ?>"></td>
                <td><input type="text" name="roundk19" class="custom-input" value="<?php if(isset($_POST['roundk19'])){echo $_POST['roundk19']  ;}   ?>"></td>
                <td><input type="text" name="roundl19" class="custom-input" value="<?php if(isset($_POST['roundl19'])){echo $_POST['roundl19']  ;}   ?>"></td>
                <td><input type="text" name="roundm19" class="custom-input" value="<?php if(isset($_POST['roundm19'])){echo $_POST['roundm19']  ;}   ?>"></td>
                <td><input type="text" name="roundn19" class="custom-input" value="<?php if(isset($_POST['roundn19'])){echo $_POST['roundn19']  ;}   ?>"></td>
                <td><input type="text" name="roundo19" class="custom-input" value="<?php if(isset($_POST['roundo19'])){echo $_POST['roundo19']  ;}   ?>"></td>
                <td><input type="text" name="roundp19" class="custom-input" value="<?php if(isset($_POST['roundp19'])){echo $_POST['roundp19']  ;}   ?>"></td>
                <td><input type="text" name="roundq19" class="custom-input" value="<?php if(isset($_POST['roundq19'])){echo $_POST['roundq19']  ;}   ?>"></td>
                <td><input type="text" name="roundr19" class="custom-input" value="<?php if(isset($_POST['roundr19'])){echo $_POST['roundr19']  ;}   ?>"></td>
                <td><input type="text" name="rounds19" class="custom-input" value="<?php if(isset($rounds19)){echo $rounds19 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">19</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb20" class="custom-input" value="<?php if(isset($_POST['roundb20'])){echo $_POST['roundb20']  ;}   ?>"></td>
                <td><input type="text" name="roundc20" class="custom-input" value="<?php if(isset($_POST['roundc20'])){echo $_POST['roundc20']  ;}   ?>"></td>
                <td><input type="text" name="roundd20" class="custom-input" value="<?php if(isset($_POST['roundd20'])){echo $_POST['roundd20']  ;}   ?>"></td>
                <td><input type="text" name="rounde20" class="custom-input" value="<?php if(isset($_POST['rounde20'])){echo $_POST['rounde20']  ;}   ?>"></td>
                <td><input type="text" name="roundf20" class="custom-input" value="<?php if(isset($_POST['roundf20'])){echo $_POST['roundf20']  ;}   ?>"></td>
                <td><input type="text" name="roundg20" class="custom-input" value="<?php if(isset($_POST['roundg20'])){echo $_POST['roundg20']  ;}   ?>"></td>
                <td><input type="text" name="roundh20" class="custom-input" value="<?php if(isset($_POST['roundh20'])){echo $_POST['roundh20']  ;}   ?>"></td>
                <td><input type="text" name="roundi20" class="custom-input" value="<?php if(isset($_POST['roundi20'])){echo $_POST['roundi20']  ;}   ?>"></td>
                <td><input type="text" name="roundj20" class="custom-input" value="<?php if(isset($_POST['roundj20'])){echo $_POST['roundj20']  ;}   ?>"></td>
                <td><input type="text" name="roundk20" class="custom-input" value="<?php if(isset($_POST['roundk20'])){echo $_POST['roundk20']  ;}   ?>"></td>
                <td><input type="text" name="roundl20" class="custom-input" value="<?php if(isset($_POST['roundl20'])){echo $_POST['roundl20']  ;}   ?>"></td>
                <td><input type="text" name="roundm20" class="custom-input" value="<?php if(isset($_POST['roundm20'])){echo $_POST['roundm20']  ;}   ?>"></td>
                <td><input type="text" name="roundn20" class="custom-input" value="<?php if(isset($_POST['roundn20'])){echo $_POST['roundn20']  ;}   ?>"></td>
                <td><input type="text" name="roundo20" class="custom-input" value="<?php if(isset($_POST['roundo20'])){echo $_POST['roundo20']  ;}   ?>"></td>
                <td><input type="text" name="roundp20" class="custom-input" value="<?php if(isset($_POST['roundp20'])){echo $_POST['roundp20']  ;}   ?>"></td>
                <td><input type="text" name="roundq20" class="custom-input" value="<?php if(isset($_POST['roundq20'])){echo $_POST['roundq20']  ;}   ?>"></td>
                <td><input type="text" name="roundr20" class="custom-input" value="<?php if(isset($_POST['roundr20'])){echo $_POST['roundr20']  ;}   ?>"></td>
                <td><input type="text" name="rounds20" class="custom-input" value="<?php if(isset($rounds20)){echo $rounds20 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">20</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb21" class="custom-input" value="<?php if(isset($_POST['roundb21'])){echo $_POST['roundb21']  ;}   ?>"></td>
                <td><input type="text" name="roundc21" class="custom-input" value="<?php if(isset($_POST['roundc21'])){echo $_POST['roundc21']  ;}   ?>"></td>
                <td><input type="text" name="roundd21" class="custom-input" value="<?php if(isset($_POST['roundd21'])){echo $_POST['roundd21']  ;}   ?>"></td>
                <td><input type="text" name="rounde21" class="custom-input" value="<?php if(isset($_POST['rounde21'])){echo $_POST['rounde21']  ;}   ?>"></td>
                <td><input type="text" name="roundf21" class="custom-input" value="<?php if(isset($_POST['roundf21'])){echo $_POST['roundf21']  ;}   ?>"></td>
                <td><input type="text" name="roundg21" class="custom-input" value="<?php if(isset($_POST['roundg21'])){echo $_POST['roundg21']  ;}   ?>"></td>
                <td><input type="text" name="roundh21" class="custom-input" value="<?php if(isset($_POST['roundh21'])){echo $_POST['roundh21']  ;}   ?>"></td>
                <td><input type="text" name="roundi21" class="custom-input" value="<?php if(isset($_POST['roundi21'])){echo $_POST['roundi21']  ;}   ?>"></td>
                <td><input type="text" name="roundj21" class="custom-input" value="<?php if(isset($_POST['roundj21'])){echo $_POST['roundj21']  ;}   ?>"></td>
                <td><input type="text" name="roundk21" class="custom-input" value="<?php if(isset($_POST['roundk21'])){echo $_POST['roundk21']  ;}   ?>"></td>
                <td><input type="text" name="roundl21" class="custom-input" value="<?php if(isset($_POST['roundl21'])){echo $_POST['roundl21']  ;}   ?>"></td>
                <td><input type="text" name="roundm21" class="custom-input" value="<?php if(isset($_POST['roundm21'])){echo $_POST['roundm21']  ;}   ?>"></td>
                <td><input type="text" name="roundn21" class="custom-input" value="<?php if(isset($_POST['roundn21'])){echo $_POST['roundn21']  ;}   ?>"></td>
                <td><input type="text" name="roundo21" class="custom-input" value="<?php if(isset($_POST['roundo21'])){echo $_POST['roundo21']  ;}   ?>"></td>
                <td><input type="text" name="roundp21" class="custom-input" value="<?php if(isset($_POST['roundp21'])){echo $_POST['roundp21']  ;}   ?>"></td>
                <td><input type="text" name="roundq21" class="custom-input" value="<?php if(isset($_POST['roundq21'])){echo $_POST['roundq21']  ;}   ?>"></td>
                <td><input type="text" name="roundr21" class="custom-input" value="<?php if(isset($_POST['roundr21'])){echo $_POST['roundr21']  ;}   ?>"></td>
                <td><input type="text" name="rounds21" class="custom-input" value="<?php if(isset($rounds21)){echo $rounds21 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">21</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb22" class="custom-input" value="<?php if(isset($_POST['roundb22'])){echo $_POST['roundb22']  ;}   ?>"></td>
                <td><input type="text" name="roundc22" class="custom-input" value="<?php if(isset($_POST['roundc22'])){echo $_POST['roundc22']  ;}   ?>"></td>
                <td><input type="text" name="roundd22" class="custom-input" value="<?php if(isset($_POST['roundd22'])){echo $_POST['roundd22']  ;}   ?>"></td>
                <td><input type="text" name="rounde22" class="custom-input" value="<?php if(isset($_POST['rounde22'])){echo $_POST['rounde22']  ;}   ?>"></td>
                <td><input type="text" name="roundf22" class="custom-input" value="<?php if(isset($_POST['roundf22'])){echo $_POST['roundf22']  ;}   ?>"></td>
                <td><input type="text" name="roundg22" class="custom-input" value="<?php if(isset($_POST['roundg22'])){echo $_POST['roundg22']  ;}   ?>"></td>
                <td><input type="text" name="roundh22" class="custom-input" value="<?php if(isset($_POST['roundh22'])){echo $_POST['roundh22']  ;}   ?>"></td>
                <td><input type="text" name="roundi22" class="custom-input" value="<?php if(isset($_POST['roundi22'])){echo $_POST['roundi22']  ;}   ?>"></td>
                <td><input type="text" name="roundj22" class="custom-input" value="<?php if(isset($_POST['roundj22'])){echo $_POST['roundj22']  ;}   ?>"></td>
                <td><input type="text" name="roundk22" class="custom-input" value="<?php if(isset($_POST['roundk22'])){echo $_POST['roundk22']  ;}   ?>"></td>
                <td><input type="text" name="roundl22" class="custom-input" value="<?php if(isset($_POST['roundl22'])){echo $_POST['roundl22']  ;}   ?>"></td>
                <td><input type="text" name="roundm22" class="custom-input" value="<?php if(isset($_POST['roundm22'])){echo $_POST['roundm22']  ;}   ?>"></td>
                <td><input type="text" name="roundn22" class="custom-input" value="<?php if(isset($_POST['roundn22'])){echo $_POST['roundn22']  ;}   ?>"></td>
                <td><input type="text" name="roundo22" class="custom-input" value="<?php if(isset($_POST['roundo22'])){echo $_POST['roundo22']  ;}   ?>"></td>
                <td><input type="text" name="roundp22" class="custom-input" value="<?php if(isset($_POST['roundp22'])){echo $_POST['roundp22']  ;}   ?>"></td>
                <td><input type="text" name="roundq22" class="custom-input" value="<?php if(isset($_POST['roundq22'])){echo $_POST['roundq22']  ;}   ?>"></td>
                <td><input type="text" name="roundr22" class="custom-input" value="<?php if(isset($_POST['roundr22'])){echo $_POST['roundr22']  ;}   ?>"></td>
                <td><input type="text" name="rounds22" class="custom-input" value="<?php if(isset($rounds22)){echo $rounds22 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">22</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb23" class="custom-input" value="<?php if(isset($_POST['roundb23'])){echo $_POST['roundb23']  ;}   ?>"></td>
                <td><input type="text" name="roundc23" class="custom-input" value="<?php if(isset($_POST['roundc23'])){echo $_POST['roundc23']  ;}   ?>"></td>
                <td><input type="text" name="roundd23" class="custom-input" value="<?php if(isset($_POST['roundd23'])){echo $_POST['roundd23']  ;}   ?>"></td>
                <td><input type="text" name="rounde23" class="custom-input" value="<?php if(isset($_POST['rounde23'])){echo $_POST['rounde23']  ;}   ?>"></td>
                <td><input type="text" name="roundf23" class="custom-input" value="<?php if(isset($_POST['roundf23'])){echo $_POST['roundf23']  ;}   ?>"></td>
                <td><input type="text" name="roundg23" class="custom-input" value="<?php if(isset($_POST['roundg23'])){echo $_POST['roundg23']  ;}   ?>"></td>
                <td><input type="text" name="roundh23" class="custom-input" value="<?php if(isset($_POST['roundh23'])){echo $_POST['roundh23']  ;}   ?>"></td>
                <td><input type="text" name="roundi23" class="custom-input" value="<?php if(isset($_POST['roundi23'])){echo $_POST['roundi23']  ;}   ?>"></td>
                <td><input type="text" name="roundj23" class="custom-input" value="<?php if(isset($_POST['roundj23'])){echo $_POST['roundj23']  ;}   ?>"></td>
                <td><input type="text" name="roundk23" class="custom-input" value="<?php if(isset($_POST['roundk23'])){echo $_POST['roundk23']  ;}   ?>"></td>
                <td><input type="text" name="roundl23" class="custom-input" value="<?php if(isset($_POST['roundl23'])){echo $_POST['roundl23']  ;}   ?>"></td>
                <td><input type="text" name="roundm23" class="custom-input" value="<?php if(isset($_POST['roundm23'])){echo $_POST['roundm23']  ;}   ?>"></td>
                <td><input type="text" name="roundn23" class="custom-input" value="<?php if(isset($_POST['roundn23'])){echo $_POST['roundn23']  ;}   ?>"></td>
                <td><input type="text" name="roundo23" class="custom-input" value="<?php if(isset($_POST['roundo23'])){echo $_POST['roundo23']  ;}   ?>"></td>
                <td><input type="text" name="roundp23" class="custom-input" value="<?php if(isset($_POST['roundp23'])){echo $_POST['roundp23']  ;}   ?>"></td>
                <td><input type="text" name="roundq23" class="custom-input" value="<?php if(isset($_POST['roundq23'])){echo $_POST['roundq23']  ;}   ?>"></td>
                <td><input type="text" name="roundr23" class="custom-input" value="<?php if(isset($_POST['roundr23'])){echo $_POST['roundr23']  ;}   ?>"></td>
                <td><input type="text" name="rounds23" class="custom-input" value="<?php if(isset($rounds23)){echo $rounds23 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">23</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb24" class="custom-input" value="<?php if(isset($_POST['roundb24'])){echo $_POST['roundb24']  ;}   ?>"></td>
                <td><input type="text" name="roundc24" class="custom-input" value="<?php if(isset($_POST['roundc24'])){echo $_POST['roundc24']  ;}   ?>"></td>
                <td><input type="text" name="roundd24" class="custom-input" value="<?php if(isset($_POST['roundd24'])){echo $_POST['roundd24']  ;}   ?>"></td>
                <td><input type="text" name="rounde24" class="custom-input" value="<?php if(isset($_POST['rounde24'])){echo $_POST['rounde24']  ;}   ?>"></td>
                <td><input type="text" name="roundf24" class="custom-input" value="<?php if(isset($_POST['roundf24'])){echo $_POST['roundf24']  ;}   ?>"></td>
                <td><input type="text" name="roundg24" class="custom-input" value="<?php if(isset($_POST['roundg24'])){echo $_POST['roundg24']  ;}   ?>"></td>
                <td><input type="text" name="roundh24" class="custom-input" value="<?php if(isset($_POST['roundh24'])){echo $_POST['roundh24']  ;}   ?>"></td>
                <td><input type="text" name="roundi24" class="custom-input" value="<?php if(isset($_POST['roundi24'])){echo $_POST['roundi24']  ;}   ?>"></td>
                <td><input type="text" name="roundj24" class="custom-input" value="<?php if(isset($_POST['roundj24'])){echo $_POST['roundj24']  ;}   ?>"></td>
                <td><input type="text" name="roundk24" class="custom-input" value="<?php if(isset($_POST['roundk24'])){echo $_POST['roundk24']  ;}   ?>"></td>
                <td><input type="text" name="roundl24" class="custom-input" value="<?php if(isset($_POST['roundl24'])){echo $_POST['roundl24']  ;}   ?>"></td>
                <td><input type="text" name="roundm24" class="custom-input" value="<?php if(isset($_POST['roundm24'])){echo $_POST['roundm24']  ;}   ?>"></td>
                <td><input type="text" name="roundn24" class="custom-input" value="<?php if(isset($_POST['roundn24'])){echo $_POST['roundn24']  ;}   ?>"></td>
                <td><input type="text" name="roundo24" class="custom-input" value="<?php if(isset($_POST['roundo24'])){echo $_POST['roundo24']  ;}   ?>"></td>
                <td><input type="text" name="roundp24" class="custom-input" value="<?php if(isset($_POST['roundp24'])){echo $_POST['roundp24']  ;}   ?>"></td>
                <td><input type="text" name="roundq24" class="custom-input" value="<?php if(isset($_POST['roundq24'])){echo $_POST['roundq24']  ;}   ?>"></td>
                <td><input type="text" name="roundr24" class="custom-input" value="<?php if(isset($_POST['roundr24'])){echo $_POST['roundr24']  ;}   ?>"></td>
                <td><input type="text" name="rounds24" class="custom-input" value="<?php if(isset($rounds24)){echo $rounds24 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">24</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb25" class="custom-input" value="<?php if(isset($_POST['roundb25'])){echo $_POST['roundb25']  ;}   ?>"></td>
                <td><input type="text" name="roundc25" class="custom-input" value="<?php if(isset($_POST['roundc25'])){echo $_POST['roundc25']  ;}   ?>"></td>
                <td><input type="text" name="roundd25" class="custom-input" value="<?php if(isset($_POST['roundd25'])){echo $_POST['roundd25']  ;}   ?>"></td>
                <td><input type="text" name="rounde25" class="custom-input" value="<?php if(isset($_POST['rounde25'])){echo $_POST['rounde25']  ;}   ?>"></td>
                <td><input type="text" name="roundf25" class="custom-input" value="<?php if(isset($_POST['roundf25'])){echo $_POST['roundf25']  ;}   ?>"></td>
                <td><input type="text" name="roundg25" class="custom-input" value="<?php if(isset($_POST['roundg25'])){echo $_POST['roundg25']  ;}   ?>"></td>
                <td><input type="text" name="roundh25" class="custom-input" value="<?php if(isset($_POST['roundh25'])){echo $_POST['roundh25']  ;}   ?>"></td>
                <td><input type="text" name="roundi25" class="custom-input" value="<?php if(isset($_POST['roundi25'])){echo $_POST['roundi25']  ;}   ?>"></td>
                <td><input type="text" name="roundj25" class="custom-input" value="<?php if(isset($_POST['roundj25'])){echo $_POST['roundj25']  ;}   ?>"></td>
                <td><input type="text" name="roundk25" class="custom-input" value="<?php if(isset($_POST['roundk25'])){echo $_POST['roundk25']  ;}   ?>"></td>
                <td><input type="text" name="roundl25" class="custom-input" value="<?php if(isset($_POST['roundl25'])){echo $_POST['roundl25']  ;}   ?>"></td>
                <td><input type="text" name="roundm25" class="custom-input" value="<?php if(isset($_POST['roundm25'])){echo $_POST['roundm25']  ;}   ?>"></td>
                <td><input type="text" name="roundn25" class="custom-input" value="<?php if(isset($_POST['roundn25'])){echo $_POST['roundn25']  ;}   ?>"></td>
                <td><input type="text" name="roundo25" class="custom-input" value="<?php if(isset($_POST['roundo25'])){echo $_POST['roundo25']  ;}   ?>"></td>
                <td><input type="text" name="roundp25" class="custom-input" value="<?php if(isset($_POST['roundp25'])){echo $_POST['roundp25']  ;}   ?>"></td>
                <td><input type="text" name="roundq25" class="custom-input" value="<?php if(isset($_POST['roundq25'])){echo $_POST['roundq25']  ;}   ?>"></td>
                <td><input type="text" name="roundr25" class="custom-input" value="<?php if(isset($_POST['roundr25'])){echo $_POST['roundr25']  ;}   ?>"></td>
                <td><input type="text" name="rounds25" class="custom-input" value="<?php if(isset($rounds25)){echo $rounds25 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">25</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb26" class="custom-input" value="<?php if(isset($_POST['roundb26'])){echo $_POST['roundb26']  ;}   ?>"></td>
                <td><input type="text" name="roundc26" class="custom-input" value="<?php if(isset($_POST['roundc26'])){echo $_POST['roundc26']  ;}   ?>"></td>
                <td><input type="text" name="roundd26" class="custom-input" value="<?php if(isset($_POST['roundd26'])){echo $_POST['roundd26']  ;}   ?>"></td>
                <td><input type="text" name="rounde26" class="custom-input" value="<?php if(isset($_POST['rounde26'])){echo $_POST['rounde26']  ;}   ?>"></td>
                <td><input type="text" name="roundf26" class="custom-input" value="<?php if(isset($_POST['roundf26'])){echo $_POST['roundf26']  ;}   ?>"></td>
                <td><input type="text" name="roundg26" class="custom-input" value="<?php if(isset($_POST['roundg26'])){echo $_POST['roundg26']  ;}   ?>"></td>
                <td><input type="text" name="roundh26" class="custom-input" value="<?php if(isset($_POST['roundh26'])){echo $_POST['roundh26']  ;}   ?>"></td>
                <td><input type="text" name="roundi26" class="custom-input" value="<?php if(isset($_POST['roundi26'])){echo $_POST['roundi26']  ;}   ?>"></td>
                <td><input type="text" name="roundj26" class="custom-input" value="<?php if(isset($_POST['roundj26'])){echo $_POST['roundj26']  ;}   ?>"></td>
                <td><input type="text" name="roundk26" class="custom-input" value="<?php if(isset($_POST['roundk26'])){echo $_POST['roundk26']  ;}   ?>"></td>
                <td><input type="text" name="roundl26" class="custom-input" value="<?php if(isset($_POST['roundl26'])){echo $_POST['roundl26']  ;}   ?>"></td>
                <td><input type="text" name="roundm26" class="custom-input" value="<?php if(isset($_POST['roundm26'])){echo $_POST['roundm26']  ;}   ?>"></td>
                <td><input type="text" name="roundn26" class="custom-input" value="<?php if(isset($_POST['roundn26'])){echo $_POST['roundn26']  ;}   ?>"></td>
                <td><input type="text" name="roundo26" class="custom-input" value="<?php if(isset($_POST['roundo26'])){echo $_POST['roundo26']  ;}   ?>"></td>
                <td><input type="text" name="roundp26" class="custom-input" value="<?php if(isset($_POST['roundp26'])){echo $_POST['roundp26']  ;}   ?>"></td>
                <td><input type="text" name="roundq26" class="custom-input" value="<?php if(isset($_POST['roundq26'])){echo $_POST['roundq26']  ;}   ?>"></td>
                <td><input type="text" name="roundr26" class="custom-input" value="<?php if(isset($_POST['roundr26'])){echo $_POST['roundr26']  ;}   ?>"></td>
                <td><input type="text" name="rounds26" class="custom-input" value="<?php if(isset($rounds26)){echo $rounds26 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">26</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb27" class="custom-input" value="<?php if(isset($_POST['roundb27'])){echo $_POST['roundb27']  ;}   ?>"></td>
                <td><input type="text" name="roundc27" class="custom-input" value="<?php if(isset($_POST['roundc27'])){echo $_POST['roundc27']  ;}   ?>"></td>
                <td><input type="text" name="roundd27" class="custom-input" value="<?php if(isset($_POST['roundd27'])){echo $_POST['roundd27']  ;}   ?>"></td>
                <td><input type="text" name="rounde27" class="custom-input" value="<?php if(isset($_POST['rounde27'])){echo $_POST['rounde27']  ;}   ?>"></td>
                <td><input type="text" name="roundf27" class="custom-input" value="<?php if(isset($_POST['roundf27'])){echo $_POST['roundf27']  ;}   ?>"></td>
                <td><input type="text" name="roundg27" class="custom-input" value="<?php if(isset($_POST['roundg27'])){echo $_POST['roundg27']  ;}   ?>"></td>
                <td><input type="text" name="roundh27" class="custom-input" value="<?php if(isset($_POST['roundh27'])){echo $_POST['roundh27']  ;}   ?>"></td>
                <td><input type="text" name="roundi27" class="custom-input" value="<?php if(isset($_POST['roundi27'])){echo $_POST['roundi27']  ;}   ?>"></td>
                <td><input type="text" name="roundj27" class="custom-input" value="<?php if(isset($_POST['roundj27'])){echo $_POST['roundj27']  ;}   ?>"></td>
                <td><input type="text" name="roundk27" class="custom-input" value="<?php if(isset($_POST['roundk27'])){echo $_POST['roundk27']  ;}   ?>"></td>
                <td><input type="text" name="roundl27" class="custom-input" value="<?php if(isset($_POST['roundl27'])){echo $_POST['roundl27']  ;}   ?>"></td>
                <td><input type="text" name="roundm27" class="custom-input" value="<?php if(isset($_POST['roundm27'])){echo $_POST['roundm27']  ;}   ?>"></td>
                <td><input type="text" name="roundn27" class="custom-input" value="<?php if(isset($_POST['roundn27'])){echo $_POST['roundn27']  ;}   ?>"></td>
                <td><input type="text" name="roundo27" class="custom-input" value="<?php if(isset($_POST['roundo27'])){echo $_POST['roundo27']  ;}   ?>"></td>
                <td><input type="text" name="roundp27" class="custom-input" value="<?php if(isset($_POST['roundp27'])){echo $_POST['roundp27']  ;}   ?>"></td>
                <td><input type="text" name="roundq27" class="custom-input" value="<?php if(isset($_POST['roundq27'])){echo $_POST['roundq27']  ;}   ?>"></td>
                <td><input type="text" name="roundr27" class="custom-input" value="<?php if(isset($_POST['roundr27'])){echo $_POST['roundr27']  ;}   ?>"></td>
                <td><input type="text" name="rounds27" class="custom-input" value="<?php if(isset($rounds27)){echo $rounds27 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">27</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb28" class="custom-input" value="<?php if(isset($_POST['roundb28'])){echo $_POST['roundb28']  ;}   ?>"></td>
                <td><input type="text" name="roundc28" class="custom-input" value="<?php if(isset($_POST['roundc28'])){echo $_POST['roundc28']  ;}   ?>"></td>
                <td><input type="text" name="roundd28" class="custom-input" value="<?php if(isset($_POST['roundd28'])){echo $_POST['roundd28']  ;}   ?>"></td>
                <td><input type="text" name="rounde28" class="custom-input" value="<?php if(isset($_POST['rounde28'])){echo $_POST['rounde28']  ;}   ?>"></td>
                <td><input type="text" name="roundf28" class="custom-input" value="<?php if(isset($_POST['roundf28'])){echo $_POST['roundf28']  ;}   ?>"></td>
                <td><input type="text" name="roundg28" class="custom-input" value="<?php if(isset($_POST['roundg28'])){echo $_POST['roundg28']  ;}   ?>"></td>
                <td><input type="text" name="roundh28" class="custom-input" value="<?php if(isset($_POST['roundh28'])){echo $_POST['roundh28']  ;}   ?>"></td>
                <td><input type="text" name="roundi28" class="custom-input" value="<?php if(isset($_POST['roundi28'])){echo $_POST['roundi28']  ;}   ?>"></td>
                <td><input type="text" name="roundj28" class="custom-input" value="<?php if(isset($_POST['roundj28'])){echo $_POST['roundj28']  ;}   ?>"></td>
                <td><input type="text" name="roundk28" class="custom-input" value="<?php if(isset($_POST['roundk28'])){echo $_POST['roundk28']  ;}   ?>"></td>
                <td><input type="text" name="roundl28" class="custom-input" value="<?php if(isset($_POST['roundl28'])){echo $_POST['roundl28']  ;}   ?>"></td>
                <td><input type="text" name="roundm28" class="custom-input" value="<?php if(isset($_POST['roundm28'])){echo $_POST['roundm28']  ;}   ?>"></td>
                <td><input type="text" name="roundn28" class="custom-input" value="<?php if(isset($_POST['roundn28'])){echo $_POST['roundn28']  ;}   ?>"></td>
                <td><input type="text" name="roundo28" class="custom-input" value="<?php if(isset($_POST['roundo28'])){echo $_POST['roundo28']  ;}   ?>"></td>
                <td><input type="text" name="roundp28" class="custom-input" value="<?php if(isset($_POST['roundp28'])){echo $_POST['roundp28']  ;}   ?>"></td>
                <td><input type="text" name="roundq28" class="custom-input" value="<?php if(isset($_POST['roundq28'])){echo $_POST['roundq28']  ;}   ?>"></td>
                <td><input type="text" name="roundr28" class="custom-input" value="<?php if(isset($_POST['roundr28'])){echo $_POST['roundr28']  ;}   ?>"></td>
                <td><input type="text" name="rounds28" class="custom-input" value="<?php if(isset($rounds28)){echo $rounds28 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">28</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb29" class="custom-input" value="<?php if(isset($_POST['roundb29'])){echo $_POST['roundb29']  ;}   ?>"></td>
                <td><input type="text" name="roundc29" class="custom-input" value="<?php if(isset($_POST['roundc29'])){echo $_POST['roundc29']  ;}   ?>"></td>
                <td><input type="text" name="roundd29" class="custom-input" value="<?php if(isset($_POST['roundd29'])){echo $_POST['roundd29']  ;}   ?>"></td>
                <td><input type="text" name="rounde29" class="custom-input" value="<?php if(isset($_POST['rounde29'])){echo $_POST['rounde29']  ;}   ?>"></td>
                <td><input type="text" name="roundf29" class="custom-input" value="<?php if(isset($_POST['roundf29'])){echo $_POST['roundf29']  ;}   ?>"></td>
                <td><input type="text" name="roundg29" class="custom-input" value="<?php if(isset($_POST['roundg29'])){echo $_POST['roundg29']  ;}   ?>"></td>
                <td><input type="text" name="roundh29" class="custom-input" value="<?php if(isset($_POST['roundh29'])){echo $_POST['roundh29']  ;}   ?>"></td>
                <td><input type="text" name="roundi29" class="custom-input" value="<?php if(isset($_POST['roundi29'])){echo $_POST['roundi29']  ;}   ?>"></td>
                <td><input type="text" name="roundj29" class="custom-input" value="<?php if(isset($_POST['roundj29'])){echo $_POST['roundj29']  ;}   ?>"></td>
                <td><input type="text" name="roundk29" class="custom-input" value="<?php if(isset($_POST['roundk29'])){echo $_POST['roundk29']  ;}   ?>"></td>
                <td><input type="text" name="roundl29" class="custom-input" value="<?php if(isset($_POST['roundl29'])){echo $_POST['roundl29']  ;}   ?>"></td>
                <td><input type="text" name="roundm29" class="custom-input" value="<?php if(isset($_POST['roundm29'])){echo $_POST['roundm29']  ;}   ?>"></td>
                <td><input type="text" name="roundn29" class="custom-input" value="<?php if(isset($_POST['roundn29'])){echo $_POST['roundn29']  ;}   ?>"></td>
                <td><input type="text" name="roundo29" class="custom-input" value="<?php if(isset($_POST['roundo29'])){echo $_POST['roundo29']  ;}   ?>"></td>
                <td><input type="text" name="roundp29" class="custom-input" value="<?php if(isset($_POST['roundp29'])){echo $_POST['roundp29']  ;}   ?>"></td>
                <td><input type="text" name="roundq29" class="custom-input" value="<?php if(isset($_POST['roundq29'])){echo $_POST['roundq29']  ;}   ?>"></td>
                <td><input type="text" name="roundr29" class="custom-input" value="<?php if(isset($_POST['roundr29'])){echo $_POST['roundr29']  ;}   ?>"></td>
                <td><input type="text" name="rounds29" class="custom-input" value="<?php if(isset($rounds29)){echo $rounds29 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">29</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb30" class="custom-input" value="<?php if(isset($_POST['roundb30'])){echo $_POST['roundb30']  ;}   ?>"></td>
                <td><input type="text" name="roundc30" class="custom-input" value="<?php if(isset($_POST['roundc30'])){echo $_POST['roundc30']  ;}   ?>"></td>
                <td><input type="text" name="roundd30" class="custom-input" value="<?php if(isset($_POST['roundd30'])){echo $_POST['roundd30']  ;}   ?>"></td>
                <td><input type="text" name="rounde30" class="custom-input" value="<?php if(isset($_POST['rounde30'])){echo $_POST['rounde30']  ;}   ?>"></td>
                <td><input type="text" name="roundf30" class="custom-input" value="<?php if(isset($_POST['roundf30'])){echo $_POST['roundf30']  ;}   ?>"></td>
                <td><input type="text" name="roundg30" class="custom-input" value="<?php if(isset($_POST['roundg30'])){echo $_POST['roundg30']  ;}   ?>"></td>
                <td><input type="text" name="roundh30" class="custom-input" value="<?php if(isset($_POST['roundh30'])){echo $_POST['roundh30']  ;}   ?>"></td>
                <td><input type="text" name="roundi30" class="custom-input" value="<?php if(isset($_POST['roundi30'])){echo $_POST['roundi30']  ;}   ?>"></td>
                <td><input type="text" name="roundj30" class="custom-input" value="<?php if(isset($_POST['roundj30'])){echo $_POST['roundj30']  ;}   ?>"></td>
                <td><input type="text" name="roundk30" class="custom-input" value="<?php if(isset($_POST['roundk30'])){echo $_POST['roundk30']  ;}   ?>"></td>
                <td><input type="text" name="roundl30" class="custom-input" value="<?php if(isset($_POST['roundl30'])){echo $_POST['roundl30']  ;}   ?>"></td>
                <td><input type="text" name="roundm30" class="custom-input" value="<?php if(isset($_POST['roundm30'])){echo $_POST['roundm30']  ;}   ?>"></td>
                <td><input type="text" name="roundn30" class="custom-input" value="<?php if(isset($_POST['roundn30'])){echo $_POST['roundn30']  ;}   ?>"></td>
                <td><input type="text" name="roundo30" class="custom-input" value="<?php if(isset($_POST['roundo30'])){echo $_POST['roundo30']  ;}   ?>"></td>
                <td><input type="text" name="roundp30" class="custom-input" value="<?php if(isset($_POST['roundp30'])){echo $_POST['roundp30']  ;}   ?>"></td>
                <td><input type="text" name="roundq30" class="custom-input" value="<?php if(isset($_POST['roundq30'])){echo $_POST['roundq30']  ;}   ?>"></td>
                <td><input type="text" name="roundr30" class="custom-input" value="<?php if(isset($_POST['roundr30'])){echo $_POST['roundr30']  ;}   ?>"></td>
                <td><input type="text" name="rounds30" class="custom-input" value="<?php if(isset($rounds30)){echo $rounds30 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">30</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb31" class="custom-input" value="<?php if(isset($_POST['roundb31'])){echo $_POST['roundb31']  ;}   ?>"></td>
                <td><input type="text" name="roundc31" class="custom-input" value="<?php if(isset($_POST['roundc31'])){echo $_POST['roundc31']  ;}   ?>"></td>
                <td><input type="text" name="roundd31" class="custom-input" value="<?php if(isset($_POST['roundd31'])){echo $_POST['roundd31']  ;}   ?>"></td>
                <td><input type="text" name="rounde31" class="custom-input" value="<?php if(isset($_POST['rounde31'])){echo $_POST['rounde31']  ;}   ?>"></td>
                <td><input type="text" name="roundf31" class="custom-input" value="<?php if(isset($_POST['roundf31'])){echo $_POST['roundf31']  ;}   ?>"></td>
                <td><input type="text" name="roundg31" class="custom-input" value="<?php if(isset($_POST['roundg31'])){echo $_POST['roundg31']  ;}   ?>"></td>
                <td><input type="text" name="roundh31" class="custom-input" value="<?php if(isset($_POST['roundh31'])){echo $_POST['roundh31']  ;}   ?>"></td>
                <td><input type="text" name="roundi31" class="custom-input" value="<?php if(isset($_POST['roundi31'])){echo $_POST['roundi31']  ;}   ?>"></td>
                <td><input type="text" name="roundj31" class="custom-input" value="<?php if(isset($_POST['roundj31'])){echo $_POST['roundj31']  ;}   ?>"></td>
                <td><input type="text" name="roundk31" class="custom-input" value="<?php if(isset($_POST['roundk31'])){echo $_POST['roundk31']  ;}   ?>"></td>
                <td><input type="text" name="roundl31" class="custom-input" value="<?php if(isset($_POST['roundl31'])){echo $_POST['roundl31']  ;}   ?>"></td>
                <td><input type="text" name="roundm31" class="custom-input" value="<?php if(isset($_POST['roundm31'])){echo $_POST['roundm31']  ;}   ?>"></td>
                <td><input type="text" name="roundn31" class="custom-input" value="<?php if(isset($_POST['roundn31'])){echo $_POST['roundn31']  ;}   ?>"></td>
                <td><input type="text" name="roundo31" class="custom-input" value="<?php if(isset($_POST['roundo31'])){echo $_POST['roundo31']  ;}   ?>"></td>
                <td><input type="text" name="roundp31" class="custom-input" value="<?php if(isset($_POST['roundp31'])){echo $_POST['roundp31']  ;}   ?>"></td>
                <td><input type="text" name="roundq31" class="custom-input" value="<?php if(isset($_POST['roundq31'])){echo $_POST['roundq31']  ;}   ?>"></td>
                <td><input type="text" name="roundr31" class="custom-input" value="<?php if(isset($_POST['roundr31'])){echo $_POST['roundr31']  ;}   ?>"></td>
                <td><input type="text" name="rounds31" class="custom-input" value="<?php if(isset($rounds31)){echo $rounds31 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">31</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb32" class="custom-input" value="<?php if(isset($_POST['roundb32'])){echo $_POST['roundb32']  ;}   ?>"></td>
                <td><input type="text" name="roundc32" class="custom-input" value="<?php if(isset($_POST['roundc32'])){echo $_POST['roundc32']  ;}   ?>"></td>
                <td><input type="text" name="roundd32" class="custom-input" value="<?php if(isset($_POST['roundd32'])){echo $_POST['roundd32']  ;}   ?>"></td>
                <td><input type="text" name="rounde32" class="custom-input" value="<?php if(isset($_POST['rounde32'])){echo $_POST['rounde32']  ;}   ?>"></td>
                <td><input type="text" name="roundf32" class="custom-input" value="<?php if(isset($_POST['roundf32'])){echo $_POST['roundf32']  ;}   ?>"></td>
                <td><input type="text" name="roundg32" class="custom-input" value="<?php if(isset($_POST['roundg32'])){echo $_POST['roundg32']  ;}   ?>"></td>
                <td><input type="text" name="roundh32" class="custom-input" value="<?php if(isset($_POST['roundh32'])){echo $_POST['roundh32']  ;}   ?>"></td>
                <td><input type="text" name="roundi32" class="custom-input" value="<?php if(isset($_POST['roundi32'])){echo $_POST['roundi32']  ;}   ?>"></td>
                <td><input type="text" name="roundj32" class="custom-input" value="<?php if(isset($_POST['roundj32'])){echo $_POST['roundj32']  ;}   ?>"></td>
                <td><input type="text" name="roundk32" class="custom-input" value="<?php if(isset($_POST['roundk32'])){echo $_POST['roundk32']  ;}   ?>"></td>
                <td><input type="text" name="roundl32" class="custom-input" value="<?php if(isset($_POST['roundl32'])){echo $_POST['roundl32']  ;}   ?>"></td>
                <td><input type="text" name="roundm32" class="custom-input" value="<?php if(isset($_POST['roundm32'])){echo $_POST['roundm32']  ;}   ?>"></td>
                <td><input type="text" name="roundn32" class="custom-input" value="<?php if(isset($_POST['roundn32'])){echo $_POST['roundn32']  ;}   ?>"></td>
                <td><input type="text" name="roundo32" class="custom-input" value="<?php if(isset($_POST['roundo32'])){echo $_POST['roundo32']  ;}   ?>"></td>
                <td><input type="text" name="roundp32" class="custom-input" value="<?php if(isset($_POST['roundp32'])){echo $_POST['roundp32']  ;}   ?>"></td>
                <td><input type="text" name="roundq32" class="custom-input" value="<?php if(isset($_POST['roundq32'])){echo $_POST['roundq32']  ;}   ?>"></td>
                <td><input type="text" name="roundr32" class="custom-input" value="<?php if(isset($_POST['roundr32'])){echo $_POST['roundr32']  ;}   ?>"></td>
                <td><input type="text" name="rounds32" class="custom-input" value="<?php if(isset($rounds32)){echo $rounds32 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">32</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb33" class="custom-input" value="<?php if(isset($_POST['roundb33'])){echo $_POST['roundb33']  ;}   ?>"></td>
                <td><input type="text" name="roundc33" class="custom-input" value="<?php if(isset($_POST['roundc33'])){echo $_POST['roundc33']  ;}   ?>"></td>
                <td><input type="text" name="roundd33" class="custom-input" value="<?php if(isset($_POST['roundd33'])){echo $_POST['roundd33']  ;}   ?>"></td>
                <td><input type="text" name="rounde33" class="custom-input" value="<?php if(isset($_POST['rounde33'])){echo $_POST['rounde33']  ;}   ?>"></td>
                <td><input type="text" name="roundf33" class="custom-input" value="<?php if(isset($_POST['roundf33'])){echo $_POST['roundf33']  ;}   ?>"></td>
                <td><input type="text" name="roundg33" class="custom-input" value="<?php if(isset($_POST['roundg33'])){echo $_POST['roundg33']  ;}   ?>"></td>
                <td><input type="text" name="roundh33" class="custom-input" value="<?php if(isset($_POST['roundh33'])){echo $_POST['roundh33']  ;}   ?>"></td>
                <td><input type="text" name="roundi33" class="custom-input" value="<?php if(isset($_POST['roundi33'])){echo $_POST['roundi33']  ;}   ?>"></td>
                <td><input type="text" name="roundj33" class="custom-input" value="<?php if(isset($_POST['roundj33'])){echo $_POST['roundj33']  ;}   ?>"></td>
                <td><input type="text" name="roundk33" class="custom-input" value="<?php if(isset($_POST['roundk33'])){echo $_POST['roundk33']  ;}   ?>"></td>
                <td><input type="text" name="roundl33" class="custom-input" value="<?php if(isset($_POST['roundl33'])){echo $_POST['roundl33']  ;}   ?>"></td>
                <td><input type="text" name="roundm33" class="custom-input" value="<?php if(isset($_POST['roundm33'])){echo $_POST['roundm33']  ;}   ?>"></td>
                <td><input type="text" name="roundn33" class="custom-input" value="<?php if(isset($_POST['roundn33'])){echo $_POST['roundn33']  ;}   ?>"></td>
                <td><input type="text" name="roundo33" class="custom-input" value="<?php if(isset($_POST['roundo33'])){echo $_POST['roundo33']  ;}   ?>"></td>
                <td><input type="text" name="roundp33" class="custom-input" value="<?php if(isset($_POST['roundp33'])){echo $_POST['roundp33']  ;}   ?>"></td>
                <td><input type="text" name="roundq33" class="custom-input" value="<?php if(isset($_POST['roundq33'])){echo $_POST['roundq33']  ;}   ?>"></td>
                <td><input type="text" name="roundr33" class="custom-input" value="<?php if(isset($_POST['roundr33'])){echo $_POST['roundr33']  ;}   ?>"></td>
                <td><input type="text" name="rounds33" class="custom-input" value="<?php if(isset($rounds33)){echo $rounds33 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">33</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb34" class="custom-input" value="<?php if(isset($_POST['roundb34'])){echo $_POST['roundb34']  ;}   ?>"></td>
                <td><input type="text" name="roundc34" class="custom-input" value="<?php if(isset($_POST['roundc34'])){echo $_POST['roundc34']  ;}   ?>"></td>
                <td><input type="text" name="roundd34" class="custom-input" value="<?php if(isset($_POST['roundd34'])){echo $_POST['roundd34']  ;}   ?>"></td>
                <td><input type="text" name="rounde34" class="custom-input" value="<?php if(isset($_POST['rounde34'])){echo $_POST['rounde34']  ;}   ?>"></td>
                <td><input type="text" name="roundf34" class="custom-input" value="<?php if(isset($_POST['roundf34'])){echo $_POST['roundf34']  ;}   ?>"></td>
                <td><input type="text" name="roundg34" class="custom-input" value="<?php if(isset($_POST['roundg34'])){echo $_POST['roundg34']  ;}   ?>"></td>
                <td><input type="text" name="roundh34" class="custom-input" value="<?php if(isset($_POST['roundh34'])){echo $_POST['roundh34']  ;}   ?>"></td>
                <td><input type="text" name="roundi34" class="custom-input" value="<?php if(isset($_POST['roundi34'])){echo $_POST['roundi34']  ;}   ?>"></td>
                <td><input type="text" name="roundj34" class="custom-input" value="<?php if(isset($_POST['roundj34'])){echo $_POST['roundj34']  ;}   ?>"></td>
                <td><input type="text" name="roundk34" class="custom-input" value="<?php if(isset($_POST['roundk34'])){echo $_POST['roundk34']  ;}   ?>"></td>
                <td><input type="text" name="roundl34" class="custom-input" value="<?php if(isset($_POST['roundl34'])){echo $_POST['roundl34']  ;}   ?>"></td>
                <td><input type="text" name="roundm34" class="custom-input" value="<?php if(isset($_POST['roundm34'])){echo $_POST['roundm34']  ;}   ?>"></td>
                <td><input type="text" name="roundn34" class="custom-input" value="<?php if(isset($_POST['roundn34'])){echo $_POST['roundn34']  ;}   ?>"></td>
                <td><input type="text" name="roundo34" class="custom-input" value="<?php if(isset($_POST['roundo34'])){echo $_POST['roundo34']  ;}   ?>"></td>
                <td><input type="text" name="roundp34" class="custom-input" value="<?php if(isset($_POST['roundp34'])){echo $_POST['roundp34']  ;}   ?>"></td>
                <td><input type="text" name="roundq34" class="custom-input" value="<?php if(isset($_POST['roundq34'])){echo $_POST['roundq34']  ;}   ?>"></td>
                <td><input type="text" name="roundr34" class="custom-input" value="<?php if(isset($_POST['roundr34'])){echo $_POST['roundr34']  ;}   ?>"></td>
                <td><input type="text" name="rounds34" class="custom-input" value="<?php if(isset($rounds34)){echo $rounds34 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">34</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb35" class="custom-input" value="<?php if(isset($_POST['roundb35'])){echo $_POST['roundb35']  ;}   ?>"></td>
                <td><input type="text" name="roundc35" class="custom-input" value="<?php if(isset($_POST['roundc35'])){echo $_POST['roundc35']  ;}   ?>"></td>
                <td><input type="text" name="roundd35" class="custom-input" value="<?php if(isset($_POST['roundd35'])){echo $_POST['roundd35']  ;}   ?>"></td>
                <td><input type="text" name="rounde35" class="custom-input" value="<?php if(isset($_POST['rounde35'])){echo $_POST['rounde35']  ;}   ?>"></td>
                <td><input type="text" name="roundf35" class="custom-input" value="<?php if(isset($_POST['roundf35'])){echo $_POST['roundf35']  ;}   ?>"></td>
                <td><input type="text" name="roundg35" class="custom-input" value="<?php if(isset($_POST['roundg35'])){echo $_POST['roundg35']  ;}   ?>"></td>
                <td><input type="text" name="roundh35" class="custom-input" value="<?php if(isset($_POST['roundh35'])){echo $_POST['roundh35']  ;}   ?>"></td>
                <td><input type="text" name="roundi35" class="custom-input" value="<?php if(isset($_POST['roundi35'])){echo $_POST['roundi35']  ;}   ?>"></td>
                <td><input type="text" name="roundj35" class="custom-input" value="<?php if(isset($_POST['roundj35'])){echo $_POST['roundj35']  ;}   ?>"></td>
                <td><input type="text" name="roundk35" class="custom-input" value="<?php if(isset($_POST['roundk35'])){echo $_POST['roundk35']  ;}   ?>"></td>
                <td><input type="text" name="roundl35" class="custom-input" value="<?php if(isset($_POST['roundl35'])){echo $_POST['roundl35']  ;}   ?>"></td>
                <td><input type="text" name="roundm35" class="custom-input" value="<?php if(isset($_POST['roundm35'])){echo $_POST['roundm35']  ;}   ?>"></td>
                <td><input type="text" name="roundn35" class="custom-input" value="<?php if(isset($_POST['roundn35'])){echo $_POST['roundn35']  ;}   ?>"></td>
                <td><input type="text" name="roundo35" class="custom-input" value="<?php if(isset($_POST['roundo35'])){echo $_POST['roundo35']  ;}   ?>"></td>
                <td><input type="text" name="roundp35" class="custom-input" value="<?php if(isset($_POST['roundp35'])){echo $_POST['roundp35']  ;}   ?>"></td>
                <td><input type="text" name="roundq35" class="custom-input" value="<?php if(isset($_POST['roundq35'])){echo $_POST['roundq35']  ;}   ?>"></td>
                <td><input type="text" name="roundr35" class="custom-input" value="<?php if(isset($_POST['roundr35'])){echo $_POST['roundr35']  ;}   ?>"></td>
                <td><input type="text" name="rounds35" class="custom-input" value="<?php if(isset($rounds35)){echo $rounds35 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">35</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb36" class="custom-input" value="<?php if(isset($_POST['roundb36'])){echo $_POST['roundb36']  ;}   ?>"></td>
                <td><input type="text" name="roundc36" class="custom-input" value="<?php if(isset($_POST['roundc36'])){echo $_POST['roundc36']  ;}   ?>"></td>
                <td><input type="text" name="roundd36" class="custom-input" value="<?php if(isset($_POST['roundd36'])){echo $_POST['roundd36']  ;}   ?>"></td>
                <td><input type="text" name="rounde36" class="custom-input" value="<?php if(isset($_POST['rounde36'])){echo $_POST['rounde36']  ;}   ?>"></td>
                <td><input type="text" name="roundf36" class="custom-input" value="<?php if(isset($_POST['roundf36'])){echo $_POST['roundf36']  ;}   ?>"></td>
                <td><input type="text" name="roundg36" class="custom-input" value="<?php if(isset($_POST['roundg36'])){echo $_POST['roundg36']  ;}   ?>"></td>
                <td><input type="text" name="roundh36" class="custom-input" value="<?php if(isset($_POST['roundh36'])){echo $_POST['roundh36']  ;}   ?>"></td>
                <td><input type="text" name="roundi36" class="custom-input" value="<?php if(isset($_POST['roundi36'])){echo $_POST['roundi36']  ;}   ?>"></td>
                <td><input type="text" name="roundj36" class="custom-input" value="<?php if(isset($_POST['roundj36'])){echo $_POST['roundj36']  ;}   ?>"></td>
                <td><input type="text" name="roundk36" class="custom-input" value="<?php if(isset($_POST['roundk36'])){echo $_POST['roundk36']  ;}   ?>"></td>
                <td><input type="text" name="roundl36" class="custom-input" value="<?php if(isset($_POST['roundl36'])){echo $_POST['roundl36']  ;}   ?>"></td>
                <td><input type="text" name="roundm36" class="custom-input" value="<?php if(isset($_POST['roundm36'])){echo $_POST['roundm36']  ;}   ?>"></td>
                <td><input type="text" name="roundn36" class="custom-input" value="<?php if(isset($_POST['roundn36'])){echo $_POST['roundn36']  ;}   ?>"></td>
                <td><input type="text" name="roundo36" class="custom-input" value="<?php if(isset($_POST['roundo36'])){echo $_POST['roundo36']  ;}   ?>"></td>
                <td><input type="text" name="roundp36" class="custom-input" value="<?php if(isset($_POST['roundp36'])){echo $_POST['roundp36']  ;}   ?>"></td>
                <td><input type="text" name="roundq36" class="custom-input" value="<?php if(isset($_POST['roundq36'])){echo $_POST['roundq36']  ;}   ?>"></td>
                <td><input type="text" name="roundr36" class="custom-input" value="<?php if(isset($_POST['roundr36'])){echo $_POST['roundr36']  ;}   ?>"></td>
                <td><input type="text" name="rounds36" class="custom-input" value="<?php if(isset($rounds36)){echo $rounds36 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">36</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb37" class="custom-input" value="<?php if(isset($_POST['roundb37'])){echo $_POST['roundb37']  ;}   ?>"></td>
                <td><input type="text" name="roundc37" class="custom-input" value="<?php if(isset($_POST['roundc37'])){echo $_POST['roundc37']  ;}   ?>"></td>
                <td><input type="text" name="roundd37" class="custom-input" value="<?php if(isset($_POST['roundd37'])){echo $_POST['roundd37']  ;}   ?>"></td>
                <td><input type="text" name="rounde37" class="custom-input" value="<?php if(isset($_POST['rounde37'])){echo $_POST['rounde37']  ;}   ?>"></td>
                <td><input type="text" name="roundf37" class="custom-input" value="<?php if(isset($_POST['roundf37'])){echo $_POST['roundf37']  ;}   ?>"></td>
                <td><input type="text" name="roundg37" class="custom-input" value="<?php if(isset($_POST['roundg37'])){echo $_POST['roundg37']  ;}   ?>"></td>
                <td><input type="text" name="roundh37" class="custom-input" value="<?php if(isset($_POST['roundh37'])){echo $_POST['roundh37']  ;}   ?>"></td>
                <td><input type="text" name="roundi37" class="custom-input" value="<?php if(isset($_POST['roundi37'])){echo $_POST['roundi37']  ;}   ?>"></td>
                <td><input type="text" name="roundj37" class="custom-input" value="<?php if(isset($_POST['roundj37'])){echo $_POST['roundj37']  ;}   ?>"></td>
                <td><input type="text" name="roundk37" class="custom-input" value="<?php if(isset($_POST['roundk37'])){echo $_POST['roundk37']  ;}   ?>"></td>
                <td><input type="text" name="roundl37" class="custom-input" value="<?php if(isset($_POST['roundl37'])){echo $_POST['roundl37']  ;}   ?>"></td>
                <td><input type="text" name="roundm37" class="custom-input" value="<?php if(isset($_POST['roundm37'])){echo $_POST['roundm37']  ;}   ?>"></td>
                <td><input type="text" name="roundn37" class="custom-input" value="<?php if(isset($_POST['roundn37'])){echo $_POST['roundn37']  ;}   ?>"></td>
                <td><input type="text" name="roundo37" class="custom-input" value="<?php if(isset($_POST['roundo37'])){echo $_POST['roundo37']  ;}   ?>"></td>
                <td><input type="text" name="roundp37" class="custom-input" value="<?php if(isset($_POST['roundp37'])){echo $_POST['roundp37']  ;}   ?>"></td>
                <td><input type="text" name="roundq37" class="custom-input" value="<?php if(isset($_POST['roundq37'])){echo $_POST['roundq37']  ;}   ?>"></td>
                <td><input type="text" name="roundr37" class="custom-input" value="<?php if(isset($_POST['roundr37'])){echo $_POST['roundr37']  ;}   ?>"></td>
                <td><input type="text" name="rounds37" class="custom-input" value="<?php if(isset($rounds37)){echo $rounds37 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">37</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb38" class="custom-input" value="<?php if(isset($_POST['roundb38'])){echo $_POST['roundb38']  ;}   ?>"></td>
                <td><input type="text" name="roundc38" class="custom-input" value="<?php if(isset($_POST['roundc38'])){echo $_POST['roundc38']  ;}   ?>"></td>
                <td><input type="text" name="roundd38" class="custom-input" value="<?php if(isset($_POST['roundd38'])){echo $_POST['roundd38']  ;}   ?>"></td>
                <td><input type="text" name="rounde38" class="custom-input" value="<?php if(isset($_POST['rounde38'])){echo $_POST['rounde38']  ;}   ?>"></td>
                <td><input type="text" name="roundf38" class="custom-input" value="<?php if(isset($_POST['roundf38'])){echo $_POST['roundf38']  ;}   ?>"></td>
                <td><input type="text" name="roundg38" class="custom-input" value="<?php if(isset($_POST['roundg38'])){echo $_POST['roundg38']  ;}   ?>"></td>
                <td><input type="text" name="roundh38" class="custom-input" value="<?php if(isset($_POST['roundh38'])){echo $_POST['roundh38']  ;}   ?>"></td>
                <td><input type="text" name="roundi38" class="custom-input" value="<?php if(isset($_POST['roundi38'])){echo $_POST['roundi38']  ;}   ?>"></td>
                <td><input type="text" name="roundj38" class="custom-input" value="<?php if(isset($_POST['roundj38'])){echo $_POST['roundj38']  ;}   ?>"></td>
                <td><input type="text" name="roundk38" class="custom-input" value="<?php if(isset($_POST['roundk38'])){echo $_POST['roundk38']  ;}   ?>"></td>
                <td><input type="text" name="roundl38" class="custom-input" value="<?php if(isset($_POST['roundl38'])){echo $_POST['roundl38']  ;}   ?>"></td>
                <td><input type="text" name="roundm38" class="custom-input" value="<?php if(isset($_POST['roundm38'])){echo $_POST['roundm38']  ;}   ?>"></td>
                <td><input type="text" name="roundn38" class="custom-input" value="<?php if(isset($_POST['roundn38'])){echo $_POST['roundn38']  ;}   ?>"></td>
                <td><input type="text" name="roundo38" class="custom-input" value="<?php if(isset($_POST['roundo38'])){echo $_POST['roundo38']  ;}   ?>"></td>
                <td><input type="text" name="roundp38" class="custom-input" value="<?php if(isset($_POST['roundp38'])){echo $_POST['roundp38']  ;}   ?>"></td>
                <td><input type="text" name="roundq38" class="custom-input" value="<?php if(isset($_POST['roundq38'])){echo $_POST['roundq38']  ;}   ?>"></td>
                <td><input type="text" name="roundr38" class="custom-input" value="<?php if(isset($_POST['roundr38'])){echo $_POST['roundr38']  ;}   ?>"></td>
                <td><input type="text" name="rounds38" class="custom-input" value="<?php if(isset($rounds38)){echo $rounds38 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">38</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb39" class="custom-input" value="<?php if(isset($_POST['roundb39'])){echo $_POST['roundb39']  ;}   ?>"></td>
                <td><input type="text" name="roundc39" class="custom-input" value="<?php if(isset($_POST['roundc39'])){echo $_POST['roundc39']  ;}   ?>"></td>
                <td><input type="text" name="roundd39" class="custom-input" value="<?php if(isset($_POST['roundd39'])){echo $_POST['roundd39']  ;}   ?>"></td>
                <td><input type="text" name="rounde39" class="custom-input" value="<?php if(isset($_POST['rounde39'])){echo $_POST['rounde39']  ;}   ?>"></td>
                <td><input type="text" name="roundf39" class="custom-input" value="<?php if(isset($_POST['roundf39'])){echo $_POST['roundf39']  ;}   ?>"></td>
                <td><input type="text" name="roundg39" class="custom-input" value="<?php if(isset($_POST['roundg39'])){echo $_POST['roundg39']  ;}   ?>"></td>
                <td><input type="text" name="roundh39" class="custom-input" value="<?php if(isset($_POST['roundh39'])){echo $_POST['roundh39']  ;}   ?>"></td>
                <td><input type="text" name="roundi39" class="custom-input" value="<?php if(isset($_POST['roundi39'])){echo $_POST['roundi39']  ;}   ?>"></td>
                <td><input type="text" name="roundj39" class="custom-input" value="<?php if(isset($_POST['roundj39'])){echo $_POST['roundj39']  ;}   ?>"></td>
                <td><input type="text" name="roundk39" class="custom-input" value="<?php if(isset($_POST['roundk39'])){echo $_POST['roundk39']  ;}   ?>"></td>
                <td><input type="text" name="roundl39" class="custom-input" value="<?php if(isset($_POST['roundl39'])){echo $_POST['roundl39']  ;}   ?>"></td>
                <td><input type="text" name="roundm39" class="custom-input" value="<?php if(isset($_POST['roundm39'])){echo $_POST['roundm39']  ;}   ?>"></td>
                <td><input type="text" name="roundn39" class="custom-input" value="<?php if(isset($_POST['roundn39'])){echo $_POST['roundn39']  ;}   ?>"></td>
                <td><input type="text" name="roundo39" class="custom-input" value="<?php if(isset($_POST['roundo39'])){echo $_POST['roundo39']  ;}   ?>"></td>
                <td><input type="text" name="roundp39" class="custom-input" value="<?php if(isset($_POST['roundp39'])){echo $_POST['roundp39']  ;}   ?>"></td>
                <td><input type="text" name="roundq39" class="custom-input" value="<?php if(isset($_POST['roundq39'])){echo $_POST['roundq39']  ;}   ?>"></td>
                <td><input type="text" name="roundr39" class="custom-input" value="<?php if(isset($_POST['roundr39'])){echo $_POST['roundr39']  ;}   ?>"></td>
                <td><input type="text" name="rounds39" class="custom-input" value="<?php if(isset($rounds39)){echo $rounds39 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">39</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb40" class="custom-input" value="<?php if(isset($_POST['roundb40'])){echo $_POST['roundb40']  ;}   ?>"></td>
                <td><input type="text" name="roundc40" class="custom-input" value="<?php if(isset($_POST['roundc40'])){echo $_POST['roundc40']  ;}   ?>"></td>
                <td><input type="text" name="roundd40" class="custom-input" value="<?php if(isset($_POST['roundd40'])){echo $_POST['roundd40']  ;}   ?>"></td>
                <td><input type="text" name="rounde40" class="custom-input" value="<?php if(isset($_POST['rounde40'])){echo $_POST['rounde40']  ;}   ?>"></td>
                <td><input type="text" name="roundf40" class="custom-input" value="<?php if(isset($_POST['roundf40'])){echo $_POST['roundf40']  ;}   ?>"></td>
                <td><input type="text" name="roundg40" class="custom-input" value="<?php if(isset($_POST['roundg40'])){echo $_POST['roundg40']  ;}   ?>"></td>
                <td><input type="text" name="roundh40" class="custom-input" value="<?php if(isset($_POST['roundh40'])){echo $_POST['roundh40']  ;}   ?>"></td>
                <td><input type="text" name="roundi40" class="custom-input" value="<?php if(isset($_POST['roundi40'])){echo $_POST['roundi40']  ;}   ?>"></td>
                <td><input type="text" name="roundj40" class="custom-input" value="<?php if(isset($_POST['roundj40'])){echo $_POST['roundj40']  ;}   ?>"></td>
                <td><input type="text" name="roundk40" class="custom-input" value="<?php if(isset($_POST['roundk40'])){echo $_POST['roundk40']  ;}   ?>"></td>
                <td><input type="text" name="roundl40" class="custom-input" value="<?php if(isset($_POST['roundl40'])){echo $_POST['roundl40']  ;}   ?>"></td>
                <td><input type="text" name="roundm40" class="custom-input" value="<?php if(isset($_POST['roundm40'])){echo $_POST['roundm40']  ;}   ?>"></td>
                <td><input type="text" name="roundn40" class="custom-input" value="<?php if(isset($_POST['roundn40'])){echo $_POST['roundn40']  ;}   ?>"></td>
                <td><input type="text" name="roundo40" class="custom-input" value="<?php if(isset($_POST['roundo40'])){echo $_POST['roundo40']  ;}   ?>"></td>
                <td><input type="text" name="roundp40" class="custom-input" value="<?php if(isset($_POST['roundp40'])){echo $_POST['roundp40']  ;}   ?>"></td>
                <td><input type="text" name="roundq40" class="custom-input" value="<?php if(isset($_POST['roundq40'])){echo $_POST['roundq40']  ;}   ?>"></td>
                <td><input type="text" name="roundr40" class="custom-input" value="<?php if(isset($_POST['roundr40'])){echo $_POST['roundr40']  ;}   ?>"></td>
                <td><input type="text" name="rounds40" class="custom-input" value="<?php if(isset($rounds40)){echo $rounds40 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">40</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb41" class="custom-input" value="<?php if(isset($_POST['roundb41'])){echo $_POST['roundb41']  ;}   ?>"></td>
                <td><input type="text" name="roundc41" class="custom-input" value="<?php if(isset($_POST['roundc41'])){echo $_POST['roundc41']  ;}   ?>"></td>
                <td><input type="text" name="roundd41" class="custom-input" value="<?php if(isset($_POST['roundd41'])){echo $_POST['roundd41']  ;}   ?>"></td>
                <td><input type="text" name="rounde41" class="custom-input" value="<?php if(isset($_POST['rounde41'])){echo $_POST['rounde41']  ;}   ?>"></td>
                <td><input type="text" name="roundf41" class="custom-input" value="<?php if(isset($_POST['roundf41'])){echo $_POST['roundf41']  ;}   ?>"></td>
                <td><input type="text" name="roundg41" class="custom-input" value="<?php if(isset($_POST['roundg41'])){echo $_POST['roundg41']  ;}   ?>"></td>
                <td><input type="text" name="roundh41" class="custom-input" value="<?php if(isset($_POST['roundh41'])){echo $_POST['roundh41']  ;}   ?>"></td>
                <td><input type="text" name="roundi41" class="custom-input" value="<?php if(isset($_POST['roundi41'])){echo $_POST['roundi41']  ;}   ?>"></td>
                <td><input type="text" name="roundj41" class="custom-input" value="<?php if(isset($_POST['roundj41'])){echo $_POST['roundj41']  ;}   ?>"></td>
                <td><input type="text" name="roundk41" class="custom-input" value="<?php if(isset($_POST['roundk41'])){echo $_POST['roundk41']  ;}   ?>"></td>
                <td><input type="text" name="roundl41" class="custom-input" value="<?php if(isset($_POST['roundl41'])){echo $_POST['roundl41']  ;}   ?>"></td>
                <td><input type="text" name="roundm41" class="custom-input" value="<?php if(isset($_POST['roundm41'])){echo $_POST['roundm41']  ;}   ?>"></td>
                <td><input type="text" name="roundn41" class="custom-input" value="<?php if(isset($_POST['roundn41'])){echo $_POST['roundn41']  ;}   ?>"></td>
                <td><input type="text" name="roundo41" class="custom-input" value="<?php if(isset($_POST['roundo41'])){echo $_POST['roundo41']  ;}   ?>"></td>
                <td><input type="text" name="roundp41" class="custom-input" value="<?php if(isset($_POST['roundp41'])){echo $_POST['roundp41']  ;}   ?>"></td>
                <td><input type="text" name="roundq41" class="custom-input" value="<?php if(isset($_POST['roundq41'])){echo $_POST['roundq41']  ;}   ?>"></td>
                <td><input type="text" name="roundr41" class="custom-input" value="<?php if(isset($_POST['roundr41'])){echo $_POST['roundr41']  ;}   ?>"></td>
                <td><input type="text" name="rounds41" class="custom-input" value="<?php if(isset($rounds41)){echo $rounds41 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">41</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb42" class="custom-input" value="<?php if(isset($_POST['roundb42'])){echo $_POST['roundb42']  ;}   ?>"></td>
                <td><input type="text" name="roundc42" class="custom-input" value="<?php if(isset($_POST['roundc42'])){echo $_POST['roundc42']  ;}   ?>"></td>
                <td><input type="text" name="roundd42" class="custom-input" value="<?php if(isset($_POST['roundd42'])){echo $_POST['roundd42']  ;}   ?>"></td>
                <td><input type="text" name="rounde42" class="custom-input" value="<?php if(isset($_POST['rounde42'])){echo $_POST['rounde42']  ;}   ?>"></td>
                <td><input type="text" name="roundf42" class="custom-input" value="<?php if(isset($_POST['roundf42'])){echo $_POST['roundf42']  ;}   ?>"></td>
                <td><input type="text" name="roundg42" class="custom-input" value="<?php if(isset($_POST['roundg42'])){echo $_POST['roundg42']  ;}   ?>"></td>
                <td><input type="text" name="roundh42" class="custom-input" value="<?php if(isset($_POST['roundh42'])){echo $_POST['roundh42']  ;}   ?>"></td>
                <td><input type="text" name="roundi42" class="custom-input" value="<?php if(isset($_POST['roundi42'])){echo $_POST['roundi42']  ;}   ?>"></td>
                <td><input type="text" name="roundj42" class="custom-input" value="<?php if(isset($_POST['roundj42'])){echo $_POST['roundj42']  ;}   ?>"></td>
                <td><input type="text" name="roundk42" class="custom-input" value="<?php if(isset($_POST['roundk42'])){echo $_POST['roundk42']  ;}   ?>"></td>
                <td><input type="text" name="roundl42" class="custom-input" value="<?php if(isset($_POST['roundl42'])){echo $_POST['roundl42']  ;}   ?>"></td>
                <td><input type="text" name="roundm42" class="custom-input" value="<?php if(isset($_POST['roundm42'])){echo $_POST['roundm42']  ;}   ?>"></td>
                <td><input type="text" name="roundn42" class="custom-input" value="<?php if(isset($_POST['roundn42'])){echo $_POST['roundn42']  ;}   ?>"></td>
                <td><input type="text" name="roundo42" class="custom-input" value="<?php if(isset($_POST['roundo42'])){echo $_POST['roundo42']  ;}   ?>"></td>
                <td><input type="text" name="roundp42" class="custom-input" value="<?php if(isset($_POST['roundp42'])){echo $_POST['roundp42']  ;}   ?>"></td>
                <td><input type="text" name="roundq42" class="custom-input" value="<?php if(isset($_POST['roundq42'])){echo $_POST['roundq42']  ;}   ?>"></td>
                <td><input type="text" name="roundr42" class="custom-input" value="<?php if(isset($_POST['roundr42'])){echo $_POST['roundr42']  ;}   ?>"></td>
                <td><input type="text" name="rounds42" class="custom-input" value="<?php if(isset($rounds42)){echo $rounds42 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">42</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb43" class="custom-input" value="<?php if(isset($_POST['roundb43'])){echo $_POST['roundb43']  ;}   ?>"></td>
                <td><input type="text" name="roundc43" class="custom-input" value="<?php if(isset($_POST['roundc43'])){echo $_POST['roundc43']  ;}   ?>"></td>
                <td><input type="text" name="roundd43" class="custom-input" value="<?php if(isset($_POST['roundd43'])){echo $_POST['roundd43']  ;}   ?>"></td>
                <td><input type="text" name="rounde43" class="custom-input" value="<?php if(isset($_POST['rounde43'])){echo $_POST['rounde43']  ;}   ?>"></td>
                <td><input type="text" name="roundf43" class="custom-input" value="<?php if(isset($_POST['roundf43'])){echo $_POST['roundf43']  ;}   ?>"></td>
                <td><input type="text" name="roundg43" class="custom-input" value="<?php if(isset($_POST['roundg43'])){echo $_POST['roundg43']  ;}   ?>"></td>
                <td><input type="text" name="roundh43" class="custom-input" value="<?php if(isset($_POST['roundh43'])){echo $_POST['roundh43']  ;}   ?>"></td>
                <td><input type="text" name="roundi43" class="custom-input" value="<?php if(isset($_POST['roundi43'])){echo $_POST['roundi43']  ;}   ?>"></td>
                <td><input type="text" name="roundj43" class="custom-input" value="<?php if(isset($_POST['roundj43'])){echo $_POST['roundj43']  ;}   ?>"></td>
                <td><input type="text" name="roundk43" class="custom-input" value="<?php if(isset($_POST['roundk43'])){echo $_POST['roundk43']  ;}   ?>"></td>
                <td><input type="text" name="roundl43" class="custom-input" value="<?php if(isset($_POST['roundl43'])){echo $_POST['roundl43']  ;}   ?>"></td>
                <td><input type="text" name="roundm43" class="custom-input" value="<?php if(isset($_POST['roundm43'])){echo $_POST['roundm43']  ;}   ?>"></td>
                <td><input type="text" name="roundn43" class="custom-input" value="<?php if(isset($_POST['roundn43'])){echo $_POST['roundn43']  ;}   ?>"></td>
                <td><input type="text" name="roundo43" class="custom-input" value="<?php if(isset($_POST['roundo43'])){echo $_POST['roundo43']  ;}   ?>"></td>
                <td><input type="text" name="roundp43" class="custom-input" value="<?php if(isset($_POST['roundp43'])){echo $_POST['roundp43']  ;}   ?>"></td>
                <td><input type="text" name="roundq43" class="custom-input" value="<?php if(isset($_POST['roundq43'])){echo $_POST['roundq43']  ;}   ?>"></td>
                <td><input type="text" name="roundr43" class="custom-input" value="<?php if(isset($_POST['roundr43'])){echo $_POST['roundr43']  ;}   ?>"></td>
                <td><input type="text" name="rounds43" class="custom-input" value="<?php if(isset($rounds43)){echo $rounds43 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position:sticky;left:0;background-color:white;">43</td>
                <td style="position:sticky; left:0; background-color:white;"></td>
                <td><input type="text" name="roundb44" class="custom-input" value="<?php if(isset($_POST['roundb44'])){echo $_POST['roundb44']  ;}   ?>"></td>
                <td><input type="text" name="roundc44" class="custom-input" value="<?php if(isset($_POST['roundc44'])){echo $_POST['roundc44']  ;}   ?>"></td>
                <td><input type="text" name="roundd44" class="custom-input" value="<?php if(isset($_POST['roundd44'])){echo $_POST['roundd44']  ;}   ?>"></td>
                <td><input type="text" name="rounde44" class="custom-input" value="<?php if(isset($_POST['rounde44'])){echo $_POST['rounde44']  ;}   ?>"></td>
                <td><input type="text" name="roundf44" class="custom-input" value="<?php if(isset($_POST['roundf44'])){echo $_POST['roundf44']  ;}   ?>"></td>
                <td><input type="text" name="roundg44" class="custom-input" value="<?php if(isset($_POST['roundg44'])){echo $_POST['roundg44']  ;}   ?>"></td>
                <td><input type="text" name="roundh44" class="custom-input" value="<?php if(isset($_POST['roundh44'])){echo $_POST['roundh44']  ;}   ?>"></td>
                <td><input type="text" name="roundi44" class="custom-input" value="<?php if(isset($_POST['roundi44'])){echo $_POST['roundi44']  ;}   ?>"></td>
                <td><input type="text" name="roundj44" class="custom-input" value="<?php if(isset($_POST['roundj44'])){echo $_POST['roundj44']  ;}   ?>"></td>
                <td><input type="text" name="roundk44" class="custom-input" value="<?php if(isset($_POST['roundk44'])){echo $_POST['roundk44']  ;}   ?>"></td>
                <td><input type="text" name="roundl44" class="custom-input" value="<?php if(isset($_POST['roundl44'])){echo $_POST['roundl44']  ;}   ?>"></td>
                <td><input type="text" name="roundm44" class="custom-input" value="<?php if(isset($_POST['roundm44'])){echo $_POST['roundm44']  ;}   ?>"></td>
                <td><input type="text" name="roundn44" class="custom-input" value="<?php if(isset($_POST['roundn44'])){echo $_POST['roundn44']  ;}   ?>"></td>
                <td><input type="text" name="roundo44" class="custom-input" value="<?php if(isset($_POST['roundo44'])){echo $_POST['roundo44']  ;}   ?>"></td>
                <td><input type="text" name="roundp44" class="custom-input" value="<?php if(isset($_POST['roundp44'])){echo $_POST['roundp44']  ;}   ?>"></td>
                <td><input type="text" name="roundq44" class="custom-input" value="<?php if(isset($_POST['roundq44'])){echo $_POST['roundq44']  ;}   ?>"></td>
                <td><input type="text" name="roundr44" class="custom-input" value="<?php if(isset($_POST['roundr44'])){echo $_POST['roundr44']  ;}   ?>"></td>
                <td><input type="text" name="rounds44" class="custom-input" value="<?php if(isset($rounds44)){echo $rounds44 ; }else { echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <input type="submit" name="roundsubmit" value='Refresh' class="roundsubmit">
        </form>
    </div>
    <script>
        var quantityInputs = document.querySelectorAll('.quantity');

        quantityInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                if (this.value <= 0) {
                    this.setCustomValidity("Value must be greater than 0");
                } else {
                    this.setCustomValidity("");
                }
            });
        });
    </script>
</body>

</html>