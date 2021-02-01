<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GitHub search</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>


</head>
<body>
<div class="container">
    <form id="searchForm" name="searchForm" method="post">
        <div class="form-group">
            <label for="repName">Git repositories name</label>
            <input type="text" class="form-control w-50" id="repName" name="repName"
                   placeholder="Enter part of name">
        </div>
        <button type="submit" id="btn" class="btn btn-primary">Search</button>
    </form>
    <div class="w-75 p-3 overflow-auto border mt-3" id="result_form"></div>
</div>
</body>
</html>

