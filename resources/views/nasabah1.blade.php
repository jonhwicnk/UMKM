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
    <div class="bgNasabah"></div>
        <div class="container">
            <div class="row">
            <div class="col-4">
        <div class="divLogin">
        <label class="LOGIN">Selamat datang, Andranisa</label>
        <label class="wordingNIK">Lengkapi form di bawah ini untuk mendaftarkan diri.</label>
        </div>
        <div class="nasabah">

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
            <label class="wordingIdentitas">Data diri</label>
            <form>
            <div class="form-group">
                <label class="wordNIK">NIK</label>
                <input type="text" class="form-control customlp" id="nik" placeholder="Masukkan No. KTP">
            </div>
            <div class="form-group">
                <label class="wordNIK">No. Handphone</label>
                <input type="number" class="form-control customhp" id="nohp" placeholder="Masukkan No. Handphone"required onKeyPress="if(this.value.length==13) return false;">
            </div>
            <div class="form-group">
                <label class="wordNIK">Buat PIN</label>
                <input type="password" class="form-control custompin" id="pinlama">
            </div>
            <div class="form-group">
                <label class="wordNIK">Masukkan ulang PIN</label>
                <input type="password" class="form-control custompin" id="pinbaru">
            </div>
            </form>
            <button type="button" class="btn btn-warning customnas">Lanjut</button>
            </div>
            </div>
        </div>
          </div>
    </div>
    <div class="footer">
    <footer>© 2019 PT.Bank Rakyat Indonesia (Persero) Tbk</footer>
</div>
</body>
</html>