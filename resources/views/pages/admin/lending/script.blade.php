 <!-- load JS Bootstrap and jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script>
     $(document).ready(function() {
         // event saat tombol "Tambah Kolom" ditekan
         $('#add-col-button').click(function() {
             // tambahkan kolom baru ke row-container
             var newCol = $(
                    '<div class="row my-3" id="options-select">'+
                        '<div class="col-sm-12 col-md-2">'+
                        '</div>'+
                        '<div class="col-sm-12 col-md-8">'+
                            '<select class="form-select my-3" aria-label="Default select example">'+
                                '<option selected>Open this select menu</option>'+
                                '<option value="1">One</option>'+
                                '<option value="2">Two</option>'+
                                '<option value="3">Three</option>'+
                             '</select>'+
                        '</div>'+
                        '<div class="col-sm-12 col-md-2 ms-auto d-grid gap-2">'+
                            '<button type="button" class="btn btn-danger remove-col-button d-md-block">'+
                                '<i class="bi bi-file-earmark-plus"></i>'+
                            '</button>'+
                        '</div>'+
                    '</div>'
                 );
             $('#row-container').append(newCol);

             // event saat tombol "Hapus Kolom" ditekan
             newCol.find('.remove-col-button').click(function() {
                 $(this).closest('#options-select').remove();
             });
         });
     });
 </script>
