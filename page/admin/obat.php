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
                                <button type="button" class="btn btn-primary btn-sm" id="btnInput">Input</button>

                                    <div class="form-group">
                                        <label for="txtKodeObat">Kode Obat</label>
                                        <input type="text" required class="form-control" id="txtKodeObat" name="txtKodeObat" placeholder="Kode Obat" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNamaObat">Nama Obat</label>
                                        <input type="text" required class="form-control" id="txtKodeObat"  name="txtKodeObat"  placeholder="Nama Obat" maxlength="70">
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
                    data:{nik:''}
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
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.NIK + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.NIK + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "KodeObat", "autoWidth": true, class: "text-left" },
                    { "data": "NamaObat", "autoWidth": true, class: "text-left" },

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

         
            $("#btnInput").click(function(){
                
                $('#txtKodeObat').val('ss');
                $('#txtNamaObat').val('ssz');
                $('#btnSave').focus(); 
            });
            
            $("#btnAdd").click(function(){
                clearData(); 
                $("#titelModal").html('Add Obat');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });

            function validasi(){
               if($('#txtKodeObat').val() == ''){
                    alert('Kode Obat harus diisi');
                    $('#txtKodeObat').focus();
                    return; 
                }
 
                if($('#txtNama').val() == ''){
                    alert('Nama Obat harus diisi');
                    $('#txtNama').focus();
                    return; 
                }
 
            }

            $("#btnSave").click(function(e){
                e.preventDefault();
                validasi();
                
                var model = new Object();
                model.kodeobat = $('#txtKodeObat').val();
                model.namaobat = $('#txtNamaObat').val(); 
 
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

              
            });
            
            $("#btnUpdate").click(function(e){
                e.preventDefault();
                validasi();
                
                var model = new Object();
                model.kodeobat = $('#txtKodeObat').val();
                model.namaobat = $('#txtNamaObat').val();
 
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
        }

        function DeleteRecord(nik){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deleteobat.php", 
                data:{nik:nik}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        function EditRecord(nik) {
            resetForm();  
            clearData(); 
            $("#titelModal").html('Edit Obat');
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readobat.php",
                    cache: fal
                    
                    se,
                    data: ({ kodeobat: kodeobats }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtKodeObat").val(obj.KodeObat).prop('readonly', true);
                        $("#txtNamaObat").val(obj.NamaObat);                       
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }


    </script>