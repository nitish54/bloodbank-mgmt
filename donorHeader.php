<script language="javascript" type="text/javascript">
    function hide(val){
        if( val=="Search Hospitals/Blood Banks"){
            document.getElementById('search_query').value="";
            document.getElementById('search_query').style.opacity="0.6";
            document.getElementById('search_query').style.color="grey";
        }
    }
    function show(val){
        if( val==""){
            document.getElementById('search_query').value="Search Hospitals/Blood Banks";
            document.getElementById('search_query').style.opacity="0.6";
            document.getElementById('search_query').style.color="grey";
        }
    }

    function showResult(str)
    {
        if (str.length==0)
        { 
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            document.getElementById('search_query').style.opacity="1";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","searchbbh.php?q="+str,true);
        xmlhttp.send();
    }
</script>

<div id="header">

    <form method="post" class="search">
        <p>
            <input name="search_query" id="search_query" class="textbox" maxlength="20" style="color: grey; opacity: 0.6;"type="text" value="Search Hospitals/Blood Banks" onfocus="hide(this.value);" onblur="show(this.value);" onkeyup="showResult(this.value)" autocomplete="off"/>
            <input name="search" class="button" value="Search" type="submit" />
        <div id="livesearch" class="mysearch"></div>
        </p>
    </form>
								
		<h1 id="logo"><img src ="images\logo.jpg" width="62" height="62"/>Donate <span>BLOOD</span></h1> <br/>
		<h2 id="slogan">Donate Blood Save Life...</h2>
					
	</div>
		
	<div id="menu">
		<ul>
			<li><a href="donorHome.php">Home</a></li>			
			<li><a href="bloodbank.php">Blood Banks</a></li>
                        <li><a href="donationfacts.php">Blood Donation</a></li>
                        <li><a href="hospital.php">Hospitals</a></li>
                        <li><a href="news.php">News & Events</a></li>			
			<li><a href="faq.php">F.A.Q.</a></li>
			<li><a href="contactus.php">Contact Us</a></li>			
		</ul>		
	</div>	