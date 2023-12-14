<?php 

class ConfigConexaoDao {

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $bd = "mydb";

    public $conexao;

    public function __construct() {
        $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->usuario, $this->senha);
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexao->exec('SET NAMES "utf8"');

        
    }
}
?>


