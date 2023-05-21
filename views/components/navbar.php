<div class="row">
    <div class="sidebar d-flex flex-column justify-content-start align-items-start">
        <a href="/home">Головна</a>
        <a href="/storage">Склад</a>
        <a href="/createProfile">Створення картки клієнтів</a>
        <a href="/viewProfile">Перегляд картки клієнтів</a>
        <?php
        if ($_SESSION["user"]) {
            ?>
            <form action="/auth/logout" method="post">
                <button type="submit">Вихід</button>
            </form>
            <?php
        }
        ?>
    </div>
</div>

<style>
    .sidebar {
        background-color: #f8f9fa;
        width: 200px;
        padding: 20px;
        height: 100vh;
    }

    .sidebar a {
        display: block;
        margin-bottom: 10px;
        color: #000;
        text-decoration: none;
    }

    .sidebar a:hover {
        color: #007bff;
    }
</style>
