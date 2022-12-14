<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleFurther.css?version=51">
</head>

<body>

    <header>
        <div class="heading">
            <h1>e_lottery</h1>

            <a href="#" class="button">
                <div id="one"></div>
                <div id="two"></div>
                <div id="three"></div>
            </a>
        </div>

        <nav class="head">
            <div class="link">
                <div class="link1"></div>
                <a href="add_lottery.php" class="active">
                    Lottery
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="add_prize.php" class="active">
                    Prize
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="draw_lottery.php" class="active">
                    Draw
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Category
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="checkResult.php" class="active">
                    Result
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="index.php" class="active">
                    Logout
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Add category</h3>
            </div>
            <div class="main">
                <form class="basicInput" method="post" action="add_category_Con.php">

                    <div class="element">
                        <label for="id">Category Name </label>
                        <input type="text" name="cname" class="text-box" placeholder="Category Name" required>
                    </div>           

                   <div class="element">
                        <label for="lic">Lots per year </label>
                        <input type="text" name="lotspy" class="text-box" placeholder="eg:52">
                    </div>

                    <div class="element">
                        <label for="lic">Price </label>
                        <input type="text" name="price" class="text-box" placeholder="price">
                    </div>

                    

                    <input type="submit" class = "submitbtn" name="submit" value="submit">

                </form>
            </div>
        </div>

        </div>

    </main>


    <footer>

        <p>&copy; 2022 e_lottery</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>