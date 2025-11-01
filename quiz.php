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
    <br><br>
    <a href="index.php">🔄 Recomeçar Quiz</a>
</form>

<a href="quiz.php">Próxima Pergunta</a>
<br><br>
<a href="index.php">🔄 Recomeçar Quiz</a>

<a href="index.php">Jogar Novamente</a>

<h1>🎉 Quiz Finalizado!</h1>
<a href="index.php">🔄 Recomeçar Quiz</a>
