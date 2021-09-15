<?php
class Usuario{
    private $nome;
    private $data_de_nascimento;
    private $cpf;
    private $email;
    private $telefone;
    private $estilo_literario;
    private $endereço;

    public function __construct($nome,$data_de_nascimento,$cpf,$email,$telefone,$estilo_literario,$endereço)
    {
        $this->nome = $nome;
        $this->data_de_nascimento = $data_de_nascimento;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->estilo_literario = $estilo_literario;
        $this->endereço = $endereço;    
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of data_de_nascimento
     */
    public function getDataDeNascimento()
    {
        return $this->data_de_nascimento;
    }

    /**
     * Set the value of data_de_nascimento
     *
     * @return  self
     */
    public function setDataDeNascimento($data_de_nascimento)
    {
        $this->data_de_nascimento = $data_de_nascimento;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of estilo_literario
     */
    public function getEstiloLiterario()
    {
        return $this->estilo_literario;
    }

    /**
     * Set the value of estilo_literario
     *
     * @return  self
     */
    public function setEstiloLiterario($estilo_literario)
    {
        $this->estilo_literario = $estilo_literario;

        return $this;
    }

    /**
     * Get the value of endereço
     */
    public function getEndereço()
    {
        return $this->endereço;
    }

    /**
     * Set the value of endereço
     *
     * @return  self
     */
    public function setEndereço($endereço)
    {
        $this->endereço = $endereço;

        return $this;
    }
}
?>