<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Petugas</h4>
                  <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a>

                  <!-- <div class="table-responsive"> -->
                    <table id="dtpetugas" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th> 
                          <th>Tgl Masuk</th>
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
                                        <label for="txtNIKPetugas">NIK</label>
                                        <input type="text" required class="form-control" id="txtNIKPetugas" name="txtNIKPetugas" placeholder="NIK Petugas" maxlength="20">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNama">Nama</label>
                                        <input type="text" required class="form-control" id="txtNama"  name="txtNama"  placeholder="Nama Lengkap" maxlength="70">
                                    </div>
                                    <div class="form-group">
                                        <label for="selJenisKelamin">Jenis Kelamin</label>
                                        <select class="form-control" required  name="selJenisKelamin" id="selJenisKelamin">
                                            <option value="">Pilih</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="txtTglMasuk">Tgl Masuk</label>
                                        <input type="text" required  class="form-control" id="txtTglMasuk" name="txtTglMasuk" placeholder="Tgl Masuk" maxlength="10">
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
        $('#txtTglMasuk').datepicker({
            dateFormat: 'dd/mm/yy'
        });
    
        var url = "<?= $baseUrl ?>";
      
        function loadData() {
                 $.ajax({
                    url: url + "page/admin/process/readpetugas.php",
                    dataType: "json",
                    data:{nikpetugas:''}
                }).done(function (result) {
                    $("#dtpetugas").DataTable().clear();
                    $("#dtpetugas").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        $(document).ready(function() {
            
          
            loadData();

            $("#dtpetugas").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.NIKPetugas + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.NIKPetugas + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "NIKPetugas", "autoWidth": true, class: "text-left" },
                    { "data": "Nama", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelamin", "autoWidth": true, class: "text-left" }, 
                    { "data": "TglMasuk", "autoWidth": true, class: "text-center" }

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
                
                $('#txtNIKPetugas').val('ss');
                $('#txtNama').val('ssz');
                $('#selJenisKelamin').val('Laki-Laki');
                $('#txtpetugasS').val('dss');
                $('#txtTglMasuk').val('06/11/2023'); 
                $('#btnSave').focus(); 
            });
            
            $("#btnAdd").click(function(){
                clearData(); 
                $("#titelModal").html('Add Petugas');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });

            function validasi(){
               if($('#txtNIKPetugas').val() == ''){
                    alert('NIKPetugas harus diisi');
                    $('#txtNIKPetugas').focus();
                    return; 
                }
 
                if($('#txtNama').val() == ''){
                    alert('Nama harus diisi');
                    $('#txtNama').focus();
                    return; 
                }

                if($('#selJenisKelamin').val() == ''){
                    alert('Jenis Kelamin harus diisi');
                    $('#selJenisKelamin').focus();
                    return; 
                }
                 
                if($('#txtTglMasuk').val() == ''){
                    alert('Tgl Masuk harus diisi');
                    $('#txtTglMasuk').focus();
                    return; 
                }
 
            }

            $("#btnSave").click(function(e){
                e.preventDefault();
                validasi();
                
                var model = new Object();
                model.nikpetugas = $('#txtNIKPetugas').val();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val(); 
                model.tglmasuk = $('#txtTglMasuk').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/insertpetugas.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtNIKPetugas').focus()
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
                model.nikpetugas = $('#txtNIKPetugas').val();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val(); 
                model.tglmasuk = $('#txtTglMasuk').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updatepetugas.php",
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
            $('#txtNIKPetugas').val('').prop('readonly', false);
            $('#txtNama').val('');
            $('#selJenisKelamin').val(''); 
            $('#txtTglMasuk').val('');
        }

        function DeleteRecord(nikpetugas){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deletepetugas.php", 
                data:{nikpetugas:nikpetugas}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        function EditRecord(nikpetugas) {
            resetForm();  
            clearData(); 
            $("#titelModal").html('Edit Petugas');
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readpetugas.php",
                    cache: false,
                    data: ({ nikpetugas: nikpetugas }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtNIKPetugas").val(obj.NIKPetugas).prop('readonly', true);
                        $("#txtNama").val(obj.Nama); 
                        $("#selJenisKelamin").val(obj.JenisKelamin);  
                        $("#txtpetugasS").val(obj.petugasSpesialis);
                        $("#txtTglMasuk").val(obj.TglMasuk);                         
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }


    </script>