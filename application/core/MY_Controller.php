<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function show($conteudo, $dados)
    {
        $dados["header"] = 1;
        $html = $this->load->view("template/header", $dados, true);
        $html .= $this->load->view("template/navbar", $dados, true);

        foreach($conteudo as $item)
        {
            $html .= $item;
        }

        $html .= $this->load->view("template/rodape", $dados, true);
        $html .= $this->load->view("template/footer", null, true);

        echo $html;
    }
    
    public function show2($conteudo, $dados)
    {
        $dados["header"] = 2;
        $html = $this->load->view("template/header", $dados, true);
        $html .= $this->load->view("template/navbar_2", $dados, true);

        foreach($conteudo as $item)
        {
            $html .= $item;
        }

        $html .= $this->load->view("template/rodape", $dados, true);
        $html .= $this->load->view("template/footer", null, true);

        echo $html;
    }

}