<?php 
include  __DIR__ . "/../components/header.php"; 
include '../../Helper.php';
use OOP\HelperNS\Helper;
Helper::autoLoader();
use OOP\Modules\Category;

$categories = Category::getAll();
?>

<div class="table-page">
    <h1>Create Category</h1>
    <form action="../../controllers/categories/create.php" method="POST">
        <div class="control">
            <input type="text" name="category" placeholder="Category name">
        </div>
        <div class="control">
            <label>Parent Category</label>
            <select name="parent">
                <?foreach($categories as $category): ?>
                    <option value="<?= $category['id'] ?>">
                        <?= $category['category'] ?>
                    </option>
                <? endforeach; ?>
            </select>
        </div>
        <div class="control">
            <button type="submit" class="btn success">
                Create
            </button>
        </div>
    </form>
</div>
<?php include  __DIR__ . "/../components/footer.php"; ?>