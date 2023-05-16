<div class="row">
    <a href="/home">Головна</a>
</div>
<div class="row">
    <a href="/storage">Склад</a>
</div>
<div class="row">
    <a href="3">Контент</a>
</div>
<div class="row">
    <?php
    if ($_SESSION["user"]){
    ?>
    <form action="/auth/logout" method="post">
        <button type="submit">Вихід</button>
    </form>
<?php
}
?>
</div>