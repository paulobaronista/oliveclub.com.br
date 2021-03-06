<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Olive Club Batalha';
        $data['description'] = 'Conheça o Olive Club Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Olive Club Batalha';
        $data['description'] = 'Conheça o Olive Club Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Olive Club Batalha';
        $data['description'] = 'Conheça o Olive Club Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
