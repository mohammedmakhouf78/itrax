<?php include  __DIR__ . "/../components/header.php"; ?>

<div class="table-page">
    <h1>Update Category</h1>
    <form action="../../controllers/categories/update.php" method="POST">
        <div class="control">
            <input type="text" name="category" placeholder="Category name" value="<?= $_GET['category'] ?>">
        </div>
        <div class="control" style="display: none;">
            <input type="text" name="id" value="<?= $_GET['id'] ?>">
        </div>
        <div class="control">
            <button type="submit" class="btn primary">
                Update
            </button>
        </div>
    </form>
</div>
<?php include  __DIR__ . "/../components/footer.php"; ?>