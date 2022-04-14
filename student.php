<?php 
    session_start();   
include('connection.php');
$sql="Select * from materials";
$result = mysqli_query($con,$sql);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Dashboard | HackForEt | CMR Technical Campus</title>
	   <link rel="icon" type="image/jpg" href="./images/cmrlog.jpg">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
            header {
                display: flex ;
                padding : 0 5% ;
                top : 0 ;
                left : 0 ;
                width : 90% ;
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
                justify-content: right ;
		    align-items : center ;
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
            main {
                width : 100% ;
                display : flex ;
                flex-direction: column;
                justify-content: center ; 
                align-items: center;       
                gap: 3rem ;  
                 
                font-size: 1.2rem;    
            }
		.down {
			width : 6rem ;
			border-radius : 1rem ;
			padding : 0.5rem ;
			cursor : pointer ;
			border : 0.1rem solid rgba(73,150,205,0.8) ;
			box-shadow : 0 0 0.7rem rgba(73,150,205,0.8) ;
			background : rgba(73,150,205,1) ;
			color : white ;
			margin : 0 0 1.5rem 1.5rem ;
			
		}
		.down:hover {
			padding : 0.7rem ;
			margin-top : 0.5rem ;
		}
		.droptitle {
			padding : 0.8rem  ;
			background : rgba(73,150,205,1) ;
			color : white ;
			display : flex ;
			cursor : pointer ;
		}
		.arrow {
			width : 1.5rem ;
			
		}
		.softcopy {
			display : flex ;
			flex-wrap : wrap ; 
		}
		.filter {
			border : 0.1rem groove black  ;
			padding : 1rem 2rem;
			border-radius : 1rem / 1rem;
			box-shadow : inset 0 0 0.7rem rgba(0,0,0,0.6) ;
			margin: 3rem 0 ;
		}
		iframe {
			margin : 1.5rem ;
			cursor : pointer ;
		}
            select,input[type='search'] {
                
                margin-left: 2.8rem ;
                width : 8rem ;
                margin : 1rem 2rem ;
                padding : 0.2rem ;
		     margin-right : 3.5rem ;

            }
            input[type='search'] {
                width : 13rem ;
		    margin-right : 0 ;
            }
		.ref {
			margin : 0.8rem 1.5rem ;
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
if($_SESSION["regno"]) {
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
		echo 'Welcome '.$_SESSION["fname"].'  '; 
		 ?>
	<a href="logout.php" style="margin-right:15%;margin-left:3%,text-decoration:none;">
            <button class="bnn" style="margin-right:15%;margin-left:2%">LogOut&nbsp<img src="./images/logout.png" width="18rem"></button></a>
        </nav>
        <main>
		<section classname="main">
            <h1 style="color:rgb(73,150,205);margin-bottom:2.5rem;">Study Materials</h1>
            <section class="filter">
<section style="display:flex">
		<section>
		<label >Filter By Subject : </label>
            <select id="subject" onchange="filterbysub()">
                <option hidden>Select Subject</option>
                <option>Cryptography</option>
                <option>Data Structure</option>
                <option>Oops Programming</option>
                <option>Web Development</option>
                <option>Network Security</option>
                <option>All</option>
            </select>
		</section>
			
<script>
	function filterbysub() {
			var sub = "."+$("#subject").val().split(" ")[0];
			var mod = "."+$("#module").val().split(" ")[1];
			$(".Module").hide();
			$(sub).slideDown();
		}
</script>
		<div id="msgg"></div>
		<section>
			<label >Filter By Content : </label>
			<select style="width:10rem" onchange="filterbycontent()" id="content">
				<option hidden>Select Content Type</option>
				<option>Notes / Resources</option>
				<option>Video Link</option>
				<option>Reference Web Link</option>
				<option>All</option>
			</select>
			</section>
			</section>
		<script>
			function filterbycontent() {
			var cont = $("#content").val();
				alert("hello");
				if(cont=='Notes / Resources') {
						$(".weblink,.videolink,.weblinktitle,.videolinktitle").slideUp();
						$(".softcopy,.softcopytitle").slideDown();						
					}
				else if(cont=='Video Link') {
						$(".weblink,.softcopy,.weblinktitle,.softcopytitle").slideUp();
						$(".videolink,.videolinktitle").slideDown();
					}
				else if(cont=='Reference Web Link') {
						$(".softcopy,.videolink,.softcopytitle,.videolinktitle").slideUp();
						$(".weblink,.weblinktitle").slideDown();
					}
				else {			$(".weblink,.weblinktitle,.softcopy,.videolink,.softcopytitle,.videolinktitle").slideDown();
				}
			}			
		</script>

		 <section>
            <label>Filter By Module : </label>            
            <select id="module" onchange="filterbymodule()">
                <option hidden>Select Module</option>
                <option>Module 1</option>
                <option>Module 2</option>
                <option>Module 3</option>
                <option>Module 4</option>
                <option>Module 5</option>
                <option>All</option>
            </select>
            <label>Search Keyword :</label>
            <input type="search" placeholder="Enter Keyword">
            </section>
		</section>
  <script>
	function filterbymodule() {
			var sub = "."+$("#subject").val().split(" ")[0];
			var mod = "."+$("#module").val().split(" ")[1];
			$(".Module").hide();
			$(mod).slideDown();
			
		}
</script>          


                <h3 class="droptitle softcopytitle" onclick="$('.arrres').css('transform','rotate(180deg)');$('.softcopy').slideToggle()"><span style="flex:90%">Resources / Notes </span><img src="./images/arrow.png" class="arrow arrres"> </h3>
			<section class="softcopy" >
			
		<?php
			
		while($row= mysqli_fetch_assoc($result)) {
			
			echo '
			<div style="display:flex;flex-direction:column" class="'.$row['subject'].' '.$row["module"].'">
                <iframe width="250" height="200" src="./'.$row["files"].'"> 
			</iframe>
			<div style="display:flex;margin-left:1rem">
			<a href="./'.$row["files"].'" target="_blank" download><button class="down">Download</button>
			</a>
			<a href="./'.$row["files"].'" target="_blank"><button class="down">View</button>
			</a>
			</div>
			</div> 
			';
		}
		?>		
		</section>
                <h3 class="droptitle videolinktitle" onclick="$('.arryou').css('transform','rotate(180deg)');$('.videolink').slideToggle()"><span style="flex:90%">YouTube Videos </span><img src="./images/arrow.png" class="arrow arryou"></h3>
            <section class="videolink" >
                

		<?php
		$res = mysqli_query($con,$sql);
		while($row= mysqli_fetch_assoc($res)) {
			echo '
                <iframe width="250" height="200" src="'.$row["youtube"].'" class="'.$row['subject'].' '.$row["module"].'">
			</iframe>';
			} ?>


            </section>
                <h3 class="droptitle weblinktitle" onclick="$('.arrdrop').css('transform','rotate(180deg)');$('.weblink').slideToggle()"><span style="flex:90%">Reference Links</span><img src="./images/arrow.png" class="arrow arrdrop"></h3>
            <section class="weblink " >

		<?php
		$resu = mysqli_query($con,$sql);
		while($row= mysqli_fetch_assoc($resu)) {
			echo '
                <a href="'.$row["weblink"].'" target="_blank" class="ref '.$row['subject'].' '.$row["module"].'"><img src="./images/link.png" width="16rem">'.$row["weblink"].'</a>
		';
		}
		?>

            </section>
		</section>
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
