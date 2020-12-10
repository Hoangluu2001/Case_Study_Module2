<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: cornflowerblue">
            <h3>Thêm Thông Tin Ô Tô</h3>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" class="form-group">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="NameOto" required>
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="Type" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Automaker</label>
                    <input type="text" class="form-control" name="Automaker" required>
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" class="form-control" name="Color" required>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="Amount" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" id="fileToUpload">
                </div>
                <div>
                    <select name="idXuong" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
<!--                <div class="form-group">-->
<!--                    <label>idXuong</label>-->
<!--                    <select name="idXuong" class="form-control">-->
<!--                        --><?php //foreach ($cuahang as $oto): ?>
<!--                            <option value="--><?php //echo $oto['id'] ?><!--"> --><?php //echo $oto['Name']?><!--</option>-->
<!---->
<!--                        --><?php //endforeach;  ?>
<!--                    </select>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label>Address</label>-->
<!--                    <select name="address" class="form-control">-->
<!--                        --><?php //foreach ($cuahang as $oto): ?>
<!---->
<!--                            <option value="--><?php //echo $oto['id'] ?><!--"> --><?php //echo $oto['Address']?><!--</option>-->
<!--                        --><?php //endforeach;  ?>
<!--                    </select>-->
<!--                </div>-->

                <input type="submit" class="btn btn-primary" value="Thêm mới">
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
