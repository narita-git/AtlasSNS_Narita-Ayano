$(function () {
  $('.arrow .arrow_box').on('click', function () {
    $(this).next().slideToggle();
    $(this).next().toggleClass('active');
    $(this).toggleClass('active');
  });
});
