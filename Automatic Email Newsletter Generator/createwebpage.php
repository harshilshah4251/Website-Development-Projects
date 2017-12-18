<?php
fopen('./careerdev.txt', "a+");
$careerdev = file_get_contents('./careerdev.txt', true);
$careerdevlist=explode("\m", $careerdev);
fopen('./graduateops.txt', "a+");
$graduateops = file_get_contents('./graduateops.txt', true);
$graduateopslist=explode("\m", $graduateops);
fopen('./internships.txt', "a+");
$internships = file_get_contents('./internships.txt', true);
$internshipslist=explode("\m", $internships);
fopen('./article.txt', "a+");
$article = file_get_contents('./article.txt', true);
$articleslist=explode("\m", $article);
fopen('./careertool.txt', "a+");
$careerresources = file_get_contents('./careertool.txt', true);
$careerresourceslist=explode("\m", $careerresources);

?>
<html>
<head>
<title>IAC Career Roundup</title>
</head>
<body style="margin: 0; padding: 0;">
<table cellspacing="0" cellpadding="0" border="0" id="x_backgroundTable" class="" style="border-collapse:collapse; background-color:rgb(224,224,224); margin:0px; padding:0px; height:100%!important; line-height:100%!important; width:100%!important">
<tbody class="">
<tr class="">
<td align="center" valign="top" class="" style="border-collapse:collapse; padding-bottom:20px">
<table class="x_dd-double-vib-container" align="center" cellspacing="0" cellpadding="0" border="0" width="600" id="x_vibContainer" style="width: 600px; border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="center" valign="top" class="" style="border-collapse:collapse; padding:10px 0px 0px">
<p class="" style="font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:18px; margin:12px 0px 0px 0px; font-size:10px; text-align:center">
<em class="">Having trouble viewing this email?<span class="x_Apple-converted-space">&nbsp;</span><a href="http://enrollment.iac.gatech.edu/emails/careerroundup/09-06-2017/index.html" target="_blank" style="color:rgb(7,63,121)!important; text-decoration: none;">View it in your browser.</a><br/>View past Career Roundups<a href="http://enrollment.iac.gatech.edu/career.html" target="_blank" style="color:rgb(7,63,121)!important; text-decoration: none;"> on the Archives page.</a></em></p>
</td>
</tr>
</tbody>
</table>
<table class="x_dd-double-main-table-container" align="center" cellspacing="0" cellpadding="0" border="0" width="600" id="x_templateContainer" style="border-collapse:collapse; background-color:rgb(255,255,255);">
<tbody class="">
<tr class="">
<td align="center" valign="top" class="" style="border-collapse:collapse">
<table class="x_dd-double-header-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td class="" style="border-collapse:collapse; background-color:rgb(224,224,224)">
<img style="margin: auto;" src="http://enrollment.iac.gatech.edu/emails/careerroundup/header.png" alt="Career Roundup Logo"/></td>
</tr>
</td>
</tr>



<table class="x_dd-double-header-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td colspan="2" align="right" valign="top" class="" style="border-collapse:collapse; background-color: rgb(238,178,17); padding: 15px; color: white; display:block; font-weight: bold; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:26px; text-align:center; font-size:22px;">Center for Career Discovery and Development
</td>
</tr>
<tr class="">
  <td width="600" align="left" valign="top" class="" style="border-collapse:collapse">
  <table class="x_dd-double-main-content-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
  <tbody class="">
  <tr class="">
  <td align="left" valign="top" class="" style="border-collapse:collapse; padding:0px 20px 0px 20px">
  <table class="x_dd-double-feature-article-table" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; margin-bottom:5px">
<tbody class="">

