<?php

/* Предположим, что это страница может быть доступна по http://example.com/operator.php */

class Operator {

    /**
     * Складываем два операнда
     * @param interge 
     * @return interge
     */
    public function add($a, $b) {
        return $this->_add($a, $b);
    }

    /**
     * Вычитаем 
     */
    public function sub($a, $b) {
        return $a - $b;
    }

    /**
     * Умножаем
     */
    public function mul($a, $b) {
        return $a * $b;
    }

    /**
     * Защищенный метод
     * @param interge 
     * @return interge
     */
    protected function _add($a, $b) {
        return $a + $b;
    }
}

$server = new Yar_Server(new Operator());
$server->handle();
?>
