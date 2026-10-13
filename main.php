<?php
require __DIR__ . '/data.php';
?>

<main id="about">
    <div class="Teams">
        <?php foreach ($teams as $teamName => $team): ?>
            <article class="Team-Card">
                <a class="Team-Link" href="/click.php">
                    <div class="Information">
                        <img class="Logo" src="<?php echo ($team['logo_uefa']); ?>" alt="logo">
                        <h2><?php echo ($teamName); ?></h2>
                        <h3><?php echo ($team['league']); ?></h3>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>

    <div>
        <img class="Footboll" src="/Soccerball.svg.webp" alt="Footboll">
    </div>
</main>