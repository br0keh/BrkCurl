<?php

/**
 * BrkClass é uma classe para facilitar na criação de checkers/bruteforces/requisições em geral
 */
class BrkCurl
{

  function __construct()
  {

  }
  function sendRequest($url, $post, $postfields, $cookies, $cookiesfile, $header)
  {
      /*
        Argumentos:
            * $url: Url da requisição [string url]
            * $post: Define se vai haver requisição POST ou não [int (0 ou 1)]
            * $postfields (Se $post == 1): Conteúdo da requisição [string postdata]
            * $cookies: Define se vai ler/registrar cookies ou não [int (0 ou 1)]
            * $cookiesfile (Se $cookies == 1): Caminho do arquivo que vão ser salvos/lidos os cookies [string caminho]
            * $header: HTTPHeader (Accept, Referer, User-Agent, etc.) [array(of string) header]

      */
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiesfile);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiesfile);
      if($post == true){
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POST, $postfields);
      }else{
          curl_setopt($ch, CURLOPT_POST, 0);
      }
      $exec = curl_exec($ch);
      curl_close($ch);
      return $exec;

  }

  function getToken($resposta, $antes, $depois)
  {
      /*
      Argumentos:
            * $resposta: Variável que guarda a resposta da requisição (curl_exec)
            * $antes: O que vem antes do Token em si
            * $depois: O que vem depois do Token
      */
      try {
          $a = explode($antes, $resposta);
          $b = explode($depois, $a[1]);
          return $b[0];
      } catch (\Exception $e) {
          return "BrkCurl: Erro ao tentar pegar o token, que, possivelmente, não foi encontrado.";
      }


  }




}


 ?>
