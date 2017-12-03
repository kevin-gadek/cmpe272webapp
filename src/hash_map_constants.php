<?php
include 'models/Item.php';

// Huy Products Here
$huy_items = array(
    1 => new Item(
        "Art",
        file_get_contents("../../public/company_product_description/company_1/art.txt"),
        "../../public/company_imgs/company_1/art.jpg",
        "$21 per hour"),

    2 => new Item(
        "Cooking",
        file_get_contents("../../public/company_product_description/company_1/cooking.txt"),
        "../../public/company_imgs/company_1/cooking.jpg",
        "$21 per hour"),
    3 => new Item(
        "Computer Science",
        file_get_contents("../../public/company_product_description/company_1/cs.txt"),
        "../../public/company_imgs/company_1/cs.jpg",
        "$21 per hour"),
    4 => new Item(
        "Engineering",
        file_get_contents("../../public/company_product_description/company_1/engineering.txt"),
        "../../public/company_imgs/company_1/engineering.jpg",
        "$21 per hour"),
    5 => new Item(
        "English",
        file_get_contents("../../public/company_product_description/company_1/english.txt"),
        "../../public/company_imgs/company_1/english.jpeg",
        "$21 per hour"),
    6 => new Item(
        "Foreign Language",
        file_get_contents("../../public/company_product_description/company_1/fl.txt"),
        "../../public/company_imgs/company_1/fl.jpeg",
        "$21 per hour"),
    7 => new Item(
        "Mathematics",
        file_get_contents("../../public/company_product_description/company_1/math.txt"),
        "../../public/company_imgs/company_1/math.jpeg",
        "$21 per hour"),
    8 => new Item(
        "Music",
        file_get_contents( "../../public/company_product_description/company_1/music.txt"),
        "../../public/company_imgs/company_1/music.jpeg",
        "$21 per hour"),
    9 => new Item(
        "Science",
        file_get_contents("../../public/company_product_description/company_1/science.txt"),
        "../../public/company_imgs/company_1/science.jpg",
        "$21 per hour"),
    10 => new Item(
        "Sports",
        file_get_contents("../../public/company_product_description/company_1/sports.txt"),
        "../../public/company_imgs/company_1/sports.jpg",
        "$21 per hour")
);


?>