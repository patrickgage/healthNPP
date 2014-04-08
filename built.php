<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>We Built Your Privacy Notice</title>

        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">        
        <link rel="stylesheet" href="css/hnpp.css">
        <link rel="stylesheet" href="css/builder.css">
    </head>
    <body>
   
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// PHP data loading from the main form.
    $type  = $_REQUEST['type'];
    
    $orgname = $_REQUEST['orgname'];
    $orgwebsite = $_REQUEST['orgwebsite'];
    $orgadd1 = $_REQUEST['orgadd1'];
    $orgadd2 = $_REQUEST['orgadd2'];
    $orgcity = $_REQUEST['orgcity'];
    $orgstate = $_REQUEST['orgstate'];
    $orgzip = $_REQUEST['orgzip'];
    
    $offname = $_REQUEST['offname'];
    $offphone = $_REQUEST['offphone'];
    $offemail = $_REQUEST['offemail'];

	$datenotice = $_REQUEST['datenotice'];

    $lmedrecord = $_REQUEST['lmedrecord'];
    $lcorrectrecord = $_REQUEST['lcorrectrecord'];
    $llimitshare = $_REQUEST['llimitshare'];
    $lsharedwho = $_REQUEST['lsharedwho'];
    $lpapercopy = $_REQUEST['lpapercopy'];
    $lblue = $_REQUEST['lblue'];
  
    $specialnotes = $_REQUEST['special-notes'];
    $specialocha = $_REQUEST['special-ocha'];
    $speciallaws = $_REQUEST['special-laws'];
  
    // Beginning of file creation.
    
	$toFile = "";
	$toFile = file_get_contents("header-boiler.html");
	$toFile .= file_get_contents("style-boiler.html");
	$toFile .= "<title>".$orgname."</title>";
	$toFile .= "</head><body>";
	$toFile .= "<header>";
	$toFile .= "<div id='mainaddress'><address>".$orgadd1.
			   "<br />";
	if( $orgadd2 != "" ) {
		$toFile .= $orgadd2."<br />";
	}
	$toFile .= $orgcity.", ".$orgstate." ".$orgzip.
			   "</address><br /><h4>Privacy Official</h4><span class='privoff'>".$offname.
			   "</span><br /><span class='offphone'>".$offphone.
			   "</span><br /><span class='offemail'><a href='mailto:".$offemail.
			   "?Subject=Regarding%20Digital%20Health%20Privacy%20Notice' target='_top'>".$offemail.
			   "</a></span></div>\n\n";
	$toFile .= "<h1>".$orgname."</h1>\n";
	$toFile .= "<a id='mainwebsite' href='".$orgwebsite."'>".$orgwebsite."</a>\n";
	$toFile .= "<h4 id='datenot'>Effective date of notice: ".$datenotice."</h4>\n";
	$toFile .= "<br style='clear:both;' />";
	$toFile .= "</header>";
	
	// Custom link creation.
	
	$toFile .= '<div class="custom">';
	$toFile .= '<h3>Quick Links</h3><ul id="thelinks">';
	if( $lmedrecord != "" ) {
	    $toFile .= '<li>Request a copy of your medical record<br />
	    <a href="'.$lmedrecord.'">'.$lmedrecord.'</a></li>';
	}
	if( $lcorrectrecord != "" ) {
		$toFile .= '<li>Correct or request a change to your medical record<br />
		<a href="'.$lcorrectrecord.'">'.$lcorrectrecord.'</a></li>';
	}
	if( $llimitshare != "" ) {
		$toFile .= '<li>Request that this organization limit who they share your information with<br />
		<a href="'.$llimitshare.'">'.$llimitshare.'</a></li>';
	}
	if( $lsharedwho != "" ) {
		$toFile .= '<li>Request a list of parties that your information has been shared with by this organization<br />
		<a href="'.$lsharedwho.'">'.$lsharedwho.'</a></li>';
	}
	if( $lpapercopy != "" ) {
		$toFile .= '<li>Request a paper copy of this notice<br />
		<a href="'.$lpapercopy.'">'.$lpapercopy.'</a></li>';
	}
	if( $lblue != "" ) {
		$toFile .= '<li>Gain access to your information through participation in Blue Button<br />
		<a href="'.$lblue.'">'.$lblue.'</a><br /><span class="small">Blue Button is a symbol for patient access to their personal health information in a usable and safe digital format. <a href="http://www.hhs.gov/digitalstrategy/open-data/introducing-blue-button-plus.html">Learn more about Blue Button.</a></span></li>';
	}
	
	// Handle organizations that provide no links.
	if( $lmedrecord.$lcorrectrecord.$llimitshare.$lsharedwho.$lpapercopy.$lblue == "" ) {
		$toFile .= '<li>'.$orgname.' has not provided any links to help you access or correct your information. To find out more contact them directly.</li>';
	}
	
	$toFile .= '</ul>';
	$toFile .= '</div>';
		
	// Custom notes.	
		
	$toFile .= '<div class="custom">';
	$toFile .= '<h3>Notes about our organization</h3>';
	
	if( $speciallaws != "" ) {
		$toFile .= '<h4>State or other laws that require greater limits</h4>
		<p>'.$speciallaws.'</p>';
	}
	
	if( $specialocha != "" ) {
		$toFile .= '<h4>Organized Health Care Arrangement joint notice</h4>
		<p>'.$specialocha.'</p>';
	}
	
	if( $specialnotes != "" ) {
		$toFile .= '<h4>Special notes on our practices</h4>
		<p>'.$specialnotes.'</p>';
	}
	
	// Handle organizations that provide no links.
	if( $speciallaws.$specialocha.$specialnotes == "" ) {
		$toFile .= '<p>'.$orgname.' has not provided any custom information to give you details on the specifics of their own practices.</p>';
	}
	
	$toFile .= '<br /></div>';

	$toFile .= '<div class="boilerplate">';
	$toFile .= '<p id="theboilerplate">Everything below this point is standard text offered by the Department of Health and Human Services. The below rules, rights, and definitions apply to all health plan and health care providers.</p>';
	$toFile .= '</div>';
			
	$toFile .= '<div class="boilerplate">';
	if( $type == "hplan" ) {
		$toFile .= file_get_contents("plan-boiler.html");
	} else {
		$toFile .= file_get_contents("provider-boiler.html");		
	}
	$toFile .= '</div>';
	
	$toFile .= '</body></html>';
	
	$orgnospace = preg_replace('/[^a-z0-9]+/i', '_', $orgname);
	$fileIS = $orgnospace."".rand(10000,99999).".html";
	file_put_contents( "x/".$fileIS, $toFile );

//echo $toFile;

}
?>

<div class="builder">
<p style="padding-top:10px;"><a href="index.php">Return to the home page</a></p>
</div>

<div class="stretchcolor" style="padding: 5px 0 30px;;">
<div class="builder">
     <h2 style="text-align:center; font-size:44px;">Your notice has been built!</h2>
</div>
</div>

   <header style="text-align:center;font-size:32px;">
    
     <br /><br />You can view your notice now, live at:<br /><br />
     <?php 
     echo "<a style='font-size:28px;' class='pure-button pure-button-primary' href='x/".$fileIS."'>exitlab.net/healthNPP/x/".$fileIS."</a>";
     ?>
     <p style="text-align:center;font-size:24px;"><br />We are happy to host this file for you permanently.</p>     
     <p style="text-align:center;font-size:24px;">Or you can download this file and host it on your own website, all the information and styles it needs are self-contained in a single file.</p>
   </header>
        
</body>
</html>