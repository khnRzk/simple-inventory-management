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
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <div class="card mx-auto" style="margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form id="register_form" autocomplete="off" onsubmit="return false">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="username" aria-describedby="fullname">  
                            <div id="u_error" class="form-text"></div>                
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="useremail" name="email" autocomplete="off">
                            <div id="e_error" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="usertype" class="form-label">Usertype</label>
                            <select name="usertype" class="form-control" id="usertype">
                                <option value="">Choose user type</option>
                                <option value="1">Admin</option>
                                <option value="1">Other</option>
                            </select>
                            <div id="ut_error" class="form-text"></div>
                         </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" autocomplete="off">
                            <div id="p_error" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="c_password" class="form-label">Re-enter Password</label>
                            <input type="password" class="form-control" id="c_password">
                            <div id="cp_error" class="form-text"></div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="user_register">Register</button>
                        <span><a href="./index.php">Login</a></span>
                    </form> 
                </div>
            </div>
            </div>
            <div class="col-sm-3"></div>
        </div>   
    </div>
</body>
</html>