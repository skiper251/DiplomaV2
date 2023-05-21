    <form method="GET" action="">
        <label for="phone">Введите номер телефона:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Найти</button>
    </form>
<?php
if(isset($_GET['phone'])){
    $phone = $_GET['phone'];
    $user = \R::findOne('profiles', 'ownerPhoneNumber = ?', [$phone]);
    $data = $user->getProperties();
?>
    <table>
<tr>
    <th>ID</th>
    <th>ownerPhoneNumber</th>
    <th>ownerName</th>
    <th>ownerSurname</th>
    <th>petName</th>
    <th>petType</th>
    <th>petBreed</th>
    <th>petWeight</th>
    <th>petAge</th>
    <th>petVaccine</th>
    <th>lastVisit</th>
    <th>lastProblem</th>
</tr>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['ownerphonenumber']?></td>
        <td><?php echo $data['ownername']?></td>
        <td><?php echo $data['ownersurname']?></td>
        <td><?php echo $data['petname']?></td>
        <td><?php echo $data['pettype']?></td>
        <td><?php echo $data['petbreed']?></td>
        <td><?php echo $data['petweight']?></td>
        <td><?php echo $data['petage']?></td>
        <td><?php echo $data['petvaccine']?></td>
        <td><?php echo $data['lastvisit']?></td>
        <td><?php echo $data['lastproblem']?></td>


    </tr>
    <?php
    }
?>
        </table>