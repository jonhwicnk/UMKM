var hasil;
$(document).ready(function() {
    $("#text-1").focus();
    $("#text-1").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-1").val().length === 0) {
                $("#text-1").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-1").css({ "color": "white" });
                $("#text-2").focus();
            }
            if ($("#text-1").val().length === 1) {
                $("#text-1").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-1").css({ "color": "white" });
                $("#text-2").focus();
            }
        }
    });
    $("#text-1").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-1").css({ "background-color": "#ffffff" })
            $(this).select();
        }
    });

    $("#text-2").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-2").val().length === 0) {
                $("#text-2").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-2").css({ "color": "white" });
                $("#text-3").focus();
            }
            if ($("#text-2").val().length === 1) {
                $("#text-2").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-2").css({ "color": "white" });
                $("#text-3").focus();
            }
        }
    });
    $("#text-2").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-2").css({ "background-color": "#ffffff" })
            $("#text-1").select();
        }
    });

    $("#text-3").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-3").val().length === 0) {
                $("#text-3").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-3").css({ "color": "white" });
                $("#text-4").focus();
            }
            if ($("#text-3").val().length === 1) {
                $("#text-3").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-3").css({ "color": "white" });
                $("#text-4").focus();
            }
        }
    });
    $("#text-3").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-3").css({ "background-color": "#ffffff" })
            $("#text-2").select();
        }
    });

    $("#text-4").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-4").val().length === 0) {
                $("#text-4").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-4").css({ "color": "white" });
                $("#text-5").focus();
            }
            if ($("#text-4").val().length === 1) {
                $("#text-4").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-4").css({ "color": "white" });
                $("#text-5").focus();
            }
        }
    });
    $("#text-4").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-4").css({ "background-color": "#ffffff" })
            $("#text-3").select();
        }
    });

    $("#text-5").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-5").val().length === 0) {
                $("#text-5").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-5").css({ "color": "white" });
                $("#text-6").focus();
            }
            if ($("#text-5").val().length === 1) {
                $("#text-5").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-5").css({ "color": "white" });
                $("#text-6").focus();
            }
        }
    });
    $("#text-5").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-5").css({ "background-color": "#ffffff" })
            $("#text-4").select();
        }
    });

    $("#text-6").keyup(function(evt) {
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
        } else {
            if ($("#text-6").val().length === 0) {
                $("#text-6").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-6").css({ "color": "white" });
            }
            if ($("#text-6").val().length === 1) {
                $("#text-6").css({ "background-color": "rgb(245, 152, 35)" });
                $("#text-6").css({ "color": "white" });
            }
        }
    });
    $("#text-6").keyup(function(e) {
        if (e.keyCode == 8) {
            $("#text-6").css({ "background-color": "#ffffff" })
            $("#text-5").select();
        }
    });
});

$("#otpNasabah").click(function(e) {
    e.preventDefault();
    var hasil1 = $("#text-1").val();
    var hasil2 = $("#text-2").val();
    var hasil3 = $("#text-3").val();
    var hasil4 = $("#text-4").val();
    var hasil5 = $("#text-5").val();
    var hasil6 = $("#text-6").val();
    hasil = hasil1.concat(hasil2);
    hasil = hasil.concat(hasil3);
    hasil = hasil.concat(hasil4);
    hasil = hasil.concat(hasil5);
    hasil = hasil.concat(hasil6);
    $("#otp").val(hasil);
    $("#submitOtp").submit();
})