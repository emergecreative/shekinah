<?php

    $corpo = "

    
    <!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    
        <title>Formulário de Contato</title>
        <meta content='' name='descriptison'>
        <meta content='' name='keywords'>
    
        <style>
            .container{
                background-color: #0f1215;
                border-radius: 30px;
            }

            .div-logo img{
                width: 230px;
            }

            .espaco-de-cima {
                justify-items: center;
                padding-top: 40px;
            }
            
            .texto-centro {
                text-align: center;
            }

            .texto-centro h1{
                padding-top:30px;
                font-weight: bold;
                font-size: 20px;
            }

            .texto-centro h2{
                padding-bottom: 30px;
                font-weight: 600;
                font-size: 20px;
            }
            
            .infocontato {
                color: #fff !important;
                font-size: 14px;
                text-decoration: none;
            }
            
            .infocontato:hover {
                color: #0056b3 !important;
            }
            
            .centralizar {
                justify-items: center;
                width: fit-content;
            }

            .div-header{
                background:#d5d5d5;
                margin:20px;
                border-radius: 20px;
            }
            
            .appointment-btn{
                background: #db1416;
                color: #fff;
                border-radius: 6px;
                padding: 8px 25px;
                white-space: nowrap;
                transition: 0.3s;
                font-size: 14px;
                display: inline-block; 
                margin: 30px;
                text-decoration: none;
            }

            .div-botao{
                background:#d5d5d5;
                margin:20px; 
                border-radius: 20px; 
            }

            .div-emerge{
                margin: -19px 20px 0 20px; 
                padding: 10px 0 0 0;
            }

            .div-mensagem p{
                background: #d5d5d5;
                padding:20px; 
                margin:20px; 
                border-radius:20px;
            }

            .copyright{
                font-size: 10px;
            }

            .div-margin{
                margin:0 30%;
            }
        </style>
    
    </head>
    
    <body>
        <div class='container espaco-de-cima texto-centro div-margin'>
            <div class='container col-9'>
                <!-- ======= Header ======= -->
                <!-- End Header -->
    
                <main id='main'>
    
                    <div class='d-flex align-items-center div-logo'>
    
    
                        <a href='autoestufashekinah.com.br' class='logo mr-auto'><img src='https://autoestufashekinah.com.br/images/Logo_Shekinah_pr.png' alt=''></a>
    
                        <nav class='nav-menu d-none d-lg-block'>
                        </nav>
                        <!-- .nav-menu -->
    
                    </div>
    
                    <!-- ======= Breadcrumbs Section ======= -->
                    <section class='breadcrumbs'>
                        <div class='container texto-centro'>
                            <div class='div-header'>
                                <h1>Nome: $nome</h1>
                                <br>
                            </div>
                        </div>
                    </section>
                    <!-- End Breadcrumbs Section -->
    
                    <section class='inner-page texto-centro'>
                        <div class='container div-mensagem'>
                            <p>
                                Mensagem: $mensagem
                            </p>
                        </div>
                        <div class='container texto-centro'>
                            <div class='row'>
                                <a href='tel:$tel' class='infocontato'>
                                <i class='icofont-tel'></i>$tel</a>
                                <br>
                                <a href='mailto:$email' class='infocontato'>
                                <i class='icofont-email'></i>$email</a>
                            </div>
                        </div>
    
                    </section>
    
                </main>
                <!-- End #main -->
    
                <!-- ======= Footer ======= -->
                <footer id='footer' class='footer'>
                    <div class='footer-top div-footer'>
                        <div class='container div-botao'>
                            <a href='mailto:$email' class='appointment-btn scrollto'><span class='d-none d-md-inline'></span> Responder E-mail</a>
                        </div>
                    </div>
    
                    <div class='container div-emerge'>
                        <div class='d-flex align-items-center icon-nav'>
    
                            <!-- <i class='icofont-clock-time'></i> Segunda - Sexta, 7h às 20h -->
                        </div>
                        <div class='credits'>
                            <div class='copyright'>
                                <a href='https://www.emergecreative.com.br/' target='_blank'><img src='https://spallaengenharia.com.br/wp-content/uploads/2021/04/DESENVOLVIDO_POR-1-1-1024x181.png' width='170pg'></a>
                            </div>
                        </div>
                    </div>
                </footer>
                <br>
                <!-- End Footer -->
            </div>
        </div>
    
    </body>
    
    </html>
    ";
?>