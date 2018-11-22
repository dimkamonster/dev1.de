<?php
require_once 'vkapi.class.php';

session_start();
$api_id = 6758330; // Insert here id of your application
$secret_key = '6Qp0PEQjzxCyUrdWUGKt'; // Insert here secret key of your application
$redirect_uri = 'http://dev1.de/vk/';
$display = 'page';
$scope = 'friends,groups';
$response_type = 'code';
$auth_uri = "https://oauth.vk.com/authorize?client_id={$api_id}&display={$display}&
redirect_uri={$redirect_uri}&scope={$scope}&response_type={$response_type}&v=5.52";

$output = "<a href='$auth_uri'>authentication</a>";

//print_r($output);


function verRoles($maskBit){
    $assocBitandRole= array(
        '1'=>'notify',
        '2'=>'friends',
        '4'=>'photos',
        '8'=>'audio',
        '16'=>'video',
        '32'=>'docs',
        '64'=>'notes',
        '128'=>'pages',
        '256'=>'status',
        '512'=>'offers',
        '1024'=>'questions',
        '2048'=>'wall',
        '4096'=>'groups',
        '8192'=>'messages',
        '32768'=>'notifications',
        '131072'=>'stats',
        '262144'=>'ads',
        '524288'=>'offline',
        '1048576'=>'nohttps',
    );
    $res = '<br/>Доступно:';
    $nores = '<br/>Не доступно:';
    foreach($assocBitandRole as $bit=>$role){
        if((int)($maskBit) & (int)$bit){
            $res .= ",".$role;
        } else {
            $nores .= ",".$role;
        }
    }
    return $res.'</br>'.$nores;
}
if(!empty($_GET['code'])){
    header('Location: https://oauth.vk.com/access_token?
client_id='.$api_id.'&
client_secret='.$secret_key.'&
code='.$_GET['code'].'&
redirect_uri=http://dev1.de/vk& ');
} else {
    echo '<a target="_blank" href="https://oauth.vk.com/authorize?
client_id='.$api_id.'&
scope=notify,friends,photos,audio,video,docs,notes,pages,status,offers,questions,groups,notifications,stats,ads,offline,nohttps,&
redirect_uri=http://dev1.de/vk&
response_type=code ">Разрешить приложению test работать с моими данными из VK</a>';
}
//require 'vkapi.class.php';
$VK = new vkapi($api_id, $secret_key);


//получить битовую маску приложения для конкретного пользователя
$resp = $VK->api('getUserSettings', array('uid'=>'10813413'));
echo verRoles($resp['response']);




//TODO : add checking for isset $__GET some parameters, not - authenticate user, yes - make some things

//TODO : make random choice in our group, or add mambers to group and make choice for Santa

/*<a href="https://oauth.vk.com/authorize?client_id=3471327&scope= notify,friends,photos,audio,video,docs,notes,pages,status,offers,questions,wall,groups,messages,notifications,stats,ads,offline,nohttps, &
redirect_uri=http://moguta.ru/&response_type=code ">Разрешить приложению Moguta работать с моими данными из VK</a>


https://oauth.vk.com/authorize?client_id=APP_ID&scope=SETTINGS&redirect_uri=REDIRECT_URI&response_type=code

$VK = new vkapi($api_id, $secret_key);

$resp = $VK->api('getProfiles', array('uids'=>'1,6492'));

print_r($resp); */
?>
