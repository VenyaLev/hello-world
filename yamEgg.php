<?php
/**
* User: Gramen
* Data: 06.10.2015
* Time: 16:12
* �� ���� ������������ ���� ������ ���� � �����
* ������� �� ����� ����� � �� ������� �����
* ������ ��� ��� ������ ���� � ���� �������
* "path" => "/bitrix/templates/red_horse/""
*/

if (!is_object($yamEgg)) {
	class yamEgg {

	protected $path;
	protected $img;

	function __construct($ar = array()) {
		if (is_array($ar) && !empty($ar)) {
			foreach ($ar as $key => $value) {
				$this->$key = $value;
			}
			$this->img = $this->path;
			$this->path = $_SERVER["DOCUMENT_ROOT"].$this->path;
		}
		else {
			$this->projectPath = "";
			$this->img = "";
		}
	}

	public function img() {
		return $this->img;
	}

	public function incl() {
		return $this->path;
	}

	public function test() {
		echo "<script>alert();</script>";
	}

	// ======================================================= //

	const pathCDN_development = '//host/yam-cdn/';
	const pathCDN_release = '//frontend.web1.com.ua/yam-cdn/';
	static $devFlag;
	// generate slider options attributes
	static public function createSlider($arr) {
		foreach ($arr as $key => $value) {
			echo "'".$key."':'".$value."', ";
		}
	}

	static public function setParams($arr) {
		foreach ($arr as $key => $value) {
			echo "'".$key."':'".$value."', ";
		}
	}

	// return CDN path
	static function getCDNPath() {
		if(self::$devFlag) {
			return self::pathCDN_development;
		}
		else {
			return self::pathCDN_release;
		}
	}

	// set flag for development or release paths
	static function setDevFlag($a) {
		self::$devFlag = $a;
	}
 }

 // ====== //
 // Gramen //
 // ====== //
	global $yamEgg;
	$arFields = array("path" => "/bitrix/templates/s1/");
	$yamEgg = new yamEgg();  // ���� ������ � ������ ������� $arrFields
	unset($arFields);

 // ======= //
 // Vitalij //
 // ======= //
	if($_POST["dev"] == "Y" || $_GET["dev"] == "Y") {
		yamEgg::setDevFlag(true);
	}
	else {
		yamEgg::setDevFlag(false);
	}
	// $projectPath = yamEgg::projectPath;
	$pathCDN	= yamEgg::getCDNPath();
}
