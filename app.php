<?php
include "navbar.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dice_count = $_POST['dice_count'];
    $sides = $_POST['sides'];

    $randomArray = calculateRandom($dice_count, $sides);
}

function calculateRandom(int $count, int $sides)
{
    $randArray = [];
    $total = 0;
    for ($i = 1; $i <= $count; $i++) {
        // $randArray.array_push(rand());
        $currentRandom = rand(1, $sides);
        array_push($randArray, $currentRandom);
        $total += $currentRandom;
    }

    array_unshift($randArray, $total);

    return $randArray;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Number Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>

        <div class="container text-background  mt-5  mb-5">
            <div class="container text-center">
                <p class="number">Number of dice rolled:
                    <?php echo $dice_count ?>
                </p>
            </div>
            <div class="container text-center">
                <p class="sides">Number of sides on the dice:
                    <?php echo $sides ?>
                </p>
            </div>
            <div class="container text-center">
                <div class="total">
                    <p class="total">
                        Total sum of dice: <span class="underline"><?=$randomArray[0]?></span>
                        
                    </p>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row pt-5">
                <?php
                for ($i = 1; $i < sizeof($randomArray); $i++) {
                    echo "<div class='col' >
                    <div class='dice'>$randomArray[$i]</div>
                    </div>";
                }
                ?>
            </div>
        </div>

            <form action="index.php">

                <div class="text-center">
                    <input type="submit" value="Generate again" class="btn btn-primary again">
                </div>
            </form>
    </body>

</html>