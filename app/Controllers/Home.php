<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Fernando Macedo
 */
class Home extends Controller {

    protected $foto;

    function __construct() {
        $this->foto = $this->model('Foto');
    }

    public function index($name = '') {
        $foto = $this->foto;
        $foto->titulo = $name;
        $foto->url = "endereco de diretorio x";

        $this->view('home/index', ['name' => $foto->titulo, 'dir' => $foto->url]);
    }

    public function create($titulo = '', $url = '') {
        Foto::create([
            'titulo' => $titulo,
            'url' => $url
        ]);
    }

}
