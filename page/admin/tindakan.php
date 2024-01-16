<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Tindakan</h4>
                  <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a>

                  <!-- <div class="table-responsive"> -->
                    <table id="dtTindakan" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Keterangan</th>
                          <th>Harga</th> 
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
                                        <label for="txtKeterangan">Keterangan</label>
                                        <input type="hidden"  class="form-control" id="txtIdTindakan" name="txtIdTindakan">
                                        <input type="text"  class="form-control" id="txtKeterangan" name="txtKeterangan" placeholder="Keterangan" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtHarga">Harga</label>
                                        <input type="text" class="numberonly form-control" id="txtHarga"  name="txtHarga"  placeholder="Harga" maxlength="20">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="button" class="btn btn-primary btn-sm" id="btnSave">Save</button>
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
                    url: url + "page/admin/process/readtindakan.php",
                    dataType: "json",
                    data:{idtindakan:''}
                }).done(function (result) {
                    $("#dtTindakan").DataTable().clear();
                    $("#dtTindakan").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        function DeleteRecord(idtindakan){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deletetindakan.php", 
                data:{idtindakan:idtindakan}
            }).done(function(data){
                loadData('');
                alert('Data berhasil dihapus')
            });
        }

        $(document).ready(function() {
            $('.numberonly').keypress(function (e) {  
                var charCode = (e.which) ? e.which : event.keyCode    
               if (String.fromCharCode(charCode).match(/[^0-9]/g))    
                return false;                        
            });    
          
            loadData();

            $("#dtTindakan").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.IdTindakan + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.IdTindakan + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "Keterangan", "autoWidth": true, class: "text-left" },
                    { "data": "Harga", "autoWidth": true, class: "text-left" },
            
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
                
                $('#txtKeterangan').val('ss');
                $('#txtHarga').val('ssz');
                $('#btnSave').focus(); 
            });
            
            $("#btnAdd").click(function(){
                clearData(); 
                $("#titelModal").html('Add tindakan');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });
 

            $("#btnSave").click(function(e){
                e.preventDefault();
               
                if($('#txtKeterangan').val() == ''){
                    alert('Keterangan harus diisi');
                    $('#txtKeterangan').focus();
                    return; 
                }
 
                if($('#txtHarga').val() == ''){
                    alert('Harga harus diisi');
                    $('#txtHarga').focus();
                    return; 
                }
                var model = new Object();
                model.keterangan = $('#txtKeterangan').val();
                model.harga = $('#txtHarga').val();
                
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/inserttindakan.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtKeterangan').focus()
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
                 
                if($('#txtKeterangan').val() == ''){
                    alert('Keterangan harus diisi');
                    $('#txtKeterangan').focus();
                    return; 
                }
 
                if($('#txtHarga').val() == ''){
                    alert('Harga harus diisi');
                    $('#txtHarga').focus();
                    return; 
                }
                
                var model = new Object();
                model.idtindakan = $('#txtIdTindakan').val();
                model.keterangan = $('#txtKeterangan').val();
                model.harga = $('#txtHarga').val();
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updatetindakan.php",
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
            $('#txtKeterangan').val('').prop('readonly', false);
            $('#txtHarga').val(''); 
        }

        
        function EditRecord(idtindakan) {
            resetForm();  
            clearData(); 
            $("#titelModal").html('Edit tindakan');
            $('#txtIdTindakan').val(idtindakan);
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readtindakan.php",
                    cache: false,
                    data: ({ idtindakan: idtindakan }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtKeterangan").val(obj.Keterangan);
                        $("#txtHarga").val(obj.Harga);                   
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }


    </script>