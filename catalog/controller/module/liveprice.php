<?php

class ControllerModuleLivePrice extends Controller {
	
	public function get_price() {
		
		if ( $this->config->get('config_customer_price') && !$this->customer->isLogged() ) {
			$this->response->setOutput(json_encode(array()));
			return;
		}
		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			exit;
		}
		
		if (isset($this->request->get['quantity'])) {
			$quantity = (int)$this->request->get['quantity'];
		} else {
			$quantity = 1;
		}
		
		if (isset($this->request->post['option_oc'])) {
			$options = $this->request->post['option_oc'];
		} elseif (isset($this->request->post['option'])) {
			$options = $this->request->post['option'];
		} else {
			$options = array();
		}
		
		$non_standard_theme = '';
		if ( isset($this->request->get['non_standard_theme']) ) {
			$non_standard_theme = $this->request->get['non_standard_theme'];
		}
		
		if ( !$this->model_module_liveprice ) {
			$this->load->model('module/liveprice');
		}
		if ( !empty($this->request->post['quantity_per_option']) && is_array($this->request->post['quantity_per_option']) ) {
			$quantity_per_options = $this->request->post['quantity_per_option'];
			$lp_data = $this->model_module_liveprice->getProductTotalPriceForQuantityPerOptionWithHtml( $product_id, $options, $quantity_per_options, $non_standard_theme );
		} else { 
			$lp_data = $this->model_module_liveprice->getProductPriceWithHtml( $product_id, max($quantity, 1), $options, array(), array(), array(), true, $non_standard_theme );
		}
		

		$prices = array('htmls'=>$lp_data['prices']['htmls'], 'ct'=>$lp_data['prices']['ct']);
		if (isset($this->request->get['rnd'])) {
			$prices['rnd'] = $this->request->get['rnd'];
		}
		
		$this->setAllowOriginHeader(); 
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($prices));
	}
	

	private function setAllowOriginHeader() { 
		
		if ( !empty($this->request->server['HTTP_ORIGIN']) ) {
		
			if ( $this->request->server['HTTPS'] ) { 
				$server = $this->config->get('config_ssl');
			} else {
				$server = $this->config->get('config_url');
			}
			$http_origin = trim($this->request->server['HTTP_ORIGIN'], '/');
			$server = trim($server, '/');
			
			if ( $server != $http_origin ) { 
				$url_beginnings = array('http://www.', 'https://www.', 'http://', 'https://');
				foreach ( $url_beginnings as $url_beginning ) {
					if ( substr($server, 0, strlen($url_beginning)) == $url_beginning ) {
						$server = substr($server, strlen($url_beginning));
					}
					if ( substr($http_origin, 0, strlen($url_beginning)) == $url_beginning ) {
						$http_origin = substr($http_origin, strlen($url_beginning));
					}
				}
				if ( $server == $http_origin ) {
					$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
					$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
				}
			}
		}
	}	
	
}
