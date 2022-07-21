<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silat Cekak Page</title>
    <link rel="stylesheet" type="text/css" href="layout1float.css">
    <script type= "text/JavaScript">
		//Browsing a website using JavaScript
		function Site(val)
			{
				window.location.href = val;
			}
			
		function bgcolor(val2)
			{
				document.body.style.backgroundColor = val2;
			}

		function myFunction()
		{
            const day=new Date();
            const month=new Date();
            const year=new Date();
            var date="";
            date=day.getDate()+"/"+month.getMonth()+"/"+year.getFullYear();
			document.getElementById("demo").innerHTML=date;
		    var x=document.getElementById("name").value;
            document.getElementById("Resultname").innerHTML=x;
		    var y=document.getElementById("email").value;
            document.getElementById("Resultemail").innerHTML=y;
		   var z=document.getElementById("address").value;
           document.getElementById('Resultaddress').innerHTML = z
					
           var ele = document.getElementsByName('gender');
              
              for(i = 0; i < ele.length; i++) {
                  if(ele[i].checked)
                  document.getElementById("Resultgender").innerHTML
                          = ele[i].value;
              }

             var z1= document.getElementById("comment").value;           
			document.getElementById('Resultcomment').innerHTML = z1;
                   
			
            var ele = document.getElementsByName('favpage');
			var x1 = "";
			var x2 = "";
			var x3 = "";
			var listweb= "";
			
            if(ele[0].checked) 
                x1 =ele[0].value;
									
            if(ele[1].checked) 
                x2 =ele[1].value;
                
			if(ele[2].checked) 
            x3 =ele[2].value;
			listweb = x1 + " | " + x2 + " | " + x3 ;
			document.getElementById("site").innerHTML =  listweb;
		
			
             
		
			var x = document.getElementsByName('favpage');
			var x1 = "";
			var x2 = "";
			var x3 = "";
			var listname= "";
			
            if(x[0].checked) 
                x1 =x[0].value;
									
            if(x[1].checked) 
            x2 =x[1].value;
                
			if(x[2].checked) 
            x3 =x[2].value;
			listname = x1 + " | " + x2 + " | " + x3 ;
			document.getElementById("site").innerHTML =  listname;
		
			
             
        } 

	</script>
	
</head>
<body>

  <header>
    <center>
        <a href="https://www.silat.cekak.org.my" target="_blank"><img src="banner.png" alt="banner file"></a>
    </center></header>
<nav>
    <hr/>
<ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="introduction.html">INTRODUCTION</a></li>
    <li><a href="mission.html">MISSION & VISION</a></li>
    <li><a href="guestbook.html">GUESTBOOK</a></li>
    <li><a href="registration.html">REGISTRATION</a></li>
    <li><a href="vid.html">VIDEO FLEX</a></li>
    <li><a href="flex.html">FLEX IMAGE</a></li>

</ol>
</nav>
<section>
    <article>
    <h3><style>
        table, th, td {
          border:1px solid black;
        }
        </style>
         <form action = "process2.php" method="post">
    <center>
       
        <table style="width:40%">
            <tr>
                <th colspan="2">Please fill the form below</th>
            </tr>
            <tr>
                <th colspan="2" rowspan="1">
                <select name = "Color" size = "1"
                    onChange="bgcolor(this.value)">
                    <option value = "purple"> Purple </option>
                    <option value = "greenyellow"> Green Yellow</option>
                    <option value = "seagreen"> Seagreen </option>
                    <option value = "aquamarine"> Aquamarine </option>
                    <option value = "teal"> Teal </option>
                    <option value = "skyblue"> Skyblue </option>
                    <option value = "violet"> Violet </option>
                    <option value = "indigo"> Indigo </option>
                    <option value = "beige"> Beige </option>
                    <option value = "lightgray"> Light Gray </option>
                    <option value = "bisque"> Bisque </option>
                </select>
                    
                <select name = " SiteSelector" size = "1"
                    onChange="Site(this.value)">
                    <option value = "http://www.utem.edu.my"> UTeM </option>
                    <option value = "http://ftmk.utem.edu.my"> FTMK</option>
                </select>
                </tr>
                 
<tr>
    <td>Name:</td>
    <td><input type="text" id="name" name="name" required><br></td>
</tr>
<tr>
    <td>Email:</td>
    <td><input type="text" id="email" name="email" required><br></td>
</tr>
<tr>
    <td>Address:</td>
    <td><textarea id="address" name="address" rows="2" cols="18" required></textarea><br></td></tr>
<tr>
        <td>Gender:</td>
        <td><input type="radio" id="Male" name="gender" value="male">Male
        <input type="radio" id="Female" name="gender" value="female" required>Female</td> </tr>
<tr>
        <td>Comment:</td>
        <td><textarea id="comment" name="comment" rows="2" cols="18" required></textarea></td> </tr>
 <tr>
        <td><strong>Favourite Site:</strong></td>
        <td style = "text-align:left">
            <input type="checkbox" id="favpage1" name="favpage" value="https://www.utem.edu.my/">
           <label for="favpage1"> UTeM Page </label><br>
           <input type="checkbox" id="favpage2" name="favpage" value="https://www.facebook.com/">
           <label for="favpage2"> Facebook Page</label><br>
           <input type="checkbox" id="favpage3" name="favpage" value="https://www.google.com/">
           <label for="favpage3"> Google Page</label><br><br>
       </td></tr>
    <tr>
      <th colspan="2">  
        <input type = "submit" value = "Process Form" >
        <input type = "reset" name="resetbutton" id="resetbutton" value = "Clear Form"></th>
    </tr>
</tr></table>
</h3>
</center>
</form>

<center>
    <p id="demo"></p>
    <label>Name: </label><span id='Resultname'></span><br>
    <label>Email: </label><span id='Resultemail'></span><br>
    <label>Address: </label><span id='Resultaddress'></span><br>
    <label>Gender: </label><span id="Resultgender"></span><br>
            <label>Comment: </label><span id='Resultcomment'></span><br>
            <label>Favourite Site: </label><span id="site"></span><br><br>
    </center>
   
</article>
</section>
<footer
<h5>copyright &copy;b031910060@student.utem.edu.my</h5>
</footer>
</body>