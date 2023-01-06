
 <!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
 
<body>
  <section class="register">
    <div class="register_box">
        <div class="left">

            <div class="contact" style="margin-top: 20px;">
              <form method="POST" action="{{url('/register/auth')}}">
                @csrf
                    <h4 class="text-center" style="color: #f85a40; font-weight:800;">Ayo daftar untuk menjadi Peserta Didik Baru</h4>
                    <br>
                    <div class="d-flex">
                        <input type="number" placeholder="NISN" name="nisn">
                        <select name="jk" class="form-control3 ml-5" id="jk" value="">
                            <option hidden style="" class="">Choose Gender!</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Nama Lengkap" name="name">
                    <input type="text" placeholder="Email Aktif" name="email">
                    <input type="number" placeholder="Nomor Handphone" name="noHp">
                    <input type="number" placeholder="Nomor HP Ayah" name="noAyah">
                    <input type="number" placeholder="Nomor HP Ibu" name="noIbu">
                    <br>
                    <br>
                    <center>
                        <select name="asalSekolah" class="form-control3" id="sekolah" value=""
                            onchange='checkvalue()'>
                            <option hidden style="">-- Pilih Sekolah --</option>
                            <option value="SMPN 02 Ciawi">SMPN 02 Ciawi</option>
                            <option value="SMPN 01 Ciawi">SMPN 01 Ciawi</option>
                            <option value="SMPN 03 Ciawi">SMPN 03 Ciawi</option>
                            <option value="SMPN 17 Bogor">SMPN 17  Bogor</option>
                            <option value="others" id="other">Other</option>
              </select>                
              <input type="text" placeholder="Asal Sekolah" name="asalSekolah1"
                                id="sekolah_lainnya" style="display: none;">
                        </center>
          </div>

          <button type="submit" class="btn  mb-0 px-5" style="border-radius: 50px; margin-left:400px; background-color: #008374">
            Login
            </button><!-- End Call To Action Section -->
  </div>
</body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src=" {{url('assets/js/index.js')}} "type="text/javascript"></script>
  <script src=" {{url('assets')}} "></script>
  <script>
    $(document).ready(function() {
            $(".select2").select2({
                theme: 'bootstrap4',
                placeholder: "Please Select"
            });

        });
    </script>

    <script>
        function checkvalue() {
            var sekolah = document.getElementById("sekolah").value;
            var sekolahLainnya = document.getElementById("sekolah_lainnya");
            if (sekolah === "others") {
                sekolahLainnya.style.display = 'block';
            } else {
                sekolahLainnya.style.display = 'none';
            }
        }
    </script>

 </script>
</html>

 {{-- <form method="POST" action="/register/auth">
    @csrf
        <div class="mb-3 mt-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NISN</label>
            <input type="number" class="form-control" name="nisn" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. HandPhone</label>
        <input type="number" class="form-control" name="noHp" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. Ayah</label>
        <input type="number" class="form-control" name="noAyah" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No. Ibu</label>
        <input type="number" class="form-control" name="noIbu" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
          <select name="jk" class="form-select" id="">
            <option selected>Choose Your Gender</option>
            <option value="perempuan">Perempuan</option>
            <option value="laki-laki">Laki - Laki</option>
          </select>
        </div>

      
    <label for="add_fields_placeholder">Asal Sekolah </label>
    <select name="asalSekolah" class="form-select"  id="school" onchange="showInput(this.value)">
        <option selected>Choose Your School</option>
        <option value="SMPN 02 Ciawi">SMPN 02 Ciawi</option>
        <option value="SMPN 01 Ciawi">SMPN 01 Ciawi</option>
        <option value="SMPN 03 Ciawi">SMPN 03 Ciawi</option>
        <option value="SMPN 17 Bogor">SMPN 17  Bogor</option>
        <option value="other" id="other">Other</option>
    </select>
    <div class="mb-3">
    <div id="anoForm" class="anothInput">
        Other School : 
        <input type="text" class="form-control" name="asalSekolah1" id="fno">
     </div>
    </div>
     <button type="submit" class="btn btn-primary mb-3">Submit</button>

    </form>
    </div> --}}