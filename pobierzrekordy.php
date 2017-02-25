<?php
if (!$db_link = mysql_connect("127.0.0.1" , "c5magda01" , "utewFKxXQK50@")){
    echo('Wystąpił błąd podczas połączenia z serwerem MySQL...<BR>');
    exit;
}
else {
    echo('Połączenie z bazą zostało nawiązane...<BR>');
}
if(!mysql_select_db('test' , $db_link)){
    echo('Wystąpił błąd podczas wyboru bazy danych: magda_blog<BR>');
}
 else {
     echo('Została wybrana baza danych: magda_blog<BR>');
}
if(!mysql_close($db_link)){
    echo('Wystąpił błąd podczas zamykania połączenia z serwerem MySQL...<BR>');
}
 else {
     echo('Połączenie z serwerem MySQL zostało zamknięte...<BR>');
}
            
?>)


