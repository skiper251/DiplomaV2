<form method="GET" action="" class="my-form">
    <div class="form-group">
        <label for="phone">Введите номер телефона:</label>
        <div class="input-group">
            <input type="text" id="phone" name="phone" class="form-control" required>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Найти</button>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_GET['phone'])){
    $phone = $_GET['phone'];
    $user = \R::findOne('profiles', 'ownerPhoneNumber = ?', [$phone]);
    $data = $user->getProperties();
?>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Owner Phone Number</th>
        <th>Owner Name</th>
        <th>Owner Surname</th>
        <th>Pet Name</th>
        <th>Pet Type</th>
        <th>Pet Breed</th>
        <th>Pet Weight</th>
        <th>Pet Age</th>
        <th>Pet Vaccine</th>
        <th>Last Visit</th>
        <th>Last Problem</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['ownerphonenumber']; ?></td>
        <td><?php echo $data['ownername']; ?></td>
        <td><?php echo $data['ownersurname']; ?></td>
        <td><?php echo $data['petname']; ?></td>
        <td><?php echo $data['pettype']; ?></td>
        <td><?php echo $data['petbreed']; ?></td>
        <td><?php echo $data['petweight']; ?></td>
        <td><?php echo $data['petage']; ?></td>
        <td><?php echo $data['petvaccine']; ?></td>
        <td><?php echo $data['lastvisit']; ?></td>
        <td><?php echo $data['lastproblem']; ?></td>
    </tr>
    </tbody>
</table>
<?php
}
    ?>
