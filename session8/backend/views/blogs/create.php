<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form.css">
    <!-- https://codepen.io/soufiane-khalfaoui-hassani/pen/LYpPWda -->
    <title>Document</title>
</head>
<body>
    <div class="form-con">
        <h1>Create A Blog</h1>
        <form id="form" action="../../controllers/blog/CreateController.php" method="POST" enctype="multipart/form-data">
            <div class="form-controller">
                <input type="text" required name="title">
                <label>Title</label>
            </div>
            <div class="form-controller">
                <input type="text" required name="user">
                <label>User</label>
            </div>
            <div class="form-controller">
                <input type="text" required name="description">
                <label>Description</label>
            </div>
            <div class="form-controller">
                <input type="file" required name="image">
            </div>
            <div class="btns">
            <a id="submit-btn" href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
            <a class="back" href="../index.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Back
            </a>
            </div>
        </form>
    </div>

    <script>
        let btn = document.getElementById('submit-btn')
        btn.addEventListener('click',(e) => {
            e.preventDefault()
            document.getElementById('form').submit()
        })
    </script>
</body>
</html>