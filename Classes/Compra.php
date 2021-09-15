<?php
class Compra{
    private $data_de_compra;
    private $livro;
    private $ususario;
    private $valor;
    private $metodo;
    private $endereço;

    public function __construct($data_de_compra,$livro,$ususario,$valor,$metodo,$endereço)
    {
        $this->data_de_compra = $data_de_compra;
        $this->livro = $livro;
        $this->ususario = $ususario;
        $this->valor = $valor;
        $this->metodo = $metodo;
        $this->endereço = $endereço;
    }

    /**
     * Get the value of data_de_compra
     */
    public function getDataDeCompra()
    {
        return $this->data_de_compra;
    }

    /**
     * Set the value of data_de_compra
     *
     * @return  self
     */
    public function setDataDeCompra($data_de_compra)
    {
        $this->data_de_compra = $data_de_compra;

        return $this;
    }

    /**
     * Get the value of livro
     */
    public function getLivro()
    {
        return $this->livro;
    }

    /**
     * Set the value of livro
     *
     * @return  self
     */
    public function setLivro($livro)
    {
        $this->livro = $livro;

        return $this;
    }

    /**
     * Get the value of ususario
     */
    public function getUsusario()
    {
        return $this->ususario;
    }

    /**
     * Set the value of ususario
     *
     * @return  self
     */
    public function setUsusario($ususario)
    {
        $this->ususario = $ususario;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of metodo
     */
    public function getMetodo()
    {
        return $this->metodo;
    }

    /**
     * Set the value of metodo
     *
     * @return  self
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

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