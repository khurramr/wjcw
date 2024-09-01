<!DOCTYPE html>
<html lang="en">
<head>

    <style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;  
}

.donut-chart {
  position: relative;
	width: 200px;
  height: 200px;
	margin: 0 auto 2rem;
	border-radius: 100%
 }
p.center {
  background: #394264;
  position: absolute;
  text-align: center;
font-size: 28px;
  top:0;left:0;bottom:0;right:0;
  width: 120px;
  height: 120px;
  margin: auto;
  border-radius: 50%;
  line-height: 35px;
  padding: 15% 0 0;
}
	
	
.portion-block {
    border-radius: 50%;
    clip: rect(0px, 200px, 200px, 100px);
    height: 100%;
    position: absolute;
    width: 100%;
  }
.circle {
    border-radius: 50%;
    clip: rect(0px, 100px, 200px, 0px);
    height: 100%;
    position: absolute;
    width: 100%;
    font-family: monospace;
    font-size: 1.5rem;
  }
	
	
#part1 {
    transform: rotate(0deg);
  }

	#part1 .circle {
		background-color: purple;
		/*transform: rotate(76deg);*/
		animation: first 1s 1 forwards;
	  }

#part2 {
    transform: rotate(100deg);
  }
#part2 .circle {
    background-color: red;
    animation: second 1s 1 forwards 1s;
  }
#part3 {
    transform: rotate(250deg);
}
	#part3 .circle {
		background-color: green;
		animation: third 0.5s 1 forwards 2s;
	}
	
	
/* Animation */
@keyframes first {
    from {transform: rotate(0deg);}
    to {transform: rotate(100deg);}
}
	
@keyframes second {
    from {transform: rotate(0deg);}
    to {transform: rotate(150deg);}
}
	
@keyframes third {
    from {transform: rotate(0deg);}
    to {transform: rotate(111deg);}
}    </style>
    
</head>
<body>

<div class="container">
  <div class="donut-chart-block block"> 
		<div class="donut-chart">
			<div id="part1" class="portion-block"><div class="circle"></div></div>
			<div id="part2" class="portion-block"><div class="circle"></div></div>
			<div id="part3" class="portion-block"><div class="circle"></div></div>
			<p class="center"></p>        
		</div>
   </div>
</div>    
<div class="container">
<!--<canvas id="canvas" width=325 height=325></canvas>-->
</div>
<script>
 var canvas=document.getElementById("canvas");
var ctx=canvas.getContext("2d");

var colors=['green','gray','orange'];
var values=["",6,47];
var labels=['','Robot','Mandatory'];

dmbChart(150,150,125,25,values,colors,labels,0);

function dmbChart(cx,cy,radius,arcwidth,values,colors,labels,selectedValue){
    var tot=0;
    var accum=0;
    var PI=Math.PI;
    var PI2=PI*2;
    var offset=-PI/2;
    ctx.lineWidth=arcwidth;
    for(var i=0;i<values.length;i++){tot+=values[i];}
    for(var i=0;i<values.length;i++){
        ctx.beginPath();
        ctx.arc(cx,cy,radius,
            offset+PI2*(accum/tot),
            offset+PI2*((accum+values[i])/tot)
        );
        ctx.strokeStyle=colors[i];
        ctx.stroke();
        accum+=values[i];
    }
    var innerRadius=radius-arcwidth-3;
    ctx.beginPath();
    ctx.arc(cx,cy,innerRadius,0,PI2);
    ctx.fillStyle=colors[selectedValue];
    ctx.fill();
    ctx.textAlign='center';
    ctx.textBaseline='bottom';
    ctx.fillStyle='white';
    ctx.font=(innerRadius)+'px verdana';
    ctx.fillText(values[selectedValue],cx,cy+innerRadius*.9);
    ctx.font=(innerRadius/4)+'px verdana';
    ctx.fillText(labels[selectedValue],cx,cy-innerRadius*.25);
}   
</script>
</body>

</html>