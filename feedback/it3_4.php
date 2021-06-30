<?php
  session_start();
  if(isset($_SESSION['fname'])){
	 
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IT-3Year</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#next").click(function(){
					
					var r1 =$("input[name='mal']:checked").val();
					var r2 =$("input[name='jag']:checked").val();
					var r3 =$("input[name='sud']:checked").val();
					var r4 =$("input[name='dei']:checked").val();
					var r5 =$("input[name='san']:checked").val();
					var r6 =$("input[name='udh']:checked").val();
                    $.ajax({
                        type:"POST",
						url:"it3_4db.php",
						data: "r1=" + r1 + "&r2=" + r2 + "&r3=" + r3 + "&r4=" + r4 + "&r5=" + r5 + "&r6=" + r6,   
                        success: function(html){
                            if(html=='true'){
                                $("#add_err2").html('<div class="alert alert-success"><storng>Done</strong></div>');
								window.location.href="it3_5.php";
							}else{
                                $("#add_err2").html('<div class="alert alert-danger"><storng>Error </strong>Processing request. please try again</div>');  
                            }
                        },
                        beforeSend:function(){
                            $("#add-err2").html("Loading...");
                        }
                    });
                    return false;
                });
            });
		</script>
    </head>
    <body>
   <center>
   <table><br>
   <tr><td rowspan="2"><img src="download.jpg"/></td>
   <td align="center"><font face="algerian" size="10"> Velammal Institute Of Technology</font> <br><font color="red" align="center">Affliated to Anna University,Approved by AICTE,New Delhi <br> "Velammal Knowledge Park",Chennai-Kolkata Highway,Panchetti,Thiruvallur-601204.</font></center></td></tr></table>
   

		
	  <br><br><br>
			
			</table><label align="left"><b><font face="bradley hand itc" size="7">  Q4.HELPING STUDENTS IN PROVIDING STUDY MATERIALS(LECTURE NOTES,QUESTION BANKS WITH ANSWER ETC)	</label></font></b></br>

<table class="table table-striped table-hover" align="center" color="white" BORDER="3" cellpadding="5">
<br><tr color="red"><td align="center"><label><b><b>FACULTY name</label></td></b>
<td align="center"><B>SUBJECT name</b></td>
<td colspan="5" align="center"><B>RATING</b></input></td>
</tr>
<br><tr color="red"><td><label><font color="purple"  ><b><font size='5'><b>Mrs.Malar</label></td></b></font>
<td align="center"><font size='5'>Computational Intelligence</td></font>
<td><input type="radio" name="mal" value="5"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="mal" value="4"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="mal" value="3"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="mal" value="2"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="mal" value="1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>
</tr><tr ><font color="red">
<td><label><font color="purple"  ><font size='5'><b><b>Mr. Jagadish </label></td></font>
<td align="center"><font size='5'>BigData Analysis</td></font></font>

<td><input type="radio" name="jag" value="5"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="jag" value="4"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="jag" value="3"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="jag" value="2"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="jag" value="1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>
</tr><tr>
<td><label><font color="purple"  ><font size='5'><b><b>Mr. Sudharson</label></td></font>
<td align="center"><font size='5'>Computer Grapics</td></font>

<td><input type="radio" name="sud" value="5"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="sud" value="4"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="sud" value="3"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="sud" value="2"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="sud" value="1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>
</tr><tr>
<td><label><font color="purple"  ><b><font size='5'><b>Mr.Deivendran</label></td></font>
<td align="center"><font size='5'>Object Oriented Design And Analysis</TD></font>
<td><input type="radio" name="dei" value="5"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="dei" value="4"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="dei" value="3"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="dei" value="2"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="dei" value="1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>
</tr><tr>
<td><label><font color="purple"  ><b><font size='5'><b>Mrs. Sanmugapriya</label></td></font>
<td align="center"><font size='5'>Software Testing</td></font>

<td><input type="radio" name="san" value="5"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="san" value="4"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="san" value="3"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="san" value="2"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="san" value="1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>
</tr>
<tr>
<td><label><font color="purple"  ><b><font size='5'><b>Mr. Udaya sankar</label></td></font>
<td align="center"><font size='5'>Mobile Communication</td></font>

<td><input type="radio" name="udh" value="5" name="udh1"><font color="purple"  ><b>EXCELLENT</input></td>
<td><input type="radio" name="udh" value="4" name="udh1"><font color="purple"  ><b>VERY GOOD</input></td>
<td><input type="radio" name="udh" value="3" name="udh1"><font color="purple"  ><b>GOOD</input></td>
<td><input type="radio" name="udh" value="2" name="udh1"><font color="purple"  ><b>SATISFACTORY</input></td>
<td><input type="radio" name="udh" value="1" name="udh1"><font color="purple"  ><b>NEEDS TO IMPROVE</input><br></td>

</tr>
</table>
</br>

<input type="submit" id="next" value="NEXT" style="height:40px; width:100px; font-face:'Comic Sans MS'; font-size: larger; color: white; background-color:rgb(77, 144, 254); border: #808080" /> 
</form>
<div id="add_err2"></div>
</body>
</html>
<?php
  }else
  {
	  header("location:login.php");
  }
?>