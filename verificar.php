<?php
session_start();

// valida presença do post
if (!isset($_POST['resposta'])) {
    header('Location: quiz.php');
    exit;
}

// garante que temos perguntas
if (!isset($_SESSION['perguntas']) || !isset($_SESSION['pergunta_atual'])) {
    header('Location: index.php');
    exit;
}

$perguntas = $_SESSION['perguntas'];
$pergunta_atual = $_SESSION['pergunta_atual'];

// usa uma cópia do índice atual antes de incrementar
$current_index = $pergunta_atual;

// pega a resposta do usuário como string (não convertemos para int)
$resposta_usuario = (string) $_POST['resposta'];

// valida que o índice exista
if (!isset($perguntas[$current_index])) {
    header('Location: index.php');
    exit;
}

$resposta_correta = $perguntas[$current_index]['resposta_correta'] ?? null;

// registra resposta do usuário
$_SESSION['respostas_usuario'][$current_index] = $resposta_usuario;

// determina acerto (comparação estrita de string)
$acertou = ($resposta_usuario === $resposta_correta);

// incrementa pontuação se acertou
if ($acertou) {
    $_SESSION['pontuacao'] = ($_SESSION['pontuacao'] ?? 0) + 1;
}

// avança para a próxima pergunta
$_SESSION['pergunta_atual'] = $pergunta_atual + 1;
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
                    <strong>
                        <?php
                            // Mostra a alternativa correta com segurança
                            $texto_correto = $perguntas[$current_index]['alternativas'][$resposta_correta] ?? '—';
                            echo htmlspecialchars($texto_correto, ENT_QUOTES, 'UTF-8');
                        ?>
                    </strong>
                </p>
            </div>
        <?php endif; ?>

        <a href="index.php?reiniciar=1">🔄 Recomeçar Quiz</a>
        <a href="quiz.php">➡️ Próxima Pergunta</a>
    </main>
    <script src="assets/script.js"></script>
</body>
</html>




