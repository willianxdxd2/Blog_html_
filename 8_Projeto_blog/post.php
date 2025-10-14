<?php
include_once("templaites/header.php");
include("data/posts.php");
include("helpers/categories.php");

$currentPost = null;
if (isset($_GET['id'])) {
    $postId = (int) $_GET['id'];
    foreach ($posts as $post) {
        if ($post['id'] === $postId) {
            $currentPost = $post;
            break;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <?php if ($currentPost): ?>
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit...
            </p>
        <?php else: ?>
            <p>Post não encontrado.</p>
        <?php endif; ?>
    </div>
</main>

<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php if ($currentPost && !empty($currentPost['tags'])): ?>
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Nenhuma tag</li>
        <?php endif; ?>
    </ul>

    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php include_once("templaites/footer.php"); ?>