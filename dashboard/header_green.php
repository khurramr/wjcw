
<style>
.animate{
color: green;
}
.animate{
animation:blinking 1s infinite;
}
@keyframes blinking {
0%{color: gold;       }
50%{    color: transparent;        }
100%{  color: black;     }
}
</style>
<div class="container-fluid btn-green">
    <div class="container div_fa_bars">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:white"><i class="fas fa-bars"></i></a>
    </div>
    <h2 class="">  WELCOME <?= $fullname ?> <a href="https://wjcwcf.com" style="color:white">WJCWCF.COM</a><span>&nbsp;&nbsp;ID: <?= $member_id ?> </span></h2>
<!--    <h2 class="animate"> You complete stage 1 now you can  activate stage 2</h2>-->
</div>