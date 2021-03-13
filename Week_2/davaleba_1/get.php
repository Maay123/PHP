<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .stil{
            width: 400px;
            min-height: 50px;
            padding: 25px;
            box-shadow: 2px 2px 10px black;
            margin: auto;
        }
        input{
            margin-bottom: 15px;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="stil">
        <form action="worker.php" method="get">
            <input type="text" name="fname" placeholder="FirstName">
            <input type="text" name="lname" placeholder="SecondName">
            <input type="text" name="position" placeholder="Occupied position">
            <input type="number" name="salary" placeholder="Number of salaries">
            <input type="number" name="tax" placeholder="Busy income">
            <button type="submit">Submit</button>
        </form>
    </div>   
</body>
</html>