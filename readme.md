
# BrkCurl

Classe criada com o objetivo de facilitar a criação de requisições e evitar a repetição de código.


## Mini-documentação:

* sendRequest
  - Parâmetros:
    (_string_ url, _bool[int]_ post, _string_ postfields, _bool[int]_ cookies, _string_ cookiesfile, _array_ header)
    * $url: Url da requisição [string url]
    * $post: Define se vai haver requisição POST ou não [int (0 ou 1)]
    * $postfields (Se $post == 1): Conteúdo da requisição [string postdata]
    * $cookies: Define se vai ler/registrar cookies ou não [int (0 ou 1)]
    * $cookiesfile (Se $cookies == 1): Caminho do arquivo que vão ser salvos/lidos os cookies [string caminho]
    * $header: HTTPHeader (Accept, Referer, User-Agent, etc.) [array(of string) header]

* getToken
  - Parâmetros:
    (_string_ data, _string_ antes, _string_ depois)
    * $data: Variável que guarda a resposta da requisição (curl_exec)
    * $antes: O que vem antes do Token em si
    * $depois: O que vem depois do Token
