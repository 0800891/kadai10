// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js";
import { getDatabase, ref, push, set,update,remove, onChildAdded,onChildChanged, onChildRemoved,get}
    from "https://www.gstatic.com/firebasejs/9.1.0/firebase-database.js";
// Your web app's Firebase configuration
// const firebaseConfig = {
//     apiKey: "AIzaSyCYkkUTkDT4FuU7JXQyO-PK4eJAIBEx2_w",
//     authDomain: "gsdev27r1.firebaseapp.com",
//     projectId: "gsdev27r1",
//     storageBucket: "gsdev27r1.appspot.com",
//     messagingSenderId: "1039064221758",
//     appId: "1:1039064221758:web:bf9805debf05c335ffe96f"
// };
// const app = initializeApp(firebaseConfig);
// const db = getDatabase(app); //RealtimeDBに接続
// const dbRef = ref(db, "chat"); //RealtimeDB内の"chat"を使う
let num = 0;

// Read the data and count the number of children
//  await get(dbRef).then((snapshot) => {
//     if (snapshot.exists()) {
//         const count = snapshot.size;  // For Firebase 9, use size instead of numChildren
//         num = count;
//         console.log('Number of children: ' + count);
//     } else {
//         console.log('No data available');
//     }
// }).catch((error) => {
//     console.error('Error reading data: ', error);
// });

import { normalize } from 'https://cdn.skypack.dev/@geolonia/normalize-japanese-addresses';

        // var phpArray = <?php echo $json_list; ?>;
        
        // Use the JavaScript array
        let uname = phpArray.map(subArray => subArray[2]); //username
        let logo_img_path = phpArray.map(subArray => subArray[3]); //user_logo_img_path
        let b_name = phpArray.map(subArray => subArray[8]); // buildingname
        let Address = phpArray.map(subArray => subArray[9]); // building address
        let design_code = phpArray.map(subArray => subArray[5]); //design_code
        let dc_img_path = phpArray.map(subArray => subArray[6]); //design_code_img_path
        let img = phpArray.map(subArray => subArray[10])

        console.log(uname[0], 'uname');
        console.log(b_name[0], 'building_name');
        console.log(Address[0], 'Address');
        console.log(design_code[0], 'Design_code');
        console.log(img[0], 'img');

//データ登録(Click)

// let infoWindow = [];
// let markerData = [];// マーカーを立てる場所名・緯度・経度
for(let i=0; i<uname.length;i++){

normalize(Address[i]).then(result=>{
    console.log(result, "result")
markerData.push({
       name: uname[i],
       Building_name: b_name[i],
       address: Address[i],
       design_code: design_code[i],
       dc_image: dc_img_path[i],
       lat: result.lat,
       lng: result.lng,
       icon: logo_img_path[i]
    //    icon: img[i]
 })
 console.log(dc_img_path,"dc_img_path")
//  console.log(markerData,"AFTER PUSH")
 img_src.push(img[i]);
//  img_src.push(logo_img_path[i]);
// console.log(result.lat,'result.lat')
// console.log(markerData.length, i ,"markerData and i")


if(i==uname.length-1){
    initMap();
    console.log(markerData.length,"OK")
    console.log(img_src.length,"img_src.length")
    }
})
}


//地図更新イベント
$("#refresh_map").on("click",function(){
    console.log(markerData.length);
    for(let i=1;i<markerData.length;i++){
        if($("#sort_by").val()=="Name"){

            img_src[i] = img[i-1];
            // console.log(markerData[i]['icon'],'markerData[icon]')
            
             }else if($("#sort_by").val()=="Design_Code"){
                
               img_src[i] = dc_img_path[i-1];
                console.log(markerData[i]['icon'],'markerData[icon]')
             }

    if(i==markerData.length-1){
    initMap();
    console.log(markerData.length,"OKOK")
    console.log(img_src,"img_src")
    console.log(dc_img_path,"img_src")
    }
    
}
})