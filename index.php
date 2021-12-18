<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>
<body>
    <?php $piece = $_GET["piece"]; ?>
    <div class="container">
        <div class="inner">
          <form action="" method="get">
            <label for="piece">How much input You want?</label>
            <input type="number" name="piece" id="piece" value="<?php echo $piece; ?>">
            <button type="submit">Create</button>
          </form>
        </div>
        <div class="result">
            <?php
              for ($i=1; $i <= $piece; $i++) {
                echo "<div class='pieceitem'>";
                echo "<label for='created{$i}'>Textbox of {$i}</label>";
                echo "<input type='text' id='created{$i}' name='created{$i}'>";
                echo '</div>';
              }
            ?>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>