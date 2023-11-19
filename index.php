<?php include "navbar.php"; ?>
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
        <div class="container mt-5 form-wrapper">
            <form action="app.php" method="POST">
                <div class="mb-3">
                    <label for="dice_count" class="form-label">Number of dice to roll (1-10):</label>
                    <input type="number" class="form-control" id="dice_count" name="dice_count" min="1" max="10"
                        step="1" value="1">
                </div>
                <div class="mb-3">
                <label for="sides" class="form-label">Choose the number of sides on the dice</label>
                    <select id="sides" name="sides" class="form-select">
                        <!-- <option selected>Choose the number of sides on the dice</option> -->
                        <option value="4">d4</option>
                        <option value="6">d6</option>
                        <option value="8">d8</option>
                        <option value="10">d10</option>
                        <option value="12">d12</option>
                        <option value="20">d20</option>
                    </select>
                </div>
                <div class="text-center">
                    <input type="submit" value="Generate" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>


</html>