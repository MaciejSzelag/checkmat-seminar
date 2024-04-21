<?php $folderPath = "../../";
$tabTitle = "Login";include $folderPath . "includes/head.php";?>
<?php include $folderPath . "includes/intro.php";?>
    <!-- navigation  -->
    <?php $link_path = $folderPath;include $link_path . "includes/navigation.php";?>
    <!-- navigation  -->
    <!-- login  -->
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Login</h1>
            </div>

            <div class="login-form">
                <div class="control-group">
                    <h1 class="control-group-h1">Login</h1>
                    <form method="post">
                        <input type="text" name="u" placeholder="Username" required="required" />
                        <input type="password" name="p" placeholder="Password" required="required" />
                        <input type="submit" class="btn " value="Log in">

                    </form>
                    <a href="">Forgot password?</a>
                </div>
            </div>
        </div>

    </div>
    <!-- login -->
    <!-- footer  -->
    <?php include "../../includes/footer.php";?>
    <!-- footer  -->
