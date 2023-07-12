<?php
    class Movies {
        public $title;
        public $year;
        public $genre;
        private $length;

        public function __construct(string $title, float $year, array $genre){
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

    //Creazione istanze
    $movie1 = new Movies('Interstellar', 2014, ['Fantascienza', 'Avventura']);
    $movie1->setLength('2h 49m');

    $movie2 = new Movies('Il castello errante di Howl', 2004, ['Animazione', 'Avventura']);
    $movie2->setLength('1h 59m');

    $movie3 = new Movies('The Witch', 2015, ['Horror', 'Drammatico']);
    $movie3->setLength('1h 32m');

    $movies = [
        $movie1,
        $movie2,
        $movie3
    ]
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
    <div class="container">
        <div class="row my-5">
            <?php foreach($movies as $movie){ ?>
                <div class="col-4">
                    <div class="content text-center">
                        <h3>
                            <?php echo $movie->title ?>
                        </h3>
                        <table class='table text-start'>
                            <tr>
                                <th>
                                    Anno di uscita:
                                </th>
                                <td>
                                    <?php echo $movie->year ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Generi:
                                </th>
                                <td>
                                    <?php foreach($movie->genre as $genre){
                                        echo $genre.' ';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Durata:
                                </th>
                                <td>
                                    <?php echo $movie->getLength() ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>