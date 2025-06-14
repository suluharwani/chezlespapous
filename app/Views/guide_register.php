<?= $this->include('templates/header') ?>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="fw-bold text-center text-primary-blue mb-4">Daftar sebagai Tour Guide</h2>
                        
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="full_name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= isset($validation) && $validation->hasError('full_name') ? 'is-invalid' : '' ?>" 
                                           id="full_name" name="full_name" value="<?= old('full_name') ?>">
                                    <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('full_name') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" 
                                           id="email" name="email" value="<?= old('email') ?>">
                                    <?php if (isset($validation) && $validation->hasError('email')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control <?= isset($validation) && $validation->hasError('phone') ? 'is-invalid' : '' ?>" 
                                           id="phone" name="phone" value="<?= old('phone') ?>">
                                    <?php if (isset($validation) && $validation->hasError('phone')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('phone') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="languages" class="form-label">Bahasa yang Dikuasai</label>
                                    <input type="text" class="form-control <?= isset($validation) && $validation->hasError('languages') ? 'is-invalid' : '' ?>" 
                                           id="languages" name="languages" value="<?= old('languages') ?>" placeholder="Contoh: Indonesia, Inggris, Jepang">
                                    <?php if (isset($validation) && $validation->hasError('languages')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('languages') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-12">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control <?= isset($validation) && $validation->hasError('address') ? 'is-invalid' : '' ?>" 
                                              id="address" name="address" rows="2"><?= old('address') ?></textarea>
                                    <?php if (isset($validation) && $validation->hasError('address')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('address') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-12">
                                    <label for="experience" class="form-label">Pengalaman sebagai Tour Guide</label>
                                    <textarea class="form-control <?= isset($validation) && $validation->hasError('experience') ? 'is-invalid' : '' ?>" 
                                              id="experience" name="experience" rows="3"><?= old('experience') ?></textarea>
                                    <?php if (isset($validation) && $validation->hasError('experience')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('experience') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-12">
                                    <label for="certification" class="form-label">Sertifikasi (jika ada)</label>
                                    <textarea class="form-control" id="certification" name="certification" rows="2"><?= old('certification') ?></textarea>
                                </div>
                                
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary-blue w-100 py-2">Kirim Pendaftaran</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>