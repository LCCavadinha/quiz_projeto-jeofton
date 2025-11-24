<?php
session_start();

$perguntas = [
    [
        'id' => 1,
        'categoria' => 'JavaScript',
        'pergunta' => 'Qual é o resultado de: console.log(0.1 + 0.2 === 0.3)?',
        'alternativas' => [
            'a' => 'true',
            'b' => 'false',
            'c' => 'undefined',
            'd' => 'NaN',
            'e' => 'TypeError'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 2,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que é um "closure" em JavaScript?',
        'alternativas' => [
            'a' => 'Uma função que não retorna nada',
            'b' => 'Uma função que tem acesso ao escopo externo mesmo após a função externa ter sido executada',
            'c' => 'Um método para fechar conexões de banco de dados',
            'd' => 'Uma forma de encerrar loops infinitos',
            'e' => 'Um tipo de classe privada'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 3,
        'categoria' => 'JavaScript',
        'pergunta' => 'Qual é a diferença principal entre "==" e "===" em JavaScript?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => '=== é mais rápido que ==',
            'c' => '== compara valores com coerção de tipo, === compara valores e tipos sem coerção',
            'd' => '=== só funciona com números',
            'e' => '== é deprecated'
        ],
        'resposta_correta' => 'c'
    ],
    [
        'id' => 4,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que o método Array.prototype.reduce() faz?',
        'alternativas' => [
            'a' => 'Remove elementos duplicados de um array',
            'b' => 'Reduz o tamanho do array pela metade',
            'c' => 'Executa uma função redutora em cada elemento do array, resultando em um único valor de retorno',
            'd' => 'Diminui o valor de cada elemento do array',
            'e' => 'Converte o array em string'
        ],
        'resposta_correta' => 'c'
    ],
    [
        'id' => 5,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que é "hoisting" em JavaScript?',
        'alternativas' => [
            'a' => 'Um método para ordenar arrays',
            'b' => 'O comportamento de mover declarações para o topo do escopo durante a compilação',
            'c' => 'Uma técnica de otimização de performance',
            'd' => 'Um tipo de loop',
            'e' => 'Uma forma de hospedar aplicações JavaScript'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 6,
        'categoria' => 'JavaScript',
        'pergunta' => 'Qual é o resultado de: typeof null?',
        'alternativas' => [
            'a' => '"null"',
            'b' => '"undefined"',
            'c' => '"object"',
            'd' => '"number"',
            'e' => 'null'
        ],
        'resposta_correta' => 'c'
    ],
    [
        'id' => 7,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que é o "Event Loop" em JavaScript?',
        'alternativas' => [
            'a' => 'Um loop que executa eventos de mouse',
            'b' => 'Um mecanismo que permite JavaScript executar operações não-bloqueantes',
            'c' => 'Uma função para criar loops infinitos',
            'd' => 'Um método para detectar eventos do teclado',
            'e' => 'Um tipo de estrutura de repetição'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 8,
        'categoria' => 'JavaScript',
        'pergunta' => 'Qual é a diferença entre "let", "const" e "var"?',
        'alternativas' => [
            'a' => 'Não há diferença, são sinônimos',
            'b' => 'var tem escopo de função, let e const têm escopo de bloco; const não pode ser reatribuído',
            'c' => 'let é mais rápido que var',
            'd' => 'const só funciona com números constantes',
            'e' => 'var é a única forma moderna de declarar variáveis'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 9,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que são Promises em JavaScript?',
        'alternativas' => [
            'a' => 'Funções que sempre retornam true',
            'b' => 'Objetos que representam a eventual conclusão ou falha de uma operação assíncrona',
            'c' => 'Variáveis que prometem não mudar de valor',
            'd' => 'Métodos para criar promessas ao usuário',
            'e' => 'Estruturas de dados para armazenar promessas'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 10,
        'categoria' => 'JavaScript',
        'pergunta' => 'O que é "destructuring" em JavaScript?',
        'alternativas' => [
            'a' => 'Uma forma de destruir objetos da memória',
            'b' => 'Um método para deletar propriedades',
            'c' => 'Uma sintaxe para extrair valores de arrays ou propriedades de objetos em variáveis distintas',
            'd' => 'Uma técnica para quebrar strings',
            'e' => 'Um tipo de erro de sintaxe'
        ],
        'resposta_correta' => 'c'
    ],
    [
        'id' => 11,
        'categoria' => 'PHP',
        'pergunta' => 'Qual é a diferença entre "include" e "require" em PHP?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => 'require gera um erro fatal se o arquivo não for encontrado, include gera apenas um warning',
            'c' => 'include é mais rápido que require',
            'd' => 'require só funciona com arquivos .php',
            'e' => 'include é deprecated'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 12,
        'categoria' => 'PHP',
        'pergunta' => 'O que são Traits em PHP?',
        'alternativas' => [
            'a' => 'Um tipo de variável especial',
            'b' => 'Mecanismo de reutilização de código que permite compartilhar métodos entre classes',
            'c' => 'Uma forma de criar interfaces',
            'd' => 'Um método para rastrear bugs',
            'e' => 'Uma função nativa do PHP'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 13,
        'categoria' => 'PHP',
        'pergunta' => 'Qual é a diferença entre "==" e "===" em PHP?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => '== compara valores, === compara valores e tipos',
            'c' => '=== é mais lento',
            'd' => '== só funciona com strings',
            'e' => '=== foi introduzido no PHP 8'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 14,
        'categoria' => 'PHP',
        'pergunta' => 'O que é um "namespace" em PHP?',
        'alternativas' => [
            'a' => 'Um tipo de variável global',
            'b' => 'Uma forma de organizar código e evitar conflitos de nomes',
            'c' => 'Um método para criar espaços em strings',
            'd' => 'Uma função para gerenciar memória',
            'e' => 'Um tipo de comentário especial'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 15,
        'categoria' => 'PHP',
        'pergunta' => 'O que faz a função "array_map()" em PHP?',
        'alternativas' => [
            'a' => 'Cria um mapa visual do array',
            'b' => 'Aplica uma função callback a cada elemento de um array e retorna um novo array',
            'c' => 'Mapeia arrays para objetos',
            'd' => 'Ordena arrays alfabeticamente',
            'e' => 'Remove elementos duplicados'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 16,
        'categoria' => 'PHP',
        'pergunta' => 'O que é PDO em PHP?',
        'alternativas' => [
            'a' => 'PHP Data Object - uma extensão para acessar bancos de dados',
            'b' => 'PHP Document Object',
            'c' => 'PHP Debug Output',
            'd' => 'PHP Development Options',
            'e' => 'PHP Data Organizer'
        ],
        'resposta_correta' => 'a'
    ],
    [
        'id' => 17,
        'categoria' => 'PHP',
        'pergunta' => 'Qual é o modificador de acesso mais restritivo em PHP?',
        'alternativas' => [
            'a' => 'public',
            'b' => 'protected',
            'c' => 'private',
            'd' => 'static',
            'e' => 'final'
        ],
        'resposta_correta' => 'c'
    ],
    [
        'id' => 18,
        'categoria' => 'PHP',
        'pergunta' => 'O que são "Magic Methods" em PHP?',
        'alternativas' => [
            'a' => 'Métodos que executam truques de mágica',
            'b' => 'Métodos especiais que começam com __ e são chamados automaticamente em certas situações',
            'c' => 'Métodos que são mais rápidos que métodos normais',
            'd' => 'Métodos que não precisam ser declarados',
            'e' => 'Métodos exclusivos do PHP 8'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 19,
        'categoria' => 'PHP',
        'pergunta' => 'O que é "Type Hinting" em PHP?',
        'alternativas' => [
            'a' => 'Uma forma de dar dicas ao programador',
            'b' => 'Especificar o tipo de dado esperado em parâmetros de função e retornos',
            'c' => 'Um método de debug',
            'd' => 'Uma técnica de otimização',
            'e' => 'Um tipo de comentário'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 20,
        'categoria' => 'PHP',
        'pergunta' => 'O que é Composer em PHP?',
        'alternativas' => [
            'a' => 'Um editor de código',
            'b' => 'Um gerenciador de dependências para PHP',
            'c' => 'Um framework PHP',
            'd' => 'Uma ferramenta para compor músicas',
            'e' => 'Um compilador PHP'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 21,
        'categoria' => 'MySQL',
        'pergunta' => 'Qual é a diferença entre INNER JOIN e LEFT JOIN?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => 'INNER JOIN retorna apenas registros com correspondência em ambas tabelas, LEFT JOIN retorna todos da esquerda',
            'c' => 'LEFT JOIN é mais rápido',
            'd' => 'INNER JOIN só funciona com chaves primárias',
            'e' => 'LEFT JOIN foi descontinuado'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 22,
        'categoria' => 'MySQL',
        'pergunta' => 'O que é um índice em MySQL e para que serve?',
        'alternativas' => [
            'a' => 'Uma forma de numerar registros',
            'b' => 'Uma estrutura de dados que melhora a velocidade de recuperação de dados',
            'c' => 'Um tipo de chave estrangeira',
            'd' => 'Uma função para indexar strings',
            'e' => 'Um método de backup'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 23,
        'categoria' => 'MySQL',
        'pergunta' => 'O que faz a cláusula HAVING em SQL?',
        'alternativas' => [
            'a' => 'É sinônimo de WHERE',
            'b' => 'Filtra resultados após agregação com GROUP BY',
            'c' => 'Verifica se um registro existe',
            'd' => 'Cria uma nova coluna',
            'e' => 'Deleta registros duplicados'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 24,
        'categoria' => 'MySQL',
        'pergunta' => 'O que é uma transação em MySQL?',
        'alternativas' => [
            'a' => 'Uma transferência de dados entre tabelas',
            'b' => 'Um conjunto de operações que são executadas como uma única unidade de trabalho',
            'c' => 'Um tipo de consulta complexa',
            'd' => 'Uma forma de fazer backup',
            'e' => 'Um método de autenticação'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 25,
        'categoria' => 'MySQL',
        'pergunta' => 'Qual é a diferença entre DELETE e TRUNCATE?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => 'DELETE pode usar WHERE e é mais lento, TRUNCATE remove todos os registros rapidamente',
            'c' => 'TRUNCATE é mais seguro',
            'd' => 'DELETE foi descontinuado',
            'e' => 'TRUNCATE só funciona com tabelas temporárias'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 26,
        'categoria' => 'MySQL',
        'pergunta' => 'O que são Stored Procedures em MySQL?',
        'alternativas' => [
            'a' => 'Procedimentos para armazenar dados',
            'b' => 'Conjuntos de instruções SQL armazenadas no servidor que podem ser reutilizadas',
            'c' => 'Métodos para fazer backup',
            'd' => 'Funções JavaScript no MySQL',
            'e' => 'Tipos de índices especiais'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 27,
        'categoria' => 'MySQL',
        'pergunta' => 'O que é normalização de banco de dados?',
        'alternativas' => [
            'a' => 'Tornar todos os dados em letras minúsculas',
            'b' => 'Processo de organizar dados para reduzir redundância e melhorar integridade',
            'c' => 'Um método de backup',
            'd' => 'Uma técnica de criptografia',
            'e' => 'Um tipo de índice'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 28,
        'categoria' => 'MySQL',
        'pergunta' => 'O que é uma VIEW em MySQL?',
        'alternativas' => [
            'a' => 'Uma forma de visualizar tabelas',
            'b' => 'Uma tabela virtual baseada no resultado de uma consulta SQL',
            'c' => 'Um tipo de índice',
            'd' => 'Uma permissão de usuário',
            'e' => 'Um método de visualização de logs'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 29,
        'categoria' => 'MySQL',
        'pergunta' => 'O que são as propriedades ACID em bancos de dados?',
        'alternativas' => [
            'a' => 'Um tipo de teste de pH',
            'b' => 'Atomicidade, Consistência, Isolamento e Durabilidade',
            'c' => 'Um protocolo de segurança',
            'd' => 'Um tipo de índice avançado',
            'e' => 'Uma técnica de otimização'
        ],
        'resposta_correta' => 'b'
    ],
    [
        'id' => 30,
        'categoria' => 'MySQL',
        'pergunta' => 'Qual é a diferença entre CHAR e VARCHAR?',
        'alternativas' => [
            'a' => 'Não há diferença',
            'b' => 'CHAR tem tamanho fixo, VARCHAR tem tamanho variável',
            'c' => 'VARCHAR é mais rápido',
            'd' => 'CHAR só aceita números',
            'e' => 'VARCHAR foi descontinuado'
        ],
        'resposta_correta' => 'b'
    ]
];

// Salva as perguntas na sessão
$_SESSION['perguntas'] = $perguntas;
$_SESSION['pergunta_atual'] = 0;
$_SESSION['pontuacao'] = 0;
$_SESSION['respostas_usuario'] = [];

// Se vier com parâmetro reiniciar=1, vai direto pro quiz
if (isset($_GET['reiniciar']) && $_GET['reiniciar'] == 1) {
    header('Location: quiz.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Jogo de Perguntas</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div>
        <h1>🎯 Quiz de Programação</h1>
        <p>Teste seus conhecimentos em JavaScript, PHP e MySQL!</p>
        <p>Total de perguntas: <strong><?php echo count($perguntas); ?></strong></p>
        <p>📚 Categorias: JavaScript (10), PHP (10), MySQL (10)</p>
        
        <br>
        <a href="quiz.php">▶️ Começar Quiz</a>
    </div>
</body>
</html>
