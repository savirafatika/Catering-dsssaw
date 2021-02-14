const flashData = $('.flash-data').data('flashdata'); // CRUD success
const flashDanger = $('.flash-data-danger').data('flashdanger'); //CRUD errors
const log = $('.log').data('log'); //welcome login user area 
// swal log
const Toast = Swal.mixin({
   toast: true,
   position: 'top-end',
   showConfirmButton: false,
   timer: 4000,
   timerProgressBar: true,
   didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
   }
})

if (flashData) {
   Swal.fire(
   flashData,
   'table has been updated!',
   'success'
   )
} else if (flashDanger) {
   Swal.fire({
   icon: 'error',
   title: 'Oops...',
   html: flashDanger
   })
} else if (log) {
   Toast.fire({
   icon: 'success',
   title: log
   })
} 

// tombol hapus
$('.button-delete').on('click', function (e){

   e.preventDefault();
   const href = $(this).attr('href');

   Swal.fire({
   title: 'Are you sure?',
   text: "This data will be deleted!",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
   if (result.value) {
      document.location.href = href;
   }
   })

});

// tombol hapus semua
$('.button-deleteall').on('click', function (e){

   e.preventDefault();
   const href = $(this).attr('href');

   Swal.fire({
   title: 'You want to delete all data?',
   text: 'data cannot be restored afterwards!',
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
   if (result.value) {
      document.location.href = href;
   }
   })

});

//tombol logout
$("#button-logout").on("click", function(e) {
   e.preventDefault();
   const lhref = $(this).attr("href");

   Swal.fire({
   title: 'Are you sure?',
   text: "You won't be sign out!",
   icon: 'question',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, sign out!'
   }).then((result) => {
   if (result.value) {
      document.location.href = lhref;
   }
   })
});