<div class="container pt-5">
    <h3><?= $title?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" >
            <li class="breadcrumb-item"><a>siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('siswa/add'); ?>">Tambah Data</a>
            <a class="btn btn-info mb-2" href="<?= base_url('Laporan/index'); ?>">Cetak PDF</a>
            <div mb-2>
                <!--Menampilkan flash data(pesan saat data berhasil disimpan)-->
                <?php if($this->session->flashdata('message')) :
                echo $this->session->flashdata('message');
                endif; ?>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tablesiswa">
                            <thead>
                                <tr class="table-success">
                                    <th></th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>ALAMAT</th>
                                    <th>AGAMA</th>
                                    <th>NO HP</th>
                                    <th>EMAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_siswa as $row) :?>
                                    <tr>
                                        <td>
                                            <a href="<?= site_url('siswa/edit/' . $row->IdMhsw) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?=$row->IdMhsw ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                        <td><?=$row->Nama?></td>
                                        <td><?=$row->JenisKelamin?></td>
                                        <td><?=$row->Alamat?></td>
                                        <td><?=$row->Agama?></td>
                                        <td><?=$row->NoHp?></td>
                                        <td><?=$row->Email?></td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anad ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div> 
</div>

<script>
    //menampilkan data ke tabel dengab plugin datatables
    $('#tablesiswa').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tablesiswa').on('click', '.item-delete', function() {
        //ambil data dari atribute data
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutan ditekan, data id akan
        $('#btdelete').unbind().click(function(){
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>siswa/delete/',
                data: {
                    id:id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>