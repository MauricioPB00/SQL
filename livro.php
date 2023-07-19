// Update no livro
public function save(){
    $sql = new Sql();

    $maxCodEstante = $sql->select("SELECT MAX(cod_estante) AS max_cod_estante FROM livros");
    $codEstante = $maxCodEstante[0]['max_cod_estante'] + 1;

    $results = $sql->select("SELECT sp_update_livros_save(:idlivro, :titulo, :ano, :paginas, :autor, :editora, :condicao, :sinopse, :dono_livro, :cod_estante)",
        array(
            ":idlivro" => $this->getidlivro(),
            ":titulo" => $this->gettitulo(),
            ":ano" => $this->getano(),
            ":paginas" => $this->getpaginas(),
            ":autor" => $this->getautor_idautor(),
            ":editora" => $this->geteditora_ideditora(),
            ":condicao" => $this->getcondicao(),
            ":sinopse" => $this->getsinopse(),
            ":dono_livro" => $this->getdono_livro(),
            ":cod_estante" => $codEstante
        )
    );
	var_dump(array());
}
	
