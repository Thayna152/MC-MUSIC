<?php

  private $id;
  private $nome;
  private $login;
  private $senha;
  private $logado;

  function getCodUsuario() {
    return $this->idUsuario;
  }

  function getNome() {
    return $this->nome;
  }

  function getLogin() {
    return $this->login;
  }

  function getSenha() {
    return $this->senha;
  }

  function getLogado() {
    return $this->logado;
  }

  function setCodUsuario($id) {
    $this->codUsuario = $id;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function setLogin($login) {
    $this->login = $login;
  }

  function setSenha($senha) {
    $this->senha = $senha;
  }

  function setLogado($logado) {
    $this->logado = $logado;
  }
