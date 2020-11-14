<?php
    class Aluno {
        public $matricula;
        public $nome;
        private $n1;
        private $n2;
        private $t1;
        public $media;


        public function getN1() { return $this->n1; }
        public function getN2() { return $this->n2; }
        public function getT1() { return $this->t1; }

        public function setN1($n1) { $this->n1 = $n1; }
        public function setN2($n2) { $this->n2 = $n2; }
        public function setT1($t1) { $this->t1 = $t1; }


	public function Media() {
		$n1 = $this->n1; $n2 = $this->n2; $t1 = $this->t1;

		$ntfinal = (($n1 * 3.5) + ($n2 * 3.5) + ($t1 * 3));
	        $this->media = $ntfinal;

		if ($ntfinal >= 70) {
		    return "<b> Foi: </b> Aprovado";
		} if ($ntfinal >= 0 && $ntfinal < 70) {
		    return "<b> Foi: </b> Reprovado";
		}
        }

        public function imprime(){
	    echo "<br>";
            echo "<b> Matrícula: </b>" . $this->matricula . "<br>";
            echo "<b> Nome: </b>" . $this->nome . "<br>";
            echo "<b> 1 Prova : </b>" . $this->n1 . "<br>";
            echo "<b> 2 Prova : </b>" . $this->n2 . "<br>";
            echo "<b> Atividade 1: </b>" . $this->t1 . "<br>";
	    echo "<b> Nota Final: </b>" . $this->media . "<br>";
	    echo $this->Media() . "<br><br>";
        }
    }
?>