<div style="font-family:Helvetica; font-size:14px; color:#000000; font-style:normal;">
<form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()">
	<table>
  	<tr>
    <td>Title</td>
    <td colspan="2"><select name="title">
      <option selected="selected">Mr</option>
      <option>Mrs
      </select>
    </td>
  </tr><tr>
    <td>First Name *</td>
    <td colspan="2"><input name="fname" type="text" /></td>
  </tr><tr>
    <td>Last Name *</td>
    <td colspan="2"><input name="lname" type="text" /></td>
  </tr><tr>
    <td>Your E-mail *</td>
    <td colspan="2"><input type="text" name="mail" /></td>
  </tr><tr>
    <td>Address</td>
    <td colspan="2"><input name="address" type="text" /></td>
  </tr><tr>
    <td>City</td>
    <td colspan="2"><input name="city" type="text" /></td>
  </tr><tr>
    <td>Zip Code</td>
    <td colspan="2"><input type="text" name="zip" /></td>
  </tr><tr>
    <td>Phone</td>
    <td colspan="2"><input name="phone" type="text" onkeypress="return numere(event)" onkeyup="return limitarelungime(this, 11)" /></td>
  </tr><tr>
    <td>Message Priority </td>
    <td colspan="2"><select name="mpriority">
      <option selected="selected">Normal</option>
      <option>Low</option>
	  <option>High</option>
	  <option>Urgent</option>
   		</select>
	</td>
  </tr><tr>
    <td>Subject *</td>
    <td colspan="2"><input name="subject" type="text" /></td>
  </tr><tr>
    <td>Message *</td>
    <td colspan="2"><textarea name="message"></textarea></td>
  </tr><tr>
       <td><p>Security Code*<br/>
           </p>
         </td>
       <td><input id="chapcha_code"  size="10" name="chapcha_code" type="text" /> </td>        
	   <td><img src="captcha.php" /></td>
     </tr><tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><input type="reset" name="reset" value="Reset"/></td>
    <td align="right"><input type="submit" name="Submit" value="Submit"></td><td align="right"><a href="http://www.scriptgenerator.net/html-php-contact-form-mailer-generator/" title="Valid Contact Form"><img src="http://www.scriptgenerator.net/generator/html-php-contact-form-mailer-generator_files/validform.jpg" alt="HTML PHP contact form generator" width="20" height="20" /></a></td>
  </tr>
</table>
</form>
</div>
<script type="text/javascript">
	//phone number velidation
      function numere(e){
      var unicode=e.charCode? e.charCode : e.keyCode
      if (unicode!=8){ 
      if (unicode<48||unicode>57)
      return false 
      }
      }
	function limitarelungime(obj, length){
        var lungime=length
        if (obj.value.length>lungime)
        obj.value=obj.value.substring(0, lungime)
      }
	
	//email form validation

	function everif(str) {

		var at="@"
		var punct="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var lpunct=str.indexOf(punct)
		if (str.indexOf(at)==-1){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Valid email must be entered")
		   return false
		}

		if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
		    alert("Valid email must be entered")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
		    alert("Valid email must be entered")
		    return false
		 }

		 if (str.indexOf(punct,(lat+2))==-1){
		    alert("Valid email must be entered")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Valid email must be entered")
		    return false
		 }

 		 return true					
	}

	function evalid(){
	var emailID=document.contact_form.mail
	
	if (everif(emailID.value)==false){
		emailID.focus()
		return false
	}
	
	//empty field validation
	
	var fname=document.contact_form.fname
	if ((fname.value==null)||(fname.value=="")){
        alert("Fields marqued with * must be entered")
        fname.focus()
        return false
        }
	
	var lname=document.contact_form.lname		
	if ((lname.value==null)||(lname.value=="")){
        alert("Fields marqued with * must be entered")
        lname.focus()
        return false
        }
	
	var subject=document.contact_form.subject	
	if ((subject.value==null)||(subject.value=="")){
        alert("Fields marqued with * must be entered")
        subject.focus()
        return false
        }
 
	var message=document.contact_form.message	
	if ((message.value==null)||(message.value=="")){
        alert("Fields marqued with * must be entered")
        message.focus()
        return false
        }
			
	return true
 }
 </script>