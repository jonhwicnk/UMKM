<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('includes.index')
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav headerContainer">
        <img class="asset1" src="/images/asset1.png" alt="bg-1">
    </nav>
    <div class="header"></div>
    <div class="bgLupa-pin"></div>
        <div class="container">
            <div class="row">
            <div class="col-4">
        <div class="divLogin">
        <label class="LOGIN">Lupa PIN</label>
        <label class="wordingNIK">Lengkapi form di bawah ini untuk mendaftarkan diri.</label>
        </div>
        <div class="lupa-pin">

        <div class="mdl-card__supporting-text">

            <div class="mdl-stepper-horizontal-alternative">
            <div class="mdl-stepper-step active-step">
                <div class="mdl-stepper-circle"><span>1</span></div>
                <div class="mdl-stepper-bar-left"></div>
                <div class="mdl-stepper-bar-right"></div>
            </div>
            <div class="mdl-stepper-step">
                <div class="mdl-stepper-circle"><span>2</span></div>
                <div class="mdl-stepper-bar-left"></div>
                <div class="mdl-stepper-bar-right disabled-right"></div>
            </div>
            <div class="mdl-stepper-step">
                <div class="mdl-stepper-circle"><span>3</span></div>
                <div class="mdl-stepper-bar-left disabled-left"></div>
                <div class="mdl-stepper-bar-right"></div>
            </div>
            </div>
            </div>

            <div class="divID">
            <label class="wordingIdentitas">Masukkan OTP</label>
            <label class="wordOTP">Masukkan kode OTP yang telah kami kirimkan melalui SMS ke nomor handphone Anda.</label>
            <section class="section">
              <form class="form">
                <input class="otp" placeholder="_" type="text" name="otp1" maxlength="1" id="text-1" />
                <input class="otp" placeholder="_" type="text" name="otp2" maxlength="1" id="text-2" />
                <input class="otp" placeholder="_" type="text" name="otp3" maxlength="1" id="text-3" />
                <input class="otp" placeholder="_" type="text" name="otp4" maxlength="1" id="text-4" />
                <input class="otp" placeholder="_" type="text" name="otp5" maxlength="1" id="text-5" />
                <input class="otp" placeholder="_" type="text" name="otp6" maxlength="1" id="text-6" />
              </form>
            </section>
            <label class="wordOTP">Tidak menerima kode OTP pada handphone Anda?</label>
            <label class="wordUlang">Kirim Ulang Kode OTP</label>
            <button type="button" class="btn btn-light customkembali">Kembali</button>
            <button type="button" class="btn btn-warning customlanjut">Lanjut</button>
            </div>
            </div>
        </div>
          </div>
    </div>
    <div class="footer">
    <footer>© 2019 PT.Bank Rakyat Indonesia (Persero) Tbk</footer>
</div>
</body>
@include('includes.javascript')
</html>