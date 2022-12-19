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

        .font-25{
          font-size: 25px;
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

        .iconify{
          color: #fff;
          width: 50px;
          height: 50px;
          border-radius: 50px;
        }

        .iconify2{
          color: #fff;
          width: 30px;
          height: 30px;
          border-radius: 10px;
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

        .bg-saldo{
          height: 80px;
          background-color: #fff;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 10px;
        }

        .bg-saldo2{
          height: 100px;
          background-color: #fff;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 10px;
        }

        .bg-putih{
          height: 80px;
          widht: 410px;
          background-color: #fff;
          border-radius: 10px;
          margin-top: 10px;
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
            <p class="text-putih font-25 fub mt-1 p-1 ml-4"> ACCOUNTS</p>
          </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="bg-saldo2 mt-3">
      <div class="d-flex align-items-center">
        <img class="iconify mt-2 ml-2" src="https://api.iconify.design/ic/outline-account-circle.svg" style="float:left;" >
        <div class="bg-putih ml-2">
          <div class="d-flex align-items-center">
            <p class="text-hitam font-20 ml-1 fub p-1"> Dwi Ariyani</p>
            </div>
            <p class="text-gray font-12 fub ml-1 p-1"> Dwiariyani899@gmail.com</p>
            <p class="text-gray font-12 fub ml-1 p-1"> 089635009107</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="bg-saldo mt-3">
      <div class="d-flex align-items-center">
        <img class="iconify2 mt-4 ml-3" src="https://api.iconify.design/teenyicons/password-solid.svg" style="float:left;" >
          <p class="text-hitam font-20 ml-3 mt-3 fub p-1"> Ubah Kata Sandi</p>
          <a href="<?= url_to('ubahpw') ?>">
            <img class="iconify ml-5 mt-3" src="https://api.iconify.design/material-symbols/navigate-next.svg?color=%237c7171" style="float:right;">
          </a>
      </div>
    </div>
    <div class="bg-saldo mt-3">
      <div class="d-flex align-items-center">
        <img class="iconify2 mt-4 ml-3" src="https://api.iconify.design/foundation/telephone.svg" style="float:left;" >
          <p class="text-hitam font-20 ml-3 mt-3 fub p-1"> Contact Center</p>
        <img class="iconify ml-5 mt-3" src="https://api.iconify.design/material-symbols/navigate-next.svg?color=%237c7171" style="float:right;">
      </div>
    </div>
    <div class="bg-saldo mt-3">
      <div class="d-flex align-items-center">
        <img class="iconify2 mt-4 ml-3" src="https://api.iconify.design/wpf/faq.svg" style="float:left;" >
          <p class="text-hitam font-20 ml-3 mt-3 fub p-1"> FAQ</p>
        <img class="iconify ml-5 mt-3" src="https://api.iconify.design/material-symbols/navigate-next.svg?color=%237c7171" style="float:right;">
      </div>
    </div>
    <div class="bg-saldo mt-3">
      <div class="d-flex align-items-center">
      <a href="<?= base_url('logout'); ?>">
        <p class="text-hitam font-20 ml-3 mt-3 fub p-1"> log out
        <img class="iconify ml-5 mt-1" src="https://api.iconify.design/material-symbols/navigate-next.svg?color=%237c7171" style="float:right;">
        </p>
      </a>
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