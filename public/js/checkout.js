Stripe.setPublishableKey('pk_test_vL2fAUE5klHj7nLmJ35703YV');
var $form = $('#payment-form"').val();

$form.submit(function(event) {
Stripe.card.createToken({
  number: $('#cc-number').val(),
  cvc: $('#cc-cvv').val(),
 exp: $('#cc-expiration').val(),
name:$('#cc-name').val()
}, stripeResponseHandler);
});