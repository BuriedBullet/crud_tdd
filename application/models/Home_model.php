<?php

class Home_Model extends CI_Model{
    
    public function __construct()
    {
        parent:: __construct();
    }
    
    public function get_filmes()
    {
        $query = (object)array();
        //$query = $this->db->get("filme")->result();
        echo '<pre>';
        print_r($this->db->query("SELECT * FROM filme"));
        echo '</pre>';
        exit;
        if($query)
        {
            foreach($query->result() as $item)
            {
                $item->categoria = $this->db->get_where("categoria_filme", "id_filme = $item->id")->result();
                foreach($item->categoria as $value)
                {
                    $value->nome = $this->get_categoria($value->categoria);
                }

                $item->plataforma = $this->db->get_where("plataforma_filme", "id_filme = $item->id")->result();
                foreach($item->plataforma as $value)
                {
                    $value->nome = $this->get_plataformas($value->plataforma);
                }
            }   
        }
        else
        {
            return (object)array();
        }
        
        return $query;
    }

    public function get_categoria($id = null)
    {
        $categoria = array();
        $categoria[] = array("id"=> 1, "nome" => "Ação");
        $categoria[] = array("id"=> 2, "nome" => "Animação");
        $categoria[] = array("id"=> 3, "nome" => "Aventura");
        $categoria[] = array("id"=> 4, "nome" => "Comédia");
        $categoria[] = array("id"=> 5, "nome" => "Documentário");
        $categoria[] = array("id"=> 6, "nome" => "Fantasia");
        $categoria[] = array("id"=> 7, "nome" => "Ficção científica");
        $categoria[] = array("id"=> 8, "nome" => "Guerra");
        $categoria[] = array("id"=> 9, "nome" => "Musicais");
        $categoria[] = array("id"=> 10, "nome" => "Romance");
        $categoria[] = array("id"=> 11, "nome" => "Suspense");
        $categoria[] = array("id"=> 12, "nome" => "Terror");

        if($id != null)
        {
            return $categoria[$id-1];
        }
        
        return $categoria;
    }

    public function get_plataformas($id = null)
    {
        $plataforma = array();
        $plataforma[] = array("id"=> 1, "nome" => "Netflix");
        $plataforma[] = array("id"=> 2, "nome" => "Amazon Prime Video");
        $plataforma[] = array("id"=> 3, "nome" => "Claro Video");
        $plataforma[] = array("id"=> 4, "nome" => "GloboPlay");
        $plataforma[] = array("id"=> 5, "nome" => "Google Play Movies");
        $plataforma[] = array("id"=> 6, "nome" => "Looke");
        $plataforma[] = array("id"=> 7, "nome" => "Now Online");
        $plataforma[] = array("id"=> 8, "nome" => "Oi Play");
        $plataforma[] = array("id"=> 9, "nome" => "PlayStation Video");
        $plataforma[] = array("id"=> 10, "nome" => "Telecine Play");
        $plataforma[] = array("id"=> 11, "nome" => "Vivo Play");
        $plataforma[] = array("id"=> 12, "nome" => "ITunes");
        $plataforma[] = array("id"=> 13, "nome" => "Crunchyroll");
        $plataforma[] = array("id"=> 14, "nome" => "Disney+");

        if($id != null)
        {
            return $plataforma[$id-1];
        }
        
        return $plataforma;
    }

    public function insere_filme()
    {
        $rst = (object)array("result" => false, "msg" => "", "tipo" => 0);
        $data = (object)$this->input->post();

        $this->db->set("titulo", $data->titulo);
        $this->db->set("data_lancamento", $this->formata_data($data->data_lancamento, "dt2bd"));
        $this->db->set("duracao", $data->duracao);
        $this->db->set("sinopse", $data->sinopse);

        if($data->id_filme != 0)
        {
            $this->db->where("id", $data->id_filme);
            if($this->db->update("filme"))
            {
                $this->insere_categoria($data->categoria, $data->id_filme);
                $this->insere_plataforma($data->plataforma, $data->id_filme);

                $rst->result = true;
                $rst->msg = "Filme Atualizado com sucesso";
            }
            else
            {
                $rst->msg = "Erro ao atualizar as informações do filme";
            }
            $rst->tipo = 2;
        }
        else
        {
            if($this->db->insert("filme"))
            {
                $rst->result = true;
                $rst->msg = "Filme Inserido com sucesso";
            }
            else
            {
                $rst->msg = "Erro ao inserir as informações do filme";
            }

            $rst->tipo = 1;
        }

        return $rst;
    }

