    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Dokter</h4>
                  <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a>

                  <!-- <div class="table-responsive"> -->
                    <table id="dtDokter" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Jadwal</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Dokter Spesialis</th>
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
                                        <label for="txtNIK">NIK</label>
                                        <input type="text" required class="form-control" id="txtNIK" name="txtNIK" placeholder="NIK" maxlength="20">
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
                                        <label for="txtDokterS">Dokter Spesialis</label>
                                        <input type="text" required  class="form-control" id="txtDokterS" name="txtDokterS" placeholder="Dokter Spesialis" maxlength="50">
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

    <div class="modal fade"  id="myModalJadwal" tabindex="-1" role="dialog" aria-labelledby="titelModal" aria-modal="true" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable" style="max-width:900px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="titelModalJadwal"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="txtNIKJadwal" name="txtNIKJadwal">

                    <div class="card" id="ViewTblJadwal">
                        <div class="card-body">
                            <div class="form-group text-left">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm" id="btnAddJadwal">Add Jadwal</button>
                            </div>
                            <div class="form-group text-left">
                                <table id="dtJadwalDokter" style="width:100%" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="20%">Action</th>
                                            <th width="20%">Kode Jadwal</th> 
                                            <th width="20%">Hari</th>
                                            <th width="20%">Jam</th>
                                            <th width="20%">Ruangan</th> 
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>      
                            </div>
                        </div>
                    </div>
                    <div class="card" id="ViewInputJadwal">
                        <div class="card-body">
                            <div class="form-group text-left"> 
                                <button type="button" class="btn btn-danger btn-sm" id="btnBackJadwal">Back</button>
                            </div>
                            <div class="form-group">
                                <form class="forms-sample" id="formInputJadwal">
                                    <button type="button" class="btn btn-primary btn-sm" id="btnInputJadwal">Input</button>
                                    <div class="form-group">
                                        <label for="txtKodeJadwal">Kode Jadwal</label>
                                        <input type="text" required  class="form-control" id="txtKodeJadwal" name="txtKodeJadwal" placeholder="Kode Jadwal" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="selHari">Hari</label>
                                        <select class="form-control" required  name="selHari" id="selHari">
                                            <option value="">Pilih</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtJam">Jam</label>
                                        <input type="time" required class="form-control" id="txtJam"  name="txtJam">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtRuangan">Ruangan</label>
                                        <input type="text" required  class="form-control" id="txtRuangan" name="txtRuangan" placeholder="Ruangan" maxlength="10">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary btn-sm" id="btnSaveJadwal">Save</button>
                                        <button type="button" class="btn btn-primary btn-sm" id="btnUpdateJadwal">Update</button> 
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .modal .modal-dialog {
            margin-top: 10px;
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
                    url: url + "page/admin/process/readdokter.php",
                    dataType: "json",
                    data:{nik:''}
                }).done(function (result) {
                    $("#dtDokter").DataTable().clear();
                    $("#dtDokter").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        $(document).ready(function() {
            
          
            loadData();

            $("#dtDokter").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.NIK + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.NIK + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    {
                        "data": "Jadwal", class: "text-center", "render": function (data, type, row) {
                                return '<button class="btn-sm btn-primary" onclick="ViewJadwal(\'' + row.NIK + '\')">Lihat Jadwal</button> &nbsp;'
                        }
                    },
                    { "data": "NIK", "autoWidth": true, class: "text-left" },
                    { "data": "Nama", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelamin", "autoWidth": true, class: "text-left" },
                    { "data": "DokterSpesialis", "autoWidth": true, class: "text-left" },
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
                
                $('#txtNIK').val('ss');
                $('#txtNama').val('ssz');
                $('#selJenisKelamin').val('Laki-Laki');
                $('#txtDokterS').val('dss');
                $('#txtTglMasuk').val('06/11/2023'); 
                $('#btnSave').focus(); 
            });
            
            $("#btnAdd").click(function(){
                clearData(); 
                $("#titelModal").html('Add Dokter');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });

            function validasi(){
               if($('#txtNIK').val() == ''){
                    alert('NIK harus diisi');
                    $('#txtNIK').focus();
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
                
                if($('#txtDokterS').val() == ''){
                    alert('Dokter Spesialis harus diisi');
                    $('#txtDokterS').focus();
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
                model.nik = $('#txtNIK').val();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val();
                model.dokterspesialis = $('#txtDokterS').val();
                model.tglmasuk = $('#txtTglMasuk').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/insertdokter.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtNIK').focus()
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
                model.nik = $('#txtNIK').val();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val();
                model.dokterspesialis = $('#txtDokterS').val();
                model.tglmasuk = $('#txtTglMasuk').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updatedokter.php",
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

             
            $("#dtJadwalDokter").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecordJadwal(\'' + row.KodeJadwal + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecordJadwal(\'' + row.KodeJadwal + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "KodeJadwal", "autoWidth": true, class: "text-left" },
                    { "data": "Hari", "autoWidth": true, class: "text-center" },
                    { "data": "Jam", "autoWidth": true, class: "text-center" },
                    { "data": "Ruangan", "autoWidth": true, class: "text-center" }

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

            $("#btnAddJadwal").click(function(){
                clearDataJadwal(); 
                $("#ViewTblJadwal").hide();
                $("#ViewInputJadwal").show();
                $("#titelModalJadwal").html('Input Jadwal Dokter');
                $("#btnSaveJadwal").show();
                $("#btnUpdateJadwal").hide();
             });

             $("#btnBackJadwal").click(function(){ 
                $("#ViewTblJadwal").show();
                $("#ViewInputJadwal").hide();
                $("#titelModalJadwal").html('Jadwal Dokter'); 
             });

             $("#btnSaveJadwal").click(function(e){
                e.preventDefault();
                validasiJadwal();
                
                var model = new Object();
                model.nik = $('#txtNIKJadwal').val();
                model.kodejadwal = $('#txtKodeJadwal').val();
                model.hari = $('#selHari').val();
                model.jam = $('#txtJam').val();
                model.ruangan = $('#txtRuangan').val();
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/insertjadwal.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#selHari').focus()
                        }
                        else {
                            loadDataJadwal($('#txtNIKJadwal').val());
                            alert('Data Saved Successfully !');
                            $('#ViewTblJadwal').show();
                            $('#ViewInputJadwal').hide();
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })

              
            });
            
            $("#btnUpdateJadwal").click(function(e){
                e.preventDefault();
                validasiJadwal();
                
                var model = new Object();
                model.nik = $('#txtNIKJadwal').val();
                model.kodejadwal = $('#txtKodeJadwal').val();
                model.hari = $('#selHari').val();
                model.jam = $('#txtJam').val();
                model.ruangan = $('#txtRuangan').val();
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updatejadwal.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message); 
                        }
                        else { 
                            loadDataJadwal($('#txtNIKJadwal').val()); 
                            alert('Data Update Successfully !');
                            $('#ViewTblJadwal').show();
                            $('#ViewInputJadwal').hide();
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })

              
            });

            function validasiJadwal(){
                if($('#txtKodeJadwal').val() == ''){
                    alert('Kode Jadwal harus diisi');
                    $('#txtKodeJadwal').focus();
                    return; 
                }

               if($('#selHari').val() == ''){
                    alert('Hari harus diisi');
                    $('#selHari').focus();
                    return; 
                }
 
                if($('#txtJam').val() == ''){
                    alert('Jam harus diisi');
                    $('#txtJam').focus();
                    return; 
                }
                
                if($('#txtRuangan').val() == ''){
                    alert('Ruangan harus diisi');
                    $('#txtRuangan').focus();
                    return; 
                }
 
            }
 
        });
                
        function resetForm() {
            var $form = $('#formInput');
            $form.validate().resetForm();
            $form.find('.form-group').removeClass("state-error");
            $form.find('.form-group').removeClass("state-success");
        }

        function clearData(){ 
            $('#txtNIK').val('').prop('readonly', false);
            $('#txtNama').val('');
            $('#selJenisKelamin').val('');
            $('#txtDokterS').val('');
            $('#txtTglMasuk').val('');
        }

        function DeleteRecord(nik){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deletedokter.php", 
                data:{nik:nik}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        function EditRecord(nik) {
            resetForm();  
            clearData(); 
            $("#titelModal").html('Edit Dokter');
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readdokter.php",
                    cache: false,
                    data: ({ nik: nik }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtNIK").val(obj.NIK).prop('readonly', true);
                        $("#txtNama").val(obj.Nama);
                        $("#selJenisKelamin").val(obj.JenisKelamin);
                        $("#txtDokterS").val(obj.DokterSpesialis);
                        $("#txtTglMasuk").val(obj.TglMasuk);                         
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }

        function EditRecordJadwal(kodejadwal) {
            clearData(); 
            $("#titelModal").html('Edit Jadwal Dokter');
            $("#btnSaveJadwal").hide();
            $("#btnUpdateJadwal").show();
            $("#ViewTblJadwal").hide();
            $("#ViewInputJadwal").show();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readjadwal.php",
                    cache: false,
                    data: ({ nik: '', kodejadwal:kodejadwal }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtKodeJadwal").val(obj.KodeJadwal).prop('readonly', true);
                        $("#selHari").val(obj.Hari);
                        $("#txtJam").val(obj.Jam);
                        $("#txtRuangan").val(obj.Ruangan);
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }

        function ViewJadwal(nik) {
            $("#myModalJadwal").modal(); 
            $("#titelModalJadwal").html('Jadwal Dokter');
            $("#ViewTblJadwal").show();
            $("#ViewInputJadwal").hide();
            $("#txtNIKJadwal").val(nik);
            loadDataJadwal(nik);
        }

            function loadDataJadwal(nik) {
                 $.ajax({
                    url: url + "page/admin/process/readjadwal.php",
                    dataType: "json",
                    data:({nik:nik}), 
                    success: function (result) {
                        $("#dtJadwalDokter").DataTable().clear().draw();
                        $("#dtJadwalDokter").DataTable().rows.add(result.data).draw(false);                      
                    },
                    error: function (xhr){
                        $("#dtJadwalDokter").DataTable().clear().draw();
                    } 
                });
            }
           

            function clearDataJadwal(){ 
                $('#txtKodeJadwal').val('').prop('readonly', false);
                $('#selHari').val('');
                $('#txtJam').val('');
                $('#txtRuangan').val('');
            }
            
            function DeleteRecordJadwal(kodejadwal){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deletejadwal.php", 
                data:{kodejadwal:kodejadwal}
            }).done(function(data){
                loadDataJadwal($("#txtNIKJadwal"));
                alert('Data berhasil dihapus')
            });
        }
    </script>