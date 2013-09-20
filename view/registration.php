<?php 
//include "chk.php";?>
<!DOCTYPE HTML>

<head>

    <title>Registration</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    
  
<!-- Contact Form -->    
    
    <link href="contact_form/css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="contact_form/css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.tools.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="contact_form/js/main.js"></script>
    


<!-- JS Files -->

	<script src="js/jquery.tools.min.js" type="text/javascript"></script>
        
    <script type="text/javascript">
        $(function() {
        $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
    });
    </script>
    
    <script type="text/javascript">
            $(document).ready(function(){
            $(".pane-list li").click(function(){
            window.location=$(this).find("a").attr("href");
            return false;
        });
    
    }); //close doc ready
    </script>
    
    
<script language="javascript">

function isDate(ExpiryDate) {

var objDate, // date object initialized from the ExpiryDate string
mSeconds, // ExpiryDate in milliseconds
day, // day
month, // month
year; // year
var ExpiryDate = document.getElementById("ExpiryDate").value;

var d;
// date length should be 10 characters (no more no less)

// third and sixth character should be &#39;/&#39;
if (ExpiryDate.substring(2, 3) !== '/' || ExpiryDate.substring(5, 6) !== '/') {

alert("use only / as delimiter in date");
return false;
}
// extract month, day and year from the ExpiryDate (expected format is mm/dd/yyyy)
// subtraction will cast variables to integer implicitly (needed
// for !== comparing)
month = ExpiryDate.substring(0, 2) ; // because months in JS start from 0
day = ExpiryDate.substring(3, 5) - 0;
year = ExpiryDate.substring(6, 10) - 0;
//day  = document.getElementById('Day');
 //month  = document.getElementById('Month');
// test year range
if (year < 1000 || year > 3000) {
alert("write year correctly");
return false;
}

if (isNaN(year) ) {
alert("write year in number");
return false;
}
if (isNaN(month) ) {
alert("write month in number");
return false;
}

if (isNaN(day) ) {
alert("write month in number");
return false;
}
if (month < 1 || month > 13) {
alert("month not greater than 13");
return false;
}

if (day>=32 ) {
alert("write day less than 32");
return false;
}

//document.write(month);
    // Adjust for leap years
if (ExpiryDate.length !== 10) {
alert("Sorry!! The date entered is incorrect");
return false;
}
 
   switch(month)
 {
  case '01':
  case '03':
  case '05':
  case '07':
  case '08':
  case '10':
  case '12':
    {
     d=31;
     break;
    }
  case '04':
  case '06':
  case '09':
  case '11':
    {
     d=30;
     break;
    }
    case '02':
    {
     if(year%4==0)
     {
      d=29;
      break;
     }
     else
     {
      d=28; 
      break;
     }
    }
 }
 if(day>d)
 {
  alert('Sorry!! The date entered is incorrect');
  return false;
 }

  return true;

 }
 // }
  </script>
  <script type="text/javascript">
