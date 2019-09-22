
# BrkCurl

Classe criada com o objetivo de facilitar a criação de requisições e evitar a repetição de código.


## Mini-documentação:

* sendRequest
    (**string** url, **bool[int]** post, **string** postfields, **bool[int]** cookies, **string** cookiesfile, **array** header)
    
* getToken
    (**string** data, **string** antes, **string** depois)
    

  ```php
<?php
// Inclui a classe
require 'BrkCurl.Class.php';
//Cria o objeto
$BrkCurl = new BrkCurl();
/*
    HEADER (OPCIONAL, PORÉM ALGUNS SITES BLOQUEIAM REQUISIÇÕES SEM HEADER)
*/
$header = array();
$header[] .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$header[] .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36";
$header[] .= "Connection: keep-alive";
$header[] .= "Host: www.facebook.com";
$header[] .= "Referer: https://www.google.com.br/";
$header[] .= "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7";
//$header[] .= "Accept-Encoding: gzip, deflate, br";
//Executa a função 'SendRequest' passando os argumentos
$data = $BrkCurl->sendRequest("https://www.facebook.com/login", 0, 0, 0, 0, $header);
if($data):
    echo "Site acessado: https://www.facebook.com/login <br>";
endif;
//"{"token":"AVp93s6S"}
$token = $BrkCurl->getToken(   $data   ,     '{"token":"'   ,     '"}'    );
//Mostra o Token
echo "Token encontrado: ". $token;
?>
 ```
