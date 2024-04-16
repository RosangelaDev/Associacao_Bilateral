<?php

	/*
		Em resumo, uma classe em PHP é uma estrutura que encapsula dados e comportamentos relacionados em um único objeto. 
		Ela permite criar objetos que compartilham as mesmas características e comportamentos,  facilitando a reutilização 
		de código e a organização de funcionalidades em um programa.*/
	class Fornecedor
	{
		public function __construct(private string $cnpj = "", private string $razao_social = "", private array $produto = array()){}
		
		//métodos gets
		
		public function getCnpj()
		{
			return $this->cnpj;
		}
		public function getRazao_social()
		{
			return $this->razao_social;
		}

		public function getProduto()
		{
			return $this->produto;
		}
		//métodos sets
		
		public function setCnpj($cnpj)
		{
			$this->cnpj = $cnpj;
		}
		
		public function setRazao_social($razao_social)
		{
			$this->razao_social = $razao_social;
		}
	
		public function setProduto($produto)
		{
			$this->produto[] = $produto;
		}
		
	}//fim da classe
?>