function valid(form)
{
 for(var i=0 ; i< form.elements.length; i++)
 {
 if (form.elements[i].value== "")
 {
  alert (" fill all feilds.");
  //form.elements[i].focus();
  form.elements[i].select();
  return false;
 }
if ( ( form.genn[0].checked == false ) && ( form.genn[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
if ( ( form.locationn[0].checked == false ) && ( form.locationn[1].checked == false ) ) 
{
alert ( "Please choose you nri or indian" ); 
return false;
}

 }
return true;
}
</script>
<SCRIPT LANGUAGE="JavaScript">

var submitcount=0;
function checkFields() { 
if ( (document.yourform.email.value=="") )  // checks if fields are blank.
       // forms.javascriptsource.com
   {
   alert("Please enter your  email.");
   return false;
   }
 if (submitcount == 0)
      {
      submitcount++;
	  //alert("phj");
      return true;
      }
   else
      {
      alert("This form has already been submitted.  Thanks!");
      return false;
      }
   }

</script>
<SCRIPT LANGUAGE="JavaScript">

nextfield = "email"; // name of first box on page
netscape = "";
ver = navigator.appVersion; len = ver.length;
for(iln = 0; iln < len; iln++) if (ver.charAt(iln) == "(") break;
netscape = (ver.charAt(iln+1).toUpperCase() != "C");

function keyDown(DnEvents) { // handles keypress
// determines whether Netscape or Internet Explorer
k = (netscape) ? DnEvents.which : window.event.keyCode;
if (k == 13) { // enter key pressed
if (nextfield == 'done') return true; // submit, we finished all fields
else { // we're not done yet, send focus to next box
eval('document.yourform.' + nextfield + '.focus()');
return false;
      }
   }
}
document.onkeydown = keyDown; // work together to analyze keystrokes
if (netscape) document.captureEvents(Event.KEYDOWN|Event.KEYUP);
//  End -->
</script>

<SCRIPT LANGUAGE="JavaScript">

function placeFocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type == "email")  || (field.elements[i].type.toString().charAt(0) == "s")) {
document.forms[0].elements[i].focus();
document.forms[0].elements[i].select();
break;
         }
      }
   }
}
//  End -->
</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
function fnchecked(blnchecked)
{
if(blnchecked)
{
document.getElementById("divcheck").style.display = "";
} 
else
{
document.getElementById("divcheck").style.display = "none";
}

}
</script>
<script language="javascript">
/* function wiper(){
     document.getElementById('hider').innerHTML = '';
}
*/
var http = createRequestObject();
var show_message_div;
function createRequestObject()
{
    var obj;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
    obj = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else{
    obj = new XMLHttpRequest();
    }
    return obj; 
}
function sendRequest()
{
    //alert(membership_id);
 
    var email = document.getElementById('email').value;
    //var pass = document.getElementById('pass').value;
 //alert(pass);
//var QueryString = 'lists.php?find='+membership_id;
    //var membership_id = 6;
 //var usname = 'test';
 //var passw = 'pass';
    var QueryString = '../controller/ajax/ajaxlogin.php?username='+email;
 //alert(QueryString);
    http.open('get', QueryString);
    http.onreadystatechange = handleResponse;
    http.send(null);
}
function handleResponse() {
   if(http.readyState != 4){
    //document.getElementById('fry').innerHTML = '<img src="download.jpg" height="10" width="10" />';
    }
    if(http.readyState == 4){
        //document.getElementById('spinner').innerHTML = "";
       var response = http.responseText;
       //alert(response);
 // document.getElementById('fry').innerHTML = '';
       if(response != '')
       {
       //document.getElementById('fry').innerHTML = response;
           //alert(response);
      //var newdiv = document.createElement('div');
      //newdiv.innerHTML=     response;
      //document.getElementById('fry').style.display = "block"
     // document.getElementById('footerSlideContent').innerHTML = '';
     // document.getElementById('footerSlideContent').innerHTML = response;
            //document.getElementById('footerSlideContent').innerHTML =response;
      // document.getElementById('click').innerHTML ='<input type="submit" name="KT_Insert1" id="KT_Insert1" value="Register" />'

       




       }
	   
	   if(response == 0)
	   {
	   document.getElementById('fry').innerHTML = '<img src="images/wrong.jpg" height="15" width="15"  />';
	   
	   }

      if(response == 1)
	   {
	   document.getElementById('fry').innerHTML = '<img src="images/right.jpg" height="20" width="20" />';
	   
	   }
	   
	   
	   
       //else
	   {
      // document.getElementById('click').innerHTML ='<input type="submit" name="KT_Insert1" id="KT_Insert1" value="Register" disabled="disabled" />'
       //document.getElementById('fry').innerHTML = '';
       }
               //document.getElementById('fry').style.display = "none"
        //}                 
       //document.getElementById('fry').innerHTML = response;
       //document.form1.KT_Insert1.disable=false;
      //document.getElementById('click').innerHTML ='<input type="submit" name="KT_Insert1" id="KT_Insert1" value="Register" />'
   }
}
</script>
<script type="text/javascript">

var weekend = [0,6];
var weekendColor = "#e0e0e0";
var fontface = "Verdana";
var fontsize = 2;

var gNow = new Date();
var ggWinCal;
isNav = (navigator.appName.indexOf("Netscape") != -1) ? true : false;
isIE = (navigator.appName.indexOf("Microsoft") != -1) ? true : false;

Calendar.Months = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"];

// Non-Leap year Month days..
Calendar.DOMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
// Leap year Month days..
Calendar.lDOMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

function Calendar(p_item, p_WinCal, p_month, p_year, p_format) {
 if ((p_month == null) && (p_year == null)) return;

 if (p_WinCal == null)
  this.gWinCal = ggWinCal;
 else
  this.gWinCal = p_WinCal;
 
 if (p_month == null) {
  this.gMonthName = null;
  this.gMonth = null;
  this.gYearly = true;
 } else {
  this.gMonthName = Calendar.get_month(p_month);
  this.gMonth = new Number(p_month);
  this.gYearly = false;
 }

 this.gYear = p_year;
 this.gFormat = p_format;
 this.gBGColor = "white";
 this.gFGColor = "black";
 this.gTextColor = "black";
 this.gHeaderColor = "black";
 this.gReturnItem = p_item;
}

Calendar.get_month = Calendar_get_month;
Calendar.get_daysofmonth = Calendar_get_daysofmonth;
Calendar.calc_month_year = Calendar_calc_month_year;
Calendar.print = Calendar_print;

function Calendar_get_month(monthNo) {
 return Calendar.Months[monthNo];
}

function Calendar_get_daysofmonth(monthNo, p_year) {
 /*
 Check for leap year ..
 1.Years evenly divisible by four are normally leap years, except for...
 2.Years also evenly divisible by 100 are not leap years, except for...
 3.Years also evenly divisible by 400 are leap years.
 */
 if ((p_year % 4) == 0) {
  if ((p_year % 100) == 0 && (p_year % 400) != 0)
   return Calendar.DOMonth[monthNo];
 
  return Calendar.lDOMonth[monthNo];
 } else
  return Calendar.DOMonth[monthNo];
}

