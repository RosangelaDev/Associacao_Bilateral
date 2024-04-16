<?php
	class Produto
	{
		public function __construct(private string $nome = "", private string $descricao = "", private float $preco = 0.00, private array $fornecedor = array()){}
		
		//métodos gets
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getDescricao()
		{
			return $this->descricao;
		}
		public function getPreco()
		{
			return $this->preco;
		}
		
		public function getFornecedor()
		{
			return $this->fornecedor;
		}
		
		//métodos sets
		/*Um método set, em termos simples, 
		é um tipo de função em uma classe que permite 
		alterar ou definir o valor de uma propriedade 
		específica do objeto. Por exemplo, se tivermos 
		uma classe Carro, um método set pode ser usado 
		para definir o modelo do carro como "Toyota Corolla". 
		Em suma, um método set "configura" o valor de uma 
		propriedade de um objeto para um novo valor 
		especificado.*/
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		
		public function setPreco($preco)
		{
			$this->preco = $preco;
		}
		
		public function setFornecedor($fornecedor)
		{
			$this->fornecedor[] = $fornecedor;
		}
	}//fim da classe
?>