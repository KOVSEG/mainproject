function calcCartPrice() {

  const cartWrapper = document.querySelector('.cart-wrapper');
  let priceElements = cartWrapper.querySelectorAll('.price__currency');
  let totalPriceEl = document.querySelector('.total-price');
  let priceTotal = 0;

  priceElements.forEach(function (item) {
    
    let amountEl = item.closest('.cart-item').querySelector('[data-counter]');
    priceTotal += parseInt(amountEl.innerText) * parseInt(item.innerText);
  });
  // Отображаем итоговую цену на странице
  totalPriceEl.innerText = priceTotal;
};