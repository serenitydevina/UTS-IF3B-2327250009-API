<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_penjualan extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = ['tanggal_transaksi', 'nama_transaksi', 'total_transaksi'];
}
