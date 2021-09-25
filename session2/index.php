<?php

if(isset($_POST['names'])){
    $course = $_POST['course'];
    $names =  explode(",",$_POST['names']);
  
    for($i=0 ; $i < count($names) ; $i++){
        $file_name = $names[$i].".html";

        
        $file =  fopen("certificate/".$file_name,"w");

        $content = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
                <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                    <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
                    <br><br>
                    <span style="font-size:25px"><i>This is to certify that</i></span>
                    <br><br>
                    <span style="font-size:30px"><b>'.$names[$i].'</b></span><br/><br/>
                    <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                    <span style="font-size:30px">'.$course.'</span> <br/><br/>
                    <span style="font-size:20px">with score of <b>10%</b></span> <br/><br/><br/><br/>
                    <span style="font-size:25px"><i>dated</i></span><br>
                    <span style="font-size:30px">16-9</span>
                </div>
                </div>
            
            
                <button id="donw">DONLOWD</button>
            
                <script>
                    document.getElementById("donw").onclick = function(){
                        window.print();
                    }
                </script>
        </body>
        </html>
        ';

        fwrite($file,$content);
   }

}