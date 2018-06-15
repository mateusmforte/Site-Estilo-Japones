<?php

session_start();

#função para enviar o alerta baseado no session
function mostraAlerta($tipo){
    if (isset($_SESSION[$tipo])){ ?>
        <p class="alert-<?=$tipo ?>"><?=$_SESSION[$tipo]?></p>
<?php 
        unset($_SESSION[$tipo]);       
    }

}

?>