<?php
class Pagination {
    private $items;           // Verilerin bulunduğu dizi
    private $itemsPerPage;    // Sayfa başına gösterilecek veri sayısı
    private $currentPage;     // Şu anki sayfa
    private $totalItems;      // Toplam veri sayısı
    private $totalPages;      // Toplam sayfa sayısı

    public function __construct($items, $itemsPerPage = 10) {
        $this->items = $items;
        $this->itemsPerPage = $itemsPerPage;
        $this->totalItems = !empty($items) ? count($items) : 0;
        $this->totalPages = ceil($this->totalItems / $itemsPerPage);
        $this->currentPage = isset($_GET['pagenation']) ? max(1, min($this->totalPages, intval($_GET['pagenation']))) : 1;
    }

    public function getLimit() {
        $offset = ($this->currentPage - 1) * $this->itemsPerPage;
        return $offset;
    }

    public function getPaginatedData() {
        if (empty($this->items)) {
            return null;
        }
        $offset = $this->getLimit();
        $itemsPerPage = $this->itemsPerPage;
        return array_slice($this->items, $offset, $itemsPerPage);
    }
    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function getTotalPages() {
        return $this->totalPages;
    }

    public function getPrevButton()
    {
        // Eski URL
        $oldUrl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        // URL'yi ayrıştır
        $parts = parse_url($oldUrl);

        // Query stringi ayrıştır
        parse_str($parts['query'], $query);

        // Yeni sayfa numarasını hesapla
        $newPage = isset($query['pagenation']) ? $query['pagenation'] - 1 : 1;

        // Yeni query string oluştur
        $query['pagenation'] = $newPage;

        // Yeni URL oluştur
        $newUrl = $parts['scheme'] . "://" . $parts['host'] . $parts['path'] . "?" . http_build_query($query);

        return $newUrl; // Yeni URL'yi göster
    }
    public function getNextButton()
    {
        // Eski URL
        $oldUrl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        // URL'yi ayrıştır
        $parts = parse_url($oldUrl);

        // Query stringi ayrıştır
        @parse_str($parts['query'], $query);

        // Yeni sayfa numarasını hesapla
        $newPage = isset($query['pagenation']) ? $query['pagenation'] + 1 : 1;

        // Yeni query string oluştur
        $query['pagenation'] = $newPage;

        // Yeni URL oluştur
        $newUrl = $parts['scheme'] . "://" . $parts['host'] . $parts['path'] . "?" . http_build_query($query);

        return $newUrl; // Yeni URL'yi göster
    }
    public function getUrl($number=1)
    {
        // Eski URL

        $oldUrl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        // URL'yi ayrıştır
        $parts = parse_url($oldUrl);

        // Query stringi ayrıştır
        @parse_str($parts['query'], $query);

        // Yeni sayfa numarasını hesapla
        $newPage = isset($query['pagenation']) ? $number : 1;

        // Yeni query string oluştur
        $query['pagenation'] = $newPage;

        // Yeni URL oluştur
        $newUrl = $parts['scheme'] . "://" . $parts['host'] . $parts['path'] . "?" . http_build_query($query);

        return $newUrl; // Yeni URL'yi göster
    }
}