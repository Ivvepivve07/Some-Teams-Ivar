<main id="about">
    <div class="Teams">
        <?php foreach ($teams as $teamName => $team): ?>
            <article class="Team-Card">
                <h2><?php echo $teamName; ?></h2>
            </article>
        <?php endforeach; ?>
    </div>
</main>