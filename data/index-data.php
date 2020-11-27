<?php
	$data_nuts = [
				[
					"id" => "n1",
					"name" => "Almonds",
					"weight" => 100,
					"originalPrice" => 280.00,
					"reducePrice" => 149.00,
					"image" => "images/m1.jpg",
				],
				[
					"id" => "n2",
					"name" => "Cashew Nuts",
					"weight" => 100,
					"originalPrice" => 420.00,
					"reducePrice" => 200.00,
					"image" => "images/m2.jpg",
				],
				[
					"id" => "n3",
					"name" => "Pistachios",
					"weight" => 250,
					"originalPrice" => 600.99,
					"reducePrice" => 520.99,
					"image" => "images/m3.jpg",
				],
	];

	$data_oils = [
				[
					"id" => "o1",
					"name" => "Freedom Oil",
					"volume" => 1,
					"originalPrice" => 110.00,
					"reducePrice" => 78.00,
					"image" => "images/mk4.jpg",
				],
				[
					"id" => "o2",
					"name" => "Saffola Gold",
					"volume" => 1,
					"originalPrice" => 150.00,
					"reducePrice" => 130.00,
					"image" => "images/mk5.jpg",
				],
				[
					"id" => "o3",
					"name" => "Fortune Oil",
					"volume" => 5,
					"originalPrice" => 500.00,
					"reducePrice" => 399.99,
					"image" => "images/mk6.jpg",
				],
	];

	$data_noodles = [
				[
					"id" => "nd1",
					"name" => "Yippee Noodles",
					"weight" => 65,
					"originalPrice" => 25.00,
					"reducePrice" => 15.00,
					"image" => "images/mk7.jpg",
				],
				[
					"id" => "nd2",
					"name" => "Wheat Pasta",
					"weight" => 500,
					"originalPrice" => 120.00,
					"reducePrice" => 98.00,
					"image" => "images/mk8.jpg",
				],
				[
					"id" => "nd3",
					"name" => "Chinese Noodles",
					"weight" => 68,
					"originalPrice" => 15.00,
					"reducePrice" => 11.99,
					"image" => "images/mk9.jpg",
				],
	];

	return $data = [
		"data_nuts" => $data_nuts,
		"data_oils" => $data_oils,
		"data_noodles" => $data_noodles,
	];
?>