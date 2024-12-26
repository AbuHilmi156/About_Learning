<?php

return [
    // :attribute adalah kata ganti untuk nama fieldnya
    // :min dan :max adalah kata ganti untuk nilai min dan max
    'required' => 'Field :attribute wajib diisi.',
    'email' => 'Format email :attribute tidak valid.',
    'min' => [
        'string' => 'Field :attribute harus mengandung minimal :min karakter.',
    ],
    'max' => [
        'string' => 'Field :attribute tidak boleh lebih dari :max karakter.',
    ],
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',

    'unique' => ':attribute sudah terdaftar, silakan coba dengan yang lain.',
    'date' => ':attribute harus berupa tanggal yang valid.',

    // Mengubah penyebutan nama atribut
    // jika ada field dengan nama dibawah ini
    'attributes' => [
        'email' => 'Alamat email',
        'password' => 'Kata sandi',
        'name' => 'Nama lengkap',
    ],
];
