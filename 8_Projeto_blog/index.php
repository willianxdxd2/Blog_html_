<?php
include_once("helpers/url.php");  // Define $BASE_URL, que termina com /
include_once("data/posts.php");

include_once("templaites/header.php");  // Pasta com nome correto
?>

<main>

    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O Blog de programação</p>
    </div>

    <div id="posts-container">
        <?php foreach ($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                        <?= htmlspecialchars($post['title']) ?>
                    </a>
                </h2>
                <p class="post-description"><?= htmlspecialchars($post['description']) ?></p>
                <div class="tags-container">
                    <?php foreach ($post['tags'] as $tag): ?>
                        <a href="#"><?= htmlspecialchars($tag) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>

<?php include_once("templaites/footer.php"); ?>