<?php

// $name = "Muhammad Syauqi Murtadlo | Full Stack Developer";
// file_put_contents("name.txt", $name);
// $file = file_get_contents("name.txt");
// echo $file;

$anggota = [
  [
    "nama" => "Muhammad Syauqi Murtadlo",
    "alamat" => "Jl. Imam Bonjol",
    "no_hp" => "081234567890"
  ],
  [
    "nama" => "Muhammad Syauqi Murtadlo",
    "alamat" => "Jl. Imam Bonjol",
    "no_hp" => "081234567890"
  ],
  [
    "nama" => "Muhammad Syauqi Murtadlo",
    "alamat" => "Jl. Imam Bonjol",
    "no_hp" => "081234567890"
  ]
];

$data = json_encode($anggota);
file_put_contents("anggota.json", $data);
$output = file_get_contents("anggota.json");
$result = json_decode($output);
print_r($result);

// $anggota = [
//   [
//     "nama" => "Muhammad Syauqi Murtadlo",
//     "alamat" => "Jl. Imam Bonjol",
//     "no_hp" => "081234567890"
//   ],
//   [
//     "nama" => "Muhammad Syauqi Murtadlo",
//     "alamat" => "Jl. Imam Bonjol",
//     "no_hp" => "081234567890"
//   ],
//   [
//     "nama" => "Muhammad Syauqi Murtadlo",
//     "alamat" => "Jl. Imam Bonjol",
//     "no_hp" => "081234567890"
//   ]
// ];

// $data = serialize($anggota);
// file_put_contents("anggota.txt", $data);
// $output = file_get_contents("anggota.txt");
// $result = unserialize($output);
// print_r($result);