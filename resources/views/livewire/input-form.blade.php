<div>
    <form wire:submit='add_obat'>
        <input type="text" wire:model='kode_bpom' placeholder="Kode BPOM" required />
        <br>
        <input type="text" wire:model='kode_obat' placeholder="Kode Obat" required />
        <br>
        <input type="text" wire:model='nama_obat' placeholder="Nama Obat" required />
        <br>
        <input type="text" wire:model='tanggal_terbit' placeholder="Tanggal Terbit" required />
        <br>
        <input type="text" wire:model='jenis_kemasan' placeholder="Jenis Kemasan" required />
        <br>
        <input type="text" wire:model='golongan_obat' placeholder="Golongan Obat" required />
        <br>
        <input type="text" wire:model='kategori_obat' placeholder="Kategori Obat" required />
        <br>
        <input type="text" wire:model='pabrik' placeholder="Pabrik" required />
        <br>
        <input type="text" wire:model='alamat' placeholder="Alamat" required />
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
