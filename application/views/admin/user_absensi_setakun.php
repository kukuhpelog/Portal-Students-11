<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $title ?> <?php echo $namakelas ?></title>

  <!-- CSS  -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/iconlogo_v6.png');?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/-->
<!--==================================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.css">
  
</head>

<body>
<main>
<!--Header-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('admin/user_absensi/view_akunabsensi_belumdaftar/'.$namakelas.'/'.$idkelas);?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('absensi/user_absensi/view_akunabsensi_belumdaftar/'.$namakelas.'/'.$idkelas);?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<div class="container">
<div class="row">
	<div class="card col s12 green lighten-3">
	<div class="col s6">
		<p> <b> Nomor Induk: </b> <?php echo $nomor_induk ?> </p>
		<p> <b> Nama Siswa: </b> <?php echo $nama_siswa ?> </p>
		<p> <b> Jenis Kelamin: </b>
		  <input disabled <?php if ($jenis_kelamin == 'Laki-Laki'){?>checked <?php } ?> name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1" />
		  <label for="test1">Laki-Laki</label>
		  <input disabled <?php if ($jenis_kelamin == 'Perempuan'){?>checked <?php } ?> name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
		  <label for="test2">Perempuan</label>
		</p>
	</div>
	</div>
</div>
<?php echo form_open( 'admin/user_absensi/tambah_userabsensi/'.$namakelas.'/'.$idkelas.'/'.$ID); ?>
<div class="row card">
  <div class="col s12">
  <br/>
  <br/>
	<input hidden id="username" name="username" value="<?php echo $nama_siswa ?>" type="text">
	<input hidden id="hak_akses" name="hak_akses" value="absensi" type="text">
	<input hidden id="id_kelas" name="id_kelas" value="<?php echo $namakelas ?>" type="text">
	<input hidden id="idkelas" name="idkelas" value="<?php echo $idkelas ?>" type="text">
	<div class="input-field col s12 m6">
	  <input id="no_identitas" name="no_identitas" type="text" class="validate">
	  <label for="no_identitas">Username</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="password" name="password" type="text" class="validate">
	  <label for="password">Password</label>
	</div>
  </div>
  <div class="col s12 center">
	<button class="waves-effect waves-light btn" type="submit" value="tambah" name="tambah"> Simpan </button>
	<br/>
	<br/>
  </div>
  <div class="col s12 left">
	<label class="red-text"> *Buat username dan password sesuai dengan Nama Siswa atau NIS, namun ditambahkan dengan ciri sebagai Sie Absensi </label>
	<br>
  </div>
</div>
<?php echo form_close(); ?>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>