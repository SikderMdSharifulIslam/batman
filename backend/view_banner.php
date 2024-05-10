<?php require'header.php'; 

require '../db.php';

$banners = "SELECT * FROM banners";
$banners_result = mysqli_query($db_connect, $banners);




?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Banner List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($banners_result as $key=>$banner){ ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$banner['sub_title']?></td>
                                <td><?=$banner['title']?></td>
                                <td><?=$banner['desp']?></td>
                                <td><img width="50" src="../uploads/banner/<?=$banner['banner_image']?>" alt=""></td>
                                <td>
                                    <a href="banner_status.php?id=<?=$banner['id']?>" class="btn <?=($banner['status']==1?'btn-success':'btn-secondary')?>">
                                        <?=($banner['status']==1?'active':'deactive')?>
                                    </a>
                                </td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require'footer.php'; ?>

