@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?></h1>
    <div class="container">
        <style>
            #more {display: none;}
        </style>
        <h1>Welcome to FJ Shoe</h1>

        <h5>What can we do with this website<span id="dots">...</span><span id="more">
        ? so this website will contain about CRUD or create, read, update, and delete 
        about shoe and shoe brands. This website is one of my exam projects. I hope you 
        all enjoy my website :)</span></h5>
        <button onclick="myFunction()" id="myBtn">Read more</button>

        <script>
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more"; 
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less"; 
                moreText.style.display = "inline";
            }
            }
            </script>
            </div>


@endsection