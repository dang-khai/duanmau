<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<body class="d-flex flex-row">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-dark vh-100" style="width: 250px; background-color: #FCB000;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">PETPOLY</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-dark" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg>
                    Orders
                </a>
            </li>
            <li>
                <a href="product" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg>
                    Products
                </a>
            </li>
            <li>
                <a href="customer" class="nav-link active">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#people-circle" />
                    </svg>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="http://localhost/duanmau/">Sign out</a></li>
            </ul>
        </div>
    </div>
    <section class="container-fluid">
        <h1 class="text-center ">Danh sách người dùng</h1>
        <div id="container" class=""></div>
        <table class="table table-bordered text-center position-absolute top-50 start-50 translate-middle ms-5"
            id="table" style="width: 70%">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Quyền hạn</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($data)){
                  ?>
                <tr>
                    <th scope="row"><?php echo $row['name']?></th>
                    <td style="width: 15%"><?php echo $row['username']?></td>
                    <td class="w-25"> <?php echo $row['email']?> </td>
                    <td><?php echo $row['password']?></td>
                    <td><?php echo $row['type']?></td>
                    <td>
                        <a href="changeType/<?php echo $row['id'] ?>">
                            <button class="btn btn-primary"
                                onclick="return confirm('Are you sure you want to change this item?')">
                                Cấp quyền Admin
                            </button>
                        </a>
                        <a> <button class="btn btn-primary">Sửa</button></a>
                        <a href="deleteUserHandle/<?php echo $row['id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this item?')"> <button
                                class="btn btn-danger">Xóa</button> </a>
                    </td>
                </tr>

                <?php };?>
            </tbody>
        </table>
        </div>
    </section>
</body>

</html>