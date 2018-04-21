<?php

// Inclui a classe
require 'BrkCurl.Class.php';

//Cria o objeto
$BrkCurl = new BrkCurl();

$header = array();
$header[] .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$header[] .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36";
$header[] .= "Connection: keep-alive";
$header[] .= "Host: www.google.com.br";
$header[] .= "Referer: https://www.google.com.br/";
$header[] .= "X-Client-Data: CIS2yQEIorbJAQjBtskBCKmdygEIqKPKARiSo8oB";
$header[] .= "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7";
//$header[] .= "Accept-Encoding: gzip, deflate, br";


//Executa a função 'SendRequest' passando os argumentos
$data = $BrkCurl->sendRequest("https://google.com.br/", 0, 0, 0, 0, $header);

//Mostra a resposta
echo $data;

?>
