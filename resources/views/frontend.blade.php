<html>
    <head>
        <title>Kumpulan File HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- bs4 icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Roboto Mono', monospace;
                background: linear-gradient(to bottom, #636FA4, #e8cbc0);
                background-attachment: fixed;
            }
            .username {
                color: #F8CDDA;
                font-size: 25;
            }
            .container {
                max-width: 570px;
                margin: 0 auto;
                padding: 0px 10px;
                text-align: center;
                position: relative;
                padding-bottom: 6rem;
            }
            .shadow-container {
                position: relative;
                margin-bottom: 20px;
            }
            .link-button {
                background: white;
                color: #636FA4;
                border-radius: 30px;
                padding: 12px 20px;
                width: 100%;
                box-sizing: border-box;
                transition: transform 0.1s ease;
                position: relative;
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: space-between;
                border: 2px solid black;
            }
            .shadow-container::after {
                content: "";
                position: absolute;
                top: 9px;
                left: 8px;
                width: 100%;
                height: 100%;
                background: #323c6c;
                border-radius: 30px;
                z-index: ;
            }
            .shadow-container:hover .link-button {
                transform: translate(5px, 5px);
            }
            .link-button i.fas {
                color: #ac6464;
                opacity: 0.5;
                transition: opacity 0.3s ease
            }
            .link-button i.fas:hover {
                opacity: 1;
            }
            .content-overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 15px;
                background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent);
                width: 100%;
                font-size: 16px;
                padding-left: 30px;
                padding-right: 30px;
            }
            .custom-btn {
                background-color: #eae6f3;
                color: #000;
                border-radius: 50px;
                padding: 10px 24px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.3);
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                font-weight: 1000;
                font-size: 15;
                font-family: 'Inter', sans-serif;
                }
            .custom-btn:hover {
                background-color: #fff;
                color: #000;
                text-decoration: none;
            }
            .button-text {
                position: relative;
                top: -10px;
            }
        </style>
    </head>

    <body>
        <!-- container -->
        <div class="container">


            <!-- nama + nrp -->
            <h5 class="username mt-5">✧₊⁺⋆<b> Diva Nesia Putri </b>⋆⁺₊✧</h5>
            <h5 class="username mt-1"><i>5026231020</i></h5>


            <!-- button link -->
            <div class="link-buttons-wrapper mt-5">
                <!-- link 1 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/htmlintro" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 1 - <b>Latihan HTML</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 2 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/height_width_css" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 1 - <b>Tugas Video Tutorial CSS [Height/Width]</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 3 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/centering_images_css" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 1 - <b>Tugas Video Tutorial CSS [Image Centering]</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 4 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/cssintro" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 2 - <b>Latihan CSS</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 5 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/bootstrap1" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 3 - <b>Latihan Bootstrap 1</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 6 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/bootstrap2" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 3 - <b>Latihan Bootstrap 2</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 7 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/latihan_kodesoal1" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 4 - <b>Tugas Latihan Kode Soal 1</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 8 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/tugas_linktree" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 5 - <b>Tugas Linktree</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 9 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/js1" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 7 - <b>Latihan JavaScript 1</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 10 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/js2" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 7 - <b>Latihan JavaScript 2</b></span>
                        </div>
                    </a>
                </div>

                <!-- link 11 -->
                <div class="shadow-container">
                    <a href="http://127.0.0.1:8000/index" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <span class="mx-3 flex-grow-1 text-center">Week 10 - <b>ETS</b></span>
                        </div>
                    </a>
                </div>
        </div>
    </body>
</html>
