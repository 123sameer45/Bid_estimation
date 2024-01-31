<?php require "navbar.html.php";

// Retrieve results from session or temporary storage
if (isset($_REQUEST['estimate'])) {
    $estimated1 = isset($_SESSION['budgete44']) ? $_SESSION['budgete44'] : '';
    $estimatei1 = isset($_SESSION['jobinfod6']) ? $_SESSION['jobinfod6'] : '';

    $estimatec2 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '';
    $estimatej2 = isset($_SESSION['jobinfoe18']) ? $_SESSION['jobinfoe18'] : '';

    $estimatec3 = isset($_SESSION['jobinfoe14']) ? $_SESSION['jobinfoe14'] : '';
    $estimatee3 = isset($_SESSION['jobinfoh13']) ? $_SESSION['jobinfoh13'] : '';
    $estimatef3 = isset($_SESSION['jobinfoi13']) ? $_SESSION['jobinfoi13'] : '';
    $estimatej3 = isset($_SESSION['jobinfoe19']) ? ($_SESSION['jobinfoe19'] == 0 ? '' : $_SESSION['jobinfoe19']) : '';

    $estimatec4 = isset($_SESSION['jobinfoe15']) ? $_SESSION['jobinfoe15'] : '';
    $estimatee4 = isset($_SESSION['jobinfoh14']) ? $_SESSION['jobinfoh14'] : '';
    $estimatef4 = isset($_SESSION['jobinfoi14']) ? $_SESSION['jobinfoi14'] : '';
    $estimatej4 = isset($_SESSION['jobinfoe20']) ? ($_SESSION['jobinfoe20'] == 0 ? '' : $_SESSION['jobinfoe20']) : '';

    $estimatec5 = isset($_SESSION['jobinfoe16']) ? $_SESSION['jobinfoe16'] : '';
    $estimatee5 = isset($_SESSION['jobinfoh15']) ? $_SESSION['jobinfoh15'] : '';
    $estimatej5 = isset($_SESSION['jobinfoe21']) ? $_SESSION['jobinfoe21'] : '';

    $estimatec6 = isset($_SESSION['jobinfoe17']) ? $_SESSION['jobinfoe17'] : '';
    $estimatee6 = isset($_SESSION['jobinfoh16']) ? $_SESSION['jobinfoh16'] : '';
    $estimatej6 = isset($_SESSION['jobinfoe22']) ? $_SESSION['jobinfoe22'] : '';

    $estimated8 = floatval($estimatee3) + floatval($estimatef3);
    $estimatei8 = floatval($estimatee5) * floatval($_REQUEST['estimatef8']);

    $estimated9 = floatval($estimatee4) + floatval($estimatef4);
    $estimatei9 = floatval($estimated9) * floatval($_REQUEST['estimatef9']);

    $estimated10 = floatval($estimatee4) + floatval($estimatef4);
    $estimatef10 = 0;
    if ($estimatee6 == '1') {
        $estimatef10 = 100;
    } else {
        $estimatef10 = 130;
    }
    $estimatei10 = floatval($estimated10) * floatval($estimatef10);


    $estimateh11 = floatval($_REQUEST['estimated11']) * floatval($_REQUEST['estimatee11']);
    $estimatei11 = floatval($_REQUEST['estimated11']) * floatval($_REQUEST['estimatef11']);

    $estimateh12 = floatval($_REQUEST['estimated12']) * floatval($_REQUEST['estimatee12']);
    $estimatei12 = floatval($_REQUEST['estimated12']) * floatval($_REQUEST['estimatef12']);

    $estimatei13 = floatval($_REQUEST['estimated13']) * floatval($_REQUEST['estimatef13']);
    $estimatei14 = floatval($_REQUEST['estimated14']) * floatval($_REQUEST['estimatef14']);

    $estimateh15 = floatval($_REQUEST['estimated15']) * floatval($_REQUEST['estimatee15']);
    $estimatei15 = floatval($_REQUEST['estimated15']) * floatval($_REQUEST['estimatef15']);

    $estimateh16 = floatval($_REQUEST['estimated16']) * floatval($_REQUEST['estimatee16']);

    $estimateh17 = floatval($_REQUEST['estimated17']) * floatval($_REQUEST['estimatee17']);
    $estimatei17 = floatval($_REQUEST['estimated17']) * floatval($_REQUEST['estimatef17']);

    $estimated18 = floatval($_REQUEST['estimated17']);
    $estimateh18 = floatval($_REQUEST['estimated18']) * floatval($_REQUEST['estimatee18']);
    $estimatei18 = floatval($_REQUEST['estimated18']) * floatval($_REQUEST['estimatef18']);

    $estimateh19 = floatval($_REQUEST['estimated19']) * floatval($_REQUEST['estimatee19']);
    $estimatei19 = floatval($_REQUEST['estimated19']) * floatval($_REQUEST['estimatef19']);

    $estimateh20 = floatval($_REQUEST['estimated20']) * floatval($_REQUEST['estimatee20']);
    $estimatei20 = floatval($_REQUEST['estimated20']) * floatval($_REQUEST['estimatef20']);

    $estimateh21 = floatval($_REQUEST['estimated21']) * floatval($_REQUEST['estimatee21']);
    $estimatei21 = floatval($_REQUEST['estimated21']) * floatval($_REQUEST['estimatef22']);

    $estimateh22 = floatval($_REQUEST['estimated22']) * floatval($_REQUEST['estimatee22']);
    $estimatei22 = floatval($_REQUEST['estimated22']) * floatval($_REQUEST['estimatef22']);

    $estimateh23 = floatval($_REQUEST['estimated23']) * floatval($_REQUEST['estimatee23']);
    $estimatei23 = floatval($_REQUEST['estimated23']) * floatval($_REQUEST['estimatef23']);

    $estimatei24 = floatval($_REQUEST['estimated24']) * floatval($_REQUEST['estimatef24']);
    $estimatep3 = $_REQUEST['estimatep3'];

    $estimatel24 = '';
    if ($estimatep3 == "YES") {
        $estimatel24 = "Ask Gus to adjust pricing";
    } else {
        $estimatel24 = '';
    }

    $estimatei25 = floatval($_REQUEST['estimated25']) * floatval($_REQUEST['estimatef25']);

    $estimateh26 = floatval($_REQUEST['estimated26']) * floatval($_REQUEST['estimatee26']);
    $estimatei26 = floatval($_REQUEST['estimated26']) * floatval($_REQUEST['estimatef26']);

    $estimateh27 = floatval($_REQUEST['estimated27']) * floatval($_REQUEST['estimatee27']);
    $estimatei27 = floatval($_REQUEST['estimated27']) * floatval($_REQUEST['estimatef27']);

    $estimatei29 = floatval($_REQUEST['estimated29']) * floatval($_REQUEST['estimatef29']);

    $estimatei30 = floatval($_REQUEST['estimated30']) * floatval($_REQUEST['estimatef30']);

    $estimatei31 = floatval($_REQUEST['estimated31']) * floatval($_REQUEST['estimatef31']);

    $estimateh32 = floatval($_REQUEST['estimated32']) * floatval($_REQUEST['estimatee32']);
    $estimatei32 = floatval($_REQUEST['estimated32']) * floatval($_REQUEST['estimatef32']);

    $estimatei34 = floatval($_REQUEST['estimated34']) * floatval($_REQUEST['estimatef34']);

    $estimated35 = floatval($_REQUEST['estimated34']);
    $estimateh35 = floatval($_REQUEST['estimated35']) * floatval($_REQUEST['estimatee35']);

    $estimateh36 = floatval($_REQUEST['estimated36']) * floatval($_REQUEST['estimatee36']);

    $estimatei37 = floatval($_REQUEST['estimated37']) * floatval($_REQUEST['estimatef37']);

    $estimateh38 = floatval($_REQUEST['estimatee38']) * floatval($_REQUEST['estimated38']);
    $estimatei38 = floatval($_REQUEST['estimated38']) * floatval($_REQUEST['estimatef38']);

    $estimateh39 = floatval($_REQUEST['estimatee39']) * floatval($_REQUEST['estimated39']);
    $estimatei39 = floatval($_REQUEST['estimated39']) * floatval($_REQUEST['estimatef38']);

    $estimateh40 = floatval($_REQUEST['estimated40']) * floatval($_REQUEST['estimatee40']);
    $estimatei40 = floatval($_REQUEST['estimated40']) * floatval($_REQUEST['estimatef40']);

    $estimatei41 = floatval($_REQUEST['estimated41']) * floatval($_REQUEST['estimatef41']);

    $estimateh42 = floatval($_REQUEST['estimated42']) * floatval($_REQUEST['estimatee42']);
    $estimatei42 = floatval($_REQUEST['estimated42']) * floatval($_REQUEST['estimatef42']);


    $estimateh44 = floatval(isset($_SESSION['tosk7']) ? $_SESSION['tosk7'] : '-');
    $estimatei44 = isset($_SESSION['tosl7']) ? $_SESSION['tosl7'] : '-';

    $estimateh45 = floatval(isset($_SESSION['tosb7']) ? $_SESSION['tosc7'] : '-');
    $estimatei45 = isset($_SESSION['tosl7']) ? $_SESSION['tosl7'] : '-';

    $estimatec46 = isset($_SESSION['tosd7']) ? $_SESSION['tosd7'] : '-';
    $estimateq47 = floatval(isset($_SESSION['jobinfoe28']) ? $_SESSION['jobinfoe28'] : '-');
    $estimateq48 = round($estimateq47 / floatval($_REQUEST['estimateq46']), 2);
    $estimaten46 = round($estimateq48, 2);
    $estimateh46 = floatval($estimatec46) * floatval($_REQUEST['estimatel46']) * floatval($_REQUEST['estimaten46']);
    $estimatei46 = floatval($estimatec46) * floatval($_REQUEST['estimatem46']) * floatval($_REQUEST['estimateo46']);
    $estimatel46 = round((1.3 * 1.07 * 1.1), 2);
    $estimatem46 = round((3.5 * 1.1 * 1.03 * 1.02), 2);
    $estimateo46 = 1 + (floatval($_REQUEST['estimateo45']) / 100);

    $estimatec47 = isset($_SESSION['tosf7']) ? $_SESSION['tosf7'] : '-';
    $estimateh47 = floatval($estimatec47) * floatval($_REQUEST['estimatel47']) * floatval($_REQUEST['estimaten47']);
    $estimatei47 = floatval($estimatec47) * floatval($_REQUEST['estimatem47']) * floatval($_REQUEST['estimateo47']);
    $estimatel47 = round((0.7 * 1.05 * 1.07 * 1.05 * 1.05 * 1.1 * 1.06 * 1.05 * 1.07 * 1.1), 2);
    $estimatem47 = round((1.7085 * 0.4 * 1.05 * 1.1 * 1.03 * 1.02), 2);
    $estimaten47 = round($estimateq48, 2);
    $estimateo47 = 1 + (floatval($_REQUEST['estimateo45']) / 100);

    $estimatel48 = round((1.1 * 1.05 * 1.07 * 1.05 * 1.05 * 1.1 * 1.06 * 1.05 * 1.07 * 1.1), 2);
    $estimatem48 = round((1.7085 * 0.4 * 1.05 * 1.1 * 1.03 * 1.02), 2);
    $estimaten48 = round($estimateq48, 2);
    $estimateo48 = 1 + (floatval($_REQUEST['estimateo45']) / 100);
    $estimateh48 = round(floatval($_REQUEST['estimatec48']) * $estimatel48 * $estimaten48, 2);
    $estimatei48 = round(floatval($_REQUEST['estimatec48']) * $estimatem48 * $estimateo48, 2);

    $estimatec49 = floatval(isset($_SESSION['tosh7']) ? $_SESSION['tosh7'] : '-');
    $estimatel49 = round((1.55 * 1.05 * 1.07 * 1.05 * 1.05 * 1.1 * 1.06 * 1.05 * 1.07 * 1.1), 2);
    $estimaten49 = round($estimateq48, 2);
    $estimateh49 = $estimatec49 * $estimatel49 * $estimaten49;
    $estimatem49 = round((1.7085 * 0.4 * 1.05 * 1.1 * 1.03 * 1.02), 2);
    $estimateo49 = 1 + (floatval($_REQUEST['estimateo45']) / 100);
    $estimatei49 = $estimatec49 * $estimatem49 * $estimateo49;

    $estimatec50 = floatval(isset($_SESSION['tosj7']) ? $_SESSION['tosj7'] : '-');
    $estimateh50 = $estimatec50 * $estimatel49 * $estimaten49;
    $estimatei50 = $estimatec50 * $estimatem49 * $estimateo49;

    $estimateh51 = isset($_SESSION['tosm7']) ? $_SESSION['tosm7'] : '-';
    $estimatei51 = isset($_SESSION['tosn7']) ? $_SESSION['tosn7'] : '-';

    $estimateh52 = isset($_SESSION['toso7']) ? $_SESSION['toso7'] : '-';
    $estimatei52 = isset($_SESSION['tosp7']) ? $_SESSION['tosp7'] : '-';

    $estimateh53 = round(floatval($_REQUEST['estimated53']) / 400, 2);

    $estimated55 = 0;
    if ($estimatep4 = "YES") {
        $estimated55 = 1;
    } else {
        $estimated55 = 0;
    }
    $estimatei55 = $estimated55 * floatval($_REQUEST['estimatef55']);

    $estimatei60 = floatval($_REQUEST['estimated60']) * floatval($_REQUEST['estimatef60']) * $estimatem46 * $estimateo46;

    $estimatei61 = floatval($_REQUEST['estimated61']) * $estimatem46 * $estimateo46;

    $estimateh62 = floatval($_REQUEST['estimated62']) * floatval($_REQUEST['estimatee62']);
    $estimatei62 = floatval($_REQUEST['estimated62']) * floatval($_REQUEST['estimatef62']);

    $estimated63 = round(floatval(isset($_SESSION['tosr5']) ? $_SESSION['tosr5'] : '-'), 2);
    $estimateh63 = ($estimated63 / 8) * floatval($_REQUEST['estimatee63']);
    $estimatei63 = $estimateh63;

    $estimated64 = ceil(floatval(isset($_SESSION['toss5']) ? $_SESSION['toss5'] : '-') / 6);
    $estimateh64 = $estimated64 * floatval($_REQUEST['estimatee64']);

    $estimated65 = ceil(floatval(isset($_SESSION['tosv6']) ? $_SESSION['tosv6'] : '-'));
    $estimateh65 = $estimated65 * floatval($_REQUEST['estimatee65']);
    $estimatei65 = $estimated65 * floatval($_REQUEST['estimatef65']);

    $estimatei66 = floatval($_REQUEST['estimated66']) * floatval($_REQUEST['estimatef66']);

    $estimated67 = floatval($_REQUEST['estimated67']);
    $estimateh67 = 0;
    if ($estimated67 == 1) {
        $estimateh67 = 560;
    } else {
        $estimateh67 = 0;
    }

    $estimated71 = isset($_SESSION['jobinfoe24']) ? $_SESSION['jobinfoe24'] : '-';
    $estimatei71 = floatval($_REQUEST['estimatef71']) * $estimated71 * floatval($_REQUEST['estimatee71']);

    $estimatei72 = floatval($_REQUEST['estimatef72']) * floatval($_REQUEST['estimated72']);

    $estimatei73 = floatval($_REQUEST['estimatee73']) * floatval($_REQUEST['estimatef73']) * 1;

    $estimatei74 = floatval($_REQUEST['estimatee74']) * floatval($_REQUEST['estimatef74']) * 1.5;

    $estimated78 = floatval($_REQUEST['estimated78']);
    $estimatec78 = floatval($_REQUEST['estimatec78']);
    $estimatei78 = 0;
    if ($estimated78 = 1) {
        $estimatei78 = $estimatec78;
    } else {
        $estimatei78 = 0;
    }


    $estimated79 = floatval($_REQUEST['estimated79']);

    $estimatei79 = 0;
    if ($estimated79 = 1) {
        $estimatei79 = floatval($_REQUEST['estimatec79']);
    } else {
        $estimatei79 = 0;
    }

    $estimated80 = $estimated8;
    $estimatei80 = $estimated80 * floatval($_REQUEST['estimatef80']);

    $estimated81 = floatval($_REQUEST['estimated14']);
    $estimatei81 = $estimated81 * floatval($_REQUEST['estimatef81']);

    $estimated84 = floatval($_REQUEST['estimated84']);
    $estimated82 = $estimated84;
    $estimatei82 = $estimated82 * floatval($_REQUEST['estimatef82']);
    $estimatei83 = floatval($_REQUEST['estimated83']) * floatval($_REQUEST['estimatef83']);

    $estimatei84 = round(array_sum([$estimatei51, $estimatei52, $estimatei63, $estimatei18, $estimatei44, $estimatei45, $estimatei46, $estimatei47, $estimatei48, $estimatei49]) * $estimated84, 2);
    $estimatej98 = floatval($_REQUEST['estimatej98']);
    $estimatec85 = $estimatej98 / 1000000;
    $estimatec85 = floatval($_REQUEST['estimatec85']);
    $estimated85 = 0;
    if ($_REQUEST['estimatep5'] == 'YES') {
        $estimated85 = $estimatec85;
    } else {
        $estimated85 = 0;
    }
    $estimatei85 = $estimated85 * 5000;

    $estimatei86 = floatval($_REQUEST['estimated86']) * floatval($_REQUEST['estimatef86']);
    $estimatei87 = floatval($_REQUEST['estimated87']) * floatval($_REQUEST['estimatef87']);

    $_SESSION['estimatea59'] = $_REQUEST['estimatea59'];

    $_SESSION['estimateg8'] = floatval($_REQUEST['estimateg8']);
    $_SESSION['estimateg13'] = floatval($_REQUEST['estimateg13']);
    $_SESSION['estimateg17'] = floatval($_REQUEST['estimateg17']);
    $_SESSION['estimateg14'] = floatval($_REQUEST['estimateg14']);
    $_SESSION['estimateg30'] = floatval($_REQUEST['estimateg30']);
    $_SESSION['estimateg34'] = floatval($_REQUEST['estimateg34']);
    $_SESSION['estimateg39'] = floatval($_REQUEST['estimateg39']);
    $_SESSION['estimateg40'] = floatval($_REQUEST['estimateg40']);
    $_SESSION['estimateg41'] = floatval($_REQUEST['estimateg41']);
    $_SESSION['estimateg24'] = floatval($_REQUEST['estimateg24']);
    $_SESSION['estimateg29'] = floatval($_REQUEST['estimateg29']);
    $_SESSION['estimateg31'] = floatval($_REQUEST['estimateg31']);
    $_SESSION['estimateg37'] = floatval($_REQUEST['estimateg37']);
    $_SESSION['estimateg25'] = floatval($_REQUEST['estimateg25']);
    $_SESSION['estimateg26'] = floatval($_REQUEST['estimateg26']);
    $_SESSION['estimateg27'] = floatval($_REQUEST['estimateg27']);
    $_SESSION['estimateg69'] = floatval($_REQUEST['estimateg69']);

    $_SESSION['estimatej69'] = floatval($_REQUEST['estimatej69']);
    $_SESSION['estimatej56'] = floatval($_REQUEST['estimatej56']);
    $_SESSION['estimatej57'] = floatval($_REQUEST['estimatej57']);
    $_SESSION['estimatej58'] = floatval($_REQUEST['estimatej58']);
    $_SESSION['estimatej28'] = floatval($_REQUEST['estimatej28']);
    $_SESSION['estimatej59'] = floatval($_REQUEST['estimatej59']);
    $_SESSION['estimatej70'] = floatval($_REQUEST['estimatej70']);
    $_SESSION['estimatej76'] = floatval($_REQUEST['estimatej76']);
    $_SESSION['estimatej77'] = floatval($_REQUEST['estimatej77']);
    $_SESSION['estimatej98'] = floatval($_REQUEST['estimatej98']);
    $_SESSION['estimatej93'] = floatval($_REQUEST['estimatej93']);


    $_SESSION['estimaten8'] = $_REQUEST['estimaten8'];
    $_SESSION['estimaten13'] = $_REQUEST['estimaten13'];
    $_SESSION['estimaten17'] = $_REQUEST['estimaten17'];
    $_SESSION['estimaten34'] = $_REQUEST['estimaten34'];
    $_SESSION['estimaten40'] = $_REQUEST['estimaten40'];
    $_SESSION['estimaten24'] = $_REQUEST['estimaten24'];
    $_SESSION['estimaten29'] = $_REQUEST['estimaten29'];
    $_SESSION['estimaten31'] = $_REQUEST['estimaten31'];
    $_SESSION['estimaten25'] = $_REQUEST['estimaten25'];

    $_SESSION['estimatem69'] = $_REQUEST['estimatem69'];
    $_SESSION['estimatem56'] = $_REQUEST['estimatem56'];
    $_SESSION['estimatem57'] = $_REQUEST['estimatem57'];
    $_SESSION['estimatem28'] = $_REQUEST['estimatem28'];
    $_SESSION['estimatem59'] = $_REQUEST['estimatem59'];

    $_SESSION['estimatej90'] = $_REQUEST['estimatej90'];
    $_SESSION['estimatej89'] = $_REQUEST['estimatej89'];


    $_SESSION['estimatej75'] = floatval($_REQUEST['estimatej75']);
    $_SESSION['estimatei71'] = floatval($_REQUEST['estimatei71']);
    $_SESSION['estimatei72'] = floatval($_REQUEST['estimatei72']);
    $_SESSION['estimatei73'] = floatval($_REQUEST['estimatei73']);
    $_SESSION['estimatei74'] = $estimatei74;
    $_SESSION['estimatei78'] = $estimatei78;
    $_SESSION['estimatei91'] = floatval($_REQUEST['estimatei91']);

    $_SESSION['estimateh11'] = $estimateh11;
    $_SESSION['estimateh12'] = $estimateh12;
    $_SESSION['estimateh13'] = floatval($_REQUEST['estimateh13']);
    $_SESSION['estimateh14'] = floatval($_REQUEST['estimateh14']);
    $_SESSION['estimateh15'] = $estimateh15;
    $_SESSION['estimateh16'] = $estimateh16;
    $_SESSION['estimateh17'] = $estimateh17;
    $_SESSION['estimateh18'] = $estimateh18;
    $_SESSION['estimateh19'] = $estimateh19;
    $_SESSION['estimateh20'] = $estimateh20;
    $_SESSION['estimateh21'] = $estimateh21;
    $_SESSION['estimateh22'] = $estimateh22;
    $_SESSION['estimateh23'] = $estimateh23;
    $_SESSION['estimateh24'] = floatval($_REQUEST['estimateh24']);
    $_SESSION['estimateh25'] = floatval($_REQUEST['estimateh25']);
    $_SESSION['estimateh26'] = $estimateh26;
    $_SESSION['estimateh27'] = $estimateh27;
    $_SESSION['estimateh28'] = floatval($_REQUEST['estimateh28']);
    $_SESSION['estimateh29'] = floatval($_REQUEST['estimateh29']);
    $_SESSION['estimateh30'] = floatval($_REQUEST['estimateh30']);
    $_SESSION['estimateh31'] = floatval($_REQUEST['estimateh31']);
    $_SESSION['estimateh32'] = $estimateh32;
    $_SESSION['estimateh34'] = floatval($_REQUEST['estimateh34']);
    $_SESSION['estimateh35'] = $estimateh35;
    $_SESSION['estimateh36'] = $estimateh36;
    $_SESSION['estimateh37'] = floatval($_REQUEST['estimateh37']);
    $_SESSION['estimateh38'] = $estimateh38;
    $_SESSION['estimateh39'] = $estimateh39;
    $_SESSION['estimateh40'] = $estimateh40;
    $_SESSION['estimateh41'] = floatval($_REQUEST['estimateh41']);
    $_SESSION['estimateh42'] = $estimateh42;
    $_SESSION['estimateh44'] = $estimateh44;
    $_SESSION['estimateh45'] = $estimateh45;
    $_SESSION['estimateh46'] = $estimateh46;
    $_SESSION['estimateh47'] = $estimateh47;
    $_SESSION['estimateh48'] = $estimateh48;
    $_SESSION['estimateh49'] = $estimateh49;
    $_SESSION['estimateh50'] = $estimateh50;
    $_SESSION['estimateh51'] = $estimateh51;
    $_SESSION['estimateh52'] = $estimateh52;
    $_SESSION['estimateh53'] = $estimateh53;

    $_SESSION['estimateh60'] = floatval($_REQUEST['estimateh60']);
    $_SESSION['estimateh61'] = floatval($_REQUEST['estimateh61']);
    $_SESSION['estimateh62'] = $estimateh62;
    $_SESSION['estimateh63'] = $estimateh63;
    $_SESSION['estimateh64'] = $estimateh64;
    $_SESSION['estimateh65'] = $estimateh65;
    $_SESSION['estimateh66'] = floatval($_REQUEST['estimateh66']);
    $_SESSION['estimateh67'] = $estimateh67;
    $_SESSION['estimateh69'] = floatval($_REQUEST['estimateh69']);

    $estimatej91 = array_sum([
        floatval($_REQUEST['estimatej8']),
        floatval($_REQUEST['estimatej9']),
        floatval($_REQUEST['estimatej10']),
        floatval($_REQUEST['estimatej11']),
        floatval($_REQUEST['estimatej12']),
        floatval($_REQUEST['estimatej13']),
        floatval($_REQUEST['estimatej14']),
        floatval($_REQUEST['estimatej15']),
        floatval($_REQUEST['estimatej16']),
        floatval($_REQUEST['estimatej17']),
        floatval($_REQUEST['estimatej18']),
        floatval($_REQUEST['estimatej19']),
        floatval($_REQUEST['estimatej20']),
        floatval($_REQUEST['estimatej21']),
        floatval($_REQUEST['estimatej22']),
        floatval($_REQUEST['estimatej23']),
        floatval($_REQUEST['estimatej24']),
        floatval($_REQUEST['estimatej25']),
        floatval($_REQUEST['estimatej26']),
        floatval($_REQUEST['estimatej27']),
        floatval($_REQUEST['estimatej28']),
        floatval($_REQUEST['estimatej29']),
        floatval($_REQUEST['estimatej30']),
        floatval($_REQUEST['estimatej31']),
        floatval($_REQUEST['estimatej32']),
        floatval($_REQUEST['estimatej34']),
        floatval($_REQUEST['estimatej35']),
        floatval($_REQUEST['estimatej36']),
        floatval($_REQUEST['estimatej37']),
        floatval($_REQUEST['estimatej38']),
        floatval($_REQUEST['estimatej39']),
        floatval($_REQUEST['estimatej40']),
        floatval($_REQUEST['estimatej41']),
        floatval($_REQUEST['estimatej42']),
        floatval($_REQUEST['estimatej44']),
        floatval($_REQUEST['estimatej45']),
        floatval($_REQUEST['estimatej46']),
        floatval($_REQUEST['estimatej47']),
        floatval($_REQUEST['estimatej48']),
        floatval($_REQUEST['estimatej49']),
        floatval($_REQUEST['estimatej50']),
        floatval($_REQUEST['estimatej51']),
        floatval($_REQUEST['estimatej52']),
        floatval($_REQUEST['estimatej53']),
        floatval($_REQUEST['estimatej55']),
        floatval($_REQUEST['estimatej56']),
        floatval($_REQUEST['estimatej57']),
        floatval($_REQUEST['estimatej58']),
        floatval($_REQUEST['estimatej59']),
        floatval($_REQUEST['estimatej60']),
        floatval($_REQUEST['estimatej61']),
        floatval($_REQUEST['estimatej62']),
        floatval($_REQUEST['estimatej63']),
        floatval($_REQUEST['estimatej64']),
        floatval($_REQUEST['estimatej65']),
        floatval($_REQUEST['estimatej66']),
        floatval($_REQUEST['estimatej67']),
        floatval($_REQUEST['estimatej69']),
        floatval($_REQUEST['estimatej70']),
        floatval($_REQUEST['estimatej71']),
        floatval($_REQUEST['estimatej72']),
        floatval($_REQUEST['estimatej73']),
        floatval($_REQUEST['estimatej74']),
        floatval($_REQUEST['estimatej75']),
        floatval($_REQUEST['estimatej76']),
        floatval($_REQUEST['estimatej77']),
        floatval($_REQUEST['estimatej78']),
        floatval($_REQUEST['estimatej79']),
        floatval($_REQUEST['estimatej80']),
        floatval($_REQUEST['estimatej81']),
        floatval($_REQUEST['estimatej82']),
        floatval($_REQUEST['estimatej83']),
        floatval($_REQUEST['estimatej84']),
        floatval($_REQUEST['estimatej85']),
        floatval($_REQUEST['estimatej86']),
        floatval($_REQUEST['estimatej87']),
        floatval($_REQUEST['estimatej88']),
        floatval($_REQUEST['estimatej89']),
        floatval($_REQUEST['estimatej90'])
    ]) * (1 + (floatval($_REQUEST['estimated91']) / 100));

    $estimatej104 = floatval($_REQUEST['estimatej104']);
    $estimatej95 = $estimatej91 + $estimatej104;
    $estimatep6 = $_REQUEST['estimatep6'];
    $estimatej97 = floatval($_REQUEST['estimateg97']) + floatval($_REQUEST['estimateg98']) + $estimatej95;
    $estimatel90 = 0;
    if ($estimatep6 === 'yes' || $estimatep6 === 'Yes' || $estimatep6 === 'YES') {
        $estimatel90 = $estimatej97 * 0.018;
    } else {
        $estimatel90 = "NO BOND NEEDED";
    }

    $estimateg91 = array_sum([
        floatval($_REQUEST['estimateg8']),
        floatval($_REQUEST['estimateg9']),
        floatval($_REQUEST['estimateg10']),
        floatval($_REQUEST['estimateg11']),
        floatval($_REQUEST['estimateg12']),
        floatval($_REQUEST['estimateg13']),
        floatval($_REQUEST['estimateg14']),
        floatval($_REQUEST['estimateg15']),
        floatval($_REQUEST['estimateg16']),
        floatval($_REQUEST['estimateg17']),
        floatval($_REQUEST['estimateg18']),
        floatval($_REQUEST['estimateg19']),
        floatval($_REQUEST['estimateg20']),
        floatval($_REQUEST['estimateg21']),
        floatval($_REQUEST['estimateg22']),
        floatval($_REQUEST['estimateg23']),
        floatval($_REQUEST['estimateg24']),
        floatval($_REQUEST['estimateg25']),
        floatval($_REQUEST['estimateg26']),
        floatval($_REQUEST['estimateg27']),
        floatval($_REQUEST['estimateg28']),
        floatval($_REQUEST['estimateg29']),
        floatval($_REQUEST['estimateg30']),
        floatval($_REQUEST['estimateg31']),
        floatval($_REQUEST['estimateg32']),
        floatval($_REQUEST['estimateg34']),
        floatval($_REQUEST['estimateg35']),
        floatval($_REQUEST['estimateg36']),
        floatval($_REQUEST['estimateg37']),
        floatval($_REQUEST['estimateg38']),
        floatval($_REQUEST['estimateg39']),
        floatval($_REQUEST['estimateg40']),
        floatval($_REQUEST['estimateg41']),
        floatval($_REQUEST['estimateg42']),
        floatval($_REQUEST['estimateg44']),
        floatval($_REQUEST['estimateg45']),
        floatval($_REQUEST['estimateg46']),
        floatval($_REQUEST['estimateg47']),
        floatval($_REQUEST['estimateg48']),
        floatval($_REQUEST['estimateg49']),
        floatval($_REQUEST['estimateg50']),
        floatval($_REQUEST['estimateg51']),
        floatval($_REQUEST['estimateg52']),
        floatval($_REQUEST['estimateg53']),
        floatval($_REQUEST['estimateg55']),
        floatval($_REQUEST['estimateg56']),
        floatval($_REQUEST['estimateg57']),
        floatval($_REQUEST['estimateg58']),
        floatval($_REQUEST['estimateg59']),
        floatval($_REQUEST['estimateg60']),
        floatval($_REQUEST['estimateg61']),
        floatval($_REQUEST['estimateg62']),
        floatval($_REQUEST['estimateg63']),
        floatval($_REQUEST['estimateg64']),
        floatval($_REQUEST['estimateg65']),
        floatval($_REQUEST['estimateg66']),
        floatval($_REQUEST['estimateg67']),
        floatval($_REQUEST['estimateg69']),
        floatval($_REQUEST['estimateg70']),
        floatval($_REQUEST['estimateg71']),
        floatval($_REQUEST['estimateg72']),
        floatval($_REQUEST['estimateg73']),
        floatval($_REQUEST['estimateg74']),
        floatval($_REQUEST['estimateg75']),
        floatval($_REQUEST['estimateg76']),
        floatval($_REQUEST['estimateg77']),
        floatval($_REQUEST['estimateg78']),
        floatval($_REQUEST['estimateg79']),
        floatval($_REQUEST['estimateg80']),
        floatval($_REQUEST['estimateg81']),
        floatval($_REQUEST['estimateg82']),
        floatval($_REQUEST['estimateg83']),
        floatval($_REQUEST['estimateg84']),
        floatval($_REQUEST['estimateg85']),
        floatval($_REQUEST['estimateg86']),
        floatval($_REQUEST['estimateg87']),
        floatval($_REQUEST['estimateg88']),
        floatval($_REQUEST['estimateg89']),
        floatval($_REQUEST['estimateg90'])
    ]);

    $estimateh91 = round(array_sum([
        floatval($_REQUEST['estimateh8']),
        floatval($_REQUEST['estimateh9']),
        floatval($_REQUEST['estimateh10']),
        $estimateh11,
        $estimateh12,
        floatval($_REQUEST['estimateh13']),
        floatval($_REQUEST['estimateh14']),
        $estimateh15,
        $estimateh16,
        $estimateh17,
        $estimateh18,
        $estimateh19,
        $estimateh20,
        $estimateh21,
        $estimateh22,
        $estimateh23,
        floatval($_REQUEST['estimateh24']),
        floatval($_REQUEST['estimateh25']),
        $estimateh26,
        $estimateh27,
        floatval($_REQUEST['estimateh28']),
        floatval($_REQUEST['estimateh29']),
        floatval($_REQUEST['estimateh30']),
        floatval($_REQUEST['estimateh31']),
        $estimateh32,
        floatval($_REQUEST['estimateh34']),
        $estimateh35,
        $estimateh36,
        floatval($_REQUEST['estimateh37']),
        $estimateh38,
        $estimateh39,
        $estimateh40,
        floatval($_REQUEST['estimateh41']),
        $estimateh42,
        $estimateh44,
        $estimateh45,
        $estimateh46,
        $estimateh47,
        $estimateh48,
        $estimateh49,
        $estimateh50,
        $estimateh51,
        $estimateh52,
        $estimateh53,
        floatval($_REQUEST['estimateh55']),
        floatval($_REQUEST['estimateh56']),
        floatval($_REQUEST['estimateh57']),
        floatval($_REQUEST['estimateh58']),
        floatval($_REQUEST['estimateh59']),
        floatval($_REQUEST['estimateh60']),
        floatval($_REQUEST['estimateh61']),
        $estimateh62,
        $estimateh63,
        $estimateh64,
        $estimateh65,
        floatval($_REQUEST['estimateh66']),
        $estimateh67,
        floatval($_REQUEST['estimateh69']),
        floatval($_REQUEST['estimateh70']),
        floatval($_REQUEST['estimateh71']),
        floatval($_REQUEST['estimateh72']),
        floatval($_REQUEST['estimateh73']),
        floatval($_REQUEST['estimateh74']),
        floatval($_REQUEST['estimateh75']),
        floatval($_REQUEST['estimateh76']),
        floatval($_REQUEST['estimateh77']),
        floatval($_REQUEST['estimateh78']),
        floatval($_REQUEST['estimateh79']),
        floatval($_REQUEST['estimateh80']),
        floatval($_REQUEST['estimateh81']),
        floatval($_REQUEST['estimateh82']),
        floatval($_REQUEST['estimateh83']),
        floatval($_REQUEST['estimateh84']),
        floatval($_REQUEST['estimateh85']),
        floatval($_REQUEST['estimateh86']),
        floatval($_REQUEST['estimateh87']),
        floatval($_REQUEST['estimateh88']),
        floatval($_REQUEST['estimateh89']),
        floatval($_REQUEST['estimateh90'])
    ]), 2);

    $estimatei91 = array_sum([
        $estimatei8,
        $estimatei9,
        $estimatei10,
        $estimatei11,
        $estimatei12,
        $estimatei13,
        $estimatei14,
        $estimatei15,
        floatval($_REQUEST['estimatei16']),
        $estimatei17,
        $estimatei18,
        $estimatei19,
        $estimatei20,
        $estimatei21,
        $estimatei22,
        $estimatei23,
        $estimatei24,
        $estimatei25,
        $estimatei26,
        $estimatei27,
        floatval($_REQUEST['estimatei28']),
        $estimatei29,
        $estimatei30,
        $estimatei31,
        $estimatei32,
        $estimatei34,
        floatval($_REQUEST['estimatei35']),
        floatval($_REQUEST['estimatei36']),
        $estimatei37,
        $estimatei38,
        $estimatei39,
        $estimatei40,
        $estimatei41,
        $estimatei42,
        $estimatei44,
        $estimatei45,
        $estimatei46,
        $estimatei47,
        $estimatei48,
        $estimatei49,
        $estimatei50,
        $estimatei51,
        $estimatei52,
        floatval($_REQUEST['estimatei53']),
        $estimatei55,
        floatval($_REQUEST['estimatei56']),
        floatval($_REQUEST['estimatei57']),
        floatval($_REQUEST['estimatei58']),
        floatval($_REQUEST['estimatei59']),
        $estimatei60,
        $estimatei61,
        $estimatei62,
        $estimatei63,
        floatval($_REQUEST['estimatei64']),
        $estimatei65,
        $estimatei66,
        floatval($_REQUEST['estimatei67']),
        floatval($_REQUEST['estimatei69']),
        floatval($_REQUEST['estimatei70']),
        $estimatei71,
        $estimatei72,
        $estimatei73,
        $estimatei74,
        floatval($_REQUEST['estimatei75']),
        floatval($_REQUEST['estimatei76']),
        floatval($_REQUEST['estimatei77']),
        $estimatei78,
        $estimatei79,
        $estimatei80,
        $estimatei81,
        $estimatei82,
        $estimatei83,
        $estimatei84,
        $estimatei85,
        $estimatei86,
        $estimatei87,
        floatval($_REQUEST['estimatei88']),
        floatval($_REQUEST['estimatei89']),
        floatval($_REQUEST['estimatei90'])
    ]);

    $_SESSION['estimatei91'] = $estimatei91;

    $_SESSION['estimatei8'] = $estimatei8;
    $_SESSION['estimatei9'] = $estimatei9;
    $_SESSION['estimatei10'] = $estimatei10;
    $_SESSION['estimatei11'] = $estimatei11;
    $_SESSION['estimatei12'] = $estimatei12;
    $_SESSION['estimatei13'] = $estimatei13;
    $_SESSION['estimatei14'] = $estimatei14;
    $_SESSION['estimatei15'] = $estimatei15;
    $_SESSION['estimatei16'] = floatval($_REQUEST['estimatei16']);
    $_SESSION['estimatei17'] = $estimatei17;
    $_SESSION['estimatei18'] = $estimatei18;
    $_SESSION['estimatei19'] = $estimatei19;
    $_SESSION['estimatei20'] = $estimatei20;
    $_SESSION['estimatei21'] = $estimatei21;
    $_SESSION['estimatei22'] = $estimatei22;
    $_SESSION['estimatei23'] = $estimatei23;
    $_SESSION['estimatei24'] = $estimatei24;
    $_SESSION['estimatei25'] = $estimatei25;
    $_SESSION['estimatei26'] = $estimatei26;
    $_SESSION['estimatei27'] = $estimatei27;
    $_SESSION['estimatei28'] = floatval($_REQUEST['estimatei28']);
    $_SESSION['estimatei29'] = $estimatei29;
    $_SESSION['estimatei30'] = $estimatei30;
    $_SESSION['estimatei31'] = $estimatei31;
    $_SESSION['estimatei32'] = $estimatei32;
    $_SESSION['estimatei34'] = $estimatei34;
    $_SESSION['estimatei35'] = floatval($_REQUEST['estimatei35']);
    $_SESSION['estimatei36'] = floatval($_REQUEST['estimatei36']);
    $_SESSION['estimatei37'] = $estimatei37;
    $_SESSION['estimatei38'] = $estimatei38;
    $_SESSION['estimatei39'] = $estimatei39;
    $_SESSION['estimatei40'] = $estimatei40;
    $_SESSION['estimatei41'] = $estimatei41;
    $_SESSION['estimatei42'] = $estimatei42;
    $_SESSION['estimatei44'] = $estimatei44;
    $_SESSION['estimatei45'] = $estimatei45;
    $_SESSION['estimatei46'] = $estimatei46;
    $_SESSION['estimatei47'] = $estimatei47;
    $_SESSION['estimatei48'] = $estimatei48;
    $_SESSION['estimatei49'] = $estimatei49;
    $_SESSION['estimatei50'] = $estimatei50;
    $_SESSION['estimatei51'] = $estimatei51;
    $_SESSION['estimatei52'] = $estimatei52;
    $_SESSION['estimatei53'] = floatval($_REQUEST['estimatei53']);
    $estimatei55;
    $_SESSION['estimatei56'] = floatval($_REQUEST['estimatei56']);
    $_SESSION['estimatei57'] = floatval($_REQUEST['estimatei57']);
    $_SESSION['estimatei58'] = floatval($_REQUEST['estimatei58']);
    $_SESSION['estimatei59'] = floatval($_REQUEST['estimatei59']);
    $_SESSION['estimatei60'] = $estimatei60;
    $_SESSION['estimatei61'] = $estimatei61;
    $_SESSION['estimatei62'] = $estimatei62;
    $_SESSION['estimatei63'] = $estimatei63;
    $_SESSION['estimatei64'] = floatval($_REQUEST['estimatei64']);
    $_SESSION['estimatei65'] = $estimatei65;
    $_SESSION['estimatei66'] = $estimatei66;
    $_SESSION['estimatei67'] = floatval($_REQUEST['estimatei67']);
    $_SESSION['estimatei69'] = floatval($_REQUEST['estimatei69']);
    $_SESSION['estimatei70'] = floatval($_REQUEST['estimatei70']);
    $_SESSION['estimatei71'] = $estimatei71;
    $_SESSION['estimatei72'] = $estimatei72;
    $_SESSION['estimatei73'] = $estimatei73;
    $_SESSION['estimatei74'] = $estimatei74;
    $_SESSION['estimatei75'] = floatval($_REQUEST['estimatei75']);
    $_SESSION['estimatei76'] = floatval($_REQUEST['estimatei76']);
    $_SESSION['estimatei77'] = floatval($_REQUEST['estimatei77']);
    $_SESSION['estimatei79'] = $estimatei79;
    $_SESSION['estimatei80'] = $estimatei80;
    $_SESSION['estimatei81'] = $estimatei81;
    $_SESSION['estimatei82'] = $estimatei82;
    $_SESSION['estimatei83'] = $estimatei83;
    $_SESSION['estimatei84'] = $estimatei84;
    $_SESSION['estimatei85'] = $estimatei85;
    $_SESSION['estimatei86'] = $estimatei86;
    $_SESSION['estimatei87'] = $estimatei87;
    $_SESSION['estimatei88'] = floatval($_REQUEST['estimatei88']);
    $_SESSION['estimatei89'] = floatval($_REQUEST['estimatei89']);
    $_SESSION['estimatei90'] = floatval($_REQUEST['estimatei90']);

    $estimatej91 = array_sum([
        floatval($_REQUEST['estimatej8']),
        floatval($_REQUEST['estimatej9']),
        floatval($_REQUEST['estimatej10']),
        floatval($_REQUEST['estimatej11']),
        floatval($_REQUEST['estimatej12']),
        floatval($_REQUEST['estimatej13']),
        floatval($_REQUEST['estimatej14']),
        floatval($_REQUEST['estimatej15']),
        floatval($_REQUEST['estimatej16']),
        floatval($_REQUEST['estimatej17']),
        floatval($_REQUEST['estimatej18']),
        floatval($_REQUEST['estimatej19']),
        floatval($_REQUEST['estimatej20']),
        floatval($_REQUEST['estimatej21']),
        floatval($_REQUEST['estimatej22']),
        floatval($_REQUEST['estimatej23']),
        floatval($_REQUEST['estimatej24']),
        floatval($_REQUEST['estimatej25']),
        floatval($_REQUEST['estimatej26']),
        floatval($_REQUEST['estimatej27']),
        floatval($_REQUEST['estimatej28']),
        floatval($_REQUEST['estimatej29']),
        floatval($_REQUEST['estimatej30']),
        floatval($_REQUEST['estimatej31']),
        floatval($_REQUEST['estimatej32']),
        floatval($_REQUEST['estimatej34']),
        floatval($_REQUEST['estimatej35']),
        floatval($_REQUEST['estimatej36']),
        floatval($_REQUEST['estimatej37']),
        floatval($_REQUEST['estimatej38']),
        floatval($_REQUEST['estimatej39']),
        floatval($_REQUEST['estimatej40']),
        floatval($_REQUEST['estimatej41']),
        floatval($_REQUEST['estimatej42']),
        floatval($_REQUEST['estimatej44']),
        floatval($_REQUEST['estimatej45']),
        floatval($_REQUEST['estimatej46']),
        floatval($_REQUEST['estimatej47']),
        floatval($_REQUEST['estimatej48']),
        floatval($_REQUEST['estimatej49']),
        floatval($_REQUEST['estimatej50']),
        floatval($_REQUEST['estimatej51']),
        floatval($_REQUEST['estimatej52']),
        floatval($_REQUEST['estimatej53']),
        floatval($_REQUEST['estimatej55']),
        floatval($_REQUEST['estimatej56']),
        floatval($_REQUEST['estimatej57']),
        floatval($_REQUEST['estimatej58']),
        floatval($_REQUEST['estimatej59']),
        floatval($_REQUEST['estimatej60']),
        floatval($_REQUEST['estimatej61']),
        floatval($_REQUEST['estimatej62']),
        floatval($_REQUEST['estimatej63']),
        floatval($_REQUEST['estimatej64']),
        floatval($_REQUEST['estimatej65']),
        floatval($_REQUEST['estimatej66']),
        floatval($_REQUEST['estimatej67']),
        floatval($_REQUEST['estimatej69']),
        floatval($_REQUEST['estimatej70']),
        floatval($_REQUEST['estimatej71']),
        floatval($_REQUEST['estimatej72']),
        floatval($_REQUEST['estimatej73']),
        floatval($_REQUEST['estimatej74']),
        floatval($_REQUEST['estimatej75']),
        floatval($_REQUEST['estimatej76']),
        floatval($_REQUEST['estimatej77']),
        floatval($_REQUEST['estimatej78']),
        floatval($_REQUEST['estimatej79']),
        floatval($_REQUEST['estimatej80']),
        floatval($_REQUEST['estimatej81']),
        floatval($_REQUEST['estimatej82']),
        floatval($_REQUEST['estimatej83']),
        floatval($_REQUEST['estimatej84']),
        floatval($_REQUEST['estimatej85']),
        floatval($_REQUEST['estimatej86']),
        floatval($_REQUEST['estimatej87']),
        floatval($_REQUEST['estimatej88']),
        floatval($_REQUEST['estimatej89']),
        floatval($_REQUEST['estimatej90'])
    ]) * (1 + (floatval($_REQUEST['estimated91']) / 100));

    $estimatel91 = round(($estimatej91 / $estimatej98) * 100, 2);

    $estimated92 = floatval($_REQUEST['estimated92']) / 100;
    $estimatej92 = round(($estimateg91 + $estimateh91) * (1 + $estimated92), 2);
    $estimatel92 = round(($estimatej92 / $estimatej98) * 100, 2);

    $estimated93 = floatval($_REQUEST['estimated93']) / 100;
    $estimatej93 = round(($estimatej92 * $estimated93), 2);
    $estimatel93 = round(($estimatej93 / $estimatej98) * 100, 2);

    $estimated94 = floatval($_REQUEST['estimated94']) / 100;
    $estimatej94 = round(($estimatei91 * (1 + $estimated94)), 2);
    $estimatel94 = round(($estimatej94 / $estimatej98) * 100, 2);

    $estimatej95 = round(($estimatej91 * $estimatej104), 2);
    $estimatel95 = array_sum([$estimatel91, $estimatel92, $estimatel93, $estimatel94]);

    $estimatej96 = round(($estimatej92 + $estimatej93 + $estimatej94 + $estimatej95), 2);

    $estimateg97 = $estimatej92 + $estimatej93 + $estimatei91;
    $estimateg98 = $estimateg97 * 0.1;
    $estimatej97 = round(($estimateg97 + $estimateg98 + $estimatej95), 2);

    $_SESSION['estimaten13'] = $_REQUEST['estimaten13'];
    $_SESSION['estimaten14'] = $_REQUEST['estimaten14'];

    $_SESSION['estimatep2'] = $_REQUEST['estimatep2'];
    $_SESSION['estimatep3'] = $_REQUEST['estimatep3'];
    $_SESSION['estimatep4'] = $_REQUEST['estimatep4'];
    $_SESSION['estimatep5'] = $_REQUEST['estimatep5'];
    $_SESSION['estimatep6'] = $_REQUEST['estimatep6'];

    $_SESSION['estimaten14'] = $_REQUEST['estimaten14'];
    $_SESSION['estimaten17'] = $_REQUEST['estimaten17'];
    $_SESSION['estimaten24'] = $_REQUEST['estimaten24'];
    $_SESSION['estimaten29'] = $_REQUEST['estimaten29'];
    $_SESSION['estimaten31'] = $_REQUEST['estimaten31'];
    $_SESSION['estimaten32'] = $_REQUEST['estimaten32'];
    $_SESSION['estimaten34'] = $_REQUEST['estimaten34'];
    $_SESSION['estimaten40'] = $_REQUEST['estimaten40'];

    // --------------------------------download excel work
// For array
    $_SESSION['estimatej3'] = $estimatej3;
    $_SESSION['estimatej4'] = $estimatej4;
    $_SESSION['estimated8'] = $estimated8;
    $_SESSION['estimated9'] = $estimated9;
    $_SESSION['estimated10'] = $estimated10;
    $_SESSION['estimated18'] = $estimated18;


    $_SESSION['estimatel46'] = $estimatel46;
    $_SESSION['estimatem46'] = $estimatem46;
    $_SESSION['estimaten46'] = $estimaten46;
    $_SESSION['estimateo46'] = $estimateo46;

    $_SESSION['estimatel47'] = $estimatel47;
    $_SESSION['estimatem47'] = $estimatem47;
    $_SESSION['estimaten47'] = $estimaten47;
    $_SESSION['estimateo47'] = $estimateo47;

    $_SESSION['estimatel48'] = $estimatel48;
    $_SESSION['estimatem48'] = $estimatem48;
    $_SESSION['estimaten48'] = $estimaten48;
    $_SESSION['estimateo48'] = $estimateo48;
    $_SESSION['estimateq48'] = $estimateq48;

    $_SESSION['estimatel49'] = $estimatel49;
    $_SESSION['estimatem49'] = $estimatem49;
    $_SESSION['estimaten49'] = $estimaten49;
    $_SESSION['estimateo49'] = $estimateo49;

    $_SESSION['estimated80'] = $estimated80;
    $_SESSION['estimated81'] = $estimated81;
    $_SESSION['estimated82'] = $estimated82;
    $_SESSION['estimated83'] = $_REQUEST['estimated83'];
    $_SESSION['estimated84'] = $estimated84;
    $_SESSION['estimated85'] = $estimated85;
    $_SESSION['estimatec85'] = $estimatec85;

    $_SESSION['estimateg91'] = $estimateg91;
    $_SESSION['estimateh91'] = $estimateh91;
    $_SESSION['estimatej91'] = $estimatej91;
    $_SESSION['estimatej92'] = $estimatej92;
    $_SESSION['estimatej94'] = $estimatej94;
    $_SESSION['estimatej95'] = $estimatej95;
    $_SESSION['estimatej96'] = $estimatej96;
    $_SESSION['estimatej97'] = $estimatej97;

    $_SESSION['estimateg97'] = $estimateg97;
    $_SESSION['estimateg98'] = $estimateg98;

    $_SESSION['estimatel90'] = $estimatel90;
    $_SESSION['estimatel91'] = $estimatel91;
    $_SESSION['estimatel92'] = $estimatel92;
    $_SESSION['estimatel93'] = $estimatel93;
    $_SESSION['estimatel94'] = $estimatel94;
    $_SESSION['estimatel95'] = $estimatel95;



}

