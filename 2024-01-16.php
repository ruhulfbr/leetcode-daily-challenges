<?php

// 380. Insert Delete GetRandom O(1)

class RandomizedSet {
    private $nums;
    private $ind;

    public function __construct() {
        $this->nums = array();
        $this->ind = array();
    }

    public function insert($val) {
        if (!isset($this->ind[$val])) {
            $this->nums[] = $val;
            $this->ind[$val] = count($this->nums) - 1;
            return true;
        }
        return false;
    }

    public function remove($val) {
        if (isset($this->ind[$val])) {
            $ind = $this->ind[$val];
            $last = end($this->nums);
            $this->nums[$ind] = $last;
            $this->ind[$last] = $ind;
            array_pop($this->nums);
            unset($this->ind[$val]);
            return true;
        }
        return false;
    }

    public function getRandom() {
        $randomIndex = array_rand($this->nums);
        return $this->nums[$randomIndex];
    }
}

// Your RandomizedSet object will be instantiated and called as such:
// $obj = new RandomizedSet();
// $param_1 = $obj->insert($val);
// $param_2 = $obj->remove($val);
// $param_3 = $obj->getRandom();
