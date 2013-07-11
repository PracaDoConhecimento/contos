<?php include_once('header.php'); ?>

        <div class="container">

            <div id="abertura">
                <div class="abas_inativas">
                    <a href="#" class="infantil"><img src="img/aba-infantil-invertido.png" /></a>
                    <a href="#" class="mulher"><img src="img/aba-mulher-invertido.png" /></a>
                    <a href="#" class="trabalho"><img src="img/aba-trabalho-invertido.png" /></a>
                    <a href="#" class="sobre"><img src="img/aba-sobre-invertido.png" /></a>
                </div>
                <div class="livros">        

                    <div id="mensagem"> Clique nas abas para navegar </div>

                    <div class="capa ativo">
                        <img src="img/livro-semabas.jpg" />
                    </div><!-- /capa -->

                    <div id="capitulo"></div><!-- /capitulo -->

                </div>
                <div class="abas_ativas">
                    <a href="#infantil" class="infantil"><img src="img/aba-infantil.png" /></a>
                    <a href="#mulher" class="mulher"><img src="img/aba-mulher.png" /></a>
                    <a href="#trabalho" class="trabalho"><img src="img/aba-trabalho.png" /></a>
                    <a href="#sobre" class="sobre"><img src="img/aba-sobre.png" /></a>
                </div>
            </div><!-- /abertura -->


            <div class="clearfix"></div>

        </div> <!-- /container -->


        <footer style="box-shadow: 10px 0px 20px #000;">
            <div class="container">
                <!-- logo praça do conhecimento -->
                <div class="assinatura">
                    <img src="img/rodape-assinatura.png" />
                </div>

                <!-- redes sociais? -->
                <div class="pull-right">
                    <div class="redes_sociais" style="text-align:right; margin: 9px 0;">
                        <span class='st_facebook' displayText='Facebook'></span>
                        <span class='st_googleplus' displayText='Google +'></span>
                        <span class='st_twitter' displayText='Tweet'></span>
                        <span class='st_sharethis' displayText='ShareThis'></span>
                        <span class='st_email' displayText='Email'></span>
                    </div>

                    <div style="color:#000; text-align:right;">
                        <small>O código desta site está disponível no <a href="https://github.com/felipefernandes/contos" target="_blank" style="color:#000;"><b>GitHub</b></a>.</small>
                    </div>
                </div>


            </div>
        </footer>    

<?php include_once('footer.php'); ?>
