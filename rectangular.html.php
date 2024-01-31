<?php 
require 'navbar.html.php';

if (isset($_POST['rectsubmit'])) {

  // table 2 work below
  $rectb11 = (floatval($_REQUEST['rectc11']) * floatval($_REQUEST['rectd11']) > 599) ? floatval($_REQUEST['recte11']) : 0;
  $rectb12 = (floatval($_REQUEST['rectc12']) * floatval($_REQUEST['rectd12']) > 599) ? floatval($_REQUEST['recte12']) : 0;
  $rectb13 = (floatval($_REQUEST['rectc13']) * floatval($_REQUEST['rectd13']) > 599) ? floatval($_REQUEST['recte13']) : 0;
  $rectb14 = (floatval($_REQUEST['rectc14']) * floatval($_REQUEST['rectd14']) > 599) ? floatval($_REQUEST['recte14']) : 0;
  $rectb15 = (floatval($_REQUEST['rectc15']) * floatval($_REQUEST['rectd15']) > 599) ? floatval($_REQUEST['recte15']) : 0;
  $rectb16 = (floatval($_REQUEST['rectc16']) * floatval($_REQUEST['rectd16']) > 599) ? floatval($_REQUEST['recte16']) : 0;
  $rectb17 = (floatval($_REQUEST['rectc17']) * floatval($_REQUEST['rectd17']) > 599) ? floatval($_REQUEST['recte17']) : 0;
  $rectb18 = (floatval($_REQUEST['rectc18']) * floatval($_REQUEST['rectd18']) > 599) ? floatval($_REQUEST['recte18']) : 0;
  $rectb19 = (floatval($_REQUEST['rectc19']) * floatval($_REQUEST['rectd19']) > 599) ? floatval($_REQUEST['recte19']) : 0;
  $rectb20 = (floatval($_REQUEST['rectc20']) * floatval($_REQUEST['rectd20']) > 599) ? floatval($_REQUEST['recte20']) : 0;
  $rectb21 = (floatval($_REQUEST['rectc21']) * floatval($_REQUEST['rectd21']) > 599) ? floatval($_REQUEST['recte21']) : 0;
  $rectb22 = (floatval($_REQUEST['rectc22']) * floatval($_REQUEST['rectd22']) > 599) ? floatval($_REQUEST['recte22']) : 0;
  $rectb23 = (floatval($_REQUEST['rectc23']) * floatval($_REQUEST['rectd23']) > 599) ? floatval($_REQUEST['recte23']) : 0;
  $rectb24 = (floatval($_REQUEST['rectc24']) * floatval($_REQUEST['rectd24']) > 599) ? floatval($_REQUEST['recte24']) : 0;
  $rectb25 = (floatval($_REQUEST['rectc25']) * floatval($_REQUEST['rectd25']) > 599) ? floatval($_REQUEST['recte25']) : 0;
  $rectb26 = (floatval($_REQUEST['rectc26']) * floatval($_REQUEST['rectd26']) > 599) ? floatval($_REQUEST['recte26']) : 0;
  $rectb27 = (floatval($_REQUEST['rectc27']) * floatval($_REQUEST['rectd27']) > 599) ? floatval($_REQUEST['recte27']) : 0;
  $rectb28 = (floatval($_REQUEST['rectc28']) * floatval($_REQUEST['rectd28']) > 599) ? floatval($_REQUEST['recte28']) : 0;
  $rectb29 = (floatval($_REQUEST['rectc29']) * floatval($_REQUEST['rectd29']) > 599) ? floatval($_REQUEST['recte29']) : 0;
  $rectb30 = (floatval($_REQUEST['rectc30']) * floatval($_REQUEST['rectd30']) > 599) ? floatval($_REQUEST['recte30']) : 0;
  $rectb31 = (floatval($_REQUEST['rectc31']) * floatval($_REQUEST['rectd31']) > 599) ? floatval($_REQUEST['recte31']) : 0;
  $rectb32 = (floatval($_REQUEST['rectc32']) * floatval($_REQUEST['rectd32']) > 599) ? floatval($_REQUEST['recte32']) : 0;
  $rectb33 = (floatval($_REQUEST['rectc33']) * floatval($_REQUEST['rectd33']) > 599) ? floatval($_REQUEST['recte33']) : 0;
  $rectb34 = (floatval($_REQUEST['rectc34']) * floatval($_REQUEST['rectd34']) > 599) ? floatval($_REQUEST['recte34']) : 0;
  $rectb35 = (floatval($_REQUEST['rectc35']) * floatval($_REQUEST['rectd35']) > 599) ? floatval($_REQUEST['recte35']) : 0;
  $rectb36 = (floatval($_REQUEST['rectc36']) * floatval($_REQUEST['rectd36']) > 599) ? floatval($_REQUEST['recte36']) : 0;
  $rectb37 = (floatval($_REQUEST['rectc37']) * floatval($_REQUEST['rectd37']) > 599) ? floatval($_REQUEST['recte37']) : 0;
  $rectb38 = (floatval($_REQUEST['rectc38']) * floatval($_REQUEST['rectd38']) > 599) ? floatval($_REQUEST['recte38']) : 0;
  $rectb39 = (floatval($_REQUEST['rectc39']) * floatval($_REQUEST['rectd39']) > 599) ? floatval($_REQUEST['recte39']) : 0;
  $rectb40 = (floatval($_REQUEST['rectc40']) * floatval($_REQUEST['rectd40']) > 599) ? floatval($_REQUEST['recte40']) : 0;
  $rectb41 = (floatval($_REQUEST['rectc41']) * floatval($_REQUEST['rectd41']) > 599) ? floatval($_REQUEST['recte41']) : 0;
  $rectb42 = (floatval($_REQUEST['rectc42']) * floatval($_REQUEST['rectd42']) > 599) ? floatval($_REQUEST['recte42']) : 0;
  $rectb43 = (floatval($_REQUEST['rectc43']) * floatval($_REQUEST['rectd43']) > 599) ? floatval($_REQUEST['recte43']) : 0;
 
  $rectk1 = floatval($_REQUEST['rectd2']) * 4;

  $rectf11 = round((((floatval($_REQUEST['recte11']) * (floatval($_REQUEST['rectc11']) + floatval($_REQUEST['rectd11']) + floatval($rectk1))) / 6)), 2);
  $rectg11 = round((((0 < $_REQUEST['rectd11'] && $_REQUEST['rectd11'] <= 13) && (0 < $_REQUEST['rectc11'] && $_REQUEST['rectc11'] <= 13)) ? $rectf11 : 0), 2);
  $recth11 = round(((((13 < $_REQUEST['rectd11'] && $_REQUEST['rectd11'] <= 30) && $_REQUEST['rectc11'] <= 30) || ((13 < $_REQUEST['rectc11'] && $_REQUEST['rectc11'] <= 30) && $_REQUEST['rectd11'] <= 30)) ? $rectf11 : 0), 2);
  $recti11 = round(((((30 < $_REQUEST['rectd11'] && $_REQUEST['rectd11'] <= 60) && $_REQUEST['rectc11'] <= 60) || ((30 < $_REQUEST['rectc11'] && $_REQUEST['rectc11'] <= 60) && $_REQUEST['rectd11'] <= 60)) ? $rectf11 : 0), 2);
  $rectj11 = round(((((60 < $_REQUEST['rectd11'] && $_REQUEST['rectd11'] <= 90) && $_REQUEST['rectc11'] <= 90) || ((60 < $_REQUEST['rectc11'] && $_REQUEST['rectc11'] <= 90) && $_REQUEST['rectd11'] <= 90)) ? $rectf11 : 0), 2);
  $rectk11 = round((((90 < $_REQUEST['rectd11']) || (90 < $_REQUEST['rectc11'])) ? $rectf11 : 0), 2);

  $rectf12 = round((((floatval($_REQUEST['recte12']) * (floatval($_REQUEST['rectc12']) + floatval($_REQUEST['rectd12']) + floatval($rectk1))) / 6)), 2);
  $rectg12 = round((((0 < $_REQUEST['rectd12'] && $_REQUEST['rectd12'] <= 13) && (0 < $_REQUEST['rectc12'] && $_REQUEST['rectc12'] <= 13)) ? $rectf12 : 0), 2);
  $recth12 = round(((((13 < $_REQUEST['rectd12'] && $_REQUEST['rectd12'] <= 30) && $_REQUEST['rectc12'] <= 30) || ((13 < $_REQUEST['rectc12'] && $_REQUEST['rectc12'] <= 30) && $_REQUEST['rectd12'] <= 30)) ? $rectf12 : 0), 2);
  $recti12 = round(((((30 < $_REQUEST['rectd12'] && $_REQUEST['rectd12'] <= 60) && $_REQUEST['rectc12'] <= 60) || ((30 < $_REQUEST['rectc12'] && $_REQUEST['rectc12'] <= 60) && $_REQUEST['rectd12'] <= 60)) ? $rectf12 : 0), 2);
  $rectj12 = round(((((60 < $_REQUEST['rectd12'] && $_REQUEST['rectd12'] <= 90) && $_REQUEST['rectc12'] <= 90) || ((60 < $_REQUEST['rectc12'] && $_REQUEST['rectc12'] <= 90) && $_REQUEST['rectd12'] <= 90)) ? $rectf12 : 0), 2);
  $rectk12 = round((((90 < $_REQUEST['rectd12']) || (90 < $_REQUEST['rectc12'])) ? $rectf12 : 0), 2);

  $rectf13 = round((((floatval($_REQUEST['recte13']) * (floatval($_REQUEST['rectc13']) + floatval($_REQUEST['rectd13']) + floatval($rectk1))) / 6)), 2);
  $rectg13 = round((((0 < $_REQUEST['rectd13'] && $_REQUEST['rectd13'] <= 13) && (0 < $_REQUEST['rectc13'] && $_REQUEST['rectc13'] <= 13)) ? $rectf13 : 0), 2);
  $recth13 = round(((((13 < $_REQUEST['rectd13'] && $_REQUEST['rectd13'] <= 30) && $_REQUEST['rectc13'] <= 30) || ((13 < $_REQUEST['rectc13'] && $_REQUEST['rectc13'] <= 30) && $_REQUEST['rectd13'] <= 30)) ? $rectf13 : 0), 2);
  $recti13 = round(((((30 < $_REQUEST['rectd13'] && $_REQUEST['rectd13'] <= 60) && $_REQUEST['rectc13'] <= 60) || ((30 < $_REQUEST['rectc13'] && $_REQUEST['rectc13'] <= 60) && $_REQUEST['rectd13'] <= 60)) ? $rectf13 : 0), 2);
  $rectj13 = round(((((60 < $_REQUEST['rectd13'] && $_REQUEST['rectd13'] <= 90) && $_REQUEST['rectc13'] <= 90) || ((60 < $_REQUEST['rectc13'] && $_REQUEST['rectc13'] <= 90) && $_REQUEST['rectd13'] <= 90)) ? $rectf13 : 0), 2);
  $rectk13 = round((((90 < $_REQUEST['rectd13']) || (90 < $_REQUEST['rectc13'])) ? $rectf13 : 0), 2);

  $rectf14 = round((((floatval($_REQUEST['recte14']) * (floatval($_REQUEST['rectc14']) + floatval($_REQUEST['rectd14']) + floatval($rectk1))) / 6)), 2);
  $rectg14 = round((((0 < $_REQUEST['rectd14'] && $_REQUEST['rectd14'] <= 13) && (0 < $_REQUEST['rectc14'] && $_REQUEST['rectc14'] <= 13)) ? $rectf14 : 0), 2);
  $recth14 = round(((((13 < $_REQUEST['rectd14'] && $_REQUEST['rectd14'] <= 30) && $_REQUEST['rectc14'] <= 30) || ((13 < $_REQUEST['rectc14'] && $_REQUEST['rectc14'] <= 30) && $_REQUEST['rectd14'] <= 30)) ? $rectf14 : 0), 2);
  $recti14 = round(((((30 < $_REQUEST['rectd14'] && $_REQUEST['rectd14'] <= 60) && $_REQUEST['rectc14'] <= 60) || ((30 < $_REQUEST['rectc14'] && $_REQUEST['rectc14'] <= 60) && $_REQUEST['rectd14'] <= 60)) ? $rectf14 : 0), 2);
  $rectj14 = round(((((60 < $_REQUEST['rectd14'] && $_REQUEST['rectd14'] <= 90) && $_REQUEST['rectc14'] <= 90) || ((60 < $_REQUEST['rectc14'] && $_REQUEST['rectc14'] <= 90) && $_REQUEST['rectd14'] <= 90)) ? $rectf14 : 0), 2);
  $rectk14 = round((((90 < $_REQUEST['rectd14']) || (90 < $_REQUEST['rectc14'])) ? $rectf14 : 0), 2);


  $rectf15 = round((((floatval($_REQUEST['recte15']) * (floatval($_REQUEST['rectc15']) + floatval($_REQUEST['rectd15']) + floatval($rectk1))) / 6)), 2);
  $rectg15 = round((((0 < $_REQUEST['rectd15'] && $_REQUEST['rectd15'] <= 13) && (0 < $_REQUEST['rectc15'] && $_REQUEST['rectc15'] <= 13)) ? $rectf15 : 0), 2);
  $recth15 = round(((((13 < $_REQUEST['rectd15'] && $_REQUEST['rectd15'] <= 30) && $_REQUEST['rectc15'] <= 30) || ((13 < $_REQUEST['rectc15'] && $_REQUEST['rectc15'] <= 30) && $_REQUEST['rectd15'] <= 30)) ? $rectf15 : 0), 2);
  $recti15 = round(((((30 < $_REQUEST['rectd15'] && $_REQUEST['rectd15'] <= 60) && $_REQUEST['rectc15'] <= 60) || ((30 < $_REQUEST['rectc15'] && $_REQUEST['rectc15'] <= 60) && $_REQUEST['rectd15'] <= 60)) ? $rectf15 : 0), 2);
  $rectj15 = round(((((60 < $_REQUEST['rectd15'] && $_REQUEST['rectd15'] <= 90) && $_REQUEST['rectc15'] <= 90) || ((60 < $_REQUEST['rectc15'] && $_REQUEST['rectc15'] <= 90) && $_REQUEST['rectd15'] <= 90)) ? $rectf15 : 0), 2);
  $rectk15 = round((((90 < $_REQUEST['rectd15']) || (90 < $_REQUEST['rectc15'])) ? $rectf15 : 0), 2);


  $rectf16 = round((((floatval($_REQUEST['recte16']) * (floatval($_REQUEST['rectc16']) + floatval($_REQUEST['rectd16']) + floatval($rectk1))) / 6)), 2);
  $rectg16 = round((((0 < $_REQUEST['rectd16'] && $_REQUEST['rectd16'] <= 13) && (0 < $_REQUEST['rectc16'] && $_REQUEST['rectc16'] <= 13)) ? $rectf16 : 0), 2);
  $recth16 = round(((((13 < $_REQUEST['rectd16'] && $_REQUEST['rectd16'] <= 30) && $_REQUEST['rectc16'] <= 30) || ((13 < $_REQUEST['rectc16'] && $_REQUEST['rectc16'] <= 30) && $_REQUEST['rectd16'] <= 30)) ? $rectf16 : 0), 2);
  $recti16 = round(((((30 < $_REQUEST['rectd16'] && $_REQUEST['rectd16'] <= 60) && $_REQUEST['rectc16'] <= 60) || ((30 < $_REQUEST['rectc16'] && $_REQUEST['rectc16'] <= 60) && $_REQUEST['rectd16'] <= 60)) ? $rectf16 : 0), 2);
  $rectj16 = round(((((60 < $_REQUEST['rectd16'] && $_REQUEST['rectd16'] <= 90) && $_REQUEST['rectc16'] <= 90) || ((60 < $_REQUEST['rectc16'] && $_REQUEST['rectc16'] <= 90) && $_REQUEST['rectd16'] <= 90)) ? $rectf16 : 0), 2);
  $rectk16 = round((((90 < $_REQUEST['rectd16']) || (90 < $_REQUEST['rectc16'])) ? $rectf16 : 0), 2);


  $rectf17 = round((((floatval($_REQUEST['recte17']) * (floatval($_REQUEST['rectc17']) + floatval($_REQUEST['rectd17']) + floatval($rectk1))) / 6)), 2);
  $rectg17 = round((((0 < $_REQUEST['rectd17'] && $_REQUEST['rectd17'] <= 13) && (0 < $_REQUEST['rectc17'] && $_REQUEST['rectc17'] <= 13)) ? $rectf17 : 0), 2);
  $recth17 = round(((((13 < $_REQUEST['rectd17'] && $_REQUEST['rectd17'] <= 30) && $_REQUEST['rectc17'] <= 30) || ((13 < $_REQUEST['rectc17'] && $_REQUEST['rectc17'] <= 30) && $_REQUEST['rectd17'] <= 30)) ? $rectf17 : 0), 2);
  $recti17 = round(((((30 < $_REQUEST['rectd17'] && $_REQUEST['rectd17'] <= 60) && $_REQUEST['rectc17'] <= 60) || ((30 < $_REQUEST['rectc17'] && $_REQUEST['rectc17'] <= 60) && $_REQUEST['rectd17'] <= 60)) ? $rectf17 : 0), 2);
  $rectj17 = round(((((60 < $_REQUEST['rectd17'] && $_REQUEST['rectd17'] <= 90) && $_REQUEST['rectc17'] <= 90) || ((60 < $_REQUEST['rectc17'] && $_REQUEST['rectc17'] <= 90) && $_REQUEST['rectd17'] <= 90)) ? $rectf17 : 0), 2);
  $rectk17 = round((((90 < $_REQUEST['rectd17']) || (90 < $_REQUEST['rectc17'])) ? $rectf17 : 0), 2);

  $rectf18 = round((((floatval($_REQUEST['recte18']) * (floatval($_REQUEST['rectc18']) + floatval($_REQUEST['rectd18']) + floatval($rectk1))) / 6)), 2);
  $rectg18 = round((((0 < $_REQUEST['rectd18'] && $_REQUEST['rectd18'] <= 13) && (0 < $_REQUEST['rectc18'] && $_REQUEST['rectc18'] <= 13)) ? $rectf18 : 0), 2);
  $recth18 = round(((((13 < $_REQUEST['rectd18'] && $_REQUEST['rectd18'] <= 30) && $_REQUEST['rectc18'] <= 30) || ((13 < $_REQUEST['rectc18'] && $_REQUEST['rectc18'] <= 30) && $_REQUEST['rectd18'] <= 30)) ? $rectf18 : 0), 2);
  $recti18 = round(((((30 < $_REQUEST['rectd18'] && $_REQUEST['rectd18'] <= 60) && $_REQUEST['rectc18'] <= 60) || ((30 < $_REQUEST['rectc18'] && $_REQUEST['rectc18'] <= 60) && $_REQUEST['rectd18'] <= 60)) ? $rectf18 : 0), 2);
  $rectj18 = round(((((60 < $_REQUEST['rectd18'] && $_REQUEST['rectd18'] <= 90) && $_REQUEST['rectc18'] <= 90) || ((60 < $_REQUEST['rectc18'] && $_REQUEST['rectc18'] <= 90) && $_REQUEST['rectd18'] <= 90)) ? $rectf18 : 0), 2);
  $rectk18 = round((((90 < $_REQUEST['rectd18']) || (90 < $_REQUEST['rectc18'])) ? $rectf18 : 0), 2);


  $rectf19 = round((((floatval($_REQUEST['recte19']) * (floatval($_REQUEST['rectc19']) + floatval($_REQUEST['rectd19']) + floatval($rectk1))) / 6)), 2);
  $rectg19 = round((((0 < $_REQUEST['rectd19'] && $_REQUEST['rectd19'] <= 13) && (0 < $_REQUEST['rectc19'] && $_REQUEST['rectc19'] <= 13)) ? $rectf19 : 0), 2);
  $recth19 = round(((((13 < $_REQUEST['rectd19'] && $_REQUEST['rectd19'] <= 30) && $_REQUEST['rectc19'] <= 30) || ((13 < $_REQUEST['rectc19'] && $_REQUEST['rectc19'] <= 30) && $_REQUEST['rectd19'] <= 30)) ? $rectf19 : 0), 2);
  $recti19 = round(((((30 < $_REQUEST['rectd19'] && $_REQUEST['rectd19'] <= 60) && $_REQUEST['rectc19'] <= 60) || ((30 < $_REQUEST['rectc19'] && $_REQUEST['rectc19'] <= 60) && $_REQUEST['rectd19'] <= 60)) ? $rectf19 : 0), 2);
  $rectj19 = round(((((60 < $_REQUEST['rectd19'] && $_REQUEST['rectd19'] <= 90) && $_REQUEST['rectc19'] <= 90) || ((60 < $_REQUEST['rectc19'] && $_REQUEST['rectc19'] <= 90) && $_REQUEST['rectd19'] <= 90)) ? $rectf19 : 0), 2);
  $rectk19 = round((((90 < $_REQUEST['rectd19']) || (90 < $_REQUEST['rectc19'])) ? $rectf19 : 0), 2);


  $rectf20 = round((((floatval($_REQUEST['recte20']) * (floatval($_REQUEST['rectc20']) + floatval($_REQUEST['rectd20']) + floatval($rectk1))) / 6)), 2);
  $rectg20 = round((((0 < $_REQUEST['rectd20'] && $_REQUEST['rectd20'] <= 13) && (0 < $_REQUEST['rectc20'] && $_REQUEST['rectc20'] <= 13)) ? $rectf20 : 0), 2);
  $recth20 = round(((((13 < $_REQUEST['rectd20'] && $_REQUEST['rectd20'] <= 30) && $_REQUEST['rectc20'] <= 30) || ((13 < $_REQUEST['rectc20'] && $_REQUEST['rectc20'] <= 30) && $_REQUEST['rectd20'] <= 30)) ? $rectf20 : 0), 2);
  $recti20 = round(((((30 < $_REQUEST['rectd20'] && $_REQUEST['rectd20'] <= 60) && $_REQUEST['rectc20'] <= 60) || ((30 < $_REQUEST['rectc20'] && $_REQUEST['rectc20'] <= 60) && $_REQUEST['rectd20'] <= 60)) ? $rectf20 : 0), 2);
  $rectj20 = round(((((60 < $_REQUEST['rectd20'] && $_REQUEST['rectd20'] <= 90) && $_REQUEST['rectc20'] <= 90) || ((60 < $_REQUEST['rectc20'] && $_REQUEST['rectc20'] <= 90) && $_REQUEST['rectd20'] <= 90)) ? $rectf20 : 0), 2);
  $rectk20 = round((((90 < $_REQUEST['rectd20']) || (90 < $_REQUEST['rectc20'])) ? $rectf20 : 0), 2);


  $rectf21 = round((((floatval($_REQUEST['recte21']) * (floatval($_REQUEST['rectc21']) + floatval($_REQUEST['rectd21']) + floatval($rectk1))) / 6)), 2);
  $rectg21 = round((((0 < $_REQUEST['rectd21'] && $_REQUEST['rectd21'] <= 13) && (0 < $_REQUEST['rectc21'] && $_REQUEST['rectc21'] <= 13)) ? $rectf21 : 0), 2);
  $recth21 = round(((((13 < $_REQUEST['rectd21'] && $_REQUEST['rectd21'] <= 30) && $_REQUEST['rectc21'] <= 30) || ((13 < $_REQUEST['rectc21'] && $_REQUEST['rectc21'] <= 30) && $_REQUEST['rectd21'] <= 30)) ? $rectf21 : 0), 2);
  $recti21 = round(((((30 < $_REQUEST['rectd21'] && $_REQUEST['rectd21'] <= 60) && $_REQUEST['rectc21'] <= 60) || ((30 < $_REQUEST['rectc21'] && $_REQUEST['rectc21'] <= 60) && $_REQUEST['rectd21'] <= 60)) ? $rectf21 : 0), 2);
  $rectj21 = round(((((60 < $_REQUEST['rectd21'] && $_REQUEST['rectd21'] <= 90) && $_REQUEST['rectc21'] <= 90) || ((60 < $_REQUEST['rectc21'] && $_REQUEST['rectc21'] <= 90) && $_REQUEST['rectd21'] <= 90)) ? $rectf21 : 0), 2);
  $rectk21 = round((((90 < $_REQUEST['rectd21']) || (90 < $_REQUEST['rectc21'])) ? $rectf21 : 0), 2);


  $rectf22 = round((((floatval($_REQUEST['recte22']) * (floatval($_REQUEST['rectc22']) + floatval($_REQUEST['rectd22']) + floatval($rectk1))) / 6)), 2);
  $rectg22 = round((((0 < $_REQUEST['rectd22'] && $_REQUEST['rectd22'] <= 13) && (0 < $_REQUEST['rectc22'] && $_REQUEST['rectc22'] <= 13)) ? $rectf22 : 0), 2);
  $recth22 = round(((((13 < $_REQUEST['rectd22'] && $_REQUEST['rectd22'] <= 30) && $_REQUEST['rectc22'] <= 30) || ((13 < $_REQUEST['rectc22'] && $_REQUEST['rectc22'] <= 30) && $_REQUEST['rectd22'] <= 30)) ? $rectf22 : 0), 2);
  $recti22 = round(((((30 < $_REQUEST['rectd22'] && $_REQUEST['rectd22'] <= 60) && $_REQUEST['rectc22'] <= 60) || ((30 < $_REQUEST['rectc22'] && $_REQUEST['rectc22'] <= 60) && $_REQUEST['rectd22'] <= 60)) ? $rectf22 : 0), 2);
  $rectj22 = round(((((60 < $_REQUEST['rectd22'] && $_REQUEST['rectd22'] <= 90) && $_REQUEST['rectc22'] <= 90) || ((60 < $_REQUEST['rectc22'] && $_REQUEST['rectc22'] <= 90) && $_REQUEST['rectd22'] <= 90)) ? $rectf22 : 0), 2);
  $rectk22 = round((((90 < $_REQUEST['rectd22']) || (90 < $_REQUEST['rectc22'])) ? $rectf22 : 0), 2);


  $rectf23 = round((((floatval($_REQUEST['recte23']) * (floatval($_REQUEST['rectc23']) + floatval($_REQUEST['rectd23']) + floatval($rectk1))) / 6)), 2);
  $rectg23 = round((((0 < $_REQUEST['rectd23'] && $_REQUEST['rectd23'] <= 13) && (0 < $_REQUEST['rectc23'] && $_REQUEST['rectc23'] <= 13)) ? $rectf23 : 0), 2);
  $recth23 = round(((((13 < $_REQUEST['rectd23'] && $_REQUEST['rectd23'] <= 30) && $_REQUEST['rectc23'] <= 30) || ((13 < $_REQUEST['rectc23'] && $_REQUEST['rectc23'] <= 30) && $_REQUEST['rectd23'] <= 30)) ? $rectf23 : 0), 2);
  $recti23 = round(((((30 < $_REQUEST['rectd23'] && $_REQUEST['rectd23'] <= 60) && $_REQUEST['rectc23'] <= 60) || ((30 < $_REQUEST['rectc23'] && $_REQUEST['rectc23'] <= 60) && $_REQUEST['rectd23'] <= 60)) ? $rectf23 : 0), 2);
  $rectj23 = round(((((60 < $_REQUEST['rectd23'] && $_REQUEST['rectd23'] <= 90) && $_REQUEST['rectc23'] <= 90) || ((60 < $_REQUEST['rectc23'] && $_REQUEST['rectc23'] <= 90) && $_REQUEST['rectd23'] <= 90)) ? $rectf23 : 0), 2);
  $rectk23 = round((((90 < $_REQUEST['rectd23']) || (90 < $_REQUEST['rectc23'])) ? $rectf23 : 0), 2);


  $rectf24 = round((((floatval($_REQUEST['recte24']) * (floatval($_REQUEST['rectc24']) + floatval($_REQUEST['rectd24']) + floatval($rectk1))) / 6)), 2);
  $rectg24 = round((((0 < $_REQUEST['rectd24'] && $_REQUEST['rectd24'] <= 13) && (0 < $_REQUEST['rectc24'] && $_REQUEST['rectc24'] <= 13)) ? $rectf24 : 0), 2);
  $recth24 = round(((((13 < $_REQUEST['rectd24'] && $_REQUEST['rectd24'] <= 30) && $_REQUEST['rectc24'] <= 30) || ((13 < $_REQUEST['rectc24'] && $_REQUEST['rectc24'] <= 30) && $_REQUEST['rectd24'] <= 30)) ? $rectf24 : 0), 2);
  $recti24 = round(((((30 < $_REQUEST['rectd24'] && $_REQUEST['rectd24'] <= 60) && $_REQUEST['rectc24'] <= 60) || ((30 < $_REQUEST['rectc24'] && $_REQUEST['rectc24'] <= 60) && $_REQUEST['rectd24'] <= 60)) ? $rectf24 : 0), 2);
  $rectj24 = round(((((60 < $_REQUEST['rectd24'] && $_REQUEST['rectd24'] <= 90) && $_REQUEST['rectc24'] <= 90) || ((60 < $_REQUEST['rectc24'] && $_REQUEST['rectc24'] <= 90) && $_REQUEST['rectd24'] <= 90)) ? $rectf24 : 0), 2);
  $rectk24 = round((((90 < $_REQUEST['rectd24']) || (90 < $_REQUEST['rectc24'])) ? $rectf24 : 0), 2);


  $rectf25 = round((((floatval($_REQUEST['recte25']) * (floatval($_REQUEST['rectc25']) + floatval($_REQUEST['rectd25']) + floatval($rectk1))) / 6)), 2);
  $rectg25 = round((((0 < $_REQUEST['rectd25'] && $_REQUEST['rectd25'] <= 13) && (0 < $_REQUEST['rectc25'] && $_REQUEST['rectc25'] <= 13)) ? $rectf25 : 0), 2);
  $recth25 = round(((((13 < $_REQUEST['rectd25'] && $_REQUEST['rectd25'] <= 30) && $_REQUEST['rectc25'] <= 30) || ((13 < $_REQUEST['rectc25'] && $_REQUEST['rectc25'] <= 30) && $_REQUEST['rectd25'] <= 30)) ? $rectf25 : 0), 2);
  $recti25 = round(((((30 < $_REQUEST['rectd25'] && $_REQUEST['rectd25'] <= 60) && $_REQUEST['rectc25'] <= 60) || ((30 < $_REQUEST['rectc25'] && $_REQUEST['rectc25'] <= 60) && $_REQUEST['rectd25'] <= 60)) ? $rectf25 : 0), 2);
  $rectj25 = round(((((60 < $_REQUEST['rectd25'] && $_REQUEST['rectd25'] <= 90) && $_REQUEST['rectc25'] <= 90) || ((60 < $_REQUEST['rectc25'] && $_REQUEST['rectc25'] <= 90) && $_REQUEST['rectd25'] <= 90)) ? $rectf25 : 0), 2);
  $rectk25 = round((((90 < $_REQUEST['rectd25']) || (90 < $_REQUEST['rectc25'])) ? $rectf25 : 0), 2);


  $rectf26 = round((((floatval($_REQUEST['recte26']) * (floatval($_REQUEST['rectc26']) + floatval($_REQUEST['rectd26']) + floatval($rectk1))) / 6)), 2);
  $rectg26 = round((((0 < $_REQUEST['rectd26'] && $_REQUEST['rectd26'] <= 13) && (0 < $_REQUEST['rectc26'] && $_REQUEST['rectc26'] <= 13)) ? $rectf26 : 0), 2);
  $recth26 = round(((((13 < $_REQUEST['rectd26'] && $_REQUEST['rectd26'] <= 30) && $_REQUEST['rectc26'] <= 30) || ((13 < $_REQUEST['rectc26'] && $_REQUEST['rectc26'] <= 30) && $_REQUEST['rectd26'] <= 30)) ? $rectf26 : 0), 2);
  $recti26 = round(((((30 < $_REQUEST['rectd26'] && $_REQUEST['rectd26'] <= 60) && $_REQUEST['rectc26'] <= 60) || ((30 < $_REQUEST['rectc26'] && $_REQUEST['rectc26'] <= 60) && $_REQUEST['rectd26'] <= 60)) ? $rectf26 : 0), 2);
  $rectj26 = round(((((60 < $_REQUEST['rectd26'] && $_REQUEST['rectd26'] <= 90) && $_REQUEST['rectc26'] <= 90) || ((60 < $_REQUEST['rectc26'] && $_REQUEST['rectc26'] <= 90) && $_REQUEST['rectd26'] <= 90)) ? $rectf26 : 0), 2);
  $rectk26 = round((((90 < $_REQUEST['rectd26']) || (90 < $_REQUEST['rectc26'])) ? $rectf26 : 0), 2);


  $rectf27 = round((((floatval($_REQUEST['recte27']) * (floatval($_REQUEST['rectc27']) + floatval($_REQUEST['rectd27']) + floatval($rectk1))) / 6)), 2);
  $rectg27 = round((((0 < $_REQUEST['rectd27'] && $_REQUEST['rectd27'] <= 13) && (0 < $_REQUEST['rectc27'] && $_REQUEST['rectc27'] <= 13)) ? $rectf27 : 0), 2);
  $recth27 = round(((((13 < $_REQUEST['rectd27'] && $_REQUEST['rectd27'] <= 30) && $_REQUEST['rectc27'] <= 30) || ((13 < $_REQUEST['rectc27'] && $_REQUEST['rectc27'] <= 30) && $_REQUEST['rectd27'] <= 30)) ? $rectf27 : 0), 2);
  $recti27 = round(((((30 < $_REQUEST['rectd27'] && $_REQUEST['rectd27'] <= 60) && $_REQUEST['rectc27'] <= 60) || ((30 < $_REQUEST['rectc27'] && $_REQUEST['rectc27'] <= 60) && $_REQUEST['rectd27'] <= 60)) ? $rectf27 : 0), 2);
  $rectj27 = round(((((60 < $_REQUEST['rectd27'] && $_REQUEST['rectd27'] <= 90) && $_REQUEST['rectc27'] <= 90) || ((60 < $_REQUEST['rectc27'] && $_REQUEST['rectc27'] <= 90) && $_REQUEST['rectd27'] <= 90)) ? $rectf27 : 0), 2);
  $rectk27 = round((((90 < $_REQUEST['rectd27']) || (90 < $_REQUEST['rectc27'])) ? $rectf27 : 0), 2);


  $rectf28 = round((((floatval($_REQUEST['recte28']) * (floatval($_REQUEST['rectc28']) + floatval($_REQUEST['rectd28']) + floatval($rectk1))) / 6)), 2);
  $rectg28 = round((((0 < $_REQUEST['rectd28'] && $_REQUEST['rectd28'] <= 13) && (0 < $_REQUEST['rectc28'] && $_REQUEST['rectc28'] <= 13)) ? $rectf28 : 0), 2);
  $recth28 = round(((((13 < $_REQUEST['rectd28'] && $_REQUEST['rectd28'] <= 30) && $_REQUEST['rectc28'] <= 30) || ((13 < $_REQUEST['rectc28'] && $_REQUEST['rectc28'] <= 30) && $_REQUEST['rectd28'] <= 30)) ? $rectf28 : 0), 2);
  $recti28 = round(((((30 < $_REQUEST['rectd28'] && $_REQUEST['rectd28'] <= 60) && $_REQUEST['rectc28'] <= 60) || ((30 < $_REQUEST['rectc28'] && $_REQUEST['rectc28'] <= 60) && $_REQUEST['rectd28'] <= 60)) ? $rectf28 : 0), 2);
  $rectj28 = round(((((60 < $_REQUEST['rectd28'] && $_REQUEST['rectd28'] <= 90) && $_REQUEST['rectc28'] <= 90) || ((60 < $_REQUEST['rectc28'] && $_REQUEST['rectc28'] <= 90) && $_REQUEST['rectd28'] <= 90)) ? $rectf28 : 0), 2);
  $rectk28 = round((((90 < $_REQUEST['rectd28']) || (90 < $_REQUEST['rectc28'])) ? $rectf28 : 0), 2);


  $rectf29 = round((((floatval($_REQUEST['recte29']) * (floatval($_REQUEST['rectc29']) + floatval($_REQUEST['rectd29']) + floatval($rectk1))) / 6)), 2);
  $rectg29 = round((((0 < $_REQUEST['rectd29'] && $_REQUEST['rectd29'] <= 13) && (0 < $_REQUEST['rectc29'] && $_REQUEST['rectc29'] <= 13)) ? $rectf29 : 0), 2);
  $recth29 = round(((((13 < $_REQUEST['rectd29'] && $_REQUEST['rectd29'] <= 30) && $_REQUEST['rectc29'] <= 30) || ((13 < $_REQUEST['rectc29'] && $_REQUEST['rectc29'] <= 30) && $_REQUEST['rectd29'] <= 30)) ? $rectf29 : 0), 2);
  $recti29 = round(((((30 < $_REQUEST['rectd29'] && $_REQUEST['rectd29'] <= 60) && $_REQUEST['rectc29'] <= 60) || ((30 < $_REQUEST['rectc29'] && $_REQUEST['rectc29'] <= 60) && $_REQUEST['rectd29'] <= 60)) ? $rectf29 : 0), 2);
  $rectj29 = round(((((60 < $_REQUEST['rectd29'] && $_REQUEST['rectd29'] <= 90) && $_REQUEST['rectc29'] <= 90) || ((60 < $_REQUEST['rectc29'] && $_REQUEST['rectc29'] <= 90) && $_REQUEST['rectd29'] <= 90)) ? $rectf29 : 0), 2);
  $rectk29 = round((((90 < $_REQUEST['rectd29']) || (90 < $_REQUEST['rectc29'])) ? $rectf29 : 0), 2);


  $rectf30 = round((((floatval($_REQUEST['recte30']) * (floatval($_REQUEST['rectc30']) + floatval($_REQUEST['rectd30']) + floatval($rectk1))) / 6)), 2);
  $rectg30 = round((((0 < $_REQUEST['rectd30'] && $_REQUEST['rectd30'] <= 13) && (0 < $_REQUEST['rectc30'] && $_REQUEST['rectc30'] <= 13)) ? $rectf30 : 0), 2);
  $recth30 = round(((((13 < $_REQUEST['rectd30'] && $_REQUEST['rectd30'] <= 30) && $_REQUEST['rectc30'] <= 30) || ((13 < $_REQUEST['rectc30'] && $_REQUEST['rectc30'] <= 30) && $_REQUEST['rectd30'] <= 30)) ? $rectf30 : 0), 2);
  $recti30 = round(((((30 < $_REQUEST['rectd30'] && $_REQUEST['rectd30'] <= 60) && $_REQUEST['rectc30'] <= 60) || ((30 < $_REQUEST['rectc30'] && $_REQUEST['rectc30'] <= 60) && $_REQUEST['rectd30'] <= 60)) ? $rectf30 : 0), 2);
  $rectj30 = round(((((60 < $_REQUEST['rectd30'] && $_REQUEST['rectd30'] <= 90) && $_REQUEST['rectc30'] <= 90) || ((60 < $_REQUEST['rectc30'] && $_REQUEST['rectc30'] <= 90) && $_REQUEST['rectd30'] <= 90)) ? $rectf30 : 0), 2);
  $rectk30 = round((((90 < $_REQUEST['rectd30']) || (90 < $_REQUEST['rectc30'])) ? $rectf30 : 0), 2);


  $rectf31 = round((((floatval($_REQUEST['recte31']) * (floatval($_REQUEST['rectc31']) + floatval($_REQUEST['rectd31']) + floatval($rectk1))) / 6)), 2);
  $rectg31 = round((((0 < $_REQUEST['rectd31'] && $_REQUEST['rectd31'] <= 13) && (0 < $_REQUEST['rectc31'] && $_REQUEST['rectc31'] <= 13)) ? $rectf31 : 0), 2);
  $recth31 = round(((((13 < $_REQUEST['rectd31'] && $_REQUEST['rectd31'] <= 30) && $_REQUEST['rectc31'] <= 30) || ((13 < $_REQUEST['rectc31'] && $_REQUEST['rectc31'] <= 30) && $_REQUEST['rectd31'] <= 30)) ? $rectf31 : 0), 2);
  $recti31 = round(((((30 < $_REQUEST['rectd31'] && $_REQUEST['rectd31'] <= 60) && $_REQUEST['rectc31'] <= 60) || ((30 < $_REQUEST['rectc31'] && $_REQUEST['rectc31'] <= 60) && $_REQUEST['rectd31'] <= 60)) ? $rectf31 : 0), 2);
  $rectj31 = round(((((60 < $_REQUEST['rectd31'] && $_REQUEST['rectd31'] <= 90) && $_REQUEST['rectc31'] <= 90) || ((60 < $_REQUEST['rectc31'] && $_REQUEST['rectc31'] <= 90) && $_REQUEST['rectd31'] <= 90)) ? $rectf31 : 0), 2);
  $rectk31 = round((((90 < $_REQUEST['rectd31']) || (90 < $_REQUEST['rectc31'])) ? $rectf31 : 0), 2);


  $rectf32 = round((((floatval($_REQUEST['recte32']) * (floatval($_REQUEST['rectc32']) + floatval($_REQUEST['rectd32']) + floatval($rectk1))) / 6)), 2);
  $rectg32 = round((((0 < $_REQUEST['rectd32'] && $_REQUEST['rectd32'] <= 13) && (0 < $_REQUEST['rectc32'] && $_REQUEST['rectc32'] <= 13)) ? $rectf32 : 0), 2);
  $recth32 = round(((((13 < $_REQUEST['rectd32'] && $_REQUEST['rectd32'] <= 30) && $_REQUEST['rectc32'] <= 30) || ((13 < $_REQUEST['rectc32'] && $_REQUEST['rectc32'] <= 30) && $_REQUEST['rectd32'] <= 30)) ? $rectf32 : 0), 2);
  $recti32 = round(((((30 < $_REQUEST['rectd32'] && $_REQUEST['rectd32'] <= 60) && $_REQUEST['rectc32'] <= 60) || ((30 < $_REQUEST['rectc32'] && $_REQUEST['rectc32'] <= 60) && $_REQUEST['rectd32'] <= 60)) ? $rectf32 : 0), 2);
  $rectj32 = round(((((60 < $_REQUEST['rectd32'] && $_REQUEST['rectd32'] <= 90) && $_REQUEST['rectc32'] <= 90) || ((60 < $_REQUEST['rectc32'] && $_REQUEST['rectc32'] <= 90) && $_REQUEST['rectd32'] <= 90)) ? $rectf32 : 0), 2);
  $rectk32 = round((((90 < $_REQUEST['rectd32']) || (90 < $_REQUEST['rectc32'])) ? $rectf32 : 0), 2);


  $rectf33 = round((((floatval($_REQUEST['recte33']) * (floatval($_REQUEST['rectc33']) + floatval($_REQUEST['rectd33']) + floatval($rectk1))) / 6)), 2);
  $rectg33 = round((((0 < $_REQUEST['rectd33'] && $_REQUEST['rectd33'] <= 13) && (0 < $_REQUEST['rectc33'] && $_REQUEST['rectc33'] <= 13)) ? $rectf33 : 0), 2);
  $recth33 = round(((((13 < $_REQUEST['rectd33'] && $_REQUEST['rectd33'] <= 30) && $_REQUEST['rectc33'] <= 30) || ((13 < $_REQUEST['rectc33'] && $_REQUEST['rectc33'] <= 30) && $_REQUEST['rectd33'] <= 30)) ? $rectf33 : 0), 2);
  $recti33 = round(((((30 < $_REQUEST['rectd33'] && $_REQUEST['rectd33'] <= 60) && $_REQUEST['rectc33'] <= 60) || ((30 < $_REQUEST['rectc33'] && $_REQUEST['rectc33'] <= 60) && $_REQUEST['rectd33'] <= 60)) ? $rectf33 : 0), 2);
  $rectj33 = round(((((60 < $_REQUEST['rectd33'] && $_REQUEST['rectd33'] <= 90) && $_REQUEST['rectc33'] <= 90) || ((60 < $_REQUEST['rectc33'] && $_REQUEST['rectc33'] <= 90) && $_REQUEST['rectd33'] <= 90)) ? $rectf33 : 0), 2);
  $rectk33 = round((((90 < $_REQUEST['rectd33']) || (90 < $_REQUEST['rectc33'])) ? $rectf33 : 0), 2);


  $rectf34 = round((((floatval($_REQUEST['recte34']) * (floatval($_REQUEST['rectc34']) + floatval($_REQUEST['rectd34']) + floatval($rectk1))) / 6)), 2);
  $rectg34 = round((((0 < $_REQUEST['rectd34'] && $_REQUEST['rectd34'] <= 13) && (0 < $_REQUEST['rectc34'] && $_REQUEST['rectc34'] <= 13)) ? $rectf34 : 0), 2);
  $recth34 = round(((((13 < $_REQUEST['rectd34'] && $_REQUEST['rectd34'] <= 30) && $_REQUEST['rectc34'] <= 30) || ((13 < $_REQUEST['rectc34'] && $_REQUEST['rectc34'] <= 30) && $_REQUEST['rectd34'] <= 30)) ? $rectf34 : 0), 2);
  $recti34 = round(((((30 < $_REQUEST['rectd34'] && $_REQUEST['rectd34'] <= 60) && $_REQUEST['rectc34'] <= 60) || ((30 < $_REQUEST['rectc34'] && $_REQUEST['rectc34'] <= 60) && $_REQUEST['rectd34'] <= 60)) ? $rectf34 : 0), 2);
  $rectj34 = round(((((60 < $_REQUEST['rectd34'] && $_REQUEST['rectd34'] <= 90) && $_REQUEST['rectc34'] <= 90) || ((60 < $_REQUEST['rectc34'] && $_REQUEST['rectc34'] <= 90) && $_REQUEST['rectd34'] <= 90)) ? $rectf34 : 0), 2);
  $rectk34 = round((((90 < $_REQUEST['rectd34']) || (90 < $_REQUEST['rectc34'])) ? $rectf34 : 0), 2);


  $rectf35 = round((((floatval($_REQUEST['recte35']) * (floatval($_REQUEST['rectc35']) + floatval($_REQUEST['rectd35']) + floatval($rectk1))) / 6)), 2);
  $rectg35 = round((((0 < $_REQUEST['rectd35'] && $_REQUEST['rectd35'] <= 13) && (0 < $_REQUEST['rectc35'] && $_REQUEST['rectc35'] <= 13)) ? $rectf35 : 0), 2);
  $recth35 = round(((((13 < $_REQUEST['rectd35'] && $_REQUEST['rectd35'] <= 30) && $_REQUEST['rectc35'] <= 30) || ((13 < $_REQUEST['rectc35'] && $_REQUEST['rectc35'] <= 30) && $_REQUEST['rectd35'] <= 30)) ? $rectf35 : 0), 2);
  $recti35 = round(((((30 < $_REQUEST['rectd35'] && $_REQUEST['rectd35'] <= 60) && $_REQUEST['rectc35'] <= 60) || ((30 < $_REQUEST['rectc35'] && $_REQUEST['rectc35'] <= 60) && $_REQUEST['rectd35'] <= 60)) ? $rectf35 : 0), 2);
  $rectj35 = round(((((60 < $_REQUEST['rectd35'] && $_REQUEST['rectd35'] <= 90) && $_REQUEST['rectc35'] <= 90) || ((60 < $_REQUEST['rectc35'] && $_REQUEST['rectc35'] <= 90) && $_REQUEST['rectd35'] <= 90)) ? $rectf35 : 0), 2);
  $rectk35 = round((((90 < $_REQUEST['rectd35']) || (90 < $_REQUEST['rectc35'])) ? $rectf35 : 0), 2);


  $rectf36 = round((((floatval($_REQUEST['recte36']) * (floatval($_REQUEST['rectc36']) + floatval($_REQUEST['rectd36']) + floatval($rectk1))) / 6)), 2);
  $rectg36 = round((((0 < $_REQUEST['rectd36'] && $_REQUEST['rectd36'] <= 13) && (0 < $_REQUEST['rectc36'] && $_REQUEST['rectc36'] <= 13)) ? $rectf36 : 0), 2);
  $recth36 = round(((((13 < $_REQUEST['rectd36'] && $_REQUEST['rectd36'] <= 30) && $_REQUEST['rectc36'] <= 30) || ((13 < $_REQUEST['rectc36'] && $_REQUEST['rectc36'] <= 30) && $_REQUEST['rectd36'] <= 30)) ? $rectf36 : 0), 2);
  $recti36 = round(((((30 < $_REQUEST['rectd36'] && $_REQUEST['rectd36'] <= 60) && $_REQUEST['rectc36'] <= 60) || ((30 < $_REQUEST['rectc36'] && $_REQUEST['rectc36'] <= 60) && $_REQUEST['rectd36'] <= 60)) ? $rectf36 : 0), 2);
  $rectj36 = round(((((60 < $_REQUEST['rectd36'] && $_REQUEST['rectd36'] <= 90) && $_REQUEST['rectc36'] <= 90) || ((60 < $_REQUEST['rectc36'] && $_REQUEST['rectc36'] <= 90) && $_REQUEST['rectd36'] <= 90)) ? $rectf36 : 0), 2);
  $rectk36 = round((((90 < $_REQUEST['rectd36']) || (90 < $_REQUEST['rectc36'])) ? $rectf36 : 0), 2);


  $rectf37 = round((((floatval($_REQUEST['recte37']) * (floatval($_REQUEST['rectc37']) + floatval($_REQUEST['rectd37']) + floatval($rectk1))) / 6)), 2);
  $rectg37 = round((((0 < $_REQUEST['rectd37'] && $_REQUEST['rectd37'] <= 13) && (0 < $_REQUEST['rectc37'] && $_REQUEST['rectc37'] <= 13)) ? $rectf37 : 0), 2);
  $recth37 = round(((((13 < $_REQUEST['rectd37'] && $_REQUEST['rectd37'] <= 30) && $_REQUEST['rectc37'] <= 30) || ((13 < $_REQUEST['rectc37'] && $_REQUEST['rectc37'] <= 30) && $_REQUEST['rectd37'] <= 30)) ? $rectf37 : 0), 2);
  $recti37 = round(((((30 < $_REQUEST['rectd37'] && $_REQUEST['rectd37'] <= 60) && $_REQUEST['rectc37'] <= 60) || ((30 < $_REQUEST['rectc37'] && $_REQUEST['rectc37'] <= 60) && $_REQUEST['rectd37'] <= 60)) ? $rectf37 : 0), 2);
  $rectj37 = round(((((60 < $_REQUEST['rectd37'] && $_REQUEST['rectd37'] <= 90) && $_REQUEST['rectc37'] <= 90) || ((60 < $_REQUEST['rectc37'] && $_REQUEST['rectc37'] <= 90) && $_REQUEST['rectd37'] <= 90)) ? $rectf37 : 0), 2);
  $rectk37 = round((((90 < $_REQUEST['rectd37']) || (90 < $_REQUEST['rectc37'])) ? $rectf37 : 0), 2);


  $rectf38 = round((((floatval($_REQUEST['recte38']) * (floatval($_REQUEST['rectc38']) + floatval($_REQUEST['rectd38']) + floatval($rectk1))) / 6)), 2);
  $rectg38 = round((((0 < $_REQUEST['rectd38'] && $_REQUEST['rectd38'] <= 13) && (0 < $_REQUEST['rectc38'] && $_REQUEST['rectc38'] <= 13)) ? $rectf38 : 0), 2);
  $recth38 = round(((((13 < $_REQUEST['rectd38'] && $_REQUEST['rectd38'] <= 30) && $_REQUEST['rectc38'] <= 30) || ((13 < $_REQUEST['rectc38'] && $_REQUEST['rectc38'] <= 30) && $_REQUEST['rectd38'] <= 30)) ? $rectf38 : 0), 2);
  $recti38 = round(((((30 < $_REQUEST['rectd38'] && $_REQUEST['rectd38'] <= 60) && $_REQUEST['rectc38'] <= 60) || ((30 < $_REQUEST['rectc38'] && $_REQUEST['rectc38'] <= 60) && $_REQUEST['rectd38'] <= 60)) ? $rectf38 : 0), 2);
  $rectj38 = round(((((60 < $_REQUEST['rectd38'] && $_REQUEST['rectd38'] <= 90) && $_REQUEST['rectc38'] <= 90) || ((60 < $_REQUEST['rectc38'] && $_REQUEST['rectc38'] <= 90) && $_REQUEST['rectd38'] <= 90)) ? $rectf38 : 0), 2);
  $rectk38 = round((((90 < $_REQUEST['rectd38']) || (90 < $_REQUEST['rectc38'])) ? $rectf38 : 0), 2);


  $rectf39 = round((((floatval($_REQUEST['recte39']) * (floatval($_REQUEST['rectc39']) + floatval($_REQUEST['rectd39']) + floatval($rectk1))) / 6)), 2);
  $rectg39 = round((((0 < $_REQUEST['rectd39'] && $_REQUEST['rectd39'] <= 13) && (0 < $_REQUEST['rectc39'] && $_REQUEST['rectc39'] <= 13)) ? $rectf39 : 0), 2);
  $recth39 = round(((((13 < $_REQUEST['rectd39'] && $_REQUEST['rectd39'] <= 30) && $_REQUEST['rectc39'] <= 30) || ((13 < $_REQUEST['rectc39'] && $_REQUEST['rectc39'] <= 30) && $_REQUEST['rectd39'] <= 30)) ? $rectf39 : 0), 2);
  $recti39 = round(((((30 < $_REQUEST['rectd39'] && $_REQUEST['rectd39'] <= 60) && $_REQUEST['rectc39'] <= 60) || ((30 < $_REQUEST['rectc39'] && $_REQUEST['rectc39'] <= 60) && $_REQUEST['rectd39'] <= 60)) ? $rectf39 : 0), 2);
  $rectj39 = round(((((60 < $_REQUEST['rectd39'] && $_REQUEST['rectd39'] <= 90) && $_REQUEST['rectc39'] <= 90) || ((60 < $_REQUEST['rectc39'] && $_REQUEST['rectc39'] <= 90) && $_REQUEST['rectd39'] <= 90)) ? $rectf39 : 0), 2);
  $rectk39 = round((((90 < $_REQUEST['rectd39']) || (90 < $_REQUEST['rectc39'])) ? $rectf39 : 0), 2);


  $rectf40 = round((((floatval($_REQUEST['recte40']) * (floatval($_REQUEST['rectc40']) + floatval($_REQUEST['rectd40']) + floatval($rectk1))) / 6)), 2);
  $rectg40 = round((((0 < $_REQUEST['rectd40'] && $_REQUEST['rectd40'] <= 13) && (0 < $_REQUEST['rectc40'] && $_REQUEST['rectc40'] <= 13)) ? $rectf40 : 0), 2);
  $recth40 = round(((((13 < $_REQUEST['rectd40'] && $_REQUEST['rectd40'] <= 30) && $_REQUEST['rectc40'] <= 30) || ((13 < $_REQUEST['rectc40'] && $_REQUEST['rectc40'] <= 30) && $_REQUEST['rectd40'] <= 30)) ? $rectf40 : 0), 2);
  $recti40 = round(((((30 < $_REQUEST['rectd40'] && $_REQUEST['rectd40'] <= 60) && $_REQUEST['rectc40'] <= 60) || ((30 < $_REQUEST['rectc40'] && $_REQUEST['rectc40'] <= 60) && $_REQUEST['rectd40'] <= 60)) ? $rectf40 : 0), 2);
  $rectj40 = round(((((60 < $_REQUEST['rectd40'] && $_REQUEST['rectd40'] <= 90) && $_REQUEST['rectc40'] <= 90) || ((60 < $_REQUEST['rectc40'] && $_REQUEST['rectc40'] <= 90) && $_REQUEST['rectd40'] <= 90)) ? $rectf40 : 0), 2);
  $rectk40 = round((((90 < $_REQUEST['rectd40']) || (90 < $_REQUEST['rectc40'])) ? $rectf40 : 0), 2);


  $rectf41 = round((((floatval($_REQUEST['recte41']) * (floatval($_REQUEST['rectc41']) + floatval($_REQUEST['rectd41']) + floatval($rectk1))) / 6)), 2);
  $rectg41 = round((((0 < $_REQUEST['rectd41'] && $_REQUEST['rectd41'] <= 13) && (0 < $_REQUEST['rectc41'] && $_REQUEST['rectc41'] <= 13)) ? $rectf41 : 0), 2);
  $recth41 = round(((((13 < $_REQUEST['rectd41'] && $_REQUEST['rectd41'] <= 30) && $_REQUEST['rectc41'] <= 30) || ((13 < $_REQUEST['rectc41'] && $_REQUEST['rectc41'] <= 30) && $_REQUEST['rectd41'] <= 30)) ? $rectf41 : 0), 2);
  $recti41 = round(((((30 < $_REQUEST['rectd41'] && $_REQUEST['rectd41'] <= 60) && $_REQUEST['rectc41'] <= 60) || ((30 < $_REQUEST['rectc41'] && $_REQUEST['rectc41'] <= 60) && $_REQUEST['rectd41'] <= 60)) ? $rectf41 : 0), 2);
  $rectj41 = round(((((60 < $_REQUEST['rectd41'] && $_REQUEST['rectd41'] <= 90) && $_REQUEST['rectc41'] <= 90) || ((60 < $_REQUEST['rectc41'] && $_REQUEST['rectc41'] <= 90) && $_REQUEST['rectd41'] <= 90)) ? $rectf41 : 0), 2);
  $rectk41 = round((((90 < $_REQUEST['rectd41']) || (90 < $_REQUEST['rectc41'])) ? $rectf41 : 0), 2);


  $rectf42 = round((((floatval($_REQUEST['recte42']) * (floatval($_REQUEST['rectc42']) + floatval($_REQUEST['rectd42']) + floatval($rectk1))) / 6)), 2);
  $rectg42 = round((((0 < $_REQUEST['rectd42'] && $_REQUEST['rectd42'] <= 13) && (0 < $_REQUEST['rectc42'] && $_REQUEST['rectc42'] <= 13)) ? $rectf42 : 0), 2);
  $recth42 = round(((((13 < $_REQUEST['rectd42'] && $_REQUEST['rectd42'] <= 30) && $_REQUEST['rectc42'] <= 30) || ((13 < $_REQUEST['rectc42'] && $_REQUEST['rectc42'] <= 30) && $_REQUEST['rectd42'] <= 30)) ? $rectf42 : 0), 2);
  $recti42 = round(((((30 < $_REQUEST['rectd42'] && $_REQUEST['rectd42'] <= 60) && $_REQUEST['rectc42'] <= 60) || ((30 < $_REQUEST['rectc42'] && $_REQUEST['rectc42'] <= 60) && $_REQUEST['rectd42'] <= 60)) ? $rectf42 : 0), 2);
  $rectj42 = round(((((60 < $_REQUEST['rectd42'] && $_REQUEST['rectd42'] <= 90) && $_REQUEST['rectc42'] <= 90) || ((60 < $_REQUEST['rectc42'] && $_REQUEST['rectc42'] <= 90) && $_REQUEST['rectd42'] <= 90)) ? $rectf42 : 0), 2);
  $rectk42 = round((((90 < $_REQUEST['rectd42']) || (90 < $_REQUEST['rectc42'])) ? $rectf42 : 0), 2);


  $rectf43 = round((((floatval($_REQUEST['recte43']) * (floatval($_REQUEST['rectc43']) + floatval($_REQUEST['rectd43']) + floatval($rectk1))) / 6)), 2);
  $rectg43 = round((((0 < $_REQUEST['rectd43'] && $_REQUEST['rectd43'] <= 13) && (0 < $_REQUEST['rectc43'] && $_REQUEST['rectc43'] <= 13)) ? $rectf43 : 0), 2);
  $recth43 = round(((((13 < $_REQUEST['rectd43'] && $_REQUEST['rectd43'] <= 30) && $_REQUEST['rectc43'] <= 30) || ((13 < $_REQUEST['rectc43'] && $_REQUEST['rectc43'] <= 30) && $_REQUEST['rectd43'] <= 30)) ? $rectf43 : 0), 2);
  $recti43 = round(((((30 < $_REQUEST['rectd43'] && $_REQUEST['rectd43'] <= 60) && $_REQUEST['rectc43'] <= 60) || ((30 < $_REQUEST['rectc43'] && $_REQUEST['rectc43'] <= 60) && $_REQUEST['rectd43'] <= 60)) ? $rectf43 : 0), 2);
  $rectj43 = round(((((60 < $_REQUEST['rectd43'] && $_REQUEST['rectd43'] <= 90) && $_REQUEST['rectc43'] <= 90) || ((60 < $_REQUEST['rectc43'] && $_REQUEST['rectc43'] <= 90) && $_REQUEST['rectd43'] <= 90)) ? $rectf43 : 0), 2);
  $rectk43 = round((((90 < $_REQUEST['rectd43']) || (90 < $_REQUEST['rectc43'])) ? $rectf43 : 0), 2);

  $rectu1 = floatval($_REQUEST['rectn2'] * 4);
  // column 12 start
  // l11 till o11
  $rectl11 = round(((floatval($_REQUEST['rectm11']) * floatval($_REQUEST['rectn11']) > 599) ? floatval($_REQUEST['recto11']) : 0), 2);
  $rectl12 = round(((floatval($_REQUEST['rectm12']) * floatval($_REQUEST['rectn12']) > 599) ? floatval($_REQUEST['recto12']) : 0), 2);
  $rectl13 = round(((floatval($_REQUEST['rectm13']) * floatval($_REQUEST['rectn13']) > 599) ? floatval($_REQUEST['recto13']) : 0), 2);
  $rectl14 = round(((floatval($_REQUEST['rectm14']) * floatval($_REQUEST['rectn14']) > 599) ? floatval($_REQUEST['recto14']) : 0), 2);
  $rectl15 = round(((floatval($_REQUEST['rectm15']) * floatval($_REQUEST['rectn15']) > 599) ? floatval($_REQUEST['recto15']) : 0), 2);
  $rectl16 = round(((floatval($_REQUEST['rectm16']) * floatval($_REQUEST['rectn16']) > 599) ? floatval($_REQUEST['recto16']) : 0), 2);
  $rectl17 = round(((floatval($_REQUEST['rectm17']) * floatval($_REQUEST['rectn17']) > 599) ? floatval($_REQUEST['recto17']) : 0), 2);
  $rectl18 = round(((floatval($_REQUEST['rectm18']) * floatval($_REQUEST['rectn18']) > 599) ? floatval($_REQUEST['recto18']) : 0), 2);
  $rectl19 = round(((floatval($_REQUEST['rectm19']) * floatval($_REQUEST['rectn19']) > 599) ? floatval($_REQUEST['recto19']) : 0), 2);
  $rectl20 = round(((floatval($_REQUEST['rectm20']) * floatval($_REQUEST['rectn20']) > 599) ? floatval($_REQUEST['recto20']) : 0), 2);
  $rectl21 = round(((floatval($_REQUEST['rectm21']) * floatval($_REQUEST['rectn21']) > 599) ? floatval($_REQUEST['recto21']) : 0), 2);
  $rectl22 = round(((floatval($_REQUEST['rectm22']) * floatval($_REQUEST['rectn22']) > 599) ? floatval($_REQUEST['recto22']) : 0), 2);
  $rectl23 = round(((floatval($_REQUEST['rectm23']) * floatval($_REQUEST['rectn23']) > 599) ? floatval($_REQUEST['recto23']) : 0), 2);
  $rectl24 = round(((floatval($_REQUEST['rectm24']) * floatval($_REQUEST['rectn24']) > 599) ? floatval($_REQUEST['recto24']) : 0), 2);
  $rectl25 = round(((floatval($_REQUEST['rectm25']) * floatval($_REQUEST['rectn25']) > 599) ? floatval($_REQUEST['recto25']) : 0), 2);
  $rectl26 = round(((floatval($_REQUEST['rectm26']) * floatval($_REQUEST['rectn26']) > 599) ? floatval($_REQUEST['recto26']) : 0), 2);
  $rectl27 = round(((floatval($_REQUEST['rectm27']) * floatval($_REQUEST['rectn27']) > 599) ? floatval($_REQUEST['recto27']) : 0), 2);
  $rectl28 = round(((floatval($_REQUEST['rectm28']) * floatval($_REQUEST['rectn28']) > 599) ? floatval($_REQUEST['recto28']) : 0), 2);
  $rectl29 = round(((floatval($_REQUEST['rectm29']) * floatval($_REQUEST['rectn29']) > 599) ? floatval($_REQUEST['recto29']) : 0), 2);
  $rectl30 = round(((floatval($_REQUEST['rectm30']) * floatval($_REQUEST['rectn30']) > 599) ? floatval($_REQUEST['recto30']) : 0), 2);
  $rectl31 = round(((floatval($_REQUEST['rectm31']) * floatval($_REQUEST['rectn31']) > 599) ? floatval($_REQUEST['recto31']) : 0), 2);
  $rectl32 = round(((floatval($_REQUEST['rectm32']) * floatval($_REQUEST['rectn32']) > 599) ? floatval($_REQUEST['recto32']) : 0), 2);
  $rectl33 = round(((floatval($_REQUEST['rectm33']) * floatval($_REQUEST['rectn33']) > 599) ? floatval($_REQUEST['recto33']) : 0), 2);
  $rectl34 = round(((floatval($_REQUEST['rectm34']) * floatval($_REQUEST['rectn34']) > 599) ? floatval($_REQUEST['recto34']) : 0), 2);
  $rectl35 = round(((floatval($_REQUEST['rectm35']) * floatval($_REQUEST['rectn35']) > 599) ? floatval($_REQUEST['recto35']) : 0), 2);
  $rectl36 = round(((floatval($_REQUEST['rectm36']) * floatval($_REQUEST['rectn36']) > 599) ? floatval($_REQUEST['recto36']) : 0), 2);
  $rectl37 = round(((floatval($_REQUEST['rectm37']) * floatval($_REQUEST['rectn37']) > 599) ? floatval($_REQUEST['recto37']) : 0), 2);
  $rectl38 = round(((floatval($_REQUEST['rectm38']) * floatval($_REQUEST['rectn38']) > 599) ? floatval($_REQUEST['recto38']) : 0), 2);
  $rectl39 = round(((floatval($_REQUEST['rectm39']) * floatval($_REQUEST['rectn39']) > 599) ? floatval($_REQUEST['recto39']) : 0), 2);
  $rectl40 = round(((floatval($_REQUEST['rectm40']) * floatval($_REQUEST['rectn40']) > 599) ? floatval($_REQUEST['recto40']) : 0), 2);
  $rectl41 = round(((floatval($_REQUEST['rectm41']) * floatval($_REQUEST['rectn41']) > 599) ? floatval($_REQUEST['recto41']) : 0), 2);
  $rectl42 = round(((floatval($_REQUEST['rectm42']) * floatval($_REQUEST['rectn42']) > 599) ? floatval($_REQUEST['recto42']) : 0), 2);
  $rectl43 = round(((floatval($_REQUEST['rectm43']) * floatval($_REQUEST['rectn43']) > 599) ? floatval($_REQUEST['recto43']) : 0), 2);
  $rectl44 = 0;
  for ($i = 11; $i <= 43; $i++) {
    if (isset($_REQUEST['rectl' . $i])) {
      $rectl44 += $_REQUEST['rectl' . $i];
    }
  }

  // Column 16

  $rectp11 = round(((floatval($_REQUEST['recto11']) * (floatval($_REQUEST['rectm11']) + floatval($_REQUEST['rectn11']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp12 = round(((floatval($_REQUEST['recto12']) * (floatval($_REQUEST['rectm12']) + floatval($_REQUEST['rectn12']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp13 = round(((floatval($_REQUEST['recto13']) * (floatval($_REQUEST['rectm13']) + floatval($_REQUEST['rectn13']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp14 = round(((floatval($_REQUEST['recto14']) * (floatval($_REQUEST['rectm14']) + floatval($_REQUEST['rectn14']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp15 = round(((floatval($_REQUEST['recto15']) * (floatval($_REQUEST['rectm15']) + floatval($_REQUEST['rectn15']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp16 = round(((floatval($_REQUEST['recto16']) * (floatval($_REQUEST['rectm16']) + floatval($_REQUEST['rectn16']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp17 = round(((floatval($_REQUEST['recto17']) * (floatval($_REQUEST['rectm17']) + floatval($_REQUEST['rectn17']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp18 = round(((floatval($_REQUEST['recto18']) * (floatval($_REQUEST['rectm18']) + floatval($_REQUEST['rectn18']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp19 = round(((floatval($_REQUEST['recto19']) * (floatval($_REQUEST['rectm19']) + floatval($_REQUEST['rectn19']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp20 = round(((floatval($_REQUEST['recto20']) * (floatval($_REQUEST['rectm20']) + floatval($_REQUEST['rectn20']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp21 = round(((floatval($_REQUEST['recto21']) * (floatval($_REQUEST['rectm21']) + floatval($_REQUEST['rectn21']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp22 = round(((floatval($_REQUEST['recto22']) * (floatval($_REQUEST['rectm22']) + floatval($_REQUEST['rectn22']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp23 = round(((floatval($_REQUEST['recto23']) * (floatval($_REQUEST['rectm23']) + floatval($_REQUEST['rectn23']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp24 = round(((floatval($_REQUEST['recto24']) * (floatval($_REQUEST['rectm24']) + floatval($_REQUEST['rectn24']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp25 = round(((floatval($_REQUEST['recto25']) * (floatval($_REQUEST['rectm25']) + floatval($_REQUEST['rectn25']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp26 = round(((floatval($_REQUEST['recto26']) * (floatval($_REQUEST['rectm26']) + floatval($_REQUEST['rectn26']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp27 = round(((floatval($_REQUEST['recto27']) * (floatval($_REQUEST['rectm27']) + floatval($_REQUEST['rectn27']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp28 = round(((floatval($_REQUEST['recto28']) * (floatval($_REQUEST['rectm28']) + floatval($_REQUEST['rectn28']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp29 = round(((floatval($_REQUEST['recto29']) * (floatval($_REQUEST['rectm29']) + floatval($_REQUEST['rectn29']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp30 = round(((floatval($_REQUEST['recto30']) * (floatval($_REQUEST['rectm30']) + floatval($_REQUEST['rectn30']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp31 = round(((floatval($_REQUEST['recto31']) * (floatval($_REQUEST['rectm31']) + floatval($_REQUEST['rectn31']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp32 = round(((floatval($_REQUEST['recto32']) * (floatval($_REQUEST['rectm32']) + floatval($_REQUEST['rectn32']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp33 = round(((floatval($_REQUEST['recto33']) * (floatval($_REQUEST['rectm33']) + floatval($_REQUEST['rectn33']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp34 = round(((floatval($_REQUEST['recto34']) * (floatval($_REQUEST['rectm34']) + floatval($_REQUEST['rectn34']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp35 = round(((floatval($_REQUEST['recto35']) * (floatval($_REQUEST['rectm35']) + floatval($_REQUEST['rectn35']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp36 = round(((floatval($_REQUEST['recto36']) * (floatval($_REQUEST['rectm36']) + floatval($_REQUEST['rectn36']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp37 = round(((floatval($_REQUEST['recto37']) * (floatval($_REQUEST['rectm37']) + floatval($_REQUEST['rectn37']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp38 = round(((floatval($_REQUEST['recto38']) * (floatval($_REQUEST['rectm38']) + floatval($_REQUEST['rectn38']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp39 = round(((floatval($_REQUEST['recto39']) * (floatval($_REQUEST['rectm39']) + floatval($_REQUEST['rectn39']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp40 = round(((floatval($_REQUEST['recto40']) * (floatval($_REQUEST['rectm40']) + floatval($_REQUEST['rectn40']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp41 = round(((floatval($_REQUEST['recto41']) * (floatval($_REQUEST['rectm41']) + floatval($_REQUEST['rectn41']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp42 = round(((floatval($_REQUEST['recto42']) * (floatval($_REQUEST['rectm42']) + floatval($_REQUEST['rectn42']) + floatval($_REQUEST['rectu1']))) / 6), 2);
  $rectp43 = round(((floatval($_REQUEST['recto43']) * (floatval($_REQUEST['rectm43']) + floatval($_REQUEST['rectn43']) + floatval($_REQUEST['rectu1']))) / 6), 2);

  // Column 17

  $rectq11 = round((((0 < floatval($_REQUEST['rectn11']) && floatval($_REQUEST['rectn11']) <= 13) && (0 < floatval($_REQUEST['rectm11']) && floatval($_REQUEST['rectm11']) <= 13)) ? $rectp11 : 0),  2);
  $rectq12 = round((((0 < floatval($_REQUEST['rectn12']) && floatval($_REQUEST['rectn12']) <= 13) && (0 < floatval($_REQUEST['rectm12']) && floatval($_REQUEST['rectm12']) <= 13)) ? $rectp12 : 0),  2);
  $rectq13 = round((((0 < floatval($_REQUEST['rectn13']) && floatval($_REQUEST['rectn13']) <= 13) && (0 < floatval($_REQUEST['rectm13']) && floatval($_REQUEST['rectm13']) <= 13)) ? $rectp13 : 0),  2);
  $rectq14 = round((((0 < floatval($_REQUEST['rectn14']) && floatval($_REQUEST['rectn14']) <= 13) && (0 < floatval($_REQUEST['rectm14']) && floatval($_REQUEST['rectm14']) <= 13)) ? $rectp14 : 0),  2);
  $rectq15 = round((((0 < floatval($_REQUEST['rectn15']) && floatval($_REQUEST['rectn15']) <= 13) && (0 < floatval($_REQUEST['rectm15']) && floatval($_REQUEST['rectm15']) <= 13)) ? $rectp15 : 0),  2);
  $rectq16 = round((((0 < floatval($_REQUEST['rectn16']) && floatval($_REQUEST['rectn16']) <= 13) && (0 < floatval($_REQUEST['rectm16']) && floatval($_REQUEST['rectm16']) <= 13)) ? $rectp16 : 0),  2);
  $rectq17 = round((((0 < floatval($_REQUEST['rectn17']) && floatval($_REQUEST['rectn17']) <= 13) && (0 < floatval($_REQUEST['rectm17']) && floatval($_REQUEST['rectm17']) <= 13)) ? $rectp17 : 0),  2);
  $rectq18 = round((((0 < floatval($_REQUEST['rectn18']) && floatval($_REQUEST['rectn18']) <= 13) && (0 < floatval($_REQUEST['rectm18']) && floatval($_REQUEST['rectm18']) <= 13)) ? $rectp18 : 0),  2);
  $rectq19 = round((((0 < floatval($_REQUEST['rectn19']) && floatval($_REQUEST['rectn19']) <= 13) && (0 < floatval($_REQUEST['rectm19']) && floatval($_REQUEST['rectm19']) <= 13)) ? $rectp19 : 0),  2);
  $rectq20 = round((((0 < floatval($_REQUEST['rectn20']) && floatval($_REQUEST['rectn20']) <= 13) && (0 < floatval($_REQUEST['rectm20']) && floatval($_REQUEST['rectm20']) <= 13)) ? $rectp20 : 0),  2);
  $rectq21 = round((((0 < floatval($_REQUEST['rectn21']) && floatval($_REQUEST['rectn21']) <= 13) && (0 < floatval($_REQUEST['rectm21']) && floatval($_REQUEST['rectm21']) <= 13)) ? $rectp21 : 0),  2);
  $rectq22 = round((((0 < floatval($_REQUEST['rectn22']) && floatval($_REQUEST['rectn22']) <= 13) && (0 < floatval($_REQUEST['rectm22']) && floatval($_REQUEST['rectm22']) <= 13)) ? $rectp22 : 0),  2);
  $rectq23 = round((((0 < floatval($_REQUEST['rectn23']) && floatval($_REQUEST['rectn23']) <= 13) && (0 < floatval($_REQUEST['rectm23']) && floatval($_REQUEST['rectm23']) <= 13)) ? $rectp23 : 0),  2);
  $rectq24 = round((((0 < floatval($_REQUEST['rectn24']) && floatval($_REQUEST['rectn24']) <= 13) && (0 < floatval($_REQUEST['rectm24']) && floatval($_REQUEST['rectm24']) <= 13)) ? $rectp24 : 0),  2);
  $rectq25 = round((((0 < floatval($_REQUEST['rectn25']) && floatval($_REQUEST['rectn25']) <= 13) && (0 < floatval($_REQUEST['rectm25']) && floatval($_REQUEST['rectm25']) <= 13)) ? $rectp25 : 0),  2);
  $rectq26 = round((((0 < floatval($_REQUEST['rectn26']) && floatval($_REQUEST['rectn26']) <= 13) && (0 < floatval($_REQUEST['rectm26']) && floatval($_REQUEST['rectm26']) <= 13)) ? $rectp26 : 0),  2);
  $rectq27 = round((((0 < floatval($_REQUEST['rectn27']) && floatval($_REQUEST['rectn27']) <= 13) && (0 < floatval($_REQUEST['rectm27']) && floatval($_REQUEST['rectm27']) <= 13)) ? $rectp27 : 0),  2);
  $rectq28 = round((((0 < floatval($_REQUEST['rectn28']) && floatval($_REQUEST['rectn28']) <= 13) && (0 < floatval($_REQUEST['rectm28']) && floatval($_REQUEST['rectm28']) <= 13)) ? $rectp28 : 0),  2);
  $rectq29 = round((((0 < floatval($_REQUEST['rectn29']) && floatval($_REQUEST['rectn29']) <= 13) && (0 < floatval($_REQUEST['rectm29']) && floatval($_REQUEST['rectm29']) <= 13)) ? $rectp29 : 0),  2);
  $rectq30 = round((((0 < floatval($_REQUEST['rectn30']) && floatval($_REQUEST['rectn30']) <= 13) && (0 < floatval($_REQUEST['rectm30']) && floatval($_REQUEST['rectm30']) <= 13)) ? $rectp30 : 0),  2);
  $rectq31 = round((((0 < floatval($_REQUEST['rectn31']) && floatval($_REQUEST['rectn31']) <= 13) && (0 < floatval($_REQUEST['rectm31']) && floatval($_REQUEST['rectm31']) <= 13)) ? $rectp31 : 0),  2);
  $rectq32 = round((((0 < floatval($_REQUEST['rectn32']) && floatval($_REQUEST['rectn32']) <= 13) && (0 < floatval($_REQUEST['rectm32']) && floatval($_REQUEST['rectm32']) <= 13)) ? $rectp32 : 0),  2);
  $rectq33 = round((((0 < floatval($_REQUEST['rectn33']) && floatval($_REQUEST['rectn33']) <= 13) && (0 < floatval($_REQUEST['rectm33']) && floatval($_REQUEST['rectm33']) <= 13)) ? $rectp33 : 0),  2);
  $rectq34 = round((((0 < floatval($_REQUEST['rectn34']) && floatval($_REQUEST['rectn34']) <= 13) && (0 < floatval($_REQUEST['rectm34']) && floatval($_REQUEST['rectm34']) <= 13)) ? $rectp34 : 0),  2);
  $rectq35 = round((((0 < floatval($_REQUEST['rectn35']) && floatval($_REQUEST['rectn35']) <= 13) && (0 < floatval($_REQUEST['rectm35']) && floatval($_REQUEST['rectm35']) <= 13)) ? $rectp35 : 0),  2);
  $rectq36 = round((((0 < floatval($_REQUEST['rectn36']) && floatval($_REQUEST['rectn36']) <= 13) && (0 < floatval($_REQUEST['rectm36']) && floatval($_REQUEST['rectm36']) <= 13)) ? $rectp36 : 0),  2);
  $rectq37 = round((((0 < floatval($_REQUEST['rectn37']) && floatval($_REQUEST['rectn37']) <= 13) && (0 < floatval($_REQUEST['rectm37']) && floatval($_REQUEST['rectm37']) <= 13)) ? $rectp37 : 0),  2);
  $rectq38 = round((((0 < floatval($_REQUEST['rectn38']) && floatval($_REQUEST['rectn38']) <= 13) && (0 < floatval($_REQUEST['rectm38']) && floatval($_REQUEST['rectm38']) <= 13)) ? $rectp38 : 0),  2);
  $rectq39 = round((((0 < floatval($_REQUEST['rectn39']) && floatval($_REQUEST['rectn39']) <= 13) && (0 < floatval($_REQUEST['rectm39']) && floatval($_REQUEST['rectm39']) <= 13)) ? $rectp39 : 0),  2);
  $rectq40 = round((((0 < floatval($_REQUEST['rectn40']) && floatval($_REQUEST['rectn40']) <= 13) && (0 < floatval($_REQUEST['rectm40']) && floatval($_REQUEST['rectm40']) <= 13)) ? $rectp40 : 0),  2);
  $rectq41 = round((((0 < floatval($_REQUEST['rectn41']) && floatval($_REQUEST['rectn41']) <= 13) && (0 < floatval($_REQUEST['rectm41']) && floatval($_REQUEST['rectm41']) <= 13)) ? $rectp41 : 0),  2);
  $rectq42 = round((((0 < floatval($_REQUEST['rectn42']) && floatval($_REQUEST['rectn42']) <= 13) && (0 < floatval($_REQUEST['rectm42']) && floatval($_REQUEST['rectm42']) <= 13)) ? $rectp42 : 0),  2);
  $rectq43 = round((((0 < floatval($_REQUEST['rectn43']) && floatval($_REQUEST['rectn43']) <= 13) && (0 < floatval($_REQUEST['rectm43']) && floatval($_REQUEST['rectm43']) <= 13)) ? $rectp43 : 0),  2);
  // Column 18

  $rectr11 = round(((((13 < floatval($_REQUEST['rectn11']) && floatval($_REQUEST['rectn11']) <= 30) && floatval($_REQUEST['rectm11']) <= 30) || ((13 < floatval($_REQUEST['rectm11']) && floatval($_REQUEST['rectm11']) <= 30) && floatval($_REQUEST['rectn11']) <= 30)) ? $rectp11 : 0), 2);
  $rectr12 = round(((((13 < floatval($_REQUEST['rectn12']) && floatval($_REQUEST['rectn12']) <= 30) && floatval($_REQUEST['rectm12']) <= 30) || ((13 < floatval($_REQUEST['rectm12']) && floatval($_REQUEST['rectm12']) <= 30) && floatval($_REQUEST['rectn12']) <= 30)) ? $rectp12 : 0), 2);
  $rectr13 = round(((((13 < floatval($_REQUEST['rectn13']) && floatval($_REQUEST['rectn13']) <= 30) && floatval($_REQUEST['rectm13']) <= 30) || ((13 < floatval($_REQUEST['rectm13']) && floatval($_REQUEST['rectm13']) <= 30) && floatval($_REQUEST['rectn13']) <= 30)) ? $rectp13 : 0), 2);
  $rectr14 = round(((((13 < floatval($_REQUEST['rectn14']) && floatval($_REQUEST['rectn14']) <= 30) && floatval($_REQUEST['rectm14']) <= 30) || ((13 < floatval($_REQUEST['rectm14']) && floatval($_REQUEST['rectm14']) <= 30) && floatval($_REQUEST['rectn14']) <= 30)) ? $rectp14 : 0), 2);
  $rectr15 = round(((((13 < floatval($_REQUEST['rectn15']) && floatval($_REQUEST['rectn15']) <= 30) && floatval($_REQUEST['rectm15']) <= 30) || ((13 < floatval($_REQUEST['rectm15']) && floatval($_REQUEST['rectm15']) <= 30) && floatval($_REQUEST['rectn15']) <= 30)) ? $rectp15 : 0), 2);
  $rectr16 = round(((((13 < floatval($_REQUEST['rectn16']) && floatval($_REQUEST['rectn16']) <= 30) && floatval($_REQUEST['rectm16']) <= 30) || ((13 < floatval($_REQUEST['rectm16']) && floatval($_REQUEST['rectm16']) <= 30) && floatval($_REQUEST['rectn16']) <= 30)) ? $rectp16 : 0), 2);
  $rectr17 = round(((((13 < floatval($_REQUEST['rectn17']) && floatval($_REQUEST['rectn17']) <= 30) && floatval($_REQUEST['rectm17']) <= 30) || ((13 < floatval($_REQUEST['rectm17']) && floatval($_REQUEST['rectm17']) <= 30) && floatval($_REQUEST['rectn17']) <= 30)) ? $rectp17 : 0), 2);
  $rectr18 = round(((((13 < floatval($_REQUEST['rectn18']) && floatval($_REQUEST['rectn18']) <= 30) && floatval($_REQUEST['rectm18']) <= 30) || ((13 < floatval($_REQUEST['rectm18']) && floatval($_REQUEST['rectm18']) <= 30) && floatval($_REQUEST['rectn18']) <= 30)) ? $rectp18 : 0), 2);
  $rectr19 = round(((((13 < floatval($_REQUEST['rectn19']) && floatval($_REQUEST['rectn19']) <= 30) && floatval($_REQUEST['rectm19']) <= 30) || ((13 < floatval($_REQUEST['rectm19']) && floatval($_REQUEST['rectm19']) <= 30) && floatval($_REQUEST['rectn19']) <= 30)) ? $rectp19 : 0), 2);
  $rectr20 = round(((((13 < floatval($_REQUEST['rectn20']) && floatval($_REQUEST['rectn20']) <= 30) && floatval($_REQUEST['rectm20']) <= 30) || ((13 < floatval($_REQUEST['rectm20']) && floatval($_REQUEST['rectm20']) <= 30) && floatval($_REQUEST['rectn20']) <= 30)) ? $rectp20 : 0), 2);
  $rectr21 = round(((((13 < floatval($_REQUEST['rectn21']) && floatval($_REQUEST['rectn21']) <= 30) && floatval($_REQUEST['rectm21']) <= 30) || ((13 < floatval($_REQUEST['rectm21']) && floatval($_REQUEST['rectm21']) <= 30) && floatval($_REQUEST['rectn21']) <= 30)) ? $rectp21 : 0), 2);
  $rectr22 = round(((((13 < floatval($_REQUEST['rectn22']) && floatval($_REQUEST['rectn22']) <= 30) && floatval($_REQUEST['rectm22']) <= 30) || ((13 < floatval($_REQUEST['rectm22']) && floatval($_REQUEST['rectm22']) <= 30) && floatval($_REQUEST['rectn22']) <= 30)) ? $rectp22 : 0), 2);
  $rectr23 = round(((((13 < floatval($_REQUEST['rectn23']) && floatval($_REQUEST['rectn23']) <= 30) && floatval($_REQUEST['rectm23']) <= 30) || ((13 < floatval($_REQUEST['rectm23']) && floatval($_REQUEST['rectm23']) <= 30) && floatval($_REQUEST['rectn23']) <= 30)) ? $rectp23 : 0), 2);
  $rectr24 = round(((((13 < floatval($_REQUEST['rectn24']) && floatval($_REQUEST['rectn24']) <= 30) && floatval($_REQUEST['rectm24']) <= 30) || ((13 < floatval($_REQUEST['rectm24']) && floatval($_REQUEST['rectm24']) <= 30) && floatval($_REQUEST['rectn24']) <= 30)) ? $rectp24 : 0), 2);
  $rectr25 = round(((((13 < floatval($_REQUEST['rectn25']) && floatval($_REQUEST['rectn25']) <= 30) && floatval($_REQUEST['rectm25']) <= 30) || ((13 < floatval($_REQUEST['rectm25']) && floatval($_REQUEST['rectm25']) <= 30) && floatval($_REQUEST['rectn25']) <= 30)) ? $rectp25 : 0), 2);
  $rectr26 = round(((((13 < floatval($_REQUEST['rectn26']) && floatval($_REQUEST['rectn26']) <= 30) && floatval($_REQUEST['rectm26']) <= 30) || ((13 < floatval($_REQUEST['rectm26']) && floatval($_REQUEST['rectm26']) <= 30) && floatval($_REQUEST['rectn26']) <= 30)) ? $rectp26 : 0), 2);
  $rectr27 = round(((((13 < floatval($_REQUEST['rectn27']) && floatval($_REQUEST['rectn27']) <= 30) && floatval($_REQUEST['rectm27']) <= 30) || ((13 < floatval($_REQUEST['rectm27']) && floatval($_REQUEST['rectm27']) <= 30) && floatval($_REQUEST['rectn27']) <= 30)) ? $rectp27 : 0), 2);
  $rectr28 = round(((((13 < floatval($_REQUEST['rectn28']) && floatval($_REQUEST['rectn28']) <= 30) && floatval($_REQUEST['rectm28']) <= 30) || ((13 < floatval($_REQUEST['rectm28']) && floatval($_REQUEST['rectm28']) <= 30) && floatval($_REQUEST['rectn28']) <= 30)) ? $rectp28 : 0), 2);
  $rectr29 = round(((((13 < floatval($_REQUEST['rectn29']) && floatval($_REQUEST['rectn29']) <= 30) && floatval($_REQUEST['rectm29']) <= 30) || ((13 < floatval($_REQUEST['rectm29']) && floatval($_REQUEST['rectm29']) <= 30) && floatval($_REQUEST['rectn29']) <= 30)) ? $rectp29 : 0), 2);
  $rectr30 = round(((((13 < floatval($_REQUEST['rectn30']) && floatval($_REQUEST['rectn30']) <= 30) && floatval($_REQUEST['rectm30']) <= 30) || ((13 < floatval($_REQUEST['rectm30']) && floatval($_REQUEST['rectm30']) <= 30) && floatval($_REQUEST['rectn30']) <= 30)) ? $rectp30 : 0), 2);
  $rectr31 = round(((((13 < floatval($_REQUEST['rectn31']) && floatval($_REQUEST['rectn31']) <= 30) && floatval($_REQUEST['rectm31']) <= 30) || ((13 < floatval($_REQUEST['rectm31']) && floatval($_REQUEST['rectm31']) <= 30) && floatval($_REQUEST['rectn31']) <= 30)) ? $rectp31 : 0), 2);
  $rectr32 = round(((((13 < floatval($_REQUEST['rectn32']) && floatval($_REQUEST['rectn32']) <= 30) && floatval($_REQUEST['rectm32']) <= 30) || ((13 < floatval($_REQUEST['rectm32']) && floatval($_REQUEST['rectm32']) <= 30) && floatval($_REQUEST['rectn32']) <= 30)) ? $rectp32 : 0), 2);
  $rectr33 = round(((((13 < floatval($_REQUEST['rectn33']) && floatval($_REQUEST['rectn33']) <= 30) && floatval($_REQUEST['rectm33']) <= 30) || ((13 < floatval($_REQUEST['rectm33']) && floatval($_REQUEST['rectm33']) <= 30) && floatval($_REQUEST['rectn33']) <= 30)) ? $rectp33 : 0), 2);
  $rectr34 = round(((((13 < floatval($_REQUEST['rectn34']) && floatval($_REQUEST['rectn34']) <= 30) && floatval($_REQUEST['rectm34']) <= 30) || ((13 < floatval($_REQUEST['rectm34']) && floatval($_REQUEST['rectm34']) <= 30) && floatval($_REQUEST['rectn34']) <= 30)) ? $rectp34 : 0), 2);
  $rectr35 = round(((((13 < floatval($_REQUEST['rectn35']) && floatval($_REQUEST['rectn35']) <= 30) && floatval($_REQUEST['rectm35']) <= 30) || ((13 < floatval($_REQUEST['rectm35']) && floatval($_REQUEST['rectm35']) <= 30) && floatval($_REQUEST['rectn35']) <= 30)) ? $rectp35 : 0), 2);
  $rectr36 = round(((((13 < floatval($_REQUEST['rectn36']) && floatval($_REQUEST['rectn36']) <= 30) && floatval($_REQUEST['rectm36']) <= 30) || ((13 < floatval($_REQUEST['rectm36']) && floatval($_REQUEST['rectm36']) <= 30) && floatval($_REQUEST['rectn36']) <= 30)) ? $rectp36 : 0), 2);
  $rectr37 = round(((((13 < floatval($_REQUEST['rectn37']) && floatval($_REQUEST['rectn37']) <= 30) && floatval($_REQUEST['rectm37']) <= 30) || ((13 < floatval($_REQUEST['rectm37']) && floatval($_REQUEST['rectm37']) <= 30) && floatval($_REQUEST['rectn37']) <= 30)) ? $rectp37 : 0), 2);
  $rectr38 = round(((((13 < floatval($_REQUEST['rectn38']) && floatval($_REQUEST['rectn38']) <= 30) && floatval($_REQUEST['rectm38']) <= 30) || ((13 < floatval($_REQUEST['rectm38']) && floatval($_REQUEST['rectm38']) <= 30) && floatval($_REQUEST['rectn38']) <= 30)) ? $rectp38 : 0), 2);
  $rectr39 = round(((((13 < floatval($_REQUEST['rectn39']) && floatval($_REQUEST['rectn39']) <= 30) && floatval($_REQUEST['rectm39']) <= 30) || ((13 < floatval($_REQUEST['rectm39']) && floatval($_REQUEST['rectm39']) <= 30) && floatval($_REQUEST['rectn39']) <= 30)) ? $rectp39 : 0), 2);
  $rectr40 = round(((((13 < floatval($_REQUEST['rectn40']) && floatval($_REQUEST['rectn40']) <= 30) && floatval($_REQUEST['rectm40']) <= 30) || ((13 < floatval($_REQUEST['rectm40']) && floatval($_REQUEST['rectm40']) <= 30) && floatval($_REQUEST['rectn40']) <= 30)) ? $rectp40 : 0), 2);
  $rectr41 = round(((((13 < floatval($_REQUEST['rectn41']) && floatval($_REQUEST['rectn41']) <= 30) && floatval($_REQUEST['rectm41']) <= 30) || ((13 < floatval($_REQUEST['rectm41']) && floatval($_REQUEST['rectm41']) <= 30) && floatval($_REQUEST['rectn41']) <= 30)) ? $rectp41 : 0), 2);
  $rectr42 = round(((((13 < floatval($_REQUEST['rectn42']) && floatval($_REQUEST['rectn42']) <= 30) && floatval($_REQUEST['rectm42']) <= 30) || ((13 < floatval($_REQUEST['rectm42']) && floatval($_REQUEST['rectm42']) <= 30) && floatval($_REQUEST['rectn42']) <= 30)) ? $rectp42 : 0), 2);
  $rectr43 = round(((((13 < floatval($_REQUEST['rectn43']) && floatval($_REQUEST['rectn43']) <= 30) && floatval($_REQUEST['rectm43']) <= 30) || ((13 < floatval($_REQUEST['rectm43']) && floatval($_REQUEST['rectm43']) <= 30) && floatval($_REQUEST['rectn43']) <= 30)) ? $rectp43 : 0), 2);

  // Column 19
  $rects11 = round(((((30 < floatval($_REQUEST['rectn11']) && floatval($_REQUEST['rectn11']) <= 60) && floatval($_REQUEST['rectm11']) <= 60) || ((30 < floatval($_REQUEST['rectm11']) && floatval($_REQUEST['rectm11']) <= 60) && floatval($_REQUEST['rectn11']) <= 60)) ? $rectp11 : 0), 2);
  $rects12 = round(((((30 < floatval($_REQUEST['rectn12']) && floatval($_REQUEST['rectn12']) <= 60) && floatval($_REQUEST['rectm12']) <= 60) || ((30 < floatval($_REQUEST['rectm12']) && floatval($_REQUEST['rectm12']) <= 60) && floatval($_REQUEST['rectn12']) <= 60)) ? $rectp12 : 0), 2);
  $rects13 = round(((((30 < floatval($_REQUEST['rectn13']) && floatval($_REQUEST['rectn13']) <= 60) && floatval($_REQUEST['rectm13']) <= 60) || ((30 < floatval($_REQUEST['rectm13']) && floatval($_REQUEST['rectm13']) <= 60) && floatval($_REQUEST['rectn13']) <= 60)) ? $rectp13 : 0), 2);
  $rects14 = round(((((30 < floatval($_REQUEST['rectn14']) && floatval($_REQUEST['rectn14']) <= 60) && floatval($_REQUEST['rectm14']) <= 60) || ((30 < floatval($_REQUEST['rectm14']) && floatval($_REQUEST['rectm14']) <= 60) && floatval($_REQUEST['rectn14']) <= 60)) ? $rectp14 : 0), 2);
  $rects15 = round(((((30 < floatval($_REQUEST['rectn15']) && floatval($_REQUEST['rectn15']) <= 60) && floatval($_REQUEST['rectm15']) <= 60) || ((30 < floatval($_REQUEST['rectm15']) && floatval($_REQUEST['rectm15']) <= 60) && floatval($_REQUEST['rectn15']) <= 60)) ? $rectp15 : 0), 2);
  $rects16 = round(((((30 < floatval($_REQUEST['rectn16']) && floatval($_REQUEST['rectn16']) <= 60) && floatval($_REQUEST['rectm16']) <= 60) || ((30 < floatval($_REQUEST['rectm16']) && floatval($_REQUEST['rectm16']) <= 60) && floatval($_REQUEST['rectn16']) <= 60)) ? $rectp16 : 0), 2);
  $rects17 = round(((((30 < floatval($_REQUEST['rectn17']) && floatval($_REQUEST['rectn17']) <= 60) && floatval($_REQUEST['rectm17']) <= 60) || ((30 < floatval($_REQUEST['rectm17']) && floatval($_REQUEST['rectm17']) <= 60) && floatval($_REQUEST['rectn17']) <= 60)) ? $rectp17 : 0), 2);
  $rects18 = round(((((30 < floatval($_REQUEST['rectn18']) && floatval($_REQUEST['rectn18']) <= 60) && floatval($_REQUEST['rectm18']) <= 60) || ((30 < floatval($_REQUEST['rectm18']) && floatval($_REQUEST['rectm18']) <= 60) && floatval($_REQUEST['rectn18']) <= 60)) ? $rectp18 : 0), 2);
  $rects19 = round(((((30 < floatval($_REQUEST['rectn19']) && floatval($_REQUEST['rectn19']) <= 60) && floatval($_REQUEST['rectm19']) <= 60) || ((30 < floatval($_REQUEST['rectm19']) && floatval($_REQUEST['rectm19']) <= 60) && floatval($_REQUEST['rectn19']) <= 60)) ? $rectp19 : 0), 2);
  $rects20 = round(((((30 < floatval($_REQUEST['rectn20']) && floatval($_REQUEST['rectn20']) <= 60) && floatval($_REQUEST['rectm20']) <= 60) || ((30 < floatval($_REQUEST['rectm20']) && floatval($_REQUEST['rectm20']) <= 60) && floatval($_REQUEST['rectn20']) <= 60)) ? $rectp20 : 0), 2);
  $rects21 = round(((((30 < floatval($_REQUEST['rectn21']) && floatval($_REQUEST['rectn21']) <= 60) && floatval($_REQUEST['rectm21']) <= 60) || ((30 < floatval($_REQUEST['rectm21']) && floatval($_REQUEST['rectm21']) <= 60) && floatval($_REQUEST['rectn21']) <= 60)) ? $rectp21 : 0), 2);
  $rects22 = round(((((30 < floatval($_REQUEST['rectn22']) && floatval($_REQUEST['rectn22']) <= 60) && floatval($_REQUEST['rectm22']) <= 60) || ((30 < floatval($_REQUEST['rectm22']) && floatval($_REQUEST['rectm22']) <= 60) && floatval($_REQUEST['rectn22']) <= 60)) ? $rectp22 : 0), 2);
  $rects23 = round(((((30 < floatval($_REQUEST['rectn23']) && floatval($_REQUEST['rectn23']) <= 60) && floatval($_REQUEST['rectm23']) <= 60) || ((30 < floatval($_REQUEST['rectm23']) && floatval($_REQUEST['rectm23']) <= 60) && floatval($_REQUEST['rectn23']) <= 60)) ? $rectp23 : 0), 2);
  $rects24 = round(((((30 < floatval($_REQUEST['rectn24']) && floatval($_REQUEST['rectn24']) <= 60) && floatval($_REQUEST['rectm24']) <= 60) || ((30 < floatval($_REQUEST['rectm24']) && floatval($_REQUEST['rectm24']) <= 60) && floatval($_REQUEST['rectn24']) <= 60)) ? $rectp24 : 0), 2);
  $rects25 = round(((((30 < floatval($_REQUEST['rectn25']) && floatval($_REQUEST['rectn25']) <= 60) && floatval($_REQUEST['rectm25']) <= 60) || ((30 < floatval($_REQUEST['rectm25']) && floatval($_REQUEST['rectm25']) <= 60) && floatval($_REQUEST['rectn25']) <= 60)) ? $rectp25 : 0), 2);
  $rects26 = round(((((30 < floatval($_REQUEST['rectn26']) && floatval($_REQUEST['rectn26']) <= 60) && floatval($_REQUEST['rectm26']) <= 60) || ((30 < floatval($_REQUEST['rectm26']) && floatval($_REQUEST['rectm26']) <= 60) && floatval($_REQUEST['rectn26']) <= 60)) ? $rectp26 : 0), 2);
  $rects27 = round(((((30 < floatval($_REQUEST['rectn27']) && floatval($_REQUEST['rectn27']) <= 60) && floatval($_REQUEST['rectm27']) <= 60) || ((30 < floatval($_REQUEST['rectm27']) && floatval($_REQUEST['rectm27']) <= 60) && floatval($_REQUEST['rectn27']) <= 60)) ? $rectp27 : 0), 2);
  $rects28 = round(((((30 < floatval($_REQUEST['rectn28']) && floatval($_REQUEST['rectn28']) <= 60) && floatval($_REQUEST['rectm28']) <= 60) || ((30 < floatval($_REQUEST['rectm28']) && floatval($_REQUEST['rectm28']) <= 60) && floatval($_REQUEST['rectn28']) <= 60)) ? $rectp28 : 0), 2);
  $rects29 = round(((((30 < floatval($_REQUEST['rectn29']) && floatval($_REQUEST['rectn29']) <= 60) && floatval($_REQUEST['rectm29']) <= 60) || ((30 < floatval($_REQUEST['rectm29']) && floatval($_REQUEST['rectm29']) <= 60) && floatval($_REQUEST['rectn29']) <= 60)) ? $rectp29 : 0), 2);
  $rects30 = round(((((30 < floatval($_REQUEST['rectn30']) && floatval($_REQUEST['rectn30']) <= 60) && floatval($_REQUEST['rectm30']) <= 60) || ((30 < floatval($_REQUEST['rectm30']) && floatval($_REQUEST['rectm30']) <= 60) && floatval($_REQUEST['rectn30']) <= 60)) ? $rectp30 : 0), 2);
  $rects31 = round(((((30 < floatval($_REQUEST['rectn31']) && floatval($_REQUEST['rectn31']) <= 60) && floatval($_REQUEST['rectm31']) <= 60) || ((30 < floatval($_REQUEST['rectm31']) && floatval($_REQUEST['rectm31']) <= 60) && floatval($_REQUEST['rectn31']) <= 60)) ? $rectp31 : 0), 2);
  $rects32 = round(((((30 < floatval($_REQUEST['rectn32']) && floatval($_REQUEST['rectn32']) <= 60) && floatval($_REQUEST['rectm32']) <= 60) || ((30 < floatval($_REQUEST['rectm32']) && floatval($_REQUEST['rectm32']) <= 60) && floatval($_REQUEST['rectn32']) <= 60)) ? $rectp32 : 0), 2);
  $rects33 = round(((((30 < floatval($_REQUEST['rectn33']) && floatval($_REQUEST['rectn33']) <= 60) && floatval($_REQUEST['rectm33']) <= 60) || ((30 < floatval($_REQUEST['rectm33']) && floatval($_REQUEST['rectm33']) <= 60) && floatval($_REQUEST['rectn33']) <= 60)) ? $rectp33 : 0), 2);
  $rects34 = round(((((30 < floatval($_REQUEST['rectn34']) && floatval($_REQUEST['rectn34']) <= 60) && floatval($_REQUEST['rectm34']) <= 60) || ((30 < floatval($_REQUEST['rectm34']) && floatval($_REQUEST['rectm34']) <= 60) && floatval($_REQUEST['rectn34']) <= 60)) ? $rectp34 : 0), 2);
  $rects35 = round(((((30 < floatval($_REQUEST['rectn35']) && floatval($_REQUEST['rectn35']) <= 60) && floatval($_REQUEST['rectm35']) <= 60) || ((30 < floatval($_REQUEST['rectm35']) && floatval($_REQUEST['rectm35']) <= 60) && floatval($_REQUEST['rectn35']) <= 60)) ? $rectp35 : 0), 2);
  $rects36 = round(((((30 < floatval($_REQUEST['rectn36']) && floatval($_REQUEST['rectn36']) <= 60) && floatval($_REQUEST['rectm36']) <= 60) || ((30 < floatval($_REQUEST['rectm36']) && floatval($_REQUEST['rectm36']) <= 60) && floatval($_REQUEST['rectn36']) <= 60)) ? $rectp36 : 0), 2);
  $rects37 = round(((((30 < floatval($_REQUEST['rectn37']) && floatval($_REQUEST['rectn37']) <= 60) && floatval($_REQUEST['rectm37']) <= 60) || ((30 < floatval($_REQUEST['rectm37']) && floatval($_REQUEST['rectm37']) <= 60) && floatval($_REQUEST['rectn37']) <= 60)) ? $rectp37 : 0), 2);
  $rects38 = round(((((30 < floatval($_REQUEST['rectn38']) && floatval($_REQUEST['rectn38']) <= 60) && floatval($_REQUEST['rectm38']) <= 60) || ((30 < floatval($_REQUEST['rectm38']) && floatval($_REQUEST['rectm38']) <= 60) && floatval($_REQUEST['rectn38']) <= 60)) ? $rectp38 : 0), 2);
  $rects39 = round(((((30 < floatval($_REQUEST['rectn39']) && floatval($_REQUEST['rectn39']) <= 60) && floatval($_REQUEST['rectm39']) <= 60) || ((30 < floatval($_REQUEST['rectm39']) && floatval($_REQUEST['rectm39']) <= 60) && floatval($_REQUEST['rectn39']) <= 60)) ? $rectp39 : 0), 2);
  $rects40 = round(((((30 < floatval($_REQUEST['rectn40']) && floatval($_REQUEST['rectn40']) <= 60) && floatval($_REQUEST['rectm40']) <= 60) || ((30 < floatval($_REQUEST['rectm40']) && floatval($_REQUEST['rectm40']) <= 60) && floatval($_REQUEST['rectn40']) <= 60)) ? $rectp40 : 0), 2);
  $rects41 = round(((((30 < floatval($_REQUEST['rectn41']) && floatval($_REQUEST['rectn41']) <= 60) && floatval($_REQUEST['rectm41']) <= 60) || ((30 < floatval($_REQUEST['rectm41']) && floatval($_REQUEST['rectm41']) <= 60) && floatval($_REQUEST['rectn41']) <= 60)) ? $rectp41 : 0), 2);
  $rects42 = round(((((30 < floatval($_REQUEST['rectn42']) && floatval($_REQUEST['rectn42']) <= 60) && floatval($_REQUEST['rectm42']) <= 60) || ((30 < floatval($_REQUEST['rectm42']) && floatval($_REQUEST['rectm42']) <= 60) && floatval($_REQUEST['rectn42']) <= 60)) ? $rectp42 : 0), 2);
  $rects43 = round(((((30 < floatval($_REQUEST['rectn43']) && floatval($_REQUEST['rectn43']) <= 60) && floatval($_REQUEST['rectm43']) <= 60) || ((30 < floatval($_REQUEST['rectm43']) && floatval($_REQUEST['rectm43']) <= 60) && floatval($_REQUEST['rectn43']) <= 60)) ? $rectp43 : 0), 2);


  // Column 20
  $rectt11 = round(((((60 < floatval($_REQUEST['rectn11']) && floatval($_REQUEST['rectn11']) <= 90) && floatval($_REQUEST['rectm11']) <= 90) || ((60 < floatval($_REQUEST['rectm11']) && floatval($_REQUEST['rectm11']) <= 90) && floatval($_REQUEST['rectn11']) <= 90)) ? $rectp11 : 0), 2);
  $rectt12 = round(((((60 < floatval($_REQUEST['rectn12']) && floatval($_REQUEST['rectn12']) <= 90) && floatval($_REQUEST['rectm12']) <= 90) || ((60 < floatval($_REQUEST['rectm12']) && floatval($_REQUEST['rectm12']) <= 90) && floatval($_REQUEST['rectn12']) <= 90)) ? $rectp12 : 0), 2);
  $rectt13 = round(((((60 < floatval($_REQUEST['rectn13']) && floatval($_REQUEST['rectn13']) <= 90) && floatval($_REQUEST['rectm13']) <= 90) || ((60 < floatval($_REQUEST['rectm13']) && floatval($_REQUEST['rectm13']) <= 90) && floatval($_REQUEST['rectn13']) <= 90)) ? $rectp13 : 0), 2);
  $rectt14 = round(((((60 < floatval($_REQUEST['rectn14']) && floatval($_REQUEST['rectn14']) <= 90) && floatval($_REQUEST['rectm14']) <= 90) || ((60 < floatval($_REQUEST['rectm14']) && floatval($_REQUEST['rectm14']) <= 90) && floatval($_REQUEST['rectn14']) <= 90)) ? $rectp14 : 0), 2);
  $rectt15 = round(((((60 < floatval($_REQUEST['rectn15']) && floatval($_REQUEST['rectn15']) <= 90) && floatval($_REQUEST['rectm15']) <= 90) || ((60 < floatval($_REQUEST['rectm15']) && floatval($_REQUEST['rectm15']) <= 90) && floatval($_REQUEST['rectn15']) <= 90)) ? $rectp15 : 0), 2);
  $rectt16 = round(((((60 < floatval($_REQUEST['rectn16']) && floatval($_REQUEST['rectn16']) <= 90) && floatval($_REQUEST['rectm16']) <= 90) || ((60 < floatval($_REQUEST['rectm16']) && floatval($_REQUEST['rectm16']) <= 90) && floatval($_REQUEST['rectn16']) <= 90)) ? $rectp16 : 0), 2);
  $rectt17 = round(((((60 < floatval($_REQUEST['rectn17']) && floatval($_REQUEST['rectn17']) <= 90) && floatval($_REQUEST['rectm17']) <= 90) || ((60 < floatval($_REQUEST['rectm17']) && floatval($_REQUEST['rectm17']) <= 90) && floatval($_REQUEST['rectn17']) <= 90)) ? $rectp17 : 0), 2);
  $rectt18 = round(((((60 < floatval($_REQUEST['rectn18']) && floatval($_REQUEST['rectn18']) <= 90) && floatval($_REQUEST['rectm18']) <= 90) || ((60 < floatval($_REQUEST['rectm18']) && floatval($_REQUEST['rectm18']) <= 90) && floatval($_REQUEST['rectn18']) <= 90)) ? $rectp18 : 0), 2);
  $rectt19 = round(((((60 < floatval($_REQUEST['rectn19']) && floatval($_REQUEST['rectn19']) <= 90) && floatval($_REQUEST['rectm19']) <= 90) || ((60 < floatval($_REQUEST['rectm19']) && floatval($_REQUEST['rectm19']) <= 90) && floatval($_REQUEST['rectn19']) <= 90)) ? $rectp19 : 0), 2);
  $rectt20 = round(((((60 < floatval($_REQUEST['rectn20']) && floatval($_REQUEST['rectn20']) <= 90) && floatval($_REQUEST['rectm20']) <= 90) || ((60 < floatval($_REQUEST['rectm20']) && floatval($_REQUEST['rectm20']) <= 90) && floatval($_REQUEST['rectn20']) <= 90)) ? $rectp20 : 0), 2);
  $rectt21 = round(((((60 < floatval($_REQUEST['rectn21']) && floatval($_REQUEST['rectn21']) <= 90) && floatval($_REQUEST['rectm21']) <= 90) || ((60 < floatval($_REQUEST['rectm21']) && floatval($_REQUEST['rectm21']) <= 90) && floatval($_REQUEST['rectn21']) <= 90)) ? $rectp21 : 0), 2);
  $rectt22 = round(((((60 < floatval($_REQUEST['rectn22']) && floatval($_REQUEST['rectn22']) <= 90) && floatval($_REQUEST['rectm22']) <= 90) || ((60 < floatval($_REQUEST['rectm22']) && floatval($_REQUEST['rectm22']) <= 90) && floatval($_REQUEST['rectn22']) <= 90)) ? $rectp22 : 0), 2);
  $rectt23 = round(((((60 < floatval($_REQUEST['rectn23']) && floatval($_REQUEST['rectn23']) <= 90) && floatval($_REQUEST['rectm23']) <= 90) || ((60 < floatval($_REQUEST['rectm23']) && floatval($_REQUEST['rectm23']) <= 90) && floatval($_REQUEST['rectn23']) <= 90)) ? $rectp23 : 0), 2);
  $rectt24 = round(((((60 < floatval($_REQUEST['rectn24']) && floatval($_REQUEST['rectn24']) <= 90) && floatval($_REQUEST['rectm24']) <= 90) || ((60 < floatval($_REQUEST['rectm24']) && floatval($_REQUEST['rectm24']) <= 90) && floatval($_REQUEST['rectn24']) <= 90)) ? $rectp24 : 0), 2);
  $rectt25 = round(((((60 < floatval($_REQUEST['rectn25']) && floatval($_REQUEST['rectn25']) <= 90) && floatval($_REQUEST['rectm25']) <= 90) || ((60 < floatval($_REQUEST['rectm25']) && floatval($_REQUEST['rectm25']) <= 90) && floatval($_REQUEST['rectn25']) <= 90)) ? $rectp25 : 0), 2);
  $rectt26 = round(((((60 < floatval($_REQUEST['rectn26']) && floatval($_REQUEST['rectn26']) <= 90) && floatval($_REQUEST['rectm26']) <= 90) || ((60 < floatval($_REQUEST['rectm26']) && floatval($_REQUEST['rectm26']) <= 90) && floatval($_REQUEST['rectn26']) <= 90)) ? $rectp26 : 0), 2);
  $rectt27 = round(((((60 < floatval($_REQUEST['rectn27']) && floatval($_REQUEST['rectn27']) <= 90) && floatval($_REQUEST['rectm27']) <= 90) || ((60 < floatval($_REQUEST['rectm27']) && floatval($_REQUEST['rectm27']) <= 90) && floatval($_REQUEST['rectn27']) <= 90)) ? $rectp27 : 0), 2);
  $rectt28 = round(((((60 < floatval($_REQUEST['rectn28']) && floatval($_REQUEST['rectn28']) <= 90) && floatval($_REQUEST['rectm28']) <= 90) || ((60 < floatval($_REQUEST['rectm28']) && floatval($_REQUEST['rectm28']) <= 90) && floatval($_REQUEST['rectn28']) <= 90)) ? $rectp28 : 0), 2);
  $rectt29 = round(((((60 < floatval($_REQUEST['rectn29']) && floatval($_REQUEST['rectn29']) <= 90) && floatval($_REQUEST['rectm29']) <= 90) || ((60 < floatval($_REQUEST['rectm29']) && floatval($_REQUEST['rectm29']) <= 90) && floatval($_REQUEST['rectn29']) <= 90)) ? $rectp29 : 0), 2);
  $rectt30 = round(((((60 < floatval($_REQUEST['rectn30']) && floatval($_REQUEST['rectn30']) <= 90) && floatval($_REQUEST['rectm30']) <= 90) || ((60 < floatval($_REQUEST['rectm30']) && floatval($_REQUEST['rectm30']) <= 90) && floatval($_REQUEST['rectn30']) <= 90)) ? $rectp30 : 0), 2);
  $rectt31 = round(((((60 < floatval($_REQUEST['rectn31']) && floatval($_REQUEST['rectn31']) <= 90) && floatval($_REQUEST['rectm31']) <= 90) || ((60 < floatval($_REQUEST['rectm31']) && floatval($_REQUEST['rectm31']) <= 90) && floatval($_REQUEST['rectn31']) <= 90)) ? $rectp31 : 0), 2);
  $rectt32 = round(((((60 < floatval($_REQUEST['rectn32']) && floatval($_REQUEST['rectn32']) <= 90) && floatval($_REQUEST['rectm32']) <= 90) || ((60 < floatval($_REQUEST['rectm32']) && floatval($_REQUEST['rectm32']) <= 90) && floatval($_REQUEST['rectn32']) <= 90)) ? $rectp32 : 0), 2);
  $rectt33 = round(((((60 < floatval($_REQUEST['rectn33']) && floatval($_REQUEST['rectn33']) <= 90) && floatval($_REQUEST['rectm33']) <= 90) || ((60 < floatval($_REQUEST['rectm33']) && floatval($_REQUEST['rectm33']) <= 90) && floatval($_REQUEST['rectn33']) <= 90)) ? $rectp33 : 0), 2);
  $rectt34 = round(((((60 < floatval($_REQUEST['rectn34']) && floatval($_REQUEST['rectn34']) <= 90) && floatval($_REQUEST['rectm34']) <= 90) || ((60 < floatval($_REQUEST['rectm34']) && floatval($_REQUEST['rectm34']) <= 90) && floatval($_REQUEST['rectn34']) <= 90)) ? $rectp34 : 0), 2);
  $rectt35 = round(((((60 < floatval($_REQUEST['rectn35']) && floatval($_REQUEST['rectn35']) <= 90) && floatval($_REQUEST['rectm35']) <= 90) || ((60 < floatval($_REQUEST['rectm35']) && floatval($_REQUEST['rectm35']) <= 90) && floatval($_REQUEST['rectn35']) <= 90)) ? $rectp35 : 0), 2);
  $rectt36 = round(((((60 < floatval($_REQUEST['rectn36']) && floatval($_REQUEST['rectn36']) <= 90) && floatval($_REQUEST['rectm36']) <= 90) || ((60 < floatval($_REQUEST['rectm36']) && floatval($_REQUEST['rectm36']) <= 90) && floatval($_REQUEST['rectn36']) <= 90)) ? $rectp36 : 0), 2);
  $rectt37 = round(((((60 < floatval($_REQUEST['rectn37']) && floatval($_REQUEST['rectn37']) <= 90) && floatval($_REQUEST['rectm37']) <= 90) || ((60 < floatval($_REQUEST['rectm37']) && floatval($_REQUEST['rectm37']) <= 90) && floatval($_REQUEST['rectn37']) <= 90)) ? $rectp37 : 0), 2);
  $rectt38 = round(((((60 < floatval($_REQUEST['rectn38']) && floatval($_REQUEST['rectn38']) <= 90) && floatval($_REQUEST['rectm38']) <= 90) || ((60 < floatval($_REQUEST['rectm38']) && floatval($_REQUEST['rectm38']) <= 90) && floatval($_REQUEST['rectn38']) <= 90)) ? $rectp38 : 0), 2);
  $rectt39 = round(((((60 < floatval($_REQUEST['rectn39']) && floatval($_REQUEST['rectn39']) <= 90) && floatval($_REQUEST['rectm39']) <= 90) || ((60 < floatval($_REQUEST['rectm39']) && floatval($_REQUEST['rectm39']) <= 90) && floatval($_REQUEST['rectn39']) <= 90)) ? $rectp39 : 0), 2);
  $rectt40 = round(((((60 < floatval($_REQUEST['rectn40']) && floatval($_REQUEST['rectn40']) <= 90) && floatval($_REQUEST['rectm40']) <= 90) || ((60 < floatval($_REQUEST['rectm40']) && floatval($_REQUEST['rectm40']) <= 90) && floatval($_REQUEST['rectn40']) <= 90)) ? $rectp40 : 0), 2);
  $rectt41 = round(((((60 < floatval($_REQUEST['rectn41']) && floatval($_REQUEST['rectn41']) <= 90) && floatval($_REQUEST['rectm41']) <= 90) || ((60 < floatval($_REQUEST['rectm41']) && floatval($_REQUEST['rectm41']) <= 90) && floatval($_REQUEST['rectn41']) <= 90)) ? $rectp41 : 0), 2);
  $rectt42 = round(((((60 < floatval($_REQUEST['rectn42']) && floatval($_REQUEST['rectn42']) <= 90) && floatval($_REQUEST['rectm42']) <= 90) || ((60 < floatval($_REQUEST['rectm42']) && floatval($_REQUEST['rectm42']) <= 90) && floatval($_REQUEST['rectn42']) <= 90)) ? $rectp42 : 0), 2);
  $rectt43 = round(((((60 < floatval($_REQUEST['rectn43']) && floatval($_REQUEST['rectn43']) <= 90) && floatval($_REQUEST['rectm43']) <= 90) || ((60 < floatval($_REQUEST['rectm43']) && floatval($_REQUEST['rectm43']) <= 90) && floatval($_REQUEST['rectn43']) <= 90)) ? $rectp43 : 0), 2);

  // Column 21
  $rectu11 = round((((90 < floatval($_REQUEST['rectn11'])) || (90 < floatval($_REQUEST['rectm11']))) ? $rectp11 : 0), 2);
  $rectu12 = round((((90 < floatval($_REQUEST['rectn12'])) || (90 < floatval($_REQUEST['rectm12']))) ? $rectp12 : 0), 2);
  $rectu13 = round((((90 < floatval($_REQUEST['rectn13'])) || (90 < floatval($_REQUEST['rectm13']))) ? $rectp13 : 0), 2);
  $rectu14 = round((((90 < floatval($_REQUEST['rectn14'])) || (90 < floatval($_REQUEST['rectm14']))) ? $rectp14 : 0), 2);
  $rectu15 = round((((90 < floatval($_REQUEST['rectn15'])) || (90 < floatval($_REQUEST['rectm15']))) ? $rectp15 : 0), 2);
  $rectu16 = round((((90 < floatval($_REQUEST['rectn16'])) || (90 < floatval($_REQUEST['rectm16']))) ? $rectp16 : 0), 2);
  $rectu17 = round((((90 < floatval($_REQUEST['rectn17'])) || (90 < floatval($_REQUEST['rectm17']))) ? $rectp17 : 0), 2);
  $rectu18 = round((((90 < floatval($_REQUEST['rectn18'])) || (90 < floatval($_REQUEST['rectm18']))) ? $rectp18 : 0), 2);
  $rectu19 = round((((90 < floatval($_REQUEST['rectn19'])) || (90 < floatval($_REQUEST['rectm19']))) ? $rectp19 : 0), 2);
  $rectu20 = round((((90 < floatval($_REQUEST['rectn20'])) || (90 < floatval($_REQUEST['rectm20']))) ? $rectp20 : 0), 2);
  $rectu21 = round((((90 < floatval($_REQUEST['rectn21'])) || (90 < floatval($_REQUEST['rectm21']))) ? $rectp21 : 0), 2);
  $rectu22 = round((((90 < floatval($_REQUEST['rectn22'])) || (90 < floatval($_REQUEST['rectm22']))) ? $rectp22 : 0), 2);
  $rectu23 = round((((90 < floatval($_REQUEST['rectn23'])) || (90 < floatval($_REQUEST['rectm23']))) ? $rectp23 : 0), 2);
  $rectu24 = round((((90 < floatval($_REQUEST['rectn24'])) || (90 < floatval($_REQUEST['rectm24']))) ? $rectp24 : 0), 2);
  $rectu25 = round((((90 < floatval($_REQUEST['rectn25'])) || (90 < floatval($_REQUEST['rectm25']))) ? $rectp25 : 0), 2);
  $rectu26 = round((((90 < floatval($_REQUEST['rectn26'])) || (90 < floatval($_REQUEST['rectm26']))) ? $rectp26 : 0), 2);
  $rectu27 = round((((90 < floatval($_REQUEST['rectn27'])) || (90 < floatval($_REQUEST['rectm27']))) ? $rectp27 : 0), 2);
  $rectu28 = round((((90 < floatval($_REQUEST['rectn28'])) || (90 < floatval($_REQUEST['rectm28']))) ? $rectp28 : 0), 2);
  $rectu29 = round((((90 < floatval($_REQUEST['rectn29'])) || (90 < floatval($_REQUEST['rectm29']))) ? $rectp29 : 0), 2);
  $rectu30 = round((((90 < floatval($_REQUEST['rectn30'])) || (90 < floatval($_REQUEST['rectm30']))) ? $rectp30 : 0), 2);
  $rectu31 = round((((90 < floatval($_REQUEST['rectn31'])) || (90 < floatval($_REQUEST['rectm31']))) ? $rectp31 : 0), 2);
  $rectu32 = round((((90 < floatval($_REQUEST['rectn32'])) || (90 < floatval($_REQUEST['rectm32']))) ? $rectp32 : 0), 2);
  $rectu33 = round((((90 < floatval($_REQUEST['rectn33'])) || (90 < floatval($_REQUEST['rectm33']))) ? $rectp33 : 0), 2);
  $rectu34 = round((((90 < floatval($_REQUEST['rectn34'])) || (90 < floatval($_REQUEST['rectm34']))) ? $rectp34 : 0), 2);
  $rectu35 = round((((90 < floatval($_REQUEST['rectn35'])) || (90 < floatval($_REQUEST['rectm35']))) ? $rectp35 : 0), 2);
  $rectu36 = round((((90 < floatval($_REQUEST['rectn36'])) || (90 < floatval($_REQUEST['rectm36']))) ? $rectp36 : 0), 2);
  $rectu37 = round((((90 < floatval($_REQUEST['rectn37'])) || (90 < floatval($_REQUEST['rectm37']))) ? $rectp37 : 0), 2);
  $rectu38 = round((((90 < floatval($_REQUEST['rectn38'])) || (90 < floatval($_REQUEST['rectm38']))) ? $rectp38 : 0), 2);
  $rectu39 = round((((90 < floatval($_REQUEST['rectn39'])) || (90 < floatval($_REQUEST['rectm39']))) ? $rectp39 : 0), 2);
  $rectu40 = round((((90 < floatval($_REQUEST['rectn40'])) || (90 < floatval($_REQUEST['rectm40']))) ? $rectp40 : 0), 2);
  $rectu41 = round((((90 < floatval($_REQUEST['rectn41'])) || (90 < floatval($_REQUEST['rectm41']))) ? $rectp41 : 0), 2);
  $rectu42 = round((((90 < floatval($_REQUEST['rectn42'])) || (90 < floatval($_REQUEST['rectm42']))) ? $rectp42 : 0), 2);
  $rectu43 = round((((90 < floatval($_REQUEST['rectn43'])) || (90 < floatval($_REQUEST['rectm43']))) ? $rectp43 : 0), 2);

  $rectae1 = round(floatval($_REQUEST['rectx2']) * 4, 2);

  // Column 26
  $rectz11 = round(((floatval($_REQUEST['recty11']) * (floatval($_REQUEST['rectw11']) + floatval($_REQUEST['rectx11']) + $rectae1)) / 6), 2);
  $rectz12 = round(((floatval($_REQUEST['recty12']) * (floatval($_REQUEST['rectw12']) + floatval($_REQUEST['rectx12']) + $rectae1)) / 6), 2);
  $rectz13 = round(((floatval($_REQUEST['recty13']) * (floatval($_REQUEST['rectw13']) + floatval($_REQUEST['rectx13']) + $rectae1)) / 6), 2);
  $rectz14 = round(((floatval($_REQUEST['recty14']) * (floatval($_REQUEST['rectw14']) + floatval($_REQUEST['rectx14']) + $rectae1)) / 6), 2);
  $rectz15 = round(((floatval($_REQUEST['recty15']) * (floatval($_REQUEST['rectw15']) + floatval($_REQUEST['rectx15']) + $rectae1)) / 6), 2);
  $rectz16 = round(((floatval($_REQUEST['recty16']) * (floatval($_REQUEST['rectw16']) + floatval($_REQUEST['rectx16']) + $rectae1)) / 6), 2);
  $rectz17 = round(((floatval($_REQUEST['recty17']) * (floatval($_REQUEST['rectw17']) + floatval($_REQUEST['rectx17']) + $rectae1)) / 6), 2);
  $rectz18 = round(((floatval($_REQUEST['recty18']) * (floatval($_REQUEST['rectw18']) + floatval($_REQUEST['rectx18']) + $rectae1)) / 6), 2);
  $rectz19 = round(((floatval($_REQUEST['recty19']) * (floatval($_REQUEST['rectw19']) + floatval($_REQUEST['rectx19']) + $rectae1)) / 6), 2);
  $rectz20 = round(((floatval($_REQUEST['recty20']) * (floatval($_REQUEST['rectw20']) + floatval($_REQUEST['rectx20']) + $rectae1)) / 6), 2);
  $rectz21 = round(((floatval($_REQUEST['recty21']) * (floatval($_REQUEST['rectw21']) + floatval($_REQUEST['rectx21']) + $rectae1)) / 6), 2);
  $rectz22 = round(((floatval($_REQUEST['recty22']) * (floatval($_REQUEST['rectw22']) + floatval($_REQUEST['rectx22']) + $rectae1)) / 6), 2);
  $rectz23 = round(((floatval($_REQUEST['recty23']) * (floatval($_REQUEST['rectw23']) + floatval($_REQUEST['rectx23']) + $rectae1)) / 6), 2);
  $rectz24 = round(((floatval($_REQUEST['recty24']) * (floatval($_REQUEST['rectw24']) + floatval($_REQUEST['rectx24']) + $rectae1)) / 6), 2);
  $rectz25 = round(((floatval($_REQUEST['recty25']) * (floatval($_REQUEST['rectw25']) + floatval($_REQUEST['rectx25']) + $rectae1)) / 6), 2);
  $rectz26 = round(((floatval($_REQUEST['recty26']) * (floatval($_REQUEST['rectw26']) + floatval($_REQUEST['rectx26']) + $rectae1)) / 6), 2);
  $rectz27 = round(((floatval($_REQUEST['recty27']) * (floatval($_REQUEST['rectw27']) + floatval($_REQUEST['rectx27']) + $rectae1)) / 6), 2);
  $rectz28 = round(((floatval($_REQUEST['recty28']) * (floatval($_REQUEST['rectw28']) + floatval($_REQUEST['rectx28']) + $rectae1)) / 6), 2);
  $rectz29 = round(((floatval($_REQUEST['recty29']) * (floatval($_REQUEST['rectw29']) + floatval($_REQUEST['rectx29']) + $rectae1)) / 6), 2);
  $rectz30 = round(((floatval($_REQUEST['recty30']) * (floatval($_REQUEST['rectw30']) + floatval($_REQUEST['rectx30']) + $rectae1)) / 6), 2);
  $rectz31 = round(((floatval($_REQUEST['recty31']) * (floatval($_REQUEST['rectw31']) + floatval($_REQUEST['rectx31']) + $rectae1)) / 6), 2);
  $rectz32 = round(((floatval($_REQUEST['recty32']) * (floatval($_REQUEST['rectw32']) + floatval($_REQUEST['rectx32']) + $rectae1)) / 6), 2);
  $rectz33 = round(((floatval($_REQUEST['recty33']) * (floatval($_REQUEST['rectw33']) + floatval($_REQUEST['rectx33']) + $rectae1)) / 6), 2);
  $rectz34 = round(((floatval($_REQUEST['recty34']) * (floatval($_REQUEST['rectw34']) + floatval($_REQUEST['rectx34']) + $rectae1)) / 6), 2);
  $rectz35 = round(((floatval($_REQUEST['recty35']) * (floatval($_REQUEST['rectw35']) + floatval($_REQUEST['rectx35']) + $rectae1)) / 6), 2);
  $rectz36 = round(((floatval($_REQUEST['recty36']) * (floatval($_REQUEST['rectw36']) + floatval($_REQUEST['rectx36']) + $rectae1)) / 6), 2);
  $rectz37 = round(((floatval($_REQUEST['recty37']) * (floatval($_REQUEST['rectw37']) + floatval($_REQUEST['rectx37']) + $rectae1)) / 6), 2);
  $rectz38 = round(((floatval($_REQUEST['recty38']) * (floatval($_REQUEST['rectw38']) + floatval($_REQUEST['rectx38']) + $rectae1)) / 6), 2);
  $rectz39 = round(((floatval($_REQUEST['recty39']) * (floatval($_REQUEST['rectw39']) + floatval($_REQUEST['rectx39']) + $rectae1)) / 6), 2);
  $rectz40 = round(((floatval($_REQUEST['recty40']) * (floatval($_REQUEST['rectw40']) + floatval($_REQUEST['rectx40']) + $rectae1)) / 6), 2);
  $rectz41 = round(((floatval($_REQUEST['recty41']) * (floatval($_REQUEST['rectw41']) + floatval($_REQUEST['rectx41']) + $rectae1)) / 6), 2);
  $rectz42 = round(((floatval($_REQUEST['recty42']) * (floatval($_REQUEST['rectw42']) + floatval($_REQUEST['rectx42']) + $rectae1)) / 6), 2);
  $rectz43 = round(((floatval($_REQUEST['recty43']) * (floatval($_REQUEST['rectw43']) + floatval($_REQUEST['rectx43']) + $rectae1)) / 6), 2);

  // Column 27
  $rectaa11 = round((((0 < floatval($_REQUEST['rectx11']) && floatval($_REQUEST['rectx11']) <= 13) && (0 < floatval($_REQUEST['rectw11']) && floatval($_REQUEST['rectw11']) <= 13)) ? $rectz11 : 0), 2);
  $rectaa12 = round((((0 < floatval($_REQUEST['rectx12']) && floatval($_REQUEST['rectx12']) <= 13) && (0 < floatval($_REQUEST['rectw12']) && floatval($_REQUEST['rectw12']) <= 13)) ? $rectz12 : 0), 2);
  $rectaa13 = round((((0 < floatval($_REQUEST['rectx13']) && floatval($_REQUEST['rectx13']) <= 13) && (0 < floatval($_REQUEST['rectw13']) && floatval($_REQUEST['rectw13']) <= 13)) ? $rectz13 : 0), 2);
  $rectaa14 = round((((0 < floatval($_REQUEST['rectx14']) && floatval($_REQUEST['rectx14']) <= 13) && (0 < floatval($_REQUEST['rectw14']) && floatval($_REQUEST['rectw14']) <= 13)) ? $rectz14 : 0), 2);
  $rectaa15 = round((((0 < floatval($_REQUEST['rectx15']) && floatval($_REQUEST['rectx15']) <= 13) && (0 < floatval($_REQUEST['rectw15']) && floatval($_REQUEST['rectw15']) <= 13)) ? $rectz15 : 0), 2);
  $rectaa16 = round((((0 < floatval($_REQUEST['rectx16']) && floatval($_REQUEST['rectx16']) <= 13) && (0 < floatval($_REQUEST['rectw16']) && floatval($_REQUEST['rectw16']) <= 13)) ? $rectz16 : 0), 2);
  $rectaa17 = round((((0 < floatval($_REQUEST['rectx17']) && floatval($_REQUEST['rectx17']) <= 13) && (0 < floatval($_REQUEST['rectw17']) && floatval($_REQUEST['rectw17']) <= 13)) ? $rectz17 : 0), 2);
  $rectaa18 = round((((0 < floatval($_REQUEST['rectx18']) && floatval($_REQUEST['rectx18']) <= 13) && (0 < floatval($_REQUEST['rectw18']) && floatval($_REQUEST['rectw18']) <= 13)) ? $rectz18 : 0), 2);
  $rectaa19 = round((((0 < floatval($_REQUEST['rectx19']) && floatval($_REQUEST['rectx19']) <= 13) && (0 < floatval($_REQUEST['rectw19']) && floatval($_REQUEST['rectw19']) <= 13)) ? $rectz19 : 0), 2);
  $rectaa20 = round((((0 < floatval($_REQUEST['rectx20']) && floatval($_REQUEST['rectx20']) <= 13) && (0 < floatval($_REQUEST['rectw20']) && floatval($_REQUEST['rectw20']) <= 13)) ? $rectz20 : 0), 2);
  $rectaa21 = round((((0 < floatval($_REQUEST['rectx21']) && floatval($_REQUEST['rectx21']) <= 13) && (0 < floatval($_REQUEST['rectw21']) && floatval($_REQUEST['rectw21']) <= 13)) ? $rectz21 : 0), 2);
  $rectaa22 = round((((0 < floatval($_REQUEST['rectx22']) && floatval($_REQUEST['rectx22']) <= 13) && (0 < floatval($_REQUEST['rectw22']) && floatval($_REQUEST['rectw22']) <= 13)) ? $rectz22 : 0), 2);
  $rectaa23 = round((((0 < floatval($_REQUEST['rectx23']) && floatval($_REQUEST['rectx23']) <= 13) && (0 < floatval($_REQUEST['rectw23']) && floatval($_REQUEST['rectw23']) <= 13)) ? $rectz23 : 0), 2);
  $rectaa24 = round((((0 < floatval($_REQUEST['rectx24']) && floatval($_REQUEST['rectx24']) <= 13) && (0 < floatval($_REQUEST['rectw24']) && floatval($_REQUEST['rectw24']) <= 13)) ? $rectz24 : 0), 2);
  $rectaa25 = round((((0 < floatval($_REQUEST['rectx25']) && floatval($_REQUEST['rectx25']) <= 13) && (0 < floatval($_REQUEST['rectw25']) && floatval($_REQUEST['rectw25']) <= 13)) ? $rectz25 : 0), 2);
  $rectaa26 = round((((0 < floatval($_REQUEST['rectx26']) && floatval($_REQUEST['rectx26']) <= 13) && (0 < floatval($_REQUEST['rectw26']) && floatval($_REQUEST['rectw26']) <= 13)) ? $rectz26 : 0), 2);
  $rectaa27 = round((((0 < floatval($_REQUEST['rectx27']) && floatval($_REQUEST['rectx27']) <= 13) && (0 < floatval($_REQUEST['rectw27']) && floatval($_REQUEST['rectw27']) <= 13)) ? $rectz27 : 0), 2);
  $rectaa28 = round((((0 < floatval($_REQUEST['rectx28']) && floatval($_REQUEST['rectx28']) <= 13) && (0 < floatval($_REQUEST['rectw28']) && floatval($_REQUEST['rectw28']) <= 13)) ? $rectz28 : 0), 2);
  $rectaa29 = round((((0 < floatval($_REQUEST['rectx29']) && floatval($_REQUEST['rectx29']) <= 13) && (0 < floatval($_REQUEST['rectw29']) && floatval($_REQUEST['rectw29']) <= 13)) ? $rectz29 : 0), 2);
  $rectaa30 = round((((0 < floatval($_REQUEST['rectx30']) && floatval($_REQUEST['rectx30']) <= 13) && (0 < floatval($_REQUEST['rectw30']) && floatval($_REQUEST['rectw30']) <= 13)) ? $rectz30 : 0), 2);
  $rectaa31 = round((((0 < floatval($_REQUEST['rectx31']) && floatval($_REQUEST['rectx31']) <= 13) && (0 < floatval($_REQUEST['rectw31']) && floatval($_REQUEST['rectw31']) <= 13)) ? $rectz31 : 0), 2);
  $rectaa32 = round((((0 < floatval($_REQUEST['rectx32']) && floatval($_REQUEST['rectx32']) <= 13) && (0 < floatval($_REQUEST['rectw32']) && floatval($_REQUEST['rectw32']) <= 13)) ? $rectz32 : 0), 2);
  $rectaa33 = round((((0 < floatval($_REQUEST['rectx33']) && floatval($_REQUEST['rectx33']) <= 13) && (0 < floatval($_REQUEST['rectw33']) && floatval($_REQUEST['rectw33']) <= 13)) ? $rectz33 : 0), 2);
  $rectaa34 = round((((0 < floatval($_REQUEST['rectx34']) && floatval($_REQUEST['rectx34']) <= 13) && (0 < floatval($_REQUEST['rectw34']) && floatval($_REQUEST['rectw34']) <= 13)) ? $rectz34 : 0), 2);
  $rectaa35 = round((((0 < floatval($_REQUEST['rectx35']) && floatval($_REQUEST['rectx35']) <= 13) && (0 < floatval($_REQUEST['rectw35']) && floatval($_REQUEST['rectw35']) <= 13)) ? $rectz35 : 0), 2);
  $rectaa36 = round((((0 < floatval($_REQUEST['rectx36']) && floatval($_REQUEST['rectx36']) <= 13) && (0 < floatval($_REQUEST['rectw36']) && floatval($_REQUEST['rectw36']) <= 13)) ? $rectz36 : 0), 2);
  $rectaa37 = round((((0 < floatval($_REQUEST['rectx37']) && floatval($_REQUEST['rectx37']) <= 13) && (0 < floatval($_REQUEST['rectw37']) && floatval($_REQUEST['rectw37']) <= 13)) ? $rectz37 : 0), 2);
  $rectaa38 = round((((0 < floatval($_REQUEST['rectx38']) && floatval($_REQUEST['rectx38']) <= 13) && (0 < floatval($_REQUEST['rectw38']) && floatval($_REQUEST['rectw38']) <= 13)) ? $rectz38 : 0), 2);
  $rectaa39 = round((((0 < floatval($_REQUEST['rectx39']) && floatval($_REQUEST['rectx39']) <= 13) && (0 < floatval($_REQUEST['rectw39']) && floatval($_REQUEST['rectw39']) <= 13)) ? $rectz39 : 0), 2);
  $rectaa40 = round((((0 < floatval($_REQUEST['rectx40']) && floatval($_REQUEST['rectx40']) <= 13) && (0 < floatval($_REQUEST['rectw40']) && floatval($_REQUEST['rectw40']) <= 13)) ? $rectz40 : 0), 2);
  $rectaa41 = round((((0 < floatval($_REQUEST['rectx41']) && floatval($_REQUEST['rectx41']) <= 13) && (0 < floatval($_REQUEST['rectw41']) && floatval($_REQUEST['rectw41']) <= 13)) ? $rectz41 : 0), 2);
  $rectaa42 = round((((0 < floatval($_REQUEST['rectx42']) && floatval($_REQUEST['rectx42']) <= 13) && (0 < floatval($_REQUEST['rectw42']) && floatval($_REQUEST['rectw42']) <= 13)) ? $rectz42 : 0), 2);
  $rectaa43 = round((((0 < floatval($_REQUEST['rectx43']) && floatval($_REQUEST['rectx43']) <= 13) && (0 < floatval($_REQUEST['rectw43']) && floatval($_REQUEST['rectw43']) <= 13)) ? $rectz43 : 0), 2);

  // Column 28
  $rectab11 = round(((((13 < floatval($_REQUEST['rectx11']) && floatval($_REQUEST['rectx11']) <= 30) && floatval($_REQUEST['rectw11']) <= 30) || ((13 < floatval($_REQUEST['rectw11']) && floatval($_REQUEST['rectw11']) <= 30) && floatval($_REQUEST['rectx11']) <= 30)) ? $rectz11 : 0), 2);
  $rectab12 = round(((((13 < floatval($_REQUEST['rectx12']) && floatval($_REQUEST['rectx12']) <= 30) && floatval($_REQUEST['rectw12']) <= 30) || ((13 < floatval($_REQUEST['rectw12']) && floatval($_REQUEST['rectw12']) <= 30) && floatval($_REQUEST['rectx12']) <= 30)) ? $rectz12 : 0), 2);
  $rectab13 = round(((((13 < floatval($_REQUEST['rectx13']) && floatval($_REQUEST['rectx13']) <= 30) && floatval($_REQUEST['rectw13']) <= 30) || ((13 < floatval($_REQUEST['rectw13']) && floatval($_REQUEST['rectw13']) <= 30) && floatval($_REQUEST['rectx13']) <= 30)) ? $rectz13 : 0), 2);
  $rectab14 = round(((((13 < floatval($_REQUEST['rectx14']) && floatval($_REQUEST['rectx14']) <= 30) && floatval($_REQUEST['rectw14']) <= 30) || ((13 < floatval($_REQUEST['rectw14']) && floatval($_REQUEST['rectw14']) <= 30) && floatval($_REQUEST['rectx14']) <= 30)) ? $rectz14 : 0), 2);
  $rectab15 = round(((((13 < floatval($_REQUEST['rectx15']) && floatval($_REQUEST['rectx15']) <= 30) && floatval($_REQUEST['rectw15']) <= 30) || ((13 < floatval($_REQUEST['rectw15']) && floatval($_REQUEST['rectw15']) <= 30) && floatval($_REQUEST['rectx15']) <= 30)) ? $rectz15 : 0), 2);
  $rectab16 = round(((((13 < floatval($_REQUEST['rectx16']) && floatval($_REQUEST['rectx16']) <= 30) && floatval($_REQUEST['rectw16']) <= 30) || ((13 < floatval($_REQUEST['rectw16']) && floatval($_REQUEST['rectw16']) <= 30) && floatval($_REQUEST['rectx16']) <= 30)) ? $rectz16 : 0), 2);
  $rectab17 = round(((((13 < floatval($_REQUEST['rectx17']) && floatval($_REQUEST['rectx17']) <= 30) && floatval($_REQUEST['rectw17']) <= 30) || ((13 < floatval($_REQUEST['rectw17']) && floatval($_REQUEST['rectw17']) <= 30) && floatval($_REQUEST['rectx17']) <= 30)) ? $rectz17 : 0), 2);
  $rectab18 = round(((((13 < floatval($_REQUEST['rectx18']) && floatval($_REQUEST['rectx18']) <= 30) && floatval($_REQUEST['rectw18']) <= 30) || ((13 < floatval($_REQUEST['rectw18']) && floatval($_REQUEST['rectw18']) <= 30) && floatval($_REQUEST['rectx18']) <= 30)) ? $rectz18 : 0), 2);
  $rectab19 = round(((((13 < floatval($_REQUEST['rectx19']) && floatval($_REQUEST['rectx19']) <= 30) && floatval($_REQUEST['rectw19']) <= 30) || ((13 < floatval($_REQUEST['rectw19']) && floatval($_REQUEST['rectw19']) <= 30) && floatval($_REQUEST['rectx19']) <= 30)) ? $rectz19 : 0), 2);
  $rectab20 = round(((((13 < floatval($_REQUEST['rectx20']) && floatval($_REQUEST['rectx20']) <= 30) && floatval($_REQUEST['rectw20']) <= 30) || ((13 < floatval($_REQUEST['rectw20']) && floatval($_REQUEST['rectw20']) <= 30) && floatval($_REQUEST['rectx20']) <= 30)) ? $rectz20 : 0), 2);
  $rectab21 = round(((((13 < floatval($_REQUEST['rectx21']) && floatval($_REQUEST['rectx21']) <= 30) && floatval($_REQUEST['rectw21']) <= 30) || ((13 < floatval($_REQUEST['rectw21']) && floatval($_REQUEST['rectw21']) <= 30) && floatval($_REQUEST['rectx21']) <= 30)) ? $rectz21 : 0), 2);
  $rectab22 = round(((((13 < floatval($_REQUEST['rectx22']) && floatval($_REQUEST['rectx22']) <= 30) && floatval($_REQUEST['rectw22']) <= 30) || ((13 < floatval($_REQUEST['rectw22']) && floatval($_REQUEST['rectw22']) <= 30) && floatval($_REQUEST['rectx22']) <= 30)) ? $rectz22 : 0), 2);
  $rectab23 = round(((((13 < floatval($_REQUEST['rectx23']) && floatval($_REQUEST['rectx23']) <= 30) && floatval($_REQUEST['rectw23']) <= 30) || ((13 < floatval($_REQUEST['rectw23']) && floatval($_REQUEST['rectw23']) <= 30) && floatval($_REQUEST['rectx23']) <= 30)) ? $rectz23 : 0), 2);
  $rectab24 = round(((((13 < floatval($_REQUEST['rectx24']) && floatval($_REQUEST['rectx24']) <= 30) && floatval($_REQUEST['rectw24']) <= 30) || ((13 < floatval($_REQUEST['rectw24']) && floatval($_REQUEST['rectw24']) <= 30) && floatval($_REQUEST['rectx24']) <= 30)) ? $rectz24 : 0), 2);
  $rectab25 = round(((((13 < floatval($_REQUEST['rectx25']) && floatval($_REQUEST['rectx25']) <= 30) && floatval($_REQUEST['rectw25']) <= 30) || ((13 < floatval($_REQUEST['rectw25']) && floatval($_REQUEST['rectw25']) <= 30) && floatval($_REQUEST['rectx25']) <= 30)) ? $rectz25 : 0), 2);
  $rectab26 = round(((((13 < floatval($_REQUEST['rectx26']) && floatval($_REQUEST['rectx26']) <= 30) && floatval($_REQUEST['rectw26']) <= 30) || ((13 < floatval($_REQUEST['rectw26']) && floatval($_REQUEST['rectw26']) <= 30) && floatval($_REQUEST['rectx26']) <= 30)) ? $rectz26 : 0), 2);
  $rectab27 = round(((((13 < floatval($_REQUEST['rectx27']) && floatval($_REQUEST['rectx27']) <= 30) && floatval($_REQUEST['rectw27']) <= 30) || ((13 < floatval($_REQUEST['rectw27']) && floatval($_REQUEST['rectw27']) <= 30) && floatval($_REQUEST['rectx27']) <= 30)) ? $rectz27 : 0), 2);
  $rectab28 = round(((((13 < floatval($_REQUEST['rectx28']) && floatval($_REQUEST['rectx28']) <= 30) && floatval($_REQUEST['rectw28']) <= 30) || ((13 < floatval($_REQUEST['rectw28']) && floatval($_REQUEST['rectw28']) <= 30) && floatval($_REQUEST['rectx28']) <= 30)) ? $rectz28 : 0), 2);
  $rectab29 = round(((((13 < floatval($_REQUEST['rectx29']) && floatval($_REQUEST['rectx29']) <= 30) && floatval($_REQUEST['rectw29']) <= 30) || ((13 < floatval($_REQUEST['rectw29']) && floatval($_REQUEST['rectw29']) <= 30) && floatval($_REQUEST['rectx29']) <= 30)) ? $rectz29 : 0), 2);
  $rectab30 = round(((((13 < floatval($_REQUEST['rectx30']) && floatval($_REQUEST['rectx30']) <= 30) && floatval($_REQUEST['rectw30']) <= 30) || ((13 < floatval($_REQUEST['rectw30']) && floatval($_REQUEST['rectw30']) <= 30) && floatval($_REQUEST['rectx30']) <= 30)) ? $rectz30 : 0), 2);
  $rectab31 = round(((((13 < floatval($_REQUEST['rectx31']) && floatval($_REQUEST['rectx31']) <= 30) && floatval($_REQUEST['rectw31']) <= 30) || ((13 < floatval($_REQUEST['rectw31']) && floatval($_REQUEST['rectw31']) <= 30) && floatval($_REQUEST['rectx31']) <= 30)) ? $rectz31 : 0), 2);
  $rectab32 = round(((((13 < floatval($_REQUEST['rectx32']) && floatval($_REQUEST['rectx32']) <= 30) && floatval($_REQUEST['rectw32']) <= 30) || ((13 < floatval($_REQUEST['rectw32']) && floatval($_REQUEST['rectw32']) <= 30) && floatval($_REQUEST['rectx32']) <= 30)) ? $rectz32 : 0), 2);
  $rectab33 = round(((((13 < floatval($_REQUEST['rectx33']) && floatval($_REQUEST['rectx33']) <= 30) && floatval($_REQUEST['rectw33']) <= 30) || ((13 < floatval($_REQUEST['rectw33']) && floatval($_REQUEST['rectw33']) <= 30) && floatval($_REQUEST['rectx33']) <= 30)) ? $rectz33 : 0), 2);
  $rectab34 = round(((((13 < floatval($_REQUEST['rectx34']) && floatval($_REQUEST['rectx34']) <= 30) && floatval($_REQUEST['rectw34']) <= 30) || ((13 < floatval($_REQUEST['rectw34']) && floatval($_REQUEST['rectw34']) <= 30) && floatval($_REQUEST['rectx34']) <= 30)) ? $rectz34 : 0), 2);
  $rectab35 = round(((((13 < floatval($_REQUEST['rectx35']) && floatval($_REQUEST['rectx35']) <= 30) && floatval($_REQUEST['rectw35']) <= 30) || ((13 < floatval($_REQUEST['rectw35']) && floatval($_REQUEST['rectw35']) <= 30) && floatval($_REQUEST['rectx35']) <= 30)) ? $rectz35 : 0), 2);
  $rectab36 = round(((((13 < floatval($_REQUEST['rectx36']) && floatval($_REQUEST['rectx36']) <= 30) && floatval($_REQUEST['rectw36']) <= 30) || ((13 < floatval($_REQUEST['rectw36']) && floatval($_REQUEST['rectw36']) <= 30) && floatval($_REQUEST['rectx36']) <= 30)) ? $rectz36 : 0), 2);
  $rectab37 = round(((((13 < floatval($_REQUEST['rectx37']) && floatval($_REQUEST['rectx37']) <= 30) && floatval($_REQUEST['rectw37']) <= 30) || ((13 < floatval($_REQUEST['rectw37']) && floatval($_REQUEST['rectw37']) <= 30) && floatval($_REQUEST['rectx37']) <= 30)) ? $rectz37 : 0), 2);
  $rectab38 = round(((((13 < floatval($_REQUEST['rectx38']) && floatval($_REQUEST['rectx38']) <= 30) && floatval($_REQUEST['rectw38']) <= 30) || ((13 < floatval($_REQUEST['rectw38']) && floatval($_REQUEST['rectw38']) <= 30) && floatval($_REQUEST['rectx38']) <= 30)) ? $rectz38 : 0), 2);
  $rectab39 = round(((((13 < floatval($_REQUEST['rectx39']) && floatval($_REQUEST['rectx39']) <= 30) && floatval($_REQUEST['rectw39']) <= 30) || ((13 < floatval($_REQUEST['rectw39']) && floatval($_REQUEST['rectw39']) <= 30) && floatval($_REQUEST['rectx39']) <= 30)) ? $rectz39 : 0), 2);
  $rectab40 = round(((((13 < floatval($_REQUEST['rectx40']) && floatval($_REQUEST['rectx40']) <= 30) && floatval($_REQUEST['rectw40']) <= 30) || ((13 < floatval($_REQUEST['rectw40']) && floatval($_REQUEST['rectw40']) <= 30) && floatval($_REQUEST['rectx40']) <= 30)) ? $rectz40 : 0), 2);
  $rectab41 = round(((((13 < floatval($_REQUEST['rectx41']) && floatval($_REQUEST['rectx41']) <= 30) && floatval($_REQUEST['rectw41']) <= 30) || ((13 < floatval($_REQUEST['rectw41']) && floatval($_REQUEST['rectw41']) <= 30) && floatval($_REQUEST['rectx41']) <= 30)) ? $rectz41 : 0), 2);
  $rectab42 = round(((((13 < floatval($_REQUEST['rectx42']) && floatval($_REQUEST['rectx42']) <= 30) && floatval($_REQUEST['rectw42']) <= 30) || ((13 < floatval($_REQUEST['rectw42']) && floatval($_REQUEST['rectw42']) <= 30) && floatval($_REQUEST['rectx42']) <= 30)) ? $rectz42 : 0), 2);
  $rectab43 = round(((((13 < floatval($_REQUEST['rectx43']) && floatval($_REQUEST['rectx43']) <= 30) && floatval($_REQUEST['rectw43']) <= 30) || ((13 < floatval($_REQUEST['rectw43']) && floatval($_REQUEST['rectw43']) <= 30) && floatval($_REQUEST['rectx43']) <= 30)) ? $rectz43 : 0), 2);

  // Column 29
  $rectac11 = round(((((30 < floatval($_REQUEST['rectx11']) && floatval($_REQUEST['rectx11']) <= 60) && floatval($_REQUEST['rectw11']) <= 60) || ((30 < floatval($_REQUEST['rectw11']) && floatval($_REQUEST['rectw11']) <= 60) && floatval($_REQUEST['rectx11']) <= 60)) ? $rectz11 : 0), 2);
  $rectac12 = round(((((30 < floatval($_REQUEST['rectx12']) && floatval($_REQUEST['rectx12']) <= 60) && floatval($_REQUEST['rectw12']) <= 60) || ((30 < floatval($_REQUEST['rectw12']) && floatval($_REQUEST['rectw12']) <= 60) && floatval($_REQUEST['rectx12']) <= 60)) ? $rectz12 : 0), 2);
  $rectac13 = round(((((30 < floatval($_REQUEST['rectx13']) && floatval($_REQUEST['rectx13']) <= 60) && floatval($_REQUEST['rectw13']) <= 60) || ((30 < floatval($_REQUEST['rectw13']) && floatval($_REQUEST['rectw13']) <= 60) && floatval($_REQUEST['rectx13']) <= 60)) ? $rectz13 : 0), 2);
  $rectac14 = round(((((30 < floatval($_REQUEST['rectx14']) && floatval($_REQUEST['rectx14']) <= 60) && floatval($_REQUEST['rectw14']) <= 60) || ((30 < floatval($_REQUEST['rectw14']) && floatval($_REQUEST['rectw14']) <= 60) && floatval($_REQUEST['rectx14']) <= 60)) ? $rectz14 : 0), 2);
  $rectac15 = round(((((30 < floatval($_REQUEST['rectx15']) && floatval($_REQUEST['rectx15']) <= 60) && floatval($_REQUEST['rectw15']) <= 60) || ((30 < floatval($_REQUEST['rectw15']) && floatval($_REQUEST['rectw15']) <= 60) && floatval($_REQUEST['rectx15']) <= 60)) ? $rectz15 : 0), 2);
  $rectac16 = round(((((30 < floatval($_REQUEST['rectx16']) && floatval($_REQUEST['rectx16']) <= 60) && floatval($_REQUEST['rectw16']) <= 60) || ((30 < floatval($_REQUEST['rectw16']) && floatval($_REQUEST['rectw16']) <= 60) && floatval($_REQUEST['rectx16']) <= 60)) ? $rectz16 : 0), 2);
  $rectac17 = round(((((30 < floatval($_REQUEST['rectx17']) && floatval($_REQUEST['rectx17']) <= 60) && floatval($_REQUEST['rectw17']) <= 60) || ((30 < floatval($_REQUEST['rectw17']) && floatval($_REQUEST['rectw17']) <= 60) && floatval($_REQUEST['rectx17']) <= 60)) ? $rectz17 : 0), 2);
  $rectac18 = round(((((30 < floatval($_REQUEST['rectx18']) && floatval($_REQUEST['rectx18']) <= 60) && floatval($_REQUEST['rectw18']) <= 60) || ((30 < floatval($_REQUEST['rectw18']) && floatval($_REQUEST['rectw18']) <= 60) && floatval($_REQUEST['rectx18']) <= 60)) ? $rectz18 : 0), 2);
  $rectac19 = round(((((30 < floatval($_REQUEST['rectx19']) && floatval($_REQUEST['rectx19']) <= 60) && floatval($_REQUEST['rectw19']) <= 60) || ((30 < floatval($_REQUEST['rectw19']) && floatval($_REQUEST['rectw19']) <= 60) && floatval($_REQUEST['rectx19']) <= 60)) ? $rectz19 : 0), 2);
  $rectac20 = round(((((30 < floatval($_REQUEST['rectx20']) && floatval($_REQUEST['rectx20']) <= 60) && floatval($_REQUEST['rectw20']) <= 60) || ((30 < floatval($_REQUEST['rectw20']) && floatval($_REQUEST['rectw20']) <= 60) && floatval($_REQUEST['rectx20']) <= 60)) ? $rectz20 : 0), 2);
  $rectac21 = round(((((30 < floatval($_REQUEST['rectx21']) && floatval($_REQUEST['rectx21']) <= 60) && floatval($_REQUEST['rectw21']) <= 60) || ((30 < floatval($_REQUEST['rectw21']) && floatval($_REQUEST['rectw21']) <= 60) && floatval($_REQUEST['rectx21']) <= 60)) ? $rectz21 : 0), 2);
  $rectac22 = round(((((30 < floatval($_REQUEST['rectx22']) && floatval($_REQUEST['rectx22']) <= 60) && floatval($_REQUEST['rectw22']) <= 60) || ((30 < floatval($_REQUEST['rectw22']) && floatval($_REQUEST['rectw22']) <= 60) && floatval($_REQUEST['rectx22']) <= 60)) ? $rectz22 : 0), 2);
  $rectac23 = round(((((30 < floatval($_REQUEST['rectx23']) && floatval($_REQUEST['rectx23']) <= 60) && floatval($_REQUEST['rectw23']) <= 60) || ((30 < floatval($_REQUEST['rectw23']) && floatval($_REQUEST['rectw23']) <= 60) && floatval($_REQUEST['rectx23']) <= 60)) ? $rectz23 : 0), 2);
  $rectac24 = round(((((30 < floatval($_REQUEST['rectx24']) && floatval($_REQUEST['rectx24']) <= 60) && floatval($_REQUEST['rectw24']) <= 60) || ((30 < floatval($_REQUEST['rectw24']) && floatval($_REQUEST['rectw24']) <= 60) && floatval($_REQUEST['rectx24']) <= 60)) ? $rectz24 : 0), 2);
  $rectac25 = round(((((30 < floatval($_REQUEST['rectx25']) && floatval($_REQUEST['rectx25']) <= 60) && floatval($_REQUEST['rectw25']) <= 60) || ((30 < floatval($_REQUEST['rectw25']) && floatval($_REQUEST['rectw25']) <= 60) && floatval($_REQUEST['rectx25']) <= 60)) ? $rectz25 : 0), 2);
  $rectac26 = round(((((30 < floatval($_REQUEST['rectx26']) && floatval($_REQUEST['rectx26']) <= 60) && floatval($_REQUEST['rectw26']) <= 60) || ((30 < floatval($_REQUEST['rectw26']) && floatval($_REQUEST['rectw26']) <= 60) && floatval($_REQUEST['rectx26']) <= 60)) ? $rectz26 : 0), 2);
  $rectac27 = round(((((30 < floatval($_REQUEST['rectx27']) && floatval($_REQUEST['rectx27']) <= 60) && floatval($_REQUEST['rectw27']) <= 60) || ((30 < floatval($_REQUEST['rectw27']) && floatval($_REQUEST['rectw27']) <= 60) && floatval($_REQUEST['rectx27']) <= 60)) ? $rectz27 : 0), 2);
  $rectac28 = round(((((30 < floatval($_REQUEST['rectx28']) && floatval($_REQUEST['rectx28']) <= 60) && floatval($_REQUEST['rectw28']) <= 60) || ((30 < floatval($_REQUEST['rectw28']) && floatval($_REQUEST['rectw28']) <= 60) && floatval($_REQUEST['rectx28']) <= 60)) ? $rectz28 : 0), 2);
  $rectac29 = round(((((30 < floatval($_REQUEST['rectx29']) && floatval($_REQUEST['rectx29']) <= 60) && floatval($_REQUEST['rectw29']) <= 60) || ((30 < floatval($_REQUEST['rectw29']) && floatval($_REQUEST['rectw29']) <= 60) && floatval($_REQUEST['rectx29']) <= 60)) ? $rectz29 : 0), 2);
  $rectac30 = round(((((30 < floatval($_REQUEST['rectx30']) && floatval($_REQUEST['rectx30']) <= 60) && floatval($_REQUEST['rectw30']) <= 60) || ((30 < floatval($_REQUEST['rectw30']) && floatval($_REQUEST['rectw30']) <= 60) && floatval($_REQUEST['rectx30']) <= 60)) ? $rectz30 : 0), 2);
  $rectac31 = round(((((30 < floatval($_REQUEST['rectx31']) && floatval($_REQUEST['rectx31']) <= 60) && floatval($_REQUEST['rectw31']) <= 60) || ((30 < floatval($_REQUEST['rectw31']) && floatval($_REQUEST['rectw31']) <= 60) && floatval($_REQUEST['rectx31']) <= 60)) ? $rectz31 : 0), 2);
  $rectac32 = round(((((30 < floatval($_REQUEST['rectx32']) && floatval($_REQUEST['rectx32']) <= 60) && floatval($_REQUEST['rectw32']) <= 60) || ((30 < floatval($_REQUEST['rectw32']) && floatval($_REQUEST['rectw32']) <= 60) && floatval($_REQUEST['rectx32']) <= 60)) ? $rectz32 : 0), 2);
  $rectac33 = round(((((30 < floatval($_REQUEST['rectx33']) && floatval($_REQUEST['rectx33']) <= 60) && floatval($_REQUEST['rectw33']) <= 60) || ((30 < floatval($_REQUEST['rectw33']) && floatval($_REQUEST['rectw33']) <= 60) && floatval($_REQUEST['rectx33']) <= 60)) ? $rectz33 : 0), 2);
  $rectac34 = round(((((30 < floatval($_REQUEST['rectx34']) && floatval($_REQUEST['rectx34']) <= 60) && floatval($_REQUEST['rectw34']) <= 60) || ((30 < floatval($_REQUEST['rectw34']) && floatval($_REQUEST['rectw34']) <= 60) && floatval($_REQUEST['rectx34']) <= 60)) ? $rectz34 : 0), 2);
  $rectac35 = round(((((30 < floatval($_REQUEST['rectx35']) && floatval($_REQUEST['rectx35']) <= 60) && floatval($_REQUEST['rectw35']) <= 60) || ((30 < floatval($_REQUEST['rectw35']) && floatval($_REQUEST['rectw35']) <= 60) && floatval($_REQUEST['rectx35']) <= 60)) ? $rectz35 : 0), 2);
  $rectac36 = round(((((30 < floatval($_REQUEST['rectx36']) && floatval($_REQUEST['rectx36']) <= 60) && floatval($_REQUEST['rectw36']) <= 60) || ((30 < floatval($_REQUEST['rectw36']) && floatval($_REQUEST['rectw36']) <= 60) && floatval($_REQUEST['rectx36']) <= 60)) ? $rectz36 : 0), 2);
  $rectac37 = round(((((30 < floatval($_REQUEST['rectx37']) && floatval($_REQUEST['rectx37']) <= 60) && floatval($_REQUEST['rectw37']) <= 60) || ((30 < floatval($_REQUEST['rectw37']) && floatval($_REQUEST['rectw37']) <= 60) && floatval($_REQUEST['rectx37']) <= 60)) ? $rectz37 : 0), 2);
  $rectac38 = round(((((30 < floatval($_REQUEST['rectx38']) && floatval($_REQUEST['rectx38']) <= 60) && floatval($_REQUEST['rectw38']) <= 60) || ((30 < floatval($_REQUEST['rectw38']) && floatval($_REQUEST['rectw38']) <= 60) && floatval($_REQUEST['rectx38']) <= 60)) ? $rectz38 : 0), 2);
  $rectac39 = round(((((30 < floatval($_REQUEST['rectx39']) && floatval($_REQUEST['rectx39']) <= 60) && floatval($_REQUEST['rectw39']) <= 60) || ((30 < floatval($_REQUEST['rectw39']) && floatval($_REQUEST['rectw39']) <= 60) && floatval($_REQUEST['rectx39']) <= 60)) ? $rectz39 : 0), 2);
  $rectac40 = round(((((30 < floatval($_REQUEST['rectx40']) && floatval($_REQUEST['rectx40']) <= 60) && floatval($_REQUEST['rectw40']) <= 60) || ((30 < floatval($_REQUEST['rectw40']) && floatval($_REQUEST['rectw40']) <= 60) && floatval($_REQUEST['rectx40']) <= 60)) ? $rectz40 : 0), 2);
  $rectac41 = round(((((30 < floatval($_REQUEST['rectx41']) && floatval($_REQUEST['rectx41']) <= 60) && floatval($_REQUEST['rectw41']) <= 60) || ((30 < floatval($_REQUEST['rectw41']) && floatval($_REQUEST['rectw41']) <= 60) && floatval($_REQUEST['rectx41']) <= 60)) ? $rectz41 : 0), 2);
  $rectac42 = round(((((30 < floatval($_REQUEST['rectx42']) && floatval($_REQUEST['rectx42']) <= 60) && floatval($_REQUEST['rectw42']) <= 60) || ((30 < floatval($_REQUEST['rectw42']) && floatval($_REQUEST['rectw42']) <= 60) && floatval($_REQUEST['rectx42']) <= 60)) ? $rectz42 : 0), 2);
  $rectac43 = round(((((30 < floatval($_REQUEST['rectx43']) && floatval($_REQUEST['rectx43']) <= 60) && floatval($_REQUEST['rectw43']) <= 60) || ((30 < floatval($_REQUEST['rectw43']) && floatval($_REQUEST['rectw43']) <= 60) && floatval($_REQUEST['rectx43']) <= 60)) ? $rectz43 : 0), 2);


  // Column 30
  $rectad11 = round(((((60 < floatval($_REQUEST['rectx11']) && floatval($_REQUEST['rectx11']) <= 90) && floatval($_REQUEST['rectw11']) <= 90) || ((60 < floatval($_REQUEST['rectw11']) && floatval($_REQUEST['rectw11']) <= 90) && floatval($_REQUEST['rectx11']) <= 90)) ? $rectz11 : 0), 2);
  $rectad12 = round(((((60 < floatval($_REQUEST['rectx12']) && floatval($_REQUEST['rectx12']) <= 90) && floatval($_REQUEST['rectw12']) <= 90) || ((60 < floatval($_REQUEST['rectw12']) && floatval($_REQUEST['rectw12']) <= 90) && floatval($_REQUEST['rectx12']) <= 90)) ? $rectz12 : 0), 2);
  $rectad13 = round(((((60 < floatval($_REQUEST['rectx13']) && floatval($_REQUEST['rectx13']) <= 90) && floatval($_REQUEST['rectw13']) <= 90) || ((60 < floatval($_REQUEST['rectw13']) && floatval($_REQUEST['rectw13']) <= 90) && floatval($_REQUEST['rectx13']) <= 90)) ? $rectz13 : 0), 2);
  $rectad14 = round(((((60 < floatval($_REQUEST['rectx14']) && floatval($_REQUEST['rectx14']) <= 90) && floatval($_REQUEST['rectw14']) <= 90) || ((60 < floatval($_REQUEST['rectw14']) && floatval($_REQUEST['rectw14']) <= 90) && floatval($_REQUEST['rectx14']) <= 90)) ? $rectz14 : 0), 2);
  $rectad15 = round(((((60 < floatval($_REQUEST['rectx15']) && floatval($_REQUEST['rectx15']) <= 90) && floatval($_REQUEST['rectw15']) <= 90) || ((60 < floatval($_REQUEST['rectw15']) && floatval($_REQUEST['rectw15']) <= 90) && floatval($_REQUEST['rectx15']) <= 90)) ? $rectz15 : 0), 2);
  $rectad16 = round(((((60 < floatval($_REQUEST['rectx16']) && floatval($_REQUEST['rectx16']) <= 90) && floatval($_REQUEST['rectw16']) <= 90) || ((60 < floatval($_REQUEST['rectw16']) && floatval($_REQUEST['rectw16']) <= 90) && floatval($_REQUEST['rectx16']) <= 90)) ? $rectz16 : 0), 2);
  $rectad17 = round(((((60 < floatval($_REQUEST['rectx17']) && floatval($_REQUEST['rectx17']) <= 90) && floatval($_REQUEST['rectw17']) <= 90) || ((60 < floatval($_REQUEST['rectw17']) && floatval($_REQUEST['rectw17']) <= 90) && floatval($_REQUEST['rectx17']) <= 90)) ? $rectz17 : 0), 2);
  $rectad18 = round(((((60 < floatval($_REQUEST['rectx18']) && floatval($_REQUEST['rectx18']) <= 90) && floatval($_REQUEST['rectw18']) <= 90) || ((60 < floatval($_REQUEST['rectw18']) && floatval($_REQUEST['rectw18']) <= 90) && floatval($_REQUEST['rectx18']) <= 90)) ? $rectz18 : 0), 2);
  $rectad19 = round(((((60 < floatval($_REQUEST['rectx19']) && floatval($_REQUEST['rectx19']) <= 90) && floatval($_REQUEST['rectw19']) <= 90) || ((60 < floatval($_REQUEST['rectw19']) && floatval($_REQUEST['rectw19']) <= 90) && floatval($_REQUEST['rectx19']) <= 90)) ? $rectz19 : 0), 2);
  $rectad20 = round(((((60 < floatval($_REQUEST['rectx20']) && floatval($_REQUEST['rectx20']) <= 90) && floatval($_REQUEST['rectw20']) <= 90) || ((60 < floatval($_REQUEST['rectw20']) && floatval($_REQUEST['rectw20']) <= 90) && floatval($_REQUEST['rectx20']) <= 90)) ? $rectz20 : 0), 2);
  $rectad21 = round(((((60 < floatval($_REQUEST['rectx21']) && floatval($_REQUEST['rectx21']) <= 90) && floatval($_REQUEST['rectw21']) <= 90) || ((60 < floatval($_REQUEST['rectw21']) && floatval($_REQUEST['rectw21']) <= 90) && floatval($_REQUEST['rectx21']) <= 90)) ? $rectz21 : 0), 2);
  $rectad22 = round(((((60 < floatval($_REQUEST['rectx22']) && floatval($_REQUEST['rectx22']) <= 90) && floatval($_REQUEST['rectw22']) <= 90) || ((60 < floatval($_REQUEST['rectw22']) && floatval($_REQUEST['rectw22']) <= 90) && floatval($_REQUEST['rectx22']) <= 90)) ? $rectz22 : 0), 2);
  $rectad23 = round(((((60 < floatval($_REQUEST['rectx23']) && floatval($_REQUEST['rectx23']) <= 90) && floatval($_REQUEST['rectw23']) <= 90) || ((60 < floatval($_REQUEST['rectw23']) && floatval($_REQUEST['rectw23']) <= 90) && floatval($_REQUEST['rectx23']) <= 90)) ? $rectz23 : 0), 2);
  $rectad24 = round(((((60 < floatval($_REQUEST['rectx24']) && floatval($_REQUEST['rectx24']) <= 90) && floatval($_REQUEST['rectw24']) <= 90) || ((60 < floatval($_REQUEST['rectw24']) && floatval($_REQUEST['rectw24']) <= 90) && floatval($_REQUEST['rectx24']) <= 90)) ? $rectz24 : 0), 2);
  $rectad25 = round(((((60 < floatval($_REQUEST['rectx25']) && floatval($_REQUEST['rectx25']) <= 90) && floatval($_REQUEST['rectw25']) <= 90) || ((60 < floatval($_REQUEST['rectw25']) && floatval($_REQUEST['rectw25']) <= 90) && floatval($_REQUEST['rectx25']) <= 90)) ? $rectz25 : 0), 2);
  $rectad26 = round(((((60 < floatval($_REQUEST['rectx26']) && floatval($_REQUEST['rectx26']) <= 90) && floatval($_REQUEST['rectw26']) <= 90) || ((60 < floatval($_REQUEST['rectw26']) && floatval($_REQUEST['rectw26']) <= 90) && floatval($_REQUEST['rectx26']) <= 90)) ? $rectz26 : 0), 2);
  $rectad27 = round(((((60 < floatval($_REQUEST['rectx27']) && floatval($_REQUEST['rectx27']) <= 90) && floatval($_REQUEST['rectw27']) <= 90) || ((60 < floatval($_REQUEST['rectw27']) && floatval($_REQUEST['rectw27']) <= 90) && floatval($_REQUEST['rectx27']) <= 90)) ? $rectz27 : 0), 2);
  $rectad28 = round(((((60 < floatval($_REQUEST['rectx28']) && floatval($_REQUEST['rectx28']) <= 90) && floatval($_REQUEST['rectw28']) <= 90) || ((60 < floatval($_REQUEST['rectw28']) && floatval($_REQUEST['rectw28']) <= 90) && floatval($_REQUEST['rectx28']) <= 90)) ? $rectz28 : 0), 2);
  $rectad29 = round(((((60 < floatval($_REQUEST['rectx29']) && floatval($_REQUEST['rectx29']) <= 90) && floatval($_REQUEST['rectw29']) <= 90) || ((60 < floatval($_REQUEST['rectw29']) && floatval($_REQUEST['rectw29']) <= 90) && floatval($_REQUEST['rectx29']) <= 90)) ? $rectz29 : 0), 2);
  $rectad30 = round(((((60 < floatval($_REQUEST['rectx30']) && floatval($_REQUEST['rectx30']) <= 90) && floatval($_REQUEST['rectw30']) <= 90) || ((60 < floatval($_REQUEST['rectw30']) && floatval($_REQUEST['rectw30']) <= 90) && floatval($_REQUEST['rectx30']) <= 90)) ? $rectz30 : 0), 2);
  $rectad31 = round(((((60 < floatval($_REQUEST['rectx31']) && floatval($_REQUEST['rectx31']) <= 90) && floatval($_REQUEST['rectw31']) <= 90) || ((60 < floatval($_REQUEST['rectw31']) && floatval($_REQUEST['rectw31']) <= 90) && floatval($_REQUEST['rectx31']) <= 90)) ? $rectz31 : 0), 2);
  $rectad32 = round(((((60 < floatval($_REQUEST['rectx32']) && floatval($_REQUEST['rectx32']) <= 90) && floatval($_REQUEST['rectw32']) <= 90) || ((60 < floatval($_REQUEST['rectw32']) && floatval($_REQUEST['rectw32']) <= 90) && floatval($_REQUEST['rectx32']) <= 90)) ? $rectz32 : 0), 2);
  $rectad33 = round(((((60 < floatval($_REQUEST['rectx33']) && floatval($_REQUEST['rectx33']) <= 90) && floatval($_REQUEST['rectw33']) <= 90) || ((60 < floatval($_REQUEST['rectw33']) && floatval($_REQUEST['rectw33']) <= 90) && floatval($_REQUEST['rectx33']) <= 90)) ? $rectz33 : 0), 2);
  $rectad34 = round(((((60 < floatval($_REQUEST['rectx34']) && floatval($_REQUEST['rectx34']) <= 90) && floatval($_REQUEST['rectw34']) <= 90) || ((60 < floatval($_REQUEST['rectw34']) && floatval($_REQUEST['rectw34']) <= 90) && floatval($_REQUEST['rectx34']) <= 90)) ? $rectz34 : 0), 2);
  $rectad35 = round(((((60 < floatval($_REQUEST['rectx35']) && floatval($_REQUEST['rectx35']) <= 90) && floatval($_REQUEST['rectw35']) <= 90) || ((60 < floatval($_REQUEST['rectw35']) && floatval($_REQUEST['rectw35']) <= 90) && floatval($_REQUEST['rectx35']) <= 90)) ? $rectz35 : 0), 2);
  $rectad36 = round(((((60 < floatval($_REQUEST['rectx36']) && floatval($_REQUEST['rectx36']) <= 90) && floatval($_REQUEST['rectw36']) <= 90) || ((60 < floatval($_REQUEST['rectw36']) && floatval($_REQUEST['rectw36']) <= 90) && floatval($_REQUEST['rectx36']) <= 90)) ? $rectz36 : 0), 2);
  $rectad37 = round(((((60 < floatval($_REQUEST['rectx37']) && floatval($_REQUEST['rectx37']) <= 90) && floatval($_REQUEST['rectw37']) <= 90) || ((60 < floatval($_REQUEST['rectw37']) && floatval($_REQUEST['rectw37']) <= 90) && floatval($_REQUEST['rectx37']) <= 90)) ? $rectz37 : 0), 2);
  $rectad38 = round(((((60 < floatval($_REQUEST['rectx38']) && floatval($_REQUEST['rectx38']) <= 90) && floatval($_REQUEST['rectw38']) <= 90) || ((60 < floatval($_REQUEST['rectw38']) && floatval($_REQUEST['rectw38']) <= 90) && floatval($_REQUEST['rectx38']) <= 90)) ? $rectz38 : 0), 2);
  $rectad39 = round(((((60 < floatval($_REQUEST['rectx39']) && floatval($_REQUEST['rectx39']) <= 90) && floatval($_REQUEST['rectw39']) <= 90) || ((60 < floatval($_REQUEST['rectw39']) && floatval($_REQUEST['rectw39']) <= 90) && floatval($_REQUEST['rectx39']) <= 90)) ? $rectz39 : 0), 2);
  $rectad40 = round(((((60 < floatval($_REQUEST['rectx40']) && floatval($_REQUEST['rectx40']) <= 90) && floatval($_REQUEST['rectw40']) <= 90) || ((60 < floatval($_REQUEST['rectw40']) && floatval($_REQUEST['rectw40']) <= 90) && floatval($_REQUEST['rectx40']) <= 90)) ? $rectz40 : 0), 2);
  $rectad41 = round(((((60 < floatval($_REQUEST['rectx41']) && floatval($_REQUEST['rectx41']) <= 90) && floatval($_REQUEST['rectw41']) <= 90) || ((60 < floatval($_REQUEST['rectw41']) && floatval($_REQUEST['rectw41']) <= 90) && floatval($_REQUEST['rectx41']) <= 90)) ? $rectz41 : 0), 2);
  $rectad42 = round(((((60 < floatval($_REQUEST['rectx42']) && floatval($_REQUEST['rectx42']) <= 90) && floatval($_REQUEST['rectw42']) <= 90) || ((60 < floatval($_REQUEST['rectw42']) && floatval($_REQUEST['rectw42']) <= 90) && floatval($_REQUEST['rectx42']) <= 90)) ? $rectz42 : 0), 2);
  $rectad43 = round(((((60 < floatval($_REQUEST['rectx43']) && floatval($_REQUEST['rectx43']) <= 90) && floatval($_REQUEST['rectw43']) <= 90) || ((60 < floatval($_REQUEST['rectw43']) && floatval($_REQUEST['rectw43']) <= 90) && floatval($_REQUEST['rectx43']) <= 90)) ? $rectz43 : 0), 2);

  // Column 31
  $rectae11 = round((((90 < floatval($_REQUEST['rectx11'])) || (90 < floatval($_REQUEST['rectw11']))) ? floatval($rectz11) : 0), 2);
  $rectae12 = round((((90 < floatval($_REQUEST['rectx12'])) || (90 < floatval($_REQUEST['rectw12']))) ? floatval($rectz12) : 0), 2);
  $rectae13 = round((((90 < floatval($_REQUEST['rectx13'])) || (90 < floatval($_REQUEST['rectw13']))) ? floatval($rectz13) : 0), 2);
  $rectae14 = round((((90 < floatval($_REQUEST['rectx14'])) || (90 < floatval($_REQUEST['rectw14']))) ? floatval($rectz14) : 0), 2);
  $rectae15 = round((((90 < floatval($_REQUEST['rectx15'])) || (90 < floatval($_REQUEST['rectw15']))) ? floatval($rectz15) : 0), 2);
  $rectae16 = round((((90 < floatval($_REQUEST['rectx16'])) || (90 < floatval($_REQUEST['rectw16']))) ? floatval($rectz16) : 0), 2);
  $rectae17 = round((((90 < floatval($_REQUEST['rectx17'])) || (90 < floatval($_REQUEST['rectw17']))) ? floatval($rectz17) : 0), 2);
  $rectae18 = round((((90 < floatval($_REQUEST['rectx18'])) || (90 < floatval($_REQUEST['rectw18']))) ? floatval($rectz18) : 0), 2);
  $rectae19 = round((((90 < floatval($_REQUEST['rectx19'])) || (90 < floatval($_REQUEST['rectw19']))) ? floatval($rectz19) : 0), 2);
  $rectae20 = round((((90 < floatval($_REQUEST['rectx20'])) || (90 < floatval($_REQUEST['rectw20']))) ? floatval($rectz20) : 0), 2);
  $rectae21 = round((((90 < floatval($_REQUEST['rectx21'])) || (90 < floatval($_REQUEST['rectw21']))) ? floatval($rectz21) : 0), 2);
  $rectae22 = round((((90 < floatval($_REQUEST['rectx22'])) || (90 < floatval($_REQUEST['rectw22']))) ? floatval($rectz22) : 0), 2);
  $rectae23 = round((((90 < floatval($_REQUEST['rectx23'])) || (90 < floatval($_REQUEST['rectw23']))) ? floatval($rectz23) : 0), 2);
  $rectae24 = round((((90 < floatval($_REQUEST['rectx24'])) || (90 < floatval($_REQUEST['rectw24']))) ? floatval($rectz24) : 0), 2);
  $rectae25 = round((((90 < floatval($_REQUEST['rectx25'])) || (90 < floatval($_REQUEST['rectw25']))) ? floatval($rectz25) : 0), 2);
  $rectae26 = round((((90 < floatval($_REQUEST['rectx26'])) || (90 < floatval($_REQUEST['rectw26']))) ? floatval($rectz26) : 0), 2);
  $rectae27 = round((((90 < floatval($_REQUEST['rectx27'])) || (90 < floatval($_REQUEST['rectw27']))) ? floatval($rectz27) : 0), 2);
  $rectae28 = round((((90 < floatval($_REQUEST['rectx28'])) || (90 < floatval($_REQUEST['rectw28']))) ? floatval($rectz28) : 0), 2);
  $rectae29 = round((((90 < floatval($_REQUEST['rectx29'])) || (90 < floatval($_REQUEST['rectw29']))) ? floatval($rectz29) : 0), 2);
  $rectae30 = round((((90 < floatval($_REQUEST['rectx30'])) || (90 < floatval($_REQUEST['rectw30']))) ? floatval($rectz30) : 0), 2);
  $rectae31 = round((((90 < floatval($_REQUEST['rectx31'])) || (90 < floatval($_REQUEST['rectw31']))) ? floatval($rectz31) : 0), 2);
  $rectae32 = round((((90 < floatval($_REQUEST['rectx32'])) || (90 < floatval($_REQUEST['rectw32']))) ? floatval($rectz32) : 0), 2);
  $rectae33 = round((((90 < floatval($_REQUEST['rectx33'])) || (90 < floatval($_REQUEST['rectw33']))) ? floatval($rectz33) : 0), 2);
  $rectae34 = round((((90 < floatval($_REQUEST['rectx34'])) || (90 < floatval($_REQUEST['rectw34']))) ? floatval($rectz34) : 0), 2);
  $rectae35 = round((((90 < floatval($_REQUEST['rectx35'])) || (90 < floatval($_REQUEST['rectw35']))) ? floatval($rectz35) : 0), 2);
  $rectae36 = round((((90 < floatval($_REQUEST['rectx36'])) || (90 < floatval($_REQUEST['rectw36']))) ? floatval($rectz36) : 0), 2);
  $rectae37 = round((((90 < floatval($_REQUEST['rectx37'])) || (90 < floatval($_REQUEST['rectw37']))) ? floatval($rectz37) : 0), 2);
  $rectae38 = round((((90 < floatval($_REQUEST['rectx38'])) || (90 < floatval($_REQUEST['rectw38']))) ? floatval($rectz38) : 0), 2);
  $rectae39 = round((((90 < floatval($_REQUEST['rectx39'])) || (90 < floatval($_REQUEST['rectw39']))) ? floatval($rectz39) : 0), 2);
  $rectae40 = round((((90 < floatval($_REQUEST['rectx40'])) || (90 < floatval($_REQUEST['rectw40']))) ? floatval($rectz40) : 0), 2);
  $rectae41 = round((((90 < floatval($_REQUEST['rectx41'])) || (90 < floatval($_REQUEST['rectw41']))) ? floatval($rectz41) : 0), 2);
  $rectae42 = round((((90 < floatval($_REQUEST['rectx42'])) || (90 < floatval($_REQUEST['rectw42']))) ? floatval($rectz42) : 0), 2);
  $rectae43 = round((((90 < floatval($_REQUEST['rectx43'])) || (90 < floatval($_REQUEST['rectw43']))) ? floatval($rectz43) : 0), 2);

  // Column 32
  $rectaf11 = round(((floatval($_REQUEST['rectag11']) * floatval($_REQUEST['rectah11']) > 599) ? floatval($_REQUEST['rectai11']) : 0), 2);
  $rectaf12 = round(((floatval($_REQUEST['rectag12']) * floatval($_REQUEST['rectah12']) > 599) ? floatval($_REQUEST['rectai12']) : 0), 2);
  $rectaf13 = round(((floatval($_REQUEST['rectag13']) * floatval($_REQUEST['rectah13']) > 599) ? floatval($_REQUEST['rectai13']) : 0), 2);
  $rectaf14 = round(((floatval($_REQUEST['rectag14']) * floatval($_REQUEST['rectah14']) > 599) ? floatval($_REQUEST['rectai14']) : 0), 2);
  $rectaf15 = round(((floatval($_REQUEST['rectag15']) * floatval($_REQUEST['rectah15']) > 599) ? floatval($_REQUEST['rectai15']) : 0), 2);
  $rectaf16 = round(((floatval($_REQUEST['rectag16']) * floatval($_REQUEST['rectah16']) > 599) ? floatval($_REQUEST['rectai16']) : 0), 2);
  $rectaf17 = round(((floatval($_REQUEST['rectag17']) * floatval($_REQUEST['rectah17']) > 599) ? floatval($_REQUEST['rectai17']) : 0), 2);
  $rectaf18 = round(((floatval($_REQUEST['rectag18']) * floatval($_REQUEST['rectah18']) > 599) ? floatval($_REQUEST['rectai18']) : 0), 2);
  $rectaf19 = round(((floatval($_REQUEST['rectag19']) * floatval($_REQUEST['rectah19']) > 599) ? floatval($_REQUEST['rectai19']) : 0), 2);
  $rectaf20 = round(((floatval($_REQUEST['rectag20']) * floatval($_REQUEST['rectah20']) > 599) ? floatval($_REQUEST['rectai20']) : 0), 2);
  $rectaf21 = round(((floatval($_REQUEST['rectag21']) * floatval($_REQUEST['rectah21']) > 599) ? floatval($_REQUEST['rectai21']) : 0), 2);
  $rectaf22 = round(((floatval($_REQUEST['rectag22']) * floatval($_REQUEST['rectah22']) > 599) ? floatval($_REQUEST['rectai22']) : 0), 2);
  $rectaf23 = round(((floatval($_REQUEST['rectag23']) * floatval($_REQUEST['rectah23']) > 599) ? floatval($_REQUEST['rectai23']) : 0), 2);
  $rectaf24 = round(((floatval($_REQUEST['rectag24']) * floatval($_REQUEST['rectah24']) > 599) ? floatval($_REQUEST['rectai24']) : 0), 2);
  $rectaf25 = round(((floatval($_REQUEST['rectag25']) * floatval($_REQUEST['rectah25']) > 599) ? floatval($_REQUEST['rectai25']) : 0), 2);
  $rectaf26 = round(((floatval($_REQUEST['rectag26']) * floatval($_REQUEST['rectah26']) > 599) ? floatval($_REQUEST['rectai26']) : 0), 2);
  $rectaf27 = round(((floatval($_REQUEST['rectag27']) * floatval($_REQUEST['rectah27']) > 599) ? floatval($_REQUEST['rectai27']) : 0), 2);
  $rectaf28 = round(((floatval($_REQUEST['rectag28']) * floatval($_REQUEST['rectah28']) > 599) ? floatval($_REQUEST['rectai28']) : 0), 2);
  $rectaf29 = round(((floatval($_REQUEST['rectag29']) * floatval($_REQUEST['rectah29']) > 599) ? floatval($_REQUEST['rectai29']) : 0), 2);
  $rectaf30 = round(((floatval($_REQUEST['rectag30']) * floatval($_REQUEST['rectah30']) > 599) ? floatval($_REQUEST['rectai30']) : 0), 2);
  $rectaf31 = round(((floatval($_REQUEST['rectag31']) * floatval($_REQUEST['rectah31']) > 599) ? floatval($_REQUEST['rectai31']) : 0), 2);
  $rectaf32 = round(((floatval($_REQUEST['rectag32']) * floatval($_REQUEST['rectah32']) > 599) ? floatval($_REQUEST['rectai32']) : 0), 2);
  $rectaf33 = round(((floatval($_REQUEST['rectag33']) * floatval($_REQUEST['rectah33']) > 599) ? floatval($_REQUEST['rectai33']) : 0), 2);
  $rectaf34 = round(((floatval($_REQUEST['rectag34']) * floatval($_REQUEST['rectah34']) > 599) ? floatval($_REQUEST['rectai34']) : 0), 2);
  $rectaf35 = round(((floatval($_REQUEST['rectag35']) * floatval($_REQUEST['rectah35']) > 599) ? floatval($_REQUEST['rectai35']) : 0), 2);
  $rectaf36 = round(((floatval($_REQUEST['rectag36']) * floatval($_REQUEST['rectah36']) > 599) ? floatval($_REQUEST['rectai36']) : 0), 2);
  $rectaf37 = round(((floatval($_REQUEST['rectag37']) * floatval($_REQUEST['rectah37']) > 599) ? floatval($_REQUEST['rectai37']) : 0), 2);
  $rectaf38 = round(((floatval($_REQUEST['rectag38']) * floatval($_REQUEST['rectah38']) > 599) ? floatval($_REQUEST['rectai38']) : 0), 2);
  $rectaf39 = round(((floatval($_REQUEST['rectag39']) * floatval($_REQUEST['rectah39']) > 599) ? floatval($_REQUEST['rectai39']) : 0), 2);
  $rectaf40 = round(((floatval($_REQUEST['rectag40']) * floatval($_REQUEST['rectah40']) > 599) ? floatval($_REQUEST['rectai40']) : 0), 2);
  $rectaf41 = round(((floatval($_REQUEST['rectag41']) * floatval($_REQUEST['rectah41']) > 599) ? floatval($_REQUEST['rectai41']) : 0), 2);
  $rectaf42 = round(((floatval($_REQUEST['rectag42']) * floatval($_REQUEST['rectah42']) > 599) ? floatval($_REQUEST['rectai42']) : 0), 2);
  $rectaf43 = round(((floatval($_REQUEST['rectag43']) * floatval($_REQUEST['rectah43']) > 599) ? floatval($_REQUEST['rectai43']) : 0), 2);

  $rectao1 = floatval($_REQUEST['rectah2']) * 4;
  // Column36
  $rectaj11 = round(((floatval($_REQUEST['rectai11']) * (floatval($_REQUEST['rectag11']) + floatval($_REQUEST['rectah11']) + $rectao1)) / 6), 2);
  $rectaj12 = round(((floatval($_REQUEST['rectai12']) * (floatval($_REQUEST['rectag12']) + floatval($_REQUEST['rectah12']) + $rectao1)) / 6), 2);
  $rectaj13 = round(((floatval($_REQUEST['rectai13']) * (floatval($_REQUEST['rectag13']) + floatval($_REQUEST['rectah13']) + $rectao1)) / 6), 2);
  $rectaj14 = round(((floatval($_REQUEST['rectai14']) * (floatval($_REQUEST['rectag14']) + floatval($_REQUEST['rectah14']) + $rectao1)) / 6), 2);
  $rectaj15 = round(((floatval($_REQUEST['rectai15']) * (floatval($_REQUEST['rectag15']) + floatval($_REQUEST['rectah15']) + $rectao1)) / 6), 2);
  $rectaj16 = round(((floatval($_REQUEST['rectai16']) * (floatval($_REQUEST['rectag16']) + floatval($_REQUEST['rectah16']) + $rectao1)) / 6), 2);
  $rectaj17 = round(((floatval($_REQUEST['rectai17']) * (floatval($_REQUEST['rectag17']) + floatval($_REQUEST['rectah17']) + $rectao1)) / 6), 2);
  $rectaj18 = round(((floatval($_REQUEST['rectai18']) * (floatval($_REQUEST['rectag18']) + floatval($_REQUEST['rectah18']) + $rectao1)) / 6), 2);
  $rectaj19 = round(((floatval($_REQUEST['rectai19']) * (floatval($_REQUEST['rectag19']) + floatval($_REQUEST['rectah19']) + $rectao1)) / 6), 2);
  $rectaj20 = round(((floatval($_REQUEST['rectai20']) * (floatval($_REQUEST['rectag20']) + floatval($_REQUEST['rectah20']) + $rectao1)) / 6), 2);
  $rectaj21 = round(((floatval($_REQUEST['rectai21']) * (floatval($_REQUEST['rectag21']) + floatval($_REQUEST['rectah21']) + $rectao1)) / 6), 2);
  $rectaj22 = round(((floatval($_REQUEST['rectai22']) * (floatval($_REQUEST['rectag22']) + floatval($_REQUEST['rectah22']) + $rectao1)) / 6), 2);
  $rectaj23 = round(((floatval($_REQUEST['rectai23']) * (floatval($_REQUEST['rectag23']) + floatval($_REQUEST['rectah23']) + $rectao1)) / 6), 2);
  $rectaj24 = round(((floatval($_REQUEST['rectai24']) * (floatval($_REQUEST['rectag24']) + floatval($_REQUEST['rectah24']) + $rectao1)) / 6), 2);
  $rectaj25 = round(((floatval($_REQUEST['rectai25']) * (floatval($_REQUEST['rectag25']) + floatval($_REQUEST['rectah25']) + $rectao1)) / 6), 2);
  $rectaj26 = round(((floatval($_REQUEST['rectai26']) * (floatval($_REQUEST['rectag26']) + floatval($_REQUEST['rectah26']) + $rectao1)) / 6), 2);
  $rectaj27 = round(((floatval($_REQUEST['rectai27']) * (floatval($_REQUEST['rectag27']) + floatval($_REQUEST['rectah27']) + $rectao1)) / 6), 2);
  $rectaj28 = round(((floatval($_REQUEST['rectai28']) * (floatval($_REQUEST['rectag28']) + floatval($_REQUEST['rectah28']) + $rectao1)) / 6), 2);
  $rectaj29 = round(((floatval($_REQUEST['rectai29']) * (floatval($_REQUEST['rectag29']) + floatval($_REQUEST['rectah29']) + $rectao1)) / 6), 2);
  $rectaj30 = round(((floatval($_REQUEST['rectai30']) * (floatval($_REQUEST['rectag30']) + floatval($_REQUEST['rectah30']) + $rectao1)) / 6), 2);
  $rectaj31 = round(((floatval($_REQUEST['rectai31']) * (floatval($_REQUEST['rectag31']) + floatval($_REQUEST['rectah31']) + $rectao1)) / 6), 2);
  $rectaj32 = round(((floatval($_REQUEST['rectai32']) * (floatval($_REQUEST['rectag32']) + floatval($_REQUEST['rectah32']) + $rectao1)) / 6), 2);
  $rectaj33 = round(((floatval($_REQUEST['rectai33']) * (floatval($_REQUEST['rectag33']) + floatval($_REQUEST['rectah33']) + $rectao1)) / 6), 2);
  $rectaj34 = round(((floatval($_REQUEST['rectai34']) * (floatval($_REQUEST['rectag34']) + floatval($_REQUEST['rectah34']) + $rectao1)) / 6), 2);
  $rectaj35 = round(((floatval($_REQUEST['rectai35']) * (floatval($_REQUEST['rectag35']) + floatval($_REQUEST['rectah35']) + $rectao1)) / 6), 2);
  $rectaj36 = round(((floatval($_REQUEST['rectai36']) * (floatval($_REQUEST['rectag36']) + floatval($_REQUEST['rectah36']) + $rectao1)) / 6), 2);
  $rectaj37 = round(((floatval($_REQUEST['rectai37']) * (floatval($_REQUEST['rectag37']) + floatval($_REQUEST['rectah37']) + $rectao1)) / 6), 2);
  $rectaj38 = round(((floatval($_REQUEST['rectai38']) * (floatval($_REQUEST['rectag38']) + floatval($_REQUEST['rectah38']) + $rectao1)) / 6), 2);
  $rectaj39 = round(((floatval($_REQUEST['rectai39']) * (floatval($_REQUEST['rectag39']) + floatval($_REQUEST['rectah39']) + $rectao1)) / 6), 2);
  $rectaj40 = round(((floatval($_REQUEST['rectai40']) * (floatval($_REQUEST['rectag40']) + floatval($_REQUEST['rectah40']) + $rectao1)) / 6), 2);
  $rectaj41 = round(((floatval($_REQUEST['rectai41']) * (floatval($_REQUEST['rectag41']) + floatval($_REQUEST['rectah41']) + $rectao1)) / 6), 2);
  $rectaj42 = round(((floatval($_REQUEST['rectai42']) * (floatval($_REQUEST['rectag42']) + floatval($_REQUEST['rectah42']) + $rectao1)) / 6), 2);
  $rectaj43 = round(((floatval($_REQUEST['rectai43']) * (floatval($_REQUEST['rectag43']) + floatval($_REQUEST['rectah43']) + $rectao1)) / 6), 2);
  // Column 37
  $rectak11 = round((((0 < floatval($_REQUEST['rectah11']) && floatval($_REQUEST['rectah11']) <= 13) && (0 < floatval($_REQUEST['rectag11']) && floatval($_REQUEST['rectag11']) <= 13)) ? $rectaj11 : 0), 2);
  $rectak12 = round((((0 < floatval($_REQUEST['rectah12']) && floatval($_REQUEST['rectah12']) <= 13) && (0 < floatval($_REQUEST['rectag12']) && floatval($_REQUEST['rectag12']) <= 13)) ? $rectaj12 : 0), 2);
  $rectak13 = round((((0 < floatval($_REQUEST['rectah13']) && floatval($_REQUEST['rectah13']) <= 13) && (0 < floatval($_REQUEST['rectag13']) && floatval($_REQUEST['rectag13']) <= 13)) ? $rectaj13 : 0), 2);
  $rectak14 = round((((0 < floatval($_REQUEST['rectah14']) && floatval($_REQUEST['rectah14']) <= 13) && (0 < floatval($_REQUEST['rectag14']) && floatval($_REQUEST['rectag14']) <= 13)) ? $rectaj14 : 0), 2);
  $rectak15 = round((((0 < floatval($_REQUEST['rectah15']) && floatval($_REQUEST['rectah15']) <= 13) && (0 < floatval($_REQUEST['rectag15']) && floatval($_REQUEST['rectag15']) <= 13)) ? $rectaj15 : 0), 2);
  $rectak16 = round((((0 < floatval($_REQUEST['rectah16']) && floatval($_REQUEST['rectah16']) <= 13) && (0 < floatval($_REQUEST['rectag16']) && floatval($_REQUEST['rectag16']) <= 13)) ? $rectaj16 : 0), 2);
  $rectak17 = round((((0 < floatval($_REQUEST['rectah17']) && floatval($_REQUEST['rectah17']) <= 13) && (0 < floatval($_REQUEST['rectag17']) && floatval($_REQUEST['rectag17']) <= 13)) ? $rectaj17 : 0), 2);
  $rectak18 = round((((0 < floatval($_REQUEST['rectah18']) && floatval($_REQUEST['rectah18']) <= 13) && (0 < floatval($_REQUEST['rectag18']) && floatval($_REQUEST['rectag18']) <= 13)) ? $rectaj18 : 0), 2);
  $rectak19 = round((((0 < floatval($_REQUEST['rectah19']) && floatval($_REQUEST['rectah19']) <= 13) && (0 < floatval($_REQUEST['rectag19']) && floatval($_REQUEST['rectag19']) <= 13)) ? $rectaj19 : 0), 2);
  $rectak20 = round((((0 < floatval($_REQUEST['rectah20']) && floatval($_REQUEST['rectah20']) <= 13) && (0 < floatval($_REQUEST['rectag20']) && floatval($_REQUEST['rectag20']) <= 13)) ? $rectaj20 : 0), 2);
  $rectak21 = round((((0 < floatval($_REQUEST['rectah21']) && floatval($_REQUEST['rectah21']) <= 13) && (0 < floatval($_REQUEST['rectag21']) && floatval($_REQUEST['rectag21']) <= 13)) ? $rectaj21 : 0), 2);
  $rectak22 = round((((0 < floatval($_REQUEST['rectah22']) && floatval($_REQUEST['rectah22']) <= 13) && (0 < floatval($_REQUEST['rectag22']) && floatval($_REQUEST['rectag22']) <= 13)) ? $rectaj22 : 0), 2);
  $rectak23 = round((((0 < floatval($_REQUEST['rectah23']) && floatval($_REQUEST['rectah23']) <= 13) && (0 < floatval($_REQUEST['rectag23']) && floatval($_REQUEST['rectag23']) <= 13)) ? $rectaj23 : 0), 2);
  $rectak24 = round((((0 < floatval($_REQUEST['rectah24']) && floatval($_REQUEST['rectah24']) <= 13) && (0 < floatval($_REQUEST['rectag24']) && floatval($_REQUEST['rectag24']) <= 13)) ? $rectaj24 : 0), 2);
  $rectak25 = round((((0 < floatval($_REQUEST['rectah25']) && floatval($_REQUEST['rectah25']) <= 13) && (0 < floatval($_REQUEST['rectag25']) && floatval($_REQUEST['rectag25']) <= 13)) ? $rectaj25 : 0), 2);
  $rectak26 = round((((0 < floatval($_REQUEST['rectah26']) && floatval($_REQUEST['rectah26']) <= 13) && (0 < floatval($_REQUEST['rectag26']) && floatval($_REQUEST['rectag26']) <= 13)) ? $rectaj26 : 0), 2);
  $rectak27 = round((((0 < floatval($_REQUEST['rectah27']) && floatval($_REQUEST['rectah27']) <= 13) && (0 < floatval($_REQUEST['rectag27']) && floatval($_REQUEST['rectag27']) <= 13)) ? $rectaj27 : 0), 2);
  $rectak28 = round((((0 < floatval($_REQUEST['rectah28']) && floatval($_REQUEST['rectah28']) <= 13) && (0 < floatval($_REQUEST['rectag28']) && floatval($_REQUEST['rectag28']) <= 13)) ? $rectaj28 : 0), 2);
  $rectak29 = round((((0 < floatval($_REQUEST['rectah29']) && floatval($_REQUEST['rectah29']) <= 13) && (0 < floatval($_REQUEST['rectag29']) && floatval($_REQUEST['rectag29']) <= 13)) ? $rectaj29 : 0), 2);
  $rectak30 = round((((0 < floatval($_REQUEST['rectah30']) && floatval($_REQUEST['rectah30']) <= 13) && (0 < floatval($_REQUEST['rectag30']) && floatval($_REQUEST['rectag30']) <= 13)) ? $rectaj30 : 0), 2);
  $rectak31 = round((((0 < floatval($_REQUEST['rectah31']) && floatval($_REQUEST['rectah31']) <= 13) && (0 < floatval($_REQUEST['rectag31']) && floatval($_REQUEST['rectag31']) <= 13)) ? $rectaj31 : 0), 2);
  $rectak32 = round((((0 < floatval($_REQUEST['rectah32']) && floatval($_REQUEST['rectah32']) <= 13) && (0 < floatval($_REQUEST['rectag32']) && floatval($_REQUEST['rectag32']) <= 13)) ? $rectaj32 : 0), 2);
  $rectak33 = round((((0 < floatval($_REQUEST['rectah33']) && floatval($_REQUEST['rectah33']) <= 13) && (0 < floatval($_REQUEST['rectag33']) && floatval($_REQUEST['rectag33']) <= 13)) ? $rectaj33 : 0), 2);
  $rectak34 = round((((0 < floatval($_REQUEST['rectah34']) && floatval($_REQUEST['rectah34']) <= 13) && (0 < floatval($_REQUEST['rectag34']) && floatval($_REQUEST['rectag34']) <= 13)) ? $rectaj34 : 0), 2);
  $rectak35 = round((((0 < floatval($_REQUEST['rectah35']) && floatval($_REQUEST['rectah35']) <= 13) && (0 < floatval($_REQUEST['rectag35']) && floatval($_REQUEST['rectag35']) <= 13)) ? $rectaj35 : 0), 2);
  $rectak36 = round((((0 < floatval($_REQUEST['rectah36']) && floatval($_REQUEST['rectah36']) <= 13) && (0 < floatval($_REQUEST['rectag36']) && floatval($_REQUEST['rectag36']) <= 13)) ? $rectaj36 : 0), 2);
  $rectak37 = round((((0 < floatval($_REQUEST['rectah37']) && floatval($_REQUEST['rectah37']) <= 13) && (0 < floatval($_REQUEST['rectag37']) && floatval($_REQUEST['rectag37']) <= 13)) ? $rectaj37 : 0), 2);
  $rectak38 = round((((0 < floatval($_REQUEST['rectah38']) && floatval($_REQUEST['rectah38']) <= 13) && (0 < floatval($_REQUEST['rectag38']) && floatval($_REQUEST['rectag38']) <= 13)) ? $rectaj38 : 0), 2);
  $rectak39 = round((((0 < floatval($_REQUEST['rectah39']) && floatval($_REQUEST['rectah39']) <= 13) && (0 < floatval($_REQUEST['rectag39']) && floatval($_REQUEST['rectag39']) <= 13)) ? $rectaj39 : 0), 2);
  $rectak40 = round((((0 < floatval($_REQUEST['rectah40']) && floatval($_REQUEST['rectah40']) <= 13) && (0 < floatval($_REQUEST['rectag40']) && floatval($_REQUEST['rectag40']) <= 13)) ? $rectaj40 : 0), 2);
  $rectak41 = round((((0 < floatval($_REQUEST['rectah41']) && floatval($_REQUEST['rectah41']) <= 13) && (0 < floatval($_REQUEST['rectag41']) && floatval($_REQUEST['rectag41']) <= 13)) ? $rectaj41 : 0), 2);
  $rectak42 = round((((0 < floatval($_REQUEST['rectah42']) && floatval($_REQUEST['rectah42']) <= 13) && (0 < floatval($_REQUEST['rectag42']) && floatval($_REQUEST['rectag42']) <= 13)) ? $rectaj42 : 0), 2);
  $rectak43 = round((((0 < floatval($_REQUEST['rectah43']) && floatval($_REQUEST['rectah43']) <= 13) && (0 < floatval($_REQUEST['rectag43']) && floatval($_REQUEST['rectag43']) <= 13)) ? $rectaj43 : 0), 2);

  // Column 38
  $rectal11 = round(((((13 < floatval($_REQUEST['rectah11']) && floatval($_REQUEST['rectah11']) <= 30) && floatval($_REQUEST['rectag11']) <= 30) || ((13 < floatval($_REQUEST['rectag11']) && floatval($_REQUEST['rectag11']) <= 30) && floatval($_REQUEST['rectah11']) <= 30)) ? $rectaj11 : 0), 2);
  $rectal12 = round(((((13 < floatval($_REQUEST['rectah12']) && floatval($_REQUEST['rectah12']) <= 30) && floatval($_REQUEST['rectag12']) <= 30) || ((13 < floatval($_REQUEST['rectag12']) && floatval($_REQUEST['rectag12']) <= 30) && floatval($_REQUEST['rectah12']) <= 30)) ? $rectaj12 : 0), 2);
  $rectal13 = round(((((13 < floatval($_REQUEST['rectah13']) && floatval($_REQUEST['rectah13']) <= 30) && floatval($_REQUEST['rectag13']) <= 30) || ((13 < floatval($_REQUEST['rectag13']) && floatval($_REQUEST['rectag13']) <= 30) && floatval($_REQUEST['rectah13']) <= 30)) ? $rectaj13 : 0), 2);
  $rectal14 = round(((((13 < floatval($_REQUEST['rectah14']) && floatval($_REQUEST['rectah14']) <= 30) && floatval($_REQUEST['rectag14']) <= 30) || ((13 < floatval($_REQUEST['rectag14']) && floatval($_REQUEST['rectag14']) <= 30) && floatval($_REQUEST['rectah14']) <= 30)) ? $rectaj14 : 0), 2);
  $rectal15 = round(((((13 < floatval($_REQUEST['rectah15']) && floatval($_REQUEST['rectah15']) <= 30) && floatval($_REQUEST['rectag15']) <= 30) || ((13 < floatval($_REQUEST['rectag15']) && floatval($_REQUEST['rectag15']) <= 30) && floatval($_REQUEST['rectah15']) <= 30)) ? $rectaj15 : 0), 2);
  $rectal16 = round(((((13 < floatval($_REQUEST['rectah16']) && floatval($_REQUEST['rectah16']) <= 30) && floatval($_REQUEST['rectag16']) <= 30) || ((13 < floatval($_REQUEST['rectag16']) && floatval($_REQUEST['rectag16']) <= 30) && floatval($_REQUEST['rectah16']) <= 30)) ? $rectaj16 : 0), 2);
  $rectal17 = round(((((13 < floatval($_REQUEST['rectah17']) && floatval($_REQUEST['rectah17']) <= 30) && floatval($_REQUEST['rectag17']) <= 30) || ((13 < floatval($_REQUEST['rectag17']) && floatval($_REQUEST['rectag17']) <= 30) && floatval($_REQUEST['rectah17']) <= 30)) ? $rectaj17 : 0), 2);
  $rectal18 = round(((((13 < floatval($_REQUEST['rectah18']) && floatval($_REQUEST['rectah18']) <= 30) && floatval($_REQUEST['rectag18']) <= 30) || ((13 < floatval($_REQUEST['rectag18']) && floatval($_REQUEST['rectag18']) <= 30) && floatval($_REQUEST['rectah18']) <= 30)) ? $rectaj18 : 0), 2);
  $rectal19 = round(((((13 < floatval($_REQUEST['rectah19']) && floatval($_REQUEST['rectah19']) <= 30) && floatval($_REQUEST['rectag19']) <= 30) || ((13 < floatval($_REQUEST['rectag19']) && floatval($_REQUEST['rectag19']) <= 30) && floatval($_REQUEST['rectah19']) <= 30)) ? $rectaj19 : 0), 2);
  $rectal20 = round(((((13 < floatval($_REQUEST['rectah20']) && floatval($_REQUEST['rectah20']) <= 30) && floatval($_REQUEST['rectag20']) <= 30) || ((13 < floatval($_REQUEST['rectag20']) && floatval($_REQUEST['rectag20']) <= 30) && floatval($_REQUEST['rectah20']) <= 30)) ? $rectaj20 : 0), 2);
  $rectal21 = round(((((13 < floatval($_REQUEST['rectah21']) && floatval($_REQUEST['rectah21']) <= 30) && floatval($_REQUEST['rectag21']) <= 30) || ((13 < floatval($_REQUEST['rectag21']) && floatval($_REQUEST['rectag21']) <= 30) && floatval($_REQUEST['rectah21']) <= 30)) ? $rectaj21 : 0), 2);
  $rectal22 = round(((((13 < floatval($_REQUEST['rectah22']) && floatval($_REQUEST['rectah22']) <= 30) && floatval($_REQUEST['rectag22']) <= 30) || ((13 < floatval($_REQUEST['rectag22']) && floatval($_REQUEST['rectag22']) <= 30) && floatval($_REQUEST['rectah22']) <= 30)) ? $rectaj22 : 0), 2);
  $rectal23 = round(((((13 < floatval($_REQUEST['rectah23']) && floatval($_REQUEST['rectah23']) <= 30) && floatval($_REQUEST['rectag23']) <= 30) || ((13 < floatval($_REQUEST['rectag23']) && floatval($_REQUEST['rectag23']) <= 30) && floatval($_REQUEST['rectah23']) <= 30)) ? $rectaj23 : 0), 2);
  $rectal24 = round(((((13 < floatval($_REQUEST['rectah24']) && floatval($_REQUEST['rectah24']) <= 30) && floatval($_REQUEST['rectag24']) <= 30) || ((13 < floatval($_REQUEST['rectag24']) && floatval($_REQUEST['rectag24']) <= 30) && floatval($_REQUEST['rectah24']) <= 30)) ? $rectaj24 : 0), 2);
  $rectal25 = round(((((13 < floatval($_REQUEST['rectah25']) && floatval($_REQUEST['rectah25']) <= 30) && floatval($_REQUEST['rectag25']) <= 30) || ((13 < floatval($_REQUEST['rectag25']) && floatval($_REQUEST['rectag25']) <= 30) && floatval($_REQUEST['rectah25']) <= 30)) ? $rectaj25 : 0), 2);
  $rectal26 = round(((((13 < floatval($_REQUEST['rectah26']) && floatval($_REQUEST['rectah26']) <= 30) && floatval($_REQUEST['rectag26']) <= 30) || ((13 < floatval($_REQUEST['rectag26']) && floatval($_REQUEST['rectag26']) <= 30) && floatval($_REQUEST['rectah26']) <= 30)) ? $rectaj26 : 0), 2);
  $rectal27 = round(((((13 < floatval($_REQUEST['rectah27']) && floatval($_REQUEST['rectah27']) <= 30) && floatval($_REQUEST['rectag27']) <= 30) || ((13 < floatval($_REQUEST['rectag27']) && floatval($_REQUEST['rectag27']) <= 30) && floatval($_REQUEST['rectah27']) <= 30)) ? $rectaj27 : 0), 2);
  $rectal28 = round(((((13 < floatval($_REQUEST['rectah28']) && floatval($_REQUEST['rectah28']) <= 30) && floatval($_REQUEST['rectag28']) <= 30) || ((13 < floatval($_REQUEST['rectag28']) && floatval($_REQUEST['rectag28']) <= 30) && floatval($_REQUEST['rectah28']) <= 30)) ? $rectaj28 : 0), 2);
  $rectal29 = round(((((13 < floatval($_REQUEST['rectah29']) && floatval($_REQUEST['rectah29']) <= 30) && floatval($_REQUEST['rectag29']) <= 30) || ((13 < floatval($_REQUEST['rectag29']) && floatval($_REQUEST['rectag29']) <= 30) && floatval($_REQUEST['rectah29']) <= 30)) ? $rectaj29 : 0), 2);
  $rectal30 = round(((((13 < floatval($_REQUEST['rectah30']) && floatval($_REQUEST['rectah30']) <= 30) && floatval($_REQUEST['rectag30']) <= 30) || ((13 < floatval($_REQUEST['rectag30']) && floatval($_REQUEST['rectag30']) <= 30) && floatval($_REQUEST['rectah30']) <= 30)) ? $rectaj30 : 0), 2);
  $rectal31 = round(((((13 < floatval($_REQUEST['rectah31']) && floatval($_REQUEST['rectah31']) <= 30) && floatval($_REQUEST['rectag31']) <= 30) || ((13 < floatval($_REQUEST['rectag31']) && floatval($_REQUEST['rectag31']) <= 30) && floatval($_REQUEST['rectah31']) <= 30)) ? $rectaj31 : 0), 2);
  $rectal32 = round(((((13 < floatval($_REQUEST['rectah32']) && floatval($_REQUEST['rectah32']) <= 30) && floatval($_REQUEST['rectag32']) <= 30) || ((13 < floatval($_REQUEST['rectag32']) && floatval($_REQUEST['rectag32']) <= 30) && floatval($_REQUEST['rectah32']) <= 30)) ? $rectaj32 : 0), 2);
  $rectal33 = round(((((13 < floatval($_REQUEST['rectah33']) && floatval($_REQUEST['rectah33']) <= 30) && floatval($_REQUEST['rectag33']) <= 30) || ((13 < floatval($_REQUEST['rectag33']) && floatval($_REQUEST['rectag33']) <= 30) && floatval($_REQUEST['rectah33']) <= 30)) ? $rectaj33 : 0), 2);
  $rectal34 = round(((((13 < floatval($_REQUEST['rectah34']) && floatval($_REQUEST['rectah34']) <= 30) && floatval($_REQUEST['rectag34']) <= 30) || ((13 < floatval($_REQUEST['rectag34']) && floatval($_REQUEST['rectag34']) <= 30) && floatval($_REQUEST['rectah34']) <= 30)) ? $rectaj34 : 0), 2);
  $rectal35 = round(((((13 < floatval($_REQUEST['rectah35']) && floatval($_REQUEST['rectah35']) <= 30) && floatval($_REQUEST['rectag35']) <= 30) || ((13 < floatval($_REQUEST['rectag35']) && floatval($_REQUEST['rectag35']) <= 30) && floatval($_REQUEST['rectah35']) <= 30)) ? $rectaj35 : 0), 2);
  $rectal36 = round(((((13 < floatval($_REQUEST['rectah36']) && floatval($_REQUEST['rectah36']) <= 30) && floatval($_REQUEST['rectag36']) <= 30) || ((13 < floatval($_REQUEST['rectag36']) && floatval($_REQUEST['rectag36']) <= 30) && floatval($_REQUEST['rectah36']) <= 30)) ? $rectaj36 : 0), 2);
  $rectal37 = round(((((13 < floatval($_REQUEST['rectah37']) && floatval($_REQUEST['rectah37']) <= 30) && floatval($_REQUEST['rectag37']) <= 30) || ((13 < floatval($_REQUEST['rectag37']) && floatval($_REQUEST['rectag37']) <= 30) && floatval($_REQUEST['rectah37']) <= 30)) ? $rectaj37 : 0), 2);
  $rectal38 = round(((((13 < floatval($_REQUEST['rectah38']) && floatval($_REQUEST['rectah38']) <= 30) && floatval($_REQUEST['rectag38']) <= 30) || ((13 < floatval($_REQUEST['rectag38']) && floatval($_REQUEST['rectag38']) <= 30) && floatval($_REQUEST['rectah38']) <= 30)) ? $rectaj38 : 0), 2);
  $rectal39 = round(((((13 < floatval($_REQUEST['rectah39']) && floatval($_REQUEST['rectah39']) <= 30) && floatval($_REQUEST['rectag39']) <= 30) || ((13 < floatval($_REQUEST['rectag39']) && floatval($_REQUEST['rectag39']) <= 30) && floatval($_REQUEST['rectah39']) <= 30)) ? $rectaj39 : 0), 2);
  $rectal40 = round(((((13 < floatval($_REQUEST['rectah40']) && floatval($_REQUEST['rectah40']) <= 30) && floatval($_REQUEST['rectag40']) <= 30) || ((13 < floatval($_REQUEST['rectag40']) && floatval($_REQUEST['rectag40']) <= 30) && floatval($_REQUEST['rectah40']) <= 30)) ? $rectaj40 : 0), 2);
  $rectal41 = round(((((13 < floatval($_REQUEST['rectah41']) && floatval($_REQUEST['rectah41']) <= 30) && floatval($_REQUEST['rectag41']) <= 30) || ((13 < floatval($_REQUEST['rectag41']) && floatval($_REQUEST['rectag41']) <= 30) && floatval($_REQUEST['rectah41']) <= 30)) ? $rectaj41 : 0), 2);
  $rectal42 = round(((((13 < floatval($_REQUEST['rectah42']) && floatval($_REQUEST['rectah42']) <= 30) && floatval($_REQUEST['rectag42']) <= 30) || ((13 < floatval($_REQUEST['rectag42']) && floatval($_REQUEST['rectag42']) <= 30) && floatval($_REQUEST['rectah42']) <= 30)) ? $rectaj42 : 0), 2);
  $rectal43 = round(((((13 < floatval($_REQUEST['rectah43']) && floatval($_REQUEST['rectah43']) <= 30) && floatval($_REQUEST['rectag43']) <= 30) || ((13 < floatval($_REQUEST['rectag43']) && floatval($_REQUEST['rectag43']) <= 30) && floatval($_REQUEST['rectah43']) <= 30)) ? $rectaj43 : 0), 2);


  // Column 39
  $rectam11 = round(((((30 < floatval($_REQUEST['rectah11']) && floatval($_REQUEST['rectah11']) <= 60) && floatval($_REQUEST['rectag11']) <= 60) || ((30 < floatval($_REQUEST['rectag11']) && floatval($_REQUEST['rectag11']) <= 60) && floatval($_REQUEST['rectah11']) <= 60)) ? $rectaj11 : 0), 2);
  $rectam12 = round(((((30 < floatval($_REQUEST['rectah12']) && floatval($_REQUEST['rectah12']) <= 60) && floatval($_REQUEST['rectag12']) <= 60) || ((30 < floatval($_REQUEST['rectag12']) && floatval($_REQUEST['rectag12']) <= 60) && floatval($_REQUEST['rectah12']) <= 60)) ? $rectaj12 : 0), 2);
  $rectam13 = round(((((30 < floatval($_REQUEST['rectah13']) && floatval($_REQUEST['rectah13']) <= 60) && floatval($_REQUEST['rectag13']) <= 60) || ((30 < floatval($_REQUEST['rectag13']) && floatval($_REQUEST['rectag13']) <= 60) && floatval($_REQUEST['rectah13']) <= 60)) ? $rectaj13 : 0), 2);
  $rectam14 = round(((((30 < floatval($_REQUEST['rectah14']) && floatval($_REQUEST['rectah14']) <= 60) && floatval($_REQUEST['rectag14']) <= 60) || ((30 < floatval($_REQUEST['rectag14']) && floatval($_REQUEST['rectag14']) <= 60) && floatval($_REQUEST['rectah14']) <= 60)) ? $rectaj14 : 0), 2);
  $rectam15 = round(((((30 < floatval($_REQUEST['rectah15']) && floatval($_REQUEST['rectah15']) <= 60) && floatval($_REQUEST['rectag15']) <= 60) || ((30 < floatval($_REQUEST['rectag15']) && floatval($_REQUEST['rectag15']) <= 60) && floatval($_REQUEST['rectah15']) <= 60)) ? $rectaj15 : 0), 2);
  $rectam16 = round(((((30 < floatval($_REQUEST['rectah16']) && floatval($_REQUEST['rectah16']) <= 60) && floatval($_REQUEST['rectag16']) <= 60) || ((30 < floatval($_REQUEST['rectag16']) && floatval($_REQUEST['rectag16']) <= 60) && floatval($_REQUEST['rectah16']) <= 60)) ? $rectaj16 : 0), 2);
  $rectam17 = round(((((30 < floatval($_REQUEST['rectah17']) && floatval($_REQUEST['rectah17']) <= 60) && floatval($_REQUEST['rectag17']) <= 60) || ((30 < floatval($_REQUEST['rectag17']) && floatval($_REQUEST['rectag17']) <= 60) && floatval($_REQUEST['rectah17']) <= 60)) ? $rectaj17 : 0), 2);
  $rectam18 = round(((((30 < floatval($_REQUEST['rectah18']) && floatval($_REQUEST['rectah18']) <= 60) && floatval($_REQUEST['rectag18']) <= 60) || ((30 < floatval($_REQUEST['rectag18']) && floatval($_REQUEST['rectag18']) <= 60) && floatval($_REQUEST['rectah18']) <= 60)) ? $rectaj18 : 0), 2);
  $rectam19 = round(((((30 < floatval($_REQUEST['rectah19']) && floatval($_REQUEST['rectah19']) <= 60) && floatval($_REQUEST['rectag19']) <= 60) || ((30 < floatval($_REQUEST['rectag19']) && floatval($_REQUEST['rectag19']) <= 60) && floatval($_REQUEST['rectah19']) <= 60)) ? $rectaj19 : 0), 2);
  $rectam20 = round(((((30 < floatval($_REQUEST['rectah20']) && floatval($_REQUEST['rectah20']) <= 60) && floatval($_REQUEST['rectag20']) <= 60) || ((30 < floatval($_REQUEST['rectag20']) && floatval($_REQUEST['rectag20']) <= 60) && floatval($_REQUEST['rectah20']) <= 60)) ? $rectaj20 : 0), 2);
  $rectam21 = round(((((30 < floatval($_REQUEST['rectah21']) && floatval($_REQUEST['rectah21']) <= 60) && floatval($_REQUEST['rectag21']) <= 60) || ((30 < floatval($_REQUEST['rectag21']) && floatval($_REQUEST['rectag21']) <= 60) && floatval($_REQUEST['rectah21']) <= 60)) ? $rectaj21 : 0), 2);
  $rectam22 = round(((((30 < floatval($_REQUEST['rectah22']) && floatval($_REQUEST['rectah22']) <= 60) && floatval($_REQUEST['rectag22']) <= 60) || ((30 < floatval($_REQUEST['rectag22']) && floatval($_REQUEST['rectag22']) <= 60) && floatval($_REQUEST['rectah22']) <= 60)) ? $rectaj22 : 0), 2);
  $rectam23 = round(((((30 < floatval($_REQUEST['rectah23']) && floatval($_REQUEST['rectah23']) <= 60) && floatval($_REQUEST['rectag23']) <= 60) || ((30 < floatval($_REQUEST['rectag23']) && floatval($_REQUEST['rectag23']) <= 60) && floatval($_REQUEST['rectah23']) <= 60)) ? $rectaj23 : 0), 2);
  $rectam24 = round(((((30 < floatval($_REQUEST['rectah24']) && floatval($_REQUEST['rectah24']) <= 60) && floatval($_REQUEST['rectag24']) <= 60) || ((30 < floatval($_REQUEST['rectag24']) && floatval($_REQUEST['rectag24']) <= 60) && floatval($_REQUEST['rectah24']) <= 60)) ? $rectaj24 : 0), 2);
  $rectam25 = round(((((30 < floatval($_REQUEST['rectah25']) && floatval($_REQUEST['rectah25']) <= 60) && floatval($_REQUEST['rectag25']) <= 60) || ((30 < floatval($_REQUEST['rectag25']) && floatval($_REQUEST['rectag25']) <= 60) && floatval($_REQUEST['rectah25']) <= 60)) ? $rectaj25 : 0), 2);
  $rectam26 = round(((((30 < floatval($_REQUEST['rectah26']) && floatval($_REQUEST['rectah26']) <= 60) && floatval($_REQUEST['rectag26']) <= 60) || ((30 < floatval($_REQUEST['rectag26']) && floatval($_REQUEST['rectag26']) <= 60) && floatval($_REQUEST['rectah26']) <= 60)) ? $rectaj26 : 0), 2);
  $rectam27 = round(((((30 < floatval($_REQUEST['rectah27']) && floatval($_REQUEST['rectah27']) <= 60) && floatval($_REQUEST['rectag27']) <= 60) || ((30 < floatval($_REQUEST['rectag27']) && floatval($_REQUEST['rectag27']) <= 60) && floatval($_REQUEST['rectah27']) <= 60)) ? $rectaj27 : 0), 2);
  $rectam28 = round(((((30 < floatval($_REQUEST['rectah28']) && floatval($_REQUEST['rectah28']) <= 60) && floatval($_REQUEST['rectag28']) <= 60) || ((30 < floatval($_REQUEST['rectag28']) && floatval($_REQUEST['rectag28']) <= 60) && floatval($_REQUEST['rectah28']) <= 60)) ? $rectaj28 : 0), 2);
  $rectam29 = round(((((30 < floatval($_REQUEST['rectah29']) && floatval($_REQUEST['rectah29']) <= 60) && floatval($_REQUEST['rectag29']) <= 60) || ((30 < floatval($_REQUEST['rectag29']) && floatval($_REQUEST['rectag29']) <= 60) && floatval($_REQUEST['rectah29']) <= 60)) ? $rectaj29 : 0), 2);
  $rectam30 = round(((((30 < floatval($_REQUEST['rectah30']) && floatval($_REQUEST['rectah30']) <= 60) && floatval($_REQUEST['rectag30']) <= 60) || ((30 < floatval($_REQUEST['rectag30']) && floatval($_REQUEST['rectag30']) <= 60) && floatval($_REQUEST['rectah30']) <= 60)) ? $rectaj30 : 0), 2);
  $rectam31 = round(((((30 < floatval($_REQUEST['rectah31']) && floatval($_REQUEST['rectah31']) <= 60) && floatval($_REQUEST['rectag31']) <= 60) || ((30 < floatval($_REQUEST['rectag31']) && floatval($_REQUEST['rectag31']) <= 60) && floatval($_REQUEST['rectah31']) <= 60)) ? $rectaj31 : 0), 2);
  $rectam32 = round(((((30 < floatval($_REQUEST['rectah32']) && floatval($_REQUEST['rectah32']) <= 60) && floatval($_REQUEST['rectag32']) <= 60) || ((30 < floatval($_REQUEST['rectag32']) && floatval($_REQUEST['rectag32']) <= 60) && floatval($_REQUEST['rectah32']) <= 60)) ? $rectaj32 : 0), 2);
  $rectam33 = round(((((30 < floatval($_REQUEST['rectah33']) && floatval($_REQUEST['rectah33']) <= 60) && floatval($_REQUEST['rectag33']) <= 60) || ((30 < floatval($_REQUEST['rectag33']) && floatval($_REQUEST['rectag33']) <= 60) && floatval($_REQUEST['rectah33']) <= 60)) ? $rectaj33 : 0), 2);
  $rectam34 = round(((((30 < floatval($_REQUEST['rectah34']) && floatval($_REQUEST['rectah34']) <= 60) && floatval($_REQUEST['rectag34']) <= 60) || ((30 < floatval($_REQUEST['rectag34']) && floatval($_REQUEST['rectag34']) <= 60) && floatval($_REQUEST['rectah34']) <= 60)) ? $rectaj34 : 0), 2);
  $rectam35 = round(((((30 < floatval($_REQUEST['rectah35']) && floatval($_REQUEST['rectah35']) <= 60) && floatval($_REQUEST['rectag35']) <= 60) || ((30 < floatval($_REQUEST['rectag35']) && floatval($_REQUEST['rectag35']) <= 60) && floatval($_REQUEST['rectah35']) <= 60)) ? $rectaj35 : 0), 2);
  $rectam36 = round(((((30 < floatval($_REQUEST['rectah36']) && floatval($_REQUEST['rectah36']) <= 60) && floatval($_REQUEST['rectag36']) <= 60) || ((30 < floatval($_REQUEST['rectag36']) && floatval($_REQUEST['rectag36']) <= 60) && floatval($_REQUEST['rectah36']) <= 60)) ? $rectaj36 : 0), 2);
  $rectam37 = round(((((30 < floatval($_REQUEST['rectah37']) && floatval($_REQUEST['rectah37']) <= 60) && floatval($_REQUEST['rectag37']) <= 60) || ((30 < floatval($_REQUEST['rectag37']) && floatval($_REQUEST['rectag37']) <= 60) && floatval($_REQUEST['rectah37']) <= 60)) ? $rectaj37 : 0), 2);
  $rectam38 = round(((((30 < floatval($_REQUEST['rectah38']) && floatval($_REQUEST['rectah38']) <= 60) && floatval($_REQUEST['rectag38']) <= 60) || ((30 < floatval($_REQUEST['rectag38']) && floatval($_REQUEST['rectag38']) <= 60) && floatval($_REQUEST['rectah38']) <= 60)) ? $rectaj38 : 0), 2);
  $rectam39 = round(((((30 < floatval($_REQUEST['rectah39']) && floatval($_REQUEST['rectah39']) <= 60) && floatval($_REQUEST['rectag39']) <= 60) || ((30 < floatval($_REQUEST['rectag39']) && floatval($_REQUEST['rectag39']) <= 60) && floatval($_REQUEST['rectah39']) <= 60)) ? $rectaj39 : 0), 2);
  $rectam40 = round(((((30 < floatval($_REQUEST['rectah40']) && floatval($_REQUEST['rectah40']) <= 60) && floatval($_REQUEST['rectag40']) <= 60) || ((30 < floatval($_REQUEST['rectag40']) && floatval($_REQUEST['rectag40']) <= 60) && floatval($_REQUEST['rectah40']) <= 60)) ? $rectaj40 : 0), 2);
  $rectam41 = round(((((30 < floatval($_REQUEST['rectah41']) && floatval($_REQUEST['rectah41']) <= 60) && floatval($_REQUEST['rectag41']) <= 60) || ((30 < floatval($_REQUEST['rectag41']) && floatval($_REQUEST['rectag41']) <= 60) && floatval($_REQUEST['rectah41']) <= 60)) ? $rectaj41 : 0), 2);
  $rectam42 = round(((((30 < floatval($_REQUEST['rectah42']) && floatval($_REQUEST['rectah42']) <= 60) && floatval($_REQUEST['rectag42']) <= 60) || ((30 < floatval($_REQUEST['rectag42']) && floatval($_REQUEST['rectag42']) <= 60) && floatval($_REQUEST['rectah42']) <= 60)) ? $rectaj42 : 0), 2);
  $rectam43 = round(((((30 < floatval($_REQUEST['rectah43']) && floatval($_REQUEST['rectah43']) <= 60) && floatval($_REQUEST['rectag43']) <= 60) || ((30 < floatval($_REQUEST['rectag43']) && floatval($_REQUEST['rectag43']) <= 60) && floatval($_REQUEST['rectah43']) <= 60)) ? $rectaj43 : 0), 2);


  // Column 40
  $rectan11 = round(((((60 < floatval($_REQUEST['rectah11']) && floatval($_REQUEST['rectah11']) <= 90) && floatval($_REQUEST['rectag11']) <= 90) || ((60 < floatval($_REQUEST['rectag11']) && floatval($_REQUEST['rectag11']) <= 90) && floatval($_REQUEST['rectah11']) <= 90)) ? floatval($rectaj11) : 0), 2);
  $rectan12 = round(((((60 < floatval($_REQUEST['rectah12']) && floatval($_REQUEST['rectah12']) <= 90) && floatval($_REQUEST['rectag12']) <= 90) || ((60 < floatval($_REQUEST['rectag12']) && floatval($_REQUEST['rectag12']) <= 90) && floatval($_REQUEST['rectah12']) <= 90)) ? floatval($rectaj12) : 0), 2);
  $rectan13 = round(((((60 < floatval($_REQUEST['rectah13']) && floatval($_REQUEST['rectah13']) <= 90) && floatval($_REQUEST['rectag13']) <= 90) || ((60 < floatval($_REQUEST['rectag13']) && floatval($_REQUEST['rectag13']) <= 90) && floatval($_REQUEST['rectah13']) <= 90)) ? floatval($rectaj13) : 0), 2);
  $rectan14 = round(((((60 < floatval($_REQUEST['rectah14']) && floatval($_REQUEST['rectah14']) <= 90) && floatval($_REQUEST['rectag14']) <= 90) || ((60 < floatval($_REQUEST['rectag14']) && floatval($_REQUEST['rectag14']) <= 90) && floatval($_REQUEST['rectah14']) <= 90)) ? floatval($rectaj14) : 0), 2);
  $rectan15 = round(((((60 < floatval($_REQUEST['rectah15']) && floatval($_REQUEST['rectah15']) <= 90) && floatval($_REQUEST['rectag15']) <= 90) || ((60 < floatval($_REQUEST['rectag15']) && floatval($_REQUEST['rectag15']) <= 90) && floatval($_REQUEST['rectah15']) <= 90)) ? floatval($rectaj15) : 0), 2);
  $rectan16 = round(((((60 < floatval($_REQUEST['rectah16']) && floatval($_REQUEST['rectah16']) <= 90) && floatval($_REQUEST['rectag16']) <= 90) || ((60 < floatval($_REQUEST['rectag16']) && floatval($_REQUEST['rectag16']) <= 90) && floatval($_REQUEST['rectah16']) <= 90)) ? floatval($rectaj16) : 0), 2);
  $rectan17 = round(((((60 < floatval($_REQUEST['rectah17']) && floatval($_REQUEST['rectah17']) <= 90) && floatval($_REQUEST['rectag17']) <= 90) || ((60 < floatval($_REQUEST['rectag17']) && floatval($_REQUEST['rectag17']) <= 90) && floatval($_REQUEST['rectah17']) <= 90)) ? floatval($rectaj17) : 0), 2);
  $rectan18 = round(((((60 < floatval($_REQUEST['rectah18']) && floatval($_REQUEST['rectah18']) <= 90) && floatval($_REQUEST['rectag18']) <= 90) || ((60 < floatval($_REQUEST['rectag18']) && floatval($_REQUEST['rectag18']) <= 90) && floatval($_REQUEST['rectah18']) <= 90)) ? floatval($rectaj18) : 0), 2);
  $rectan19 = round(((((60 < floatval($_REQUEST['rectah19']) && floatval($_REQUEST['rectah19']) <= 90) && floatval($_REQUEST['rectag19']) <= 90) || ((60 < floatval($_REQUEST['rectag19']) && floatval($_REQUEST['rectag19']) <= 90) && floatval($_REQUEST['rectah19']) <= 90)) ? floatval($rectaj19) : 0), 2);
  $rectan20 = round(((((60 < floatval($_REQUEST['rectah20']) && floatval($_REQUEST['rectah20']) <= 90) && floatval($_REQUEST['rectag20']) <= 90) || ((60 < floatval($_REQUEST['rectag20']) && floatval($_REQUEST['rectag20']) <= 90) && floatval($_REQUEST['rectah20']) <= 90)) ? floatval($rectaj20) : 0), 2);
  $rectan21 = round(((((60 < floatval($_REQUEST['rectah21']) && floatval($_REQUEST['rectah21']) <= 90) && floatval($_REQUEST['rectag21']) <= 90) || ((60 < floatval($_REQUEST['rectag21']) && floatval($_REQUEST['rectag21']) <= 90) && floatval($_REQUEST['rectah21']) <= 90)) ? floatval($rectaj21) : 0), 2);
  $rectan22 = round(((((60 < floatval($_REQUEST['rectah22']) && floatval($_REQUEST['rectah22']) <= 90) && floatval($_REQUEST['rectag22']) <= 90) || ((60 < floatval($_REQUEST['rectag22']) && floatval($_REQUEST['rectag22']) <= 90) && floatval($_REQUEST['rectah22']) <= 90)) ? floatval($rectaj22) : 0), 2);
  $rectan23 = round(((((60 < floatval($_REQUEST['rectah23']) && floatval($_REQUEST['rectah23']) <= 90) && floatval($_REQUEST['rectag23']) <= 90) || ((60 < floatval($_REQUEST['rectag23']) && floatval($_REQUEST['rectag23']) <= 90) && floatval($_REQUEST['rectah23']) <= 90)) ? floatval($rectaj23) : 0), 2);
  $rectan24 = round(((((60 < floatval($_REQUEST['rectah24']) && floatval($_REQUEST['rectah24']) <= 90) && floatval($_REQUEST['rectag24']) <= 90) || ((60 < floatval($_REQUEST['rectag24']) && floatval($_REQUEST['rectag24']) <= 90) && floatval($_REQUEST['rectah24']) <= 90)) ? floatval($rectaj24) : 0), 2);
  $rectan25 = round(((((60 < floatval($_REQUEST['rectah25']) && floatval($_REQUEST['rectah25']) <= 90) && floatval($_REQUEST['rectag25']) <= 90) || ((60 < floatval($_REQUEST['rectag25']) && floatval($_REQUEST['rectag25']) <= 90) && floatval($_REQUEST['rectah25']) <= 90)) ? floatval($rectaj25) : 0), 2);
  $rectan26 = round(((((60 < floatval($_REQUEST['rectah26']) && floatval($_REQUEST['rectah26']) <= 90) && floatval($_REQUEST['rectag26']) <= 90) || ((60 < floatval($_REQUEST['rectag26']) && floatval($_REQUEST['rectag26']) <= 90) && floatval($_REQUEST['rectah26']) <= 90)) ? floatval($rectaj26) : 0), 2);
  $rectan27 = round(((((60 < floatval($_REQUEST['rectah27']) && floatval($_REQUEST['rectah27']) <= 90) && floatval($_REQUEST['rectag27']) <= 90) || ((60 < floatval($_REQUEST['rectag27']) && floatval($_REQUEST['rectag27']) <= 90) && floatval($_REQUEST['rectah27']) <= 90)) ? floatval($rectaj27) : 0), 2);
  $rectan28 = round(((((60 < floatval($_REQUEST['rectah28']) && floatval($_REQUEST['rectah28']) <= 90) && floatval($_REQUEST['rectag28']) <= 90) || ((60 < floatval($_REQUEST['rectag28']) && floatval($_REQUEST['rectag28']) <= 90) && floatval($_REQUEST['rectah28']) <= 90)) ? floatval($rectaj28) : 0), 2);
  $rectan29 = round(((((60 < floatval($_REQUEST['rectah29']) && floatval($_REQUEST['rectah29']) <= 90) && floatval($_REQUEST['rectag29']) <= 90) || ((60 < floatval($_REQUEST['rectag29']) && floatval($_REQUEST['rectag29']) <= 90) && floatval($_REQUEST['rectah29']) <= 90)) ? floatval($rectaj29) : 0), 2);
  $rectan30 = round(((((60 < floatval($_REQUEST['rectah30']) && floatval($_REQUEST['rectah30']) <= 90) && floatval($_REQUEST['rectag30']) <= 90) || ((60 < floatval($_REQUEST['rectag30']) && floatval($_REQUEST['rectag30']) <= 90) && floatval($_REQUEST['rectah30']) <= 90)) ? floatval($rectaj30) : 0), 2);
  $rectan31 = round(((((60 < floatval($_REQUEST['rectah31']) && floatval($_REQUEST['rectah31']) <= 90) && floatval($_REQUEST['rectag31']) <= 90) || ((60 < floatval($_REQUEST['rectag31']) && floatval($_REQUEST['rectag31']) <= 90) && floatval($_REQUEST['rectah31']) <= 90)) ? floatval($rectaj31) : 0), 2);
  $rectan32 = round(((((60 < floatval($_REQUEST['rectah32']) && floatval($_REQUEST['rectah32']) <= 90) && floatval($_REQUEST['rectag32']) <= 90) || ((60 < floatval($_REQUEST['rectag32']) && floatval($_REQUEST['rectag32']) <= 90) && floatval($_REQUEST['rectah32']) <= 90)) ? floatval($rectaj32) : 0), 2);
  $rectan33 = round(((((60 < floatval($_REQUEST['rectah33']) && floatval($_REQUEST['rectah33']) <= 90) && floatval($_REQUEST['rectag33']) <= 90) || ((60 < floatval($_REQUEST['rectag33']) && floatval($_REQUEST['rectag33']) <= 90) && floatval($_REQUEST['rectah33']) <= 90)) ? floatval($rectaj33) : 0), 2);
  $rectan34 = round(((((60 < floatval($_REQUEST['rectah34']) && floatval($_REQUEST['rectah34']) <= 90) && floatval($_REQUEST['rectag34']) <= 90) || ((60 < floatval($_REQUEST['rectag34']) && floatval($_REQUEST['rectag34']) <= 90) && floatval($_REQUEST['rectah34']) <= 90)) ? floatval($rectaj34) : 0), 2);
  $rectan35 = round(((((60 < floatval($_REQUEST['rectah35']) && floatval($_REQUEST['rectah35']) <= 90) && floatval($_REQUEST['rectag35']) <= 90) || ((60 < floatval($_REQUEST['rectag35']) && floatval($_REQUEST['rectag35']) <= 90) && floatval($_REQUEST['rectah35']) <= 90)) ? floatval($rectaj35) : 0), 2);
  $rectan36 = round(((((60 < floatval($_REQUEST['rectah36']) && floatval($_REQUEST['rectah36']) <= 90) && floatval($_REQUEST['rectag36']) <= 90) || ((60 < floatval($_REQUEST['rectag36']) && floatval($_REQUEST['rectag36']) <= 90) && floatval($_REQUEST['rectah36']) <= 90)) ? floatval($rectaj36) : 0), 2);
  $rectan37 = round(((((60 < floatval($_REQUEST['rectah37']) && floatval($_REQUEST['rectah37']) <= 90) && floatval($_REQUEST['rectag37']) <= 90) || ((60 < floatval($_REQUEST['rectag37']) && floatval($_REQUEST['rectag37']) <= 90) && floatval($_REQUEST['rectah37']) <= 90)) ? floatval($rectaj37) : 0), 2);
  $rectan38 = round(((((60 < floatval($_REQUEST['rectah38']) && floatval($_REQUEST['rectah38']) <= 90) && floatval($_REQUEST['rectag38']) <= 90) || ((60 < floatval($_REQUEST['rectag38']) && floatval($_REQUEST['rectag38']) <= 90) && floatval($_REQUEST['rectah38']) <= 90)) ? floatval($rectaj38) : 0), 2);
  $rectan39 = round(((((60 < floatval($_REQUEST['rectah39']) && floatval($_REQUEST['rectah39']) <= 90) && floatval($_REQUEST['rectag39']) <= 90) || ((60 < floatval($_REQUEST['rectag39']) && floatval($_REQUEST['rectag39']) <= 90) && floatval($_REQUEST['rectah39']) <= 90)) ? floatval($rectaj39) : 0), 2);
  $rectan40 = round(((((60 < floatval($_REQUEST['rectah40']) && floatval($_REQUEST['rectah40']) <= 90) && floatval($_REQUEST['rectag40']) <= 90) || ((60 < floatval($_REQUEST['rectag40']) && floatval($_REQUEST['rectag40']) <= 90) && floatval($_REQUEST['rectah40']) <= 90)) ? floatval($rectaj40) : 0), 2);
  $rectan41 = round(((((60 < floatval($_REQUEST['rectah41']) && floatval($_REQUEST['rectah41']) <= 90) && floatval($_REQUEST['rectag41']) <= 90) || ((60 < floatval($_REQUEST['rectag41']) && floatval($_REQUEST['rectag41']) <= 90) && floatval($_REQUEST['rectah41']) <= 90)) ? floatval($rectaj41) : 0), 2);
  $rectan42 = round(((((60 < floatval($_REQUEST['rectah42']) && floatval($_REQUEST['rectah42']) <= 90) && floatval($_REQUEST['rectag42']) <= 90) || ((60 < floatval($_REQUEST['rectag42']) && floatval($_REQUEST['rectag42']) <= 90) && floatval($_REQUEST['rectah42']) <= 90)) ? floatval($rectaj42) : 0), 2);
  $rectan43 = round(((((60 < floatval($_REQUEST['rectah43']) && floatval($_REQUEST['rectah43']) <= 90) && floatval($_REQUEST['rectag43']) <= 90) || ((60 < floatval($_REQUEST['rectag43']) && floatval($_REQUEST['rectag43']) <= 90) && floatval($_REQUEST['rectah43']) <= 90)) ? floatval($rectaj43) : 0), 2);

  // Column 41
  $rectao11 = round((((90 < floatval($_REQUEST['rectah11'])) || (90 < floatval($_REQUEST['rectag11']))) ? $rectaj11 : 0), 2);
  $rectao12 = round((((90 < floatval($_REQUEST['rectah12'])) || (90 < floatval($_REQUEST['rectag12']))) ? $rectaj12 : 0), 2);
  $rectao13 = round((((90 < floatval($_REQUEST['rectah13'])) || (90 < floatval($_REQUEST['rectag13']))) ? $rectaj13 : 0), 2);
  $rectao14 = round((((90 < floatval($_REQUEST['rectah14'])) || (90 < floatval($_REQUEST['rectag14']))) ? $rectaj14 : 0), 2);
  $rectao15 = round((((90 < floatval($_REQUEST['rectah15'])) || (90 < floatval($_REQUEST['rectag15']))) ? $rectaj15 : 0), 2);
  $rectao16 = round((((90 < floatval($_REQUEST['rectah16'])) || (90 < floatval($_REQUEST['rectag16']))) ? $rectaj16 : 0), 2);
  $rectao17 = round((((90 < floatval($_REQUEST['rectah17'])) || (90 < floatval($_REQUEST['rectag17']))) ? $rectaj17 : 0), 2);
  $rectao18 = round((((90 < floatval($_REQUEST['rectah18'])) || (90 < floatval($_REQUEST['rectag18']))) ? $rectaj18 : 0), 2);
  $rectao19 = round((((90 < floatval($_REQUEST['rectah19'])) || (90 < floatval($_REQUEST['rectag19']))) ? $rectaj19 : 0), 2);
  $rectao20 = round((((90 < floatval($_REQUEST['rectah20'])) || (90 < floatval($_REQUEST['rectag20']))) ? $rectaj20 : 0), 2);
  $rectao21 = round((((90 < floatval($_REQUEST['rectah21'])) || (90 < floatval($_REQUEST['rectag21']))) ? $rectaj21 : 0), 2);
  $rectao22 = round((((90 < floatval($_REQUEST['rectah22'])) || (90 < floatval($_REQUEST['rectag22']))) ? $rectaj22 : 0), 2);
  $rectao23 = round((((90 < floatval($_REQUEST['rectah23'])) || (90 < floatval($_REQUEST['rectag23']))) ? $rectaj23 : 0), 2);
  $rectao24 = round((((90 < floatval($_REQUEST['rectah24'])) || (90 < floatval($_REQUEST['rectag24']))) ? $rectaj24 : 0), 2);
  $rectao25 = round((((90 < floatval($_REQUEST['rectah25'])) || (90 < floatval($_REQUEST['rectag25']))) ? $rectaj25 : 0), 2);
  $rectao26 = round((((90 < floatval($_REQUEST['rectah26'])) || (90 < floatval($_REQUEST['rectag26']))) ? $rectaj26 : 0), 2);
  $rectao27 = round((((90 < floatval($_REQUEST['rectah27'])) || (90 < floatval($_REQUEST['rectag27']))) ? $rectaj27 : 0), 2);
  $rectao28 = round((((90 < floatval($_REQUEST['rectah28'])) || (90 < floatval($_REQUEST['rectag28']))) ? $rectaj28 : 0), 2);
  $rectao29 = round((((90 < floatval($_REQUEST['rectah29'])) || (90 < floatval($_REQUEST['rectag29']))) ? $rectaj29 : 0), 2);
  $rectao30 = round((((90 < floatval($_REQUEST['rectah30'])) || (90 < floatval($_REQUEST['rectag30']))) ? $rectaj30 : 0), 2);
  $rectao31 = round((((90 < floatval($_REQUEST['rectah31'])) || (90 < floatval($_REQUEST['rectag31']))) ? $rectaj31 : 0), 2);
  $rectao32 = round((((90 < floatval($_REQUEST['rectah32'])) || (90 < floatval($_REQUEST['rectag32']))) ? $rectaj32 : 0), 2);
  $rectao33 = round((((90 < floatval($_REQUEST['rectah33'])) || (90 < floatval($_REQUEST['rectag33']))) ? $rectaj33 : 0), 2);
  $rectao34 = round((((90 < floatval($_REQUEST['rectah34'])) || (90 < floatval($_REQUEST['rectag34']))) ? $rectaj34 : 0), 2);
  $rectao35 = round((((90 < floatval($_REQUEST['rectah35'])) || (90 < floatval($_REQUEST['rectag35']))) ? $rectaj35 : 0), 2);
  $rectao36 = round((((90 < floatval($_REQUEST['rectah36'])) || (90 < floatval($_REQUEST['rectag36']))) ? $rectaj36 : 0), 2);
  $rectao37 = round((((90 < floatval($_REQUEST['rectah37'])) || (90 < floatval($_REQUEST['rectag37']))) ? $rectaj37 : 0), 2);
  $rectao38 = round((((90 < floatval($_REQUEST['rectah38'])) || (90 < floatval($_REQUEST['rectag38']))) ? $rectaj38 : 0), 2);
  $rectao39 = round((((90 < floatval($_REQUEST['rectah39'])) || (90 < floatval($_REQUEST['rectag39']))) ? $rectaj39 : 0), 2);
  $rectao40 = round((((90 < floatval($_REQUEST['rectah40'])) || (90 < floatval($_REQUEST['rectag40']))) ? $rectaj40 : 0), 2);
  $rectao41 = round((((90 < floatval($_REQUEST['rectah41'])) || (90 < floatval($_REQUEST['rectag41']))) ? $rectaj41 : 0), 2);
  $rectao42 = round((((90 < floatval($_REQUEST['rectah42'])) || (90 < floatval($_REQUEST['rectag42']))) ? $rectaj42 : 0), 2);
  $rectao43 = round((((90 < floatval($_REQUEST['rectah43'])) || (90 < floatval($_REQUEST['rectag43']))) ? $rectaj43 : 0), 2);

  // table 1 work below
  $rectg6array = [$rectg11, $rectg12, $rectg13, $rectg14, $rectg15,
                  $rectg16, $rectg17, $rectg18, $rectg19, $rectg20,
                  $rectg21, $rectg22, $rectg23, $rectg24, $rectg25,
                  $rectg26, $rectg27, $rectg28, $rectg29, $rectg30,
                  $rectg31, $rectg32, $rectg33, $rectg34, $rectg35,
                  $rectg36, $rectg37, $rectg38, $rectg39, $rectg40,
                  $rectg41, $rectg42, $rectg43];
  $rectg6 = array_sum($rectg6array);

  $recth6array = [$recth11, $recth12, $recth13, $recth14, $recth15,
                  $recth16, $recth17, $recth18, $recth19, $recth20,
                  $recth21, $recth22, $recth23, $recth24, $recth25,
                  $recth26, $recth27, $recth28, $recth29, $recth30,
                  $recth31, $recth32, $recth33, $recth34, $recth35,
                  $recth36, $recth37, $recth38, $recth39, $recth40,
                  $recth41, $recth42, $recth43];
  $recth6 = array_sum($recth6array);

  $recti6array = [$recti11, $recti12, $recti13, $recti14, $recti15,
                  $recti16, $recti17, $recti18, $recti19, $recti20,
                  $recti21, $recti22, $recti23, $recti24, $recti25,
                  $recti26, $recti27, $recti28, $recti29, $recti30,
                  $recti31, $recti32, $recti33, $recti34, $recti35,
                  $recti36, $recti37, $recti38, $recti39, $recti40,
                  $recti41, $recti42, $recti43];
  $recti6 = array_sum($recti6array);
  
  $rectj6array = [$rectj11, $rectj12, $rectj13, $rectj14, $rectj15,
                  $rectj16, $rectj17, $rectj18, $rectj19, $rectj20,
                  $rectj21, $rectj22, $rectj23, $rectj24, $rectj25,
                  $rectj26, $rectj27, $rectj28, $rectj29, $rectj30,
                  $rectj31, $rectj32, $rectj33, $rectj34, $rectj35,
                  $rectj36, $rectj37, $rectj38, $rectj39, $rectj40,
                  $rectj41, $rectj42, $rectj43];
  $rectj6 = array_sum($rectj6array);

  $rectk6array = [$rectk11, $rectk12, $rectk13, $rectk14, $rectk15,
                  $rectk16, $rectk17, $rectk18, $rectk19, $rectk20,
                  $rectk21, $rectk22, $rectk23, $rectk24, $rectk25,
                  $rectk26, $rectk27, $rectk28, $rectk29, $rectk30,
                  $rectk31, $rectk32, $rectk33, $rectk34, $rectk35,
                  $rectk36, $rectk37, $rectk38, $rectk39, $rectk40,
                  $rectk41, $rectk42, $rectk43];
  $rectk6 = array_sum($rectk6array);

  $rectf6array = [$rectg6, $recth6, $recti6, $rectj6, $rectk6];
  $rectf6 = round(array_sum($rectf6array), 2);
   // -----------------------------------------------------------------

  $rectq6array = [$rectq11, $rectq12, $rectq13, $rectq14, $rectq15,
                  $rectq16, $rectq17, $rectq18, $rectq19, $rectq20,
                  $rectq21, $rectq22, $rectq23, $rectq24, $rectq25,
                  $rectq26, $rectq27, $rectq28, $rectq29, $rectq30,
                  $rectq31, $rectq32, $rectq33, $rectq34, $rectq35,
                  $rectq36, $rectq37, $rectq38, $rectq39, $rectq40,
                  $rectq41, $rectq42, $rectq43];
  $rectq6 = array_sum($rectq6array);
  
  $rectr6array = [$rectr11, $rectr12, $rectr13, $rectr14, $rectr15,
                  $rectr16, $rectr17, $rectr18, $rectr19, $rectr20,
                  $rectr21, $rectr22, $rectr23, $rectr24, $rectr25,
                  $rectr26, $rectr27, $rectr28, $rectr29, $rectr30,
                  $rectr31, $rectr32, $rectr33, $rectr34, $rectr35,
                  $rectr36, $rectr37, $rectr38, $rectr39, $rectr40,
                  $rectr41, $rectr42, $rectr43];
  $rectr6 = array_sum($rectr6array);

  $rects6array = [$rects11, $rects12, $rects13, $rects14, $rects15,
                  $rects16, $rects17, $rects18, $rects19, $rects20,
                  $rects21, $rects22, $rects23, $rects24, $rects25,
                  $rects26, $rects27, $rects28, $rects29, $rects30,
                  $rects31, $rects32, $rects33, $rects34, $rects35,
                  $rects36, $rects37, $rects38, $rects39, $rects40,
                  $rects41, $rects42, $rects43];
  $rects6 = array_sum($rects6array);
  $rectt6array = [$rectt11, $rectt12, $rectt13, $rectt14, $rectt15,
                  $rectt16, $rectt17, $rectt18, $rectt19, $rectt20,
                  $rectt21, $rectt22, $rectt23, $rectt24, $rectt25,
                  $rectt26, $rectt27, $rectt28, $rectt29, $rectt30,
                  $rectt31, $rectt32, $rectt33, $rectt34, $rectt35,
                  $rectt36, $rectt37, $rectt38, $rectt39, $rectt40,
                  $rectt41, $rectt42, $rectt43];
  $rectt6 = array_sum($rectt6array);

  $rectu6array = [$rectu11, $rectu12, $rectu13, $rectu14, $rectu15,
                  $rectu16, $rectu17, $rectu18, $rectu19, $rectu20,
                  $rectu21, $rectu22, $rectu23, $rectu24, $rectu25,
                  $rectu26, $rectu27, $rectu28, $rectu29, $rectu30,
                  $rectu31, $rectu32, $rectu33, $rectu34, $rectu35,
                  $rectu36, $rectu37, $rectu38, $rectu39, $rectu40,
                  $rectu41, $rectu42, $rectu43];
  $rectu6 = array_sum($rectu6array);
 
   $rectp6array = [$rectq6, $rectr6, $rects6, $rectt6, $rectu6];
   $rectp6 = round(array_sum($rectp6array), 2);
 
   // --------------------------------------------------------------------------
 
  $rectaa6array =[$rectaa11, $rectaa12, $rectaa13, $rectaa14, $rectaa15,
                  $rectaa16, $rectaa17, $rectaa18, $rectaa19, $rectaa20,
                  $rectaa21, $rectaa22, $rectaa23, $rectaa24, $rectaa25,
                  $rectaa26, $rectaa27, $rectaa28, $rectaa29, $rectaa30,
                  $rectaa31, $rectaa32, $rectaa33, $rectaa34, $rectaa35,
                  $rectaa36, $rectaa37, $rectaa38, $rectaa39, $rectaa40,
                  $rectaa41, $rectaa42, $rectaa43];
  $rectaa6 = array_sum($rectaa6array);

  $rectab6array =[$rectab11, $rectab12, $rectab13, $rectab14, $rectab15,
                  $rectab16, $rectab17, $rectab18, $rectab19, $rectab20,
                  $rectab21, $rectab22, $rectab23, $rectab24, $rectab25,
                  $rectab26, $rectab27, $rectab28, $rectab29, $rectab30,
                  $rectab31, $rectab32, $rectab33, $rectab34, $rectab35,
                  $rectab36, $rectab37, $rectab38, $rectab39, $rectab40,
                  $rectab41, $rectab42, $rectab43];
  $rectab6 = array_sum($rectab6array);

  $rectac6array =[$rectac11, $rectac12, $rectac13, $rectac14, $rectac15,
                  $rectac16, $rectac17, $rectac18, $rectac19, $rectac20,
                  $rectac21, $rectac22, $rectac23, $rectac24, $rectac25,
                  $rectac26, $rectac27, $rectac28, $rectac29, $rectac30,
                  $rectac31, $rectac32, $rectac33, $rectac34, $rectac35,
                  $rectac36, $rectac37, $rectac38, $rectac39, $rectac40,
                  $rectac41, $rectac42, $rectac43];
  $rectac6 = array_sum($rectac6array);

  $rectad6array =[$rectad11, $rectad12, $rectad13, $rectad14, $rectad15,
                  $rectad16, $rectad17, $rectad18, $rectad19, $rectad20,
                  $rectad21, $rectad22, $rectad23, $rectad24, $rectad25,
                  $rectad26, $rectad27, $rectad28, $rectad29, $rectad30,
                  $rectad31, $rectad32, $rectad33, $rectad34, $rectad35,
                  $rectad36, $rectad37, $rectad38, $rectad39, $rectad40,
                  $rectad41, $rectad42, $rectad43];
  $rectad6 = array_sum($rectad6array);

  $rectae6array =[$rectae11, $rectae12, $rectae13, $rectae14, $rectae15,
                  $rectae16, $rectae17, $rectae18, $rectae19, $rectae20,
                  $rectae21, $rectae22, $rectae23, $rectae24, $rectae25,
                  $rectae26, $rectae27, $rectae28, $rectae29, $rectae30,
                  $rectae31, $rectae32, $rectae33, $rectae34, $rectae35,
                  $rectae36, $rectae37, $rectae38, $rectae39, $rectae40,
                  $rectae41, $rectae42, $rectae43];
  $rectae6 = array_sum($rectae6array);
 
   $rectz6array = [$rectaa6, $rectab6, $rectac6, $rectad6, $rectae6];
   $rectz6 = round(array_sum($rectz6array), 2);
 
   // ----------------------------------------------------------------------
 
  $rectak6array =[$rectak11, $rectak12, $rectak13, $rectak14, $rectak15,
                  $rectak16, $rectak17, $rectak18, $rectak19, $rectak20,
                  $rectak21, $rectak22, $rectak23, $rectak24, $rectak25,
                  $rectak26, $rectak27, $rectak28, $rectak29, $rectak30,
                  $rectak31, $rectak32, $rectak33, $rectak34, $rectak35,
                  $rectak36, $rectak37, $rectak38, $rectak39, $rectak40,
                  $rectak41, $rectak42, $rectak43];
  $rectak6 = array_sum($rectak6array);

  $rectal6array =[$rectal11, $rectal12, $rectal13, $rectal14, $rectal15,
                  $rectal16, $rectal17, $rectal18, $rectal19, $rectal20,
                  $rectal21, $rectal22, $rectal23, $rectal24, $rectal25,
                  $rectal26, $rectal27, $rectal28, $rectal29, $rectal30,
                  $rectal31, $rectal32, $rectal33, $rectal34, $rectal35,
                  $rectal36, $rectal37, $rectal38, $rectal39, $rectal40,
                  $rectal41, $rectal42, $rectal43];
  $rectal6 = array_sum($rectal6array);

  $rectam6array =[$rectam11, $rectam12, $rectam13, $rectam14, $rectam15,
                  $rectam16, $rectam17, $rectam18, $rectam19, $rectam20,
                  $rectam21, $rectam22, $rectam23, $rectam24, $rectam25,
                  $rectam26, $rectam27, $rectam28, $rectam29, $rectam30,
                  $rectam31, $rectam32, $rectam33, $rectam34, $rectam35,
                  $rectam36, $rectam37, $rectam38, $rectam39, $rectam40,
                  $rectam41, $rectam42, $rectam43];
  $rectam6 = array_sum($rectam6array);

  $rectan6array =[$rectan11, $rectan12, $rectan13, $rectan14, $rectan15,
                  $rectan16, $rectan17, $rectan18, $rectan19, $rectan20,
                  $rectan21, $rectan22, $rectan23, $rectan24, $rectan25,
                  $rectan26, $rectan27, $rectan28, $rectan29, $rectan30,
                  $rectan31, $rectan32, $rectan33, $rectan34, $rectan35,
                  $rectan36, $rectan37, $rectan38, $rectan39, $rectan40,
                  $rectan41, $rectan42, $rectan43];
  $rectan6 = array_sum($rectan6array);

  $rectao6array =[$rectao11, $rectao12, $rectao13, $rectao14, $rectao15,
                  $rectao16, $rectao17, $rectao18, $rectao19, $rectao20,
                  $rectao21, $rectao22, $rectao23, $rectao24, $rectao25,
                  $rectao26, $rectao27, $rectao28, $rectao29, $rectao30,
                  $rectao31, $rectao32, $rectao33, $rectao34, $rectao35,
                  $rectao36, $rectao37, $rectao38, $rectao39, $rectao40,
                  $rectao41, $rectao42, $rectao43];
  $rectao6 = array_sum($rectao6array);
 
   $rectaj6array = [$rectak6, $rectal6, $rectam6, $rectan6, $rectao6];
   $rectaj6 = round(array_sum($rectaj6array), 2);
 
  $rectg5 = round((floatval($rectg6) * 1), 2);
  $recth5 = round((floatval($recth6) * 1.2), 2);
  $recti5 = round((floatval($recti6) * 1.4), 2);
  $rectj5 = round((floatval($rectj6) * 1.7), 2);
  $rectk5 = round((floatval($rectk6) * 2.2), 2);
  $rectf5array = [$rectg5, $recth5, $recti5, $rectj5, $rectk5];
  $rectf5 = round(array_sum($rectf5array), 2);

  $rectq5 = round((floatval($rectq6) * 1), 2);
  $rectr5 = round((floatval($rectr6) * 1.2), 2);
  $rects5 = round((floatval($rects6) * 1.4), 2);
  $rectt5 = round((floatval($rectt6) * 1.7), 2);
  $rectu5 = round((floatval($rectu6) * 2.2), 2);
  $rectp5array = [$rectq5, $rectr5, $rects5, $rectt5, $rectu5];
  $rectp5 = round(array_sum($rectp5array), 2);

  $rectaa5 = round((floatval($rectaa6) * 1), 2);
  $rectab5 = round((floatval($rectab6) * 1.2), 2);
  $rectac5 = round((floatval($rectac6) * 1.4), 2);
  $rectad5 = round((floatval($rectad6) * 1.7), 2);
  $rectae5 = round((floatval($rectae6) * 2.2), 2);
  $rectz5array = [$rectaa5, $rectab5, $rectac5, $rectad5, $rectae5];
  $rectz5 = round(array_sum($rectz5array), 2);

  $rectak5 = round((floatval($rectak6) * 1), 2);
  $rectal5 = round((floatval($rectal6) * 1.2), 2);
  $rectam5 = round((floatval($rectam6) * 1.4), 2);
  $rectan5 = round((floatval($rectan6) * 1.7), 2);
  $rectao5 = round((floatval($rectao6) * 2.2), 2);
  $rectaj5array = [$rectak5, $rectal5, $rectam5, $rectan5, $rectao5];
  $rectaj5 = round(array_sum($rectaj5array), 2);


  // ROW 3
  $rectf3 = round((floatval($rectf5) * 0.24) + floatval($rectf5), 2);
  $rectg3 = round((floatval($rectg5) * 0.24) + floatval($rectg5), 2);
  $recth3 = round((floatval($recth5) * 0.24) + floatval($recth5), 2);
  $recti3 = round((floatval($recti5) * 0.24) + floatval($recti5), 2);
  $rectj3 = round((floatval($rectj5) * 0.24) + floatval($rectj5), 2);
  $rectk3 = round((floatval($rectk5) * 0.24) + floatval($rectk5), 2);
  $rectp3 = round((floatval($rectp5) * 0.24) + floatval($rectp5), 2);
  $rectq3 = round((floatval($rectq5) * 0.24) + floatval($rectq5), 2);
  $rectr3 = round((floatval($rectr5) * 0.24) + floatval($rectr5), 2);
  $rects3 = round((floatval($rects5) * 0.24) + floatval($rects5), 2);
  $rectt3 = round((floatval($rectt5) * 0.24) + floatval($rectt5), 2);
  $rectu3 = round((floatval($rectu5) * 0.24) + floatval($rectu5), 2);
  $rectz3 = round((floatval($rectz5) * 0.24) + floatval($rectz5), 2);
  $rectaa3 = round((floatval($rectaa5) * 0.24) + floatval($rectaa5), 2);
  $rectab3 = round((floatval($rectab5) * 0.24) + floatval($rectab5), 2);
  $rectac3 = round((floatval($rectac5) * 0.24) + floatval($rectac5), 2);
  $rectad3 = round((floatval($rectad5) * 0.24) + floatval($rectad5), 2);
  $rectae3 = round((floatval($rectae5) * 0.24) + floatval($rectae5), 2);
  $rectaj3 = round((floatval($rectaj5) * 0.24) + floatval($rectaj5), 2);
  $rectak3 = round((floatval($rectak5) * 0.24) + floatval($rectak5), 2);
  $rectal3 = round((floatval($rectal5) * 0.24) + floatval($rectal5), 2);
  $rectam3 = round((floatval($rectam5) * 0.24) + floatval($rectam5), 2);
  $rectan3 = round((floatval($rectan5) * 0.24) + floatval($rectan5), 2);
  $rectao3 = round((floatval($rectao5) * 0.24) + floatval($rectao5), 2);
  // ROW 4
  $rectf4 = round((floatval($rectf6) * 0.24) + floatval($rectf6), 2);
  $rectg4 = round((floatval($rectg6) * 0.24) + floatval($rectg6), 2);
  $recth4 = round((floatval($recth6) * 0.24) + floatval($recth6), 2);
  $recti4 = round((floatval($recti6) * 0.24) + floatval($recti6), 2);
  $rectj4 = round((floatval($rectj6) * 0.24) + floatval($rectj6), 2);
  $rectk4 = round((floatval($rectk6) * 0.24) + floatval($rectk6), 2);
  $rectp4 = round((floatval($rectp6) * 0.24) + floatval($rectp6), 2);
  $rectq4 = round((floatval($rectq6) * 0.24) + floatval($rectq6), 2);
  $rectr4 = round((floatval($rectr6) * 0.24) + floatval($rectr6), 2);
  $rects4 = round((floatval($rects6) * 0.24) + floatval($rects6), 2);
  $rectt4 = round((floatval($rectt6) * 0.24) + floatval($rectt6), 2);
  $rectu4 = round((floatval($rectu6) * 0.24) + floatval($rectu6), 2);
  $rectz4 = round((floatval($rectz6) * 0.24) + floatval($rectz6), 2);
  $rectaa4 = round((floatval($rectaa6) * 0.24) + floatval($rectaa6), 2);
  $rectab4 = round((floatval($rectab6) * 0.24) + floatval($rectab6), 2);
  $rectac4 = round((floatval($rectac6) * 0.24) + floatval($rectac6), 2);
  $rectad4 = round((floatval($rectad6) * 0.24) + floatval($rectad6), 2);
  $rectae4 = round((floatval($rectae6) * 0.24) + floatval($rectae6), 2);
  $rectaj4 = round((floatval($rectaj6) * 0.24) + floatval($rectaj6), 2);
  $rectak4 = round((floatval($rectak6) * 0.24) + floatval($rectak6), 2);
  $rectal4 = round((floatval($rectal6) * 0.24) + floatval($rectal6), 2);
  $rectam4 = round((floatval($rectam6) * 0.24) + floatval($rectam6), 2);
  $rectan4 = round((floatval($rectan6) * 0.24) + floatval($rectan6), 2);
  $rectao4 = round((floatval($rectao6) * 0.24) + floatval($rectao6), 2);

  $rectb7array = [$rectb11, $rectb12, $rectb13, $rectb14, $rectb15,
                  $rectb16, $rectb17, $rectb18, $rectb19, $rectb20,
                  $rectb21, $rectb22, $rectb23, $rectb24, $rectb25,
                  $rectb26, $rectb27, $rectb28, $rectb29, $rectb30,
                  $rectb31, $rectb32, $rectb33, $rectb34, $rectb35,
                  $rectb36, $rectb37, $rectb38, $rectb39, $rectb40,
                  $rectb41, $rectb42, $rectb43];
  $rectb7 = array_sum($rectb7array);

  $recte11 = $_REQUEST['recte11'];
  $recte12 = $_REQUEST['recte12'];
  $recte13 = $_REQUEST['recte13'];
  $recte14 = $_REQUEST['recte14'];
  $recte15 = $_REQUEST['recte15'];
  $recte16 = $_REQUEST['recte16'];
  $recte17 = $_REQUEST['recte17'];
  $recte18 = $_REQUEST['recte18'];
  $recte19 = $_REQUEST['recte19'];
  $recte20 = $_REQUEST['recte20'];
  $recte21 = $_REQUEST['recte21'];
  $recte22 = $_REQUEST['recte22'];
  $recte23 = $_REQUEST['recte23'];
  $recte24 = $_REQUEST['recte24'];
  $recte25 = $_REQUEST['recte25'];
  $recte26 = $_REQUEST['recte26'];
  $recte27 = $_REQUEST['recte27'];
  $recte28 = $_REQUEST['recte28'];
  $recte29 = $_REQUEST['recte29'];
  $recte30 = $_REQUEST['recte30'];
  $recte31 = $_REQUEST['recte31'];
  $recte32 = $_REQUEST['recte32'];
  $recte33 = $_REQUEST['recte33'];
  $recte34 = $_REQUEST['recte34'];
  $recte35 = $_REQUEST['recte35'];
  $recte36 = $_REQUEST['recte36'];
  $recte37 = $_REQUEST['recte37'];
  $recte38 = $_REQUEST['recte38'];
  $recte39 = $_REQUEST['recte39'];
  $recte40 = $_REQUEST['recte40'];
  $recte41 = $_REQUEST['recte41'];
  $recte42 = $_REQUEST['recte42'];
  $recte43 = $_REQUEST['recte43'];

  $recte7array = [$recte11, $recte12, $recte13, $recte14, $recte15,
                  $recte16, $recte17, $recte18, $recte19, $recte20,
                  $recte21, $recte22, $recte23, $recte24, $recte25,
                  $recte26, $recte27, $recte28, $recte29, $recte30,
                  $recte31, $recte32, $recte33, $recte34, $recte35,
                  $recte36, $recte37, $recte38, $recte39, $recte40,
                  $recte41, $recte42, $recte43];
  $recte7 = array_sum($recte7array);
  $_SESSION['recte7'] = $recte7;

  $rectl7array = [$rectl11, $rectl12, $rectl13, $rectl14, $rectl15,
                  $rectl16, $rectl17, $rectl18, $rectl19, $rectl20,
                  $rectl21, $rectl22, $rectl23, $rectl24, $rectl25,
                  $rectl26, $rectl27, $rectl28, $rectl29, $rectl30,
                  $rectl31, $rectl32, $rectl33, $rectl34, $rectl35,
                  $rectl36, $rectl37, $rectl38, $rectl39, $rectl40,
                  $rectl41, $rectl42, $rectl43];
  $rectl7 = array_sum($rectl7array);

  $recto11 = $_REQUEST['recto11'];
  $recto12 = $_REQUEST['recto12'];
  $recto13 = $_REQUEST['recto13'];
  $recto14 = $_REQUEST['recto14'];
  $recto15 = $_REQUEST['recto15'];
  $recto16 = $_REQUEST['recto16'];
  $recto17 = $_REQUEST['recto17'];
  $recto18 = $_REQUEST['recto18'];
  $recto19 = $_REQUEST['recto19'];
  $recto20 = $_REQUEST['recto20'];
  $recto21 = $_REQUEST['recto21'];
  $recto22 = $_REQUEST['recto22'];
  $recto23 = $_REQUEST['recto23'];
  $recto24 = $_REQUEST['recto24'];
  $recto25 = $_REQUEST['recto25'];
  $recto26 = $_REQUEST['recto26'];
  $recto27 = $_REQUEST['recto27'];
  $recto28 = $_REQUEST['recto28'];
  $recto29 = $_REQUEST['recto29'];
  $recto30 = $_REQUEST['recto30'];
  $recto31 = $_REQUEST['recto31'];
  $recto32 = $_REQUEST['recto32'];
  $recto33 = $_REQUEST['recto33'];
  $recto34 = $_REQUEST['recto34'];
  $recto35 = $_REQUEST['recto35'];
  $recto36 = $_REQUEST['recto36'];
  $recto37 = $_REQUEST['recto37'];
  $recto38 = $_REQUEST['recto38'];
  $recto39 = $_REQUEST['recto39'];
  $recto40 = $_REQUEST['recto40'];
  $recto41 = $_REQUEST['recto41'];
  $recto42 = $_REQUEST['recto42'];
  $recto43 = $_REQUEST['recto43'];

  $recto7array = [$recto11, $recto12, $recto13, $recto14, $recto15,
                  $recto16, $recto17, $recto18, $recto19, $recto20,
                  $recto21, $recto22, $recto23, $recto24, $recto25,
                  $recto26, $recto27, $recto28, $recto29, $recto30,
                  $recto31, $recto32, $recto33, $recto34, $recto35,
                  $recto36, $recto37, $recto38, $recto39, $recto40,
                  $recto41, $recto42, $recto43];
  $recto7 = array_sum($recto7array);
  $_SESSION['recto7'] = $recto7;


  $recty11 = $_REQUEST['recty11'];
  $recty12 = $_REQUEST['recty12'];
  $recty13 = $_REQUEST['recty13'];
  $recty14 = $_REQUEST['recty14'];
  $recty15 = $_REQUEST['recty15'];
  $recty16 = $_REQUEST['recty16'];
  $recty17 = $_REQUEST['recty17'];
  $recty18 = $_REQUEST['recty18'];
  $recty19 = $_REQUEST['recty19'];
  $recty20 = $_REQUEST['recty20'];
  $recty21 = $_REQUEST['recty21'];
  $recty22 = $_REQUEST['recty22'];
  $recty23 = $_REQUEST['recty23'];
  $recty24 = $_REQUEST['recty24'];
  $recty25 = $_REQUEST['recty25'];
  $recty26 = $_REQUEST['recty26'];
  $recty27 = $_REQUEST['recty27'];
  $recty28 = $_REQUEST['recty28'];
  $recty29 = $_REQUEST['recty29'];
  $recty30 = $_REQUEST['recty30'];
  $recty31 = $_REQUEST['recty31'];
  $recty32 = $_REQUEST['recty32'];
  $recty33 = $_REQUEST['recty33'];
  $recty34 = $_REQUEST['recty34'];
  $recty35 = $_REQUEST['recty35'];
  $recty36 = $_REQUEST['recty36'];
  $recty37 = $_REQUEST['recty37'];
  $recty38 = $_REQUEST['recty38'];
  $recty39 = $_REQUEST['recty39'];
  $recty40 = $_REQUEST['recty40'];
  $recty41 = $_REQUEST['recty41'];
  $recty42 = $_REQUEST['recty42'];
  $recty43 = $_REQUEST['recty43'];

  $recty7array = [$recty11, $recty12, $recty13, $recty14, $recty15,
                  $recty16, $recty17, $recty18, $recty19, $recty20,
                  $recty21, $recty22, $recty23, $recty24, $recty25,
                  $recty26, $recty27, $recty28, $recty29, $recty30,
                  $recty31, $recty32, $recty33, $recty34, $recty35,
                  $recty36, $recty37, $recty38, $recty39, $recty40,
                  $recty41, $recty42, $recty43];
  $recty7 = array_sum($recty7array);
  $_SESSION['recty7'] = $recty7;

  $rectaf7array =[$rectaf11, $rectaf12, $rectaf13, $rectaf14, $rectaf15,
                  $rectaf16, $rectaf17, $rectaf18, $rectaf19, $rectaf20,
                  $rectaf21, $rectaf22, $rectaf23, $rectaf24, $rectaf25,
                  $rectaf26, $rectaf27, $rectaf28, $rectaf29, $rectaf30,
                  $rectaf31, $rectaf32, $rectaf33, $rectaf34, $rectaf35,
                  $rectaf36, $rectaf37, $rectaf38, $rectaf39, $rectaf40,
                  $rectaf41, $rectaf42, $rectaf43];
  $rectaf7 = array_sum($rectaf7array);

  $rectai11 = $_REQUEST['rectai11'];
  $rectai12 = $_REQUEST['rectai12'];
  $rectai13 = $_REQUEST['rectai13'];
  $rectai14 = $_REQUEST['rectai14'];
  $rectai15 = $_REQUEST['rectai15'];
  $rectai16 = $_REQUEST['rectai16'];
  $rectai17 = $_REQUEST['rectai17'];
  $rectai18 = $_REQUEST['rectai18'];
  $rectai19 = $_REQUEST['rectai19'];
  $rectai20 = $_REQUEST['rectai20'];
  $rectai21 = $_REQUEST['rectai21'];
  $rectai22 = $_REQUEST['rectai22'];
  $rectai23 = $_REQUEST['rectai23'];
  $rectai24 = $_REQUEST['rectai24'];
  $rectai25 = $_REQUEST['rectai25'];
  $rectai26 = $_REQUEST['rectai26'];
  $rectai27 = $_REQUEST['rectai27'];
  $rectai28 = $_REQUEST['rectai28'];
  $rectai29 = $_REQUEST['rectai29'];
  $rectai30 = $_REQUEST['rectai30'];
  $rectai31 = $_REQUEST['rectai31'];
  $rectai32 = $_REQUEST['rectai32'];
  $rectai33 = $_REQUEST['rectai33'];
  $rectai34 = $_REQUEST['rectai34'];
  $rectai35 = $_REQUEST['rectai35'];
  $rectai36 = $_REQUEST['rectai36'];
  $rectai37 = $_REQUEST['rectai37'];
  $rectai38 = $_REQUEST['rectai38'];
  $rectai39 = $_REQUEST['rectai39'];
  $rectai40 = $_REQUEST['rectai40'];
  $rectai41 = $_REQUEST['rectai41'];
  $rectai42 = $_REQUEST['rectai42'];
  $rectai43 = $_REQUEST['rectai43'];

  $rectai7array =[$rectai11, $rectai12, $rectai13, $rectai14, $rectai15,
                  $rectai16, $rectai17, $rectai18, $rectai19, $rectai20,
                  $rectai21, $rectai22, $rectai23, $rectai24, $rectai25,
                  $rectai26, $rectai27, $rectai28, $rectai29, $rectai30,
                  $rectai31, $rectai32, $rectai33, $rectai34, $rectai35,
                  $rectai36, $rectai37, $rectai38, $rectai39, $rectai40,
                  $rectai41, $rectai42, $rectai43];
  $rectai7 = array_sum($rectai7array);
  $_SESSION['rectai7'] = $rectai7;

$recta7 = $rectb7 + $rectl7 + $rectaf7;
// ROW 1
$recth1 = floatval($rectf3) * 1.4;
$rectr1 = floatval($rectp3) * 1.4;
$rectab1 = floatval($rectz3) * 1.4;
$rectal1 = floatval($rectaj3) * 1.4;

$recte1 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-';
$_SESSION['recta7'] = $recta7;
$_SESSION['rectf3'] = $rectf3;
$_SESSION['rectp3'] = $rectp3;
$_SESSION['rectp4'] = $rectp4;
$_SESSION['rectz3'] = $rectz3;
$_SESSION['rectz4'] = $rectz4;
$_SESSION['rectaj4'] = $rectaj4;



}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rectangular</title>
  <link rel="stylesheet" href="./style.css">
  <style>
    .rectangularTableHeaderOne{
  background: #ECECEC !important;
}

.rectangularTableHeaderOne input{
  border: none !important;
  outline: none !important;
  /* color: white; */
  background-color: transparent !important;
  border-bottom : 0.5px solid black !important;
}
.rectangularTableBody{
  background: #ECECEC !important;
}

.rectangularTableBody input{
  border: none !important;
  outline: none !important;
  /* color: white; */
  background-color: transparent !important;
  border-bottom : 0.5px solid black !important;
}

.rectangularTableHeaderTwo{
  background: #ECECEC !important;
}

.rectangularTableHeaderTwo input{
  border: none !important;
  outline: none !important;
  /* color: white; */
  background-color: transparent !important;
  border-bottom : 0.5px solid black !important;
}
td>input{
  border-bottom : 0.5px solid black !important;
}
  </style>
</head>


<body>
  <div class="section" download>
    <form action="" method="POST">
      <table class="table1" border="1">
        <!-- <tr style="position:sticky;top:0;background-color:white;">
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
                <td>Z</td>
                <td>AA</td>
                <td>AB</td>
                <td>AC</td>
                <td>AD</td>
                <td>AE</td>
                <td>AF</td>
                <td>AG</td>
                <td>AH</td>
                <td>AI</td>
                <td>AJ</td>
                <td>AK</td>
                <td>AL</td>
                <td>AM</td>
                <td>AN</td>
                <td>AO</td>
            </tr> -->
        <tr class="rectangularTableHeaderOne">
          <!-- <td style="position: sticky; left:0;">1</td> -->
          <td style="position: sticky; left:0%;background: #D4D4D4;"></td>
          <td style="background : #48494B"></td>
          <td>Job Name:</td>
          <td></td>
          <td><input type="text" name="recte1" class="custom-input" readonly value="<?php if (isset($recte1)) {echo $recte1 ;} else { echo '-' ;} ?>"></td>
          <td></td>
          <td></td>
          <td><input type="text" name="recth1" class="custom-input" readonly value="<?php if (isset($recth1)) {echo $recth1 ;} else { echo 0 ;} ?>"></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectk1" class="custom-input" readonly value="<?php if (isset($rectk1)) { echo $rectk1 ;} else {echo 0 ;} ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectr1" class="custom-input" readonly value="<?php if (isset($rectr1)) {
                                                                              echo $rectr1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectu1" class="custom-input" readonly value="<?php if (isset($rectu1)) {
                                                                              echo $rectu1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>Outdoor 2 Inch</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectab1" class="custom-input" readonly value="<?php if (isset($rectab1)) {
                                                                              echo $rectab1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectae1" class="custom-input" readonly value="<?php if (isset($rectae1)) {
                                                                              echo $rectae1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>Indoor 2 Inch</td>
          <td></th>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectal1" class="custom-input" readonly value="<?php if (isset($rectal1)) {
                                                                              echo $rectal1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectao1" class="custom-input" readonly value="<?php if (isset($rectao1)) {
                                                                              echo $rectao1;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
        </tr>
        <tr class="rectangularTableHeaderTwo">
          <!-- <td style="position: sticky; left:0;  background-color: white;">2</td> -->
          <td style="position: sticky; left:0%; background-color: #D4D4D4; "></td>
          <td style="background : #48494B"></td>
          <td>D.L.</td>
          <td><input type="text" name="rectd2" class="custom-input" value="<?php if (isset($_REQUEST['rectd2'])){ echo $_REQUEST['rectd2'] ;} ?>"></td>
          <td>Inches</td>
          <td>Su.</td>
          <td></td>
          <td>Re.</td>
          <td></td>
          <td>Ex.</td>
          <td></td>
          <td></td>
          <td>D.L.</td>
          <td><input type="text" name="rectn2" class="custom-input" value="<?php if (isset($_POST['rectn2'])) {
                                                                              echo $_POST['rectn2'];
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>Inches</td>
          <td>Su.</td>
          <td></td>
          <td>Re.</td>
          <td></td>
          <td>Ex.</td>
          <td></td>
          <td></td>
          <td>D.L.</td>
          <td><input type="text" name="rectx2" class="custom-input" value="<?php if (isset($_POST['rectx2'])) {
                                                                              echo $_POST['rectx2'];
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>Inches</td>
          <td>Su.</td>
          <td></td>
          <td>Re.</td>
          <td></td>
          <td>Ex.</td>
          <td></td>
          <td></td>
          <td>D.L.</td>
          <td><input type="text" name="rectah2" class="custom-input" value="<?php if (isset($_POST['rectah2'])) {
                                                                              echo $_POST['rectah2'];
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>Inches</td>
          <td>Su.</td>
          <td></td>
          <td>Re.</td>
          <td></td>
          <td>Ex.</td>
          <td></td>
        </tr>
        <tr class="rectangularTableHeaderOne">
          <!-- <td style="position:sticky;left:0;background-color:white;">3</td> -->
          <td style="position: sticky; left:0%; background-color: #D4D4D4; "></td>
          <td style="background : #48494B;"></td>
          <td>NET TOTAL LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectf3" class="custom-input" readonly value="<?php if (isset($rectf3)){ echo $rectf3 ;} else { echo 0 ;} ?>"></td>
          <td><input type="text" name="rectg3" class="custom-input" readonly value="<?php if (isset($rectg3)){ echo $rectg3 ;} else { echo 0 ;} ?>"></td>
          <td><input type="text" name="recth3" class="custom-input" readonly value="<?php if (isset($recth3)) {
                                                                              echo $recth3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recti3" class="custom-input" readonly value="<?php if (isset($recti3)) {
                                                                              echo $recti3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj3" class="custom-input" readonly value="<?php if (isset($rectj3)) {
                                                                              echo $rectj3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk3" class="custom-input" readonly value="<?php if (isset($rectk3)) {
                                                                              echo $rectk3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectp3" class="custom-input" readonly value="<?php if (isset($rectp3)) {
                                                                              echo $rectp3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq3" class="custom-input" readonly value="<?php if (isset($rectq3)) {
                                                                              echo $rectq3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr3" class="custom-input" readonly value="<?php if (isset($rectr3)) {
                                                                              echo $rectr3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects3" class="custom-input" readonly value="<?php if (isset($rects3)) {
                                                                              echo $rects3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt3" class="custom-input" readonly value="<?php if (isset($rectt3)) {
                                                                              echo $rectt3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu3" class="custom-input" readonly value="<?php if (isset($rectu3)) {
                                                                              echo $rectu3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectz3" class="custom-input" readonly value="<?php if (isset($rectz3)) {
                                                                              echo $rectz3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa3" class="custom-input" readonly value="<?php if (isset($rectaa3)) {
                                                                              echo $rectaa3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectab3" class="custom-input" readonly value="<?php if (isset($rectab3)) {
                                                                              echo $rectab3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectac3" class="custom-input" readonly value="<?php if (isset($rectac3)) {
                                                                              echo $rectac3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectad3" class="custom-input" readonly value="<?php if (isset($rectad3)) {
                                                                              echo $rectad3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectae3" class="custom-input" readonly value="<?php if (isset($rectae3)) {
                                                                              echo $rectae3;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectaj3" class="custom-input" readonly value="<?php if (isset($rectaj3)) {
                                                                                echo $rectaj3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak3" class="custom-input" readonly value="<?php if (isset($rectak3)) {
                                                                                echo $rectak3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal3" class="custom-input" readonly value="<?php if (isset($rectal3)) {
                                                                                echo $rectal3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam3" class="custom-input" readonly value="<?php if (isset($rectam3)) {
                                                                                echo $rectam3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan3" class="custom-input" readonly value="<?php if (isset($rectan3)) {
                                                                                echo $rectan3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao3" class="custom-input" readonly value="<?php if (isset($rectao3)) {
                                                                                echo $rectao3;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableHeaderOne">
          <!-- <td style="position:sticky;left:0;background-color:white;">4</td> -->
          <td style="position: sticky; left:0%; background-color: #D4D4D4; "></td>
          <td style="background : #48494B ;"></td>
          <td>NET TOTAL SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectf4" class="custom-input" readonly value="<?php if (isset($rectf4)) {
                                                                              echo $rectf4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg4" class="custom-input" readonly value="<?php if (isset($rectg4)) {
                                                                              echo $rectg4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recth4" class="custom-input" readonly value="<?php if (isset($recth4)) {
                                                                              echo $recth4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recti4" class="custom-input" readonly value="<?php if (isset($recti4)) {
                                                                              echo $recti4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj4" class="custom-input" readonly value="<?php if (isset($rectj4)) {
                                                                              echo $rectj4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk4" class="custom-input" readonly value="<?php if (isset($rectk4)) {
                                                                              echo $rectk4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectp4" class="custom-input" readonly value="<?php if (isset($rectp4)) {
                                                                              echo $rectp4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq4" class="custom-input" readonly value="<?php if (isset($rectq4)) {
                                                                              echo $rectq4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr4" class="custom-input" readonly value="<?php if (isset($rectr4)) {
                                                                              echo $rectr4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects4" class="custom-input" readonly value="<?php if (isset($rects4)) {
                                                                              echo $rects4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt4" class="custom-input" readonly value="<?php if (isset($rectt4)) {
                                                                              echo $rectt4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu4" class="custom-input" readonly value="<?php if (isset($rectu4)) {
                                                                              echo $rectu4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectz4" class="custom-input" readonly value="<?php if (isset($rectz4)) {
                                                                              echo $rectz4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa4" class="custom-input" readonly value="<?php if (isset($rectaa4)) {
                                                                              echo $rectaa4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectab4" class="custom-input" readonly value="<?php if (isset($rectab4)) {
                                                                              echo $rectab4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectac4" class="custom-input" readonly value="<?php if (isset($rectac4)) {
                                                                              echo $rectac4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectad4" class="custom-input" readonly value="<?php if (isset($rectad4)) {
                                                                              echo $rectad4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectae4" class="custom-input" readonly value="<?php if (isset($rectae4)) {
                                                                              echo $rectae4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td>NET TOTAL SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectaj4" class="custom-input" readonly value="<?php if (isset($rectaj4)) {
                                                                              echo $rectaj4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectak4" class="custom-input" readonly value="<?php if (isset($rectak4)) {
                                                                              echo $rectak4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectal4" class="custom-input" readonly value="<?php if (isset($rectal4)) {
                                                                              echo $rectal4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectam4" class="custom-input" readonly value="<?php if (isset($rectam4)) {
                                                                              echo $rectam4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectan4" class="custom-input" readonly value="<?php if (isset($rectan4)) {
                                                                              echo $rectan4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectao4" class="custom-input" readonly value="<?php if (isset($rectao4)) {
                                                                              echo $rectao4;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
        </tr>
        <tr class="rectangularTableHeaderTwo">
          <!-- <td style="position:sticky;left:0;background-color:white;">5</td> -->
          <td style="position: sticky; left:0%; background-color: #D4D4D4">SIESMIC</td>
          <td style="background-color: #48494B;color : white;">SIESMIC</td>
          <td>Totals LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectf5" class="custom-input" readonly value="<?php if (isset($rectf5)) {
                                                                              echo $rectf5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg5" class="custom-input" readonly value="<?php if (isset($rectg5)) {
                                                                              echo $rectg5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recth5" class="custom-input" readonly value="<?php if (isset($recth5)) {
                                                                              echo $recth5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recti5" class="custom-input" readonly value="<?php if (isset($recti5)) {
                                                                              echo $recti5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj5" class="custom-input" readonly value="<?php if (isset($rectj5)) {
                                                                              echo $rectj5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk5" class="custom-input" readonly value="<?php if (isset($rectk5)) {
                                                                              echo $rectk5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>SIESMIC</td>
          <td>Totals LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectp5" class="custom-input" readonly value="<?php if (isset($rectp5)) {
                                                                              echo $rectp5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq5" class="custom-input" readonly value="<?php if (isset($rectq5)) {
                                                                              echo $rectq5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr5" class="custom-input" readonly value="<?php if (isset($rectr5)) {
                                                                              echo $rectr5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects5" class="custom-input" readonly value="<?php if (isset($rects5)) {
                                                                              echo $rects5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt5" class="custom-input" readonly value="<?php if (isset($rectt5)) {
                                                                              echo $rectt5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu5" class="custom-input" readonly value="<?php if (isset($rectu5)) {
                                                                              echo $rectu5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>SIESMIC</td>
          <td>Totals LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectz5" class="custom-input" readonly value="<?php if (isset($rectz5)) {
                                                                              echo $rectz5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa5" class="custom-input" readonly value="<?php if (isset($rectaa5)) {
                                                                              echo $rectaa5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectab5" class="custom-input" readonly value="<?php if (isset($rectab5)) {
                                                                              echo $rectab5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectac5" class="custom-input" readonly value="<?php if (isset($rectac5)) {
                                                                              echo $rectac5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectad5" class="custom-input" readonly value="<?php if (isset($rectad5)) {
                                                                              echo $rectad5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectae5" class="custom-input" readonly value="<?php if (isset($rectae5)) {
                                                                              echo $rectae5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>SIESMIC</td>
          <td>Totals LBS.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectaj5" class="custom-input" readonly value="<?php if (isset($rectaj5)) {
                                                                              echo $rectaj5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectak5" class="custom-input" readonly value="<?php if (isset($rectak5)) {
                                                                              echo $rectak5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectal5" class="custom-input" readonly value="<?php if (isset($rectal5)) {
                                                                              echo $rectal5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectam5" class="custom-input" readonly value="<?php if (isset($rectam5)) {
                                                                              echo $rectam5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectan5" class="custom-input" readonly value="<?php if (isset($rectan5)) {
                                                                              echo $rectan5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectao5" class="custom-input" readonly value="<?php if (isset($rectao5)) {
                                                                              echo $rectao5;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
        </tr>
        <tr class="rectangularTableHeaderTwo">
          <!-- <td style="position:sticky;left:0;background-color:white;">6</td> -->
          <td style="position: sticky; left:0; background-color: #D4D4D4; ">TOTAL</td>
          <td style="background-color: #48494B;color : white ;">ADD</td>
          <td>Total SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectf6" class="custom-input" readonly value="<?php if (isset($rectf6)) {
                                                                              echo $rectf6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg6" class="custom-input" readonly value="<?php if (isset($rectg6)) {
                                                                              echo $rectg6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recth6" class="custom-input" readonly value="<?php if (isset($recth6)) {
                                                                              echo $recth6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="recti6" class="custom-input" readonly value="<?php if (isset($recti6)) {
                                                                              echo $recti6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj6" class="custom-input" readonly value="<?php if (isset($rectj6)) {
                                                                              echo $rectj6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk6" class="custom-input" readonly value="<?php if (isset($rectk6)) {
                                                                              echo $rectk6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>ADD</td>
          <td>Total SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectp6" class="custom-input" readonly value="<?php if (isset($rectp6)) {
                                                                              echo $rectp6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq6" class="custom-input" readonly value="<?php if (isset($rectq6)) {
                                                                              echo $rectq6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr6" class="custom-input" readonly value="<?php if (isset($rectr6)) {
                                                                              echo $rectr6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects6" class="custom-input" readonly value="<?php if (isset($rects6)) {
                                                                              echo $rects6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt6" class="custom-input" readonly value="<?php if (isset($rectt6)) {
                                                                              echo $rectt6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu6" class="custom-input" readonly value="<?php if (isset($rectu6)) {
                                                                              echo $rectu6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>ADD</td>
          <td>Total SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectz6" class="custom-input" readonly value="<?php if (isset($rectz6)) {
                                                                              echo $rectz6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa6" class="custom-input" readonly value="<?php if (isset($rectaa6)) {
                                                                              echo $rectaa6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectab6" class="custom-input" readonly value="<?php if (isset($rectab6)) {
                                                                              echo $rectab6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectac6" class="custom-input" readonly value="<?php if (isset($rectac6)) {
                                                                              echo $rectac6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectad6" class="custom-input" readonly value="<?php if (isset($rectad6)) {
                                                                              echo $rectad6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectae6" class="custom-input" readonly value="<?php if (isset($rectae6)) {
                                                                              echo $rectae6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>ADD</td>
          <td>Total SQ.FT.</td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectaj6" class="custom-input" readonly value="<?php if (isset($rectaj6)) {
                                                                              echo $rectaj6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectak6" class="custom-input" readonly value="<?php if (isset($rectak6)) {
                                                                              echo $rectak6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectal6" class="custom-input" readonly value="<?php if (isset($rectal6)) {
                                                                              echo $rectal6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectam6" class="custom-input" readonly value="<?php if (isset($rectam6)) {
                                                                              echo $rectam6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectan6" class="custom-input" readonly value="<?php if (isset($rectan6)) {
                                                                              echo $rectan6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectao6" class="custom-input" readonly value="<?php if (isset($rectao6)) {
                                                                              echo $rectao6;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
        </tr>
        <tr class="rectangularTableHeaderTwo">
          <!-- <td style="position:sticky;left:0;background-color:white;">7</td> -->
          <td style="position: sticky; left:0; background-color: #D4D4D4; "><input style="background : transparent;border : none;transparent;outline : none;" type="text" name="recta7" class="custom-input" readonly value="<?php if (isset($recta7)) { echo $recta7 ;} else { echo 0 ;} ?>"></td>
          <td style="background-color: #48494B;color : white;"><input style="background : transparent;color : white;border : none;transparent;outline : none;" type="text" name="rectb7" class="custom-input" readonly value="<?php if (isset($rectb7)) {
                                                                              echo $rectb7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>TOTAL LF</td>
          <td></td>
          <td><input type="text" name="recte7" class="custom-input" readonly value="<?php if (isset($recte7)) {
                                                                              echo $recte7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectl7" class="custom-input" readonly value="<?php if (isset($rectl7)) {
                                                                              echo $rectl7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>TOTAL LF</td>
          <td></td>
          <td><input type="text" name="recto7" class="custom-input" readonly value="<?php if (isset($recto7)) {
                                                                              echo $recto7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectv7" class="custom-input" readonly value="<?php if (isset($rectv7)) {
                                                                              echo $rectv7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>TOTAL LF</td>
          <td></td>
          <td><input type="text" name="recty7" class="custom-input" readonly value="<?php if (isset($recty7)) {
                                                                              echo $recty7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" name="rectaf7" class="custom-input" readonly value="<?php if (isset($rectaf7)) {
                                                                              echo $rectaf7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td>TOTAL LF</td>
          <td></td>
          <td><input type="text" name="rectai7" class="custom-input" readonly value="<?php if (isset($rectai7)) {
                                                                              echo $rectai7;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="background: #48494B;color : white;">
        <!-- <td style="position:sticky;left:0;background-color:white;">8</td> -->
          <td style="position: sticky; left:0%; background: #D4D4D4; "></td>
          <td style="background: #48494B;"></td>
          <td>DUCT SIZE</td>
          <td></td>
          <td>LINEAL</td>
          <td>TOTAL</td>
          <td>0-13</td>
          <td>14-30</td>
          <td>31-60</td>
          <td>61-90</td>
          <td>91-UP</td>
          <td></td>
          <td>DUCT SIZE</td>
          <td></td>
          <td>LINEAL</td>
          <td>TOTAL</td>
          <td>0-13</td>
          <td>14-30</td>
          <td>31-60</td>
          <td>61-90</td>
          <td>91-UP</td>
          <td></td>
          <td>DUCT SIZE</td>
          <td></td>
          <td>LINEAL</td>
          <td>TOTAL</td>
          <td>0-13</td>
          <td>14-30</td>
          <td>31-60</td>
          <td>61-90</td>
          <td>91-UP</td>
          <td></td>
          <td>DUCT SIZE</td>
          <td></td>
          <td>LINEAL</td>
          <td>TOTAL</td>
          <td>0-13</td>
          <td>14-30</td>
          <td>31-60</td>
          <td>61-90</td>
          <td>91-UP</td>
        </tr>
        <tr style="background: #48494B;color : white;border : none; outline : none;">
          <!-- <td style="position:sticky;left:0;background-color:white;">9</td> -->
          <td style="position: sticky; left:0%;background: #D4D4D4;  "></td>
          <td style:"background: #48494B;"></td>
          <td></td>
          <td>X</td>
          <td>FEET</td>
          <td>LIN FT</td>
          <td>26GA</td>
          <td>24GA</td>
          <td>22GA</td>
          <td>20GA</td>
          <td>18GA</td>
          <td></td>
          <td></td>
          <td>X</td>
          <td>FEET</td>
          <td>LIN FT</td>
          <td>26GA</td>
          <td>24GA</td>
          <td>22GA</td>
          <td>20GA</td>
          <td>18GA</td>
          <td></td>
          <td></td>
          <td>X</td>
          <td>FEET</td>
          <td>LIN FT</td>
          <td>26GA</td>
          <td>24GA</td>
          <td>22GA</td>
          <td>20GA</td>
          <td>18GA</td>
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
        </tr>
        
        <tr style="position: sticky; top:0%; background-color: #48494B;color : white; ">
          <!-- <td style="position:sticky;left:0;background-color:white;">10</td> -->
          <td style="position: sticky; left:0%; background-color: #48494B;color : white; ">Sheet</td>
          <td>Siesmic</td>
          <td>Column3</td>
          <td>Column4</td>
          <td>Column5</td>
          <td>Column6</td>
          <td>Column7</td>
          <td>Column8</td>
          <td>Column9</td>
          <td>Column10</td>
          <td>Column11</td>
          <td>Column12</td>
          <td>Column13</td>
          <td>Column14</td>
          <td>Column15</td>
          <td>Column16</td>
          <td>Column17</td>
          <td>Column18</td>
          <td>Column19</td>
          <td>Column20</td>
          <td>Column21</td>
          <td>Column22</td>
          <td>Column23</td>
          <td>Column24</td>
          <td>Column25</td>
          <td>Column26</td>
          <td>Column27</td>
          <td>Column28</td>
          <td>Column29</td>
          <td>Column30</td>
          <td>Column31</td>
          <td>Column32</td>
          <td>Column33</td>
          <td>Column34</td>
          <td>Column35</td>
          <td>Column36</td>
          <td>Column37</td>
          <td>Column38</td>
          <td>Column39</td>
          <td>Column40</td>
          <td>Column41</td>
        </tr>

        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0; ;">11</td> -->
          <td style="position: sticky; left:0%;;"></td>
          <td><input type="text" name="rectb11" class="custom-input" readonly value="<?php if (isset($rectb11)) {
                                                                              echo $rectb11;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectc11" class="custom-input" value="<?php if (isset($_POST['rectc11'])) {
                                                                              echo $_POST['rectc11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd11" class="custom-input" value="<?php if (isset($_POST['rectd11'])) {
                                                                              echo $_POST['rectd11'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte11" class="custom-input" value="<?php if (isset($_POST['recte11'])) {
                                                                              echo $_POST['recte11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf11" class="custom-input" readonly value="<?php if (isset($rectf11)) {
                                                                              echo $rectf11;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg11" class="custom-input" readonly value="<?php if (isset($rectg11)) {
                                                                              echo $rectg11;
                                                                            } ?>"></td>
          <td><input type="text" name="recth11" class="custom-input" readonly value="<?php if (isset($recth11)) {
                                                                              echo $recth11;
                                                                            } ?>"></td>
          <td><input type="text" name="recti11" class="custom-input" readonly value="<?php if (isset($recti11)) {
                                                                              echo $recti11;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj11" class="custom-input" readonly value="<?php if (isset($rectj11)) {
                                                                              echo $rectj11;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk11" class="custom-input" readonly value="<?php if (isset($rectk11)) {
                                                                              echo $rectk11;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl11" class="custom-input" readonly value="<?php if (isset($rectl11)) {
                                                                              echo $rectl11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectm11" class="custom-input" value="<?php if (isset($_POST['rectm11'])) {
                                                                              echo $_POST['rectm11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn11" class="custom-input" value="<?php if (isset($_POST['rectn11'])) {
                                                                              echo $_POST['rectn11'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto11" class="custom-input" value="<?php if (isset($_POST['recto11'])) {
                                                                              echo $_POST['recto11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp11" class="custom-input" readonly value="<?php if (isset($rectp11)) {
                                                                              echo $rectp11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq11" class="custom-input" readonly value="<?php if (isset($rectq11)) {
                                                                              echo $rectq11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr11" class="custom-input" readonly value="<?php if (isset($rectr11)) {
                                                                              echo $rectr11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects11" class="custom-input" readonly value="<?php if (isset($rects11)) {
                                                                              echo $rects11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt11" class="custom-input" readonly value="<?php if (isset($rectt11)) {
                                                                              echo $rectt11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu11" class="custom-input" readonly value="<?php if (isset($rectu11)) {
                                                                              echo $rectu11;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv11" class="custom-input" value="<?php if (isset($_POST['rectv11'])) {
                                                                              echo $_POST['rectv11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw11" class="custom-input" value="<?php if (isset($_POST['rectw11'])) {
                                                                              echo $_POST['rectw11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx11" class="custom-input" value="<?php if (isset($_POST['rectx11'])) {
                                                                              echo $_POST['rectx11'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty11" class="custom-input" value="<?php if (isset($_POST['recty11'])) {
                                                                              echo $_POST['recty11'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz11" class="custom-input" readonly value="<?php if (isset($rectz11)) {
                                                                              echo $rectz11;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectaa11" class="custom-input" readonly value="<?php if (isset($rectaa11)) {
                                                                                echo $rectaa11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab11" class="custom-input" readonly value="<?php if (isset($rectab11)) {
                                                                                echo $rectab11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac11" class="custom-input" readonly value="<?php if (isset($rectac11)) {
                                                                                echo $rectac11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad11" class="custom-input" readonly value="<?php if (isset($rectad11)) {
                                                                                echo $rectad11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae11" class="custom-input" readonly value="<?php if (isset($rectae11)) {
                                                                                echo $rectae11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf11" class="custom-input" readonly value="<?php if (isset($rectaf11)) {
                                                                                echo $rectaf11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag11" class="custom-input" value="<?php if (isset($_POST['rectag11'])) {
                                                                                echo $_POST['rectag11'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah11" class="custom-input" value="<?php if (isset($_POST['rectah11'])) {
                                                                                echo $_POST['rectah11'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai11" class="custom-input" value="<?php if (isset($_POST['rectai11'])) {
                                                                                echo $_POST['rectai11'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj11" class="custom-input" readonly value="<?php if (isset($rectaj11)) {
                                                                                echo $rectaj11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak11" class="custom-input" readonly value="<?php if (isset($rectak11)) {
                                                                                echo $rectak11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal11" class="custom-input" readonly value="<?php if (isset($rectal11)) {
                                                                                echo $rectal11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam11" class="custom-input" readonly value="<?php if (isset($rectam11)) {
                                                                                echo $rectam11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan11" class="custom-input" readonly value="<?php if (isset($rectan11)) {
                                                                                echo $rectan11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao11" class="custom-input" readonly value="<?php if (isset($rectao11)) {
                                                                                echo $rectao11;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">12</td> -->
          <td style="position: sticky; left:0%; ;"></td>
          <td><input type="text" name="rectb12" class="custom-input" readonly value="<?php if (isset($rectb12)) {
                                                                              echo $rectb12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc12" class="custom-input" value="<?php if (isset($_POST['rectc12'])) {
                                                                              echo $_POST['rectc12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd12" class="custom-input" value="<?php if (isset($_POST['rectd12'])) {
                                                                              echo $_POST['rectd12'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte12" class="custom-input" value="<?php if (isset($_POST['recte12'])) {
                                                                              echo $_POST['recte12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf12" class="custom-input" readonly value="<?php if (isset($rectf12)) {
                                                                              echo $rectf12;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg12" class="custom-input" readonly value="<?php if (isset($rectg12)) {
                                                                              echo $rectg12;
                                                                            } ?>"></td>
          <td><input type="text" name="recth12" class="custom-input" readonly value="<?php if (isset($recth12)) {
                                                                              echo $recth12;
                                                                            } ?>"></td>
          <td><input type="text" name="recti12" class="custom-input" readonly value="<?php if (isset($recti12)) {
                                                                              echo $recti12;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj12" class="custom-input" readonly value="<?php if (isset($rectj12)) {
                                                                              echo $rectj12;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk12" class="custom-input" readonly value="<?php if (isset($rectk12)) {
                                                                              echo $rectk12;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl12" class="custom-input" readonly value="<?php if (isset($rectl12)) {
                                                                              echo $rectl12;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm12" class="custom-input" value="<?php if (isset($_POST['rectm12'])) {
                                                                              echo $_POST['rectm12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn12" class="custom-input" value="<?php if (isset($_POST['rectn12'])) {
                                                                              echo $_POST['rectn12'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto12" class="custom-input" value="<?php if (isset($_POST['recto12'])) {
                                                                              echo $_POST['recto12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp12" class="custom-input" readonly value="<?php if (isset($rectp12)) {
                                                                              echo $rectp12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq12" class="custom-input" readonly value="<?php if (isset($rectq12)) {
                                                                              echo $rectq12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr12" class="custom-input" readonly value="<?php if (isset($rectr12)) {
                                                                              echo $rectr12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects12" class="custom-input" readonly value="<?php if (isset($rects12)) {
                                                                              echo $rects12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt12" class="custom-input" readonly value="<?php if (isset($rectt12)) {
                                                                              echo $rectt12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu12" class="custom-input" readonly value="<?php if (isset($rectu12)) {
                                                                              echo $rectu12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv12" class="custom-input" value="<?php if (isset($_REQUEST['rectv12'])) {
                                                                              echo $_REQUEST['rectv12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw12" class="custom-input" value="<?php if (isset($_REQUEST['rectw12'])) {
                                                                              echo $_REQUEST['rectw12'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx12" class="custom-input" value="<?php if (isset($_REQUEST['rectx12'])) {
                                                                              echo $_REQUEST['rectx12'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty12" class="custom-input" value="<?php if (isset($_REQUEST['recty12'])) {
                                                                              echo $_REQUEST['recty12'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz12" class="custom-input" readonly value="<?php if (isset($rectz12)) {
                                                                              echo $rectz12;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa12" class="custom-input" readonly value="<?php if (isset($rectaa12)) {
                                                                                echo $rectaa12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab12" class="custom-input" readonly value="<?php if (isset($rectab12)) {
                                                                                echo $rectab12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac12" class="custom-input" readonly value="<?php if (isset($rectac12)) {
                                                                                echo $rectac12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad12" class="custom-input" readonly value="<?php if (isset($rectad12)) {
                                                                                echo $rectad12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae12" class="custom-input" readonly value="<?php if (isset($rectae12)) {
                                                                                echo $rectae12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf12" class="custom-input" readonly value="<?php if (isset($rectaf12)) {
                                                                                echo $rectaf12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag12" class="custom-input" value="<?php if (isset($_REQUEST['rectag12'])) {
                                                                                echo $_REQUEST['rectag12'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah12" class="custom-input" value="<?php if (isset($_REQUEST['rectah12'])) {
                                                                                echo $_REQUEST['rectah12'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai12" class="custom-input" value="<?php if (isset($_REQUEST['rectai12'])) {
                                                                                echo $_REQUEST['rectai12'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj12" class="custom-input" readonly value="<?php if (isset($rectaj12)) {
                                                                                echo $rectaj12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak12" class="custom-input" readonly value="<?php if (isset($rectak12)) {
                                                                                echo $rectak12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal12" class="custom-input" readonly value="<?php if (isset($rectal12)) {
                                                                                echo $rectal12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam12" class="custom-input" readonly value="<?php if (isset($rectam12)) {
                                                                                echo $rectam12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan12" class="custom-input" readonly value="<?php if (isset($rectan12)) {
                                                                                echo $rectan12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao12" class="custom-input" readonly value="<?php if (isset($rectao12)) {
                                                                                echo $rectao12;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position:sticky;left:0;background-color:white;">13</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb13" class="custom-input" readonly value="<?php if (isset($rectb13)) {
                                                                              echo $rectb13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc13" class="custom-input" value="<?php if (isset($_POST['rectc13'])) {
                                                                              echo $_POST['rectc13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd13" class="custom-input" value="<?php if (isset($_POST['rectd13'])) {
                                                                              echo $_POST['rectd13'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte13" class="custom-input" value="<?php if (isset($_POST['recte13'])) {
                                                                              echo $_POST['recte13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf13" class="custom-input" readonly value="<?php if (isset($rectf13)) {
                                                                              echo $rectf13;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg13" class="custom-input" readonly value="<?php if (isset($rectg13)) {
                                                                              echo $rectg13;
                                                                            } ?>"></td>
          <td><input type="text" name="recth13" class="custom-input" readonly value="<?php if (isset($recth13)) {
                                                                              echo $recth13;
                                                                            } ?>"></td>
          <td><input type="text" name="recti13" class="custom-input" readonly value="<?php if (isset($recti13)) {
                                                                              echo $recti13;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj13" class="custom-input" readonly value="<?php if (isset($rectj13)) {
                                                                              echo $rectj13;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk13" class="custom-input" readonly value="<?php if (isset($rectk13)) {
                                                                              echo $rectk13;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl13" class="custom-input" readonly value="<?php if (isset($rectl13)) {
                                                                              echo $rectl13;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm13" class="custom-input" value="<?php if (isset($_POST['rectm13'])) {
                                                                              echo $_POST['rectm13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn13" class="custom-input" value="<?php if (isset($_POST['rectn13'])) {
                                                                              echo $_POST['rectn13'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto13" class="custom-input" value="<?php if (isset($_POST['recto13'])) {
                                                                              echo $_POST['recto13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp13" class="custom-input" readonly value="<?php if (isset($rectp13)) {
                                                                              echo $rectp13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq13" class="custom-input" readonly value="<?php if (isset($rectq13)) {
                                                                              echo $rectq13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr13" class="custom-input" readonly value="<?php if (isset($rectr13)) {
                                                                              echo $rectr13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects13" class="custom-input" readonly value="<?php if (isset($rects13)) {
                                                                              echo $rects13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt13" class="custom-input" readonly value="<?php if (isset($rectt13)) {
                                                                              echo $rectt13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu13" class="custom-input" readonly value="<?php if (isset($rectu13)) {
                                                                              echo $rectu13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv13" class="custom-input" value="<?php if (isset($_REQUEST['rectv13'])) {
                                                                              echo $_REQUEST['rectv13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw13" class="custom-input" value="<?php if (isset($_REQUEST['rectw13'])) {
                                                                              echo $_REQUEST['rectw13'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx13" class="custom-input" value="<?php if (isset($_REQUEST['rectx13'])) {
                                                                              echo $_REQUEST['rectx13'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty13" class="custom-input" value="<?php if (isset($_REQUEST['recty13'])) {
                                                                              echo $_REQUEST['recty13'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz13" class="custom-input" readonly value="<?php if (isset($rectz13)) {
                                                                              echo $rectz13;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa13" class="custom-input" readonly value="<?php if (isset($rectaa13)) {
                                                                                echo $rectaa13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab13" class="custom-input" readonly value="<?php if (isset($rectab13)) {
                                                                                echo $rectab13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac13" class="custom-input" readonly value="<?php if (isset($rectac13)) {
                                                                                echo $rectac13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad13" class="custom-input" readonly value="<?php if (isset($rectad13)) {
                                                                                echo $rectad13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae13" class="custom-input" readonly value="<?php if (isset($rectae13)) {
                                                                                echo $rectae13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf13" class="custom-input" readonly value="<?php if (isset($rectaf13)) {
                                                                                echo $rectaf13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag13" class="custom-input" value="<?php if (isset($_REQUEST['rectag13'])) {
                                                                                echo $_REQUEST['rectag13'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah13" class="custom-input" value="<?php if (isset($_REQUEST['rectah13'])) {
                                                                                echo $_REQUEST['rectah13'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai13" class="custom-input" value="<?php if (isset($_REQUEST['rectai13'])) {
                                                                                echo $_REQUEST['rectai13'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj13" class="custom-input" readonly value="<?php if (isset($rectaj13)) {
                                                                                echo $rectaj13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak13" class="custom-input" readonly value="<?php if (isset($rectak13)) {
                                                                                echo $rectak13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal13" class="custom-input" readonly value="<?php if (isset($rectal13)) {
                                                                                echo $rectal13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam13" class="custom-input" readonly value="<?php if (isset($rectam13)) {
                                                                                echo $rectam13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan13" class="custom-input" readonly value="<?php if (isset($rectan13)) {
                                                                                echo $rectan13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao13" class="custom-input" readonly value="<?php if (isset($rectao13)) {
                                                                                echo $rectao13;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position:sticky;left:0;background-color:white;">14</td> -->
          <td style="position: sticky; left:0;  "></td>
          <td><input type="text" name="rectb14" class="custom-input" readonly value="<?php if (isset($rectb14)) {
                                                                              echo $rectb14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc14" class="custom-input" value="<?php if (isset($_POST['rectc14'])) {
                                                                              echo $_POST['rectc14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd14" class="custom-input" value="<?php if (isset($_POST['rectd14'])) {
                                                                              echo $_POST['rectd14'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte14" class="custom-input" value="<?php if (isset($_POST['recte14'])) {
                                                                              echo $_POST['recte14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf14" class="custom-input" readonly value="<?php if (isset($rectf14)) {
                                                                              echo $rectf14;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg14" class="custom-input" readonly value="<?php if (isset($rectg14)) {
                                                                              echo $rectg14;
                                                                            } ?>"></td>
          <td><input type="text" name="recth14" class="custom-input" readonly value="<?php if (isset($recth14)) {
                                                                              echo $recth14;
                                                                            } ?>"></td>
          <td><input type="text" name="recti14" class="custom-input" readonly value="<?php if (isset($recti14)) {
                                                                              echo $recti14;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj14" class="custom-input" readonly value="<?php if (isset($rectj14)) {
                                                                              echo $rectj14;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk14" class="custom-input" readonly value="<?php if (isset($rectk14)) {
                                                                              echo $rectk14;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl14" class="custom-input" readonly value="<?php if (isset($rectl14)) {
                                                                              echo $rectl14;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm14" class="custom-input" value="<?php if (isset($_POST['rectm14'])) {
                                                                              echo $_POST['rectm14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn14" class="custom-input" value="<?php if (isset($_POST['rectn14'])) {
                                                                              echo $_POST['rectn14'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto14" class="custom-input" value="<?php if (isset($_POST['recto14'])) {
                                                                              echo $_POST['recto14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp14" class="custom-input" readonly value="<?php if (isset($rectp14)) {
                                                                              echo $rectp14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq14" class="custom-input" readonly value="<?php if (isset($rectq14)) {
                                                                              echo $rectq14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr14" class="custom-input" readonly value="<?php if (isset($rectr14)) {
                                                                              echo $rectr14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects14" class="custom-input" readonly value="<?php if (isset($rects14)) {
                                                                              echo $rects14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt14" class="custom-input" readonly value="<?php if (isset($rectt14)) {
                                                                              echo $rectt14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu14" class="custom-input" readonly value="<?php if (isset($rectu14)) {
                                                                              echo $rectu14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv14" class="custom-input" value="<?php if (isset($_REQUEST['rectv14'])) {
                                                                              echo $_REQUEST['rectv14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw14" class="custom-input" value="<?php if (isset($_REQUEST['rectw14'])) {
                                                                              echo $_REQUEST['rectw14'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx14" class="custom-input" value="<?php if (isset($_REQUEST['rectx14'])) {
                                                                              echo $_REQUEST['rectx14'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty14" class="custom-input" value="<?php if (isset($_REQUEST['recty14'])) {
                                                                              echo $_REQUEST['recty14'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz14" class="custom-input" readonly value="<?php if (isset($rectz14)) {
                                                                              echo $rectz14;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa14" class="custom-input" readonly value="<?php if (isset($rectaa14)) {
                                                                                echo $rectaa14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab14" class="custom-input" readonly value="<?php if (isset($rectab14)) {
                                                                                echo $rectab14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac14" class="custom-input" readonly value="<?php if (isset($rectac14)) {
                                                                                echo $rectac14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad14" class="custom-input" readonly value="<?php if (isset($rectad14)) {
                                                                                echo $rectad14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae14" class="custom-input" readonly value="<?php if (isset($rectae14)) {
                                                                                echo $rectae14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf14" class="custom-input" readonly value="<?php if (isset($rectaf14)) {
                                                                                echo $rectaf14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag14" class="custom-input" value="<?php if (isset($_REQUEST['rectag14'])) {
                                                                                echo $_REQUEST['rectag14'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah14" class="custom-input" value="<?php if (isset($_REQUEST['rectah14'])) {
                                                                                echo $_REQUEST['rectah14'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai14" class="custom-input" value="<?php if (isset($_REQUEST['rectai14'])) {
                                                                                echo $_REQUEST['rectai14'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj14" class="custom-input" readonly value="<?php if (isset($rectaj14)) {
                                                                                echo $rectaj14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak14" class="custom-input" readonly value="<?php if (isset($rectak14)) {
                                                                                echo $rectak14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal14" class="custom-input" readonly value="<?php if (isset($rectal14)) {
                                                                                echo $rectal14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam14" class="custom-input" readonly value="<?php if (isset($rectam14)) {
                                                                                echo $rectam14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan14" class="custom-input" readonly value="<?php if (isset($rectan14)) {
                                                                                echo $rectan14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao14" class="custom-input" readonly value="<?php if (isset($rectao14)) {
                                                                                echo $rectao14;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">15</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb15" class="custom-input" readonly value="<?php if (isset($rectb15)) {
                                                                              echo $rectb15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc15" class="custom-input" value="<?php if (isset($_REQUEST['rectc15'])) {
                                                                              echo $_REQUEST['rectc15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd15" class="custom-input" value="<?php if (isset($_POST['rectd15'])) {
                                                                              echo $_POST['rectd15'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte15" class="custom-input" value="<?php if (isset($_POST['recte15'])) {
                                                                              echo $_POST['recte15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf15" class="custom-input" readonly value="<?php if (isset($rectf15)) {
                                                                              echo $rectf15;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg15" class="custom-input" readonly value="<?php if (isset($rectg15)) {
                                                                              echo $rectg15;
                                                                            } ?>"></td>
          <td><input type="text" name="recth15" class="custom-input" readonly value="<?php if (isset($recth15)) {
                                                                              echo $recth15;
                                                                            } ?>"></td>
          <td><input type="text" name="recti15" class="custom-input" readonly value="<?php if (isset($recti15)) {
                                                                              echo $recti15;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj15" class="custom-input" readonly value="<?php if (isset($rectj15)) {
                                                                              echo $rectj15;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk15" class="custom-input" readonly value="<?php if (isset($rectk15)) {
                                                                              echo $rectk15;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl15" class="custom-input" readonly value="<?php if (isset($rectl15)) {
                                                                              echo $rectl15;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm15" class="custom-input" value="<?php if (isset($_POST['rectm15'])) {
                                                                              echo $_POST['rectm15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn15" class="custom-input" value="<?php if (isset($_POST['rectn15'])) {
                                                                              echo $_POST['rectn15'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto15" class="custom-input" value="<?php if (isset($_POST['recto15'])) {
                                                                              echo $_POST['recto15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp15" class="custom-input" readonly value="<?php if (isset($rectp15)) {
                                                                              echo $rectp15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq15" class="custom-input" readonly value="<?php if (isset($rectq15)) {
                                                                              echo $rectq15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr15" class="custom-input" readonly value="<?php if (isset($rectr15)) {
                                                                              echo $rectr15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects15" class="custom-input" readonly value="<?php if (isset($rects15)) {
                                                                              echo $rects15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt15" class="custom-input" readonly value="<?php if (isset($rectt15)) {
                                                                              echo $rectt15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu15" class="custom-input" readonly value="<?php if (isset($rectu15)) {
                                                                              echo $rectu15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv15" class="custom-input" value="<?php if (isset($_REQUEST['rectv15'])) {
                                                                              echo $_REQUEST['rectv15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw15" class="custom-input" value="<?php if (isset($_REQUEST['rectw15'])) {
                                                                              echo $_REQUEST['rectw15'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx15" class="custom-input" value="<?php if (isset($_REQUEST['rectx15'])) {
                                                                              echo $_REQUEST['rectx15'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty15" class="custom-input" value="<?php if (isset($_REQUEST['recty15'])) {
                                                                              echo $_REQUEST['recty15'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz15" class="custom-input" readonly value="<?php if (isset($rectz15)) {
                                                                              echo $rectz15;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa15" class="custom-input" readonly value="<?php if (isset($rectaa15)) {
                                                                                echo $rectaa15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab15" class="custom-input" readonly value="<?php if (isset($rectab15)) {
                                                                                echo $rectab15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac15" class="custom-input" readonly value="<?php if (isset($rectac15)) {
                                                                                echo $rectac15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad15" class="custom-input" readonly value="<?php if (isset($rectad15)) {
                                                                                echo $rectad15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae15" class="custom-input" readonly value="<?php if (isset($rectae15)) {
                                                                                echo $rectae15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf15" class="custom-input" readonly value="<?php if (isset($rectaf15)) {
                                                                                echo $rectaf15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag15" class="custom-input" value="<?php if (isset($_REQUEST['rectag15'])) {
                                                                                echo $_REQUEST['rectag15'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah15" class="custom-input" value="<?php if (isset($_REQUEST['rectah15'])) {
                                                                                echo $_REQUEST['rectah15'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai15" class="custom-input" value="<?php if (isset($_REQUEST['rectai15'])) {
                                                                                echo $_REQUEST['rectai15'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj15" class="custom-input" readonly value="<?php if (isset($rectaj15)) {
                                                                                echo $rectaj15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak15" class="custom-input" readonly value="<?php if (isset($rectak15)) {
                                                                                echo $rectak15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal15" class="custom-input" readonly value="<?php if (isset($rectal15)) {
                                                                                echo $rectal15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam15" class="custom-input" readonly value="<?php if (isset($rectam15)) {
                                                                                echo $rectam15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan15" class="custom-input" readonly value="<?php if (isset($rectan15)) {
                                                                                echo $rectan15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao15" class="custom-input" readonly value="<?php if (isset($rectao15)) {
                                                                                echo $rectao15;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">16</td> -->
          <td style="position: sticky; left:0;  "></td>
          <td><input type="text" name="rectb16" class="custom-input" readonly value="<?php if (isset($rectb16)) {
                                                                              echo $rectb16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc16" class="custom-input" value="<?php if (isset($_POST['rectc16'])) {
                                                                              echo $_POST['rectc16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd16" class="custom-input" value="<?php if (isset($_POST['rectd16'])) {
                                                                              echo $_POST['rectd16'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte16" class="custom-input" value="<?php if (isset($_POST['recte16'])) {
                                                                              echo $_POST['recte16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf16" class="custom-input" readonly value="<?php if (isset($rectf16)) {
                                                                              echo $rectf16;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg16" class="custom-input" readonly value="<?php if (isset($rectg16)) {
                                                                              echo $rectg16;
                                                                            } ?>"></td>
          <td><input type="text" name="recth16" class="custom-input" readonly value="<?php if (isset($recth16)) {
                                                                              echo $recth16;
                                                                            } ?>"></td>
          <td><input type="text" name="recti16" class="custom-input" readonly value="<?php if (isset($recti16)) {
                                                                              echo $recti16;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj16" class="custom-input" readonly value="<?php if (isset($rectj16)) {
                                                                              echo $rectj16;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk16" class="custom-input" readonly value="<?php if (isset($rectk16)) {
                                                                              echo $rectk16;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl16" class="custom-input" readonly value="<?php if (isset($rectl16)) {
                                                                              echo $rectl16;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm16" class="custom-input" value="<?php if (isset($_POST['rectm16'])) {
                                                                              echo $_POST['rectm16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn16" class="custom-input" value="<?php if (isset($_POST['rectn16'])) {
                                                                              echo $_POST['rectn16'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto16" class="custom-input" value="<?php if (isset($_POST['recto16'])) {
                                                                              echo $_POST['recto16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp16" class="custom-input" readonly value="<?php if (isset($rectp16)) {
                                                                              echo $rectp16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq16" class="custom-input" readonly value="<?php if (isset($rectq16)) {
                                                                              echo $rectq16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr16" class="custom-input" readonly value="<?php if (isset($rectr16)) {
                                                                              echo $rectr16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects16" class="custom-input" readonly value="<?php if (isset($rects16)) {
                                                                              echo $rects16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt16" class="custom-input" readonly value="<?php if (isset($rectt16)) {
                                                                              echo $rectt16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu16" class="custom-input" readonly value="<?php if (isset($rectu16)) {
                                                                              echo $rectu16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv16" class="custom-input" value="<?php if (isset($_REQUEST['rectv16'])) {
                                                                              echo $_REQUEST['rectv16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw16" class="custom-input" value="<?php if (isset($_REQUEST['rectw16'])) {
                                                                              echo $_REQUEST['rectw16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx16" class="custom-input" value="<?php if (isset($_REQUEST['rectx16'])) {
                                                                              echo $_REQUEST['rectx16'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty16" class="custom-input" value="<?php if (isset($_REQUEST['recty16'])) {
                                                                              echo $_REQUEST['recty16'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz16" class="custom-input" readonly value="<?php if (isset($rectz16)) {
                                                                              echo $rectz16;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa16" class="custom-input" readonly value="<?php if (isset($rectaa16)) {
                                                                                echo $rectaa16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab16" class="custom-input" readonly value="<?php if (isset($rectab16)) {
                                                                                echo $rectab16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac16" class="custom-input" readonly value="<?php if (isset($rectac16)) {
                                                                                echo $rectac16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad16" class="custom-input" readonly value="<?php if (isset($rectad16)) {
                                                                                echo $rectad16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae16" class="custom-input" readonly value="<?php if (isset($rectae16)) {
                                                                                echo $rectae16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf16" class="custom-input" readonly value="<?php if (isset($rectaf16)) {
                                                                                echo $rectaf16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag16" class="custom-input" value="<?php if (isset($_REQUEST['rectag16'])) {
                                                                                echo $_REQUEST['rectag16'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah16" class="custom-input" value="<?php if (isset($_REQUEST['rectah16'])) {
                                                                                echo $_REQUEST['rectah16'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai16" class="custom-input" value="<?php if (isset($_REQUEST['rectai16'])) {
                                                                                echo $_REQUEST['rectai16'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj16" class="custom-input" readonly value="<?php if (isset($rectaj16)) {
                                                                                echo $rectaj16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak16" class="custom-input" readonly value="<?php if (isset($rectak16)) {
                                                                                echo $rectak16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal16" class="custom-input" readonly value="<?php if (isset($rectal16)) {
                                                                                echo $rectal16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam16" class="custom-input" readonly value="<?php if (isset($rectam16)) {
                                                                                echo $rectam16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan16" class="custom-input" readonly value="<?php if (isset($rectan16)) {
                                                                                echo $rectan16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao16" class="custom-input" readonly value="<?php if (isset($rectao16)) {
                                                                                echo $rectao16;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">17</td> -->
          <td style="position: sticky; left:0;  "></td>
          <td><input type="text" name="rectb17" class="custom-input" readonly value="<?php if (isset($rectb17)) {
                                                                              echo $rectb17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectc17" class="custom-input" value="<?php if (isset($_POST['rectc17'])) {
                                                                              echo $_POST['rectc17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd17" class="custom-input" value="<?php if (isset($_POST['rectd17'])) {
                                                                              echo $_POST['rectd17'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte17" class="custom-input" value="<?php if (isset($_POST['recte17'])) {
                                                                              echo $_POST['recte17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf17" class="custom-input" readonly value="<?php if (isset($rectf17)) {
                                                                              echo $rectf17;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg17" class="custom-input" readonly value="<?php if (isset($rectg17)) {
                                                                              echo $rectg17;
                                                                            } ?>"></td>
          <td><input type="text" name="recth17" class="custom-input" readonly value="<?php if (isset($recth17)) {
                                                                              echo $recth17;
                                                                            } ?>"></td>
          <td><input type="text" name="recti17" class="custom-input" readonly value="<?php if (isset($recti17)) {
                                                                              echo $recti17;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj17" class="custom-input" readonly value="<?php if (isset($rectj17)) {
                                                                              echo $rectj17;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk17" class="custom-input" readonly value="<?php if (isset($rectk17)) {
                                                                              echo $rectk17;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl17" class="custom-input" readonly value="<?php if (isset($rectl17)) {
                                                                              echo $rectl17;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm17" class="custom-input" value="<?php if (isset($_POST['rectm17'])) {
                                                                              echo $_POST['rectm17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn17" class="custom-input" value="<?php if (isset($_POST['rectn17'])) {
                                                                              echo $_POST['rectn17'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto17" class="custom-input" value="<?php if (isset($_POST['recto17'])) {
                                                                              echo $_POST['recto17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp17" class="custom-input" readonly value="<?php if (isset($rectp17)) {
                                                                              echo $rectp17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq17" class="custom-input" readonly value="<?php if (isset($rectq17)) {
                                                                              echo $rectq17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr17" class="custom-input" readonly value="<?php if (isset($rectr17)) {
                                                                              echo $rectr17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects17" class="custom-input" readonly value="<?php if (isset($rects17)) {
                                                                              echo $rects17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt17" class="custom-input" readonly value="<?php if (isset($rectt17)) {
                                                                              echo $rectt17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu17" class="custom-input" readonly value="<?php if (isset($rectu17)) {
                                                                              echo $rectu17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv17" class="custom-input" value="<?php if (isset($_REQUEST['rectv17'])) {
                                                                              echo $_REQUEST['rectv17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw17" class="custom-input" value="<?php if (isset($_REQUEST['rectw17'])) {
                                                                              echo $_REQUEST['rectw17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx17" class="custom-input" value="<?php if (isset($_REQUEST['rectx17'])) {
                                                                              echo $_REQUEST['rectx17'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty17" class="custom-input" value="<?php if (isset($_REQUEST['recty17'])) {
                                                                              echo $_REQUEST['recty17'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz17" class="custom-input" readonly value="<?php if (isset($rectz17)) {
                                                                              echo $rectz17;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa17" class="custom-input" readonly value="<?php if (isset($rectaa17)) {
                                                                                echo $rectaa17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab17" class="custom-input" readonly value="<?php if (isset($rectab17)) {
                                                                                echo $rectab17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac17" class="custom-input" readonly value="<?php if (isset($rectac17)) {
                                                                                echo $rectac17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad17" class="custom-input" readonly value="<?php if (isset($rectad17)) {
                                                                                echo $rectad17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae17" class="custom-input" readonly value="<?php if (isset($rectae17)) {
                                                                                echo $rectae17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf17" class="custom-input" readonly value="<?php if (isset($rectaf17)) {
                                                                                echo $rectaf17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag17" class="custom-input" value="<?php if (isset($_REQUEST['rectag17'])) {
                                                                                echo $_REQUEST['rectag17'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah17" class="custom-input" value="<?php if (isset($_REQUEST['rectah17'])) {
                                                                                echo $_REQUEST['rectah17'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai17" class="custom-input" value="<?php if (isset($_REQUEST['rectai17'])) {
                                                                                echo $_REQUEST['rectai17'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj17" class="custom-input" readonly value="<?php if (isset($rectaj17)) {
                                                                                echo $rectaj17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak17" class="custom-input" readonly value="<?php if (isset($rectak17)) {
                                                                                echo $rectak17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal17" class="custom-input" readonly value="<?php if (isset($rectal17)) {
                                                                                echo $rectal17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam17" class="custom-input" readonly value="<?php if (isset($rectam17)) {
                                                                                echo $rectam17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan17" class="custom-input" readonly value="<?php if (isset($rectan17)) {
                                                                                echo $rectan17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao17" class="custom-input" readonly value="<?php if (isset($rectao17)) {
                                                                                echo $rectao17;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">18</td> -->
          <td style="position: sticky; left:0;  "></td>
          <td><input type="text" name="rectb18" class="custom-input" readonly value="<?php if (isset($rectb18)) {
                                                                              echo $rectb18;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc18" class="custom-input" value="<?php if (isset($_POST['rectc18'])) {
                                                                              echo $_POST['rectc18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd18" class="custom-input" value="<?php if (isset($_POST['rectd18'])) {
                                                                              echo $_POST['rectd18'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte18" class="custom-input" value="<?php if (isset($_POST['recte18'])) {
                                                                              echo $_POST['recte18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf18" class="custom-input" readonly value="<?php if (isset($rectf18)) {
                                                                              echo $rectf18;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg18" class="custom-input" readonly value="<?php if (isset($rectg18)) {
                                                                              echo $rectg18;
                                                                            } ?>"></td>
          <td><input type="text" name="recth18" class="custom-input" readonly value="<?php if (isset($recth18)) {
                                                                              echo $recth18;
                                                                            } ?>"></td>
          <td><input type="text" name="recti18" class="custom-input" readonly value="<?php if (isset($recti18)) {
                                                                              echo $recti18;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj18" class="custom-input" readonly value="<?php if (isset($rectj18)) {
                                                                              echo $rectj18;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk18" class="custom-input" readonly value="<?php if (isset($rectk18)) {
                                                                              echo $rectk18;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl18" class="custom-input" readonly value="<?php if (isset($rectl18)) {
                                                                              echo $rectl18;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm18" class="custom-input" value="<?php if (isset($_POST['rectm18'])) {
                                                                              echo $_POST['rectm18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn18" class="custom-input" value="<?php if (isset($_POST['rectn18'])) {
                                                                              echo $_POST['rectn18'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto18" class="custom-input" value="<?php if (isset($_POST['recto18'])) {
                                                                              echo $_POST['recto18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp18" class="custom-input" readonly value="<?php if (isset($rectp18)) {
                                                                              echo $rectp18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq18" class="custom-input" readonly value="<?php if (isset($rectq18)) {
                                                                              echo $rectq18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr18" class="custom-input" readonly value="<?php if (isset($rectr18)) {
                                                                              echo $rectr18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects18" class="custom-input" readonly value="<?php if (isset($rects18)) {
                                                                              echo $rects18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt18" class="custom-input" readonly value="<?php if (isset($rectt18)) {
                                                                              echo $rectt18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu18" class="custom-input" readonly value="<?php if (isset($rectu18)) {
                                                                              echo $rectu18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv18" class="custom-input" value="<?php if (isset($_REQUEST['rectv18'])) {
                                                                              echo $_REQUEST['rectv18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw18" class="custom-input" value="<?php if (isset($_REQUEST['rectw18'])) {
                                                                              echo $_REQUEST['rectw18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx18" class="custom-input" value="<?php if (isset($_REQUEST['rectx18'])) {
                                                                              echo $_REQUEST['rectx18'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty18" class="custom-input" value="<?php if (isset($_REQUEST['recty18'])) {
                                                                              echo $_REQUEST['recty18'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz18" class="custom-input" readonly value="<?php if (isset($rectz18)) {
                                                                              echo $rectz18;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa18" class="custom-input" readonly value="<?php if (isset($rectaa18)) {
                                                                                echo $rectaa18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab18" class="custom-input" readonly value="<?php if (isset($rectab18)) {
                                                                                echo $rectab18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac18" class="custom-input" readonly value="<?php if (isset($rectac18)) {
                                                                                echo $rectac18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad18" class="custom-input" readonly value="<?php if (isset($rectad18)) {
                                                                                echo $rectad18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae18" class="custom-input" readonly value="<?php if (isset($rectae18)) {
                                                                                echo $rectae18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf18" class="custom-input" readonly value="<?php if (isset($rectaf18)) {
                                                                                echo $rectaf18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag18" class="custom-input" value="<?php if (isset($_REQUEST['rectag18'])) {
                                                                                echo $_REQUEST['rectag18'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah18" class="custom-input" value="<?php if (isset($_REQUEST['rectah18'])) {
                                                                                echo $_REQUEST['rectah18'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai18" class="custom-input" value="<?php if (isset($_REQUEST['rectai18'])) {
                                                                                echo $_REQUEST['rectai18'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj18" class="custom-input" readonly value="<?php if (isset($rectaj18)) {
                                                                                echo $rectaj18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak18" class="custom-input" readonly value="<?php if (isset($rectak18)) {
                                                                                echo $rectak18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal18" class="custom-input" readonly value="<?php if (isset($rectal18)) {
                                                                                echo $rectal18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam18" class="custom-input" readonly value="<?php if (isset($rectam18)) {
                                                                                echo $rectam18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan18" class="custom-input" readonly value="<?php if (isset($rectan18)) {
                                                                                echo $rectan18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao18" class="custom-input" readonly value="<?php if (isset($rectao18)) {
                                                                                echo $rectao18;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">19</td> -->
          <td style="position: sticky; left:0;  "></td>
          <td><input type="text" name="rectb19" class="custom-input" readonly value="<?php if (isset($rectb19)) {
                                                                              echo $rectb19;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc19" class="custom-input" value="<?php if (isset($_POST['rectc19'])) {
                                                                              echo $_POST['rectc19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd19" class="custom-input" value="<?php if (isset($_POST['rectd19'])) {
                                                                              echo $_POST['rectd19'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte19" class="custom-input" value="<?php if (isset($_POST['recte19'])) {
                                                                              echo $_POST['recte19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf19" class="custom-input" readonly value="<?php if (isset($rectf19)) {
                                                                              echo $rectf19;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg19" class="custom-input" readonly value="<?php if (isset($rectg19)) {
                                                                              echo $rectg19;
                                                                            } ?>"></td>
          <td><input type="text" name="recth19" class="custom-input" readonly value="<?php if (isset($recth19)) {
                                                                              echo $recth19;
                                                                            } ?>"></td>
          <td><input type="text" name="recti19" class="custom-input" readonly value="<?php if (isset($recti19)) {
                                                                              echo $recti19;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj19" class="custom-input" readonly value="<?php if (isset($rectj19)) {
                                                                              echo $rectj19;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk19" class="custom-input" readonly value="<?php if (isset($rectk19)) {
                                                                              echo $rectk19;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl19" class="custom-input" readonly value="<?php if (isset($rectl19)) {
                                                                              echo $rectl19;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm19" class="custom-input" value="<?php if (isset($_POST['rectm19'])) {
                                                                              echo $_POST['rectm19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn19" class="custom-input" value="<?php if (isset($_POST['rectn19'])) {
                                                                              echo $_POST['rectn19'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto19" class="custom-input" value="<?php if (isset($_POST['recto19'])) {
                                                                              echo $_POST['recto19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp19" class="custom-input" readonly value="<?php if (isset($rectp19)) {
                                                                              echo $rectp19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq19" class="custom-input" readonly value="<?php if (isset($rectq19)) {
                                                                              echo $rectq19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr19" class="custom-input" readonly value="<?php if (isset($rectr19)) {
                                                                              echo $rectr19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects19" class="custom-input" readonly value="<?php if (isset($rects19)) {
                                                                              echo $rects19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt19" class="custom-input" readonly value="<?php if (isset($rectt19)) {
                                                                              echo $rectt19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu19" class="custom-input" readonly value="<?php if (isset($rectu19)) {
                                                                              echo $rectu19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv19" class="custom-input" value="<?php if (isset($_REQUEST['rectv19'])) {
                                                                              echo $_REQUEST['rectv19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw19" class="custom-input" value="<?php if (isset($_REQUEST['rectw19'])) {
                                                                              echo $_REQUEST['rectw19'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx19" class="custom-input" value="<?php if (isset($_REQUEST['rectx19'])) {
                                                                              echo $_REQUEST['rectx19'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty19" class="custom-input" value="<?php if (isset($_REQUEST['recty19'])) {
                                                                              echo $_REQUEST['recty19'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz19" class="custom-input" readonly value="<?php if (isset($rectz19)) {
                                                                              echo $rectz19;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa19" class="custom-input" readonly value="<?php if (isset($rectaa19)) {
                                                                                echo $rectaa19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab19" class="custom-input" readonly value="<?php if (isset($rectab19)) {
                                                                                echo $rectab19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac19" class="custom-input" readonly value="<?php if (isset($rectac19)) {
                                                                                echo $rectac19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad19" class="custom-input" readonly value="<?php if (isset($rectad19)) {
                                                                                echo $rectad19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae19" class="custom-input" readonly value="<?php if (isset($rectae19)) {
                                                                                echo $rectae19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf19" class="custom-input" readonly value="<?php if (isset($rectaf19)) {
                                                                                echo $rectaf19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag19" class="custom-input" value="<?php if (isset($_REQUEST['rectag19'])) {
                                                                                echo $_REQUEST['rectag19'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah19" class="custom-input" value="<?php if (isset($_REQUEST['rectah19'])) {
                                                                                echo $_REQUEST['rectah19'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai19" class="custom-input" value="<?php if (isset($_REQUEST['rectai19'])) {
                                                                                echo $_REQUEST['rectai19'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj19" class="custom-input" readonly value="<?php if (isset($rectaj19)) {
                                                                                echo $rectaj19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak19" class="custom-input" readonly value="<?php if (isset($rectak19)) {
                                                                                echo $rectak19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal19" class="custom-input" readonly value="<?php if (isset($rectal19)) {
                                                                                echo $rectal19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam19" class="custom-input" readonly value="<?php if (isset($rectam19)) {
                                                                                echo $rectam19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan19" class="custom-input" readonly value="<?php if (isset($rectan19)) {
                                                                                echo $rectan19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao19" class="custom-input" readonly value="<?php if (isset($rectao19)) {
                                                                                echo $rectao19;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">20</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb20" class="custom-input" readonly value="<?php if (isset($rectb20)) {
                                                                              echo $rectb20;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc20" class="custom-input" value="<?php if (isset($_POST['rectc20'])) {
                                                                              echo $_POST['rectc20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd20" class="custom-input" value="<?php if (isset($_POST['rectd20'])) {
                                                                              echo $_POST['rectd20'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte20" class="custom-input" value="<?php if (isset($_POST['recte20'])) {
                                                                              echo $_POST['recte20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf20" class="custom-input" readonly value="<?php if (isset($rectf20)) {
                                                                              echo $rectf20;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg20" class="custom-input" readonly value="<?php if (isset($rectg20)) {
                                                                              echo $rectg20;
                                                                            } ?>"></td>
          <td><input type="text" name="recth20" class="custom-input" readonly value="<?php if (isset($recth20)) {
                                                                              echo $recth20;
                                                                            } ?>"></td>
          <td><input type="text" name="recti20" class="custom-input" readonly value="<?php if (isset($recti20)) {
                                                                              echo $recti20;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj20" class="custom-input" readonly value="<?php if (isset($rectj20)) {
                                                                              echo $rectj20;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk20" class="custom-input" readonly value="<?php if (isset($rectk20)) {
                                                                              echo $rectk20;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl20" class="custom-input" readonly value="<?php if (isset($rectl20)) {
                                                                              echo $rectl20;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm20" class="custom-input" value="<?php if (isset($_POST['rectm20'])) {
                                                                              echo $_POST['rectm20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn20" class="custom-input" value="<?php if (isset($_POST['rectn20'])) {
                                                                              echo $_POST['rectn20'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto20" class="custom-input" value="<?php if (isset($_POST['recto20'])) {
                                                                              echo $_POST['recto20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp20" class="custom-input" readonly value="<?php if (isset($rectp20)) {
                                                                              echo $rectp20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq20" class="custom-input" readonly value="<?php if (isset($rectq20)) {
                                                                              echo $rectq20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr20" class="custom-input" readonly value="<?php if (isset($rectr20)) {
                                                                              echo $rectr20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects20" class="custom-input" readonly value="<?php if (isset($rects20)) {
                                                                              echo $rects20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt20" class="custom-input" readonly value="<?php if (isset($rectt20)) {
                                                                              echo $rectt20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu20" class="custom-input" readonly value="<?php if (isset($rectu20)) {
                                                                              echo $rectu20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv20" class="custom-input" value="<?php if (isset($_REQUEST['rectv20'])) {
                                                                              echo $_REQUEST['rectv20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw20" class="custom-input" value="<?php if (isset($_REQUEST['rectw20'])) {
                                                                              echo $_REQUEST['rectw20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx20" class="custom-input" value="<?php if (isset($_REQUEST['rectx20'])) {
                                                                              echo $_REQUEST['rectx20'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty20" class="custom-input" value="<?php if (isset($_REQUEST['recty20'])) {
                                                                              echo $_REQUEST['recty20'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz20" class="custom-input" readonly value="<?php if (isset($rectz20)) {
                                                                              echo $rectz20;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa20" class="custom-input" readonly value="<?php if (isset($rectaa20)) {
                                                                                echo $rectaa20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab20" class="custom-input" readonly value="<?php if (isset($rectab20)) {
                                                                                echo $rectab20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac20" class="custom-input" readonly value="<?php if (isset($rectac20)) {
                                                                                echo $rectac20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad20" class="custom-input" readonly value="<?php if (isset($rectad20)) {
                                                                                echo $rectad20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae20" class="custom-input" readonly value="<?php if (isset($rectae20)) {
                                                                                echo $rectae20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf20" class="custom-input" readonly value="<?php if (isset($rectaf20)) {
                                                                                echo $rectaf20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag20" class="custom-input" value="<?php if (isset($_REQUEST['rectag20'])) {
                                                                                echo $_REQUEST['rectag20'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah20" class="custom-input" value="<?php if (isset($_REQUEST['rectah20'])) {
                                                                                echo $_REQUEST['rectah20'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai20" class="custom-input" value="<?php if (isset($_REQUEST['rectai20'])) {
                                                                                echo $_REQUEST['rectai20'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj20" class="custom-input" readonly value="<?php if (isset($rectaj20)) {
                                                                                echo $rectaj20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak20" class="custom-input" readonly value="<?php if (isset($rectak20)) {
                                                                                echo $rectak20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal20" class="custom-input" readonly value="<?php if (isset($rectal20)) {
                                                                                echo $rectal20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam20" class="custom-input" readonly value="<?php if (isset($rectam20)) {
                                                                                echo $rectam20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan20" class="custom-input" readonly value="<?php if (isset($rectan20)) {
                                                                                echo $rectan20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao20" class="custom-input" readonly value="<?php if (isset($rectao20)) {
                                                                                echo $rectao20;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">21</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb21" class="custom-input" readonly value="<?php if (isset($rectb21)) {
                                                                              echo $rectb21;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc21" class="custom-input" value="<?php if (isset($_POST['rectc21'])) {
                                                                              echo $_POST['rectc21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd21" class="custom-input" value="<?php if (isset($_POST['rectd21'])) {
                                                                              echo $_POST['rectd21'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte21" class="custom-input" value="<?php if (isset($_POST['recte21'])) {
                                                                              echo $_POST['recte21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf21" class="custom-input" readonly value="<?php if (isset($rectf21)) {
                                                                              echo $rectf21;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg21" class="custom-input" readonly value="<?php if (isset($rectg21)) {
                                                                              echo $rectg21;
                                                                            } ?>"></td>
          <td><input type="text" name="recth21" class="custom-input" readonly value="<?php if (isset($recth21)) {
                                                                              echo $recth21;
                                                                            } ?>"></td>
          <td><input type="text" name="recti21" class="custom-input" readonly value="<?php if (isset($recti21)) {
                                                                              echo $recti21;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj21" class="custom-input" readonly value="<?php if (isset($rectj21)) {
                                                                              echo $rectj21;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk21" class="custom-input" readonly value="<?php if (isset($rectk21)) {
                                                                              echo $rectk21;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl21" class="custom-input" readonly value="<?php if (isset($rectl21)) {
                                                                              echo $rectl21;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm21" class="custom-input" value="<?php if (isset($_POST['rectm21'])) {
                                                                              echo $_POST['rectm21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn21" class="custom-input" value="<?php if (isset($_POST['rectn21'])) {
                                                                              echo $_POST['rectn21'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto21" class="custom-input" value="<?php if (isset($_POST['recto21'])) {
                                                                              echo $_POST['recto21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp21" class="custom-input" readonly value="<?php if (isset($rectp21)) {
                                                                              echo $rectp21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq21" class="custom-input" readonly value="<?php if (isset($rectq21)) {
                                                                              echo $rectq21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr21" class="custom-input" readonly value="<?php if (isset($rectr21)) {
                                                                              echo $rectr21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects21" class="custom-input" readonly value="<?php if (isset($rects21)) {
                                                                              echo $rects21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt21" class="custom-input" readonly value="<?php if (isset($rectt21)) {
                                                                              echo $rectt21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu21" class="custom-input" readonly value="<?php if (isset($rectu21)) {
                                                                              echo $rectu21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv21" class="custom-input" value="<?php if (isset($_REQUEST['rectv21'])) {
                                                                              echo $_REQUEST['rectv21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw21" class="custom-input" value="<?php if (isset($_REQUEST['rectw21'])) {
                                                                              echo $_REQUEST['rectw21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx21" class="custom-input" value="<?php if (isset($_REQUEST['rectx21'])) {
                                                                              echo $_REQUEST['rectx21'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty21" class="custom-input" value="<?php if (isset($_REQUEST['recty21'])) {
                                                                              echo $_REQUEST['recty21'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz21" class="custom-input" readonly value="<?php if (isset($rectz21)) {
                                                                              echo $rectz21;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa21" class="custom-input" readonly value="<?php if (isset($rectaa21)) {
                                                                                echo $rectaa21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab21" class="custom-input" readonly value="<?php if (isset($rectab21)) {
                                                                                echo $rectab21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac21" class="custom-input" readonly value="<?php if (isset($rectac21)) {
                                                                                echo $rectac21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad21" class="custom-input" readonly value="<?php if (isset($rectad21)) {
                                                                                echo $rectad21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae21" class="custom-input" readonly value="<?php if (isset($rectae21)) {
                                                                                echo $rectae21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf21" class="custom-input" readonly value="<?php if (isset($rectaf21)) {
                                                                                echo $rectaf21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag21" class="custom-input" value="<?php if (isset($_REQUEST['rectag21'])) {
                                                                                echo $_REQUEST['rectag21'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah21" class="custom-input" value="<?php if (isset($_REQUEST['rectah21'])) {
                                                                                echo $_REQUEST['rectah21'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai21" class="custom-input" value="<?php if (isset($_REQUEST['rectai21'])) {
                                                                                echo $_REQUEST['rectai21'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj21" class="custom-input" readonly value="<?php if (isset($rectaj21)) {
                                                                                echo $rectaj21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak21" class="custom-input" readonly value="<?php if (isset($rectak21)) {
                                                                                echo $rectak21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal21" class="custom-input" readonly value="<?php if (isset($rectal21)) {
                                                                                echo $rectal21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam21" class="custom-input" readonly value="<?php if (isset($rectam21)) {
                                                                                echo $rectam21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan21" class="custom-input" readonly value="<?php if (isset($rectan21)) {
                                                                                echo $rectan21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao21" class="custom-input" readonly value="<?php if (isset($rectao21)) {
                                                                                echo $rectao21;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">22</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb22" class="custom-input" readonly value="<?php if (isset($rectb22)) {
                                                                              echo $rectb22;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc22" class="custom-input" value="<?php if (isset($_POST['rectc22'])) {
                                                                              echo $_POST['rectc22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd22" class="custom-input" value="<?php if (isset($_POST['rectd22'])) {
                                                                              echo $_POST['rectd22'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte22" class="custom-input" value="<?php if (isset($_POST['recte22'])) {
                                                                              echo $_POST['recte22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf22" class="custom-input" readonly value="<?php if (isset($rectf22)) {
                                                                              echo $rectf22;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg22" class="custom-input" readonly value="<?php if (isset($rectg22)) {
                                                                              echo $rectg22;
                                                                            } ?>"></td>
          <td><input type="text" name="recth22" class="custom-input" readonly value="<?php if (isset($recth22)) {
                                                                              echo $recth22;
                                                                            } ?>"></td>
          <td><input type="text" name="recti22" class="custom-input" readonly value="<?php if (isset($recti22)) {
                                                                              echo $recti22;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj22" class="custom-input" readonly value="<?php if (isset($rectj22)) {
                                                                              echo $rectj22;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk22" class="custom-input" readonly value="<?php if (isset($rectk22)) {
                                                                              echo $rectk22;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl22" class="custom-input" readonly value="<?php if (isset($rectl22)) {
                                                                              echo $rectl22;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm22" class="custom-input" value="<?php if (isset($_POST['rectm22'])) {
                                                                              echo $_POST['rectm22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn22" class="custom-input" value="<?php if (isset($_POST['rectn22'])) {
                                                                              echo $_POST['rectn22'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto22" class="custom-input" value="<?php if (isset($_POST['recto22'])) {
                                                                              echo $_POST['recto22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp22" class="custom-input" readonly value="<?php if (isset($rectp22)) {
                                                                              echo $rectp22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq22" class="custom-input" readonly value="<?php if (isset($rectq22)) {
                                                                              echo $rectq22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr22" class="custom-input" readonly value="<?php if (isset($rectr22)) {
                                                                              echo $rectr22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects22" class="custom-input" readonly value="<?php if (isset($rects22)) {
                                                                              echo $rects22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt22" class="custom-input" readonly value="<?php if (isset($rectt22)) {
                                                                              echo $rectt22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu22" class="custom-input" readonly value="<?php if (isset($rectu22)) {
                                                                              echo $rectu22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv22" class="custom-input" value="<?php if (isset($_REQUEST['rectv22'])) {
                                                                              echo $_REQUEST['rectv22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw22" class="custom-input" value="<?php if (isset($_REQUEST['rectw22'])) {
                                                                              echo $_REQUEST['rectw22'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx22" class="custom-input" value="<?php if (isset($_REQUEST['rectx22'])) {
                                                                              echo $_REQUEST['rectx22'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty22" class="custom-input" value="<?php if (isset($_REQUEST['recty22'])) {
                                                                              echo $_REQUEST['recty22'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz22" class="custom-input" readonly value="<?php if (isset($rectz22)) {
                                                                              echo $rectz22;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa22" class="custom-input" readonly value="<?php if (isset($rectaa22)) {
                                                                                echo $rectaa22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab22" class="custom-input" readonly value="<?php if (isset($rectab22)) {
                                                                                echo $rectab22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac22" class="custom-input" readonly value="<?php if (isset($rectac22)) {
                                                                                echo $rectac22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad22" class="custom-input" readonly value="<?php if (isset($rectad22)) {
                                                                                echo $rectad22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae22" class="custom-input" readonly value="<?php if (isset($rectae22)) {
                                                                                echo $rectae22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf22" class="custom-input" readonly value="<?php if (isset($rectaf22)) {
                                                                                echo $rectaf22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag22" class="custom-input" value="<?php if (isset($_REQUEST['rectag22'])) {
                                                                                echo $_REQUEST['rectag22'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah22" class="custom-input" value="<?php if (isset($_REQUEST['rectah22'])) {
                                                                                echo $_REQUEST['rectah22'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai22" class="custom-input" value="<?php if (isset($_REQUEST['rectai22'])) {
                                                                                echo $_REQUEST['rectai22'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj22" class="custom-input" readonly value="<?php if (isset($rectaj22)) {
                                                                                echo $rectaj22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak22" class="custom-input" readonly value="<?php if (isset($rectak22)) {
                                                                                echo $rectak22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal22" class="custom-input" readonly value="<?php if (isset($rectal22)) {
                                                                                echo $rectal22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam22" class="custom-input" readonly value="<?php if (isset($rectam22)) {
                                                                                echo $rectam22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan22" class="custom-input" readonly value="<?php if (isset($rectan22)) {
                                                                                echo $rectan22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao22" class="custom-input" readonly value="<?php if (isset($rectao22)) {
                                                                                echo $rectao22;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">23</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb23" class="custom-input" readonly value="<?php if (isset($rectb23)) {
                                                                              echo $rectb23;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc23" class="custom-input" value="<?php if (isset($_POST['rectc23'])) {
                                                                              echo $_POST['rectc23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd23" class="custom-input" value="<?php if (isset($_POST['rectd23'])) {
                                                                              echo $_POST['rectd23'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte23" class="custom-input" value="<?php if (isset($_POST['recte23'])) {
                                                                              echo $_POST['recte23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf23" class="custom-input" readonly value="<?php if (isset($rectf23)) {
                                                                              echo $rectf23;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg23" class="custom-input" readonly value="<?php if (isset($rectg23)) {
                                                                              echo $rectg23;
                                                                            } ?>"></td>
          <td><input type="text" name="recth23" class="custom-input" readonly value="<?php if (isset($recth23)) {
                                                                              echo $recth23;
                                                                            } ?>"></td>
          <td><input type="text" name="recti23" class="custom-input" readonly value="<?php if (isset($recti23)) {
                                                                              echo $recti23;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj23" class="custom-input" readonly value="<?php if (isset($rectj23)) {
                                                                              echo $rectj23;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk23" class="custom-input" readonly value="<?php if (isset($rectk23)) {
                                                                              echo $rectk23;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl23" class="custom-input" readonly value="<?php if (isset($rectl23)) {
                                                                              echo $rectl23;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm23" class="custom-input" value="<?php if (isset($_POST['rectm23'])) {
                                                                              echo $_POST['rectm23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn23" class="custom-input" value="<?php if (isset($_POST['rectn23'])) {
                                                                              echo $_POST['rectn23'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto23" class="custom-input" value="<?php if (isset($_POST['recto23'])) {
                                                                              echo $_POST['recto23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp23" class="custom-input" readonly value="<?php if (isset($rectp23)) {
                                                                              echo $rectp23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq23" class="custom-input" readonly value="<?php if (isset($rectq23)) {
                                                                              echo $rectq23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr23" class="custom-input" readonly value="<?php if (isset($rectr23)) {
                                                                              echo $rectr23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects23" class="custom-input" readonly value="<?php if (isset($rects23)) {
                                                                              echo $rects23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt23" class="custom-input" readonly value="<?php if (isset($rectt23)) {
                                                                              echo $rectt23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu23" class="custom-input" readonly value="<?php if (isset($rectu23)) {
                                                                              echo $rectu23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv23" class="custom-input" value="<?php if (isset($_REQUEST['rectv23'])) {
                                                                              echo $_REQUEST['rectv23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw23" class="custom-input" value="<?php if (isset($_REQUEST['rectw23'])) {
                                                                              echo $_REQUEST['rectw23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx23" class="custom-input" value="<?php if (isset($_REQUEST['rectx23'])) {
                                                                              echo $_REQUEST['rectx23'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty23" class="custom-input" value="<?php if (isset($_REQUEST['recty23'])) {
                                                                              echo $_REQUEST['recty23'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz23" class="custom-input" readonly value="<?php if (isset($rectz23)) {
                                                                              echo $rectz23;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa23" class="custom-input" readonly value="<?php if (isset($rectaa23)) {
                                                                                echo $rectaa23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab23" class="custom-input" readonly value="<?php if (isset($rectab23)) {
                                                                                echo $rectab23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac23" class="custom-input" readonly value="<?php if (isset($rectac23)) {
                                                                                echo $rectac23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad23" class="custom-input" readonly value="<?php if (isset($rectad23)) {
                                                                                echo $rectad23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae23" class="custom-input" readonly value="<?php if (isset($rectae23)) {
                                                                                echo $rectae23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf23" class="custom-input" readonly value="<?php if (isset($rectaf23)) {
                                                                                echo $rectaf23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag23" class="custom-input" value="<?php if (isset($_REQUEST['rectag23'])) {
                                                                                echo $_REQUEST['rectag23'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah23" class="custom-input" value="<?php if (isset($_REQUEST['rectah23'])) {
                                                                                echo $_REQUEST['rectah23'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai23" class="custom-input" value="<?php if (isset($_REQUEST['rectai23'])) {
                                                                                echo $_REQUEST['rectai23'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj23" class="custom-input" readonly value="<?php if (isset($rectaj23)) {
                                                                                echo $rectaj23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak23" class="custom-input" readonly value="<?php if (isset($rectak23)) {
                                                                                echo $rectak23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal23" class="custom-input" readonly value="<?php if (isset($rectal23)) {
                                                                                echo $rectal23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam23" class="custom-input" readonly value="<?php if (isset($rectam23)) {
                                                                                echo $rectam23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan23" class="custom-input" readonly value="<?php if (isset($rectan23)) {
                                                                                echo $rectan23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao23" class="custom-input" readonly value="<?php if (isset($rectao23)) {
                                                                                echo $rectao23;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">24</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb24" class="custom-input" readonly value="<?php if (isset($rectb24)) {
                                                                              echo $rectb24;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc24" class="custom-input" value="<?php if (isset($_POST['rectc24'])) {
                                                                              echo $_POST['rectc24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd24" class="custom-input" value="<?php if (isset($_POST['rectd24'])) {
                                                                              echo $_POST['rectd24'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte24" class="custom-input" value="<?php if (isset($_POST['recte24'])) {
                                                                              echo $_POST['recte24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf24" class="custom-input" readonly value="<?php if (isset($rectf24)) {
                                                                              echo $rectf24;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg24" class="custom-input" readonly value="<?php if (isset($rectg24)) {
                                                                              echo $rectg24;
                                                                            } ?>"></td>
          <td><input type="text" name="recth24" class="custom-input" readonly value="<?php if (isset($recth24)) {
                                                                              echo $recth24;
                                                                            } ?>"></td>
          <td><input type="text" name="recti24" class="custom-input" readonly value="<?php if (isset($recti24)) {
                                                                              echo $recti24;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj24" class="custom-input" readonly value="<?php if (isset($rectj24)) {
                                                                              echo $rectj24;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk24" class="custom-input" readonly value="<?php if (isset($rectk24)) {
                                                                              echo $rectk24;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl24" class="custom-input" readonly value="<?php if (isset($rectl24)) {
                                                                              echo $rectl24;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm24" class="custom-input" value="<?php if (isset($_POST['rectm24'])) {
                                                                              echo $_POST['rectm24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn24" class="custom-input" value="<?php if (isset($_POST['rectn24'])) {
                                                                              echo $_POST['rectn24'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto24" class="custom-input" value="<?php if (isset($_POST['recto24'])) {
                                                                              echo $_POST['recto24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp24" class="custom-input" readonly value="<?php if (isset($rectp24)) {
                                                                              echo $rectp24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq24" class="custom-input" readonly value="<?php if (isset($rectq24)) {
                                                                              echo $rectq24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr24" class="custom-input" readonly value="<?php if (isset($rectr24)) {
                                                                              echo $rectr24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects24" class="custom-input" readonly value="<?php if (isset($rects24)) {
                                                                              echo $rects24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt24" class="custom-input" readonly value="<?php if (isset($rectt24)) {
                                                                              echo $rectt24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu24" class="custom-input" readonly value="<?php if (isset($rectu24)) {
                                                                              echo $rectu24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv24" class="custom-input" value="<?php if (isset($_REQUEST['rectv24'])) {
                                                                              echo $_REQUEST['rectv24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw24" class="custom-input" value="<?php if (isset($_REQUEST['rectw24'])) {
                                                                              echo $_REQUEST['rectw24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx24" class="custom-input" value="<?php if (isset($_REQUEST['rectx24'])) {
                                                                              echo $_REQUEST['rectx24'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty24" class="custom-input" value="<?php if (isset($_REQUEST['recty24'])) {
                                                                              echo $_REQUEST['recty24'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz24" class="custom-input" readonly value="<?php if (isset($rectz24)) {
                                                                              echo $rectz24;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa24" class="custom-input" readonly value="<?php if (isset($rectaa24)) {
                                                                                echo $rectaa24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab24" class="custom-input" readonly value="<?php if (isset($rectab24)) {
                                                                                echo $rectab24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac24" class="custom-input" readonly value="<?php if (isset($rectac24)) {
                                                                                echo $rectac24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad24" class="custom-input" readonly value="<?php if (isset($rectad24)) {
                                                                                echo $rectad24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae24" class="custom-input" readonly value="<?php if (isset($rectae24)) {
                                                                                echo $rectae24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf24" class="custom-input" readonly value="<?php if (isset($rectaf24)) {
                                                                                echo $rectaf24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag24" class="custom-input" value="<?php if (isset($_REQUEST['rectag24'])) {
                                                                                echo $_REQUEST['rectag24'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah24" class="custom-input" value="<?php if (isset($_REQUEST['rectah24'])) {
                                                                                echo $_REQUEST['rectah24'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai24" class="custom-input" value="<?php if (isset($_REQUEST['rectai24'])) {
                                                                                echo $_REQUEST['rectai24'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj24" class="custom-input" readonly value="<?php if (isset($rectaj24)) {
                                                                                echo $rectaj24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak24" class="custom-input" readonly value="<?php if (isset($rectak24)) {
                                                                                echo $rectak24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal24" class="custom-input" readonly value="<?php if (isset($rectal24)) {
                                                                                echo $rectal24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam24" class="custom-input" readonly value="<?php if (isset($rectam24)) {
                                                                                echo $rectam24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan24" class="custom-input" readonly value="<?php if (isset($rectan24)) {
                                                                                echo $rectan24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao24" class="custom-input" readonly value="<?php if (isset($rectao24)) {
                                                                                echo $rectao24;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">25</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb25" class="custom-input" readonly value="<?php if (isset($rectb25)) {
                                                                              echo $rectb25;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc25" class="custom-input" value="<?php if (isset($_POST['rectc25'])) {
                                                                              echo $_POST['rectc25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd25" class="custom-input" value="<?php if (isset($_POST['rectd25'])) {
                                                                              echo $_POST['rectd25'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte25" class="custom-input" value="<?php if (isset($_POST['recte25'])) {
                                                                              echo $_POST['recte25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf25" class="custom-input" readonly value="<?php if (isset($rectf25)) {
                                                                              echo $rectf25;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg25" class="custom-input" readonly value="<?php if (isset($rectg25)) {
                                                                              echo $rectg25;
                                                                            } ?>"></td>
          <td><input type="text" name="recth25" class="custom-input" readonly value="<?php if (isset($recth25)) {
                                                                              echo $recth25;
                                                                            } ?>"></td>
          <td><input type="text" name="recti25" class="custom-input" readonly value="<?php if (isset($recti25)) {
                                                                              echo $recti25;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj25" class="custom-input" readonly value="<?php if (isset($rectj25)) {
                                                                              echo $rectj25;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk25" class="custom-input" readonly value="<?php if (isset($rectk25)) {
                                                                              echo $rectk25;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl25" class="custom-input" readonly value="<?php if (isset($rectl25)) {
                                                                              echo $rectl25;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm25" class="custom-input" value="<?php if (isset($_POST['rectm25'])) {
                                                                              echo $_POST['rectm25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn25" class="custom-input" value="<?php if (isset($_POST['rectn25'])) {
                                                                              echo $_POST['rectn25'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto25" class="custom-input" value="<?php if (isset($_POST['recto25'])) {
                                                                              echo $_POST['recto25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp25" class="custom-input" readonly value="<?php if (isset($rectp25)) {
                                                                              echo $rectp25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq25" class="custom-input" readonly value="<?php if (isset($rectq25)) {
                                                                              echo $rectq25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr25" class="custom-input" readonly value="<?php if (isset($rectr25)) {
                                                                              echo $rectr25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects25" class="custom-input" readonly value="<?php if (isset($rects25)) {
                                                                              echo $rects25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt25" class="custom-input" readonly value="<?php if (isset($rectt25)) {
                                                                              echo $rectt25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu25" class="custom-input" readonly value="<?php if (isset($rectu25)) {
                                                                              echo $rectu25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv25" class="custom-input" value="<?php if (isset($_REQUEST['rectv25'])) {
                                                                              echo $_REQUEST['rectv25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw25" class="custom-input" value="<?php if (isset($_REQUEST['rectw25'])) {
                                                                              echo $_REQUEST['rectw25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx25" class="custom-input" value="<?php if (isset($_REQUEST['rectx25'])) {
                                                                              echo $_REQUEST['rectx25'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty25" class="custom-input" value="<?php if (isset($_REQUEST['recty25'])) {
                                                                              echo $_REQUEST['recty25'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz25" class="custom-input" readonly value="<?php if (isset($rectz25)) {
                                                                              echo $rectz25;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa25" class="custom-input" readonly value="<?php if (isset($rectaa25)) {
                                                                                echo $rectaa25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab25" class="custom-input" readonly value="<?php if (isset($rectab25)) {
                                                                                echo $rectab25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac25" class="custom-input" readonly value="<?php if (isset($rectac25)) {
                                                                                echo $rectac25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad25" class="custom-input" readonly value="<?php if (isset($rectad25)) {
                                                                                echo $rectad25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae25" class="custom-input" readonly value="<?php if (isset($rectae25)) {
                                                                                echo $rectae25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf25" class="custom-input" readonly value="<?php if (isset($rectaf25)) {
                                                                                echo $rectaf25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag25" class="custom-input" value="<?php if (isset($_REQUEST['rectag25'])) {
                                                                                echo $_REQUEST['rectag25'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah25" class="custom-input" value="<?php if (isset($_REQUEST['rectah25'])) {
                                                                                echo $_REQUEST['rectah25'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai25" class="custom-input" value="<?php if (isset($_REQUEST['rectai25'])) {
                                                                                echo $_REQUEST['rectai25'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj25" class="custom-input" readonly value="<?php if (isset($rectaj25)) {
                                                                                echo $rectaj25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak25" class="custom-input" readonly value="<?php if (isset($rectak25)) {
                                                                                echo $rectak25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal25" class="custom-input" readonly value="<?php if (isset($rectal25)) {
                                                                                echo $rectal25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam25" class="custom-input" readonly value="<?php if (isset($rectam25)) {
                                                                                echo $rectam25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan25" class="custom-input" readonly value="<?php if (isset($rectan25)) {
                                                                                echo $rectan25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao25" class="custom-input" readonly value="<?php if (isset($rectao25)) {
                                                                                echo $rectao25;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">26</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb26" class="custom-input" readonly value="<?php if (isset($rectb26)) {
                                                                              echo $rectb26;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc26" class="custom-input" value="<?php if (isset($_POST['rectc26'])) {
                                                                              echo $_POST['rectc26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd26" class="custom-input" value="<?php if (isset($_POST['rectd26'])) {
                                                                              echo $_POST['rectd26'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte26" class="custom-input" value="<?php if (isset($_POST['recte26'])) {
                                                                              echo $_POST['recte26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf26" class="custom-input" readonly value="<?php if (isset($rectf26)) {
                                                                              echo $rectf26;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg26" class="custom-input" readonly value="<?php if (isset($rectg26)) {
                                                                              echo $rectg26;
                                                                            } ?>"></td>
          <td><input type="text" name="recth26" class="custom-input" readonly value="<?php if (isset($recth26)) {
                                                                              echo $recth26;
                                                                            } ?>"></td>
          <td><input type="text" name="recti26" class="custom-input" readonly value="<?php if (isset($recti26)) {
                                                                              echo $recti26;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj26" class="custom-input" readonly value="<?php if (isset($rectj26)) {
                                                                              echo $rectj26;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk26" class="custom-input" readonly value="<?php if (isset($rectk26)) {
                                                                              echo $rectk26;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl26" class="custom-input" readonly value="<?php if (isset($rectl26)) {
                                                                              echo $rectl26;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm26" class="custom-input" value="<?php if (isset($_POST['rectm26'])) {
                                                                              echo $_POST['rectm26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn26" class="custom-input" value="<?php if (isset($_POST['rectn26'])) {
                                                                              echo $_POST['rectn26'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto26" class="custom-input" value="<?php if (isset($_POST['recto26'])) {
                                                                              echo $_POST['recto26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp26" class="custom-input" readonly value="<?php if (isset($rectp26)) {
                                                                              echo $rectp26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq26" class="custom-input" readonly value="<?php if (isset($rectq26)) {
                                                                              echo $rectq26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr26" class="custom-input" readonly value="<?php if (isset($rectr26)) {
                                                                              echo $rectr26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects26" class="custom-input" readonly value="<?php if (isset($rects26)) {
                                                                              echo $rects26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt26" class="custom-input" readonly value="<?php if (isset($rectt26)) {
                                                                              echo $rectt26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu26" class="custom-input" readonly value="<?php if (isset($rectu26)) {
                                                                              echo $rectu26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv26" class="custom-input" value="<?php if (isset($_REQUEST['rectv26'])) {
                                                                              echo $_REQUEST['rectv26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw26" class="custom-input" value="<?php if (isset($_REQUEST['rectw26'])) {
                                                                              echo $_REQUEST['rectw26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx26" class="custom-input" value="<?php if (isset($_REQUEST['rectx26'])) {
                                                                              echo $_REQUEST['rectx26'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty26" class="custom-input" value="<?php if (isset($_REQUEST['recty26'])) {
                                                                              echo $_REQUEST['recty26'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz26" class="custom-input" readonly value="<?php if (isset($rectz26)) {
                                                                              echo $rectz26;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa26" class="custom-input" readonly value="<?php if (isset($rectaa26)) {
                                                                                echo $rectaa26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab26" class="custom-input" readonly value="<?php if (isset($rectab26)) {
                                                                                echo $rectab26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac26" class="custom-input" readonly value="<?php if (isset($rectac26)) {
                                                                                echo $rectac26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad26" class="custom-input" readonly value="<?php if (isset($rectad26)) {
                                                                                echo $rectad26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae26" class="custom-input" readonly value="<?php if (isset($rectae26)) {
                                                                                echo $rectae26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf26" class="custom-input" readonly value="<?php if (isset($rectaf26)) {
                                                                                echo $rectaf26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag26" class="custom-input" value="<?php if (isset($_REQUEST['rectag26'])) {
                                                                                echo $_REQUEST['rectag26'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah26" class="custom-input" value="<?php if (isset($_REQUEST['rectah26'])) {
                                                                                echo $_REQUEST['rectah26'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai26" class="custom-input" value="<?php if (isset($_REQUEST['rectai26'])) {
                                                                                echo $_REQUEST['rectai26'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj26" class="custom-input" readonly value="<?php if (isset($rectaj26)) {
                                                                                echo $rectaj26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak26" class="custom-input" readonly value="<?php if (isset($rectak26)) {
                                                                                echo $rectak26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal26" class="custom-input" readonly value="<?php if (isset($rectal26)) {
                                                                                echo $rectal26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam26" class="custom-input" readonly value="<?php if (isset($rectam26)) {
                                                                                echo $rectam26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan26" class="custom-input" readonly value="<?php if (isset($rectan26)) {
                                                                                echo $rectan26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao26" class="custom-input" readonly value="<?php if (isset($rectao26)) {
                                                                                echo $rectao26;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">27</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb27" class="custom-input" readonly value="<?php if (isset($rectb27)) {
                                                                              echo $rectb27;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc27" class="custom-input" value="<?php if (isset($_POST['rectc27'])) {
                                                                              echo $_POST['rectc27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd27" class="custom-input" value="<?php if (isset($_POST['rectd27'])) {
                                                                              echo $_POST['rectd27'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte27" class="custom-input" value="<?php if (isset($_POST['recte27'])) {
                                                                              echo $_POST['recte27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf27" class="custom-input" readonly value="<?php if (isset($rectf27)) {
                                                                              echo $rectf27;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg27" class="custom-input" readonly value="<?php if (isset($rectg27)) {
                                                                              echo $rectg27;
                                                                            } ?>"></td>
          <td><input type="text" name="recth27" class="custom-input" readonly value="<?php if (isset($recth27)) {
                                                                              echo $recth27;
                                                                            } ?>"></td>
          <td><input type="text" name="recti27" class="custom-input" readonly value="<?php if (isset($recti27)) {
                                                                              echo $recti27;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj27" class="custom-input" readonly value="<?php if (isset($rectj27)) {
                                                                              echo $rectj27;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk27" class="custom-input" readonly value="<?php if (isset($rectk27)) {
                                                                              echo $rectk27;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl27" class="custom-input" readonly value="<?php if (isset($rectl27)) {
                                                                              echo $rectl27;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm27" class="custom-input" value="<?php if (isset($_POST['rectm27'])) {
                                                                              echo $_POST['rectm27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn27" class="custom-input" value="<?php if (isset($_POST['rectn27'])) {
                                                                              echo $_POST['rectn27'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto27" class="custom-input" value="<?php if (isset($_POST['recto27'])) {
                                                                              echo $_POST['recto27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp27" class="custom-input" readonly value="<?php if (isset($rectp27)) {
                                                                              echo $rectp27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq27" class="custom-input" readonly value="<?php if (isset($rectq27)) {
                                                                              echo $rectq27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr27" class="custom-input" readonly value="<?php if (isset($rectr27)) {
                                                                              echo $rectr27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects27" class="custom-input" readonly value="<?php if (isset($rects27)) {
                                                                              echo $rects27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt27" class="custom-input" readonly value="<?php if (isset($rectt27)) {
                                                                              echo $rectt27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu27" class="custom-input" readonly value="<?php if (isset($rectu27)) {
                                                                              echo $rectu27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv27" class="custom-input" value="<?php if (isset($_REQUEST['rectv27'])) {
                                                                              echo $_REQUEST['rectv27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw27" class="custom-input" value="<?php if (isset($_REQUEST['rectw27'])) {
                                                                              echo $_REQUEST['rectw27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx27" class="custom-input" value="<?php if (isset($_REQUEST['rectx27'])) {
                                                                              echo $_REQUEST['rectx27'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty27" class="custom-input" value="<?php if (isset($_REQUEST['recty27'])) {
                                                                              echo $_REQUEST['recty27'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz27" class="custom-input" readonly value="<?php if (isset($rectz27)) {
                                                                              echo $rectz27;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa27" class="custom-input" readonly value="<?php if (isset($rectaa27)) {
                                                                                echo $rectaa27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab27" class="custom-input" readonly value="<?php if (isset($rectab27)) {
                                                                                echo $rectab27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac27" class="custom-input" readonly value="<?php if (isset($rectac27)) {
                                                                                echo $rectac27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad27" class="custom-input" readonly value="<?php if (isset($rectad27)) {
                                                                                echo $rectad27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae27" class="custom-input" readonly value="<?php if (isset($rectae27)) {
                                                                                echo $rectae27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf27" class="custom-input" readonly value="<?php if (isset($rectaf27)) {
                                                                                echo $rectaf27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag27" class="custom-input" value="<?php if (isset($_REQUEST['rectag27'])) {
                                                                                echo $_REQUEST['rectag27'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah27" class="custom-input" value="<?php if (isset($_REQUEST['rectah27'])) {
                                                                                echo $_REQUEST['rectah27'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai27" class="custom-input" value="<?php if (isset($_REQUEST['rectai27'])) {
                                                                                echo $_REQUEST['rectai27'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj27" class="custom-input" readonly value="<?php if (isset($rectaj27)) {
                                                                                echo $rectaj27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak27" class="custom-input" readonly value="<?php if (isset($rectak27)) {
                                                                                echo $rectak27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal27" class="custom-input" readonly value="<?php if (isset($rectal27)) {
                                                                                echo $rectal27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam27" class="custom-input" readonly value="<?php if (isset($rectam27)) {
                                                                                echo $rectam27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan27" class="custom-input" readonly value="<?php if (isset($rectan27)) {
                                                                                echo $rectan27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao27" class="custom-input" readonly value="<?php if (isset($rectao27)) {
                                                                                echo $rectao27;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">28</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb28" class="custom-input" readonly value="<?php if (isset($rectb28)) {
                                                                              echo $rectb28;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc28" class="custom-input" value="<?php if (isset($_POST['rectc28'])) {
                                                                              echo $_POST['rectc28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd28" class="custom-input" value="<?php if (isset($_POST['rectd28'])) {
                                                                              echo $_POST['rectd28'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte28" class="custom-input" value="<?php if (isset($_POST['recte28'])) {
                                                                              echo $_POST['recte28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf28" class="custom-input" readonly value="<?php if (isset($rectf28)) {
                                                                              echo $rectf28;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg28" class="custom-input" readonly value="<?php if (isset($rectg28)) {
                                                                              echo $rectg28;
                                                                            } ?>"></td>
          <td><input type="text" name="recth28" class="custom-input" readonly value="<?php if (isset($recth28)) {
                                                                              echo $recth28;
                                                                            } ?>"></td>
          <td><input type="text" name="recti28" class="custom-input" readonly value="<?php if (isset($recti28)) {
                                                                              echo $recti28;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj28" class="custom-input" readonly value="<?php if (isset($rectj28)) {
                                                                              echo $rectj28;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk28" class="custom-input" readonly value="<?php if (isset($rectk28)) {
                                                                              echo $rectk28;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl28" class="custom-input" readonly value="<?php if (isset($rectl28)) {
                                                                              echo $rectl28;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm28" class="custom-input" value="<?php if (isset($_POST['rectm28'])) {
                                                                              echo $_POST['rectm28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn28" class="custom-input" value="<?php if (isset($_POST['rectn28'])) {
                                                                              echo $_POST['rectn28'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto28" class="custom-input" value="<?php if (isset($_POST['recto28'])) {
                                                                              echo $_POST['recto28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp28" class="custom-input" value="<?php if (isset($rectp28)) {
                                                                              echo $rectp28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq28" class="custom-input" readonly value="<?php if (isset($rectq28)) {
                                                                              echo $rectq28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr28" class="custom-input" readonly value="<?php if (isset($rectr28)) {
                                                                              echo $rectr28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects28" class="custom-input" readonly value="<?php if (isset($rects28)) {
                                                                              echo $rects28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt28" class="custom-input" readonly value="<?php if (isset($rectt28)) {
                                                                              echo $rectt28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu28" class="custom-input" readonly value="<?php if (isset($rectu28)) {
                                                                              echo $rectu28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv28" class="custom-input" value="<?php if (isset($_REQUEST['rectv28'])) {
                                                                              echo $_REQUEST['rectv28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw28" class="custom-input" value="<?php if (isset($_REQUEST['rectw28'])) {
                                                                              echo $_REQUEST['rectw28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx28" class="custom-input" value="<?php if (isset($_REQUEST['rectx28'])) {
                                                                              echo $_REQUEST['rectx28'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty28" class="custom-input" value="<?php if (isset($_REQUEST['recty28'])) {
                                                                              echo $_REQUEST['recty28'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz28" class="custom-input" readonly value="<?php if (isset($rectz28)) {
                                                                              echo $rectz28;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa28" class="custom-input" readonly value="<?php if (isset($rectaa28)) {
                                                                                echo $rectaa28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab28" class="custom-input" readonly value="<?php if (isset($rectab28)) {
                                                                                echo $rectab28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac28" class="custom-input" readonly value="<?php if (isset($rectac28)) {
                                                                                echo $rectac28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad28" class="custom-input" readonly value="<?php if (isset($rectad28)) {
                                                                                echo $rectad28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae28" class="custom-input" readonly value="<?php if (isset($rectae28)) {
                                                                                echo $rectae28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf28" class="custom-input" readonly value="<?php if (isset($rectaf28)) {
                                                                                echo $rectaf28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag28" class="custom-input" value="<?php if (isset($_REQUEST['rectag28'])) {
                                                                                echo $_REQUEST['rectag28'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah28" class="custom-input" value="<?php if (isset($_REQUEST['rectah28'])) {
                                                                                echo $_REQUEST['rectah28'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai28" class="custom-input" value="<?php if (isset($_REQUEST['rectai28'])) {
                                                                                echo $_REQUEST['rectai28'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj28" class="custom-input" readonly value="<?php if (isset($rectaj28)) {
                                                                                echo $rectaj28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak28" class="custom-input" readonly value="<?php if (isset($rectak28)) {
                                                                                echo $rectak28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal28" class="custom-input" readonly value="<?php if (isset($rectal28)) {
                                                                                echo $rectal28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam28" class="custom-input" readonly value="<?php if (isset($rectam28)) {
                                                                                echo $rectam28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan28" class="custom-input" readonly value="<?php if (isset($rectan28)) {
                                                                                echo $rectan28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao28" class="custom-input" readonly value="<?php if (isset($rectao28)) {
                                                                                echo $rectao28;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">29</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb29" class="custom-input" readonly value="<?php if (isset($rectb29)) {
                                                                              echo $rectb29;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc29" class="custom-input" value="<?php if (isset($_POST['rectc29'])) {
                                                                              echo $_POST['rectc29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd29" class="custom-input" value="<?php if (isset($_POST['rectd29'])) {
                                                                              echo $_POST['rectd29'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte29" class="custom-input" value="<?php if (isset($_POST['recte29'])) {
                                                                              echo $_POST['recte29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf29" class="custom-input" readonly value="<?php if (isset($rectf29)) {
                                                                              echo $rectf29;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg29" class="custom-input" readonly value="<?php if (isset($rectg29)) {
                                                                              echo $rectg29;
                                                                            } ?>"></td>
          <td><input type="text" name="recth29" class="custom-input" readonly value="<?php if (isset($recth29)) {
                                                                              echo $recth29;
                                                                            } ?>"></td>
          <td><input type="text" name="recti29" class="custom-input" readonly value="<?php if (isset($recti29)) {
                                                                              echo $recti29;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj29" class="custom-input" readonly value="<?php if (isset($rectj29)) {
                                                                              echo $rectj29;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk29" class="custom-input" readonly value="<?php if (isset($rectk29)) {
                                                                              echo $rectk29;
                                                                            } ?>"></td>

          <td><input type="text" name="rectl29" class="custom-input" readonly value="<?php if (isset($rectl29)) {
                                                                              echo $rectl29;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm29" class="custom-input" value="<?php if (isset($_POST['rectm29'])) {
                                                                              echo $_POST['rectm29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn29" class="custom-input" value="<?php if (isset($_POST['rectn29'])) {
                                                                              echo $_POST['rectn29'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto29" class="custom-input" value="<?php if (isset($_POST['recto29'])) {
                                                                              echo $_POST['recto29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp29" class="custom-input" readonly value="<?php if (isset($rectp29)) {
                                                                              echo $rectp29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq29" class="custom-input" readonly value="<?php if (isset($rectq29)) {
                                                                              echo $rectq29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr29" class="custom-input" readonly value="<?php if (isset($rectr29)) {
                                                                              echo $rectr29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects29" class="custom-input" readonly value="<?php if (isset($rects29)) {
                                                                              echo $rects29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt29" class="custom-input" readonly value="<?php if (isset($rectt29)) {
                                                                              echo $rectt29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu29" class="custom-input" readonly value="<?php if (isset($rectu29)) {
                                                                              echo $rectu29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv29" class="custom-input" value="<?php if (isset($_REQUEST['rectv29'])) {
                                                                              echo $_REQUEST['rectv29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw29" class="custom-input" value="<?php if (isset($_REQUEST['rectw29'])) {
                                                                              echo $_REQUEST['rectw29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx29" class="custom-input" value="<?php if (isset($_REQUEST['rectx29'])) {
                                                                              echo $_REQUEST['rectx29'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty29" class="custom-input" value="<?php if (isset($_REQUEST['recty29'])) {
                                                                              echo $_REQUEST['recty29'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz29" class="custom-input" readonly value="<?php if (isset($rectz29)) {
                                                                              echo $rectz29;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa29" class="custom-input" readonly value="<?php if (isset($rectaa29)) {
                                                                                echo $rectaa29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab29" class="custom-input" readonly value="<?php if (isset($rectab29)) {
                                                                                echo $rectab29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac29" class="custom-input" readonly value="<?php if (isset($rectac29)) {
                                                                                echo $rectac29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad29" class="custom-input" readonly value="<?php if (isset($rectad29)) {
                                                                                echo $rectad29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae29" class="custom-input" readonly value="<?php if (isset($rectae29)) {
                                                                                echo $rectae29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf29" class="custom-input" readonly value="<?php if (isset($rectaf29)) {
                                                                                echo $rectaf29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag29" class="custom-input" value="<?php if (isset($_REQUEST['rectag29'])) {
                                                                                echo $_REQUEST['rectag29'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah29" class="custom-input" value="<?php if (isset($_REQUEST['rectah29'])) {
                                                                                echo $_REQUEST['rectah29'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai29" class="custom-input" value="<?php if (isset($_REQUEST['rectai29'])) {
                                                                                echo $_REQUEST['rectai29'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj29" class="custom-input" readonly value="<?php if (isset($rectaj29)) {
                                                                                echo $rectaj29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak29" class="custom-input" readonly value="<?php if (isset($rectak29)) {
                                                                                echo $rectak29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal29" class="custom-input" readonly value="<?php if (isset($rectal29)) {
                                                                                echo $rectal29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam29" class="custom-input" readonly value="<?php if (isset($rectam29)) {
                                                                                echo $rectam29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan29" class="custom-input" readonly value="<?php if (isset($rectan29)) {
                                                                                echo $rectan29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao29" class="custom-input" readonly value="<?php if (isset($rectao29)) {
                                                                                echo $rectao29;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">30</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb30" class="custom-input" readonly value="<?php if (isset($rectb30)) {
                                                                              echo $rectb30;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc30" class="custom-input" value="<?php if (isset($_POST['rectc30'])) {
                                                                              echo $_POST['rectc30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd30" class="custom-input" value="<?php if (isset($_POST['rectd30'])) {
                                                                              echo $_POST['rectd30'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte30" class="custom-input" value="<?php if (isset($_POST['recte30'])) {
                                                                              echo $_POST['recte30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf30" class="custom-input" readonly value="<?php if (isset($rectf30)) {
                                                                              echo $rectf30;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg30" class="custom-input" readonly value="<?php if (isset($rectg30)) {
                                                                              echo $rectg30;
                                                                            } ?>"></td>
          <td><input type="text" name="recth30" class="custom-input" readonly value="<?php if (isset($recth30)) {
                                                                              echo $recth30;
                                                                            } ?>"></td>
          <td><input type="text" name="recti30" class="custom-input" readonly value="<?php if (isset($recti30)) {
                                                                              echo $recti30;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj30" class="custom-input" readonly value="<?php if (isset($rectj30)) {
                                                                              echo $rectj30;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk30" class="custom-input" readonly value="<?php if (isset($rectk30)) {
                                                                              echo $rectk30;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl30" class="custom-input" readonly value="<?php if (isset($rectl30)) {
                                                                              echo $rectl30;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm30" class="custom-input" value="<?php if (isset($_POST['rectm30'])) {
                                                                              echo $_POST['rectm30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn30" class="custom-input" value="<?php if (isset($_POST['rectn30'])) {
                                                                              echo $_POST['rectn30'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto30" class="custom-input" value="<?php if (isset($_POST['recto30'])) {
                                                                              echo $_POST['recto30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp30" class="custom-input" readonly value="<?php if (isset($rectp30)) {
                                                                              echo $rectp30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq30" class="custom-input" readonly value="<?php if (isset($rectq30)) {
                                                                              echo $rectq30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr30" class="custom-input" readonly value="<?php if (isset($rectr30)) {
                                                                              echo $rectr30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects30" class="custom-input" readonly value="<?php if (isset($rects30)) {
                                                                              echo $rects30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt30" class="custom-input" readonly value="<?php if (isset($rectt30)) {
                                                                              echo $rectt30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu30" class="custom-input" readonly value="<?php if (isset($rectu30)) {
                                                                              echo $rectu30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv30" class="custom-input" value="<?php if (isset($_REQUEST['rectv30'])) {
                                                                              echo $_REQUEST['rectv30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw30" class="custom-input" value="<?php if (isset($_REQUEST['rectw30'])) {
                                                                              echo $_REQUEST['rectw30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx30" class="custom-input" value="<?php if (isset($_REQUEST['rectx30'])) {
                                                                              echo $_REQUEST['rectx30'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty30" class="custom-input" value="<?php if (isset($_REQUEST['recty30'])) {
                                                                              echo $_REQUEST['recty30'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz30" class="custom-input" readonly value="<?php if (isset($rectz30)) {
                                                                              echo $rectz30;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa30" class="custom-input" readonly value="<?php if (isset($rectaa30)) {
                                                                                echo $rectaa30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab30" class="custom-input" readonly value="<?php if (isset($rectab30)) {
                                                                                echo $rectab30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac30" class="custom-input" readonly value="<?php if (isset($rectac30)) {
                                                                                echo $rectac30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad30" class="custom-input" readonly value="<?php if (isset($rectad30)) {
                                                                                echo $rectad30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae30" class="custom-input" readonly value="<?php if (isset($rectae30)) {
                                                                                echo $rectae30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf30" class="custom-input" readonly value="<?php if (isset($rectaf30)) {
                                                                                echo $rectaf30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag30" class="custom-input" value="<?php if (isset($_REQUEST['rectag30'])) {
                                                                                echo $_REQUEST['rectag30'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah30" class="custom-input" value="<?php if (isset($_REQUEST['rectah30'])) {
                                                                                echo $_REQUEST['rectah30'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai30" class="custom-input" value="<?php if (isset($_REQUEST['rectai30'])) {
                                                                                echo $_REQUEST['rectai30'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj30" class="custom-input" readonly value="<?php if (isset($rectaj30)) {
                                                                                echo $rectaj30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak30" class="custom-input" readonly value="<?php if (isset($rectak30)) {
                                                                                echo $rectak30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal30" class="custom-input" readonly value="<?php if (isset($rectal30)) {
                                                                                echo $rectal30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam30" class="custom-input" readonly value="<?php if (isset($rectam30)) {
                                                                                echo $rectam30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan30" class="custom-input" readonly value="<?php if (isset($rectan30)) {
                                                                                echo $rectan30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao30" class="custom-input" readonly value="<?php if (isset($rectao30)) {
                                                                                echo $rectao30;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">31</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb31" class="custom-input" readonly value="<?php if (isset($rectb31)) {
                                                                              echo $rectb31;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc31" class="custom-input" value="<?php if (isset($_POST['rectc31'])) {
                                                                              echo $_POST['rectc31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd31" class="custom-input" value="<?php if (isset($_POST['rectd31'])) {
                                                                              echo $_POST['rectd31'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte31" class="custom-input" value="<?php if (isset($_POST['recte31'])) {
                                                                              echo $_POST['recte31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf31" class="custom-input" readonly value="<?php if (isset($rectf31)) {
                                                                              echo $rectf31;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg31" class="custom-input" readonly value="<?php if (isset($rectg31)) {
                                                                              echo $rectg31;
                                                                            } ?>"></td>
          <td><input type="text" name="recth31" class="custom-input" readonly value="<?php if (isset($recth31)) {
                                                                              echo $recth31;
                                                                            } ?>"></td>
          <td><input type="text" name="recti31" class="custom-input" readonly value="<?php if (isset($recti31)) {
                                                                              echo $recti31;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj31" class="custom-input" readonly value="<?php if (isset($rectj31)) {
                                                                              echo $rectj31;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk31" class="custom-input" readonly value="<?php if (isset($rectk31)) {
                                                                              echo $rectk31;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl31" class="custom-input" readonly value="<?php if (isset($rectl31)) {
                                                                              echo $rectl31;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm31" class="custom-input" value="<?php if (isset($_POST['rectm31'])) {
                                                                              echo $_POST['rectm31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn31" class="custom-input" value="<?php if (isset($_POST['rectn31'])) {
                                                                              echo $_POST['rectn31'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto31" class="custom-input" value="<?php if (isset($_POST['recto31'])) {
                                                                              echo $_POST['recto31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp31" class="custom-input" readonly value="<?php if (isset($rectp31)) {
                                                                              echo $rectp31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq31" class="custom-input" readonly value="<?php if (isset($rectq31)) {
                                                                              echo $rectq31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr31" class="custom-input" readonly value="<?php if (isset($rectr31)) {
                                                                              echo $rectr31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects31" class="custom-input" readonly value="<?php if (isset($rects31)) {
                                                                              echo $rects31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt31" class="custom-input" readonly value="<?php if (isset($rectt31)) {
                                                                              echo $rectt31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu31" class="custom-input" readonly value="<?php if (isset($rectu31)) {
                                                                              echo $rectu31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv31" class="custom-input" value="<?php if (isset($_REQUEST['rectv31'])) {
                                                                              echo $_REQUEST['rectv31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw31" class="custom-input" value="<?php if (isset($_REQUEST['rectw31'])) {
                                                                              echo $_REQUEST['rectw31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx31" class="custom-input" value="<?php if (isset($_REQUEST['rectx31'])) {
                                                                              echo $_REQUEST['rectx31'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty31" class="custom-input" value="<?php if (isset($_REQUEST['recty31'])) {
                                                                              echo $_REQUEST['recty31'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz31" class="custom-input" readonly value="<?php if (isset($rectz31)) {
                                                                              echo $rectz31;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa31" class="custom-input" readonly value="<?php if (isset($rectaa31)) {
                                                                                echo $rectaa31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab31" class="custom-input" readonly value="<?php if (isset($rectab31)) {
                                                                                echo $rectab31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac31" class="custom-input" readonly value="<?php if (isset($rectac31)) {
                                                                                echo $rectac31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad31" class="custom-input" readonly value="<?php if (isset($rectad31)) {
                                                                                echo $rectad31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae31" class="custom-input" readonly value="<?php if (isset($rectae31)) {
                                                                                echo $rectae31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf31" class="custom-input" readonly value="<?php if (isset($rectaf31)) {
                                                                                echo $rectaf31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag31" class="custom-input" value="<?php if (isset($_REQUEST['rectag31'])) {
                                                                                echo $_REQUEST['rectag31'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah31" class="custom-input" value="<?php if (isset($_REQUEST['rectah31'])) {
                                                                                echo $_REQUEST['rectah31'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai31" class="custom-input" value="<?php if (isset($_REQUEST['rectai31'])) {
                                                                                echo $_REQUEST['rectai31'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj31" class="custom-input" readonly value="<?php if (isset($rectaj31)) {
                                                                                echo $rectaj31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak31" class="custom-input" readonly value="<?php if (isset($rectak31)) {
                                                                                echo $rectak31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal31" class="custom-input" readonly value="<?php if (isset($rectal31)) {
                                                                                echo $rectal31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam31" class="custom-input" readonly value="<?php if (isset($rectam31)) {
                                                                                echo $rectam31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan31" class="custom-input" readonly value="<?php if (isset($rectan31)) {
                                                                                echo $rectan31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao31" class="custom-input" readonly value="<?php if (isset($rectao31)) {
                                                                                echo $rectao31;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">32</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb32" class="custom-input" readonly value="<?php if (isset($rectb32)) {
                                                                              echo $rectb32;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc32" class="custom-input" value="<?php if (isset($_POST['rectc32'])) {
                                                                              echo $_POST['rectc32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd32" class="custom-input" value="<?php if (isset($_POST['rectd32'])) {
                                                                              echo $_POST['rectd32'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte32" class="custom-input" value="<?php if (isset($_POST['recte32'])) {
                                                                              echo $_POST['recte32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf32" class="custom-input" readonly value="<?php if (isset($rectf32)) {
                                                                              echo $rectf32;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg32" class="custom-input" readonly value="<?php if (isset($rectg32)) {
                                                                              echo $rectg32;
                                                                            } ?>"></td>
          <td><input type="text" name="recth32" class="custom-input" readonly value="<?php if (isset($recth32)) {
                                                                              echo $recth32;
                                                                            } ?>"></td>
          <td><input type="text" name="recti32" class="custom-input" readonly value="<?php if (isset($recti32)) {
                                                                              echo $recti32;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj32" class="custom-input" readonly value="<?php if (isset($rectj32)) {
                                                                              echo $rectj32;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk32" class="custom-input" readonly value="<?php if (isset($rectk32)) {
                                                                              echo $rectk32;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl32" class="custom-input" readonly value="<?php if (isset($rectl32)) {
                                                                              echo $rectl32;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm32" class="custom-input" value="<?php if (isset($_POST['rectm32'])) {
                                                                              echo $_POST['rectm32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn32" class="custom-input" value="<?php if (isset($_POST['rectn32'])) {
                                                                              echo $_POST['rectn32'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto32" class="custom-input" value="<?php if (isset($_POST['recto32'])) {
                                                                              echo $_POST['recto32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp32" class="custom-input" readonly value="<?php if (isset($rectp32)) {
                                                                              echo $rectp32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq32" class="custom-input" readonly value="<?php if (isset($rectq32)) {
                                                                              echo $rectq32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr32" class="custom-input" readonly value="<?php if (isset($rectr32)) {
                                                                              echo $rectr32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects32" class="custom-input" readonly value="<?php if (isset($rects32)) {
                                                                              echo $rects32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt32" class="custom-input" readonly value="<?php if (isset($rectt32)) {
                                                                              echo $rectt32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu32" class="custom-input" readonly value="<?php if (isset($rectu32)) {
                                                                              echo $rectu32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv32" class="custom-input" value="<?php if (isset($_REQUEST['rectv32'])) {
                                                                              echo $_REQUEST['rectv32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw32" class="custom-input" value="<?php if (isset($_REQUEST['rectw32'])) {
                                                                              echo $_REQUEST['rectw32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx32" class="custom-input" value="<?php if (isset($_REQUEST['rectx32'])) {
                                                                              echo $_REQUEST['rectx32'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty32" class="custom-input" value="<?php if (isset($_REQUEST['recty32'])) {
                                                                              echo $_REQUEST['recty32'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz32" class="custom-input" readonly value="<?php if (isset($rectz32)) {
                                                                              echo $rectz32;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa32" class="custom-input" readonly value="<?php if (isset($rectaa32)) {
                                                                                echo $rectaa32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab32" class="custom-input" readonly value="<?php if (isset($rectab32)) {
                                                                                echo $rectab32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac32" class="custom-input" readonly value="<?php if (isset($rectac32)) {
                                                                                echo $rectac32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad32" class="custom-input" readonly value="<?php if (isset($rectad32)) {
                                                                                echo $rectad32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae32" class="custom-input" readonly value="<?php if (isset($rectae32)) {
                                                                                echo $rectae32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf32" class="custom-input" readonly value="<?php if (isset($rectaf32)) {
                                                                                echo $rectaf32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag32" class="custom-input" value="<?php if (isset($_REQUEST['rectag32'])) {
                                                                                echo $_REQUEST['rectag32'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah32" class="custom-input" value="<?php if (isset($_REQUEST['rectah32'])) {
                                                                                echo $_REQUEST['rectah32'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai32" class="custom-input" value="<?php if (isset($_REQUEST['rectai32'])) {
                                                                                echo $_REQUEST['rectai32'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj32" class="custom-input" readonly value="<?php if (isset($rectaj32)) {
                                                                                echo $rectaj32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak32" class="custom-input" readonly value="<?php if (isset($rectak32)) {
                                                                                echo $rectak32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal32" class="custom-input" readonly value="<?php if (isset($rectal32)) {
                                                                                echo $rectal32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam32" class="custom-input" readonly value="<?php if (isset($rectam32)) {
                                                                                echo $rectam32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan32" class="custom-input" readonly value="<?php if (isset($rectan32)) {
                                                                                echo $rectan32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao32" class="custom-input" readonly value="<?php if (isset($rectao32)) {
                                                                                echo $rectao32;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">33</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb33" class="custom-input" readonly value="<?php if (isset($rectb33)) {
                                                                              echo $rectb33;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc33" class="custom-input" value="<?php if (isset($_POST['rectc33'])) {
                                                                              echo $_POST['rectc33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd33" class="custom-input" value="<?php if (isset($_POST['rectd33'])) {
                                                                              echo $_POST['rectd33'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte33" class="custom-input" value="<?php if (isset($_POST['recte33'])) {
                                                                              echo $_POST['recte33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf33" class="custom-input" readonly value="<?php if (isset($rectf33)) {
                                                                              echo $rectf33;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg33" class="custom-input" readonly value="<?php if (isset($rectg33)) {
                                                                              echo $rectg33;
                                                                            } ?>"></td>
          <td><input type="text" name="recth33" class="custom-input" readonly value="<?php if (isset($recth33)) {
                                                                              echo $recth33;
                                                                            } ?>"></td>
          <td><input type="text" name="recti33" class="custom-input" readonly value="<?php if (isset($recti33)) {
                                                                              echo $recti33;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj33" class="custom-input" readonly value="<?php if (isset($rectj33)) {
                                                                              echo $rectj33;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk33" class="custom-input" readonly value="<?php if (isset($rectk33)) {
                                                                              echo $rectk33;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl33" class="custom-input" readonly value="<?php if (isset($rectl33)) {
                                                                              echo $rectl33;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm33" class="custom-input" value="<?php if (isset($_POST['rectm33'])) {
                                                                              echo $_POST['rectm33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn33" class="custom-input" value="<?php if (isset($_POST['rectn33'])) {
                                                                              echo $_POST['rectn33'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto33" class="custom-input" value="<?php if (isset($_POST['recto33'])) {
                                                                              echo $_POST['recto33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp33" class="custom-input" readonly value="<?php if (isset($rectp33)) {
                                                                              echo $rectp33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq33" class="custom-input" readonly value="<?php if (isset($rectq33)) {
                                                                              echo $rectq33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr33" class="custom-input" readonly value="<?php if (isset($rectr33)) {
                                                                              echo $rectr33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects33" class="custom-input" readonly value="<?php if (isset($rects33)) {
                                                                              echo $rects33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt33" class="custom-input" readonly value="<?php if (isset($rectt33)) {
                                                                              echo $rectt33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu33" class="custom-input" readonly value="<?php if (isset($rectu33)) {
                                                                              echo $rectu33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv33" class="custom-input" value="<?php if (isset($_REQUEST['rectv33'])) {
                                                                              echo $_REQUEST['rectv33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw33" class="custom-input" value="<?php if (isset($_REQUEST['rectw33'])) {
                                                                              echo $_REQUEST['rectw33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx33" class="custom-input" value="<?php if (isset($_REQUEST['rectx33'])) {
                                                                              echo $_REQUEST['rectx33'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty33" class="custom-input" value="<?php if (isset($_REQUEST['recty33'])) {
                                                                              echo $_REQUEST['recty33'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz33" class="custom-input" readonly value="<?php if (isset($rectz33)) {
                                                                              echo $rectz33;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa33" class="custom-input" readonly value="<?php if (isset($rectaa33)) {
                                                                                echo $rectaa33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab33" class="custom-input" readonly value="<?php if (isset($rectab33)) {
                                                                                echo $rectab33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac33" class="custom-input" readonly value="<?php if (isset($rectac33)) {
                                                                                echo $rectac33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad33" class="custom-input" readonly value="<?php if (isset($rectad33)) {
                                                                                echo $rectad33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae33" class="custom-input" readonly value="<?php if (isset($rectae33)) {
                                                                                echo $rectae33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf33" class="custom-input" readonly value="<?php if (isset($rectaf33)) {
                                                                                echo $rectaf33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag33" class="custom-input" value="<?php if (isset($_REQUEST['rectag33'])) {
                                                                                echo $_REQUEST['rectag33'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah33" class="custom-input" value="<?php if (isset($_REQUEST['rectah33'])) {
                                                                                echo $_REQUEST['rectah33'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai33" class="custom-input" value="<?php if (isset($_REQUEST['rectai33'])) {
                                                                                echo $_REQUEST['rectai33'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj33" class="custom-input" readonly value="<?php if (isset($rectaj33)) {
                                                                                echo $rectaj33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak33" class="custom-input" readonly value="<?php if (isset($rectak33)) {
                                                                                echo $rectak33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal33" class="custom-input" readonly value="<?php if (isset($rectal33)) {
                                                                                echo $rectal33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam33" class="custom-input" readonly value="<?php if (isset($rectam33)) {
                                                                                echo $rectam33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan33" class="custom-input" readonly value="<?php if (isset($rectan33)) {
                                                                                echo $rectan33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao33" class="custom-input" readonly value="<?php if (isset($rectao33)) {
                                                                                echo $rectao33;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">34</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb34" class="custom-input" readonly value="<?php if (isset($rectb34)) {
                                                                              echo $rectb34;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc34" class="custom-input" value="<?php if (isset($_POST['rectc34'])) {
                                                                              echo $_POST['rectc34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd34" class="custom-input" value="<?php if (isset($_POST['rectd34'])) {
                                                                              echo $_POST['rectd34'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte34" class="custom-input" value="<?php if (isset($_POST['recte34'])) {
                                                                              echo $_POST['recte34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf34" class="custom-input" readonly value="<?php if (isset($rectf34)) {
                                                                              echo $rectf34;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg34" class="custom-input" readonly value="<?php if (isset($rectg34)) {
                                                                              echo $rectg34;
                                                                            } ?>"></td>
          <td><input type="text" name="recth34" class="custom-input" readonly value="<?php if (isset($recth34)) {
                                                                              echo $recth34;
                                                                            } ?>"></td>
          <td><input type="text" name="recti34" class="custom-input" readonly value="<?php if (isset($recti34)) {
                                                                              echo $recti34;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj34" class="custom-input" readonly value="<?php if (isset($rectj34)) {
                                                                              echo $rectj34;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk34" class="custom-input" readonly value="<?php if (isset($rectk34)) {
                                                                              echo $rectk34;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl34" class="custom-input" readonly value="<?php if (isset($rectl34)) {
                                                                              echo $rectl34;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm34" class="custom-input" value="<?php if (isset($_POST['rectm34'])) {
                                                                              echo $_POST['rectm34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn34" class="custom-input" value="<?php if (isset($_POST['rectn34'])) {
                                                                              echo $_POST['rectn34'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto34" class="custom-input" value="<?php if (isset($_POST['recto34'])) {
                                                                              echo $_POST['recto34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp34" class="custom-input" readonly value="<?php if (isset($rectp34)) {
                                                                              echo $rectp34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq34" class="custom-input" readonly value="<?php if (isset($rectq34)) {
                                                                              echo $rectq34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr34" class="custom-input" readonly value="<?php if (isset($rectr34)) {
                                                                              echo $rectr34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects34" class="custom-input" readonly value="<?php if (isset($rects34)) {
                                                                              echo $rects34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt34" class="custom-input" readonly value="<?php if (isset($rectt34)) {
                                                                              echo $rectt34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu34" class="custom-input" readonly value="<?php if (isset($rectu34)) {
                                                                              echo $rectu34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv34" class="custom-input" value="<?php if (isset($_REQUEST['rectv34'])) {
                                                                              echo $_REQUEST['rectv34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw34" class="custom-input" value="<?php if (isset($_REQUEST['rectw34'])) {
                                                                              echo $_REQUEST['rectw34'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx34" class="custom-input" value="<?php if (isset($_REQUEST['rectx34'])) {
                                                                              echo $_REQUEST['rectx34'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty34" class="custom-input" value="<?php if (isset($_REQUEST['recty34'])) {
                                                                              echo $_REQUEST['recty34'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz34" class="custom-input" readonly value="<?php if (isset($rectz34)) {
                                                                              echo $rectz34;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa34" class="custom-input" readonly value="<?php if (isset($rectaa34)) {
                                                                                echo $rectaa34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab34" class="custom-input" readonly value="<?php if (isset($rectab34)) {
                                                                                echo $rectab34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac34" class="custom-input" readonly value="<?php if (isset($rectac34)) {
                                                                                echo $rectac34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad34" class="custom-input" readonly value="<?php if (isset($rectad34)) {
                                                                                echo $rectad34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae34" class="custom-input" readonly value="<?php if (isset($rectae34)) {
                                                                                echo $rectae34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf34" class="custom-input" readonly value="<?php if (isset($rectaf34)) {
                                                                                echo $rectaf34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag34" class="custom-input" value="<?php if (isset($_REQUEST['rectag34'])) {
                                                                                echo $_REQUEST['rectag34'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah34" class="custom-input" value="<?php if (isset($_REQUEST['rectah34'])) {
                                                                                echo $_REQUEST['rectah34'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai34" class="custom-input" value="<?php if (isset($_REQUEST['rectai34'])) {
                                                                                echo $_REQUEST['rectai34'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj34" class="custom-input" readonly value="<?php if (isset($rectaj34)) {
                                                                                echo $rectaj34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak34" class="custom-input" readonly value="<?php if (isset($rectak34)) {
                                                                                echo $rectak34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal34" class="custom-input" readonly value="<?php if (isset($rectal34)) {
                                                                                echo $rectal34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam34" class="custom-input" readonly value="<?php if (isset($rectam34)) {
                                                                                echo $rectam34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan34" class="custom-input" readonly value="<?php if (isset($rectan34)) {
                                                                                echo $rectan34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao34" class="custom-input" readonly value="<?php if (isset($rectao34)) {
                                                                                echo $rectao34;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">35</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb35" class="custom-input" readonly value="<?php if (isset($rectb35)) {
                                                                              echo $rectb35;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc35" class="custom-input" value="<?php if (isset($_POST['rectc35'])) {
                                                                              echo $_POST['rectc35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd35" class="custom-input" value="<?php if (isset($_POST['rectd35'])) {
                                                                              echo $_POST['rectd35'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte35" class="custom-input" value="<?php if (isset($_POST['recte35'])) {
                                                                              echo $_POST['recte35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf35" class="custom-input" readonly value="<?php if (isset($rectf35)) {
                                                                              echo $rectf35;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg35" class="custom-input" readonly value="<?php if (isset($rectg35)) {
                                                                              echo $rectg35;
                                                                            } ?>"></td>
          <td><input type="text" name="recth35" class="custom-input" readonly value="<?php if (isset($recth35)) {
                                                                              echo $recth35;
                                                                            } ?>"></td>
          <td><input type="text" name="recti35" class="custom-input" readonly value="<?php if (isset($recti35)) {
                                                                              echo $recti35;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj35" class="custom-input" readonly value="<?php if (isset($rectj35)) {
                                                                              echo $rectj35;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk35" class="custom-input" readonly value="<?php if (isset($rectk35)) {
                                                                              echo $rectk35;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl35" class="custom-input" readonly value="<?php if (isset($rectl35)) {
                                                                              echo $rectl35;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm35" class="custom-input" value="<?php if (isset($_POST['rectm35'])) {
                                                                              echo $_POST['rectm35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn35" class="custom-input" value="<?php if (isset($_POST['rectn35'])) {
                                                                              echo $_POST['rectn35'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto35" class="custom-input" value="<?php if (isset($_POST['recto35'])) {
                                                                              echo $_POST['recto35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp35" class="custom-input" readonly value="<?php if (isset($rectp35)) {
                                                                              echo $rectp35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq35" class="custom-input" readonly value="<?php if (isset($rectq35)) {
                                                                              echo $rectq35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr35" class="custom-input" readonly value="<?php if (isset($rectr35)) {
                                                                              echo $rectr35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects35" class="custom-input" readonly value="<?php if (isset($rects35)) {
                                                                              echo $rects35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt35" class="custom-input" readonly value="<?php if (isset($rectt35)) {
                                                                              echo $rectt35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu35" class="custom-input" readonly value="<?php if (isset($rectu35)) {
                                                                              echo $rectu35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv35" class="custom-input" value="<?php if (isset($_REQUEST['rectv35'])) {
                                                                              echo $_REQUEST['rectv35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw35" class="custom-input" value="<?php if (isset($_REQUEST['rectw35'])) {
                                                                              echo $_REQUEST['rectw35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx35" class="custom-input" value="<?php if (isset($_REQUEST['rectx35'])) {
                                                                              echo $_REQUEST['rectx35'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty35" class="custom-input" value="<?php if (isset($_REQUEST['recty35'])) {
                                                                              echo $_REQUEST['recty35'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz35" class="custom-input" readonly value="<?php if (isset($rectz35)) {
                                                                              echo $rectz35;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa35" class="custom-input" readonly value="<?php if (isset($rectaa35)) {
                                                                                echo $rectaa35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab35" class="custom-input" readonly value="<?php if (isset($rectab35)) {
                                                                                echo $rectab35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac35" class="custom-input" readonly value="<?php if (isset($rectac35)) {
                                                                                echo $rectac35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad35" class="custom-input" readonly value="<?php if (isset($rectad35)) {
                                                                                echo $rectad35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae35" class="custom-input" readonly value="<?php if (isset($rectae35)) {
                                                                                echo $rectae35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf35" class="custom-input" readonly value="<?php if (isset($rectaf35)) {
                                                                                echo $rectaf35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag35" class="custom-input" value="<?php if (isset($_REQUEST['rectag35'])) {
                                                                                echo $_REQUEST['rectag35'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah35" class="custom-input" value="<?php if (isset($_REQUEST['rectah35'])) {
                                                                                echo $_REQUEST['rectah35'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai35" class="custom-input" value="<?php if (isset($_REQUEST['rectai35'])) {
                                                                                echo $_REQUEST['rectai35'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj35" class="custom-input" readonly value="<?php if (isset($rectaj35)) {
                                                                                echo $rectaj35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak35" class="custom-input" readonly value="<?php if (isset($rectak35)) {
                                                                                echo $rectak35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal35" class="custom-input" readonly value="<?php if (isset($rectal35)) {
                                                                                echo $rectal35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam35" class="custom-input" readonly value="<?php if (isset($rectam35)) {
                                                                                echo $rectam35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan35" class="custom-input" readonly value="<?php if (isset($rectan35)) {
                                                                                echo $rectan35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao35" class="custom-input" readonly value="<?php if (isset($rectao35)) {
                                                                                echo $rectao35;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">36</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb36" class="custom-input" readonly value="<?php if (isset($rectb36)) {
                                                                              echo $rectb36;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc36" class="custom-input" value="<?php if (isset($_POST['rectc36'])) {
                                                                              echo $_POST['rectc36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd36" class="custom-input" value="<?php if (isset($_POST['rectd36'])) {
                                                                              echo $_POST['rectd36'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte36" class="custom-input" value="<?php if (isset($_POST['recte36'])) {
                                                                              echo $_POST['recte36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf36" class="custom-input" readonly value="<?php if (isset($rectf36)) {
                                                                              echo $rectf36;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg36" class="custom-input" readonly value="<?php if (isset($rectg36)) {
                                                                              echo $rectg36;
                                                                            } ?>"></td>
          <td><input type="text" name="recth36" class="custom-input" readonly value="<?php if (isset($recth36)) {
                                                                              echo $recth36;
                                                                            } ?>"></td>
          <td><input type="text" name="recti36" class="custom-input" readonly value="<?php if (isset($recti36)) {
                                                                              echo $recti36;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj36" class="custom-input" readonly value="<?php if (isset($rectj36)) {
                                                                              echo $rectj36;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk36" class="custom-input" readonly value="<?php if (isset($rectk36)) {
                                                                              echo $rectk36;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl36" class="custom-input" readonly value="<?php if (isset($rectl36)) {
                                                                              echo $rectl36;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm36" class="custom-input" value="<?php if (isset($_POST['rectm36'])) {
                                                                              echo $_POST['rectm36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn36" class="custom-input" value="<?php if (isset($_POST['rectn36'])) {
                                                                              echo $_POST['rectn36'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto36" class="custom-input" value="<?php if (isset($_POST['recto36'])) {
                                                                              echo $_POST['recto36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp36" class="custom-input" readonly value="<?php if (isset($rectp36)) {
                                                                              echo $rectp36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq36" class="custom-input" readonly value="<?php if (isset($rectq36)) {
                                                                              echo $rectq36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr36" class="custom-input" readonly value="<?php if (isset($rectr36)) {
                                                                              echo $rectr36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects36" class="custom-input" readonly value="<?php if (isset($rects36)) {
                                                                              echo $rects36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt36" class="custom-input" readonly value="<?php if (isset($rectt36)) {
                                                                              echo $rectt36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu36" class="custom-input" readonly value="<?php if (isset($rectu36)) {
                                                                              echo $rectu36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv36" class="custom-input" value="<?php if (isset($_REQUEST['rectv36'])) {
                                                                              echo $_REQUEST['rectv36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw36" class="custom-input" value="<?php if (isset($_REQUEST['rectw36'])) {
                                                                              echo $_REQUEST['rectw36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx36" class="custom-input" value="<?php if (isset($_REQUEST['rectx36'])) {
                                                                              echo $_REQUEST['rectx36'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty36" class="custom-input" value="<?php if (isset($_REQUEST['recty36'])) {
                                                                              echo $_REQUEST['recty36'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz36" class="custom-input" readonly value="<?php if (isset($rectz36)) {
                                                                              echo $rectz36;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa36" class="custom-input" readonly value="<?php if (isset($rectaa36)) {
                                                                                echo $rectaa36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab36" class="custom-input" readonly value="<?php if (isset($rectab36)) {
                                                                                echo $rectab36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac36" class="custom-input" readonly value="<?php if (isset($rectac36)) {
                                                                                echo $rectac36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad36" class="custom-input" readonly value="<?php if (isset($rectad36)) {
                                                                                echo $rectad36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae36" class="custom-input" readonly value="<?php if (isset($rectae36)) {
                                                                                echo $rectae36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf36" class="custom-input" readonly value="<?php if (isset($rectaf36)) {
                                                                                echo $rectaf36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag36" class="custom-input" value="<?php if (isset($_REQUEST['rectag36'])) {
                                                                                echo $_REQUEST['rectag36'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah36" class="custom-input" value="<?php if (isset($_REQUEST['rectah36'])) {
                                                                                echo $_REQUEST['rectah36'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai36" class="custom-input" value="<?php if (isset($_REQUEST['rectai36'])) {
                                                                                echo $_REQUEST['rectai36'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj36" class="custom-input" readonly value="<?php if (isset($rectaj36)) {
                                                                                echo $rectaj36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak36" class="custom-input" readonly value="<?php if (isset($rectak36)) {
                                                                                echo $rectak36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal36" class="custom-input" readonly value="<?php if (isset($rectal36)) {
                                                                                echo $rectal36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam36" class="custom-input" readonly value="<?php if (isset($rectam36)) {
                                                                                echo $rectam36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan36" class="custom-input" readonly value="<?php if (isset($rectan36)) {
                                                                                echo $rectan36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao36" class="custom-input" readonly value="<?php if (isset($rectao36)) {
                                                                                echo $rectao36;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">37</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb37" class="custom-input" readonly value="<?php if (isset($rectb37)) {
                                                                              echo $rectb37;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc37" class="custom-input" value="<?php if (isset($_POST['rectc37'])) {
                                                                              echo $_POST['rectc37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd37" class="custom-input" value="<?php if (isset($_POST['rectd37'])) {
                                                                              echo $_POST['rectd37'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte37" class="custom-input" value="<?php if (isset($_POST['recte37'])) {
                                                                              echo $_POST['recte37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf37" class="custom-input" readonly value="<?php if (isset($rectf37)) {
                                                                              echo $rectf37;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg37" class="custom-input" readonly value="<?php if (isset($rectg37)) {
                                                                              echo $rectg37;
                                                                            } ?>"></td>
          <td><input type="text" name="recth37" class="custom-input" readonly value="<?php if (isset($recth37)) {
                                                                              echo $recth37;
                                                                            } ?>"></td>
          <td><input type="text" name="recti37" class="custom-input" readonly value="<?php if (isset($recti37)) {
                                                                              echo $recti37;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj37" class="custom-input" readonly value="<?php if (isset($rectj37)) {
                                                                              echo $rectj37;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk37" class="custom-input" readonly value="<?php if (isset($rectk37)) {
                                                                              echo $rectk37;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl37" class="custom-input" readonly value="<?php if (isset($rectl37)) {
                                                                              echo $rectl37;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm37" class="custom-input" value="<?php if (isset($_POST['rectm37'])) {
                                                                              echo $_POST['rectm37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn37" class="custom-input" value="<?php if (isset($_POST['rectn37'])) {
                                                                              echo $_POST['rectn37'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto37" class="custom-input" value="<?php if (isset($_POST['recto37'])) {
                                                                              echo $_POST['recto37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp37" class="custom-input" readonly value="<?php if (isset($rectp37)) {
                                                                              echo $rectp37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq37" class="custom-input" readonly value="<?php if (isset($rectq37)) {
                                                                              echo $rectq37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr37" class="custom-input" readonly value="<?php if (isset($rectr37)) {
                                                                              echo $rectr37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects37" class="custom-input" readonly value="<?php if (isset($rects37)) {
                                                                              echo $rects37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt37" class="custom-input" readonly value="<?php if (isset($rectt37)) {
                                                                              echo $rectt37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu37" class="custom-input" readonly value="<?php if (isset($rectu37)) {
                                                                              echo $rectu37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv37" class="custom-input" value="<?php if (isset($_REQUEST['rectv37'])) {
                                                                              echo $_REQUEST['rectv37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw37" class="custom-input" value="<?php if (isset($_REQUEST['rectw37'])) {
                                                                              echo $_REQUEST['rectw37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx37" class="custom-input" value="<?php if (isset($_REQUEST['rectx37'])) {
                                                                              echo $_REQUEST['rectx37'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty37" class="custom-input" value="<?php if (isset($_REQUEST['recty37'])) {
                                                                              echo $_REQUEST['recty37'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz37" class="custom-input" readonly value="<?php if (isset($rectz37)) {
                                                                              echo $rectz37;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa37" class="custom-input" readonly value="<?php if (isset($rectaa37)) {
                                                                                echo $rectaa37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab37" class="custom-input" readonly value="<?php if (isset($rectab37)) {
                                                                                echo $rectab37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac37" class="custom-input" readonly value="<?php if (isset($rectac37)) {
                                                                                echo $rectac37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad37" class="custom-input" readonly value="<?php if (isset($rectad37)) {
                                                                                echo $rectad37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae37" class="custom-input" readonly value="<?php if (isset($rectae37)) {
                                                                                echo $rectae37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf37" class="custom-input" readonly value="<?php if (isset($rectaf37)) {
                                                                                echo $rectaf37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag37" class="custom-input" value="<?php if (isset($_REQUEST['rectag37'])) {
                                                                                echo $_REQUEST['rectag37'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah37" class="custom-input" value="<?php if (isset($_REQUEST['rectah37'])) {
                                                                                echo $_REQUEST['rectah37'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai37" class="custom-input" value="<?php if (isset($_REQUEST['rectai37'])) {
                                                                                echo $_REQUEST['rectai37'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj37" class="custom-input" readonly value="<?php if (isset($rectaj37)) {
                                                                                echo $rectaj37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak37" class="custom-input" readonly value="<?php if (isset($rectak37)) {
                                                                                echo $rectak37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal37" class="custom-input" readonly value="<?php if (isset($rectal37)) {
                                                                                echo $rectal37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam37" class="custom-input" readonly value="<?php if (isset($rectam37)) {
                                                                                echo $rectam37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan37" class="custom-input" readonly value="<?php if (isset($rectan37)) {
                                                                                echo $rectan37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao37" class="custom-input" readonly value="<?php if (isset($rectao37)) {
                                                                                echo $rectao37;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">38</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb38" class="custom-input"readonly value="<?php if (isset($rectb38)) {
                                                                              echo $rectb38;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc38" class="custom-input" value="<?php if (isset($_POST['rectc38'])) {
                                                                              echo $_POST['rectc38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd38" class="custom-input" value="<?php if (isset($_POST['rectd38'])) {
                                                                              echo $_POST['rectd38'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte38" class="custom-input" value="<?php if (isset($_POST['recte38'])) {
                                                                              echo $_POST['recte38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf38" class="custom-input" readonly value="<?php if (isset($rectf38)) {
                                                                              echo $rectf38;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg38" class="custom-input" readonly value="<?php if (isset($rectg38)) {
                                                                              echo $rectg38;
                                                                            } ?>"></td>
          <td><input type="text" name="recth38" class="custom-input" readonly value="<?php if (isset($recth38)) {
                                                                              echo $recth38;
                                                                            } ?>"></td>
          <td><input type="text" name="recti38" class="custom-input" readonly value="<?php if (isset($recti38)) {
                                                                              echo $recti38;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj38" class="custom-input" readonly value="<?php if (isset($rectj38)) {
                                                                              echo $rectj38;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk38" class="custom-input" readonly value="<?php if (isset($rectk38)) {
                                                                              echo $rectk38;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl38" class="custom-input" readonly value="<?php if (isset($rectl38)) {
                                                                              echo $rectl38;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm38" class="custom-input" value="<?php if (isset($_POST['rectm38'])) {
                                                                              echo $_POST['rectm38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn38" class="custom-input" value="<?php if (isset($_POST['rectn38'])) {
                                                                              echo $_POST['rectn38'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto38" class="custom-input" value="<?php if (isset($_POST['recto38'])) {
                                                                              echo $_POST['recto38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp38" class="custom-input" readonly value="<?php if (isset($rectp38)) {
                                                                              echo $rectp38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq38" class="custom-input" readonly value="<?php if (isset($rectq38)) {
                                                                              echo $rectq38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr38" class="custom-input" readonly value="<?php if (isset($rectr38)) {
                                                                              echo $rectr38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects38" class="custom-input" readonly value="<?php if (isset($rects38)) {
                                                                              echo $rects38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt38" class="custom-input" readonly value="<?php if (isset($rectt38)) {
                                                                              echo $rectt38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu38" class="custom-input" readonly value="<?php if (isset($rectu38)) {
                                                                              echo $rectu38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv38" class="custom-input" value="<?php if (isset($_REQUEST['rectv38'])) {
                                                                              echo $_REQUEST['rectv38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw38" class="custom-input" value="<?php if (isset($_REQUEST['rectw38'])) {
                                                                              echo $_REQUEST['rectw38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx38" class="custom-input" value="<?php if (isset($_REQUEST['rectx38'])) {
                                                                              echo $_REQUEST['rectx38'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty38" class="custom-input" value="<?php if (isset($_REQUEST['recty38'])) {
                                                                              echo $_REQUEST['recty38'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz38" class="custom-input" readonly value="<?php if (isset($rectz38)) {
                                                                              echo $rectz38;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa38" class="custom-input" readonly value="<?php if (isset($rectaa38)) {
                                                                                echo $rectaa38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab38" class="custom-input" readonly value="<?php if (isset($rectab38)) {
                                                                                echo $rectab38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac38" class="custom-input" readonly value="<?php if (isset($rectac38)) {
                                                                                echo $rectac38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad38" class="custom-input" readonly value="<?php if (isset($rectad38)) {
                                                                                echo $rectad38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae38" class="custom-input" readonly value="<?php if (isset($rectae38)) {
                                                                                echo $rectae38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf38" class="custom-input" readonly value="<?php if (isset($rectaf38)) {
                                                                                echo $rectaf38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag38" class="custom-input" value="<?php if (isset($_REQUEST['rectag38'])) {
                                                                                echo $_REQUEST['rectag38'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah38" class="custom-input" value="<?php if (isset($_REQUEST['rectah38'])) {
                                                                                echo $_REQUEST['rectah38'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai38" class="custom-input" value="<?php if (isset($_REQUEST['rectai38'])) {
                                                                                echo $_REQUEST['rectai38'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj38" class="custom-input" readonly value="<?php if (isset($rectaj38)) {
                                                                                echo $rectaj38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak38" class="custom-input" readonly value="<?php if (isset($rectak38)) {
                                                                                echo $rectak38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal38" class="custom-input" readonly value="<?php if (isset($rectal38)) {
                                                                                echo $rectal38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam38" class="custom-input" readonly value="<?php if (isset($rectam38)) {
                                                                                echo $rectam38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan38" class="custom-input" readonly value="<?php if (isset($rectan38)) {
                                                                                echo $rectan38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao38" class="custom-input" readonly value="<?php if (isset($rectao38)) {
                                                                                echo $rectao38;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
        <!-- <td style="position: sticky; left:0;  background-color: white;">39</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb39" class="custom-input" readonly value="<?php if (isset($rectb39)) {
                                                                              echo $rectb39;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc39" class="custom-input" value="<?php if (isset($_POST['rectc39'])) {
                                                                              echo $_POST['rectc39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd39" class="custom-input" value="<?php if (isset($_POST['rectd39'])) {
                                                                              echo $_POST['rectd39'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte39" class="custom-input" value="<?php if (isset($_POST['recte39'])) {
                                                                              echo $_POST['recte39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf39" class="custom-input" readonly value="<?php if (isset($rectf39)) {
                                                                              echo $rectf39;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg39" class="custom-input" readonly value="<?php if (isset($rectg39)) {
                                                                              echo $rectg39;
                                                                            } ?>"></td>
          <td><input type="text" name="recth39" class="custom-input" readonly value="<?php if (isset($recth39)) {
                                                                              echo $recth39;
                                                                            } ?>"></td>
          <td><input type="text" name="recti39" class="custom-input" readonly value="<?php if (isset($recti39)) {
                                                                              echo $recti39;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj39" class="custom-input" readonly value="<?php if (isset($rectj39)) {
                                                                              echo $rectj39;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk39" class="custom-input" readonly value="<?php if (isset($rectk39)) {
                                                                              echo $rectk39;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl39" class="custom-input" readonly value="<?php if (isset($rectl39)) {
                                                                              echo $rectl39;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm39" class="custom-input" value="<?php if (isset($_POST['rectm39'])) {
                                                                              echo $_POST['rectm39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn39" class="custom-input" value="<?php if (isset($_POST['rectn39'])) {
                                                                              echo $_POST['rectn39'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto39" class="custom-input" value="<?php if (isset($_POST['recto39'])) {
                                                                              echo $_POST['recto39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp39" class="custom-input" readonly value="<?php if (isset($rectp39)) {
                                                                              echo $rectp39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq39" class="custom-input" readonly value="<?php if (isset($rectq39)) {
                                                                              echo $rectq39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr39" class="custom-input" readonly value="<?php if (isset($rectr39)) {
                                                                              echo $rectr39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects39" class="custom-input" readonly value="<?php if (isset($rects39)) {
                                                                              echo $rects39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt39" class="custom-input" readonly value="<?php if (isset($rectt39)) {
                                                                              echo $rectt39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu39" class="custom-input" readonly value="<?php if (isset($rectu39)) {
                                                                              echo $rectu39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv39" class="custom-input" value="<?php if (isset($_REQUEST['rectv39'])) {
                                                                              echo $_REQUEST['rectv39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw39" class="custom-input" value="<?php if (isset($_REQUEST['rectw39'])) {
                                                                              echo $_REQUEST['rectw39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx39" class="custom-input" value="<?php if (isset($_REQUEST['rectx39'])) {
                                                                              echo $_REQUEST['rectx39'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty39" class="custom-input" value="<?php if (isset($_REQUEST['recty39'])) {
                                                                              echo $_REQUEST['recty39'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz39" class="custom-input" readonly value="<?php if (isset($rectz39)) {
                                                                              echo $rectz39;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa39" class="custom-input" readonly value="<?php if (isset($rectaa39)) {
                                                                                echo $rectaa39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab39" class="custom-input" readonly value="<?php if (isset($rectab39)) {
                                                                                echo $rectab39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac39" class="custom-input" readonly value="<?php if (isset($rectac39)) {
                                                                                echo $rectac39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad39" class="custom-input" readonly value="<?php if (isset($rectad39)) {
                                                                                echo $rectad39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae39" class="custom-input" readonly value="<?php if (isset($rectae39)) {
                                                                                echo $rectae39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf39" class="custom-input" readonly value="<?php if (isset($rectaf39)) {
                                                                                echo $rectaf39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag39" class="custom-input" value="<?php if (isset($_REQUEST['rectag39'])) {
                                                                                echo $_REQUEST['rectag39'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah39" class="custom-input" value="<?php if (isset($_REQUEST['rectah39'])) {
                                                                                echo $_REQUEST['rectah39'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai39" class="custom-input" value="<?php if (isset($_REQUEST['rectai39'])) {
                                                                                echo $_REQUEST['rectai39'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj39" class="custom-input" readonly value="<?php if (isset($rectaj39)) {
                                                                                echo $rectaj39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak39" class="custom-input" readonly value="<?php if (isset($rectak39)) {
                                                                                echo $rectak39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal39" class="custom-input" readonly value="<?php if (isset($rectal39)) {
                                                                                echo $rectal39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam39" class="custom-input" readonly value="<?php if (isset($rectam39)) {
                                                                                echo $rectam39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan39" class="custom-input" readonly value="<?php if (isset($rectan39)) {
                                                                                echo $rectan39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao39" class="custom-input" readonly value="<?php if (isset($rectao39)) {
                                                                                echo $rectao39;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">40</td> -->
          <td style="position: sticky; left:0;"></td>
          <td><input type="text" name="rectb40" class="custom-input" readonly value="<?php if (isset($rectb40)) {
                                                                              echo $rectb40;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc40" class="custom-input" value="<?php if (isset($_POST['rectc40'])) {
                                                                              echo $_POST['rectc40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd40" class="custom-input" value="<?php if (isset($_POST['rectd40'])) {
                                                                              echo $_POST['rectd40'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte40" class="custom-input" value="<?php if (isset($_POST['recte40'])) {
                                                                              echo $_POST['recte40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf40" class="custom-input" readonly value="<?php if (isset($rectf40)) {
                                                                              echo $rectf40;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg40" class="custom-input" readonly value="<?php if (isset($rectg40)) {
                                                                              echo $rectg40;
                                                                            } ?>"></td>
          <td><input type="text" name="recth40" class="custom-input" readonly value="<?php if (isset($recth40)) {
                                                                              echo $recth40;
                                                                            } ?>"></td>
          <td><input type="text" name="recti40" class="custom-input" readonly value="<?php if (isset($recti40)) {
                                                                              echo $recti40;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj40" class="custom-input" readonly value="<?php if (isset($rectj40)) {
                                                                              echo $rectj40;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk40" class="custom-input" readonly value="<?php if (isset($rectk40)) {
                                                                              echo $rectk40;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl40" class="custom-input" readonly value="<?php if (isset($rectl40)) {
                                                                              echo $rectl40;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm40" class="custom-input" value="<?php if (isset($_POST['rectm40'])) {
                                                                              echo $_POST['rectm40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn40" class="custom-input" value="<?php if (isset($_POST['rectn40'])) {
                                                                              echo $_POST['rectn40'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto40" class="custom-input" value="<?php if (isset($_POST['recto40'])) {
                                                                              echo $_POST['recto40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp40" class="custom-input" readonly value="<?php if (isset($rectp40)) {
                                                                              echo $rectp40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq40" class="custom-input" readonly value="<?php if (isset($rectq40)) {
                                                                              echo $rectq40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr40" class="custom-input" readonly value="<?php if (isset($rectr40)) {
                                                                              echo $rectr40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects40" class="custom-input" readonly value="<?php if (isset($rects40)) {
                                                                              echo $rects40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt40" class="custom-input" readonly value="<?php if (isset($rectt40)) {
                                                                              echo $rectt40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu40" class="custom-input" readonly value="<?php if (isset($rectu40)) {
                                                                              echo $rectu40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv40" class="custom-input" value="<?php if (isset($_REQUEST['rectv40'])) {
                                                                              echo $_REQUEST['rectv40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw40" class="custom-input" value="<?php if (isset($_REQUEST['rectw40'])) {
                                                                              echo $_REQUEST['rectw40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx40" class="custom-input" value="<?php if (isset($_REQUEST['rectx40'])) {
                                                                              echo $_REQUEST['rectx40'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty40" class="custom-input" value="<?php if (isset($_REQUEST['recty40'])) {
                                                                              echo $_REQUEST['recty40'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz40" class="custom-input" readonly value="<?php if (isset($rectz40)) {
                                                                              echo $rectz40;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa40" class="custom-input" readonly value="<?php if (isset($rectaa40)) {
                                                                                echo $rectaa40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab40" class="custom-input" readonly value="<?php if (isset($rectab40)) {
                                                                                echo $rectab40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac40" class="custom-input" readonly value="<?php if (isset($rectac40)) {
                                                                                echo $rectac40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad40" class="custom-input" readonly value="<?php if (isset($rectad40)) {
                                                                                echo $rectad40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae40" class="custom-input" readonly value="<?php if (isset($rectae40)) {
                                                                                echo $rectae40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>

          <td><input type="text" name="rectaf40" class="custom-input" readonly value="<?php if (isset($rectaf40)) {
                                                                                echo $rectaf40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag40" class="custom-input" value="<?php if (isset($_REQUEST['rectag40'])) {
                                                                                echo $_REQUEST['rectag40'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah40" class="custom-input" value="<?php if (isset($_REQUEST['rectah40'])) {
                                                                                echo $_REQUEST['rectah40'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai40" class="custom-input" value="<?php if (isset($_REQUEST['rectai40'])) {
                                                                                echo $_REQUEST['rectai40'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj40" class="custom-input" readonly value="<?php if (isset($rectaj40)) {
                                                                                echo $rectaj40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak40" class="custom-input" readonly value="<?php if (isset($rectak40)) {
                                                                                echo $rectak40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal40" class="custom-input" readonly value="<?php if (isset($rectal40)) {
                                                                                echo $rectal40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam40" class="custom-input" readonly value="<?php if (isset($rectam40)) {
                                                                                echo $rectam40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan40" class="custom-input" readonly value="<?php if (isset($rectan40)) {
                                                                                echo $rectan40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao40" class="custom-input" readonly value="<?php if (isset($rectao40)) {
                                                                                echo $rectao40;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">41</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb41" class="custom-input" readonly value="<?php if (isset($rectb41)) {
                                                                              echo $rectb41;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc41" class="custom-input" value="<?php if (isset($_POST['rectc41'])) {
                                                                              echo $_POST['rectc41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd41" class="custom-input" value="<?php if (isset($_POST['rectd41'])) {
                                                                              echo $_POST['rectd41'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte41" class="custom-input" value="<?php if (isset($_POST['recte41'])) {
                                                                              echo $_POST['recte41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf41" class="custom-input" readonly value="<?php if (isset($rectf41)) {
                                                                              echo $rectf41;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg41" class="custom-input" readonly value="<?php if (isset($rectg41)) {
                                                                              echo $rectg41;
                                                                            } ?>"></td>
          <td><input type="text" name="recth41" class="custom-input" readonly value="<?php if (isset($recth41)) {
                                                                              echo $recth41;
                                                                            } ?>"></td>
          <td><input type="text" name="recti41" class="custom-input" readonly value="<?php if (isset($recti41)) {
                                                                              echo $recti41;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj41" class="custom-input" readonly value="<?php if (isset($rectj41)) {
                                                                              echo $rectj41;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk41" class="custom-input" readonly value="<?php if (isset($rectk41)) {
                                                                              echo $rectk41;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl41" class="custom-input" readonly value="<?php if (isset($rectl41)) {
                                                                              echo $rectl41;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm41" class="custom-input" value="<?php if (isset($_POST['rectm41'])) {
                                                                              echo $_POST['rectm41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn41" class="custom-input" value="<?php if (isset($_POST['rectn41'])) {
                                                                              echo $_POST['rectn41'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto41" class="custom-input" value="<?php if (isset($_POST['recto41'])) {
                                                                              echo $_POST['recto41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp41" class="custom-input" readonly value="<?php if (isset($rectp41)) {
                                                                              echo $rectp41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq41" class="custom-input" readonly value="<?php if (isset($rectq41)) {
                                                                              echo $rectq41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr41" class="custom-input" readonly value="<?php if (isset($rectr41)) {
                                                                              echo $rectr41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects41" class="custom-input" readonly value="<?php if (isset($rects41)) {
                                                                              echo $rects41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt41" class="custom-input" readonly value="<?php if (isset($rectt41)) {
                                                                              echo $rectt41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu41" class="custom-input" readonly value="<?php if (isset($rectu41)) {
                                                                              echo $rectu41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv41" class="custom-input" value="<?php if (isset($_REQUEST['rectv41'])) {
                                                                              echo $_REQUEST['rectv41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw41" class="custom-input" value="<?php if (isset($_REQUEST['rectw41'])) {
                                                                              echo $_REQUEST['rectw41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx41" class="custom-input" value="<?php if (isset($_REQUEST['rectx41'])) {
                                                                              echo $_REQUEST['rectx41'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty41" class="custom-input" value="<?php if (isset($_REQUEST['recty41'])) {
                                                                              echo $_REQUEST['recty41'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz41" class="custom-input" readonly value="<?php if (isset($rectz41)) {
                                                                              echo $rectz41;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa41" class="custom-input" readonly value="<?php if (isset($rectaa41)) {
                                                                                echo $rectaa41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab41" class="custom-input" readonly value="<?php if (isset($rectab41)) {
                                                                                echo $rectab41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac41" class="custom-input" readonly value="<?php if (isset($rectac41)) {
                                                                                echo $rectac41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad41" class="custom-input" readonly value="<?php if (isset($rectad41)) {
                                                                                echo $rectad41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae41" class="custom-input" readonly value="<?php if (isset($rectae41)) {
                                                                                echo $rectae41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf41" class="custom-input" readonly value="<?php if (isset($rectaf41)) {
                                                                                echo $rectaf41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag41" class="custom-input" value="<?php if (isset($_REQUEST['rectag41'])) {
                                                                                echo $_REQUEST['rectag41'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah41" class="custom-input" value="<?php if (isset($_REQUEST['rectah41'])) {
                                                                                echo $_REQUEST['rectah41'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai41" class="custom-input" value="<?php if (isset($_REQUEST['rectai41'])) {
                                                                                echo $_REQUEST['rectai41'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj41" class="custom-input" readonly value="<?php if (isset($rectaj41)) {
                                                                                echo $rectaj41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak41" class="custom-input" readonly value="<?php if (isset($rectak41)) {
                                                                                echo $rectak41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal41" class="custom-input" readonly value="<?php if (isset($rectal41)) {
                                                                                echo $rectal41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam41" class="custom-input" readonly value="<?php if (isset($rectam41)) {
                                                                                echo $rectam41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan41" class="custom-input" readonly value="<?php if (isset($rectan41)) {
                                                                                echo $rectan41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao41" class="custom-input" readonly value="<?php if (isset($rectao41)) {
                                                                                echo $rectao41;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">42</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb42" class="custom-input" readonly value="<?php if (isset($rectb42)) {
                                                                              echo $rectb42;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc42" class="custom-input" value="<?php if (isset($_POST['rectc42'])) {
                                                                              echo $_POST['rectc42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd42" class="custom-input" value="<?php if (isset($_POST['rectd42'])) {
                                                                              echo $_POST['rectd42'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte42" class="custom-input" value="<?php if (isset($_POST['recte42'])) {
                                                                              echo $_POST['recte42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf42" class="custom-input" readonly value="<?php if (isset($rectf42)) {
                                                                              echo $rectf42;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg42" class="custom-input" readonly value="<?php if (isset($rectg42)) {
                                                                              echo $rectg42;
                                                                            } ?>"></td>
          <td><input type="text" name="recth42" class="custom-input" readonly value="<?php if (isset($recth42)) {
                                                                              echo $recth42;
                                                                            } ?>"></td>
          <td><input type="text" name="recti42" class="custom-input" readonly value="<?php if (isset($recti42)) {
                                                                              echo $recti42;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj42" class="custom-input" readonly value="<?php if (isset($rectj42)) {
                                                                              echo $rectj42;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk42" class="custom-input" readonly value="<?php if (isset($rectk42)) {
                                                                              echo $rectk42;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl42" class="custom-input" readonly value="<?php if (isset($rectl42)) {
                                                                              echo $rectl42;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm42" class="custom-input" value="<?php if (isset($_POST['rectm42'])) {
                                                                              echo $_POST['rectm42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn42" class="custom-input" value="<?php if (isset($_POST['rectn42'])) {
                                                                              echo $_POST['rectn42'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto42" class="custom-input" value="<?php if (isset($_POST['recto42'])) {
                                                                              echo $_POST['recto42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp42" class="custom-input" readonly value="<?php if (isset($rectp42)) {
                                                                              echo $rectp42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq42" class="custom-input" readonly value="<?php if (isset($rectq42)) {
                                                                              echo $rectq42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr42" class="custom-input" readonly value="<?php if (isset($rectr42)) {
                                                                              echo $rectr42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects42" class="custom-input" readonly value="<?php if (isset($rects42)) {
                                                                              echo $rects42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt42" class="custom-input" readonly value="<?php if (isset($rectt42)) {
                                                                              echo $rectt42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu42" class="custom-input" readonly value="<?php if (isset($rectu42)) {
                                                                              echo $rectu42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv42" class="custom-input" value="<?php if (isset($_REQUEST['rectv42'])) {
                                                                              echo $_REQUEST['rectv42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw42" class="custom-input" value="<?php if (isset($_REQUEST['rectw42'])) {
                                                                              echo $_REQUEST['rectw42'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx42" class="custom-input" value="<?php if (isset($_REQUEST['rectx42'])) {
                                                                              echo $_REQUEST['rectx42'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty42" class="custom-input" value="<?php if (isset($_REQUEST['recty42'])) {
                                                                              echo $_REQUEST['recty42'];
                                                                            } ?>"></td>

          <td><input type="text" name="rectz42" class="custom-input" readonly value="<?php if (isset($rectz42)) {
                                                                              echo $rectz42;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa42" class="custom-input" readonly value="<?php if (isset($rectaa42)) {
                                                                                echo $rectaa42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab42" class="custom-input" readonly value="<?php if (isset($rectab42)) {
                                                                                echo $rectab42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac42" class="custom-input" readonly value="<?php if (isset($rectac42)) {
                                                                                echo $rectac42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad42" class="custom-input" readonly value="<?php if (isset($rectad42)) {
                                                                                echo $rectad42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae42" class="custom-input" readonly value="<?php if (isset($rectae42)) {
                                                                                echo $rectae42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf42" class="custom-input" readonly value="<?php if (isset($rectaf42)) {
                                                                                echo $rectaf42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag42" class="custom-input" value="<?php if (isset($_REQUEST['rectag42'])) {
                                                                                echo $_REQUEST['rectag42'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah42" class="custom-input" value="<?php if (isset($_REQUEST['rectah42'])) {
                                                                                echo $_REQUEST['rectah42'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai42" class="custom-input" value="<?php if (isset($_REQUEST['rectai42'])) {
                                                                                echo $_REQUEST['rectai42'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj42" class="custom-input" readonly value="<?php if (isset($rectaj42)) {
                                                                                echo $rectaj42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak42" class="custom-input" readonly value="<?php if (isset($rectak42)) {
                                                                                echo $rectak42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal42" class="custom-input" readonly value="<?php if (isset($rectal42)) {
                                                                                echo $rectal42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam42" class="custom-input" readonly value="<?php if (isset($rectam42)) {
                                                                                echo $rectam42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan42" class="custom-input" readonly value="<?php if (isset($rectan42)) {
                                                                                echo $rectan42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao42" class="custom-input" readonly value="<?php if (isset($rectao42)) {
                                                                                echo $rectao42;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
        <tr class="rectangularTableBody">
          <!-- <td style="position: sticky; left:0;  background-color: white;">43</td> -->
          <td style="position: sticky; left:0; "></td>
          <td><input type="text" name="rectb43" class="custom-input" readonly value="<?php if (isset($rectb43)) {
                                                                              echo $rectb43;
                                                                            } else {
                                                                              echo 0;
                                                                            }    ?>"></td>
          <td><input type="text" name="rectc43" class="custom-input" value="<?php if (isset($_POST['rectc43'])) {
                                                                              echo $_POST['rectc43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectd43" class="custom-input" value="<?php if (isset($_POST['rectd43'])) {
                                                                              echo $_POST['rectd43'];
                                                                            } ?>"></td>
          <td><input type="text" name="recte43" class="custom-input" value="<?php if (isset($_POST['recte43'])) {
                                                                              echo $_POST['recte43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectf43" class="custom-input" readonly value="<?php if (isset($rectf43)) {
                                                                              echo $rectf43;
                                                                            } ?>"></td>
          <td><input type="text" name="rectg43" class="custom-input" readonly value="<?php if (isset($rectg43)) {
                                                                              echo $rectg43;
                                                                            } ?>"></td>
          <td><input type="text" name="recth43" class="custom-input" readonly value="<?php if (isset($recth43)) {
                                                                              echo $recth43;
                                                                            } ?>"></td>
          <td><input type="text" name="recti43" class="custom-input" readonly value="<?php if (isset($recti43)) {
                                                                              echo $recti43;
                                                                            } ?>"></td>
          <td><input type="text" name="rectj43" class="custom-input" readonly value="<?php if (isset($rectj43)) {
                                                                              echo $rectj43;
                                                                            } ?>"></td>
          <td><input type="text" name="rectk43" class="custom-input" readonly value="<?php if (isset($rectk43)) {
                                                                              echo $rectk43;
                                                                            } ?>"></td>
          <td><input type="text" name="rectl43" class="custom-input" readonly value="<?php if (isset($rectl43)) {
                                                                              echo $rectl43;
                                                                            } else {
                                                                              echo 0;
                                                                            }  ?>"></td>
          <td><input type="text" name="rectm43" class="custom-input" value="<?php if (isset($_POST['rectm43'])) {
                                                                              echo $_POST['rectm43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectn43" class="custom-input" value="<?php if (isset($_POST['rectn43'])) {
                                                                              echo $_POST['rectn43'];
                                                                            } ?>"></td>
          <td><input type="text" name="recto43" class="custom-input" value="<?php if (isset($_POST['recto43'])) {
                                                                              echo $_POST['recto43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectp43" class="custom-input" readonly value="<?php if (isset($rectp43)) {
                                                                              echo $rectp43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectq43" class="custom-input" readonly value="<?php if (isset($rectq43)) {
                                                                              echo $rectq43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectr43" class="custom-input" readonly value="<?php if (isset($rectr43)) {
                                                                              echo $rectr43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rects43" class="custom-input" readonly value="<?php if (isset($rects43)) {
                                                                              echo $rects43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectt43" class="custom-input" readonly value="<?php if (isset($rectt43)) {
                                                                              echo $rectt43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectu43" class="custom-input" readonly value="<?php if (isset($rectu43)) {
                                                                              echo $rectu43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectv43" class="custom-input" value="<?php if (isset($_REQUEST['rectv43'])) {
                                                                              echo $_REQUEST['rectv43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectw43" class="custom-input" value="<?php if (isset($_REQUEST['rectw43'])) {
                                                                              echo $_REQUEST['rectw43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectx43" class="custom-input" value="<?php if (isset($_REQUEST['rectx43'])) {
                                                                              echo $_REQUEST['rectx43'];
                                                                            } ?>"></td>
          <td><input type="text" name="recty43" class="custom-input" value="<?php if (isset($_REQUEST['recty43'])) {
                                                                              echo $_REQUEST['recty43'];
                                                                            } ?>"></td>
          <td><input type="text" name="rectz43" class="custom-input" readonly value="<?php if (isset($rectz43)) {
                                                                              echo $rectz43;
                                                                            } else {
                                                                              echo 0;
                                                                            } ?>"></td>
          <td><input type="text" name="rectaa43" class="custom-input" readonly value="<?php if (isset($rectaa43)) {
                                                                                echo $rectaa43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectab43" class="custom-input" readonly value="<?php if (isset($rectab43)) {
                                                                                echo $rectab43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectac43" class="custom-input" readonly value="<?php if (isset($rectac43)) {
                                                                                echo $rectac43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectad43" class="custom-input" readonly value="<?php if (isset($rectad43)) {
                                                                                echo $rectad43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectae43" class="custom-input" readonly value="<?php if (isset($rectae43)) {
                                                                                echo $rectae43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectaf43" class="custom-input" readonly value="<?php if (isset($rectaf43)) {
                                                                                echo $rectaf43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectag43" class="custom-input" value="<?php if (isset($_REQUEST['rectag43'])) {
                                                                                echo $_REQUEST['rectag43'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectah43" class="custom-input" value="<?php if (isset($_REQUEST['rectah43'])) {
                                                                                echo $_REQUEST['rectah43'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectai43" class="custom-input" value="<?php if (isset($_REQUEST['rectai43'])) {
                                                                                echo $_REQUEST['rectai43'];
                                                                              } ?>"></td>
          <td><input type="text" name="rectaj43" class="custom-input" readonly value="<?php if (isset($rectaj43)) {
                                                                                echo $rectaj43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectak43" class="custom-input" readonly value="<?php if (isset($rectak43)) {
                                                                                echo $rectak43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectal43" class="custom-input" readonly value="<?php if (isset($rectal43)) {
                                                                                echo $rectal43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectam43" class="custom-input" readonly value="<?php if (isset($rectam43)) {
                                                                                echo $rectam43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectan43" class="custom-input" readonly value="<?php if (isset($rectan43)) {
                                                                                echo $rectan43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
          <td><input type="text" name="rectao43" class="custom-input" readonly value="<?php if (isset($rectao43)) {
                                                                                echo $rectao43;
                                                                              } else {
                                                                                echo 0;
                                                                              } ?>"></td>
        </tr>
      </table>
      <input type="submit" name="rectsubmit" value='Refresh' class="rectsubmit">
    </form>
  </div>
</body>

</html>