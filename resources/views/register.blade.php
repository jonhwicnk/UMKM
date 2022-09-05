<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('includes.index')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
</head>
<body>
    <nav class="nav headerContainer">
        <img class="asset1" src="/images/asset1.png" alt="bg-1">
    </nav>
    <div class="bgRegis"></div>
    <div>
        <div class="container">
            <div class="row">
            <div class="col-4">
        <div class="divLogin">
        <label class="LOGIN">Daftar</label>
        <label class="wordingNIK">Silakan masukkan NIK Anda</label>
        </div>
        <form>
            <div class="form-group">
                <label class="wordingNIK">NIK</label>
                <input type="text" class="form-control customnik" id="nik" placeholder="Masukkan No. KTP">
            </div>
            <button type="button" class="btn btn-warning custom-btn">Daftar</button>
            <div class="divCenter">
            <p class="wordCreateAcc">sudah punya akun? <a class="CreateAcc" href="/registrasi">LOGIN DISINI</a></p>
            </form>
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
