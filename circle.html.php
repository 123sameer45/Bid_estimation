<?php  require  "navbar.html.php" ;;
if(isset($_REQUEST['circlesubmit'])){
    // TOTAL COLUMN Table 2
        $q10 = [floatval($_REQUEST['circleb10']), floatval($_REQUEST['circlec10']), floatval($_REQUEST['circled10']), floatval($_REQUEST['circlee10']),
                floatval($_REQUEST['circlef10']), floatval($_REQUEST['circleg10']), floatval($_REQUEST['circleh10']), floatval($_REQUEST['circlei10']), 
                floatval($_REQUEST['circlej10']), floatval($_REQUEST['circlek10']), floatval($_REQUEST['circlel10']), floatval($_REQUEST['circlem10']), 
                floatval($_REQUEST['circlen10']), floatval($_REQUEST['circleo10']), floatval($_REQUEST['circlep10'])];
        $circleq10 = round(array_sum($q10), 2);

        $q11 = [floatval($_REQUEST['circleb11']), floatval($_REQUEST['circlec11']), floatval($_REQUEST['circled11']), floatval($_REQUEST['circlee11']),
                floatval($_REQUEST['circlef11']), floatval($_REQUEST['circleg11']), floatval($_REQUEST['circleh11']), floatval($_REQUEST['circlei11']), 
                floatval($_REQUEST['circlej11']), floatval($_REQUEST['circlek11']), floatval($_REQUEST['circlel11']), floatval($_REQUEST['circlem11']), 
                floatval($_REQUEST['circlen11']), floatval($_REQUEST['circleo11']), floatval($_REQUEST['circlep11'])];
        $circleq11 = round(array_sum($q11), 2);

        $q12 = [floatval($_REQUEST['circleb12']), floatval($_REQUEST['circlec12']), floatval($_REQUEST['circled12']), floatval($_REQUEST['circlee12']),
                floatval($_REQUEST['circlef12']), floatval($_REQUEST['circleg12']), floatval($_REQUEST['circleh12']), floatval($_REQUEST['circlei12']), 
                floatval($_REQUEST['circlej12']), floatval($_REQUEST['circlek12']), floatval($_REQUEST['circlel12']), floatval($_REQUEST['circlem12']), 
                floatval($_REQUEST['circlen12']), floatval($_REQUEST['circleo12']), floatval($_REQUEST['circlep12'])];
        $circleq12 = round(array_sum($q12), 2);

        $q13 = [floatval($_REQUEST['circleb13']), floatval($_REQUEST['circlec13']), floatval($_REQUEST['circled13']), floatval($_REQUEST['circlee13']),
        floatval($_REQUEST['circlef13']), floatval($_REQUEST['circleg13']), floatval($_REQUEST['circleh13']), floatval($_REQUEST['circlei13']), 
        floatval($_REQUEST['circlej13']), floatval($_REQUEST['circlek13']), floatval($_REQUEST['circlel13']), floatval($_REQUEST['circlem13']), 
        floatval($_REQUEST['circlen13']), floatval($_REQUEST['circleo13']), floatval($_REQUEST['circlep13'])];
        $circleq13 = round(array_sum($q13), 2);

        $q14 = [floatval($_REQUEST['circleb14']), floatval($_REQUEST['circlec14']), floatval($_REQUEST['circled14']), floatval($_REQUEST['circlee14']),
        floatval($_REQUEST['circlef14']), floatval($_REQUEST['circleg14']), floatval($_REQUEST['circleh14']), floatval($_REQUEST['circlei14']), 
        floatval($_REQUEST['circlej14']), floatval($_REQUEST['circlek14']), floatval($_REQUEST['circlel14']), floatval($_REQUEST['circlem14']), 
        floatval($_REQUEST['circlen14']), floatval($_REQUEST['circleo14']), floatval($_REQUEST['circlep14'])];
        $circleq14 = round(array_sum($q14), 2);

        $q15 = [floatval($_REQUEST['circleb15']), floatval($_REQUEST['circlec15']), floatval($_REQUEST['circled15']), floatval($_REQUEST['circlee15']),
                floatval($_REQUEST['circlef15']), floatval($_REQUEST['circleg15']), floatval($_REQUEST['circleh15']), floatval($_REQUEST['circlei15']), 
                floatval($_REQUEST['circlej15']), floatval($_REQUEST['circlek15']), floatval($_REQUEST['circlel15']), floatval($_REQUEST['circlem15']), 
                floatval($_REQUEST['circlen15']), floatval($_REQUEST['circleo15']), floatval($_REQUEST['circlep15'])];
        $circleq15 = round(array_sum($q15), 2);

        $q16 = [floatval($_REQUEST['circleb16']), floatval($_REQUEST['circlec16']), floatval($_REQUEST['circled16']), floatval($_REQUEST['circlee16']),
                floatval($_REQUEST['circlef16']), floatval($_REQUEST['circleg16']), floatval($_REQUEST['circleh16']), floatval($_REQUEST['circlei16']), 
                floatval($_REQUEST['circlej16']), floatval($_REQUEST['circlek16']), floatval($_REQUEST['circlel16']), floatval($_REQUEST['circlem16']), 
                floatval($_REQUEST['circlen16']), floatval($_REQUEST['circleo16']), floatval($_REQUEST['circlep16'])];
        $circleq16 = round(array_sum($q16), 2);

        $q17 = [floatval($_REQUEST['circleb17']), floatval($_REQUEST['circlec17']), floatval($_REQUEST['circled17']), floatval($_REQUEST['circlee17']),
                floatval($_REQUEST['circlef17']), floatval($_REQUEST['circleg17']), floatval($_REQUEST['circleh17']), floatval($_REQUEST['circlei17']), 
                floatval($_REQUEST['circlej17']), floatval($_REQUEST['circlek17']), floatval($_REQUEST['circlel17']), floatval($_REQUEST['circlem17']), 
                floatval($_REQUEST['circlen17']), floatval($_REQUEST['circleo17']), floatval($_REQUEST['circlep17'])];
        $circleq17 = round(array_sum($q17), 2);

        $q18 = [floatval($_REQUEST['circleb18']), floatval($_REQUEST['circlec18']), floatval($_REQUEST['circled18']), floatval($_REQUEST['circlee18']),
                floatval($_REQUEST['circlef18']), floatval($_REQUEST['circleg18']), floatval($_REQUEST['circleh18']), floatval($_REQUEST['circlei18']), 
                floatval($_REQUEST['circlej18']), floatval($_REQUEST['circlek18']), floatval($_REQUEST['circlel18']), floatval($_REQUEST['circlem18']), 
                floatval($_REQUEST['circlen18']), floatval($_REQUEST['circleo18']), floatval($_REQUEST['circlep18'])];
        $circleq18 = round(array_sum($q18), 2);

        $q19 = [floatval($_REQUEST['circleb19']), floatval($_REQUEST['circlec19']), floatval($_REQUEST['circled19']), floatval($_REQUEST['circlee19']),
                floatval($_REQUEST['circlef19']), floatval($_REQUEST['circleg19']), floatval($_REQUEST['circleh19']), floatval($_REQUEST['circlei19']), 
                floatval($_REQUEST['circlej19']), floatval($_REQUEST['circlek19']), floatval($_REQUEST['circlel19']), floatval($_REQUEST['circlem19']), 
                floatval($_REQUEST['circlen19']), floatval($_REQUEST['circleo19']), floatval($_REQUEST['circlep19'])];
        $circleq19 = round(array_sum($q19), 2);

        $q20 = [floatval($_REQUEST['circleb20']), floatval($_REQUEST['circlec20']), floatval($_REQUEST['circled20']), floatval($_REQUEST['circlee20']),
                floatval($_REQUEST['circlef20']), floatval($_REQUEST['circleg20']), floatval($_REQUEST['circleh20']), floatval($_REQUEST['circlei20']), 
                floatval($_REQUEST['circlej20']), floatval($_REQUEST['circlek20']), floatval($_REQUEST['circlel20']), floatval($_REQUEST['circlem20']), 
                floatval($_REQUEST['circlen20']), floatval($_REQUEST['circleo20']), floatval($_REQUEST['circlep20'])];
        $circleq20 = round(array_sum($q20), 2);

        $q21 = [floatval($_REQUEST['circleb21']), floatval($_REQUEST['circlec21']), floatval($_REQUEST['circled21']), floatval($_REQUEST['circlee21']),
                floatval($_REQUEST['circlef21']), floatval($_REQUEST['circleg21']), floatval($_REQUEST['circleh21']), floatval($_REQUEST['circlei21']), 
                floatval($_REQUEST['circlej21']), floatval($_REQUEST['circlek21']), floatval($_REQUEST['circlel21']), floatval($_REQUEST['circlem21']), 
                floatval($_REQUEST['circlen21']), floatval($_REQUEST['circleo21']), floatval($_REQUEST['circlep21'])];
        $circleq21 = round(array_sum($q21), 2);

        $q22 = [floatval($_REQUEST['circleb22']), floatval($_REQUEST['circlec22']), floatval($_REQUEST['circled22']), floatval($_REQUEST['circlee22']),
                floatval($_REQUEST['circlef22']), floatval($_REQUEST['circleg22']), floatval($_REQUEST['circleh22']), floatval($_REQUEST['circlei22']), 
                floatval($_REQUEST['circlej22']), floatval($_REQUEST['circlek22']), floatval($_REQUEST['circlel22']), floatval($_REQUEST['circlem22']), 
                floatval($_REQUEST['circlen22']), floatval($_REQUEST['circleo22']), floatval($_REQUEST['circlep22'])];
        $circleq22 = round(array_sum($q22), 2);

        $q23 = [floatval($_REQUEST['circleb23']), floatval($_REQUEST['circlec23']), floatval($_REQUEST['circled23']), floatval($_REQUEST['circlee23']),
                floatval($_REQUEST['circlef23']), floatval($_REQUEST['circleg23']), floatval($_REQUEST['circleh23']), floatval($_REQUEST['circlei23']), 
                floatval($_REQUEST['circlej23']), floatval($_REQUEST['circlek23']), floatval($_REQUEST['circlel23']), floatval($_REQUEST['circlem23']), 
                floatval($_REQUEST['circlen23']), floatval($_REQUEST['circleo23']), floatval($_REQUEST['circlep23'])];
        $circleq23 = round(array_sum($q23), 2);

        $q24 = [floatval($_REQUEST['circleb24']), floatval($_REQUEST['circlec24']), floatval($_REQUEST['circled24']), floatval($_REQUEST['circlee24']),
                floatval($_REQUEST['circlef24']), floatval($_REQUEST['circleg24']), floatval($_REQUEST['circleh24']), floatval($_REQUEST['circlei24']), 
                floatval($_REQUEST['circlej24']), floatval($_REQUEST['circlek24']), floatval($_REQUEST['circlel24']), floatval($_REQUEST['circlem24']), 
                floatval($_REQUEST['circlen24']), floatval($_REQUEST['circleo24']), floatval($_REQUEST['circlep24'])];
        $circleq24 = round(array_sum($q24), 2);

        $q25 = [floatval($_REQUEST['circleb25']), floatval($_REQUEST['circlec25']), floatval($_REQUEST['circled25']), floatval($_REQUEST['circlee25']),
                floatval($_REQUEST['circlef25']), floatval($_REQUEST['circleg25']), floatval($_REQUEST['circleh25']), floatval($_REQUEST['circlei25']), 
                floatval($_REQUEST['circlej25']), floatval($_REQUEST['circlek25']), floatval($_REQUEST['circlel25']), floatval($_REQUEST['circlem25']), 
                floatval($_REQUEST['circlen25']), floatval($_REQUEST['circleo25']), floatval($_REQUEST['circlep25'])];
        $circleq25 = round(array_sum($q25), 2);

        $q26 = [floatval($_REQUEST['circleb26']), floatval($_REQUEST['circlec26']), floatval($_REQUEST['circled26']), floatval($_REQUEST['circlee26']),
                floatval($_REQUEST['circlef26']), floatval($_REQUEST['circleg26']), floatval($_REQUEST['circleh26']), floatval($_REQUEST['circlei26']), 
                floatval($_REQUEST['circlej26']), floatval($_REQUEST['circlek26']), floatval($_REQUEST['circlel26']), floatval($_REQUEST['circlem26']), 
                floatval($_REQUEST['circlen26']), floatval($_REQUEST['circleo26']), floatval($_REQUEST['circlep26'])];
        $circleq26 = round(array_sum($q26), 2);

        $q27 = [floatval($_REQUEST['circleb27']), floatval($_REQUEST['circlec27']), floatval($_REQUEST['circled27']), floatval($_REQUEST['circlee27']),
                floatval($_REQUEST['circlef27']), floatval($_REQUEST['circleg27']), floatval($_REQUEST['circleh27']), floatval($_REQUEST['circlei27']), 
                floatval($_REQUEST['circlej27']), floatval($_REQUEST['circlek27']), floatval($_REQUEST['circlel27']), floatval($_REQUEST['circlem27']), 
                floatval($_REQUEST['circlen27']), floatval($_REQUEST['circleo27']), floatval($_REQUEST['circlep27'])];
        $circleq27 = round(array_sum($q27), 2);

        $q28 = [floatval($_REQUEST['circleb28']), floatval($_REQUEST['circlec28']), floatval($_REQUEST['circled28']), floatval($_REQUEST['circlee28']),
                floatval($_REQUEST['circlef28']), floatval($_REQUEST['circleg28']), floatval($_REQUEST['circleh28']), floatval($_REQUEST['circlei28']), 
                floatval($_REQUEST['circlej28']), floatval($_REQUEST['circlek28']), floatval($_REQUEST['circlel28']), floatval($_REQUEST['circlem28']), 
                floatval($_REQUEST['circlen28']), floatval($_REQUEST['circleo28']), floatval($_REQUEST['circlep28'])];
        $circleq28 = round(array_sum($q28), 2);

        $q29 = [floatval($_REQUEST['circleb29']), floatval($_REQUEST['circlec29']), floatval($_REQUEST['circled29']), floatval($_REQUEST['circlee29']),
                floatval($_REQUEST['circlef29']), floatval($_REQUEST['circleg29']), floatval($_REQUEST['circleh29']), floatval($_REQUEST['circlei29']), 
                floatval($_REQUEST['circlej29']), floatval($_REQUEST['circlek29']), floatval($_REQUEST['circlel29']), floatval($_REQUEST['circlem29']), 
                floatval($_REQUEST['circlen29']), floatval($_REQUEST['circleo29']), floatval($_REQUEST['circlep29'])];
        $circleq29 = round(array_sum($q29), 2);

        $q30 = [floatval($_REQUEST['circleb30']), floatval($_REQUEST['circlec30']), floatval($_REQUEST['circled30']), floatval($_REQUEST['circlee30']),
                floatval($_REQUEST['circlef30']), floatval($_REQUEST['circleg30']), floatval($_REQUEST['circleh30']), floatval($_REQUEST['circlei30']), 
                floatval($_REQUEST['circlej30']), floatval($_REQUEST['circlek30']), floatval($_REQUEST['circlel30']), floatval($_REQUEST['circlem30']), 
                floatval($_REQUEST['circlen30']), floatval($_REQUEST['circleo30']), floatval($_REQUEST['circlep30'])];
        $circleq30 = round(array_sum($q30), 2);

        $q31 = [floatval($_REQUEST['circleb31']), floatval($_REQUEST['circlec31']), floatval($_REQUEST['circled31']), floatval($_REQUEST['circlee31']),
                floatval($_REQUEST['circlef31']), floatval($_REQUEST['circleg31']), floatval($_REQUEST['circleh31']), floatval($_REQUEST['circlei31']), 
                floatval($_REQUEST['circlej31']), floatval($_REQUEST['circlek31']), floatval($_REQUEST['circlel31']), floatval($_REQUEST['circlem31']), 
                floatval($_REQUEST['circlen31']), floatval($_REQUEST['circleo31']), floatval($_REQUEST['circlep31'])];
        $circleq31 = round(array_sum($q31), 2);

        $q32 = [floatval($_REQUEST['circleb32']), floatval($_REQUEST['circlec32']), floatval($_REQUEST['circled32']), floatval($_REQUEST['circlee32']),
                floatval($_REQUEST['circlef32']), floatval($_REQUEST['circleg32']), floatval($_REQUEST['circleh32']), floatval($_REQUEST['circlei32']), 
                floatval($_REQUEST['circlej32']), floatval($_REQUEST['circlek32']), floatval($_REQUEST['circlel32']), floatval($_REQUEST['circlem32']), 
                floatval($_REQUEST['circlen32']), floatval($_REQUEST['circleo32']), floatval($_REQUEST['circlep32'])];
        $circleq32 = round(array_sum($q32), 2);

        $q33 = [floatval($_REQUEST['circleb33']), floatval($_REQUEST['circlec33']), floatval($_REQUEST['circled33']), floatval($_REQUEST['circlee33']),
                floatval($_REQUEST['circlef33']), floatval($_REQUEST['circleg33']), floatval($_REQUEST['circleh33']), floatval($_REQUEST['circlei33']), 
                floatval($_REQUEST['circlej33']), floatval($_REQUEST['circlek33']), floatval($_REQUEST['circlel33']), floatval($_REQUEST['circlem33']), 
                floatval($_REQUEST['circlen33']), floatval($_REQUEST['circleo33']), floatval($_REQUEST['circlep33'])];
        $circleq33 = round(array_sum($q33), 2);

        $q34 = [floatval($_REQUEST['circleb34']), floatval($_REQUEST['circlec34']), floatval($_REQUEST['circled34']), floatval($_REQUEST['circlee34']),
                floatval($_REQUEST['circlef34']), floatval($_REQUEST['circleg34']), floatval($_REQUEST['circleh34']), floatval($_REQUEST['circlei34']), 
                floatval($_REQUEST['circlej34']), floatval($_REQUEST['circlek34']), floatval($_REQUEST['circlel34']), floatval($_REQUEST['circlem34']), 
                floatval($_REQUEST['circlen34']), floatval($_REQUEST['circleo34']), floatval($_REQUEST['circlep34'])];
        $circleq34 = round(array_sum($q34), 2);

        $q35 = [floatval($_REQUEST['circleb35']), floatval($_REQUEST['circlec35']), floatval($_REQUEST['circled35']), floatval($_REQUEST['circlee35']),
                floatval($_REQUEST['circlef35']), floatval($_REQUEST['circleg35']), floatval($_REQUEST['circleh35']), floatval($_REQUEST['circlei35']), 
                floatval($_REQUEST['circlej35']), floatval($_REQUEST['circlek35']), floatval($_REQUEST['circlel35']), floatval($_REQUEST['circlem35']), 
                floatval($_REQUEST['circlen35']), floatval($_REQUEST['circleo35']), floatval($_REQUEST['circlep35'])];
        $circleq35 = round(array_sum($q35), 2);

        $q36 = [floatval($_REQUEST['circleb36']), floatval($_REQUEST['circlec36']), floatval($_REQUEST['circled36']), floatval($_REQUEST['circlee36']),
                floatval($_REQUEST['circlef36']), floatval($_REQUEST['circleg36']), floatval($_REQUEST['circleh36']), floatval($_REQUEST['circlei36']), 
                floatval($_REQUEST['circlej36']), floatval($_REQUEST['circlek36']), floatval($_REQUEST['circlel36']), floatval($_REQUEST['circlem36']), 
                floatval($_REQUEST['circlen36']), floatval($_REQUEST['circleo36']), floatval($_REQUEST['circlep36'])];
        $circleq36 = round(array_sum($q36), 2);

        $q37 = [floatval($_REQUEST['circleb37']), floatval($_REQUEST['circlec37']), floatval($_REQUEST['circled37']), floatval($_REQUEST['circlee37']),
                floatval($_REQUEST['circlef37']), floatval($_REQUEST['circleg37']), floatval($_REQUEST['circleh37']), floatval($_REQUEST['circlei37']), 
                floatval($_REQUEST['circlej37']), floatval($_REQUEST['circlek37']), floatval($_REQUEST['circlel37']), floatval($_REQUEST['circlem37']), 
                floatval($_REQUEST['circlen37']), floatval($_REQUEST['circleo37']), floatval($_REQUEST['circlep37'])];
        $circleq37 = round(array_sum($q37), 2);

        $q38 = [floatval($_REQUEST['circleb38']), floatval($_REQUEST['circlec38']), floatval($_REQUEST['circled38']), floatval($_REQUEST['circlee38']),
                floatval($_REQUEST['circlef38']), floatval($_REQUEST['circleg38']), floatval($_REQUEST['circleh38']), floatval($_REQUEST['circlei38']), 
                floatval($_REQUEST['circlej38']), floatval($_REQUEST['circlek38']), floatval($_REQUEST['circlel38']), floatval($_REQUEST['circlem38']), 
                floatval($_REQUEST['circlen38']), floatval($_REQUEST['circleo38']), floatval($_REQUEST['circlep38'])];
        $circleq38 = round(array_sum($q38), 2);

        $q39 = [floatval($_REQUEST['circleb39']), floatval($_REQUEST['circlec39']), floatval($_REQUEST['circled39']), floatval($_REQUEST['circlee39']),
                floatval($_REQUEST['circlef39']), floatval($_REQUEST['circleg39']), floatval($_REQUEST['circleh39']), floatval($_REQUEST['circlei39']), 
                floatval($_REQUEST['circlej39']), floatval($_REQUEST['circlek39']), floatval($_REQUEST['circlel39']), floatval($_REQUEST['circlem39']), 
                floatval($_REQUEST['circlen39']), floatval($_REQUEST['circleo39']), floatval($_REQUEST['circlep39'])];
        $circleq39 = round(array_sum($q39), 2);

        $q40 = [floatval($_REQUEST['circleb40']), floatval($_REQUEST['circlec40']), floatval($_REQUEST['circled40']), floatval($_REQUEST['circlee40']),
                floatval($_REQUEST['circlef40']), floatval($_REQUEST['circleg40']), floatval($_REQUEST['circleh40']), floatval($_REQUEST['circlei40']), 
                floatval($_REQUEST['circlej40']), floatval($_REQUEST['circlek40']), floatval($_REQUEST['circlel40']), floatval($_REQUEST['circlem40']), 
                floatval($_REQUEST['circlen40']), floatval($_REQUEST['circleo40']), floatval($_REQUEST['circlep40'])];
        $circleq40 = round(array_sum($q40), 2);

        $q41 = [floatval($_REQUEST['circleb41']), floatval($_REQUEST['circlec41']), floatval($_REQUEST['circled41']), floatval($_REQUEST['circlee41']),
                floatval($_REQUEST['circlef41']), floatval($_REQUEST['circleg41']), floatval($_REQUEST['circleh41']), floatval($_REQUEST['circlei41']), 
                floatval($_REQUEST['circlej41']), floatval($_REQUEST['circlek41']), floatval($_REQUEST['circlel41']), floatval($_REQUEST['circlem41']), 
                floatval($_REQUEST['circlen41']), floatval($_REQUEST['circleo41']), floatval($_REQUEST['circlep41'])];
        $circleq41 = round(array_sum($q41), 2);

        $q42 = [floatval($_REQUEST['circleb42']), floatval($_REQUEST['circlec42']), floatval($_REQUEST['circled42']), floatval($_REQUEST['circlee42']),
        floatval($_REQUEST['circlef42']), floatval($_REQUEST['circleg42']), floatval($_REQUEST['circleh42']), floatval($_REQUEST['circlei42']), 
        floatval($_REQUEST['circlej42']), floatval($_REQUEST['circlek42']), floatval($_REQUEST['circlel42']), floatval($_REQUEST['circlem42']), 
        floatval($_REQUEST['circlen42']), floatval($_REQUEST['circleo42']), floatval($_REQUEST['circlep42'])];
        $circleq42 = round(array_sum($q42), 2);

        $q43 = [floatval($_REQUEST['circleb43']), floatval($_REQUEST['circlec43']), floatval($_REQUEST['circled43']), floatval($_REQUEST['circlee43']),
        floatval($_REQUEST['circlef43']), floatval($_REQUEST['circleg43']), floatval($_REQUEST['circleh43']), floatval($_REQUEST['circlei43']), 
        floatval($_REQUEST['circlej43']), floatval($_REQUEST['circlek43']), floatval($_REQUEST['circlel43']), floatval($_REQUEST['circlem43']), 
        floatval($_REQUEST['circlen43']), floatval($_REQUEST['circleo43']), floatval($_REQUEST['circlep43'])];
        $circleq43 = round(array_sum($q43), 2);

        $circlep1 = floatval(isset($_SESSION['jobinfoe26']) ? $_SESSION['jobinfoe26'] : 1);
        

        $q2 = [floatval($circleq10), floatval($circleq11), floatval($circleq12), floatval($circleq13),
            floatval($circleq14), floatval($circleq15), floatval($circleq16), floatval($circleq17), 
            floatval($circleq18), floatval($circleq19), floatval($circleq20), floatval($circleq21),
            floatval($circleq22), floatval($circleq23), floatval($circleq24), floatval($circleq25),
            floatval($circleq26), floatval($circleq27), floatval($circleq28), floatval($circleq29),
            floatval($circleq30), floatval($circleq31), floatval($circleq32), floatval($circleq33),
            floatval($circleq34), floatval($circleq35), floatval($circleq36), floatval($circleq37),
            floatval($circleq38), floatval($circleq39), floatval($circleq40), floatval($circleq41),
            floatval($circleq42), floatval($circleq43)];
        $circleq2 = round(array_sum($q2), 2);
        $_SESSION['circleq2'] = $circleq2;
            
        // Row 3
        $b3 = [ floatval($_REQUEST['circleb10']), floatval($_REQUEST['circleb11']), floatval($_REQUEST['circleb12']), floatval($_REQUEST['circleb13']),
                floatval($_REQUEST['circleb14']), floatval($_REQUEST['circleb15']), floatval($_REQUEST['circleb16']), floatval($_REQUEST['circleb17']), 
                floatval($_REQUEST['circleb18']), floatval($_REQUEST['circleb19']), floatval($_REQUEST['circleb20']), floatval($_REQUEST['circleb21']),
                floatval($_REQUEST['circleb22']), floatval($_REQUEST['circleb23']), floatval($_REQUEST['circleb24']), floatval($_REQUEST['circleb25']),
                floatval($_REQUEST['circleb26']), floatval($_REQUEST['circleb27']), floatval($_REQUEST['circleb28']), floatval($_REQUEST['circleb29']),
                floatval($_REQUEST['circleb30']), floatval($_REQUEST['circleb31']), floatval($_REQUEST['circleb32']), floatval($_REQUEST['circleb33']),
                floatval($_REQUEST['circleb34']), floatval($_REQUEST['circleb35']), floatval($_REQUEST['circleb36']), floatval($_REQUEST['circleb37']),
                floatval($_REQUEST['circleb38']), floatval($_REQUEST['circleb39']), floatval($_REQUEST['circleb40']), floatval($_REQUEST['circleb41']),
                floatval($_REQUEST['circleb42']), floatval($_REQUEST['circleb43'])];
        $circleb3 = round(array_sum($b3), 2);

        $c3 = [floatval($_REQUEST['circlec10']), floatval($_REQUEST['circlec11']), floatval($_REQUEST['circlec12']), floatval($_REQUEST['circlec13']),
            floatval($_REQUEST['circlec14']), floatval($_REQUEST['circlec15']), floatval($_REQUEST['circlec16']), floatval($_REQUEST['circlec17']), 
            floatval($_REQUEST['circlec18']), floatval($_REQUEST['circlec19']), floatval($_REQUEST['circlec20']), floatval($_REQUEST['circlec21']),
            floatval($_REQUEST['circlec22']), floatval($_REQUEST['circlec23']), floatval($_REQUEST['circlec24']), floatval($_REQUEST['circlec25']),
            floatval($_REQUEST['circlec26']), floatval($_REQUEST['circlec27']), floatval($_REQUEST['circlec28']), floatval($_REQUEST['circlec29']),
            floatval($_REQUEST['circlec30']), floatval($_REQUEST['circlec31']), floatval($_REQUEST['circlec32']), floatval($_REQUEST['circlec33']),
            floatval($_REQUEST['circlec34']), floatval($_REQUEST['circlec35']), floatval($_REQUEST['circlec36']), floatval($_REQUEST['circlec37']),
            floatval($_REQUEST['circlec38']), floatval($_REQUEST['circlec39']), floatval($_REQUEST['circlec40']), floatval($_REQUEST['circlec41']),
            floatval($_REQUEST['circlec42']), floatval($_REQUEST['circlec43'])];
        $circlec3 = round(array_sum($c3), 2);

        $d3 = [floatval($_REQUEST['circled10']), floatval($_REQUEST['circled11']), floatval($_REQUEST['circled12']), floatval($_REQUEST['circled13']),
            floatval($_REQUEST['circled14']), floatval($_REQUEST['circled15']), floatval($_REQUEST['circled16']), floatval($_REQUEST['circled17']), 
            floatval($_REQUEST['circled18']), floatval($_REQUEST['circled19']), floatval($_REQUEST['circled20']), floatval($_REQUEST['circled21']),
            floatval($_REQUEST['circled22']), floatval($_REQUEST['circled23']), floatval($_REQUEST['circled24']), floatval($_REQUEST['circled25']),
            floatval($_REQUEST['circled26']), floatval($_REQUEST['circled27']), floatval($_REQUEST['circled28']), floatval($_REQUEST['circled29']),
            floatval($_REQUEST['circled30']), floatval($_REQUEST['circled31']), floatval($_REQUEST['circled32']), floatval($_REQUEST['circled33']),
            floatval($_REQUEST['circled34']), floatval($_REQUEST['circled35']), floatval($_REQUEST['circled36']), floatval($_REQUEST['circled37']),
            floatval($_REQUEST['circled38']), floatval($_REQUEST['circled39']), floatval($_REQUEST['circled40']), floatval($_REQUEST['circled41']),
            floatval($_REQUEST['circled42']), floatval($_REQUEST['circled43'])];
        $circled3 = round(array_sum($d3), 2);

        $e3 = [floatval($_REQUEST['circlee10']), floatval($_REQUEST['circlee11']), floatval($_REQUEST['circlee12']),
            floatval($_REQUEST['circlee13']), floatval($_REQUEST['circlee14']), floatval($_REQUEST['circlee15']), floatval($_REQUEST['circlee16']),
            floatval($_REQUEST['circlee17']), floatval($_REQUEST['circlee18']), floatval($_REQUEST['circlee19']), floatval($_REQUEST['circlee20']),
            floatval($_REQUEST['circlee21']), floatval($_REQUEST['circlee22']), floatval($_REQUEST['circlee23']), floatval($_REQUEST['circlee24']),
            floatval($_REQUEST['circlee25']), floatval($_REQUEST['circlee26']), floatval($_REQUEST['circlee27']), floatval($_REQUEST['circlee28']),
            floatval($_REQUEST['circlee29']), floatval($_REQUEST['circlee30']), floatval($_REQUEST['circlee31']), floatval($_REQUEST['circlee32']),
            floatval($_REQUEST['circlee33']), floatval($_REQUEST['circlee34']), floatval($_REQUEST['circlee35']), floatval($_REQUEST['circlee36']),
            floatval($_REQUEST['circlee37']), floatval($_REQUEST['circlee38']), floatval($_REQUEST['circlee39']), floatval($_REQUEST['circlee40']),
            floatval($_REQUEST['circlee41']), floatval($_REQUEST['circlee42']), floatval($_REQUEST['circlee43'])];
        $circlee3 = round(array_sum($e3), 2);

        $f3 = [floatval($_REQUEST['circlef10']), floatval($_REQUEST['circlef11']), floatval($_REQUEST['circlef12']), floatval($_REQUEST['circlef13']), 
            floatval($_REQUEST['circlef14']), floatval($_REQUEST['circlef15']), floatval($_REQUEST['circlef16']), floatval($_REQUEST['circlef17']), 
            floatval($_REQUEST['circlef18']), floatval($_REQUEST['circlef19']), floatval($_REQUEST['circlef20']), floatval($_REQUEST['circlef21']), 
            floatval($_REQUEST['circlef22']), floatval($_REQUEST['circlef23']), floatval($_REQUEST['circlef24']), floatval($_REQUEST['circlef25']), 
            floatval($_REQUEST['circlef26']), floatval($_REQUEST['circlef27']), floatval($_REQUEST['circlef28']), floatval($_REQUEST['circlef29']), 
            floatval($_REQUEST['circlef30']), floatval($_REQUEST['circlef31']), floatval($_REQUEST['circlef32']), floatval($_REQUEST['circlef33']), 
            floatval($_REQUEST['circlef34']), floatval($_REQUEST['circlef35']), floatval($_REQUEST['circlef36']), floatval($_REQUEST['circlef37']), 
            floatval($_REQUEST['circlef38']), floatval($_REQUEST['circlef39']), floatval($_REQUEST['circlef40']), floatval($_REQUEST['circlef41']), 
            floatval($_REQUEST['circlef42']), floatval($_REQUEST['circlef43'])];
        $circlef3 = round(array_sum($f3), 2);

        $g3 = [floatval($_REQUEST['circleg10']), floatval($_REQUEST['circleg11']), floatval($_REQUEST['circleg12']), floatval($_REQUEST['circleg13']), 
            floatval($_REQUEST['circleg14']), floatval($_REQUEST['circleg15']), floatval($_REQUEST['circleg16']), floatval($_REQUEST['circleg17']), 
            floatval($_REQUEST['circleg18']), floatval($_REQUEST['circleg19']), floatval($_REQUEST['circleg20']), floatval($_REQUEST['circleg21']), 
            floatval($_REQUEST['circleg22']), floatval($_REQUEST['circleg23']), floatval($_REQUEST['circleg24']), floatval($_REQUEST['circleg25']), 
            floatval($_REQUEST['circleg26']), floatval($_REQUEST['circleg27']), floatval($_REQUEST['circleg28']), floatval($_REQUEST['circleg29']), 
            floatval($_REQUEST['circleg30']), floatval($_REQUEST['circleg31']), floatval($_REQUEST['circleg32']), floatval($_REQUEST['circleg33']), 
            floatval($_REQUEST['circleg34']), floatval($_REQUEST['circleg35']), floatval($_REQUEST['circleg36']), floatval($_REQUEST['circleg37']), 
            floatval($_REQUEST['circleg38']), floatval($_REQUEST['circleg39']), floatval($_REQUEST['circleg40']), floatval($_REQUEST['circleg41']), 
            floatval($_REQUEST['circleg42']), floatval($_REQUEST['circleg43'])];
        $circleg3 = round(array_sum($g3), 2);

        $h3 = [floatval($_REQUEST['circleh10']), floatval($_REQUEST['circleh11']), floatval($_REQUEST['circleh11']), floatval($_REQUEST['circleh13']), 
            floatval($_REQUEST['circleh14']), floatval($_REQUEST['circleh15']), floatval($_REQUEST['circleh16']), floatval($_REQUEST['circleh17']), 
            floatval($_REQUEST['circleh18']), floatval($_REQUEST['circleh19']), floatval($_REQUEST['circleh20']), floatval($_REQUEST['circleh21']), 
            floatval($_REQUEST['circleh22']), floatval($_REQUEST['circleh23']), floatval($_REQUEST['circleh24']), floatval($_REQUEST['circleh25']), 
            floatval($_REQUEST['circleh26']), floatval($_REQUEST['circleh27']), floatval($_REQUEST['circleh28']), floatval($_REQUEST['circleh29']), 
            floatval($_REQUEST['circleh30']), floatval($_REQUEST['circleh31']), floatval($_REQUEST['circleh30']), floatval($_REQUEST['circleh32']), 
            floatval($_REQUEST['circleh33']), floatval($_REQUEST['circleh34']), floatval($_REQUEST['circleh35']), floatval($_REQUEST['circleh36']), 
            floatval($_REQUEST['circleh37']), floatval($_REQUEST['circleh38']), floatval($_REQUEST['circleh39']), floatval($_REQUEST['circleh40']), 
            floatval($_REQUEST['circleh41']), floatval($_REQUEST['circleh42']), floatval($_REQUEST['circleh43'])];
        $circleh3 = round(array_sum($h3), 2);

        $i3 = [floatval($_REQUEST['circlei10']), floatval($_REQUEST['circlei11']), floatval($_REQUEST['circlei12']), floatval($_REQUEST['circlei13']), 
            floatval($_REQUEST['circlei14']), floatval($_REQUEST['circlei15']), floatval($_REQUEST['circlei16']), floatval($_REQUEST['circlei17']), 
            floatval($_REQUEST['circlei18']), floatval($_REQUEST['circlei19']), floatval($_REQUEST['circlei20']), floatval($_REQUEST['circlei21']), 
            floatval($_REQUEST['circlei22']), floatval($_REQUEST['circlei23']), floatval($_REQUEST['circlei24']), floatval($_REQUEST['circlei25']), 
            floatval($_REQUEST['circlei26']), floatval($_REQUEST['circlei27']), floatval($_REQUEST['circlei28']), floatval($_REQUEST['circlei29']), 
            floatval($_REQUEST['circlei30']), floatval($_REQUEST['circlei31']), floatval($_REQUEST['circlei32']), floatval($_REQUEST['circlei33']), 
            floatval($_REQUEST['circlei34']), floatval($_REQUEST['circlei35']), floatval($_REQUEST['circlei36']), floatval($_REQUEST['circlei37']), 
            floatval($_REQUEST['circlei38']), floatval($_REQUEST['circlei39']), floatval($_REQUEST['circlei40']), floatval($_REQUEST['circlei41']), 
            floatval($_REQUEST['circlei42']), floatval($_REQUEST['circlei43'])];
        $circlei3 = round(array_sum($i3), 2);

        $j3 = [floatval($_REQUEST['circlej10']), floatval($_REQUEST['circlej11']), floatval($_REQUEST['circlej12']), floatval($_REQUEST['circlej13']), 
            floatval($_REQUEST['circlej14']), floatval($_REQUEST['circlej15']), floatval($_REQUEST['circlej16']), floatval($_REQUEST['circlej17']), 
            floatval($_REQUEST['circlej18']), floatval($_REQUEST['circlej19']), floatval($_REQUEST['circlej20']), floatval($_REQUEST['circlej21']), 
            floatval($_REQUEST['circlej22']), floatval($_REQUEST['circlej23']), floatval($_REQUEST['circlej24']), floatval($_REQUEST['circlej25']),
            floatval($_REQUEST['circlej26']), floatval($_REQUEST['circlej27']), floatval($_REQUEST['circlej28']), floatval($_REQUEST['circlej29']),
            floatval($_REQUEST['circlej30']), floatval($_REQUEST['circlej31']), floatval($_REQUEST['circlej32']), floatval($_REQUEST['circlej33']),
            floatval($_REQUEST['circlej34']), floatval($_REQUEST['circlej35']), floatval($_REQUEST['circlej36']), floatval($_REQUEST['circlej37']),
            floatval($_REQUEST['circlej38']), floatval($_REQUEST['circlej39']), floatval($_REQUEST['circlej40']), floatval($_REQUEST['circlej41']),
            floatval($_REQUEST['circlej42']), floatval($_REQUEST['circlej43'])];
        $circlej3 = round(array_sum($j3), 2);

        $k3 = [floatval($_REQUEST['circlek10']), floatval($_REQUEST['circlek11']), floatval($_REQUEST['circlek12']), floatval($_REQUEST['circlek13']), 
            floatval($_REQUEST['circlek14']), floatval($_REQUEST['circlek15']), floatval($_REQUEST['circlek16']), floatval($_REQUEST['circlek17']), 
            floatval($_REQUEST['circlek18']), floatval($_REQUEST['circlek19']), floatval($_REQUEST['circlek20']), floatval($_REQUEST['circlek21']), 
            floatval($_REQUEST['circlek22']), floatval($_REQUEST['circlek23']), floatval($_REQUEST['circlek24']), floatval($_REQUEST['circlek25']),
            floatval($_REQUEST['circlek26']), floatval($_REQUEST['circlek27']), floatval($_REQUEST['circlek28']), floatval($_REQUEST['circlek29']),
            floatval($_REQUEST['circlek30']), floatval($_REQUEST['circlek31']), floatval($_REQUEST['circlek32']), floatval($_REQUEST['circlek33']),
            floatval($_REQUEST['circlek34']), floatval($_REQUEST['circlek35']), floatval($_REQUEST['circlek36']), floatval($_REQUEST['circlek37']),
            floatval($_REQUEST['circlek38']), floatval($_REQUEST['circlek39']), floatval($_REQUEST['circlek40']), floatval($_REQUEST['circlek41']),
            floatval($_REQUEST['circlek42']), floatval($_REQUEST['circlek43'])];
        $circlek3 = round(array_sum($k3), 2);

        $l3 = [floatval($_REQUEST['circlel10']), floatval($_REQUEST['circlel11']), floatval($_REQUEST['circlel12']), floatval($_REQUEST['circlel13']), 
            floatval($_REQUEST['circlel14']), floatval($_REQUEST['circlel15']), floatval($_REQUEST['circlel16']), floatval($_REQUEST['circlel17']), 
            floatval($_REQUEST['circlel18']), floatval($_REQUEST['circlel19']), floatval($_REQUEST['circlel20']), floatval($_REQUEST['circlel21']), 
            floatval($_REQUEST['circlel22']), floatval($_REQUEST['circlel23']), floatval($_REQUEST['circlel24']), floatval($_REQUEST['circlel25']),
            floatval($_REQUEST['circlel26']), floatval($_REQUEST['circlel27']), floatval($_REQUEST['circlel28']), floatval($_REQUEST['circlel29']),
            floatval($_REQUEST['circlel30']), floatval($_REQUEST['circlel31']), floatval($_REQUEST['circlel32']), floatval($_REQUEST['circlel33']),
            floatval($_REQUEST['circlel34']), floatval($_REQUEST['circlel35']), floatval($_REQUEST['circlel36']), floatval($_REQUEST['circlel37']),
            floatval($_REQUEST['circlel38']), floatval($_REQUEST['circlel39']), floatval($_REQUEST['circlel40']), floatval($_REQUEST['circlel41']),
            floatval($_REQUEST['circlel42']), floatval($_REQUEST['circlel43'])];
        $circlel3 = round(array_sum($l3), 2);

        $m3 = [floatval($_REQUEST['circlem10']), floatval($_REQUEST['circlem11']), floatval($_REQUEST['circlem12']), floatval($_REQUEST['circlem13']), 
            floatval($_REQUEST['circlem14']), floatval($_REQUEST['circlem15']), floatval($_REQUEST['circlem16']), floatval($_REQUEST['circlem17']), 
            floatval($_REQUEST['circlem18']), floatval($_REQUEST['circlem19']), floatval($_REQUEST['circlem20']), floatval($_REQUEST['circlem21']), 
            floatval($_REQUEST['circlem22']), floatval($_REQUEST['circlem23']), floatval($_REQUEST['circlem24']), floatval($_REQUEST['circlem25']),
            floatval($_REQUEST['circlem26']), floatval($_REQUEST['circlem27']), floatval($_REQUEST['circlem28']), floatval($_REQUEST['circlem29']),
            floatval($_REQUEST['circlem30']), floatval($_REQUEST['circlem31']), floatval($_REQUEST['circlem32']), floatval($_REQUEST['circlem33']),
            floatval($_REQUEST['circlem34']), floatval($_REQUEST['circlem35']), floatval($_REQUEST['circlem36']), floatval($_REQUEST['circlem37']),
            floatval($_REQUEST['circlem38']), floatval($_REQUEST['circlem39']), floatval($_REQUEST['circlem40']), floatval($_REQUEST['circlem41']),
            floatval($_REQUEST['circlem42']), floatval($_REQUEST['circlem43'])];
        $circlem3 = round(array_sum($m3), 2);

        $n3 = [floatval($_REQUEST['circlen10']), floatval($_REQUEST['circlen11']), floatval($_REQUEST['circlen12']), floatval($_REQUEST['circlen13']), 
            floatval($_REQUEST['circlen14']), floatval($_REQUEST['circlen15']), floatval($_REQUEST['circlen16']), floatval($_REQUEST['circlen17']), 
            floatval($_REQUEST['circlen18']), floatval($_REQUEST['circlen19']), floatval($_REQUEST['circlen20']), floatval($_REQUEST['circlen21']), 
            floatval($_REQUEST['circlen22']), floatval($_REQUEST['circlen23']), floatval($_REQUEST['circlen24']), floatval($_REQUEST['circlen25']),
            floatval($_REQUEST['circlen26']), floatval($_REQUEST['circlen27']), floatval($_REQUEST['circlen28']), floatval($_REQUEST['circlen29']),
            floatval($_REQUEST['circlen30']), floatval($_REQUEST['circlen31']), floatval($_REQUEST['circlen32']), floatval($_REQUEST['circlen33']),
            floatval($_REQUEST['circlen34']), floatval($_REQUEST['circlen35']), floatval($_REQUEST['circlen36']), floatval($_REQUEST['circlen37']),
            floatval($_REQUEST['circlen38']), floatval($_REQUEST['circlen39']), floatval($_REQUEST['circlen40']), floatval($_REQUEST['circlen41']),
            floatval($_REQUEST['circlen42']), floatval($_REQUEST['circlen43'])];
        $circlen3 = round(array_sum($n3), 2);

        $o3 = [floatval($_REQUEST['circleo10']), floatval($_REQUEST['circleo11']), floatval($_REQUEST['circleo12']), floatval($_REQUEST['circleo13']), 
            floatval($_REQUEST['circleo14']), floatval($_REQUEST['circleo15']), floatval($_REQUEST['circleo16']), floatval($_REQUEST['circleo17']), 
            floatval($_REQUEST['circleo18']), floatval($_REQUEST['circleo19']), floatval($_REQUEST['circleo20']), floatval($_REQUEST['circleo21']), 
            floatval($_REQUEST['circleo22']), floatval($_REQUEST['circleo23']), floatval($_REQUEST['circleo24']), floatval($_REQUEST['circleo25']),
            floatval($_REQUEST['circleo26']), floatval($_REQUEST['circleo27']), floatval($_REQUEST['circleo28']), floatval($_REQUEST['circleo29']),
            floatval($_REQUEST['circleo30']), floatval($_REQUEST['circleo31']), floatval($_REQUEST['circleo32']), floatval($_REQUEST['circleo33']),
            floatval($_REQUEST['circleo34']), floatval($_REQUEST['circleo35']), floatval($_REQUEST['circleo36']), floatval($_REQUEST['circleo37']),
            floatval($_REQUEST['circleo38']), floatval($_REQUEST['circleo39']), floatval($_REQUEST['circleo40']), floatval($_REQUEST['circleo41']),
            floatval($_REQUEST['circleo42']), floatval($_REQUEST['circleo43'])];
        $circleo3 = round(array_sum($o3), 2);

        $p3 = [floatval($_REQUEST['circlep10']), floatval($_REQUEST['circlep11']), floatval($_REQUEST['circlep12']), floatval($_REQUEST['circlep13']), 
            floatval($_REQUEST['circlep14']), floatval($_REQUEST['circlep15']), floatval($_REQUEST['circlep16']), floatval($_REQUEST['circlep17']), 
            floatval($_REQUEST['circlep18']), floatval($_REQUEST['circlep19']), floatval($_REQUEST['circlep20']), floatval($_REQUEST['circlep21']), 
            floatval($_REQUEST['circlep22']), floatval($_REQUEST['circlep23']), floatval($_REQUEST['circlep24']), floatval($_REQUEST['circlep25']),
            floatval($_REQUEST['circlep26']), floatval($_REQUEST['circlep27']), floatval($_REQUEST['circlep28']), floatval($_REQUEST['circlep29']),
            floatval($_REQUEST['circlep30']), floatval($_REQUEST['circlep31']), floatval($_REQUEST['circlep32']), floatval($_REQUEST['circlep33']),
            floatval($_REQUEST['circlep34']), floatval($_REQUEST['circlep35']), floatval($_REQUEST['circlep36']), floatval($_REQUEST['circlep37']),
            floatval($_REQUEST['circlep38']), floatval($_REQUEST['circlep39']), floatval($_REQUEST['circlep40']), floatval($_REQUEST['circlep41']),
            floatval($_REQUEST['circlep42']), floatval($_REQUEST['circlep43'])];
        $circlep3 = round(array_sum($p3), 2);

        // ROW 5
        $circleb5 = $circleb3 * floatval($_REQUEST['circleb4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlec5 = $circlec3 * floatval($_REQUEST['circlec4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circled5 = $circled3 * floatval($_REQUEST['circled4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlee5 = $circlee3 * floatval($_REQUEST['circlee4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlef5 = $circlef3 * floatval($_REQUEST['circlef4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circleg5 = $circleg3 * floatval($_REQUEST['circleg4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circleh5 = $circleh3 * floatval($_REQUEST['circleh4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlei5 = $circlei3 * floatval($_REQUEST['circlei4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlej5 = $circlej3 * floatval($_REQUEST['circlej4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlek5 = $circlek3 * floatval($_REQUEST['circlek4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlel5 = $circlel3 * floatval($_REQUEST['circlel4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlem5 = $circlem3 * floatval($_REQUEST['circlem4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlen5 = $circlen3 * floatval($_REQUEST['circlen4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circleo5 = $circleo3 * floatval($_REQUEST['circleo4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;
        $circlep5 = $circlep3 * floatval($_REQUEST['circlep4']) * floatval($_REQUEST['circlet5']) * floatval($_REQUEST['circleu5']) ;


        // ROW 7
        $circleb7 = $circleb3 * floatval($_REQUEST['circleb6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlec7 = $circlec3 * floatval($_REQUEST['circlec6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circled7 = $circled3 * floatval($_REQUEST['circled6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlee7 = $circlee3 * floatval($_REQUEST['circlee6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlef7 = $circlef3 * floatval($_REQUEST['circlef6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circleg7 = $circleg3 * floatval($_REQUEST['circleg6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circleh7 = $circleh3 * floatval($_REQUEST['circleh6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlei7 = $circlei3 * floatval($_REQUEST['circlei6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlej7 = $circlej3 * floatval($_REQUEST['circlej6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlek7 = $circlek3 * floatval($_REQUEST['circlek6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlel7 = $circlel3 * floatval($_REQUEST['circlel6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlem7 = $circlem3 * floatval($_REQUEST['circlem6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlen7 = $circlen3 * floatval($_REQUEST['circlen6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circleo7 = $circleo3 * floatval($_REQUEST['circleo6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;
        $circlep7 = $circlep3 * floatval($_REQUEST['circlep6']) * floatval($_REQUEST['circlet7']) * floatval($_REQUEST['circleu7']) ;

        // Row 2
        $f2 = [ floatval($circleb5), floatval($circlec5), floatval($circled5), floatval($circlee5),
                floatval($circlef5), floatval($circleg5), floatval($circleh5), floatval($circlei5), 
                floatval($circlej5), floatval($circlek5), floatval($circlel5), floatval($circlem5), 
                floatval($circlen5), floatval($circleo5), floatval($circlep5)];
        $circlef2 = round(array_sum($f2), 2);

        $m2 =  [floatval($circleb7), floatval($circlec7), floatval($circled7), floatval($circlee7),
                floatval($circlef7), floatval($circleg7), floatval($circleh7), floatval($circlei7), 
                floatval($circlej7), floatval($circlek7), floatval($circlel7), floatval($circlem7), 
                floatval($circlen7), floatval($circleo7), floatval($circlep7)];
        $circlem2 = round(array_sum($m2) * 1.2, 2);

        $circlep2 = round(($circlem2 / $circlep1), 2);

        $circled1 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-';
        $_SESSION['circlef2'] = $circlef2;
        $_SESSION['circlem2'] = $circlem2;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .circleTableHeader input[readonly]{
            color : white !important;
        }
    </style>
</head>

<body>
    <div class="section">
        <form action="" method ="POST">
        <table class="table1" border="1">
        <!-- <tr style="position:sticky;top:0;background: #ECECEC;">
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
            </tr> -->
            <tr class="circleTableHeader" style="background: #48494B !important;">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">1</td> -->
                <td style="text-align: center;position:sticky;left:0; background: white;"></td>
                <td style="background: white;"></td>
                <td>JOB NAME:</td>
                <td><input style="color : white !important;" type="text" name="circled1" class="custom-input" readonly value="<?php if(isset($circled1)){ echo $circled1 ;} ?>"></td>
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
                <td>Hours@</td>
                <td><input type="text" name="circlep1" class="custom-input" readonly value="<?php if(isset($circlep1)){ echo $circlep1 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td>OLD Factor</td>
                <td>Factor 4/2021</td>
                <td></td>
                <td>NOTES:</td>
            </tr>
            <tr class="circleTableHeaderTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">2</td> -->
                <td style="text-align: center;position:sticky;left:0; background: white;"></td>
                <td style="background: white;"></td>
                <td>New Material =</td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlef2" class="custom-input" readonly value="<?php if(isset($circlef2)){ echo $circlef2 ;} else{ echo 0 ;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>NET LABOR=</td>
                <td><input type="text" name="circlem2" class="custom-input" readonly value="<?php if(isset($circlem2)){ echo $circlem2 ;} else{ echo 0 ;} ?>"></td>
                <td></td>
                <td><input type="text" name="circlep2" class="custom-input" readonly value="<?php if(isset($circlep2)){ echo $circlep2 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleq2" class="custom-input" readonly value="<?php if(isset($circleq2)){ echo $circleq2 ;} else{ echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet2" class="custom-input" value="<?php if(isset($_REQUEST['circlet2'])){ echo $_REQUEST['circlet2'] ;} ?>"></td>
                <td><input type="text" name="circleu2" class="custom-input" value="<?php if(isset($_REQUEST['circleu2'])){ echo $_REQUEST['circleu2'] ;} ?>"></td>
                <td></td>
                <td>4/18/08 - ADJUSTED MATERIAL COST TO 10%</td>
            </tr>
            <tr class="circleBody">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">3</td> -->
                <td style="text-align: center;position:sticky;left:0; background-color:#48494B;color:white !important;">L.F.</td>
                <td><input type="text" name="circleb3" class="custom-input" readonly value="<?php if(isset($circleb3)){ echo $circleb3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlec3" class="custom-input" readonly value="<?php if(isset($circlec3)){ echo $circlec3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circled3" class="custom-input" readonly value="<?php if(isset($circled3)){ echo $circled3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlee3" class="custom-input" readonly value="<?php if(isset($circlee3)){ echo $circlee3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlef3" class="custom-input" readonly value="<?php if(isset($circlef3)){ echo $circlef3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleg3" class="custom-input" readonly value="<?php if(isset($circleg3)){ echo $circleg3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleh3" class="custom-input" readonly value="<?php if(isset($circleh3)){ echo $circleh3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlei3" class="custom-input" readonly value="<?php if(isset($circlei3)){ echo $circlei3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlej3" class="custom-input" readonly value="<?php if(isset($circlej3)){ echo $circlej3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlek3" class="custom-input" readonly value="<?php if(isset($circlek3)){ echo $circlek3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlel3" class="custom-input" readonly value="<?php if(isset($circlel3)){ echo $circlel3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlem3" class="custom-input" readonly value="<?php if(isset($circlem3)){ echo $circlem3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlen3" class="custom-input" readonly value="<?php if(isset($circlen3)){ echo $circlen3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleo3" class="custom-input" readonly value="<?php if(isset($circleo3)){ echo $circleo3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlep3" class="custom-input" readonly value="<?php if(isset($circlep3)){ echo $circlep3 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleq3" class="custom-input" value=""></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet3" class="custom-input" value="<?php if(isset($_REQUEST['circlet3'])){ echo $_REQUEST['circlet3'] ;} ?>"></td>
                <td><input type="text" name="circleu3" class="custom-input" value="<?php if(isset($_REQUEST['circleu3'])){ echo $_REQUEST['circleu3'] ;} ?>"></td>
                <td></td>
                <td>5/15/08 - ADJUSTED MATERIAL COST TO 10%</td>
            </tr>
            <tr class="circleBody">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">4</td> -->
                <td style="text-align: center;position:sticky;left:0; background-color:#48494B;color:white !important;">MAT Fac</td>
                <td><input type="text" name="circleb4" class="custom-input" value="<?php if(isset($_REQUEST['circleb4'])){ echo $_REQUEST['circleb4'] ;}?>"></td>
                <td><input type="text" name="circlec4" class="custom-input" value="<?php if(isset($_REQUEST['circlec4'])){ echo $_REQUEST['circlec4'] ;}?>"></td>
                <td><input type="text" name="circled4" class="custom-input" value="<?php if(isset($_REQUEST['circled4'])){ echo $_REQUEST['circled4'] ;}?>"></td>
                <td><input type="text" name="circlee4" class="custom-input" value="<?php if(isset($_REQUEST['circlee4'])){ echo $_REQUEST['circlee4'] ;}?>"></td>
                <td><input type="text" name="circlef4" class="custom-input" value="<?php if(isset($_REQUEST['circlef4'])){ echo $_REQUEST['circlef4'] ;}?>"></td>
                <td><input type="text" name="circleg4" class="custom-input" value="<?php if(isset($_REQUEST['circleg4'])){ echo $_REQUEST['circleg4'] ;}?>"></td>
                <td><input type="text" name="circleh4" class="custom-input" value="<?php if(isset($_REQUEST['circleh4'])){ echo $_REQUEST['circleh4'] ;}?>"></td>
                <td><input type="text" name="circlei4" class="custom-input" value="<?php if(isset($_REQUEST['circlei4'])){ echo $_REQUEST['circlei4'] ;}?>"></td>
                <td><input type="text" name="circlej4" class="custom-input" value="<?php if(isset($_REQUEST['circlej4'])){ echo $_REQUEST['circlej4'] ;}?>"></td>
                <td><input type="text" name="circlek4" class="custom-input" value="<?php if(isset($_REQUEST['circlek4'])){ echo $_REQUEST['circlek4'] ;}?>"></td>
                <td><input type="text" name="circlel4" class="custom-input" value="<?php if(isset($_REQUEST['circlel4'])){ echo $_REQUEST['circlel4'] ;}?>"></td>
                <td><input type="text" name="circlem4" class="custom-input" value="<?php if(isset($_REQUEST['circlem4'])){ echo $_REQUEST['circlem4'] ;}?>"></td>
                <td><input type="text" name="circlen4" class="custom-input" value="<?php if(isset($_REQUEST['circlen4'])){ echo $_REQUEST['circlen4'] ;}?>"></td>
                <td><input type="text" name="circleo4" class="custom-input" value="<?php if(isset($_REQUEST['circleo4'])){ echo $_REQUEST['circleo4'] ;}?>"></td>
                <td><input type="text" name="circlep4" class="custom-input" value="<?php if(isset($_REQUEST['circlep4'])){ echo $_REQUEST['circlep4'] ;}?>"></td>
                <td><input type="text" name="circleq4" class="custom-input" value="<?php if(isset($_REQUEST['circleq4'])){ echo $_REQUEST['circleq4'] ;}?>"></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet4" class="custom-input" value="<?php if(isset($_REQUEST['circlet4'])){ echo $_REQUEST['circlet4'] ;} ?>"></td>
                <td><input type="text" name="circleu4" class="custom-input" value="<?php if(isset($_REQUEST['circleu4'])){ echo $_REQUEST['circleu4'] ;} ?>"></td>
                <td></td>
                <td>5/27/08 - ADJUSTED MATERIAL COST TO 10%</td>
            </tr>
            <tr class="circleBody">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">5</td> -->
                <td style="text-align: center;position:sticky;left:0; background-color:#48494B;color:white !important;">MAT.</td>
                <td><input type="text" name="circleb5" class="custom-input" readonly value="<?php if(isset($circleb5)){ echo $circleb5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlec5" class="custom-input" readonly value="<?php if(isset($circlec5)){ echo $circlec5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circled5" class="custom-input" readonly value="<?php if(isset($circled5)){ echo $circled5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlee5" class="custom-input" readonly value="<?php if(isset($circlee5)){ echo $circlee5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlef5" class="custom-input" readonly value="<?php if(isset($circlef5)){ echo $circlef5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleg5" class="custom-input" readonly value="<?php if(isset($circleg5)){ echo $circleg5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleh5" class="custom-input" readonly value="<?php if(isset($circleh5)){ echo $circleh5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlei5" class="custom-input" readonly value="<?php if(isset($circlei5)){ echo $circlei5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlej5" class="custom-input" readonly value="<?php if(isset($circlej5)){ echo $circlej5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlek5" class="custom-input" readonly value="<?php if(isset($circlek5)){ echo $circlek5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlel5" class="custom-input" readonly value="<?php if(isset($circlel5)){ echo $circlel5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlem5" class="custom-input" readonly value="<?php if(isset($circlem5)){ echo $circlem5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlen5" class="custom-input" readonly value="<?php if(isset($circlen5)){ echo $circlen5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleo5" class="custom-input" readonly value="<?php if(isset($circleo5)){ echo $circleo5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlep5" class="custom-input" readonly value="<?php if(isset($circlep5)){ echo $circlep5 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleq5" class="custom-input" value=""></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet5" class="custom-input" value="<?php if(isset($_REQUEST['circlet5'])){ echo $_REQUEST['circlet5'] ;} ?>"></td>
                <td><input type="text" name="circleu5" class="custom-input" value="<?php if(isset($_REQUEST['circleu5'])){ echo $_REQUEST['circleu5'] ;} ?>"></td>
                <td></td>
                <td>5/30/08 - ADJUSTED MATERIAL COST TO 10%</td>
            </tr>
            <tr class="circleBody">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">6</td> -->
                <td style="text-align: center;position:sticky;left:0; background-color:#48494B;color:white !important;">Lab Fac</td>
                <td><input type="text" name="circleb6" class="custom-input" value="<?php if(isset($_REQUEST['circleb6'])){ echo $_REQUEST['circleb6'] ;}?>"></td>
                <td><input type="text" name="circlec6" class="custom-input" value="<?php if(isset($_REQUEST['circlec6'])){ echo $_REQUEST['circlec6'] ;}?>"></td>
                <td><input type="text" name="circled6" class="custom-input" value="<?php if(isset($_REQUEST['circled6'])){ echo $_REQUEST['circled6'] ;}?>"></td>
                <td><input type="text" name="circlee6" class="custom-input" value="<?php if(isset($_REQUEST['circlee6'])){ echo $_REQUEST['circlee6'] ;}?>"></td>
                <td><input type="text" name="circlef6" class="custom-input" value="<?php if(isset($_REQUEST['circlef6'])){ echo $_REQUEST['circlef6'] ;}?>"></td>
                <td><input type="text" name="circleg6" class="custom-input" value="<?php if(isset($_REQUEST['circleg6'])){ echo $_REQUEST['circleg6'] ;}?>"></td>
                <td><input type="text" name="circleh6" class="custom-input" value="<?php if(isset($_REQUEST['circleh6'])){ echo $_REQUEST['circleh6'] ;}?>"></td>
                <td><input type="text" name="circlei6" class="custom-input" value="<?php if(isset($_REQUEST['circlei6'])){ echo $_REQUEST['circlei6'] ;}?>"></td>
                <td><input type="text" name="circlej6" class="custom-input" value="<?php if(isset($_REQUEST['circlej6'])){ echo $_REQUEST['circlej6'] ;}?>"></td>
                <td><input type="text" name="circlek6" class="custom-input" value="<?php if(isset($_REQUEST['circlek6'])){ echo $_REQUEST['circlek6'] ;}?>"></td>
                <td><input type="text" name="circlel6" class="custom-input" value="<?php if(isset($_REQUEST['circlel6'])){ echo $_REQUEST['circlel6'] ;}?>"></td>
                <td><input type="text" name="circlem6" class="custom-input" value="<?php if(isset($_REQUEST['circlem6'])){ echo $_REQUEST['circlem6'] ;}?>"></td>
                <td><input type="text" name="circlen6" class="custom-input" value="<?php if(isset($_REQUEST['circlen6'])){ echo $_REQUEST['circlen6'] ;}?>"></td>
                <td><input type="text" name="circleo6" class="custom-input" value="<?php if(isset($_REQUEST['circleo6'])){ echo $_REQUEST['circleo6'] ;}?>"></td>
                <td><input type="text" name="circlep6" class="custom-input" value="<?php if(isset($_REQUEST['circlep6'])){ echo $_REQUEST['circlep6'] ;}?>"></td>
                <td><input type="text" name="circleq6" class="custom-input" value="<?php if(isset($_REQUEST['circleq6'])){ echo $_REQUEST['circleq6'] ;}?>"></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet6" class="custom-input" value="<?php if(isset($_REQUEST['circlet6'])){ echo $_REQUEST['circlet6'] ;} ?>"></td>
                <td><input type="text" name="circleu6" class="custom-input" value="<?php if(isset($_REQUEST['circleu6'])){ echo $_REQUEST['circleu6'] ;} ?>"></td>
                <td></td>
                <td>12/4/17 - ADJUSTED MATERIAL COST TO 7%</td>
            </tr>
            <tr class="circleBody">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">7</td> -->
                <td style="text-align: center;position:sticky;left:0; background-color:#48494B;color:white !important;">LAB.</td>
                <td><input type="text" name="circleb7" class="custom-input" readonly value="<?php if(isset($circleb7)){ echo $circleb7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlec7" class="custom-input" readonly value="<?php if(isset($circlec7)){ echo $circlec7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circled7" class="custom-input" readonly value="<?php if(isset($circled7)){ echo $circled7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlee7" class="custom-input" readonly value="<?php if(isset($circlee7)){ echo $circlee7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlef7" class="custom-input" readonly value="<?php if(isset($circlef7)){ echo $circlef7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleg7" class="custom-input" readonly value="<?php if(isset($circleg7)){ echo $circleg7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleh7" class="custom-input" readonly value="<?php if(isset($circleh7)){ echo $circleh7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlei7" class="custom-input" readonly value="<?php if(isset($circlei7)){ echo $circlei7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlej7" class="custom-input" readonly value="<?php if(isset($circlej7)){ echo $circlej7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlek7" class="custom-input" readonly value="<?php if(isset($circlek7)){ echo $circlek7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlel7" class="custom-input" readonly value="<?php if(isset($circlel7)){ echo $circlel7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlem7" class="custom-input" readonly value="<?php if(isset($circlem7)){ echo $circlem7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlen7" class="custom-input" readonly value="<?php if(isset($circlen7)){ echo $circlen7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleo7" class="custom-input" readonly value="<?php if(isset($circleo7)){ echo $circleo7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circlep7" class="custom-input" readonly value="<?php if(isset($circlep7)){ echo $circlep7 ;} else{ echo 0 ;} ?>"></td>
                <td><input type="text" name="circleq7" class="custom-input" value=""></td>
                <td></td>
                <td></td>
                <td><input type="text" name="circlet7" class="custom-input" value="<?php if(isset($_REQUEST['circlet7'])){ echo $_REQUEST['circlet7'] ;} ?>"></td>
                <td><input type="text" name="circleu7" class="custom-input" value="<?php if(isset($_REQUEST['circleu7'])){ echo $_REQUEST['circleu7'] ;} ?>"></td>
                <td></td>
                <td> - ADJUSTED LABOR COST TO 3%</td>
            </tr>
            <tr>
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">8</td> -->
                <td colspan="23" style="text-align: center;position:sticky;top:5%;"><b>CIRCLE LINED 1"</b></td>
            </tr>
            <tr style="background: #48494B !important;color : white !important">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">9</td> -->
                <td style="text-align: center;position:sticky;left:0;">Sheet</td>
                <td>6"</td>
                <td>8"</td>
                <td>10"</td>
                <td>12"</td>
                <td>14"</td>
                <td>16"</td>
                <td>18"</td>
                <td>20"</td>
                <td>22"</td>
                <td>24"</td>
                <td>26"</td>
                <td>28"</td>
                <td>30"</td>
                <td>32"</td>
                <td>34"</td>
                <td>Total</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

    <!-- -------------- -->

            <tr class="circleTableBodyTwo">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">10</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb10" class="custom-input" value="<?php if(isset($_REQUEST['circleb10'])){ echo $_REQUEST['circleb10'];}?>"></td>
                <td><input type="text" name="circlec10" class="custom-input" value="<?php if(isset($_REQUEST['circlec10'])){ echo $_REQUEST['circlec10'];}?>"></td>
                <td><input type="text" name="circled10" class="custom-input" value="<?php if(isset($_REQUEST['circled10'])){ echo $_REQUEST['circled10'];}?>"></td>
                <td><input type="text" name="circlee10" class="custom-input" value="<?php if(isset($_REQUEST['circlee10'])){ echo $_REQUEST['circlee10'];}?>"></td>
                <td><input type="text" name="circlef10" class="custom-input" value="<?php if(isset($_REQUEST['circlef10'])){ echo $_REQUEST['circlef10'];}?>"></td>
                <td><input type="text" name="circleg10" class="custom-input" value="<?php if(isset($_REQUEST['circleg10'])){ echo $_REQUEST['circleg10'];}?>"></td>
                <td><input type="text" name="circleh10" class="custom-input" value="<?php if(isset($_REQUEST['circleh10'])){ echo $_REQUEST['circleh10'];}?>"></td>
                <td><input type="text" name="circlei10" class="custom-input" value="<?php if(isset($_REQUEST['circlei10'])){ echo $_REQUEST['circlei10'];}?>"></td>
                <td><input type="text" name="circlej10" class="custom-input" value="<?php if(isset($_REQUEST['circlej10'])){ echo $_REQUEST['circlej10'];}?>"></td>
                <td><input type="text" name="circlek10" class="custom-input" value="<?php if(isset($_REQUEST['circlek10'])){ echo $_REQUEST['circlek10'];}?>"></td>
                <td><input type="text" name="circlel10" class="custom-input" value="<?php if(isset($_REQUEST['circlel10'])){ echo $_REQUEST['circlel10'];}?>"></td>
                <td><input type="text" name="circlem10" class="custom-input" value="<?php if(isset($_REQUEST['circlem10'])){ echo $_REQUEST['circlem10'];}?>"></td>
                <td><input type="text" name="circlen10" class="custom-input" value="<?php if(isset($_REQUEST['circlen10'])){ echo $_REQUEST['circlen10'];}?>"></td>
                <td><input type="text" name="circleo10" class="custom-input" value="<?php if(isset($_REQUEST['circleo10'])){ echo $_REQUEST['circleo10'];}?>"></td>
                <td><input type="text" name="circlep10" class="custom-input" value="<?php if(isset($_REQUEST['circlep10'])){ echo $_REQUEST['circlep10'];}?>"></td>
                <td><input type="text" name="circleq10" class="custom-input" readonly value="<?php if(isset($circleq10)){ echo $circleq10;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">1</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb11" class="custom-input" value="<?php if(isset($_REQUEST['circleb11'])){ echo $_REQUEST['circleb11'];}?>"></td>
                <td><input type="text" name="circlec11" class="custom-input" value="<?php if(isset($_REQUEST['circlec11'])){ echo $_REQUEST['circlec11'];}?>"></td>
                <td><input type="text" name="circled11" class="custom-input" value="<?php if(isset($_REQUEST['circled11'])){ echo $_REQUEST['circled11'];}?>"></td>
                <td><input type="text" name="circlee11" class="custom-input" value="<?php if(isset($_REQUEST['circlee11'])){ echo $_REQUEST['circlee11'];}?>"></td>
                <td><input type="text" name="circlef11" class="custom-input" value="<?php if(isset($_REQUEST['circlef11'])){ echo $_REQUEST['circlef11'];}?>"></td>
                <td><input type="text" name="circleg11" class="custom-input" value="<?php if(isset($_REQUEST['circleg11'])){ echo $_REQUEST['circleg11'];}?>"></td>
                <td><input type="text" name="circleh11" class="custom-input" value="<?php if(isset($_REQUEST['circleh11'])){ echo $_REQUEST['circleh11'];}?>"></td>
                <td><input type="text" name="circlei11" class="custom-input" value="<?php if(isset($_REQUEST['circlei11'])){ echo $_REQUEST['circlei11'];}?>"></td>
                <td><input type="text" name="circlej11" class="custom-input" value="<?php if(isset($_REQUEST['circlej11'])){ echo $_REQUEST['circlej11'];}?>"></td>
                <td><input type="text" name="circlek11" class="custom-input" value="<?php if(isset($_REQUEST['circlek11'])){ echo $_REQUEST['circlek11'];}?>"></td>
                <td><input type="text" name="circlel11" class="custom-input" value="<?php if(isset($_REQUEST['circlel11'])){ echo $_REQUEST['circlel11'];}?>"></td>
                <td><input type="text" name="circlem11" class="custom-input" value="<?php if(isset($_REQUEST['circlem11'])){ echo $_REQUEST['circlem11'];}?>"></td>
                <td><input type="text" name="circlen11" class="custom-input" value="<?php if(isset($_REQUEST['circlen11'])){ echo $_REQUEST['circlen11'];}?>"></td>
                <td><input type="text" name="circleo11" class="custom-input" value="<?php if(isset($_REQUEST['circleo11'])){ echo $_REQUEST['circleo11'];}?>"></td>
                <td><input type="text" name="circlep11" class="custom-input" value="<?php if(isset($_REQUEST['circlep11'])){ echo $_REQUEST['circlep11'];}?>"></td>
                <td><input type="text" name="circleq11" class="custom-input" readonly value="<?php if(isset($circleq11) ) { echo $circleq11;}else{echo 0;}?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">12</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb12" class="custom-input" value="<?php if(isset($_REQUEST['circleb12'])){ echo $_REQUEST['circleb12'];}?>"></td>
                <td><input type="text" name="circlec12" class="custom-input" value="<?php if(isset($_REQUEST['circlec12'])){ echo $_REQUEST['circlec12'];}?>"></td>
                <td><input type="text" name="circled12" class="custom-input" value="<?php if(isset($_REQUEST['circled12'])){ echo $_REQUEST['circled12'];}?>"></td>
                <td><input type="text" name="circlee12" class="custom-input" value="<?php if(isset($_REQUEST['circlee12'])){ echo $_REQUEST['circlee12'];}?>"></td>
                <td><input type="text" name="circlef12" class="custom-input" value="<?php if(isset($_REQUEST['circlef12'])){ echo $_REQUEST['circlef12'];}?>"></td>
                <td><input type="text" name="circleg12" class="custom-input" value="<?php if(isset($_REQUEST['circleg12'])){ echo $_REQUEST['circleg12'];}?>"></td>
                <td><input type="text" name="circleh12" class="custom-input" value="<?php if(isset($_REQUEST['circleh12'])){ echo $_REQUEST['circleh12'];}?>"></td>
                <td><input type="text" name="circlei12" class="custom-input" value="<?php if(isset($_REQUEST['circlei12'])){ echo $_REQUEST['circlei12'];}?>"></td>
                <td><input type="text" name="circlej12" class="custom-input" value="<?php if(isset($_REQUEST['circlej12'])){ echo $_REQUEST['circlej12'];}?>"></td>
                <td><input type="text" name="circlek12" class="custom-input" value="<?php if(isset($_REQUEST['circlek12'])){ echo $_REQUEST['circlek12'];}?>"></td>
                <td><input type="text" name="circlel12" class="custom-input" value="<?php if(isset($_REQUEST['circlel12'])){ echo $_REQUEST['circlel12'];}?>"></td>
                <td><input type="text" name="circlem12" class="custom-input" value="<?php if(isset($_REQUEST['circlem12'])){ echo $_REQUEST['circlem12'];}?>"></td>
                <td><input type="text" name="circlen12" class="custom-input" value="<?php if(isset($_REQUEST['circlen12'])){ echo $_REQUEST['circlen12'];}?>"></td>
                <td><input type="text" name="circleo12" class="custom-input" value="<?php if(isset($_REQUEST['circleo12'])){ echo $_REQUEST['circleo12'];}?>"></td>
                <td><input type="text" name="circlep12" class="custom-input" value="<?php if(isset($_REQUEST['circlep12'])){ echo $_REQUEST['circlep12'];}?>"></td>
                <td><input type="text" name="$circleq12" class="custom-input" readonly value="<?php if(isset($circleq12)){ echo $circleq12 ;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">13</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb13" class="custom-input" value="<?php if(isset($_REQUEST['circleb13'])){ echo $_REQUEST['circleb13'];}?>"></td>
                <td><input type="text" name="circlec13" class="custom-input" value="<?php if(isset($_REQUEST['circlec13'])){ echo $_REQUEST['circlec13'];}?>"></td>
                <td><input type="text" name="circled13" class="custom-input" value="<?php if(isset($_REQUEST['circled13'])){ echo $_REQUEST['circled13'];}?>"></td>
                <td><input type="text" name="circlee13" class="custom-input" value="<?php if(isset($_REQUEST['circlee13'])){ echo $_REQUEST['circlee13'];}?>"></td>
                <td><input type="text" name="circlef13" class="custom-input" value="<?php if(isset($_REQUEST['circlef13'])){ echo $_REQUEST['circlef13'];}?>"></td>
                <td><input type="text" name="circleg13" class="custom-input" value="<?php if(isset($_REQUEST['circleg13'])){ echo $_REQUEST['circleg13'];}?>"></td>
                <td><input type="text" name="circleh13" class="custom-input" value="<?php if(isset($_REQUEST['circleh13'])){ echo $_REQUEST['circleh13'];}?>"></td>
                <td><input type="text" name="circlei13" class="custom-input" value="<?php if(isset($_REQUEST['circlei13'])){ echo $_REQUEST['circlei13'];}?>"></td>
                <td><input type="text" name="circlej13" class="custom-input" value="<?php if(isset($_REQUEST['circlej13'])){ echo $_REQUEST['circlej13'];}?>"></td>
                <td><input type="text" name="circlek13" class="custom-input" value="<?php if(isset($_REQUEST['circlek13'])){ echo $_REQUEST['circlek13'];}?>"></td>
                <td><input type="text" name="circlel13" class="custom-input" value="<?php if(isset($_REQUEST['circlel13'])){ echo $_REQUEST['circlel13'];}?>"></td>
                <td><input type="text" name="circlem13" class="custom-input" value="<?php if(isset($_REQUEST['circlem13'])){ echo $_REQUEST['circlem13'];}?>"></td>
                <td><input type="text" name="circlen13" class="custom-input" value="<?php if(isset($_REQUEST['circlen13'])){ echo $_REQUEST['circlen13'];}?>"></td>
                <td><input type="text" name="circleo13" class="custom-input" value="<?php if(isset($_REQUEST['circleo13'])){ echo $_REQUEST['circleo13'];}?>"></td>
                <td><input type="text" name="circlep13" class="custom-input" value="<?php if(isset($_REQUEST['circlep13'])){ echo $_REQUEST['circlep13'];}?>"></td>
                <td><input type="text" name="circleq13" class="custom-input" readonly value="<?php if(isset($circleq13)){ echo $circleq13;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">14</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb14" class="custom-input" value="<?php if(isset($_REQUEST['circleb14'])){ echo $_REQUEST['circleb14'];}?>"></td>
                <td><input type="text" name="circlec14" class="custom-input" value="<?php if(isset($_REQUEST['circlec14'])){ echo $_REQUEST['circlec14'];}?>"></td>
                <td><input type="text" name="circled14" class="custom-input" value="<?php if(isset($_REQUEST['circled14'])){ echo $_REQUEST['circled14'];}?>"></td>
                <td><input type="text" name="circlee14" class="custom-input" value="<?php if(isset($_REQUEST['circlee14'])){ echo $_REQUEST['circlee14'];}?>"></td>
                <td><input type="text" name="circlef14" class="custom-input" value="<?php if(isset($_REQUEST['circlef14'])){ echo $_REQUEST['circlef14'];}?>"></td>
                <td><input type="text" name="circleg14" class="custom-input" value="<?php if(isset($_REQUEST['circleg14'])){ echo $_REQUEST['circleg14'];}?>"></td>
                <td><input type="text" name="circleh14" class="custom-input" value="<?php if(isset($_REQUEST['circleh14'])){ echo $_REQUEST['circleh14'];}?>"></td>
                <td><input type="text" name="circlei14" class="custom-input" value="<?php if(isset($_REQUEST['circlei14'])){ echo $_REQUEST['circlei14'];}?>"></td>
                <td><input type="text" name="circlej14" class="custom-input" value="<?php if(isset($_REQUEST['circlej14'])){ echo $_REQUEST['circlej14'];}?>"></td>
                <td><input type="text" name="circlek14" class="custom-input" value="<?php if(isset($_REQUEST['circlek14'])){ echo $_REQUEST['circlek14'];}?>"></td>
                <td><input type="text" name="circlel14" class="custom-input" value="<?php if(isset($_REQUEST['circlel14'])){ echo $_REQUEST['circlel14'];}?>"></td>
                <td><input type="text" name="circlem14" class="custom-input" value="<?php if(isset($_REQUEST['circlem14'])){ echo $_REQUEST['circlem14'];}?>"></td>
                <td><input type="text" name="circlen14" class="custom-input" value="<?php if(isset($_REQUEST['circlen14'])){ echo $_REQUEST['circlen14'];}?>"></td>
                <td><input type="text" name="circleo14" class="custom-input" value="<?php if(isset($_REQUEST['circleo14'])){ echo $_REQUEST['circleo14'];}?>"></td>
                <td><input type="text" name="circlep14" class="custom-input" value="<?php if(isset($_REQUEST['circlep14'])){ echo $_REQUEST['circlep14'];}?>"></td>
                <td><input type="text" name="circleq14" class="custom-input" readonly value="<?php if(isset($circleq14)){ echo $circleq14;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">15</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb15" class="custom-input" value="<?php if(isset($_REQUEST['circleb15'])){ echo $_REQUEST['circleb15'];}?>"></td>
                <td><input type="text" name="circlec15" class="custom-input" value="<?php if(isset($_REQUEST['circlec15'])){ echo $_REQUEST['circlec15'];}?>"></td>
                <td><input type="text" name="circled15" class="custom-input" value="<?php if(isset($_REQUEST['circled15'])){ echo $_REQUEST['circled15'];}?>"></td>
                <td><input type="text" name="circlee15" class="custom-input" value="<?php if(isset($_REQUEST['circlee15'])){ echo $_REQUEST['circlee15'];}?>"></td>
                <td><input type="text" name="circlef15" class="custom-input" value="<?php if(isset($_REQUEST['circlef15'])){ echo $_REQUEST['circlef15'];}?>"></td>
                <td><input type="text" name="circleg15" class="custom-input" value="<?php if(isset($_REQUEST['circleg15'])){ echo $_REQUEST['circleg15'];}?>"></td>
                <td><input type="text" name="circleh15" class="custom-input" value="<?php if(isset($_REQUEST['circleh15'])){ echo $_REQUEST['circleh15'];}?>"></td>
                <td><input type="text" name="circlei15" class="custom-input" value="<?php if(isset($_REQUEST['circlei15'])){ echo $_REQUEST['circlei15'];}?>"></td>
                <td><input type="text" name="circlej15" class="custom-input" value="<?php if(isset($_REQUEST['circlej15'])){ echo $_REQUEST['circlej15'];}?>"></td>
                <td><input type="text" name="circlek15" class="custom-input" value="<?php if(isset($_REQUEST['circlek15'])){ echo $_REQUEST['circlek15'];}?>"></td>
                <td><input type="text" name="circlel15" class="custom-input" value="<?php if(isset($_REQUEST['circlel15'])){ echo $_REQUEST['circlel15'];}?>"></td>
                <td><input type="text" name="circlem15" class="custom-input" value="<?php if(isset($_REQUEST['circlem15'])){ echo $_REQUEST['circlem15'];}?>"></td>
                <td><input type="text" name="circlen15" class="custom-input" value="<?php if(isset($_REQUEST['circlen15'])){ echo $_REQUEST['circlen15'];}?>"></td>
                <td><input type="text" name="circleo15" class="custom-input" value="<?php if(isset($_REQUEST['circleo15'])){ echo $_REQUEST['circleo15'];}?>"></td>
                <td><input type="text" name="circlep15" class="custom-input" value="<?php if(isset($_REQUEST['circlep15'])){ echo $_REQUEST['circlep15'];}?>"></td>
                <td><input type="text" name="circleq15" class="custom-input" readonly value="<?php if(isset($circleq15)){ echo $circleq15;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">16</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb16" class="custom-input" value="<?php if(isset($_REQUEST['circleb16'])){ echo $_REQUEST['circleb16'];}?>"></td>
                <td><input type="text" name="circlec16" class="custom-input" value="<?php if(isset($_REQUEST['circlec16'])){ echo $_REQUEST['circlec16'];}?>"></td>
                <td><input type="text" name="circled16" class="custom-input" value="<?php if(isset($_REQUEST['circled16'])){ echo $_REQUEST['circled16'];}?>"></td>
                <td><input type="text" name="circlee16" class="custom-input" value="<?php if(isset($_REQUEST['circlee16'])){ echo $_REQUEST['circlee16'];}?>"></td>
                <td><input type="text" name="circlef16" class="custom-input" value="<?php if(isset($_REQUEST['circlef16'])){ echo $_REQUEST['circlef16'];}?>"></td>
                <td><input type="text" name="circleg16" class="custom-input" value="<?php if(isset($_REQUEST['circleg16'])){ echo $_REQUEST['circleg16'];}?>"></td>
                <td><input type="text" name="circleh16" class="custom-input" value="<?php if(isset($_REQUEST['circleh16'])){ echo $_REQUEST['circleh16'];}?>"></td>
                <td><input type="text" name="circlei16" class="custom-input" value="<?php if(isset($_REQUEST['circlei16'])){ echo $_REQUEST['circlei16'];}?>"></td>
                <td><input type="text" name="circlej16" class="custom-input" value="<?php if(isset($_REQUEST['circlej16'])){ echo $_REQUEST['circlej16'];}?>"></td>
                <td><input type="text" name="circlek16" class="custom-input" value="<?php if(isset($_REQUEST['circlek16'])){ echo $_REQUEST['circlek16'];}?>"></td>
                <td><input type="text" name="circlel16" class="custom-input" value="<?php if(isset($_REQUEST['circlel16'])){ echo $_REQUEST['circlel16'];}?>"></td>
                <td><input type="text" name="circlem16" class="custom-input" value="<?php if(isset($_REQUEST['circlem16'])){ echo $_REQUEST['circlem16'];}?>"></td>
                <td><input type="text" name="circlen16" class="custom-input" value="<?php if(isset($_REQUEST['circlen16'])){ echo $_REQUEST['circlen16'];}?>"></td>
                <td><input type="text" name="circleo16" class="custom-input" value="<?php if(isset($_REQUEST['circleo16'])){ echo $_REQUEST['circleo16'];}?>"></td>
                <td><input type="text" name="circlep16" class="custom-input" value="<?php if(isset($_REQUEST['circlep16'])){ echo $_REQUEST['circlep16'];}?>"></td>
                <td><input type="text" name="circleq16" class="custom-input" readonly value="<?php if(isset($circleq16)){ echo $circleq16;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">17</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb17" class="custom-input" value="<?php if(isset($_REQUEST['circleb17'])){ echo $_REQUEST['circleb17'];}?>"></td>
                <td><input type="text" name="circlec17" class="custom-input" value="<?php if(isset($_REQUEST['circlec17'])){ echo $_REQUEST['circlec17'];}?>"></td>
                <td><input type="text" name="circled17" class="custom-input" value="<?php if(isset($_REQUEST['circled17'])){ echo $_REQUEST['circled17'];}?>"></td>
                <td><input type="text" name="circlee17" class="custom-input" value="<?php if(isset($_REQUEST['circlee17'])){ echo $_REQUEST['circlee17'];}?>"></td>
                <td><input type="text" name="circlef17" class="custom-input" value="<?php if(isset($_REQUEST['circlef17'])){ echo $_REQUEST['circlef17'];}?>"></td>
                <td><input type="text" name="circleg17" class="custom-input" value="<?php if(isset($_REQUEST['circleg17'])){ echo $_REQUEST['circleg17'];}?>"></td>
                <td><input type="text" name="circleh17" class="custom-input" value="<?php if(isset($_REQUEST['circleh17'])){ echo $_REQUEST['circleh17'];}?>"></td>
                <td><input type="text" name="circlei17" class="custom-input" value="<?php if(isset($_REQUEST['circlei17'])){ echo $_REQUEST['circlei17'];}?>"></td>
                <td><input type="text" name="circlej17" class="custom-input" value="<?php if(isset($_REQUEST['circlej17'])){ echo $_REQUEST['circlej17'];}?>"></td>
                <td><input type="text" name="circlek17" class="custom-input" value="<?php if(isset($_REQUEST['circlek17'])){ echo $_REQUEST['circlek17'];}?>"></td>
                <td><input type="text" name="circlel17" class="custom-input" value="<?php if(isset($_REQUEST['circlel17'])){ echo $_REQUEST['circlel17'];}?>"></td>
                <td><input type="text" name="circlem17" class="custom-input" value="<?php if(isset($_REQUEST['circlem17'])){ echo $_REQUEST['circlem17'];}?>"></td>
                <td><input type="text" name="circlen17" class="custom-input" value="<?php if(isset($_REQUEST['circlen17'])){ echo $_REQUEST['circlen17'];}?>"></td>
                <td><input type="text" name="circleo17" class="custom-input" value="<?php if(isset($_REQUEST['circleo17'])){ echo $_REQUEST['circleo17'];}?>"></td>
                <td><input type="text" name="circlep17" class="custom-input" value="<?php if(isset($_REQUEST['circlep17'])){ echo $_REQUEST['circlep17'];}?>"></td>
                <td><input type="text" name="circleq17" class="custom-input" readonly value="<?php if(isset($circleq17)){ echo $circleq17;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">18</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb18" class="custom-input" value="<?php if(isset($_REQUEST['circleb18'])){ echo $_REQUEST['circleb18'];}?>"></td>
                <td><input type="text" name="circlec18" class="custom-input" value="<?php if(isset($_REQUEST['circlec18'])){ echo $_REQUEST['circlec18'];}?>"></td>
                <td><input type="text" name="circled18" class="custom-input" value="<?php if(isset($_REQUEST['circled18'])){ echo $_REQUEST['circled18'];}?>"></td>
                <td><input type="text" name="circlee18" class="custom-input" value="<?php if(isset($_REQUEST['circlee18'])){ echo $_REQUEST['circlee18'];}?>"></td>
                <td><input type="text" name="circlef18" class="custom-input" value="<?php if(isset($_REQUEST['circlef18'])){ echo $_REQUEST['circlef18'];}?>"></td>
                <td><input type="text" name="circleg18" class="custom-input" value="<?php if(isset($_REQUEST['circleg18'])){ echo $_REQUEST['circleg18'];}?>"></td>
                <td><input type="text" name="circleh18" class="custom-input" value="<?php if(isset($_REQUEST['circleh18'])){ echo $_REQUEST['circleh18'];}?>"></td>
                <td><input type="text" name="circlei18" class="custom-input" value="<?php if(isset($_REQUEST['circlei18'])){ echo $_REQUEST['circlei18'];}?>"></td>
                <td><input type="text" name="circlej18" class="custom-input" value="<?php if(isset($_REQUEST['circlej18'])){ echo $_REQUEST['circlej18'];}?>"></td>
                <td><input type="text" name="circlek18" class="custom-input" value="<?php if(isset($_REQUEST['circlek18'])){ echo $_REQUEST['circlek18'];}?>"></td>
                <td><input type="text" name="circlel18" class="custom-input" value="<?php if(isset($_REQUEST['circlel18'])){ echo $_REQUEST['circlel18'];}?>"></td>
                <td><input type="text" name="circlem18" class="custom-input" value="<?php if(isset($_REQUEST['circlem18'])){ echo $_REQUEST['circlem18'];}?>"></td>
                <td><input type="text" name="circlen18" class="custom-input" value="<?php if(isset($_REQUEST['circlen18'])){ echo $_REQUEST['circlen18'];}?>"></td>
                <td><input type="text" name="circleo18" class="custom-input" value="<?php if(isset($_REQUEST['circleo18'])){ echo $_REQUEST['circleo18'];}?>"></td>
                <td><input type="text" name="circlep18" class="custom-input" value="<?php if(isset($_REQUEST['circlep18'])){ echo $_REQUEST['circlep18'];}?>"></td>
                <td><input type="text" name="circleq18" class="custom-input" readonly value="<?php if(isset($circleq18)){ echo $circleq18;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">19</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb19" class="custom-input" value="<?php if(isset($_REQUEST['circleb19'])){ echo $_REQUEST['circleb19'];}?>"></td>
                <td><input type="text" name="circlec19" class="custom-input" value="<?php if(isset($_REQUEST['circlec19'])){ echo $_REQUEST['circlec19'];}?>"></td>
                <td><input type="text" name="circled19" class="custom-input" value="<?php if(isset($_REQUEST['circled19'])){ echo $_REQUEST['circled19'];}?>"></td>
                <td><input type="text" name="circlee19" class="custom-input" value="<?php if(isset($_REQUEST['circlee19'])){ echo $_REQUEST['circlee19'];}?>"></td>
                <td><input type="text" name="circlef19" class="custom-input" value="<?php if(isset($_REQUEST['circlef19'])){ echo $_REQUEST['circlef19'];}?>"></td>
                <td><input type="text" name="circleg19" class="custom-input" value="<?php if(isset($_REQUEST['circleg19'])){ echo $_REQUEST['circleg19'];}?>"></td>
                <td><input type="text" name="circleh19" class="custom-input" value="<?php if(isset($_REQUEST['circleh19'])){ echo $_REQUEST['circleh19'];}?>"></td>
                <td><input type="text" name="circlei19" class="custom-input" value="<?php if(isset($_REQUEST['circlei19'])){ echo $_REQUEST['circlei19'];}?>"></td>
                <td><input type="text" name="circlej19" class="custom-input" value="<?php if(isset($_REQUEST['circlej19'])){ echo $_REQUEST['circlej19'];}?>"></td>
                <td><input type="text" name="circlek19" class="custom-input" value="<?php if(isset($_REQUEST['circlek19'])){ echo $_REQUEST['circlek19'];}?>"></td>
                <td><input type="text" name="circlel19" class="custom-input" value="<?php if(isset($_REQUEST['circlel19'])){ echo $_REQUEST['circlel19'];}?>"></td>
                <td><input type="text" name="circlem19" class="custom-input" value="<?php if(isset($_REQUEST['circlem19'])){ echo $_REQUEST['circlem19'];}?>"></td>
                <td><input type="text" name="circlen19" class="custom-input" value="<?php if(isset($_REQUEST['circlen19'])){ echo $_REQUEST['circlen19'];}?>"></td>
                <td><input type="text" name="circleo19" class="custom-input" value="<?php if(isset($_REQUEST['circleo19'])){ echo $_REQUEST['circleo19'];}?>"></td>
                <td><input type="text" name="circlep19" class="custom-input" value="<?php if(isset($_REQUEST['circlep19'])){ echo $_REQUEST['circlep19'];}?>"></td>
                <td><input type="text" name="circleq19" class="custom-input" readonly value="<?php if(isset($circleq19)){ echo $circleq19;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
                <!-- <td style="position: sticky; left:0;  background: #ECECEC;">20</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb20" class="custom-input" value="<?php if(isset($_REQUEST['circleb20'])){ echo $_REQUEST['circleb20'];}?>"></td>
                <td><input type="text" name="circlec20" class="custom-input" value="<?php if(isset($_REQUEST['circlec20'])){ echo $_REQUEST['circlec20'];}?>"></td>
                <td><input type="text" name="circled20" class="custom-input" value="<?php if(isset($_REQUEST['circled20'])){ echo $_REQUEST['circled20'];}?>"></td>
                <td><input type="text" name="circlee20" class="custom-input" value="<?php if(isset($_REQUEST['circlee20'])){ echo $_REQUEST['circlee20'];}?>"></td>
                <td><input type="text" name="circlef20" class="custom-input" value="<?php if(isset($_REQUEST['circlef20'])){ echo $_REQUEST['circlef20'];}?>"></td>
                <td><input type="text" name="circleg20" class="custom-input" value="<?php if(isset($_REQUEST['circleg20'])){ echo $_REQUEST['circleg20'];}?>"></td>
                <td><input type="text" name="circleh20" class="custom-input" value="<?php if(isset($_REQUEST['circleh20'])){ echo $_REQUEST['circleh20'];}?>"></td>
                <td><input type="text" name="circlei20" class="custom-input" value="<?php if(isset($_REQUEST['circlei20'])){ echo $_REQUEST['circlei20'];}?>"></td>
                <td><input type="text" name="circlej20" class="custom-input" value="<?php if(isset($_REQUEST['circlej20'])){ echo $_REQUEST['circlej20'];}?>"></td>
                <td><input type="text" name="circlek20" class="custom-input" value="<?php if(isset($_REQUEST['circlek20'])){ echo $_REQUEST['circlek20'];}?>"></td>
                <td><input type="text" name="circlel20" class="custom-input" value="<?php if(isset($_REQUEST['circlel20'])){ echo $_REQUEST['circlel20'];}?>"></td>
                <td><input type="text" name="circlem20" class="custom-input" value="<?php if(isset($_REQUEST['circlem20'])){ echo $_REQUEST['circlem20'];}?>"></td>
                <td><input type="text" name="circlen20" class="custom-input" value="<?php if(isset($_REQUEST['circlen20'])){ echo $_REQUEST['circlen20'];}?>"></td>
                <td><input type="text" name="circleo20" class="custom-input" value="<?php if(isset($_REQUEST['circleo20'])){ echo $_REQUEST['circleo20'];}?>"></td>
                <td><input type="text" name="circlep20" class="custom-input" value="<?php if(isset($_REQUEST['circlep20'])){ echo $_REQUEST['circlep20'];}?>"></td>
                <td><input type="text" name="circleq20" class="custom-input" readonly value="<?php if(isset($circleq20)){ echo $circleq20;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">21</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb21" class="custom-input" value="<?php if(isset($_REQUEST['circleb21'])){ echo $_REQUEST['circleb21'];}?>"></td>
                <td><input type="text" name="circlec21" class="custom-input" value="<?php if(isset($_REQUEST['circlec21'])){ echo $_REQUEST['circlec21'];}?>"></td>
                <td><input type="text" name="circled21" class="custom-input" value="<?php if(isset($_REQUEST['circled21'])){ echo $_REQUEST['circled21'];}?>"></td>
                <td><input type="text" name="circlee21" class="custom-input" value="<?php if(isset($_REQUEST['circlee21'])){ echo $_REQUEST['circlee21'];}?>"></td>
                <td><input type="text" name="circlef21" class="custom-input" value="<?php if(isset($_REQUEST['circlef21'])){ echo $_REQUEST['circlef21'];}?>"></td>
                <td><input type="text" name="circleg21" class="custom-input" value="<?php if(isset($_REQUEST['circleg21'])){ echo $_REQUEST['circleg21'];}?>"></td>
                <td><input type="text" name="circleh21" class="custom-input" value="<?php if(isset($_REQUEST['circleh21'])){ echo $_REQUEST['circleh21'];}?>"></td>
                <td><input type="text" name="circlei21" class="custom-input" value="<?php if(isset($_REQUEST['circlei21'])){ echo $_REQUEST['circlei21'];}?>"></td>
                <td><input type="text" name="circlej21" class="custom-input" value="<?php if(isset($_REQUEST['circlej21'])){ echo $_REQUEST['circlej21'];}?>"></td>
                <td><input type="text" name="circlek21" class="custom-input" value="<?php if(isset($_REQUEST['circlek21'])){ echo $_REQUEST['circlek21'];}?>"></td>
                <td><input type="text" name="circlel21" class="custom-input" value="<?php if(isset($_REQUEST['circlel21'])){ echo $_REQUEST['circlel21'];}?>"></td>
                <td><input type="text" name="circlem21" class="custom-input" value="<?php if(isset($_REQUEST['circlem21'])){ echo $_REQUEST['circlem21'];}?>"></td>
                <td><input type="text" name="circlen21" class="custom-input" value="<?php if(isset($_REQUEST['circlen21'])){ echo $_REQUEST['circlen21'];}?>"></td>
                <td><input type="text" name="circleo21" class="custom-input" value="<?php if(isset($_REQUEST['circleo21'])){ echo $_REQUEST['circleo21'];}?>"></td>
                <td><input type="text" name="circlep21" class="custom-input" value="<?php if(isset($_REQUEST['circlep21'])){ echo $_REQUEST['circlep21'];}?>"></td>
                <td><input type="text" name="circleq21" class="custom-input" readonly value="<?php if(isset($circleq21)){ echo $circleq21;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">22</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb22" class="custom-input" value="<?php if(isset($_REQUEST['circleb22'])){ echo $_REQUEST['circleb22'];}?>"></td>
                <td><input type="text" name="circlec22" class="custom-input" value="<?php if(isset($_REQUEST['circlec22'])){ echo $_REQUEST['circlec22'];}?>"></td>
                <td><input type="text" name="circled22" class="custom-input" value="<?php if(isset($_REQUEST['circled22'])){ echo $_REQUEST['circled22'];}?>"></td>
                <td><input type="text" name="circlee22" class="custom-input" value="<?php if(isset($_REQUEST['circlee22'])){ echo $_REQUEST['circlee22'];}?>"></td>
                <td><input type="text" name="circlef22" class="custom-input" value="<?php if(isset($_REQUEST['circlef22'])){ echo $_REQUEST['circlef22'];}?>"></td>
                <td><input type="text" name="circleg22" class="custom-input" value="<?php if(isset($_REQUEST['circleg22'])){ echo $_REQUEST['circleg22'];}?>"></td>
                <td><input type="text" name="circleh22" class="custom-input" value="<?php if(isset($_REQUEST['circleh22'])){ echo $_REQUEST['circleh22'];}?>"></td>
                <td><input type="text" name="circlei22" class="custom-input" value="<?php if(isset($_REQUEST['circlei22'])){ echo $_REQUEST['circlei22'];}?>"></td>
                <td><input type="text" name="circlej22" class="custom-input" value="<?php if(isset($_REQUEST['circlej22'])){ echo $_REQUEST['circlej22'];}?>"></td>
                <td><input type="text" name="circlek22" class="custom-input" value="<?php if(isset($_REQUEST['circlek22'])){ echo $_REQUEST['circlek22'];}?>"></td>
                <td><input type="text" name="circlel22" class="custom-input" value="<?php if(isset($_REQUEST['circlel22'])){ echo $_REQUEST['circlel22'];}?>"></td>
                <td><input type="text" name="circlem22" class="custom-input" value="<?php if(isset($_REQUEST['circlem22'])){ echo $_REQUEST['circlem22'];}?>"></td>
                <td><input type="text" name="circlen22" class="custom-input" value="<?php if(isset($_REQUEST['circlen22'])){ echo $_REQUEST['circlen22'];}?>"></td>
                <td><input type="text" name="circleo22" class="custom-input" value="<?php if(isset($_REQUEST['circleo22'])){ echo $_REQUEST['circleo22'];}?>"></td>
                <td><input type="text" name="circlep22" class="custom-input" value="<?php if(isset($_REQUEST['circlep22'])){ echo $_REQUEST['circlep22'];}?>"></td>
                <td><input type="text" name="circleq22" class="custom-input" readonly value="<?php if(isset($circleq22)){ echo $circleq22;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">23</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb23" class="custom-input" value="<?php if(isset($_REQUEST['circleb23'])){ echo $_REQUEST['circleb23'];}?>"></td>
                <td><input type="text" name="circlec23" class="custom-input" value="<?php if(isset($_REQUEST['circlec23'])){ echo $_REQUEST['circlec23'];}?>"></td>
                <td><input type="text" name="circled23" class="custom-input" value="<?php if(isset($_REQUEST['circled23'])){ echo $_REQUEST['circled23'];}?>"></td>
                <td><input type="text" name="circlee23" class="custom-input" value="<?php if(isset($_REQUEST['circlee23'])){ echo $_REQUEST['circlee23'];}?>"></td>
                <td><input type="text" name="circlef23" class="custom-input" value="<?php if(isset($_REQUEST['circlef23'])){ echo $_REQUEST['circlef23'];}?>"></td>
                <td><input type="text" name="circleg23" class="custom-input" value="<?php if(isset($_REQUEST['circleg23'])){ echo $_REQUEST['circleg23'];}?>"></td>
                <td><input type="text" name="circleh23" class="custom-input" value="<?php if(isset($_REQUEST['circleh23'])){ echo $_REQUEST['circleh23'];}?>"></td>
                <td><input type="text" name="circlei23" class="custom-input" value="<?php if(isset($_REQUEST['circlei23'])){ echo $_REQUEST['circlei23'];}?>"></td>
                <td><input type="text" name="circlej23" class="custom-input" value="<?php if(isset($_REQUEST['circlej23'])){ echo $_REQUEST['circlej23'];}?>"></td>
                <td><input type="text" name="circlek23" class="custom-input" value="<?php if(isset($_REQUEST['circlek23'])){ echo $_REQUEST['circlek23'];}?>"></td>
                <td><input type="text" name="circlel23" class="custom-input" value="<?php if(isset($_REQUEST['circlel23'])){ echo $_REQUEST['circlel23'];}?>"></td>
                <td><input type="text" name="circlem23" class="custom-input" value="<?php if(isset($_REQUEST['circlem23'])){ echo $_REQUEST['circlem23'];}?>"></td>
                <td><input type="text" name="circlen23" class="custom-input" value="<?php if(isset($_REQUEST['circlen23'])){ echo $_REQUEST['circlen23'];}?>"></td>
                <td><input type="text" name="circleo23" class="custom-input" value="<?php if(isset($_REQUEST['circleo23'])){ echo $_REQUEST['circleo23'];}?>"></td>
                <td><input type="text" name="circlep23" class="custom-input" value="<?php if(isset($_REQUEST['circlep23'])){ echo $_REQUEST['circlep23'];}?>"></td>
                <td><input type="text" name="circleq23" class="custom-input" readonly value="<?php if(isset($circleq23)){ echo $circleq23;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">24</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb24" class="custom-input" value="<?php if(isset($_REQUEST['circleb24'])){ echo $_REQUEST['circleb24'];}?>"></td>
                <td><input type="text" name="circlec24" class="custom-input" value="<?php if(isset($_REQUEST['circlec24'])){ echo $_REQUEST['circlec24'];}?>"></td>
                <td><input type="text" name="circled24" class="custom-input" value="<?php if(isset($_REQUEST['circled24'])){ echo $_REQUEST['circled24'];}?>"></td>
                <td><input type="text" name="circlee24" class="custom-input" value="<?php if(isset($_REQUEST['circlee24'])){ echo $_REQUEST['circlee24'];}?>"></td>
                <td><input type="text" name="circlef24" class="custom-input" value="<?php if(isset($_REQUEST['circlef24'])){ echo $_REQUEST['circlef24'];}?>"></td>
                <td><input type="text" name="circleg24" class="custom-input" value="<?php if(isset($_REQUEST['circleg24'])){ echo $_REQUEST['circleg24'];}?>"></td>
                <td><input type="text" name="circleh24" class="custom-input" value="<?php if(isset($_REQUEST['circleh24'])){ echo $_REQUEST['circleh24'];}?>"></td>
                <td><input type="text" name="circlei24" class="custom-input" value="<?php if(isset($_REQUEST['circlei24'])){ echo $_REQUEST['circlei24'];}?>"></td>
                <td><input type="text" name="circlej24" class="custom-input" value="<?php if(isset($_REQUEST['circlej24'])){ echo $_REQUEST['circlej24'];}?>"></td>
                <td><input type="text" name="circlek24" class="custom-input" value="<?php if(isset($_REQUEST['circlek24'])){ echo $_REQUEST['circlek24'];}?>"></td>
                <td><input type="text" name="circlel24" class="custom-input" value="<?php if(isset($_REQUEST['circlel24'])){ echo $_REQUEST['circlel24'];}?>"></td>
                <td><input type="text" name="circlem24" class="custom-input" value="<?php if(isset($_REQUEST['circlem24'])){ echo $_REQUEST['circlem24'];}?>"></td>
                <td><input type="text" name="circlen24" class="custom-input" value="<?php if(isset($_REQUEST['circlen24'])){ echo $_REQUEST['circlen24'];}?>"></td>
                <td><input type="text" name="circleo24" class="custom-input" value="<?php if(isset($_REQUEST['circleo24'])){ echo $_REQUEST['circleo24'];}?>"></td>
                <td><input type="text" name="circlep24" class="custom-input" value="<?php if(isset($_REQUEST['circlep24'])){ echo $_REQUEST['circlep24'];}?>"></td>
                <td><input type="text" name="circleq24" class="custom-input" readonly value="<?php if(isset($circleq24)){ echo $circleq24;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">25</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb25" class="custom-input" value="<?php if(isset($_REQUEST['circleb25'])){ echo $_REQUEST['circleb25'];}?>"></td>
                <td><input type="text" name="circlec25" class="custom-input" value="<?php if(isset($_REQUEST['circlec25'])){ echo $_REQUEST['circlec25'];}?>"></td>
                <td><input type="text" name="circled25" class="custom-input" value="<?php if(isset($_REQUEST['circled25'])){ echo $_REQUEST['circled25'];}?>"></td>
                <td><input type="text" name="circlee25" class="custom-input" value="<?php if(isset($_REQUEST['circlee25'])){ echo $_REQUEST['circlee25'];}?>"></td>
                <td><input type="text" name="circlef25" class="custom-input" value="<?php if(isset($_REQUEST['circlef25'])){ echo $_REQUEST['circlef25'];}?>"></td>
                <td><input type="text" name="circleg25" class="custom-input" value="<?php if(isset($_REQUEST['circleg25'])){ echo $_REQUEST['circleg25'];}?>"></td>
                <td><input type="text" name="circleh25" class="custom-input" value="<?php if(isset($_REQUEST['circleh25'])){ echo $_REQUEST['circleh25'];}?>"></td>
                <td><input type="text" name="circlei25" class="custom-input" value="<?php if(isset($_REQUEST['circlei25'])){ echo $_REQUEST['circlei25'];}?>"></td>
                <td><input type="text" name="circlej25" class="custom-input" value="<?php if(isset($_REQUEST['circlej25'])){ echo $_REQUEST['circlej25'];}?>"></td>
                <td><input type="text" name="circlek25" class="custom-input" value="<?php if(isset($_REQUEST['circlek25'])){ echo $_REQUEST['circlek25'];}?>"></td>
                <td><input type="text" name="circlel25" class="custom-input" value="<?php if(isset($_REQUEST['circlel25'])){ echo $_REQUEST['circlel25'];}?>"></td>
                <td><input type="text" name="circlem25" class="custom-input" value="<?php if(isset($_REQUEST['circlem25'])){ echo $_REQUEST['circlem25'];}?>"></td>
                <td><input type="text" name="circlen25" class="custom-input" value="<?php if(isset($_REQUEST['circlen25'])){ echo $_REQUEST['circlen25'];}?>"></td>
                <td><input type="text" name="circleo25" class="custom-input" value="<?php if(isset($_REQUEST['circleo25'])){ echo $_REQUEST['circleo25'];}?>"></td>
                <td><input type="text" name="circlep25" class="custom-input" value="<?php if(isset($_REQUEST['circlep25'])){ echo $_REQUEST['circlep25'];}?>"></td>
                <td><input type="text" name="circleq25" class="custom-input" readonly value="<?php if(isset($circleq25)){ echo $circleq25;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">26</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb26" class="custom-input" value="<?php if(isset($_REQUEST['circleb26'])){ echo $_REQUEST['circleb26'];}?>"></td>
                <td><input type="text" name="circlec26" class="custom-input" value="<?php if(isset($_REQUEST['circlec26'])){ echo $_REQUEST['circlec26'];}?>"></td>
                <td><input type="text" name="circled26" class="custom-input" value="<?php if(isset($_REQUEST['circled26'])){ echo $_REQUEST['circled26'];}?>"></td>
                <td><input type="text" name="circlee26" class="custom-input" value="<?php if(isset($_REQUEST['circlee26'])){ echo $_REQUEST['circlee26'];}?>"></td>
                <td><input type="text" name="circlef26" class="custom-input" value="<?php if(isset($_REQUEST['circlef26'])){ echo $_REQUEST['circlef26'];}?>"></td>
                <td><input type="text" name="circleg26" class="custom-input" value="<?php if(isset($_REQUEST['circleg26'])){ echo $_REQUEST['circleg26'];}?>"></td>
                <td><input type="text" name="circleh26" class="custom-input" value="<?php if(isset($_REQUEST['circleh26'])){ echo $_REQUEST['circleh26'];}?>"></td>
                <td><input type="text" name="circlei26" class="custom-input" value="<?php if(isset($_REQUEST['circlei26'])){ echo $_REQUEST['circlei26'];}?>"></td>
                <td><input type="text" name="circlej26" class="custom-input" value="<?php if(isset($_REQUEST['circlej26'])){ echo $_REQUEST['circlej26'];}?>"></td>
                <td><input type="text" name="circlek26" class="custom-input" value="<?php if(isset($_REQUEST['circlek26'])){ echo $_REQUEST['circlek26'];}?>"></td>
                <td><input type="text" name="circlel26" class="custom-input" value="<?php if(isset($_REQUEST['circlel26'])){ echo $_REQUEST['circlel26'];}?>"></td>
                <td><input type="text" name="circlem26" class="custom-input" value="<?php if(isset($_REQUEST['circlem26'])){ echo $_REQUEST['circlem26'];}?>"></td>
                <td><input type="text" name="circlen26" class="custom-input" value="<?php if(isset($_REQUEST['circlen26'])){ echo $_REQUEST['circlen26'];}?>"></td>
                <td><input type="text" name="circleo26" class="custom-input" value="<?php if(isset($_REQUEST['circleo26'])){ echo $_REQUEST['circleo26'];}?>"></td>
                <td><input type="text" name="circlep26" class="custom-input" value="<?php if(isset($_REQUEST['circlep26'])){ echo $_REQUEST['circlep26'];}?>"></td>
                <td><input type="text" name="circleq26" class="custom-input" readonly value="<?php if(isset($circleq26)){ echo $circleq26;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">27</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb27" class="custom-input" value="<?php if(isset($_REQUEST['circleb27'])){ echo $_REQUEST['circleb27'];}?>"></td>
                <td><input type="text" name="circlec27" class="custom-input" value="<?php if(isset($_REQUEST['circlec27'])){ echo $_REQUEST['circlec27'];}?>"></td>
                <td><input type="text" name="circled27" class="custom-input" value="<?php if(isset($_REQUEST['circled27'])){ echo $_REQUEST['circled27'];}?>"></td>
                <td><input type="text" name="circlee27" class="custom-input" value="<?php if(isset($_REQUEST['circlee27'])){ echo $_REQUEST['circlee27'];}?>"></td>
                <td><input type="text" name="circlef27" class="custom-input" value="<?php if(isset($_REQUEST['circlef27'])){ echo $_REQUEST['circlef27'];}?>"></td>
                <td><input type="text" name="circleg27" class="custom-input" value="<?php if(isset($_REQUEST['circleg27'])){ echo $_REQUEST['circleg27'];}?>"></td>
                <td><input type="text" name="circleh27" class="custom-input" value="<?php if(isset($_REQUEST['circleh27'])){ echo $_REQUEST['circleh27'];}?>"></td>
                <td><input type="text" name="circlei27" class="custom-input" value="<?php if(isset($_REQUEST['circlei27'])){ echo $_REQUEST['circlei27'];}?>"></td>
                <td><input type="text" name="circlej27" class="custom-input" value="<?php if(isset($_REQUEST['circlej27'])){ echo $_REQUEST['circlej27'];}?>"></td>
                <td><input type="text" name="circlek27" class="custom-input" value="<?php if(isset($_REQUEST['circlek27'])){ echo $_REQUEST['circlek27'];}?>"></td>
                <td><input type="text" name="circlel27" class="custom-input" value="<?php if(isset($_REQUEST['circlel27'])){ echo $_REQUEST['circlel27'];}?>"></td>
                <td><input type="text" name="circlem27" class="custom-input" value="<?php if(isset($_REQUEST['circlem27'])){ echo $_REQUEST['circlem27'];}?>"></td>
                <td><input type="text" name="circlen27" class="custom-input" value="<?php if(isset($_REQUEST['circlen27'])){ echo $_REQUEST['circlen27'];}?>"></td>
                <td><input type="text" name="circleo27" class="custom-input" value="<?php if(isset($_REQUEST['circleo27'])){ echo $_REQUEST['circleo27'];}?>"></td>
                <td><input type="text" name="circlep27" class="custom-input" value="<?php if(isset($_REQUEST['circlep27'])){ echo $_REQUEST['circlep27'];}?>"></td>
                <td><input type="text" name="circleq27" class="custom-input" readonly value="<?php if(isset($circleq27)){ echo $circleq27;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">28</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb28" class="custom-input" value="<?php if(isset($_REQUEST['circleb28'])){ echo $_REQUEST['circleb28'];}?>"></td>
                <td><input type="text" name="circlec28" class="custom-input" value="<?php if(isset($_REQUEST['circlec28'])){ echo $_REQUEST['circlec28'];}?>"></td>
                <td><input type="text" name="circled28" class="custom-input" value="<?php if(isset($_REQUEST['circled28'])){ echo $_REQUEST['circled28'];}?>"></td>
                <td><input type="text" name="circlee28" class="custom-input" value="<?php if(isset($_REQUEST['circlee28'])){ echo $_REQUEST['circlee28'];}?>"></td>
                <td><input type="text" name="circlef28" class="custom-input" value="<?php if(isset($_REQUEST['circlef28'])){ echo $_REQUEST['circlef28'];}?>"></td>
                <td><input type="text" name="circleg28" class="custom-input" value="<?php if(isset($_REQUEST['circleg28'])){ echo $_REQUEST['circleg28'];}?>"></td>
                <td><input type="text" name="circleh28" class="custom-input" value="<?php if(isset($_REQUEST['circleh28'])){ echo $_REQUEST['circleh28'];}?>"></td>
                <td><input type="text" name="circlei28" class="custom-input" value="<?php if(isset($_REQUEST['circlei28'])){ echo $_REQUEST['circlei28'];}?>"></td>
                <td><input type="text" name="circlej28" class="custom-input" value="<?php if(isset($_REQUEST['circlej28'])){ echo $_REQUEST['circlej28'];}?>"></td>
                <td><input type="text" name="circlek28" class="custom-input" value="<?php if(isset($_REQUEST['circlek28'])){ echo $_REQUEST['circlek28'];}?>"></td>
                <td><input type="text" name="circlel28" class="custom-input" value="<?php if(isset($_REQUEST['circlel28'])){ echo $_REQUEST['circlel28'];}?>"></td>
                <td><input type="text" name="circlem28" class="custom-input" value="<?php if(isset($_REQUEST['circlem28'])){ echo $_REQUEST['circlem28'];}?>"></td>
                <td><input type="text" name="circlen28" class="custom-input" value="<?php if(isset($_REQUEST['circlen28'])){ echo $_REQUEST['circlen28'];}?>"></td>
                <td><input type="text" name="circleo28" class="custom-input" value="<?php if(isset($_REQUEST['circleo28'])){ echo $_REQUEST['circleo28'];}?>"></td>
                <td><input type="text" name="circlep28" class="custom-input" value="<?php if(isset($_REQUEST['circlep28'])){ echo $_REQUEST['circlep28'];}?>"></td>
                <td><input type="text" name="circleq28" class="custom-input" readonly value="<?php if(isset($circleq28)){ echo $circleq28;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">29</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb29" class="custom-input" value="<?php if(isset($_REQUEST['circleb29'])){ echo $_REQUEST['circleb29'];}?>"></td>
                <td><input type="text" name="circlec29" class="custom-input" value="<?php if(isset($_REQUEST['circlec29'])){ echo $_REQUEST['circlec29'];}?>"></td>
                <td><input type="text" name="circled29" class="custom-input" value="<?php if(isset($_REQUEST['circled29'])){ echo $_REQUEST['circled29'];}?>"></td>
                <td><input type="text" name="circlee29" class="custom-input" value="<?php if(isset($_REQUEST['circlee29'])){ echo $_REQUEST['circlee29'];}?>"></td>
                <td><input type="text" name="circlef29" class="custom-input" value="<?php if(isset($_REQUEST['circlef29'])){ echo $_REQUEST['circlef29'];}?>"></td>
                <td><input type="text" name="circleg29" class="custom-input" value="<?php if(isset($_REQUEST['circleg29'])){ echo $_REQUEST['circleg29'];}?>"></td>
                <td><input type="text" name="circleh29" class="custom-input" value="<?php if(isset($_REQUEST['circleh29'])){ echo $_REQUEST['circleh29'];}?>"></td>
                <td><input type="text" name="circlei29" class="custom-input" value="<?php if(isset($_REQUEST['circlei29'])){ echo $_REQUEST['circlei29'];}?>"></td>
                <td><input type="text" name="circlej29" class="custom-input" value="<?php if(isset($_REQUEST['circlej29'])){ echo $_REQUEST['circlej29'];}?>"></td>
                <td><input type="text" name="circlek29" class="custom-input" value="<?php if(isset($_REQUEST['circlek29'])){ echo $_REQUEST['circlek29'];}?>"></td>
                <td><input type="text" name="circlel29" class="custom-input" value="<?php if(isset($_REQUEST['circlel29'])){ echo $_REQUEST['circlel29'];}?>"></td>
                <td><input type="text" name="circlem29" class="custom-input" value="<?php if(isset($_REQUEST['circlem29'])){ echo $_REQUEST['circlem29'];}?>"></td>
                <td><input type="text" name="circlen29" class="custom-input" value="<?php if(isset($_REQUEST['circlen29'])){ echo $_REQUEST['circlen29'];}?>"></td>
                <td><input type="text" name="circleo29" class="custom-input" value="<?php if(isset($_REQUEST['circleo29'])){ echo $_REQUEST['circleo29'];}?>"></td>
                <td><input type="text" name="circlep29" class="custom-input" value="<?php if(isset($_REQUEST['circlep29'])){ echo $_REQUEST['circlep29'];}?>"></td>
                <td><input type="text" name="circleq29" class="custom-input" readonly value="<?php if(isset($circleq29)){ echo $circleq29;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">30</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb30" class="custom-input" value="<?php if(isset($_REQUEST['circleb30'])){ echo $_REQUEST['circleb30'];}?>"></td>
                <td><input type="text" name="circlec30" class="custom-input" value="<?php if(isset($_REQUEST['circlec30'])){ echo $_REQUEST['circlec30'];}?>"></td>
                <td><input type="text" name="circled30" class="custom-input" value="<?php if(isset($_REQUEST['circled30'])){ echo $_REQUEST['circled30'];}?>"></td>
                <td><input type="text" name="circlee30" class="custom-input" value="<?php if(isset($_REQUEST['circlee30'])){ echo $_REQUEST['circlee30'];}?>"></td>
                <td><input type="text" name="circlef30" class="custom-input" value="<?php if(isset($_REQUEST['circlef30'])){ echo $_REQUEST['circlef30'];}?>"></td>
                <td><input type="text" name="circleg30" class="custom-input" value="<?php if(isset($_REQUEST['circleg30'])){ echo $_REQUEST['circleg30'];}?>"></td>
                <td><input type="text" name="circleh30" class="custom-input" value="<?php if(isset($_REQUEST['circleh30'])){ echo $_REQUEST['circleh30'];}?>"></td>
                <td><input type="text" name="circlei30" class="custom-input" value="<?php if(isset($_REQUEST['circlei30'])){ echo $_REQUEST['circlei30'];}?>"></td>
                <td><input type="text" name="circlej30" class="custom-input" value="<?php if(isset($_REQUEST['circlej30'])){ echo $_REQUEST['circlej30'];}?>"></td>
                <td><input type="text" name="circlek30" class="custom-input" value="<?php if(isset($_REQUEST['circlek30'])){ echo $_REQUEST['circlek30'];}?>"></td>
                <td><input type="text" name="circlel30" class="custom-input" value="<?php if(isset($_REQUEST['circlel30'])){ echo $_REQUEST['circlel30'];}?>"></td>
                <td><input type="text" name="circlem30" class="custom-input" value="<?php if(isset($_REQUEST['circlem30'])){ echo $_REQUEST['circlem30'];}?>"></td>
                <td><input type="text" name="circlen30" class="custom-input" value="<?php if(isset($_REQUEST['circlen30'])){ echo $_REQUEST['circlen30'];}?>"></td>
                <td><input type="text" name="circleo30" class="custom-input" value="<?php if(isset($_REQUEST['circleo30'])){ echo $_REQUEST['circleo30'];}?>"></td>
                <td><input type="text" name="circlep30" class="custom-input" value="<?php if(isset($_REQUEST['circlep30'])){ echo $_REQUEST['circlep30'];}?>"></td>
                <td><input type="text" name="circleq30" class="custom-input" readonly value="<?php if(isset($circleq30)){ echo $circleq30;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">31</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb31" class="custom-input" value="<?php if(isset($_REQUEST['circleb31'])){ echo $_REQUEST['circleb31'];}?>"></td>
                <td><input type="text" name="circlec31" class="custom-input" value="<?php if(isset($_REQUEST['circlec31'])){ echo $_REQUEST['circlec31'];}?>"></td>
                <td><input type="text" name="circled31" class="custom-input" value="<?php if(isset($_REQUEST['circled31'])){ echo $_REQUEST['circled31'];}?>"></td>
                <td><input type="text" name="circlee31" class="custom-input" value="<?php if(isset($_REQUEST['circlee31'])){ echo $_REQUEST['circlee31'];}?>"></td>
                <td><input type="text" name="circlef31" class="custom-input" value="<?php if(isset($_REQUEST['circlef31'])){ echo $_REQUEST['circlef31'];}?>"></td>
                <td><input type="text" name="circleg31" class="custom-input" value="<?php if(isset($_REQUEST['circleg31'])){ echo $_REQUEST['circleg31'];}?>"></td>
                <td><input type="text" name="circleh31" class="custom-input" value="<?php if(isset($_REQUEST['circleh31'])){ echo $_REQUEST['circleh31'];}?>"></td>
                <td><input type="text" name="circlei31" class="custom-input" value="<?php if(isset($_REQUEST['circlei31'])){ echo $_REQUEST['circlei31'];}?>"></td>
                <td><input type="text" name="circlej31" class="custom-input" value="<?php if(isset($_REQUEST['circlej31'])){ echo $_REQUEST['circlej31'];}?>"></td>
                <td><input type="text" name="circlek31" class="custom-input" value="<?php if(isset($_REQUEST['circlek31'])){ echo $_REQUEST['circlek31'];}?>"></td>
                <td><input type="text" name="circlel31" class="custom-input" value="<?php if(isset($_REQUEST['circlel31'])){ echo $_REQUEST['circlel31'];}?>"></td>
                <td><input type="text" name="circlem31" class="custom-input" value="<?php if(isset($_REQUEST['circlem31'])){ echo $_REQUEST['circlem31'];}?>"></td>
                <td><input type="text" name="circlen31" class="custom-input" value="<?php if(isset($_REQUEST['circlen31'])){ echo $_REQUEST['circlen31'];}?>"></td>
                <td><input type="text" name="circleo31" class="custom-input" value="<?php if(isset($_REQUEST['circleo31'])){ echo $_REQUEST['circleo31'];}?>"></td>
                <td><input type="text" name="circlep31" class="custom-input" value="<?php if(isset($_REQUEST['circlep31'])){ echo $_REQUEST['circlep31'];}?>"></td>
                <td><input type="text" name="circleq31" class="custom-input" readonly value="<?php if(isset($circleq31)){ echo $circleq31;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">32</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb32" class="custom-input" value="<?php if(isset($_REQUEST['circleb32'])){ echo $_REQUEST['circleb32'];}?>"></td>
                <td><input type="text" name="circlec32" class="custom-input" value="<?php if(isset($_REQUEST['circlec32'])){ echo $_REQUEST['circlec32'];}?>"></td>
                <td><input type="text" name="circled32" class="custom-input" value="<?php if(isset($_REQUEST['circled32'])){ echo $_REQUEST['circled32'];}?>"></td>
                <td><input type="text" name="circlee32" class="custom-input" value="<?php if(isset($_REQUEST['circlee32'])){ echo $_REQUEST['circlee32'];}?>"></td>
                <td><input type="text" name="circlef32" class="custom-input" value="<?php if(isset($_REQUEST['circlef32'])){ echo $_REQUEST['circlef32'];}?>"></td>
                <td><input type="text" name="circleg32" class="custom-input" value="<?php if(isset($_REQUEST['circleg32'])){ echo $_REQUEST['circleg32'];}?>"></td>
                <td><input type="text" name="circleh32" class="custom-input" value="<?php if(isset($_REQUEST['circleh32'])){ echo $_REQUEST['circleh32'];}?>"></td>
                <td><input type="text" name="circlei32" class="custom-input" value="<?php if(isset($_REQUEST['circlei32'])){ echo $_REQUEST['circlei32'];}?>"></td>
                <td><input type="text" name="circlej32" class="custom-input" value="<?php if(isset($_REQUEST['circlej32'])){ echo $_REQUEST['circlej32'];}?>"></td>
                <td><input type="text" name="circlek32" class="custom-input" value="<?php if(isset($_REQUEST['circlek32'])){ echo $_REQUEST['circlek32'];}?>"></td>
                <td><input type="text" name="circlel32" class="custom-input" value="<?php if(isset($_REQUEST['circlel32'])){ echo $_REQUEST['circlel32'];}?>"></td>
                <td><input type="text" name="circlem32" class="custom-input" value="<?php if(isset($_REQUEST['circlem32'])){ echo $_REQUEST['circlem32'];}?>"></td>
                <td><input type="text" name="circlen32" class="custom-input" value="<?php if(isset($_REQUEST['circlen32'])){ echo $_REQUEST['circlen32'];}?>"></td>
                <td><input type="text" name="circleo32" class="custom-input" value="<?php if(isset($_REQUEST['circleo32'])){ echo $_REQUEST['circleo32'];}?>"></td>
                <td><input type="text" name="circlep32" class="custom-input" value="<?php if(isset($_REQUEST['circlep32'])){ echo $_REQUEST['circlep32'];}?>"></td>
                <td><input type="text" name="circleq32" class="custom-input" readonly value="<?php if(isset($circleq32)){ echo $circleq32;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">33</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb33" class="custom-input" value="<?php if(isset($_REQUEST['circleb33'])){ echo $_REQUEST['circleb33'];}?>"></td>
                <td><input type="text" name="circlec33" class="custom-input" value="<?php if(isset($_REQUEST['circlec33'])){ echo $_REQUEST['circlec33'];}?>"></td>
                <td><input type="text" name="circled33" class="custom-input" value="<?php if(isset($_REQUEST['circled33'])){ echo $_REQUEST['circled33'];}?>"></td>
                <td><input type="text" name="circlee33" class="custom-input" value="<?php if(isset($_REQUEST['circlee33'])){ echo $_REQUEST['circlee33'];}?>"></td>
                <td><input type="text" name="circlef33" class="custom-input" value="<?php if(isset($_REQUEST['circlef33'])){ echo $_REQUEST['circlef33'];}?>"></td>
                <td><input type="text" name="circleg33" class="custom-input" value="<?php if(isset($_REQUEST['circleg33'])){ echo $_REQUEST['circleg33'];}?>"></td>
                <td><input type="text" name="circleh33" class="custom-input" value="<?php if(isset($_REQUEST['circleh33'])){ echo $_REQUEST['circleh33'];}?>"></td>
                <td><input type="text" name="circlei33" class="custom-input" value="<?php if(isset($_REQUEST['circlei33'])){ echo $_REQUEST['circlei33'];}?>"></td>
                <td><input type="text" name="circlej33" class="custom-input" value="<?php if(isset($_REQUEST['circlej33'])){ echo $_REQUEST['circlej33'];}?>"></td>
                <td><input type="text" name="circlek33" class="custom-input" value="<?php if(isset($_REQUEST['circlek33'])){ echo $_REQUEST['circlek33'];}?>"></td>
                <td><input type="text" name="circlel33" class="custom-input" value="<?php if(isset($_REQUEST['circlel33'])){ echo $_REQUEST['circlel33'];}?>"></td>
                <td><input type="text" name="circlem33" class="custom-input" value="<?php if(isset($_REQUEST['circlem33'])){ echo $_REQUEST['circlem33'];}?>"></td>
                <td><input type="text" name="circlen33" class="custom-input" value="<?php if(isset($_REQUEST['circlen33'])){ echo $_REQUEST['circlen33'];}?>"></td>
                <td><input type="text" name="circleo33" class="custom-input" value="<?php if(isset($_REQUEST['circleo33'])){ echo $_REQUEST['circleo33'];}?>"></td>
                <td><input type="text" name="circlep33" class="custom-input" value="<?php if(isset($_REQUEST['circlep33'])){ echo $_REQUEST['circlep33'];}?>"></td>
                <td><input type="text" name="circleq33" class="custom-input" readonly value="<?php if(isset($circleq33)){ echo $circleq33;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">34</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb34" class="custom-input" value="<?php if(isset($_REQUEST['circleb34'])){ echo $_REQUEST['circleb34'];}?>"></td>
                <td><input type="text" name="circlec34" class="custom-input" value="<?php if(isset($_REQUEST['circlec34'])){ echo $_REQUEST['circlec34'];}?>"></td>
                <td><input type="text" name="circled34" class="custom-input" value="<?php if(isset($_REQUEST['circled34'])){ echo $_REQUEST['circled34'];}?>"></td>
                <td><input type="text" name="circlee34" class="custom-input" value="<?php if(isset($_REQUEST['circlee34'])){ echo $_REQUEST['circlee34'];}?>"></td>
                <td><input type="text" name="circlef34" class="custom-input" value="<?php if(isset($_REQUEST['circlef34'])){ echo $_REQUEST['circlef34'];}?>"></td>
                <td><input type="text" name="circleg34" class="custom-input" value="<?php if(isset($_REQUEST['circleg34'])){ echo $_REQUEST['circleg34'];}?>"></td>
                <td><input type="text" name="circleh34" class="custom-input" value="<?php if(isset($_REQUEST['circleh34'])){ echo $_REQUEST['circleh34'];}?>"></td>
                <td><input type="text" name="circlei34" class="custom-input" value="<?php if(isset($_REQUEST['circlei34'])){ echo $_REQUEST['circlei34'];}?>"></td>
                <td><input type="text" name="circlej34" class="custom-input" value="<?php if(isset($_REQUEST['circlej34'])){ echo $_REQUEST['circlej34'];}?>"></td>
                <td><input type="text" name="circlek34" class="custom-input" value="<?php if(isset($_REQUEST['circlek34'])){ echo $_REQUEST['circlek34'];}?>"></td>
                <td><input type="text" name="circlel34" class="custom-input" value="<?php if(isset($_REQUEST['circlel34'])){ echo $_REQUEST['circlel34'];}?>"></td>
                <td><input type="text" name="circlem34" class="custom-input" value="<?php if(isset($_REQUEST['circlem34'])){ echo $_REQUEST['circlem34'];}?>"></td>
                <td><input type="text" name="circlen34" class="custom-input" value="<?php if(isset($_REQUEST['circlen34'])){ echo $_REQUEST['circlen34'];}?>"></td>
                <td><input type="text" name="circleo34" class="custom-input" value="<?php if(isset($_REQUEST['circleo34'])){ echo $_REQUEST['circleo34'];}?>"></td>
                <td><input type="text" name="circlep34" class="custom-input" value="<?php if(isset($_REQUEST['circlep34'])){ echo $_REQUEST['circlep34'];}?>"></td>
                <td><input type="text" name="circleq34" class="custom-input" readonly value="<?php if(isset($circleq34)){ echo $circleq34;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">35</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb35" class="custom-input" value="<?php if(isset($_REQUEST['circleb35'])){ echo $_REQUEST['circleb35'];}?>"></td>
                <td><input type="text" name="circlec35" class="custom-input" value="<?php if(isset($_REQUEST['circlec35'])){ echo $_REQUEST['circlec35'];}?>"></td>
                <td><input type="text" name="circled35" class="custom-input" value="<?php if(isset($_REQUEST['circled35'])){ echo $_REQUEST['circled35'];}?>"></td>
                <td><input type="text" name="circlee35" class="custom-input" value="<?php if(isset($_REQUEST['circlee35'])){ echo $_REQUEST['circlee35'];}?>"></td>
                <td><input type="text" name="circlef35" class="custom-input" value="<?php if(isset($_REQUEST['circlef35'])){ echo $_REQUEST['circlef35'];}?>"></td>
                <td><input type="text" name="circleg35" class="custom-input" value="<?php if(isset($_REQUEST['circleg35'])){ echo $_REQUEST['circleg35'];}?>"></td>
                <td><input type="text" name="circleh35" class="custom-input" value="<?php if(isset($_REQUEST['circleh35'])){ echo $_REQUEST['circleh35'];}?>"></td>
                <td><input type="text" name="circlei35" class="custom-input" value="<?php if(isset($_REQUEST['circlei35'])){ echo $_REQUEST['circlei35'];}?>"></td>
                <td><input type="text" name="circlej35" class="custom-input" value="<?php if(isset($_REQUEST['circlej35'])){ echo $_REQUEST['circlej35'];}?>"></td>
                <td><input type="text" name="circlek35" class="custom-input" value="<?php if(isset($_REQUEST['circlek35'])){ echo $_REQUEST['circlek35'];}?>"></td>
                <td><input type="text" name="circlel35" class="custom-input" value="<?php if(isset($_REQUEST['circlel35'])){ echo $_REQUEST['circlel35'];}?>"></td>
                <td><input type="text" name="circlem35" class="custom-input" value="<?php if(isset($_REQUEST['circlem35'])){ echo $_REQUEST['circlem35'];}?>"></td>
                <td><input type="text" name="circlen35" class="custom-input" value="<?php if(isset($_REQUEST['circlen35'])){ echo $_REQUEST['circlen35'];}?>"></td>
                <td><input type="text" name="circleo35" class="custom-input" value="<?php if(isset($_REQUEST['circleo35'])){ echo $_REQUEST['circleo35'];}?>"></td>
                <td><input type="text" name="circlep35" class="custom-input" value="<?php if(isset($_REQUEST['circlep35'])){ echo $_REQUEST['circlep35'];}?>"></td>
                <td><input type="text" name="circleq35" class="custom-input" readonly value="<?php if(isset($circleq35)){ echo $circleq35;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">36</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb36" class="custom-input" value="<?php if(isset($_REQUEST['circleb36'])){ echo $_REQUEST['circleb36'];}?>"></td>
                <td><input type="text" name="circlec36" class="custom-input" value="<?php if(isset($_REQUEST['circlec36'])){ echo $_REQUEST['circlec36'];}?>"></td>
                <td><input type="text" name="circled36" class="custom-input" value="<?php if(isset($_REQUEST['circled36'])){ echo $_REQUEST['circled36'];}?>"></td>
                <td><input type="text" name="circlee36" class="custom-input" value="<?php if(isset($_REQUEST['circlee36'])){ echo $_REQUEST['circlee36'];}?>"></td>
                <td><input type="text" name="circlef36" class="custom-input" value="<?php if(isset($_REQUEST['circlef36'])){ echo $_REQUEST['circlef36'];}?>"></td>
                <td><input type="text" name="circleg36" class="custom-input" value="<?php if(isset($_REQUEST['circleg36'])){ echo $_REQUEST['circleg36'];}?>"></td>
                <td><input type="text" name="circleh36" class="custom-input" value="<?php if(isset($_REQUEST['circleh36'])){ echo $_REQUEST['circleh36'];}?>"></td>
                <td><input type="text" name="circlei36" class="custom-input" value="<?php if(isset($_REQUEST['circlei36'])){ echo $_REQUEST['circlei36'];}?>"></td>
                <td><input type="text" name="circlej36" class="custom-input" value="<?php if(isset($_REQUEST['circlej36'])){ echo $_REQUEST['circlej36'];}?>"></td>
                <td><input type="text" name="circlek36" class="custom-input" value="<?php if(isset($_REQUEST['circlek36'])){ echo $_REQUEST['circlek36'];}?>"></td>
                <td><input type="text" name="circlel36" class="custom-input" value="<?php if(isset($_REQUEST['circlel36'])){ echo $_REQUEST['circlel36'];}?>"></td>
                <td><input type="text" name="circlem36" class="custom-input" value="<?php if(isset($_REQUEST['circlem36'])){ echo $_REQUEST['circlem36'];}?>"></td>
                <td><input type="text" name="circlen36" class="custom-input" value="<?php if(isset($_REQUEST['circlen36'])){ echo $_REQUEST['circlen36'];}?>"></td>
                <td><input type="text" name="circleo36" class="custom-input" value="<?php if(isset($_REQUEST['circleo36'])){ echo $_REQUEST['circleo36'];}?>"></td>
                <td><input type="text" name="circlep36" class="custom-input" value="<?php if(isset($_REQUEST['circlep36'])){ echo $_REQUEST['circlep36'];}?>"></td>
                <td><input type="text" name="circleq36" class="custom-input" readonly value="<?php if(isset($circleq36)){ echo $circleq36;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">37</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb37" class="custom-input" value="<?php if(isset($_REQUEST['circleb37'])){ echo $_REQUEST['circleb37'];}?>"></td>
                <td><input type="text" name="circlec37" class="custom-input" value="<?php if(isset($_REQUEST['circlec37'])){ echo $_REQUEST['circlec37'];}?>"></td>
                <td><input type="text" name="circled37" class="custom-input" value="<?php if(isset($_REQUEST['circled37'])){ echo $_REQUEST['circled37'];}?>"></td>
                <td><input type="text" name="circlee37" class="custom-input" value="<?php if(isset($_REQUEST['circlee37'])){ echo $_REQUEST['circlee37'];}?>"></td>
                <td><input type="text" name="circlef37" class="custom-input" value="<?php if(isset($_REQUEST['circlef37'])){ echo $_REQUEST['circlef37'];}?>"></td>
                <td><input type="text" name="circleg37" class="custom-input" value="<?php if(isset($_REQUEST['circleg37'])){ echo $_REQUEST['circleg37'];}?>"></td>
                <td><input type="text" name="circleh37" class="custom-input" value="<?php if(isset($_REQUEST['circleh37'])){ echo $_REQUEST['circleh37'];}?>"></td>
                <td><input type="text" name="circlei37" class="custom-input" value="<?php if(isset($_REQUEST['circlei37'])){ echo $_REQUEST['circlei37'];}?>"></td>
                <td><input type="text" name="circlej37" class="custom-input" value="<?php if(isset($_REQUEST['circlej37'])){ echo $_REQUEST['circlej37'];}?>"></td>
                <td><input type="text" name="circlek37" class="custom-input" value="<?php if(isset($_REQUEST['circlek37'])){ echo $_REQUEST['circlek37'];}?>"></td>
                <td><input type="text" name="circlel37" class="custom-input" value="<?php if(isset($_REQUEST['circlel37'])){ echo $_REQUEST['circlel37'];}?>"></td>
                <td><input type="text" name="circlem37" class="custom-input" value="<?php if(isset($_REQUEST['circlem37'])){ echo $_REQUEST['circlem37'];}?>"></td>
                <td><input type="text" name="circlen37" class="custom-input" value="<?php if(isset($_REQUEST['circlen37'])){ echo $_REQUEST['circlen37'];}?>"></td>
                <td><input type="text" name="circleo37" class="custom-input" value="<?php if(isset($_REQUEST['circleo37'])){ echo $_REQUEST['circleo37'];}?>"></td>
                <td><input type="text" name="circlep37" class="custom-input" value="<?php if(isset($_REQUEST['circlep37'])){ echo $_REQUEST['circlep37'];}?>"></td>
                <td><input type="text" name="circleq37" class="custom-input" readonly value="<?php if(isset($circleq37)){ echo $circleq37;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">38</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb38" class="custom-input" value="<?php if(isset($_REQUEST['circleb38'])){ echo $_REQUEST['circleb38'];}?>"></td>
                <td><input type="text" name="circlec38" class="custom-input" value="<?php if(isset($_REQUEST['circlec38'])){ echo $_REQUEST['circlec38'];}?>"></td>
                <td><input type="text" name="circled38" class="custom-input" value="<?php if(isset($_REQUEST['circled38'])){ echo $_REQUEST['circled38'];}?>"></td>
                <td><input type="text" name="circlee38" class="custom-input" value="<?php if(isset($_REQUEST['circlee38'])){ echo $_REQUEST['circlee38'];}?>"></td>
                <td><input type="text" name="circlef38" class="custom-input" value="<?php if(isset($_REQUEST['circlef38'])){ echo $_REQUEST['circlef38'];}?>"></td>
                <td><input type="text" name="circleg38" class="custom-input" value="<?php if(isset($_REQUEST['circleg38'])){ echo $_REQUEST['circleg38'];}?>"></td>
                <td><input type="text" name="circleh38" class="custom-input" value="<?php if(isset($_REQUEST['circleh38'])){ echo $_REQUEST['circleh38'];}?>"></td>
                <td><input type="text" name="circlei38" class="custom-input" value="<?php if(isset($_REQUEST['circlei38'])){ echo $_REQUEST['circlei38'];}?>"></td>
                <td><input type="text" name="circlej38" class="custom-input" value="<?php if(isset($_REQUEST['circlej38'])){ echo $_REQUEST['circlej38'];}?>"></td>
                <td><input type="text" name="circlek38" class="custom-input" value="<?php if(isset($_REQUEST['circlek38'])){ echo $_REQUEST['circlek38'];}?>"></td>
                <td><input type="text" name="circlel38" class="custom-input" value="<?php if(isset($_REQUEST['circlel38'])){ echo $_REQUEST['circlel38'];}?>"></td>
                <td><input type="text" name="circlem38" class="custom-input" value="<?php if(isset($_REQUEST['circlem38'])){ echo $_REQUEST['circlem38'];}?>"></td>
                <td><input type="text" name="circlen38" class="custom-input" value="<?php if(isset($_REQUEST['circlen38'])){ echo $_REQUEST['circlen38'];}?>"></td>
                <td><input type="text" name="circleo38" class="custom-input" value="<?php if(isset($_REQUEST['circleo38'])){ echo $_REQUEST['circleo38'];}?>"></td>
                <td><input type="text" name="circlep38" class="custom-input" value="<?php if(isset($_REQUEST['circlep38'])){ echo $_REQUEST['circlep38'];}?>"></td>
                <td><input type="text" name="circleq38" class="custom-input" readonly value="<?php if(isset($circleq38)){ echo $circleq38;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">39</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb39" class="custom-input" value="<?php if(isset($_REQUEST['circleb39'])){ echo $_REQUEST['circleb39'];}?>"></td>
                <td><input type="text" name="circlec39" class="custom-input" value="<?php if(isset($_REQUEST['circlec39'])){ echo $_REQUEST['circlec39'];}?>"></td>
                <td><input type="text" name="circled39" class="custom-input" value="<?php if(isset($_REQUEST['circled39'])){ echo $_REQUEST['circled39'];}?>"></td>
                <td><input type="text" name="circlee39" class="custom-input" value="<?php if(isset($_REQUEST['circlee39'])){ echo $_REQUEST['circlee39'];}?>"></td>
                <td><input type="text" name="circlef39" class="custom-input" value="<?php if(isset($_REQUEST['circlef39'])){ echo $_REQUEST['circlef39'];}?>"></td>
                <td><input type="text" name="circleg39" class="custom-input" value="<?php if(isset($_REQUEST['circleg39'])){ echo $_REQUEST['circleg39'];}?>"></td>
                <td><input type="text" name="circleh39" class="custom-input" value="<?php if(isset($_REQUEST['circleh39'])){ echo $_REQUEST['circleh39'];}?>"></td>
                <td><input type="text" name="circlei39" class="custom-input" value="<?php if(isset($_REQUEST['circlei39'])){ echo $_REQUEST['circlei39'];}?>"></td>
                <td><input type="text" name="circlej39" class="custom-input" value="<?php if(isset($_REQUEST['circlej39'])){ echo $_REQUEST['circlej39'];}?>"></td>
                <td><input type="text" name="circlek39" class="custom-input" value="<?php if(isset($_REQUEST['circlek39'])){ echo $_REQUEST['circlek39'];}?>"></td>
                <td><input type="text" name="circlel39" class="custom-input" value="<?php if(isset($_REQUEST['circlel39'])){ echo $_REQUEST['circlel39'];}?>"></td>
                <td><input type="text" name="circlem39" class="custom-input" value="<?php if(isset($_REQUEST['circlem39'])){ echo $_REQUEST['circlem39'];}?>"></td>
                <td><input type="text" name="circlen39" class="custom-input" value="<?php if(isset($_REQUEST['circlen39'])){ echo $_REQUEST['circlen39'];}?>"></td>
                <td><input type="text" name="circleo39" class="custom-input" value="<?php if(isset($_REQUEST['circleo39'])){ echo $_REQUEST['circleo39'];}?>"></td>
                <td><input type="text" name="circlep39" class="custom-input" value="<?php if(isset($_REQUEST['circlep39'])){ echo $_REQUEST['circlep39'];}?>"></td>
                <td><input type="text" name="circleq39" class="custom-input" readonly value="<?php if(isset($circleq39)){ echo $circleq39;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">40</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb40" class="custom-input" value="<?php if(isset($_REQUEST['circleb40'])){ echo $_REQUEST['circleb40'];}?>"></td>
                <td><input type="text" name="circlec40" class="custom-input" value="<?php if(isset($_REQUEST['circlec40'])){ echo $_REQUEST['circlec40'];}?>"></td>
                <td><input type="text" name="circled40" class="custom-input" value="<?php if(isset($_REQUEST['circled40'])){ echo $_REQUEST['circled40'];}?>"></td>
                <td><input type="text" name="circlee40" class="custom-input" value="<?php if(isset($_REQUEST['circlee40'])){ echo $_REQUEST['circlee40'];}?>"></td>
                <td><input type="text" name="circlef40" class="custom-input" value="<?php if(isset($_REQUEST['circlef40'])){ echo $_REQUEST['circlef40'];}?>"></td>
                <td><input type="text" name="circleg40" class="custom-input" value="<?php if(isset($_REQUEST['circleg40'])){ echo $_REQUEST['circleg40'];}?>"></td>
                <td><input type="text" name="circleh40" class="custom-input" value="<?php if(isset($_REQUEST['circleh40'])){ echo $_REQUEST['circleh40'];}?>"></td>
                <td><input type="text" name="circlei40" class="custom-input" value="<?php if(isset($_REQUEST['circlei40'])){ echo $_REQUEST['circlei40'];}?>"></td>
                <td><input type="text" name="circlej40" class="custom-input" value="<?php if(isset($_REQUEST['circlej40'])){ echo $_REQUEST['circlej40'];}?>"></td>
                <td><input type="text" name="circlek40" class="custom-input" value="<?php if(isset($_REQUEST['circlek40'])){ echo $_REQUEST['circlek40'];}?>"></td>
                <td><input type="text" name="circlel40" class="custom-input" value="<?php if(isset($_REQUEST['circlel40'])){ echo $_REQUEST['circlel40'];}?>"></td>
                <td><input type="text" name="circlem40" class="custom-input" value="<?php if(isset($_REQUEST['circlem40'])){ echo $_REQUEST['circlem40'];}?>"></td>
                <td><input type="text" name="circlen40" class="custom-input" value="<?php if(isset($_REQUEST['circlen40'])){ echo $_REQUEST['circlen40'];}?>"></td>
                <td><input type="text" name="circleo40" class="custom-input" value="<?php if(isset($_REQUEST['circleo40'])){ echo $_REQUEST['circleo40'];}?>"></td>
                <td><input type="text" name="circlep40" class="custom-input" value="<?php if(isset($_REQUEST['circlep40'])){ echo $_REQUEST['circlep40'];}?>"></td>
                <td><input type="text" name="circleq40" class="custom-input" readonly value="<?php if(isset($circleq40)){ echo $circleq40;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">41</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb41" class="custom-input" value="<?php if(isset($_REQUEST['circleb41'])){ echo $_REQUEST['circleb41'];}?>"></td>
                <td><input type="text" name="circlec41" class="custom-input" value="<?php if(isset($_REQUEST['circlec41'])){ echo $_REQUEST['circlec41'];}?>"></td>
                <td><input type="text" name="circled41" class="custom-input" value="<?php if(isset($_REQUEST['circled41'])){ echo $_REQUEST['circled41'];}?>"></td>
                <td><input type="text" name="circlee41" class="custom-input" value="<?php if(isset($_REQUEST['circlee41'])){ echo $_REQUEST['circlee41'];}?>"></td>
                <td><input type="text" name="circlef41" class="custom-input" value="<?php if(isset($_REQUEST['circlef41'])){ echo $_REQUEST['circlef41'];}?>"></td>
                <td><input type="text" name="circleg41" class="custom-input" value="<?php if(isset($_REQUEST['circleg41'])){ echo $_REQUEST['circleg41'];}?>"></td>
                <td><input type="text" name="circleh41" class="custom-input" value="<?php if(isset($_REQUEST['circleh41'])){ echo $_REQUEST['circleh41'];}?>"></td>
                <td><input type="text" name="circlei41" class="custom-input" value="<?php if(isset($_REQUEST['circlei41'])){ echo $_REQUEST['circlei41'];}?>"></td>
                <td><input type="text" name="circlej41" class="custom-input" value="<?php if(isset($_REQUEST['circlej41'])){ echo $_REQUEST['circlej41'];}?>"></td>
                <td><input type="text" name="circlek41" class="custom-input" value="<?php if(isset($_REQUEST['circlek41'])){ echo $_REQUEST['circlek41'];}?>"></td>
                <td><input type="text" name="circlel41" class="custom-input" value="<?php if(isset($_REQUEST['circlel41'])){ echo $_REQUEST['circlel41'];}?>"></td>
                <td><input type="text" name="circlem41" class="custom-input" value="<?php if(isset($_REQUEST['circlem41'])){ echo $_REQUEST['circlem41'];}?>"></td>
                <td><input type="text" name="circlen41" class="custom-input" value="<?php if(isset($_REQUEST['circlen41'])){ echo $_REQUEST['circlen41'];}?>"></td>
                <td><input type="text" name="circleo41" class="custom-input" value="<?php if(isset($_REQUEST['circleo41'])){ echo $_REQUEST['circleo41'];}?>"></td>
                <td><input type="text" name="circlep41" class="custom-input" value="<?php if(isset($_REQUEST['circlep41'])){ echo $_REQUEST['circlep41'];}?>"></td>
                <td><input type="text" name="circleq41" class="custom-input" readonly value="<?php if(isset($circleq41)){ echo $circleq41;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">42</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb42" class="custom-input" value="<?php if(isset($_REQUEST['circleb42'])){ echo $_REQUEST['circleb42'];}?>"></td>
                <td><input type="text" name="circlec42" class="custom-input" value="<?php if(isset($_REQUEST['circlec42'])){ echo $_REQUEST['circlec42'];}?>"></td>
                <td><input type="text" name="circled42" class="custom-input" value="<?php if(isset($_REQUEST['circled42'])){ echo $_REQUEST['circled42'];}?>"></td>
                <td><input type="text" name="circlee42" class="custom-input" value="<?php if(isset($_REQUEST['circlee42'])){ echo $_REQUEST['circlee42'];}?>"></td>
                <td><input type="text" name="circlef42" class="custom-input" value="<?php if(isset($_REQUEST['circlef42'])){ echo $_REQUEST['circlef42'];}?>"></td>
                <td><input type="text" name="circleg42" class="custom-input" value="<?php if(isset($_REQUEST['circleg42'])){ echo $_REQUEST['circleg42'];}?>"></td>
                <td><input type="text" name="circleh42" class="custom-input" value="<?php if(isset($_REQUEST['circleh42'])){ echo $_REQUEST['circleh42'];}?>"></td>
                <td><input type="text" name="circlei42" class="custom-input" value="<?php if(isset($_REQUEST['circlei42'])){ echo $_REQUEST['circlei42'];}?>"></td>
                <td><input type="text" name="circlej42" class="custom-input" value="<?php if(isset($_REQUEST['circlej42'])){ echo $_REQUEST['circlej42'];}?>"></td>
                <td><input type="text" name="circlek42" class="custom-input" value="<?php if(isset($_REQUEST['circlek42'])){ echo $_REQUEST['circlek42'];}?>"></td>
                <td><input type="text" name="circlel42" class="custom-input" value="<?php if(isset($_REQUEST['circlel42'])){ echo $_REQUEST['circlel42'];}?>"></td>
                <td><input type="text" name="circlem42" class="custom-input" value="<?php if(isset($_REQUEST['circlem42'])){ echo $_REQUEST['circlem42'];}?>"></td>
                <td><input type="text" name="circlen42" class="custom-input" value="<?php if(isset($_REQUEST['circlen42'])){ echo $_REQUEST['circlen42'];}?>"></td>
                <td><input type="text" name="circleo42" class="custom-input" value="<?php if(isset($_REQUEST['circleo42'])){ echo $_REQUEST['circleo42'];}?>"></td>
                <td><input type="text" name="circlep42" class="custom-input" value="<?php if(isset($_REQUEST['circlep42'])){ echo $_REQUEST['circlep42'];}?>"></td>
                <td><input type="text" name="circleq42" class="custom-input" readonly value="<?php if(isset($circleq42)){ echo $circleq42;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyOne">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">43</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb43" class="custom-input" value="<?php if(isset($_REQUEST['circleb43'])){ echo $_REQUEST['circleb43'];}?>"></td>
                <td><input type="text" name="circlec43" class="custom-input" value="<?php if(isset($_REQUEST['circlec43'])){ echo $_REQUEST['circlec43'];}?>"></td>
                <td><input type="text" name="circled43" class="custom-input" value="<?php if(isset($_REQUEST['circled43'])){ echo $_REQUEST['circled43'];}?>"></td>
                <td><input type="text" name="circlee43" class="custom-input" value="<?php if(isset($_REQUEST['circlee43'])){ echo $_REQUEST['circlee43'];}?>"></td>
                <td><input type="text" name="circlef43" class="custom-input" value="<?php if(isset($_REQUEST['circlef43'])){ echo $_REQUEST['circlef43'];}?>"></td>
                <td><input type="text" name="circleg43" class="custom-input" value="<?php if(isset($_REQUEST['circleg43'])){ echo $_REQUEST['circleg43'];}?>"></td>
                <td><input type="text" name="circleh43" class="custom-input" value="<?php if(isset($_REQUEST['circleh43'])){ echo $_REQUEST['circleh43'];}?>"></td>
                <td><input type="text" name="circlei43" class="custom-input" value="<?php if(isset($_REQUEST['circlei43'])){ echo $_REQUEST['circlei43'];}?>"></td>
                <td><input type="text" name="circlej43" class="custom-input" value="<?php if(isset($_REQUEST['circlej43'])){ echo $_REQUEST['circlej43'];}?>"></td>
                <td><input type="text" name="circlek43" class="custom-input" value="<?php if(isset($_REQUEST['circlek43'])){ echo $_REQUEST['circlek43'];}?>"></td>
                <td><input type="text" name="circlel43" class="custom-input" value="<?php if(isset($_REQUEST['circlel43'])){ echo $_REQUEST['circlel43'];}?>"></td>
                <td><input type="text" name="circlem43" class="custom-input" value="<?php if(isset($_REQUEST['circlem43'])){ echo $_REQUEST['circlem43'];}?>"></td>
                <td><input type="text" name="circlen43" class="custom-input" value="<?php if(isset($_REQUEST['circlen43'])){ echo $_REQUEST['circlen43'];}?>"></td>
                <td><input type="text" name="circleo43" class="custom-input" value="<?php if(isset($_REQUEST['circleo43'])){ echo $_REQUEST['circleo43'];}?>"></td>
                <td><input type="text" name="circlep43" class="custom-input" value="<?php if(isset($_REQUEST['circlep43'])){ echo $_REQUEST['circlep43'];}?>"></td>
                <td><input type="text" name="circleq43" class="custom-input" readonly value="<?php if(isset($circleq43)){ echo $circleq43;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="circleTableBodyTwo">
            <!-- <td style="position: sticky; left:0;  background: #ECECEC;">44</td> -->
                <td style="text-align: center;position:sticky;left:0; background: #ECECEC;"></td>
                <td><input type="text" name="circleb44" class="custom-input" value="<?php if(isset($_REQUEST['circleb44'])){ echo $_REQUEST['circleb44'];}?>"></td>
                <td><input type="text" name="circlec44" class="custom-input" value="<?php if(isset($_REQUEST['circlec44'])){ echo $_REQUEST['circlec44'];}?>"></td>
                <td><input type="text" name="circled44" class="custom-input" value="<?php if(isset($_REQUEST['circled44'])){ echo $_REQUEST['circled44'];}?>"></td>
                <td><input type="text" name="circlee44" class="custom-input" value="<?php if(isset($_REQUEST['circlee44'])){ echo $_REQUEST['circlee44'];}?>"></td>
                <td><input type="text" name="circlef44" class="custom-input" value="<?php if(isset($_REQUEST['circlef44'])){ echo $_REQUEST['circlef44'];}?>"></td>
                <td><input type="text" name="circleg44" class="custom-input" value="<?php if(isset($_REQUEST['circleg44'])){ echo $_REQUEST['circleg44'];}?>"></td>
                <td><input type="text" name="circleh44" class="custom-input" value="<?php if(isset($_REQUEST['circleh44'])){ echo $_REQUEST['circleh44'];}?>"></td>
                <td><input type="text" name="circlei44" class="custom-input" value="<?php if(isset($_REQUEST['circlei44'])){ echo $_REQUEST['circlei44'];}?>"></td>
                <td><input type="text" name="circlej44" class="custom-input" value="<?php if(isset($_REQUEST['circlej44'])){ echo $_REQUEST['circlej44'];}?>"></td>
                <td><input type="text" name="circlek44" class="custom-input" value="<?php if(isset($_REQUEST['circlek44'])){ echo $_REQUEST['circlek44'];}?>"></td>
                <td><input type="text" name="circlel44" class="custom-input" value="<?php if(isset($_REQUEST['circlel44'])){ echo $_REQUEST['circlel44'];}?>"></td>
                <td><input type="text" name="circlem44" class="custom-input" value="<?php if(isset($_REQUEST['circlem44'])){ echo $_REQUEST['circlem44'];}?>"></td>
                <td><input type="text" name="circlen44" class="custom-input" value="<?php if(isset($_REQUEST['circlen44'])){ echo $_REQUEST['circlen44'];}?>"></td>
                <td><input type="text" name="circleo44" class="custom-input" value="<?php if(isset($_REQUEST['circleo44'])){ echo $_REQUEST['circleo44'];}?>"></td>
                <td><input type="text" name="circlep44" class="custom-input" value="<?php if(isset($_REQUEST['circlep44'])){ echo $_REQUEST['circlep44'];}?>"></td>
                <td><input type="text" name="circleq44" class="custom-input" readonly value="<?php if(isset($circleq44)){ echo $circleq44;}else{ echo 0 ; }?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    </table>
        <input type="submit" name="circlesubmit" value='Refresh' class="circlesubmit">
    </form>
    </div>
</body>
</html>