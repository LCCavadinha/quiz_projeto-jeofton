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

<?php if ($acertou): ?>
    <div class="feedback correto">
        <h2>✅ Correto!</h2>
        <p>Parabéns, você acertou!</p>
    </div>
<?php else: ?>
    <div class="feedback errado">
        <h2>❌ Errado!</h2>
        <p>A resposta correta era: <strong><?php echo $perguntas[$pergunta_atual - 1]['alternativas'][$resposta_correta]; ?></strong></p>
    </div>
<?php endif; ?>

<a href="quiz.php" class="btn-proximo">Próxima Pergunta</a>



