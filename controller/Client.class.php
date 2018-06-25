<?php
class Client extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/ClientDB.php';
	}
	public function index()
	{
		return $this->view->load('client/index');
	}
	public function add()
	{
		$clientdb = new ClientDB();
		$clientdb->add("Faye", "Jean", "Thies");
		return $this->view->load('client/add');
	}
	public function liste()
	{
       return $this->view->load('client/liste');
	}
}
?>