<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили</title>
    <link rel="stylesheet" href="./css/catalog.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header class="header">
    <h1 class="header-title">Автомобили</h1>
    <button class="header-btn">Совет дня</button>
    <a class="header-btn" href="{{ route('filter') }}">Фильтр</a>
</header>
<main class="main">
    <div class="container">
        <section class="cars-section">
            <h2 class="cars-section-title">Каталог автомобилей</h2>
            <div class="cars-list">
                @forelse($catalog as $item)
                    <div class="car-card">
                        <div class="car-card-image">
                            <img src="{{ "storage/$item->picture" }}" alt="{{ $item->title }}">
                        </div>
                        <div class="car-card-info">
                            <h3 class="car-card-title">{{ $item->title }}</h3>
                            <p class="car-card-year">{{ $item->year }}</p>
                            <p class="car-card-description">{{ $item->description }}</p>
                        </div>
                    </div>
                @empty
                    Товаров не найдено
                @endforelse
            </div>
        </section>
    </div>
</main>
<footer class="footer">
    <p class="footer-text">&copy; 2023г, Автомобили</p>
</footer>
<script src="./js/catalog.js"></script>
</body>
</html>
