<div class="container-fluid mt-3">
    <h5>Data Master Guru</h5>
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah</a>
    <table class="mt-3 table table-bordered" id="Table_ID">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP/NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Handphone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($guru as $g): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $g['nip_nik']; ?></td>
                    <td><?= $g['nama']; ?></td>
                    <td><?= $g['alamat']; ?></td>
                    <td><?= $g['no_hp']; ?></td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#updateModal<?= $g['nip_nik']; ?>" class="btn btn-primary">Ubah</a>
                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $g['nip_nik']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Master/addGuru')?>" method="POST">
          <div class="modal-body">
             <div class="form-group">
                <label for="">NIP/NIK</label>
                <input type="text" class="form-control" name="nip_nik">
             </div>
             <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama">
             </div>
             <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat">
             </div>
             <div class="form-group">
                <label for="">No. Handphone</label>
                <input type="text" class="form-control" name="no_hp">
             </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>

<?php foreach($guru as $g1): ?>
    <div class="modal fade" id="updateModal<?= $g1['nip_nik']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Ubah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Master/updateGuru/'.$g1['nip_nik'])?>" method="POST">
          <div class="modal-body">
             <div class="form-group">
                <label for="">NIP/NIK</label>
                <input type="text" class="form-control" value="<?= $g1['nip_nik']; ?>" name="nip_nik">
             </div>
             <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" value="<?= $g1['nama']; ?>" name="nama">
             </div>
             <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" value="<?= $g1['alamat']; ?>" name="alamat">
             </div>
             <div class="form-group">
                <label for="">No. Handphone</label>
                <input type="text" class="form-control" value="<?= $g1['no_hp']; ?>" name="no_hp">
             </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>
<?php endforeach;?>


<?php foreach($guru as $g2): ?>
    <div class="modal fade" id="deleteModal<?= $g2['nip_nik']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Master/deleteGuru/'.$g2['nip_nik'])?>" method="POST">
          <div class="modal-body">
             <h1>Apakah anda yakin ingin menghapus data ini?</h1>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>
<?php endforeach;?>