<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\masterObat;

class InputForm extends Component
{
    public $kode_bpom;
    public $kode_obat;
    public $nama_obat;
    public $tanggal_terbit;
    public $jenis_kemasan;
    public $golongan_obat;
    public $kategori_obat;
    public $pabrik;
    public $alamat;

    public function add_obat()
    {
        $this->validate([
            'kode_bpom' => 'required|unique:master_obat,kode_bpom',
            'kode_obat' => 'required|unique:master_obat,kode_obat',
            'nama_obat' => 'required',
            'tanggal_terbit' => 'required',
            'jenis_kemasan' => 'required',
            'golongan_obat' => 'required',
            'kategori_obat' => 'required',
            'pabrik' => 'required',
            'alamat' => 'required',
        ]);

        try {
            masterObat::create([
                'kode_bpom' => $this->kode_bpom,
                'kode_obat' => $this->kode_obat,
                'nama_obat' => $this->nama_obat,
                'tanggal_terbit' => $this->tanggal_terbit,
                'jenis_kemasan' => $this->jenis_kemasan,
                'golongan_obat' => $this->golongan_obat,
                'kategori_obat' => $this->kategori_obat,
                'pabrik' => $this->pabrik,
                'alamat' => $this->alamat,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            return;
        }

        session()->flash('message', 'Data obat berhasil disimpan.');

        // Reset form fields
        $this->reset(['kode_bpom', 'kode_obat', 'nama_obat', 'tanggal_terbit', 'jenis_kemasan', 'golongan_obat', 'kategori_obat', 'pabrik', 'alamat']);
    }

    public function render()
    {
        return view('livewire.input-form');
    }
}
