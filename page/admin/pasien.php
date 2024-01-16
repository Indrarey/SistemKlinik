    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pasien</h4>
                  <!-- <a href="#" id="btnAdd" data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-sm">Add</a> -->

                  <!-- <div class="table-responsive"> -->
                    <table id="dtPasien" style="width:100%" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Rm Pasien</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>No KTP</th>
                          <th>Alamat</th>
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
    
    <script>    
        var url = "<?= $baseUrl ?>";
      
        function loadData() {
                 $.ajax({
                    url: url + "page/admin/process/readpasien.php",
                    dataType: "json",
                    data:{rmpasien:''}
                }).done(function (result) {
                    $("#dtPasien").DataTable().clear();
                    $("#dtPasien").DataTable().rows.add(result.data).draw(false);
                 
                }).fail(function (jqXHR, textStatus, errorThrown) { 
                    // needs to implement if it fails
                    console.log(jqXHR);
                });
            }
        $(document).ready(function() {
            
          
            loadData();

            $("#dtPasien").dataTable({
                bDestroy: true,
                data: [],
                columns: [
                    {
                        "data": "Action", class: "text-center", "render": function (data, type, row) {
                                return '&nbsp; <a href="#" class="text-danger" onclick="DeleteRecord(\'' + row.RmPasien + '\')"><i class="mdi mdi-eraser-variant"></i></a>'
                        }
                    },
                    { "data": "RmPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NamaLengkap", "autoWidth": true, class: "text-left" },
                    { "data": "JenisKelaminPasien", "autoWidth": true, class: "text-left" },
                    { "data": "NoIdentitas", "autoWidth": true, class: "text-left" },
                    { "data": "AlamatPasien", "autoWidth": true, class: "text-left" },
                    { "data": "TglDaftar", "autoWidth": true, class: "text-center" }

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
            
        });
        
        function DeleteRecord(RmPasien){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + "page/admin/process/deletepasien.php", 
                data:{rmpasien:RmPasien}
            }).done(function(data){
                loadData();
                alert('Data berhasil dihapus')
            });
        }

        

    </script>