ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('map', {
        center: [56.247421, 42.159823],
        zoom: 18,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    });

    var placemark = new ymaps.Placemark(myMap.getCenter(), {
	
        // Зададим содержимое заголовка балуна
        balloonContentHeader: '<a href = "/"><font color="#519830">L-Green</font></a><br>' +
            '<span class="description">Питомник растений - "Любава"</span><br><br>',
        // Зададим содержимое основной части балуна.
        balloonContentBody: '<img src="images/map/sobornaya.jpg" height="150" width="200"> <br/> ' +
	    '<br />' +
            '<a href="tel:+7 926-349-99-32">+7 (926)-349-99-32</a><br/>' +
            '<b> «Центральный рынок»,</b> <br/> Соборная площадь, г. Вязники, Владимирская область.',
        // Зададим содержимое нижней части балуна.
        balloonContentFooter: 'Информация предоставлена:<br/>ИП "Байдакова Н.Н."',
        // Зададим содержимое всплывающей подсказки.
        hintContent: 'Питомник растений - "Любава"'
	}, {
	iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/images/map/teg.png',
            // Размеры метки.
            iconImageSize: [60, 70],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-60, -64]
    });
	
    // Добавим метку на карту.
    myMap.geoObjects.add(placemark);
    // Откроем балун на метке.
    placemark.balloon.open();
};
