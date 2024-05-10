<?php require'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">

                <?php if(isset($_SESSION['success'])):?>
                <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php endif; unset($_SESSION['success'])?>

                <div class="card-header">
                    <h3>Add Banner</h3>
                </div>
            <div class="card-body">
                <form action="banner_post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group my-3">
                        <label for="" class="form-label">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id="">
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="">
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="desp" class="form-control" id="">
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Banner Image</label>
                        <input type="file" name="banner_image" class="form-control" id="">
                        
                        <?php if(isset($_SESSION['invalid_extension'])):?>
                            <div class="alert alert-danger"><?=$_SESSION['invalid_extension']?></div>
                        <?php endif; unset($_SESSION['invalid_extension'])?>
                        
                        <?php if(isset($_SESSION['size'])):?>
                            <div class="alert alert-danger"><?=$_SESSION['size']?></div>
                        <?php endif; unset($_SESSION['size'])?>
                    </div>
                    <div class="form-group my-5">
                        <button type="submit" class="btn btn-primary">Add Banner</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<?php require'footer.php'; ?>