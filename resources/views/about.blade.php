@extends('layout.mainlayout')

@section('main_content')
<h1><?=$title?></h1>
    <div class="container">
        <div class="container mt-3">

            <h2>FJ Shoe was founded by Felix Jonathan and his friends at November 1st 2021. below is their
                Profile
            </h2>
            <table border="0">

                <tr>
                    <td>
                        <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/{{ $imagef }}" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Felix Jonathan</h4>
                            <p class="card-text">His name is Felix, he is 19 years old he graduated from SMAK Karitas 3 and is now college majoring in informatics at the university of ciputra surabaya</p>
                            <button onclick="alert('Hi, Nice to meet you !')" class="btn btn-secondary" type="button" name="btn2" value="Say Hello">Say Hello</button>
                        </div>
                        </div>
                    </td>

                    <td>
                        <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/{{ $imageb }}" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Bryan Anthony</h4>
                            <p class="card-text">His name is Bryan, he is 19 years old he graduated from SMAK Karitas 3 and is now college majoring in informatics at the university of ciputra surabaya</p>
                            <button onclick="alert('Hello !!')" class="btn btn-secondary" type="button" name="btn2" value="Say Hello">Say Hello</button>
                        </div>
                        </div>
                    </td>

                    <td>
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="img/{{ $imaged }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Daren Anderton</h4>
                            <p class="card-text">Daren is a person who is good at business, he is 18 years old. just like the two people beside him, he graduated from SMAK Karitas 3 surabaya. business management course at Banjarmasin</p>
                            <button onclick="alert('Yow Whats up !')" class="btn btn-secondary" type="button" name="btn2" value="Say Hello">Say Hello</button>
                            </div>
                        </div>
                    </td>
            
                </tr>
                <tr>
                    <td>
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="img/{{ $imagea }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Alfred Lumatow</h4>
                            <p class="card-text">Just like bryan and felix, alfred is now studying informatics, only he is studying in Manado. He also graduated from SMAK Karitas 3 Surabaya</p>
                            <button onclick="alert('Hi !!')" class="btn btn-secondary" type="button" name="btn2" value="Say Hello">Say Hello</button>
                            </div>
                        </div>
                    </td>
          
                    <td>
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="img/{{ $imager }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Reygen Putra</h4>
                            <p class="card-text">Reygen also majored in informatics, but he studied at ISTTS. He also graduated from SMAK Karitas 3.</p>
                            <button onclick="alert('Hello My Friends !!')" class="btn btn-secondary" type="button" name="btn2" value="Say Hello">Say Hello</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>


@endsection