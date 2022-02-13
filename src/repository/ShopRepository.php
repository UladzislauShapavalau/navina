<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Shop.php';

class ShopRepository extends Repository
{
    public function getShops(int $limit = null)
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT id_shop, img_path, name_shop FROM public.shops LIMIT :limit
        ');

        $stmt->bindParam(':limit', $limit);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $shops = [];

        if ($result) {
            foreach ($result as $row) {
                $shops[] = new Shop($row['id_shop'], $row['img_path'], $row['name_shop']);
            }
        }
        return $shops;
    }

    public function getById(int $id): ?Shop
    {
        $stmt = $this->database->connect()->prepare('
            SELECT id_shop, img_path, name_shop FROM public.shops WHERE id_shop = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Shop($result['id_shop'], $result['img_path'], $result['name_shop']);
    }
}
