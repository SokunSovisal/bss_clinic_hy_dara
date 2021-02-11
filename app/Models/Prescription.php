<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrescriptionDetail;

class Prescription extends Model
{
	protected $fillable = [
		'date',
		'code',
		'pt_no',
		'pt_age',
		'pt_name',
		'pt_gender',
		'pt_phone',
		'remark',
		'patient_id',
		'created_by',
		'updated_by',
	];

	protected $table = 'prescriptions';
	
	public function prescription_details(){
		return $this->hasMany(PrescriptionDetail::class,'prescription_id')->orderBy('index',
		'asc');
	}

  public function patient()
  {
  	return $this->belongsTo(Patient::class, 'patient_id');
	}
	
}
