
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./semanticui/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="./semanticui/semantic.min.js"></script>
  <!-- jQuery library -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <style>
    #drop-area{
      width: 50%;
      height: 300px;
      border: 1px solid lightgray;
      border-radius: 3px;
      margin-right: 20px;
      text-align: center;
      overflow: auto;
      float: left;
      display: block;
      align-items: center;
    }

    #drop-area:hover{
      cursor: pointer;
    }

    #drop-area h1{
      text-align: center;
      font-weight: normal;
      font-family: sans-serif;
      line-height: 50px;
      align-items: center;
    }

    #file{
      display: none;
    }

/* Thumbnail */
    .thumbnail{
        width: 80px;
        height: 80px;
        padding: 2px;
        border: 2px solid lightgray;
        border-radius: 3px;
        float: left;
    }
  .ui.action.input input[type="file"] {
    display: none;
  }


  </style>
<script>
$(document).ready(function() {
  $('.ui.dropdown').dropdown();
  $("#drop-area").on('dragenter', function (e){
	e.preventDefault();
	$(this).css('background', '#BBD5B8');
	});

	$("#drop-area").on('dragover', function (e){
	e.preventDefault();
	});

	$("#drop-area").on('drop', function (e){
	$(this).css('background', '#D8F9D3');
	e.preventDefault();
	var image = e.originalEvent.dataTransfer.files;
	createFormData(image);
	});
  $("input:text").click(function() {
    $(this).parent().find("input:file").click();
  });
  $('input:file', '.ui.action.input')
    .on('change', function(e) {
      var name = e.target.files[0].name;
      $('input:text', $(e.target).parent()).val(name);
    });

});




function createFormData(image) {
	var formImage = new FormData();
	formImage.append('userImage', image[0]);
	uploadFormData(formImage);
}

function uploadFormData(formData) {
	$.ajax({
	url: "upload.php",
	type: "POST",
	data: formData,
	contentType:false,
	cache: false,
	processData: false,
	success: function(data){
		$('#drop-area').append(data);
	}});
}
</script>
</head>