?>
<?php
// Include PhpSpreadsheet autoload
require 'vendor/autoload.php';

// Function to generate Excel file
function generateExcel($data, $filename)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Assuming the data array has keys corresponding to cell references
    foreach ($data as $cellReference => $cellValue) {
        $sheet->setCellValue($cellReference, $cellValue);
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // Use a timestamp to make the file name unique
    $timestamp = date('YmdHis');
    $fullFilename = "C:\\Users\\User\\Downloads\\{$filename}_{$timestamp}.xlsx";

    $writer->save($fullFilename);

    echo "<script>alert('Check your download folder. The file is downloaded as {$filename}_{$timestamp}.xlsx');</script>";
}

if (isset($_POST['downloadexcel'])) {
    // Assuming the form fields have names corresponding to cell references

    $data = [
        'A1' => "WEST-TECH",
        'C1' => "Estimate Sheet",
        'D1' => isset($_SESSION['budgete44']) ? $_SESSION['budgete44'] : '-',
        'I1' => isset($_SESSION['jobinfod6']) ? $_SESSION['jobinfod6'] : '-',

        'A2' => "JOB NAME:",
        'C2' => isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-',
        'E2' => "3-10 Ton",
        'F2' => "10 and above",
        'H2' => "PUBLISHED BUDGET",
        'J2' => isset($_SESSION['jobinfoe18']) ? $_SESSION['jobinfoe18'] : '-',
        'L2' => "1- Do we have an Exhaust/Supply/Gravity weight over 100 lbs on the plans.",
        'P2' => isset($_SESSION['estimatep2']) ? $_SESSION['estimatep2'] : '-',
        'T2' => $_REQUEST['estimatet2'],
        'U2' => $_REQUEST['estimateu2'],
        'V2' => $_REQUEST['estimatev2'],
        'W2' => $_REQUEST['estimatew2'],

        'A3' => "LOCATION:",
        'C3' => isset($_SESSION['jobinfoe14']) ? $_SESSION['jobinfoe14'] : '-',
        'D3' => "# RTU",
        'E3' => isset($_SESSION['jobinfoh13']) ? $_SESSION['jobinfoh13'] : '-',
        'F3' => isset($_SESSION['jobinfoi13']) ? $_SESSION['jobinfoi13'] : '-',
        'H3' => "DUE DATE:",
        'J3' => isset($_SESSION['estimatej3']) ? $_SESSION['estimatej3'] : '-',
        'L3' => "2- Do we have any Makeup Air or AHU over 900lb on the plans.",
        'P3' => isset($_SESSION['estimatep3']) ? $_SESSION['estimatep3'] : '-',
        'T3' => $_REQUEST['estimatet3'],
        'U3' => $_REQUEST['estimateu3'],
        'V3' => $_REQUEST['estimatev3'],
        'W3' => $_REQUEST['estimatew3'],



        'A4' => "DISTANCE TO SITE:",
        'C4' => isset($_SESSION['jobinfoe15']) ? $_SESSION['jobinfoe15'] : '-',
        'D4' => "# PE",
        'E4' => isset($_SESSION['jobinfoh14']) ? $_SESSION['jobinfoh14'] : '-',
        'F4' => isset($_SESSION['jobinfoi14']) ? $_SESSION['jobinfoi14'] : '-',
        'H4' => "TIME:",
        'J4' => isset($_SESSION['estimatej4']) ? $_SESSION['estimatej4'] : '-',
        'L4' => "3- Should we add Labor Allowance due to high duct work installation.",
        'P4' => isset($_SESSION['estimatep4']) ? $_SESSION['estimatep4'] : '-',
        'U4' => $_REQUEST['estimateu4'],
        'V4' => $_REQUEST['estimatev4'],
        'W4' => $_REQUEST['estimatew4'],


        'A5' => "CONTRACTOR:",
        'C5' => isset($_SESSION['jobinfoe16']) ? $_SESSION['jobinfoe16'] : '-',
        'D5' => "Total Ton",
        'E5' => isset($_SESSION['jobinfoh15']) ? $_SESSION['jobinfoh15'] : '-',
        'H5' => "PROJECT START:",
        'J5' => isset($_SESSION['jobinfoe21']) ? $_SESSION['jobinfoe21'] : '-',
        'L5' => "4- Should we include BIM in our Bid.",
        'P5' => isset($_SESSION['estimatep5']) ? $_SESSION['estimatep5'] : '-',
        'U5' => $_REQUEST['estimateu5'],
        'V5' => $_REQUEST['estimatev5'],
        'W5' => $_REQUEST['estimatew5'],



        'A6' => "ENGR.",
        'C6' => isset($_SESSION['jobinfoe17']) ? $_SESSION['jobinfoe17'] : '-',
        'D6' => "Floors",
        'E6' => isset($_SESSION['jobinfoh16']) ? $_SESSION['jobinfoh16'] : '-',
        'H6' => "PROJECT FINISH:",
        'J6' => isset($_SESSION['jobinfoe22']) ? $_SESSION['jobinfoe22'] : '-',
        'L6' => "5- Should we include Bond on this project.",
        'P6' => isset($_SESSION['estimatep6']) ? $_SESSION['estimatep6'] : '-',
        'V6' => $_REQUEST['estimatev6'],
        'W6' => $_REQUEST['estimatew6'],

        'A7' => "DESCRIPTION",
        'D7' => "QUANTITY",
        'E7' => "M $$$",
        'F7' => "L $$$",
        'G7' => "EQUIPMENT",
        'H7' => "MATERIAL",
        'I7' => "LABOR",
        'J7' => "SUB-CONT",
        'L7' => "Warning",
        'M7' => "Subcontractor",
        'N7' => "Manufacture",
        'W7' => $_REQUEST['estimatew7'],

        'A8' => "ROOFTOP A/C UNITS",
        'D8' => isset($_SESSION['estimated8']) ? $_SESSION['estimated8'] : '-',
        'E8' => $_REQUEST['estimatee8'],
        'F8' => $_REQUEST['estimatef8'],
        'G8' => $_REQUEST['estimateg8'],
        'H8' => $_REQUEST['estimateh8'],
        'I8' => isset($_SESSION['estimatei8']) ? $_SESSION['estimatei8'] : '-',
        'J8' => $_REQUEST['estimatej8'],
        'N8' => $_REQUEST['estimaten8'],

        'A9' => "ROOFTOP A/C UNITS with Modulating Power Exhaust",
        'D9' => isset($_SESSION['estimated9']) ? $_SESSION['estimated9'] : '-',
        'E9' => $_REQUEST['estimatee9'],
        'F9' => $_REQUEST['estimatef9'],
        'G9' => $_REQUEST['estimateg9'],
        'H9' => $_REQUEST['estimateh9'],
        'I9' => isset($_SESSION['estimatei9']) ? $_SESSION['estimatei9'] : '-',
        'J9' => $_REQUEST['estimatej9'],

        'A10' => "PNEUMATIC TUBING (How many pwr exhaust?)",
        'D10' => isset($_SESSION['estimated10']) ? $_SESSION['estimated10'] : '-',
        'E10' => $_REQUEST['estimatee10'],
        'F10' => $_REQUEST['estimatef10'],
        'G10' => $_REQUEST['estimateg10'],
        'H10' => $_REQUEST['estimateh10'],
        'I10' => isset($_SESSION['estimatei10']) ? $_SESSION['estimatei10'] : '-',
        'J10' => $_REQUEST['estimatej10'],

        'A11' => "RIGID INSUL AROUND INSIDE CURB",
        'D11' => $_REQUEST['estimated11'],
        'E11' => $_REQUEST['estimatee11'],
        'F11' => $_REQUEST['estimatef11'],
        'G11' => $_REQUEST['estimateg11'],
        'H11' => isset($_SESSION['estimateh11']) ? $_SESSION['estimateh11'] : '-',
        'I11' => isset($_SESSION['estimatei11']) ? $_SESSION['estimatei11'] : '-',
        'J11' => $_REQUEST['estimatej11'],

        'A12' => "SETS of A/C UNIT FILTERS (FOR CONSTRUCTION &  CLOSEOUT)",
        'D12' => $_REQUEST['estimated12'],
        'E12' => $_REQUEST['estimatee12'],
        'F12' => $_REQUEST['estimatef12'],
        'G12' => $_REQUEST['estimateg12'],
        'H12' => isset($_SESSION['estimateh12']) ? $_SESSION['estimateh12'] : '-',
        'I12' => isset($_SESSION['estimatei12']) ? $_SESSION['estimatei12'] : '-',
        'J12' => $_REQUEST['estimatej12'],

        'A13' => "ISOLATOR/CURB/LABOR",
        'D13' => $_REQUEST['estimated13'],
        'E13' => $_REQUEST['estimatee13'],
        'F13' => $_REQUEST['estimatef13'],
        'G13' => $_REQUEST['estimateg13'],
        'H13' => $_REQUEST['estimateh13'],
        'I13' => isset($_SESSION['estimatei13']) ? $_SESSION['estimatei13'] : '-',
        'J13' => $_REQUEST['estimatej13'],
        'N13' => isset($_SESSION['estimaten13']) ? $_SESSION['estimaten13'] : '-',

        'A14' => "EXH / SUPPLY/GRAVITY *WEIGHT up to 100 lbs*",
        'D14' => $_REQUEST['estimated14'],
        'E14' => $_REQUEST['estimatee14'],
        'F14' => $_REQUEST['estimatef14'],
        'G14' => $_REQUEST['estimateg14'],
        'H14' => $_REQUEST['estimateh14'],
        'I14' => isset($_SESSION['estimatei14']) ? $_SESSION['estimatei14'] : '-',
        'J14' => $_REQUEST['estimatej14'],
        'L14' => "In NSW Quote",
        'N14' => isset($_SESSION['estimaten14']) ? $_SESSION['estimaten14'] : '-',

        'A15' => "VENTCAPS/ FLASHING & COUNTER",
        'D15' => $_REQUEST['estimated15'],
        'E15' => $_REQUEST['estimatee15'],
        'F15' => $_REQUEST['estimatef15'],
        'G15' => $_REQUEST['estimateg15'],
        'H15' => isset($_SESSION['estimateh15']) ? $_SESSION['estimateh15'] : '-',
        'I15' => isset($_SESSION['estimatei15']) ? $_SESSION['estimatei15'] : '-',
        'J15' => $_REQUEST['estimatej15'],

        'A16' => "CANVAS CONNECTION (for A/C units, Exh., AHU) up to 5000lbs",
        'D16' => $_REQUEST['estimated16'],
        'E16' => $_REQUEST['estimatee16'],
        'F16' => $_REQUEST['estimatef16'],
        'G16' => $_REQUEST['estimateg16'],
        'H16' => isset($_SESSION['estimateh16']) ? $_SESSION['estimateh16'] : '-',
        'I16' => $_REQUEST['estimatei16'],
        'J16' => $_REQUEST['estimatej16'],

        'A17' => "SPLIT SYSTEM",
        'D17' => $_REQUEST['estimated17'],
        'E17' => $_REQUEST['estimatee17'],
        'F17' => $_REQUEST['estimatef17'],
        'G17' => $_REQUEST['estimateg17'],
        'H17' => isset($_SESSION['estimateh17']) ? $_SESSION['estimateh17'] : '-',
        'I17' => isset($_SESSION['estimatei17']) ? $_SESSION['estimatei17'] : '-',
        'J17' => $_REQUEST['estimatej17'],
        'N17' => isset($_SESSION['estimaten17']) ? $_SESSION['estimaten17'] : '-',

        'A18' => "PIPING OR DX PIPING (WEST-TECH)",
        'D18' => isset($_SESSION['estimated18']) ? $_SESSION['estimated18'] : '-',
        'E18' => $_REQUEST['estimatee18'],
        'F18' => $_REQUEST['estimatef18'],
        'G18' => $_REQUEST['estimateg18'],
        'H18' => isset($_SESSION['estimateh18']) ? $_SESSION['estimateh18'] : '-',
        'I18' => isset($_SESSION['estimatei18']) ? $_SESSION['estimatei18'] : '-',
        'J18' => $_REQUEST['estimatej18'],

        'A19' => "Bard units",
        'D19' => $_REQUEST['estimated19'],
        'E19' => $_REQUEST['estimatee19'],
        'F19' => $_REQUEST['estimatef19'],
        'G19' => $_REQUEST['estimateg19'],
        'H19' => isset($_SESSION['estimateh19']) ? $_SESSION['estimateh19'] : '-',
        'I19' => isset($_SESSION['estimatei19']) ? $_SESSION['estimatei19'] : '-',
        'J19' => $_REQUEST['estimatej19'],

        'A20' => "FURNACE / COOLING COIL",
        'D20' => $_REQUEST['estimated20'],
        'E20' => $_REQUEST['estimatee20'],
        'F20' => $_REQUEST['estimatef20'],
        'G20' => $_REQUEST['estimateg20'],
        'H20' => isset($_SESSION['estimateh20']) ? $_SESSION['estimateh20'] : '-',
        'I20' => isset($_SESSION['estimatei20']) ? $_SESSION['estimatei20'] : '-',
        'J20' => $_REQUEST['estimatej20'],
        'A21' => "SECONDARY DRAIN PAN FOR FURNACE / COOLING COIL",
        'D21' => $_REQUEST['estimated21'],
        'E21' => $_REQUEST['estimatee21'],
        'F21' => $_REQUEST['estimatef21'],
        'G21' => $_REQUEST['estimateg21'],
        'H21' => isset($_SESSION['estimateh21']) ? $_SESSION['estimateh21'] : '-',
        'I21' => isset($_SESSION['estimatei21']) ? $_SESSION['estimatei21'] : '-',
        'J21' => $_REQUEST['estimatej21'],

        'A22' => "SECONDARY DRAIN PAN FOR FAN COIL",
        'D22' => $_REQUEST['estimated22'],
        'E22' => $_REQUEST['estimatee22'],
        'F22' => $_REQUEST['estimatef22'],
        'G22' => $_REQUEST['estimateg22'],
        'H22' => isset($_SESSION['estimateh22']) ? $_SESSION['estimateh22'] : '-',
        'I22' => isset($_SESSION['estimatei22']) ? $_SESSION['estimatei22'] : '-',
        'J22' => $_REQUEST['estimatej22'],

        'A23' => "PLATFORM COVERS",
        'D23' => $_REQUEST['estimated23'],
        'E23' => $_REQUEST['estimatee23'],
        'F23' => $_REQUEST['estimatef23'],
        'G23' => $_REQUEST['estimateg23'],
        'H23' => isset($_SESSION['estimateh23']) ? $_SESSION['estimateh23'] : '-',
        'I23' => isset($_SESSION['estimatei23']) ? $_SESSION['estimatei23'] : '-',
        'J23' => $_REQUEST['estimatej23'],

        'A24' => "MAKE UP AIR UNITS/ AIR HANDLING UNITS   *WEIGHT upto 900lbs*",
        'D24' => $_REQUEST['estimated24'],
        'E24' => $_REQUEST['estimatee24'],
        'F24' => $_REQUEST['estimatef24'],
        'G24' => $_REQUEST['estimateg24'],
        'H24' => $_REQUEST['estimateh24'],
        'I24' => isset($_SESSION['estimatei24']) ? $_SESSION['estimatei24'] : '-',
        'J24' => $_REQUEST['estimatej24'],
        'L24' => isset($_SESSION['estimatel24']) ? $_SESSION['estimatel24'] : '-',
        'N24' => isset($_SESSION['estimaten24']) ? $_SESSION['estimaten24'] : '-',

        'A25' => "VRF CU/ OUTDOOR",
        'D25' => $_REQUEST['estimated25'],
        'E25' => $_REQUEST['estimatee25'],
        'F25' => $_REQUEST['estimatef25'],
        'G25' => $_REQUEST['estimateg25'],
        'H25' => $_REQUEST['estimateh25'],
        'I25' => isset($_SESSION['estimatei25']) ? $_SESSION['estimatei25'] : '-',
        'J25' => $_REQUEST['estimatej25'],
        'L25' => $_REQUEST['estimatel25'],
        'N25' => $_REQUEST['estimaten25'],

        'A26' => "VRF/FC/ INDOOR",
        'D26' => $_REQUEST['estimated26'],
        'E26' => $_REQUEST['estimatee26'],
        'F26' => $_REQUEST['estimatef26'],
        'G26' => $_REQUEST['estimateg26'],
        'H26' => isset($_SESSION['estimateh26']) ? $_SESSION['estimateh26'] : '-',
        'I26' => isset($_SESSION['estimatei26']) ? $_SESSION['estimatei26'] : '-',
        'J26' => $_REQUEST['estimatej26'],

        'A27' => "VRF HEAT RECOVERY BOX",
        'D27' => $_REQUEST['estimated27'],
        'E27' => $_REQUEST['estimatee27'],
        'F27' => $_REQUEST['estimatef27'],
        'G27' => $_REQUEST['estimateg27'],
        'H27' => isset($_SESSION['estimateh27']) ? $_SESSION['estimateh27'] : '-',
        'I27' => isset($_SESSION['estimatei27']) ? $_SESSION['estimatei27'] : '-',
        'J27' => $_REQUEST['estimatej27'],

        'A28' => "HYDRONIC PIPING/VRF PIPING",
        'D28' => $_REQUEST['estimated28'],
        'E28' => $_REQUEST['estimatee28'],
        'F28' => $_REQUEST['estimatef28'],
        'G28' => $_REQUEST['estimateg28'],
        'H28' => $_REQUEST['estimateh28'],
        'I28' => $_REQUEST['estimatei28'],
        'J28' => $_REQUEST['estimatej28'],
        'L28' => $_REQUEST['estimatel28'],
        'M28' => $_REQUEST['estimatem28'],


        'A29' => "VAV BOXES/ZONE DAMPER/VVT BOX",
        'D29' => $_REQUEST['estimated29'],
        'E29' => $_REQUEST['estimatee29'],
        'F29' => $_REQUEST['estimatef29'],
        'G29' => $_REQUEST['estimateg29'],
        'H29' => $_REQUEST['estimateh29'],
        'I29' => isset($_SESSION['estimatei29']) ? $_SESSION['estimatei29'] : '-',
        'J29' => $_REQUEST['estimatej29'],
        'L29' => isset($_SESSION['estimatel29']) ? $_SESSION['estimatel29'] : '-',
        'N29' => isset($_SESSION['estimaten29']) ? $_SESSION['estimaten29'] : '-',

        'A30' => "Vehicle Exhaust System",
        'D30' => $_REQUEST['estimated30'],
        'E30' => $_REQUEST['estimatee30'],
        'F30' => $_REQUEST['estimatef30'],
        'G30' => $_REQUEST['estimateg30'],
        'H30' => $_REQUEST['estimateh30'],
        'I30' => isset($_SESSION['estimatei30']) ? $_SESSION['estimatei30'] : '-',
        'J30' => $_REQUEST['estimatej30'],
        'N30' => $_REQUEST['estimaten30'],

        'A31' => "VFD     note: Size, Weight may differ",
        'D31' => $_REQUEST['estimated31'],
        'E31' => $_REQUEST['estimatee31'],
        'F31' => $_REQUEST['estimatef31'],
        'G31' => $_REQUEST['estimateg31'],
        'H31' => $_REQUEST['estimateh31'],
        'I31' => isset($_SESSION['estimatei31']) ? $_SESSION['estimatei31'] : '-',
        'J31' => $_REQUEST['estimatej31'],
        'N31' => isset($_SESSION['estimaten31']) ? $_SESSION['estimaten31'] : '-',

        'A32' => "Extra Adder you want",
        'D32' => $_REQUEST['estimated32'],
        'E32' => $_REQUEST['estimatee32'],
        'F32' => $_REQUEST['estimatef32'],
        'G32' => $_REQUEST['estimateg32'],
        'H32' => isset($_SESSION['estimateh32']) ? $_SESSION['estimateh32'] : '-',
        'I32' => isset($_SESSION['estimatei32']) ? $_SESSION['estimatei32'] : '-',
        'J32' => $_REQUEST['estimatej32'],
        'N32' => isset($_SESSION['estimaten32']) ? $_SESSION['estimaten32'] : '-',

        'A34' => "AIR DIST: REGISTERS/GRILLS/CEIL CANS",
        'D34' => $_REQUEST['estimated34'],
        'E34' => $_REQUEST['estimatee34'],
        'F34' => $_REQUEST['estimatef34'],
        'G34' => $_REQUEST['estimateg34'],
        'H34' => isset($_SESSION['estimateh34']) ? $_SESSION['estimateh34'] : '-',
        'I34' => isset($_SESSION['estimatei34']) ? $_SESSION['estimatei34'] : '-',
        'J34' => $_REQUEST['estimatej34'],
        'N34' => isset($_SESSION['estimaten34']) ? $_SESSION['estimaten34'] : '-',

        'A35' => "LINED CEILING CANS",
        'D35' => isset($_SESSION['estimated35']) ? $_SESSION['estimated35'] : '-',
        'E35' => $_REQUEST['estimatee35'],
        'F35' => $_REQUEST['estimatef35'],
        'G35' => $_REQUEST['estimateg35'],
        'H35' => isset($_SESSION['estimateh35']) ? $_SESSION['estimateh35'] : '-',
        'I35' => $_REQUEST['estimatei35'],
        'J35' => $_REQUEST['estimatej35'],

        'A36' => "CASCO SILENT FLEX-SEE COMMENTS",
        'D36' => $_REQUEST['estimated36'],
        'E36' => $_REQUEST['estimatee36'],
        'F36' => $_REQUEST['estimatef36'],
        'G36' => $_REQUEST['estimateg36'],
        'H36' => isset($_SESSION['estimateh36']) ? $_SESSION['estimateh36'] : '-',
        'I36' => $_REQUEST['estimatei36'],
        'J36' => $_REQUEST['estimatej36'],

        'A37' => "MECH. Louvers up to 30x30",
        'D37' => $_REQUEST['estimated37'],
        'E37' => $_REQUEST['estimatee37'],
        'F37' => $_REQUEST['estimatef37'],
        'G37' => $_REQUEST['estimateg37'],
        'H37' => $_REQUEST['estimateh37'],
        'I37' => isset($_SESSION['estimatei37']) ? $_SESSION['estimatei37'] : '-',
        'J37' => $_REQUEST['estimatej37'],

        'A38' => "Cable MVD /YOUNG REG./Remote Damper",
        'D38' => $_REQUEST['estimated38'],
        'E38' => $_REQUEST['estimatee38'],
        'F38' => $_REQUEST['estimatef38'],
        'G38' => $_REQUEST['estimateg38'],
        'H38' => isset($_SESSION['estimateh38']) ? $_SESSION['estimateh38'] : '-',
        'I38' => isset($_SESSION['estimatei38']) ? $_SESSION['estimatei38'] : '-',
        'J38' => $_REQUEST['estimatej38'],

        'A39' => "ISOLATION DAMPERS		This IS NEW",
        'D39' => $_REQUEST['estimated39'],
        'E39' => $_REQUEST['estimatee39'],
        'F39' => $_REQUEST['estimatef39'],
        'G39' => $_REQUEST['estimateg39'],
        'H39' => isset($_SESSION['estimateh39']) ? $_SESSION['estimateh39'] : '-',
        'I39' => isset($_SESSION['estimatei39']) ? $_SESSION['estimatei39'] : '-',
        'J39' => $_REQUEST['estimatej39'],
        'L39' => isset($_SESSION['estimatel39']) ? $_SESSION['estimatel39'] : '-',

        'A40' => "FIRE / SMOKE DAMPERS",
        'D40' => $_REQUEST['estimated40'],
        'E40' => $_REQUEST['estimatee40'],
        'F40' => $_REQUEST['estimatef40'],
        'G40' => $_REQUEST['estimateg40'],
        'H40' => isset($_SESSION['estimateh40']) ? $_SESSION['estimateh40'] : '-',
        'I40' => isset($_SESSION['estimatei40']) ? $_SESSION['estimatei40'] : '-',
        'J40' => $_REQUEST['estimatej40'],
        'N40' => isset($_SESSION['estimaten40']) ? $_SESSION['estimaten40'] : '-',

        'A41' => "Duct Mount SMOKE DETECTORS/inl fire smoke",
        'D41' => $_REQUEST['estimated41'],
        'E41' => $_REQUEST['estimatee41'],
        'F41' => $_REQUEST['estimatef41'],
        'G41' => $_REQUEST['estimateg41'],
        'H41' => $_REQUEST['estimateh41'],
        'I41' => isset($_SESSION['estimatei41']) ? $_SESSION['estimatei41'] : '-',
        'J41' => $_REQUEST['estimatej41'],

        'A42' => "Extra Adder you want",
        'D42' => $_REQUEST['estimated42'],
        'E42' => $_REQUEST['estimatee42'],
        'F42' => $_REQUEST['estimatef42'],
        'G42' => $_REQUEST['estimateg42'],
        'H42' => isset($_SESSION['estimateh42']) ? $_SESSION['estimateh42'] : '-',
        'I42' => isset($_SESSION['estimatei42']) ? $_SESSION['estimatei42'] : '-',
        'J42' => $_REQUEST['estimatej42'],

        'A44' => "CIRCLE LINED DUCT",
        'D44' => $_REQUEST['estimated44'],
        'E44' => $_REQUEST['estimatee44'],
        'F44' => $_REQUEST['estimatef44'],
        'G44' => $_REQUEST['estimateg44'],
        'H44' => isset($_SESSION['estimateh44']) ? $_SESSION['estimateh44'] : '-',
        'I44' => isset($_SESSION['estimatei44']) ? $_SESSION['estimatei44'] : '-',
        'J44' => $_REQUEST['estimatej44'],
        'L44' => "Old Factor MATERIAL",
        'M44' => "Old Factor LABOR",
        'N44' => "6/2021 Factor MATERIAL",
        'O44' => "6/2021 Factor LABOR",

        'A45' => "ROUND DUCT",
        'D45' => $_REQUEST['estimated45'],
        'E45' => $_REQUEST['estimatee45'],
        'F45' => $_REQUEST['estimatef45'],
        'G45' => $_REQUEST['estimateg45'],
        'H45' => isset($_SESSION['tosb7']) ? $_SESSION['tosb7'] : '-',
        'I45' => isset($_SESSION['tosc7']) ? $_SESSION['tosc7'] : '-',
        'J45' => $_REQUEST['estimatej45'],
        'L45' => $_REQUEST['estimatel45'],
        'M45' => $_REQUEST['estimatem45'],
        'N45' => $_REQUEST['estimaten45'],
        'O45' => $_REQUEST['estimateo45'],

        'A46' => "DUCTWORK",
        'C46' => isset($_SESSION['tosd7']) ? $_SESSION['tosd7'] : '-',
        'D46' => $_REQUEST['estimated46'],
        'E46' => $_REQUEST['estimatee46'],
        'F46' => $_REQUEST['estimatef46'],
        'G46' => $_REQUEST['estimateg46'],
        'H46' => isset($_SESSION['estimateh46']) ? $_SESSION['estimateh46'] : '-',
        'I46' => isset($_SESSION['estimatei46']) ? $_SESSION['estimatei46'] : '-',
        'J46' => $_REQUEST['estimatej46'],
        'L46' => isset($_SESSION['estimatel46']) ? $_SESSION['estimatel46'] : '-',
        'M46' => isset($_SESSION['estimatem46']) ? $_SESSION['estimatem46'] : '-',
        'N46' => isset($_SESSION['estimaten46']) ? $_SESSION['estimaten46'] : '-',
        'O46' => isset($_SESSION['estimateo46']) ? $_SESSION['estimateo46'] : '-',
        'Q46' => $_REQUEST['estimateq46'],
        'R46' => "Old Steel Pricing",
        'T46' => "$/lb",

        'A47' => 'LINER / INSUL 1"',
        'C47' => isset($_SESSION['tosf7']) ? $_SESSION['tosf7'] : '-',
        'D47' => $_REQUEST['estimated47'],
        'E47' => $_REQUEST['estimatee47'],
        'F47' => $_REQUEST['estimatef47'],
        'G47' => $_REQUEST['estimateg47'],
        'H47' => isset($_SESSION['estimateh47']) ? $_SESSION['estimateh47'] : '-',
        'I47' => isset($_SESSION['estimatei47']) ? $_SESSION['estimatei47'] : '-',
        'J47' => $_REQUEST['estimatej47'],
        'L47' => isset($_SESSION['estimatel47']) ? $_SESSION['estimatel47'] : '-',
        'M47' => isset($_SESSION['estimatem47']) ? $_SESSION['estimatem47'] : '-',
        'N47' => isset($_SESSION['estimaten47']) ? $_SESSION['estimaten47'] : '-',
        'O47' => isset($_SESSION['estimateo47']) ? $_SESSION['estimateo47'] : '-',
        'Q47' => isset($_SESSION['jobinfoe28']) ? $_SESSION['jobinfoe28'] : '-',
        'R47' => "New Steel Pricing",
        'T47' => "$/lb",

        'A48' => 'LINER / INSUL 1.5"',
        'D48' => $_REQUEST['estimated48'],
        'E48' => $_REQUEST['estimatee48'],
        'F48' => $_REQUEST['estimatef48'],
        'G48' => $_REQUEST['estimateg48'],
        'H48' => isset($_SESSION['estimateh48']) ? $_SESSION['estimateh48'] : '-',
        'I48' => isset($_SESSION['estimatei48']) ? $_SESSION['estimatei48'] : '-',
        'J48' => $_REQUEST['estimatej48'],
        'L48' => isset($_SESSION['estimatel48']) ? $_SESSION['estimatel48'] : '-',
        'M48' => isset($_SESSION['estimatem48']) ? $_SESSION['estimatem48'] : '-',
        'N48' => isset($_SESSION['estimaten48']) ? $_SESSION['estimaten48'] : '-',
        'O48' => isset($_SESSION['estimateo48']) ? $_SESSION['estimateo48'] : '-',
        'Q48' => isset($_SESSION['estimateq48']) ? $_SESSION['estimateq48'] : '-',

        'A49' => 'LINER / INSUL 2" Outdoor',
        'C49' => isset($_SESSION['tosh7']) ? $_SESSION['tosh7'] : '-',
        'D49' => $_REQUEST['estimated49'],
        'E49' => $_REQUEST['estimatee49'],
        'F49' => $_REQUEST['estimatef49'],
        'G49' => $_REQUEST['estimateg49'],
        'H49' => isset($_SESSION['estimateh49']) ? $_SESSION['estimateh49'] : '-',
        'I49' => isset($_SESSION['estimatei49']) ? $_SESSION['estimatei49'] : '-',
        'J49' => $_REQUEST['estimatej49'],
        'L49' => isset($_SESSION['estimatel49']) ? $_SESSION['estimatel49'] : '-',
        'M49' => isset($_SESSION['estimatem49']) ? $_SESSION['estimatem49'] : '-',
        'N49' => isset($_SESSION['estimaten49']) ? $_SESSION['estimaten49'] : '-',
        'O49' => isset($_SESSION['estimateo49']) ? $_SESSION['estimateo49'] : '-',

        'A50' => 'LINER / INSUL 2" Indoor',
        'C50' => isset($_SESSION['tosj7']) ? $_SESSION['tosj7'] : '-',
        'D50' => $_REQUEST['estimated50'],
        'E50' => $_REQUEST['estimatee50'],
        'F50' => $_REQUEST['estimatef50'],
        'G50' => $_REQUEST['estimateg50'],
        'H50' => isset($_SESSION['estimateh50']) ? $_SESSION['estimateh50'] : '-',
        'I50' => isset($_SESSION['estimatei50']) ? $_SESSION['estimatei50'] : '-',
        'J50' => $_REQUEST['estimatej50'],

        'A51' => 'KITCHEN HOOD / STAINLESS STEEL',
        'D51' => $_REQUEST['estimated51'],
        'E51' => $_REQUEST['estimatee51'],
        'F51' => $_REQUEST['estimatef51'],
        'G51' => $_REQUEST['estimateg51'],
        'H51' => isset($_SESSION['tosm7']) ? $_SESSION['tosm7'] : '-',
        'I51' => isset($_SESSION['tosn7']) ? $_SESSION['tosn7'] : '-',
        'J51' => $_REQUEST['estimatej51'],

        'A52' => 'KITCHEN DUCT WELD / BLAC STEEL',
        'D52' => $_REQUEST['estimated52'],
        'E52' => $_REQUEST['estimatee52'],
        'F52' => $_REQUEST['estimatef52'],
        'G52' => $_REQUEST['estimateg52'],
        'H52' => isset($_SESSION['toso7']) ? $_SESSION['toso7'] : '-',
        'I52' => isset($_SESSION['tosp7']) ? $_SESSION['tosp7'] : '-',
        'J52' => $_REQUEST['estimatej52'],

        'A53' => 'ANTIMICROBIAL COATING',
        'D53' => $_REQUEST['estimated53'],
        'E53' => $_REQUEST['estimatee53'],
        'F53' => $_REQUEST['estimatef53'],
        'G53' => $_REQUEST['estimateg53'],
        'H53' => isset($_SESSION['estimateh53']) ? $_SESSION['estimateh53'] : '-',
        'I53' => $_REQUEST['estimatei53'],
        'J53' => $_REQUEST['estimatej53'],

        'A55' => 'Labor Allowance due to high duct work installation',
        'D55' => isset($_SESSION['estimated55']) ? $_SESSION['estimated55'] : '-',
        'E55' => $_REQUEST['estimatee55'],
        'F55' => $_REQUEST['estimatef55'],
        'G55' => $_REQUEST['estimateg55'],
        'H55' => $_REQUEST['estimateh55'],
        'I55' => isset($_SESSION['estimatei55']) ? $_SESSION['estimatei55'] : '-',
        'J55' => $_REQUEST['estimatej55'],
        'N55' => $_REQUEST['estimaten55'],
        'O55' => $_REQUEST['estimateo55'],
        'P55' => $_REQUEST['estimatep55'],

        'A56' => 'TEST & BALANCE',
        'D56' => $_REQUEST['estimated56'],
        'E56' => $_REQUEST['estimatee56'],
        'F56' => $_REQUEST['estimatef56'],
        'G56' => $_REQUEST['estimateg56'],
        'H56' => $_REQUEST['estimateh56'],
        'I56' => isset($_SESSION['estimatei56']) ? $_SESSION['estimatei56'] : '-',
        'J56' => $_REQUEST['estimatej56'],
        'M56' => $_REQUEST['estimatem56'],

        'A57' => 'MECHANICAL INSULATION',
        'D57' => $_REQUEST['estimated57'],
        'E57' => $_REQUEST['estimatee57'],
        'F57' => $_REQUEST['estimatef57'],
        'G57' => $_REQUEST['estimateg57'],
        'H57' => $_REQUEST['estimateh57'],
        'I57' => $_REQUEST['estimatei57'],
        'J57' => $_REQUEST['estimatej57'],
        'M57' => $_REQUEST['estimatem57'],

        'A58' => 'DUCT CLEANING',
        'D58' => $_REQUEST['estimated58'],
        'E58' => $_REQUEST['estimatee58'],
        'F58' => $_REQUEST['estimatef58'],
        'G58' => $_REQUEST['estimateg58'],
        'H58' => $_REQUEST['estimateh58'],
        'I58' => $_REQUEST['estimatei58'],
        'J58' => $_REQUEST['estimatej58'],
        'M58' => $_REQUEST['estimatem58'],

        'A59' => 'DEMO Subcontractor',
        'D59' => $_REQUEST['estimated59'],
        'E59' => $_REQUEST['estimatee59'],
        'F59' => $_REQUEST['estimatef59'],
        'G59' => $_REQUEST['estimateg59'],
        'H59' => $_REQUEST['estimateh59'],
        'I59' => $_REQUEST['estimatei59'],
        'J59' => $_REQUEST['estimatej59'],
        'M59' => $_REQUEST['estimatem59'],

        'A60' => 'DEMO UNITS',
        'D60' => $_REQUEST['estimated60'],
        'E60' => $_REQUEST['estimatee60'],
        'F60' => $_REQUEST['estimatef60'],
        'G60' => $_REQUEST['estimateg60'],
        'H60' => $_REQUEST['estimateh60'],
        'I60' => isset($_SESSION['estimatei60']) ? $_SESSION['estimatei60'] : '-',
        'J60' => $_REQUEST['estimatej60'],

        'A61' => 'DEMO DUCT. Please enter the LF ',
        'D61' => $_REQUEST['estimated61'],
        'E61' => $_REQUEST['estimatee61'],
        'F61' => $_REQUEST['estimatef61'],
        'G61' => $_REQUEST['estimateg61'],
        'H61' => $_REQUEST['estimateh61'],
        'I61' => isset($_SESSION['estimatei61']) ? $_SESSION['estimatei61'] : '-',
        'J61' => $_REQUEST['estimatej61'],

        'A62' => 'DUCT Pressure TEST/LABOR/CAPS',
        'D62' => $_REQUEST['estimated62'],
        'E62' => $_REQUEST['estimatee62'],
        'F62' => $_REQUEST['estimatef62'],
        'G62' => $_REQUEST['estimateg62'],
        'H62' => $_REQUEST['estimateh62'],
        'I62' => $_REQUEST['estimatei62'],
        'J62' => $_REQUEST['estimatej62'],
        'M62' => $_REQUEST['estimatem62'],

        'A63' => 'DUCT SUPP, & HANG. BELOW ROOF',
        'D63' => isset($_SESSION['estimated63']) ? $_SESSION['estimated63'] : '-',
        'E63' => $_REQUEST['estimatee63'],
        'F63' => $_REQUEST['estimatef63'],
        'G63' => $_REQUEST['estimateg63'],
        'H63' => isset($_SESSION['estimateh63']) ? $_SESSION['estimateh63'] : '-',
        'I63' => $_REQUEST['estimatei63'],
        'J63' => $_REQUEST['estimatej63'],

        'A64' => 'DUCT SUPPORT ON THE ROOF',
        'D64' => isset($_SESSION['estimated64']) ? $_SESSION['estimated64'] : '-',
        'E64' => $_REQUEST['estimatee64'],
        'F64' => $_REQUEST['estimatef64'],
        'G64' => $_REQUEST['estimateg64'],
        'H64' => isset($_SESSION['estimateh64']) ? $_SESSION['estimateh64'] : '-',
        'I64' => $_REQUEST['estimatei64'],
        'J64' => $_REQUEST['estimatej64'],

        'A65' => 'SEISMIC BRACING OVER 6SQ',
        'D65' => isset($_SESSION['estimated65']) ? $_SESSION['estimated65'] : '-',
        'E65' => $_REQUEST['estimatee65'],
        'F65' => $_REQUEST['estimatef65'],
        'G65' => $_REQUEST['estimateg65'],
        'H65' => isset($_SESSION['estimateh65']) ? $_SESSION['estimateh65'] : '-',
        'I65' => isset($_SESSION['estimatei65']) ? $_SESSION['estimatei65'] : '-',
        'J65' => $_REQUEST['estimatej65'],

        'A66' => 'DUCT SILENCER OR SOUND TRAP',
        'D66' => $_REQUEST['estimated66'],
        'E66' => $_REQUEST['estimatee66'],
        'F66' => $_REQUEST['estimatef66'],
        'G66' => $_REQUEST['estimateg66'],
        'H66' => $_REQUEST['estimateh66'],
        'I66' => isset($_SESSION['estimatei66']) ? $_SESSION['estimatei66'] : '-',
        'J66' => $_REQUEST['estimatej66'],
        'L66' => 'In NSW Quote',

        'A67' => 'Seismic Calculation',
        'D67' => $_REQUEST['estimated67'],
        'E67' => $_REQUEST['estimatee67'],
        'F67' => $_REQUEST['estimatef67'],
        'G67' => $_REQUEST['estimateg67'],
        'H67' => isset($_SESSION['estimateh67']) ? $_SESSION['estimateh67'] : '-',
        'I67' => $_REQUEST['estimatei67'],
        'J67' => $_REQUEST['estimatej67'],

        'A69' => 'TEMP CONTROLS ',
        'D69' => $_REQUEST['estimated69'],
        'E69' => $_REQUEST['estimatee69'],
        'F69' => $_REQUEST['estimatef69'],
        'G69' => $_REQUEST['estimateg69'],
        'H69' => $_REQUEST['estimateh69'],
        'I69' => $_REQUEST['estimatei69'],
        'J69' => $_REQUEST['estimatej69'],
        'L69' => 'by NS',
        'M69' => $_REQUEST['estimatem69'],

        'A70' => 'HVAC Electrical Conduit & Wiring ( Subcontractor)',
        'D70' => $_REQUEST['estimated70'],
        'E70' => 'Hours',
        'F70' => 'Rate',
        'G70' => $_REQUEST['estimateg70'],
        'H70' => $_REQUEST['estimateh70'],
        'I70' => $_REQUEST['estimatei70'],
        'J70' => $_REQUEST['estimatej70'],
        'M70' => $_REQUEST['estimatem70'],

        'A71' => 'Extra Hours Cleaning ( Weekly Formula)',
        'D71' => isset($_SESSION['jobinfoe24']) ? $_SESSION['jobinfoe24'] : '-',
        'E71' => $_REQUEST['estimatee71'],
        'F71' => $_REQUEST['estimatef71'],
        'G71' => $_REQUEST['estimateg71'],
        'H71' => $_REQUEST['estimateh71'],
        'I71' => isset($_SESSION['estimatei71']) ? $_SESSION['estimatei71'] : '-',
        'J71' => $_REQUEST['estimatej71'],

        'A72' => 'Extra Hours Cleaning ( Entire Job Allowance)',
        'D72' => isset($_SESSION['jobinfoe24']) ? $_SESSION['jobinfoe24'] : '-',
        'E72' => $_REQUEST['estimatee72'],
        'F72' => $_REQUEST['estimatef72'],
        'G72' => $_REQUEST['estimateg72'],
        'H72' => $_REQUEST['estimateh72'],
        'I72' => isset($_SESSION['estimatei72']) ? $_SESSION['estimatei72'] : '-',
        'J72' => $_REQUEST['estimatej72'],

        'A73' => 'Allowance of additional Hours Regular time',
        'D73' => $_REQUEST['estimated73'],
        'E73' => $_REQUEST['estimatee73'],
        'F73' => $_REQUEST['estimatef73'],
        'G73' => $_REQUEST['estimateg73'],
        'H73' => $_REQUEST['estimateh73'],
        'I73' => isset($_SESSION['estimatei73']) ? $_SESSION['estimatei73'] : '-',
        'J73' => $_REQUEST['estimatej73'],

        'A74' => 'Allowance of additional 1.5 time',
        'D74' => $_REQUEST['estimated74'],
        'E74' => $_REQUEST['estimatee74'],
        'F74' => $_REQUEST['estimatef74'],
        'G74' => $_REQUEST['estimateg74'],
        'H74' => $_REQUEST['estimateh74'],
        'I74' => isset($_SESSION['estimatei74']) ? $_SESSION['estimatei74'] : '-',
        'J74' => $_REQUEST['estimatej74'],

        'A75' => 'ALLOWANCE',
        'D75' => $_REQUEST['estimated75'],
        'E75' => $_REQUEST['estimatee75'],
        'F75' => $_REQUEST['estimatef75'],
        'G75' => $_REQUEST['estimateg75'],
        'H75' => $_REQUEST['estimateh75'],
        'I75' => $_REQUEST['estimatei75'],
        'J75' => $_REQUEST['estimatej75'],

        'A76' => 'CRANE/HELICOPTER',
        'D76' => $_REQUEST['estimated76'],
        'E76' => $_REQUEST['estimatee76'],
        'F76' => $_REQUEST['estimatef76'],
        'G76' => $_REQUEST['estimateg76'],
        'H76' => $_REQUEST['estimateh76'],
        'I76' => $_REQUEST['estimatei76'],
        'J76' => $_REQUEST['estimatej76'],

        'A77' => 'SCISSOR LIFT/FORKLIFT',
        'D77' => $_REQUEST['estimated77'],
        'E77' => $_REQUEST['estimatee77'],
        'F77' => $_REQUEST['estimatef77'],
        'G77' => $_REQUEST['estimateg77'],
        'H77' => $_REQUEST['estimateh77'],
        'I77' => $_REQUEST['estimatei77'],
        'J77' => $_REQUEST['estimatej77'],

        'A78' => 'TRAVEL / SUPERVISION',
        'C78' => $_REQUEST['estimatec78'],
        'D78' => $_REQUEST['estimated78'],
        'E78' => $_REQUEST['estimatee78'],
        'F78' => $_REQUEST['estimatef78'],
        'G78' => $_REQUEST['estimateg78'],
        'H78' => $_REQUEST['estimateh78'],
        'I78' => isset($_SESSION['estimatei78']) ? $_SESSION['estimatei78'] : '-',
        'J78' => $_REQUEST['estimatej78'],

        'A79' => 'CLEAN-UP / TRASH CONTAINER',
        'C79' => $_REQUEST['estimatec79'],
        'D79' => $_REQUEST['estimated79'],
        'E79' => $_REQUEST['estimatee79'],
        'F79' => $_REQUEST['estimatef79'],
        'G79' => $_REQUEST['estimateg79'],
        'H79' => $_REQUEST['estimateh79'],
        'I79' => isset($_SESSION['estimatei79']) ? $_SESSION['estimatei79'] : '-',
        'J79' => $_REQUEST['estimatej79'],

        'A80' => 'START-UP A/C / Modulating Power',
        'D80' => isset($_SESSION['estimated80']) ? $_SESSION['estimated80'] : '-',
        'E80' => $_REQUEST['estimatee80'],
        'F80' => $_REQUEST['estimatef80'],
        'G80' => $_REQUEST['estimateg80'],
        'H80' => $_REQUEST['estimateh80'],
        'I80' => isset($_SESSION['estimatei80']) ? $_SESSION['estimatei80'] : '-',
        'J80' => $_REQUEST['estimatej80'],

        'A81' => 'Exhaust Fan Startup',
        'D81' => isset($_SESSION['estimated81']) ? $_SESSION['estimated81'] : '-',
        'E81' => $_REQUEST['estimatee81'],
        'F81' => $_REQUEST['estimatef81'],
        'G81' => $_REQUEST['estimateg81'],
        'H81' => $_REQUEST['estimateh81'],
        'I81' => isset($_SESSION['estimatei81']) ? $_SESSION['estimatei81'] : '-',
        'J81' => $_REQUEST['estimatej81'],

        'A82' => 'START-UP MAU',
        'D82' => isset($_SESSION['estimated82']) ? $_SESSION['estimated82'] : '-',
        'E82' => $_REQUEST['estimatee82'],
        'F82' => $_REQUEST['estimatef82'],
        'G82' => $_REQUEST['estimateg82'],
        'H82' => $_REQUEST['estimateh82'],
        'I82' => isset($_SESSION['estimatei82']) ? $_SESSION['estimatei82'] : '-',
        'J82' => $_REQUEST['estimatej82'],

        'A83' => 'START-UP FACTORY',
        'D83' => isset($_SESSION['estimated83']) ? $_SESSION['estimated83'] : '-',
        'E83' => $_REQUEST['estimatee83'],
        'F83' => $_REQUEST['estimatef83'],
        'G83' => $_REQUEST['estimateg83'],
        'H83' => $_REQUEST['estimateh83'],
        'I83' => isset($_SESSION['estimatei83']) ? $_SESSION['estimatei83'] : '-',
        'J83' => $_REQUEST['estimatej83'],

        'A84' => 'SHOP DRAWING/DETAILING',
        'C84' => "Multiplier",
        'D84' => isset($_SESSION['estimated84']) ? $_SESSION['estimated84'] : '-',
        'E84' => $_REQUEST['estimatee84'],
        'F84' => $_REQUEST['estimatef84'],
        'G84' => $_REQUEST['estimateg84'],
        'H84' => $_REQUEST['estimateh84'],
        'I84' => isset($_SESSION['estimatei84']) ? $_SESSION['estimatei84'] : '-',
        'J84' => $_REQUEST['estimatej84'],

        'A85' => 'BIM',
        'B85' => "Multiplier",
        'C85' => isset($_SESSION['estimatec85']) ? $_SESSION['estimatec85'] : '-',
        'D85' => isset($_SESSION['estimated85']) ? $_SESSION['estimated85'] : '-',
        'E85' => $_REQUEST['estimatee85'],
        'F85' => $_REQUEST['estimatef85'],
        'G85' => $_REQUEST['estimateg85'],
        'H85' => $_REQUEST['estimateh85'],
        'I85' => isset($_SESSION['estimatei85']) ? $_SESSION['estimatei85'] : '-',
        'J85' => $_REQUEST['estimatej85'],

        'A86' => 'LEED/COMMISSIONING',
        'D86' => $_REQUEST['estimated86'],
        'E86' => $_REQUEST['estimatee86'],
        'F86' => $_REQUEST['estimatef86'],
        'G86' => $_REQUEST['estimateg86'],
        'H86' => $_REQUEST['estimateh86'],
        'I86' => isset($_SESSION['estimatei86']) ? $_SESSION['estimatei86'] : '-',
        'J86' => $_REQUEST['estimatej86'],

        'A87' => 'TITLE 24 ACCEPTANCE TESTING see note',
        'D87' => $_REQUEST['estimated87'],
        'E87' => $_REQUEST['estimatee87'],
        'F87' => $_REQUEST['estimatef87'],
        'G87' => $_REQUEST['estimateg87'],
        'H87' => $_REQUEST['estimateh87'],
        'I87' => isset($_SESSION['estimatei87']) ? $_SESSION['estimatei87'] : '-',
        'J87' => $_REQUEST['estimatej87'],

        'A88' => 'Additional Software',
        'D88' => $_REQUEST['estimated88'],
        'E88' => $_REQUEST['estimatee88'],
        'F88' => $_REQUEST['estimatef88'],
        'G88' => $_REQUEST['estimateg88'],
        'H88' => $_REQUEST['estimateh88'],
        'I88' => $_REQUEST['estimatei88'],
        'J88' => $_REQUEST['estimatej88'],

        'A89' => 'Additional Insurance Coverage',
        'D89' => $_REQUEST['estimated89'],
        'E89' => $_REQUEST['estimatee89'],
        'F89' => $_REQUEST['estimatef89'],
        'G89' => $_REQUEST['estimateg89'],
        'H89' => $_REQUEST['estimateh89'],
        'I89' => $_REQUEST['estimatei89'],
        'J89' => $_REQUEST['estimatej89'],

        'A90' => 'Bond (FOR PRIME JOBS) 1.8% OF SUBTOTAL',
        'D90' => $_REQUEST['estimated90'],
        'E90' => $_REQUEST['estimatee90'],
        'F90' => $_REQUEST['estimatef90'],
        'G90' => $_REQUEST['estimateg90'],
        'H90' => $_REQUEST['estimateh90'],
        'I90' => $_REQUEST['estimatei90'],
        'J90' => $_REQUEST['estimatej90'],
        'L90' => isset($_SESSION['estimatel90']) ? $_SESSION['estimatel90'] : '-',

        'A91' => 'Subcontractor Markup',
        'D91' => $_REQUEST['estimated91'],
        'E91' => $_REQUEST['estimatee91'],
        'F91' => $_REQUEST['estimatef91'],
        'G91' => isset($_SESSION['estimateg91']) ? $_SESSION['estimateg91'] : '-',
        'H91' => isset($_SESSION['estimateh91']) ? $_SESSION['estimateh91'] : '-',
        'I91' => isset($_SESSION['estimatei91']) ? $_SESSION['estimatei91'] : '-',
        'J91' => isset($_SESSION['estimatej91']) ? $_SESSION['estimatej91'] : '-',
        'L91' => isset($_SESSION['estimatel91']) ? $_SESSION['estimatel91'] : '-',

        'A92' => 'Material Markup',
        'D92' => $_REQUEST['estimated92'],
        'E92' => $_REQUEST['estimatee92'],
        'F92' => $_REQUEST['estimatef92'],
        'G92' => "AMOUNT",
        'H92' => "MATERIAL/EQUIPMENT",
        'J92' => isset($_SESSION['estimatej92']) ? $_SESSION['estimatej92'] : '-',
        'L92' => isset($_SESSION['estimatel92']) ? $_SESSION['estimatel92'] : '-',

        'A93' => 'Tax Rate',
        'D93' => $_REQUEST['estimated93'],
        'E93' => $_REQUEST['estimatee93'],
        'F93' => $_REQUEST['estimatef93'],
        'G93' => $_REQUEST['estimateg93'],
        'H93' => "TOTAL TAX",
        'J93' => isset($_SESSION['estimatej93']) ? $_SESSION['estimatej93'] : '-',
        'L93' => isset($_SESSION['estimatel93']) ? $_SESSION['estimatel93'] : '-',

        'A94' => 'Labor Markup',
        'D94' => $_REQUEST['estimated94'],
        'E94' => $_REQUEST['estimatee94'],
        'F94' => $_REQUEST['estimatef94'],
        'G94' => $_REQUEST['estimateg94'],
        'H94' => "TOTAL LABOR",
        'J94' => isset($_SESSION['estimatej94']) ? $_SESSION['estimatej94'] : '-',
        'L94' => isset($_SESSION['estimatel94']) ? $_SESSION['estimatel94'] : '-',

        'H95' => "SUBCONTRACTOR",
        'J95' => isset($_SESSION['estimatej95']) ? $_SESSION['estimatej95'] : '-',
        'L95' => isset($_SESSION['estimatel95']) ? $_SESSION['estimatel95'] : '-',

        'H96' => "SUB-TOTAL",
        'J96' => isset($_SESSION['estimatej96']) ? $_SESSION['estimatej96'] : '-',

        'G97' => isset($_SESSION['estimateg97']) ? $_SESSION['estimateg97'] : '-',
        'H97' => "SUB-TOTAL x 10%",
        'J97' => isset($_SESSION['estimatej97']) ? $_SESSION['estimatej97'] : '-',

        'G98' => isset($_SESSION['estimateg98']) ? $_SESSION['estimateg98'] : '-',
        'H98' => "TOTAL",
        'J98' => $_REQUEST['estimatej97'],

        'J104' => $_REQUEST['estimatej104'],

    ];

    $filename = 'estimate'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimate Sheet</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<style>
    /* Apply the same styles to select as to input */
    .select-input {
        padding: 5px;
        width: 100%;
        /* border: 2px solid #aaa; */
        border-radius: 6px;
        outline: none;
        font-size: 16px;
        transition: border-color 0.3s ease;
        box-sizing: border-box;
        border : none;
        background: transparent !important;
        border-bottom: 0.5px solid #000 !important;

        option{
            background: #ECECEC;
            width: 100%;
        }
    }
    

    /* Hover State */
    /* .select-input:hover {
        border-color: #666;
    } */

    /* Focus State */
    /* .select-input:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    } */

    .estimatedDownDataTable{
        background: #ECECEC;
        /* box-shadow: 1px 2px 3px 4px #82868E; */
    }
#w7{
    border : none !important;
        outline : none !important;
        background : transparent !important;
    color : white;
    border-bottom: 0.5px solid #000 !important;
}
    .estimatedDownDataTable input {
        border : none !important;
        outline : none !important;
        background : transparent !important;
        border-bottom: 0.5px solid #000 !important;
    }
    .estimatedNavbar{
        background: #ECECEC;
        /* box-shadow: 1px 2px 3px 4px #82868E; */
    }
    .estimatedNavbar input , .estimatedNavHeader input{
        border : none !important;
        outline : none !important;
        background : transparent !important;
        border-bottom: 0.5px solid #000 !important;
    }
    .estimatedNavbar td{
        font-weight: 600;
        font-size: 20px;
    }
    .estimatedNavHeader{
        background: #ECECEC;
        /* box-shadow: 1px 2px 3px 4px #82868E; */
    }
    tr input{
        border-bottom: 0.5px solid #000 !important;
    }
