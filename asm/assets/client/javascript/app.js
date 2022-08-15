var images = [];
for (let i = 0; i < 2; i++) {
    images[i] = new Image();
    images[i].src = "assets/client/images/" + i + ".png";
}

var index = 0;
var t;

function next() {
    index++;
    if (index >= images.length) {
        index = 0;
    }
    var anh = document.getElementById("anh");
    anh.src = images[index].src;
}
setInterval(fstart(), 3000);

function fstart() {
    t = window.setInterval(next, 3000);
}

function prev() {
    index--;
    if (index < 0) {
        index = images.length - 1;
    }
    var anh = document.getElementById("anh");
    anh.src = images[index].src;
}
