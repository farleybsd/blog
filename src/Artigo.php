<?php

class Artigo
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $titulo, string $conteudo) : void
    {
       $insereArtigo = $this->mysql->prepare('INSERT INTO artigos(titulo,conteudo) VALUES (?,?);');   
        $insereArtigo->bind_param('ss',$titulo,$conteudo); // SS DUAS STRING QUE SAO AS INTERROGACOOES DA QUERY
        $insereArtigo->execute();
    }

    public function remover (string $id) : void
    {
        $removerArtigo = $this->mysql->prepare('DELETE FROM artigos WHERE id =? ');
        $removerArtigo->bind_param('s',$id);
        $removerArtigo->execute();
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id,conteudo,titulo from artigos');
        $artigos =  $resultado->fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }
    public function encontrarPorId (string $id) :array
    {
        //echo $id;
      $selecionarArtigo= $this->mysql->prepare("SELECT id,titulo,conteudo FROM artigos WHERE id=?");
      $selecionarArtigo->bind_param('s',$id);
      $selecionarArtigo->execute();
      $artigo=$selecionarArtigo->get_result()->fetch_assoc();
      return $artigo;
    }

    public function editar(string $id,string $titulo,string $conteudo): void
    {
       $editaArtigo= $this->mysql->prepare("UPDATE artigos SET titulo=? , conteudo=? WHERE id=?");
       $editaArtigo->bind_param('sss',$titulo,$conteudo,$id);
       $editaArtigo->execute();
    }
}
