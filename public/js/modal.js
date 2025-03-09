const openButton = document.getElementById('edit_btn');
const closeButton = document.getElementById('edit_close');
const dialog = document.getElementById('edit');

openButton.addEventListener('click', () => {
  dialog.showModal();
});

closeButton.addEventListener('click', () => {
  dialog.close();
});
