<?php
    class Movies {
        public $title;
        public $year;
        public $genre;
        private $length;

        public function __construct($title, $year, $genre){
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
        }

        public function setLength($length){
            $this->length = $length;
        }
        public function getLength(){
            return $this->length;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <h1>
        Hello World
    </h1>
</body>
</html>