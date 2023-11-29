<?php 

class ConfigConexao {

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "aluno";
    private $bd = "mydb";

    public $conexao;

    public function __construct() {
        $this->conexao = new mysqli($this->localhost, $this->root, $this->aluno, $this->mybd);

        if ($this->conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conexao->connect_error);
        }
    }

    public function query($sql) {
        return $this->conexao->query($sql);
    }

    public function close() {
        $this->conexao->close();
    }
}
?>


