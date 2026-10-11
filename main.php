<main id="about">
    <div class="Teams">
        <?php foreach ($teams as $teamName => $team): ?>
            <article class="team-card">
                <h2><?php echo $teamName; ?></h2>
            </article>
        <?php endforeach; ?>
    </div>
</main>