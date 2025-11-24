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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz - Pergunta <?php echo $pergunta_atual + 1; ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <main class="container">
        <header>
            <p>Pergunta <?php echo $pergunta_atual + 1; ?> de <?php echo count($perguntas); ?></p>
        </header>

        <h2><?php echo htmlspecialchars($pergunta['pergunta'], ENT_QUOTES, 'UTF-8'); ?></h2>

        <form action="verificar.php" method="POST" novalidate>
            <div class="alternativas">
                <?php foreach ($pergunta['alternativas'] as $indice => $alternativa):
                    $inputId = 'q' . $pergunta_atual . '_' . htmlspecialchars($indice, ENT_QUOTES, 'UTF-8');
                ?>
                    <div class="alternativa">
                        <input
                            type="radio"
                            id="<?php echo $inputId; ?>"
                            name="resposta"
                            value="<?php echo htmlspecialchars($indice, ENT_QUOTES, 'UTF-8'); ?>"
                            required>
                        <label for="<?php echo $inputId; ?>" class="alternativa-label">
                            <span><?php echo htmlspecialchars($alternativa, ENT_QUOTES, 'UTF-8'); ?></span>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>

            <button type="submit">Responder 🚀</button>
        </form>

        <a href="index.php?reiniciar=1">🔄 Recomeçar Quiz</a>
    </main>

    <script src="assets/script.js"></script>
    <script src="assets/quiz.js"></script>
</body>

</html>