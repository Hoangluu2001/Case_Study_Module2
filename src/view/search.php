<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=show">Trang Chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=add">Thêm Mới</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Các Loại Ô To
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bugatti Centodieci</a>
                    <a class="dropdown-item" href="#">Rolls-Royce Sweptail</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mercedes-Maybach Exelero</a>
                    <a class="dropdown-item" href="#">Pagani Huayra Imola</a>
                    <a class="dropdown-item" href="#">Koenigsegg CCXR Trevita</a>
                    <a class="dropdown-item" href="#">Lamborghini Veneno</a>
                    <a class="dropdown-item" href="#">Lamborghini Sian</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->


    </div><form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<a href="index.php?page=add" class="btn btn-success" style="background-color: saddlebrown">Thêm Mới</a>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Automaker</th>
        <th scope="col">Color</th>
        <th scope="col">Amount</th>
        <th scope="col">Image</th>
        <!--        <th scope="col">Name Showroom</th>-->
        <!--        <th scope="col">Address Showroom</th>-->
        <th scope="col">Update</th>
        <th scope="col">Delete</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($Oto as $key=>$Oto1):?>
        <tr style="background-color: saddlebrown">
            <th scope="row"><?php echo $key+1?></th>
            <td><?php echo $Oto1['NameOto']?></td>
            <td><?php echo $Oto1['Type']?></td>
            <td><?php echo $Oto1['Automaker']?></td>
            <td><?php echo $Oto1['Color']?></td>
            <td><?php echo $Oto1['Amount']?></td>
            <td>
                <img style="width: 80px " src="image/<?php echo $Oto1['image']?>"></td>
            <!--            <td>--><?php //echo $Oto1['Name']?><!--</td>-->
            <!--            <td>--><?php //echo $Oto1['Address']?><!--</td>-->
            <td>
                <a href="index.php?page=edit&id=<?php echo $Oto1['IdOto'] ?>" class=" btn btn-primary" >Update</a>
            </td>
            <td><a href="index.php?page=delete&id=<?php echo $Oto1['IdOto'] ?>" >
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa ')"
                       class="btn btn-danger" >Delete</></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>

</body>
</html>