<?php
$i=0;
foreach ($careerdevlist as $element) {
    $property=explode("\o", $element);
    if(sizeof($property)>1){
      $merged=array(
        "title"=>trim($property[0]),"date"=>trim($property[1]),"location"=>trim($property[2]),"link"=>trim($property[3]),"description"=>trim($property[4]), "imagepath"=>trim($property[5]), "imagealignment"=>trim($property[6]));


    echo
    '<tr class="">';

      echo '<td align="left" valign="top" class="" style="border-collapse:collapse;border-bottom: 3px solid rgb(238,178,17);">';

    if(trim($merged['imagealignment'])=='cover'){
      echo '<img src='.$merged['imagepath'].' vspace="10px">';

    }
    elseif(trim($merged['imagealignment'])=='right'){
      echo '<img src='.$merged['imagepath'].' align ="right" vspace="10px" valign="middle" >';
      //echo "yes";
    }

    echo
    '<h4 class="" style="color:rgb(7,63,121)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin:10px 0px 10px; text-align:left; font-size:22px">';
    if(isset($merged['link']) && !empty($merged['link'])){

      echo '<a href='.$merged['link']. ' style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].' &rarr;</a></h4>';
    }
    else{
      echo '<style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].'</style></h4>';
    }
    echo '<p class="" style="font-family: &quot;helvetica neue &quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">';
    if(isset($merged['date']) && !empty($merged['date'])){
      echo '<strong>When:</strong>'.$merged['date'].'<br/>';
    }
    if(isset($merged['location']) && !empty($merged['location'])){
    echo '<strong>Where:</strong> '.$merged['location'].'<br /></p>';
    }
    echo '<p class="" style="font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">'.$merged['description'].'<br />';
    if(strlen($merged['link'])>1){
      echo '<strong>For more info:</strong><a href='.$merged['link'].' style="color:rgb(12,105,204)!important; text-decoration: none;"> Click here</a> <br /><br />';
    }

    echo '</p></td>
    </tr>';}
    $i++;
}
    echo '<tr class="">
    <td align="left" valign="top" class="" style="border-collapse:collapse;">
    <h4 class="" style="color:rgb(12,105,204)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin: 10px 0px 10px 0px; text-align:left; font-size:22px">Career and Pre-Professional Advisors</h4>
    <p class="" style="font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:10px 0px 15px 0px; font-size:13px">Career Development: Dennis Lindsay, <strong><a href="mailto:dennis.lindsay@gatech.edu" style="color:rgb(12,105,204)!important; text-decoration: none;">dennis.lindsay@gatech.edu</a></strong><br/>
    <strong>Walk-in hours:</strong> Wednesdays, 11 AM-12 PM, Clough 242<br/>
    <strong>NEW REMOTE ADVISING HOURS!</strong> Wednesdays, 2PM-4PM, Old CE Building, 2nd Flr Lounge<br/>
    <strong>++PLUS++</li><br/><br/>
    <strong>NEW REMOTE ADVISING HOURS WITH Andrea Comsa!</strong> Mondays, 10AM-12PM, Old CE Building, 2nd Flr Lounge<br/><br/>

    Pre-Law Advisor: Director Robert Pikowsky, <strong><a href="mailto:robert.pikowsky@pubpolicy.gatech.edu" style="color:rgb(12,105,204)!important; text-decoration: none;">robert.pikowsky@pubpolicy.gatech.edu</a></strong><br/>

    Pre-Teaching Advisor: Director Susan Belmont, <strong><a href="http://www.preteaching.gatech.edu/advisement" style="color:rgb(12,105,204)!important; text-decoration: none;">set up appointment</a></strong>.</p>

    </td>
    </tr>';

?>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>



<table class="x_dd-double-main-content-wrapper" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse;">
<tbody class="">
<tr class="">
<td colspan="2" align="right" valign="top" class="" style="border-collapse:collapse; background-color: rgb(238,178,17); padding: 15px; color: white; display:block; font-weight: bold; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:26px; text-align:center; font-size:22px;">Graduate Opportunities
</td>
</tr>
<td width="600" align="left" valign="top" class="" style="border-collapse:collapse">
<table class="x_dd-double-main-content-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="left" valign="top" class="" style="border-collapse:collapse; padding:0px 20px 0px 20px">
<table class="x_dd-double-feature-article-table" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; margin-bottom:5px">
<tbody class="">
<?php
$i=0;
  foreach ($graduateopslist as $element) {
    $property=explode("\o", $element);
    if(sizeof($property)>1){
      $merged=array(
        "title"=>trim($property[0]),"date"=>trim($property[1]),"location"=>trim($property[2]),"link"=>trim($property[3]),"description"=>trim($property[4]), "imagepath"=>trim($property[5]), "imagealignment"=>trim($property[6]));
    echo
    '<tr class="">';
    if ($i==count($graduateopslist)-1) {
      echo '<td align="left" valign="top" class="">';
    } else {
      echo '<td align="left" valign="top" class="" style="border-collapse:collapse;border-bottom: 3px solid rgb(238,178,17);">';
    }
    if(trim($merged['imagealignment'])=="cover"){
      echo '<img src='.$merged['imagepath'].' vspace="10px">';
    }
    elseif(trim($merged['imagealignment'])=="right"){
      echo '<img src='.$merged['imagepath'].' align ="right" vspace="10px">';
    }
    echo
    '<h4 class="" style="color:rgb(7,63,121)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin:10px 0px 10px; text-align:left; font-size:22px">';
    if(isset($merged['link']) && !empty($merged['link'])){

      echo '<a href='.$merged['link']. ' style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].' &rarr;</a></h4>';
    }
    else{
      echo '<style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].'</style></h4>';
    }
    echo '<p class="" style="font-family: &quot;helvetica neue &quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">';
    if(isset($merged['date']) && !empty($merged['date'])){
      echo '<strong>When:</strong>'.$merged['date'].'<br/>';
    }
    if(isset($merged['location']) && !empty($merged['location'])){
    echo '<strong>Where:</strong> '.$merged['location'].'<br /></p>';
    }
    echo '<p class="" style="font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">'.$merged['description'].'<br />';
    if(isset($merged['link']) && !empty($merged['link'])){
      echo '<strong>For more info:</strong><a href='.$merged['link'].' style="color:rgb(12,105,204)!important; text-decoration: none;"> Click here</a> <br /><br />';
    }
    echo '</p></td>
    </tr>';}
    $i++;
  }
?>





</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

<table class="x_dd-double-header-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td colspan="2" align="right" valign="top" class="" style="border-collapse:collapse; background-color: rgb(238,178,17); padding: 15px; color: white; display:block; font-weight: bold; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:26px; text-align:center; font-size:22px;">Internship and Job Opportunities
</td>
</tr>
</tbody>
</table>
<table class="x_dd-double-main-content-wrapper" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td width="600" align="left" valign="top" class="" style="border-collapse:collapse">
<table class="x_dd-double-main-content-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="left" valign="top" class="" style="border-collapse:collapse; padding:0px 20px 0px 20px">
<table class="x_dd-double-feature-article-table" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; margin-bottom:5px">
<tbody class="">
  <?php
  $i=0;
    foreach ($internshipslist as $element) {
      $property=explode("\o", $element);
      if(sizeof($property)>1){
      $merged=array(
        "title"=>trim($property[0]),"date"=>trim($property[1]),"location"=>trim($property[2]),"link"=>trim($property[3]),"description"=>trim($property[4]), "imagepath"=>trim($property[5]), "imagealignment"=>trim($property[6]));

      echo
      '<tr class="">';
      if ($i==count($internshipslist)-1) {
        echo '<td align="left" valign="top" class="">';
      } else {
        echo '<td align="left" valign="top" class="" style="border-collapse:collapse;border-bottom: 3px solid rgb(238,178,17);">';
      }
      if(trim($merged['imagealignment'])=="cover" && $merged['imagepath']!=""){
        echo '<img src='.$merged['imagepath'].' vspace="10px">';
      }
      else if(trim($merged['imagealignment'])=="right" && $merged['imagepath']!=""){
        echo '<img src='.$merged['imagepath'].' align ="right" vspace="10px" valign="middle">';

      }
      echo
      '<h4 class="" style="color:rgb(7,63,121)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin:10px 0px 10px; text-align:left; font-size:22px">';
      if(isset($merged['link']) && !empty($merged['link'])){

        echo '<a href='.$merged['link']. ' style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].' &rarr;</a></h4>';
      }
      else{
        echo '<style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].'</style></h4>';
      }
      echo '<p class="" style="font-family: &quot;helvetica neue &quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">';
      if(isset($merged['date']) && !empty($merged['date'])){
        echo '<strong>When:</strong>'.$merged['date'].'<br/>';
      }
      if(isset($merged['location']) && !empty($merged['location'])){
      echo '<strong>Where:</strong> '.$merged['location'].'<br /></p>';
      }
      echo '<p class="" style="font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; line-height:18px; margin:0px 0px 10px; font-size:13px">'.$merged['description'].'<br />';
      if(isset($merged['link']) && !empty($merged['link'])){
        echo '<strong>For more info:</strong><a href='.$merged['link'].' style="color:rgb(12,105,204)!important; text-decoration: none;"> Click here</a> <br /><br />';
      }



      echo '</p></td>
      </tr>';}
      $i++;
    }
  ?>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>





























<table class="x_dd-double-header-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
  <td colspan="2" align="right" valign="top" class="" style="border-collapse:collapse; background-color: rgb(238,178,17); padding: 15px; color: white; display:block; font-weight: bold; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:26px; text-align:center; font-size:22px;">Career Resource Tools Spotlight</td>
</tr>
<tr class="">
<td width="600" align="left" valign="top" class="" style="border-collapse:collapse">
<table class="x_dd-double-main-content-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
  <td align="left" valign="top" class="" style="border-collapse:collapse; padding:0px 20px 0px 20px">
  <table class="x_dd-double-feature-article-table" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; margin-bottom:5px">
<tbody class="">

  <?php


  foreach ($careerresourceslist as $element) {
      $property=explode("\o", $element);
      if(sizeof($property)>1){
        $merged=array(
          "title"=>$property[0],"date"=>$property[1],"location"=>$property[2],"link"=>$property[3],"description"=>$property[4], "imagepath"=>$property[5], "imagealignment"=>$property[6]);


      echo
      '<tr class="">';
      echo '<td align="left" valign="top" class="">';
      if($merged['imagealignment']=="cover"){
        echo '<img src='.$merged['imagepath'].' vspace="10px">';
      }
      else {
        echo '<img src='.$merged['imagepath'].' align ="right" vspace="10px">';
      }
      echo
      '<h4 class="" style="color:rgb(7,63,121)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin:10px 0px 10px; text-align:left; font-size:22px"><a href='.$merged['link']. '
       style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].' &rarr;</a></h4>
      <p class="" style="font-family: &quot; helvetica neue &quot;,Helvetica,Arial,sans-serif; line-height:18px; margin-bottom: 12px; font-size:13px">'.$merged['description'].'</p></td>
      </tr>';}

  }

  ?>
</tbody></table></td></tr>
</tbody>
</table>
<table class="x_dd-double-header-container" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td colspan="2" align="right" valign="top" class="" style="border-collapse:collapse; background-color: rgb(238,178,17); padding: 15px; color: white; display:block; font-weight: bold; font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:26px; text-align:center; font-size:22px;">Unsolicited Career Advice!</td>
</tr>
</tbody>
</table>
<table class="x_dd-double-main-content-wrapper" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="left" valign="top" class="" style="border-collapse:collapse; padding:20px 20px 0px 20px">
<table class="x_dd-double-feature-article-table" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse;">
<tbody class="">
<!-- Article One-->
<?php

$i=0;
foreach ($articleslist as $element) {
    $property=explode("\o", $element);
    if(sizeof($property)>1){
      $merged=array(
        "title"=>$property[0],"date"=>$property[1],"location"=>$property[2],"link"=>$property[3],"description"=>$property[4], "imagepath"=>$property[5], "imagealignment"=>$property[6]);


    echo
    '<tr class="">';
    if ($i==count($articleslist)-1) {
      echo '<td align="left" valign="top" class="">';
    } else {
      echo '<td align="left" valign="top" class="" style="border-collapse:collapse;border-bottom: 3px solid rgb(238,178,17);">';
    }
    if($merged['imagealignment']=="cover"){
      echo '<img src='.$merged['imagepath'].' vspace="10px">';
    }
    else{
      echo '<img src='.$merged['imagepath'].' align ="right" vspace="10px">';
    }
    echo
    '<h4 class="" style="color:rgb(7,63,121)!important; text-decoration:none; display:block; font-family: &quot;helvetica neue&quot;,Helvetica,Arial,sans-serif; font-weight:bold; line-height:26px; margin:10px 0px 10px; text-align:left; font-size:22px"><a href='.$merged['link']. '
     style="color:rgb(12,105,204)!important; text-decoration: none;">'.$merged['title'].' &rarr;</a></h4>
    <p class="" style="font-family: &quot; helvetica neue &quot;,Helvetica,Arial,sans-serif; line-height:18px; margin-bottom: 12px; font-size:13px"><em>'.$merged['description'].'</em></p></td>
    </tr>';}
    $i++;
}

?>

</tbody>
</table>
</td>
</tr>
<tr class="">
<td class="" style="border-collapse:collapse">
<table class="x_dd-double-footer-social-links" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; border-top-width:1px; border-top-style:solid; border-top-color:rgb(178,178,178)">
<tbody class="">
<tr class="">
<td align="center" valign="top" class="" style="border-collapse:collapse; padding:20px; text-align:center">
<a href="https://www.facebook.com/gtliberalarts" target="_blank" class=""><img src="http://daily.gatech.edu/sites/all/themes/gt_daily_digest/images/sm-icon-facebook.png" height="40" width="60" alt="Ivan Allen College on Facebook" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="https://twitter.com/gtliberalarts" target="_blank" class=""><img src="http://daily.gatech.edu/sites/all/themes/gt_daily_digest/images/sm-icon-twitter.png" height="40" width="60" alt="Ivan Allen College on Twitter" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="http://www.youtube.com/user/GaTechIAC" target="_blank" class=""><img src="http://daily.gatech.edu/sites/all/themes/gt_daily_digest/images/sm-icon-youtube.png" height="40" width="60" alt="Ivan Allen College on YouTube" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="http://plus.google.com/110237887515058273820" target="_blank" class=""><img src="http://daily.gatech.edu/sites/all/themes/gt_daily_digest/images/sm-icon-googleplus.png" height="40" width="60" alt="Ivan Allen College on Google+" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="http://www.linkedin.com/groups/Georgia-Tech-Ivan-Allen-College-4115731" target="_blank" class=""><img src="http://daily.gatech.edu/sites/all/themes/gt_daily_digest/images/sm-icon-linkedin.png" height="40" width="60" alt="Ivan Allen College on LinkedIn" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="https://www.flickr.com/photos/ivanallencollege/" target="_blank" class=""><img src="http://enrollment.iac.gatech.edu/emails/flickr.png" height="40" width="60" alt="Ivan Allen College on Flickr" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a><span class="x_Apple-converted-space">&nbsp;</span><a href="http://iamliberalartsgt.tumblr.com" target="_blank" class=""><img src="http://enrollment.iac.gatech.edu/emails/tumblr.png" height="40" width="60" alt="Ivan Allen College on Tumblr" class="" style="outline:none; text-decoration:none; border:none; margin:0px auto"></a></td>
</tr>
</tbody>
</table>
<table class="x_dd-double-footer-optout" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse; border-top-width:1px; border-top-style:solid; border-top-color:rgb(178,178,178)">
<tbody class="">
<tr class="">
<td align="left" valign="top" width="400" class="" style="border-collapse:collapse; padding:10px 0px 0px 10px">
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="left" valign="top" class="" style="border-collapse:collapse; padding:10px; padding-right: 0px; padding-bottom: 20px">
<p class="" style="font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:15px; margin:0px 0px 15px; font-size:11px">
<img style="margin-bottom: 30px;" src="http://enrollment.iac.gatech.edu/emails/iaclogo.png" width="361" alt="Ivan Allen College Logo"/><br/><strong class="">This email was sent by the Office of Enrollment and Student Affairs.</strong></p>
</td>
</tr>
</tbody>
</table>
</td>
<td align="left" valign="top" width="200" class="" style="border-collapse:collapse; padding:10px 0px 0px 10px">
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="" style="border-collapse:collapse">
<tbody class="">
<tr class="">
<td align="left" valign="top" class="" style="border-collapse:collapse; padding-top:20px; padding-left: 0px;">
<p class="" style="font-family: 'helvetica neue',Helvetica,Arial,sans-serif; line-height:15px; margin:0px 0px 15px; font-size:11px">
Georgia Institute of Technology<br class="">
Ivan Allen College of Liberal Arts<br class="">
781 Marietta St NW<br class="">
Atlanta, GA 30318<br class="">
Phone: 404.894.9582<br class="">
<a href="http://iac.gatech.edu" target="_blank" class="" style="text-decoration:none; color:rgb(7,63,121)">iac.gatech.edu</a></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>

<?









 ?>
