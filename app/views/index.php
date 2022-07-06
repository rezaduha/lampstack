<main>
    <div class="post-hero__container">
        <div class="post-hero">
            <a href="<?= URLROOT ?>/article/<?= $data['latestArticle']->article_slug ?>">
            <?php list($width, $height) = getimagesize( URLROOT . '/public/upload/images/' . $data['latestArticle']->image); ?>
                <img src="<?= URLROOT."/public/upload/images/".$data['latestArticle']->image ?>" width="<?= $width ?>" height="<?= $height ?>" alt="<?= $data['latestArticle']->title ?> image" />
            </a>
            <div class="post-hero__attr">
                <span>Latest post</span>
                <a href="<?= URLROOT ?>/article/<?= $data['latestArticle']->article_slug ?>">
                    <h1><?= $data['latestArticle']->title ?></h1>
                </a>
                <p><span><?= $data['latestArticle']->name ?></span> | <span><?= date("d M Y", strtotime($data['latestArticle']->created_at)) ?></span></p>
            </div>
        </div>
    </div>
    <?php
    foreach ($data['featuredArticles'] as $data) {
    ?>
    <section class="featured-topic" data-topic="<?= $data->name ?>">
        <div class="featured-topic__header">
            <div class="featured-topic__title">
                <span>Featured Topic</span>
                <h2><?= $data->name ?></h2>
            </div>
            <a href="<?= URLROOT ?>/topic/<?= $data->slug ?>" class="btn-view-all">View All</a>
        </div>
        <div class="featured-topic__carousel swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($data->data as $article) {
                    list($width, $height) = getimagesize( URLROOT . '/public/upload/images/' . $article->image);
                ?>
                <div class="card-article swiper-slide">
                    <a href="<?= URLROOT."/article/".$article->article_slug ?>" class="card-img__link">
                    <img
                        src="<?= URLROOT."/public/upload/images/".$article->image ?>"
                        width="<?= $width ?>"
                        height="<?= $height ?>"
                        alt="<?= $article->title ?> image"
                        class="card-article__img"
                    />
                    </a>
                    <h3 class="card-article__title">
                    <a class="card-article__link" href="<?= URLROOT."/article/".$article->article_slug ?>"><?= $article->title ?></a>
                    </h3>
                    <p class="card-article__info"><span><?= $article->author ?></span> • <span><?= date("F d, Y", strtotime( $article->article_created)) ?></span></p>
                </div>
                <?php
                }
                ?>
            </div>
            <button class="slick-prev"><span class="sr-only">Previous</span></button>
            <button class="slick-next"><span class="sr-only">Next</span></button>
        </div>
    </section>
    <?php
    }
    ?>
</main>

<?php require APPROOT . '/views/includes/footer.php' ?>
<?php require APPROOT . '/views/includes/script.php' ?>

<script src="<?= URLROOT ?>/public/assets/js/swiper-bundle.min.js"></script>
<script src="<?= URLROOT ?>/public/assets/js/carousel.js"></script>