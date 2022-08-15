<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            width: 90%;
            margin: 0 auto;
        }
        td{
            line-height:100px;
            width: max-content !important;
        }
        th,tr{
            width: max-content !important;
        }
        img {
            width: 100px;
            height: 100px;
        }
        .green {
            background-color: var(--green);
            border: none;
        }
        .red:hover{
            background-color: var(--danger);
            border: none;
        }

    </style>
</head>

<body>

    <table class="table" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $name = ['Sản phẩm 1', 'Sản phẩm 2', 'Sản phẩm 3'];
            $price = [120, 150, 200];
            for ($i = 0; $i <= 2; $i++) :
            ?>
                <tr>
                    <th scope="row"><?= $i + 1 ?></th>
                    <td><img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt=""></td>
                    <td><?= $name[$i] ?></td>
                    <td>$<?= $price[$i] ?></td>
                    <td><button type="button" class="btn btn-lg btn-primary green">Edit</button>
                        <button type="button" class="btn btn-secondary btn-lg red">Remove</button>
                    </td>
                </tr>
            <?php endfor;
            ?>
        </tbody>
    </table>
</body>

</html>