<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="container text-danger mb-4">Word Filtering</h1>
        <form class="container" action="./server.php" method="GET">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Paragraph to contol</label>
                <textarea class="form-control" name="paragraph" id="paragraph" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Word to filter</label>
                <input type="text" class="form-control" name="badword" id="badword" placeholder="Write here the word you want to replace with ***">
            </div>
            <button type="submit" class="btn btn-danger btn-lg">SEND</button>
        </form>
    </body>
</html>