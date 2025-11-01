<?php
session_start();
$perguntas = [
    [
        'pergunta' => 'Qual é a capital do Brasil?',
        'alternativas' => ['São Paulo', 'Rio de Janeiro', 'Brasília', 'Salvador'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Quanto é 2 + 2?',
        'alternativas' => ['3', '4', '5', '22'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é o maior planeta do Sistema Solar?',
        'alternativas' => ['Terra', 'Marte', 'Júpiter', 'Saturno'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Quem pintou a Mona Lisa?',
        'alternativas' => ['Michelangelo', 'Leonardo da Vinci', 'Rafael', 'Donatello'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é o oceano mais extenso?',
        'alternativas' => ['Atlântico', 'Índico', 'Ártico', 'Pacífico'],
        'resposta_correta' => 3
    ],
    [
        'pergunta' => 'Em que ano o homem pisou na Lua pela primeira vez?',
        'alternativas' => ['1965', '1967', '1969', '1971'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é a língua mais falada no mundo?',
        'alternativas' => ['Inglês', 'Mandarim', 'Espanhol', 'Hindi'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quantos continentes existem?',
        'alternativas' => ['5', '6', '7', '8'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é o menor país do mundo?',
        'alternativas' => ['Mônaco', 'Vaticano', 'San Marino', 'Liechtenstein'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quem escreveu "Dom Casmurro"?',
        'alternativas' => ['José de Alencar', 'Machado de Assis', 'Clarice Lispector', 'Jorge Amado'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é a fórmula química da água?',
        'alternativas' => ['H2O', 'CO2', 'O2', 'H2O2'],
        'resposta_correta' => 0
    ],
    [
        'pergunta' => 'Quantos dias tem um ano bissexto?',
        'alternativas' => ['364', '365', '366', '367'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é a montanha mais alta do mundo?',
        'alternativas' => ['K2', 'Kilimanjaro', 'Monte Everest', 'Aconcágua'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Em que país fica a Torre Eiffel?',
        'alternativas' => ['Itália', 'França', 'Espanha', 'Inglaterra'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é o animal terrestre mais rápido?',
        'alternativas' => ['Leão', 'Guepardo', 'Leopardo', 'Tigre'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quantos ossos tem o corpo humano adulto?',
        'alternativas' => ['186', '206', '226', '246'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é a moeda oficial do Japão?',
        'alternativas' => ['Yuan', 'Won', 'Iene', 'Dong'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Quem descobriu o Brasil?',
        'alternativas' => ['Cristóvão Colombo', 'Pedro Álvares Cabral', 'Vasco da Gama', 'Fernão de Magalhães'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é o maior mamífero do mundo?',
        'alternativas' => ['Elefante africano', 'Baleia azul', 'Girafa', 'Tubarão-baleia'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quantos lados tem um hexágono?',
        'alternativas' => ['4', '5', '6', '7'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é a capital da Argentina?',
        'alternativas' => ['Santiago', 'Montevidéu', 'Buenos Aires', 'Lima'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Em que ano começou a Segunda Guerra Mundial?',
        'alternativas' => ['1937', '1939', '1941', '1943'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Qual é o metal mais abundante na crosta terrestre?',
        'alternativas' => ['Ferro', 'Alumínio', 'Cobre', 'Ouro'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quantos jogadores tem um time de futebol em campo?',
        'alternativas' => ['9', '10', '11', '12'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é o rio mais extenso do mundo?',
        'alternativas' => ['Nilo', 'Amazonas', 'Yangtzé', 'Mississippi'],
        'resposta_correta' => 1
    ],
    [
        'pergunta' => 'Quem foi o primeiro presidente do Brasil?',
        'alternativas' => ['Getúlio Vargas', 'Dom Pedro II', 'Deodoro da Fonseca', 'Juscelino Kubitschek'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é a velocidade da luz?',
        'alternativas' => ['300.000 km/s', '150.000 km/s', '450.000 km/s', '600.000 km/s'],
        'resposta_correta' => 0
    ],
    [
        'pergunta' => 'Quantos estados tem o Brasil?',
        'alternativas' => ['24', '25', '26', '27'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Qual é o maior deserto do mundo?',
        'alternativas' => ['Saara', 'Gobi', 'Antártica', 'Kalahari'],
        'resposta_correta' => 2
    ],
    [
        'pergunta' => 'Em que século vivemos atualmente?',
        'alternativas' => ['Século XX', 'Século XXI', 'Século XXII', 'Século XIX'],
        'resposta_correta' => 1
    ]
];

$_SESSION['perguntas'] = $perguntas;
$_SESSION['pergunta_atual'] = 0;
$_SESSION['pontuacao'] = 0;
$_SESSION['respostas_usuario'] = [];

