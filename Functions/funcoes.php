<?php
require('Conexao/Conexao.php');
class Funcoes extends Conexao{

    public function adicionarProdutos($NomeDoProduto,$Preco, $Estoque){
        $result = parent::insert("INSERT INTO `Produtos`(`NomeDoProduto`, `Preco`, `Estoque`) VALUES ('$NomeDoProduto','$Preco','$Estoque')");
    }

    public function listarPordutos(){

        $result = parent::select("SELECT * FROM `Produtos` WHERE 1");
        return $resposta = $result->fetch_all(MYSQLI_ASSOC);
    }    
    public function getProduto($id){

        $result = parent::select("SELECT * FROM `Produtos` WHERE id = '".$id."'");
        return $resposta = $result->fetch_all(MYSQLI_ASSOC);
    }    

    public function CriarConta($email,$senha, $nome, $estado, $rua, $cep){
        $result = parent::insert("INSERT INTO `Usuario`(`Email`, `Senha`, `Nome`, `Estado`, `Rua`, `Cep`) VALUES ('$email','$senha','$nome','$estado','$rua','$cep')");
    }

    public function AdicionarItemNoCarrinho($idDoCliente, $quantidade, $idDoProduto){
        $result = parent::insert("INSERT INTO `Carrinho`(`id_Cliente`, `id_Produto`, `quantidade`) VALUES ('$idDoCliente','$quantidade','$idDoProduto')");
    }
}