<? $this->load->view('mahasiswa/headerfooter/header');?>
<? 
if($aksi=='aksi_add'){
    $id="";
    $nama="";
    $nohp="";
    $nim="";
    $gedung="";
    $nolantai="";
    $nokamar="";
    $bayar="";
    $jumlah="";
    $metodebayar="";
    $paket="";
}else{
  foreach($qdata as $rowdata){
    $id=$rowdata->kode_laundry;
    $nama=$rowdata->nama;
    $nohp=$rowdata->nohp;
    $nim=$rowdata->nim;
    $gedung=$rowdata->gedung;
    $nolantai=$rowdata->nolantai;
    $nokamar=$rowdata->nokamar;
    $bayar=$rowdata->bayar;
    $jumlah=$rowdata->jumlah;
    $metodebayar=$rowdata->metodebayar;
    $paket=$rowdata->paket;
  }
}
?>

<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
	<center>
  <div class="panel-heading">
  <h3>Form Registrasi Laundry Citra Sukapura Megah</h3></div>
  	</center>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>registrasi/form/<?=$aksi?>" method="post">
       <table class="table table-striped">
 
         <tr>
          <td>Nama Lengkap</td>
          <td>
            <div class="col-sm-9">
             	<input type="hidden" name="id" class="form-control" value="<?=$id?>">
                <input type="text" required name="nama" class="form-control" value="<?=$nama?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>Nomor Handphone</td>
              <td>
          			<div class="col-sm-9">
            			<input type="text" name="nohp" required class="form-control" value="<?=$nohp?>">
          			</div>
          	  </td>
         </tr>

         <tr>
          <td>NIM</td>
          	  <td>
          			<div class="col-sm-9">
            			<input type="text" name="nim" required class="form-control" value="<?=$nim?>">
          			</div>
              </td>
         </tr>

         <tr>
          <td>Gedung</td>
          	  <td> 
          			<div class="col-sm-5">
          					<select name="gedung" required class="form-control">
           						<option></option>
           						<option value="Gedung Putra 1" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 1'){echo"selected=selected";}}?>>Gedung Putra 1</option>
           						<option value="Gedung Putra 2" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 2'){echo"selected=selected";}}?>>Gedung Putra 2</option>
           						<option value="Gedung Putra 3" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 3'){echo"selected=selected";}}?>>Gedung Putra 3</option>
           						<option value="Gedung Putra 4" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 4'){echo"selected=selected";}}?>>Gedung Putra 4</option>
           						<option value="Gedung Putra 5" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 5'){echo"selected=selected";}}?>>Gedung Putra 5</option>
           						<option value="Gedung Putra 6" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 6'){echo"selected=selected";}}?>>Gedung Putra 6</option>
           						<option value="Gedung Putra 7" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 7'){echo"selected=selected";}}?>>Gedung Putra 7</option>
           						<option value="Gedung Putra 8" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 8'){echo"selected=selected";}}?>>Gedung Putra 8</option>
           						<option value="Gedung Putra 9" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 9'){echo"selected=selected";}}?>>Gedung Putra 9</option>
           						<option value="Gedung Putra 10" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putra 10'){echo"selected=selected";}}?>>Gedung Putra 10</option>
           						<option></option>
           						<option value="Gedung Putri 1" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 1'){echo"selected=selected";}}?>>Gedung Putri 1</option>
           						<option value="Gedung Putri 2" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 2'){echo"selected=selected";}}?>>Gedung Putri 2</option>
           						<option value="Gedung Putri 3" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 3'){echo"selected=selected";}}?>>Gedung Putri 3</option>
           						<option value="Gedung Putri 4" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 4'){echo"selected=selected";}}?>>Gedung Putri 4</option>
           						<option value="Gedung Putri 5" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 5'){echo"selected=selected";}}?>>Gedung Putri 5</option>
           						<option value="Gedung Putri 6" <? if($aksi=="aksi_edit"){if($gedung=='Gedung Putri 6'){echo"selected=selected";}}?>>Gedung Putri 6</option>          						
           					</select>
          			</div>
          	  </td>
         </tr>
        
         <tr>
          <td>Nomor Lantai</td>
         	  <td>
          			<div class="col-sm-5">
          					<select name="noLantai" required class="form-control">
           						<option></option>
           						<option value="Lantai 1" <? if($aksi=="aksi_edit"){if($noLantai=='Lantai 1'){echo"selected=selected";}}?>>Lantai 1</option>
           						<option value="Lantai 2" <? if($aksi=="aksi_edit"){if($noLantai=='Lantai 2'){echo"selected=selected";}}?>>Lantai 2</option>
           						<option value="Lantai 3" <? if($aksi=="aksi_edit"){if($noLantai=='Lantai 3'){echo"selected=selected";}}?>>Lantai 3</option>
           						<option value="Lantai 4" <? if($aksi=="aksi_edit"){if($noLantai=='Lantai 4'){echo"selected=selected";}}?>>Lantai 4</option>          					
           					</select>
          			</div>
          	  </td>
         </tr>

         <tr>
          <td>Nomor Kamar</td>
         	  <td>
          			<div class="col-sm-5">
          					<select name="noKamar" required class="form-control">
           						<option></option>
           					<option value="01" <? if($aksi=="aksi_edit"){if($noLantai=='01'){echo"selected=selected";}}?>>01</option>
           					<option value="02" <? if($aksi=="aksi_edit"){if($noLantai=='02'){echo"selected=selected";}}?>>02</option>
           					<option value="03" <? if($aksi=="aksi_edit"){if($noLantai=='03'){echo"selected=selected";}}?>>03</option>
           					<option value="04" <? if($aksi=="aksi_edit"){if($noLantai=='04'){echo"selected=selected";}}?>>04</option>
           					<option value="05" <? if($aksi=="aksi_edit"){if($noLantai=='05'){echo"selected=selected";}}?>>05</option>
           					<option value="06" <? if($aksi=="aksi_edit"){if($noLantai=='06'){echo"selected=selected";}}?>>06</option>
           					<option value="07" <? if($aksi=="aksi_edit"){if($noLantai=='07'){echo"selected=selected";}}?>>07</option>
           					<option value="08" <? if($aksi=="aksi_edit"){if($noLantai=='08'){echo"selected=selected";}}?>>08</option>
           					<option value="09" <? if($aksi=="aksi_edit"){if($noLantai=='09'){echo"selected=selected";}}?>>09</option>
           					<option value="10" <? if($aksi=="aksi_edit"){if($noLantai=='10'){echo"selected=selected";}}?>>10</option>
           					<option value="11" <? if($aksi=="aksi_edit"){if($noLantai=='11'){echo"selected=selected";}}?>>11</option>
           					<option value="12" <? if($aksi=="aksi_edit"){if($noLantai=='12'){echo"selected=selected";}}?>>12</option>
           					<option value="13" <? if($aksi=="aksi_edit"){if($noLantai=='13'){echo"selected=selected";}}?>>13</option>
           					<option value="14" <? if($aksi=="aksi_edit"){if($noLantai=='14'){echo"selected=selected";}}?>>14</option>
           					<option value="15" <? if($aksi=="aksi_edit"){if($noLantai=='15'){echo"selected=selected";}}?>>15</option>
           					<option value="16" <? if($aksi=="aksi_edit"){if($noLantai=='16'){echo"selected=selected";}}?>>16</option>
           					<option value="17" <? if($aksi=="aksi_edit"){if($noLantai=='17'){echo"selected=selected";}}?>>17</option>
           					<option value="18" <? if($aksi=="aksi_edit"){if($noLantai=='18'){echo"selected=selected";}}?>>18</option>
           					<option value="19" <? if($aksi=="aksi_edit"){if($noLantai=='19'){echo"selected=selected";}}?>>19</option>
           					<option value="20" <? if($aksi=="aksi_edit"){if($noLantai=='20'){echo"selected=selected";}}?>>20</option>
           					<option value="21" <? if($aksi=="aksi_edit"){if($noLantai=='21'){echo"selected=selected";}}?>>21</option>
           					<option value="22" <? if($aksi=="aksi_edit"){if($noLantai=='22'){echo"selected=selected";}}?>>22</option>
           					<option value="23" <? if($aksi=="aksi_edit"){if($noLantai=='23'){echo"selected=selected";}}?>>23</option>
           					<option value="24" <? if($aksi=="aksi_edit"){if($noLantai=='24'){echo"selected=selected";}}?>>24</option>
           					<option value="25" <? if($aksi=="aksi_edit"){if($noLantai=='25'){echo"selected=selected";}}?>>25</option>
           					<option value="26" <? if($aksi=="aksi_edit"){if($noLantai=='26'){echo"selected=selected";}}?>>26</option>
           					<option value="27" <? if($aksi=="aksi_edit"){if($noLantai=='27'){echo"selected=selected";}}?>>27</option>
           					<option value="28" <? if($aksi=="aksi_edit"){if($noLantai=='28'){echo"selected=selected";}}?>>28</option>
           					<option value="29" <? if($aksi=="aksi_edit"){if($noLantai=='29'){echo"selected=selected";}}?>>29</option>
           					<option value="30" <? if($aksi=="aksi_edit"){if($noLantai=='30'){echo"selected=selected";}}?>>30</option>
           					<option value="31" <? if($aksi=="aksi_edit"){if($noLantai=='31'){echo"selected=selected";}}?>>31</option>
           					<option value="32" <? if($aksi=="aksi_edit"){if($noLantai=='32'){echo"selected=selected";}}?>>32</option>
           					<option value="33" <? if($aksi=="aksi_edit"){if($noLantai=='33'){echo"selected=selected";}}?>>33</option>
           					<option value="34" <? if($aksi=="aksi_edit"){if($noLantai=='34'){echo"selected=selected";}}?>>34</option>
           					<option value="35" <? if($aksi=="aksi_edit"){if($noLantai=='35'){echo"selected=selected";}}?>>35</option>
           					<option value="36" <? if($aksi=="aksi_edit"){if($noLantai=='36'){echo"selected=selected";}}?>>36</option>
           					<option value="37" <? if($aksi=="aksi_edit"){if($noLantai=='37'){echo"selected=selected";}}?>>37</option>
           					<option value="38" <? if($aksi=="aksi_edit"){if($noLantai=='38'){echo"selected=selected";}}?>>38</option>
           					<option value="39" <? if($aksi=="aksi_edit"){if($noLantai=='39'){echo"selected=selected";}}?>>39</option>
           					<option value="40" <? if($aksi=="aksi_edit"){if($noLantai=='40'){echo"selected=selected";}}?>>40</option>
           					<option value="41" <? if($aksi=="aksi_edit"){if($noLantai=='41'){echo"selected=selected";}}?>>41</option>
           					<option value="42" <? if($aksi=="aksi_edit"){if($noLantai=='42'){echo"selected=selected";}}?>>42</option>
           					<option value="43" <? if($aksi=="aksi_edit"){if($noLantai=='43'){echo"selected=selected";}}?>>43</option>
           					<option value="44" <? if($aksi=="aksi_edit"){if($noLantai=='44'){echo"selected=selected";}}?>>44</option>    				
           					</select>
          			</div>
          	  </td>
         </tr>


       <tr>
          <td>Pilihan Paket</td>
          <td>
          		<table>
          		<tr>
          		<td>
           		<div class="radio">
      				&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="paket" required value="Paket 1" <? if($aksi=="aksi_edit"){if($noLantai=='Paket 1'){echo"selected=selected";}}?>>Paket 1 Bulan
      				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    			</div>
    			</td>

    			<td>
    	  
    			<div class="radio">
      				<label><input type="radio" name="paket" required value="Paket 6" <? if($aksi=="aksi_edit"){if($noLantai=='Paket 6'){echo"selected=selected";}}?>>Paket 6 Bulan</label>
    			</div>
    			</td>
    			</tr>
    			</table>
          </td>
       </tr>

        <tr>
          <td>Pembayaran</td>
         	  <td>
          			<div class="col-sm-5">
          					<select name="bayar" required class="form-control">
           						<option></option>
           						<option value="Lunas" <? if($aksi=="aksi_edit"){if($bayar=='Lunas'){echo"selected=selected";}}?>>Lunas</option>
           						<option value="DP" <? if($aksi=="aksi_edit"){if($bayar=='DP'){echo"selected=selected";}}?>>DP</option>
           					</select>
          			</div>
          	  </td>
        </tr>

        <tr>
          <td>Jumlah</td>
          <td>
            <div class="col-sm-5">
             	<input type="text" required name="jumlah" class="form-control" value="Rp. <?=$jumlah?>">
            </div>
            </td>
        </tr>

        <tr>
          <td>Metode Bayar</td>
         	  <td>
          			<div class="col-sm-5">
          					<select name="metodebayar" required class="form-control">
           						<option></option>
           						<option value="Cash" <? if($aksi=="aksi_edit"){if($metodebayar=='Cash'){echo"selected=selected";}}?>>Cash</option>
           						<option value="Debit" <? if($aksi=="aksi_edit"){if($metodebayar=='Debit'){echo"selected=selected";}}?>>Debit</option>
           					</select>
          			</div>
          	  </td>
        </tr>

         <tr>
           
         </tr>
         <tr>
          	<td colspan="2">
          	  <label class="checkbox-inline">
      			<input type="checkbox" required value="">Saya akan mengikuti segala ketentuan yang berlaku di dalam Laundry Citra Sukapura Megah
    		 </label>
    		 </td>
    	 </tr>
    	 <tr>
    		 <td> 

          	</td>
         </tr>

       </table>
       <div class="panel-heading">
    		 			<center>
            	<input type="submit" class="btn btn-success" value="Simpan" onclick="return confirm('Apakah data yang Anda masukkan sudah benar ?')">&nbsp;&nbsp;
            	<button type="reset" class="btn btn-info" value="Batal">Reset</button>
            			</center>
            	  	</div>
     </form>

    </div>
    </div>    <!-- /panel -->
    </div> <!-- /container -->
<? $this->load->view('mahasiswa/headerfooter/footer');?>