<?php
    class CategoryModel extends DB{
        public function Action(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Action'  ";
            return mysqli_query($this->con, $query);
        }

        public function Adventure(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Adventure  ' ";
            return mysqli_query($this->con, $query);
        }
    }
?>