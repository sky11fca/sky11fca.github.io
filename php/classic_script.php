<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="i../con.png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php if($email == "skf.bobby@jcjets.au" && $password == "12345"): ?>
    <div class="Top">
        <header>
                <a href="index.html"><img src="../img/images.png" alt="Logo"></a>
                <h1 >WELLCOME TO ME WEBSITE!!!</h1>
                <p>This is my autistic web view about the silly indie animation series <a href="https://www.youtube.com/playlist?list=PLHovnlOusNLiJz3sm0d5i2Evwa2LDLdrg">Murder Drones</a>. JUST LET ME PASS WEB TECHNOLOGIES MAN!!!!!!!!!!!!</p>
        </header>
        
        <nav>
                <p>
                    <a href="../sub1.html">Pictures</a>
                    <a href="../sub2.html">Videos</a>
                    <a href="../sub3.html">Submit</a>
                    <a href="../sub4.html">IDK</a>
                    <a href="../sub5.html">Contact Me</a>
                </p>
                <search>
                    <form>
                        <input type="text" name="q" placeholder="Search anything">
                        <input type="submit">
                    </form>
                </search>
    
        </nav>
    </div>
    <main>
        <img src="../img/images.jpeg" alt="">
    </main>
    <footer>
        <p>2025 GOOFY INC.</p>
    </footer>
    <?php else: ?>
        <div class="Top">
        <header>
                <a href="index.html"><img src="../img/images.png" alt="Logo"></a>
                <h1 >WELLCOME TO ME WEBSITE!!!</h1>
                <p>This is my autistic web view about the silly indie animation series <a href="https://www.youtube.com/playlist?list=PLHovnlOusNLiJz3sm0d5i2Evwa2LDLdrg">Murder Drones</a>. JUST LET ME PASS WEB TECHNOLOGIES MAN!!!!!!!!!!!!</p>
        </header>
        
        <nav>
                <p>
                    <a href="../sub1.html">Pictures</a>
                    <a href="../sub2.html">Videos</a>
                    <a href="../sub3.html">Submit</a>
                    <a href="../sub4.html">IDK</a>
                    <a href="../sub5.html">Contact Me</a>
                </p>
                <search>
                    <form>
                        <input type="text" name="q" placeholder="Search anything">
                        <input type="submit">
                    </form>
                </search>
    
        </nav>
    </div>
    
        <main>
    
        <h1>Invalid email or password</h1>
    </main>
        <footer>
        <p>2025 GOOFY INC.</p>
    </footer>
    <?php endif; ?>
</body>
</html>