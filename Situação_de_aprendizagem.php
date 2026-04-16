<?php

$opcao = 0;
$login = "";
$senha = "";
$nova_senha = "";
$email = "";
$rec = 268-795;
$veryfic_rec = 0;

while($opcao !=3){

print ("===MENU===\n");
print ("1 -> Login\n");
print ("2 -> Esqueci minha senha\n");
print ("3 -> Sair\n");

$opcao = (int) readline("Selecione uma opção: \n");

//Entrar no site
if($opcao == 1){
    $login = readline("Digite o seu Usuário: \n");
    $senha = readline("Digite sua senha: \n");
}

//Alterar senha
if($opcao == 2){
    $email = readline("Digite o seu E-Mail: \n");
    while($veryfic_rec )
    echo "Enviamos um código de verificação para o E-Mail informado. \n";
    echo "Seu código é 268-795";
    $veryfic_rec = readline("Digite o código de verificação: \n");
    if($veryfic_rec = $rec){
        $nova_senha = readline("Digite sua nova senha: \n");
        echo "Sua senha foi alterada com sucesso \n";
    }
    else{
        echo "Código incorreto!";
    }
}

print ("===Seja bem vindo!===");

}