function Calendar_calc_month_year(p_Month, p_Year, incr) {
 /*
 Will return an 1-D array with 1st element being the calculated month
 and second being the calculated year
 after applying the month increment/decrement as specified by 'incr' parameter.
 'incr' will normally have 1/-1 to navigate thru the months.
 */
 var ret_arr = new Array();
 
 if (incr == -1) {
  // B A C K W A R D
  if (p_Month == 0) {
   ret_arr[0] = 11;
   ret_arr[1] = parseInt(p_Year) - 1;
  }
  else {
   ret_arr[0] = parseInt(p_Month) - 1;
   ret_arr[1] = parseInt(p_Year);
  }
 } else if (incr == 1) {
  // F O R W A R D
  if (p_Month == 11) {
   ret_arr[0] = 0;
   ret_arr[1] = parseInt(p_Year) + 1;
  }
  else {
   ret_arr[0] = parseInt(p_Month) + 1;
   ret_arr[1] = parseInt(p_Year);
  }
 }
 
 return ret_arr;
}

function Calendar_print() {
 ggWinCal.print();
}

function Calendar_calc_month_year(p_Month, p_Year, incr) {
 /*
 Will return an 1-D array with 1st element being the calculated month
 and second being the calculated year
 after applying the month increment/decrement as specified by 'incr' parameter.
 'incr' will normally have 1/-1 to navigate thru the months.
 */
 var ret_arr = new Array();
 
 if (incr == -1) {
  // B A C K W A R D
  if (p_Month == 0) {
   ret_arr[0] = 11;
   ret_arr[1] = parseInt(p_Year) - 1;
  }
  else {
   ret_arr[0] = parseInt(p_Month) - 1;
   ret_arr[1] = parseInt(p_Year);
  }
 } else if (incr == 1) {
  // F O R W A R D
  if (p_Month == 11) {
   ret_arr[0] = 0;
   ret_arr[1] = parseInt(p_Year) + 1;
  }
  else {
   ret_arr[0] = parseInt(p_Month) + 1;
   ret_arr[1] = parseInt(p_Year);
  }
 }
 
 return ret_arr;
}

// This is for compatibility with Navigator 3, we have to create and discard one object before the prototype object exists.
new Calendar();

Calendar.prototype.getMonthlyCalendarCode = function() {
 var vCode = "";
 var vHeader_Code = "";
 var vData_Code = "";
 
 // Begin Table Drawing code here..
 vCode = vCode + "<TABLE BORDER=1 BGCOLOR=\"" + this.gBGColor + "\">";
 
 vHeader_Code = this.cal_header();
 vData_Code = this.cal_data();
 vCode = vCode + vHeader_Code + vData_Code;
 
 vCode = vCode + "</TABLE>";
 
 return vCode;
}

Calendar.prototype.show = function() {
 var vCode = "";
 
 this.gWinCal.document.open();

 // Setup the page...
 this.wwrite("<html>");
 this.wwrite("<head><title>Calendar</title>");
 this.wwrite("</head>");

 this.wwrite("<body " +
  "link=\"" + this.gLinkColor + "\" " +
  "vlink=\"" + this.gLinkColor + "\" " +
  "alink=\"" + this.gLinkColor + "\" " +
  "text=\"" + this.gTextColor + "\">");
 this.wwriteA("<FONT FACE='" + fontface + "' SIZE=2><B>");
 this.wwriteA(this.gMonthName + " " + this.gYear);
 this.wwriteA("</B><BR>");

 // Show navigation buttons
 var prevMMYYYY = Calendar.calc_month_year(this.gMonth, this.gYear, -1);
 var prevMM = prevMMYYYY[0];
 var prevYYYY = prevMMYYYY[1];

 var nextMMYYYY = Calendar.calc_month_year(this.gMonth, this.gYear, 1);
 var nextMM = nextMMYYYY[0];
 var nextYYYY = nextMMYYYY[1];
 
 this.wwrite("<TABLE WIDTH='100%' BORDER=1 CELLSPACING=0 CELLPADDING=0 BGCOLOR='#e0e0e0'><TR><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', '" + this.gMonth + "', '" + (parseInt(this.gYear)-1) + "', '" + this.gFormat + "'" +
  ");" +
  "\"><<<\/A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', '" + prevMM + "', '" + prevYYYY + "', '" + this.gFormat + "'" +
  ");" +
  "\"><<\/A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"javascript:window.print();\">Print</A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', '" + nextMM + "', '" + nextYYYY + "', '" + this.gFormat + "'" +
  ");" +
  "\">><\/A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', '" + this.gMonth + "', '" + (parseInt(this.gYear)+1) + "', '" + this.gFormat + "'" +
  ");" +
  "\">>><\/A>]</TD></TR></TABLE><BR>");

 // Get the complete calendar code for the month..
 vCode = this.getMonthlyCalendarCode();
 this.wwrite(vCode);

 this.wwrite("</font></body></html>");
 this.gWinCal.document.close();
}