</style>
<body>
<div class="section">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
     <table class="table1">
        <!-- <tr style="text-align: center;position:sticky;top:0; background-color:white;">
            <td style="text-align: center;position:sticky;left:0; background-color:white;"></td>
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
        <tr class="estimatedNavbar">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td> -->
            <td >West-Tech</td>
            <td></td>
            <td>Estimate Sheet</td>
            <td ><input type="text" name="estimated1" readonly value="<?php if (isset($estimated1)) {
                echo $estimated1;
            } ?>"></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
            <td ><input type="text" name="estimatei1" readonly value="<?php if (isset($estimatei1)) {
                echo $estimatei1;
            } ?>"></td>
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
           <td></td>
        </tr>
        <tr class="estimatedNavHeader">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td> -->
            <td >JOB NAME</td>
            <td></td>
            <td><input type="text" name="estimatec2" readonly value="<?php if (isset($estimatec2)) {
                echo $estimatec2;
            } ?>"></td>
            <td></td>
            <td >3-10 Ton</td>
            <td >10 and Above</td>
            <td></td>
            <td colspan="2">PUBLISHED BUDGET</td>
            <!-- <td></td> -->
            <td ><input type="text" name="estimatej2" readonly value="<?php if (isset($estimatej2)) {
                echo $estimatej2;
            } ?>"></td>
            <td></td>
            <td >1- Do we have an exhaust/Supply/Gravity weight over 100lps on the plans</td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimatep2" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatet2 = isset($_REQUEST['estimatet2']) ? $_REQUEST['estimatet2'] : 'YES';
                    $estimatet3 = isset($_REQUEST['estimatet3']) ? $_REQUEST['estimatet3'] : 'NO';
                    ?>
                    <option type="text" value="<?php echo $estimatet2; ?>"><?php echo $estimatet2; ?></option>
                    <option type="text" value="<?php echo $estimatet3; ?>"><?php echo $estimatet3; ?></option>
                </select>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatet2" class="custom-input" value="<?php if (isset($_REQUEST['estimatet2'])) {
                echo $_REQUEST['estimatet2'];
            } else {
                echo 'YES';
            } ?>"></td>
            <td><input type="text" name="estimateu2" class="custom-input" value="<?php if (isset($_REQUEST['estimateu2'])) {
                echo $_REQUEST['estimateu2'];
            } else {
                echo 'Carrier';
            } ?>"></td>
            <td><input type="text" name="estimatev2" class="custom-input" value="<?php if (isset($_REQUEST['estimatev2'])) {
                echo $_REQUEST['estimatev2'];
            } else {
                echo 'NSW';
            } ?>"></td>
            <td><input type="text" name="estimatew2" class="custom-input" value="<?php if (isset($_REQUEST['estimatew2'])) {
                echo $_REQUEST['estimatew2'];
            } else {
                echo 'Carrier';
            } ?>"></td>
        </tr>
        <tr class="estimatedNavHeader">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td> -->
            <td >LOCATION</td>
            <td></td>
            <td ><input type="text" name="estimatec3" readonly value="<?php if (isset($estimatec3)) {
                echo $estimatec3;
            } ?>"></td>
            <td># RTU</td>
            <td><input type="text" name="estimatee3" readonly value="<?php if (isset($estimatee3)) {
                echo $estimatee3;
            } ?>"></td>
            <td><input type="text" name="estimatef3" readonly value="<?php if (isset($estimatef3)) {
                echo $estimatef3;
            } ?>"></td>
            <td></td>
            <td colspan="2">DUE DATE</td>
            <!-- <td></td> -->
            <td ><input type="text" name="estimatej3" readonly value="<?php if (isset($estimatej3)) {
                echo $estimatej3;
            } ?>"></td>
            <td></td>
            <td >2- Do we have any makeup Air or AHU over 900lb on the plans</td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimatep3" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatet2 = isset($_REQUEST['estimatet2']) ? $_REQUEST['estimatet2'] : 'YES';
                    $estimatet3 = isset($_REQUEST['estimatet3']) ? $_REQUEST['estimatet3'] : 'NO';
                    ?>
                    <option type="text" value="<?php echo $estimatet2; ?>"><?php echo $estimatet2; ?></option>
                    <option type="text" value="<?php echo $estimatet3; ?>"><?php echo $estimatet3; ?></option>
                </select>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatet3" class="custom-input" value="<?php if (isset($_REQUEST['estimatet3'])) {
                echo $_REQUEST['estimatet3'];
            } else {
                echo 'NO';
            } ?>"></td>
            <td><input type="text" name="estimateu3" class="custom-input" value="<?php if (isset($_REQUEST['estimateu3'])) {
                echo $_REQUEST['estimateu3'];
            } else {
                echo 'Trane';
            } ?>"></td>
            <td><input type="text" name="estimatev3" class="custom-input" value="<?php if (isset($_REQUEST['estimatev3'])) {
                echo $_REQUEST['estimatev3'];
            } else {
                echo 'Haldeman';
            } ?>"></td>
            <td><input type="text" name="estimatew3" class="custom-input" value="<?php if (isset($_REQUEST['estimatew3'])) {
                echo $_REQUEST['estimatew3'];
            } else {
                echo 'Mitsubishi';
            } ?>"></td>
        </tr>
        <tr class="estimatedNavHeader">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td> -->
            <td >DISTANCE TO SITE: </td>
            <td></td>
            <td ><input type="text" name="estimatec4" readonly value="<?php if (isset($estimatec4)) {
                echo $estimatec4;
            } ?>"></td>
            <td># PE</td>
            <td ><input type="text" name="estimatee4" readonly value="<?php if (isset($estimatee4)) {
                echo $estimatee4;
            } ?>"></td>
            <td ><input type="text" name="estimatef4" readonly value="<?php if (isset($estimatef4)) {
                echo $estimatef4;
            } ?>"></td>
            <td></td>
            <td colspan="2">TIME</td>
            <!-- <td></td> -->
            <td ><input type="text" name="estimatej4" readonly value="<?php if (isset($estimatej4)) {
                echo $estimatej4;
            } ?>"></td>
            <td></td>
            <td >3- Should we add labour allowance due to high duct work installation </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimatep4" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatet2 = isset($_REQUEST['estimatet2']) ? $_REQUEST['estimatet2'] : 'YES';
                    $estimatet3 = isset($_REQUEST['estimatet3']) ? $_REQUEST['estimatet3'] : 'NO';
                    ?>
                    <option type="text" value="<?php echo $estimatet2; ?>"><?php echo $estimatet2; ?></option>
                    <option type="text" value="<?php echo $estimatet3; ?>"><?php echo $estimatet3; ?></option>
                </select>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimateu4" class="custom-input" value="<?php if (isset($_REQUEST['estimateu4'])) {
                echo $_REQUEST['estimateu4'];
            } else {
                echo 'York';
            } ?>"></td>
            <td><input type="text" name="estimatev4" class="custom-input" value="<?php if (isset($_REQUEST['estimatev4'])) {
                echo $_REQUEST['estimatev4'];
            } else {
                echo 'Toro';
            } ?>"></td>
            <td><input type="text" name="estimatew4" class="custom-input" value="<?php if (isset($_REQUEST['estimatew4'])) {
                echo $_REQUEST['estimatew4'];
            } else {
                echo 'Samsong';
            } ?>"></td>
        </tr>
        <tr class="estimatedNavHeader">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td> -->
            <td >CONTRACTOR: </td>
            <td></td>
            <td ><input type="text" name="estimatec5" readonly value="<?php if (isset($estimatec5)) {
                echo $estimatec5;
            } ?>"></td>
            <td>TOTAL TON</td>
            <td ><input type="text" name="estimatee5" readonly value="<?php if (isset($estimatee5)) {
                echo $estimatee5;
            } ?>"></td>
            <td ></td>
            <td></td>
           <td colspan="2">PROJECT START</td>
            <!-- <td></td> -->
            <td ><input type="text" name="estimatej5" readonly value="<?php if (isset($estimatej5)) {
                echo $estimatej5;
            } ?>"></td>
            <td></td>
            <td >4- Should we inlcude BIM in our BID </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimatep5" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatet2 = isset($_REQUEST['estimatet2']) ? $_REQUEST['estimatet2'] : 'YES';
                    $estimatet3 = isset($_REQUEST['estimatet3']) ? $_REQUEST['estimatet3'] : 'NO';
                    ?>
                    <option type="text" value="<?php echo $estimatet2; ?>"><?php echo $estimatet2; ?></option>
                    <option type="text" value="<?php echo $estimatet3; ?>"><?php echo $estimatet3; ?></option>
                </select>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimateu5" class="custom-input" value="<?php if (isset($_REQUEST['estimateu5'])) {
                echo $_REQUEST['estimateu5'];
            } else {
                echo 'Lennox';
            } ?>"></td>
            <td><input type="text" name="estimatev5" class="custom-input" value="<?php if (isset($_REQUEST['estimatev5'])) {
                echo $_REQUEST['estimatev5'];
            } else {
                echo 'APS';
            } ?>"></td>
            <td><input type="text" name="estimatew5" class="custom-input" value="<?php if (isset($_REQUEST['estimatew5'])) {
                echo $_REQUEST['estimatew5'];
            } else {
                echo 'Trane';
            } ?>"></td>
        </tr>
        <tr class="estimatedNavHeader">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td> -->
            <td>ENGR:</td>
            <td></td>
            <td><input type="text" name="estimatec6" readonly value="<?php if (isset($estimatec6)) {
                echo $estimatec6;
            } ?>"></td>
            <td>FLOORS</td>
            <td><input type="text" name="estimatee6" readonly value="<?php if (isset($estimatee6)) {
                echo $estimatee6;
            } ?>"></td>
            <td></td>
            <td></td>
            <td colspan="2">PROJECT FINISHED</td>
            <!-- <td></td> -->
            <td><input type="text" name="estimatej6" readonly value="<?php if (isset($estimatej6)) {
                echo $estimatej6;
            } ?>"></td>
            <td></td>
            <td>5- Should we inlcude Bond on this Project </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimatep6" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatet2 = isset($_REQUEST['estimatet2']) ? $_REQUEST['estimatet2'] : 'YES';
                    $estimatet3 = isset($_REQUEST['estimatet3']) ? $_REQUEST['estimatet3'] : 'NO';
                    ?>
                    <option type="text" value="<?php echo $estimatet2; ?>"><?php echo $estimatet2; ?></option>
                    <option type="text" value="<?php echo $estimatet3; ?>"><?php echo $estimatet3; ?></option>
                </select>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatev6" class="custom-input" value="<?php if (isset($_REQUEST['estimatev6'])) {
                echo $_REQUEST['estimatev6'];
            } else {
                echo 'Others';
            } ?>"></td>
            <td><input type="text" name="estimatew6" class="custom-input" value="<?php if (isset($_REQUEST['estimatew6'])) {
                echo $_REQUEST['estimatew6'];
            } else {
                echo 'LG';
            } ?>"></td>
        </tr>
        <tr style="text-align: center;position:sticky;top:5%; background: #48494B; color : #fff;">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td> -->
            <td >DESCRIPTION</td>
            <td></td>
            <td></td>
            <td>QTY</td>
            <td>M $$$</td>
            <td>L $$$</td>
            <td>EQUIPMENT</td>
            <td>MATERIAL</td>
            <td>LABOR</td>
            <td>SUB-CONT</td>
            <td></td>
            <td>WARNING</td>
            <td>Subcontractor</td>
            <td>Manufacture</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatew7" id="w7" class="custom-input" value="<?php if (isset($_REQUEST['estimatew7'])) {
                echo $_REQUEST['estimatew7'];
            } else {
                echo 'Daikin';
            } ?>"></td>
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td> -->
            <td >ROOFTOP A/C UNITS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated8" class="custom-input" readonly value="<?php if (isset($estimated8)) {
                echo $estimated8;
            } ?>"></td>
            <td><input type="text" name="estimatee8" class="custom-input" value="<?php if (isset($_REQUEST['estimatee8'])) {
                echo $_REQUEST['estimatee8'];
            } ?>"></td>
            <td><input type="text" name="estimatef8" class="custom-input" value="<?php if (isset($_REQUEST['estimatef8'])) {
                echo $_REQUEST['estimatef8'];
            } ?>"></td>
            <td><input type="text" name="estimateg8" class="custom-input" value="<?php if (isset($_REQUEST['estimateg8'])) {
                echo $_REQUEST['estimateg8'];
            } ?>"></td>
            <td><input type="text" name="estimateh8" class="custom-input" value="<?php if (isset($_REQUEST['estimateh8'])) {
                echo $_REQUEST['estimateh8'];
            } ?>"></td>
            <td><input type="text" name="estimatei8" class="custom-input" readonly value="<?php if (isset($estimatei8)) {
                echo $estimatei8;
            } ?>"></td>
            <td><input type="text" name="estimatej8" class="custom-input" value="<?php if (isset($_REQUEST['estimatej8'])) {
                echo $_REQUEST['estimatej8'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimaten8" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimateu2 = isset($_REQUEST['estimateu2']) ? $_REQUEST['estimateu2'] : 'Carrier';
                    $estimateu3 = isset($_REQUEST['estimateu3']) ? $_REQUEST['estimateu3'] : 'Trane';
                    $estimateu4 = isset($_REQUEST['estimateu4']) ? $_REQUEST['estimateu4'] : 'York';
                    $estimateu5 = isset($_REQUEST['estimateu5']) ? $_REQUEST['estimateu5'] : 'Lennox';
                    ?>
                    <option type="text" value="<?php echo $estimateu2; ?>"><?php echo $estimateu2; ?></option>
                    <option type="text" value="<?php echo $estimateu3; ?>"><?php echo $estimateu3; ?></option>
                    <option type="text" value="<?php echo $estimateu4; ?>"><?php echo $estimateu4; ?></option>
                    <option type="text" value="<?php echo $estimateu5; ?>"><?php echo $estimateu5; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td> -->
            <td>ROOFTOP A/C UNITS with Modulating Power Exhaust</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated9" readonly class="custom-input" value="<?php if (isset($estimated9)) {
                echo $estimated9;
            } ?>"></td>
            <td><input type="text" name="estimatee9" class="custom-input" value="<?php if (isset($_REQUEST['estimatee9'])) {
                echo $_REQUEST['estimatee9'];
            } ?>"></td>
            <td><input type="text" name="estimatef9" class="custom-input" value="<?php if (isset($_REQUEST['estimatef9'])) {
                echo $_REQUEST['estimatef9'];
            } ?>"></td>
            <td><input type="text" name="estimateg9" class="custom-input" value="<?php if (isset($_REQUEST['estimateg9'])) {
                echo $_REQUEST['estimateg9'];
            } ?>"></td>
            <td><input type="text" name="estimateh9" class="custom-input" value="<?php if (isset($_REQUEST['estimateh9'])) {
                echo $_REQUEST['estimateh9'];
            } ?>"></td>
            <td><input type="text" name="estimatei9" class="custom-input" readonly value="<?php if (isset($estimatei9)) {
                echo $estimatei9;
            } ?>"></td>
            <td><input type="text" name="estimatej9" class="custom-input" value="<?php if (isset($_REQUEST['estimatej9'])) {
                echo $_REQUEST['estimatej9'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td> -->
            <td>PNEUMATIC TUBING (How many pwr exhaust?)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated10" class="custom-input" readonly value="<?php if (isset($estimated10)) {
                echo $estimated10;
            } ?>"></td>
            <td><input type="text" name="estimatee10" class="custom-input" value="<?php if (isset($_REQUEST['estimatee10'])) {
                echo $_REQUEST['estimatee10'];
            } ?>"></td>
            <td><input type="text" name="estimatef10" class="custom-input" readonly value="<?php if (isset($estimatef10)) {
                echo $estimatef10;
            } ?>"></td>
            <td><input type="text" name="estimateg10" class="custom-input" value="<?php if (isset($_REQUEST['estimateg10'])) {
                echo $_REQUEST['estimateg10'];
            } ?>"></td>
            <td><input type="text" name="estimateh10" class="custom-input" value="<?php if (isset($_REQUEST['estimateh10'])) {
                echo $_REQUEST['estimateh10'];
            } ?>"></td>
            <td><input type="text" name="estimatei10" class="custom-input" readonly value="<?php if (isset($estimatei10)) {
                echo $estimatei10;
            } ?>"></td>
            <td><input type="text" name="estimatej10" class="custom-input" value="<?php if (isset($_REQUEST['estimatej10'])) {
                echo $_REQUEST['estimatej10'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td> -->
            <td>RIGID INSUL AROUND INSIDE CURB</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated11" class="custom-input" value="<?php if (isset($_REQUEST['estimated11'])) {
                echo $_REQUEST['estimated11'];
            } ?>"></td>
            <td><input type="text" name="estimatee11" class="custom-input" value="<?php if (isset($_REQUEST['estimatee11'])) {
                echo $_REQUEST['estimatee11'];
            } ?>"></td>
            <td><input type="text" name="estimatef11" class="custom-input" value="<?php if (isset($_REQUEST['estimatef11'])) {
                echo $_REQUEST['estimatef11'];
            } ?>"></td>
            <td><input type="text" name="estimateg11" class="custom-input" value="<?php if (isset($_REQUEST['estimateg11'])) {
                echo $_REQUEST['estimateg11'];
            } ?>"></td>
            <td><input type="text" name="estimateh11" class="custom-input" readonly value="<?php if (isset($estimateh11)) {
                echo $estimateh11;
            } ?>"></td>
            <td><input type="text" name="estimatei11" class="custom-input" readonly value="<?php if (isset($estimatei11)) {
                echo $estimatei11;
            } ?>"></td>
            <td><input type="text" name="estimatej11" class="custom-input" value="<?php if (isset($_REQUEST['estimatej11'])) {
                echo $_REQUEST['estimatej11'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">12</td> -->
            <td>SETS of A/C UNIT FILTERS (FOR CONSTRUCTION &  CLOSEOUT)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated12" class="custom-input" value="<?php if (isset($_REQUEST['estimated12'])) {
                echo $_REQUEST['estimated12'];
            } ?>"></td>
            <td><input type="text" name="estimatee12" class="custom-input" value="<?php if (isset($_REQUEST['estimatee12'])) {
                echo $_REQUEST['estimatee12'];
            } ?>"></td>
            <td><input type="text" name="estimatef12" class="custom-input" value="<?php if (isset($_REQUEST['estimatef12'])) {
                echo $_REQUEST['estimatef12'];
            } ?>"></td>
            <td><input type="text" name="estimateg12" class="custom-input" value="<?php if (isset($_REQUEST['estimateg12'])) {
                echo $_REQUEST['estimateg12'];
            } ?>"></td>
            <td><input type="text" name="estimateh12" class="custom-input" readonly value="<?php if (isset($estimateh12)) {
                echo $estimateh12;
            } ?>"></td>
            <td><input type="text" name="estimatei12" class="custom-input" readonly value="<?php if (isset($estimatei12)) {
                echo $estimatei12;
            } ?>"></td>
            <td><input type="text" name="estimatej12" class="custom-input" value="<?php if (isset($_REQUEST['estimatej12'])) {
                echo $_REQUEST['estimatej12'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">13</td> -->
            <td>ISOLATOR/CURB/LABOR</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated13" class="custom-input" value="<?php if (isset($_REQUEST['estimated13'])) {
                echo $_REQUEST['estimated13'];
            } ?>"></td>
            <td><input type="text" name="estimatee13" class="custom-input" value="<?php if (isset($_REQUEST['estimatee13'])) {
                echo $_REQUEST['estimatee13'];
            } ?>"></td>
            <td><input type="text" name="estimatef13" class="custom-input" value="<?php if (isset($_REQUEST['estimatef13'])) {
                echo $_REQUEST['estimatef13'];
            } ?>"></td>
            <td><input type="text" name="estimateg13" class="custom-input" value="<?php if (isset($_REQUEST['estimateg13'])) {
                echo $_REQUEST['estimateg13'];
            } ?>"></td>
            <td><input type="text" name="estimateh13" class="custom-input" value="<?php if (isset($_REQUEST['estimateh13'])) {
                echo $_REQUEST['estimateh13'];
            } ?>"></td>
            <td><input type="text" name="estimatei13" class="custom-input" readonly value="<?php if (isset($estimatei13)) {
                echo $estimatei13;
            } ?>"></td>
            <td><input type="text" name="estimatej13" class="custom-input" value="<?php if (isset($_REQUEST['estimatej13'])) {
                echo $_REQUEST['estimatej13'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimaten13" class="custom-input" value="<?php if (isset($_REQUEST['estimaten13'])) {
                echo $_REQUEST['estimaten13'];
            } else {
                echo 'Vibrex';
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">14</td> -->
            <td>EXH / SUPPLY/GRAVITY *WEIGHT up to 100 lbs*</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated14" class="custom-input" value="<?php if (isset($_REQUEST['estimated14'])) {
                echo $_REQUEST['estimated14'];
            } ?>"></td>
            <td><input type="text" name="estimatee14" class="custom-input" value="<?php if (isset($_REQUEST['estimatee14'])) {
                echo $_REQUEST['estimatee14'];
            } ?>"></td>
            <td><input type="text" name="estimatef14" class="custom-input" value="<?php if (isset($_REQUEST['estimatef14'])) {
                echo $_REQUEST['estimatef14'];
            } ?>"></td>
            <td><input type="text" name="estimateg14" class="custom-input" value="<?php if (isset($_REQUEST['estimateg14'])) {
                echo $_REQUEST['estimateg14'];
            } ?>"></td>
            <td><input type="text" name="estimateh14" class="custom-input" value="<?php if (isset($_REQUEST['estimateh14'])) {
                echo $_REQUEST['estimateh14'];
            } ?>"></td>
            <td><input type="text" name="estimatei14" class="custom-input" readonly value="<?php if (isset($estimatei14)) {
                echo $estimatei14;
            } ?>"></td>
            <td><input type="text" name="estimatej14" class="custom-input" value="<?php if (isset($_REQUEST['estimatej14'])) {
                echo $_REQUEST['estimatej14'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel14" class="custom-input" value="IN NSW quote"></td>
            <td></td>
            <td>
                <select type="text" name="estimaten14" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">15</td> -->
            <td>VENTCAPS/ FLASHING & COUNTER</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated15" class="custom-input" value="<?php if (isset($_REQUEST['estimated15'])) {
                echo $_REQUEST['estimated15'];
            } ?>"></td>
            <td><input type="text" name="estimatee15" class="custom-input" value="<?php if (isset($_REQUEST['estimatee15'])) {
                echo $_REQUEST['estimatee15'];
            } ?>"></td>
            <td><input type="text" name="estimatef15" class="custom-input" value="<?php if (isset($_REQUEST['estimatef15'])) {
                echo $_REQUEST['estimatef15'];
            } ?>"></td>
            <td><input type="text" name="estimateg15" class="custom-input" value="<?php if (isset($_REQUEST['estimateg15'])) {
                echo $_REQUEST['estimateg15'];
            } ?>"></td>
            <td><input type="text" name="estimateh15" class="custom-input" readonly value="<?php if (isset($estimateh15)) {
                echo $estimateh15;
            } ?>"></td>
            <td><input type="text" name="estimatei15" class="custom-input" readonly value="<?php if (isset($estimatei15)) {
                echo $estimatei15;
            } ?>"></td>
            <td><input type="text" name="estimatej15" class="custom-input" value="<?php if (isset($_REQUEST['estimatej15'])) {
                echo $_REQUEST['estimatej15'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">16</td> -->
            <td>CANVAS CONNECTION (for A/C units, Exh., AHU) up to 5000lbs</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated16" class="custom-input" value="<?php if (isset($_REQUEST['estimated16'])) {
                echo $_REQUEST['estimated16'];
            } ?>"></td>
            <td><input type="text" name="estimatee16" class="custom-input" value="<?php if (isset($_REQUEST['estimatee16'])) {
                echo $_REQUEST['estimatee16'];
            } ?>"></td>
            <td><input type="text" name="estimatef16" class="custom-input" value="<?php if (isset($_REQUEST['estimatef16'])) {
                echo $_REQUEST['estimatef16'];
            } ?>"></td>
            <td><input type="text" name="estimateg16" class="custom-input" value="<?php if (isset($_REQUEST['estimateg16'])) {
                echo $_REQUEST['estimateg16'];
            } ?>"></td>
            <td><input type="text" name="estimateh16" class="custom-input" readonly value="<?php if (isset($estimateh16)) {
                echo $estimateh16;
            } ?>"></td>
            <td><input type="text" name="estimatei16" class="custom-input" value="<?php if (isset($_REQUEST['estimatei16'])) {
                echo $_REQUEST['estimatei16'];
            } ?>"></td>
            <td><input type="text" name="estimatej16" class="custom-input" value="<?php if (isset($_REQUEST['estimatej16'])) {
                echo $_REQUEST['estimatej16'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">17</td> -->
            <td>SPLIT SYSTEM</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated17" class="custom-input" value="<?php if (isset($_REQUEST['estimated17'])) {
                echo $_REQUEST['estimated17'];
            } ?>"></td>
            <td><input type="text" name="estimatee17" class="custom-input" value="<?php if (isset($_REQUEST['estimatee17'])) {
                echo $_REQUEST['estimatee17'];
            } ?>"></td>
            <td><input type="text" name="estimatef17" class="custom-input" value="<?php if (isset($_REQUEST['estimatef17'])) {
                echo $_REQUEST['estimatef17'];
            } ?>"></td>
            <td><input type="text" name="estimateg17" class="custom-input" value="<?php if (isset($_REQUEST['estimateg17'])) {
                echo $_REQUEST['estimateg17'];
            } ?>"></td>
            <td><input type="text" name="estimateh17" class="custom-input" readonly value="<?php if (isset($estimateh17)) {
                echo $estimateh17;
            } ?>"></td>
            <td><input type="text" name="estimatei17" class="custom-input" readonly value="<?php if (isset($estimatei17)) {
                echo $estimatei17;
            } ?>"></td>
            <td><input type="text" name="estimatej17" class="custom-input" value="<?php if (isset($_REQUEST['estimatej17'])) {
                echo $_REQUEST['estimatej17'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimaten17" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatew2 = isset($_REQUEST['estimatew2']) ? $_REQUEST['estimatew2'] : 'Carrier';
                    $estimatew3 = isset($_REQUEST['estimatew3']) ? $_REQUEST['estimatew3'] : 'Mitsubishi';
                    $estimatew4 = isset($_REQUEST['estimatew4']) ? $_REQUEST['estimatew4'] : 'Samsong';
                    $estimatew5 = isset($_REQUEST['estimatew5']) ? $_REQUEST['estimatew5'] : 'Trane';
                    $estimatew6 = isset($_REQUEST['estimatew6']) ? $_REQUEST['estimatew6'] : 'LG';
                    $estimatew7 = isset($_REQUEST['estimatew7']) ? $_REQUEST['estimatew7'] : 'Daikin';
                    ?>
                    <option type="text" value="<?php echo $estimatew2; ?>"><?php echo $estimatew2; ?></option>
                    <option type="text" value="<?php echo $estimatew3; ?>"><?php echo $estimatew3; ?></option>
                    <option type="text" value="<?php echo $estimatew4; ?>"><?php echo $estimatew4; ?></option>
                    <option type="text" value="<?php echo $estimatew5; ?>"><?php echo $estimatew5; ?></option>
                    <option type="text" value="<?php echo $estimatew6; ?>"><?php echo $estimatew6; ?></option>
                    <option type="text" value="<?php echo $estimatew7; ?>"><?php echo $estimatew7; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">18</td> -->
            <td>PIPING OR DX PIPING (WEST-TECH)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated18" readonly class="custom-input" value="<?php if (isset($estimated18)) {
                echo $estimated18;
            } ?>"></td>
            <td><input type="text" name="estimatee18" class="custom-input" value="<?php if (isset($_REQUEST['estimatee18'])) {
                echo $_REQUEST['estimatee18'];
            } ?>"></td>
            <td><input type="text" name="estimatef18" class="custom-input" value="<?php if (isset($_REQUEST['estimatef18'])) {
                echo $_REQUEST['estimatef18'];
            } ?>"></td>
            <td><input type="text" name="estimateg18" class="custom-input" value="<?php if (isset($_REQUEST['estimateg18'])) {
                echo $_REQUEST['estimateg18'];
            } ?>"></td>
            <td><input type="text" name="estimateh18" class="custom-input" readonly value="<?php if (isset($estimateh18)) {
                echo $estimateh18;
            } ?>"></td>
            <td><input type="text" name="estimatei18" class="custom-input" readonly value="<?php if (isset($estimatei18)) {
                echo $estimatei18;
            } ?>"></td>
            <td><input type="text" name="estimatej18" class="custom-input" value="<?php if (isset($_REQUEST['estimatej18'])) {
                echo $_REQUEST['estimatej18'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">19</td> -->
            <td>Bard units</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated19" class="custom-input" value="<?php if (isset($_REQUEST['estimated19'])) {
                echo $_REQUEST['estimated19'];
            } ?>"></td>
            <td><input type="text" name="estimatee19" class="custom-input" value="<?php if (isset($_REQUEST['estimatee19'])) {
                echo $_REQUEST['estimatee19'];
            } ?>"></td>
            <td><input type="text" name="estimatef19" class="custom-input" value="<?php if (isset($_REQUEST['estimatef19'])) {
                echo $_REQUEST['estimatef19'];
            } ?>"></td>
            <td><input type="text" name="estimateg19" class="custom-input" value="<?php if (isset($_REQUEST['estimateg19'])) {
                echo $_REQUEST['estimateg19'];
            } ?>"></td>
            <td><input type="text" name="estimateh19" class="custom-input" readonly value="<?php if (isset($estimateh19)) {
                echo $estimateh19;
            } ?>"></td>
            <td><input type="text" name="estimatei19" class="custom-input" readonly value="<?php if (isset($estimatei19)) {
                echo $estimatei19;
            } ?>"></td>
            <td><input type="text" name="estimatej19" class="custom-input" value="<?php if (isset($_REQUEST['estimatej19'])) {
                echo $_REQUEST['estimatej19'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">20</td> -->
            <td>FURNACE / COOLING COIL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated20" class="custom-input" value="<?php if (isset($_REQUEST['estimated20'])) {
                echo $_REQUEST['estimated20'];
            } ?>"></td>
            <td><input type="text" name="estimatee20" class="custom-input" value="<?php if (isset($_REQUEST['estimatee20'])) {
                echo $_REQUEST['estimatee20'];
            } ?>"></td>
            <td><input type="text" name="estimatef20" class="custom-input" value="<?php if (isset($_REQUEST['estimatef20'])) {
                echo $_REQUEST['estimatef20'];
            } ?>"></td>
            <td><input type="text" name="estimateg20" class="custom-input" value="<?php if (isset($_REQUEST['estimateg20'])) {
                echo $_REQUEST['estimateg20'];
            } ?>"></td>
            <td><input type="text" name="estimateh20" class="custom-input" readonly value="<?php if (isset($estimateh20)) {
                echo $estimateh20;
            } ?>"></td>
            <td><input type="text" name="estimatei20" class="custom-input" readonly value="<?php if (isset($estimatei20)) {
                echo $estimatei20;
            } ?>"></td>
            <td><input type="text" name="estimatej20" class="custom-input" value="<?php if (isset($_REQUEST['estimatej20'])) {
                echo $_REQUEST['estimatej20'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">21</td> -->
            <td>SECONDARY DRAIN PAN FOR FURNACE / COOLING COIL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated21" class="custom-input" value="<?php if (isset($_REQUEST['estimated21'])) {
                echo $_REQUEST['estimated21'];
            } ?>"></td>
            <td><input type="text" name="estimatee21" class="custom-input" value="<?php if (isset($_REQUEST['estimatee21'])) {
                echo $_REQUEST['estimatee21'];
            } ?>"></td>
            <td><input type="text" name="estimatef21" class="custom-input" value="<?php if (isset($_REQUEST['estimatef21'])) {
                echo $_REQUEST['estimatef21'];
            } ?>"></td>
            <td><input type="text" name="estimateg21" class="custom-input" value="<?php if (isset($_REQUEST['estimateg21'])) {
                echo $_REQUEST['estimateg21'];
            } ?>"></td>
            <td><input type="text" name="estimateh21" class="custom-input" readonly value="<?php if (isset($estimateh21)) {
                echo $estimateh21;
            } ?>"></td>
            <td><input type="text" name="estimatei21" class="custom-input" readonly value="<?php if (isset($estimatei21)) {
                echo $estimatei21;
            } ?>"></td>
            <td><input type="text" name="estimatej21" class="custom-input" value="<?php if (isset($_REQUEST['estimatej21'])) {
                echo $_REQUEST['estimatej21'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">22</td> -->
            <td>SECONDARY DRAIN PAN FOR FAN COIL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated22" class="custom-input" value="<?php if (isset($_REQUEST['estimated22'])) {
                echo $_REQUEST['estimated22'];
            } ?>"></td>
            <td><input type="text" name="estimatee22" class="custom-input" value="<?php if (isset($_REQUEST['estimatee22'])) {
                echo $_REQUEST['estimatee22'];
            } ?>"></td>
            <td><input type="text" name="estimatef22" class="custom-input" value="<?php if (isset($_REQUEST['estimatef22'])) {
                echo $_REQUEST['estimatef22'];
            } ?>"></td>
            <td><input type="text" name="estimateg22" class="custom-input" value="<?php if (isset($_REQUEST['estimateg22'])) {
                echo $_REQUEST['estimateg22'];
            } ?>"></td>
            <td><input type="text" name="estimateh22" class="custom-input" readonly value="<?php if (isset($estimateh22)) {
                echo $estimateh22;
            } ?>"></td>
            <td><input type="text" name="estimatei22" class="custom-input" readonly value="<?php if (isset($estimatei22)) {
                echo $estimatei22;
            } ?>"></td>
            <td><input type="text" name="estimatej22" class="custom-input" value="<?php if (isset($_REQUEST['estimatej22'])) {
                echo $_REQUEST['estimatej22'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">23</td> -->
            <td>PLATFORM COVERS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated23" class="custom-input" value="<?php if (isset($_REQUEST['estimated23'])) {
                echo $_REQUEST['estimated23'];
            } ?>"></td>
            <td><input type="text" name="estimatee23" class="custom-input" value="<?php if (isset($_REQUEST['estimatee23'])) {
                echo $_REQUEST['estimatee23'];
            } ?>"></td>
            <td><input type="text" name="estimatef23" class="custom-input" value="<?php if (isset($_REQUEST['estimatef23'])) {
                echo $_REQUEST['estimatef23'];
            } ?>"></td>
            <td><input type="text" name="estimateg23" class="custom-input" value="<?php if (isset($_REQUEST['estimateg23'])) {
                echo $_REQUEST['estimateg23'];
            } ?>"></td>
            <td><input type="text" name="estimateh23" class="custom-input" readonly value="<?php if (isset($estimateh23)) {
                echo $estimateh23;
            } ?>"></td>
            <td><input type="text" name="estimatei23" class="custom-input" readonly value="<?php if (isset($estimatei23)) {
                echo $estimatei23;
            } ?>"></td>
            <td><input type="text" name="estimatej23" class="custom-input" value="<?php if (isset($_REQUEST['estimatej23'])) {
                echo $_REQUEST['estimatej23'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">24</td> -->
            <td>MAKE UP AIR UNITS / AIR HANDLING UNITS *WEIGHT upto 900lbs*</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated24" class="custom-input" value="<?php if (isset($_REQUEST['estimated24'])) {
                echo $_REQUEST['estimated24'];
            } ?>"></td>
            <td><input type="text" name="estimatee24" class="custom-input" value="<?php if (isset($_REQUEST['estimatee24'])) {
                echo $_REQUEST['estimatee24'];
            } ?>"></td>
            <td><input type="text" name="estimatef24" class="custom-input" value="<?php if (isset($_REQUEST['estimatef24'])) {
                echo $_REQUEST['estimatef24'];
            } ?>"></td>
            <td><input type="text" name="estimateg24" class="custom-input" value="<?php if (isset($_REQUEST['estimateg24'])) {
                echo $_REQUEST['estimateg24'];
            } ?>"></td>
            <td><input type="text" name="estimateh24" class="custom-input" value="<?php if (isset($_REQUEST['estimateh24'])) {
                echo $_REQUEST['estimateh24'];
            } ?>"></td>
            <td><input type="text" name="estimatei24" class="custom-input" readonly value="<?php if (isset($estimatei24)) {
                echo $estimatei24;
            } ?>"></td>
            <td><input type="text" name="estimatej24" class="custom-input" value="<?php if (isset($_REQUEST['estimatej24'])) {
                echo $_REQUEST['estimatej24'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel24" class="custom-input" readonly value="<?php if (isset($estimatel24)) {
                echo $estimatel24;
            } ?>"></td>
            <td></td>
            <td>
                <select type="text" name="estimaten24" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">25</td> -->
            <td>VRF CU/ OUTDOOR</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated25" class="custom-input" value="<?php if (isset($_REQUEST['estimated25'])) {
                echo $_REQUEST['estimated25'];
            } ?>"></td>
            <td><input type="text" name="estimatee25" class="custom-input" value="<?php if (isset($_REQUEST['estimatee25'])) {
                echo $_REQUEST['estimatee25'];
            } ?>"></td>
            <td><input type="text" name="estimatef25" class="custom-input" value="<?php if (isset($_REQUEST['estimatef25'])) {
                echo $_REQUEST['estimatef25'];
            } ?>"></td>
            <td><input type="text" name="estimateg25" class="custom-input" value="<?php if (isset($_REQUEST['estimateg25'])) {
                echo $_REQUEST['estimateg25'];
            } ?>"></td>
            <td><input type="text" name="estimateh25" class="custom-input" value="<?php if (isset($_REQUEST['estimateh25'])) {
                echo $_REQUEST['estimateh25'];
            } ?>"></td>
            <td><input type="text" name="estimatei25" class="custom-input" readonly value="<?php if (isset($estimatei25)) {
                echo $estimatei25;
            } ?>"></td>
            <td><input type="text" name="estimatej25" class="custom-input" value="<?php if (isset($_REQUEST['estimatej25'])) {
                echo $_REQUEST['estimatej25'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel25" class="custom-input" value="VRV's, splits, fans, air dist"></td>
            <td></td>
            <td><input type="text" name="estimaten25" class="custom-input" value="<?php if (isset($_REQUEST['estimaten25'])) {
                echo $_REQUEST['estimaten25'];
            } else {
                echo 'NSW';
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">26</td> -->
            <td>VRF/FC/ INDOOR</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated26" class="custom-input" value="<?php if (isset($_REQUEST['estimated26'])) {
                echo $_REQUEST['estimated26'];
            } ?>"></td>
            <td><input type="text" name="estimatee26" class="custom-input" value="<?php if (isset($_REQUEST['estimatee26'])) {
                echo $_REQUEST['estimatee26'];
            } ?>"></td>
            <td><input type="text" name="estimatef26" class="custom-input" value="<?php if (isset($_REQUEST['estimatef26'])) {
                echo $_REQUEST['estimatef26'];
            } ?>"></td>
            <td><input type="text" name="estimateg26" class="custom-input" value="<?php if (isset($_REQUEST['estimateg26'])) {
                echo $_REQUEST['estimateg26'];
            } ?>"></td>
            <td><input type="text" name="estimateh26" class="custom-input" readonly value="<?php if (isset($estimateh26)) {
                echo $estimateh26;
            } ?>"></td>
            <td><input type="text" name="estimatei26" class="custom-input" readonly value="<?php if (isset($estimatei26)) {
                echo $estimatei26;
            } ?>"></td>
            <td><input type="text" name="estimatej26" class="custom-input" value="<?php if (isset($_REQUEST['estimatej26'])) {
                echo $_REQUEST['estimatej26'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">27</td> -->
            <td>VRF HEAT RECOVERY BOX</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated27" class="custom-input" value="<?php if (isset($_REQUEST['estimated27'])) {
                echo $_REQUEST['estimated27'];
            } ?>"></td>
            <td><input type="text" name="estimatee27" class="custom-input" value="<?php if (isset($_REQUEST['estimatee27'])) {
                echo $_REQUEST['estimatee27'];
            } ?>"></td>
            <td><input type="text" name="estimatef27" class="custom-input" value="<?php if (isset($_REQUEST['estimatef27'])) {
                echo $_REQUEST['estimatef27'];
            } ?>"></td>
            <td><input type="text" name="estimateg27" class="custom-input" value="<?php if (isset($_REQUEST['estimateg27'])) {
                echo $_REQUEST['estimateg27'];
            } ?>"></td>
            <td><input type="text" name="estimateh27" class="custom-input" readonly value="<?php if (isset($estimateh27)) {
                echo $estimateh27;
            } ?>"></td>
            <td><input type="text" name="estimatei27" class="custom-input" readonly value="<?php if (isset($estimatei27)) {
                echo $estimatei27;
            } ?>"></td>
            <td><input type="text" name="estimatej27" class="custom-input" value="<?php if (isset($_REQUEST['estimatej27'])) {
                echo $_REQUEST['estimatej27'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">28</td> -->
            <td>HYDRONIC PIPING/VRF PIPING</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated28" class="custom-input" value="<?php if (isset($_REQUEST['estimated28'])) {
                echo $_REQUEST['estimated28'];
            } ?>"></td>
            <td><input type="text" name="estimatee28" class="custom-input" value="<?php if (isset($_REQUEST['estimatee28'])) {
                echo $_REQUEST['estimatee28'];
            } ?>"></td>
            <td><input type="text" name="estimatef28" class="custom-input" value="<?php if (isset($_REQUEST['estimatef28'])) {
                echo $_REQUEST['estimatef28'];
            } ?>"></td>
            <td><input type="text" name="estimateg28" class="custom-input" value="<?php if (isset($_REQUEST['estimateg28'])) {
                echo $_REQUEST['estimateg28'];
            } ?>"></td>
            <td><input type="text" name="estimateh28" class="custom-input" value="<?php if (isset($estimateh28)) {
                echo $estimateh28;
            } ?>"></td>
            <td><input type="text" name="estimatei28" class="custom-input" value="<?php if (isset($_REQUEST['estimatei28'])) {
                echo $_REQUEST['estimatei28'];
                ;
            } ?>"></td>
            <td><input type="text" name="estimatej28" class="custom-input" value="<?php if (isset($_REQUEST['estimatej28'])) {
                echo $_REQUEST['estimatej28'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel28" class="custom-input" value="<?php if (isset($_REQUEST['estimatel28'])) {
                echo $_REQUEST['estimatel28'];
            } else {
                echo "Air mxg bxs in NSW VRV price ";
            }
            ; ?>"></td>
            <td><input type="text" name="estimatem28" class="custom-input" value="<?php if (isset($_REQUEST['estimatem28'])) {
                echo $_REQUEST['estimatem28'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>VAV BOXES/ZONE DAMPER/VVT BOX</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated29" class="custom-input" value="<?php if (isset($_REQUEST['estimated29'])) {
                echo $_REQUEST['estimated29'];
            } ?>"></td>
            <td><input type="text" name="estimatee29" class="custom-input" value="<?php if (isset($_REQUEST['estimatee29'])) {
                echo $_REQUEST['estimatee29'];
            } ?>"></td>
            <td><input type="text" name="estimatef29" class="custom-input" value="<?php if (isset($_REQUEST['estimatef29'])) {
                echo $_REQUEST['estimatef29'];
            } ?>"></td>
            <td><input type="text" name="estimateg29" class="custom-input" value="<?php if (isset($_REQUEST['estimateg29'])) {
                echo $_REQUEST['estimateg29'];
            } ?>"></td>
            <td><input type="text" name="estimateh29" class="custom-input" value="<?php if (isset($_REQUEST['estimateh29'])) {
                echo $_REQUEST['estimateh29'];
            } ?>"></td>
            <td><input type="text" name="estimatei29" class="custom-input" readonly value="<?php if (isset($estimatei29)) {
                echo $estimatei29;
            } ?>"></td>
            <td><input type="text" name="estimatej29" class="custom-input" value="<?php if (isset($_REQUEST['estimatej29'])) {
                echo $_REQUEST['estimatej29'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel29" class="custom-input" value="<?php if (isset($_REQUEST['estimatel29'])) {
                echo $_REQUEST['estimatel29'];
            } ?>"></td>
            <td></td>
            <td>
                <select type="text" name="estimaten29" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">30</td> -->
            <td>Vehicle Exhaust System</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated30" class="custom-input" value="<?php if (isset($_REQUEST['estimated30'])) {
                echo $_REQUEST['estimated30'];
            } ?>"></td>
            <td><input type="text" name="estimatee30" class="custom-input" value="<?php if (isset($_REQUEST['estimatee30'])) {
                echo $_REQUEST['estimatee30'];
            } ?>"></td>
            <td><input type="text" name="estimatef30" class="custom-input" value="<?php if (isset($_REQUEST['estimatef30'])) {
                echo $_REQUEST['estimatef30'];
            } ?>"></td>
            <td><input type="text" name="estimateg30" class="custom-input" value="<?php if (isset($_REQUEST['estimateg30'])) {
                echo $_REQUEST['estimateg30'];
            } ?>"></td>
            <td><input type="text" name="estimateh30" class="custom-input" value="<?php if (isset($_REQUEST['estimateh30'])) {
                echo $_REQUEST['estimateh30'];
            } ?>"></td>
            <td><input type="text" name="estimatei30" class="custom-input" readonly value="<?php if (isset($estimatei30)) {
                echo $estimatei30;
            } ?>"></td>
            <td><input type="text" name="estimatej30" class="custom-input" value="<?php if (isset($_REQUEST['estimatej30'])) {
                echo $_REQUEST['estimatej30'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimaten30" class="custom-input" value="<?php if (isset($_REQUEST['estimaten30'])) {
                echo $_REQUEST['estimaten30'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>VFD     note: Size, Weight may differ  </td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated31" class="custom-input" value="<?php if (isset($_REQUEST['estimated31'])) {
                echo $_REQUEST['estimated31'];
            } ?>"></td>
            <td><input type="text" name="estimatee31" class="custom-input" value="<?php if (isset($_REQUEST['estimatee31'])) {
                echo $_REQUEST['estimatee31'];
            } ?>"></td>
            <td><input type="text" name="estimatef31" class="custom-input" value="<?php if (isset($_REQUEST['estimatef31'])) {
                echo $_REQUEST['estimatef31'];
            } ?>"></td>
            <td><input type="text" name="estimateg31" class="custom-input" value="<?php if (isset($_REQUEST['estimateg31'])) {
                echo $_REQUEST['estimateg31'];
            } ?>"></td>
            <td><input type="text" name="estimateh31" class="custom-input" value="<?php if (isset($_REQUEST['estimateh31'])) {
                echo $_REQUEST['estimateh31'];
            } ?>"></td>
            <td><input type="text" name="estimatei31" class="custom-input" readonly value="<?php if (isset($estimatei31)) {
                echo $estimatei31;
            } ?>"></td>
            <td><input type="text" name="estimatej31" class="custom-input" value="<?php if (isset($_REQUEST['estimatej31'])) {
                echo $_REQUEST['estimatej31'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimaten31" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>Extra Adder you want</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated32" class="custom-input" value="<?php if (isset($_REQUEST['estimated32'])) {
                echo $_REQUEST['estimated32'];
            } ?>"></td>
            <td><input type="text" name="estimatee32" class="custom-input" value="<?php if (isset($_REQUEST['estimatee32'])) {
                echo $_REQUEST['estimatee32'];
            } ?>"></td>
            <td><input type="text" name="estimatef32" class="custom-input" value="<?php if (isset($_REQUEST['estimatef32'])) {
                echo $_REQUEST['estimatef32'];
            } ?>"></td>
            <td><input type="text" name="estimateg32" class="custom-input" value="<?php if (isset($_REQUEST['estimateg32'])) {
                echo $_REQUEST['estimateg32'];
            } ?>"></td>
            <td><input type="text" name="estimateh32" class="custom-input" readonly value="<?php if (isset($estimateh32)) {
                echo $estimateh32;
            } ?>"></td>
            <td><input type="text" name="estimatei32" class="custom-input" readonly value="<?php if (isset($estimatei32)) {
                echo $estimatei32;
            } ?>"></td>
            <td><input type="text" name="estimatej32" class="custom-input" value="<?php if (isset($_REQUEST['estimatej32'])) {
                echo $_REQUEST['estimatej32'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimaten32" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>AIR DIST: REGISTERS/GRILLS/CEIL CANS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated34" class="custom-input" value="<?php if (isset($_REQUEST['estimated34'])) {
                echo $_REQUEST['estimated34'];
            } ?>"></td>
            <td><input type="text" name="estimatee34" class="custom-input" value="<?php if (isset($_REQUEST['estimatee34'])) {
                echo $_REQUEST['estimatee34'];
            } ?>"></td>
            <td><input type="text" name="estimatef34" class="custom-input" value="<?php if (isset($_REQUEST['estimatef34'])) {
                echo $_REQUEST['estimatef34'];
            } ?>"></td>
            <td><input type="text" name="estimateg34" class="custom-input" value="<?php if (isset($_REQUEST['estimateg34'])) {
                echo $_REQUEST['estimateg34'];
            } ?>"></td>
            <td><input type="text" name="estimateh34" class="custom-input" value="<?php if (isset($_REQUEST['estimateh34'])) {
                echo $_REQUEST['estimateh34'];
            } ?>"></td>
            <td><input type="text" name="estimatei34" class="custom-input" readonly value="<?php if (isset($estimatei34)) {
                echo $estimatei34;
            } ?>"></td>
            <td><input type="text" name="estimatej34" class="custom-input" value="<?php if (isset($_REQUEST['estimatej34'])) {
                echo $_REQUEST['estimatej34'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel34" class="custom-input" value="<?php if (isset($_REQUEST['estimatel34'])) {
                echo $_REQUEST['estimatel24'];
            } ?>"></td>
            <td></td>
            <td>
                <select type="text" name="estimaten34" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>LINED CEILING CANS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated35" class="custom-input" readonly value="<?php if (isset($estimated35)) {
                echo $estimated35;
            } ?>"></td>
            <td><input type="text" name="estimatee35" class="custom-input" value="<?php if (isset($_REQUEST['estimatee35'])) {
                echo $_REQUEST['estimatee35'];
            } ?>"></td>
            <td><input type="text" name="estimatef35" class="custom-input" value="<?php if (isset($_REQUEST['estimatef35'])) {
                echo $_REQUEST['estimatef35'];
            } ?>"></td>
            <td><input type="text" name="estimateg35" class="custom-input" value="<?php if (isset($_REQUEST['estimateg35'])) {
                echo $_REQUEST['estimateg35'];
            } ?>"></td>
            <td><input type="text" name="estimateh35" class="custom-input" readonly value="<?php if (isset($estimateh35)) {
                echo $estimateh35;
            } ?>"></td>
            <td><input type="text" name="estimatei35" class="custom-input" value="<?php if (isset($_REQUEST['estimatei35'])) {
                echo $_REQUEST['estimatei35'];
            } ?>"></td>
            <td><input type="text" name="estimatej35" class="custom-input" value="<?php if (isset($_REQUEST['estimatej35'])) {
                echo $_REQUEST['estimatej35'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>CASCO SILENT FLEX-SEE COMMENTS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated36" class="custom-input" value="<?php if (isset($_REQUEST['estimated36'])) {
                echo $_REQUEST['estimated36'];
            } ?>"></td>
            <td><input type="text" name="estimatee36" class="custom-input" value="<?php if (isset($_REQUEST['estimatee36'])) {
                echo $_REQUEST['estimatee36'];
            } ?>"></td>
            <td><input type="text" name="estimatef36" class="custom-input" value="<?php if (isset($_REQUEST['estimatef36'])) {
                echo $_REQUEST['estimatef36'];
            } ?>"></td>
            <td><input type="text" name="estimateg36" class="custom-input" value="<?php if (isset($_REQUEST['estimateg36'])) {
                echo $_REQUEST['estimateg36'];
            } ?>"></td>
            <td><input type="text" name="estimateh36" class="custom-input" readonly value="<?php if (isset($estimateh36)) {
                echo $estimateh36;
            } ?>"></td>
            <td><input type="text" name="estimatei36" class="custom-input" value="<?php if (isset($_REQUEST['estimatei36'])) {
                echo $_REQUEST['estimatei36'];
            } ?>"></td>
            <td><input type="text" name="estimatej36" class="custom-input" value="<?php if (isset($_REQUEST['estimatej36'])) {
                echo $_REQUEST['estimatej36'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>MECH. Louvers up to 30x30</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated37" class="custom-input" value="<?php if (isset($_REQUEST['estimated37'])) {
                echo $_REQUEST['estimated37'];
            } ?>"></td>
            <td><input type="text" name="estimatee37" class="custom-input" value="<?php if (isset($_REQUEST['estimatee37'])) {
                echo $_REQUEST['estimatee37'];
            } ?>"></td>
            <td><input type="text" name="estimatef37" class="custom-input" value="<?php if (isset($_REQUEST['estimatef37'])) {
                echo $_REQUEST['estimatef37'];
            } ?>"></td>
            <td><input type="text" name="estimateg37" class="custom-input" value="<?php if (isset($_REQUEST['estimateg37'])) {
                echo $_REQUEST['estimateg37'];
            } ?>"></td>
            <td><input type="text" name="estimateh37" class="custom-input" value="<?php if (isset($_REQUEST['estimateh37'])) {
                echo $_REQUEST['estimateh37'];
            } ?>"></td>
            <td><input type="text" name="estimatei37" class="custom-input" readonly value="<?php if (isset($estimatei37)) {
                echo $estimatei37;
            } ?>"></td>
            <td><input type="text" name="estimatej37" class="custom-input" value="<?php if (isset($_REQUEST['estimatej37'])) {
                echo $_REQUEST['estimatej37'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>Cable MVD /YOUNG REG./Remote Damper</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated38" class="custom-input" value="<?php if (isset($_REQUEST['estimated38'])) {
                echo $_REQUEST['estimated38'];
            } ?>"></td>
            <td><input type="text" name="estimatee38" class="custom-input" value="<?php if (isset($_REQUEST['estimatee38'])) {
                echo $_REQUEST['estimatee38'];
            } ?>"></td>
            <td><input type="text" name="estimatef38" class="custom-input" value="<?php if (isset($_REQUEST['estimatef38'])) {
                echo $_REQUEST['estimatef38'];
            } ?>"></td>
            <td><input type="text" name="estimateg38" class="custom-input" value="<?php if (isset($_REQUEST['estimateg38'])) {
                echo $_REQUEST['estimateg38'];
            } ?>"></td>
            <td><input type="text" name="estimateh38" class="custom-input" readonly value="<?php if (isset($estimateh38)) {
                echo $estimateh38;
            } ?>"></td>
            <td><input type="text" name="estimatei38" class="custom-input" readonly value="<?php if (isset($estimatei38)) {
                echo $estimatei38;
            } ?>"></td>
            <td><input type="text" name="estimatej38" class="custom-input" value="<?php if (isset($_REQUEST['estimatej38'])) {
                echo $_REQUEST['estimatej38'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>ISOLATION DAMPERS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated39" class="custom-input" value="<?php if (isset($_REQUEST['estimated39'])) {
                echo $_REQUEST['estimated39'];
            } ?>"></td>
            <td><input type="text" name="estimatee39" class="custom-input" value="<?php if (isset($_REQUEST['estimatee39'])) {
                echo $_REQUEST['estimatee39'];
            } ?>"></td>
            <td><input type="text" name="estimatef39" class="custom-input" value="<?php if (isset($_REQUEST['estimatef39'])) {
                echo $_REQUEST['estimatef39'];
            } ?>"></td>
            <td><input type="text" name="estimateg39" class="custom-input" value="<?php if (isset($_REQUEST['estimateg39'])) {
                echo $_REQUEST['estimateg39'];
            } ?>"></td>
            <td><input type="text" name="estimateh39" class="custom-input" readonly value="<?php if (isset($estimateh39)) {
                echo $estimateh39;
            } ?>"></td>
            <td><input type="text" name="estimatei39" class="custom-input" readonly value="<?php if (isset($estimatei39)) {
                echo $estimatei39;
            } ?>"></td>
            <td><input type="text" name="estimatej39" class="custom-input" value="<?php if (isset($_REQUEST['estimatej39'])) {
                echo $_REQUEST['estimatej39'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel39" class="custom-input" value="<?php if (isset($_REQUEST['estimatel39'])) {
                echo $_REQUEST['estimatel39'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td> -->
            <td>FIRE / SMOKE DAMPERS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated40" class="custom-input" value="<?php if (isset($_REQUEST['estimated40'])) {
                echo $_REQUEST['estimated40'];
            } ?>"></td>
            <td><input type="text" name="estimatee40" class="custom-input" value="<?php if (isset($_REQUEST['estimatee40'])) {
                echo $_REQUEST['estimatee40'];
            } ?>"></td>
            <td><input type="text" name="estimatef40" class="custom-input" value="<?php if (isset($_REQUEST['estimatef40'])) {
                echo $_REQUEST['estimatef40'];
            } ?>"></td>
            <td><input type="text" name="estimateg40" class="custom-input" value="<?php if (isset($_REQUEST['estimateg40'])) {
                echo $_REQUEST['estimateg40'];
            } ?>"></td>
            <td><input type="text" name="estimateh40" class="custom-input" readonly value="<?php if (isset($estimateh40)) {
                echo $estimateh40;
            } ?>"></td>
            <td><input type="text" name="estimatei40" class="custom-input" readonly value="<?php if (isset($estimatei40)) {
                echo $estimatei40;
            } ?>"></td>
            <td><input type="text" name="estimatej40" class="custom-input" value="<?php if (isset($_REQUEST['estimatej40'])) {
                echo $_REQUEST['estimatej40'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <select type="text" name="estimaten40" class="select-input" id="">
                    <option value="Select the option">Select the option</option>
                    <?php
                    // Fetching values from text inputs to populate the dropdown
                    $estimatev2 = isset($_REQUEST['estimatev2']) ? $_REQUEST['estimatev2'] : 'NSW';
                    $estimatev3 = isset($_REQUEST['estimatev3']) ? $_REQUEST['estimatev3'] : 'Haldeman';
                    $estimatev4 = isset($_REQUEST['estimatev4']) ? $_REQUEST['estimatev4'] : 'Toro';
                    $estimatev5 = isset($_REQUEST['estimatev5']) ? $_REQUEST['estimatev5'] : 'APS';
                    $estimatev6 = isset($_REQUEST['estimatev6']) ? $_REQUEST['estimatev6'] : 'Others';
                    ?>
                    <option type="text" value="<?php echo $estimatev2; ?>"><?php echo $estimatev2; ?></option>
                    <option type="text" value="<?php echo $estimatev3; ?>"><?php echo $estimatev3; ?></option>
                    <option type="text" value="<?php echo $estimatev4; ?>"><?php echo $estimatev4; ?></option>
                    <option type="text" value="<?php echo $estimatev5; ?>"><?php echo $estimatev5; ?></option>
                    <option type="text" value="<?php echo $estimatev6; ?>"><?php echo $estimatev6; ?></option>
                </select>
            </td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">41</td> -->
            <td>Duct Mount SMOKE DETECTORS/inl fire smoke</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated41" class="custom-input" value="<?php if (isset($_REQUEST['estimated41'])) {
                echo $_REQUEST['estimated41'];
            } ?>"></td>
            <td><input type="text" name="estimatee41" class="custom-input" value="<?php if (isset($_REQUEST['estimatee41'])) {
                echo $_REQUEST['estimatee41'];
            } ?>"></td>
            <td><input type="text" name="estimatef41" class="custom-input" value="<?php if (isset($_REQUEST['estimatef41'])) {
                echo $_REQUEST['estimatef41'];
            } ?>"></td>
            <td><input type="text" name="estimateg41" class="custom-input" value="<?php if (isset($_REQUEST['estimateg41'])) {
                echo $_REQUEST['estimateg41'];
            } ?>"></td>
            <td><input type="text" name="estimateh41" class="custom-input" value="<?php if (isset($_REQUEST['estimateh41'])) {
                echo $_REQUEST['estimateh41'];
            } ?>"></td>
            <td><input type="text" name="estimatei41" class="custom-input" readonly value="<?php if (isset($estimatei41)) {
                echo $estimatei41;
            } ?>"></td>
            <td><input type="text" name="estimatej41" class="custom-input" value="<?php if (isset($_REQUEST['estimatej41'])) {
                echo $_REQUEST['estimatej41'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">42</td> -->
            <td>Extra Adder you want</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated42" class="custom-input" value="<?php if (isset($_REQUEST['estimated42'])) {
                echo $_REQUEST['estimated42'];
            } ?>"></td>
            <td><input type="text" name="estimatee42" class="custom-input" value="<?php if (isset($_REQUEST['estimatee42'])) {
                echo $_REQUEST['estimatee42'];
            } ?>"></td>
            <td><input type="text" name="estimatef42" class="custom-input" value="<?php if (isset($_REQUEST['estimatef42'])) {
                echo $_REQUEST['estimatef42'];
            } ?>"></td>
            <td><input type="text" name="estimateg42" class="custom-input" value="<?php if (isset($_REQUEST['estimateg42'])) {
                echo $_REQUEST['estimateg42'];
            } ?>"></td>
            <td><input type="text" name="estimateh42" class="custom-input" readonly value="<?php if (isset($estimateh42)) {
                echo $estimateh42;
            } ?>"></td>
            <td><input type="text" name="estimatei42" class="custom-input" readonly value="<?php if (isset($estimatei42)) {
                echo $estimatei42;
            } ?>"></td>
            <td><input type="text" name="estimatej42" class="custom-input" value="<?php if (isset($_REQUEST['estimatej42'])) {
                echo $_REQUEST['estimatej42'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">43</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">44</td> -->
            <td>CIRCLE LINED DUCT</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated44" class="custom-input" value="<?php if (isset($_REQUEST['estimated44'])) {
                echo $_REQUEST['estimated44'];
            } ?>"></td>
            <td><input type="text" name="estimatee44" class="custom-input" value="<?php if (isset($_REQUEST['estimatee44'])) {
                echo $_REQUEST['estimatee44'];
            } ?>"></td>
            <td><input type="text" name="estimatef44" class="custom-input" value="<?php if (isset($_REQUEST['estimatef44'])) {
                echo $_REQUEST['estimatef44'];
            } ?>"></td>
            <td><input type="text" name="estimateg44" class="custom-input" value="<?php if (isset($_REQUEST['estimateg44'])) {
                echo $_REQUEST['estimateg44'];
            } ?>"></td>
            <td><input type="text" name="estimateh44" class="custom-input" readonly value="<?php if (isset($estimateh44)) {
                echo $estimateh44;
            } ?>"></td>
            <td><input type="text" name="estimatei44" class="custom-input" readonly value="<?php if (isset($estimatei44)) {
                echo $estimatei44;
            } ?>"></td>
            <td><input type="text" name="estimatej44" class="custom-input" value="<?php if (isset($_REQUEST['estimatej44'])) {
                echo $_REQUEST['estimatej44'];
            } ?>"></td>
            <td></td>
            <td>Old Factor MATERIAL</td>
            <td>Old Factor LABOR</td>
            <td>6/2021 Factor MATERIAL</td>
            <td>6/2021 Factor LABOR</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">45</td> -->
            <td>ROUND DUCT</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated45" class="custom-input" value="<?php if (isset($_REQUEST['estimated45'])) {
                echo $_REQUEST['estimated45'];
            } ?>"></td>
            <td><input type="text" name="estimatee45" class="custom-input" value="<?php if (isset($_REQUEST['estimatee45'])) {
                echo $_REQUEST['estimatee45'];
            } ?>"></td>
            <td><input type="text" name="estimatef45" class="custom-input" value="<?php if (isset($_REQUEST['estimatef45'])) {
                echo $_REQUEST['estimatef45'];
            } ?>"></td>
            <td><input type="text" name="estimateg45" class="custom-input" value="<?php if (isset($_REQUEST['estimateg45'])) {
                echo $_REQUEST['estimateg45'];
            } ?>"></td>
            <td><input type="text" name="estimateh45" class="custom-input" readonly value="<?php if (isset($estimateh45)) {
                echo $estimateh45;
            } ?>"></td>
            <td><input type="text" name="estimatei45" class="custom-input" readonly value="<?php if (isset($estimatei45)) {
                echo $estimatei45;
            } ?>"></td>
            <td><input type="text" name="estimatej45" class="custom-input" value="<?php if (isset($_REQUEST['estimatej45'])) {
                echo $_REQUEST['estimatej45'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel45" class="custom-input" value="<?php if (isset($_REQUEST['estimatel45'])) {
                echo $_REQUEST['estimatel45'];
            } ?>"></td>
            <td><input type="text" name="estimatem45" class="custom-input" value="<?php if (isset($_REQUEST['estimatem45'])) {
                echo $_REQUEST['estimatem45'];
            } ?>"></td>
            <td><input type="text" name="estimaten45" class="custom-input" value="<?php if (isset($_REQUEST['estimaten45'])) {
                echo $_REQUEST['estimaten45'];
            } ?>"></td>
            <td><input type="text" name="estimateo45" class="custom-input" value="<?php if (isset($_REQUEST['estimateo45'])) {
                echo $_REQUEST['estimateo45'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">46</td> -->
            <td>DUCTWORK</td>
            <td></td>
            <td><input type="text" name="estimatec46" class="custom-input" readonly value="<?php if (isset($estimatec46)) {
                echo $estimatec46;
            } ?>"></td>
            <td><input type="text" name="estimated46" class="custom-input" value="<?php if (isset($_REQUEST['estimated46'])) {
                echo $_REQUEST['estimated46'];
            } ?>"></td>
            <td><input type="text" name="estimatee46" class="custom-input" value="<?php if (isset($_REQUEST['estimatee46'])) {
                echo $_REQUEST['estimatee46'];
            } ?>"></td>
            <td><input type="text" name="estimatef46" class="custom-input" value="<?php if (isset($_REQUEST['estimatef46'])) {
                echo $_REQUEST['estimatef46'];
            } ?>"></td>
            <td><input type="text" name="estimateg46" class="custom-input" value="<?php if (isset($_REQUEST['estimateg46'])) {
                echo $_REQUEST['estimateg46'];
            } ?>"></td>
            <td><input type="text" name="estimateh46" class="custom-input" readonly value="<?php if (isset($estimateh46)) {
                echo $estimateh46;
            } ?>"></td>
            <td><input type="text" name="estimatei46" class="custom-input" readonly value="<?php if (isset($estimatei46)) {
                echo $estimatei46;
            } ?>"></td>
            <td><input type="text" name="estimatej46" class="custom-input" value="<?php if (isset($_REQUEST['estimatej46'])) {
                echo $_REQUEST['estimatej46'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel46" class="custom-input" readonly value="<?php if (isset($estimatel46)) {
                echo $estimatel46;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimatem46" class="custom-input" readonly value="<?php if (isset($estimatem46)) {
                echo $estimatem46;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimaten46" class="custom-input" readonly value="<?php if (isset($estimaten46)) {
                echo $estimaten46;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimateo46" class="custom-input" readonly value="<?php if (isset($estimateo46)) {
                echo $estimateo46;
            } else {
                echo 0;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimateq46" class="custom-input" value="<?php if (isset($_REQUEST['estimateq46']) && $_REQUEST['estimateq46'] != '0') {
                echo $_REQUEST['estimateq46'];
            } else {
                echo 1;
            } ?>"></td>
            <td>Old steel pricing</td>
            <td></td>
            <td>$/lb</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">47</td> -->
            <td>LINER / INSUL 1"</td>
            <td></td>
            <td><input type="text" name="estimatec47" class="custom-input" readonly value="<?php if (isset($estimatec47)) {
                echo $estimatec47;
            } ?>"></td>
            <td><input type="text" name="estimated47" class="custom-input" value="<?php if (isset($_REQUEST['estimated47'])) {
                echo $_REQUEST['estimated47'];
            } ?>"></td>
            <td><input type="text" name="estimatee47" class="custom-input" value="<?php if (isset($_REQUEST['estimatee47'])) {
                echo $_REQUEST['estimatee47'];
            } ?>"></td>
            <td><input type="text" name="estimatef47" class="custom-input" value="<?php if (isset($_REQUEST['estimatef47'])) {
                echo $_REQUEST['estimatef47'];
            } ?>"></td>
            <td><input type="text" name="estimateg47" class="custom-input" value="<?php if (isset($_REQUEST['estimateg47'])) {
                echo $_REQUEST['estimateg47'];
            } ?>"></td>
            <td><input type="text" name="estimateh47" class="custom-input" readonly value="<?php if (isset($estimateh47)) {
                echo $estimateh47;
            } ?>"></td>
            <td><input type="text" name="estimatei47" class="custom-input" readonly value="<?php if (isset($estimatei47)) {
                echo $estimatei47;
            } ?>"></td>
            <td><input type="text" name="estimatej47" class="custom-input" value="<?php if (isset($_REQUEST['estimatej47'])) {
                echo $_REQUEST['estimatej47'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel47" class="custom-input" readonly value="<?php if (isset($estimatel47)) {
                echo $estimatel47;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimatem47" class="custom-input" readonly value="<?php if (isset($estimatem47)) {
                echo $estimatem47;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimaten47" class="custom-input" readonly value="<?php if (isset($estimaten47)) {
                echo $estimaten47;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimateo47" class="custom-input" readonly value="<?php if (isset($estimateo47)) {
                echo $estimateo47;
            } else {
                echo 0;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimateq47" class="custom-input" readonly value="<?php if (isset($estimateq47)) {
                echo $estimateq47;
            } ?>"></td>
            <td>New steel pricing</td>
            <td></td>
            <td>$/lb</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">48</td> -->
            <td>LINER / INSUL 1.5"</td>
            <td></td>
            <td><input type="text" name="estimatec48" class="custom-input" value="<?php if (isset($_REQUEST['estimatec48'])) {
                echo $_REQUEST['estimatec48'];
            } ?>"></td>
            <td><input type="text" name="estimated48" class="custom-input" value="<?php if (isset($_REQUEST['estimated48'])) {
                echo $_REQUEST['estimated48'];
            } ?>"></td>
            <td><input type="text" name="estimatee48" class="custom-input" value="<?php if (isset($_REQUEST['estimatee48'])) {
                echo $_REQUEST['estimatee48'];
            } ?>"></td>
            <td><input type="text" name="estimatef48" class="custom-input" value="<?php if (isset($_REQUEST['estimatef48'])) {
                echo $_REQUEST['estimatef48'];
            } ?>"></td>
            <td><input type="text" name="estimateg48" class="custom-input" value="<?php if (isset($_REQUEST['estimateg48'])) {
                echo $_REQUEST['estimateg48'];
            } ?>"></td>
            <td><input type="text" name="estimateh48" class="custom-input" readonly value="<?php if (isset($estimateh48)) {
                echo $estimateh48;
            } ?>"></td>
            <td><input type="text" name="estimatei48" class="custom-input" readonly value="<?php if (isset($estimatei48)) {
                echo $estimatei48;
            } ?>"></td>
            <td><input type="text" name="estimatej48" class="custom-input" value="<?php if (isset($_REQUEST['estimatej48'])) {
                echo $_REQUEST['estimatej48'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel48" class="custom-input" readonly value="<?php if (isset($estimatel48)) {
                echo $estimatel48;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimatem48" class="custom-input" readonly value="<?php if (isset($estimatem48)) {
                echo $estimatem48;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimaten48" class="custom-input" readonly value="<?php if (isset($estimaten48)) {
                echo $estimaten48;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimateo48" class="custom-input" readonly value="<?php if (isset($estimateo48)) {
                echo $estimateo48;
            } else {
                echo 0;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimateq48" class="custom-input" readonly value="<?php if (isset($estimateq48)) {
                echo $estimateq48;
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">49</td> -->
            <td>LINER / INSUL 2" Outdoor</td>
            <td></td>
            <td><input type="text" name="estimatec49" class="custom-input" readonly value="<?php if (isset($estimatec49)) {
                echo $estimatec49;
            } ?>"></td>
            <td><input type="text" name="estimated49" class="custom-input" value="<?php if (isset($_REQUEST['estimated49'])) {
                echo $_REQUEST['estimated49'];
            } ?>"></td>
            <td><input type="text" name="estimatee49" class="custom-input" value="<?php if (isset($_REQUEST['estimatee49'])) {
                echo $_REQUEST['estimatee49'];
            } ?>"></td>
            <td><input type="text" name="estimatef49" class="custom-input" value="<?php if (isset($_REQUEST['estimatef49'])) {
                echo $_REQUEST['estimatef49'];
            } ?>"></td>
            <td><input type="text" name="estimateg49" class="custom-input" value="<?php if (isset($_REQUEST['estimateg49'])) {
                echo $_REQUEST['estimateg49'];
            } ?>"></td>
            <td><input type="text" name="estimateh49" class="custom-input" readonly value="<?php if (isset($estimateh49)) {
                echo $estimateh49;
            } ?>"></td>
            <td><input type="text" name="estimatei49" class="custom-input" readonly value="<?php if (isset($estimatei49)) {
                echo $estimatei49;
            } ?>"></td>
            <td><input type="text" name="estimatej49" class="custom-input" value="<?php if (isset($_REQUEST['estimatej49'])) {
                echo $_REQUEST['estimatej49'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel49" class="custom-input" readonly value="<?php if (isset($estimatel49)) {
                echo $estimatel49;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimatem49" class="custom-input" readonly value="<?php if (isset($estimatem49)) {
                echo $estimatem49;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimaten49" class="custom-input" readonly value="<?php if (isset($estimaten49)) {
                echo $estimaten49;
            } else {
                echo 0;
            } ?>"></td>
            <td><input type="text" name="estimateo49" class="custom-input" readonly value="<?php if (isset($estimateo49)) {
                echo $estimateo49;
            } else {
                echo 0;
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">50</td> -->
            <td>LINER / INSUL 2" Indoor</td>
            <td></td>
            <td><input type="text" name="estimatec50" class="custom-input" readonly value="<?php if (isset($estimatec50)) {
                echo $estimatec50;
            } ?>"></td>
            <td><input type="text" name="estimated50" class="custom-input" value="<?php if (isset($_REQUEST['estimated50'])) {
                echo $_REQUEST['estimated50'];
            } ?>"></td>
            <td><input type="text" name="estimatee50" class="custom-input" value="<?php if (isset($_REQUEST['estimatee50'])) {
                echo $_REQUEST['estimatee50'];
            } ?>"></td>
            <td><input type="text" name="estimatef50" class="custom-input" value="<?php if (isset($_REQUEST['estimatef50'])) {
                echo $_REQUEST['estimatef50'];
            } ?>"></td>
            <td><input type="text" name="estimateg50" class="custom-input" value="<?php if (isset($_REQUEST['estimateg50'])) {
                echo $_REQUEST['estimateg50'];
            } ?>"></td>
            <td><input type="text" name="estimateh50" class="custom-input" readonly value="<?php if (isset($estimateh50)) {
                echo $estimateh50;
            } ?>"></td>
            <td><input type="text" name="estimatei50" class="custom-input" readonly value="<?php if (isset($estimatei50)) {
                echo $estimatei50;
            } ?>"></td>
            <td><input type="text" name="estimatej50" class="custom-input" value="<?php if (isset($_REQUEST['estimatej50'])) {
                echo $_REQUEST['estimatej50'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">51</td> -->
            <td>KITCHEN HOOD / STAINLESS STEEL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated51" class="custom-input" value="<?php if (isset($_REQUEST['estimated51'])) {
                echo $_REQUEST['estimated51'];
            } ?>"></td>
            <td><input type="text" name="estimatee51" class="custom-input" value="<?php if (isset($_REQUEST['estimatee51'])) {
                echo $_REQUEST['estimatee51'];
            } ?>"></td>
            <td><input type="text" name="estimatef51" class="custom-input" value="<?php if (isset($_REQUEST['estimatef51'])) {
                echo $_REQUEST['estimatef51'];
            } ?>"></td>
            <td><input type="text" name="estimateg51" class="custom-input" value="<?php if (isset($_REQUEST['estimateg51'])) {
                echo $_REQUEST['estimateg51'];
            } ?>"></td>
            <td><input type="text" name="estimateh51" class="custom-input" readonly value="<?php if (isset($estimateh51)) {
                echo $estimateh51;
            } ?>"></td>
            <td><input type="text" name="estimatei51" class="custom-input" readonly value="<?php if (isset($estimatei51)) {
                echo $estimatei51;
            } ?>"></td>
            <td><input type="text" name="estimatej51" class="custom-input" value="<?php if (isset($_REQUEST['estimatej51'])) {
                echo $_REQUEST['estimatej51'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">52</td> -->
            <td>KITCHEN DUCT WELD / BLAC STEEL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated52" class="custom-input" value="<?php if (isset($_REQUEST['estimated52'])) {
                echo $_REQUEST['estimated52'];
            } ?>"></td>
            <td><input type="text" name="estimatee52" class="custom-input" value="<?php if (isset($_REQUEST['estimatee52'])) {
                echo $_REQUEST['estimatee52'];
            } ?>"></td>
            <td><input type="text" name="estimatef52" class="custom-input" value="<?php if (isset($_REQUEST['estimatef52'])) {
                echo $_REQUEST['estimatef52'];
            } ?>"></td>
            <td><input type="text" name="estimateg52" class="custom-input" value="<?php if (isset($_REQUEST['estimateg52'])) {
                echo $_REQUEST['estimateg52'];
            } ?>"></td>
            <td><input type="text" name="estimateh52" class="custom-input" readonly value="<?php if (isset($estimateh52)) {
                echo $estimateh52;
            } ?>"></td>
            <td><input type="text" name="estimatei52" class="custom-input" readonly value="<?php if (isset($estimatei52)) {
                echo $estimatei52;
            } ?>"></td>
            <td><input type="text" name="estimatej52" class="custom-input" value="<?php if (isset($_REQUEST['estimatej52'])) {
                echo $_REQUEST['estimatej52'];
            } ?>"></td>
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
        </tr> 
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">53</td> -->
            <td>ANTIMICROBIAL COATING</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated53" class="custom-input" value="<?php if (isset($_REQUEST['estimated53'])) {
                echo $_REQUEST['estimated53'];
            } ?>"></td>
            <td><input type="text" name="estimatee53" class="custom-input" value="<?php if (isset($_REQUEST['estimatee53'])) {
                echo $_REQUEST['estimatee53'];
            } ?>"></td>
            <td><input type="text" name="estimatef53" class="custom-input" value="<?php if (isset($_REQUEST['estimatef53'])) {
                echo $_REQUEST['estimatef53'];
            } ?>"></td>
            <td><input type="text" name="estimateg53" class="custom-input" value="<?php if (isset($_REQUEST['estimateg53'])) {
                echo $_REQUEST['estimateg53'];
            } ?>"></td>
            <td><input type="text" name="estimateh53" class="custom-input" readonly value="<?php if (isset($estimateh53)) {
                echo $estimateh53;
            } ?>"></td>
            <td><input type="text" name="estimatei53" class="custom-input" value="<?php if (isset($_REQUEST['estimatei53'])) {
                echo $_REQUEST['estimatei53'];
            } ?>"></td>
            <td><input type="text" name="estimatej53" class="custom-input" value="<?php if (isset($_REQUEST['estimatej53'])) {
                echo $_REQUEST['estimatej53'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">54</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">55</td> -->
            <td>Labor Allowance due to high duct work installation</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated55" class="custom-input" readonly value="<?php if (isset($estimated55)) {
                echo $estimated55;
            } ?>"></td>
            <td><input type="text" name="estimatee55" class="custom-input" value="<?php if (isset($_REQUEST['estimatee55'])) {
                echo $_REQUEST['estimatee55'];
            } ?>"></td>
            <td><input type="text" name="estimatef55" class="custom-input" value="<?php if (isset($_REQUEST['estimatef55'])) {
                echo $_REQUEST['estimatef55'];
            } ?>"></td>
            <td><input type="text" name="estimateg55" class="custom-input" value="<?php if (isset($_REQUEST['estimateg55'])) {
                echo $_REQUEST['estimateg55'];
            } ?>"></td>
            <td><input type="text" name="estimateh55" class="custom-input" value="<?php if (isset($_REQUEST['estimateh55'])) {
                echo $_REQUEST['estimateh55'];
            } ?>"></td>
            <td><input type="text" name="estimatei55" class="custom-input" readonly value="<?php if (isset($estimatei55)) {
                echo $estimatei55;
            } ?>"></td>
            <td><input type="text" name="estimatej55" class="custom-input" value="<?php if (isset($_REQUEST['estimatej55'])) {
                echo $_REQUEST['estimatej55'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimaten55" class="custom-input" value="<?php if (isset($_POST['estimaten55'])) {
                echo $_POST['estimaten55'];
            } else {
                echo "Duct Testing";
            } ?>"></td>
            <td><input type="text" name="estimateo55" class="custom-input" value="<?php if (isset($_POST['estimateo55'])) {
                echo $_POST['estimateo55'];
            } else {
                echo "Title 24-Leed Certification";
            } ?>"></td>
            <td><input type="text" name="estimatep55" class="custom-input" value="<?php if (isset($_POST['estimatep55'])) {
                echo $_POST['estimatep55'];
            } else {
                echo "Commissioning";
            } ?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">56</td> -->
            <td>TEST & BALANCE</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated56" class="custom-input" value="<?php if (isset($_REQUEST['estimated56'])) {
                echo $_REQUEST['estimated56'];
            } ?>"></td>
            <td><input type="text" name="estimatee56" class="custom-input" value="<?php if (isset($_REQUEST['estimatee56'])) {
                echo $_REQUEST['estimatee56'];
            } ?>"></td>
            <td><input type="text" name="estimatef56" class="custom-input" value="<?php if (isset($_REQUEST['estimatef56'])) {
                echo $_REQUEST['estimatef56'];
            } ?>"></td>
            <td><input type="text" name="estimateg56" class="custom-input" value="<?php if (isset($_REQUEST['estimateg56'])) {
                echo $_REQUEST['estimateg56'];
            } ?>"></td>
            <td><input type="text" name="estimateh56" class="custom-input" value="<?php if (isset($_REQUEST['estimateh56'])) {
                echo $_REQUEST['estimateh56'];
            } ?>"></td>
            <td><input type="text" name="estimatei56" class="custom-input" value="<?php if (isset($_REQUEST['estimatei56'])) {
                echo $_REQUEST['estimatei56'];
            } ?>"></td>
            <td><input type="text" name="estimatej56" class="custom-input" value="<?php if (isset($_REQUEST['estimatej56'])) {
                echo $_REQUEST['estimatej56'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem56" class="custom-input" value="<?php if (isset($_REQUEST['estimatem56'])) {
                echo $_REQUEST['estimatem56'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">57</td> -->
            <td>MECHANICAL INSULATION</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated57" class="custom-input" value="<?php if (isset($_REQUEST['estimated57'])) {
                echo $_REQUEST['estimated57'];
            } ?>"></td>
            <td><input type="text" name="estimatee57" class="custom-input" value="<?php if (isset($_REQUEST['estimatee57'])) {
                echo $_REQUEST['estimatee57'];
            } ?>"></td>
            <td><input type="text" name="estimatef57" class="custom-input" value="<?php if (isset($_REQUEST['estimatef57'])) {
                echo $_REQUEST['estimatef57'];
            } ?>"></td>
            <td><input type="text" name="estimateg57" class="custom-input" value="<?php if (isset($_REQUEST['estimateg57'])) {
                echo $_REQUEST['estimateg57'];
            } ?>"></td>
            <td><input type="text" name="estimateh57" class="custom-input" value="<?php if (isset($_REQUEST['estimateh57'])) {
                echo $_REQUEST['estimateh57'];
            } ?>"></td>
            <td><input type="text" name="estimatei57" class="custom-input" value="<?php if (isset($_REQUEST['estimatei57'])) {
                echo $_REQUEST['estimatei57'];
            } ?>"></td>
            <td><input type="text" name="estimatej57" class="custom-input" value="<?php if (isset($_REQUEST['estimatej57'])) {
                echo $_REQUEST['estimatej57'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem57" class="custom-input" value="<?php if (isset($_REQUEST['estimatem57'])) {
                echo $_REQUEST['estimatem57'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">58</td> -->
            <td>DUCT CLEANING</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated58" class="custom-input" value="<?php if (isset($_REQUEST['estimated58'])) {
                echo $_REQUEST['estimated58'];
            } ?>"></td>
            <td><input type="text" name="estimatee58" class="custom-input" value="<?php if (isset($_REQUEST['estimatee58'])) {
                echo $_REQUEST['estimatee58'];
            } ?>"></td>
            <td><input type="text" name="estimatef58" class="custom-input" value="<?php if (isset($_REQUEST['estimatef58'])) {
                echo $_REQUEST['estimatef58'];
            } ?>"></td>
            <td><input type="text" name="estimateg58" class="custom-input" value="<?php if (isset($_REQUEST['estimateg58'])) {
                echo $_REQUEST['estimateg58'];
            } ?>"></td>
            <td><input type="text" name="estimateh58" class="custom-input" value="<?php if (isset($_REQUEST['estimateh58'])) {
                echo $_REQUEST['estimateh58'];
            } ?>"></td>
            <td><input type="text" name="estimatei58" class="custom-input" value="<?php if (isset($_REQUEST['estimatei58'])) {
                echo $_REQUEST['estimatei58'];
            } ?>"></td>
            <td><input type="text" name="estimatej58" class="custom-input" value="<?php if (isset($_REQUEST['estimatej58'])) {
                echo $_REQUEST['estimatej58'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem58" class="custom-input" value="<?php if (isset($_REQUEST['estimatem58'])) {
                echo $_REQUEST['estimatem58'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">59</td> -->
            <td><input type="text" name="estimatea59" class="custom-input" value="<?php if (isset($_REQUEST['estimatea59'])) {
                echo $_REQUEST['estimatea59'];
            } else {
                echo 'Demo Subcontractor';
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated59" class="custom-input" value="<?php if (isset($_REQUEST['estimated59'])) {
                echo $_REQUEST['estimated59'];
            } ?>"></td>
            <td><input type="text" name="estimatee59" class="custom-input" value="<?php if (isset($_REQUEST['estimatee59'])) {
                echo $_REQUEST['estimatee59'];
            } ?>"></td>
            <td><input type="text" name="estimatef59" class="custom-input" value="<?php if (isset($_REQUEST['estimatef59'])) {
                echo $_REQUEST['estimatef59'];
            } ?>"></td>
            <td><input type="text" name="estimateg59" class="custom-input" value="<?php if (isset($_REQUEST['estimateg59'])) {
                echo $_REQUEST['estimateg59'];
            } ?>"></td>
            <td><input type="text" name="estimateh59" class="custom-input" value="<?php if (isset($_REQUEST['estimateh59'])) {
                echo $_REQUEST['estimateh59'];
            } ?>"></td>
            <td><input type="text" name="estimatei59" class="custom-input" value="<?php if (isset($_REQUEST['estimatei59'])) {
                echo $_REQUEST['estimatei59'];
            } ?>"></td>
            <td><input type="text" name="estimatej59" class="custom-input" value="<?php if (isset($_REQUEST['estimatej59'])) {
                echo $_REQUEST['estimatej59'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem59" class="custom-input" value="<?php if (isset($_REQUEST['estimatem59'])) {
                echo $_REQUEST['estimatem59'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">60</td> -->
            <td>DEMO UNITS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated60" class="custom-input" value="<?php if (isset($_REQUEST['estimated60'])) {
                echo $_REQUEST['estimated60'];
            } ?>"></td>
            <td><input type="text" name="estimatee60" class="custom-input" value="<?php if (isset($_REQUEST['estimatee60'])) {
                echo $_REQUEST['estimatee60'];
            } ?>"></td>
            <td><input type="text" name="estimatef60" class="custom-input" value="<?php if (isset($_REQUEST['estimatef60'])) {
                echo $_REQUEST['estimatef60'];
            } ?>"></td>
            <td><input type="text" name="estimateg60" class="custom-input" value="<?php if (isset($_REQUEST['estimateg60'])) {
                echo $_REQUEST['estimateg60'];
            } ?>"></td>
            <td><input type="text" name="estimateh60" class="custom-input" value="<?php if (isset($_REQUEST['estimateh60'])) {
                echo $_REQUEST['estimateh60'];
            } ?>"></td>
            <td><input type="text" name="estimatei60" class="custom-input" readonly value="<?php if (isset($estimatei60)) {
                echo $estimatei60;
            } ?>"></td>
            <td><input type="text" name="estimatej60" class="custom-input" value="<?php if (isset($_REQUEST['estimatej60'])) {
                echo $_REQUEST['estimatej60'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">61</td> -->
            <td>DEMO DUCT. Please enter the LF </td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated61" class="custom-input" value="<?php if (isset($_REQUEST['estimated61'])) {
                echo $_REQUEST['estimated61'];
            } ?>"></td>
            <td><input type="text" name="estimatee61" class="custom-input" value="<?php if (isset($_REQUEST['estimatee61'])) {
                echo $_REQUEST['estimatee61'];
            } ?>"></td>
            <td><input type="text" name="estimatef61" class="custom-input" value="<?php if (isset($_REQUEST['estimatef61'])) {
                echo $_REQUEST['estimatef61'];
            } ?>"></td>
            <td><input type="text" name="estimateg61" class="custom-input" value="<?php if (isset($_REQUEST['estimateg61'])) {
                echo $_REQUEST['estimateg61'];
            } ?>"></td>
            <td><input type="text" name="estimateh61" class="custom-input" value="<?php if (isset($_REQUEST['estimateh61'])) {
                echo $_REQUEST['estimateh61'];
            } ?>"></td>
            <td><input type="text" name="estimatei61" class="custom-input" readonly value="<?php if (isset($estimatei61)) {
                echo $estimatei61;
            } ?>"></td>
            <td><input type="text" name="estimatej61" class="custom-input" value="<?php if (isset($_REQUEST['estimatej61'])) {
                echo $_REQUEST['estimatej61'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">62</td> -->
            <td>DUCT Pressure TEST/LABOR/CAPS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated62" class="custom-input" value="<?php if (isset($_REQUEST['estimated62'])) {
                echo $_REQUEST['estimated62'];
            } ?>"></td>
            <td><input type="text" name="estimatee62" class="custom-input" value="<?php if (isset($_REQUEST['estimatee62'])) {
                echo $_REQUEST['estimatee62'];
            } ?>"></td>
            <td><input type="text" name="estimatef62" class="custom-input" value="<?php if (isset($_REQUEST['estimatef62'])) {
                echo $_REQUEST['estimatef62'];
            } ?>"></td>
            <td><input type="text" name="estimateg62" class="custom-input" value="<?php if (isset($_REQUEST['estimateg62'])) {
                echo $_REQUEST['estimateg62'];
            } ?>"></td>
            <td><input type="text" name="estimateh62" class="custom-input" readonly value="<?php if (isset($estimateh62)) {
                echo $estimateh62;
            } ?>"></td>
            <td><input type="text" name="estimatei62" class="custom-input" readonly value="<?php if (isset($estimatei62)) {
                echo $estimatei62;
            } ?>"></td>
            <td><input type="text" name="estimatej62" class="custom-input" value="<?php if (isset($_REQUEST['estimatej62'])) {
                echo $_REQUEST['estimatej62'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem62" class="custom-input" value="<?php if (isset($_REQUEST['estimatem62'])) {
                echo $_REQUEST['estimatem62'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">63</td> -->
            <td>DUCT SUPP, & HANG. BELOW ROOF</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated63" class="custom-input" readonly value="<?php if (isset($estimated63)) {
                echo $estimated63;
            } ?>"></td>
            <td><input type="text" name="estimatee63" class="custom-input" value="<?php if (isset($_REQUEST['estimatee63'])) {
                echo $_REQUEST['estimatee63'];
            } ?>"></td>
            <td><input type="text" name="estimatef63" class="custom-input" value="<?php if (isset($_REQUEST['estimatef63'])) {
                echo $_REQUEST['estimatef63'];
            } ?>"></td>
            <td><input type="text" name="estimateg63" class="custom-input" value="<?php if (isset($_REQUEST['estimateg63'])) {
                echo $_REQUEST['estimateg63'];
            } ?>"></td>
            <td><input type="text" name="estimateh63" class="custom-input" readonly value="<?php if (isset($estimateh63)) {
                echo $estimateh63;
            } ?>"></td>
            <td><input type="text" name="estimatei63" class="custom-input" readonly value="<?php if (isset($estimatei63)) {
                echo $estimatei63;
            } ?>"></td>
            <td><input type="text" name="estimatej63" class="custom-input" value="<?php if (isset($_REQUEST['estimatej63'])) {
                echo $_REQUEST['estimatej63'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">64</td> -->
            <td>DUCT SUPPORT ON THE ROOF</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated64" class="custom-input"readonly value="<?php if (isset($estimated64)) {
                echo $estimated64;
            } ?>"></td>
            <td><input type="text" name="estimatee64" class="custom-input" value="<?php if (isset($_REQUEST['estimatee64'])) {
                echo $_REQUEST['estimatee64'];
            } ?>"></td>
            <td><input type="text" name="estimatef64" class="custom-input" value="<?php if (isset($_REQUEST['estimatef64'])) {
                echo $_REQUEST['estimatef64'];
            } ?>"></td>
            <td><input type="text" name="estimateg64" class="custom-input" value="<?php if (isset($_REQUEST['estimateg64'])) {
                echo $_REQUEST['estimateg64'];
            } ?>"></td>
            <td><input type="text" name="estimateh64" class="custom-input" readonly value="<?php if (isset($estimateh64)) {
                echo $estimateh64;
            } ?>"></td>
            <td><input type="text" name="estimatei64" class="custom-input" value="<?php if (isset($_REQUEST['estimatei64'])) {
                echo $_REQUEST['estimatei64'];
            } ?>"></td>
            <td><input type="text" name="estimatej64" class="custom-input" value="<?php if (isset($_REQUEST['estimatej64'])) {
                echo $_REQUEST['estimatej64'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">65</td> -->
            <td>SEISMIC BRACING OVER 6SQ</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated65" class="custom-input" readonly value="<?php if (isset($estimated65)) {
                echo $estimated65;
            } ?>"></td>
            <td><input type="text" name="estimatee65" class="custom-input" value="<?php if (isset($_REQUEST['estimatee65'])) {
                echo $_REQUEST['estimatee65'];
            } ?>"></td>
            <td><input type="text" name="estimatef65" class="custom-input" value="<?php if (isset($_REQUEST['estimatef65'])) {
                echo $_REQUEST['estimatef65'];
            } ?>"></td>
            <td><input type="text" name="estimateg65" class="custom-input" value="<?php if (isset($_REQUEST['estimateg65'])) {
                echo $_REQUEST['estimateg65'];
            } ?>"></td>
            <td><input type="text" name="estimateh65" class="custom-input" readonly value="<?php if (isset($estimateh65)) {
                echo $estimateh65;
            } ?>"></td>
            <td><input type="text" name="estimatei65" class="custom-input" readonly value="<?php if (isset($estimatei65)) {
                echo $estimatei65;
            } ?>"></td>
            <td><input type="text" name="estimatej65" class="custom-input" value="<?php if (isset($_REQUEST['estimatej65'])) {
                echo $_REQUEST['estimatej65'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">66</td> -->
            <td>DUCT SILENCER OR SOUND TRAP</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated66" class="custom-input" value="<?php if (isset($_REQUEST['estimated66'])) {
                echo $_REQUEST['estimated66'];
            } ?>"></td>
            <td><input type="text" name="estimatee66" class="custom-input" value="<?php if (isset($_REQUEST['estimatee66'])) {
                echo $_REQUEST['estimatee66'];
            } ?>"></td>
            <td><input type="text" name="estimatef66" class="custom-input" value="<?php if (isset($_REQUEST['estimatef66'])) {
                echo $_REQUEST['estimatef66'];
            } ?>"></td>
            <td><input type="text" name="estimateg66" class="custom-input" value="<?php if (isset($_REQUEST['estimateg66'])) {
                echo $_REQUEST['estimateg66'];
            } ?>"></td>
            <td><input type="text" name="estimateh66" class="custom-input" value="<?php if (isset($_REQUEST['estimateh66'])) {
                echo $_REQUEST['estimateh66'];
            } ?>"></td>
            <td><input type="text" name="estimatei66" class="custom-input" readonly value="<?php if (isset($estimatei66)) {
                echo $estimatei66;
            } ?>"></td>
            <td><input type="text" name="estimatej66" class="custom-input" value="<?php if (isset($_REQUEST['estimatej66'])) {
                echo $_REQUEST['estimatej66'];
            } ?>"></td>
            <td></td>
            <td>In NSW quote</td>
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">67</td> -->
            <td>Seismic Calculation</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated67" class="custom-input" value="<?php if (isset($_REQUEST['estimated67'])) {
                echo $_REQUEST['estimated67'];
            } ?>"></td>
            <td><input type="text" name="estimatee67" class="custom-input" value="<?php if (isset($_REQUEST['estimatee67'])) {
                echo $_REQUEST['estimatee67'];
            } ?>"></td>
            <td><input type="text" name="estimatef67" class="custom-input" value="<?php if (isset($_REQUEST['estimatef67'])) {
                echo $_REQUEST['estimatef67'];
            } ?>"></td>
            <td><input type="text" name="estimateg67" class="custom-input" value="<?php if (isset($_REQUEST['estimateg67'])) {
                echo $_REQUEST['estimateg67'];
            } ?>"></td>
            <td><input type="text" name="estimateh67" class="custom-input" readonly value="<?php if (isset($estimateh67)) {
                echo $estimateh67;
            } ?>"></td>
            <td><input type="text" name="estimatei67" class="custom-input" value="<?php if (isset($_REQUEST['estimatei67'])) {
                echo $_REQUEST['estimatei67'];
            } ?>"></td>
            <td><input type="text" name="estimatej67" class="custom-input" value="<?php if (isset($_REQUEST['estimatej67'])) {
                echo $_REQUEST['estimatej67'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">68</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">69</td> -->
            <td>TEMP CONTROLS</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated69" class="custom-input" value="<?php if (isset($_REQUEST['estimated69'])) {
                echo $_REQUEST['estimated69'];
            } ?>"></td>
            <td><input type="text" name="estimatee69" class="custom-input" value="<?php if (isset($_REQUEST['estimatee69'])) {
                echo $_REQUEST['estimatee69'];
            } ?>"></td>
            <td><input type="text" name="estimatef69" class="custom-input" value="<?php if (isset($_REQUEST['estimatef69'])) {
                echo $_REQUEST['estimatef69'];
            } ?>"></td>
            <td><input type="text" name="estimateg69" class="custom-input" value="<?php if (isset($_REQUEST['estimateg69'])) {
                echo $_REQUEST['estimateg69'];
            } ?>"></td>
            <td><input type="text" name="estimateh69" class="custom-input" value="<?php if (isset($_REQUEST['estimateh69'])) {
                echo $_REQUEST['estimateh69'];
            } ?>"></td>
            <td><input type="text" name="estimatei69" class="custom-input" value="<?php if (isset($_REQUEST['estimatei69'])) {
                echo $_REQUEST['estimatei69'];
            } ?>"></td>
            <td><input type="text" name="estimatej69" class="custom-input" value="<?php if (isset($_REQUEST['estimatej69'])) {
                echo $_REQUEST['estimatej69'];
            } ?>"></td>
            <td></td>
            <td>by NS</td>
            <td><input type="text" name="estimatem69" class="custom-input" value="<?php if (isset($_REQUEST['estimatem69'])) {
                echo $_REQUEST['estimatem69'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">70</td> -->
            <td>HVAC Electrical Conduit & Wiring ( Subcontractor)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated70" class="custom-input" value="<?php if (isset($_REQUEST['estimated70'])) {
                echo $_REQUEST['estimated70'];
            } ?>"></td>
            <td>Hours</td>
            <td>Rate</td>
            <td><input type="text" name="estimateg70" class="custom-input" value="<?php if (isset($_REQUEST['estimateg70'])) {
                echo $_REQUEST['estimateg70'];
            } ?>"></td>
            <td><input type="text" name="estimateh70" class="custom-input" value="<?php if (isset($_REQUEST['estimateh70'])) {
                echo $_REQUEST['estimateh70'];
            } ?>"></td>
            <td><input type="text" name="estimatei70" class="custom-input" value="<?php if (isset($_REQUEST['estimatei70'])) {
                echo $_REQUEST['estimatei70'];
            } ?>"></td>
            <td><input type="text" name="estimatej70" class="custom-input" value="<?php if (isset($_REQUEST['estimatej70'])) {
                echo $_REQUEST['estimatej70'];
            } ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatem70" class="custom-input" value="<?php if (isset($_REQUEST['estimatem70'])) {
                echo $_REQUEST['estimatem70'];
            } ?>"></td>
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">71</td> -->
            <td>Extra Hours Cleaning ( Weekly Formula)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated71" class="custom-input" readonly value="<?php if (isset($estimated71)) {
                echo $estimated71;
            } ?>"></td>
            <td><input type="text" name="estimatee71" class="custom-input" value="<?php if (isset($_REQUEST['estimatee71'])) {
                echo $_REQUEST['estimatee71'];
            } ?>"></td>
            <td><input type="text" name="estimatef71" class="custom-input" value="<?php if (isset($_REQUEST['estimatef71'])) {
                echo $_REQUEST['estimatef71'];
            } ?>"></td>
            <td><input type="text" name="estimateg71" class="custom-input" value="<?php if (isset($_REQUEST['estimateg71'])) {
                echo $_REQUEST['estimateg71'];
            } ?>"></td>
            <td><input type="text" name="estimateh71" class="custom-input" value="<?php if (isset($_REQUEST['estimateh71'])) {
                echo $_REQUEST['estimateh71'];
            } ?>"></td>
            <td><input type="text" name="estimatei71" class="custom-input" readonly value="<?php if (isset($estimatei71)) {
                echo $estimatei71;
            } ?>"></td>
            <td><input type="text" name="estimatej71" class="custom-input" value="<?php if (isset($_REQUEST['estimatej71'])) {
                echo $_REQUEST['estimatej71'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">72</td> -->
            <td>Extra Hours Cleaning ( Entire Job Allowance)</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated72" class="custom-input" value="<?php if (isset($_REQUEST['estimated72'])) {
                echo $_REQUEST['estimated72'];
            } ?>"></td>
            <td><input type="text" name="estimatee72" class="custom-input" value="<?php if (isset($_REQUEST['estimatee72'])) {
                echo $_REQUEST['estimatee72'];
            } ?>"></td>
            <td><input type="text" name="estimatef72" class="custom-input" value="<?php if (isset($_REQUEST['estimatef72'])) {
                echo $_REQUEST['estimatef72'];
            } ?>"></td>
            <td><input type="text" name="estimateg72" class="custom-input" value="<?php if (isset($_REQUEST['estimateg72'])) {
                echo $_REQUEST['estimateg72'];
            } ?>"></td>
            <td><input type="text" name="estimateh72" class="custom-input" value="<?php if (isset($_REQUEST['estimateh72'])) {
                echo $_REQUEST['estimateh72'];
            } ?>"></td>
            <td><input type="text" name="estimatei72" class="custom-input" readonly value="<?php if (isset($estimatei72)) {
                echo $estimatei72;
            } ?>"></td>
            <td><input type="text" name="estimatej72" class="custom-input" value="<?php if (isset($_REQUEST['estimatej72'])) {
                echo $_REQUEST['estimatej72'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">73</td> -->
            <td>Allowance of additional Hours Regular time</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated73" class="custom-input" value="<?php if (isset($_REQUEST['estimated73'])) {
                echo $_REQUEST['estimated73'];
            } ?>"></td>
            <td><input type="text" name="estimatee73" class="custom-input" value="<?php if (isset($_REQUEST['estimatee73'])) {
                echo $_REQUEST['estimatee73'];
            } ?>"></td>
            <td><input type="text" name="estimatef73" class="custom-input" value="<?php if (isset($_REQUEST['estimatef73'])) {
                echo $_REQUEST['estimatef73'];
            } ?>"></td>
            <td><input type="text" name="estimateg73" class="custom-input" value="<?php if (isset($_REQUEST['estimateg73'])) {
                echo $_REQUEST['estimateg73'];
            } ?>"></td>
            <td><input type="text" name="estimateh73" class="custom-input" value="<?php if (isset($_REQUEST['estimateh73'])) {
                echo $_REQUEST['estimateh73'];
            } ?>"></td>
            <td><input type="text" name="estimatei73" class="custom-input" readonly value="<?php if (isset($estimatei73)) {
                echo $estimatei73;
            } ?>"></td>
            <td><input type="text" name="estimatej73" class="custom-input" value="<?php if (isset($_REQUEST['estimatej73'])) {
                echo $_REQUEST['estimatej73'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">74</td> -->
            <td>Allowance of additional 1.5 time</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated74" class="custom-input" value="<?php if (isset($_REQUEST['estimated74'])) {
                echo $_REQUEST['estimated74'];
            } ?>"></td>
            <td><input type="text" name="estimatee74" class="custom-input" value="<?php if (isset($_REQUEST['estimatee74'])) {
                echo $_REQUEST['estimatee74'];
            } ?>"></td>
            <td><input type="text" name="estimatef74" class="custom-input" value="<?php if (isset($_REQUEST['estimatef74'])) {
                echo $_REQUEST['estimatef74'];
            } ?>"></td>
            <td><input type="text" name="estimateg74" class="custom-input" value="<?php if (isset($_REQUEST['estimateg74'])) {
                echo $_REQUEST['estimateg74'];
            } ?>"></td>
            <td><input type="text" name="estimateh74" class="custom-input" value="<?php if (isset($_REQUEST['estimateh74'])) {
                echo $_REQUEST['estimateh74'];
            } ?>"></td>
            <td><input type="text" name="estimatei74" class="custom-input" readonly value="<?php if (isset($estimatei74)) {
                echo $estimatei74;
            } ?>"></td>
            <td><input type="text" name="estimatej74" class="custom-input" value="<?php if (isset($_REQUEST['estimatej74'])) {
                echo $_REQUEST['estimatej74'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">75</td> -->
            <td>ALLOWANCE</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated75" class="custom-input" value="<?php if (isset($_REQUEST['estimated75'])) {
                echo $_REQUEST['estimated75'];
            } ?>"></td>
            <td><input type="text" name="estimatee75" class="custom-input" value="<?php if (isset($_REQUEST['estimatee75'])) {
                echo $_REQUEST['estimatee75'];
            } ?>"></td>
            <td><input type="text" name="estimatef75" class="custom-input" value="<?php if (isset($_REQUEST['estimatef75'])) {
                echo $_REQUEST['estimatef75'];
            } ?>"></td>
            <td><input type="text" name="estimateg75" class="custom-input" value="<?php if (isset($_REQUEST['estimateg75'])) {
                echo $_REQUEST['estimateg75'];
            } ?>"></td>
            <td><input type="text" name="estimateh75" class="custom-input" value="<?php if (isset($_REQUEST['estimateh75'])) {
                echo $_REQUEST['estimateh75'];
            } ?>"></td>
            <td><input type="text" name="estimatei75" class="custom-input" value="<?php if (isset($_REQUEST['estimatei75'])) {
                echo $_REQUEST['estimatei75'];
            } ?>"></td>
            <td><input type="text" name="estimatej75" class="custom-input" value="<?php if (isset($_REQUEST['estimatej75'])) {
                echo $_REQUEST['estimatej75'];
            } ?>"></td>
            <td></td>
            <td</td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">76</td> -->
            <td>CRANE/HELICOPTER</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated76" class="custom-input" value="<?php if (isset($_REQUEST['estimated76'])) {
                echo $_REQUEST['estimated76'];
            } ?>"></td>
            <td><input type="text" name="estimatee76" class="custom-input" value="<?php if (isset($_REQUEST['estimatee76'])) {
                echo $_REQUEST['estimatee76'];
            } ?>"></td>
            <td><input type="text" name="estimatef76" class="custom-input" value="<?php if (isset($_REQUEST['estimatef76'])) {
                echo $_REQUEST['estimatef76'];
            } ?>"></td>
            <td><input type="text" name="estimateg76" class="custom-input" value="<?php if (isset($_REQUEST['estimateg76'])) {
                echo $_REQUEST['estimateg76'];
            } ?>"></td>
            <td><input type="text" name="estimateh76" class="custom-input" value="<?php if (isset($_REQUEST['estimateh76'])) {
                echo $_REQUEST['estimateh76'];
            } ?>"></td>
            <td><input type="text" name="estimatei76" class="custom-input" value="<?php if (isset($_REQUEST['estimatei76'])) {
                echo $_REQUEST['estimatei76'];
            } ?>"></td>
            <td><input type="text" name="estimatej76" class="custom-input" value="<?php if (isset($_REQUEST['estimatej76'])) {
                echo $_REQUEST['estimatej76'];
            } ?>"></td>
            <td></td>
            <td</td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">77</td> -->
            <td>SCISSOR LIFT/FORKLIFT</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated77" class="custom-input" value="<?php if (isset($_REQUEST['estimated77'])) {
                echo $_REQUEST['estimated77'];
            } ?>"></td>
            <td><input type="text" name="estimatee77" class="custom-input" value="<?php if (isset($_REQUEST['estimatee77'])) {
                echo $_REQUEST['estimatee77'];
            } ?>"></td>
            <td><input type="text" name="estimatef77" class="custom-input" value="<?php if (isset($_REQUEST['estimatef77'])) {
                echo $_REQUEST['estimatef77'];
            } ?>"></td>
            <td><input type="text" name="estimateg77" class="custom-input" value="<?php if (isset($_REQUEST['estimateg77'])) {
                echo $_REQUEST['estimateg77'];
            } ?>"></td>
            <td><input type="text" name="estimateh77" class="custom-input" value="<?php if (isset($_REQUEST['estimateh77'])) {
                echo $_REQUEST['estimateh77'];
            } ?>"></td>
            <td><input type="text" name="estimatei77" class="custom-input" value="<?php if (isset($_REQUEST['estimatei77'])) {
                echo $_REQUEST['estimatei77'];
            } ?>"></td>
            <td><input type="text" name="estimatej77" class="custom-input" value="<?php if (isset($_REQUEST['estimatej77'])) {
                echo $_REQUEST['estimatej77'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">78</td> -->
            <td>TRAVEL / SUPERVISION</td>
            <td></td>
            <td><input type="text" name="estimatec78" class="custom-input" value="<?php if (isset($_REQUEST['estimatec78'])) {
                echo $_REQUEST['estimatec78'];
            } ?>"></td>
            <td><input type="text" name="estimated78" class="custom-input" value="<?php if (isset($_REQUEST['estimated78'])) {
                echo $_REQUEST['estimated78'];
            } ?>"></td>
            <td><input type="text" name="estimatee78" class="custom-input" value="<?php if (isset($_REQUEST['estimatee78'])) {
                echo $_REQUEST['estimatee78'];
            } ?>"></td>
            <td><input type="text" name="estimatef78" class="custom-input" value="<?php if (isset($_REQUEST['estimatef78'])) {
                echo $_REQUEST['estimatef78'];
            } ?>"></td>
            <td><input type="text" name="estimateg78" class="custom-input" value="<?php if (isset($_REQUEST['estimateg78'])) {
                echo $_REQUEST['estimateg78'];
            } ?>"></td>
            <td><input type="text" name="estimateh78" class="custom-input" value="<?php if (isset($_REQUEST['estimateh78'])) {
                echo $_REQUEST['estimateh78'];
            } ?>"></td>
            <td><input type="text" name="estimatei78" class="custom-input" readonly value="<?php if (isset($estimatei78)) {
                echo $estimatei78;
            } ?>"></td>
            <td><input type="text" name="estimatej78" class="custom-input" value="<?php if (isset($_REQUEST['estimatej78'])) {
                echo $_REQUEST['estimatej78'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">79</td> -->
            <td>CLEAN-UP / TRASH CONTAINER</td>
            <td></td>
            <td><input type="text" name="estimatec79" class="custom-input" value="<?php if (isset($_REQUEST['estimatec79'])) {
                echo $_REQUEST['estimatec79'];
            } ?>"></td>
            <td><input type="text" name="estimated79" class="custom-input" value="<?php if (isset($_REQUEST['estimated79'])) {
                echo $_REQUEST['estimated79'];
            } ?>"></td>
            <td><input type="text" name="estimatee79" class="custom-input" value="<?php if (isset($_REQUEST['estimatee79'])) {
                echo $_REQUEST['estimatee79'];
            } ?>"></td>
            <td><input type="text" name="estimatef79" class="custom-input" value="<?php if (isset($_REQUEST['estimatef79'])) {
                echo $_REQUEST['estimatef79'];
            } ?>"></td>
            <td><input type="text" name="estimateg79" class="custom-input" value="<?php if (isset($_REQUEST['estimateg79'])) {
                echo $_REQUEST['estimateg79'];
            } ?>"></td>
            <td><input type="text" name="estimateh79" class="custom-input" value="<?php if (isset($_REQUEST['estimateh79'])) {
                echo $_REQUEST['estimateh79'];
            } ?>"></td>
            <td><input type="text" name="estimatei79" class="custom-input" readonly value="<?php if (isset($estimatei79)) {
                echo $estimatei79;
            } ?>"></td>
            <td><input type="text" name="estimatej79" class="custom-input" value="<?php if (isset($_REQUEST['estimatej79'])) {
                echo $_REQUEST['estimatej79'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">80</td> -->
            <td>START-UP A/C / Modulating Power</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated80" class="custom-input" readonly value="<?php if (isset($estimated80)) {
                echo $estimated80;
            } ?>"></td>
            <td><input type="text" name="estimatee80" class="custom-input" value="<?php if (isset($_REQUEST['estimatee80'])) {
                echo $_REQUEST['estimatee80'];
            } ?>"></td>
            <td><input type="text" name="estimatef80" class="custom-input" value="<?php if (isset($_REQUEST['estimatef80'])) {
                echo $_REQUEST['estimatef80'];
            } ?>"></td>
            <td><input type="text" name="estimateg80" class="custom-input" value="<?php if (isset($_REQUEST['estimateg80'])) {
                echo $_REQUEST['estimateg80'];
            } ?>"></td>
            <td><input type="text" name="estimateh80" class="custom-input" value="<?php if (isset($_REQUEST['estimateh80'])) {
                echo $_REQUEST['estimateh80'];
            } ?>"></td>
            <td><input type="text" name="estimatei80" class="custom-input" readonly value="<?php if (isset($estimatei80)) {
                echo $estimatei80;
            } ?>"></td>
            <td><input type="text" name="estimatej80" class="custom-input" value="<?php if (isset($_REQUEST['estimatej80'])) {
                echo $_REQUEST['estimatej80'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">81</td> -->
            <td>Exhaust Fan Startup</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated81" class="custom-input" readonly value="<?php if (isset($estimated81)) {
                echo $estimated81;
            } ?>"></td>
            <td><input type="text" name="estimatee81" class="custom-input" value="<?php if (isset($_REQUEST['estimatee81'])) {
                echo $_REQUEST['estimatee81'];
            } ?>"></td>
            <td><input type="text" name="estimatef81" class="custom-input" value="<?php if (isset($_REQUEST['estimatef81'])) {
                echo $_REQUEST['estimatef81'];
            } ?>"></td>
            <td><input type="text" name="estimateg81" class="custom-input" value="<?php if (isset($_REQUEST['estimateg81'])) {
                echo $_REQUEST['estimateg81'];
            } ?>"></td>
            <td><input type="text" name="estimateh81" class="custom-input" value="<?php if (isset($_REQUEST['estimateh81'])) {
                echo $_REQUEST['estimateh81'];
            } ?>"></td>
            <td><input type="text" name="estimatei81" class="custom-input" readonly value="<?php if (isset($estimatei81)) {
                echo $estimatei81;
            } ?>"></td>
            <td><input type="text" name="estimatej81" class="custom-input" value="<?php if (isset($_REQUEST['estimatej81'])) {
                echo $_REQUEST['estimatej81'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">82</td> -->
            <td>START-UP MAU</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated82" class="custom-input" readonly value="<?php if (isset($estimated82)) {
                echo $estimated82;
            } ?>"></td>
            <td><input type="text" name="estimatee82" class="custom-input" value="<?php if (isset($_REQUEST['estimatee82'])) {
                echo $_REQUEST['estimatee82'];
            } ?>"></td>
            <td><input type="text" name="estimatef82" class="custom-input" value="<?php if (isset($_REQUEST['estimatef82'])) {
                echo $_REQUEST['estimatef82'];
            } ?>"></td>
            <td><input type="text" name="estimateg82" class="custom-input" value="<?php if (isset($_REQUEST['estimateg82'])) {
                echo $_REQUEST['estimateg82'];
            } ?>"></td>
            <td><input type="text" name="estimateh82" class="custom-input" value="<?php if (isset($_REQUEST['estimateh82'])) {
                echo $_REQUEST['estimateh82'];
            } ?>"></td>
            <td><input type="text" name="estimatei82" class="custom-input" readonly value="<?php if (isset($estimatei82)) {
                echo $estimatei82;
            } ?>"></td>
            <td><input type="text" name="estimatej82" class="custom-input" value="<?php if (isset($_REQUEST['estimatej82'])) {
                echo $_REQUEST['estimatej82'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">83</td> -->
            <td>START-UP FACTORY</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated83" class="custom-input" value="<?php if (isset($_REQUEST['estimated83'])) {
                echo $_REQUEST['estimated83'];
            } ?>"></td>
            <td><input type="text" name="estimatee83" class="custom-input" value="<?php if (isset($_REQUEST['estimatee83'])) {
                echo $_REQUEST['estimatee83'];
            } ?>"></td>
            <td><input type="text" name="estimatef83" class="custom-input" value="<?php if (isset($_REQUEST['estimatef83'])) {
                echo $_REQUEST['estimatef83'];
            } ?>"></td>
            <td><input type="text" name="estimateg83" class="custom-input" value="<?php if (isset($_REQUEST['estimateg83'])) {
                echo $_REQUEST['estimateg83'];
            } ?>"></td>
            <td><input type="text" name="estimateh83" class="custom-input" value="<?php if (isset($_REQUEST['estimateh83'])) {
                echo $_REQUEST['estimateh83'];
            } ?>"></td>
            <td><input type="text" name="estimatei83" class="custom-input" readonly value="<?php if (isset($estimatei83)) {
                echo $estimatei83;
            } ?>"></td>
            <td><input type="text" name="estimatej83" class="custom-input" value="<?php if (isset($_REQUEST['estimatej83'])) {
                echo $_REQUEST['estimatej83'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">84</td> -->
            <td>SHOP DRAWING/DETAILING</td>
            <td></td>
            <td>Multiplier</td>
            <td><input type="text" name="estimated84" class="custom-input" value="<?php if (isset($_REQUEST['estimated84'])) {
                echo $_REQUEST['estimated84'];
            } ?>"></td>
            <td><input type="text" name="estimatee84" class="custom-input" value="<?php if (isset($_REQUEST['estimatee84'])) {
                echo $_REQUEST['estimatee84'];
            } ?>"></td>
            <td><input type="text" name="estimatef84" class="custom-input" value="<?php if (isset($_REQUEST['estimatef84'])) {
                echo $_REQUEST['estimatef84'];
            } ?>"></td>
            <td><input type="text" name="estimateg84" class="custom-input" value="<?php if (isset($_REQUEST['estimateg84'])) {
                echo $_REQUEST['estimateg84'];
            } ?>"></td>
            <td><input type="text" name="estimateh84" class="custom-input" value="<?php if (isset($_REQUEST['estimateh84'])) {
                echo $_REQUEST['estimateh84'];
            } ?>"></td>
            <td><input type="text" name="estimatei84" class="custom-input" readonly value="<?php if (isset($estimatei84)) {
                echo $estimatei84;
            } ?>"></td>
            <td><input type="text" name="estimatej84" class="custom-input" value="<?php if (isset($_REQUEST['estimatej84'])) {
                echo $_REQUEST['estimatej84'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">85</td> -->
            <td>BIM</td>
            <td>Multiplier</td>
            <td><input type="text" name="estimatec85" class="custom-input" readonly value="<?php if (isset($estimatec85)) {
                echo $estimatec85;
            } ?>"></td>
            <td><input type="text" name="estimated85" class="custom-input" readonly value="<?php if (isset($estimated85)) {
                echo $estimated85;
            } ?>"></td>
            <td><input type="text" name="estimatee85" class="custom-input" value="<?php if (isset($_REQUEST['estimatee85'])) {
                echo $_REQUEST['estimatee85'];
            } ?>"></td>
            <td><input type="text" name="estimatef85" class="custom-input" value="<?php if (isset($_REQUEST['estimatef85'])) {
                echo $_REQUEST['estimatef85'];
            } ?>"></td>
            <td><input type="text" name="estimateg85" class="custom-input" value="<?php if (isset($_REQUEST['estimateg85'])) {
                echo $_REQUEST['estimateg85'];
            } ?>"></td>
            <td><input type="text" name="estimateh85" class="custom-input" value="<?php if (isset($_REQUEST['estimateh85'])) {
                echo $_REQUEST['estimateh85'];
            } ?>"></td>
            <td><input type="text" name="estimatei85" class="custom-input" readonly value="<?php if (isset($estimatei85)) {
                echo $estimatei85;
            } ?>"></td>
            <td><input type="text" name="estimatej85" class="custom-input" value="<?php if (isset($_REQUEST['estimatej85'])) {
                echo $_REQUEST['estimatej85'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">86</td> -->
            <td>LEED/COMMISSIONING</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated86" class="custom-input" value="<?php if (isset($_REQUEST['estimated86'])) {
                echo $_REQUEST['estimated86'];
            } ?>"></td>
            <td><input type="text" name="estimatee86" class="custom-input" value="<?php if (isset($_REQUEST['estimatee86'])) {
                echo $_REQUEST['estimatee86'];
            } ?>"></td>
            <td><input type="text" name="estimatef86" class="custom-input" value="<?php if (isset($_REQUEST['estimatef86'])) {
                echo $_REQUEST['estimatef86'];
            } ?>"></td>
            <td><input type="text" name="estimateg86" class="custom-input" value="<?php if (isset($_REQUEST['estimateg86'])) {
                echo $_REQUEST['estimateg86'];
            } ?>"></td>
            <td><input type="text" name="estimateh86" class="custom-input" value="<?php if (isset($_REQUEST['estimateh86'])) {
                echo $_REQUEST['estimateh86'];
            } ?>"></td>
            <td><input type="text" name="estimatei86" class="custom-input" readonly value="<?php if (isset($estimatei86)) {
                echo $estimatei86;
            } ?>"></td>
            <td><input type="text" name="estimatej86" class="custom-input" value="<?php if (isset($_REQUEST['estimatej86'])) {
                echo $_REQUEST['estimatej86'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">87</td> -->
            <td>TITLE 24 ACCEPTANCE TESTING see note</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated87" class="custom-input" value="<?php if (isset($_REQUEST['estimated87'])) {
                echo $_REQUEST['estimated87'];
            } ?>"></td>
            <td><input type="text" name="estimatee87" class="custom-input" value="<?php if (isset($_REQUEST['estimatee87'])) {
                echo $_REQUEST['estimatee87'];
            } ?>"></td>
            <td><input type="text" name="estimatef87" class="custom-input" value="<?php if (isset($_REQUEST['estimatef87'])) {
                echo $_REQUEST['estimatef87'];
            } ?>"></td>
            <td><input type="text" name="estimateg87" class="custom-input" value="<?php if (isset($_REQUEST['estimateg87'])) {
                echo $_REQUEST['estimateg87'];
            } ?>"></td>
            <td><input type="text" name="estimateh87" class="custom-input" value="<?php if (isset($_REQUEST['estimateh87'])) {
                echo $_REQUEST['estimateh87'];
            } ?>"></td>
            <td><input type="text" name="estimatei87" class="custom-input" readonly value="<?php if (isset($estimatei87)) {
                echo $estimatei87;
            } ?>"></td>
            <td><input type="text" name="estimatej87" class="custom-input" value="<?php if (isset($_REQUEST['estimatej87'])) {
                echo $_REQUEST['estimatej87'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">88</td> -->
            <td>Additional Software</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated88" class="custom-input" value="<?php if (isset($_REQUEST['estimated88'])) {
                echo $_REQUEST['estimated88'];
            } ?>"></td>
            <td><input type="text" name="estimatee88" class="custom-input" value="<?php if (isset($_REQUEST['estimatee88'])) {
                echo $_REQUEST['estimatee88'];
            } ?>"></td>
            <td><input type="text" name="estimatef88" class="custom-input" value="<?php if (isset($_REQUEST['estimatef88'])) {
                echo $_REQUEST['estimatef88'];
            } ?>"></td>
            <td><input type="text" name="estimateg88" class="custom-input" value="<?php if (isset($_REQUEST['estimateg88'])) {
                echo $_REQUEST['estimateg88'];
            } ?>"></td>
            <td><input type="text" name="estimateh88" class="custom-input" value="<?php if (isset($_REQUEST['estimateh88'])) {
                echo $_REQUEST['estimateh88'];
            } ?>"></td>
            <td><input type="text" name="estimatei88" class="custom-input" value="<?php if (isset($_REQUEST['estimatei88'])) {
                echo $_REQUEST['estimatei88'];
            } ?>"></td>
            <td><input type="text" name="estimatej88" class="custom-input" value="<?php if (isset($_REQUEST['estimatej88'])) {
                echo $_REQUEST['estimatej88'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">89</td> -->
            <td>Additional Insurance Coverage</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated89" class="custom-input" value="<?php if (isset($_REQUEST['estimated89'])) {
                echo $_REQUEST['estimated89'];
            } ?>"></td>
            <td><input type="text" name="estimatee89" class="custom-input" value="<?php if (isset($_REQUEST['estimatee89'])) {
                echo $_REQUEST['estimatee89'];
            } ?>"></td>
            <td><input type="text" name="estimatef89" class="custom-input" value="<?php if (isset($_REQUEST['estimatef89'])) {
                echo $_REQUEST['estimatef89'];
            } ?>"></td>
            <td><input type="text" name="estimateg89" class="custom-input" value="<?php if (isset($_REQUEST['estimateg89'])) {
                echo $_REQUEST['estimateg89'];
            } ?>"></td>
            <td><input type="text" name="estimateh89" class="custom-input" value="<?php if (isset($_REQUEST['estimateh89'])) {
                echo $_REQUEST['estimateh89'];
            } ?>"></td>
            <td><input type="text" name="estimatei89" class="custom-input" value="<?php if (isset($_REQUEST['estimatei89'])) {
                echo $_REQUEST['estimatei89'];
            } ?>"></td>
            <td><input type="text" name="estimatej89" class="custom-input" value="<?php if (isset($_REQUEST['estimatej89'])) {
                echo $_REQUEST['estimatej89'];
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">90</td> -->
            <td>Bond (FOR PRIME JOBS) 1.8% OF SUBTOTAL</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated90" class="custom-input" value="<?php if (isset($_REQUEST['estimated90'])) {
                echo $_REQUEST['estimated90'];
            } ?>"></td>
            <td><input type="text" name="estimatee90" class="custom-input" value="<?php if (isset($_REQUEST['estimatee90'])) {
                echo $_REQUEST['estimatee90'];
            } ?>"></td>
            <td><input type="text" name="estimatef90" class="custom-input" value="<?php if (isset($_REQUEST['estimatef90'])) {
                echo $_REQUEST['estimatef90'];
            } ?>"></td>
            <td><input type="text" name="estimateg90" class="custom-input" value="<?php if (isset($_REQUEST['estimateg90'])) {
                echo $_REQUEST['estimateg90'];
            } ?>"></td>
            <td><input type="text" name="estimateh90" class="custom-input" value="<?php if (isset($_REQUEST['estimateh90'])) {
                echo $_REQUEST['estimateh90'];
            } ?>"></td>
            <td><input type="text" name="estimatei90" class="custom-input" value="<?php if (isset($_REQUEST['estimatei90'])) {
                echo $_REQUEST['estimatei90'];
            } ?>"></td>
            <td><input type="text" name="estimatej90" class="custom-input" value="<?php if (isset($_REQUEST['estimatej90'])) {
                echo $_REQUEST['estimatej90'];
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel90" class="custom-input" readonly value="<?php if (isset($estimatel90)) {
                echo $estimatel90;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">91</td> -->
            <td>Subcontractor Markup</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated91" class="custom-input" value="<?php if (isset($_REQUEST['estimated91'])) {
                echo $_REQUEST['estimated91'];
            } ?>">%</td>
            <td><input type="text" name="estimatee91" class="custom-input" value="<?php if (isset($_REQUEST['estimatee91'])) {
                echo $_REQUEST['estimatee91'];
            } ?>"></td>
            <td><input type="text" name="estimatef91" class="custom-input" value="<?php if (isset($_REQUEST['estimatef91'])) {
                echo $_REQUEST['estimatef91'];
            } ?>"></td>
            <td><input type="text" name="estimateg91" class="custom-input" readonly value="<?php if (isset($estimateg91)) {
                echo $estimateg91;
            } ?>"></td>
            <td><input type="text" name="estimateh91" class="custom-input" readonly value="<?php if (isset($estimateh91)) {
                echo $estimateh91;
            } ?>"></td>
            <td><input type="text" name="estimatei91" class="custom-input" readonly value="<?php if (isset($estimatei91)) {
                echo $estimatei91;
            } ?>"></td>
            <td><input type="text" name="estimatej91" class="custom-input" readonly value="<?php if (isset($estimatej91)) {
                echo $estimatej91;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel91" class="custom-input" readonly value="<?php if (isset($estimatel91)) {
                echo $estimatel91;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">92</td> -->
            <td>Material Markup</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated92" class="custom-input" value="<?php if (isset($_REQUEST['estimated92'])) {
                echo $_REQUEST['estimated92'];
            } ?>">%</td>
            <td><input type="text" name="estimatee92" class="custom-input" value="<?php if (isset($_REQUEST['estimatee92'])) {
                echo $_REQUEST['estimatee92'];
            } ?>"></td>
            <td><input type="text" name="estimatef92" class="custom-input" value="<?php if (isset($_REQUEST['estimatef92'])) {
                echo $_REQUEST['estimatef92'];
            } ?>"></td>
            <td>AMOUNT</td>
            <td>MATERIAL/EQUIPMENT</td>
            <td></td>
            <td><input type="text" name="estimatej92" class="custom-input" readonly value="<?php if (isset($estimatej92)) {
                echo $estimatej92;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel92" class="custom-input" readonly value="<?php if (isset($estimatel92)) {
                echo $estimatel92;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">93</td> -->
            <td>Tax Rate</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated93" class="custom-input" value="<?php if (isset($_REQUEST['estimated93'])) {
                echo $_REQUEST['estimated93'];
            } ?>">%</td>
            <td><input type="text" name="estimatee93" class="custom-input" value="<?php if (isset($_REQUEST['estimatee93'])) {
                echo $_REQUEST['estimatee93'];
            } ?>"></td>
            <td><input type="text" name="estimatef93" class="custom-input" value="<?php if (isset($_REQUEST['estimatef93'])) {
                echo $_REQUEST['estimatef93'];
            } ?>"></td>
            <td><input type="text" name="estimateg93" class="custom-input" value="<?php if (isset($_REQUEST['estimateg93'])) {
                echo $_REQUEST['estimateg93'];
            } ?>"></td>
            <td>TOTAL TAX</td>
            <td></td>
            <td><input type="text" name="estimatej93" class="custom-input" readonly value="<?php if (isset($estimatej93)) {
                echo $estimatej93;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel93" readonly class="custom-input" value="<?php if (isset($estimatel93)) {
                echo $estimatel93;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">94</td> -->
            <td>Labor Markup</td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimated94" class="custom-input" value="<?php if (isset($_REQUEST['estimated94'])) {
                echo $_REQUEST['estimated94'];
            } ?>">%</td>
            <td><input type="text" name="estimatee94" class="custom-input" value="<?php if (isset($_REQUEST['estimatee94'])) {
                echo $_REQUEST['estimatee94'];
            } ?>"></td>
            <td><input type="text" name="estimatef94" class="custom-input" value="<?php if (isset($_REQUEST['estimatef94'])) {
                echo $_REQUEST['estimatef94'];
            } ?>"></td>
            <td><input type="text" name="estimateg94" class="custom-input" value="<?php if (isset($_REQUEST['estimateg94'])) {
                echo $_REQUEST['estimateg94'];
            } ?>"></td>
            <td>TOTAL LABOR</td>
            <td></td>
            <td><input type="text" name="estimatej94" class="custom-input" readonly value="<?php if (isset($estimatej94)) {
                echo $estimatej94;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel94" class="custom-input" readonly value="<?php if (isset($estimatel94)) {
                echo $estimatel94;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">95</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>SUBCONTRACTOR</td>
            <td></td>
            <td><input type="text" name="estimatej95" class="custom-input" readonly value="<?php if (isset($estimatej95)) {
                echo $estimatej95;
            } ?>"></td>
            <td></td>
            <td><input type="text" name="estimatel95" class="custom-input" readonly value="<?php if (isset($estimatel95)) {
                echo $estimatel95;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">96</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>SUB-TOTAL</td>
            <td></td>
            <td><input type="text" name="estimatej96" class="custom-input" readonly value="<?php if (isset($estimatej96)) {
                echo $estimatej96;
            } ?>"></td>
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
        </tr>
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">97</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimateg97" class="custom-input" readonly value="<?php if (isset($estimateg97)) {
                echo $estimateg97;
            } ?>"></td>
            <td>SUBTOTAL x 10%</td>
            <td></td>
            <td><input type="text" name="estimatej97" class="custom-input" readonly value="<?php if (isset($estimatej97)) {
                echo $estimatej97;
            } ?>"></td>                        
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">98</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimateg98" class="custom-input" readonly value="<?php if (isset($estimateg98)) {
                echo $estimateg98;
            } ?>"></td>
            <td>TOTAL</td>
            <td></td>
            <td><input type="text" name="estimatej98" class="quantity" step="any" value="<?php if (isset($_REQUEST['estimatej98'])) {
                echo $_REQUEST['estimatej98'];
            } else {
                echo 1;
            } ?>"></td>                        
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
        </tr>
        <tr class="estimatedDownDataTable">
            <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">99</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">100</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">101</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">102</td> -->
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
        <tr class="estimatedDownDataTable">
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">103</td> -->
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
        <tr class="estimatedDownDataTable">  
        <!-- <td style="text-align: center;position:sticky;left:0; background-color:white;">104</td> -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="estimatej104" class="custom-input" value="<?php if (isset($_REQUEST['estimatej104'])) {
                echo $_REQUEST['estimatej104'];
            } ?>"></td>
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
        </tr>
    </table>
    <input type="submit" class="estimatesubmit" name="estimate" value="Refresh">
    <?php if (isset($_REQUEST['estimate'])) { ?>
           <input type="submit" value="Download Estimate" class="downloadexcel" name="downloadexcel">
       <?php } ?>
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