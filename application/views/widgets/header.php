<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$page->title?></title>
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/structure.css') ?>' />
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/main-menu.css') ?>' />
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/jquery.bxslider.css') ?>' />
        <script src="<?= base_url("public/js/jquery-2.1.0.min.js")?>"></script>
        <script type='text/javascript' src='<?= base_url('public/js/jquery.bxslider.min.js') ?>'></script>
        <script type='text/javascript' src='<?= base_url('public/js/cms.js') ?>'></script>
        <script type='text/javascript' src='<?= base_url('public/js/app.js') ?>'></script>
        
    </head>
    <body>

        <div class="wrapper">

            <nav class="cssmenu" id="top-menu">
                <ul>
                    <li><?= anchor("page/1", "Home")?></li>
                    <!-- Loop for dynamic pages -->
  
                    <li class='last'><?=anchor("page/2", "Contact")?></li>
                </ul>

            </nav>

            
            <header class="top-header">
                <ul class="bxslider">
                    <li><?= img("http://www.webacademy.com.ng/images/web-development-banner.png")?></li>
                    <li><?= img("http://silverdalelutheran.org/wp-content/uploads/2013/11/Cross-and-Sky-Website-Banner-960x250.jpg")?></li>
                    <li><?= img("http://desertsprings.com/assets/website-banner-960x250.jpg")?></li>
                    <li><?= img("http://www.lwcbranson.org/wp-content/uploads/2013/07/Word-of-God-Website-Banner-960x250.jpg")?></li>
                    <li><?= img("http://demo3.bestdnnskins.com/portals/33/L3Banner03.jpg")?></li>
                </ul>
                
                
            </header>
            

            <nav class="cssmenu" id="products-menu">
                <ul>
                    <li class='active'><a href='index.html'><span>Home</span></a></li>
                    <li class='has-sub'><a href='#'><span>Products</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>Product 1</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Item</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Product 2</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Item</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href='#'><span>About</span></a></li>
                    <li class='last'><a href='#'><span>Contact</span></a></li>
                </ul>
            </nav>        
        <section class="page-content">