<?php

/**
 * ESSE É O ARQUIVO PRINCIPAL QUE CONTÉM 
 * O BOOTSTRAP,
 * O CSS,
 * O HTML 
 * E O JAVASCRIPT DA PÁGINA
 */

    //REQUER O ARQUIVO QUE POSSUI A LISTA DE PALAVRAS E A FUNÇÃO DE RETIRAR OS ACENTOS
    require_once("./palavras.php");

    /**
     * A PALAVRA É ESCOLHIDA ATRAVÉS DA FUNÇÃO "rand(int $min, int $max): int" 
     * QUE SE TORNARÁ A CHAVE DE UM DOS VALORES DO ARRAY "PALAVRAS"
     * O VALOR RETIRADO DO ARRAY VAI PASSAR PELA FUNÇÃO "tirarAcentos(string $texto): string"
     * E A PALAVRA SELECIONADA E SEM ACENTUAÇÃO SERÁ SALVA NA VARIAVEL $palavra
     */
    $palavraComAcento = PALAVRAS[rand(0, 111)];
    $palavra = tirarAcentos($palavraComAcento);

?>

<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD do HTML -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da Página -->
    <title>Termo</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- CSS do arquivo -->
    <style>
        body {
            background: rgb(127, 255, 0, 0.4);
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<!-- HEAD do HTML -->

<!-- BODY do HTML -->
<body>

    <!-- Div da Logo -->
    <div>
        <a href="https://www.linkedin.com/in/giliardojulio" target="_blank">
            <img src="./logo.png" height="100px" style="margin-left: 4rem;" title="Acesse meu Linkedin :)">
        </a>
    </div>
    <!-- Div da Logo -->

    <!-- Jogo -->
    <div class="text-center">

        <!-- Primeira linha de inputs do jogo (primeira tentativa) -->
        <div id="Linha1" style="margin-bottom: 10px;">
            <button id="Linha11" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha12" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha13" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha14" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha15" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Segunda linha de inputs do jogo (segunda tentativa) -->
        <div id="Linha2" style="margin-bottom: 10px;">
            <button id="Linha21" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha22" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha23" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha24" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha25" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Terceira linha de inputs do jogo (terceira tentativa) -->
        <div id="Linha3" style="margin-bottom: 10px;">
            <button id="Linha31" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha32" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha33" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha34" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha35" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Quarta linha de inputs do jogo (quarta tentativa) -->
        <div id="Linha4" style="margin-bottom: 10px;">
            <button id="Linha41" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha42" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha43" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha44" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha45" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Quinta linha de inputs do jogo (quinta tentativa) -->
        <div id="Linha5" style="margin-bottom: 10px;">
            <button id="Linha51" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha52" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha53" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha54" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha55" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Sexta linha de inputs do jogo (última tentativa) -->
        <div id="Linha6" style="margin-bottom: 20px;">
            <button id="Linha61" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha62" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha63" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha64" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
            <button id="Linha65" class="form-control d-inline-block" style="height: 50px; width: 50px;"></button>
        </div>

        <!-- Mudar teclado para adaptar ao dispositivo -->
        <div style="margin-bottom: 10px; margin-top: 10px;">
            <p id="cel">Está pelo celular? <button class="btn btn-success" style="padding: 2px;" onclick="mudarTeclado('pc')">Sim</button></p>
            <p id="pc" style="display:none;">Está pelo computador? <button class="btn btn-success" style="padding: 2px;" onclick="mudarTeclado('cel')">Sim</button></p>
        </div>

        <!-- Primeira linha do teclado do jogo -->
        <div id="teclado1">
            <button onclick="tecla('q')" id="q" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Q</button>
            <button onclick="tecla('w')" id="w" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">W</button>
            <button onclick="tecla('e')" id="e" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">E</button>
            <button onclick="tecla('r')" id="r" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">R</button>
            <button onclick="tecla('t')" id="t" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">T</button>
            <button onclick="tecla('y')" id="y" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Y</button>
            <button onclick="tecla('u')" id="u" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">U</button>
            <button onclick="tecla('i')" id="i" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">I</button>
            <button onclick="tecla('o')" id="o" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">O</button>
            <button onclick="tecla('p')" id="p" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">P</button>
        </div>

        <!-- Segunda linha do teclado do jogo -->
        <div id="teclado2">
            <button onclick="tecla('a')" id="a" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">A</button>
            <button onclick="tecla('s')" id="s" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">S</button>
            <button onclick="tecla('d')" id="d" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">D</button>
            <button onclick="tecla('f')" id="f" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">F</button>
            <button onclick="tecla('g')" id="g" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">G</button>
            <button onclick="tecla('h')" id="h" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">H</button>
            <button onclick="tecla('j')" id="j" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">J</button>
            <button onclick="tecla('k')" id="k" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">K</button>
            <button onclick="tecla('l')" id="l" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">L</button>
            <!-- Tecla de APAGAR -->
            <button onclick="apagar()" id="backspace" class="form-control d-inline-block text-center" style="height: 50px; width: 100px; background-color: rgb(0,0,0, 0.8); color: white; "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16"><path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/></svg></button>
        </div>

        <!-- Terceira linha do teclado do jogo -->
        <div id="teclado3" style="margin-bottom: 20px;">
            <button onclick="tecla('z')" id="z" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Z</button>
            <button onclick="tecla('x')" id="x" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">X</button>
            <button onclick="tecla('c')" id="c" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">C</button>
            <button onclick="tecla('v')" id="v" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">V</button>
            <button onclick="tecla('b')" id="b" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">B</button>
            <button onclick="tecla('n')" id="n" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">N</button>
            <button onclick="tecla('m')" id="m" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">M</button>
            <!-- Tecla de ENTER -->
            <button onclick="enter()" id="enter" class="form-control d-inline-block text-center" style="height: 50px; width: 100px; background-color: rgb(0,0,0, 0.8); color: white; ">ENTER</button>
        </div>
        
        <!-- Primeira linha do teclado para celular do jogo -->
        <div id="teclado1cel" style="display: none;">
            <button onclick="tecla('q')" id="q" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Q</button>
            <button onclick="tecla('w')" id="w" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">W</button>
            <button onclick="tecla('e')" id="e" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">E</button>
            <button onclick="tecla('r')" id="r" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">R</button>
            <button onclick="tecla('t')" id="t" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">T</button>
            <!-- Tecla de APAGAR do celular -->
            <button onclick="apagar()" id="backspace" class="form-control d-inline-block text-center" style="height: 50px; width: 60px; background-color: rgb(0,0,0, 0.8); color: white; "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16"><path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/></svg></button>
        </div>
            
        <!-- Segunda linha do teclado para celular do jogo -->
        <div id="teclado2cel" style="display: none;">
            <button onclick="tecla('y')" id="y" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Y</button>
            <button onclick="tecla('u')" id="u" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">U</button>
            <button onclick="tecla('i')" id="i" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">I</button>
            <button onclick="tecla('o')" id="o" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">O</button>
            <button onclick="tecla('p')" id="p" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">P</button>
            <!-- Tecla de ENTER do celular -->
            <button onclick="enter()" id="enter" class="form-control d-inline-block text-center" style="height: 50px; width: 80px; background-color: rgb(0,0,0, 0.8); color: white; ">ENTER</button>
        </div>
        
        <!-- Terceira linha do teclado para celular do jogo -->
        <div id="teclado3cel" style="display: none;">
            <button onclick="tecla('a')" id="a" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">A</button>
            <button onclick="tecla('s')" id="s" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">S</button>
            <button onclick="tecla('d')" id="d" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">D</button>
            <button onclick="tecla('f')" id="f" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">F</button>
            <button onclick="tecla('g')" id="g" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">G</button>
            <button onclick="tecla('h')" id="h" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">H</button>
        </div>
        
        <!-- Quarta linha do teclado para celular do jogo -->
        <div id="teclado4cel" style="display: none;">
            <button onclick="tecla('j')" id="j" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">J</button>
            <button onclick="tecla('k')" id="k" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">K</button>
            <button onclick="tecla('l')" id="l" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">L</button>
            <button onclick="tecla('z')" id="z" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">Z</button>
            <button onclick="tecla('x')" id="x" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">X</button>
            <button onclick="tecla('c')" id="c" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">C</button>
        </div>
        
        <!-- Última linha do teclado para celular do jogo -->
        <div id="teclado5cel" style="margin-bottom: 40px; display: none;">
            <button onclick="tecla('v')" id="v" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">V</button>
            <button onclick="tecla('b')" id="b" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">B</button>
            <button onclick="tecla('n')" id="n" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">N</button>
            <button onclick="tecla('m')" id="m" class="form-control d-inline-block text-center" style="height: 50px; width: 50px; background-color: rgb(0,0,0, 0.8); color: white; font-size: 25px;">M</button>
        </div>
        
        
    </div>
    <!-- Jogo -->
    
    <!-- JavaScript -->
    <script>
        //ALERTAS INICIAS DO JOGO
        alert(
          '*************************************************************'
        + ' \n Descubra a palavra certa em 6 tentativas \n Depois de cada tentativa, as peças mostram o quão perto você está da solução'
        + ' \n Verde = Acertou \n Amarelo = A palavra tem essa letra em outro lugar \n Preto = A palavra não tem essa letra'
        + ' \n Desenvolvido por Giliardo Júlio'
        + ' \n Jogo oficial: https://term.ooo'
        )
        
        //DEFINE O VALOR INICIAL DAS VARIAVEIS RESPONSAVEIS PELO LOCAL DA LETRA
        linhaAtual = 1
        letraAtual = 1

        //RECEBE A PALAVRA DEFINIDA DENTRO DO PHP
        palavra = '<?php echo $palavra?>'

        /** 
         * Função tecla(string tecla)
         * Responsável por detectar a tecla pressionada no teclado da página 
         * e adicionar o seu valor no input do Jogo
         * A função incrementa a variavel "letraAtual" para saber o local da próxima letra
        */
        function tecla(tecla){
            input = "Linha"+linhaAtual+letraAtual
            document.getElementById(input).innerText = tecla
            document.getElementById(input).style.textTransform = 'capitalize'
            letraAtual++
        }

        /** 
         * Função enter() -Sem argumentos-
         * Responsável por confirmar que a pessoa digitou 5 caracteres 
         * e que deseja verificar se a palavra está correta
         * A função incrementa a variavel "linhaAtual" e define "letraAtual = 1" para saber o local da próxima letra
        */
        function enter(){
            if(letraAtual == 6){
                acertos = 0
                for(let i = 1; i < 6; i++){
                    input = "Linha"+linhaAtual+i
                    j = i-1
                    letra = palavra.substring(j, i)
                    teste = document.getElementById(input).innerHTML
                    if(letra == teste){
                        document.getElementById(input).style.backgroundColor = 'rgb(50,205,50, 0.8)'
                        acertos++
                    } else {
                        if(palavra.includes(teste)){
                            document.getElementById(input).style.backgroundColor = 'rgb(255,255,0, 0.8)'
                        } else {
                            document.getElementById(input).style.backgroundColor = 'rgb(0,0,0, 0.4)'
                        }
                    }
                }
                //MENSAGEM PARA QUANDO ACERTAR A PALAVRA
                setTimeout(function(){
                    if(acertos == 5){
                        if(confirm(' PARABÉNS VOCÊ ACERTOU !!!'
                        + '\n A PALAVRA ERA <?php echo $palavraComAcento?>'
                        + '\n Se quiser jogar novamente dê ok \n Se não é só clicar em cancelar'
                        + '\n Agradeço por ter jogado ;)'
                        )){
                            window.location.reload()
                        } else {
                            linhaAtual = 555
                            letraAtual = 555
                        }
                    } else {
                        if(linhaAtual == 6){

                            if(confirm(' Você não conseguiu dessa vez'
                            + '\n A palavra era <?php echo $palavraComAcento?>'
                            + '\n Se quiser jogar novamente dê ok \n Se não é só clicar em cancelar'
                            + '\n Não desista, você só não deu sorte :,('
                            )){
                                window.location.reload()
                            } else {
                                linhaAtual = 555
                                letraAtual = 555
                            }

                        } else {
                            linhaAtual++
                            letraAtual = 1
                        }
                    }
                }
                , 500);
            } 
        }

        /** 
         * Função apagar() -Sem argumentos-
         * Responsável por apagar a última letra digitada
         * A função decrementa a variavel "letraAtual" para saber o local da próxima letra
        */
        function apagar(){
            if(letraAtual > 1){
                letraAtual--
                input = "Linha"+linhaAtual+letraAtual
                document.getElementById(input).innerText = ''
            }
        }

        /** 
         * Função mudarTeclado(string el) el será pc ou cel
         * Responsável por mudar o teclado do jogo
        */
        function mudarTeclado(el) {

            if(el == "pc"){

                document.getElementById('cel').style.display = 'none'
                document.getElementById('pc').style.display = ''

                document.getElementById('teclado1').style.display = 'none'
                document.getElementById('teclado2').style.display = 'none'
                document.getElementById('teclado3').style.display = 'none'
                
                
                document.getElementById('teclado1cel').style.display = ''
                document.getElementById('teclado2cel').style.display = ''
                document.getElementById('teclado3cel').style.display = ''
                document.getElementById('teclado4cel').style.display = ''
                document.getElementById('teclado5cel').style.display = ''

            } else {

                document.getElementById('cel').style.display = ''
                document.getElementById('pc').style.display = 'none'

                document.getElementById('teclado1').style.display = ''
                document.getElementById('teclado2').style.display = ''
                document.getElementById('teclado3').style.display = ''
                
                
                document.getElementById('teclado1cel').style.display = 'none'
                document.getElementById('teclado2cel').style.display = 'none'
                document.getElementById('teclado3cel').style.display = 'none'
                document.getElementById('teclado4cel').style.display = 'none'
                document.getElementById('teclado5cel').style.display = 'none'

            }
                
        }

    </script>
    <!-- JavaScript -->

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<!-- BODY do HTML -->

</html>