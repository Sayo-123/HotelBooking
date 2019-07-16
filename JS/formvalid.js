function change() {
    document.getElementById('1').innerHTML = "Price: &#8377 5,500";
    document.getElementById('2').innerHTML = "Price: &#8377 6,500";
    document.getElementById('3').innerHTML = "Price: &#8377 7,500";


}

function changeback() {
    document.getElementById('1').innerHTML = "Price: &#8377 5,000";
    document.getElementById('2').innerHTML = "Price: &#8377 6,000";
    document.getElementById('3').innerHTML = "Price: &#8377 7,000";

}

function change1() {
    document.getElementById('4').innerHTML = "Price: &#8377 7,500";
    document.getElementById('5').innerHTML = "Price: &#8377 9,500";

}

function change2() {
    document.getElementById('4').innerHTML = "Price: &#8377 8,000";
    document.getElementById('5').innerHTML = "Price: &#8377 10,000";


}
function changeback1() {
    document.getElementById('4').innerHTML = "Price: &#8377 7,000";
    document.getElementById('5').innerHTML = "Price: &#8377 9,000";


}

function change3() {
    document.getElementById('6').innerHTML = "Price: &#8377 5,500";
    document.getElementById('7').innerHTML = "Price: &#8377 10,500";
}

function changeback2() {
    document.getElementById('6').innerHTML = "Price: &#8377 5,000";
    document.getElementById('6').innerHTML = "Price: &#8377 10,000";

}

function showpune() {
    document.getElementById('x').innerHTML = "JS works";
    document.getElementById('pune').style.display = 'block';
    document.getElementById('mumbai').style.display = 'none';
    document.getElementById('nagpur').style.display = 'none';
}

function showmumbai() {
    document.getElementById('x').innerHTML = "JS works";
    document.getElementById('pune').style.display = "none";
    document.getElementById('mumbai').style.display = "block";
    document.getElementById('nagpur').style.display = "none";
}

function shownagpur() {
    document.getElementById('x').innerHTML = "JS works";
    document.getElementById('pune').style.display = "none";
    document.getElementById('mumbai').style.display = "none";
    document.getElementById('nagpur').style.display = "block";
}
