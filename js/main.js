$(function() {

    function showCart(cart){
        $('#cart-modal .modal-cart-content').html(cart);
    }

$('.btn__buy').on('click', function(e) {
    e.preventDefault();
    let id = $(this).data('id');

    $.ajax({
        url: 'cart.php',
        type: 'GET',
        data: {cart: 'add', id: id},
        dataType: 'json',
        success: function(res){
            if(res.code == 'ok') {
                showCart(res.answer)
            } else {
                alert(res.answer)
            }
        }
    });
});

});