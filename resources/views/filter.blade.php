<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96125388, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/96125388" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
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
