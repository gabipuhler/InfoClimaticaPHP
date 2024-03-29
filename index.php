<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informações climáticas - Gabi Pühler</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>

        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque. Desenvolvido por Gabriele Pühler"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="clima, tempo, umidade, temperatura em brusque, temperatura, tempo para brusque, clima de brusque,
              temperatura minima de brusque, temperatura maxima de brusque, previsão do tempo de brusque, brusque, temperatura do municipio, 
              velocidade do vento, velocidade do vento em brusque, informações de brusque, umidade do ar em brusque, nascer do sol em brusque,
              por do sol em brusque, previsão do tempo"/>
        <meta NAME="title" CONTENT="Informações climáticas - Gabi Pühler" />
        <meta NAME="identifier-url" content="https://gabi-clima-senai.herokuapp.com" />
        <meta NAME="author" content="Gabriele Pühler" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="gabipuhler@gmail.com"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://gabi-clima-senai.herokuapp.com" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informações climáticas - Gabi Pühler" />
        <meta property="og:title" content="Informações climáticas - Gabi Pühler" />
        <meta property="og:description" content="Site de informações climáticas de Brusque. Desenvolvido por Gabriele Pühler" />
        <meta property="og:image" content="https://gabi-clima-senai.herokuapp.com/img/exemplos/por.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáticas de Brusque. Desenvolvido por Gabriele Pühler" />
        <meta name="twitter:title" content="Informações climáticas - Gabi Pühler" />

    </head>


    <body>

        <div class="row">

            <div class="col-md-12">

                <div class="jumbotron" style="background-color: rgb(102, 163, 255)">
                    <img src="img/exemplos/CLIMA.GIF">
                    <center>
                        <h1 style="color:MidnightBlue">Tempo de Brusque-SC</h1>
                    </center>

                    <center>
                        <h1> <span id="temperatura" ></span> </h1>
                        <span id="situacao"></span>
                        <img id ="icone" src=""/>
                    </center>

                    <center>
                        <h1> <span id="temperatura" ></span> </h1>

                    </center>

                    <div class="row mx-lg-5">
                        <div class="col py-3 px-lg-5" style="background-color:rgb(23, 178, 255)">
                            <center>
                                <h2 style="color:MidnightBlue">Nascer do Sol </h2>
                                <p>
                                <h1><span id="nascer" ></span></h1>
                                <h3><span id="situacao">  </span> <img src="img/exemplos/nascer.png"width="90px"/></h3>
                                </p>
                        </div>
                        <div class="col py-3 px-lg-5 " style="background-color:rgb(23, 178, 255)">
                            <h2 style="color:MidnightBlue">Por do Sol </h2>
                            <p>
                            <h1><span id="por" ></span></h1>
                            <h3><span id="situacao">  </span> <img src="img/exemplos/por.png"width="90px"/></h3>
                            </p>
                            </center>

                        </div>

                        <div class="col py-3 px-lg-5" style="background-color:rgb(23, 178, 255)">
                            <h2 style="color:MidnightBlue">Temperatura Máxima </h2>
                            <p>
                            <h1><span id="tempMax" ></span></h1>
                            <h3><span id="situacao"> </span><img src="img/exemplos/mais.png" width="100px"/> </h3>
                            </p>
                        </div>
                        <div class="col py-3 px-lg-5 " style="background-color:rgb(23, 178, 255)">
                            <h2 style="color:MidnightBlue">Temperatura Mínima </h2>
                            <p>
                            <h1> <span id="tempMin" ></span> </h1>
                            <h3><span id="situacao"> </span><img src="img/exemplos/menos.png" width="100px"/> </h3>
                            </p>

                        </div>

                        <div class="col py-3 px-lg-5" style="background-color:rgb(23, 178, 255)">
                            <center>
                                <h2 style="color:MidnightBlue">Velocidade do vento </h2>
                                <p>
                                <h1><span id="velocidade" ></span></h1>
                                <h3>  <span id="situacao"></span> <img src="img/exemplos/vento.gif" width="200px"/></h3>
                                </p>
                        </div>
                        <div class="col py-3 px-lg-5 " style="background-color:rgb(23, 178, 255)">
                            <center>
                                <h2 style="color:MidnightBlue">Umidade do ar </h2>
                                <p>
                                <h1><span id="umidade" ></span></h1>
                                <h3><span id="situacao">  </span> <img src="img/exemplos/umidades.png"width="90px"/></h3>
                                </p>
                            </center>
                        </div>
                        <a href="#" class="btn btn-dark btn-lg btn-block" role="button" aria-pressed="true">:: Voltar ao início ::</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
