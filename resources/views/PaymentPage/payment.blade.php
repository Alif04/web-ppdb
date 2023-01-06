@extends('layout')
@section('content')
    @if (Auth::user()->role == 'user')
        @php
            $pembayaran = App\Models\Payment::where('payment_id', $student->id)->first();
        @endphp

     {{-- @foreach ($payment as $pembayaran) --}}
         

      @if(!isset ($payment))
        @if ($errors->any())
            <div class="alert alert-danger mx-auto" style="width: 30cm; height:auto;">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        <div class="col-lg-12 col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                       
                        <div class="stat-content">
                            <div class="text-left dib mt-2  " >
    
                                <h3 style="margin-left: 250px">Selamat Datang, {{$student['name']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="card mt-2" style="border-radius:10px !important; width:1000px;">
                        <div class="card-body"
                            style="padding:35px; box-shadow: 7px 5px 5px rgba(214, 214, 214, 0.8);">
                            <h5>Form Pembayaran</h5>
                            <br>
                            <form method="POST" action="/payment/auth"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_siswa" value="{{ $student->id }}">
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto" style="width:300px;">
                                        <label for="inputPassword6" class="col-form-label">Nama Bank</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="namaBank" id="nama_bank" value="" onchange='checkvalue()'>
                                            <option selected>-- Pilih Bank --</option>
                                            <option value="PT BANK RAKYAT INDONESIA">PT BANK RAKYAT INDONESIA</option>
                                            <option value="PT BANK MANDIRI">PT BANK MANDIRI</option>
                                            <option value="PT BANK NEGARA INDONESIA">PT BANK NEGARA INDONESIA</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                        <div id="bank_lainnya" style="display: none;">
                                            <label for="inputPassword6" class="col-form-label">BANK LAINNYA</label>
                                            <input type="text" class="form-control"
                                                aria-describedby="passwordHelpInline" name="otherBank">
                                        </div>
                                    </div>
                                    <div class="col-auto ml-3" style="width:300px;">
                                        <label for="inputPassword6" class="col-form-label">Nama Pemilik
                                            Rekening</label>
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="pemilikRek">
                                    </div>
                                    <div class="col-auto ml-3" style="width:300px;">
                                        <label for="inputPassword6" class="col-form-label">Nominal</label>
                                        <input type="text" id="nominal" class="form-control"
                                            aria-describedby="passwordHelpInline" name="nominal">
                                    </div>
                                    <br>
                                    <form action="/payment/auth" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="form-group mb-3 mx-4">
                                            <label for="image_upload">Foto</label>
                                            <br>
                                            <input type="file" name="imageBukti" id="image_upload"
                                                class="form-control" style="width: 915px; border:none;">
                                            <br>
                                            <br>
                                            <button class="btn"
                                                style="background-color: #008374; color:white; width:915px;">Upload</button>

                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            @elseif ($payment->status == 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            <i class="bi bi-info-circle"></i>
                            <span>Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya!</span>
                        </div>
                    </div>
                </div>
            @elseif($payment->status == 1)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <i class="bi bi-info-circle"></i>
                            <span>Pembayaran diverifikasi, silahkan melanjutkan ke proses selanjutnya!</span>
                        </div>
                    </div>
                </div>
            @elseif($payment->status == 99)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <i class="bi bi-info-circle"></i>
                            <span>Ada yang salah dengan bukti yang anda berikan, silahkan perbaiki!</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                               
                                <div class="stat-content">
                                    <div class="text-left dib mt-2  " >
            
                                        <h3 style="margin-left: 250px">Silahkan Uploaad Kembali!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <center>
                        @if ($errors->any())
                            <div class="alert alert-danger text-center" style="width: 500px; padding:0;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </center>
                    <div class="d-flex justify-content-center">
                        <div>
                            <div class="card mt-2" style="border-radius:10px !important; width:1000px;">
                                <div class="card-body"
                                    style="padding:45px; box-shadow: 7px 5px 5px rgba(214, 214, 214, 0.8);">
                                    <h5>Form Pembayaran</h5>
                                    <br>
                                    <form method="POST" action="/update/{{ $payment['id'] }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id_siswa" value="{{ $student->id }}">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto" style="width:300px;">
                                                <label for="inputPassword6" class="col-form-label">Nama Bank</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="namaBank" id="nama_bank2" value="" onchange='checkedit()'>
                                                    <option selected>-- Pilih Bank --</option>
                                                    <option value="PT BANK RAKYAT INDONESIA"
                                                        {{ $payment->namaBank == 'PT BANK RAKYAT INDONESIA' ? 'selected' : '' }}>
                                                        PT BANK RAKYAT INDONESIA</option>
                                                    <option value="PT BANK MANDIRI"
                                                        {{ $payment->namaBank == 'PT BANK MANDIRI' ? 'selected' : '' }}>
                                                        PT BANK MANDIRI</option>
                                                    <option value="PT BANK NEGARA INDONESIA"
                                                        {{ $payment->namaBank == 'PT BANK NEGARA INDONESIA' ? 'selected' : '' }}>
                                                        PT BANK NEGARA INDONESIA</option>
                                                    <option value="Others"
                                                        {{ $payment->namaBank == 'Others' ? 'selected' : '' }}>LAINNYA
                                                    </option>
                                                </select>
                                                <div id="bank_lainnya2" style="display: none;">
                                                    <label for="inputPassword6" class="col-form-label">BANK LAINNYA</label>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="passwordHelpInline" name="otherBank">
                                                </div>
                                            </div>
                                            <div class="col-auto ml-3" style="width:300px;">
                                                <label for="inputPassword6" class="col-form-label">Nama Pemilik
                                                    Rekening</label>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline" name="pemilikRek"
                                                    value="{{ $payment->pemilikRek }}">
                                            </div>
                                            <div class="col-auto ml-3" style="width:300px;">
                                                <label for="inputPassword6" class="col-form-label">Nominal</label>
                                                <input type="text" id="nominal" class="form-control"
                                                    aria-describedby="passwordHelpInline" name="nominal"
                                                    value="{{ $payment->nominal }}">
                                            </div>
                                            <br>
                                            <form action="/payment/auth" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="form-group mb-3 mx-3">
                                                    <label for="image_upload" style="margin-left: 20px;">Foto</label>
                                                    <br>
                                                    <input type="file" name="imageBukti" id="image_upload"
                                                        class="form-control" style="width: 915px; border:none !important;"
                                                        value="{{ $payment->imageBukti }}">
                                                    <br>
                                                    <br>
                                                    <button class="btn mx-5"
                                                        style="background-color: #008374; color:white; width:915px;">Perbaharui
                                                        Bukti Pembayaran</button>

                                                </div>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
       
            {{-- @endforeach --}}
            @endif
    @if (Auth::user()->role == 'admin')
    <div class="row">
        <div class="col-sm-6 col-lg-6">
         <div class="card text-white bg-flat-color-1">
             <div class="card-body">
                 <div class="card-left pt-1 float-left">
                     <h3 class="mb-0 fw-r">
                         <span class="currency float-left mr-1">Rp.</span>
                         <span class="count">{{$money}}</span>
                     </h3>
                     <p class="text-light mt-1 m-0">Total Money</p>
                 </div><!-- /.card-left -->

                 <div class="card-right float-right text-right">
                     <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                 </div><!-- /.card-right -->

             </div>

         </div>
        </div>

        <div class="col-sm-6 col-lg-6">
         <div class="card text-white bg-flat-color-3">
             <div class="card-body">
                 <div class="card-left pt-1 float-left">
                     <h3 class="mb-0 fw-r">
                         <span class="count"> {{$payAll->count()}} </span>
                     </h3>
                     <p class="text-light mt-1 m-0">Total clients</p>
                 </div><!-- /.card-left -->

                 <div class="card-right float-right text-right">
                     <i class="icon fade-5 icon-lg pe-7s-users"></i>
                 </div><!-- /.card-right -->

             </div>

         </div>
        </div>

      
   </div>
   <div class="col-lg-12 col-md-6 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-five">
               
                <div class="stat-content">
                    <div class="text-left dib mt-2  " >

                        <h3 style="margin-left: 250px">Mohon Verifikasi!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="card mt-2 shadow-lg" style="border-radius:10px !important; width:1000px;">
                        <div class="card-body" style="padding:35px; box-shadow: 7px 5px 5px rgba(214, 214, 214, 0.8);">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Registrasi</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Bukti Pembayaran</th>
                                        <th scope="col">Detail Pembayaran</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payAll as $pembayaran)

                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $pembayaran->id }}
                                            </td>
                                            <td>
                                                {{ $pembayaran['pemilikRek'] }}
                                            </td>
                                            <td>
                                                <a href="/show/student/{{ $pembayaran->id }}">Lihat</a>
                                            </td>
                                            <td>
                                                <a href="/detail/{{ $pembayaran->id }}">Detail</a>
                                            </td>
                                            <td class="d-flex">
                                                @if ($pembayaran->status == 0)
                                                    <a href="/validation/{{$pembayaran->id}}" type="button"
                                                        class="btn btn-success">Validation</a>
                                                    <a href="/reject/{{$pembayaran->id}}" type="button"
                                                        class="btn btn-danger ml-2">Tolak</a>
                                                @elseif($pembayaran->status == 1)
                                                    <p class="text-success">Divalidasi</p>
                                                @else
                                                    <p class="text-danger">Ditolak</p>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
    @endif
    <script>
       
  var rupiah = document.getElementById("nominal");
  rupiah.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp.');
  });

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
      split = number_string.split(","),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? "." : "";
      rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
  }

    </script>
    <script>
        function checkvalue() {
            var nama_bank = document.getElementById("nama_bank").value;
            var bankLainnya = document.getElementById("bank_lainnya");
            if (nama_bank === "LAINNYA") {
                bankLainnya.style.display = 'block';
            } else {
                bankLainnya.style.display = 'none';
            }
        }
    </script>
    <script>
        function checkedit() {
            var nama_bank = document.getElementById("nama_bank2").value;
            var bankLainnya2 = document.getElementById("bank_lainnya2");
            if (nama_bank === "LAINNYA") {
                bankLainnya2.style.display = 'block';
            } else {
                bankLainnya2.style.display = 'none';
            }
        }
    </script>

@endsection
