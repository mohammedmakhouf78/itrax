<?php
include '../../Helper.php';
use OOP\HelperNS\Helper;
use OOP\Modules\Category;

Helper::autoLoader();

include __DIR__ . "/../components/header.php"; 
session_start();
$categories = Category::getAll();
?>

<div class="table-page">
    <h1>Categories Table</h1>
    <?php if(!empty($_SESSION['msg'])): ?>
        <p class="<?= $_SESSION['msg']['flag']? 'success': 'error' ?>"> 
            <?= $_SESSION['msg']['text'] ?> 
        </p>
    <?php endif; ?>
    <?php
        $_SESSION['msg'] = [];
    ?>
    <div class="header">
        <input type="text" placeholder="Search...">
        <a href="./createCategory.php" class="btn success">Create</a>
    </div>
    <div class="table">
        <div class="th">
            <p>Id</p>
            <p>category</p>
            <p>Update</p>
            <p>Delete</p>
        </div>
        <?php foreach($categories as $category): ?>
        <div class="tr">
            <p><?= $category['id'] ?></p>
            <p><?= $category['category'] ?></p>
            <p>
                <button class="btn primary">
                    <a href="./updateCategory.php?id=<?= $category['id'] ?>&category=<?= $category['category'] ?>">Update</a>
                </button>
            </p>
            <p>
                <button class="btn danger">
                    <a href="../../controllers/categories/delete.php?id=<?= $category['id'] ?>">Delete</a>
                </button>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__ . "/../components/footer.php"; ?>