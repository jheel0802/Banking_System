<!DOCTYPE html>

<html>
<title>
    Main Page
</title>
<!-- <link rel="stylesheet" href="home.css"> <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link type="stylesheet" href="./styles/home.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">

<head>
    <div class="topnav">
        <a class="active" href="home.html">Home</a>
        <a href="credit_card.html">Cards</a>
        <a href="fd_loan.html">Investment</a>
        <a href="trans.html">Transaction</a>
    </div>
</head>

<body>
    <div class="container">
    </div>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="/images/1.png" width="1000" height="600">

        </div>

        <div class="mySlides fade">
            <img src="/images/2.png" width="1000" height="600">

        </div>

        <div class="mySlides fade">
            <img src="/images/3.png" width="1000" height="600">

        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000);
        }
    </script>
</body>

</html>