<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Paper.php';

class PaperRepository extends Repository
{
    public function getPapers(int $limit = null)
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT paper.date_start, paper.date_end, paper.id_paper, shop.name_shop, paper.pdf_path, paper.img_path 
            FROM public.paper
            LEFT JOIN public.shops shop ON shop.id_shop = paper.id_shop LIMIT :limit
        ');

        $stmt->bindParam(':limit', $limit);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $papers = [];

        if ($result) {
            foreach ($result as $row) {
                $papers[] = new Paper($row['pdf_path'], $row['id_paper'], $row['img_path'], $row['name_shop']);
            }
        }
        return $papers;
    }

    public function getById(int $id): ?Paper
    {
        $stmt = $this->database->connect()->prepare('
            SELECT paper.date_start, paper.date_end, paper.id_paper, shop.name_shop, paper.pdf_path, paper.img_path 
            FROM public.paper
            LEFT JOIN public.shops shop ON shop.id_shop = paper.id_shop
            WHERE paper.id_paper = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Paper($result['pdf_path'], $result['id_paper'], $result['img_path'], $result['name_shop']);
    }
}
