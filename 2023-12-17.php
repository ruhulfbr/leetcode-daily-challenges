<?php

class FoodRatings {
    /**
     * @param String[] $foods
     * @param String[] $cuisines
     * @param Integer[] $ratings
     */

    private $_foods;
    private $_cuisines;
    private $_ratings;

    function __construct($foods, $cuisines, $ratings) {
        $this->_foods = $foods;
        $this->_cuisines = $cuisines;
        $this->_ratings = $ratings;
    }
  
    /**
     * @param String $food
     * @param Integer $newRating
     * @return NULL
     */
    function changeRating($food, $newRating) {
        $key = array_search($food, $this->_foods);

        if( $key !== false ){
            $this->_ratings[$key] = $newRating;
        }

        return NULL;
    }
  
    /**
     * @param String $cuisine
     * @return String
     */
    function highestRated($cuisine) {

        $ratings = [];
        $food_names = [];
        
        $indexes = array_keys($this->_cuisines, $cuisine);
        foreach ($indexes as $key) {
            $rate = $this->_ratings[$key];
            $food_name = $this->_foods[$key];

            if( empty($ratings) ){
                $ratings[] = $rate;
                $food_names[] = $food_name;
            }
            else if( $rate > max($ratings) ){
                $ratings = [$rate];
                $food_names = [$food_name];
            }
            else if( $rate == max($ratings) ){
                $ratings[] = $rate;
                $food_names[] = $food_name;
            }

        }

        sort($food_names);

        return $food_names[0];

    }
}

// Solved


/**
 * Your FoodRatings object will be instantiated and called as such:
 * $obj = FoodRatings($foods, $cuisines, $ratings);
 * $obj->changeRating($food, $newRating);
 * $ret_2 = $obj->highestRated($cuisine);
 */
