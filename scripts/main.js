$(".image").on("click", toggleActive);

function toggleActive() {
  $(".image.active").removeClass('active');
  $(this).addClass('active');
}
