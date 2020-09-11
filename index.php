
<?php
class Import
{
	public $e;

	public function checkExt($ext) 
	{   
		echo $this->e;

		if( $ext <> 'csv' && $ext <> 'txt' && 
			$ext <> 'tsv' && $ext <> 'xml' && 
			$ext <> 'xls') 
		{
			throw new Exception("file type not supported");
		}
	}
			
  	public function csv_to_array($filename){/*..*/}
  	public function txt_to_array($filename){/*..*/}
  	public function tsv_to_array($filename){/*..*/}
  	public function xml_to_array($filename){/*..*/}
  	public function xls_to_array($filename){/*..*/}
	
}

$extension = 'xls';
$filename  = 'arquivo';

$file = new Import();
$file->e = "XTS";

$file->checkExt($extension);

$file->csv_to_array($filename);
$file->txt_to_array($filename);
$file->tsv_to_array($filename);
$file->xml_to_array($filename);
$file->xls_to_array($filename);

?>