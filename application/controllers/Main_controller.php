<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('api_model'));
    }

	public function index() {
		$this->load->view('site/desktop/index');
	}

	public function load_brands() {
		$segment2 = $this->uri->segment(2);
		if($segment2 == 'm') {
			$segment3 = $this->uri->segment(3);
			$brand = $segment3;
		} else {
			$brand = $segment2;
			$view = 'desktop/brands';
		}

		$result['category'] = $brand;
		switch($brand) {
			case 'officeart':
				$body['segment'] = '1';

				//$result['btn'] = array('Avarte', 'Inno', 'Vondom', 'Flototto', 'Heischool', 'Sellex', 'Uchida', 'Figueras', 'Zoeftig', 'Asis', 'Atwork', 'Motostuhl', 'Maratti', 'Leadex', 'Girsberger');
				
                //$result['brand'] = array('avarte', 'inno', 'vondom', 'flototto', 'heischool', 'sellex', 'uchida', 'figueras', 'zoeftig', 'asis', 'atwork', 'motostuhl', 'maratti', 'leadex', 'girsberger');
				break;
			case 'atwork':
				$body['segment'] = '2';

				//$result['btn'] = array('Uchida', 'Maxhub', 'Ergotron', 'Spectrum', 'TopDisp', 'Murni Solusindo Nusantara');
				
                //$result['brand'] = array('uchida', 'maxhub', 'ergotron', 'spectrum', 'topdisp', 'murni');
				break;
			case 'life-and-work-improvement':
				$body['segment'] = '3';

				//$result['btn'] = array('Cogy', 'HUB', 'Ergotron');
				
                //$result['brand'] = array('cogy', 'hub', 'ergotron');
				break;
			default:
				redirect(base_url() . 'brands/officeart');
				$result['btn'] = array();
				break;
		}

		$data_json = create_json($body, 'product_segment');
		$return = $this->api_model->send_data($data_json, 'fetch');
		$return = json_decode($return, true);
		$result['data'] = $return['data'];

		$this->load->view('site/' . $view, $result);
	}

	public function load_brand_about() {
		$brand = $this->input->post('brand');
		$category = $this->input->post('category');

		$body['q'] = '';
		$body['pid'] = $this->input->post('pid');
		$body['segment'] = $category;

		$data_json = create_json($body, 'product_query');
		$return = $this->api_model->send_data($data_json, 'fetch');
		$return = json_decode($return, true);
		$result['data'] = $return['data'];

		$this->load->view('site/desktop/brands/' . $category . '/' . $brand, $result);
	}

	public function load_page() {
		$s1 = $this->uri->segment(1);
		
		$this->load->view('site/desktop/' . $s1);
	}

	public function load_product_detail() {
		$s1 = $this->uri->segment(1);

		if($s1 == 'm') {
			$ppid = $this->uri->segment(7);
			$view = 'mobile/m_product_detail';
		} else {
			$ppid = $this->uri->segment(6);
			$view = 'desktop/product_detail';
		}

		$body['pid'] = $ppid;
		$data_json = create_json($body, 'product_detail');
		$return = $this->api_model->send_data($data_json, 'fetch');
		$return = json_decode($return, true);
		$result['data'] = $return['data'];

		$this->load->view('site/' . $view, $result);
	}

	public function load_products() {
		$body['q'] = $this->input->post('q');
		$body['brand'] = $this->input->post('brand');
		$body['segment'] = $this->input->post('segment');

		$data_json = create_json($body, 'product_query');
		$return = $this->api_model->send_data($data_json, 'fetch');
		$return = json_decode($return, true);
		$result['data'] = $return['data'];
		
		$this->load->view('site/desktop/load_data_product', $result);
	}

}
?>