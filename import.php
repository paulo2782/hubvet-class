<?php
class Import
{
	public $ext;

	function setExtension($ext){
			$this->ext = $ext;
	}
	function getExtension($i){
			return $this->ext[$i];
	}	
	function ckFileName($filename){
			$iFilename   = strlen($filename);
			$extFilename = substr($filename,-3);
			$array       = in_array($extFilename, $this->ext);
			
			if($array == null){
				throw new Exception("file type not supported");
			}
	}
	public function csv_to_array($filename){/*..*/}
  	public function txt_to_array($filename){/*..*/}
  	public function tsv_to_array($filename){/*..*/}
  	public function xml_to_array($filename){/*..*/}
  	public function xls_to_array($filename){/*..*/}
}

$file = new Import();
$file->setExtension(['csv','txt','tsv','xml','xls']);

$filename = 'arquivo.csv';
$file->ckFileName($filename);
?>