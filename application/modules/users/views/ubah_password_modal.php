    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="changePassModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="<?php echo base_url('users/ubah_password');?>" method="POST">
                    <div class="modal-header">
                    <h5 class="modal-title">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="oldPass">Password Lama</label><span id="pesan"></span>
                                <input type="password" class="form-control" placeholder="Password Lama"  name="passwordLama" id="passwordLama" required/>
                            </div>
                            <div class="form-group">
                                <label for="newPass">Password Baru</label>
                                <input type="password" class="form-control" placeholder="Password Baru"  name="password_baru" id="password_baru" required/>
                            </div>
                            <div class="form-group">
                                <label for="confirmPass">Konfirmasi Password Baru</label>
                                <input type="password"  class="form-control" name="password_retype" id="password_retype" required/>
                            </div>
                                        
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
          </div>
        </div>
      </div>