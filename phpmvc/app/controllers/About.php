<?php 

class About extends Controller {
	public function index
	($nama ='Sahrul', $jeniskelamin = 'lakilaki', $bukuyangdipinjam = 'Bhsindonesia ')
	{
		$this->view('about/index');
	}
	public function page ()	{
		echo "Ok";
	}
}