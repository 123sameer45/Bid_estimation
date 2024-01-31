<?php 
require  "navbar.html.php" ;
if(isset($_POST['alumsubmit'])){
    
    $alumb10 = floatval($_REQUEST['alumb10']);
    $alumc10 = floatval($_REQUEST['alumc10']);
    $alumd10 = floatval($_REQUEST['alumd10']);
    $alumb11 = floatval($_REQUEST['alumb11']);
    $alumc11 = floatval($_REQUEST['alumc11']);
    $alumd11 = floatval($_REQUEST['alumd11']);
    $alumb12 = floatval($_REQUEST['alumb12']);
    $alumc12 = floatval($_REQUEST['alumc12']);
    $alumd12 = floatval($_REQUEST['alumd12']);
    $alumb13 = floatval($_REQUEST['alumb13']);
    $alumc13 = floatval($_REQUEST['alumc13']);
    $alumd13 = floatval($_REQUEST['alumd13']);
    $alumb14 = floatval($_REQUEST['alumb14']);
    $alumc14 = floatval($_REQUEST['alumc14']);
    $alumd14 = floatval($_REQUEST['alumd14']);
    $alumb15 = floatval($_REQUEST['alumb15']);
    $alumc15 = floatval($_REQUEST['alumc15']);
    $alumd15 = floatval($_REQUEST['alumd15']);
    $alumb16 = floatval($_REQUEST['alumb16']);
    $alumc16 = floatval($_REQUEST['alumc16']);
    $alumd16 = floatval($_REQUEST['alumd16']);
    $alumb17 = floatval($_REQUEST['alumb17']);
    $alumc17 = floatval($_REQUEST['alumc17']);
    $alumd17 = floatval($_REQUEST['alumd17']);
    $alumb18 = floatval($_REQUEST['alumb18']);
    $alumc18 = floatval($_REQUEST['alumc18']);
    $alumd18 = floatval($_REQUEST['alumd18']);
    $alumb19 = floatval($_REQUEST['alumb19']);
    $alumc19 = floatval($_REQUEST['alumc19']);
    $alumd19 = floatval($_REQUEST['alumd19']);
    $alumb20 = floatval($_REQUEST['alumb20']);
    $alumc20 = floatval($_REQUEST['alumc20']);
    $alumd20 = floatval($_REQUEST['alumd20']);
    $alumb21 = floatval($_REQUEST['alumb21']);
    $alumc21 = floatval($_REQUEST['alumc21']);
    $alumd21 = floatval($_REQUEST['alumd21']);
    $alumb22 = floatval($_REQUEST['alumb22']);
    $alumc22 = floatval($_REQUEST['alumc22']);
    $alumd22 = floatval($_REQUEST['alumd22']);
    $alumb23 = floatval($_REQUEST['alumb23']);
    $alumc23 = floatval($_REQUEST['alumc23']);
    $alumd23 = floatval($_REQUEST['alumd23']);
    $alumb24 = floatval($_REQUEST['alumb24']);
    $alumc24 = floatval($_REQUEST['alumc24']);
    $alumd24 = floatval($_REQUEST['alumd24']);
    $alumb25 = floatval($_REQUEST['alumb25']);
    $alumc25 = floatval($_REQUEST['alumc25']);
    $alumd25 = floatval($_REQUEST['alumd25']);
    $alumb26 = floatval($_REQUEST['alumb26']);
    $alumc26 = floatval($_REQUEST['alumc26']);
    $alumd26 = floatval($_REQUEST['alumd26']);
    $alumb27 = floatval($_REQUEST['alumb27']);
    $alumc27 = floatval($_REQUEST['alumc27']);
    $alumd27 = floatval($_REQUEST['alumd27']);
    $alumb28 = floatval($_REQUEST['alumb28']);
    $alumc28 = floatval($_REQUEST['alumc28']);
    $alumd28 = floatval($_REQUEST['alumd28']);
    $alumb29 = floatval($_REQUEST['alumb29']);
    $alumc29 = floatval($_REQUEST['alumc29']);
    $alumd29 = floatval($_REQUEST['alumd29']);
    $alumb30 = floatval($_REQUEST['alumb30']);
    $alumc30 = floatval($_REQUEST['alumc30']);
    $alumd30 = floatval($_REQUEST['alumd30']);
    $alumb31 = floatval($_REQUEST['alumb31']);
    $alumc31 = floatval($_REQUEST['alumc31']);
    $alumd31 = floatval($_REQUEST['alumd31']);
    $alumb32 = floatval($_REQUEST['alumb32']);
    $alumc32 = floatval($_REQUEST['alumc32']);
    $alumd32 = floatval($_REQUEST['alumd32']);
    $alumb33 = floatval($_REQUEST['alumb33']);
    $alumc33 = floatval($_REQUEST['alumc33']);
    $alumd33 = floatval($_REQUEST['alumd33']);
    $alumb34 = floatval($_REQUEST['alumb34']);
    $alumc34 = floatval($_REQUEST['alumc34']);
    $alumd34 = floatval($_REQUEST['alumd34']);
    $alumb35 = floatval($_REQUEST['alumb35']);
    $alumc35 = floatval($_REQUEST['alumc35']);
    $alumd35 = floatval($_REQUEST['alumd35']);
    $alumb36 = floatval($_REQUEST['alumb36']);
    $alumc36 = floatval($_REQUEST['alumc36']);
    $alumd36 = floatval($_REQUEST['alumd36']);
    $alumb37 = floatval($_REQUEST['alumb37']);
    $alumc37 = floatval($_REQUEST['alumc37']);
    $alumd37 = floatval($_REQUEST['alumd37']);
    $alumb38 = floatval($_REQUEST['alumb38']);
    $alumc38 = floatval($_REQUEST['alumc38']);
    $alumd38 = floatval($_REQUEST['alumd38']);
    $alumb39 = floatval($_REQUEST['alumb39']);
    $alumc39 = floatval($_REQUEST['alumc39']);
    $alumd39 = floatval($_REQUEST['alumd39']);
    $alumb40 = floatval($_REQUEST['alumb40']);
    $alumc40 = floatval($_REQUEST['alumc40']);
    $alumd40 = floatval($_REQUEST['alumd40']);
    $alumb41 = floatval($_REQUEST['alumb41']);
    $alumc41 = floatval($_REQUEST['alumc41']);
    $alumd41 = floatval($_REQUEST['alumd41']);

    $alumb42array = [$alumb10, $alumb11, $alumb12, $alumb13, $alumb14, $alumb15,
                    $alumb16, $alumb17, $alumb18, $alumb19, $alumb20, $alumb21,
                    $alumb22, $alumb23, $alumb24, $alumb25, $alumb26, $alumb27,
                    $alumb28, $alumb29, $alumb30, $alumb31, $alumb32, $alumb33,
                    $alumb34, $alumb34, $alumb35, $alumb36, $alumb37, $alumb38,
                    $alumb39, $alumb40, $alumb41];
    $alumb42 = round(array_sum($alumb42array), 2);

    $alumc42array = [$alumc10, $alumc11, $alumc12, $alumc13, $alumc14, $alumc15,
                    $alumc16, $alumc17, $alumc18, $alumc19, $alumc20, $alumc21,
                    $alumc22, $alumc23, $alumc24, $alumc25, $alumc26, $alumc27,
                    $alumc28, $alumc29, $alumc30, $alumc31, $alumc32, $alumc33,
                    $alumc34, $alumc34, $alumc35, $alumc36, $alumc37, $alumc38,
                    $alumc39, $alumc40, $alumc41];
    $alumc42 = round(array_sum($alumc42array), 2);

    $alumd42array = [$alumd10, $alumd11, $alumd12, $alumd13, $alumd14, $alumd15,
                    $alumd16, $alumd17, $alumd18, $alumd19, $alumd20, $alumd21,
                    $alumd22, $alumd23, $alumd24, $alumd25, $alumd26, $alumd27,
                    $alumd28, $alumd29, $alumd30, $alumd31, $alumd32, $alumd33,
                    $alumd34, $alumd34, $alumd35, $alumd36, $alumd37, $alumd38,
                    $alumd39, $alumd40, $alumd41];
    $alumd42 = round(array_sum($alumd42array), 2);

    $alume10 = round((($alumd10 * ($alumb10 + $alumc10)) / 6), 2) ;
    $alume11 = round((($alumd11 * ($alumb11 + $alumc11)) / 6), 2) ;
    $alume12 = round((($alumd12 * ($alumb12 + $alumc12)) / 6), 2) ;
    $alume13 = round((($alumd13 * ($alumb13 + $alumc13)) / 6), 2) ;
    $alume14 = round((($alumd14 * ($alumb14 + $alumc14)) / 6), 2) ;
    $alume15 = round((($alumd15 * ($alumb15 + $alumc15)) / 6), 2) ;
    $alume16 = round((($alumd16 * ($alumb16 + $alumc16)) / 6), 2) ;
    $alume17 = round((($alumd17 * ($alumb17 + $alumc17)) / 6), 2) ;
    $alume18 = round((($alumd18 * ($alumb18 + $alumc18)) / 6), 2) ;
    $alume19 = round((($alumd19 * ($alumb19 + $alumc19)) / 6), 2) ;
    $alume20 = round((($alumd20 * ($alumb20 + $alumc20)) / 6), 2) ;
    $alume21 = round((($alumd21 * ($alumb21 + $alumc21)) / 6), 2) ;
    $alume22 = round((($alumd22 * ($alumb22 + $alumc22)) / 6), 2) ;
    $alume23 = round((($alumd23 * ($alumb23 + $alumc23)) / 6), 2) ;
    $alume24 = round((($alumd24 * ($alumb24 + $alumc24)) / 6), 2) ;
    $alume25 = round((($alumd25 * ($alumb25 + $alumc25)) / 6), 2) ;
    $alume26 = round((($alumd26 * ($alumb26 + $alumc26)) / 6), 2) ;
    $alume27 = round((($alumd27 * ($alumb27 + $alumc27)) / 6), 2) ;
    $alume28 = round((($alumd28 * ($alumb28 + $alumc28)) / 6), 2) ;
    $alume29 = round((($alumd29 * ($alumb29 + $alumc29)) / 6), 2) ;
    $alume30 = round((($alumd30 * ($alumb30 + $alumc30)) / 6), 2) ;
    $alume31 = round((($alumd31 * ($alumb31 + $alumc31)) / 6), 2) ;
    $alume32 = round((($alumd32 * ($alumb32 + $alumc32)) / 6), 2) ;
    $alume33 = round((($alumd33 * ($alumb33 + $alumc33)) / 6), 2) ;
    $alume34 = round((($alumd34 * ($alumb34 + $alumc34)) / 6), 2) ;
    $alume35 = round((($alumd35 * ($alumb35 + $alumc35)) / 6), 2) ;
    $alume36 = round((($alumd36 * ($alumb36 + $alumc36)) / 6), 2) ;
    $alume37 = round((($alumd37 * ($alumb37 + $alumc37)) / 6), 2) ;
    $alume38 = round((($alumd38 * ($alumb38 + $alumc38)) / 6), 2) ;
    $alume39 = round((($alumd39 * ($alumb39 + $alumc39)) / 6), 2) ;
    $alume40 = round((($alumd40 * ($alumb40 + $alumc40)) / 6), 2) ;
    $alume41 = round((($alumd41 * ($alumb41 + $alumc41)) / 6), 2) ;


    $alumf10 = round((((0 < $alumc10 && $alumc10 <= 60 ? 1 : 0) && (0 < $alumb10 && $alumb10 <= 60 ? 1 : 0)) * $alume10), 2);
    $alumf11 = round((((0 < $alumc11 && $alumc11 <= 60 ? 1 : 0) && (0 < $alumb11 && $alumb11 <= 60 ? 1 : 0)) * $alume11), 2);
    $alumf12 = round((((0 < $alumc12 && $alumc12 <= 60 ? 1 : 0) && (0 < $alumb12 && $alumb12 <= 60 ? 1 : 0)) * $alume12), 2);
    $alumf13 = round((((0 < $alumc13 && $alumc13 <= 60 ? 1 : 0) && (0 < $alumb13 && $alumb13 <= 60 ? 1 : 0)) * $alume13), 2);
    $alumf14 = round((((0 < $alumc14 && $alumc14 <= 60 ? 1 : 0) && (0 < $alumb14 && $alumb14 <= 60 ? 1 : 0)) * $alume14), 2);
    $alumf15 = round((((0 < $alumc15 && $alumc15 <= 60 ? 1 : 0) && (0 < $alumb15 && $alumb15 <= 60 ? 1 : 0)) * $alume15), 2);
    $alumf16 = round((((0 < $alumc16 && $alumc16 <= 60 ? 1 : 0) && (0 < $alumb16 && $alumb16 <= 60 ? 1 : 0)) * $alume16), 2);
    $alumf17 = round((((0 < $alumc17 && $alumc17 <= 60 ? 1 : 0) && (0 < $alumb17 && $alumb17 <= 60 ? 1 : 0)) * $alume17), 2);
    $alumf18 = round((((0 < $alumc18 && $alumc18 <= 60 ? 1 : 0) && (0 < $alumb18 && $alumb18 <= 60 ? 1 : 0)) * $alume18), 2);
    $alumf19 = round((((0 < $alumc19 && $alumc19 <= 60 ? 1 : 0) && (0 < $alumb19 && $alumb19 <= 60 ? 1 : 0)) * $alume19), 2);
    $alumf20 = round((((0 < $alumc20 && $alumc20 <= 60 ? 1 : 0) && (0 < $alumb20 && $alumb20 <= 60 ? 1 : 0)) * $alume20), 2);
    $alumf21 = round((((0 < $alumc21 && $alumc21 <= 60 ? 1 : 0) && (0 < $alumb21 && $alumb21 <= 60 ? 1 : 0)) * $alume21), 2);
    $alumf22 = round((((0 < $alumc22 && $alumc22 <= 60 ? 1 : 0) && (0 < $alumb22 && $alumb22 <= 60 ? 1 : 0)) * $alume22), 2);
    $alumf23 = round((((0 < $alumc23 && $alumc23 <= 60 ? 1 : 0) && (0 < $alumb23 && $alumb23 <= 60 ? 1 : 0)) * $alume23), 2);
    $alumf24 = round((((0 < $alumc24 && $alumc24 <= 60 ? 1 : 0) && (0 < $alumb24 && $alumb24 <= 60 ? 1 : 0)) * $alume24), 2);
    $alumf25 = round((((0 < $alumc25 && $alumc25 <= 60 ? 1 : 0) && (0 < $alumb25 && $alumb25 <= 60 ? 1 : 0)) * $alume25), 2);
    $alumf26 = round((((0 < $alumc26 && $alumc26 <= 60 ? 1 : 0) && (0 < $alumb26 && $alumb26 <= 60 ? 1 : 0)) * $alume26), 2);
    $alumf27 = round((((0 < $alumc27 && $alumc27 <= 60 ? 1 : 0) && (0 < $alumb27 && $alumb27 <= 60 ? 1 : 0)) * $alume27), 2);
    $alumf28 = round((((0 < $alumc28 && $alumc28 <= 60 ? 1 : 0) && (0 < $alumb28 && $alumb28 <= 60 ? 1 : 0)) * $alume28), 2);
    $alumf29 = round((((0 < $alumc29 && $alumc29 <= 60 ? 1 : 0) && (0 < $alumb29 && $alumb29 <= 60 ? 1 : 0)) * $alume29), 2);
    $alumf30 = round((((0 < $alumc30 && $alumc30 <= 60 ? 1 : 0) && (0 < $alumb30 && $alumb30 <= 60 ? 1 : 0)) * $alume30), 2);
    $alumf31 = round((((0 < $alumc31 && $alumc31 <= 60 ? 1 : 0) && (0 < $alumb31 && $alumb31 <= 60 ? 1 : 0)) * $alume31), 2);
    $alumf32 = round((((0 < $alumc32 && $alumc32 <= 60 ? 1 : 0) && (0 < $alumb32 && $alumb32 <= 60 ? 1 : 0)) * $alume32), 2);
    $alumf33 = round((((0 < $alumc33 && $alumc33 <= 60 ? 1 : 0) && (0 < $alumb33 && $alumb33 <= 60 ? 1 : 0)) * $alume33), 2);
    $alumf34 = round((((0 < $alumc34 && $alumc34 <= 60 ? 1 : 0) && (0 < $alumb34 && $alumb34 <= 60 ? 1 : 0)) * $alume34), 2);
    $alumf35 = round((((0 < $alumc35 && $alumc35 <= 60 ? 1 : 0) && (0 < $alumb35 && $alumb35 <= 60 ? 1 : 0)) * $alume35), 2);
    $alumf36 = round((((0 < $alumc36 && $alumc36 <= 60 ? 1 : 0) && (0 < $alumb36 && $alumb36 <= 60 ? 1 : 0)) * $alume36), 2);
    $alumf37 = round((((0 < $alumc37 && $alumc37 <= 60 ? 1 : 0) && (0 < $alumb37 && $alumb37 <= 60 ? 1 : 0)) * $alume37), 2);
    $alumf38 = round((((0 < $alumc38 && $alumc38 <= 60 ? 1 : 0) && (0 < $alumb38 && $alumb38 <= 60 ? 1 : 0)) * $alume38), 2);
    $alumf39 = round((((0 < $alumc39 && $alumc39 <= 60 ? 1 : 0) && (0 < $alumb39 && $alumb39 <= 60 ? 1 : 0)) * $alume39), 2);
    $alumf40 = round((((0 < $alumc40 && $alumc40 <= 60 ? 1 : 0) && (0 < $alumb40 && $alumb40 <= 60 ? 1 : 0)) * $alume40), 2);
    $alumf41 = round((((0 < $alumc41 && $alumc41 <= 60 ? 1 : 0) && (0 < $alumb41 && $alumb41 <= 60 ? 1 : 0)) * $alume41), 2);


    $alumg10 = round((((60 < $alumc10 ? 1 : 0) || (60 < $alumb10 ? 1 : 0)) * $alume10), 2);
    $alumg11 = round((((60 < $alumc11 ? 1 : 0) || (60 < $alumb11 ? 1 : 0)) * $alume11), 2);
    $alumg12 = round((((60 < $alumc12 ? 1 : 0) || (60 < $alumb12 ? 1 : 0)) * $alume12), 2);
    $alumg13 = round((((60 < $alumc13 ? 1 : 0) || (60 < $alumb13 ? 1 : 0)) * $alume13), 2);
    $alumg14 = round((((60 < $alumc14 ? 1 : 0) || (60 < $alumb14 ? 1 : 0)) * $alume14), 2);
    $alumg15 = round((((60 < $alumc15 ? 1 : 0) || (60 < $alumb15 ? 1 : 0)) * $alume15), 2);
    $alumg16 = round((((60 < $alumc16 ? 1 : 0) || (60 < $alumb16 ? 1 : 0)) * $alume16), 2);
    $alumg17 = round((((60 < $alumc17 ? 1 : 0) || (60 < $alumb17 ? 1 : 0)) * $alume17), 2);
    $alumg18 = round((((60 < $alumc18 ? 1 : 0) || (60 < $alumb18 ? 1 : 0)) * $alume18), 2);
    $alumg19 = round((((60 < $alumc19 ? 1 : 0) || (60 < $alumb19 ? 1 : 0)) * $alume19), 2);
    $alumg20 = round((((60 < $alumc20 ? 1 : 0) || (60 < $alumb20 ? 1 : 0)) * $alume20), 2);
    $alumg21 = round((((60 < $alumc21 ? 1 : 0) || (60 < $alumb21 ? 1 : 0)) * $alume21), 2);
    $alumg22 = round((((60 < $alumc22 ? 1 : 0) || (60 < $alumb22 ? 1 : 0)) * $alume22), 2);
    $alumg23 = round((((60 < $alumc23 ? 1 : 0) || (60 < $alumb23 ? 1 : 0)) * $alume23), 2);
    $alumg24 = round((((60 < $alumc24 ? 1 : 0) || (60 < $alumb24 ? 1 : 0)) * $alume24), 2);
    $alumg25 = round((((60 < $alumc25 ? 1 : 0) || (60 < $alumb25 ? 1 : 0)) * $alume25), 2);
    $alumg26 = round((((60 < $alumc26 ? 1 : 0) || (60 < $alumb26 ? 1 : 0)) * $alume26), 2);
    $alumg27 = round((((60 < $alumc27 ? 1 : 0) || (60 < $alumb27 ? 1 : 0)) * $alume27), 2);
    $alumg28 = round((((60 < $alumc28 ? 1 : 0) || (60 < $alumb28 ? 1 : 0)) * $alume28), 2);
    $alumg29 = round((((60 < $alumc29 ? 1 : 0) || (60 < $alumb29 ? 1 : 0)) * $alume29), 2);
    $alumg30 = round((((60 < $alumc30 ? 1 : 0) || (60 < $alumb30 ? 1 : 0)) * $alume30), 2);
    $alumg31 = round((((60 < $alumc31 ? 1 : 0) || (60 < $alumb31 ? 1 : 0)) * $alume31), 2);
    $alumg32 = round((((60 < $alumc32 ? 1 : 0) || (60 < $alumb32 ? 1 : 0)) * $alume32), 2);
    $alumg33 = round((((60 < $alumc33 ? 1 : 0) || (60 < $alumb33 ? 1 : 0)) * $alume33), 2);
    $alumg34 = round((((60 < $alumc34 ? 1 : 0) || (60 < $alumb34 ? 1 : 0)) * $alume34), 2);
    $alumg35 = round((((60 < $alumc35 ? 1 : 0) || (60 < $alumb35 ? 1 : 0)) * $alume35), 2);
    $alumg36 = round((((60 < $alumc36 ? 1 : 0) || (60 < $alumb36 ? 1 : 0)) * $alume36), 2);
    $alumg37 = round((((60 < $alumc37 ? 1 : 0) || (60 < $alumb37 ? 1 : 0)) * $alume37), 2);
    $alumg38 = round((((60 < $alumc38 ? 1 : 0) || (60 < $alumb38 ? 1 : 0)) * $alume38), 2);
    $alumg39 = round((((60 < $alumc39 ? 1 : 0) || (60 < $alumb39 ? 1 : 0)) * $alume39), 2);
    $alumg40 = round((((60 < $alumc40 ? 1 : 0) || (60 < $alumb40 ? 1 : 0)) * $alume40), 2);
    $alumg41 = round((((60 < $alumc41 ? 1 : 0) || (60 < $alumb41 ? 1 : 0)) * $alume41), 2);



    $alume8array = [$alume10, $alume11, $alume12, $alume13, $alume14, $alume15,
                    $alume16, $alume17, $alume18, $alume19, $alume20, $alume21,
                    $alume22, $alume23, $alume24, $alume25, $alume26, $alume27,
                    $alume28, $alume29, $alume30, $alume31, $alume32, $alume33,
                    $alume34, $alume34, $alume35, $alume36, $alume37, $alume38,
                    $alume39, $alume40, $alume41];
    $alume8 = round(array_sum($alume8array), 2);
    $alume42 = $alume8;
    $_SESSION['alume8'] = $alume8;


    $alumf5array = [$alumf10, $alumf11, $alumf12, $alumf13, $alumf14, $alumf15,
                    $alumf16, $alumf17, $alumf18, $alumf19, $alumf20, $alumf21,
                    $alumf22, $alumf23, $alumf24, $alumf25, $alumf26, $alumf27,
                    $alumf28, $alumf29, $alumf30, $alumf31, $alumf32, $alumf33,
                    $alumf34, $alumf34, $alumf35, $alumf36, $alumf37, $alumf38,
                    $alumf39, $alumf40, $alumf41];

    $alumf5 = round(array_sum($alumf5array), 2);
    $alumf42 = $alumf5;


    $alumg5array = [$alumg10, $alumg11, $alumg12, $alumg13, $alumg14, $alumg15,
                    $alumg16, $alumg17, $alumg18, $alumg19, $alumg20, $alumg21,
                    $alumg22, $alumg23, $alumg24, $alumg25, $alumg26, $alumg27,
                    $alumg28, $alumg29, $alumg30, $alumg31, $alumg32, $alumg33,
                    $alumg34, $alumg34, $alumg35, $alumg36, $alumg37, $alumg38,
                    $alumg39, $alumg40, $alumg41];
    $alumg5 = round(array_sum($alumg5array), 2);
    $alumg42 = $alumg5;

    $alumh5array = [$alumf5, $alumg5];
    $alumh5 = round(array_sum($alumh5array), 2);

    $alumf4 = round( $alumf5 * 0.635, 2);
    $alumg4 = round( $alumg5 * 0.68, 2);
    $alumh4array = [$alumf4, $alumg4];
    $alumh4 = round(array_sum($alumh4array), 2);

    $alume2 = round(($alumh4 * 0.24) + $alumh4, 2);
    $alumh2 = round(((((($alume2 * 2.25) * 1.1) *1.1) *1.1) *1.1) * 1.07, 2);
    $alume3 = round(($alumh5 * 0.24) + $alumh5, 2) ;
    $alumh3 = round(($alume2 * 6.5) * 1.03, 2);

    $alumd1 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-';

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Aluminium</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>

</style>
<body>
    <div class="section">
        <form action="" method = "POST">
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
        </tr> -->
        <tr class="aluminiumTableHeaderOne">
            <!-- <td style="position: sticky; left:0;  background-color: white;">1</td> -->
            <td style="background : white"></td>
            <td>Job name:</td>
            <td></td>
            <td><input type="text" name="alumd1" readonly value="<?php if(isset($alumd1)){ echo $alumd1 ; }?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="aluminiumTableHeaderTwo">
            <!-- <td style="position: sticky; left:0;  background-color: white;">2</td> -->
            <td style="background : white"></td>
            <td>Net total lbs :</td>
            <td></td>
            <td></td>
            <td><input type="text" name="alume2" readonly value="<?php if(isset($alume2)){ echo $alume2 ; } else{ echo 0 ;} ?>"></td>
            <td>Material cost :</td>
            <td></td>
            <td><input type="text" name="alumh2" readonly value="<?php if(isset($alumh2)){ echo $alumh2 ; } else{ echo 0 ;} ?>"></td>
        </tr>
        <tr class="aluminiumTableHeaderTwo">
        <!-- <td style="position: sticky; left:0;  background-color: white;">3</td> -->
            <td style="background : white"></td>
            <td>Net total sq.ft :</td>
            <td></td>
            <td></td>
            <td><input type="text" name="alume3" readonly value="<?php if(isset($alume3)){ echo $alume3 ; } else{ echo 0 ;} ?>"></td>
            <td>Labor cost:</td>
            <td></td>
            <td><input type="text" name="alumh3" readonly value="<?php if(isset($alumh3)){ echo $alumh3 ; } else{ echo 0 ;} ?>"></td> 
        </tr>
        <tr class="aluminiumTableHeaderOne">
        <!-- <td style="position: sticky; left:0;  background-color: white;">4</td> -->
            <td style="background : white"></td>
            <td>Total lbs :</td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="alumf4" readonly value="<?php if(isset($alumf4)){ echo $alumf4 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg4" readonly value="<?php if(isset($alumg4)){ echo $alumg4 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh4" readonly value="<?php if(isset($alumh4)){ echo $alumh4 ; } else{ echo 0 ;} ?>"></td>
        </tr>
        <tr class="aluminiumTableHeaderOne">
        <!-- <td style="position: sticky; left:0;  background-color: white;">5</td> -->
            <td style="background : white"></td>
            <td>Total sq.ft:</td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="alumf5" readonly value="<?php if(isset($alumf5)){ echo $alumf5 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg5" readonly value="<?php if(isset($alumg5)){ echo $alumg5 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh5" readonly value="<?php if(isset($alumh5)){ echo $alumh5 ; } else{ echo 0 ;} ?>"></td>
        </tr>
        <tr class="aluminiumTableHeaderOne">
        <!-- <td style="position: sticky; left:0;  background-color: white;">6</td> -->
            <td style="background : white"></td>
            <td>Duct Size</td>
            <td></td>
            <td>Linear</td>
            <td>Total</td>
            <td>0-60</td>
            <td>61-UP</td>
            <td></td>
        </tr>

        <tr>
        <!-- <td style="position: sticky; left:0;  background-color: white;">7</td> -->
            <td></td>
            <td></td>
            <td>X</td>
            <td>FEET</td>
            <td>LIN FT</td>
            <td>20G</td>
            <td>18G</td>
            <td>NOTES</td>
        </tr>
        <tr>
            <!-- <td style="position: sticky; left:0;  background-color: white;">8</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input style="outline: none !important;border: none !important;background-color: transparent !important;" type="text" name="alume8" readonly value="<?php if(isset($alume8)){ echo $alume8 ; } else{ echo 0 ;} ?>"></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <!--  -->


        <tr style="position:sticky;top:0%;background: #48494B !important; color: white !important; " class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">9</td> -->
            <td>Sheet  </td>
            <td>Column2</td>
            <td>Column3</td>
            <td>Column4</td>
            <td>Column8</td>
            <td>Column6</td>
            <td>Column5</td>
            <td>Column7</td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">10</td> -->
            <td><input type="text" name="aluma10" value=""></td>
            <td><input type="text" name="alumb10" value="<?php if(isset($_REQUEST['alumb10'])){ echo $_REQUEST['alumb10'] ; } ?>"></td>
            <td><input type="text" name="alumc10" value="<?php if(isset($_REQUEST['alumc10'])){ echo $_REQUEST['alumc10'] ; } ?>"></td>
            <td><input type="text" name="alumd10" value="<?php if(isset($_REQUEST['alumd10'])){ echo $_REQUEST['alumd10'] ; } ?>"></td>
            <td><input type="text" name="alume10" readonly value="<?php if(isset($alume10)){ echo $alume10 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf10" readonly value="<?php if(isset($alumf10)){ echo $alumf10 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg10" readonly value="<?php if(isset($alumg10)){ echo $alumg10 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh10" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">11</td> -->
            <td><input type="text" name="aluma11" value=""></td>
            <td><input type="text" name="alumb11" value="<?php if(isset($_REQUEST['alumb11'])){ echo $_REQUEST['alumb11'] ; } ?>"></td>
            <td><input type="text" name="alumc11" value="<?php if(isset($_REQUEST['alumc11'])){ echo $_REQUEST['alumc11'] ; } ?>"></td>
            <td><input type="text" name="alumd11" value="<?php if(isset($_REQUEST['alumd11'])){ echo $_REQUEST['alumd11'] ; } ?>"></td>
            <td><input type="text" name="alume11" readonly value="<?php if(isset($alume11)){ echo $alume11 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf11" readonly value="<?php if(isset($alumf11)){ echo $alumf11 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg11" readonly value="<?php if(isset($alumg11)){ echo $alumg11 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh11" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">12</td> -->
            <td><input type="text" name="aluma12" value=""></td>
            <td><input type="text" name="alumb12" value="<?php if(isset($_REQUEST['alumb12'])){ echo $_REQUEST['alumb12'] ;} ?>"></td>
            <td><input type="text" name="alumc12" value="<?php if(isset($_REQUEST['alumc12'])){ echo $_REQUEST['alumc12'] ;} ?>"></td>
            <td><input type="text" name="alumd12" value="<?php if(isset($_REQUEST['alumd12'])){ echo $_REQUEST['alumd12'] ;} ?>"></td>
            <td><input type="text" name="alume12" readonly value="<?php if(isset($alume12)){ echo $alume12 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf12" readonly value="<?php if(isset($alumf12)){ echo $alumf12 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg12" readonly value="<?php if(isset($alumg12)){ echo $alumg12 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh12" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">13</td> -->
            <td><input type="text" name="aluma13" value=""></td>
            <td><input type="text" name="alumb13" value="<?php if(isset($_REQUEST['alumb13'])){ echo $_REQUEST['alumb13'] ; } ?>"></td>
            <td><input type="text" name="alumc13" value="<?php if(isset($_REQUEST['alumc13'])){ echo $_REQUEST['alumc13'] ; } ?>"></td>
            <td><input type="text" name="alumd13" value="<?php if(isset($_REQUEST['alumd13'])){ echo $_REQUEST['alumd13'] ; } ?>"></td>
            <td><input type="text" name="alume13" readonly value="<?php if(isset($alume13)){ echo $alume13 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf13" readonly value="<?php if(isset($alumf13)){ echo $alumf13 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg13" readonly value="<?php if(isset($alumg13)){ echo $alumg13 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh13" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">14</td> -->
            <td><input type="text" name="aluma14" value=""></td>
            <td><input type="text" name="alumb14" value="<?php if(isset($_REQUEST['alumb14'])){ echo $_REQUEST['alumb14'] ; } ?>"></td>
            <td><input type="text" name="alumc14" value="<?php if(isset($_REQUEST['alumc14'])){ echo $_REQUEST['alumc14'] ; } ?>"></td>
            <td><input type="text" name="alumd14" value="<?php if(isset($_REQUEST['alumd14'])){ echo $_REQUEST['alumd14'] ; } ?>"></td>
            <td><input type="text" name="alume14" readonly value="<?php if(isset($alume14)){ echo $alume14 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf14" readonly value="<?php if(isset($alumf14)){ echo $alumf14 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg14" readonly value="<?php if(isset($alumg14)){ echo $alumg14 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh14" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">15</td> -->
            <td><input type="text" name="aluma15" value=""></td>
            <td><input type="text" name="alumb15" value="<?php if(isset($_REQUEST['alumb15'])){ echo $_REQUEST['alumb15'] ; } ?>"></td>
            <td><input type="text" name="alumc15" value="<?php if(isset($_REQUEST['alumc15'])){ echo $_REQUEST['alumc15'] ; } ?>"></td>
            <td><input type="text" name="alumd15" value="<?php if(isset($_REQUEST['alumd15'])){ echo $_REQUEST['alumd15'] ; } ?>"></td>
            <td><input type="text" name="alume15" readonly value="<?php if(isset($alume15)){ echo $alume15 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf15" readonly value="<?php if(isset($alumf15)){ echo $alumf15 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg15" readonly value="<?php if(isset($alumg15)){ echo $alumg15 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh15" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">16</td> -->
            <td><input type="text" name="aluma16" value=""></td>
            <td><input type="text" name="alumb16" value="<?php if(isset($_REQUEST['alumb16'])){ echo $_REQUEST['alumb16'] ; } ?>"></td>
            <td><input type="text" name="alumc16" value="<?php if(isset($_REQUEST['alumc16'])){ echo $_REQUEST['alumc16'] ; } ?>"></td>
            <td><input type="text" name="alumd16" value="<?php if(isset($_REQUEST['alumd16'])){ echo $_REQUEST['alumd16'] ; } ?>"></td>
            <td><input type="text" name="alume16" readonly value="<?php if(isset($alume16)){ echo $alume16 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf16" readonly value="<?php if(isset($alumf16)){ echo $alumf16 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg16" readonly value="<?php if(isset($alumg16)){ echo $alumg16 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh16" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">17</td> -->
            <td><input type="text" name="aluma17" value=""></td>
            <td><input type="text" name="alumb17" value="<?php if(isset($_REQUEST['alumb17'])){ echo $_REQUEST['alumb17'] ; } ?>"></td>
            <td><input type="text" name="alumc17" value="<?php if(isset($_REQUEST['alumc17'])){ echo $_REQUEST['alumc17'] ; } ?>"></td>
            <td><input type="text" name="alumd17" value="<?php if(isset($_REQUEST['alumd17'])){ echo $_REQUEST['alumd17'] ; } ?>"></td>
            <td><input type="text" name="alume17" readonly value="<?php if(isset($alume17)){ echo $alume17 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf17" readonly value="<?php if(isset($alumf17)){ echo $alumf17 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg17" readonly value="<?php if(isset($alumg17)){ echo $alumg17 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh17" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">18</td> -->
            <td><input type="text" name="aluma18" value=""></td>
            <td><input type="text" name="alumb18" value="<?php if(isset($_REQUEST['alumb18'])){ echo $_REQUEST['alumb18'] ; } ?>"></td>
            <td><input type="text" name="alumc18" value="<?php if(isset($_REQUEST['alumc18'])){ echo $_REQUEST['alumc18'] ; } ?>"></td>
            <td><input type="text" name="alumd18" value="<?php if(isset($_REQUEST['alumd18'])){ echo $_REQUEST['alumd18'] ; } ?>"></td>
            <td><input type="text" name="alume18" readonly value="<?php if(isset($alume18)){ echo $alume18 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf18" readonly value="<?php if(isset($alumf18)){ echo $alumf18 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg18" readonly value="<?php if(isset($alumg18)){ echo $alumg18 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh18" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">19</td> -->
            <td><input type="text" name="aluma19" value=""></td>
            <td><input type="text" name="alumb19" value="<?php if(isset($_REQUEST['alumb19'])){ echo $_REQUEST['alumb19'] ; } ?>"></td>
            <td><input type="text" name="alumc19" value="<?php if(isset($_REQUEST['alumc19'])){ echo $_REQUEST['alumc19'] ; } ?>"></td>
            <td><input type="text" name="alumd19" value="<?php if(isset($_REQUEST['alumd19'])){ echo $_REQUEST['alumd19'] ; } ?>"></td>
            <td><input type="text" name="alume19" readonly value="<?php if(isset($alume19)){ echo $alume19 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf19" readonly value="<?php if(isset($alumf19)){ echo $alumf19 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg19" readonly value="<?php if(isset($alumg19)){ echo $alumg19 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh19" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">20</td> -->
            <td><input type="text" name="aluma20" value=""></td>
            <td><input type="text" name="alumb20" value="<?php if(isset($_REQUEST['alumb20'])){ echo $_REQUEST['alumb20'] ; } ?>"></td>
            <td><input type="text" name="alumc20" value="<?php if(isset($_REQUEST['alumc20'])){ echo $_REQUEST['alumc20'] ; } ?>"></td>
            <td><input type="text" name="alumd20" value="<?php if(isset($_REQUEST['alumd20'])){ echo $_REQUEST['alumd20'] ; } ?>"></td>
            <td><input type="text" name="alume20" readonly value="<?php if(isset($alume20)){ echo $alume20 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf20" readonly value="<?php if(isset($alumf20)){ echo $alumf20 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg20" readonly value="<?php if(isset($alumg20)){ echo $alumg20 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh20" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">21</td> -->
            <td><input type="text" name="aluma21" value=""></td>
            <td><input type="text" name="alumb21" value="<?php if(isset($_REQUEST['alumb21'])){ echo $_REQUEST['alumb21'] ; } ?>"></td>
            <td><input type="text" name="alumc21" value="<?php if(isset($_REQUEST['alumc21'])){ echo $_REQUEST['alumc21'] ; } ?>"></td>
            <td><input type="text" name="alumd21" value="<?php if(isset($_REQUEST['alumd21'])){ echo $_REQUEST['alumd21'] ; } ?>"></td>
            <td><input type="text" name="alume21" readonly value="<?php if(isset($alume21)){ echo $alume21 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf21" readonly value="<?php if(isset($alumf21)){ echo $alumf21 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg21" readonly value="<?php if(isset($alumg21)){ echo $alumg21 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh21" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">22</td> -->
            <td><input type="text" name="aluma22" value=""></td>
            <td><input type="text" name="alumb22" value="<?php if(isset($_REQUEST['alumb22'])){ echo $_REQUEST['alumb22'] ; } ?>"></td>
            <td><input type="text" name="alumc22" value="<?php if(isset($_REQUEST['alumc22'])){ echo $_REQUEST['alumc22'] ; } ?>"></td>
            <td><input type="text" name="alumd22" value="<?php if(isset($_REQUEST['alumd22'])){ echo $_REQUEST['alumd22'] ; } ?>"></td>
            <td><input type="text" name="alume22" readonly value="<?php if(isset($alume22)){ echo $alume22 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf22" readonly value="<?php if(isset($alumf22)){ echo $alumf22 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg22" readonly value="<?php if(isset($alumg22)){ echo $alumg22 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh22" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">23</td> -->
            <td><input type="text" name="aluma23" value=""></td>
            <td><input type="text" name="alumb23" value="<?php if(isset($_REQUEST['alumb23'])){ echo $_REQUEST['alumb23'] ; } ?>"></td>
            <td><input type="text" name="alumc23" value="<?php if(isset($_REQUEST['alumc23'])){ echo $_REQUEST['alumc23'] ; } ?>"></td>
            <td><input type="text" name="alumd23" value="<?php if(isset($_REQUEST['alumd23'])){ echo $_REQUEST['alumd23'] ; } ?>"></td>
            <td><input type="text" name="alume23" readonly value="<?php if(isset($alume23)){ echo $alume23 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf23" readonly value="<?php if(isset($alumf23)){ echo $alumf23 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg23" readonly value="<?php if(isset($alumg23)){ echo $alumg23 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh23" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">24</td> -->
            <td><input type="text" name="aluma24" value=""></td>
            <td><input type="text" name="alumb24" value="<?php if(isset($_REQUEST['alumb24'])){ echo $_REQUEST['alumb24'] ; } ?>"></td>
            <td><input type="text" name="alumc24" value="<?php if(isset($_REQUEST['alumc24'])){ echo $_REQUEST['alumc24'] ; } ?>"></td>
            <td><input type="text" name="alumd24" value="<?php if(isset($_REQUEST['alumd24'])){ echo $_REQUEST['alumd24'] ; } ?>"></td>
            <td><input type="text" name="alume24" readonly value="<?php if(isset($alume24)){ echo $alume24 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf24" readonly value="<?php if(isset($alumf24)){ echo $alumf24 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg24" readonly value="<?php if(isset($alumg24)){ echo $alumg24 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh24" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">25</td> -->
            <td><input type="text" name="aluma25" value=""></td>
            <td><input type="text" name="alumb25" value="<?php if(isset($_REQUEST['alumb25'])){ echo $_REQUEST['alumb25'] ;} ?>"></td>
            <td><input type="text" name="alumc25" value="<?php if(isset($_REQUEST['alumc25'])){ echo $_REQUEST['alumc25'] ;} ?>"></td>
            <td><input type="text" name="alumd25" value="<?php if(isset($_REQUEST['alumd25'])){ echo $_REQUEST['alumd25'] ;} ?>"></td>
            <td><input type="text" name="alume25" readonly value="<?php if(isset($alume25)){ echo $alume25 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf25" readonly value="<?php if(isset($alumf25)){ echo $alumf25 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg25" readonly value="<?php if(isset($alumg25)){ echo $alumg25 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh25" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">26</td> -->
            <td><input type="text" name="aluma26" value=""></td>
            <td><input type="text" name="alumb26" value="<?php if(isset($_REQUEST['alumb26'])){ echo $_REQUEST['alumb26'] ; } ?>"></td>
            <td><input type="text" name="alumc26" value="<?php if(isset($_REQUEST['alumc26'])){ echo $_REQUEST['alumc26'] ; } ?>"></td>
            <td><input type="text" name="alumd26" value="<?php if(isset($_REQUEST['alumd26'])){ echo $_REQUEST['alumd26'] ; } ?>"></td>
            <td><input type="text" name="alume26" readonly value="<?php if(isset($alume26)){ echo $alume26 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf26" readonly value="<?php if(isset($alumf26)){ echo $alumf26 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg26" readonly value="<?php if(isset($alumg26)){ echo $alumg26 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh26" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">27</td> -->
            <td><input type="text" name="aluma27" value=""></td>
            <td><input type="text" name="alumb27" value="<?php if(isset($_REQUEST['alumb27'])){ echo $_REQUEST['alumb27'] ;} ?>"></td>
            <td><input type="text" name="alumc27" value="<?php if(isset($_REQUEST['alumc27'])){ echo $_REQUEST['alumc27'] ;} ?>"></td>
            <td><input type="text" name="alumd27" value="<?php if(isset($_REQUEST['alumd27'])){ echo $_REQUEST['alumd27'] ;} ?>"></td>
            <td><input type="text" name="alume27" readonly value="<?php if(isset($alume27)){ echo $alume27 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf27" readonly value="<?php if(isset($alumf27)){ echo $alumf27 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg27" readonly value="<?php if(isset($alumg27)){ echo $alumg27 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh27" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">28</td> -->
            <td><input type="text" name="aluma28" value=""></td>
            <td><input type="text" name="alumb28" value="<?php if(isset($_REQUEST['alumb28'])){ echo $_REQUEST['alumb28'] ; } ?>"></td>
            <td><input type="text" name="alumc28" value="<?php if(isset($_REQUEST['alumc28'])){ echo $_REQUEST['alumc28'] ; } ?>"></td>
            <td><input type="text" name="alumd28" value="<?php if(isset($_REQUEST['alumd28'])){ echo $_REQUEST['alumd28'] ; } ?>"></td>
            <td><input type="text" name="alume28" readonly value="<?php if(isset($alume28)){ echo $alume28 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf28" readonly value="<?php if(isset($alumf28)){ echo $alumf28 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg28" readonly value="<?php if(isset($alumg28)){ echo $alumg28 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh28" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">29</td> -->
            <td><input type="text" name="aluma29" value=""></td>
            <td><input type="text" name="alumb29" value="<?php if(isset($_REQUEST['alumb29'])){ echo $_REQUEST['alumb29'] ; } ?>"></td>
            <td><input type="text" name="alumc29" value="<?php if(isset($_REQUEST['alumc29'])){ echo $_REQUEST['alumc29'] ; } ?>"></td>
            <td><input type="text" name="alumd29" value="<?php if(isset($_REQUEST['alumd29'])){ echo $_REQUEST['alumd29'] ; } ?>"></td>
            <td><input type="text" name="alume29" readonly value="<?php if(isset($alume29)){ echo $alume29 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf29" readonly value="<?php if(isset($alumf29)){ echo $alumf29 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg29" readonly value="<?php if(isset($alumg29)){ echo $alumg29 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh29" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">30</td> -->
            <td><input type="text" name="aluma30" value=""></td>
            <td><input type="text" name="alumb30" value="<?php if(isset($_REQUEST['alumb30'])){ echo $_REQUEST['alumb30'] ; } ?>"></td>
            <td><input type="text" name="alumc30" value="<?php if(isset($_REQUEST['alumc30'])){ echo $_REQUEST['alumc30'] ; } ?>"></td>
            <td><input type="text" name="alumd30" value="<?php if(isset($_REQUEST['alumd30'])){ echo $_REQUEST['alumd30'] ; } ?>"></td>
            <td><input type="text" name="alume30" readonly value="<?php if(isset($alume30)){ echo $alume30 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf30" readonly value="<?php if(isset($alumf30)){ echo $alumf30 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg30" readonly value="<?php if(isset($alumg30)){ echo $alumg30 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh30" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">31</td> -->
            <td><input type="text" name="aluma31" value=""></td>
            <td><input type="text" name="alumb31" value="<?php if(isset($_REQUEST['alumb31'])){ echo $_REQUEST['alumb31'] ; } ?>"></td>
            <td><input type="text" name="alumc31" value="<?php if(isset($_REQUEST['alumc31'])){ echo $_REQUEST['alumc31'] ; } ?>"></td>
            <td><input type="text" name="alumd31" value="<?php if(isset($_REQUEST['alumd31'])){ echo $_REQUEST['alumd31'] ; } ?>"></td>
            <td><input type="text" name="alume31" readonly value="<?php if(isset($alume31)){ echo $alume31 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf31" readonly value="<?php if(isset($alumf31)){ echo $alumf31 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg31" readonly value="<?php if(isset($alumg31)){ echo $alumg31 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh31" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">32</td> -->
            <td><input type="text" name="aluma32" value=""></td>
            <td><input type="text" name="alumb32" value="<?php if(isset($_REQUEST['alumb32'])){ echo $_REQUEST['alumb32'] ; } ?>"></td>
            <td><input type="text" name="alumc32" value="<?php if(isset($_REQUEST['alumc32'])){ echo $_REQUEST['alumc32'] ; } ?>"></td>
            <td><input type="text" name="alumd32" value="<?php if(isset($_REQUEST['alumd32'])){ echo $_REQUEST['alumd32'] ; } ?>"></td>
            <td><input type="text" name="alume32" readonly value="<?php if(isset($alume32)){ echo $alume32 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf32" readonly value="<?php if(isset($alumf32)){ echo $alumf32 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg32" readonly value="<?php if(isset($alumg32)){ echo $alumg32 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh32" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">33</td> -->
            <td><input type="text" name="aluma33" value=""></td>
            <td><input type="text" name="alumb33" value="<?php if(isset($_REQUEST['alumb33'])){ echo $_REQUEST['alumb33'] ; } ?>"></td>
            <td><input type="text" name="alumc33" value="<?php if(isset($_REQUEST['alumc33'])){ echo $_REQUEST['alumc33'] ; } ?>"></td>
            <td><input type="text" name="alumd33" value="<?php if(isset($_REQUEST['alumd33'])){ echo $_REQUEST['alumd33'] ; } ?>"></td>
            <td><input type="text" name="alume33" readonly value="<?php if(isset($alume33)){ echo $alume33 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf33" readonly value="<?php if(isset($alumf33)){ echo $alumf33 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg33" readonly value="<?php if(isset($alumg33)){ echo $alumg33 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh33" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">34</td> -->
            <td><input type="text" name="aluma34" value=""></td>
            <td><input type="text" name="alumb34" value="<?php if(isset($_REQUEST['alumb34'])){ echo $_REQUEST['alumb34'] ; } ?>"></td>
            <td><input type="text" name="alumc34" value="<?php if(isset($_REQUEST['alumc34'])){ echo $_REQUEST['alumc34'] ; } ?>"></td>
            <td><input type="text" name="alumd34" value="<?php if(isset($_REQUEST['alumd34'])){ echo $_REQUEST['alumd34'] ; } ?>"></td>
            <td><input type="text" name="alume34" readonly value="<?php if(isset($alume34)){ echo $alume34 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf34" readonly value="<?php if(isset($alumf34)){ echo $alumf34 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg34" readonly value="<?php if(isset($alumg34)){ echo $alumg34 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh34" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">35</td> -->
            <td><input type="text" name="aluma35" value=""></td>
            <td><input type="text" name="alumb35" value="<?php if(isset($_REQUEST['alumb35'])){ echo $_REQUEST['alumb35'] ; } ?>"></td>
            <td><input type="text" name="alumc35" value="<?php if(isset($_REQUEST['alumc35'])){ echo $_REQUEST['alumc35'] ; } ?>"></td>
            <td><input type="text" name="alumd35" value="<?php if(isset($_REQUEST['alumd35'])){ echo $_REQUEST['alumd35'] ; } ?>"></td>
            <td><input type="text" name="alume35" readonly value="<?php if(isset($alume35)){ echo $alume35 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf35" readonly value="<?php if(isset($alumf35)){ echo $alumf35 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg35" readonly value="<?php if(isset($alumg35)){ echo $alumg35 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh35" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">36</td> -->
            <td><input type="text" name="aluma36" value=""></td>
            <td><input type="text" name="alumb36" value="<?php if(isset($_REQUEST['alumb36'])){ echo $_REQUEST['alumb36'] ;} ?>"></td>
            <td><input type="text" name="alumc36" value="<?php if(isset($_REQUEST['alumc36'])){ echo $_REQUEST['alumc36'] ;} ?>"></td>
            <td><input type="text" name="alumd36" value="<?php if(isset($_REQUEST['alumd36'])){ echo $_REQUEST['alumd36'] ;} ?>"></td>
            <td><input type="text" name="alume36" readonly value="<?php if(isset($alume36)){ echo $alume36 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf36" readonly value="<?php if(isset($alumf36)){ echo $alumf36 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg36" readonly value="<?php if(isset($alumg36)){ echo $alumg36 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh36" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">37</td> -->
            <td><input type="text" name="aluma37" value=""></td>
            <td><input type="text" name="alumb37" value="<?php if(isset($_REQUEST['alumb37'])){ echo $_REQUEST['alumb37'] ; } ?>"></td>
            <td><input type="text" name="alumc37" value="<?php if(isset($_REQUEST['alumc37'])){ echo $_REQUEST['alumc37'] ; } ?>"></td>
            <td><input type="text" name="alumd37" value="<?php if(isset($_REQUEST['alumd37'])){ echo $_REQUEST['alumd37'] ; } ?>"></td>
            <td><input type="text" name="alume37" readonly value="<?php if(isset($alume37)){ echo $alume37 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf37" readonly value="<?php if(isset($alumf37)){ echo $alumf37 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg37" readonly value="<?php if(isset($alumg37)){ echo $alumg37 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh37" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">38</td> -->
            <td><input type="text" name="aluma38" value=""></td>
            <td><input type="text" name="alumb38" value="<?php if(isset($_REQUEST['alumb38'])){ echo $_REQUEST['alumb38'] ; } ?>"></td>
            <td><input type="text" name="alumc38" value="<?php if(isset($_REQUEST['alumc38'])){ echo $_REQUEST['alumc38'] ; } ?>"></td>
            <td><input type="text" name="alumd38" value="<?php if(isset($_REQUEST['alumd38'])){ echo $_REQUEST['alumd38'] ; } ?>"></td>
            <td><input type="text" name="alume38" readonly value="<?php if(isset($alume38)){ echo $alume38 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf38" readonly value="<?php if(isset($alumf38)){ echo $alumf38 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg38" readonly value="<?php if(isset($alumg38)){ echo $alumg38 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh38" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">39</td> -->
            <td><input type="text" name="aluma39" value=""></td>
            <td><input type="text" name="alumb39" value="<?php if(isset($_REQUEST['alumb39'])){ echo $_REQUEST['alumb39'] ; } ?>"></td>
            <td><input type="text" name="alumc39" value="<?php if(isset($_REQUEST['alumc39'])){ echo $_REQUEST['alumc39'] ; } ?>"></td>
            <td><input type="text" name="alumd39" value="<?php if(isset($_REQUEST['alumd39'])){ echo $_REQUEST['alumd39'] ; } ?>"></td>
            <td><input type="text" name="alume39" readonly value="<?php if(isset($alume39)){ echo $alume39 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf39" readonly value="<?php if(isset($alumf39)){ echo $alumf39 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg39" readonly value="<?php if(isset($alumg39)){ echo $alumg39 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh39" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">40</td> -->
            <td><input type="text" name="aluma40" value=""></td>
            <td><input type="text" name="alumb40" value="<?php if(isset($_REQUEST['alumb40'])){ echo $_REQUEST['alumb40'] ; } ?>"></td>
            <td><input type="text" name="alumc40" value="<?php if(isset($_REQUEST['alumc40'])){ echo $_REQUEST['alumc40'] ; } ?>"></td>
            <td><input type="text" name="alumd40" value="<?php if(isset($_REQUEST['alumd40'])){ echo $_REQUEST['alumd40'] ; } ?>"></td>
            <td><input type="text" name="alume40" readonly value="<?php if(isset($alume40)){ echo $alume40 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf40" readonly value="<?php if(isset($alumf40)){ echo $alumf40 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg40" readonly value="<?php if(isset($alumg40)){ echo $alumg40 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh40" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">41</td> -->
            <td><input type="text" name="aluma41" value=""></td>
            <td><input type="text" name="alumb41" value="<?php if(isset($_REQUEST['alumb41'])){ echo $_REQUEST['alumb41'] ; } ?>"></td>
            <td><input type="text" name="alumc41" value="<?php if(isset($_REQUEST['alumc41'])){ echo $_REQUEST['alumc41'] ; } ?>"></td>
            <td><input type="text" name="alumd41" value="<?php if(isset($_REQUEST['alumd41'])){ echo $_REQUEST['alumd41'] ; } ?>"></td>
            <td><input type="text" name="alume41" readonly value="<?php if(isset($alume41)){ echo $alume41 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumf41" readonly value="<?php if(isset($alumf41)){ echo $alumf41 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumg41" readonly value="<?php if(isset($alumg41)){ echo $alumg41 ; } else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="alumh41" value=""></td>
        </tr>
        <tr class="aluminiumTableBody">
            <!-- <td style="position: sticky; left:0;  background-color: white;">42</td> -->
            <td><input type="text" name="aluma42" readonly value="<?php if(isset($aluma42)){ echo $aluma42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumb42" readonly value="<?php if(isset($alumb42)){ echo $alumb42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumc42" readonly value="<?php if(isset($alumc42)){ echo $alumc42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumd42" readonly value="<?php if(isset($alumd42)){ echo $alumd42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alume42" readonly value="<?php if(isset($alume42)){ echo $alume42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumf42" readonly value="<?php if(isset($alumf42)){ echo $alumf42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumg42" readonly value="<?php if(isset($alumg42)){ echo $alumg42 ; } else{ echo 0 ; } ?>"></td>
            <td><input type="text" name="alumh42" readonly value="<?php if(isset($alumh42)){ echo $alumh42 ; } else{ echo 0 ; } ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Refresh" name="alumsubmit" class="alumsubmit">
    </form>
    </div>
</body>
</html>
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