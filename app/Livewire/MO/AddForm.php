<?php

namespace App\Livewire\MO;

use App\Models\masterObat;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;


class AddForm extends Component
{
    #[Rule('required|unique:master_obat,kode_bpom')]
    public $kode_bpom;
    #[Rule('required|unique:master_obat,kode_obat')]
    public $kode_obat;
    #[Rule('required')] public $nama_obat;
    #[Rule('required')] public $tanggal_terbit;
    #[Rule('required')] public $jenis_kemasan;
    #[Rule('required')] public $golongan_obat;
    #[Rule('required')] public $kategori_obat;
    #[Rule('required')] public $pabrik;
    #[Rule('required')] public $alamat;

    public function addObat()
    {
        $this->validate();

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
        } catch (QueryException $e) {
            Log::error('DB Error: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            return;
        }

        session()->flash('message', 'Data obat berhasil disimpan.');

        // Reset form fields
        $this->resetExcept('message');

        // Use this if you want to reset specific fields only
        // $this->reset(['kode_bpom', 'kode_obat', 'nama_obat', 'tanggal_terbit', 'jenis_kemasan', 'golongan_obat', 'kategori_obat', 'pabrik', 'alamat']);
    }
    public function render()
    {
        return view('livewire.m-o.add-form');
    }
}
