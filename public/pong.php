<?php

include 'functions.php';

    function pageController()
{
       $click = inputHas('click') ? inputGet('click'): 0;

       $hit     = $click+1;
       $miss    = 'gameOver';

       return array(
            'hit'   => $hit,
            'miss'  => $miss,
            'click' => $click
            );
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pong</title>
</head>
<body>
    <h2>Your Score:
        <span>
            <?= $click; ?>
        </span>
    </h2>
    <?php if ($click !== "Game Over"): ?>
        <a href="pong.php?click=<?= $hit ?>">Hit</a>
        <a href="ping.php?click=<?= $miss ?>">Miss</a>
    <?php else: ?>
        <a href="ping.php">New Game</a>
    <?php endif; ?>
</body>
</html>