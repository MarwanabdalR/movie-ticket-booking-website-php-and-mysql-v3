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
            <div class="header-area">
                <div class="logo">
                    <a href="<?= URL; ?>"><img src="<?= IMG; ?>logo.png" alt="logo" /></a>
                </div>
                <div class="header-right">
                    <ul> <?php if (isset($_SESSION["user"])) { ?> 
                        <li>
                            <a href="javascript:void(0);">Welcome!</a>
                        </li>
                        <li>
                            <a href="<?= URL; ?>user/logout">Logout</a>
                        </li> <?php } else { ?> 
                        <li>
                            <a href="javascript:void(0);">Welcome Guest!</a>
                        </li>
                        <li>
                            <a class="" href="#" data-lang='login'>Login</a>
                        </li> <?php } ?>
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
                                    <li><a class="<?= stripos($_SERVER['QUERY_STRING'], '#') ? 'active' : ''; ?>"
                                    href="<?= URL ; ?>">Booking</a></li>
                                    <li><a class="<?= stripos($_SERVER['QUERY_STRING'], '#') ? 'active' : ''; ?>"
                                    href="<?= URL ; ?>">Preorder</a></li>
                                
                                    <li><a class="<?= stripos($_SERVER['QUERY_STRING'], '#') ? 'active' : ''; ?>"
                                    href="<?= URL ; ?>">Feedback</a></li>
                                
                                    
                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    