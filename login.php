<?php
require 'new.php';

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
        <title>Document</title>
        <style>
            body {
                width: 100%;
                height: 100vh;
                padding: 0;
                overflow: hidden;
                background: url("images/sss.jpg") no-repeat;
                background-size:cover;
            }
            
            center {
                position: absolute;
                transform: translate(30%, 20%);
                width: 70%;
                height: 70vh;
                box-shadow: 0 0 4px rgb(252, 252, 252), 0 0 12px rgb(253, 251, 251), 0 0 24px rgba(255, 255, 255, 0.918);
                border-radius: 10px;
            }
            
            center .login_container {
                position: absolute;
                width: 100%;
                height: 100%;
                background: #660088;
                background-color: #AB32C9;
                background-image: linear-gradient(326deg, #AB32C9 0%, #660088 74%);
                color: #fff;
                border-radius: 10px;
            }
            
            center .login_container ul {
                display: flex;
                margin: 0;
                padding: 0;
            }
            
            center .login_container ul img {
                position: absolute;
                width: 40%;
                height: 100%;
                padding: 0;
                border-radius: 10px 0 0 10px;
            }
            
            center .login_container ul .login_form {
                position: absolute;
                width: 60%;
                height: 100%;
                margin-left: 40%;
                border-radius: 10px;
                overflow-x: hidden;
                scrollbar-width: 10px;
                scrollbar-color: blue;
            }
            /* .option{
                position:absolute;
            } */
            center .login_container ul .login_form .option ul{
                display:flex;
                list-style:none;
                width:100%;
            }
            center .login_container ul .login_form .option ul li {
                width:50%;
                height:40px;
                background:blue;
                list-style:none;  
            }

            center .login_container ul .login_form .option ul li .input,
            center .login_container ul .login_form .option ul li .input{
                background-color:transparent;
                font-weight:bold;
                font-size:20px;
                color:white;
                width:100%;
                height:40px;
                margin-top:0px;
                box-shadow:0;
            }
           #opensolo{
               margin-top:40px;
               position:absolute;
           }
           #openteam{
              margin-top:40px;
               position:absolute;
           }
            input {
                width: 60%;
                height: 30px;
                border-radius: 10px;
                border: none;
                margin-top: 10px;
                padding-left: 10px;
                background-color: rgb(240, 232, 232);
            }
            
            select {
                width: 61%;
                height: 30px;
                border-radius: 10px;
                border: none;
                margin-top: 10px;
                padding-left: 10px;
                background-color: rgba(253, 249, 249, 0.89);
                color: gray;
            }
            
            select option {
                color: rgb(2, 2, 34);
                font-weight: 500;
            }
            
            button {
                border: none;
                background-color: #2e003d;
                box-shadow: 0 0 2px cyan, 0 0 5px cyan, 0 0 10px cyan;
                color: white;
                width: 20%;
                font-weight: 600;
                font-size: 16px;
                height: 40px;
                margin-top: 20px;
                border-radius: 10px;
            }
            
            button:hover {
                background-color: aliceblue;
                color: #2e003d;
            }
            
            a {
                text-decoration: none;
            }
            
           
            .wrapper {
                width: 500px;
                height: 100%;
                margin-bottom: 20px;
                margin-top: 10vh;
            }
            
            .wrapper .title {
                font-size: 18px;
                color: #fff;
                font-weight: 500;
                text-align: center;
                margin-bottom: 30px;
            }
            
            .wrapper ul {
                font-size: 20px;
                display: flex;
                list-style: none;
                text-align: left;
            }
            
            .group {
                padding: 10px 100px;
                margin: 8px;
            }
            
            input[type="checkbox"] {
                display: none;
            }
            
            label {
                position: relative;
            }
            
            label::before {
                content: "";
                background: url("icons/check-circle.svg");
                background-position: center;
                background-size: contain;
                width: 32px;
                height: 32px;
                position: absolute;
                left: -44px;
                top: -8px;
                transform: scale(0) rotateZ(180deg);
                transition: all 0.4s cubic-bezier(0.54, 0.01, 0, 1.49);
            }
            
            input[type="checkbox"]:checked+label::before {
                transform: scale(1) rotateZ(0deg);
            }
            
            label::after {
                content: "";
                border: 2px solid #27ae60;
                width: 24px;
                height: 24px;
                position: absolute;
                left: -42px;
                top: -6px;
                border-radius: 50%;
            }
            
            @media (min-width: 320px) and (max-width: 450px) {
                body {
                    overflow-x:hidden;
                    overflow-y:visible;
                    background-image: none;
                    height:100vh;
                    width:100%;
                    background: #660088;
                background-color: #AB32C9;
                background-image: linear-gradient(326deg, #AB32C9 0%, #660088 74%);
                
                    
                }
                center {
                    position: absolute;
                    transform: translate(-2%, -1%);
                    width: 100%;
                    height: 110vh;
                    box-shadow: none;
                    background-image: none;
                    background-color: transparent;
                }
                center .login_container ul img {
                    display: none;
                }
                center .login_container ul .login_form {
                position: absolute;
                width: 100%;
                height: 110vh;
                border-radius: 10px;
                overflow-x: visible;
                zoom:.9;
                margin-left:-30px;
                margin-right:20px;
               
            }
            /* .option{
                position:absolute;
            } */
            center .login_container ul .login_form .option ul{
                display:flex;
                list-style:none;
                width:100%;
                margin-left:5%;
                
            }
            center .login_container ul .login_form .option ul li {
                width:50%;
                height:30px;
                background:blue;
                list-style:none;  
            }

            center .login_container ul .login_form .option ul li .input,
            center .login_container ul .login_form .option ul li .input{
                background-color:transparent;
                font-weight:bold;
                font-size:20px;
                color:white;
                width:100%;
                height:30px;
                margin-top:0px;
                box-shadow:0;
            }
           #opensolo{
               margin-top:40px;
               position:absolute;
           }
           #openteam{
              margin-top:40px;
               position:absolute;
           }
            input {
                    width: 60%;
                    height: 30px;
                    border-radius: 10px;
                    border: none;
                    margin-top: 10px;
                    padding-left: 10px;
                    background-color: rgb(240, 232, 232);
            }
            select {
                    width: 61%;
                    height: 30px;
                    border-radius: 10px;
                    border: none;
                    margin-top: 10px;
                    padding-left: 10px;
                    background-color: rgba(253, 249, 249, 0.89);
                    color: gray;
                }
                select option {
                    color: rgb(2, 2, 34);
                    font-weight: 500;
                }
                button {
                    border: none;
                    background-color: #2e003d;
                    box-shadow: 0 0 2px cyan, 0 0 5px cyan, 0 0 10px cyan;
                    color: white;
                    width: 20%;
                    font-weight: 600;
                    font-size: 16px;
                    height: 40px;
                    margin-top: 20px;
                    border-radius: 10px;
                }
                button:hover {
                    background-color: aliceblue;
                    color: #2e003d;
                }
                
                .wrapper {
                    width: 100%;
                    height: 100%;
                    margin-bottom: 100px;
                    margin-top: 5vh;
                    zoom: .65;
                }
                .wrapper ul {
                    display: block;
                    list-style: none;
                    text-align: left;
                }
                .group label::before{
                    width:40px;
                    height:40px;
                    
                }
                .group label::after{
                    width:30px;
                    height:30px;
                    
                }
            }
            
            @media (min-width: 450px) and (max-width: 768px) {
                body {
                    overflow-x:hidden;
                    overflow-y:visible;
                    background-image: none;
                    height:100vh;
                    width:100%;
                    background: #660088;
                background-color: #AB32C9;
                background-image: linear-gradient(326deg, #AB32C9 0%, #660088 74%);
                
                    
                }
                center {
                    position: absolute;
                    transform: translate(-2%, -1%);
                    width: 100%;
                    height: 110vh;
                    box-shadow: none;
                    background-image: none;
                    background-color: transparent;
                }
                center .login_container ul img {
                    display: none;
                }
                center .login_container ul .login_form {
                position: absolute;
                width: 100%;
                height: 110vh;
                border-radius: 10px;
                overflow-x: visible;
                zoom:.9;
                margin-left:10%;
                margin-right:20px;
               
            }
            /* .option{
                position:absolute;
            } */
            center .login_container ul .login_form .option ul{
                display:flex;
                list-style:none;
                width:100%;
                margin-left:-20%;
                
            }
            center .login_container ul .login_form .option ul li {
                width:50%;
                height:30px;
                background:blue;
                list-style:none;  
            }

            center .login_container ul .login_form .option ul li .input,
            center .login_container ul .login_form .option ul li .input{
                background-color:transparent;
                font-weight:bold;
                font-size:20px;
                color:white;
                width:100%;
                height:30px;
                margin-top:0px;
                box-shadow:0;
            }
           #opensolo{
               margin-top:40px;
               position:absolute;
           }
           #openteam{
              margin-top:40px;
               position:absolute;
           }
            input {
                    width: 70%;
                    height: 30px;
                    border-radius: 10px;
                    border: none;
                    margin-top: 10px;
                    padding-left: 10px;
                    background-color: rgb(240, 232, 232);
            }
            select {
                    width: 71%;
                    height: 30px;
                    border-radius: 10px;
                    border: none;
                    margin-top: 10px;
                    padding-left: 10px;
                    background-color: rgba(253, 249, 249, 0.89);
                    color: gray;
                }
                select option {
                    color: rgb(2, 2, 34);
                    font-weight: 500;
                }
                button {
                    border: none;
                    background-color: #2e003d;
                    box-shadow: 0 0 2px cyan, 0 0 5px cyan, 0 0 10px cyan;
                    color: white;
                    width: 20%;
                    font-weight: 600;
                    font-size: 16px;
                    height: 40px;
                    margin-top: 20px;
                    border-radius: 10px;
                }
                button:hover {
                    background-color: aliceblue;
                    color: #2e003d;
                }
                
                .wrapper {
                    width: 100%;
                    height: 100%;
                    margin-bottom: 100px;
                    margin-top: 5vh;
                    zoom: .65;
                }
                .wrapper ul {
                    display: block;
                    list-style: none;
                    text-align: left;
                }
                .group label::before{
                    width:40px;
                    height:40px;
                    
                }
                .group label::after{
                    width:30px;
                    height:30px;
                    
                }
            
                
               
            }
            
            @media (min-width: 900px) and (max-width: 1200px) {
                center {
                    zoom: .7;
                    width: 80%;
                    height: 70vh;
                    margin-left: -20vw;
                }
            }
        </style>

    </head>

    <body>
        <center>
            <div class="login_container">
                <ul>
                    <div class="img"><img src="images/login_back.png"></div>
                    <div class="login_form">
                    <div class="option">
                        <ul>
                            <li><button class="input" id="b_solo" onclick="soloform()">SOLO</button></li>
                            <li><button class="input" id="b_team" onclick="teamform()">TEAM</button></li>
                        </ul>  
                    </div>
                    <div id="opensolo">
                    <form method="post" action="">
                            
                            <input type="text"  id="name" name="name" placeholder="Full Name" required="true">
                            <br>


                            <input type="email"  id="email" name="email" placeholder="Enter your Email" required="true">
                            <br>

                            <select class="year" id="gender" name="gender" required="true">
                            <option selected="" disabled="" style="color:rgb(37, 37, 37);">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Don't want to disclose</option>
                        </select><br>

                            <input type="text"  id="cname" name="cname" placeholder="College Name" required="true" ><br>
                            <select class="Year" id="id_year" name="year" placeholder="Year" required="true">
                            <option selected="" disabled="">Select Year</option>
                            <option value="1">First</option>
                            <option value="2">Second</option>
                            <option value="3">Third</option>
                            <option value="4">Fourth</option>
                           
                        </select><br>
                        <input type="tel"  id="phone_no" name="phonenumber" placeholder="Phone No." required="true" maxlength="10"><br>
                        
                            <a id="choice">
                                <div class="wrapper">
                                    <div class="title">
                                        Choose your events from below options
                                    </div>
                                    <ul id="id_choice" class="choice_event">
                                        <li>
                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Algosense" value="Algosense" />
                                                <label for="Algosense">Algosense</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Appmania" value="Appmania" />
                                                <label for="Appmania">App Mania</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Digicanva" value="Digicanva" />
                                                <label for="Digicanva">Digicanva</label>
                                            </div>
                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Webbit" value="Webbit" />
                                                <label for="Webbit">Webbit</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Zumowar" value="Zumowar" />
                                                <label for="Zumowar">Zumo War</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Robosoccer" value="Robosoccer" />
                                                <label for="Robosoccer">Robo Soccer</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Roborace" value="Roborace" />
                                                <label for="Roborace">Robo Race</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Roboballonfight" value="Roboballonfight" />
                                                <label for="Roboballonfight">Robo Ballon Fight</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Airfray" value="Airfray" />
                                                <label for="Airfray">Air Fray</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Skyrc" value="Skyrc" />
                                                <label for="Skyrc">Sky RC</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Hovermania" value="Hovermania" />
                                                <label for="Hovermania">Hover Mania</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Technical" value="Technicalpaperrepresentation" />
                                                <label for="Technical">Technical Paper Representation</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Bridgeit" value="Bridgeit" />
                                                <label for="Bridgeit">Bridge IT</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Contraption" value="Contraption" />
                                                <label for="Contraption">Contraption</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Techyshot" value="Techyshot" />
                                                <label for="Techyshot">Techyshot</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Pubg" value="Pubg" />
                                                <label for="Pubg">Pubg</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Minimilitia" value="Minimilitia" />
                                                <label for="Minimilitia">Mini Militia</label>
                                            </div>

                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Bplan" value="Bplan" />
                                                <label for="Bplan">B Plan</label>
                                            </div>
                                            <div class="group">
                                                <input type="checkbox" name="event[]" id="Openmic" value="Openmic" />
                                                <label for="Openmic">Open Mic</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button name="Submit" class="submit">Submit</button>
                                    <button class="update" name="update">Update</button>
                                </div>
                            </a>
                        </form>
                        </div>


                        <!-- second form -->
                       <div id="openteam">

                    <form method="post" action="">
                        
                        <input type="text"  id="name1" name="name1" placeholder="Full Name" required="true">
                        <br>


                        <input type="email"  id="email1" name="email1" placeholder="Enter your Email" required="true">
                        <br>

                        <select class="year" id="gender1" name="gender1" required="true">
                        <option selected="" disabled="" style="color:rgb(37, 37, 37);">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Don't want to disclose</option>
                    </select><br>

                        <input type="text"  id="cname1" name="cname1" placeholder="College Name" required="true" ><br>
                        <select class="Year" id="year1" name="year1" placeholder="Year" required="true">
                        <option selected="" disabled="">Select Year</option>
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                        <option value="4">Fourth</option>
                    
                    </select><br>
                    <input type="tel"  id="phone_no" name="phonenumber1" placeholder="Phone No." required="true" maxlength="10"><br>
                    <input type="text"  id="tname" name="tname" placeholder="Enter your team name" required="true">
                    <br>
                    <input type="text"  id="m1" name="m1" placeholder="Enter your member name" required="true">
                    <br>
                    <input type="text"  id="m2" name="m2" placeholder="Enter your member name" >
                    <br>
                    <input type="text"  id="m3" name="m3" placeholder="Enter your member name" >
                    <br>
                    <input type="text"  id="m4" name="m4" placeholder="Enter your member name" >
                    <br>
                    
                        <a id="choice">
                            <div class="wrapper">
                                <div class="title">
                                    Choose your events from below options
                                </div>
                                <ul id="id_choice" class="choice_event">
                                    <li>
                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Algosense1" value="Algosense" />
                                            <label for="Algosense1">Algosense</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Appmania1" value="Appmania" />
                                            <label for="Appmania1">App Mania</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Digicanva1" value="Digicanva" />
                                            <label for="Digicanva1">Digicanva</label>
                                        </div>
                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Webbit1" value="Webbit" />
                                            <label for="Webbit1">Webbit</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Zumowar1" value="Zumowar" />
                                            <label for="Zumowar1">Zumo War</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Robosoccer1" value="Robosoccer" />
                                            <label for="Robosoccer1">Robo Soccer</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Roborace1" value="Roborace" />
                                            <label for="Roborace1">Robo Race</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Roboballonfight1" value="Roboballonfight" />
                                            <label for="Roboballonfight1">Robo Ballon Fight</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Airfray1" value="Airfray" />
                                            <label for="Airfray1">Air Fray</label>
                                        </div>



                                    </li>
                                    <li>
                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Skyrc1" value="Skyrc" />
                                            <label for="Skyrc1">Sky RC</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Hovermania1" value="Hovermania" />
                                            <label for="Hovermania1">Hover Mania</label>
                                        </div>

                                        <div class="group">
                                                <input type="checkbox" name="event[]" id="Technical1" value="Technical Paper Reprsentation" />
                                                <label for="Technical1">Technical Paper Reprsentation</label>
                                            </div>


                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Bridgeit1" value="Bridgeit" />
                                            <label for="Bridgeit1">Bridge IT</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Contraption1" value="Contraption" />
                                            <label for="Contraption1">Contraption</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Techyshot1" value="Techyshot" />
                                            <label for="Techyshot1">Techyshot</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Pubg1" value="Pubg" />
                                            <label for="Pubg1">Pubg</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Minimilitia1" value="Minimilitia" />
                                            <label for="Minimilitia1">Mini Militia</label>
                                        </div>

                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Bplan1" value="Bplan" />
                                            <label for="Bplan1">B Plan</label>
                                        </div>
                                        <div class="group">
                                            <input type="checkbox" name="event[]" id="Openmic1" value="Openmic" />
                                            <label for="Openmic1">Open Mic</label>
                                        </div>

                                    </li>
                                </ul>
                                <button name="Submit1" class="submit">Submit</button>
                                <button class="update" name="update1">Update</button>
                            </div>
                        </a>
                    </form>
                </div>           
            </div>
        </ul>
    </div>
        </center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


        <script type="text/javascript">
    document.getElementById("opensolo").style.visibility = "visible";
    document.getElementById("openteam").style.visibility = "hidden";
    document.getElementById("b_solo").style.background = "white";
        document.getElementById("b_solo").style.color = "blue";
    
    function soloform() {
        document.getElementById("opensolo").style.visibility = "visible";
        document.getElementById("openteam").style.visibility = "hidden";
        document.getElementById("b_solo").style.background = "white";
        document.getElementById("b_solo").style.color = "blue";
        document.getElementById("b_team").style.background = "blue";
        document.getElementById("b_team").style.color = "white";
    }
    function teamform() {
        document.getElementById("opensolo").style.visibility = "hidden";
        document.getElementById("openteam").style.visibility = "visible";
        document.getElementById("b_solo").style.background = "blue";
        document.getElementById("b_solo").style.color = "white";
        document.getElementById("b_team").style.background = "white";
        document.getElementById("b_team").style.color = "blue";
       
    }
    $("document").ready( function () {
        alert("...............Alert !!!!............. ? Hello participant! confirm that if you want to update the events , then your older events will be deleted so please select your previous events which you want to participate and the newer events, click to update button" );
    }); 

    </script>

    </body>

    </html>