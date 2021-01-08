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
                width: 60%;
                align-content: center;
                margin: auto;
                background-color: lightgray;
            }
            
            .prev, .next{
                cursor: pointer;
                position: absolute;
                padding: 16px;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                background-color: blue;
            }
            .next{
                right:0;
                border-radius: 3px 0 0 3px;
            }
            .text{
                width: 100%;
                bottom: 6px;
                font-size:30px;
                padding: 8px 8px;
                position: absolute;
                text-align: center;
            }
            .prev:hover, .next:hover{
                background-color: rgba(0,0,0,0.6);
            }
            .dot{
                margin: 0 4px;
                cursor: pointer;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                display: inline-block;
                background-color: blue;
                transition: background-color 0.6s ease;
            }
            .active{
                background-color: #717171;
            }
            .dot:hover{
                background-color: rgba(0,0,0,0.6);
            }
            .Slides{
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
        
            <div class="Slides">
                 <img src="../Images/Maths.png" style="width: 600px; height: 250px;">
                 <div class="text">Caption One</div>
            </div>
            <div class="Slides">
                 <img src="../Images/ExamSolutions.PNG" style="width: 600px; height: 250px;">
                 <div class="text">Caption two</div>
            </div>
            <div class="Slides">
                 <img src="../Images/MrBartonMathsLogo.PNG" style="width: 600px; height: 250px;">
                 <div class="text">Caption three</div>
            </div>
             
             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(+1)">&#10095;</a>
        </div>
        <br>
        
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
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
