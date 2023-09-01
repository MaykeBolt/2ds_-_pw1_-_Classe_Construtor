<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Pessoa;

$p1 = new Pessoa("Huginho", 12, "Cidade A.E. Carvalho(SP)");
$p2 = new Pessoa("Agostinho", 57, "Baixada Fluminense(RJ)");
$p3 = new Pessoa("Zezinho", 43, "Nova Cachoeirinha(MG)");
$p4 = new Pessoa("Yellow", 15, "Viridian Forest (Kanto)");
$p5 = new Pessoa("Pepper", 17, "Floresta de Squirrel's End (Hevera)");

echo ("<table>");

echo("<tr class='primarytr'>");
echo("<td><p class='nicefont'> Nome"); echo("<td> Idade"); echo("<td> Localização");
echo("</tr></p>");

echo("<tr>"); 
echo ("<td><p class='nicefont'>"); echo $p1->nome;echo("</td>");
echo ("<td> "),$p1->idade; echo ("</td>"); 
echo("<td> "); echo $p1->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'> "); echo $p2->nome;echo("</td>");
echo ("<td> "),$p2->idade; echo ("</td>"); 
echo("<td> "); echo $p2->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'> "); echo $p3->nome;echo("</td>");
echo ("<td> "),$p3->idade; echo ("</td>"); 
echo("<td> "); echo $p3->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'> "); echo $p4->nome;echo("</td>");
echo ("<td> "),$p4->idade; echo ("</td>"); 
echo("<td> "); echo $p4->local;echo ("</td>"); 
echo("</p></tr>"); 

echo("<tr>"); 
echo ("<td><p class='nicefont'>"); echo $p5->nome;echo("</td>");
echo ("<td>"),$p5->idade; echo ("</td>"); 
echo("<td>"); echo $p5->local;echo ("</td>"); 
echo("</p></tr>");

echo ("</table>");
?>