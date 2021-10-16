<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location: ./login.php");
}

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3308;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

$result = mysqli_query($conn,"SELECT * FROM `blogs`");

while($row = mysqli_fetch_assoc($result))
{
    $data []= $row;
}

?>

<?php include './components/header.php' ?>
        <div class="col2">
            <div class="controller">
                <h1>Blogs</h1>
                <a href="./blogs/create.php" class="btn">Create</a>
            </div>
            <table id="blogs">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created_at</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>User</th>
                </tr>
                <?php foreach($data as $value): ?>
                <tr>
                    <td>
                        <?= $value['id']?>
                    </td>
                    <td>
                        <?= $value['title']?>
                    </td>
                    <td>
                        <?= $value['created_at']?>
                    </td>
                    <td>
                        <?= $value['description']?>
                    </td>
                    <td>
                       <img class="blog-image" src="../images/<?= $value['image']?>" alt="">
                    </td>
                    <td>
                        <?= $value['user']?>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php include './components/footer.php' ?>