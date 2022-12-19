<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.iconify.design/iconify-icon/0.0.2/iconify-icon.min.js"></script>
    <title>FillCar</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet"');
        body{
            background-color : #e1dbdb;
            margin: 0;
            padding: 0;
            font-family: 'Figtree', 'sans-serif';
        }
        .main{
            width: 100%;
            height: 100%;
        }
        a:hover{
          text-decoration: none;
          height: inherit;
        }

        p{
          margin-bottom: 0;
        }

        .bg-hijau{
          background-color: #7c7171;
          position: fixed;
          z-index: 2;
          width: 100%;
          height: 60px;
        }

        .wrap-bullet{
          width: 50px;
          height: 50px;
          border-radius: 50px;
        }

        .form-control{
          border: none;
        }

        .iconify{
          color: #fff;
          width: 35px;
          height: 35px;
          border-radius: 50px;
        }
        
        .font-10{
          font-size: 10px;
        }

        .font-12{
          font-size: 12px;
        }

        .font-14{
          font-size: 14px;
        }

        .font-16{
          font-size: 16px;
        }

        .font-20{
          font-size: 20px;
        }

        .text-hitam{
          color: #000;
        }

        .text-putih{
          color: #fff;
        }

        .text-pink{
          color: #e03f7d;
        }

        .text-gray{
          color: #AAAA;
        }

        .fub{
          font-weight: bold;
        }

        .bullet{
          background-color: #fff;
          border-radius: 100%;
          height: 43px;
          width: 54px;
          top: -15px;
          padding: 15px 15px;
          position: relative;
          justify-content: center;
          margin-top: -20px;
        }

        .wrap-bullet{
          width: 250px;
          height: 150px;
        }

        footer{
          background-color: #7c7171;
          height: 60px;
          width: 100%;
          box-shadow: 0px 3px 5px #rgba (0, 0, 0, 0.2);
          bottom: 0;
          position: fixed;
          z-index: 2;
          display: flex;
          align-items: center;
          justify-content: space-around;
          left: 50%;
          transform: translatex(-50%);
        }

        .form-control{
          background-color: #E7dbdb;
        }

        .custom-select{
          background-color: #E7dbdb;
        }

        .btn{
          background-color: #7c7171;
        }
        </style>
  </head>

  <body>
    <div class="main">
        <div class="bg-hijau">
          <div class="d-flex align-items-center ml-4 pt-1">
            <a href="<?= base_url('home'); ?>">
              <img class="iconify" src="https://api.iconify.design/ooui/arrow-previous-ltr.svg?color=white">
            </a>
            <p class="text-putih font-20 fub mt-2 p-1 ml-4">TRANSAKSI</p>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center mt-5">
            <img class="wrap-bullet" src="https://i.ibb.co/zn1Jq0B/logo-F.png">
        </div>
        <div class="col-md-6">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg">
                  <?php echo form_open('page/cetak'); ?>
                  <div class="p-5">
                    <p class="text-hitam font-20 fub mt-2 p-1 ml-4"><center>TRANSAKSI</center></p>
                    <br>
                    <form action="<?= base_url('page/cetak');   ?>" method="post">
                      <?= csrf_field() ?>
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" <?php if (session('errors.namalengkap')) : ?>is-invalid<?php endif ?>"
                          name="namalengkap" placeholder="<?=lang('Masukan Nama Lengkap')?>">
                      </div>
                      <div class="form-group">
                        <label>Nomor Kendaraan</label>
                        <input type="text" class="form-control" <?php if (session('errors.nomorkendaraan')) : ?>is-invalid<?php endif ?>"
                          name="nomorkendaraan" placeholder="<?=lang('Masukan Nomor Kendaraan')?>">
                      </div>
                      <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="text" class="form-control" <?php if (session('errors.nomorhandphone')) : ?>is-invalid<?php endif ?>"
                          name="nomorhandphone" placeholder="<?=lang('Masukan Nomor Handphone')?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Pengisian</label>
                        <select class="form-control" name="Charging">
                          <option>Mobil Listrik</option>
                          <option>Motor Listrik</option>
                          <option>Sepeda Listrik</option>
                          <option>Sekuter Listrik</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nominal Transaksi</label>
                        <input type="text" class="form-control" <?php if (session('errors.nominal_transaksi')) : ?>is-invalid<?php endif ?>"
                          name="nominal_transaksi" placeholder="<?=lang('Minimal 50.000')?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Lokasi Pengisian</label>
                        <select class="form-control" name="Location">
                          <option>SPKLU PASAR REBO</option>
                          <option>SPKLU KERAMAT JATI</option>
                          <option>SPKLU BOGOR</option>
                          <option>SPKLU TMII SQUARE</option>
                        </select>
                      </div>
                      <center>
                        <button type="submit" class="btn btn-primary">Charging</button>
                      </center>
                    </form>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!--Footer-->
  <footer>
    <div class="d-flex flex-column align-items-center mt-2">
      <a href="<?= base_url('home'); ?>">
        <img class="iconify mt-2 p-1 ml-1" src="https://api.iconify.design/clarity/home-solid.svg?color=white">
        <p class="text-putih font-14">Home</p>
      </a>
    </div>

    <div class="d-flex flex-column align-items-center mt-2">
      <a href="<?= base_url('riwayat'); ?>">
        <img class="iconify mt-2 p-1 ml-2" src="https://api.iconify.design/ic/outline-payments.svg?color=white">
        <p class="text-putih font-14">Transaksi</p>
      </a>
    </div>

    <div class="d-flex flex-column align-items-center">
    <a href="<?= base_url('Transaksi'); ?>">
      <img class="bullet mt-2 p-1 ml-2" src="https://api.iconify.design/tabler/recharging.svg">
      <p class="text-putih font-14 ml-2">Charging</p>
    </a>
    </div>
    
    <div class="d-flex flex-column align-items-center mt-2">
      <a href="<?= base_url('message'); ?>">
        <img class="iconify mt-2 p-1 ml-2" src="https://api.iconify.design/mdi/inbox-full-outline.svg?color=white">
        <p class="text-putih font-14">Message</p>
      </a>
    </div>
    
    <div class="d-flex flex-column align-items-center mt-2">
      <a href="<?= base_url('account'); ?>">
        <img class="iconify mt-2 p-1 ml-2" src="https://api.iconify.design/ic/outline-supervisor-account.svg?color=white">
        <p class="text-putih font-14">Account</p>
      </a>  
    </div>
  </footer>
  <!-- End Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>