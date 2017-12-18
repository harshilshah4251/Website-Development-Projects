<?php



if(isset($_POST['submit'])){


  if(isset($_POST['directoryname']) && $_POST['directoryname']!=""){
    if(!is_dir('../'.$_POST['directoryname'])){
      mkdir('../'.$_POST['directoryname']);
      // $contents=file_get_contents('createwebpage.php');
      // $filepath=$directoryname."/createwebpage.php";
      // $file=fopen($filepath,"a+");
      // file_put_contents($filepath, $contents);
      // echo "success";
    }               //creates a new directory if not already present

    file_put_contents('currentroundupdirectory.txt', $_POST['directoryname']);
  }

  $directoryname=trim(file_get_contents('currentroundupdirectory.txt'));
  // $directoryname="careerroundup_test";

  if(isset($_POST['section'])){

      if($_POST['section']=="center for career discovery and development"){
        $filepath='../'.$directoryname."/careerdev.txt";
        $file=fopen($filepath,"a+");
        $contents= file_get_contents($filepath);
        if(!empty($contents)){
          $stringbuild=$contents."\\m\n";
        }
        $stringbuild.=$_POST['eventtitle']."\\o\n";
        $stringbuild.=$_POST['eventdate']."\\o\n";
        $stringbuild.=$_POST['eventlocation']."\\o\n";
        $stringbuild.=$_POST['eventlink']."\\o\n";
        $stringbuild.=$_POST['eventdescription']."\\o\n";
        $stringbuild.=$_POST['imagepath']."\\o\n";
        $stringbuild.=$_POST['iradio'];
        file_put_contents($filepath, $stringbuild);
        echo "event added successfully";
      }
      else if($_POST['section']=="graduate opportunities"){
        $filepath='../'.$directoryname."/graduateops.txt";
        $file=fopen($filepath,"a+");
        $contents= file_get_contents($filepath);
        if(!empty($contents)){
          $stringbuild=$contents."\\m\n";
        }
        $stringbuild.=$_POST['eventtitle']."\\o\n";
        $stringbuild.=$_POST['eventdate']."\\o\n";
        $stringbuild.=$_POST['eventlocation']."\\o\n";
        $stringbuild.=$_POST['eventlink']."\\o\n";
        $stringbuild.=$_POST['eventdescription']."\\o\n";
        $stringbuild.=$_POST['imagepath']."\\o\n";
        $stringbuild.=$_POST['iradio'];
        file_put_contents($filepath, $stringbuild);
        echo "event added successfully";
      }
      else if($_POST['section']=="internship and job opportunities"){
        $filepath='../'.$directoryname."/internships.txt";
        $file=fopen($filepath,"a+");
        $contents= file_get_contents($filepath);
        if(!empty($contents)){
          $stringbuild=$contents."\\m\n";
        }
        $stringbuild.=$_POST['eventtitle']."\\o\n";
        $stringbuild.=$_POST['eventdate']."\\o\n";
        $stringbuild.=$_POST['eventlocation']."\\o\n";
        $stringbuild.=$_POST['eventlink']."\\o\n";
        $stringbuild.=$_POST['eventdescription']."\\o\n";
        $stringbuild.=$_POST['imagepath']."\\o\n";
        $stringbuild.=$_POST['iradio'];
        file_put_contents($filepath, $stringbuild);
        echo "event added successfully";
      }
      else if($_POST['section']=="unsolicited career advice"){
        $filepath='../'.$directoryname."/article.txt";
        $file=fopen($filepath,"a+");
        $contents= file_get_contents($filepath);
        if(!empty($contents)){
          $stringbuild=$contents."\\m\n";
        }
        $stringbuild.=$_POST['eventtitle']."\\o\n";
        $stringbuild.=$_POST['eventdate']."\\o\n";
        $stringbuild.=$_POST['eventlocation']."\\o\n";
        $stringbuild.=$_POST['eventlink']."\\o\n";
        $stringbuild.=$_POST['eventdescription']."\\o\n";
        $stringbuild.=$_POST['imagepath']."\\o\n";
        $stringbuild.=$_POST['iradio'];
        file_put_contents($filepath, $stringbuild);
        echo "event added successfully";
      }

      else if(isset($_POST['section'])=="career resource tools spotlight"){

    $filepath='../'.$directoryname."/careertool.txt";
    $file=fopen($filepath,"a+");
    $contents= file_get_contents($filepath);
    if(!empty($contents)){
      $stringbuild=$contents."\\m\n";
    }
    $stringbuild.=$_POST['eventtitle']."\\o\n";
    $stringbuild.=$_POST['eventdate']."\\o\n";
    $stringbuild.=$_POST['eventlocation']."\\o\n";
    $stringbuild.=$_POST['eventlink']."\\o\n";
    $stringbuild.=$_POST['eventdescription']."\\o\n";
    $stringbuild.=$_POST['imagepath']."\\o\n";
    $stringbuild.=$_POST['iradio'];


    file_put_contents($filepath, $stringbuild);
    echo "event added successfully";

  }}









  $url='http://enrollment.iac.gatech.edu/emails/careerroundup/util/interface.php';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}

 ?>
