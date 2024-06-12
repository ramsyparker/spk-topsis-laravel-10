const body = document.querySelector("body");

$(".sidebar ul li").on("click", function () {
  $(".sidebar ul li.active").removeClass("active");
  $(this).addClass("active");
});

$('.open-btn').on('click', function () {
  $('.sidebar').addClass('active');
});

$('.content-right').on('click', function () {
  $('.sidebar').removeClass('active');
});


$(document).ready(function () {

  let load = document.querySelector(".loading-wrapper");

  body.removeChild(load);

  document.querySelector('.wrapper').classList.remove('d-none');

  $('#example').DataTable();
});
