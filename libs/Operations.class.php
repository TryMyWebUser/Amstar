<?php

class Operations
{

    public static function getCategory()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProducts()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getRProducts()
    {
        $conn = Database::getConnect();
        $sql = "SELECT * FROM `r-product` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductPage($conn)
    {
        $getCate = $_GET['data'];
        $sql = "SELECT * FROM `products` WHERE `category` = '$getCate'";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getCateChecker($conn)
    {
        $sql = "SELECT * FROM `category` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getProductChecker($conn)
    {
        $sql = "SELECT * FROM `products` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getRProductChecker($conn)
    {
        $sql = "SELECT * FROM `r-product` ORDER BY `created_at` ASC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    
    public static function getCate($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `category` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getProduct($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `products` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
    public static function getRProduct($conn)
    {
        $getID = $_GET['edit_id'];
        $sql = "SELECT * FROM `r-product` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result ? $result->fetch_assoc() : null;
    }
}

?>