<?php
    if (isset($_SESSION['mensagem'])):
?>

<div class="alert" role="alert">
    <?= $_SESSION['mensagem'] ?>
  <button type="button" class="alert-close" aria-label="Fechar mensagem" onclick="this.closest('.alert').remove()">&times;</button>
</div>

<?php 
    unset($_SESSION['mensagem']);
    endif;
?>
