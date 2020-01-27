<?php

function getJsonWall()
{
    $request_params = [
        'domain' => 'codinggroup',
        'offset' => 1,
        'filter' => 'owner',
        'extended' => 1,
        'v' => '5.103',
        'access_token' => 'b1e8dd3131df6c3150d0c82a8501ac9e6abb44994d50691626fb8352d463b38c0b49467e9553190b607ac'
    ];
    
    $url = 'https://api.vk.com/method/wall.get?' . http_build_query($request_params);
    
    return file_get_contents($url);    
}



