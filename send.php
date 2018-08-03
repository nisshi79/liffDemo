<?php
/**
 * Created by PhpStorm.
 * User: yui
 * Date: 2018/08/03
 * Time: 3:40
 */
$inputs = filter_input_array(INPUT_POST);

$demoMessage = $inputs['title'].'のお知らせです'."\r\n";

for($i = 0; $i < min(count($inputs['roles']),count($inputs['members']));$i++){
    $demoMessage .= $inputs['roles'][$i].'は'.$inputs['members'][$i].'の担当です'."\r\n";
}

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('BRMhvyv25/1yd8O+annMkM7obJxqM1ofpKNJ4fuZSkJ07H2eecbzaZCdSX/DT1jWI5y2m6dExTvry0dZfEshg83IZdXPK0IsgimkzjY2QXG2ggSYcsXECLgdDyDXmnwo0pi11CKg5stqaphOyc9uJAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'a307966aa625d0e1bf90a078ef0af91a']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($demoMessage);
$response = $bot->pushMessage('Ud93e55343ff0dfaa0bd51e382521e44d', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

/*$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('test');
$response = $bot->pushMessage(Ud93e55343ff0dfaa0bd51e382521e44d, $textMessageBuilder);*/
/*Cd7e4374358e5fe9a2a25829af7742985*/
/*echo $response->getHTTPStatus() . ' ' . $response->getRawBody();*/