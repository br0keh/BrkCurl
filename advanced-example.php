<?php

// Inclui a classe
require 'BrkCurl.Class.php';

//Cria o objeto
$BrkCurl = new BrkCurl();

//Executa a função 'SendRequest' passando os argumentos
$header = array();
$header[] .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$header[] .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36";
$header[] .= "Connection: keep-alive";
$header[] .= "Host: www.google.com.br";
$header[] .= "Referer: https://www.google.com.br/";
$header[] .= "X-Client-Data: CIS2yQEIorbJAQjBtskBCKmdygEIqKPKARiSo8oB";
$header[] .= "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7";
//$header[] .= "Accept-Encoding: gzip, deflate, br";

$search = "George Washington";

$url_get = "https://google.com.br/search?source=hp&ei=xZvaWs6OHMuuwAT_wpuIBg&btnG=Pesquisar&q=".urlencode($search);
$cookies = getcwd()."/cookies".rand(10000,900000).".txt";

$data = $BrkCurl->sendRequest($url_get, 0, 0, 1, $cookies, $header);

//Mostra a resposta
echo $data;

?>
