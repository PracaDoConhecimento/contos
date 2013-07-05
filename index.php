<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta property="og:title" content="Contos"/>
        <meta property="og:url" content="http://contos.pracadoconhecimento.com.br"/>
        <meta property="og:image" content="http://contos.pracadoconhecimento.com.br/img/screenshot.png"/>        

        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">        
        <link rel="stylesheet" href="js/tooltip/style.css">  
        <link rel="stylesheet" href="js/audioplayer/css/audioplayer.css">  
             
        <link rel="stylesheet/less" type="text/css" href="less/main.less" />
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- SHARE THIS -->
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "64148ad7-f8a6-43e0-a6b1-e4e3099d002e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <!-- END -->

        <style>
            body {
                margin-bottom: 80px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="container">

            <div id="abertura">
                <div class="abas_inativas">
                    <a href="#" class="infantil"><img src="img/aba-infantil-invertido.png" /></a>
                    <a href="#" class="mulher"><img src="img/aba-mulher-invertido.png" /></a>
                    <a href="#" class="trabalho"><img src="img/aba-trabalho-invertido.png" /></a>
                    <a href="#" class="sobre"><img src="img/aba-sobre-invertido.png" /></a>
                </div>
                <div class="livros">                    
                    <div class="capa ativo">
                        <img src="img/livro-semabas.jpg" />
                    </div><!-- /capa -->

                    <?php include('part-infantil.php'); ?>

                    <?php include('part-mulher.php'); ?>

                    <?php include('part-trabalho.php'); ?>

                    <?php include('part-sobre.php'); ?>

                </div>
                <div class="abas_ativas">
                    <a href="#" class="infantil"><img src="img/aba-infantil.png" /></a>
                    <a href="#" class="mulher"><img src="img/aba-mulher.png" /></a>
                    <a href="#" class="trabalho"><img src="img/aba-trabalho.png" /></a>
                    <a href="#" class="sobre"><img src="img/aba-sobre.png" /></a>
                </div>
            </div>

        </div> <!-- /container -->


        <footer>
            <div class="container">
                <!-- logo praça do conhecimento -->
                <div class="assinatura">
                    <img src="img/rodape-assinatura.png" />
                </div>

                <!-- redes sociais? -->
                <div class="redes_sociais">
                    <h5>Curtiu? Então Compartilhe!</h5>
                    <span class='st_facebook_large' displayText='Facebook'></span>
                    <span class='st_googleplus_large' displayText='Google +'></span>
                    <span class='st_twitter_large' displayText='Tweet'></span>
                    <span class='st_sharethis_large' displayText='ShareThis'></span>
                    <span class='st_email_large' displayText='Email'></span>
                </div>
            </div>
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/tooltip/tooltip.js"></script>        
        <script type="text/javascript" src="js/audioplayer/audioplayer.js"></script>        
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/less.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
