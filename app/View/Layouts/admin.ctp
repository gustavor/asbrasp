<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Asbrasp</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald">
    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');

    echo $this->Html->css('estilo_asbrasp');
    echo $this->Html->css('slider');
    echo $this->Html->css('superfish');
    echo $this->Html->css('paginate');
    echo $this->Html->css('estilo_admin');

    echo $this->Html->script('jquery');
    echo $this->Html->script('superfish');
    echo $this->Html->script('jquery.pajinate');
    echo $this->Html->script('jquery.flexslider-min');
    ?>
    <!-- inicio menu drop down-->

    <script>

        (function($){ //create closure so we can safely use $ as alias for jQuery

            $(document).ready(function(){

                // initialise plugin
                var example = $('#example').superfish({
                    //add options here if required
                });

            });

        })(jQuery);


    </script>

    <!--fim menu drop down-->

    <!--inicio slider-->
    <script>
        var $ = jQuery.noConflict();
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "fade"
            });

            $(function() {
                $('.show_menu').click(function(){
                    $('.menu').fadeIn();
                    $('.show_menu').fadeOut();
                    $('.hide_menu').fadeIn();
                });
                $('.hide_menu').click(function(){
                    $('.menu').fadeOut();
                    $('.show_menu').fadeIn();
                    $('.hide_menu').fadeOut();
                });
            });
        });
    </script>

    <!--fim slider-->

    <!--popup-->
    <script type="text/javascript">

        $(document).ready(function(){

            $("#pop").click(function(){
                $("#overlay_form").fadeIn(250);
                positionPopup();
            });


            $("#close").click(function(){
                $("#overlay_form").fadeOut(250);
            });
        });


        function positionPopup(){
            if(!$("#overlay_form").is(':visible')){
                return;
            }
            $("#overlay_form").css({
                left: ($(window).width() - $('#overlay_form').width()) / 1.4,
                top: ($(window).width() - $('#overlay_form').width()) /1.9,
                position:'absolute'
            });
        }


        $(window).bind('resize',positionPopup);

        <!--fim pop-->

    </script>
</head>

<body>
<!--inicio geral-->
<div class="geral">

    <!--inicio cabecalho-->
    <div class="cabecalho">
        <div class="marca"> <a href="index.html"><?php echo $this->Html->image('logo_asbrasp.jpg'); ?></a> </div>

        <!--inicio menu principal-->
        <div class="menu_principal">
            <ul class="sf-menu" id="example">
                <li class="current"><a href="index.html">HOME</a>
                <li><a href="quem_somos.html">QUEM SOMOS</a>
                <li><a href="informativo.html">INFORMATIVO</a>
                <li><a href="#">CADASTRE-SE</a>
                    <ul>
                        <li> <a href="atualize_seu_cadastro.html">ATUALIZE SEU CADASTRO</a> </li>
                        <li> <a href="trabalhe_conosco.html">TRABALHE CONOSCO</a> </li>
                    </ul>
                <li><a href="ajude_enditade.html">AJUDE UMA ENTIDADE</a>
                <li><a href="fale_conosco.html"><font class="Oswald">FALE CONOSCO</font></a>
            </ul>

            <!--fim menu principal-->
        </div>

        <!--fim cabecalho-->
    </div>
    <div class="clear"></div>

    <!--inicio banner-->


    <div class="clear"></div>

    <!--inicio conteudo-->
    <div class="conteudo">
        <div class="row">
            <div class="left_menu">
                <?php echo $this->element('admin_menu'); ?>
            </div>
            <div class="right_content">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
    <!--fim conteudo-->

    <div class="clear"></div>

    <!--inicio rodape-->
    <div class="rodape">

        <!--iniio newsletter-->
        <div class="newsletter">
            <h3>CADASTRE NOSSA NEWSLATTER</h3>
            <form name="fmr-newsletter" onsubmit="" method="post" action="#" id="newsletter">
                <input style="width:200px; height:22px" type="text" class="textfield_news" name="nome" id="nome" size="20" value="Digite seu nome" onblur="if (this.value == '') {this.value = 'Digite seu nome';}" onfocus="if (this.value == 'Digite seu nome') {this.value = '';}">
                <input style="margin-left:7px;width:200px; height:22px"" type="text" class="textfield_news" name="email" id="email" size="20" value="Digite seu e-mail" onblur="if (this.value == '') {this.value = 'Digite seu e-mail';}" onfocus="if (this.value == 'Digite seu e-mail') {this.value = '';}">
                <input class="button_news" style="width:44px; height:30px; margin-left:7px; margin-top:0px;" name="enviar" type="button" value="OK" />
            </form>
        </div>
        <div class="redes_endereco">
            <ul>
                <li>
                    <spam>SIGA:</spam>
                </li>
                <li><a href="#"><?php echo $this->Html->image('face.png'); ?></a></li>
                <li><a href="#"><?php echo $this->Html->image('inst.png'); ?></a></li>
                <li><a href="#"><?php echo $this->Html->image('twitter.png'); ?></a></li>
            </ul>
            <p> Endere&ccedil;o endereço endereço endereço endereço endereço endereço endereço endereço</p>
        </div>
    </div>
    <div class="sola"> &copy; Asbrasp 2013 . desenvolvido por Marlon Designer e Geminibr</div>

    <!--fim rodape-->

    <!--fim geral-->
</div>
</body>
</html>