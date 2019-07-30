$(function() {
    var $a = $(".tabs li");
    $a.click(function() {
        $a.removeClass("active");
        $(this).addClass("active");
    });
});

function showpune() {
    document.getElementById('pune').style.display = 'block';
    document.getElementById('mumbai').style.display = 'none';
    document.getElementById('nagpur').style.display = 'none';
}

function showmumbai() {
    document.getElementById('pune').style.display = "none";
    document.getElementById('mumbai').style.display = "block";
    document.getElementById('nagpur').style.display = "none";
}

function shownagpur() {
    document.getElementById('pune').style.display = "none";
    document.getElementById('mumbai').style.display = "none";
    document.getElementById('nagpur').style.display = "block";
}

function getValues() {
    var a1 = document.getElementById('getprefix').innerText;
    document.getElementById('a1').defaultValue = a1;

    var a2 = document.getElementById('getfname').innerText;
    document.getElementById('a2').defaultValue = a2;

    var a3 = document.getElementById('getlname').innerText;
    document.getElementById('a3').defaultValue = a3;

    var a4 = document.getElementById('getmail').innerText;
    document.getElementById('a4').defaultValue = a4;

    var a5 = document.getElementById('getphn').innerText;
    document.getElementById('a5').defaultValue = a5;

    var a6 = document.getElementById('getctn').innerText;
    document.getElementById('a6').defaultValue = a6;

    var a7 = document.getElementById('getadd').innerText;
    document.getElementById('a7').defaultValue = a7;

    var a8 = document.getElementById('getcity').innerText;
    document.getElementById('a8').defaultValue = a8;

    var a9 = document.getElementById('getstate').innerText;
    document.getElementById('a9').defaultValue = a9;

    var a10 = document.getElementById('getcode').innerText;
    document.getElementById('a10').defaultValue = a10;

    //showDiv

    if (document.referrer == 'http://localhost/HotelBooking/HTML/booknow.php') {
        document.getElementById('update').style.display = "none";
    } else {
        document.getElementById('update').style.display = "block";
    }

}