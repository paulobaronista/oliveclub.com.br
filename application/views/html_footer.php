<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
echo script_tag('assets/js/slick.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/wow.min.js');
?>

<script>
    $(document).on('ready', function() {
        new WOW().init();
    });
</script>

<div class="float-box">
    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=+5511956289001" target="_blank" class="whats">Whatsapp</a>
    <a href="https://www.azeitebatalha.com.br/#fale-conosco" class="mail">Enviar mensagem</a>
</div>

</body>

</html>