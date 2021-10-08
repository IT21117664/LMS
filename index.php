<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>
</head>

<body>
    <?php require('header.php');
    logIn(); ?>


    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <input type="text" class="txtSearch" placeholder="Search...">
            <input type="button" value="Search" class="btn primary">
        </div>
    </div>

    <div class="row">
        <div class="column micro"></div>
        <div class="column large">
            <div class="card_column">
                <div id="book1" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>


            <div class="card_column">
                <div id="book2" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book3" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book4" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book5" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>
        </div>
    </div>


    <div class="list_box">
        <div class="row">
            <div class="column_list">
                <div class="card">

                    <div><a href="book details.php">New Arrivals</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>


            <div class="column_list">
                <div class="card">
                    <div><a href="book details.php">Trending</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>


            <div class="column_list">
                <div class="card">
                    <div><a href="book details.php">Most rated</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>




</html>