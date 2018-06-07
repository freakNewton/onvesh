<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		require 'nav_login.html';
	}
	else{
		require 'navigation.html';
	}
?>
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: 3%;
        }

        .row>.column {
            padding: 0 0px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;

        }

        .column {
            display: inline-block;
            width: 32%;
        }

        /* The Modal (background) */

        .modal {
            display: none;
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Modal Content */

        .modal-content {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.5);
            top: 10%;
            margin: auto;
            width: 100%;
            max-width: 100%;
            height: 100%;
            max-width: 100%;
        }

        /* The Close Button */

        .close {
            color: black;
            position: absolute;
            right: 2%;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer
        }

        /* Next & previous buttons */

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        @font-face {
            font-family: 'forte1';
            src: url('FORTE.ttf');
        }

        img {
            margin-bottom: 4px;
        }

        .caption-container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            ;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }

    </style>
    <!-- GALLERY UI-->
    <h1 style="text-align:center; font-family: 'forte1' ">GALLERY</h1>

    <div class="row ">
        <div class="column">
            <img src="imgs/fifa.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/bb.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/clickit.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/cs.jpg" style="width:100%; overflow: hidden; " border='2' onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/mcf.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/BOX.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/codeit.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/min.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/mr_ms.jpg" style="width:100%;" border='2' onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/rinkf.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/rr.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="imgs/talenth.jpg" style="width:100%" border='2' onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
        </div>

    </div>

    <div id="myModal" class="modal" style="overflow: hidden;">

        <div class="modal-content">
            <span class="close cursor" onclick="closeModal()">&times;</span>

            <div class="mySlides">
                <div class="numbertext">1 / 12</div>
                <img src="imgs/fifa.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 12</div>
                <img src="imgs/bb.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 12</div>
                <img src="imgs/clickit.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 12</div>
                <img src="imgs/cs.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 12</div>
                <img src="imgs/mcf.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 12</div>
                <img src="imgs/BOX.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">7 / 12</div>
                <img src="imgs/codeit.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">8 / 12</div>
                <img src="imgs/min.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">9 / 12</div>
                <img src="imgs/mr_ms.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">10 / 12</div>
                <img src="imgs/rinkf.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">11 / 12</div>
                <img src="imgs/rr.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">12 / 12</div>
                <img src="imgs/talenth.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>


        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

    </script>
