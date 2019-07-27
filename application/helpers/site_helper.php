<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('add_dot')) {

	function add_dot($data) {
		if(strlen($data) > 6) {
			$data = substr_replace($data, '.', -3, 0);
			$data = substr_replace($data, '.', -7, 0);
		} elseif(strlen($data) > 3) {
			$data = substr_replace($data, '.', -3, 0);
		}
		return($data);
	}
	
	function remove_sign($data) {
		$data = str_replace('&', '', $data);
		return($data);
	}
	
	function space_to_underscore($data) {
		$data = str_replace(' ', '_', $data);
		return($data);
	}

	function space_to_dash($data) {
		$data = str_replace(' ', '-', $data);
		return($data);
	}

	function createUrl($data) {
		$data = str_replace('.', ' ', $data);
		$data = str_replace(',', ' ', $data);
		$data = str_replace('<', ' ', $data);
		$data = str_replace('>', ' ', $data);
		$data = str_replace('/', ' ', $data);
		$data = str_replace('?', ' ', $data);
		$data = str_replace('\\', ' ', $data);
		$data = str_replace('|', ' ', $data);
		$data = str_replace('[', ' ', $data);
		$data = str_replace(']', ' ', $data);
		$data = str_replace('/', ' ', $data);
		$data = str_replace(':', ' ', $data);
		$data = str_replace(';', ' ', $data);
		$data = str_replace('"', ' ', $data);
		$data = str_replace("'", ' ', $data);
		$data = str_replace('{', ' ', $data);
		$data = str_replace('}', ' ', $data);
		$data = str_replace('!', ' ', $data);
		$data = str_replace('@', ' ', $data);
		$data = str_replace('#', ' ', $data);
		$data = str_replace('$', ' ', $data);
		$data = str_replace('%', ' ', $data);
		$data = str_replace('^', ' ', $data);
		$data = str_replace('&', ' ', $data);
		$data = str_replace('*', ' ', $data);
		$data = str_replace('(', ' ', $data);
		$data = str_replace(')', ' ', $data);
		$data = str_replace('_', ' ', $data);
		$data = str_replace('+', ' ', $data);
		$data = str_replace('=', ' ', $data);
		$data = str_replace('`', ' ', $data);
		$data = str_replace('~', ' ', $data);
		$data = str_replace('   ', ' ', $data);
		$data = str_replace('  ', ' ', $data);
		$data = str_replace(' ', '-', $data);
		$data = str_replace('-----', '-', $data);
		$data = str_replace('----', '-', $data);
		$data = str_replace('---', '-', $data);
		$data = str_replace('--', '-', $data);
		$data = strtolower($data);
		return($data);
	}
	
	function convert_br($data) {
		$data = trim(preg_replace('/\s\s+/', "\n----------------------------\n", $data));
		return($data);
	}

	function checkmydate($m, $d, $y) {
		return checkdate($m, $d, $y);
	}
	
	function add_new_line($data) {
		$data = str_replace("\n", "\n\n", $data);
		return($data);
	}

	function remove_nl($data) {
		$data = str_replace("\r", "|", $data);
		$data = str_replace("\n", "", $data);
		return($data);
	}

	function remove_break($data) {
		$data = str_replace("\r", " ", $data);
		$data = str_replace("\n", " ", $data);
		$data = str_replace("  ", " ", $data);
		return($data);
	}

	function encrypt1($data) {
		$data = $data * 92771499 + 5;
		return($data);
	}

	function decrypt1($data) {
		$data = ($data - 5) / 92771499;
		return($data);
	}

	function encrypt2($data) {
		if($data != '') {
			$data = 92771499 + ($data * 5);
		}
		return($data);
	}

	function decrypt2($data) {
		$data = ($data - 92771499)/5;
		return($data);
	}

	function convert_campaign_tags($data) {
		$data = str_replace(', ', ',', $data);
		$data = str_replace(' ', ',', $data);
		return($data);
	}

	function create_json($body, $table) {
		$data_arr = array(
			'appToken' => APPTOKEN,
			'body' => $body,
			'table' => $table
		);

		$data_json = json_encode($data_arr);
		return $data_json;
	}
	
}
?>