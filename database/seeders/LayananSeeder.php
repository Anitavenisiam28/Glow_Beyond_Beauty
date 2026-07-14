use App\Models\Layanan;

public function run()
{
    Layanan::create([
        'nama' => 'Facial Basic',
        'deskripsi' => 'Perawatan wajah dasar untuk membersihkan kulit',
        'harga' => 150000,
        'icon' => 'bi bi-droplet'
    ]);

    Layanan::create([
        'nama' => 'Facial Whitening',
        'deskripsi' => 'Mencerahkan kulit wajah',
        'harga' => 250000,
        'icon' => 'bi bi-stars'
    ]);
}