<div>
    <form wire:submit='add_obat'>
        <input type="text" wire:model='nomor_registrasi' placeholder="Nomor Registrasi">
        @error('nomor_registrasi')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="text" wire:model='nama_produk' placeholder="Nama Produk">
        @error('nama_produk')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="text" wire:model='pendaftar' placeholder="Pendaftar">
        @error('pendaftar')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="date" wire:model='tanggal_terbit' placeholder="Tanggal Terbit">
        @error('tanggal_terbit')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="text" wire:model='kemasan' placeholder="Kemasan">
        @error('kemasan')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="text" wire:model='alamat' placeholder="Alamat">
        @error('alamat')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
