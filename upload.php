<?php include 'header.php' ?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Shoe Name</label>
                <input type="text" name="shoename" class="form-control" id="shoename">
            </div>

            <div class="form-group">
                <label for="brand">Shoe Brand</label>
                <input type="text" name="shoetype" class="form-control" id="shoetype">
            </div>

            <div class="form-group">
                <label for="price">Shoe Price</label>
                <input type="text" name="shoesize" class="form-control" id="shoesize">
            </div>
            Select Image File to Upload: <br><br>
            <input type="file" name="file"> <br> <br>
            <input type="submit" name="submit" value="Upload"><br><br>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

<?php include 'footer.php' ?>