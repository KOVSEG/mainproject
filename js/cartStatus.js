
function toggleCartStatus () {
    

    const cartWrapper = document.querySelector('.cart-wrapper');    
    const cartEmptyBadge = document.querySelector('[data-cart-empty]');
    const orderForm = document.querySelector('#order-form');
    
    if ( cartWrapper.children.length > 0 ) {
        
        cartEmptyBadge.classList.add('alertNone');
        orderForm.classList.remove('alertNone');
        
    } else {
        
        cartEmptyBadge.classList.remove('alertNone');
        orderForm.classList.add('alertNone');
    }
};