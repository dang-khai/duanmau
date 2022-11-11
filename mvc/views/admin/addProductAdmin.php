<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Thêm sản phẩm</h1>
<form class="w-50 mx-auto" method="POST" action="addProductHandle">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" value=""  name="product_name">
            </div>
            <div class="mb-3">
            <label for="cate">Loại</label>
            <select class="form-select" id="cata" name="loai">
                <option value="">Loại</option>
                <?php 
                while($row = mysqli_fetch_assoc($data)){
                ?>
                    <option  value="<?php echo $row['id'] ." ". $row['name_catagory'];?>"> <?php echo $row['id']. '. ' . $row['name_catagory']; ?> </option>
                <?php }?>
            </select>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="img"  name="img">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Đơn giá</label>
                <input type="text" class="form-control" id="price" value="" name="price">
            </div>
            <div class="mb-3">
                <label for="mota">Mô tả</label>
                <textarea name="mota" id="" style="height: 100px; width: 100%;"></textarea>
            </div>
</div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>
</body>
</html>
