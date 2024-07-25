<?php
session_start();
require_once 'funcs.php';
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>SENS</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="test.css"> 
    <link rel="stylesheet" href="css/common.css">

    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <!-- <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="signup.php">サインアップ</a></div>
            </div>
        </nav>
    </header> -->
    <?php include('header.php');?>
    <!-- Head[End] -->

    <h1  class="text-6xl text-blue-600">STRUCTURAL ENGINEERS NETWORK SERVICE</h1>
    <!-- Main[Start] -->
    <form method="POSl" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>構造設計したプロジェクト情報を登録しよう</legend>
                <p><?p $_SESSION['user_name']?></p>
                <!-- <label>Building_Name　　：<input type="text" name="name" id="name"></label><br> -->
                <!-- <label>住所：<textArea name="comment" rows="4" cols="40" id="comment"></textArea></label><br> -->
                <!-- <label>Design_Code　　：<input type="text" name="DC" id="DC"></label><br> -->
                <label for="gs_building_table">Select Building:</label>
                <select id="gs_building_table" name="building_id">
                         <option value="">Select Building</option>
                     </select><br>
                <label for="gs_design_code_table">Select Design Code:</label>
                <select id="gs_design_code_table" name="design_code_id">
                <option value="">Select Design Code</option>
                 </select><br>

                <!-- <label id="img_text">登録したい画像のファイルを選択してください</label><br>
            <input type="file" id="imgUpload"><br> -->
                <!-- <input type="submit" value="送信"> -->
            </fieldset>
        </div>
        <button type="submit">Submit</button>
    </form>
    <p><button id="show" action="select.php">登録データ表示</button></p>

    <!-- <select id="gs_design_code_table">
        <option value="">Select Deign Code</option>
    </select><br>

    <select id="gs_building_table">
        <option value="">Select Building</option>
    </select> -->
    <!-- Main[End] -->


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    // "gs_design_code_table"から得られたjasonデータを、htmlに反映 するscript
        document.addEventListener('DOMContentLoaded', function dc_select() {
            fetch('fetch_data_design_code.php')
                .then(response => response.json())
                .then(dc_data => {
                    const gs_design_code_table = document.getElementById('gs_design_code_table');
                    dc_data.forEach(design_code => {
                        const option01 = document.createElement('option');
                        option01.value = design_code.dc_id;
                        option01.textContent = design_code.name;
                        gs_design_code_table.appendChild(option01);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>

<script>
    // "gs_building_table"から得られたjasonデータを、htmlに反映 するscript
        document.addEventListener('DOMContentLoaded', function building_select() {
            fetch('fetch_data_building.php')
                .then(response => response.json())
                .then(building_data => {
                    const gs_building_table = document.getElementById('gs_building_table');
                    building_data.forEach(building => {
                        const option = document.createElement('option');
                        option.value = building.id;
                        option.textContent = building.name;
                        gs_building_table.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>

<script>
$("#show").on("click", function(){

//     let name =  $("#name").val();
//     let URL = $("#URL").val();
//     let comment = $("#comment").val();

//     let xhr = new XMLHttpRequest();
//         xhr.open('POST','insert.php',true);
//         xhr.responseType = 'text';//'text','json','arraybuffer','document','blob'
//         let fd = new FormData();

//         fd.append("name",name);
//         // console.log(name,'name');
//         fd.append("URL",URL);

//         // console.log(text_building_name,'text_building_name');
//         fd.append("comment",comment);





//         const reader = new FileReader(); //ファイル読み込みのためのオブジェクトのインスタンス化
//         const uploadPhotoButton = document.querySelector('#imgUpload');
//         let file = uploadPhotoButton.files[0];
//         if(file==undefined){
//             window.location.href = 'select.php'; 
//         }else{
//         reader.readAsDataURL(file);
//           reader.onload = function(){ 
//            console.dir(file);        //onload 読み込みが終わったときに発火する
           
//            let photo = reader.result;  //読み込んだ画像ファイルを格納
//         //    let photo_01 = photo.replace("/","!");
//         //    let photo_02 = photo.replace("+","-");
//            let img_src = photo;
//            if(img_src==undefined){
//            }else{
//            fd.append("image",img_src);
//         }
//            console.log(img_src);

//         xhr.send(fd);}
//         xhr.abort(); 
//     window.location.href = 'select.php';  }
//     // console.log(file==undefined,"file");
    window.location.href = 'select.php'; 

})
</script>
</html>
