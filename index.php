<?php

abstract class BangunRuang
{
    abstract protected function hitungLuas();
    abstract protected function tampilLuas();
    private $luas;
}

class Persegi extends BangunRuang
{
	private $sisi;

    public function setSisi($sisi) {
        $this->sisi = $sisi;
    }

    public function getSisi() {
    	return $this->sisi;
    }

    public function hitungLuas() {
    	$this->luas = $this->sisi * $this->sisi;
    }

    public function tampilLuas() {
    	return $this->luas;
    }
}

class Lingkaran extends BangunRuang
{
	private $jarijari;

	public function setJariJari($jarijari) {
		$this->jarijari = $jarijari;
	}

	public function getJariJari() {
		return $this->jarijari;
	}
	public function hitungLuas() {
		$this->luas = pi() * $this->jarijari * $this->jarijari;
	}
	public function tampilLuas() {
		return $this->luas;
	}
}


$persegi = new Persegi;
$persegi->setSisi(5);
$sisi = $persegi->getSisi();
$persegi->hitungLuas();
$luasPersegi = $persegi->tampilLuas();

echo 'Sisi : ' . $sisi . 'Luas : ' . $luasPersegi

echo "<br>";

$lingkaran = new Lingkaran;
$lingkaran->setJariJari(10);
$lingkaran->hitungLuas();
echo $lingkaran->tampilLuas();


// // Bangun Ruang

// abstract class BangunRuang {
// 	abstract protected function hitungLuas();
// 	abstract protected function tampilLuas();
// }

// class Persegi extends BangunRuang {


// }

// class Lingkaran extends BangunRuang {

// }

// $obj = new Persegi;
// $obj->hitungLuas();