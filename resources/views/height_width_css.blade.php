<!DOCTYPE html>
<html>
    <head>
        <title>Height, Width, Max-Width CSS</title>
        <style>
            .pertama {
                background-color: bisque;
                height: auto;
                width: auto;
            }
            .kedua {
                background-color: cadetblue;
                height: 250px;
                width: 10cm;
            }
            .ketiga {
                background-color: darkgray;
                height: 500px;
                width: 75%;
            }
            .keempat {
                background-color:cornflowerblue;
                height: initial;
            }
            .parent {
                background-color: hotpink;
                height: 250px;
                width: 550px;
            }
            .child {
                background-color: khaki;
                height: inherit;
                width: inherit;
            }
            .keenam {
                background-color: azure;
                max-width: 500px;
            }

        </style>
    </head>
    <body>
        <div class="pertama">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores architecto in dolorem perferendis repudiandae quaerat quam a saepe sit, illo repellendus consequatur praesentium consequuntur fugiat assumenda. Recusandae obcaecati laudantium animi.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis iure architecto temporibus modi, accusantium hic iusto, laudantium illum quia numquam deserunt aspernatur nemo? Animi reiciendis eius reprehenderit obcaecati exercitationem blanditiis!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nobis quam explicabo reprehenderit voluptates, quas inventore maiores facere, pariatur amet natus quisquam rerum accusantium illum sequi architecto libero ad ratione?</p>
        </div>
        <div class="kedua">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum id error facilis eos nemo ab cum enim ex maxime veritatis inventore minus, ipsam natus eligendi ad ea. Possimus, impedit?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut eveniet enim ratione magnam nobis. Similique molestias, vel explicabo veniam enim animi harum molestiae, iure eum facere quaerat. Maxime, quis ipsam.</p>
        </div>
        <div class="ketiga">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi facilis nulla accusantium, ea eos similique sequi eaque voluptates soluta consequatur? Ducimus, voluptates accusantium blanditiis quis totam necessitatibus assumenda itaque aliquam!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad obcaecati sed ratione, explicabo nihil maxime dignissimos dolor veniam libero quia minus cupiditate rerum blanditiis exercitationem! Laboriosam unde praesentium tenetur perferendis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, autem corrupti esse nobis minus explicabo repudiandae non libero tempora! Reiciendis eveniet consectetur fuga quibusdam vero. Cumque omnis nulla illum natus.</p>
        </div>
        <div class="keempat">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque qui molestias, repellendus hic quisquam deleniti non maxime magni id enim cupiditate alias, inventore eligendi voluptatem minima voluptatum velit. Aliquid, ducimus?</p>
        </div>
        <div class="parent">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, tenetur. Doloribus minus neque explicabo nisi, quidem deleniti nesciunt est et sit rem nihil cumque quis laborum dolor soluta sint sequi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloremque aspernatur voluptate ad. Dolores eius commodi nesciunt illo vero maxime ab corporis quis quisquam, doloribus sequi quam praesentium fugit nam!</p>
            <div class="child">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quaerat ullam, quibusdam deserunt ut expedita ratione, harum consequuntur nam doloribus ipsam itaque labore distinctio omnis quos. Adipisci est officiis eius.</p>
            </div>
        </div>
        <div class="keenam">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odit laboriosam qui quos ipsam reprehenderit inventore dolores similique eum distinctio. Consectetur possimus debitis iste. Tempore nam totam distinctio quaerat dolor?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, tenetur qui excepturi odit minus amet distinctio ad quae animi vel et fugiat laborum possimus similique recusandae vero eligendi reiciendis voluptatibus?</p>
        </div>
    </body>
</html>