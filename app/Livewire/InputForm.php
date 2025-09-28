<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\masterObat;

class InputForm extends Component
{
    public $nomor_registrasi;
    public $nama_produk;
    public $pendaftar;
    public $tanggal_terbit;
    public $kemasan;
    public $alamat;

    public function add_obat()
    {
        $this->validate([
            'nomor_registrasi' => 'required|unique:master_obat,nomor_registrasi',
            'nama_produk' => 'required',
            'pendaftar' => 'required',
            'tanggal_terbit' => 'required|date',
            'kemasan' => 'required',
            'alamat' => 'required',
        ]);

        try {
            masterObat::create([
                'nomor_registrasi' => $this->nomor_registrasi,
                'nama_produk' => $this->nama_produk,
                'pendaftar' => $this->pendaftar,
                'tanggal_terbit' => $this->tanggal_terbit,
                'kemasan' => $this->kemasan,
                'alamat' => $this->alamat,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            return;
        }

        session()->flash('message', 'Data obat berhasil disimpan.');

        // Reset form fields
        $this->reset(['nomor_registrasi', 'nama_produk', 'pendaftar', 'tanggal_terbit', 'kemasan', 'alamat']);
    }

    public function render()
    {
        return view('livewire.input-form');
    }
}
