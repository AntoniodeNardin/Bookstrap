<?php
class Carrinho{
    private $livros;
    private $usuario;
    private $total;
    private $numero_de_itens;

    /**
     * Get the value of livros
     */
    public function getLivros()
    {
        return $this->livros;
    }

    /**
     * Set the value of livros
     *
     * @return  self
     */
    public function setLivros($livros)
    {
        $this->livros = $livros;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of numero_de_itens
     */
    public function getNumeroDeItens()
    {
        return $this->numero_de_itens;
    }

    /**
     * Set the value of numero_de_itens
     *
     * @return  self
     */
    public function setNumeroDeItens($numero_de_itens)
    {
        $this->numero_de_itens = $numero_de_itens;

        return $this;
    }
}
?>