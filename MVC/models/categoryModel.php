<?php
    class CategoryModel extends DB{
        public function Allcategory(){
            $query = "SELECT * FROM manga";
            return mysqli_query($this->con, $query);
        }

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
        public function getMangaToPageCategory($item_per_page,$offset){
            $qr = "SELECT * FROM `manga` ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            
            return mysqli_query($this->con, $qr);
            
        }
        public function ActionToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Action'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function AdventureToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Adventure  '
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function AdultToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Adult  '
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function ComedyToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Comedy'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function DramaToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Drama'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function EcchiToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Ecchi'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
           return mysqli_query($this->con, $query);
        }

        public function HorrowToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Horrow'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }

        public function Sci_fiToPageCategory($item_per_page,$offset){
            $query = "SELECT * FROM `manga` 
                        INNER JOIN category 
                        WHERE manga.categoryID = category.categoryID 
                        AND category.categoryName = 'Sci-fi'
                        ORDER BY `mangaID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset;
            return mysqli_query($this->con, $query);
        }
    }
?>