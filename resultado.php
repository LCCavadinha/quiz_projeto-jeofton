<?php
session_start();

if (!isset($_SESSION['pontuacao'])) {
    header('Location: index.php');
    exit;
}

$pontuacao = $_SESSION['pontuacao'];
$total_perguntas = count($_SESSION['perguntas']);
$percentual = ($pontuacao / $total_perguntas) * 100;
$perguntas = $_SESSION['perguntas'];
$respostas_usuario = $_SESSION['respostas_usuario'];
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
            <p><strong><?php echo $pontuacao; ?> / <?php echo $total_perguntas; ?></strong></p>
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
                    $resposta_usuario = $respostas_usuario[$indice];
                    $resposta_correta = $pergunta['resposta_correta'];
                    $acertou = ($resposta_usuario === $resposta_correta);
                ?>
                <div>
                    <p><strong>Pergunta <?php echo $indice + 1; ?>:</strong> <?php echo $pergunta['pergunta']; ?></p>
                    <p>Sua resposta: <?php echo $pergunta['alternativas'][$resposta_usuario]; ?> 
                        <?php echo $acertou ? '✅' : '❌'; ?>
                    </p>
                    <?php if (!$acertou): ?>
                        <p>Resposta correta: <?php echo $pergunta['alternativas'][$resposta_correta]; ?></p>
                    <?php endif; ?>
                    <hr>
                </div>
            <?php endforeach; ?>
        </section>

        <a href="index.php?reiniciar=1">🔄 Jogar Novamente</a>
    </main>
</body>
</html>

