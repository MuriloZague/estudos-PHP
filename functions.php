<?php

// function NOME_DA_FUNÇÃO(argumentos) {}
// existem várias funções disponíveis no PHP (podem ser encontradas na própria documentação dele)

    // date('d-m-Y'); | date('Y-m-d H:i:s') fornece dia, mês, ano, hora, minuto e segundo;

    // strtoupper('Olá Mundo'); | strtoupper('') deixa todo texto em maiúsculo;

    // Criando um chat manualmente:

    echo "[" . date('Y-m-d H:i:s') . "] Murilo: " . strtoupper("Oláaaaa") . PHP_EOL;
    echo "[" . date('Y-m-d H:i:s') . "] Maiara: " . strtoupper("Eae") . PHP_EOL;
    echo "[" . date('Y-m-d H:i:s') . "] Murilo: " . strtoupper("Tudo certo") . PHP_EOL;
    echo "[" . date('Y-m-d H:i:s') . "] Murilo: " . strtoupper("Olá Mundo") . PHP_EOL;


    // Criando uma função para facilitar a criação do chat:

function sendMessage(string $nickname, string $message){

    echo "[" . date('Y-m-d H:i:s') . "] $nickname: " . strtoupper($message) . PHP_EOL;

};

sendMessage(nickname: 'Murilo', message: 'Olá Mundo');
sendMessage(nickname: 'Maiara', message: 'Hello World');  // com a função sendMessage criada o envio de mensagens fica muito mais fácil e organizado;



    // Para usar em uma variável é preciso tipar uma função (informar o tipo de dado que a função vai retornar)

function sendMessage1(string $nickname, string $message): string  // colocar : depois da function e informar que tipo de dado ela vai retornar (nesse caso uma string)
{
    return "[" . date('Y-m-d H:i:s') . "] $nickname: " . strtoupper($message) . PHP_EOL;
};

$mensagem = sendMessage1(nickname: 'Murilo', message: 'Olá Mundooooo');

echo $mensagem;


    /** BOAS PRÁTICAS COM FUNÇÕES:
     * 
     * utilizar nomes 'entendiveis' por todos da equipe:
     * 
     * function calculoBaseX(int $x, int $y) > function calculoBaseX($inteiro1, $inteiro2)
     * 
     * function send(string $user, string $message) < function sendMessageToTwitch(string $user, string $message)
     * 
     * CAMEL CASE: nomeDaFuncao, funcaoPrimaria, nomeNome  (primeiras palavra sem capitalização e todas as proximas com capitalização)
     * 
     * SNAKE_CASE: nome_da_funcao, funcao_primaria, nome_nome (nenhuma palavra com capitalização e divididas por underline_)
     * 
     */

?>