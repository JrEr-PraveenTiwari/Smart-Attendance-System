<?php

include('navigation.php');

?>

<script src="ht.js"></script>
<style>
  body {
    background: url('images1/img6.png');
    background-repeat: no-repeat;
  }

  .rollno {
    background-color: green;
    color: #fff;
    padding: 20px;
  }

  img {
    border-radius: 20px;
  }

  .row {
    display: flex;
    margin-left: 150px;
    margin-top: 50px;
  }

  input {
    width: 200px;
    height: 30px;
    padding: 5px 5px;
    border-radius: 10px;
    font-size: 20px;
  }

  a {
    color: white;
  }
</style>
<center>
  <div class="row">
    <div class="col">
      <div style="width:500px;" id="reader"></div>
    </div><audio id="myAudio1">
      <source src="success.mp3" type="audio/ogg">
    </audio>
    <audio id="myAudio2">
      <source src="failes.mp3" type="audio/ogg">
    </audio>
    <script>
      var x = document.getElementById("myAudio1");
      var x2 = document.getElementById("myAudio2");
      function showHint(str) {
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
        }
      }

      function playAudio() {
        x.play();
      }


    </script>

    <div class="col" style="padding:30px;">
      <h4 style="color:white;">SCAN RESULT</h4>
      <div style="color:white;">Student Enrollment</div>
      <form id="myform" action="insert.php" method="POST">
        <input type="text" name="rollno" class="input" id="rollno" onkeyup="showHint(this.value)"
          placeholder="    Rollno Here" readonly="" />
        <p>Status: <span id="txtHint"></span></p>
        <input type="submit"></input>
      </form>
    </div>
    <p><video id="video" autoplay width=320 />

    <p><button onclick="startFunction()"> video & start recording</button></p><br>
    <p><button onclick="download()">Download! (and stop video)</button></p>

  </div>



  <script type="text/javascript">
    function onScanSuccess(qrCodeMessage) {
      document.getElementById("rollno").value = qrCodeMessage;
      showHint(qrCodeMessage);
      playAudio();

    }
    function onScanError(errorMessage) {
      //handle scan error
    }
    var html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess, onScanError);

  </script>


  <script type="text/javascript">

    window.onload = function () {
      document.myform.Submit1.click();
    }
  </script>
</center>
<br><br><bR>
<div style="font-family: cursive;font-family: times;text-align:center;">
</div>


<script>
  const constraints = { "video": { width: { max: 320 } }, "audio": true };

  var theStream;
  var theRecorder;
  var recordedChunks = [];

  function startFunction() {
    navigator.mediaDevices.getUserMedia(constraints)
      .then(gotMedia)
      .catch(e => { console.error('getUserMedia() failed: ' + e); });
  }

  function gotMedia(stream) {
    theStream = stream;
    var video = document.querySelector('video');
    video.srcObject = stream;
    try {
      recorder = new MediaRecorder(stream, { mimeType: "video/webm" });
    } catch (e) {
      console.error('Exception while creating MediaRecorder: ' + e);
      return;
    }

    theRecorder = recorder;
    recorder.ondataavailable =
      (event) => { recordedChunks.push(event.data); };
    recorder.start(100);
  }

  // From @samdutton's "Record Audio and Video with MediaRecorder"
  // https://developers.google.com/web/updates/2016/01/mediarecorder
  function download() {
    theRecorder.stop();
    theStream.getTracks().forEach(track => { track.stop(); });

    var blob = new Blob(recordedChunks, { type: "video/webm" });
    var url = URL.createObjectURL(blob);
    var a = document.createElement("a");
    document.body.appendChild(a);
    a.style = "display: none";
    a.href = url;
    a.download = 'test.webm';
    a.click();
    // setTimeout() here is needed for Firefox.
    setTimeout(function () { URL.revokeObjectURL(url); }, 100);
  }

</script>
<!--

<button id="start-camera">Start Camera</button>
<video id="video" width="320" height="240" autoplay></video>
<button id="click-photo">Click Photo</button>
<div id="dataurl-container">
    <canvas id="canvas" width="320" height="240"></canvas>
    <div id="dataurl-header">Image Data URL</div>
    <textarea id="dataurl" readonly></textarea>
</div>

<script>

let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let dataurl = document.querySelector("#dataurl");
let dataurl_container = document.querySelector("#dataurl-container");

camera_button.addEventListener('click', async function() {
     let stream = null;

    try {
      stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    }
    catch(error) {
      alert(error.message);
      return;
    }

    video.srcObject = stream;

    video.style.display = 'block';
    camera_button.style.display = 'none';
    click_button.style.display = 'block';
});

click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
     let image_data_url = canvas.toDataURL('image/jpeg');
    
    dataurl.value = image_data_url;
    dataurl_container.style.display = 'block';
});

</script>-->