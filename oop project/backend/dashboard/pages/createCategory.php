<?php include  __DIR__ . "/../components/header.php"; ?>

<div class="table-page">
    <h1>Create Category</h1>
    <form action="../../controllers/categories/create.php" method="POST">
        <div class="control">
            <input type="text" name="category" placeholder="Category name">
        </div>
        <div class="control">
            <button type="submit" class="btn success">
                Create
            </button>
        </div>
    </form>
</div>
<?php include  __DIR__ . "/../components/footer.php"; ?>