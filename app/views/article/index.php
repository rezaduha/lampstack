<main>
    <article>
        <div class="article-hero__container">
            <img
            src="<?= URLROOT."/public/upload/images/".$data['hero'] ?>"
            width="<?= $data['imgWidth'] ?>"
            height="<?= $data['imgHeight'] ?>"
            alt="<?= $data['title'] ?> image"
            class="article-hero__img"
            />
            <div class="article-hero__attr">
                <h1 class="article-hero__title">
                    <?= $data['title'] ?>
                </h1>
                <span class="article-hero__author">By <?= $data['author'] ?></span>
                <span class="article-hero__timestamp">Published on <?= date("F d, Y", strtotime($data['created_at'])) ?></span>
            </div>
        </div>
        <div class="article__content"><?= $data['content'] ?></div>
    </article>
</main>