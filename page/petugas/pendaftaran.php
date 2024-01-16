<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Pendaftaran Pasien</h3>
                    <!-- <div class="row">
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="txtTglKunjungan" name="txtTglKunjungan" placeholder="Tgl Kunjungan" maxlength="10">
                        </div>
                    </div>  -->

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtCekPasien">NoRekam Medis/Cek Nama/No KTP Pendaftar</label>
                                <input type="text" class="form-control" id="txtCekPasien" name="txtCekPasien" placeholder="Cek Pasien" maxlength="90">
                            </div>
                            <div class="form-group">
                                 <button class="btn btn-primary" id="btnTambahPendaftar">Tambah Pasien Baru</button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="table-responsive-lg"> -->

                        <table id="dtPendaftaran" style="width:100%"  class="table table-striped">
                        <thead>
                            <tr>
                            <th>Action</th>
                            <th>No Rm Pasien</th>
                            <th>Nama</th>
                            <th>No Identitas</th>
                            <th>Jenis Kelamin</th>
                            <th>No HP</th>
                            <th>Alamat</th> 
                            <th>Tgl Lahir</th>
                            <th>Tgl Daftar</th>
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
       <div class="modal-dialog modal-dialog-scrollable" style="max-width: 800px;" role="document">
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
                                        <label for="txtRmPasienKunjungan">No Rm Pasien</label>
                                        <input type="text" class="form-control" id="txtRmPasienKunjungan" name="c" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNamaKunjungan">Nama Pasien</label>
                                        <input type="text" class="form-control" id="txtNamaKunjungan" name="txtNamaKunjungan" readonly>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtTglLahirKunjungan">Tgl Lahir</label>
                                        <input type="text" class="form-control" id="txtTglLahirKunjungan" name="txtTglLahirKunjungan" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNoHPKunjungan">No HP</label>
                                        <input type="text" class="form-control" id="txtNoHPKunjungan" name="txtNoHPKunjungan" readonly>
                                    </div>


                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                        <label for="txtTglDaftarKunjungan">Tgl Daftar</label>
                                        <input type="text" class="form-control" id="txtTglDaftarKunjungan" name="txtTglDaftarKunjungan" readonly>
                                    </div>
                                <div class="form-group">
                                        <label for="txtAlamatKunjungan">Alamat</label>
                                        <textarea class="form-control" readonly name="txtAlamatKunjungan" id="txtAlamatKunjungan" row="5"></textarea>
                                </div>

                            </div>

                        </div>
                     
                        <div id="DataKunjungan">
                            <div class="row container">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-sm" id="btnInputKunjungan" >Input Kunjungan</button>
                                    <button type="button" class="btn btn-success btn-sm" id="btnCetakKartu" >Cetak Kartu Pasien</button>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-sm-12">
                                        <table id="dtKunjungan" style="width:100%"  class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>Action</th>
                                            <th>Tgl Kunjungan</th>
                                            <th>No Antrian</th>
                                            <th>Penjamin</th>
                                            <th>Status</th>
                                            </tr>
                                        </thead>
                                    <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="InputKunjungan">
                            <form class="forms-sample" id="formInputKunjungan">
                                <div class="row container">
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtTglKunjungan">Tgl Kunjungan</label>
                                                <input type="text" class="form-control" id="txtTglKunjungan" name="txtTglKunjungan">
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtNoAntrianKunjungan">No Antrian</label>
                                                <input type="text" class="form-control" id="txtNoAntrianKunjungan" name="txtNoAntrianKunjungan">
                                            </div> 
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label for="txtPenjaminKunjungan">Penjamin</label>
                                                <select class="form-control" name="txtPenjaminKunjungan" id="txtPenjaminKunjungan">
                                                    <option value="Umum" selected>Umum</option>
                                                </select> 
                                            </div> 
                                    </div>
                                </div>
                                
                                <div class="row container">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-sm" id="btnSaveKunjungan">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="btnBackKunjungan">Back</button>
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
        } */
    </style>
    <script>
        $('#txtTglLahir').datepicker({
            dateFormat: 'dd/mm/yy'
        });

        $('#txtTglKunjungan').datepicker({
            dateFormat: 'dd/mm/yy'
        });

        var url = "<?= $baseUrl ?>";

        function loadData(cekpasien) {
                 $.ajax({
                    url: url + "page/petugas/process/readpendaftar.php",
                    dataType: "json",
                    data:{cekpasien:cekpasien}
                }).done(function (result) {
                    $("#dtPendaftaran").DataTable().clear();
                    $("#dtPendaftaran").DataTable().rows.add(result.data).draw(false);

                }).fail(function (jqXHR, textStatus, errorThrown) {
                    $("#dtPendaftaran").DataTable().clear().draw();
                });
            }
        $(document).ready(function() {

            $("#btnCetakKartu").click(function(e){
                
                window.open('page/petugas/cetakkartu.php','_blank');
            });

            loadData('');

            $("#dtPendaftaran").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<button class="btn-sm btn-primary" onclick="ViewKunjungan(\'' + row.RmPasien + '\')">Cek Kunjungan</button> &nbsp;'
                        }
                    },
                    { "data": "RmPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NamaLengkap", "autoWidth": true, class: "text-left" },
                    { "data": "NoIdentitas", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelaminPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NoHP", "autoWidth": true, class: "text-left" },
                    { "data": "AlamatPasien", "autoWidth": true, class: "text-left" },
                    { "data": "TglLahirPasien", "autoWidth": true, class: "text-left" }, 
                    { "data": "TglDaftar", "autoWidth": true, class: "text-center" }

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


            $("#txtCekPasien").keyup(function(){
                loadData($("#txtCekPasien").val());
            });


            $("#btnInput").click(function(){
                $('#txtNoAntrian').val('A01');
                $('#txtNama').val('ADA');
                $('#selJenisKelamin').val('Laki-Laki');
                $('#txtAlamat').val('jl tanah koja');
                $('#txtTglLahir').val('');
                $('#txtNoKTP').val('');
             });


            $("#btnTambahPendaftar").click(function(){
                clearData();
                $("#titelModal").html('Tambah Pasien Baru');
                $("#btnSave").show();
                $("#myModal").modal();

             });

            function validasi(){ 

                


            }

            $("#btnSave").click(function(e){
                e.preventDefault();
               
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

                if($('#txtNoHP').val() == ''){
                    alert('No HP harus diisi');     
                    $('#txtNoHP').focus();
                    return;
                }


                if($('#txtNoKTP').val() == ''){
                    alert('No KTP harus diisi');
                    $('#txtNoKTP').focus();
                    return;
                }

                if($('#txtTglLahir').val() == ''){
                    alert('Tgl Lahir harus diisi');
                    $('#txtTglLahir').focus();
                    return;
                }

                if($('#txtAlamat').val() == ''){
                    alert('Alamat harus diisi');
                    $('#txtAlamat').focus();
                    return;
                }

                var model = new Object();
                model.nama = $('#txtNama').val();
                model.jeniskelamin = $('#selJenisKelamin').val();
                model.nohp = $('#txtNoHP').val();
                model.noktp = $('#txtNoKTP').val();
                model.tgllahir = $('#txtTglLahir').val();
                model.alamat = $('#txtAlamat').val(); 

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
                            loadData($("#txtCekPasien").val());
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


            $("#dtKunjungan").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecordKunjungan(\'' + row.IdKunjungan + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp;'
                        }
                    },
                    { "data": "TglKunjungan", "autoWidth": true, class: "text-left" },
                    { "data": "NoAntrian", "autoWidth": true, class: "text-center" },
                    { "data": "Penjamin", "autoWidth": true, class: "text-center" },
                    { "data": "Status", "autoWidth": true, class: "text-center" },
                    // { "data": "Dokter Check Up", "autoWidth": true, class: "text-center" }

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

            $("#btnInputKunjungan").click(function(){
                clearDataKunjungan();
                $("#DataKunjungan").hide();
                $("#InputKunjungan").show();
                $("#titelModalKunjungan").html('Input Kunjungan'); 
             });

             $("#btnBackKunjungan").click(function(){
                clearDataKunjungan();
                $("#DataKunjungan").show();
                $("#InputKunjungan").hide();
                $("#titelModalKunjungan").html('Rekap Kunjungan');
             });

             $("#btnSaveKunjungan").click(function(e){
                e.preventDefault(); 
                if($('#txtTglKunjungan').val() == ''){
                    alert('Tgl Kunjungan harus diisi');
                    $('#txtTglKunjungan').focus();
                    return;
                }

               if($('#txtNoAntrianKunjungan').val() == ''){
                    alert('No Antrian harus diisi');
                    $('#txtNoAntrianKunjungan').focus();
                    return;
                }

                if($('#txtPenjaminKunjungan').val() == ''){
                    alert('Penjamin harus diisi');
                    $('#txtPenjaminKunjungan').focus();
                    return;
                }
                var model = new Object();
                model.rmpasien = $('#txtRmPasienKunjungan').val();
                model.tglkunjungan = $('#txtTglKunjungan').val();
                model.noantrian = $('#txtNoAntrianKunjungan').val();
                model.penjamin = $('#txtPenjaminKunjungan').val();
                
                $.ajax({
                    type: "POST",
                    url: url + "page/petugas/process/insertkunjungan.php",
                    data: model,
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtTglKunjungan').focus()
                        }
                        else {
                            loadDataKunjungan($('#txtRmPasienKunjungan').val());
                            alert('Data Saved Successfully !');
                            $('#DataKunjungan').show();
                            $('#InputKunjungan').hide();
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })


            });

            $("#btnUpdateJadwal").click(function(e){
                e.preventDefault(); 
                if($('#txtTglKunjungan').val() == ''){
                    alert('Tgl Kunjungan harus diisi');
                    $('#txtTglKunjungan').focus();
                    return;
                }

               if($('#txtNoAntrianKunjungan').val() == ''){
                    alert('No Antrian harus diisi');
                    $('#txtNoAntrianKunjungan').focus();
                    return;
                }

                if($('#txtPenjaminKunjungan').val() == ''){
                    alert('Penjamin harus diisi');
                    $('#txtPenjaminKunjungan').focus();
                    return;
                }

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
 

        });

        function clearData(){
            $('#txtNoAntrian').val('');
            $('#txtNama').val('');
            $('#txtNoHP').val('');
            $('#selJenisKelamin').val('');
            $('#txtAlamat').val('');
            $('#txtTglLahir').val('');
            $('#txtNoKTP').val('');
        }


        function ViewKunjungan(rmPasien)
        {
            $("#myModalKunjungan").modal();
            $("#titelModalKunjungan").html('Rekap Kunjungan');
            $("#DataKunjungan").show();
            $("#InputKunjungan").hide();
            $.ajax({
                    type: "GET",
                    url: url + "page/petugas/process/readpendaftar.php",
                    cache: false,
                    data: ({ cekpasien: rmPasien }),
                    success: function (data) {

                        var obj =  data.data[0];

                        $("#txtRmPasienKunjungan").val(obj.RmPasien);
                        $("#txtNamaKunjungan").val(obj.NamaLengkap);
                        $("#txtAlamatKunjungan").val(obj.AlamatPasien).prop("disable", true);
                        $("#txtTglLahirKunjungan").val(obj.TglLahirPasien);
                        $("#txtNoHPKunjungan").val(obj.NoHP);
                        $("#txtTglDaftarKunjungan").val(obj.TglDaftar);

                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })


            loadDataKunjungan(rmPasien);
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
        
        function EditRecordKunjungan(kodekunjungan){
            clearData();
            btnSaveKunjungan
            $("#btnSaveKunjungan").hide();
            $("#btnUpdateJadwal").show();
            $("#ViewTblJadwal").hide();
            $("#ViewInputJadwal").show();
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

            function loadDataKunjungan(rmpasien) {
                 $.ajax({
                    url: url + "page/petugas/process/readkunjungan.php",
                    dataType: "json",
                    data:({rmpasien:rmpasien}),
                    success: function (result) {
                        debugger;
                        $("#dtKunjungan").DataTable().clear().draw();
                        $("#dtKunjungan").DataTable().rows.add(result.data).draw(false);
                    },
                    error: function (xhr){
                        $("#dtKunjungan").DataTable().clear().draw();
                    }
                });
            }


            function clearDataKunjungan(){ 
                $('#txtTglKunjungan').val('');
                $('#txtNoAntrianKunjungan').val(''); 
            }

            
    </script>