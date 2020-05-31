<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>泰山職訓場</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
</head>
<style>
body{
  font-family:sans-serif , Arial, Arial Black, "微軟正黑體";
} 
p {
  background-color: lightblue;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap');
</style>
<body>
<div class="container">
    <h1 class="text-center">登入頁面</h1>
    <form action="api/login.php" method="post">
    <ul class="list-group col-md-4 mx-auto mt-5">
        <li class="list-group-item">帳號:<input type="text" name="acc" id="acc"></li>
        <li class="list-group-item">密碼<input type="password" name="pw" id="pw"></li>
        <li class="list-group-item">
            <input type="submit" value="確認" class="btn btn-primary">
            <input type="button" value="註冊" class="btn btn-success" onclick="location.href='reg.php'">
        </li>
    </ul>
    
    </form>    
</div>
<hr>
<div class="container">
<p>More than 170 businesses in St. Paul, Minnesota, were damaged or looted during tonight's ongoing protests over the death of George Floyd, according to the city police department.

“As Thursday turns to Friday, our officers continue to work shoulder-to-shoulder with local, state, federal and fire partners to protect St. Paul. More than 170 businesses damaged or looted. Dozens of fires. Thankfully, no reports of serious injuries. Calm on the horizon,” the St. Paul Police Department tweeted. 
Crowds of protesters have faced off with riot police in St. Paul throughout the evening and overnight hours, with police throwing tear gas, and protesters throwing it right back.</p>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>