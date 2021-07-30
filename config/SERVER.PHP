<?php
    
    const SERVER="localhost"; //Servidor
    const DB="sigeosbdi";     //Nombre BD
    const USER="root";        //Usuario db
    const PASS="";            //contraseña bd


    const SGBD="mysql:host=".SERVER.";dbname=".DB;

    //Encriptacion

    const METHOD="AES-256-CBC"; 
    const SECRET_KEY='$SIGEOSBDI@2021';
    CONST SECRET_IV='232812';
