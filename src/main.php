<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Pessoa;

$p1 = new Pessoa("Huginho", 12, "Cidade A.E. Carvalho(SP)");
$p2 = new Pessoa("Agostinho", 57, "Baixada Fluminense(RJ)");
$p3 = new Pessoa("Zezinho", 43, "Nova Cachoeirinha(MG)");
$p4 = new Pessoa("Yellow", 15, "Viridian Forest (Kanto)");

echo ("<style> .nicefont {font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;} td {padding: 10px; border: 2px black solid; text-align: center;} table {border: 2px black solid;} .primarytr {background-color: rgb(230, 230, 230);}</style>");
echo ("<table>");

echo("<tr class='primarytr'>");
echo("<td><p class='nicefont'> Nome"); echo("<td> Idade"); echo("<td> Localização");
echo("</tr></p>");

echo("<tr>"); 
echo ("<td><p class='nicefont'>Nome: "); echo $p1->nome;echo("</td>");
echo ("<td>Idade: "),$p1->idade; echo ("</td>"); 
echo("<td>Localização: "); echo $p1->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'>Nome: "); echo $p2->nome;echo("</td>");
echo ("<td>Idade: "),$p2->idade; echo ("</td>"); 
echo("<td>Localização: "); echo $p2->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'>Nome: "); echo $p3->nome;echo("</td>");
echo ("<td>Idade: "),$p3->idade; echo ("</td>"); 
echo("<td>Localização: "); echo $p3->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'>Nome: "); echo $p4->nome;echo("</td>");
echo ("<td>Idade: "),$p4->idade; echo ("</td>"); 
echo("<td>Localização: "); echo $p4->local;echo ("</td>"); 
echo("</p></tr>"); 

echo ("</table>");
?>