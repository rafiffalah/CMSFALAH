<head>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
</head>
<div>

    <!-- Button trigger modal -->
    <button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal">
    Tambah Konten
</button>

<!-- Modal -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Konten</h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form
                    action="<?= base_url('admin/carousel/simpan') ?>"
                    method="post"
                    enctype="multipart/form-data">
                    
                    <div class="modal-content" >
                        
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-6">
                                    <label
                                    style="color: white; margin-top:10px;"
                                    for="nameWithTitle"
                                    class="form-label">Judul</label>
                                    <input
                                    type="text"
                                    id="nameWithTitle"
                                    class="form-control"
                                    placeholder="Masukkan Nama"
                                    name="judul"
                                    required="required">
                                </div>
                            </div>
                     
                           
                                
                                
                                
                                
                                <div class="row">
                                    <div class="col mb-6">
                                        <label
                                        style="color: white; margin-top:10px;"
                                        for="nameWithTitle"
                                        class="form-label">Foto</label>
                                        <input
                                        type="file"
                                        id="nameWithTitle"
                                        class="form-control"
                                        placeholder="Masukkan Nama"
                                        name="foto"
                                        required="required"
                                        accept="image/png, image/gif, image/jpeg">
                                    </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submiy" class="btn btn-primary">Simpan</button>
                        </div>
               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
    
    
    
    
    
    <div class="card mt-5">
        <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Foto</th>
          <th>Actions</th>
        </tr>
      </thead>
      <?php foreach($carousel as $aa){?>
      <tbody class="table-border-bottom-0">
        <tr>
         <td><?= $aa['judul']?></td>
         <td><img style="width:100px; height:100px" src="<?= base_url('upload/carousel/' . $aa['foto'])?>" alt=""></td>
         <td>
          <a onClick="" href="<?= base_url('admin/carousel/hapus/') . $aa['id_caraousel']?>" class="btn btn-danger">
            Hapus
          </a>
          <a  href="<?= base_url('admin/carousel/edit/') . $aa['id_caraousel']?>"  class="btn btn-warning">
            Edit
          </a>
         </td>
        </tr>
      </tbody>
      <?php }?>
    </table>
  </div>
</div>

     

 



    