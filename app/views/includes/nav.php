<header>
    <div class="logo"><a href="<?= URLROOT ?>"><?= SITENAME ?></a></div>
    <nav>
        <ul id="primary-navigation" data-visible="false" class="primary-navigation">
            <?php
            foreach ($data['topics'] as $topic) {
            ?>
                <li><a href="<?= URLROOT."/topic/".$topic->slug ?>"><?= $topic->name ?></a></li>
            <?php
            }
            ?>
        </ul>

        <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false" aria-label="Menu">
            <span class="sr-only">Menu</span>
        </button>
    </nav>
</header>
