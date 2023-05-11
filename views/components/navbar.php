<div class="row">
    <a href="/home">home</a>
</div>
<div class="row">
    <a href="/storage">storage</a>
</div>
<div class="row">
    <a href="3">content</a>
</div>
<div class="row">
    <?php
    if ($_SESSION["user"]){
    ?>
    <form action="/auth/logout" method="post">
        <button type="submit">Logout</button>
<?php
}
?>
</div>