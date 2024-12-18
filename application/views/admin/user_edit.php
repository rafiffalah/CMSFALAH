
<div id="ngilang">
  <?= $this->session->flashdata('alert')?>
</div>

              <form action="<?= base_url('admin/user/update') ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
               
                </div>
                <div class="modal-body">
                  <div class="row">
                    <?php foreach($user as $aa){?>
                    <div class="col mb-6">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" value="<?=$aa ['nama']?>" placeholder="Nama" name="nama"require/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="<?=$aa ['username']?>" name="username" required/>
                    </div>
                    <div class="row">
                      <div class="col mb-6">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" value="<?=$aa ['password']?>" placeholder="Password" name="password" required/>
                      </div>
                      <div class="row">
                        <div class="col mb-6">
                          <label class="form-label">Level</label>
                          <select name="level" class="form-control">
                            <option value="<?=$aa ['nama'] ? 'admin': ''?>">admin</option>
                            <option value="<?=$aa ['nama']?>">kontributor</option>
                          </select>
                        </div>
                        <input name="id_user" type="hidden" value=<?= $aa ['id_user']?>>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                    <?php }?>
                  </form>




