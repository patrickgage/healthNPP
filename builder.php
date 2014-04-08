<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EXIT Health Privacy Notice Generator</title>

        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
        <link rel="stylesheet" href="css/hnpp.css">
        <link rel="stylesheet" href="css/builder.css">
        
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		
		<style>
			.error {color: #FF0000;}
			.pure-control-group label { width:14em !important; }
			#step1 label.error { float:right; }
		</style>
    </head>

<body>    

<div class="builder">
<p style="padding-top:10px;"><a href="index.php">I'm not ready to make my privacy notice yet, take me back!</a></p>
</div>

<div class="stretchcolor" style="padding: 5px 0 10px; ">
<div class="builder">
<h2>Create your Health Privacy Notice</h2>
<p>We will walk you through it in seven easy steps.</p>
</div>
</div>
    
<div class="builder">
<form id="buildform" method="POST" class="pure-form pure-form-aligned" action="built.php">
   <h3><span class="builder-step">1</span> To get started, are you representing a</h3>
   <fieldset>
   
    <div id="step1" class="pure-control-group" style="font-size:23px;">
   	  <input type="radio" name="type" id="type" value="provider" required />
      <label class="pure-radio" style="width:auto !important;">Provider</label>
	  <input type="radio" name="type" id="type" value="hplan" required />
      <label class="pure-radio" style="width:auto !important;">Health Plan</label>
    </div>
   </fieldset>
   
    <h3><span class="builder-step">2</span> Now let's get some basic information about your organization</h3>  
   
    <fieldset>
    <div class="pure-control-group">
		<label for="orgname">Organization Name</label>
		<input name="orgname" id="orgname" type="text" placeholder="ACME Health" required/>
	</div>
	
	<div class="pure-control-group">
		<label for="orgwebsite">Organization Website</label>
		<input name="orgwebsite" id="orgwebsite" type="text" value="http://" required/>
	</div>

	<p>And your organization's address:</p>
	
    <div class="pure-control-group">
		<label for="orgadd1">Address</label>
		<input name="orgadd1" id="orgadd1" type="text" value="" class="pure-input-1-2" required/>
	</div>

    <div class="pure-control-group">
		<label for="orgadd2">Address (cont.)</label>
		<input name="orgadd2" id="orgadd1" type="text" value="" class="pure-input-1-2">
	</div>
	
    <div class="pure-control-group">
        <label for="orgcity">City</label>
        <input name="orgcity" type="text" class="pure-input-1-2" required>
    </div>
    
    <div class="pure-control-group">
    <label for="orgstate">State</label>
	<select name="orgstate" class="pure-input-1-4">
    <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
    </select>
    </div>

    <div class="pure-control-group">        
        <label for="orgzip">Zip</label>
        <input name="orgzip" type="text" pattern="[0-9]*" class="pure-input-1-4" required>
    </div>
     
    </fieldset>  
      
    <h3><span class="builder-step">3</span> Now please provide us with the contact information of your organization's designated privacy official</h3>  

    <fieldset>
    <div class="pure-control-group">
		<label for="offname">Official's Name</label>
		<input name="offname" type="text" placeholder="" required>
	</div>
	
	<div class="pure-control-group">
		<label for="offphone">Official's Phone Number</label>
		<input name="offphone" pattern="[0-9]*" type="text" value="" required>
	</div>

	<div class="pure-control-group">
		<label for="offemail">Official's Email</label>
		<input name="offemail" id="offemail" type="email" value="" required />
	</div>	
    </fieldset>


    <h3><span class="builder-step">4</span> What is the effective date of this notice</h3>  
	<fieldset>
    <div class="pure-control-group">
		<label for="datenotice">Date of notice</label>
		<input name="datenotice" type="text" placeholder="November 1st, 2012" required>
	</div>

	</fieldset>


    <h3><span class="builder-step">5</span> We would like to gather links that we believe will be helpful to your consumers</h3>  
	<fieldset>

	<div class="pure-control-group">
		<label for="lmedrecord">To <strong>request</strong> their medical/health&nbsp;record</label>
		<input name="lmedrecord" type="text" placeholder="http://" class="pure-input-1-2">
	</div>
	
	<div class="pure-control-group">
		<label for="lcorrectrecord">To <strong>correct</strong> their medical/health&nbsp;record</label>
		<input name="lcorrectrecord" type="text" placeholder="http://" class="pure-input-1-2">
	</div>
	
	<div class="pure-control-group">
		<label for="llimitshare">To limit sharing of their information</label>
		<input name="llimitshare" type="text" placeholder="http://" class="pure-input-1-2">
	</div>
	
	<div class="pure-control-group">
		<label for="lsharedwho">To receive a list of parties their data has been shared with</label>
		<input name="lsharedwho" type="text" placeholder="http://" class="pure-input-1-2">
	</div>
	
	<div class="pure-control-group">
		<label for="lpapercopy">To request a paper copy of this privacy&nbsp;notice</label>
		<input name="lpapercopy" type="text" placeholder="http://" class="pure-input-1-2">
	</div>
		
	<div class="pure-control-group">
		<label for="lblue">Blue Button link</label>
		<input name="lblue" type="text" placeholder="http://" class="pure-input-1-2">
	</div>

	</fieldset>

	
    <h3><span class="builder-step">6</span> Some organizations have additional information they need to provide in their notice</h3>  

	<fieldset>
	
	<div class="bigtext">
	<h4>State or other laws that require greater limits:</h4>
	<p class="detail-side">The Privacy Rule requires you to describe any state or other laws that require greater limits on disclosures. For example, "We will never share any substance abuse treatment records without your written permission." If no laws with greater limits apply to your entity, no information needs to be added.</p>
	<textarea class="area" name="special-laws" rows="4" cols="37"></textarea>
	</div>

	<div class="bigtext">
	<h4>OCHA Joint Notice:</h4>
	<p class="detail-side">If your entity is part of an OHCA (organized health care arrangement) that has agreed to a joint notice, use this space to inform your patients of how you share information within the OHCA (such as for treatment, payment, and operations related to the OHCA). Also, describe the other entities covered by this notice and their service locations.</p>
	<textarea class="area" name="special-ocha" rows="4" cols="37"></textarea>
	</div>
		
	<div class="bigtext">
	<h4>Special notes:</h4>
	<p class="detail-side">Insert any special notes that apply to your entity's practices such as "we never market or sell personal information."</p>
	<textarea class="area" name="special-notes" rows="4" cols="37"></textarea>
	</div>
	
    </fieldset>

    <h3><span class="builder-step">7</span> We're all done! Let's generate your notice</h3>  

    <fieldset>
    <br />
    <button id="build-make" type="submit" class="pure-button pure-button-primary" style="font-size:23px !important; ">
    <strong>Generate our notice!</strong></button>
	</fieldset>

</form>
<script>
$("#buildform").validate({
   rules: {
     orgname: {
     	required: true,
     	minlength: 5
     },
     orgwebsite: {
     	minlength: 8,
     	url: true
     }, 
     orgadd1: { minlength: 5 },       
     orgcity: { minlength: 3 },     
     orgzip: {
     	digits: true,
     	minlength: 5,
     	maxlength: 5
     },
     offname: { minlength: 5 },       
     offphone: { minlength: 10 },
     offemail: {
     	minlength: 5,
     	email: true
     },       
     datenotice: { minlength: 4 },  
     lmedrecord: { url:true },                 
     lcorrectrecord: { url:true },                 
     llimitshare: { url:true },                 
     lsharedwho: { url:true },                 
     lpapercopy: { url:true },                 
     lblue: { url:true }                 
   }
 });
</script>
</div>
</body>
</html>