    public function formata_data($data, $tipo)
    {
        if($tipo == "dt2bd")
        {
            if(strlen($data) == 10)
                $string = substr($data, -4) . '-' . substr($data, -7, 2) . '-' . substr($data, -10, 2);
            else
                $string = substr($data, -2) . '-' . substr($data, -5, 2) . '-' . substr($data, -8, 2);

            return $string;
        }
        else if($tipo == "bd2dt")
        {
            if(strlen($data) == 10)
                $string = substr($data, -2) . '/' . substr($data, -5, 2) . '/' . substr($data, -10, 4);
            else
                $string = substr($data, -2) . '/' . substr($data, -5, 2) . '/' . substr($data, -8, 2);

            return $string;
        }
    }

    public function insere_categoria($categoria, $id_filme)
    {
        $array_categoria = explode(",", $categoria);
        $verif = 1;

        $query = $this->db->get_where("categoria_filme", "id_filme = $id_filme")->array_result();

        foreach($array_categoria as $item)
        {
            if(array_search($item, $query) < -1)
            {
                $this->db->set("id_filme", $id_filme);
                $this->db->set("categoria", $item);

                if(!$this->db->insert("categoria_filme"))
                {
                    $verif = 0;
                }
            }
        }

        $query = $this->db->get_where("categoria_filme", "id_filme = $id_filme")->array_result();

        foreach($query as $item)
        {
            if(array_search($item["id"], $array_categoria) < -1)
            {
                $this->db->where("id", $item["id"]);
                if(!$this->db->delete("categoria_filme"))
                {
                    $verif = 0;
                }
            }
        }

        return $verif;
    }

    public function insere_plataforma($plataforma, $id_filme)
    {
        $array_plataforma = explode(",", $plataforma);
        $verif = 1;

        $query = $this->db->get_where("plataforma_filme", "id_filme = $id_filme")->array_result();

        foreach($array_plataforma as $item)
        {
            if(array_search($item, $query) < -1)
            {
                $this->db->set("id_filme", $id_filme);
                $this->db->set("plataforma", $item);

                if(!$this->db->insert("plataforma_filme"))
                {
                    $verif = 0;
                }
            }
        }

        $query = $this->db->get_where("plataforma_filme", "id_filme = $id_filme")->array_result();

        foreach($query as $item)
        {
            if(array_search($item["id"], $array_plataforma) < -1)
            {
                $this->db->where("id", $item["id"]);
                if(!$this->db->delete("plataforma_filme"))
                {
                    $verif = 0;
                }
            }
        }

        return $verif;
    }

    public function test_type_return_get_filmes()
    {
        return $this->unit->run(gettype ($this->get_filmes()), "object", "Retorna get_filmes", "Verificação de retorno da função");
    }

    public function test_lista_categorias()
    {
        return $this->unit->run(count($this->get_categoria()), 12, "Lista de Categorias", "Verifica se está retornando a lista toda");
    }

    public function test_lista_categoria_especifica()
    {
        return $this->unit->run(count($this->get_categoria(2)), 2, "Categoria Especifica", "Verifica se está retornando uma categoria");
    }

    public function test_lista_plataforma()
    {
        return $this->unit->run(count($this->get_plataformas()), 14, "Lista de Plataformas", "Verifica se está retornando a lista toda");
    }

    public function test_lista_plataforma_especifica()
    {
        return $this->unit->run(count($this->get_plataformas(6)), 2, "Plataforma Especifica", "Verifica se está retornando uma plataforma");
    }

    // public function test_insere_filme()
    // {
    //     $_POST["id_filme"] = 0;
    //     return $this->unit->run(($this->insere_filme()->tipo), 1, "Tipo de Ação inclusão de dados", "Verifica se a função realiza a inserção dos dados do filme");
    // }

    // public function test_edita_filme()
    // {
    //     $_POST["id_filme"] = 1;
    //     return $this->unit->run(($this->insere_filme()->tipo), 2, "Tipo de Ação inclusão de dados", "Verifica se a função realiza a edição dos dados do filme");
    // }

    public function test_formata_dt2bd($data)
    {
        return $this->unit->run($this->formata_data($data, "dt2bd"), "2020-11-12", "Formata para o Banco", "Formata a Data para que possa ser inserido no banco");
    }

    public function test_formata_bd2dt($data)
    {
        return $this->unit->run($this->formata_data($data, "bd2dt"), "12/11/2020", "Formata saindo do Banco", "Formata a Data para quando ela é recebida do Banco de Dados");
    }

    public function monta_lista_teste()
    {
        $rst = array();

        $rst[] = $this->test_type_return_get_filmes();
        $rst[] = $this->test_lista_categorias();
        $rst[] = $this->test_lista_categoria_especifica();
        $rst[] = $this->test_lista_plataforma();
        $rst[] = $this->test_lista_plataforma_especifica();
        // $rst[] = $this->test_insere_filme();
        // $rst[] = $this->test_edita_filme();
        $rst[] = $this->test_formata_dt2bd("12/11/2020");
        $rst[] = $this->test_formata_bd2dt("2020-11-12");
        

        return $rst;
    }
    
}