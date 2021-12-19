<?php include  __DIR__ . "/../components/header.php"; ?>

<h1>
    <?php
    include '../../Helper.php';
    use OOP\HelperNS\Helper;
    Helper::autoLoader();
    use OOP\Modules\Category;
    Category::getWithChild();
    ?>
</h1>

<?php include  __DIR__ . "/../components/footer.php"; ?>
