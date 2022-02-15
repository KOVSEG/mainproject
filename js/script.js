const cartWrapper = document.querySelector('.cart-wrapper');

window.addEventListener('click', function(event) {
    
    let counter;
    
    if(event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus') {
        
        const counterWrapper =  event.target.closest('.counter-wrapper');       
        counter = counterWrapper.querySelector('[data-counter]');     
    }

    // Проверка работы кнопки Плюс
    if(event.target.dataset.action === 'plus') {  
        // Изменение счетчика, увеличиваем на 1 по клику  
        counter.innerText = ++counter.innerText;
        
    }

    // Проверка работы кнопки Минус
    if(event.target.dataset.action === 'minus') {        
        // Проверка счетчика, должен быть больше 1                
        if(parseInt(counter.innerText) > 1 ) {
            // Изменение счетчика, уменьшаем на 1 по клику
            counter.innerText = --counter.innerText;
                // Проверка нахождения товара в корзине
        } else if( event.target.closest('.cart-wrapper') && parseInt(counter.innerText) === 1 ) {
            
            // Удаляем товар из корзины
            event.target.closest('.cart-item').remove();

            toggleCartStatus();

            // Пересчет общей стоимости товаров в корзине
            calcCartPrice();
        } 
    }

    // Проверка на клик + или - внутри корзины
    if(event.target.hasAttribute('data-action') && event.target.closest('.cart-wrapper')) {
        
        // Пересчет общей стоимости товаров в корзине
        calcCartPrice();
    }

    if( event.target.classList.contains('to-cart')) {

        const card = event.target.closest('.card');   
        
        let productInfo = {
            id: card.dataset.id,
            imgSrc: card.querySelector('.product-img').getAttribute('src'),
            title: card.querySelector('.item-title').innerText,
            price: card.querySelector('.item-price').innerText,
            count: card.querySelector('[data-counter]').innerText
        };               
        
        // Проверка наличия похожего товара в корзине
        const itemInCart = cartWrapper.querySelector(`[data-id="${productInfo.id}"]`);
        
        // Если товар есть в корзине
        if(itemInCart) {
            const countElement = itemInCart.querySelector('[data-counter]'); 
            countElement.innerText = parseInt(countElement.innerText) + parseInt(productInfo.count);
        } else {   
            // Собранные данные подставляем в шаблон для товара в корзине         
            const cartItemHTML = `<div class="cart-item" data-id="${productInfo.id}">
            <div class="cart-item__top">
                <div class="cart-item__img">
                    <img src="${productInfo.imgSrc}" alt="">
                </div>
                <div class="cart-item__desc">
                    <div class="cart-item__title">${productInfo.title}</div>					
                    <div class="cart-item__details">
                        <div class="items items--small counter-wrapper">
                            <div class="items__control" data-action="minus">-</div>
                            <div class="items__current" data-counter="">${productInfo.count}</div>
                            <div class="items__control" data-action="plus">+</div>
                        </div>
                        <div class="price">
                            <div class="price__currency">${productInfo.price} ₽</div>
                        </div>
                    </div>                  
                </div>
            </div>`;

            // Отобразим товар в корзине
            cartWrapper.insertAdjacentHTML('beforeend', cartItemHTML);

            // Отображение статуса корзины -Пустая/Полная
            toggleCartStatus();

            // Подсчет общей стоимости товара
            calcCartPrice(); 
            
        }
        card.querySelector('[data-counter]').innerText = '1'; // Сброс счетчика добавленного товара на 1
        //localStorage.setItem('cart', JSON.stringify(productInfo));
        
    }
    
});






// let data = {}; //Добавление товара для корзины
   
// document.querySelector('.maininfo').addEventListener('click', event => { 
//     if (event.target.classList.contains('to-cart')) {             
//         // let articul = event.target.dataset['id']; 
//         let articul = document.getAttribute('data-id')
//         console.log(articul);                
//         if (data[articul] !== undefined) {
//             data[articul]['count']++;
//     } else {
//         data[articul] = cart[articul];
//         data[articul]['count'] = 1;
//         }
//     }
//         localStorage.setItem('cart', JSON.stringify(data));    
// });