Calendar.prototype.showY = function() {
 var vCode = "";
 var i;
 var vr, vc, vx, vy;  // Row, Column, X-coord, Y-coord
 var vxf = 285;   // X-Factor
 var vyf = 200;   // Y-Factor
 var vxm = 10;   // X-margin
 var vym;    // Y-margin
 if (isIE) vym = 75;
 else if (isNav) vym = 25;
 
 this.gWinCal.document.open();

 this.wwrite("<html>");
 this.wwrite("<head><title>Calendar</title>");
 this.wwrite("<style type='text/css'>\n<!--");
 for (i=0; i<12; i++) {
  vc = i % 3;
  if (i>=0 && i<= 2) vr = 0;
  if (i>=3 && i<= 5) vr = 1;
  if (i>=6 && i<= 8) vr = 2;
  if (i>=9 && i<= 11) vr = 3;
  
  vx = parseInt(vxf * vc) + vxm;
  vy = parseInt(vyf * vr) + vym;

  this.wwrite(".lclass" + i + " {position:absolute;top:" + vy + ";left:" + vx + ";}");
 }
 this.wwrite("-->\n</style>");
 this.wwrite("</head>");

 this.wwrite("<body " +
  "link=\"" + this.gLinkColor + "\" " +
  "vlink=\"" + this.gLinkColor + "\" " +
  "alink=\"" + this.gLinkColor + "\" " +
  "text=\"" + this.gTextColor + "\">");
 this.wwrite("<FONT FACE='" + fontface + "' SIZE=2><B>");
 this.wwrite("Year : " + this.gYear);
 this.wwrite("</B><BR>");

 // Show navigation buttons
 var prevYYYY = parseInt(this.gYear) - 1;
 var nextYYYY = parseInt(this.gYear) + 1;
 
 this.wwrite("<TABLE WIDTH='100%' BORDER=1 CELLSPACING=0 CELLPADDING=0 BGCOLOR='#e0e0e0'><TR><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', null, '" + prevYYYY + "', '" + this.gFormat + "'" +
  ");" +
  "\" alt='Prev Year'><<<\/A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"javascript:window.print();\">Print</A>]</TD><TD ALIGN=center>");
 this.wwrite("[<A HREF=\"" +
  "javascript:window.opener.Build(" +
  "'" + this.gReturnItem + "', null, '" + nextYYYY + "', '" + this.gFormat + "'" +
  ");" +
  "\">>><\/A>]</TD></TR></TABLE><BR>");

 // Get the complete calendar code for each month..
 var j;
 for (i=11; i>=0; i--) {
  if (isIE)
   this.wwrite("<DIV ID=\"layer" + i + "\" CLASS=\"lclass" + i + "\">");
  else if (isNav)
   this.wwrite("<LAYER ID=\"layer" + i + "\" CLASS=\"lclass" + i + "\">");

  this.gMonth = i;
  this.gMonthName = Calendar.get_month(this.gMonth);
  vCode = this.getMonthlyCalendarCode();
  this.wwrite(this.gMonthName + "/" + this.gYear + "<BR>");
  this.wwrite(vCode);

  if (isIE)
   this.wwrite("</DIV>");
  else if (isNav)
   this.wwrite("</LAYER>");
 }

 this.wwrite("</font><BR></body></html>");
 this.gWinCal.document.close();
}

Calendar.prototype.wwrite = function(wtext) {
 this.gWinCal.document.writeln(wtext);
}

Calendar.prototype.wwriteA = function(wtext) {
 this.gWinCal.document.write(wtext);
}

Calendar.prototype.cal_header = function() {
 var vCode = "";
 
 vCode = vCode + "<TR>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Sun</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Mon</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Tue</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Wed</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Thu</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='14%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Fri</B></FONT></TD>";
 vCode = vCode + "<TD WIDTH='16%'><FONT SIZE='2' FACE='" + fontface + "' COLOR='" + this.gHeaderColor + "'><B>Sat</B></FONT></TD>";
 vCode = vCode + "</TR>";
 
 return vCode;
}

Calendar.prototype.cal_data = function() {
 var vDate = new Date();
 vDate.setDate(1);
 vDate.setMonth(this.gMonth);
 vDate.setFullYear(this.gYear);

 var vFirstDay=vDate.getDay();
 var vDay=1;
 var vLastDay=Calendar.get_daysofmonth(this.gMonth, this.gYear);
 var vOnLastDay=0;
 var vCode = "";

 /*
 Get day for the 1st of the requested month/year..
 Place as many blank cells before the 1st day of the month as necessary.
 */

 vCode = vCode + "<TR>";
 for (i=0; i<vFirstDay; i++) {
  vCode = vCode + "<TD WIDTH='14%'" + this.write_weekend_string(i) + "><FONT SIZE='2' FACE='" + fontface + "'> </FONT></TD>";
 }

 // Write rest of the 1st week
 for (j=vFirstDay; j<7; j++) {
  vCode = vCode + "<TD WIDTH='14%'" + this.write_weekend_string(j) + "><FONT SIZE='2' FACE='" + fontface + "'>" +
   "<A HREF='#' " +
    "onClick=\"self.opener.document." + this.gReturnItem + ".value='" +
    this.format_data(vDay) +
    "';window.close();\">" +
    this.format_day(vDay) +
   "</A>" +
   "</FONT></TD>";
  vDay=vDay + 1;
 }
 vCode = vCode + "</TR>";

 // Write the rest of the weeks
 for (k=2; k<7; k++) {
  vCode = vCode + "<TR>";

  for (j=0; j<7; j++) {
   vCode = vCode + "<TD WIDTH='14%'" + this.write_weekend_string(j) + "><FONT SIZE='2' FACE='" + fontface + "'>" +
    "<A HREF='#' " +
     "onClick=\"self.opener.document." + this.gReturnItem + ".value='" +
     this.format_data(vDay) +
     "';window.close();\">" +
    this.format_day(vDay) +
    "</A>" +
    "</FONT></TD>";
   vDay=vDay + 1;

   if (vDay > vLastDay) {
    vOnLastDay = 1;
    break;
   }
  }

  if (j == 6)
   vCode = vCode + "</TR>";
  if (vOnLastDay == 1)
   break;
 }
 
 // Fill up the rest of last week with proper blanks, so that we get proper square blocks
 for (m=1; m<(7-j); m++) {
  if (this.gYearly)
   vCode = vCode + "<TD WIDTH='14%'" + this.write_weekend_string(j+m) +
   "><FONT SIZE='2' FACE='" + fontface + "' COLOR='gray'> </FONT></TD>";
  else
   vCode = vCode + "<TD WIDTH='14%'" + this.write_weekend_string(j+m) +
   "><FONT SIZE='2' FACE='" + fontface + "' COLOR='gray'>" + m + "</FONT></TD>";
 }
 
 return vCode;
}

