<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillofLading extends Model
{
    use HasFactory;

    protected $fillable = [
        'ShipperName',
        'BLnumber',
        'ETA',
        'OnBoardDate',
        'RegistryNumber',
        'PortofLoading',
        'ContainerSize',
        'ContainerNumber',
        'ProductName',
        'VesselName',
        'created_by',
        'updated_by',
    ];
}
