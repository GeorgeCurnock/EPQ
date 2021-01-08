<html>
    <head>
        <style>
            .container{
                padding: 16px;
            }
            .modal{
                display: none;
                position: fixed;
                width: 100%;
                height: 100%;
                overflow: auto;
                left:0;
                right:0;
                background-color: rgba(0,0,0,0.4);
            }  
            .modal-content{
                margin: 5px auto;
                width: 80%;
            }
            .close{
                position: absolute;
                font-size: 25px;
                right: 25px;
            }
            .close:hover,
            .close:focus{
                color: red;
                cursor: pointer;
            }
            .animate{
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s;
            }
            @-webkit-keyframes animatezoom{
                from {-webkit-transform:scale(0)}
                to {-webkit-transform: scale(1)}
            }
            @keyframes animatezoom{
                from {transform: scale(0)}
                to {transform: scale(1)}
            }
        </style>
    </head>
    <body>
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>
        <div id="id01" class="Modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                  title="Close Modal">&times;</span>
            <form class="modal-content animate" action="CheckLogin.php">
                <div class="container">
                    <lable><b>Username</b></lable>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    
                    <lable><b>Password</b></lable>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <script>
            var modal = document.getElementById('id01');
            
            window.onclick = functin(event){
                if(event.target == modal) {
                    modal.style.display = "none";
            }
            
        </script>
    </body>
</html>
        