Calendar.prototype.format_day = function(vday) {
 var vNowDay = gNow.getDate();
 var vNowMonth = gNow.getMonth();
 var vNowYear = gNow.getFullYear();

 if (vday == vNowDay && this.gMonth == vNowMonth && this.gYear == vNowYear)
  return ("<FONT COLOR=\"RED\"><B>" + vday + "</B></FONT>");
 else
  return (vday);
}

Calendar.prototype.write_weekend_string = function(vday) {
 var i;

 // Return special formatting for the weekend day.
 for (i=0; i<weekend.length; i++) {
  if (vday == weekend[i])
   return (" BGCOLOR=\"" + weekendColor + "\"");
 }
 
 return "";
}

Calendar.prototype.format_data = function(p_day) {
 var vData;
 var vMonth = 1 + this.gMonth;
 vMonth = (vMonth.toString().length < 2) ? "0" + vMonth : vMonth;
 var vMon = Calendar.get_month(this.gMonth).substr(0,3).toUpperCase();
 var vFMon = Calendar.get_month(this.gMonth).toUpperCase();
 var vY4 = new String(this.gYear);
 var vY2 = new String(this.gYear.substr(2,2));
 var vDD = (p_day.toString().length < 2) ? "0" + p_day : p_day;

 switch (this.gFormat) {
  case "MM\/DD\/YYYY" :
   vData = vMonth + "\/" + vDD + "\/" + vY4;
   break;
  case "MM\/DD\/YY" :
   vData = vMonth + "\/" + vDD + "\/" + vY2;
   break;
  case "MM-DD-YYYY" :
   vData = vMonth + "-" + vDD + "-" + vY4;
   break;
  case "MM-DD-YY" :
   vData = vMonth + "-" + vDD + "-" + vY2;
   break;

  case "DD\/MON\/YYYY" :
   vData = vDD + "\/" + vMon + "\/" + vY4;
   break;
  case "DD\/MON\/YY" :
   vData = vDD + "\/" + vMon + "\/" + vY2;
   break;
  case "DD-MON-YYYY" :
   vData = vDD + "-" + vMon + "-" + vY4;
   break;
  case "DD-MON-YY" :
   vData = vDD + "-" + vMon + "-" + vY2;
   break;

  case "DD\/MONTH\/YYYY" :
   vData = vDD + "\/" + vFMon + "\/" + vY4;
   break;
  case "DD\/MONTH\/YY" :
   vData = vDD + "\/" + vFMon + "\/" + vY2;
   break;
  case "DD-MONTH-YYYY" :
   vData = vDD + "-" + vFMon + "-" + vY4;
   break;
  case "DD-MONTH-YY" :
   vData = vDD + "-" + vFMon + "-" + vY2;
   break;

  case "DD\/MM\/YYYY" :
   vData = vDD + "\/" + vMonth + "\/" + vY4;
   break;
  case "DD\/MM\/YY" :
   vData = vDD + "\/" + vMonth + "\/" + vY2;
   break;
  case "DD-MM-YYYY" :
   vData = vDD + "-" + vMonth + "-" + vY4;
   break;
  case "DD-MM-YY" :
   vData = vDD + "-" + vMonth + "-" + vY2;
   break;

  default :
   vData = vMonth + "\/" + vDD + "\/" + vY4;
 }

 return vData;
}

function Build(p_item, p_month, p_year, p_format) {
 var p_WinCal = ggWinCal;
 gCal = new Calendar(p_item, p_WinCal, p_month, p_year, p_format);

 // Customize your Calendar here..
 gCal.gBGColor="white";
 gCal.gLinkColor="black";
 gCal.gTextColor="black";
 gCal.gHeaderColor="darkgreen";

 // Choose appropriate show function
 if (gCal.gYearly) gCal.showY();
 else gCal.show();
}

