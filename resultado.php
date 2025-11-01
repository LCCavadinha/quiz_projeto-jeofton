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
<div class="pontuacao-final">
    <h2>Sua Pontuação:</h2>
    <p class="pontos"><?php echo $pontuacao; ?> / <?php echo $total_perguntas; ?></p>
    <p class="percentual"><?php echo number_format($percentual, 1); ?>%</p>
</div>
<?php if ($percentual >= 80): ?>
    <p class="mensagem excelente">🏆 Excelente! Você mandou muito bem!</p>
<?php elseif ($percentual >= 60): ?>
    <p class="mensagem bom">👍 Bom trabalho! Continue assim!</p>
<?php elseif ($percentual >= 40): ?>
    <p class="mensagem regular">📚 Você pode melhorar! Estude mais!</p>
<?php else: ?>
    <p class="mensagem fraco">💪 Não desista! Tente novamente!</p>
<?php endif; ?>
<?php foreach ($perguntas as $indice => $pergunta): ?>
    <?php 
        $resposta_usuario = $respostas_usuario[$indice];
        $resposta_correta = $pergunta['resposta_correta'];
        $acertou = ($resposta_usuario === $resposta_correta);
    ?>
<div class="pergunta-revisao <?php echo $acertou ? 'correta' : 'errada'; ?>">
    <p><strong>Pergunta <?php echo $indice + 1; ?>:</strong> <?php echo $pergunta['pergunta']; ?></p>
    <p>Sua resposta: <?php echo $pergunta['alternativas'][$resposta_usuario]; ?> 
        <?php echo $acertou ? '✅' : '❌'; ?>
    </p>
    <?php if (!$acertou): ?>
        <p class="resposta-certa">Resposta correta: <?php echo $pergunta['alternativas'][$resposta_correta]; ?></p>
    <?php endif; ?>
</div>
<a href="index.php" class="btn-reiniciar">Jogar Novamente</a>
