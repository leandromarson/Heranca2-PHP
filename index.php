<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Heranca2 PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Herança2</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Professor.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                require_once 'Tecnico.php';
                require_once 'Visitante.php';
                
                $v = new Visitante("Juao", 37, "m");
                $a = new Aluno("Romiro",17,"m",1123,"ADM");
                $t = new Tecnico("Simoleu",20,"m",1100,"MEC",500041);
                $b = new Bolsista("Oriporan",30,"f",4710,"DID",25);
                $pr = new Professor("Aristeu",65,"m","Fisica",2944.93);
                
                $v->fazerAniver();
                $b->renovarBolsa();
                $pr->receberAumento(900);
                $t->praticar();
                $a->pagarMensalidade();
                $t->pagarMensalidade();
                $b->pagarMensalidade();
                $a->cancelarMatricula();
                
                $v->status();
                $a->status();
                $pr->status();
                $b->status();
                $t->status();
               
                
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
