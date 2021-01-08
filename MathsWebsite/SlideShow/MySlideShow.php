<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .container{
                width: 100%;
                margin: auto;
                background-color: #99D3DF; 
            }
            .prev, .next{
                padding: 12px;
                font-size: 18px;
                align-content: center;
                margin: auto;
                cursor: pointer;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                color: white;
            } 
            .dot{
                margin: 0 4px;
                cursor: pointer;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                display: inline-block;
                color: white;
            }
            .Slides{
                margin-left: auto;
                margin-right: auto;
                width: 600px;
            }
            .prev, .next, .dot{
                display:inline-block;
                background-color:#A3F5CD;
                color: darkslategrey;
            }
            .prev:hover, .next:hover{
                background-color: green;
                transition: 0.6s ease;
                color: lightgray;
            }
            .active, .dot:hover{
                background-color:green;
                transition: 0.4s ease;
            }
            .text{
                text-align: center;
                font-size: 28px;
                padding: 8px;
            }
            .fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
        </style>
    </head>
    <body>
        <div class="container">
        
            <div class="Slides fade">
                <img src="../Images/Maths.png" style="width: 600px; height: 250px;">
                 <div class="text">Welcome to The Maths Portal</div>
            </div>
            <div class="Slides fade">
                <a href="http://www.examsolutions.net/"><img src="../Images/logos/ExamSolutions.PNG" style="width: 600px; height: 250px;"></a>
                 <div class="text">Exam Solutions</div>
            </div>
            <div class="Slides fade">
                <a href="https://www.mrbartonmaths.com/"><img src="../Images/logos/MrBartonMathsLogo.PNG" style="width: 600px; height: 250px;"></a>
                 <div class="text">Mr Barton Maths</div>
            </div>
            <div class="Slides fade">
                <a href="http://www.bbc.co.uk/education"><img src="../Images/logos/BBCBitesize.PNG" style="width: 600px; height: 250px;"></a>
                 <div class="text">BBC Bitesize</div>
            </div>
            <div class="Slides fade">
                <a href="https://revisionmaths.com/"><img src="../Images/logos/RevisionMaths.PNG" style="width: 600px; height: 250px;"></a>
                 <div class="text">Revision Maths</div>
            </div>
             
             
        </div>
        <br>
        
        <div style="text-align: center">
             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <a class="next" onclick="plusSlides(+1)">&#10095;</a>
        </div>
             
        <script>
       var slideposition = 1;
       showSlides(slideposition);
       
       function plusSlides(n){
           showSlides(slideposition += n);
       }
       function currentSlide(n){
           showSlides(slideposition = n);
       }
       
       function showSlides(n){
           var i;
           var Slides = document.getElementsByClassName("Slides");
           var dots = document.getElementsByClassName("dot");
           if (n > Slides.length){slideposition = 1;}
           if (n < 1){slideposition = Slides.length;}
           for (i=0; i < Slides.length; i++){
               Slides[i].style.display = "none";
           }
           for (i=0; i < dots.length; i++){
               dots[i].className = dots[i].className.replace(" active", "");
           }
           
           Slides[slideposition-1].style.display = "block";
           dots[slideposition-1].className += " active";
       }
       
        </script>
    </body>
</html>