<body style="" >
  <div class="main ui container">
     <h2 class="ui dividing header">CareerRoundUp</h2>
     <div class="example">
     <form class="ui form" id="eventForm" method="POST" action="processtext.php" enctype="multipart/form-data">
      <div class="field">
        <label>Create/Change current direcory. Current directory is set to: <span style="color:#00ef13"><?php
          $directoryname=trim(file_get_contents('currentroundupdirectory.txt'));echo $directoryname;
        ?></span> </label>
        <input type="text" placeholder="Enter directory name">
      </div>
      <div class="field">

        <div class="ui selection dropdown">
          <input type="hidden" name="section">
          <i class="dropdown icon"></i>
          <div class="default text">Event section</div>

          <div class="menu">

            <div class="item" option-value="c2d2">Center for career discovery and development</div>
            <div class="item" option-value="graduateops">Graduate opportunities</div>
            <div class="item" option-value="internship">Internship and job opportunities</div>
            <div class="item" option-value="tool">Career resource tools spotlight</div>
            <div class="item" option-value="advice">Unsolicited career advice</div>

          </div>

        </div>
      </div>

      <div class="field">
        <label>Event name</label>
        <input type="text" id="eventtitle" name="eventtitle" placeholder="Enter event name">
      </div>
      <div class="field">
        <label>Event date</label>
        <input type="text" id="eventdate" name="eventdate" placeholder="Enter event date">
      </div>
      <div class="field">
        <label>Event location</label>
        <input type="text" id="eventloc" name="eventlocation" placeholder="Enter event location">
      </div>
      <div class="field">
        <label>Event link</label>
        <input type="text" id="eventlink" name="eventlink" placeholder="Enter link">
      </div>
      <div class="field">
        <label>Event description</label>
        <textarea id="eventdescription" name="eventdescription" placeholder="Enter event description"></textarea>
      </div>
      <div class="field">
        <label>Image name</label>
        <input type="text" name="imagepath" id="imagepath" placeholder="Image name with type" />
      </div>

      <input type="file" name="file" id="file">

     <div id="drop-area">

        <h5 class="">Drag and Drop Images Here. (upload the image here and type the name of the image with type in the Image name box)</h3>

     </div>

      <div class="inline fields">
        <label for="">Select image position:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="iradio" id="i1" tabindex="0" value="cover" class="hidden">
            <label>Center</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="iradio" id="i2" tabindex="0" checked value="right" class="hidden">
            <label>Right</label>
          </div>
        </div>
      </div>

      <button class="ui button" type="submit" name="submit" value="Submit">Submit</button>
      <?php $directoryname=trim(file_get_contents('currentroundupdirectory.txt')); echo "<p style=\"display:inline; margin:10px 10px 10px 10px;\"><strong>Careerroundup page link:</strong> <a href=\"http://enrollment.iac.gatech.edu/emails/careerroundup/".$directoryname."/createwebpage.php\">Click Here</a></p>"; ?>
      <div class="field">

      </div>
    </form>
    </div>
  <!-- </div>
        <form class="form" id="eventForm" method="POST" action="processtext.php" >
            <button onclick="toggledirectoryinput()" type="button">Create new directory or enter existing directory</button><br/>
            <p>Current CareerRoundUp directory is set to: <?php
              //$directoryname=trim(file_get_contents('currentroundupdirectory.txt'));echo $directoryname;
            ?></p>
            <div id="myDIV">
                <input type="text" class="form-box-element" id="directoryname" name="directoryname" placeholder="Enter Directory Name"/><br/>
            </div>


            <input type="radio" id ="r1" class="form-radio-element" name="cradio" value="Center for Career Discovery and Development"/>
            <label for="r1">Center for Career Discovery and Development</label><br/>
            <input type="radio" id ="r2" class="form-radio-element" name="cradio" value="Graduate Opportunities" />
            <label for="r2">Graduate Opportunities</label><br/>
            <input type="radio" id ="r3" class="form-radio-element" name="cradio" value="Internship and Job Opportunities" /> </input>
            <label for="r3">Internship and Job Opportunities</label><br/>
            <input type="radio" id ="r4" class="form-radio-element" name="cradio" value="Unsolicited Career Advice" /> </input>
            <label for="r3">Unsolicited Career Advice</label><br/>
            <input type="radio" id ="r5" class="form-radio-element" name="cradio" value="Career Resource Tools Spotlight" /> </input>
            <label for="r3">Career Resource Tools Spotlight</label><br/>
            <! <input type="radio" id ="r4" class="form-radio-element" name="radio"  /> </input>
            <value for="r4">Unsolicited Career Advice</value><br/>
            <br />

            <input type="text" class="form-box-element" id="eventtitle" name="eventtitle" placeholder="Title"/>
            <br/>
            <input type="text" name="eventdate" id="eventdate" class="form-box-element" placeholder="Date"/>
            <br/>
            <input type="text" name="eventlocation" class="form-box-element" id="eventloc" placeholder="Location" />
            <br />
            <input type="text" name="eventlink" class="form-box-element" id="eventlink" placeholder="URL" />
            <br />

            <textarea name="eventdescription"  class="form-box-element" id="eventdescription" placeholder="Description"></textarea>
            <br />
            <input type="text" name="imagepath" class="form-box-element" id="imagepath" placeholder="Image name" />

             <! <input type="file" name="file" id="file">

            <div id="drop-area">

	             <h3 class="drop-text">Drag and Drop Images Here. (upload the image here and type the name of the image with type in the Image name box)</h3>

            </div>
              Drag and Drop container-->
               <!-- <div class="upload-area"  id="uploadfile">
                 <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
               </div>



            <div style="margin:10px 10px 10px 10px;">
            <p style="display:inline; margin:10px 10px 10px 10px; font-size: 20px;"><strong> Image Position</strong></p>
            <input type="radio" id ="i1" class="form-radio-element" name="iradio"  value="cover" />
            <value for="i1" style="font-size:20px;">Center</value>
            <input type="radio" id ="i2" class="form-radio-element" name="iradio" value="right" />
            <value for="i2" style="font-size:20px;">Right</value><br/>
            </div>
             <input type="radio" id ="t1" class="form-radio-element radio-inline" name="tradio" value="0"/>
            <label style="font-size:15px;" for="t1">Optimal Resume</label>
            <input type="radio" id ="t2" class="form-radio-element radio-inline" name="tradio" value="1" />
            <label style="font-size:15px;" for="t2">Simply Hired</label>
            <input type="radio" id ="t3" class="form-radio-element radio-inline" name="tradio" value="2" />
            <label style="font-size:15px;" for="t3">Glassdoor</label>
            <input type="radio" id ="t4" class="form-radio-element radio-inline" name="tradio" value="3" />
            <label style="font-size:15px;" for="t4">Going Global</label>
            <?php //$directoryname=trim(file_get_contents('currentroundupdirectory.txt')); echo "<p style=\"display:inline; margin:10px 10px 10px 10px; font-size: 20px;\"><strong>Careerroundup page link:</strong> <a href=\"http://enrollment.iac.gatech.edu/emails/careerroundup/".$directoryname."/createwebpage.php\">Click Here</a></p>"; ?>

            <input type="submit" class="btn btn-success center-block add-event-button"  name="submit" value="Submit" onsubmit="window.location.reload()"/>

        </form>

  </div>

 -->


</body>
</html>