function show_calendar() {
 /*
  p_month : 0-11 for Jan-Dec; 12 for All Months.
  p_year : 4-digit year
  p_format: Date format (mm/dd/yyyy, dd/mm/yy, ...)
  p_item : Return Item.
 */

 p_item = arguments[0];
 if (arguments[1] == null)
  p_month = new String(gNow.getMonth());
 else
  p_month = arguments[1];
 if (arguments[2] == "" || arguments[2] == null)
  p_year = new String(gNow.getFullYear().toString());
 else
  p_year = arguments[2];
 if (arguments[3] == null)
  p_format = "MM/DD/YYYY";
 else
  p_format = arguments[3];

 vWinCal = window.open("", "Calendar",
  "width=250,height=250,status=no,resizable=no,top=200,left=200");
 vWinCal.opener = self;
 ggWinCal = vWinCal;

 Build(p_item, p_month, p_year, p_format);
}
/*
Yearly Calendar Code Starts here
*/
function show_yearly_calendar(p_item, p_year, p_format) {
 // Load the defaults..
 if (p_year == null || p_year == "")
  p_year = new String(gNow.getFullYear().toString());
 if (p_format == null || p_format == "")
  p_format = "MM/DD/YYYY";

 var vWinCal = window.open("", "Calendar", "scrollbars=yes");
 vWinCal.opener = self;
 ggWinCal = vWinCal;
Build(p_item, null, p_year, p_format);
}
<!-- STEP TWO: Paste this code into the HEAD of your HTML document  -->
</script>
<script language="JavaScript" src="date-picker.js"></script>








</head>

<body OnLoad="placeFocus();">
<?php
include "header.php";
?>
<!-- END header -->
<script type="text/javascript">

function mischandler(){
return false;
}

function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
var isCtrl = false;
    document.onkeyup=function(e)
    {
    if(e.which == 17)
    isCtrl=false;
    }

    /*document.onkeydown=function(e)
    {
    if(e.which == 17)
    isCtrl=true;
    if((e.which == 85) || (e.which == 67) && isCtrl == true)
    {
    // alert(‘Keyboard shortcuts are cool!’);
    return false;
    }
    }*/

</script> 

<div id="container">
   


<!-- tab panes --><!-- END prod wrapper -->

    <div style="clear:both"></div>
  <div style="clear:both"></div>
        <div class="box_highlight" style="margin-top:40px">
          <h2 style="color:#32015A" align="center" >Register yourself today!!!</h2></div>
    
    
    <div class="one-half">
    
    <div class="heading_bg">
<h2 style="color:#32015A">Pre Qualification Criteria</h2></div>
    
        <blockquote>
          <p style="font-family:corbel;  color:#333"; font-size:15px; align="justify">
          <b style="font-size:20px">Pre Qualification Criteria (Male):</b><br>

<b>a)</b>	Applicant must be highly educated individual. Our focus will be on professionals such as doctors, layers, engineers, IT professionals and business owners.<br>
<b>b)</b>	Applicant must be earning more than USD 60000 or equivalent per year.<br>
<b>c)</b>	The applicant must be from a cultured family with good values and must be able to demonstrate that in a clear and transparent manner.<br>
<b>d)</b>	The applicant should be either a vegetarian or ready to switch to a vegetarian diet provided he is convinced of its health and other benefits.<br>
<b>e)</b>	The applicant must not be a smoker or willing to quit it immediately and should not be more than a social drinker if foreign resident.  <br>
<b>f)</b>	The applicant must be available meaning he is not in a physical relationship currently and in past six months.<br>
<b>g)</b>	The applicant must be presentable, physically fit, healthy and with a clean non criminal background.<br>
<b>h)</b>	The applicant must be looking for a long term relationship only.<br>
<b>i)</b>	The applicant must not be over 50<br>
<b>j)</b>	The applicant must qualify for our overall assessment for further processing.<br><br>

<b style="font-size:20px">Pre qualification criteria (Female):</b><br>

<b>a)</b>	Applicant must be highly educated and cultured individual. <br>
<b>b)</b>	The applicant must be from a cultured family with good values and must be able to demonstrate that in a clear and transparent manner.<br>
<b>c)</b>	The applicant should be either a vegetarian or ready to switch to a vegetarian diet provided she is convinced of its health and other benefits.<br>
<b>d)</b>	The applicant must be a non smoker and no more than a social drinker if foreign resident.  <br>
<b>e)</b>	The applicant must be available meaning she is not in a physical relationship currently and in past six months.<br>
<b>f)</b>	The applicant must be presentable, physically fit and healthy with a clean non-criminal background.<br>
<b>g)</b>	The applicant must be looking for a long term relationship only.<br>
<b>h)</b>	The applicant must not be over 45.<br>
<b>i)</b>	The applicant must qualify for our overall assessment for further processing.<br>

          </p>
          
          </p>
      </blockquote>
    
    
    
   <div class="heading_bg"><h2></h2></div>
    
    <!--<iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="465" height="262" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
    
    
    </div>
    
    
    <div class="one-half last">
    
         <div class="heading_bg">
           <h2 style="color:#32015A">Fill Up &amp; Get Married!!!</h2></div>

         <!-- Edit process_form.php to make the form work with your e-mail address. If you need to create more forms go to www.csstemplateheaven.com/tools/form_builder 
         IMPORTANT! Change action="#" to action="contact_form/process_form.php"
         --><br>
         <table width="612" border="1" style="font-family: corbel; font-size: 15px; color: #FFF" ; >
         <form name="yourform" method="post" action="ChoosePlan.php"  onSubmit="return valid(this);">
  <tr>
    <td>Email:</td>
    <td ><input name="email" value="" type="email" placeholder="Email" onFocus="nextfield ='pass';" id="email" onBlur="sendRequest();">      <a id="fry" > </a>
    
    </td>
    </tr>
    <tr>
  <td>Password:</td>
    <td ><input name="pass" value="" type="password" placeholder="Password" onFocus="nextfield ='profilefor';" ></td> 
     </tr>
    <tr>
<td >Profile for:</td>   
<td><select name="profilefor"  value="" onFocus="nextfield ='fname';" ><option>Select</option>
<option value="Self" label="Self">Self</option>
<option value="son" label="Son">Son</option>
<option value="Daughter" label="Daughter">Daughter</option>
<option value="Brother" label="Brother">Brother</option>
<option value="Sister" label="Sister">Sister</option>
<option value="Friend" label="Friend">Friend</option>
<option value="Relative" label="Relative">Relative</option>
</select> </td>  </tr>
<tr>
<td>First Name:</td>
<td><input type="text" value="" name="fname" placeholder="First Name" onFocus="nextfield ='lname';"/></td></tr>
<tr>
<td>Last Name:</td>
<td><input type="text" value="" name="lname" placeholder="Last Name" onFocus="nextfield ='genn';"/></td>
</tr>
<tr>
<td>Gender:</td><td><input name="genn" type="radio" value="male" onFocus="nextfield ='genn';">Male <input name="genn" type="radio" value="female" onFocus="nextfield ='dob';" >Female </td></tr>
<tr>
<td>Date of Birth:</td><td> <input type="text" value="" name="dob" id="ExpiryDate" placeholder="MM/DD/YYYY" onFocus="nextfield ='religion';" /><a href="javascript:show_calendar('yourform.dob');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="images.jpg" width=24 height=22 border=0></a>




</td></tr>
 <td >Religion:</td>   
<td> <select name="religion" value="" onFocus="nextfield ='mothertongue';"><option>Select</option>
    <option value="Hindu" label="Hindu">Hindu</option>
    <option value="Muslim" label="Muslim">Muslim</option>
    <option value="Christian" label="Christian">Christian</option>
    <option value="Sikh" label="Sikh">Sikh</option>
    <option value="Parsi" label="Parsi">Parsi</option>
    <option value="Jain" label="Jain">Jain</option>
    <option value="Buddhist" label="Buddhist">Buddhist</option>
    <option value="Jewish" label="Jewish">Jewish</option>
    <option value="No Religion" label="No Religion">No Religion</option>
    <option value="Spiritual" label="Spiritual">Spiritual</option>
    <option value="Other" label="Other">Other</option>
</select> </td> 
     </tr>
     <td >Mother Tongue:</td>   
<td> <select name="mothertongue" value="" onFocus="nextfield ='livingin';"><option>Select</option>
<option value="Assamese" >Assamese</option><option value="Bengali" >Bengali</option><option value="English" >English</option><option value="Gujarati" >Gujarati</option><option value="Hindi" >Hindi</option><option value="Kannada" >Kannada</option><option value="Konkani" >Konkani</option><option value="Malayalam" >Malayalam</option><option value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Oriya" >Oriya</option><option value="Punjabi" >Punjabi</option><option value="Sindhi" >Sindhi</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option value="Urdu" >Urdu</option><optgroup id='mother_tongue-optgroup-All Mother Tongues' label='All Mother Tongues'>All Mother Tongues</optgroup><option value="Aka" >Aka</option><option value="Arabic" >Arabic</option><option value="Assamese" >Assamese</option><option value="Awadhi" >Awadhi</option><option value="Bengali" >Bengali</option><option value="Bhojpuri" >Bhojpuri</option><option value="Chattisgarhi" >Chattisgarhi</option><option value="Coorgi" >Coorgi</option><option value="Dogri" >Dogri</option><option value="English" >English</option><option value="French" >French</option><option value="Garhwali" >Garhwali</option><option value="Gujarati" >Gujarati</option><option value="Haryanavi" >Haryanavi</option><option value="Himachali/Pahari" >Himachali/Pahari</option><option value="Hindi" >Hindi</option><option value="Hindko" >Hindko</option><option value="Kannada" >Kannada</option><option value="Kashmiri" >Kashmiri</option><option value="Konkani" >Konkani</option><option value="Kumaoni" >Kumaoni</option><option value="Kutchi" >Kutchi</option><option value="Magahi" >Magahi</option><option value="Maithili" >Maithili</option><option value="Malay" >Malay</option><option value="Malayalam" >Malayalam</option><option value="Manipuri" >Manipuri</option><option value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Nepali" >Nepali</option><option value="Oriya" >Oriya</option><option value="Pashto" >Pashto</option><option value="Persian" >Persian</option><option value="Punjabi" >Punjabi</option><option value="Rajasthani" >Rajasthani</option><option value="Russian" >Russian</option><option value="Sindhi" >Sindhi</option><option value="Sinhala" >Sinhala</option><option value="Spanish" >Spanish</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option value="Tulu" >Tulu</option><option value="Urdu" >Urdu</option></select></td></tr>

<tr><td>Living In:</td>
<td> <select name="livingin" value="" onFocus="nextfield ='locationn';"><option>Select</option>
<option value="USA" >USA</option><option value="United Kingdom" >UK</option><option value="United Arab Emirates" >UAE</option><option value="Canada" >Canada</option><option value="Australia" >Australia</option><option value="New Zealand" >New Zealand</option><option value="Pakistan" >Pakistan</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Kuwait" >Kuwait</option><option value="South Africa" >South Africa</option><optgroup id='countryofresidence-optgroup-All Countries' label='All Countries'>All Countries</optgroup><option value="Afghanistan" >Afghanistan</option><option value="Australia" >Australia</option><option value="Austria" >Austria</option><option value="Bahrain" >Bahrain</option><option value="Bangladesh" >Bangladesh</option><option value="Belgium" >Belgium</option><option value="Botswana" >Botswana</option><option value="Brunei" >Brunei</option><option value="Canada" >Canada</option><option value="Chile" >Chile</option><option value="China" >China</option><option value="Cyprus" >Cyprus</option><option value="Denmark" >Denmark</option><option value="Dominican Republic" >Dominican Republic</option><option value="Fiji Islands" >Fiji Islands</option><option value="Finland" >Finland</option><option value="France" >France</option><option value="Germany" >Germany</option><option value="Greece" >Greece</option><option value="Guyana" >Guyana</option><option value="Hong Kong SAR" >Hong Kong SAR</option><option value="Hungary" >Hungary</option><option value="India" >India</option><option value="Indonesia" >Indonesia</option><option value="Iran" >Iran</option><option value="Ireland" >Ireland</option><option value="Israel" >Israel</option><option value="Italy" >Italy</option><option value="Jamaica" >Jamaica</option><option value="Japan" >Japan</option><option value="Kenya" >Kenya</option><option value="Kuwait" >Kuwait</option><option value="Malaysia" >Malaysia</option><option value="Maldives" >Maldives</option><option value="Mauritius" >Mauritius</option><option value="Mexico" >Mexico</option><option value="Nepal" >Nepal</option><option value="Netherlands" >Netherlands</option><option value="Netherlands Antilles" >Netherlands Antilles</option><option value="New Zealand" >New Zealand</option><option value="Norway" >Norway</option><option value="Oman" >Oman</option><option value="Pakistan" >Pakistan</option><option value="Philippines" >Philippines</option><option value="Poland" >Poland</option><option value="Qatar" >Qatar</option><option value="Russia" >Russia</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Singapore" >Singapore</option><option value="South Africa" >South Africa</option><option value="Spain" >Spain</option><option value="Sri Lanka" >Sri Lanka</option><option value="Sweden" >Sweden</option><option value="Switzerland" >Switzerland</option><option value="Tanzania" >Tanzania</option><option value="Thailand" >Thailand</option><option value="Trinidad and Tobago" >Trinidad and Tobago</option><option value="USA" >USA</option><option value="United Arab Emirates" >UAE</option><option value="United Kingdom" >UK</option></select></td></tr>
<tr><td></td><td>



<input name="locationn" type="radio" value="nri" onclic="fnchecked(this.checked);" onclick = "showMessage(1)">NRI<input name="locationn" type="radio" value="indian" onFocus="nextfield ='sques';"  onclick = "showMessage(2)">INDIAN</td></tr>
<u> <tr><td></td><td>
<!--<div id="divcheck" style="display:none;">
Green Card Holder<input name="nriopt" type="radio" value="green">

Job Permit<input name="nriopt" type="radio" value="job_permit">

Own Business<input name="nriopt" type="radio" value="own_business">

</div>-->
<div id="fine" style="display:none">
Green Card Holder<input name="nriopt" type="radio" value="green">
<br>
Job Permit<input name="nriopt" type="radio" value="job_permit">
<br>
Own Business<input name="nriopt" type="radio" value="own_business">


</div>
<div id="fill" style="display:none"></div>


</td></tr></u>
<script>
$("button").select(function () {
$("u").show("slow");
});
</script>

<!--<input type="checkbox" name="fldcheckbox" id="fldcheckbox" onclick="fnchecked(this.checked);"/>-->




<tr>
<td>Enter Your Security question:</td><td><input type="text" value="" name="sques" id="" placeholder="QUESTION" onFocus="nextfield ='ans';" /></td></tr>


<tr>
<td>Enter Your Answer:</td><td><input type="text" value="" name="ans" id="" placeholder="ANSWER" onFocus="nextfield ='done';" />
</td></tr>



<tr><td></td><td> <input type="submit" value="Submit" class="button success" onclick="return isDate();"  onMouseMov="return checkFields();" /></td></tr>


</form>

  
</table>
<script type = "text/javascript">
function showMessage(which) {
if (which == 1) {
document.getElementById("fine").style.display = "block";
document.getElementById("fill").style.display = "none";
}
else {
document.getElementById("fine").style.display = "none";
document.getElementById("fill").style.display = "block";
}
}
</script>
    
    
    </div>


    <div style="clear:both; height: 40px"></div>
    </div>

    <!-- END container -->


   <?php
    include "footer.php";
	
	?>

</body>
</html>