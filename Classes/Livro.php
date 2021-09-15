<?php 
class Livro{
    private $titulo;
    private $autor;
    private $resumo;
    private $faixa_etaria;
    private $numero_de_paginas;
    private $lançamento;
    private $valor;
    private $editora;
    private $tipodecapa;
    private $capa;

    public function __construct($titulo,$autor,$resumo,$faixa_etaria,$numero_de_paginas,$lançamento,$valor,$editora,$tipodecapa,$capa)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->resumo = $resumo;
        $this->faixa_etaria = $faixa_etaria;
        $this->numero_de_paginas = $numero_de_paginas;
        $this->lançamento = $lançamento;
        $this->valor = $valor;
        $this->editora = $editora;
        $this->tipodecapa = $tipodecapa;
        $this->capa = $capa;
        
    }
    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of resumo
     */
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Set the value of resumo
     *
     * @return  self
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get the value of faixa_etaria
     */
    public function getFaixaEtaria()
    {
        return $this->faixa_etaria;
    }

    /**
     * Set the value of faixa_etaria
     *
     * @return  self
     */
    public function setFaixaEtaria($faixa_etaria)
    {
        $this->faixa_etaria = $faixa_etaria;

        return $this;
    }

    /**
     * Get the value of numero_de_paginas
     */
    public function getNumeroDePaginas()
    {
        return $this->numero_de_paginas;
    }

    /**
     * Set the value of numero_de_paginas
     *
     * @return  self
     */
    public function setNumeroDePaginas($numero_de_paginas)
    {
        $this->numero_de_paginas = $numero_de_paginas;

        return $this;
    }

    /**
     * Get the value of lançamento
     */
    public function getLançamento()
    {
        return $this->lançamento;
    }

    /**
     * Set the value of lançamento
     *
     * @return  self
     */
    public function setLançamento($lançamento)
    {
        $this->lançamento = $lançamento;

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
     * Get the value of editora
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @return  self
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of tipodecapa
     */
    public function getTipodecapa()
    {
        return $this->tipodecapa;
    }

    /**
     * Set the value of tipodecapa
     *
     * @return  self
     */
    public function setTipodecapa($tipodecapa)
    {
        $this->tipodecapa = $tipodecapa;

        return $this;
    }

    /**
     * Get the value of capa
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     *
     * @return  self
     */
    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }
}
?>