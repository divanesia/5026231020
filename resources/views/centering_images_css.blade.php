<!DOCTYPE html>
<html>
    <head>
        <title>CSS Centering Images</title>
        <style>
            #cat {
                display: block;
                margin: auto;
                width: 500px;
            }

            .kelinci {
                display: flex;
                justify-content: center;
            }
            #rabbit {
                width: 400px;
            }

            .anjing {
                display: flex;
                border: 3px solid;
                align-items: center;
                height: 500px;
            }
            #dog {
                width: 100px;
            }
        </style>
    </head>
    <body>
        <img src="kucing.jpeg" id="cat">
        <div class="kelinci">
            <img src="kelinci.jpg" id="rabbit">
        </div>

        <div class="anjing">
            <img src="anjing.jpg" id="dog">
        </div>
    </body>
</html>