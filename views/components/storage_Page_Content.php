<?php
$storage = R::getAll( "SELECT s.id , idesc.name , s.count , idesc.description , idesc.price , m.medecineType , c.countryName , a.anymalType , asst.assigmentType FROM `storage` s 
JOIN `Item_description` idesc ON idesc.id=s.item_id 
JOIN `medecineID` m ON m.id=idesc.medecineID
JOIN `countryID` c ON c.id=idesc.countryID
JOIN `animalType` a ON a.id=idesc.animalTypeID
JOIN `assigmentType` asst ON asst.id=idesc.assigmentTypeID");
?>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Кількість</th>
        <th>Опис</th>
        <th>Ціна</th>
        <th>Вид засобу</th>
        <th>Країна походження</th>
        <th>Вид тварини</th>
        <th>Назначення</th>
        <th>Дія</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($storage as $elem) { ?>
        <tr>
            <td><?= $elem['id'] ?></td>
            <td><?= $elem['name'] ?></td>
            <td><?= $elem['count'] ?></td>
            <td><?= $elem['description'] ?></td>
            <td><?= $elem['price'] ?></td>
            <td><?= $elem['medecineType'] ?></td>
            <td><?= $elem['countryName'] ?></td>
            <td><?= $elem['anymalType'] ?></td>
            <td><?= $elem['assigmentType'] ?></td>
            <td>
                <form action="/storagedb/delete" method="post">
                    <button type="submit" name="<?= $elem['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>




<div class="card">
    <div class="card-header">
        <h3>Add new product</h3>
    </div>
    <div class="card-body">
        <form action="/storagedb/add" method="post">
            <div class="form-group">
                <label for="item_id">item_id</label>
                <input type="text" id="item_id" name="item_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="count">Кількість</label>
                <input type="text" id="count" name="count" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add new product</button>
        </form>
    </div>
</div>



<!--


//WHERE `item_id`= ? ", array('1// что ищем//')); ПОИСК
/*<thead>
<tr>
    <th scope="col">Handle</th>
</tr>
</thead>
<tbody>
<tr>
    <th scope="row">1</th>
    <td>@mdo</td>
</tr>
<tr>
    <th scope="row">2</th>
    <td>@fat</td>
</tr>
<tr>
    <th scope="row">3</th>
    <td>@twitter</td>
</tr>
</tbody> */







//$storage = []
//
//        for ($i = 0; $i < count($storage); $i++) {
//            echo '<tr>'.$storage['id'].'</tr>';
//        }
