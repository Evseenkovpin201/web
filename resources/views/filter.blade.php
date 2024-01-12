<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <a href="{{ route('catalog') }}">Каталог</a>
    <title>Производители и автомобили</title>
    <link rel="stylesheet" href="./css/filter.css">
</head>
<body>
<div class="container">
    <h1 style="text-align: center">Производители и автомобили</h1>

    <form id="filter-form">
        <label for="manufacturer">Производитель:</label>
        <select name="manufacturer" id="manufacturer">
            <option value="all">Все</option>
            @foreach($manufacturers as $manufacturer)
                <option value="{{ $manufacturer }}">{{ $manufacturer }}</option>
            @endforeach
        </select><br><br>

        <label for="min-year">Минимальный год выпуска:</label>
        <input type="number" name="min-year" id="min-year"><br><br>

        <label for="max-price">Максимальная стоимость:</label>
        <input type="number" name="max-price" id="max-price"><br><br>

        <input type="submit" value="Применить фильтр">
    </form>

    <table id="auto-table">
        <thead>
        <tr>
            <th>Производитель</th>
            <th>Модель</th>
            <th>Год выпуска</th>
            <th>Стоимость, руб.</th>
        </tr>
        </thead>
        <tbody>
        @foreach($catalog as $item)
            <tr>
                <td>{{ $item->manufacturer }}</td>
                <td>{{ $item->model }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="contact-button" href="https://vk.com/id221894795/" target="_blank"> Связаться с нами</a>
</div>

<script src="./js/filter.js"></script>
</body>
</html>
