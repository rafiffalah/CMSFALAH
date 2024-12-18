
<!-- <div id="ngilang">
<?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-4 col-md-6">
        <div class="mt-4 mb-3">
          <-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            Tambah User
          </button>
</div>

          <!-- Modal -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" placeholder="Nama" name="nama_kategori"required/>
                    </div>
                  </div>
                  <div class="row">
                   
                    <div class="row">
                      
                      <div class="row">
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Nama_kategori</th>
          <th>Actions</th>
        </tr>
      </thead>
      <?php foreach($kategori as $aa){?>
      <tbody class="table-border-bottom-0">
        <tr>
         <td><?= $aa['nama_kategori']?></td>
        
         <td>
          <a onClick="" href="<?= base_url('admin/kategori/hapus/') . $aa['id_kategori']?>" class="btn btn-danger">
            Hapus
          </a>
          <a  href="<?= base_url('admin/kategori/edit/') . $aa['id_kategori']?>"  class="btn btn-warning">
            Edit
          </a>
         </td>
        </tr>
      </tbody>
      <?php }?>
    </table>
  </div>
</div>

     

 
