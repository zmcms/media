<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ZmcmsMedia extends Migration{
	public function up(){
		$tblNamePrefix=(Config('database.prefix')??'');
	}
	public function down(){
	}
}
