<html>
    <head>
        <title>REGISTRATION</title>
        <link rel="stylesheet" href="styles.css">
	 <script>
	var flag1=0,flag2=0,flag3=0,flag4=0;
    function users(str){
	var name_r=new RegExp(/[A-Za-z]$/,'g');
	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) 
    	{
	if(name_r.exec(str) && str.length>6)
        {
            document.getElementById("f1").innerHTML="";
		flag1=1;
            return;
        }
 	else
        {
       	document.getElementById("f1").innerHTML="Username should contain only alphabets of minimum length 6";
	flag1=0;
	return;
        }
    	}
  	};
   		xmlhttp.open("POST","");
   		xmlhttp.send();
    }

    function pass(str){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) 
    {
	if(str.length>5)
        {
            document.getElementById("f2").innerHTML="";
		flag2=1;
            return;
        }
 	else
        {
       	document.getElementById("f2").innerHTML=this.responseText+" password,should contain minimum 6 characters";
	flag2=0;	
	return;
        }
    	}
  	};
   	xmlhttp.open("POST","content.txt",true);
   	xmlhttp.send();
    }

    function mail(str){
	var email_r=new RegExp(/^[a-zA-Z0-9]+@[a-zA-Z]*\.com$/,'g');
	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) 
    {
	if(email_r.exec(str))
        {
            document.getElementById("f3").innerHTML="";
flag3=1;
            return;
        }
 	else
        {
       	document.getElementById("f3").innerHTML=this.responseText+" Email id";
flag3=0;	
return;
        }
    }
  };
   xmlhttp.open("POST","content.txt",true);
   xmlhttp.send();
    }

	function phn(str){
	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) 
    {
	if(str.length==10)
        {
            document.getElementById("f4").innerHTML="";
		flag4=1;
            return;
        }
 	else
        {
       	document.getElementById("f4").innerHTML="phone number should contain 10 digits only";
flag4=0;	
return;
        }
    }
  };
   xmlhttp.open("POST","");
   xmlhttp.send();
    }

	function success(){
	if(flag1==1&&flag2==1&&flag3==1&&flag4==1)
	alert("REGISTERED SUCCESSFULLY");
else
alert("REGISTRATION FAILED TRY AGAIN");

}
    </script>
    </head>
    <body id="bgg" class="fonts" >
        <form name="idd" onsubmit="return success()">
        <div id="alignment"  style="width:35%;padding:15px;border-radius:10px;border:white">
            
         <h1 align="center">REGISTER HERE</h1>
                <label align="left" id ="text"><b>Name:</b></label>
                    <input type="text" placeholder="Enter Username" id="user" onkeyup="users(this.value)"><span id="f1" style="color:red"></span><br>
                <label align="right" ><b>Password:</b> </label>
                    <input type="password" placeholder="Enter password" onkeyup="pass(this.value)"><span id="f2" style="color:red"></span><br>
                <label align="right" id="add"><b>E-mail id:</b></label>
                <input type="text" placeholder="Enter email id" onkeyup="mail(this.value)"><span id="f3"  style="color:red"></span><br>
                <label align="right" id="add"><b>Phone Number:</b></label>
                <input type="text" placeholder="Enter Phone number" onkeyup="phn(this.value)"><span id="f4" style="color:red"></span><br>
          
        <input type="radio" id="female" value="female" name="gender" class="with-gap">FEMALE</input>
        <input type="radio" id="male" value="male" name="gender" class="with-gap">MALE</input><br><br>
        <b>Date Of Birth:</b>
        
        <select name="dob" style="background-color:#e9e9e9;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <select style="background-color:#e9e9e9;">
            <option value="Jan">JANUARY</option>
            <option value="Feb">FEBRUARY</option>
            <option value="mar">MARCH</option>
            <option value="Apr">APRIL</option>
            <option value="may">MAY</option>
            <option value="Jun">JUNE</option>
            <option value="jul">JULY</option>
            <option value="aug">AUGUST</option>
            <option value="sep">SEPTEMBER</option>
            <option value="oct">OCTOBER</option>
            <option value="nov">NOVEMBER</option>
            <option value="dec">DECEMBER</option>
        </select>
        <select style="background-color:#e9e9e9;">
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="1998">2003</option>
            <option value="1999">2004</option>
            <option value="2000">2005</option>
            <option value="2001">2006</option>
            <option value="2002">2007</option>

        </select>
        <br><br>
        <input type="checkbox" id="lang" name="lang" id="ck-button">Telugu</input>
        <input type="checkbox" id="lang" name="lang" id="ck-button">Hindi</input>
        <input type="checkbox" id="lang" name="lang" id="ck-button">English</input>
        <input type="checkbox" id="lang" name="lang" id="ck-button">Tamil</input><br><br>
        <b>Address:</b>
        <textarea id="add" rows="3" cols="61" style="background-color:#e9e9e9;"></textarea>
        <button type="submit" class="button" style="font-size:larger"><b>SUBMIT</b></button>
    <button type="reset" class="button"  style="font-size:larger"><b>RESET</b></button>
   
    </div>
    
</form>
    </body>
</html>