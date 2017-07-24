<? $this->load->view('admin/headerfooter/header');?>
 
    <div class="container2">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Daftar Registrasi Mahasiswa</b></div>
  <div class="panel-body">
    <p><?=$this->session->flashdata('pesan')?> </p>

             <div class="panel2">
         			<a href="<?=base_url()?>admin/inputdata/form/add" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-plus-circle"></i> Tambah</a>
      		 </div>

       <table class="table table-striped">
        <thead>
        <tr>
        </tr>
         <tr>
         <th>No</th>
         <th>No. HP</th>
         <th>Nama</th>
         <th>NIM</th>
         <th>Gedung Asrama</th>
         <th>No. Lantai</th>
         <th>No. Kamar</th>
         <th>Paket</th>
         <th>Pembayaran</th>
         <th>Jumlah</th>
         <th>Metode Bayar</th>
         <th>Action</th>
         </tr>
        </thead>
        <tbody>
        <? if(empty($qlaundry)){ ?>
         <tr>
          <td colspan="8">Data tidak ditemukan</td>
         </tr>
        <? }else{
          $no=0;
          foreach($qlaundry as $rowlaundry){ $no++;?>
         <tr>
          <td><?=$no?></td>
          <td><?=$rowlaundry->nohp?></td>
          <td><?=$rowlaundry->nama?></td>
          <td><?=$rowlaundry->nim?></td>
          <td><?=$rowlaundry->gedung?></td>
          <td><?=$rowlaundry->nolantai?></td>
          <td><?=$rowlaundry->nokamar?></td>
          <td><?=$rowlaundry->paket?></td>
          <td><?=$rowlaundry->bayar?></td>
          <td><?=$rowlaundry->jumlah?></td>
          <td><?=$rowlaundry->metodebayar?></td>
          <td>
           <a href="<?=base_url()?>admin/inputdata/form/edit/<?=$rowlaundry->kode_laundry?>" class="btn btn-info btn-sm"><i class="fa  fa-fw fa-pencil"></i> Update</a>
           <a href="<?=base_url()?>admin/inputdata/hapus/<?=$rowlaundry->kode_laundry?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data mahasiswa ini ?')"><i class="fa fa-fw fa-trash-o"></i> Hapus</a>
          </td>
         </tr>
        <? }}?>
        </tbody>
       </table>
        </div>
    </div>    <!-- /panel -->
    </div> <!-- /container -->
<? $this->load->view('admin/headerfooter/footer');?>