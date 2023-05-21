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

    .news-container {
        margin-top: 3rem;
    }

    .news-item {
        margin-bottom: 2rem;
        padding: 2rem;
        background-color: #f8f9fa;
        border-radius: 0.3rem;
    }

    .news-title {
        font-size: 1.5rem;
        font-weight: 500;
        margin-bottom: 1rem;
    }

    .news-content {
        font-size: 1.1rem;
        font-weight: 300;
        line-height: 1.6;
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

<div class="news-container">
    <div class="news-item">
        <h2 class="news-title">Новина 1</h2>
        <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt dolor eget nisi ultricies sagittis. Sed lacinia enim ut metus luctus semper. Sed non turpis vitae justo fermentum posuere. Donec sed metus nec tellus tincidunt auctor. Vestibulum efficitur, nulla vitae tristique semper, ante felis laoreet mi, eu eleifend nisi ligula id ante. Nam ut lacus ac odio venenatis varius nec at felis. In eleifend massa sed ligula laoreet bibendum.</p>
    </div>
    <div class="news-item">
        <h2 class="news-title">Новина 2</h2>
        <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt dolor eget nisi ultricies sagittis. Sed lacinia enim ut metus luctus semper. Sed non turpis vitae justo fermentum posuere. Donec sed metus nec tellus tincidunt auctor. Vestibulum efficitur, nulla vitae tristique semper, ante felis laoreet mi, eu eleifend nisi ligula id ante. Nam ut lacus ac odio venenatis varius nec at felis. In eleifend massa sed ligula laoreet bibendum.</p>
    </div>
    <div class="news-item">
        <h2 class="news-title">Новина 3</h2>
        <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt dolor eget nisi ultricies sagittis. Sed lacinia enim ut metus luctus semper. Sed non turpis vitae justo fermentum posuere. Donec sed metus nec tellus tincidunt auctor. Vestibulum efficitur, nulla vitae tristique semper, ante felis laoreet mi, eu eleifend nisi ligula id ante. Nam ut lacus ac odio venenatis varius nec at felis. In eleifend massa sed ligula laoreet bibendum.</p>
    </div>
</div>
