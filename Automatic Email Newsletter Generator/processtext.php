<?php



if(isset($_POST['submit'])){

  if(isset($_POST['cradio'])){

      if($_POST['cradio']=="Center for Career Discovery and Development"){
        $filepath="careerdev.txt";
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
      else if($_POST['cradio']=="Graduate Opportunities"){
        $filepath="graduateops.txt";
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
      else if($_POST['cradio']=="Internship and Job Opportunities"){
        $filepath="internships.txt";
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
      else if($_POST['cradio']=="Unsolicited Career Advice"){
        $filepath="article.txt";
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
  }
  if(isset($_POST['tradio'])){
    fopen('./careerresources.txt', "a+");
    $careerresources = file_get_contents('./careerresources.txt', true);
    $careerresourceslist=explode("\m", $careerresources);
    $property=explode("\o",$careerresourceslist[$_POST['tradio']]);
    $merged=array(
      "title"=>$property[0],"date"=>$property[1],"location"=>$property[2],"link"=>$property[3],"description"=>$property[4], "imagepath"=>$property[5], "imagealignment"=>$property[6]);
        $filepath='careertool.txt';
        $file=fopen($filepath,"a+");
        $contents= file_get_contents($filepath);
        if(!empty($contents)){
          $stringbuild=$contents."\\m\n";
        }
        $stringbuild.=$merged['title']."\\o\n";
        $stringbuild.=$merged['date']."\\o\n";
        $stringbuild.=$merged['location']."\\o\n";
        $stringbuild.=$merged['link']."\\o\n";
        $stringbuild.=$merged['description']."\\o\n";
        $stringbuild.=$merged['imagepath']."\\o\n";
        $stringbuild.=$merged['imagealignment'];
        file_put_contents($filepath, $stringbuild);

    }

  $url='http://enrollment.iac.gatech.edu/emails/careerroundup/10-26-2017/interface.php';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}

 ?>
