<?php
session_start();

if (!isset($_SESSION['pontuacao']) || !isset($_SESSION['perguntas'])) {
    header('Location: index.php');
    exit;
}

$pontuacao = $_SESSION['pontuacao'];
$perguntas = $_SESSION['perguntas'];
$total_perguntas = count($perguntas);
$percentual = ($total_perguntas > 0) ? ($pontuacao / $total_perguntas) * 100 : 0;
$respostas_usuario = $_SESSION['respostas_usuario'] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <main class="container resultado">
        <h1>🎉 Quiz Finalizado!</h1>

        <div class="pontuacao">
            <h2>Sua Pontuação:</h2>
            <p><strong><?php echo (int)$pontuacao; ?> / <?php echo (int)$total_perguntas; ?></strong></p>
            <p><strong><?php echo number_format($percentual, 1); ?>%</strong></p>
        </div>

        <?php if ($percentual >= 80): ?>
            <p>🏆 Excelente! Você mandou muito bem!</p>
        <?php elseif ($percentual >= 60): ?>
            <p>👍 Bom trabalho! Continue assim!</p>
        <?php elseif ($percentual >= 40): ?>
            <p>📚 Você pode melhorar! Estude mais!</p>
        <?php else: ?>
            <p>💪 Não desista! Tente novamente!</p>
        <?php endif; ?>

        <section class="revisao">
            <h3>Revisão das Respostas:</h3>
            <?php foreach ($perguntas as $indice => $pergunta): ?>
                <?php
                    $resposta_usuario = $respostas_usuario[$indice] ?? null;
                    $resposta_correta = $pergunta['resposta_correta'] ?? null;
                    $acertou = ($resposta_usuario !== null && $resposta_usuario === $resposta_correta);
                ?>
                <div class="revisao-item">
                    <p><strong>Pergunta <?php echo $indice + 1; ?>:</strong> <?php echo htmlspecialchars($pergunta['pergunta'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <p>
                        Sua resposta:
                        <?php
                            if ($resposta_usuario === null) {
                                echo '<em>Não respondeu</em>';
                            } else {
                                $texto_usuario = $pergunta['alternativas'][$resposta_usuario] ?? 'Resposta inválida';
                                echo htmlspecialchars($texto_usuario, ENT_QUOTES, 'UTF-8') . ' ' . ($acertou ? '✅' : '❌');
                            }
                        ?>
                    </p>
                    <?php if (!$acertou): ?>
                        <p>Resposta correta: <?php echo htmlspecialchars($pergunta['alternativas'][$resposta_correta] ?? '—', ENT_QUOTES, 'UTF-8'); ?></p>
                    <?php endif; ?>
                    <hr>
                </div>
            <?php endforeach; ?>
        </section>

        <a href="index.php?reiniciar=1">🔄 Jogar Novamente</a>
    </main>
    <script src="assets/script.js"></script>
</body>
</html>

