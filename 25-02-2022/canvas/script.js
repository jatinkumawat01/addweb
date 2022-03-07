function myFace() {    
   var c = document.getElementById("mycanvas");    
    var draw = c.getContext("2d");    
    draw.beginPath();    
    draw.fillStyle = "yellow";    
    
    draw.arc(500, 500, 300, 0, Math.PI * 2, true);     
    draw.closePath();    
    draw.fill();    
}   

function myEye() {    
    var c = document.getElementById("mycanvas");    
    var eye = c.getContext("2d");      
    eye.moveTo(55, 50);       
    eye.beginPath();      
    eye.fillStyle = "black";    
     
    //left round eye   

    eye.arc(350, 350, 60, 0, Math.PI * 2, true);    
    eye.closePath();    
    eye.fill();    
    eye.moveTo(103, 49);    
     
    eye.beginPath();    
    eye.fillStyle = "black";    
    //right round eye    
    eye.arc(650, 350, 60, 0, Math.PI * 2, true);   
    eye.lineWidth = 30;   
    eye.closePath();    
    eye.fill();    
 }  
 function Eye_ball()
 {
   var c = document.getElementById("mycanvas");    
   var eye_ball = c.getContext("2d");      
   eye_ball.moveTo(55, 50);       
   eye_ball.beginPath();      
   eye_ball.fillStyle = "white";  

   eye_ball.arc(350, 350, 20, 0, Math.PI * 2, true);    
    eye_ball.closePath();    
    eye_ball.fill();    
    eye_ball.moveTo(103, 49);

    eye_ball.beginPath(); 

    eye_ball.fillStyle = "white";    
    //right round eye    
    
    eye_ball.arc(650, 350, 20, 0, Math.PI * 2, true); 
    
    eye_ball.closePath();    
    eye_ball.fill();   

 } 
 function mySmile() {    
    var c = document.getElementById("mycanvas");    
    var smile = c.getContext("2d");    
    
    smile.moveTo(105, 75);    
    smile.beginPath();    
    smile.strokeStyle = "red";    
    smile.arc(500, 550, 200, 0, Math.PI, false);    
    
    smile.stroke();    
 }    
  
  
function bodyLoad() {    
    myFace();    
    myEye();    
    mySmile();
    Eye_ball();
 } 