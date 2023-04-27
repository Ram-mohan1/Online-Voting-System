<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
.btn-special-2 
{
    padding: 12px 24px;
    background-color: white;
    color: hsl(243, 80%, 62%);
    border-radius: 6px;
    border: 2px hsl(243, 80%, 62%) solid;
    transition: transform 250ms ease-in-out;
}
.btn-special-2:hover 
{
    transform: scale(1.10);
}

.btn-special-2:active 
{
    transform: scale(.9);
}
#footersection
{
    margin-top:70px;
}
.h2_1
{
    text-align:center;
    margin-top:30px;
}
/*.slideUpBtn 
      {
    padding: 12px 24px;
    background-color: transparent;
    border: 2px solid hsl(243, 80%, 62%);
    border-radius: 6px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn span 
{
    display: inline-block;
    transition: inherit;
    color: hsl(243, 80%, 62%);
}

.slideUpBtn:hover span {
    opacity: 0;
    transform: translateY(-100%)
}

.slideUpBtn::before {
    content: "";
    background-color: hsl(243, 85%, 29%);;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform: translateY(100%);
    transition: inherit;
    width: 100%;
    transition: transform 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn::after {
    content: 'Vote Now';
    align-items: center;
    display: flex;
    height: 100%;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    transition: inherit;
    transform: translateY(100%);
    width: 100%;

}

.slideUpBtn:hover::before 
{
    transform: translateY(0) scale(3);
    transition-delay: .025s;
}

.slideUpBtn:hover::after {
    opacity: 1;
    color: hsl(222, 100%, 95%);
    transform: translateY(0);
} */
    </style>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="h2_1">Select Voting Type</h2>
            <a href="candidate.php"><button style="margin-top:50px;" class="btn-special-2">Central Elections</button></a>
            </div>
            <div class="col-md-12">
            <a href="2nd_cand.php"><button style="margin-top:60px;" class="btn-special-2">State Elections</button></a>
            </div>
            <div class="col-md-12">
            <a href="3rd_cand.php"><button style="margin-top:60px; " class="btn-special-2">Local Ward Elections</button></a>
            </div>
        </div>
    </div>
        <!--<div class="col-md-3 " style=" margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/congress.png" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title" style="font-size: 50px;font-weight: 600;">Congress</h2>
                    <p class="card-text">Rahul Gandhi</p>
                    <a href="confirmation.php" class="btn btn-primary">Vote No</a>
                  </div>

            </div>
        </div>

        <div class="col-md-3 " style=" margin-left:250px; padding-right: 200px ; align: center">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/bjp.webp" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title"style="font-size: 50px;font-weight: 600;">BJP</h2>
                    <p class="card-text">Narendra Modi</p>
                    <a href="confirmation.php" class="btn btn-primary">Vote No</a>
                  </div>
                </div>
        </div>
        <div class="col-md-3 " style=" margin-left:250px; padding-right: 200px ;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/cpi.png" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title"style="font-size: 50px;font-weight: 600;">CPI</h2>
                    <p class="card-text">Veteran</p>
                    <a href="confirmation.php" class="btn btn-primary">Vote No</a>
                  </div>

            </div>
        </div>-->
        
</body>
</html>
<?php
include("footer.html");
?>