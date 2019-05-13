<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $title = 'Заявка на сайте';
        $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
        $company =  substr(htmlspecialchars(trim($_POST['company'])), 0, 1000); 
        $about =  substr(htmlspecialchars(trim($_POST['about'])), 0, 1000);
        $email =  substr(htmlspecialchars(trim($_POST['email'])), 0, 1000); 
        $mess = '
        Имя отправителя:'.$_POST['name'].'
        Название компании:'.$_POST['company'].'
        Продукт:'.$_POST['about'].'
        E-mail:'.$_POST['email'].'
        ';
        // $to - кому отправляем 
        $to = 'info@l-green.ru'; 
        // $from - от кого 
        $from='l-green.ru'; 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from);  
} else echo 'Error';
?>