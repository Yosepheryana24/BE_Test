@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Daftar kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                  </ol>
              </nav>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
          <div class="row">
              <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title"> Data Diri </h4>
                          <form class="form-sample">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Ahmad Syaifullah"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Laki-laki"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tempat Lahir"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tanggal Lahir" v>
                                      </div>
      
                                      <div class="form-group">
                                          <label for="#">Agama</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Agama"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Email</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=" Email"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor HP "  >
                                      </div>
      
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor KTP "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File KTP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="File KTP "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nama Bank "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor Bank Akun "  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="#" rows="6"
                                              placeholder="Alamat Domisili"  ></textarea>
                                      </div>
                                  </div>
                              </div><br>
                              <h4 class="card-title"> Data Pendidikan </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Pendidikan">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Universitas</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Universitas">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                          <div class="form-group">
                                              <div class="input-group" name="#">
                                                  <input type="text" class="form-control mr-2" id="#" placeholder="Tahun Lulus">
                                                      <div class="form-check ">
                                                          <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input"> Masih Kuliah
                                                          </label>
                                                      </div>
                                                  
                                              </div>
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Jurusan </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Jurusan">
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Semester</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Semester">
                                      </div>
                                  </div><br>
                                  </div>
                                  <h4 class="card-title"> Pengalaman Organisai </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Organisasi</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="organisasi">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tahun</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="tahun">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jabatan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="jabatan">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="6"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File</label>
                                          <input type="file" class="form-control" id="#" placeholder="">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                  <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="#">Keahlian</label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="10"></textarea>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Lain - Lain </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">File CV</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="File CV.pdf">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Past Photo</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Photo.jpg">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Portofolio</label>
                                          <input type="text" class="form-control" id="#" placeholder="Portofolio.pdf">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                  <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Internet
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Kampus
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Instagram
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Facebook
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Twitter
                                              <i class="input-helper"></i></label>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                                              Lain-lain
                                              <i class="input-helper"></i></label>
                                          </div>
                                      
                                          <input type="text" class="form-control" id="#" placeholder="">
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Data Akun Magang </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Lowongan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Lowongan"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tipe Magang </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tipe Magang"  >
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Periode Magang</label>
                                          <input type="text" class="form-control" id="#" placeholder="Periode Magang"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Lokasi Magang</label>
                                          <input type="text" class="form-control" id="#" placeholder="Lokasi Magang "  >
                                      </div>
                                  </div>
                                  </div><br>
                              <h4 class="card-title">Proses Seleksi </h4>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Hasil</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=""  >
                                      </div>
                                  </div>
                              </div><br>
                          </form>
                          <div class="float-right">
                              <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                              <a href="{{ url('data_activity') }}" type="button" class="btn btn-primary mb-2 mr-2">Simpan Perubahan</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection