<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Micro;

error_reporting(E_ALL);
ini_set('display_errors',true);


define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    include APP_PATH . "/config/services.php";

    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    $application = new Micro($di);

    $application->get(
    	"/api/results.cover",
    	function () use ($application){
    		$data = ['header'=>'19 - 20 Nov', 'results'=>array()];
	    	$conditions = [ "cover = 1 and finished = 1" ];//,"order"=>"parent_category,order"];
	    	$lastCategory = null;
	    	$currentCategory = null;
	    	foreach (Matches::find($conditions) as $row){
	    		if ($row->getParentCategory() !== $lastCategory){
	    			if ($lastCategory !== null && is_array($currentCategory) && count($currentCategory)){
	    				$data['results'][] = $currentCategory;
	    			}
	    			$currentCategory = array('category_name' => $row->getParentCategory(),'matches'=>[]);
	    			$lastCategory = $row->getParentCategory();
	    		}
	    		$currentCategory['matches'][] = array_merge(
		    										array('has_chronicle'=> filter_var($row->getChronicleLink(), FILTER_VALIDATE_URL)),
		    										$row->toArray()
	    										);

	    	}
	    	$data['results'][] = $currentCategory;
	        echo json_encode($data);
    	}
    );

    $application->get(
    	"/api/matches.cover",
    	function () use ($application){
    		$data = ['header'=>'26 - 27 Nov', 'matches'=>array()];
	    	$conditions = [ "cover = 1 and finished = 0", "order"=>array("parent_category","order")];
	    	$lastCategory = null;
	    	$currentCategory = null;
	    	foreach (Matches::find($conditions) as $row){
	    		if ($row->getParentCategory() !== $lastCategory){
	    			if ($lastCategory !== null && is_array($currentCategory) && count($currentCategory)){
	    				$data['matches'][] = $currentCategory;
	    			}
	    			$currentCategory = array('category_name' => $row->getParentCategory(),'match'=>[]);
	    			$lastCategory = $row->getParentCategory();
	    		}


	    		$currentCategory['match'][] = array_merge(
		    										array(
                                                        'has_chronicle'=> filter_var($row->getChronicleLink(), FILTER_VALIDATE_URL),
                                                        '_date' =>  (new DateTime($row->getScheduled()))->format('d-m H:i')
                                                    ),
		    										$row->toArray()
	    										);

	    	}
	    	$data['matches'][] = $currentCategory;
	        echo json_encode($data);
    	}
    );

    $application->get(
        '/api/carousel.active',
        function () use ($application){
            echo json_encode(array());
        }
    );



    $application->get(
    	"/api/menus",
    	function () use ($application){
    		$data = ['menus'=>array()];
	    	$conditions = [ "visible =1" ];
	    	foreach (Menus::find($conditions) as $row){
	    		$data['menus'][] = $row->toArray();
	    	}
	        echo json_encode($data);
    	}
    );

    $application->get(
    	"/api/news.cover",
	    function () use ($application) {
	    	$data = ['news'=>array()];
	    	$conditions = [ "cover = 1 and visible =1" ];
	    	foreach (News::find($conditions) as $row){
	    		$data['news'][] = $row->toArray();
	    	}
	        echo json_encode($data);
	    }
	);

	$application->get(
		"/api/news.active",
		function() use ($application) {
			$data = ['news'=>array()];
			$conditions = [ "visible =1" ];
			foreach (News::find() as $row){
				$data['news'][] = $row->toArray();
			}
	        echo json_encode($data);
		}
	);

    echo $application->handle();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
