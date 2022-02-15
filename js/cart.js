// Сюда переходят данные из sendOrder.js
let cartEnter = JSON.parse(localStorage.getItem('sendCart')); // Получаем корзину из LS
console.log(cartEnter);
let orderNumber = '';
let totalPrice = '';
// let id = '';
// let imgSrc = '';
// let title = '';
// let count = '';
// let price = '';
let itemArray = [];

// Получаем данные из объекта, выделяем строки Номер заказа, Итого и создаем объект из остальных данных
for (let key in cartEnter) {
  let itmArr;
  if (cartEnter[key].id) {
    itmArr = {
      id: cartEnter[key].id,
      imgSrc: cartEnter[key].imgSrc,
      title: cartEnter[key].title,
      price: cartEnter[key].price,
      count: cartEnter[key].count
    };
    itemArray.push(itmArr);// Получен массив с объектами без номера и итоговой стоимости, для вывода в корзине        
  }
  totalPrice = cartEnter[key].cartTotal;
  orderNumber = cartEnter[key].orderNumber;
}
// Получаем доступ к элементу для вывода № заказа 
let ordrNumbArea = document.querySelector('.orderNumber');

ordrNumbArea.innerHTML = `№ заказа: ${orderNumber}`; //Добавляем номер заказа на страницу

// Создаем таблицу и выводим в HTML
document.querySelector('.tableOrder').innerHTML = `<table class="listOrder"></table>`;

let row1 = document.createElement('tr');
row1.innerHTML = `<th>Название</th><th>Изображение</th><th>Цена за шт.</th><th>Количество</th><th>Артикул</th>`;
document.querySelector('.listOrder').appendChild(row1);

for (let key in itemArray) {
  let row2 = document.createElement('tr');
  row2.innerHTML = `<td>${itemArray[key].title}</td><td><img src="${itemArray[key].imgSrc}"></td><td>${itemArray[key].price}</td><td>${itemArray[key].count}</td><td>${itemArray[key].id}</td>`;
  document.querySelector('.listOrder').appendChild(row2);
}

document.querySelector('.totalPrice').innerHTML = `${totalPrice}`; //Выводим итоговую стоимость на страницу
document.querySelector('.to-order').addEventListener('submit', (e) => {
  e.preventDefault();
  let self = e.currentTarget;
  let formData = new FormData(self);
  let name = self.querySelector('[name="Имя"]').value;
  let tel = self.querySelector('[name="Телефон"]').value;
  let email = self.querySelector('[name="Email"]').value;
  formData.append('Товары', JSON.stringify(cartEnter));
  formData.append('Имя', name);
  formData.append('Телефон', tel);
  formData.append('Email', email);
// console.log(formData);
// console.log(formData.get('Товары'));

  let xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        console.log('Отправлено');
        console.log(xhr.responseText);
      } else {
        console.log('Проблема c отправкой');
      }
    }
  }  
  xhr.open('POST', '../mail.php', true);
  xhr.send(formData);
  
});
