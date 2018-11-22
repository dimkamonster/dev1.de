<?php
require 'vkapi.class.php';

session_start();
$api_id = 6758330; // Insert here id of your application
$secret_key = '6Qp0PEQjzxCyUrdWUGKt'; // Insert here secret key of your application
$redirect_uri = 'http://dev1.de/vk/';
$display = 'page';
$scope = 'friends,groups';
$response_type = 'code';
$auth_uri = "https://oauth.vk.com/authorize?client_id={$api_id}&display={$display}&redirect_uri={$redirect_uri}&scope={$scope}&response_type={$response_type}&v=5.52";

$output = '<a href="'.$auth_uri.'">authentication</a>';

print_r($output);


//TODO : add checking for isset $__GET some parameters, not - autenticate user, yes - make some things

//TODO : make random choice in our group, or add mambers to group and make choise for Santa

/*<a href="https://oauth.vk.com/authorize?client_id=3471327&scope= notify,friends,photos,audio,video,docs,notes,pages,status,offers,questions,wall,groups,messages,notifications,stats,ads,offline,nohttps, &
redirect_uri=http://moguta.ru/&response_type=code ">Разрешить приложению Moguta работать с моими данными из VK</a>


https://oauth.vk.com/authorize?client_id=APP_ID&scope=SETTINGS&redirect_uri=REDIRECT_URI&response_type=code

$VK = new vkapi($api_id, $secret_key);

$resp = $VK->api('getProfiles', array('uids'=>'1,6492'));

print_r($resp); */
?>
