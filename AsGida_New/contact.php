<?php
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors =[];

if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'message'=>$_POST['message']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }
    if(empty($errors)){
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='mail.asgidacanakkale.com';
        $m->Username='info@asgidacanakkale.com';//replace with your email address
        $m->Password='C55aajh9900.';//replace with your password
        $m->SMTPSecure='';
        $m->Port=587;

        $m->isHTML();
        $m->Subject ='www.asgidacanakkale.com Adresinden Gelen Mail';
        $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['message'].'</p>';

        $m->FromName='Contact';
        $m->AddAddress('bariskoc93@gmail.com','Gelen E-Posta');
//		$m->AddAddress('muzafferkoc17@hotmail.com','Gelen E-Posta');
		//$m->AddAddress('info@asgidacanakkale.com','Gelen E-Posta');
        if ($m->send()) {
            echo "Teşekkürler, mesajınızı aldık ve en kısa sürede cevaplayacağız." . " -" . "<a href='index' style='text-decoration:none;color:red;'> Ana Sayfaya Dön..</a>";
            die();
        }else{
            $errors[]="Mesajınız gönderilemedi. Lütfen tekrar deneyiniz!";
        }
    }
}else{
    $errors[]= 'Birşeyler ters gitti';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header ('Location:iletisim');
