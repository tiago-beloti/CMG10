<?php
//                 `-/osyhhhs.                      
//              `:shhhhhhhhhh-                      
//            `+hhhhhho/:--.`                       
//           -yhhhho-                               
//          :hhhhs.                                 
//         .hhhho                                   
//         ohhhy`       -oyyo-         `.`          
//         yhhho       -dddddd-       :hhho         
//         yhhho       .dddddd.       ohhhy         
//         +hhhh`       `/oo/`       `hhhh+         
//         `hhhhs`                  `shhhh`         
//          -hhhhy-                -yhhhh-          
//           .shhhhs:`          `:shhhhs.           
//             :yhhhhhyo//:://oyhhhhhy:             
//               -oyhhhhhhhhhhhhhhyo-               
//                  .:+osyyyyso+:.                   

//Dev: Flavio Tonnon
//Dev: Tiago Beloti
//Dev: Wesley Marques
//12/02/2021 - Ver 1.0 -> Start
//
//Tool: VS Code - PHP 7.1.26
//Mysql: 8.0
//Location: Garca-SP-Brazil
//-22.227974,-49.655115

$server = '172.16.1.50';
$port = '3306';
$db = 'cmg10';
$user = 'cmg10';
$pass = '';


$Pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass)
or die('Não é possivel se conectar ao banco de dados');

//fim do arquivo 
?>