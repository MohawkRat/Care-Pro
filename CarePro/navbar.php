<?php
    include_once('sql.php');
    $sql = new sql();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <nav class="navbar navbar-expand-lg" style='background-color: #142714; margin-bottom:15px;'>
        <div class="container-fluid" style="color: #bfba83;">
            <a class="navbar-brand" href="index.php" style="width:5%"><img src="./Images/logo2.jpg"  width="100%"></img></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <p class="nav-link" aria-current="page" href="">
                        <?php
                        
                        
                         if (isset($_COOKIE['sessionid'])) {
                            $user = $sql->getCookie($_COOKIE['sessionid']);
                            if ($user['Staff']) {
                                echo '<p class="navbar-text" style="color: #bfba83">Staff: ' . $user['Username'] . '</p>';
                            } else {
                                echo '<p class="navbar-text" style="color: #bfba83">User: ' . $user['Username'] . '</p>';
                            }
                        }
                         ?>
                </p>
                    

                    <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #bfba83;">
            Info
          </button>
          <ul class="dropdown-menu" style="background-color: #5c7325; color:#5c7325">
            <li><a class="dropdown-item" href="AboutUs.php" style="color: #bfba83">About Us</a></li>
            <li><a class="dropdown-item" href="FindUs.php" style="color: #bfba83">Find Us</a></li>
            <li><a class="dropdown-item" href="ContactUs.php" style="color: #bfba83">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Termsandconditions.php" style="color: #bfba83">Terms and Conditions</a></li>
            <li><a class="dropdown-item" href="PrivacyPolicy.php" style="color: #bfba83">Privacy Policy</a></li>
          </ul>
        </li>
                </ul>
                
                
                <div class="d-flex ms-auto me-3">
                    <?php
                        if (isset($_COOKIE['sessionid'])) {
                            $cookieSet = $sql->getCookie($_COOKIE['sessionid']);

                            if ($cookieSet) {
                                echo '<a class="navbar-text" href="logout.php" style="color: #bfba83">logout</a>';
                            } else {
                                echo '<a id="login" class="navbar-text" href="login.php" style="color: #bfba83">login</a>';
                            }
                        } else {
                            echo '<a id="login" class="navbar-text" href="login.php" style="color: #bfba83">login</a>';
                        }
                        ?>
                    </li>
                    
                </div>
            </div>
        </div>
    </nav>
</body>
</html>


            