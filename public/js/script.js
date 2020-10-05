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

// Datatable admin LTE
$(function () {
  $("#datauser1").DataTable({
    "responsive": true,
    "autoWidth": false,
  });

  $('#datauser2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

$(document).ready(function () {
  bsCustomFileInput.init();
});

$(document).ready(function () {
  $('.formlogin').submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: $(this).attr('action'),
      data: $(this).serialize(),
      dataType: "json",
      beforeSend: function () {
        $('.btnlogin').prop('disabled', true);
        $('.btnlogin').html('<i class="fa fa-spin fa-spinner"></i>');
      },
      complete: function () {
        $('.btnlogin').prop('disabled', false);
        $('.btnlogin').html('Login');
      },
      success: function (response) {
        if (response.error) {
          if (response.error.userid) {
            $('#userid').addClass('is-invalid');
            $('.errorUserID').html(response.error.userid);
          } else {
            $('#userid').removeClass('is-invalid');
            $('.errorUserID').html('');
          }

          if (response.error.password) {
            $('#pass').addClass('is-invalid');
            $('.errorPassword').html(response.error.password);
          } else {
            $('#pass').removeClass('is-invalid');
            $('.errorPassword').html('');
          }
        }

        if (response.sukses) {
          window.location = response.sukses.link;
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status + "\n" + xhr.responseText + "\n" +
          thrownError);
      }
    });
    return false;
  });
});