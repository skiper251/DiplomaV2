<?php
$storage = R::getAll( "SELECT s.id , idesc.name , s.count , idesc.description , idesc.price , m.medecineType , c.countryName , a.anymalType , asst.assigmentType FROM `storage` s 
JOIN `Item_description` idesc ON idesc.id=s.item_id 
JOIN `medecineID` m ON m.id=idesc.medecineID
JOIN `countryID` c ON c.id=idesc.countryID
JOIN `animalType` a ON a.id=idesc.animalTypeID
JOIN `assigmentType` asst ON asst.id=idesc.assigmentTypeID");
?>
<style>
    th, td {
        padding: 10px;
        border: 1px solid black;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>

<table>
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
    </tr>
<?php
foreach ($storage as $elem)
{
?>
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
        <form action="/db/delete" method="post">
            <td><button type="submit" name="<?=$elem['id']?>">delete</td>
        </form>
    </tr>

        <?php
    }
?>
</table>



<h3>Add new product</h3>
<form action="/storagedb/add" method="post">
    <p>
        item_id<label>
            <input type="text" name="item_id">
        </label>
        кількість<label>
            <input type="text" name="count">
        </label>
    </p>
    <button type="submit" name="submit">Add new product
</form>


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
