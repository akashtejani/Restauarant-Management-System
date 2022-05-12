<?php include("session.php");?>
<?php include("header.php");?>
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-primary text-white">Login</div>
                    <div class="card-body">
                        <form action="login_process.php" method="POST" id="loginform">
                            <table class="table borderless">
                                <tr>
                                    <td>
                                    <?php
                                            if(isset($_GET['error'])){
                                            
                                            if($_GET['error']==1){
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                      Invalid username / password
                                                </div>
                                                <?php
                                            }
                                            if($_GET['error']==2){
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                      Login Again
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" id="username" class="form-control"  name="username" placeholder="Enter Username"/></td>
                                </tr>
                                <tr>
                                    <td><input type="password" id="password" class="form-control"  name="password" placeholder="Enter Password"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-primary btn-full" value="Sign In"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>

<?php include("footer.php");?>