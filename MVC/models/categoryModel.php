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

        public function Adult(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Adult  ' ";
            return mysqli_query($this->con, $query);
        }

        public function Comedy(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Comedy' ";
            return mysqli_query($this->con, $query);
        }

        public function Drama(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Drama' ";
            return mysqli_query($this->con, $query);
        }

        public function Ecchi(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Ecchi' ";
           return mysqli_query($this->con, $query);
        }

        public function Horrow(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Horrow' ";
            return mysqli_query($this->con, $query);
        }

        public function Sci_fi(){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Sci-fi' ";
            return mysqli_query($this->con, $query);
        }
    }
?>