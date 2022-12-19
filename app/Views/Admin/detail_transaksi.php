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
            <div class="text-center mt-5">
                <img class="wrap-bullet" src="https://i.ibb.co/zn1Jq0B/logo-F.png">
            </div>
            <p class="text-putih font-20 fub mt-2 p-1 ml-4"> DETAIL TRANSAKSI</p>
          </div>
        </div>
    </div>
    <center>
        <table>
            <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <td>
                    <?= $namalengkap; ?>
                </td>
            </tr>
            <tr>
                <td>Nomor Kendaraan</td>
                <td>:</td>
                <td>
                    <?= $nomorkendaraan; ?>
                </td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td>
                    <?= $nomorhandphone; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Pengisian</td>
                <td>:</td>
                <td>
                    <?= $Charging; ?>
                </td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>
                    <?= $nominal_transaksi; ?>
                </td>
            </tr>
            <tr>
                <td>Lokasi Pengisian</td>
                <td>:</td>
                <td>
                    <?= $Location; ?>
                </td>
            </tr>
            <tr>
              <td cosplan="3" align="center">
                <a href="<?= base_url('Transaksi'); ?>">Kembali</a>
              </td>
            </tr>
        </table>
    </center>
    
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