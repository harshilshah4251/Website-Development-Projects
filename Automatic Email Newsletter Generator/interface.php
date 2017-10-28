<!--This interface is based on the specific requirement of the department for which I first made this interface-->
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
    font-family: 'Roboto', sans-serif;
    margin-left: 50px;
  }
  h1{
    margin: 20px;
  }
  input, textarea, select, a { outline: none; }
  .form-box-element{
    border:1px solid #ffffff;
    border-bottom-color: #000000;
    font-size: 20px;
    margin: 10px 10px 10px 10px;
    width: 50%;
    font-style: normal;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;

    }

  .form-radio-element{
    margin: 10px 10px 30px 10px;
  }
  label{
    font-size:20px;
    margin: 10px 10px 10px 10px;
  }
  #eventdescription{
      /*width: 50%;*/
      height: 300px;
      font-size: 15px;
      line-height: normal;
      border-style: solid;
      border-color: #000000;
    }

  .add-event-button{
      margin-top:10px;
      margin-left: 10px;
      width: 50%;
      ali
    }


  </style>


</head>

<body style="background-color:#ccc;height:100%;" >
  <div style="height:100px; width:800px; background-color:#12e660; padding:0em 2em 0em 2em;border-width:1px 1px 1px 1px;border-style:solid; border-top-left-radius:10px;border-top-right-radius:10px; border-color:#094f15; margin:0 auto;">
    <h1 style="color:#ffffff; font-weight:900; vertical-align:middle;" class="text-center">Add New Event</h1>
  </div>
  <div style="min-height:100%;max-width:800px;
              background-color:#fff;
              border-color:#000401;
              border-width:1px 1px 1px 1px;
              border-style:solid;
              margin-bottom:0em;
              padding:2em 2em 2em 2em;
              border-bottom-left-radius:10px;border-bottom-right-radius:10px;

              margin:0 auto;"
       class="container">


        <form class="form" id="eventForm" method="POST" action="processtext.php" >
            
            <input type="radio" id ="r1" class="form-radio-element" name="cradio" value="Center for Career Discovery and Development"/>
            <label for="r1">Center for Career Discovery and Development</label><br/>
            <input type="radio" id ="r2" class="form-radio-element" name="cradio" value="Graduate Opportunities" />
            <label for="r2">Graduate Opportunities</label><br/>
            <input type="radio" id ="r3" class="form-radio-element" name="cradio" value="Internship and Job Opportunities" /> </input>
            <label for="r3">Internship and Job Opportunities</label><br/>
            <input type="radio" id ="r4" class="form-radio-element" name="cradio" value="Unsolicited Career Advice" /> </input>
            <label for="r3">Unsolicited Career Advice</label><br/>
            <!-- <input type="radio" id ="r4" class="form-radio-element" name="radio"  /> </input>
            <value for="r4">Unsolicited Career Advice</value><br/> -->
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
            <input type="text" name="imagepath" class="form-box-element" id="imagepath" placeholder="Image Link" />
            <br />
            <p style="display:inline; margin:10px 10px 10px 10px;"><strong> Image Position</strong></p>
            <input type="radio" id ="i1" class="form-radio-element" name="iradio"  value="cover"/>
            <value for="i1">Cover</value>
            <input type="radio" id ="i2" class="form-radio-element" name="iradio" value="right" />
            <value for="i2">Right</value><br/>


            <input type="submit" class="btn btn-success center-block add-event-button"  name="submit" value="Submit" onsubmit="window.location.reload()"/>

        </form>

  </div>




</body>
</html>
