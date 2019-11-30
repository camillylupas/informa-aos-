!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>InformaçõesClimaticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="js/clima.js"></script>
        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de brusque"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas "/>
        <meta name="keywords" content="clima,temperatura em brusque, tempo para brusque, previsão em brusque,clima em brusque,temperatura para brusque,temperatura em brusque,previsão climaticas de brusque,clima atual de brusque/>
              <meta NAME="title" CONTENT="InformaçõesClimaticas" />
              <meta NAME="identifier-url" content="https://camiilylupas-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Camilly" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="lupascamily28@gmail.com"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://camiilylupas-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="informações climaticas" />
        <meta property="og:title" content="informações climaticas" />
        <meta property="og:description" content="Site de informações climáticas de brusque" />
        <meta property="og:image" content="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjc_r7MvZDmAhUxI7kGHb2YDlgQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.pensador.com%2Fimagens_frases_inspiradoras%2F&psig=AOvVaw3aNVCGqgwYmaA1HoCdLdJ4&ust=1575153328406194" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáticas de brusque" />
        <meta name="twitter:title" content="informações climaticas" />

    </head>
    <body>
        <div class="row">

            <div class="col-md-12">
                <div class="p-3 mb-4 bg-info text-white"></div>
                <div class="jumbotron">
                    <h1>Tempo para Brusque-SC <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src=""/>
                    </p>

                    <h5>
                        Pressão do ar: <span id="pressaoAr">10</span>
                    </h5>
                    <p>
                        <img src="img/icones/04d.png"/>
                    </p>


                    <h5>
                        Temperatura maxima: <span id="tempMaxima">296.48</span>
                    </h5>
                    <p>
                        <img src="img/icones/10d.png"/>
                    </p>

                    <h5>
                        Temperatura minima: <span id="tempMinima">294.82</span>
                    </h5>
                    <p>
                        <img src="img/icones/09d.png"/>
                    </p>

                    <h5>
                        Umidade: <span id="umidade">100</span>
                    </h5>
                    <p>
                        <img src="img/icones/01d.png"/>
                    </p>

                    <h5>
                        Velocidade do vento: <span id="velocidadevento">5000</span>
                    </h5>
                    <p>
                        <img src="img/icones/11d.png"/>
                    </p>

                    <h5>
                        Amanhecer: <span id="amanhecer">0</span>
                    </h5>

                    <h5>
                        Por Do Sol: <span id="pordosol">0</span>
                    </h5>
                </div>

            </div>   

        </div>
        <div class="p-3 mb-2 bg-info text-white"></div>
    </body>
</html>