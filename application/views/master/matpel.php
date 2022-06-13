<div class="container-fluid mt-3">
    <h5>Data Master Matpel</h5>
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah</a>
    <table class="mt-3 table table-bordered" id="Table_ID">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Matpel</th>
                <th>Nama Matpel</th>
                <th>Pengajar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($matpel as $mapel): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mapel['kode_mp']; ?></td>
                    <td><?= $mapel['nama_mp']; ?></td>
                    <td><?= $mapel['nama']; ?></td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#updateModal<?= $mapel['kode_mp']; ?>" class="btn btn-primary">Ubah</a>
                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $mapel['kode_mp']; ?>" class="btn btn-danger">Hapus</a>
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
      <form action="<?= base_url('Master/addMatpel')?>" method="POST">
          <div class="modal-body">
          <div class="form-group">
                <label for="">Kode Matpel</label>
                <input type="text" class="form-control" name="kode_mp">
             </div>
             <div class="form-group">
                <label for="">Nama Matpel</label>
                <input type="text" class="form-control" name="nama_mp">
             </div>
             <div class="form-group">
                <label for="">Nama Pengajar</label>
                <select name="nip_nik" class="form-control">
                <option>-- Pilih Guru --</option>
                    <?php foreach($guru as $g):?>
                        <option value="<?= $g['nip_nik']; ?>"><?= $g['nama']; ?></option>
                    <?php endforeach;?>
                </select>
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

<?php foreach($matpel as $mp): ?>
    <div class="modal fade" id="updateModal<?= $mp['kode_mp']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Ubah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Master/updateMatpel/'.$mp['kode_mp'])?>" method="POST">
          <div class="modal-body">
             <div class="form-group">
                <label for="">Kode Matpel</label>
                <input type="text" class="form-control" value="<?= $mp['kode_mp']; ?>" name="kode_mp">
             </div>
             <div class="form-group">
                <label for="">Nama Matpel</label>
                <input type="text" class="form-control" value="<?= $mp['nama_mp']; ?>" name="nama_mp">
             </div>
             <div class="form-group">
                <label for="">Nama Pengajar</label>
                <select name="nip_nik" class="form-control">
                <option value="<?= $mp['nip_nik']; ?>"><?= $mp['nama']; ?></option>
                    <?php foreach($guru as $g):?>
                        <option value="<?= $g['nip_nik']; ?>"><?= $g['nama']; ?></option>
                    <?php endforeach;?>
                </select>
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


<?php foreach($matpel as $mp1): ?>
    <div class="modal fade" id="deleteModal<?= $mp1['kode_mp']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Matpel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Master/deleteMatpel/'.$mp1['kode_mp'])?>" method="POST">
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