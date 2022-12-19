<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.iconify.design/iconify-icon/0.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
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
          border-radius: 5px;
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
        .carousel{
          height: 150px;
          width: 100%;
          border-radius: 10px;
          margin-top: 10px;
        }

        .carousel img{
          height: 150px;
          width: 100%;
          border-radius: 10px;
        }

        /* saldo */
        .bg-saldo{
          height: 85px;
          background-color: #7c7171;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 10px;
        }

        .bg-putih{
          height: 65px;
          width: 210px;
          background-color: #fff;
          border-radius: 10px;
          margin-top: 10px;
        }

        .icon-list{
          width: 20px;
          height: 20px;
          border-radius: 5px;
        }

        .icon-menu{
          width: 70px;
          height: 70px;
          border-radius: 50px;
        }

        .sh-box{
          background-color: #fff;
          margin-left: 10px;
          margin-right: 10 px;
          border-radius: 10px;
          height: auto;
          padding: 5px;
          box-shadow: 0 3px 5px #000000a1;
        }

        .box-Kwh{
          background-color: #fff;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 10px;
          height: auto;
          padding: 5px;
          box-shadow: 0 3px 5px #000000a1;
        }

        .card-flex{
          background-color: #7c7171;
          width: 400px;
          border-radius: 10px;
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

        .card{
         position: relative;
         height: auto;
         border_radius: 15px;
        }

    </style>
  </head>

  <body>
    <div class="main">
        <div class="bg-hijau">
          <div class="d-flex align-items-center justify-content-center pt-1">
            <img class="wrap-bullet" src="https://i.ibb.co/zn1Jq0B/logo-F.png">
            <input type="text" class="form-control mt-2" id="exampleInputPassword1" placeholder="Cari Disini..">
            <img class="iconify mt-2 p-1" src="https://api.iconify.design/gridicons/chat.svg?color=white&width=15&height=15">
            <img class="iconify mt-2 p-1" src="https://api.iconify.design/gridicons/cart.svg?color=white&width=15&height=15">
          </div>
          
        </div>
    </div>
    <br>
    <br>
    <!--carousel-->
    <div id="carouselExampleIndicators" class="carousel slide px-2" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://i.ibb.co/V9BGK2F/g1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ibb.co/qrSSxvt/g2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ibb.co/RQHJmTY/g3.jpg"  alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--saldo section-->
    <div class="bg-saldo mt-3">
      <div class="d-flex align-items-center">
        <div class="bg-putih ml-4">
          <div class="d-flex align-items-center pt-1 ml-3 p-1">
              <img class="icon-list" src="https://i.ibb.co/YZ6MB0Q/g4.jpg">
              <p class="text-hitam font-15 fub">Saldo Ovo Anda</p>
              </div>
              <p class="text-pink font-16 fub ml-5">Rp.200.000</p>
          </div>
          <div class="d-flex align-items-center ml-5">
            <br>
          </div>
          <div class="d-flex align-items-center ml-5">
            <div class="d-flex flex-column align-items-center">
              <img class="iconify p-2" src="https://api.iconify.design/gridicons/plus.svg?color=white&width=15&height=15">
              <p class="text-putih font-10 p-1">Top Up  </p>
            </div>
            
            <div class="d-flex flex-column align-items-center">
              <img class="iconify p-2" src="https://api.iconify.design/gridicons/minus.svg?color=white&width=15&height=15">
              <p class="text-putih font-10 p-1">Withdraw </p>
            </div>
            
            <div class="d-flex flex-column align-items-center">
              <img class="iconify p-2" src="https://api.iconify.design/mingcute/transfer-3-fill.svg?color=white&width=15&height=15">
              <p class="text-putih font-10 p-1">Transfer  </p>
            </div>
          </div>
        </div>
      </div>      
    </div>
  
    <!-- Main Menu-->
    <div class="sh-box mt-3">
      <p class="text-hitam font-12 fub mt-1 ml-1">Hai, Dwi Ariyani</p>
      <hr color="black">
      <div class="row mt-3 ml-5">
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('Transaksi'); ?>">
              <img class="icon-menu  p-2" src="https://i.ibb.co/1Q3VhHG/f1.jpg">
              <p class="text-hitam font-16 fub">Cars</p>
            </a>
          </div>
        </div>
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('Transaksi'); ?>">
              <img class="icon-menu p-2" src="https://i.ibb.co/PgdgDfb/f2.jpg">
              <p class="text-hitam font-16 fub">Ride</p>
            </a>
          </div>
        </div>
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('Transaksi'); ?>">
              <img class="icon-menu p-2" src="https://i.ibb.co/k07YX66/f3.jpg">
              <p class="text-hitam font-16 fub">Bike</p>
            </a>
          </div>
        </div>
      </div>
      
      <div class="row mt-3 ml-5">
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('Transaksi'); ?>">
              <img class="icon-menu p-2" src="https://i.ibb.co/7QT3HB6/f4.jpg">
              <p class="text-hitam font-16 fub">Scuter</p>
            </a>
          </div>
        </div>
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('lokasi'); ?>">
              <img class="icon-menu p-2" src="https://i.ibb.co/VYx93hx/f5.jpg">
              <p class="text-hitam font-16 fub">Location</p>
            </a>
          </div>
        </div>
        <div class="col-3">
          <div class="d-flex flex-column align-items-center">
            <a href="<?= base_url('riwayat'); ?>">
              <img class="icon-menu p-2" src="https://i.ibb.co/hMLV8SH/f6.jpg">
              <p class="text-hitam font-16 fub">Transaksi</p>
            </a>
        </div>
      </div>
    </div>
  </div>
  <!--End Menu-->

  <!--Main Menu-->
  <div class="box-kwh mt-4">
    <p class="text-hitam font-14 fub" align="center">KONSUMSI ENERGI SPKLU</p>
    <p class="text-hitam font-12 fub" align="center">Hari Ini</p>
    <p class="text-hitam font-20 fub" align="center">0,00 kWh</p>
    <hr>
    <div class="card border-dark ml-5" style="max-width: 28rem;">
      <div class="card-body text-dark">
        <div class="card-flex d-flex flex-row ">
          <div class="p-2 ml-5 text-putih">WEEKLY</div>
          <div class="p-2 ml-5 text-putih">|</div>
          <div class="p-2 ml-5 text-putih">MONTHLY</div>
        </div>
        <br>
        <br>
        <p class="text-hitam font-20 fub" align="center">0,00 kWh</p>
        <p class="text-hitam font-12 fub" align="center">Hari Ini</p>
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
  </footer>r-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>