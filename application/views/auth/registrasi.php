<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/cek_regis'); ?>">
                            <div class="form-group">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                <br>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                                <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                <br>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                    <br>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block w-100">
                                Daftar Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('Auth'); ?>">Sudah Punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>