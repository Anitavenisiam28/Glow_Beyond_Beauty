
<?php
class DetailLayanan extends Model
{
    protected $fillable = [
        'layanan_id',
        'deskripsi_lengkap',
        'manfaat',
        'prosedur'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}