<?php

class cinema{
  private $filmes;
  private $salas;
  private $ingressos;
  private $cliente;
}
class filmes{
  public function exibirFilmes(){
    $nome = "John Wick";
    $duracao = 240;
    $classificacao = "+18";
    $categoria = "Ação";

    echo "Os filmes em cartaz são:\n";
    echo $nome."\n";
    echo $duracao."\n";
    echo $classificacao."\n";
    echo $categoria."\n";
  }
}
  $filmes = new filmes();
  $filmes->exibirFilmes();

class salas{
  public function exibirSalas(){
    $capacidade = 50;
    $assentos = ["poltrona","cadeira"];

    echo $capacidade."\n";
    echo $assentos[0]."\n";
  }
}
  $salas = new salas();
  $salas->exibirSalas();

class ingressos extends salas{
  public function exibirIngressos($assentos){
    $numeroPoltrona = 5;
    $horario = "16:00 pm";
    $sala = "2B";

    echo ("Sua ".$assentos[0]."é: ".$numeroPoltrona."\n");
    echo ("Para a sessão das ".$horario." na sala ".$sala."\n");
    
  }
   
}

  $ingressos= new ingressos();
  $ingressos->exibirIngressos(["poltrona"]);

class cliente extends filmes{
  public function exibirClientes($nome){
    $cinema = "Orient Cinemas";
    $numIngresso = 1;
    $numSala = "2B";

    echo ("O cinema é: ".$cinema."\n");
    echo ("O número do seu ingresso é: ".$numIngresso."\n"."e sua sala é: ".$numSala."\n");
    echo ("O filme escolhido foi: ".$nome."\n");
  }

}
  $cliente= new cliente();
  $cliente->exibirClientes("John Wick");
?>