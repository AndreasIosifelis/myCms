<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="<?= base_url("public/css/foundation.css") ?>" />
        <link rel="stylesheet" href="<?= base_url("public/css/custom.css") ?>" />
        <script src="<?= base_url("public/js/vendor/modernizr.js") ?>"></script>
        <script src="<?= base_url("public/js/vendor/jquery.js") ?>"></script>
        <script src="<?= base_url("public/js/foundation.min.js") ?>"></script>
    </head>
    <body>
        <?php
        $this->load->view("widgets/mainMenu");
        $this->load->view("widgets/headerSlider");
        $this->load->view("widgets/categoriesMenu");
        ?>









        
        <script>
            $(document).foundation({
                orbit: {
                    animation: "fade",
                    bullets: false,
                    navigation_arrows: false,
                    pause_on_hover: false,
                    slide_number: false
                },
                top_bar:{
                    custom_back_text: true,
                    back_text: "Πίσω"
                }
                
            });
        </script>
    </body>
</html>


