<?php
include '../../Helper.php';
use OOP\HelperNS\Helper;
use OOP\Modules\Blog;
use OOP\Modules\Category;
use OOP\Modules\User;

Helper::autoLoader();

include __DIR__ . "/../components/header.php"; 
$blogs = Blog::getAllBlogs();

?>


<div class="table-page">
    <h1>Posts Table</h1>
    <div class="header">
        <input type="text" placeholder="Search...">
    </div>
    <div class="table">
        <div class="th">
            <p>Id</p>
            <p>title</p>
            <p>Description</p>
            <p>image</p>
            <p>published at</p>
            <p>user name</p>
            <p>category</p>
        </div>
        <?php foreach($blogs as $blog): ?>
        <div class="tr">
            <p>
                <?= $blog['id'] ?>
            </p>
            <p>
                <?= $blog['title'] ?>
            </p>
            <p>
                <?= $blog['description'] ?>
            </p>
            <p>
                <img src="../../../frontend/src/assets/blogs/<?= $blog['image'] ?>" alt="">
            </p>
            <p>
                <?= $blog['published_at'] ?>
            </p>
            <p>
                <?= User::getUserById($blog['user_id'])['name'] ?>
            </p>
            <p>
                <?= Category::getCategoryById($blog['category_id'])['category'] ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>