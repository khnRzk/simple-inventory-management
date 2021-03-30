<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <?php include_once('./templates/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width:100%; height:100%;margin-top:10px">
                    <img src="./images/user.png" class="card-img-top mx-auto" alt="..." style="width:60%">
                    <div class="card-body">
                        <h5 class="card-title">PROFILE INFO</h5>
                        <p class="card-text">Rifkan Razak</p>
                        <p class="card-text">Admin</p>
                        <p class="card-text">Last login : xxx xxx</p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
            <div class="card bg-light" style="width: 100%;height:100%;margin-top:10px">
                <div class="card-body">
                    <h1 class="card-title">Welcome Admin,</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="https://free.timeanddate.com/clock/i7qhmt7p/n1925/szw160/szh160/hoc000/hbw2/hfceee/cf100/hncccc/fdi76/mqc000/mql10/mqw4/mqd98/mhc000/mhl10/mhw4/mhd98/mmc000/mml10/mmw1/mmd98" frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6">
                            <div class="card" >
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">Place new orders or Create Invoices</p>
                                    <a href="#" class="btn btn-primary">New order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card " style="margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">Here you can Add or Manage Categories</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_category">Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">Brands</h5>
                        <p class="card-text">Here you can Add or Manage Brands</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#brand" >Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Add or Manage Products here</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#products">Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
        </div>                            
    </div>

    <?php 
        include_once('./templates/category.php');
        include_once('./templates/brand.php');
        include_once('./templates/products.php');
    ?>
</body>
</html>