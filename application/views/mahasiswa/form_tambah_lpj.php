<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Pengajuan LPJ</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah LPJ</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-tambah-skp">
                                    <form action="<?= base_url('Mahasiswa/tambahLpj/') . $kegiatan['id_kegiatan'] ?>" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                        <div class="bagian-personality">
                                            <h5>Data Pemohon</h5>
                                            <div class="form-group">
                                                <label for="namaMahasiswa">Nama Mahasiswa</label>
                                                <input type="text" class="form-control" id="namaMahasiswa" name="namaMahasiswa" value="<?= $this->session->userdata('nama') ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nim">NIM</label>
                                                <input type="text" class="form-control" id="nim" name="nim" value="<?= $this->session->userdata('username') ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="noTlpm">No Telepon / Whatsapp</label>
                                                <input type="number" class="form-control" id="noTlpm" name="noTlpn" value="<?= $kegiatan['no_whatsup'] ?>" required readonly>
                                                <div class="invalid-feedback">
                                                    No Telepon / Whatsapp harap diisi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bagian-dana mt-5">
                                            <h5>Informasi Dana</h5>
                                            <div class="form-group">
                                                <label for="danaKegiatan">Besar Anggaran</label>
                                                <input type="number" class="form-control" id="danaKegiatan" name="danaKegiatan" value="<?= $kegiatan['dana_kegiatan'] ?>" required readonly>
                                                <div class="invalid-feedback">
                                                    Besar anggaran harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="danaKegiatanDiterima">Anggran Diterima</label>
                                                <input type="text" class="form-control" id="danaKegiatanDiterima" name="danaKegiatanDiterima" value="<?= ($kegiatan['dana_kegiatan'] - $kegiatan['dana_proposal']) ?>" readonly>
                                                <small id=" anggaranHelp" class="form-text text-muted">Dana
                                                    anggaran yang akan diterima 30% dari besar anggaran
                                                    pengajuan</small>
                                            </div>

                                        </div>
                                        <div class="bagian-acara mt-5">
                                            <h5>Informasi Acara</h5>
                                            <div class="form-group">
                                                <label for="namaKegiatan">Judul Acara / Kegiatan</label>
                                                <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan" value="<?= $kegiatan['nama_kegiatan'] ?>" readonly required>
                                                <input type="hidden" class="form-control id_kegiatan" id="id_kegiatan" value="<?= $kegiatan['id_kegiatan'] ?>" readonly required>
                                                <div class="invalid-feedback">
                                                    Nama Kegiatan harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="namaPenyelenggara">Nama Penyelenggara</label>
                                                <input type="text" class="form-control" id="namaPenyelenggara" value="<?= $kegiatan['nama_penyelenggara'] ?>" name="namaPenyelenggara" readonly>
                                                <div class="invalid-feedback">
                                                    Nama penyelenggara harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="urlPenyelenggara">URL Penyelenggara</label>
                                                <input type="text" class="form-control" id="urlPenyelenggara" value="<?= $kegiatan['url_penyelenggara'] ?>" name="urlPenyelenggara" readonly>
                                                <div class="invalid-feedback">
                                                    URL penyelenggara harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsiKegiatan">Deskripsi Kegiatan</label>
                                                <textarea class="form-control" id="deskripsiKegiatan" name="deskripsiKegiatan" style="height: 100px" readonly required><?= $kegiatan['deskripsi_kegiatan'] ?></textarea>
                                                <div class="invalid-feedback">
                                                    Deskripsi harap diisi
                                                </div>
                                            </div>
                                            <div class=" form-group">
                                                <label for="bidangKegiatan">Bidang Kegiatan</label>
                                                <input type="text" class="form-control" id="bidangKegiatan" name="bidangKegiatan" value="<?= $tingkat[0]['nama_bidang'] ?>" readonly required>
                                                <div class=" invalid-feedback">
                                                    Bidang kegiatan harap dipilih
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenisKegiatan">Jenis Kegiatan</label>
                                                <input type="text" class="form-control k_jenis" id="jenisKegiatan" name="jenisKegiatan" value="<?= $tingkat[0]['jenis_kegiatan'] ?>" readonly required>
                                                <div class=" invalid-feedback">
                                                    Jenis kegiatan harap dipilih
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tingkatKegiatan">Tingkat Kegiatan</label>
                                                <input type="hidden" class="form-control k_tingkat tingkatKegiatan" id="tingkatKegiatan" name="tingkatKegiatan" value="<?= $tingkat[0]['id_semua_tingkatan'] ?>" readonly required>
                                                <input type="text" class="form-control" value="<?= $tingkat[0]['nama_tingkatan'] ?>" readonly required>
                                                <div class=" invalid-feedback">
                                                    Tingkat kegiatan harap dipilih
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tglPelaksanaan">Tanggal Mulai Pelaksanaan</label>
                                                <input type="text" class="form-control datepicker" id="tglPelaksanaan" name="tglPelaksanaan" value="<?= $kegiatan['tanggal_kegiatan'] ?>" required readonly>
                                                <div class="invalid-feedback">
                                                    Tanggal pelaksanaan harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tglPelaksanaan">Tanggal Selesai Pelaksanaan</label>
                                                <input type="text" class="form-control datepicker" id="tglSelesaiPelaksanaan" name="tglSelesaiPelaksanaan" value="<?= $kegiatan['tanggal_selesai_kegiatan'] ?>" readonly required>
                                                <div class="invalid-feedback">
                                                    Tanggal pelaksanaan harap diisi
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempatPelaksanaan">Tempat Pelaksanaan</label>
                                                <input type="text" class="form-control" id="tempatPelaksanaan" name="tempatPelaksanaan" value="<?= $kegiatan['lokasi_kegiatan'] ?>" required readonly>
                                                <div class="invalid-feedback">
                                                    Tempat pelaksanaan harap diisi
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bagian-acara mt-5">
                                            <h5>Anggota Kegiatan</h5>
                                            <input type="hidden" name="jumlahAnggota" value="<?= count($anggota) ?>">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nim</th>
                                                            <th>Nama</th>
                                                            <th>Jurusan</th>
                                                            <th>Prodi</th>
                                                            <th>Posisi</th>
                                                            <th>Keaktifan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="daftar-mhs">
                                                        <?php $i = 1;
                                                        foreach ($anggota as $a) : ?>
                                                            <tr>
                                                                <td><?= $i++ ?></td>
                                                                <td><?= $a['nim'] ?></td>
                                                                <td><?= $a['nama'] ?></td>
                                                                <td><?= $a['nama_jurusan'] ?></td>
                                                                <td><?= $a['nama_prodi'] ?></td>
                                                                <td>
                                                                    <select class="custom-select partisipasiKegiatan" name="prestasi_<?= $a['id_anggota_kegiatan'] ?>" id="partisipasiKegiatan" required>
                                                                        <?php foreach ($prestasi as $p) : ?>
                                                                            <?php if ($p['id_semua_prestasi'] == $a['id_semua_prestasi']) : ?>
                                                                                <option selected value="<?= $p['id_semua_prestasi'] ?>"><?= $p['nama_prestasi'] ?></option>
                                                                            <?php else : ?>
                                                                                <option value="<?= $p['id_semua_prestasi'] ?>"><?= $p['nama_prestasi'] ?></option>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="aktif_<?= $a['id_anggota_kegiatan'] ?>" value="0">
                                                                    <?php if ($a['keaktifan'] == 1) : ?>
                                                                        <input checked type="checkbox" name="aktif_<?= $a['id_anggota_kegiatan'] ?>" value="1">
                                                                    <?php else : ?>
                                                                        <input type="checkbox" name="aktif_<?= $a['id_anggota_kegiatan'] ?>" value="1">
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class=" bagian-upload mt-5">
                                            <h5>Informasi Upload</h5>

                                            <div class="form-group">
                                                <label for="fileLpj">Upload File LPJ</label>
                                                <input type="file" class="form-control-file btn" id="fileLpj" name="fileLpj" required>
                                                <div class="invalid-feedback">
                                                    File lpj harap diisi
                                                </div>
                                                <small id="anggaranHelp" class="form-text text-muted">Silahkan
                                                    Upload File Dokumen Dalam Bentuk File PDF Maksimal 2
                                                    Mega,
                                                    Format File : Tahun_Nama_LPJ Contoh :
                                                    2019_AdityaYusrilFikri_LPJ. Format LPJ
                                                    <span><a href="#">Disini</a></span></small>

                                            </div>
                                            <div class="form-group">
                                                <label for="beritaLpj">Upload Berita Kegiatan
                                                    LPJ</label>
                                                <input type="file" class="form-control-file btn" name="beritaLpj" id="beritaLpj" required>
                                                <div class="invalid-feedback">
                                                    Berita kegiatan harap diisi
                                                </div>
                                                <small id="anggaranHelp" class="form-text text-muted">Silahkan
                                                    Upload File Dokumen Dalam Bentuk File PDF Maksimal 2
                                                    Mega,
                                                    File berita acara dalam bahasa
                                                    indonesia dan bahasa inggris, Format Nama File :
                                                    Tahun_Acara_Nama_yang_upload_acara Contoh
                                                    : (2019_Agus_Debat_Nasional). Format Berita Kegiatan
                                                    <span><a href="#">Disini</a></span></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambarKegiatanLpj1">Upload Gambar Kegiatan 1 / Acara
                                                    Pendukung</label>
                                                <input type="file" class="form-control-file btn" name="gambarKegiatanLpj1" id="gambarKegiatanLpj1" required>
                                                <div class="invalid-feedback">
                                                    Gambar kegiatan harap diisi
                                                </div>
                                                <small class="form-text text-muted">
                                                    Format Gambar JPG/JPEG Ukuran Maksimal 2 mega. LPJ diharuskan upload bukti kegiatan dalam bentuk foto sertifikat atau foto saat menerima penghargaan.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambarKegiatanLpj2">Upload Gambar Kegiatan 2 / Acara
                                                    Pendukung</label>
                                                <input type="file" class="form-control-file btn" name="gambarKegiatanLpj2" id="gambarKegiatanLpj2" required>
                                                <small class="form-text text-muted">
                                                    Format Gambar JPG/JPEG Ukuran Maksimal 2 mega. LPJ diharuskan upload bukti kegiatan dalam bentuk foto sertifikat atau foto saat menerima penghargaan.
                                                </small>
                                            </div>
                                        </div>
                                        <div class="action-button">
                                            <button onclick="return confirm('Apakah anda sudah yakin ?')" type="submit" style="width:auto; float:right" class="btn btn-icon btn-success ml-3">
                                                Kirim Lpj <i class="fas fa-plus"></i></button>
                                            <a href="<?= base_url('Mahasiswa/pengajuanLpj') ?>" style="float:right" class="btn btn-icon btn-secondary">
                                                Kembali <i class="fas fa-arrow-left"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>