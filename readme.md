
# BrkCurl

create http requests

## Mini-documentação:

* sendRequest
    (**string** url, **bool[int]** post, **string** postfields, **bool[int]** cookies, **string** cookiesfile, **array** header)
    
* getToken
    (**string** data, **string** antes, **string** depois)
    
```php
<?php

require 'BrkCurl.Class.php';
$BrkCurl = new BrkCurl();

/** HEADERS **/
$header = array();
$header[] .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$header[] .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36";
$header[] .= "Connection: keep-alive";
$header[] .= "Host: www.facebook.com";
$header[] .= "Referer: https://www.google.com.br/";
$header[] .= "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7";


$data = $BrkCurl->sendRequest(
        "https://www.facebook.com/login",
        false,  
        false, 
        false, 
        false,
        $header
);


if(!$data) {
    exit("Request error.");
}


$token = $BrkCurl->getToken(   $data   ,     '{"token":"'   ,     '"}'    );

echo "Token encontrado: ". $token;
 ```
