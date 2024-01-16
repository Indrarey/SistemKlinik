<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Obat</h4>
                  <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a>

                  <!-- <div class="table-responsive"> -->
                    <table id="dtobat" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Kode Obat</th>
                          <th>Nama Obat</th> 
                          <th>Signa</th> 
                          <th>Supplier</th> 
                          <th align="center">Harga Satuan</th> 
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  <!-- </div> -->
                </div>
              </div>
        </div>
    </div> 
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="titelModal" aria-modal="true" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="titelModal"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form class="forms-sample" id="formInput">
                            <div class="card">
                                <div class="card-body">
                                <!-- <button type="button" class="btn btn-primary btn-sm" id="btnInput">Input</button> -->

                                    <div class="form-group">
                                        <label for="txtKodeObat">Kode Obat</label>
                                        <input type="text" required class="form-control" id="txtKodeObat" name="txtKodeObat" placeholder="Kode Obat" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNamaObat">Nama Obat</label>
                                        <input type="text" required class="form-control" id="txtNamaObat"  name="txtNamaObat"  placeholder="Nama Obat" maxlength="70">
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="selKodeSupplier">Supplier</label>
                                        <select class="form-control" required  name="selKodeSupplier" id="selKodeSupplier">
                                            <option value="">Pilih</option> 
                                        </select>
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="selKodeSigna">Signa</label>
                                        <select class="form-control" required  name="selKodeSigna" id="selKodeSigna">
                                            <option value="">Pilih</option> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="selSigna">Harga Satuan</label>
                                        <input type="text" required class="form-control" id="txtHargaSatuan"  name="txtHargaSatuan"  placeholder="Harga Satuan" maxlength="20">

                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary btn-sm" id="btnSave">Save</button>
                                        <button type="button" class="btn btn-primary btn-sm" id="btnUpdate">Update</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>
                    </div>
                   
            </div>
        </div>
    </div>
    <style>
        .modal .modal-dialog {
            margin-top: 10px    ;
        }
        
        .modal .modal-dialog .modal-content .modal-body {
            padding: 0px;
        }
        
  
        .form-group {
            margin-bottom: 1.5rem;
            padding-top: 6px;
        }

        .form-group label {
            font-size: 0.875rem;
            /* line-height: 1.4rem; */
            vertical-align: top;
            margin-bottom: 0px;
        }

        .error {
            color: red;
            margin-bottom: 3px;
        }
    </style>
    <script> 
    
        var url = "<?= $baseUrl ?>";
      
        function loadData() {
                 $.ajax({
                    url: url + "page/admin/process/readobat.php",
                    dataType: "json",
                    data:{kodeobat:''},
                }).done(function (result) {
                    $("#dtobat").DataTable().clear();
                    $("#dtobat").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        $(document).ready(function() {
            
            
            loadData();

            $("#dtobat").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.KodeObat + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.KodeObat + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "KodeObat", "autoWidth": true, class: "text-left" },
                    { "data": "NamaObat", "autoWidth": true, class: "text-left" },
                    { "data": "Signa", "autoWidth": true, class: "text-left" },
                    { "data": "Supplier", "autoWidth": true, class: "text-left" },
                    { "data": "HargaSatuan", "autoWidth": true, class: "text-right" },

                ],
                filter: true,
                info: true,
                ordering: true,
                processing: true,
                retrieve: true,
                bLengthChange: false,
                lengthMenu: [[15, 20, -1], [15, 20, "All"]],
                bFilter: true,
                bSort: true,
                bPaginate: true,
                scrollX: true,
                scrollX: "100%",
                autoWidth: true,
            });

         
            // $("#btnInput").click(function(){
                
            //     $('#txtKodeObat').val('ss');
            //     $('#txtNamaObat').val('ssz');
            //     $('#btnSave').focus(); 
            // });
            
            $("#btnAdd").click(function(){
                clearData(); 
                PopulateSupplier();
                PopulateSigna();
                $("#titelModal").html('Add Obat');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });

            function validasi(){
              
 
            }

            $("#btnSave").click(function(e){
                e.preventDefault();
                // validasi();
                if($('#txtKodeObat').val() == ''){
                    alert('Kode Obat harus diisi');
                    $('#txtKodeObat').focus();
                    return; 
                }
 
                if($('#txtNamaObat').val() == ''){
                    alert('Nama Obat harus diisi');
                    $('#txtNamaObat').focus();
                    return; 
                }

                if($('#selKodeSupplier').val() == ''){
                    alert('Kode Supplier harus diisi');
                    $('#selKodeSupplier').focus();
                    return; 
                }
                
                if($('#selKodeSigna').val() == ''){
                    alert('Signa harus diisi');
                    $('#selKodeSigna').focus();
                    return; 
                }

                if($('#txtHargaSatuan').val() == ''){
                    alert('Harga Satuan harus diisi');
                    $('#txtHargaSatuan').focus();
                    return; 
                }
                var model = new Object();
                model.kodeobat = $('#txtKodeObat').val();
                model.namaobat = $('#txtNamaObat').val(); 
                model.kodesupplier = $('#selKodeSupplier').val(); 
                model.kodesigna = $('#selKodeSigna').val(); 
                model.hargasatuan = $('#txtHargaSatuan').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/insertobat.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtKodeObat').focus()
                        }
                        else {
                            loadData();
                            alert('Data Saved Successfully !');
                            $('#myModal').modal('hide');
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })

                $("#txtHargaSatuan").on("keypress keyup blur", function (event) {
                    $(this).val($(this).val().replace(/[^0-9\:]/g,''));
                    debugger;
                    if(event.which == 58)
                    {
                    return true;
                    }
                    if ((event.which != 46 || $(this).val().indexOf(':') != -1) && (event.which < 48 || event.which > 57  )) {
                
                        event.preventDefault();
                    }
                });

              
            });
            
            $("#btnUpdate").click(function(e){
                e.preventDefault();
                // validasi();
                if($('#txtKodeObat').val() == ''){
                    alert('Kode Obat harus diisi');
                    $('#txtKodeObat').focus();
                    return; 
                }
 
                if($('#txtNamaObat').val() == ''){
                    alert('Nama Obat harus diisi');
                    $('#txtNamaObat').focus();
                    return; 
                }

                if($('#selKodeSupplier').val() == ''){
                    alert('Kode Supplier harus diisi');
                    $('#selKodeSupplier').focus();
                    return; 
                }
                
                if($('#selKodeSigna').val() == ''){
                    alert('Signa harus diisi');
                    $('#selKodeSigna').focus();
                    return; 
                }

                if($('#txtHargaSatuan').val() == ''){
                    alert('Harga Satuan harus diisi');
                    $('#txtHargaSatuan').focus();
                    return; 
                }
                var model = new Object();
                model.kodeobat = $('#txtKodeObat').val();
                model.namaobat = $('#txtNamaObat').val();
                model.kodesupplier = $('#selKodeSupplier').val();
                model.kodesigna = $('#selKodeSigna').val(); 
                model.hargasatuan = $('#txtHargaSatuan').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updateobat.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message); 
                        }
                        else {
                            loadData();
                            alert('Data Update Successfully !');
                            $('#myModal').modal('hide');
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })

              
            });
        });
                
        function resetForm() {
            var $form = $('#formInput');
            $form.validate().resetForm();
            $form.find('.form-group').removeClass("state-error");
            $form.find('.form-group').removeClass("state-success");
        }

        function clearData(){ 
            $('#txtKodeObat').val('').prop('readonly', false);
            $('#txtNamaObat').val('');
            $('#selKodeSupplier').val('');
            $('#selKodeSigna').val('');
            $('#txtHargaSatuan').val('');
         }

        function DeleteRecord(kodeobat){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deleteobat.php", 
                data:{kodeobat:kodeobat}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        function PopulateSupplier() {
                debugger;
                 $.ajax({
                    url: url + "page/admin/process/getcombo.php",
                    datatype: 'json',
                    data: {type:'1'},
                    success: function (result) {
                        $('#selKodeSupplier').empty(); 
                        $("#selKodeSupplier").append('<option value="" selected>Selected Supplier</option>');
                        $.each(result, function (i, bind) {
                            debugger
                            for(var x = 0; x < bind.length; x++){
                                $("#selKodeSupplier").append('<option value="' + bind[x].KodeSupplier + '">' + bind[x].NamaSupplier + '</option>');
                            }
                            
                        }); 
                    },
                    error: function (ex) {
                        alert('Failed Supplier');
                    }
                });
            }
            
            function PopulateSigna() {
                 $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/getcombo.php", 
                    datatype: 'json',
                    data: {type:'2'}, 
                    success: function (data) {
                        $('#selKodeSigna').empty();
                        $("#selKodeSigna").append('<option value="" selected>Selected Signa</option>');
                        $.each(data, function (i, bind) {
                            debugger
                            for(var x = 0; x < bind.length; x++){
                                $("#selKodeSigna").append('<option value="' + bind[x].IdSigna + '">' + bind[x].Keterangan + '</option>');
                            }
                        }); 
                    },
                    error: function (ex) {
                        alert('Failed Signa');
                    }
                });
            }
            

        function EditRecord(kodeobat) {
            resetForm();  
            clearData(); 
            PopulateSupplier();
            PopulateSigna();
            $("#titelModal").html('Edit Obat');
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readobat.php",
                    cache: false,
                    data: ({ kodeobat: kodeobat }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtKodeObat").val(obj.KodeObat).prop('readonly', true);
                        $("#txtNamaObat").val(obj.NamaObat);                       
                        $("#selKodeSupplier").val(obj.KodeSupplier).prop('selected', true);                       
                        $("#selKodeSigna").val(obj.IdSigna).prop('selected', true);                       
                        $("#txtHargaSatuan").val(obj.HargaSatuan);                       
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }


    </script>