    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Pembayaran Pasien</h3>
                     

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtTglPasien">Filter Tanggal</label> 
                                <input type="text" value="<?= date('d/m/Y') ?>" class="form-control" id="txtTglPasien" name="txtTglPasien" placeholder="Filter Tanggal" maxlength="10">
                            </div>
                        </div>
                    </div>
                        <table id="dtPembayaranPasien" style="width:100%"  class="table table-striped">
                            <thead>
                                <tr>
                                <th>Action</th>
                                <th>Status Pembayaran</th>
                                <th>No Antrian</th>
                                <th>Rm Pasien</th>
                                <th>Nama</th>
                                <th>Obat (Peritem)</th>
                                <th>Tgl Lahir</th>  
                                <th>Jenis Kelamin</th> 
                                <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
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
                                        <input type="hidden" class="form-control" id="txtIdKunjungan" name="txtIdKunjungan" readonly>
                                        <input type="hidden" class="form-control" id="txtStatusPembayaran" name="txtStatusPembayaran" readonly>
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
                        
                         
                            <div class="row container">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-sm" id="btnCetak" >Cetak Bukti Pembayaran</button>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-sm-12">
                                        <table id="dtObat" style="width:100%"  class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kode Obat</th>
                                            <th>Obat</th>
                                            <th>Jumlah Obat</th>
                                            <th>Harga</th>
                                            <th>Subtotal</th> 
                                            </tr>
                                        </thead>
                                    <tbody></tbody>
                                    </table>
                                </div>
                            </div> 

                        <div id="InputRekamMedis">
                            <form class="forms-sample" id="formInputRekamMedis">
                                <div class="row container">
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="txtDiagnosa">&nbsp;</label>
                                                <!-- <input type="text" class="form-control" id="txtDiagnosa" name="txtDiagnosa"> -->
                                            </div> 
                                    </div> 
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <table id="dtTindakan" width="100%">
                                                    <tbody></tbody>   
                                                </table>
                                             </div> 
                                    </div>
                               
                                </div>
                                
                                <div class="row container">
                                    <div class="col-sm-12 text-right">
                                        <button type="button" class="btn btn-primary btn-sm" id="btnSavePembayaran">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="btnBackPembayaran"  data-dismiss="modal">Back</button>
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
                    url: url + "page/petugas/process/readpembayaran.php",
                    dataType: "json",
                    data:{tglkunjungan:tglkunjungan}
                }).done(function (result) {
                    $("#dtPembayaranPasien").DataTable().clear();
                    $("#dtPembayaranPasien").DataTable().rows.add(result.data).draw(false);

                }).fail(function (jqXHR, textStatus, errorThrown) {
                    $("#dtPembayaranPasien").DataTable().clear().draw();
                });
            }
        $(document).ready(function() {

            $("#btnCetak").click(function (e){
                // window.href.location = 'cetakbuktipembayaran.php';
                
                var idkunjungan = $("#txtIdKunjungan").val();
                window.open(`page/petugas/cetakbuktipembayaran.php?idkunjungan=${idkunjungan}`, '_blank');
            });

            loadData($("#txtTglPasien").val());

            $("#dtPembayaranPasien").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<button class="btn-sm btn-primary" onclick="ViewPembayaran(\'' + row.RmPasien + '\', \'' + row.IdKunjungan + '\', \'' + row.NoAntrian + '\')">Pembayaran</button> &nbsp;'
                        }
                    },
                    { "data": "Status", "autoWidth": true, class: "text-left" },
                    { "data": "NoAntrian", "autoWidth": true, class: "text-left" },
                    { "data": "RmPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NamaLengkap", "autoWidth": true, class: "text-left" },
                    { "data": "JumlahObat", "autoWidth": true, class: "text-left" },
                    { "data": "TglLahirPasien", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelaminPasien", "autoWidth": true, class: "text-left" },
                    { "data": "AlamatPasien", "autoWidth": true, class: "text-left" },
                ],
                filter: false,
                info: false,
                ordering: false,
                processing: true,
                retrieve: false,
                bLengthChange: false,
                // lengthMenu: [[15, 20, -1], [15, 20, "All"]],
                bFilter: false,
                bSort: false,
                bPaginate: false,
                scrollX: true,
                scrollX: "100%",
                autoWidth: true,
                 
            });


            $("#txtTglPasien").change(function(){
                loadData($("#txtTglPasien").val());
            });

            $("#dtObat").dataTable({
                        bDestroy: true,
                        data: [],
                        columns: [
                            { "data": "No", "autoWidth": true, class: "text-center",
                                render: function (data, type, row, meta) {
                                    // 'meta.row' is the index of the row
                                    return meta.row + 1; // Add 1 to start counting from 1
                                }
                            }, 
                            { "data": "KodeObat", "autoWidth": true, class: "text-left" },
                            { "data": "NamaObat", "autoWidth": true, class: "text-left" },
                            { "data": "HargaSatuan", "autoWidth": true, class: "text-right" },
                            { "data": "JumlahObat", "autoWidth": true, class: "text-center" },
                            { "data": "Subtotal", "autoWidth": true, class: "text-right" }

                        ],  
                        createdRow: function (row, data, dataIndex) { 
                            $(row).attr('data-row-id', dataIndex);
                        },
                        filter: false,
                        info: false,
                        ordering: false,
                        processing: true,
                        retrieve: true,
                        bLengthChange: false,
                        lengthMenu: [[15, 20, -1], [15, 20, "All"]],
                        bFilter: false,
                        bSort: false,
                        bPaginate: false,
                        scrollX: true,
                        scrollX: "100%",
                        scrollY: true,
                        scrollY: "100%",
                        autoWidth: true,
                    });


                    $("#btnSavePembayaran").click(function(e){
                        e.preventDefault();

                        if($("#txtUangPembayaran").val() == '')
                        {
                            alert('Uang Pembayran harus diisi');
                            $("#txtUangPembayaran").focus();
                            return;
                        }


                        var model = new Object();
                        model.idkunjungan = $('#txtIdKunjungan').val();
                        model.totalpembayaran = $('#txtUangTotal').val();
                        model.uangpembayaran = $('#txtUangPembayaran').val(); 

                        $.ajax({
                            type: "POST",
                            url: url + "page/petugas/process/insertpembayaran.php",
                            data: model,
                            dataType: "json",
                            success: function (message) {
                                debugger;
                                if (message != "success") {
                                    alert(message);
                                    $('#txtUangPembayaran').focus()
                                }
                                else {  
                                    $("#dtTindakan tbody").empty();
                                    $('#txtStatusPembayaran').val('1');
                                    loadDataObat($('#txtIdKunjungan').val());
                                    loadDataTindakan($('#txtIdKunjungan').val());
                                    loadData($("#txtTglPasien").val());
                                    $("#btnCetak").show();
                                    $("#btnSavePembayaran").hide();
                                    alert('Data Saved Successfully !');
                                }

                            },
                            error: function (xhr, data) {
                                console.log(xhr.responseText);
                            }
                        })

                    });   

        }); 

        function ViewPembayaran(rmPasien, idKunjungan, noAntrian)
            {
                $("#myModalKunjungan").modal();
                $("#titelModalKunjungan").html('Pembayaran');
                $("#dtTindakan tbody").empty(); 
                $("#txtIdKunjungan").val(idKunjungan);
                $("#txtNoAntrianKunjungan").val(noAntrian);
                $.ajax({
                        type: "GET",
                        url: url + "page/dokter/process/readpendaftar.php",
                        cache: false,
                        data: ({ idkunjungan: idKunjungan }),
                        success: function (data) {

                            var obj =  data.data[0];
                            if(obj.StatusBayar == '0'){
                                $("#btnCetak").hide();
                                $("#btnSavePembayaran").show();

                            }else{
                                $("#btnCetak").show();
                                $("#btnSavePembayaran").hide();
                             }
                            $("#txtStatusPembayaran").val(obj.StatusBayar);
                            $("#txtNoPasienKunjungan").val(obj.NoAntrian);
                            $("#txtRmPasienKunjungan").val(obj.RmPasien);
                            $("#txtNamaKunjungan").val(obj.NamaLengkap);
                            $("#txtAlamatKunjungan").val(obj.AlamatPasien).prop("disable", true);
                            $("#txtTglLahirKunjungan").val(obj.TglLahirPasien);
                            $("#txtNoHPKunjungan").val(obj.NoHP);
                            $("#txtTglDaftarKunjungan").val(obj.TglKunjungan);
                        },
                        error: function (xhr){
                            console.log(xhr.responseText)
                        }
                    })

                    

                  loadDataObat(idKunjungan);
                  loadDataTindakan(idKunjungan);
            }

         
    
            function loadDataObat(idKunjungan) {
                 $.ajax({
                    url: url + "page/petugas/process/readobat.php",
                    dataType: "json",
                    data:({ idkunjungan: idKunjungan}),
                    success: function (result) {
                        debugger;
                        $("#dtObat").DataTable().clear().draw();
                        $("#dtObat").DataTable().rows.add(result.data).draw(false);
                    },
                    error: function (xhr){
                        $("#dtObat").DataTable().clear().draw();
                    }
                });
            }
            
            function loadDataTindakan(idKunjungan) {
                 $.ajax({
                    url: url + "page/petugas/process/readtindakan.php",
                    dataType: "json",
                     data:({ idkunjungan: idKunjungan}),
                    success: function (data) {
                        debugger;
                        var obj = data.data;
                        var tampil= '';
                        for(var i = 0; i < obj.length; i++){ 
                            if(obj[i].Keterangan.substr(0, 5) == 'Total'){
                                tampil = `<tr>
                                        <td align="right" width="40%"><b>`+ obj[i].Keterangan +`</b></td>
                                        <td align="right"  width="60%" style="padding-right:20px"><b>Rp. `+ obj[i].Harga +`</b></td>
                                      </tr>`;
                            }else if( obj[i].Keterangan == 'Grand Total'){
                                tampil = `<tr>
                                        <td align="right" width="40%"><b>`+ obj[i].Keterangan +`</b></td>
                                        <td align="right"  width="60%" style="padding-right:20px"><b>Rp. `+ obj[i].Harga +`<b></td>
                                        <input type="hidden" name="txtUangTotal" id="txtUangTotal" value="`+ obj[i].Harga +`" class="form-control " >
                                      </tr>
                                      <tr>
                                         <td align="right"  width="100%" colspan="2" style="padding-right:20px"><b>=======================================<b></td>
                                        </tr>`;
                            }else if( obj[i].Keterangan == 'Uang Pembayaran' || obj[i].Keterangan == 'Uang Kembali' ) {
                                if($("#txtStatusPembayaran").val() != '0'){
                                    tampil = `<tr>
                                        <td align="right" width="40%"><b>`+ obj[i].Keterangan +`</b></td>
                                        <td align="right"  width="60%" style="padding-right:20px"><b>Rp. `+ obj[i].Harga +`<b></td>
                                      </tr>`;
                                } 
                            }else{
                                tampil = `<tr>
                                        <td align="right" width="40%"><b>`+ obj[i].Keterangan +`</b></td>
                                        <td align="right"  width="60%" style="padding-right:20px">Rp. `+ obj[i].Harga +`</td>
                                      </tr>`;
                            }

                            $("#dtTindakan tbody").append(tampil);
                        }

                        if($("#txtStatusPembayaran").val() == '0'){
                            tampil = `<tr>
                                            <td align="right" width="40%"><b>Uang Pembayaran</b></td>
                                            <td align="right"  width="60%" style="padding-right:20px">
                                                <input type="text" style="height:10px;margin:5px;width: 150px;" name="txtUangPembayaran"  id="txtUangPembayaran" class="form-control " >
                                            </td>
                                        </tr>`;
                            
                            tampil += `<tr>
                                            <td align="right" width="40%"><b>Uang Kembali</b></td>
                                            <td align="right"  width="60%" style="padding-right:20px">
                                                <input type="text" readonly style="height:10px;margin:5px;width: 150px;" name="txtUangKembali" id="txtUangKembali" class="form-control " >
                                            </td>
                                        </tr>`;
                            
                            $("#dtTindakan tbody").append(tampil);
                            setEventHandlers();
                        } 
                    },
                    error: function (xhr){
                      console.log(xhr.responseText);
                    }
                });
            }

            function setEventHandlers(){
                    $("#txtUangPembayaran").on("keypress", function (event) {
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

                    $("#txtUangPembayaran").on("blur", function (event) {
                        var uangPembayaran = $("#txtUangPembayaran").val() 
                        var uangTotal = $("#txtUangTotal").val() 
                        var total = uangPembayaran - uangTotal;
                        if($("#txtUangPembayaran").val() == ''){
                             $("#txtUangKembali").val('');
                        }else{
                            $("#txtUangKembali").val(total);
                        }    
                    });
                }

            
    </script>