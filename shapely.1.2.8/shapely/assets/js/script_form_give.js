$('.give_widget_wrapper .container .col-md-4').append('<a name="gofund"></a><div style="padding: 20px;background: #fff;margin-top: 40px;" class="gfm-embed" data-url="https://www.gofundme.com/f/buy-an-ambulance-to-help-more-people/widget/medium/"></div>');

var app = document.querySelector('.give-recurring-donors-choice')
var title = document.createElement('a')
title.className = 'one-time_donation'
var hash = window.location.pathname;
if(hash == '/es/'){
  title.innerHTML = 'Donación única'
}else{
  title.innerHTML = 'One-time donation'
}
if (app) {
  app.insertBefore(title, app.firstChild);
}

//$(".my-give-donorwall-name").text('Anonymously');

$("#give-gateway-option-stripe_google_pay").html('<img style="width: 100px;" src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/google_pay.webp">');
$("#give-gateway-option-stripe_apple_pay").html('<img style="width: 100px;" src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/apple_pay.png">');

$(".one-time_donation").click(function() {
  $("#give-admin_choice-16").prop("checked", !$("#give-admin_choice-16").prop("checked"));
});

$(".give-recurring-donors-choice label").addClass("monthly_donation");

$(".monthly_donation").text('Monthly donation');

$(".monthly_donation").click(function() {
  $(".one-time_donation").toggleClass('active_1');
  $(".description_donation_2").toggleClass('close_1');
  $(".description_donation_1").toggleClass('close_1');
});

$(".one-time_donation").click(function(e) {
  e.preventDefault();
  $(".one-time_donation").toggleClass('active_1');
  $(".description_donation_1").toggleClass('close_1');
  $(".description_donation_2").toggleClass('close_1');
});

$(".give-btn-level-1").on("click", function(e) {
  $(".text-for-donat-1").removeClass('close_1');
  $(".text-for-donat-2").addClass('close_1');
  $(".text-for-donat-3").addClass('close_1');
  $(".text-for-donat-4").addClass('close_1');
  $(".give-donation-amount").removeClass('give-force-always-show-custom-donation')
});
$(".give-btn-level-4").on("click", function(e) {
  $(".text-for-donat-2").removeClass('close_1');
  $(".text-for-donat-1").addClass('close_1');
  $(".text-for-donat-3").addClass('close_1');
  $(".text-for-donat-4").addClass('close_1');
  $(".give-donation-amount").removeClass('give-force-always-show-custom-donation')
});
$(".give-btn-level-2").on("click", function(e) {
  $(".text-for-donat-3").removeClass('close_1');
  $(".text-for-donat-2").addClass('close_1');
  $(".text-for-donat-1").addClass('close_1');
  $(".text-for-donat-4").addClass('close_1');
  $(".give-donation-amount").removeClass('give-force-always-show-custom-donation')
});
$(".give-btn-level-3").on("click", function(e) {
  $(".text-for-donat-4").removeClass('close_1');
  $(".text-for-donat-2").addClass('close_1');
  $(".text-for-donat-3").addClass('close_1');
  $(".text-for-donat-1").addClass('close_1');
  $(".give-donation-amount").removeClass('give-force-always-show-custom-donation')
});

$('.give-btn-level-custom').on("click", function(){
  $(".give-donation-amount").addClass('give-force-always-show-custom-donation')
});

