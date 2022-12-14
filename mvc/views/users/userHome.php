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
                    <a class="nav-link active" aria-current="page" href="login">Hi, <?php echo $data['name'] ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Log out</a>
                </li>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </ul>
        </div>
    </nav>
    <div class="">
        <video class="video-bg fill visible w-100" style="height: 500px" preload="" playsinline="" autoplay="" muted=""
            loop="">
            <source src="/test-mvc/public/dogilybanner002.mp4" type="video/mp4">
        </video>
    </div>
    <section class="py-5">
        <h2 class="text-center mt-5">GI???NG CH?? C???NH</h2>
        <div id="text-1222354666" class="text dfc-w pc-70 mb-90">
            <p style="text-align: center; font-size: 18px;"><span style="color: #0000ff;">Nh???p kh???u nh??n gi???ng b???i h???
                    th???ng Trang
                    tr???i Dogily Kennel th??nh vi??n Hi???p h???i nh???ng ng?????i nu??i ch?? gi???ng t???i <br> Vi???t Nam (VKA)</span></p>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php 
                    while ($row = mysqli_fetch_assoc($data[0])) {
                    ?>
                            <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="/test-mvc/public/picture/<?php echo $row['product_img'] ?>" alt="...">
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
</body>

</html>