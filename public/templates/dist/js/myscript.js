const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);

if(flashData){
    var Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 5000,
    });
    Toast.fire({
      icon: "success",
      title: flashData,
    });
    // swalDefaultSuccess(flashData, "You clicked the button!", "success");
}

$('.tombol-hapus').on('click', function(e){
  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: "Apakah Anda yakin",
    text: "data akan dihapus permanen",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus Data",
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
});



