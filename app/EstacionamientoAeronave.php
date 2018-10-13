<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionamientoAeronave extends Model {

	//
	protected $guarded = [];

		public function conceptos()
    { 
        return $this->belongsTo('App\Concepto');
    }

    public function tipo_pago_gen_est_nac()
    {
        return $this->belongsTo('App\TipoPago','tipo_pago_gen_est_nac_id','id');
    }

    public function tipo_pago_gen_est_int()
    {
        return $this->belongsTo('App\TipoPago','tipo_pago_gen_est_int_id','id');
    }

    public function tipo_pago_gen_aterrizaje_nac()
    {
        return $this->belongsTo('App\TipoPago','tipo_pago_gen_aterrizaje_nac_id','id');
    }

    public function tipo_pago_gen_aterrizaje_int()
    {
        return $this->belongsTo('App\TipoPago','tipo_pago_gen_aterrizaje_int_id','id');
    }
}
