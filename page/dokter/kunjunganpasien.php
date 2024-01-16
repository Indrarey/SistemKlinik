    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Kunjungan Pasien</h3>
                     

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtTglPasien">Filter Tanggal</label> 
                                <input type="text" value="<?= date('d/m/Y') ?>" class="form-control" id="txtTglPasien" name="txtTglPasien" placeholder="Filter Tanggal" maxlength="10">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="table-responsive-lg"> -->

                        <table id="dtRekamMedisPasien" style="width:100%"  class="table table-striped">
                        <thead>
                            <tr>
                            <th>Action</th>
                            <th>No Antrian</th>
                            <th>Rm Pasien</th>
                            <th>Nama</th>
                            <th>Tgl Lahir</th>  
                            <th>Jenis Kelamin</th> 
                            <th>Alamat</th>
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
                                        <label for="txtNoAntrian">No Antrian</label>
                                        <input type="hidden" class="form-control" id="txtIdKunjungan"  name="txtIdKunjungan"  maxlength="10">
                                        <input type="text" required class="form-control" id="txtNoAntrian"  name="txtNoAntrian"  placeholder="No Antrian" maxlength="10">
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
                                        <label for="txtNoHP">No HP</label>
                                        <input type="text" class="form-control" id="txtNoHP" name="txtNoHP" placeholder="No HP" maxlength="13">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNoKTP">No KTP</label>
                                        <input type="text" class="form-control" id="txtNoKTP" name="txtNoKTP" placeholder="No KTP" maxlength="20">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtPenjamin">Penjamin</label>
                                        <input type="text" class="form-control" id="txtPenjamin" name="txtPenjamin" value="Umum"  placeholder="Penjamin" maxlength="20">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNoRekamMedis">No Rekam Medis</label>
                                        <input type="text" class="form-control" id="txtNoRekamMedis" name="txtNoRekamMedis" placeholder="No Rekam Medis" maxlength="30">
                                    </div>
                                    <div class="form-group">
                                    <label for="txtTglLahir">Tgl Lahir</label>
                                        <input type="text"  class="form-control" id="txtTglLahir" name="txtTglLahir" placeholder="Tgl Lahir" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtAlamat">Alamat</label>
                                        <textarea class="form-control" id="txtAlamat" name="txtAlamat" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary btn-sm" id="btnSave">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModalKunjungan" tabindex="-1" role="dialog" aria-labelledby="titelModalKunjungan" aria-modal="true" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable" style="max-width: 900px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="titelModalKunjungan"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-bottom:30px">
                        <div class="row container">
                            <div class="col-sm-4"> 
                                    
                                    <div class="form-group">
                                        <label for="txtNoAntrianKunjungan">No Antrian</label>
                                        <input type="text" class="form-control" id="txtNoAntrianKunjungan" name="txtNoAntrianKunjungan" readonly>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="txtRmPasienKunjungan">No Rm Pasien</label>
                                        <input type="text" class="form-control" id="txtRmPasienKunjungan" name="txtRmPasienKunjungan" readonly>
                                    </div> 
                                  
                            </div>

                            <div class="col-sm-4">
                                     <div class="form-group">
                                        <label for="txtNamaKunjungan">Nama Pasien</label>
                                        <input type="text" class="form-control" id="txtNamaKunjungan" name="txtNamaKunjungan" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtTglDaftarKunjungan">Tgl Kunjungan</label>
                                        <input type="text" class="form-control" id="txtTglDaftarKunjungan" name="txtTglDaftarKunjungan" readonly>
                                    </div>
                                
                                 
                            </div>

                            <div class="col-sm-4">                                 
                                
                                    <div class="form-group">
                                        <label for="txtNoHPKunjungan">No HP</label>
                                        <input type="text" class="form-control" id="txtNoHPKunjungan" name="txtNoHPKunjungan" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="txtTglLahirKunjungan">Tgl Lahir</label>
                                        <input type="text" class="form-control" id="txtTglLahirKunjungan" name="txtTglLahirKunjungan" readonly>
                                    </div>  
                            </div>

                        </div>
                     
                        <div id="DataRekamMedis">
                            <div class="row container">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-sm" id="btnInputResume" >Input Resume</button>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-sm-12">
                                        <table id="dtRekamMedis" style="width:100%"  class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>Action</th>
                                            <th>Cek Obat</th>
                                            <th>Tgl Kunjungan</th>
                                            <th>No Antrian</th>
                                            <th>Diagnosa</th>
                                            <th>Tekanan Darah</th>
                                            <th>Berat</th> 
                                            </tr>
                                        </thead>
                                    <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="InputRekamMedis">
                            <form class="forms-sample" id="formInputRekamMedis">
                                <div class="row container">
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtDiagnosa">Diagnosa</label>
                                                <input type="text" class="form-control" id="txtDiagnosa" name="txtDiagnosa">
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtBerat">Berat</label>
                                                <input type="text" class="form-control" id="txtBerat" name="txtBerat">
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label for="txtTekananDarah">Tekanan Darah</label>
                                                <input type="text" class="form-control" id="txtTekananDarah" name="txtTekananDarah">
                                            </div> 
                                    </div>
                               
                                </div>
                                
                                <div class="row container">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-sm" id="btnSaveRekamMedis">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="btnBackRekamMedis">Back</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="InputAssessment">
                        <form class="forms-sample" id="formInputInputObat">
                                <div class="row container">
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                            </div> 
                                    </div>   
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label>&nbsp;</label><br>
                                                <button type="button" class="btn btn-primary btn-sm" id="btnTambahObat">Tambah Obat</button>
                                                <button type="button" class="btn btn-danger btn-sm" id="btnClearObat">Clear Obat</button>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="selObat1">Obat</label>
                                                <input type="hidden" class="form-control" id="txtIdRekamMedis" name="txtIdRekamMedis">
                                                <select class="form-control" required onchange="changeObat(this)"  name="selObat1" id="selObat1"> 
                                                </select>
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtSigna1">Signa</label>
                                                <input type="text" readonly class="form-control" id="txtSigna1" name="txtSigna1">
                                                <input type="hidden" class="form-control" id="txtJumlahObat" name="txtJumlahObat">
                                            </div> 
                                    </div>   
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label for="txtJumlahObatItem1">Jumlah Obat</label> 
                                                <input type="text" class="numberonly form-control" id="txtJumlahObatItem1" maxlength="4"  name="txtJumlahObatItem1">
                                        </div> 
                                    </div>
                                </div>
                                
                                <div id="tampilTambahObat">
                                </div> 
                                
                                <div class="row container">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-sm" id="btnSaveInputObat">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="btnBackInputObat">Back</button>
                                    </div>
                                </div>
                            </form>
  
                        </div>
                        <div id="CekAssessment">
                        <form class="forms-sample" id="formInputCekObat">
                                                              
                                <div id="tampilObat">
                                </div> 
                                
                                <div class="row container">
                                    <div class="col-sm-4"> 
                                        <button type="button" class="btn btn-danger btn-sm" id="btnBackCekObat">Back</button>
                                    </div>
                                </div>
                            </form>
  
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
        /* div.dataTables_wrapper {
            width: 1000px;
            /* margin: 0 auto; */
        /* } */ */
    </style>
    <script>
        $('#txtTglPasien').datepicker({
            dateFormat: 'dd/mm/yy',
            onSelect: function() {  
                $(this).change();
            }
        });

        $('#txtTglKunjungan').datepicker({
            dateFormat: 'dd/mm/yy'
        });

        var url = "<?= $baseUrl ?>";

        function loadData(tglkunjungan) {
                 $.ajax({
                    url: url + "page/dokter/process/readkunjungan.php",
                    dataType: "json",
                    data:{tglkunjungan:tglkunjungan}
                }).done(function (result) {
                    $("#dtRekamMedisPasien").DataTable().clear();
                    $("#dtRekamMedisPasien").DataTable().rows.add(result.data).draw(false);

                }).fail(function (jqXHR, textStatus, errorThrown) {
                    $("#dtRekamMedisPasien").DataTable().clear().draw();
                });
            }
        $(document).ready(function() {
         
            // function setEvent(){
                $(".numberonly").on("keypress keyup blur", function (event) {
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
            // }

            loadData($("#txtTglPasien").val());

            $("#dtRekamMedisPasien").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<button class="btn-sm btn-primary" onclick="ViewResume(\'' + row.RmPasien + '\', \'' + row.IdKunjungan + '\', \'' + row.NoAntrian + '\')">Assessment</button> &nbsp;'
                        }
                    },
                    { "data": "NoAntrian", "autoWidth": true, class: "text-left" },
                    { "data": "RmPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NamaLengkap", "autoWidth": true, class: "text-left" },
                    { "data": "TglLahirPasien", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelaminPasien", "autoWidth": true, class: "text-left" },
                    { "data": "AlamatPasien", "autoWidth": true, class: "text-left" },
                ],
                filter: false,
                info: true,
                ordering: true,
                processing: true,
                retrieve: true,
                bLengthChange: false,
                lengthMenu: [[15, 20, -1], [15, 20, "All"]],
                bFilter: false,
                bSort: true,
                bPaginate: true,
                scrollX: true,
                scrollX: "100%",
                autoWidth: true,
                fixedColumns: {
                        left: 3
                },
            });


            $("#txtTglPasien").change(function(){
                loadData($("#txtTglPasien").val());
            });


            $("#btnInput").click(function(){
                $('#txtNoAntrian').val('A01');
                $('#txtNama').val('ADA');
                $('#selJenisKelamin').val('Laki-Laki');
                $('#txtAlamat').val('jl tanah koja');
                $('#txtTglLahir').val('');
                $('#txtNoKTP').val('');
             });  
              

            $("#btnSave").click(function(e){
                e.preventDefault();
                validasi();

                var model = new Object();
                model.noantrian = $('#txtNoAntrian').val();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val();
                model.nohp = $('#txtNoHP').val();
                model.noktp = $('#txtNoKTP').val();
                model.penjamin = $('#txtPenjamin').val();
                model.tgllahir = $('#txtTglLahir').val();
                model.alamat = $('#txtAlamat').val();
                model.norekammedis = $('#txtNoRekamMedis').val();

                $.ajax({
                    type: "POST",
                    url: url + "page/petugas/process/insertpendaftar.php",
                    data: model,
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtNama').focus()
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


            $("#dtRekamMedis").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecordKunjungan(\'' + row.IdKunjungan + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp;'
                        }
                    },
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {''
                            if(row.JumlahObat == '0'){    
                                return '<a href="#" class="btn btn-primary btn-sm" onclick="CekObat(\'' + row.IdRekamMedis + '\')"><i class="mdi mdi-lead-eye"></i> Input</a> &nbsp;'
                            }else{
                                return '<a href="#" class="btn btn-primary btn-sm" onclick="CekObatData(\'' + row.IdRekamMedis + '\')"><i class="mdi mdi-lead-eye"></i> Cek</a> &nbsp;'
                            }    
                        }
                    },
                    { "data": "TglKunjungan", "autoWidth": true, class: "text-left" },
                    { "data": "NoAntrian", "autoWidth": true, class: "text-center" },
                    { "data": "Diagnosa", "autoWidth": true, class: "text-center" },
                    { "data": "TekananDarah", "autoWidth": true, class: "text-center" },
                    { "data": "Berat", "autoWidth": true, class: "text-center" }

                ],
                filter: false,
                info: true,
                ordering: false,
                processing: true,
                retrieve: true,
                bLengthChange: false,
                lengthMenu: [[15, 20, -1], [15, 20, "All"]],
                bFilter: false,
                bSort: true,
                bPaginate: true,
                scrollX: true,
                scrollX: "100%",
                scrollY: true,
                scrollY: "100%",
                autoWidth: true,
            });
            $("#btnInputResume").click(function(){
                clearDataRekamMedis();
                $("#DataRekamMedis").hide();
                $("#InputRekamMedis").show();
                $("#InputAssessment").hide();                
                $("#CekAssessment").hide();    
                $("#titelModalKunjungan").html('Input Resume'); 
             });

             $("#btnBackRekamMedis").click(function(){
                clearDataRekamMedis();
                $("#DataRekamMedis").show();
                $("#InputRekamMedis").hide(); 
                $("#InputAssessment").hide();                
                $("#CekAssessment").hide();    
                $("#titelModalKunjungan").html('Resume');
             });

             $("#btnSaveRekamMedis").click(function(e){
                e.preventDefault(); 
                
                if($('#txtDiagnosa').val() == ''){
                    alert('Diagnosa harus diisi');
                    $('#txtDiagnosa').focus();
                    return;
                }

               if($('#txtBerat').val() == ''){
                    alert('Berat harus diisi');
                    $('#txtBerat').focus();
                    return;
                }

                if($('#txtTekananDarah').val() == ''){
                    alert('Tekanan Darah harus diisi');
                    $('#txtTekananDarah').focus();
                    return;
                }

                var model = new Object();
                model.rmpasien = $('#txtRmPasienKunjungan').val();
                model.tglkunjungan = $('#txtTglKunjungan').val();
                model.noantrian = $('#txtNoAntrianKunjungan').val();
                model.diagnosa = $('#txtDiagnosa').val();
                model.tekanandarah = $('#txtTekananDarah').val();
                model.berat = $('#txtBerat').val();
                model.idkunjungan = $('#txtIdKunjungan').val();
                
                $.ajax({
                    type: "POST",
                    url: url + "page/dokter/process/insertrekammedis.php",
                    data: model,
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtDiagnosa').focus()
                        }
                        else {
                            $("#btnInputResume").hide();
                            loadDataRekamMedis($('#txtRmPasienKunjungan').val());
                            alert('Data Saved Successfully !');
                            $('#DataRekamMedis').show();
                            $('#InputRekamMedis').hide();
                            $('#InputAssessment').hide();
                            $("#CekAssessment").hide();    
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })


            });

            $("#btnUpdateJadwal").click(function(e){
                e.preventDefault(); 
                if($('#txtDiagnosa').val() == ''){
                    alert('Diagnosa harus diisi');
                    $('#txtDiagnosa').focus();
                    return;
                }

               if($('#txtBerat').val() == ''){
                    alert('Berat harus diisi');
                    $('#txtBerat').focus();
                    return;
                }

                if($('#txtTekananDarah').val() == ''){
                    alert('Tekanan Darah harus diisi');
                    $('#txtTekananDarah').focus();
                    return;
                }
                var model = new Object();
                model.rmpasien = $('#txtRmPasienKunjungan').val();
                model.tglkunjungan = $('#txtTglKunjungan').val();
                model.noantrian = $('#txtNoAntrianKunjungan').val();
                model.diagnosa = $('#txtDiagnosa').val();
                model.tekanandarah = $('#txtTekananDarah').val();
                model.berat = $('#txtBerat').val();

                $.ajax({
                    type: "POST",
                    url: url + "page/dokter/process/updaterekammedis.php",
                    data: model,
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                        }
                        else {
                            $("#btnInputResume").hide();
                            loadDataJadwal($('#txtNIKJadwal').val());
                            alert('Data Update Successfully !');
                            $('#DataRekamMedis').show();
                            $('#InputRekamMedis').hide();
                            $('#InputAssessment').hide();
                            $("#CekAssessment").hide();   
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })


            });
 
            
            $("#btnTambahObat").click(function(e){
                $("#btnClearObat").show();
                
                var jumlah = $("#txtJumlahObat").val(); 
                jumlah = parseInt(jumlah) + 1 ;
                $("#txtJumlahObat").val(jumlah);
                var tampil = `
                        <div class="row container" id="TampilObat`+jumlah+`">
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="selObat`+ jumlah +`">Obat</label>
                                                <select class="form-control" required  name="selObat`+ jumlah +`" onchange="changeObat(this)" id="selObat`+ jumlah +`"> 
                                                </select>
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtSigna`+ jumlah +`">Signa</label>
                                                <input type="text" readonly class="form-control" id="txtSigna`+ jumlah +`" name="txtSigna`+ jumlah +`">
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label for="txtJumlahObatItem`+ jumlah +`">Jumlah Obat</label> 
                                                <input type="text" class="numberonly form-control" id="txtJumlahObatItem`+ jumlah +`" maxlength="4"  name="txtJumlahObatItem`+ jumlah +`">
                                        </div> 
                                    </div>
                           
                        </div> `;
                $("#tampilTambahObat").append(tampil);

                // setEvent();
                PopulateObat(jumlah);
            });
            
            $("#btnClearObat").click(function(e){
                var jumlah = $("#txtJumlahObat").val();
                $("#TampilObat"+jumlah).remove();
                jumlah = parseInt(jumlah) - 1;
                $("#txtJumlahObat").val(jumlah);
                if(jumlah == 1){
                    $("#btnClearObat").hide();
                }
            });

            $("#btnBackInputObat").click(function(e){
                $('#DataRekamMedis').show();
                $('#InputRekamMedis').hide();
                $('#InputAssessment').hide();
                $("#CekAssessment").hide();    
            });
            $("#btnBackCekObat").click(function(e){
                $('#DataRekamMedis').show();
                $('#InputRekamMedis').hide();
                $('#InputAssessment').hide();
                $("#CekAssessment").hide();    
            });
            $("#btnSaveInputObat").click(function(e){
                e.preventDefault();
                var jumlah = $("#txtJumlahObat").val();
                for(var i=1; i <= jumlah; i++)
                {
                    if($('#selObat' + i).val() == ''){
                        alert('Obat harus diisi');
                        $('#selObat' + i).focus();
                        return;
                    }

                    if($('#txtJumlahObatItem' + i).val() == ''){
                        alert('Jumlah Obat harus diisi');
                        $('#txtJumlahObatItem' + i).focus();
                        return;
                    }
                }
                
                var model = new Object();
                for(var i=1; i <= jumlah; i++)
                {                  
                    model['kodeobat' + i] = $('#selObat' + i).val();
                    model['jumlahobatitem' + i] = $('#txtJumlahObatItem' + i).val();
                }
                model.jumlahobat = jumlah;
                model.idrekammedis = $('#txtIdRekamMedis').val();
                 
                
                $.ajax({
                    type: "POST",
                    url: url + "page/dokter/process/insertobatdiagnosa.php",
                    data: model,
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#selObat1').focus()
                        }
                        else {
                            loadDataRekamMedis($('#txtRmPasienKunjungan').val());
                            alert('Data Saved Successfully !');
                            $('#DataRekamMedis').show();
                            $('#InputRekamMedis').hide();
                            $('#InputAssessment').hide();
                            $("#CekAssessment").hide();    
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })

            });

            
        });

        function changeObat(e) {
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readobat.php",
                    datatype: 'json',
                    data:{kodeobat:e.value},
                    success: function (data) {
                        var obj =  data.data[0];
                        
                        $("#txtSigna" + e.id.substr(7)).val(obj.Signa);
                    },
                    error: function (ex) {
                        alert('Failed Obat' + e.id.substr(7));
                    }
            });
        }

        function PopulateObat(jumlah) {
                 $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readobat.php",
                    datatype: 'json',
                    data:{kodeobat:''},
                    success: function (data) {
                        $('#selObat' + jumlah).empty();  
                        $("#selObat" + jumlah).append('<option value="" selected>Fill Selected</option>');
                        $.each(data, function (i, bind) {
                            debugger
                            for(var x = 0; x < bind.length; x++){
                                $("#selObat" + jumlah).append('<option value="' + bind[x].KodeObat + '">' + bind[x].NamaObat + '</option>');
                            }
                        }); 
                    },
                    error: function (ex) {
                        alert('Failed Obat' + jumlah);
                    }
                });
            }

        function clearData(){
            $('#txtNoAntrian').val('');
            $('#txtNama').val('');
            $('#selJenisKelamin').val('');
            $('#txtAlamat').val('');
            $('#txtTglLahir').val('');
            $('#txtNoKTP').val('');
        }


        function ViewResume(rmPasien, idKunjungan, noAntrian)
        {
            $("#myModalKunjungan").modal();
            $("#titelModalKunjungan").html('Resume');
            $("#DataRekamMedis").show();
            $("#InputRekamMedis").hide();
            $('#InputAssessment').hide();
            $("#CekAssessment").hide();    
            $("#txtIdKunjungan").val(idKunjungan);
            $("#txtNoAntrianKunjungan").val(noAntrian);
            $.ajax({
                    type: "GET",
                    url: url + "page/dokter/process/readpendaftar.php",
                    cache: false,
                    data: ({ idkunjungan: idKunjungan }),
                    success: function (data) {

                        var obj =  data.data[0];

                        $("#txtNoPasienKunjungan").val(obj.NoAntrian);
                        $("#txtRmPasienKunjungan").val(obj.RmPasien);
                        $("#txtNamaKunjungan").val(obj.NamaLengkap);
                        $("#txtAlamatKunjungan").val(obj.AlamatPasien).prop("disable", true);
                        $("#txtTglLahirKunjungan").val(obj.TglLahirPasien);
                        $("#txtNoHPKunjungan").val(obj.NoHP);
                        $("#txtTglDaftarKunjungan").val(obj.TglKunjungan);

                        if(obj.JumlahRekam == '1'){
                            $("#btnInputResume").hide();
                        }else{
                            $("#btnInputResume").show();     
                        }
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })


            loadDataRekamMedis(rmPasien);
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

        // function ViewJadwal(nik) {
        //     $("#myModalJadwal").modal();
        //     $("#titelModalJadwal").html('Jadwal Dokter');
        //     $("#ViewTblJadwal").show();
        //     $("#ViewInputJadwal").hide();
        //     $("#txtNIKJadwal").val(nik);
        //     loadDataJadwal(nik);
        // }

            function loadDataRekamMedis(rmpasien) {
                 $.ajax({
                    url: url + "page/dokter/process/readrekammedis.php",
                    dataType: "json",
                    data:({rmpasien:rmpasien}),
                    success: function (result) {
                        debugger;
                        $("#dtRekamMedis").DataTable().clear().draw();
                        $("#dtRekamMedis").DataTable().rows.add(result.data).draw(false);
                    },
                    error: function (xhr){
                        $("#dtRekamMedis").DataTable().clear().draw();
                    }
                });
            }

            function CekObat(idkunjungan){ 
                $("#DataRekamMedis").hide();
                $("#InputRekamMedis").hide();
                $("#InputAssessment").show();    
                $("#CekAssessment").hide();    
                $("#btnClearObat").hide();    
                $("#txtJumlahObat").val('1');    
                $("#txtIdRekamMedis").val(idkunjungan);   
                clearDataObat();
                PopulateObat(1);           
                $("#titelModalKunjungan").html('Input Obat'); 
                
            }

            function CekObatData(idkunjungan){ 
                $("#DataRekamMedis").hide();
                $("#InputRekamMedis").hide();
                $("#InputAssessment").hide();    
                $("#CekAssessment").show();        
                $("#tampilObat").empty();        
                $("#txtIdRekamMedis").val(idkunjungan);   
                       
                $("#titelModalKunjungan").html('Cek Obat'); 
                loadCekObat();
            }

            function loadCekObat(){ 
                $.ajax({
                    type: "GET",
                    url: url + "page/dokter/process/readassessment.php",
                    data: {idrekammedis:$('#txtIdRekamMedis').val()},
                    dataType: "json",
                    success: function (data) {
                        debugger;
 
                        $.each(data, function (i, bind) {
                            debugger
                            for(var x = 0; x < bind.length; x++){
                            var row = x + 1;
                            var tampil = `
                                <div class="row container" id="TampilObat`+row+`">
                                            <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="selObat`+ row +`">Obat</label>
                                                        
                                                        <input type="text" readonly class="form-control" id="txtObat`+ row +`" value = "${bind[x].NamaObat}" name="txtSigna`+ row +`">
                                                    </div> 
                                            </div>
                                            <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="txtSigna`+ row +`">Signa</label>
                                                        <input type="text" readonly class="form-control" id="txtSigna`+ row +`"  value = "${bind[x].SignaDesc}" name="txtSigna`+ row +`">
                                                    </div> 
                                            </div>  
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                        <label for="txtJumlahObatItem`+ row +`">Jumlah Obat</label> 
                                                        <input type="text" readonly class="form-control numberonly" id="txtJumlahObatItem`+ row +`" value = "${bind[x].JumlahObat}" maxlength="4"  name="txtJumlahObatItem`+ row +`">
                                                </div> 
                                            </div>
                                </div> `;
                            
                            $("#tampilObat").append(tampil);
                            } 
                        }); 

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })


            }
            
            function clearDataObat(){ 
                $('#txtSigna1').val(''); 
                $('#tampilTambahObat').empty(); 
            }

            function clearDataRekamMedis(){ 
                $('#txtDiagnosa').val('');
                $('#txtTekananDarah').val(''); 
                $('#txtBerat').val(''); 
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