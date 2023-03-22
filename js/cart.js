const imgCart = document.querySelector('.link__cart')
const cart = document.querySelector('.carts')
const exit = document.querySelector('.exit__cart')

imgCart.addEventListener('click',function(e){
    e.preventDefault()
    cart.classList.remove('none')
})

exit.addEventListener('click',function(){
    cart.classList.add('none')
})

const plus = document.querySelector('.plus')
const minus = document.querySelector('.minus')

plus.addEventListener('click',function(event){
// Ищем ближайшего родителя - карточку'

const card = event.target.closest('.counter');
if (card) {
  const productInfo = {
    count: card.querySelector('.count').innerText,
  };
  productInfo.count = parseInt(productInfo.count) + 1;
  card.querySelector('.count').innerText = productInfo.count;
}

})