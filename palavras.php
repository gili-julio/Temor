<?php

/**
 * ESSE ARQUIVO FICOU RESPONSÁVEL POR DEFINIR A CONSTANTE "PALAVRAS"
 * QUE PASSA UM ARRAY COM 50 PALAVRAS DIFERENTES DE 5 CARACTERES E POR
 * DESENVOLVER A FUNÇÃO "tirarAcentos" QUE RETIRA OS ACENTOS DAS PALAVRAS
 */


define('PALAVRAS', [
    0 => "sagaz",
    1 => "âmago",
    2 => "negro",
    3 => "êxito",
    4 => "mexer",
    5 => "termo",
    6 => "nobre",
    7 => "senso",
    8 => "afeto",
    9 => "plena",
    10 => "mútua",
    11 => "tênue",
    12 => "sutil",
    13 => "fazer",
    14 => "vigor",
    15 => "assim",
    16 => "porém",
    17 => "sanar",
    18 => "fosse",
    19 => "ideia",
    20 => "inato",
    21 => "poder",
    22 => "moral",
    23 => "desde",
    24 => "justo",
    25 => "muito",
    26 => "sobre",
    27 => "honra",
    28 => "fútil",
    29 => "razão",
    30 => "sonho",
    31 => "etnia",
    32 => "anexo",
    33 => "égide",
    34 => "amigo",
    35 => "lapso",
    36 => "expor",
    37 => "mútuo",
    38 => "haver",
    39 => "dengo",
    40 => "hábil",
    41 => "tempo",
    42 => "então",
    43 => "pesar",
    44 => "genro",
    45 => "posse",
    46 => "dizer",
    47 => "saber",
    48 => "prole",
    49 => "dever",
    50 => "detém",
    51 => "ânimo",
    52 => "ânsia",
    53 => "sendo",
    54 => "temor",
    55 => "digno",
    56 => "ainda",
    57 => "pauta",
    58 => "mundo",
    59 => "fugaz",
    60 => "estar",
    61 => "forte",
    62 => "valha",
    63 => "vulgo",
    64 => "neném",
    65 => "denso",
    66 => "revés",
    67 => "pudor",
    68 => "regra",
    69 => "dogma",
    70 => "saúde",
    71 => "banal",
    72 => "jeito",
    73 => "atrás",
    74 => "impor",
    75 => "ordem",
    76 => "pedir",
    77 => "desse",
    78 => "feliz",
    79 => "mesmo",
    80 => "homem",
    81 => "servo",
    82 => "sábio",
    83 => "juízo",
    84 => "prosa",
    85 => "viril",
    86 => "presa",
    87 => "ontem",
    88 => "forma",
    89 => "limbo",
    90 => "falar",
    91 => "manso",
    92 => "meiga",
    93 => "posso",
    94 => "vendo",
    95 => "fluir",
    96 => "todos",
    97 => "sério",
    98 => "mágoa",
    99 => "herói",
    100 => "puder",
    101 => "visar",
    102 => "valor",
    103 => "temer",
    104 => "lugar",
    105 => "pleno",
    106 => "afins",
    107 => "óbvio",
    108 => "falso",
    109 => "gerar",
    110 => "obter",
    111 => "abrir"
]);

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}











?>