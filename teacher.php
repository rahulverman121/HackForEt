<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teacher Dashboard | HackForEt | CMR Technical Campus</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <link rel="icon" type="image/jpg" href="./images/cmrlog.jpg">
        <style>
            header {
                display: flex ;
                padding : 0 5% ;
                top : 0 ;
                left : 0 ;
                width : 80% ;
                height : 6rem ;
                background: transparent ;
                align-items: center ;
                font-size: 1.5rem;
                justify-content: center;
                color : rgb(37, 201, 223) ;
                color : rgb(73, 150, 205) ;
            }
            #logo,#hackforet {
                width : 6rem ;
            }
            #head {
                width : 70% ;
                justify-content: center;
                display: flex ;
                flex-direction: column;
               font-weight: bold ;
                text-align: center;
            }
            nav {
                margin : 2rem 0 ;
                display :flex ;
                width : 100% ;
			align-items : center ;
                justify-content: right ;
            }
            main {
                width : 100% ;
                display : flex ;
                justify-content: center ;                
            }
            .bnn {  
		    box-shadow : 0 0 0.7rem rgba(73,150,205,0.8) ;              
                padding : 0.5rem 1rem;
                border : 0.1rem solid rgb(73, 150, 205) ;
                background: rgb(73, 150, 205) ;
                border-radius: 1rem ;
                color : white ;
                cursor : pointer ;
		    display : flex ;
		    align-items : center ;
            } 
            #addmaterial {
                margin : 1% 0 ;
                padding : 3rem ;
		    border-radius : 1rem/1rem;
                border : 0.1rem groove rgb(73, 150, 205) ;
                box-shadow: inset 0 0 0.3rem rgb(73, 150, 205);
            }
            form>h1 {
                color : rgb(73, 150, 205) ;
                margin-bottom: 2.5rem;
            }
            input[type='url'],input[type='file'],select {
                margin : 1rem 2rem ;
            }
            input[type='file'] {
               margin-left : 3rem
            }
            select {
                margin-right : 5rem ;
                margin-left: 2.8rem;
                width : 8rem ;
            }
            hr {
                margin : 3rem 0 ;
                border-top-color: rgb(73, 150, 205)  ;
            }
            footer {
                margin-top : 3rem ;
                width : 100% ;
                justify-content: center;
                align-items: center;
                display: flex ;
                height : 6rem ;
                color : white ;
                bottom: 0;
                background: rgb(73, 150, 205) ;
            }
            </style>
    </head>
    <body>
<?php 
if($_SESSION["empid"]) {
?>
	
        <header>
            <a href="https://cmrtc.ac.in/">
            <img src="./images/cmritlogo.png" alt="https://cmrtc.ac.in/" id="logo">
            </a>
            <div id="head">CMR Technical Campus, Telangana<br/>
                <span style="font-size: 1.3rem;color:rgb(69,67,68);font-weight:normal;">(UGC AUTONOMOUS)</span>
            </div>
            <a href="https://dare2compete.com/hackathon/hackforet-cmr-technical-campus-cmrctc-telangana-274696?utm_campaign=site-emails&utm_medium=d2c-automated&utm_source=registration-successful-hackforet">
            <img src="./images/hackforet.jpg" id="hackforet" alt="HackForEt">
            </a>
        </header>
        <nav>
            		<?php
		echo 'Welcome '.$_SESSION["fname"].' '; 
		 ?>
		<a href="logout.php" style="margin-right:15%;margin-left:2%">
            <button class="bnn" style="margin-right:15%;margin-left:2%">LogOut&nbsp<img src="./images/logout.png" width="18rem"></button></a>
        </nav>
        <main>
            <form action="upload.php" method="post" enctype="multipart/form-data" id="addmaterial">
                <h1>Upload Materials</h1>
                <div>
                <label>Select Year : </label>
                <select name="sem">
			  <option hidden>Select Semester</option>
                    <option>1st Semester</option>
                    <option>2nd Semester</option>
                    <option>3rd Semester</option>
                    <option>4th Semester</option>
                    <option>5st Semester</option>
                    <option>6nd Semester</option>
                    <option>7rd Semester</option>
                    <option>8th Semester</option>
                </select>
                
                <label>Select Subject : </label>
                <select style="margin-left: 3.8rem;" name="subject">
			  <option hidden>Select Subject :</option>
               	 <option>Cryptography</option>
                	<option>Data Structure</option>
                	<option>Oops Programming</option>
                	<option>Web Development</option>
                	<option>Network Security</option>
                </select>
                </div>
		    <div>
                
                
                <label>Select Module : </label>
                <select style="margin-left: 1.8rem;" name="module">
			  <option hidden>Select Module</option>
                    <option>Module 1</option>
                    <option>Module 2</option>
                    <option>Module 3</option>
                    <option>Module 4</option>
                    <option>Module 5</option>
                </select>
                </div>
                <div>
                    <label>YouTube Link</label>
                    <input type="url" name="youtubelink" placeholder="Youtube Link">
                    <label>Add Reference Link</label>
                    <input type="url" name="reflink" placeholder="Reference Web Link">
                </div>
                <label>Select File : </label>
                    <input type="file" name="notes">
		    <div id="msg"></div>
                <hr></hr>
                <center><button class="bnn" id="register">Upload</button>
                </center>  
            </form>
        </main>
        <footer>
            &COPY; Designed & Developed By&nbsp;<i>RAHUL VERMAN, FAIZAN AHMAD & SHASHI BAVAN.</i>
         </footer>
<?php
}
else
echo "Access Denied. Login";
?>
    </body>
</html>