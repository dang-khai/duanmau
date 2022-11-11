<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FCB000;">
        <div class="container-fluid w-75 d-flex justify-content-around">
            <a class="navbar-brand" href="#">PETPOLY</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Cat</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="register">Sign in</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <video class="video-bg fill visible w-100" style="height: 500px" preload="" playsinline="" autoplay="" muted=""
            loop="">
            <source src="/duanmau/public/dogilybanner002.mp4" type="video/mp4">
        </video>
    </div>
    <section class="py-5">
        <h2 class="text-center mt-5">GIỐNG CHÓ CẢNH</h2>
        <div id="text-1222354666" class="text dfc-w pc-70 mb-90">
            <p style="text-align: center; font-size: 18px;"><span style="color: #0000ff;">Nhập khẩu nhân giống bởi hệ
                    thống Trang
                    trại Dogily Kennel thành viên Hiệp hội những người nuôi chó giống tại <br> Việt Nam (VKA)</span></p>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php 
                    while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                            <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="/duanmau/public/picture/<?php echo $row['product_img'] ?>" alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder"> <?php echo $row['product_name'] ?> </h5>
                                        <?php echo $row['product_price'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">ADD TO CART</a></div>
                                </div>
                            </div>
                        </div>
        <?php 
                    }
        ?>
        </div>
        </div>
    </section>
    </div>
</body>

</html>