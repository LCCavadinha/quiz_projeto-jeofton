<?php
session_start();

if (!isset($_POST['resposta'])) {
    header('Location: quiz.php');
    exit;
}

$perguntas = $_SESSION['perguntas'];
$pergunta_atual = $_SESSION['pergunta_atual'];
$resposta_usuario = (int)$_POST['resposta'];
$resposta_correta = $perguntas[$pergunta_atual]['resposta_correta'];

$_SESSION['respostas_usuario'][$pergunta_atual] = $resposta_usuario;

$acertou = ($resposta_usuario === $resposta_correta);

if ($acertou) {
    $_SESSION['pontuacao']++;
}

$_SESSION['pergunta_atual']++;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Resposta</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <main class="container resultado">
        <?php if ($acertou): ?>
            <div class="correto">
                <h2>✅ Correto!</h2>
                <p>Parabéns, você acertou!</p>
            </div>
        <?php else: ?>
            <div class="errado">
                <h2>❌ Errado!</h2>
                <p>A resposta correta era: 
                    <strong><?php echo $perguntas[$pergunta_atual]['alternativas'][$resposta_correta]; ?></strong>
                </p>
            </div>
        <?php endif; ?>

        <a href="quiz.php">➡️ Próxima Pergunta</a>
        <a href="index.php?reiniciar=1">🔄 Recomeçar Quiz</a>
    </main>
</body>
</html>



