<?php
class Usuario {
    private $db;

    public function _construct($conexao) {
        $this->db = $conexao;
    }

    public function ListaUsuarios(){
        $usuarios = array();

        $sql = "SELECT * FROM usuarios";

        $result = $this->db->query($sql);

        if($result) {
            while($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
            }

            $result->close();

        }

        return $usuarios;
        
    }
}
?>