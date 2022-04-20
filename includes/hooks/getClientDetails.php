<?php

use Carbon\Carbon;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

include __DIR__."/vendor/autoload.php";


add_hook('UserLogin', 1, function ($vars) {

    $command = 'GetClientsDetails';
    $postData = [
        'clientid' => $vars['user']['id'],
        'stats' => true,
    ];

    $results = localAPI($command, $postData);

        if (!($results['customfields1']=='on')){


      //      file_put_contents(__DIR__.'/text.json',json_encode($results['customfields1']),FILE_APPEND);
        }



});

add_hook('ClientAreaPage', 1, function($vars) {



//    file_put_contents(__DIR__.'/text.json',json_encode($vars),FILE_APPEND);

});

add_hook('FormatDateTimeForClientAreaOutput', 1, function ($vars) {


    return  CalendarUtils::strftime('Y-m-d',$vars['date']) ;

});



add_hook('FormatDateForClientAreaOutput', 1, function ($vars) {


  return  CalendarUtils::strftime('Y-m-d',$vars['date']) ;

});




//function hook_template_variables_example($vars)
//{
//    echo "<pre>";
//    var_dump(($vars));
//    $extraTemplateVariables = array();
//
//    // set a fixed value
//    $extraTemplateVariables['fixedValue'] = 'abc';
//
//    // fetch clients data if available
//    $clientsData = isset($vars['clientsdetails']) ? $vars['clientsdetails'] : null;
//
//    // determine if client is logged in
//    if (is_array($clientsData) && isset($clientsData['id'])) {
//        $userId = $clientsData['id'];
//        // perform calculation here
//        $extraTemplateVariables['userSpecificValue'] = '123';
//        $extraTemplateVariables['anotherUserOnlyValue'] = '456';
//    }
//
//    // return array of template variables to define
//    return $extraTemplateVariables;
//}

//
//add_hook('AdminAreaPage', 1,'hook_template_variables_example');


//
//add_hook('AdminAreaPage', 1, function($vars) {
//
//
//
//
//    return var_dump(CalendarUtils::strftime('Y-m-d',$vars['dateTimeNowFormatted'])) ;
//
//    $extraVariables = [];
//    if ($vars['filename'] == 'index.php') {
//        $extraVariables['newVariable1'] = 'thisValue';
//        $extraVariables['newVariable2'] = 'thatValue';
//    }
//    return $extraVariables;
//});










