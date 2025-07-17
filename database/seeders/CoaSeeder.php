<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coa;

class CoaSeeder extends Seeder
{
    public function run(): void
    {
        $defaultAccounts = [
            ['kode' => '111', 'nama' => 'Kas', 'tipe' => 'aset'],
            ['kode' => '112', 'nama' => 'Bank', 'tipe' => 'aset'],
            ['kode' => '411', 'nama' => 'Penjualan', 'tipe' => 'pendapatan'],
            ['kode' => '511', 'nama' => 'HPP', 'tipe' => 'beban'],
            ['kode' => '521', 'nama' => 'Gaji', 'tipe' => 'beban'],
            ['kode' => '311', 'nama' => 'Modal', 'tipe' => 'modal'],
            ['kode' => '211', 'nama' => 'Hutang Usaha', 'tipe' => 'kewajiban'],
        ];

        foreach ($defaultAccounts as $account) {
            Coa::create([
                'kode' => $account['kode'],
                'nama' => $account['nama'],
                'tipe' => $account['tipe'],
                'is_default' => true,
                'user_id' => null,
            ]);
        }
    }
}
