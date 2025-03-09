var dialog = document.querySelector('#edit');

var btn_show = document.getElementById('.edit_btn');

var btn_OK = document.getElementById('#OK');

var btn_close = document.getElementById('.edit_close');

btn_show.addEventListener('click', function () {
  dialog.show();
}, false);

btn_OK.addEventListener('click', function () {
  dialog.close();
}, false);

btn_close.addEventListener('click', function () {
  dialog.close();
}, false);
