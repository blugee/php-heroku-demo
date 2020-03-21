<?php
    $ch = curl_init('https://de-lv-phone-test.leadvertex.ru/api/admin/addOrder.html?token=dmediatest2');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
    $response = curl_exec($ch);
        $logResp = $response ? " response:".$response : " error:".curl_error($ch);
    curl_close($ch);
    $logMsg = date("H:i:s").")post:".json_encode($_POST).$logResp;
    $logFile = __DIR__."/log/".date("Y-m-d").".txt";
    file_put_contents($logFile, $logMsg, FILE_APPEND);
    $respJson = $lead = $status = json_decode($response, true);
    foreach (explode(',','array_keys(),0') as $index)
    {
        if(strpos($index, "()"))
        {
            $funcName = str_replace('()','',$index);
            $lead = $funcName($lead);
        }
        else if(isset($lead[$index]))
        {
            $lead = $lead[$index];
        }
    }
    foreach (explode('') as $index)
        if(isset($status[$index]))
            $status = $status[$index];
    $statusArr = explode('');
    $index = array_search($status, $statusArr);
    $statuses = ["A","P","D"];
    $status = $index===false ? false : $statuses[$index];
    $trackingLink = 'https://tracker2.doaffiliate.net/api/at-power-shape-eu?type=COD&lead='.$lead.'&v='.$_POST['v'];
    if($status)
        $trackingLink .= "&status=".$status;
    $trackingLink .= '&form[name]='.urlencode($_POST['fio']).'&form[phone]='.urlencode($_POST['phone']);
    unset($_POST['name'], $_POST['phone']);
    $trackingLink .= '&'.http_build_query($_POST);
    $trackerResp = file_get_contents($trackingLink);
    if($_POST["jsCodes"])
        die(json_encode(array("response"=>$response)));
    header("Location: success.php");
    die();
        
