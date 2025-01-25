var dialog = document.querySelector('dialog');

var btn_show = document.getElementById('.trash-h_btn');

var btn_OK = document.getElementById('OK');

var btn_close = document.getElementById('close');

btn_show.addEventListener('click', function () {
  dialog.show();
}, false);

btn_OK.addEventListener('click', function () {
  dialog.close();
}, false);

btn_close.addEventListener('click', function () {
  dialog.close();
}, false);

// モーダルedit
// var btn_show = document.getElementById('edit_btn');

// var btn_close = document.getElementById('edit_close');

// btn_show.addEventListener('click', function () {
//   dialog.show();
// }, false);

// btn_close.addEventListener('click', function () {
//   dialog.close();
// }, false);
