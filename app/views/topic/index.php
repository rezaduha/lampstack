<main>
    <div class="topic-hero__container">
        <div class="topic-hero__container__color-panel" data-topic="<?= $data['articlesByTopic'][0]->name ?>"></div>
        <div class="topic-hero__header">
            <span class="topic-hero__title"><?= $data['articlesByTopic'][0]->name ?></span>
            <span class="topic-hero__desc"><?= $data['articlesByTopic'][0]->description ?></span>
        </div>
    </div>
    <section class="articles-grid">
        <?php
        foreach ($data['articlesByTopic'] as $article) {
        ?>
        <div class="card-article">
            <a href="<?= URLROOT."/article/".$article->slug ?>" class="card-img__link">
                <img
                    src="<?= URLROOT."/public/upload/images/".$article->image ?>"
                    alt="<?= $article->title ?>"
                    class="card-article__img"
                />
            </a>
            <h1 class="card-article__title">
                <a class="card-article__link" href="<?= URLROOT."/article/".$article->slug ?>"><?= $article->title ?></a>
            </h1>
            <p class="card-article__info"><span><?= $article->author ?></span> • <span><?= $article->article_created ?></span></p>
        </div>
        <?php
        }
        ?>
    </section>
</main>
