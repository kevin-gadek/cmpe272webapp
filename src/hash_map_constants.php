<?php
include 'models/Item.php';

function getHuyItemName($index){
    global $huy_items;
    return $huy_items[$index]->getTitle();
}

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

// Mangesh Products Here
$mangesh_items = array(
    1 => new Item(
        "Complex",
        file_get_contents("../../public/company_product_description/company_5/complex.txt"),
        "../../public/company_imgs/company_5/complex.jpg",
        "$63300 each flat"),
	
	2 => new Item(
        "Omega",
        file_get_contents("../../public/company_product_description/company_5/omega.txt"),
        "../../public/company_imgs/company_5/omega.jpg",
        "$42300 each flat"),
		
	3 => new Item(
        "Lakeview",
        file_get_contents("../../public/company_product_description/company_5/lakeview.txt"),
        "../../public/company_imgs/company_5/lakeview.jpg",
        "$12500 each flat"),
		
	4 => new Item(
        "Sea",
        file_get_contents("../../public/company_product_description/company_5/sea.txt"),
        "../../public/company_imgs/company_5/sea.jpg",
        "$35000 each flat"),
		
	5 => new Item(
        "Panoroma",
        file_get_contents("../../public/company_product_description/company_5/panoroma.txt"),
        "../../public/company_imgs/company_5/panoroma.jpg",
        "$65000 each flat"),
		
	6 => new Item(
        "Fountain",
        file_get_contents("../../public/company_product_description/company_5/fountain.txt"),
        "../../public/company_imgs/company_5/fountain.jpg",
        "$45000 each flat"),
		
	7 => new Item(
        "Villa",
        file_get_contents("../../public/company_product_description/company_5/villa.txt"),
        "../../public/company_imgs/company_5/villa.jpg",
        "$5000 each flat"),
		
	8 => new Item(
        "Palace",
        file_get_contents("../../public/company_product_description/company_5/palace.txt"),
        "../../public/company_imgs/company_5/palace.jpg",
        "$35000 each flat"),
		
	9 => new Item(
        "King",
        file_get_contents("../../public/company_product_description/company_5/king.txt"),
        "../../public/company_imgs/company_5/king.jpg",
        "$28000 each flat"),
		
	10 => new Item(
        "Queen",
        file_get_contents("../../public/company_product_description/company_5/queen.txt"),
        "../../public/company_imgs/company_5/queen.jpg",
        "$15000 each flat"),
);

// Xuan Products Here
$xuan_items = array(
    1 => new Item(
        "BBQ",
        file_get_contents("../../public/company_product_description/company_4/BBQ.txt"),
        "../../public/company_imgs/company_4/BBQ.jpg",
        "$35"),
	
	2 => new Item(
        "Beef",
        file_get_contents("../../public/company_product_description/company_4/beef.txt"),
        "../../public/company_imgs/company_4/beef.jpg",
        "$42"),
		
	3 => new Item(
        "Curry",
        file_get_contents("../../public/company_product_description/company_4/curry.txt"),
        "../../public/company_imgs/company_4/curry.jpg",
        "$12"),
		
	4 => new Item(
        "Hotpot",
        file_get_contents("../../public/company_product_description/company_4/hotpot.txt"),
        "../../public/company_imgs/company_4/hotpot.jpg",
        "$35"),
		
	5 => new Item(
        "Huangmenji",
        file_get_contents("../../public/company_product_description/company_4/huangmenji.txt"),
        "../../public/company_imgs/company_4/huangmenji.jpg",
        "$65"),
		
	6 => new Item(
        "Lobster",
        file_get_contents("../../public/company_product_description/company_4/lobster.txt"),
        "../../public/company_imgs/company_4/lobster.jpg",
        "$45"),
		
	7 => new Item(
        "Noodles",
        file_get_contents("../../public/company_product_description/company_4/noodles.txt"),
        "../../public/company_imgs/company_4/noodles.jpg",
        "$50"),
		
	8 => new Item(
        "Porridge",
        file_get_contents("../../public/company_product_description/company_4/porridge.txt"),
        "../../public/company_imgs/company_4/porridge.jpg",
        "$35"),
		
	9 => new Item(
        "Sprrowfish",
        file_get_contents("../../public/company_product_description/company_4/sprrowfish.txt"),
        "../../public/company_imgs/company_4/sprrowfish.jpg",
        "$28"),
		
	10 => new Item(
        "Sushi",
        file_get_contents("../../public/company_product_description/company_4/sushi.txt"),
        "../../public/company_imgs/company_4/sushi.jpg",
        "$15"),
);

