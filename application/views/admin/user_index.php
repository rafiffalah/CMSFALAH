
<!-- <div id="ngilang">
  <?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-4 col-md-6">
        <div class="mt-4 mb-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            Tambah User
          </button>
</div>

          <!-- Modal -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" placeholder="Nama" name="nama"require/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" placeholder="Username" name="username" required/>
                    </div>
                    <div class="row">
                      <div class="col mb-6">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required/>
                      </div>
                      <div class="row">
                        <div class="col mb-6">
                          <label class="form-label">Level</label>
                          <select name="level" class="form-control">
                            <option value="admin">admin</option>
                            <option value="kontributor">kontributor</option>
                          </select>
                    </div>
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
          <th>Nama</th>
          <th>Username</th>
          <th>Level</th>
          <th>Actions</th>
        </tr>
      </thead>
      <?php foreach($user as $aa){?>
      <tbody class="table-border-bottom-0">
        <tr>
         <td><?= $aa['nama']?></td>
         <td><?= $aa['username']?></td>
         <td><?= $aa['level']?></td>
         <td>
          <a onClick="" href="<?= base_url('admin/user/hapus/') . $aa['id_user']?>" class="btn btn-danger">
            Hapus
          </a>
          <a  href="<?= base_url('admin/user/edit/') . $aa['id_user']?>"  class="btn btn-warning">
            Edit
          </a>
         </td>
        </tr>
      </tbody>
      <?php }?>
    </table>
  </div>
</div>

     

 
