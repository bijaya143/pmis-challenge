<?php
namespace PMIS\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


abstract class Controller extends BaseController {

	use DispatchesJobs, ValidatesRequests;

    public function __construct(){
        ini_set('upload_max_filesize', '64M');
    }

}
