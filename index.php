<!DOCTYPE html>
<html lang="pl">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bon-ton blog">
        <title>Bon-ton owy blog WERSJA 0.01</title>
        <link rel="stylesheet" href="css/own.css">
        <link rel="stylesheet" href="css.normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body class="start_site">
        <header>
            <h1>Bon i ton i owy blog</h1>
            <h2>Blog stworzony z potrzeby na potrzeby</h2>
            <nav class="site_navigation">
                <button class="site_nav_button">Menu</button>
                <div class="site_menu">
                    <ul>
                        <li><a href="Wpisy">Wpisy</a></li>
                        <li><a href="O_tym_blogu">O tym blogu</a></li>
                        <li><a href="cos_tam">Ćwiczenia</a></li>
                        <li><a href="Opisy">Opisy</a></li>
			<li><a href="mailto:magda@motta.com.pl">Kontakt</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sidebar">
            <p> coś tam</p>
            <p> coś tam</p>
        </div>
        <div class="centrum">
            <h3>Centrum wpisywania</h3>
            <div class="wpisy"></div>
<?php
/*mysql_connect("localhost" , "c5magda01" , "utewFKxXQK50@"); 127.0.0.1*/

if (!$db_link = mysqli_connect("localhost" , "root" , "")){
    echo('Wystąpił błąd podczas połączenia z serwerem MySQL...<BR>');
    exit;
}
else {
    echo('Połączenie z bazą zostało nawiązane...<BR>');
}
if(!mysqli_select_db($db_link, "magda_blog")){
    echo('Wystąpił błąd podczas wyboru bazy danych: magda_blog<BR>');
}
//if(!mysqli_select_db($link, $dbname)){
//    echo('Wystąpił błąd podczas wyboru bazy danych: magda_blog<BR>');
//}
 else {
     echo('Została wybrana baza danych: magda_blog<BR>');
}
if(!mysqli_close($db_link)){
    echo('Wystąpił błąd podczas zamykania połączenia z serwerem MySQL...<BR>');
}
 else {
     echo('Połączenie z serwerem MySQL zostało zamknięte...<BR>');
}
            
?>)
        </div>
        <footer>
            Copyright � 2017 All Rights Reserved
        </footer>

    </body>
</html>
