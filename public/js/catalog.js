var carCards = document.querySelectorAll('.car-card');

// Добавление обработчика клика на каждую карточку автомобиля
carCards.forEach(function(carCard) {
 carCard.addEventListener('click', function() {
  // Отображение информациио выбранном автомобиле
  var model = carCard.querySelector('.car-card-title').textContent;
  var year = carCard.querySelector('.car-card-year').textContent;
  alert('Выбран автомобиль: ' + model + ', год: ' + year);
 })
})
// Список советов
var tips = [
    'Не забывайте проверять уровень масла и тормозных жидкостей в автомобиле регулярно!',
    'Если вы заметили, что тормоза начали хуже работать, срочно обращайтесь к механику.',
    'При обгонах на дороге всегда убедитесь в том, что есть достаточное расстояние для безопасного выполнения маневра.',
    'Если вы заметили, что что-то идет не так с вашим автомобилем, не откладывайте решение проблемы на потом.',
    'Не забудьте уставить зеркала, пристегнуть ремни и не использовать телефоны за рулем.',
    'Важно следить за давлением в шинах, чтобы обеспечить безопасность на дороге.',
    'Если вы ездите с маленьким ребенком, не забывайте использовать автомобильное кресло, соответствующее его возрасту и весу.',
    'Перед дальней поездкой всегда проверяйте состояние световой сигнализации, включая фары, стоп-сигналы и поворотники.'
   ];

   // Функция для выбора случайного совета из массива
   function getRandomTip() {
    var randomIndex = Math.floor(Math.random() * tips.length);
    return tips[randomIndex];
   }

   // Добавление обработчика клика на кнопку
   var headerBtn = document.querySelector('.header-btn');
   headerBtn.addEventListener('click', function() {
    alert(getRandomTip());
   });
var mainButton = document.getElementById('mainButton');

mainButton.addEventListener('click', function() {
    window.location.href = 'https://24carslist.ru/';
});
