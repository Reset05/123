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
