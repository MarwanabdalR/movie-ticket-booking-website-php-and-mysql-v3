<!DOCTYPE HTML>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moviepoint</title>
    <!-- Favicon Icon -->
    <link rel="stylesheet" href="<?= CSS; ?>font-awesome.css" />
    <link rel="stylesheet" href="<?= CSS; ?>sweetalert.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>bootstrap.min.css" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>slicknav.min.css" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>icofont.css" media="all" />
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>owl.carousel.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>magnific-popup.css">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>style.css?v=<?= time(); ?>" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>responsive.css" media="all" />
    
</head>

<body>


    <!-- Page loader -->
    <div id="preloader"></div>
    <!-- header section start -->
    <header class="header">
                <?php if (isset($_SESSION["login_success"])): ?>
                    <div class="offset-md-4 col-md-4 alert alert-success">
                        <?= $_SESSION["login_success"]; ?>
                    </div>
                <?php unset($_SESSION["login_success"]); endif; ?>
            <div class="header-area">
                <div class="logo">
                    <a href="<?= URL; ?>"><img src="<?= IMG; ?>logo.png" alt="logo" /></a>
                </div>
                <div class="header-right">
                        <ul>

                        <?php
                        $dbhost="localhost";
                        $dbuser="root";
                        $dbpass="";
                        $dbname="book_cinema";
                        $connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                        $select = "SELECT * FROM `users`";
                        $run = mysqli_query($connect,$select);
                        ?>
                            <?php if (isset($_SESSION["user"])) { 
                                    if ($row=mysqli_fetch_assoc($run)) {
                                ?>
                                <li><a href="javascript:void(0);">Welcome  <?php echo ' ' . $row['name']; ?>  !</a></li>
                                <li><a href="<?= URL; ?>user/logout">Logout</a></li>
                            <?php }
                                } else { ?>
                                <li><a href="javascript:void(0);">Welcome Guest</a></li>
                                <li><a class="login-popup" href="#">Login</a></li>
                            <?php } ?>
                        </ul>
                </div>

                <div class="menu-area">
                    <div class="responsive-menu"></div>
                    <div class="mainmenu">
                        <ul id="primary-menu">
                            <li><a class="<?= empty($_SERVER['QUERY_STRING']) ? 'active' : ''; ?>"
                                    href="<?= URL; ?>">Home</a></li>
                            <li><a class="<?= stripos($_SERVER['QUERY_STRING'], 'movie/all') || stripos($_SERVER['QUERY_STRING'], 'movie/detail') ? 'active' : ''; ?>"
                                    href="<?= URL; ?>movie/all">Movies</a></li>
                            <li><a class="<?= stripos($_SERVER['QUERY_STRING'], 'celebrity') ? 'active' : ''; ?>"
                                    href="<?= URL . 'celebrity'; ?>">CelebritiesList</a></li>
                                    <?php if (isset($_SESSION["user"])) { ?>
                            <li><a class="<?= stripos($_SERVER['QUERY_STRING'], 'bookk') ? 'active' : ''; ?>"
                                    href="<?= URL . 'bookk'; ?>"> Booking</a></li>
                                    <?php                                       } ?>
                        </ul>
                    </div>
                    <?php
                //MMMMMMMMMM
    if (isset($_GET['text'])){
        ob_get_clean();
        $searchText = $_GET['text'];
        $con = mysqli_connect('localhost', 'root', '', 'book_cinema');
        $sql = " SELECT *, movie_thumbnails.file_path as movie_thumbnails, trailers.file_path as trailers FROM `movies` JOIN movie_thumbnails ON movie_thumbnails.movie_id = movies.id JOIN trailers ON trailers.movie_id = movies.id WHERE movies.name LIKE'%$searchText%'";
        $results = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
        header('Content-type: application/json');
        echo json_encode($rows);
        die();
    }
?>

                    <div class="row" style="position: absolute;right: 70%;bottom: 2%;">
                        <div class="col-lg-12" >
                            <input type="search" class="form-control rounded" placeholder="Search" id='search' aria-label="Search" aria-describedby="search-addon"/>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </header>
    
    <div class="login-area">
            <div class="login-box">
                <a href="#"><i class="icofont icofont-close"></i></a>
                <h2>LOGIN</h2>
                <form action="<?= URL . 'user/login' ?>" method="POST">


                    <h6>EMAIL ADDRESS</h6>
                    <input type="email" name="email" required="" />
                    <h6>PASSWORD</h6>
                    <input type="password" name="password" required="" />
                    <div class="login-signup">
                        <span>SIGNUP</span>
                    </div>

                    <input type="submit" class="theme-btn" value="LOG IN" style="background: #eb315a;">
                </form>
                
            </div>
        </div>

        <div class="signup-area">
            <div class="login-box">
                <a href="#"><i class="icofont icofont-close"></i></a>
                <h2>SIGN UP</h2>
                <form action="<?= URL . 'user/register' ?>" method="POST">

                    <h6>Name</h6>
                    <input type="text" name="name" required="" />

                    <h6>Mobile number</h6>
                    <input type="number" name="mobile_number" required="" />

                    <h6>EMAIL ADDRESS</h6>
                    <input type="email" name="email" required="" />

                    <h6>PASSWORD</h6>
                    <input type="password" name="password" required="" />
                    
                    <div class="login-popup login-popup-btn">
                        <span>LOGIN</span>
                    </div>
                    <input type="submit" class="theme-btn" value="SIGN UP" style="background: #eb315a;">
                </form>
                
            </div>
        </div>

        <input id="BASE_URL" style="display: none;" type="hidden" value="<?= URL; ?>">