// Andrew Products Here
$andrew_items = array(
    1 => new Item(
        "Amethyst",
        file_get_contents("../../public/company_product_description/company_2/amethyst.txt"),
        "../../public/company_imgs/company_2/amethyst.jpg",
        "$10000"),
	
	2 => new Item(
        "Diamond",
        file_get_contents("../../public/company_product_description/company_2/diamond.txt"),
        "../../public/company_imgs/company_2/diamond.jpg",
        "$4200"),
		
	3 => new Item(
        "Goldstone",
        file_get_contents("../../public/company_product_description/company_2/goldstone.txt"),
        "../../public/company_imgs/company_2/goldstone.jpg",
        "$12562"),
		
	4 => new Item(
        "Perl",
        file_get_contents("../../public/company_product_description/company_2/perl.txt"),
        "../../public/company_imgs/company_2/perl.jpg",
        "$3596"),
		
	5 => new Item(
        "Platinum",
        file_get_contents("../../public/company_product_description/company_2/platinum.txt"),
        "../../public/company_imgs/company_2/Platinum.png",
        "$65556"),
		
	6 => new Item(
        "Ruby",
        file_get_contents("../../public/company_product_description/company_2/ruby.txt"),
        "../../public/company_imgs/company_2/ruby.jpg",
        "$4596"),
		
	7 => new Item(
        "Saphir",
        file_get_contents("../../public/company_product_description/company_2/saphir.txt"),
        "../../public/company_imgs/company_2/saphir.jpg",
        "$5085"),
		
	8 => new Item(
        "Tanzanite",
        file_get_contents("../../public/company_product_description/company_2/tanzanite.txt"),
        "../../public/company_imgs/company_2/tanzanite.jpg",
        "$3555"),
		
	9 => new Item(
        "Ungthu",
        file_get_contents("../../public/company_product_description/company_2/ungthu.txt"),
        "../../public/company_imgs/company_2/ungthu.jpg",
        "$2866"),
		
	10 => new Item(
        "Topaz",
        file_get_contents("../../public/company_product_description/company_2/topaz.txt"),
        "../../public/company_imgs/company_2/topaz.jpg",
        "$1509"),
);



// Kevin Products Here
$kevin_items = array(
    1 => new Item(
        "Bath",
        file_get_contents("../../public/company_product_description/company_3/bath.txt"),
        "../../public/company_imgs/company_3/bath.jpg",
        "$1000"),
	
	2 => new Item(
        "Bed",
        file_get_contents("../../public/company_product_description/company_3/bed.txt"),
        "../../public/company_imgs/company_3/bed.png",
        "$500"),
		
	3 => new Item(
        "Carpet",
        file_get_contents("../../public/company_product_description/company_3/carpet.txt"),
        "../../public/company_imgs/company_3/carpet.jpg",
        "$250"),
		
	4 => new Item(
        "Cushion",
        file_get_contents("../../public/company_product_description/company_3/cushion.txt"),
        "../../public/company_imgs/company_3/cushion.jpg",
        "$10"),
		
	5 => new Item(
        "Flooring",
        file_get_contents("../../public/company_product_description/company_3/flooring.txt"),
        "../../public/company_imgs/company_3/flooring.jpg",
        "$1250"),
		
	6 => new Item(
        "Lighting",
        file_get_contents("../../public/company_product_description/company_3/lighting.txt"),
        "../../public/company_imgs/company_3/lighting.jpg",
        "$100"),
		
	7 => new Item(
        "Propert Evaluation",
        file_get_contents("../../public/company_product_description/company_3/property_eval.txt"),
        "../../public/company_imgs/company_3/property_eval.jpg",
        "$360"),
		
	8 => new Item(
        "Tables",
        file_get_contents("../../public/company_product_description/company_3/tables.txt"),
        "../../public/company_imgs/company_3/tables.jpg",
        "$300"),
		
	9 => new Item(
        "Wallpaper",
        file_get_contents("../../public/company_product_description/company_3/wallpaper.txt"),
        "../../public/company_imgs/company_3/wallpaper.jpg",
        "$600"),
		
	10 => new Item(
        "Windows",
        file_get_contents("../../public/company_product_description/company_3/windows.txt"),
        "../../public/company_imgs/company_3/windows.jpg",
        "$1700"),
);



?>