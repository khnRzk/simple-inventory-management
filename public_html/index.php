<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <?php include_once('./templates/header.php'); ?>

    <div class="container">
    <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php 
                if(isset($_GET['msg'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_GET['msg'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php
                }
            ?>
        </div>
        <div class="col-sm-2"></div>
        </div>
        <div class="card mx-auto" style="width: 18rem;margin-top: 20px;">
            
            <img src="./images/login.png" class="card-img-top mx-auto" alt="login.png" style="width: 60%;">
            <div class="card-body">
                <h5 class="card-title">USER LOGIN</h5>
                <form id="login_form" onsubmit="return false"  autocomplete="off">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="log_email" name="log_email" aria-describedby="emailHelp">
                        <div id="e_error" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="log_password" id="log_password">
                        <div id="p_error" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="user_login">Login</button>
                    <span><a href="./register.php">Register</a></span>
                </form> 
            </div>
            <div class="card-footer">
                <a href="#">Forgot Paswword?</a>
            </div>
        </div>
    </div>
</body>
</html>