<style>
    .jumbotron {
        background-color: #e9ecef;
        padding: 2rem;
        border-radius: 0.3rem;
    }

    .display-4 {
        font-size: 2.5rem;
        font-weight: 500;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }

    .my-4 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>Доброго дня, <?php echo $_SESSION['user']['name']; ?>!</p>
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>