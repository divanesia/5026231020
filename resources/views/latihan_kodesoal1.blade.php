<html>
    <head>
        <title>Layout Kode Soal 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <!-- bs4 icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
            
            .card, .footer p {
                font-size: 13px;
                margin-bottom: 4px;
            }
            
            .card p:first-child {
                font-weight: bold;
                font-size: 16px;
            }
        </style> 
    </head>
    <body>
        <div class="container">
            <!-- NAVBAR -->
            <!-- bs4 navbar -->
            <nav class="navbar navbar-expand-sm fixed-top shadow-sm">
                <!-- bs4 flex -->
                <div class="d-flex align-items-center w-100">
                    <!-- tombol back -->
                    <button class="btn btn-outline-secondary">
                        <img src="images/back.png" width="20">
                    </button>
            
                    <!-- judul di kanan -->
                    <span class="ml-auto font-we">
                        <span class="text-muted font-weight-bold">CekDong!</span>  
                        <span class="font-weight-bold">Booking Alat</span>
                    </span>
                </div>
            </nav>            
            
            
            <!-- CARD -->
            <!-- memberi jarak -->
            <div class="mt-5 pt-4">
                <!-- bs4 card -->
                <div class="card p-3 shadow-sm bg-light">
                    <!-- bs4 grid -->
                    <div class="row align-items-center">
                        <!-- bagian kiri -->
                        <div class="col-5 text-center">
                            <img src="images/camera.png" width="120">
                            <!-- bs4 button group -->
                            <div class="btn-group mt-2">
                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                <input type="text" class="form-control form-control-sm text-center" value="1" style="width: 40px;">
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                            </div>
                        </div>
                        <!-- bagian kanan -->
                        <div class="col-7">
                            <p class="font-weight-bold mb-1">CAMERA CANON EOS 4000D</p>
                            <p class="mb-1"> Disewakan pada tanggal 20/11/24 <i class="fas fa-calendar-alt"></i></p>
                            <p class="mb-1">E17_YANUAR - CREW ITS TV</p>
                            <p class="mb-1">07.00 - 19.00</p>
                            <p class="mb-0">Liputan: <strong>Pengukuhan Proffesor</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            
                    
            <!-- FOOTER -->
            <!-- bs4 grid -->
            <footer class="fixed-bottom bg-light border-top py-2">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="footer">
                        <p class="text-secondary">Teknisi hari ini</p>
                        <p class="font-weight-bold mb-3">E17_AJI - TEKNISI ITS TV</p>
                    </div>
                    <!-- bs4 button -->
                    <button class="btn btn-primary">KONFIRMASI TEKNISI</button>
                </div>
            </footer>          
        </div>
    </body>
</html>