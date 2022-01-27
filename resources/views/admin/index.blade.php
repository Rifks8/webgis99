@extends('layout.main')

@section('title', 'Login Admin')

@section('container')
<div class="container">
	<div class="row">
		<h1 class="my-4 text-center">Admin Website</h1>
		<div class="col-md-8 offset-md-2">
			<h2 align='center'>Silahkan Login</h2>
            <form action="" method="post" enctype="multipart/form-data">                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="">                    
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">                        
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="">                    
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">                        
                    </div>
                </div>
                <input type="submit" class="btn btn-info" name="login" value="LOGIN">
                <a href="" class="btn btn-warning mb-5">Login</a>
                <a href="/" class="btn btn-danger mb-5">Kembali</a>
                <?php
        //  if (isset($_POST['login'])) 
        //  {
        //   $ambil = $koneksi->query("SELECT * FROM users WHERE name='$_POST[nama]' 
        //     AND password ='$_POST[password]'");
        //   $yangcocok = $ambil->num_rows;
        //   if ($yangcocok==1)
        //   {
        //     $_SESSION['admin']=$ambil->fetch_assoc();
        //     echo "<div class='alert alert-info'></div>";
        //     echo "<meta http-equiv='refresh' content='1;url={{/}}'>";
        //   }
        //   else
        //   {
        //     echo "<div class='alert alert-danger'>Failed Login!</div>";
        //     echo "<meta http-equiv='refresh' content='1;url={{/about}}'>"; 
        //   }
        //  }
        //  ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </form>
		</div>		
	</div>
</div>
@endsection