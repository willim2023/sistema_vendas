<?php
require_once '../config/Database.php';
require_once '../entity/Pedido.php';

class PedidoDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

        
    public function getById($id) {
        // Implementação para obter um pedido por ID
    }

    public function getAll() {
        // Implementação para obter todos os pedidos
    }

    public function create($entity) {
        // Implementação para criar um pedido novo
    }

    public function update($entity) {
        // 
    }

    public function delete($id) {

    }


}
?>