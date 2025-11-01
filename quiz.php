<?php
session_start();

if (!isset($_SESSION['perguntas'])) {
    header('Location: index.php');
    exit;
}
$perguntas = $_SESSION['perguntas'];
$pergunta_atual = $_SESSION['pergunta_atual'];

if ($pergunta_atual >= count($perguntas)) {
    header('Location: resultado.php');
    exit;
}
$pergunta = $perguntas[$pergunta_atual];

<div class="progresso">
    Pergunta <?php echo $pergunta_atual + 1; ?> de <?php echo count($perguntas); ?>
</div>

<h2><?php echo $pergunta['pergunta']; ?></h2>
<form action="verificar.php" method="POST">

<?php foreach ($pergunta['alternativas'] as $indice => $alternativa): ?>
    <label class="alternativa">
        <input type="radio" name="resposta" value="<?php echo $indice; ?>" required>
        <span><?php echo $alternativa; ?></span>
    </label>
<?php endforeach; ?>
<button type="submit" class="btn-responder">Responder</button>

