<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data User</h4>
                  <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a>

                  <!-- <div class="table-responsive"> -->
                    <table id="dtUser" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Kode User</th>
                          <th>Nama User</th> 
                          <th>No Identitas</th> 
                          <th>Jabatan</th> 
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
                                        <label for="txtKodeUser">Kode User</label>
                                        <input type="text" required class="form-control" id="txtKodeUser" name="txtKodeUser" placeholder="Kode User" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="selNamaUser">Nama User</label>
                                        <select class="form-control" required  name="selNamaUser" id="selNamaUser">
                                            <option value="">Pilih</option>  
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="txtPassword">Password</label>
                                        <input type="password" required class="form-control" id="txtPassword"  name="txtPassword"  placeholder="*******" maxlength="70">
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="txtJabatan">Jabatan</label>
                                        <input type="text" readonly class="form-control" id="txtJabatan" name="txtJabatan" placeholder="Jabatan" >
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
                    url: url + "page/admin/process/readuser.php",
                    dataType: "json",
                    data:{kodeuser:''}
                }).done(function (result) {
                    $("#dtUser").DataTable().clear();
                    $("#dtUser").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        $(document).ready(function() {
            
            
            
            loadData();

            $("#dtUser").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '<a href="#" class="text-primary" onclick="EditRecord(\'' + row.KodeUser + '\')"><i class="mdi mdi-lead-pencil"></i></a> &nbsp; | &nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.KodeUser + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "KodeUser", "autoWidth": true, class: "text-left" },
                    { "data": "NamaUser", "autoWidth": true, class: "text-left" },
                    { "data": "NoIdentitas", "autoWidth": true, class: "text-left" },
                    { "data": "Jabatan", "autoWidth": true, class: "text-left" },

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

   

            function validasi(){
               if($('#txtKodeUser').val() == ''){
                    alert('Kode User harus diisi');
                    $('#txtKodeUser').focus();
                    return; 
                }
 
                if($('#selNamaUser').val() == ''){
                    alert('Nama User harus diisi');
                    $('#selNamaUser').focus();
                    return; 
                }

                if($('#txtPassword').val() == ''){
                    alert('Password harus diisi');
                    $('#txtPassword').focus();
                    return; 
                }
                 
            }

            $("#btnSave").click(function(e){
                e.preventDefault();
                validasi();
                
                var model = new Object();
                model.kodeuser = $('#txtKodeUser').val();
                model.namauser = $('#selNamaUser').val(); 
                model.password = $('#txtPassword').val();  
                model.jabatan = $('#txtJabatan').val();  
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/insertuser.php",
                    data: model, 
                    dataType: "json", 
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                            $('#txtKodeUser').focus()
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
                model.kodeuser = $('#txtKodeUser').val();
                model.namauser = $('#selNamaUser').val(); 
                model.password = $('#txtPassword').val(); 
                model.jabatan = $('#txtJabatan').val(); 
 
                $.ajax({
                    type: "POST",
                    url: url + "page/admin/process/updateuser.php",
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

            $("#selNamaUser").change(function (e){
                $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readnamauser.php",
                    datatype: 'json',
                    data:{kodeuser:$(this).val()},
                    success: function (data) {
                        
                        var obj =  data.data[0];  

                        $("#txtJabatan").val(obj.Jabatan);
                    },
                    error: function (ex) {
                        alert('Failed Nama User');
                    }
                });
            });


        });

                 
        $("#btnAdd").click(function(){
                clearData(); 
                PopulateNamaUser(); 
                $("#titelModal").html('Add User');
                $("#btnSave").show();
                $("#btnUpdate").hide();
             });

        function PopulateNamaUser() {
                 $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readnamauser.php",
                    datatype: 'json',
                    data:{kodeuser:''},
                    success: function (data) {
                        $('#selNamaUser').empty(); 
                        $("#selNamaUser").append('<option value="" selected>Fill Selected</option>');
                        $.each(data, function (i, bind) {
                            debugger
                            for(var x = 0; x < bind.length; x++){
                                $("#selNamaUser").append('<option value="' + bind[x].KodeUser + '">' + bind[x].NamaUser + '</option>');
                            }
                        }); 
                    },
                    error: function (ex) {
                        alert('Failed Nama User');
                    }
                });
            }
           


        function EditRecord(kodeuser) {
            resetForm();  
            clearData(); 
            PopulateNamaUser();
            $("#titelModal").html('Edit User');
            $("#btnSave").hide();
            $("#btnUpdate").show();
            $("#myModal").modal();
            $.ajax({
                    type: "GET",
                    url: url + "page/admin/process/readuser.php",
                    cache: false,
                    data: ({ kodeuser: kodeuser }),
                    success: function (data) {
                    
                        var obj =  data.data[0];  
        
                        $("#txtKodeUser").val(obj.KodeUser).prop('readonly', true);
                        $("#selNamaUser").find('option[value="' + obj.NoIdentitas + '"]').prop('selected', 'selected');                       
                        // $("#txtPassword").val(obj.Password);                       
                        $("#txtJabatan").val(obj.Jabatan);                       
                      
                    },
                    error: function (xhr){
                        console.log(xhr.responseText)
                    }
                })

        }
                
        function resetForm() {
            var $form = $('#formInput');
            $form.validate().resetForm();
            $form.find('.form-group').removeClass("state-error");
            $form.find('.form-group').removeClass("state-success");
        }

        function clearData(){ 
            $('#txtKodeUser').val('').prop('readonly', false);
            $('#selNamaUser').val('');
            $('#txtPassword').val('');
            $('#txtJabatan').val('');
        }

        function DeleteRecord(kodeuser){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deleteuser.php", 
                data:{kodeuser:kodeuser}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        


    </script>