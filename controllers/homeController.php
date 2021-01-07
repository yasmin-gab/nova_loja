<?php
class homeController extends Controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $dados['frase'] = $this->lang->get('SUBSCRIBETEXT', true);

        $this->loadTemplate('home', $dados);
    }

}

