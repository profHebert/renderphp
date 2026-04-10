<?php
if(count($_POST)>0){
    echo "<h1>Render com PHP</h1>";
    print_r($_POST);

}
?>
<form method="post" action="">

   Nome <input type="text" name="nome">
   <button>Enviar</button> 
</form>
