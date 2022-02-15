document.addEventListener('click', function(event) {
    
    // Условие, если нажата кнопка "Заказать"
    if( event.target.classList.contains('btn') ) {
        let sideCart = document.querySelector('.sidecart'); // Получаем доступ к боковой панели - заказ/корзина
        let cartWrapper = document.querySelector('.cart-wrapper'); // Получаем доступ к данным корзины    
        let cartTotal = sideCart.querySelector('.cart-total').innerText;// Получаем итоговую сумму корзины             
        let cartItemAll = cartWrapper.querySelectorAll('.cart-item'); // Получение всех карточек в корзине по селектору
        let dataItem = []; //Добавление товара в массив для LocalSrorage
        let cartElObj;

        // Данные продуктов из корзины переводим в Объект
        for( let i = 0; i < cartItemAll.length; i++ ) {
            let cartElement = cartItemAll[i];
            cartElObj = {
                id: cartElement.getAttribute('data-id'),
                imgSrc: cartElement.getElementsByTagName('img')[0].getAttribute('src'),                
                title: cartElement.querySelector('.cart-item__title').innerText,
                price: cartElement.querySelector('.price__currency').innerText,
                count: cartElement.querySelector('[data-counter]').innerText 
            };
            
            dataItem.push(cartElObj);
        }

        let min = 0;
        let max = 10000;
        let funcRandInit = getRandomInt(min, max); // Создаем номер заказа
        
        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
        }

        let obj = {};
        obj.cartTotal = cartTotal;
        obj.orderNumber = funcRandInit;
        dataItem.push(obj);       

        // dataItem.push(cartTotal);    
        
        localStorage.setItem('sendCart', JSON.stringify(dataItem));                
    }   
});   

