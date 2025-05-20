<html>
    <head>
        <title>Linktree GheAmaze</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap" rel="stylesheet">

        <!-- bs4 icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Courgette', cursive;
                background: linear-gradient(to bottom, #715a7a, #8A7D9D, #9E98B8);
                background-attachment: fixed;
            }
            .username {
                color: #ffb4b4;
            }
            .container {
                max-width: 570px;
                margin: 0 auto;
                padding: 0px 10px;
                text-align: center;
                position: relative;
                padding-bottom: 6rem;
            }
            .top-button {
                position: sticky;
                top: 30px;
                margin-left: auto;
                width: fit-content;
                z-index: 10;
                display: flex;
                justify-content: flex-end;
            }
            .top-button .btn {
                width: 40px;
                height: 40px;
                background-color: rgba(0, 0, 0, 0.3);
                color: white;
                border: none;
                font-size: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .profile-pic {
                margin-top: 25px;
            }
            .shadow-container {
                position: relative;
                margin-bottom: 20px;
            }
            .link-button {
                background: white;
                color: #ac6464;
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
                background: black;
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
            .image-fill {
                position: relative;
                display: inline-block;
                border-radius: 20px;
                overflow: hidden;
            }
            .fill-img {
                display: block;
                width: 100%;
                height: auto;
                object-fit: cover;
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
            .link-button.image-fill {
                padding: 0;
                border: none;
                border-radius: 30px;
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
            .btn-logo {
                width: 15px;
                height: 15px;
                margin-top: -2px;
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
    
            <!-- tombol titik 3 -->
            <div class="top-button">
                <button class="btn rounded-circle">
                    •••
                </button>
            </div>
    
            <!-- pp + usn -->
            <img src="images/linktree/pp.webp" class="rounded-circle profile-pic" alt="Profile Picture" width="97">
            <h5 class="username mt-3"><b>@GheAmaze</b></h5>


            <!-- button link -->
            <div class="link-buttons-wrapper mt-5">
                <!-- link 1: yt -->
                <div class="shadow-container">
                    <a href="https://www.youtube.com/@gheaindrawariofficial" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <img src="images/linktree/yt.webp" class="rounded-circle icon-img" alt="icon" width="40">
                            <span class="mx-3 flex-grow-1 text-center">YouTube Ghea Indrawari 🤍</span>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <!-- link 2: spotify -->
                <div class="shadow-container">
                    <a href="https://open.spotify.com/artist/3qL7BzwJOXq3EzAio36aLX?si=XAMrMsdwQkOoBPgV0-m_wQ" target="_blank" style="text-decoration: none; color: inherit;">
                      <div class="link-button image-fill">
                        <img src="images/linktree/spotify.webp" class="fill-img" alt="icon">
                        <div class="content-overlay">
                          <span class="text-white  button-text">Spotify Ghea Indrawari 🕊️</span>
                          <i class="fas fa-ellipsis-v text-white ms-auto"></i>
                        </div>
                      </div>
                    </a>
                </div>
                
                <!-- link 3: artist ig -->
                <div class="shadow-container">
                    <a href="https://www.instagram.com/gheaindrawari?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <img src="images/linktree/artist_ig.webp" class="rounded-circle icon-img" alt="icon" width="40">
                            <span class="mx-3 flex-grow-1 text-center">Insta Ghea Indrawati🧚🏻‍♀️</span>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>
                
                <!-- link 4: fanbase ig -->
                <div class="shadow-container">
                    <a href="https://www.instagram.com/gheamaze?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <img src="images/linktree/fanbase_ig.webp" class="rounded-circle icon-img" alt="icon" width="40">
                            <span class="mx-3 flex-grow-1 text-center">My Instagram🫰🏻</span>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>

                <!-- link 5: tt -->
                <div class="shadow-container">
                    <a href="https://www.tiktok.com/@geyghea?is_from_webapp=1&sender_device=pc" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="link-button">
                            <img src="images/linktree/tt.webp" class="rounded-circle icon-img" alt="icon" width="40">
                            <span class="mx-3 flex-grow-1 text-center">Tiktok Ghey🕊️</span>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                    </a>
                </div>
            </div>

            <a href="#" class="btn custom-btn mt-3">
                <img src="images/linktree/logo.webp" alt="Logo" class="btn-logo mr-2">
                Join GheAmaze on Linktree
              </a>
        </div>
    </body>
</html>