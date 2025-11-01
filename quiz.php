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
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Pergunta <?php echo $pergunta_atual + 1; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="quiz-box">
            <div class="progresso">
                Pergunta <?php echo $pergunta_atual + 1; ?> de <?php echo count($perguntas); ?>
            </div>
            
            <h2><?php echo $pergunta['pergunta']; ?></h2>
            
            <form action="verificar.php" method="POST">
                <div class="alternativas">
                    <?php foreach ($pergunta['alternativas'] as $indice => $alternativa): ?>
                        <label class="alternativa">
                            <input type="radio" name="resposta" value="<?php echo $indice; ?>" required>
                            <span><?php echo $alternativa; ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
                
                <button type="submit" class="btn-responder">Responder</button>
            </form>
        </div>
    </div>
</body>
</html>
