<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Paper.php';

class PaperRepository extends Repository
{
    public function formatData(array $data)
    {
        $result = [];
        foreach ($data as $row) {
            $dateStart = date_create($row['date_start']);
            $dateEnd = date_create($row['date_end']);
            $result[] = new Paper($row['pdf_path'], $row['id_paper'], $row['img_path'], $row['name_shop'], date_format($dateStart, 'd/m'), date_format($dateEnd, 'd/m'));
        }

        return $result;
    }

    public function getPapers(int $limit = null)
    {

        $stmt = $this->database->connect()->prepare('
            SELECT paper.date_start, paper.date_end, paper.id_paper, shop.name_shop, paper.pdf_path, paper.img_path
            FROM public.paper
            LEFT JOIN public.shops shop ON shop.id_shop = paper.id_shop LIMIT :limit
        ');

        $stmt->bindParam(':limit', $limit);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $papers = $this->formatData($result);
        }
        return $papers;
    }

    public function getShopPapers(int $id)
    {
        $stmt = $this->database->connect()->prepare(
            '
        SELECT paper.date_start, paper.date_end, paper.id_paper, shop.name_shop, paper.pdf_path, paper.img_path 
        FROM public.paper
        LEFT JOIN public.shops shop ON shop.id_shop = paper.id_shop
        WHERE shop.id_shop = :id'
        );
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $papers = $this->formatData($result);
        }
        return $papers;
    }

    public function getCategoryPapers(int $id)
    {
        $stmt = $this->database->connect()->prepare(
            '
        SELECT paper.date_start, paper.date_end, paper.id_paper, shop.name_shop, paper.pdf_path, paper.img_path 
        FROM public.paper
        LEFT JOIN public.shops shop ON shop.id_shop = paper.id_shop
        WHERE shop.id_category = :id'
        );
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $papers = $this->formatData($result);
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

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            $papers = $this->formatData($result);
        }
        return $papers[0];
    }
}
