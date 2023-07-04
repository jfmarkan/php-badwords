<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];
    $modifiedParagraph = str_replace($badword, "###", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="alert alert-success mt-4">
                <h4>
                    Original text
                </h4>
                <p>
                    <?php echo $paragraph; ?>
                </p>
                <h5>
                    The paragraph is <?php echo strlen($paragraph); ?></span> characters long
                </h5>
            </div>
            <div class="alert alert-danger mt-4">
                <h4>
                    Modified text
                </h4>
                <p>
                    <?php echo $modifiedParagraph; ?>
                </p>
                <h5>
                    The new paragraph is <?php echo strlen($modifiedParagraph); ?></span> characters long
                </h5>
            </div>
        </div>
        
    </body>
</html>