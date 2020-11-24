<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * apple login Setting
 **/

$config['apple_login']['client_id']  = "apple 개발자 사이트에 나와있습니다. ex) com.test.test";
$config['apple_login']['client_secret']= ""; #따로 설정 안해도 됩니다.
$config['apple_login']['redirect_uri']   = "https://". $_SERVER['HTTP_HOST']."/login/apple_login";
$config['apple_login']['authorize_url']= "https://appleid.apple.com/auth/authorize";
$config['apple_login']['token_url']  = "https://appleid.apple.com/auth/token";
$config['apple_login']['info_url']       = "https://appleid.apple.com/auth/authorize";
$config['apple_login']['key_url']  = "https://appleid.apple.com/auth/keys";
$config['apple_login']['token_request_post'] = 1; //post로 전송할지 여부
$config['apple_login']['kid']  = "key id";
$config['apple_login']['iss']  = "team id";



/*
[출처 = https://programmar.tistory.com/m/43]
# team id
team_id는 https://developer.apple.com/account/resources/identifiers/list로 들어간 뒤,
NAME의 아이템을 선택하여 들어가면 App ID Prefix라는 놈 밑에 적혀 있다고 합니다.

# key id
key_id는 https://developer.apple.com/account/resources/authkeys/list로 들어간 뒤,
1편에서 sign in with apple과 관련하여 생성한 Key 아이템을 선택해서 들어가면
Key ID라는 놈의 값이라고 합니다.

# client_id
team_id는 https://developer.apple.com/account/resources/identifiers/list로 들어간 뒤,
1편에서 설정한 NAME의 아이템을 선택하여 들어가면 App ID Prefix라는 놈 밑에 적혀 있다고 합니다.
*/