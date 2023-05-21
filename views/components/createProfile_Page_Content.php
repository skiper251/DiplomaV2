<form action="/profilesDB/add" method="post" class="my-form">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="ownerPhoneNumber">Номер телефону власника:</label>
                <input type="text" name="ownerPhoneNumber" id="ownerPhoneNumber" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ownerName">Ім'я власника:</label>
                <input type="text" name="ownerName" id="ownerName" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ownerSurname">Прізвище власника:</label>
                <input type="text" name="ownerSurname" id="ownerSurname" class="form-control form-control-sm">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="petName">Ім'я тварини:</label>
                <input type="text" name="petName" id="petName" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="petType">Тип тварини:</label>
                <input type="text" name="petType" id="petType" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="petBreed">Порода тварини:</label>
                <input type="text" name="petBreed" id="petBreed" class="form-control form-control-sm">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="petWeight">Вага тварини:</label>
                <input type="text" name="petWeight" id="petWeight" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="petAge">Вік тварини:</label>
                <input type="text" name="petAge" id="petAge" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="petVaccine">Щеплення тварини:</label>
                <input type="text" name="petVaccine" id="petVaccine" class="form-control form-control-sm">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="lastProblem">Остання проблема:</label>
                <input type="text" name="lastProblem" id="lastProblem" class="form-control form-control-sm">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-primary">Додати новий профіль</button>
        </div>
    </div>
</form>
