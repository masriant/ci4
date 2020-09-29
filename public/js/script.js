// Javascript

// Fungsi preview images
function previewImg() {
  const sampul = document.querySelector('#sampul');
  const sampulLabel = document.querySelector('.form-file-label');
  const imgPreview = document.querySelector('.img-preview');

  // ganti URL
  sampulLabel.textContent = sampul.files[0].name;

  // ganti preview
  const fileSampul = new FileReader();
  fileSampul.readAsDataURL(sampul.files[0]);

  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result;
  }

}