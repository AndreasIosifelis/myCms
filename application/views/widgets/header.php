<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=empty($page->title) ? $page["title"] : $page->title?></title>
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/structure.css') ?>' />
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/main-menu.css') ?>' />
        <link rel='stylesheet' type='text/css' href='<?= base_url('public/css/jquery.bxslider.css') ?>' />
        <script src="<?= base_url("public/js/jquery-2.1.0.min.js")?>"></script>
        <script type='text/javascript' src='<?= base_url('public/js/jquery.bxslider.min.js') ?>'></script>
        <script type='text/javascript' src='<?= base_url('public/js/tinymce/tinymce.min.js') ?>'></script>
        <script type='text/javascript' src='<?= base_url('public/js/cms.js') ?>'></script>
        <script type='text/javascript' src='<?= base_url('public/js/app.js') ?>'></script>        
    </head>
    <body>
        <div class="wrapper">

            <?php
                $this->load->view("widgets/mainMenu");
                $this->load->view("widgets/headerSlider");
                $this->load->view("widgets/categoriesMenu");                
            ?>    
        <section>