function rotate() {
    if (document.getElementById("img1").src == "http://10.0.15.20/312lab3/images/1.png") {
        document.getElementById("img1").src = "http://10.0.15.20/312lab3/images/3.png";
        document.getElementById("img2").src = "http://10.0.15.20/312lab3/images/1.png";
        document.getElementById("img3").src = "http://10.0.15.20/312lab3/images/4.png";
        document.getElementById("img4").src = "http://10.0.15.20/312lab3/images/2.png";
    } else if (document.getElementById("img1").src == "http://10.0.15.20/312lab3/images/3.png") {
        document.getElementById("img1").src = "http://10.0.15.20/312lab3/images/4.png";
        document.getElementById("img2").src = "http://10.0.15.20/312lab3/images/3.png";
        document.getElementById("img3").src = "http://10.0.15.20/312lab3/images/2.png";
        document.getElementById("img4").src = "http://10.0.15.20/312lab3/images/1.png";
    } else if (document.getElementById("img1").src == "http://10.0.15.20/312lab3/images/4.png") {
        document.getElementById("img1").src = "http://10.0.15.20/312lab3/images/2.png";
        document.getElementById("img2").src = "http://10.0.15.20/312lab3/images/4.png";
        document.getElementById("img3").src = "http://10.0.15.20/312lab3/images/1.png";
        document.getElementById("img4").src = "http://10.0.15.20/312lab3/images/3.png";
    } else if (document.getElementById("img1").src == "http://10.0.15.20/312lab3/images/2.png") {
        document.getElementById("img1").src = "http://10.0.15.20/312lab3/images/1.png";
        document.getElementById("img2").src = "http://10.0.15.20/312lab3/images/2.png";
        document.getElementById("img3").src = "http://10.0.15.20/312lab3/images/3.png";
        document.getElementById("img4").src = "http://10.0.15.20/312lab3/images/4.png";
    }
}
