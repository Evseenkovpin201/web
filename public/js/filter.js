
// Получаем ссылки на форму и таблицу
const form = document.querySelector('#filter-form');
const table = document.querySelector('#auto-table');

// Обработчик отправки формы
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Отменяем отправку формы
    applyFilter(); // Применяем фильтр
});

// Функция применения фильтра к таблице
function applyFilter() {
    const manufacturerFilter = document.querySelector('#manufacturer').value;
    const minYearFilter = document.querySelector('#min-year').value;
    const maxPriceFilter = document.querySelector('#max-price').value;

    // Проходим по строкам таблицы, скрываем те, которые не соответствуют фильтру
    const rows = table.querySelectorAll('tbody tr');
    rows.forEach(function (row) {
        const manufacturer = row.cells[0].textContent;
        const year = row.cells[2].textContent;
        const price = parseInt(row.cells[3].textContent.replace(/\s/g, '')); // Преобразуем цену из строки в число

        let hide = false; // Флаг, скрывать строку или нет

        // Применяем фильтры, если они заданы
        if (manufacturerFilter !== 'all' && manufacturerFilter !== manufacturer) {
            hide = true;
        }
        if (minYearFilter !== '' && parseInt(minYearFilter) > parseInt(year)) {
            hide = true;
        }
        if (maxPriceFilter !== '' && parseInt(maxPriceFilter) < price) {
            hide = true;
        }

        // Скрываем или отображаем строку в зависимости от флага
        if (hide) {
            row.style.display = 'none';
        } else {
            row.style.display = '';
        }
    });
    // Добавляем обработчик события click для кнопки

}
