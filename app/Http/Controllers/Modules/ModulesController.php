<?php

namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * This class contains code for Module Management
 */
class ModulesController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Check if the module exists
     * @param $id
     * @return boolean
     */
    public function moduleExists(int $id) : array {

    }

    /**
     * Get Module Information
     */
    public function getModules(int $id = NULL) : array {
        if(!empty($id)){
            $modules = this::listAllModules();
        } else {
            $modules = this::listModule($id);
        }
        return $modules;
    }

    /**
     * List Individual Module Info
     * @param int $id
     * @return Array
     */
    private function listModule(int $id) : array {

    }

    /**
     * List all modules
     * @return Array
     */
    private function listAllModules() : array {

    }


    /**
     * Create New Module
     * @param Array $data
     * @return Array
     */
    public function createModule(array $data) : array {

    }

    
    public function updateModule(array $data) : array {

    }
}
