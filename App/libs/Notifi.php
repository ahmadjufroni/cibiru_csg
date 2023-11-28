<?php


class Notifi {


    public static function setNotif($pesan)
    {
        $_SESSION['notf'] = [
            'pesan' =>$pesan,
        ];
    }


    public static function notf()
    {
        if( isset($_SESSION['notf']) ){
            echo " ".$_SESSION['notf']['pesan'];


                unset($_SESSION['notf']);
        }
    }
}