<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="page2.css"> 
</head>
<body>
<form action="page4.php" method="post">
How many hours (12 minimun, 19 maximum):
    <select name="hours">
        <option value=12>12</option>
        <option value=13>13</option>
        <option value=14>14</option>
        <option value=15>15</option>
        <option value=16>16</option>
        <option value=17>17</option>
        <option value=18>18</option>
        <option value=19>19</option>
    </select>
<?php
include("schedule_builder.php");

$classname = [];
$full_course = ["Operating_Systems_I", "DCSP", "Formal_Lang", "Physics_II", "Biology_II", "Chemistry_II", "Programming_Lang", "Eng_Stats", "Algorithms", "Ethics", "Technical_Writing", "Comp_Architecture"];
$student = new Student();
if(isset($_POST['class1'])) {
    foreach($_POST['class1'] as $class) {
        if($class == "Operating_Systems_I") {
            //$operating_sys = new Operating_Systems_I();
            $operating = "Operating Systems I";
            array_push($classname, $class);
        }
        if($class == "DCSP") {
            //$dcsp = new DCSP();
            $dcsp = "Distributed Client-Server Programming";
            array_push($classname, $class);
        }
        if($class == "Formal_Lang") {
            //$formal = new Formal_Lang();
            $formal = "Introduction to Formal Language";
            array_push($classname, $class);
        }
        if($class == "Physics_II") {
            //$physics = new Physics_II();
            $physics = "Physics II";
            array_push($classname, $class);
        }
        if($class == "Biology_II") {
            $biology = "Biology II";
            //$biology = new Biology_II();
            array_push($classname, $class);
        }
        if($class == "Chemistry_II") {
            $chemistry = "Chemistry II";
            //$chemistry = new Chemistry_II();
            array_push($classname, $class);
        }
        if($class == "Programming_Lang") {
            $prog_lang = "Programming Lang";
            //$prog_lang = new Programming_Lang();
            array_push($classname, $class);
        }
        if($class == "Eng_Stats") {
            $stats = "Engineering Statistics";
            //$stats = new Eng_Stats();
            array_push($classname, $class);
        }
        if($class == "Algorithms") {
            $algo = "Introduction to Algorithms";
            //$algo = new Algorithms();
            array_push($classname, $class);
        }
        if($class == "Ethics") {
            $ethics = "Computer Ethics";
            //$ethics = new Ethics();
            array_push($classname, $class);
        }
        if($class == "Technical_Writing") {
            $write = "Technical Writing";
            //$writing  = new Technical_Writing();
            array_push($classname, $class);
        }
        if($class == "Comp_Architecture") {
            $architect = "Computer Architecture";
            //$architect = new Comp_Architecture();
            array_push($classname, $class);
        }
    }
}

$unchecked = array_diff($full_course, $classname);
$credit = 0;

foreach($unchecked as $courses) {
    if($class == "Operating_Systems_I") {
        //$operating_sys = new Operating_Systems_I();
        $credit += 1;
    }
    if($class == "DCSP") {
        //$dcsp = new DCSP();
        $credit += 1;
    }
    if($class == "Formal_Lang") {
        //$formal = new Formal_Lang();
        $credit += 1;
    }
    if($class == "Programming_Lang") {
        //$prog_lang = new Programming_Lang();
        $credit += 1;
    }
    if($class == "Eng_Stats") {
        //$stats = new Eng_Stats();
        $credit += 1;

    }
    if($class == "Algorithms") {
        //$algo = new Algorithms();
        $credit += 1;
    }
    if($class == "Ethics") {
        //$ethics = new Ethics();
        $credit += 1;
          
    }
    //if($class == "Technical_Writing") {
        //$writing  = new Technical_Writing();
          
    //}
    if($class == "Comp_Architecture") {
        //$architect = new Comp_Architecture();
        $credit += 1;
    }
}

echo '<br />';
echo "Class List (Pick up to hours you have chosen): ";
echo '<br />';
foreach($classname as $subject) {
        if($subject == "Operating_Systems_I") {
            $days = "M,W,F";
            $time = '09:00-09:50';
            echo '<input type="checkbox" id="class1" name="class1[]" value="Operating_Systems_I">';
            echo "$operating (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = '08:00-09:15';
            echo '<input type="checkbox" id="class1" name="class2" value="Operating_Systems_I">';
            echo "$operating (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "DCSP") {
            //$dcsp = new DCSP();
            $days = "M,W,F";
            $time = "11:00-11:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="DCSP">';
            echo "$dcsp (4 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = '17:00-18:15';
            echo '<input type="checkbox" id="class1" name="class2[]" value="DCSP">';
            echo "$dcsp (4 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Formal_Lang") {
            //$formal = new Formal_Lang();
            $days = "M,W,F";
            $time = '13:00-13:50';
            echo '<input type="checkbox" id="class1" name="class1[]" value="Formal_Lang">';
            echo "$formal (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = '09:30-10:45';
            echo '<input type="checkbox" id="class1" name="class2[]" value="Formal_Lang">';
            echo "$formal (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Physics_II") {
            //$physics = new Physics_II();
            $days = "M,W,F";
            $time = '08:00-08:50';
            echo '<input type="checkbox" id="class1" name="class1[]" value="Physics_II">';
            echo "$physics (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = '14:00-15:15';
            echo '<input type="checkbox" id="class1" name="class2[]" value="Physics_II">';
            echo "$physics (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Biology_II") {
            //$biology = new Biology_II();
            $days = "M,W,F";
            $time = '16:00-16:50';
            echo '<input type="checkbox" id="class1" name="class1[]" value="Biology_II">';
            echo "$biology (4 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = "21:40-22:55";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Biology_II">';
            echo "$biology (4 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Chemistry_II") {
            //$chemistry = new Chemistry_II();
            $days = "M,W,F";
            $time = "10:00-10:50";
            array_push($classname, $class);echo '<input type="checkbox" id="class1" name="class1[]" value="Chemistry_II">';
            echo "$chemistry (4 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = "15:30-16:45";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Chemistry_II">';
            echo "$chemistry (4 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Programming_Lang") {
            //$prog_lang = new Programming_Lang();
            $days = "M,W,F";
            $time = "15:00-15:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Programming_Lang">';
            echo "$prog_lang (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = "15:30-16:45";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Programming_Lang">';
            echo "$prog_lang (3 hours) $days $time";
            echo '<br />';
            
        }
        if($subject == "Eng_Stats") {
            //$stats = new Eng_Stats();
            $days = "M,W,F";
            $time = "17:00-17:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Eng_Stats">';
            echo "$stats (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = "18:30-19:45";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Eng_Stats">';
            echo "$stats (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Algorithms") {
            // = new Algorithms();
            $days = "M,W,F";
            $time = "14:00-14:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Algorithms">';
            echo "$algo (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $time = "20:00-21:15";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Algorithms">';
            echo "$algo (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Ethics") {
            //$ethics = new Ethics();
            $days = "M,W,F";
            $time = "12:00-12:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Ethics">';
            echo "$ethics (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $times = "12:30-13:45";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Ethics">';
            echo "$ethics (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Technical_Writing") {
            //$writing  = new Technical_Writing();
            $days = "M,W,F";
            $time = "18:00-18:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Technical_Writing">';
            echo "$write (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $times = "06:30-07:45";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Technical_Writing">';
            echo "$write (3 hours) $days $time";
            echo '<br />';
        }
        if($subject == "Comp_Architecture") {
            //$architect = new Comp_Architecture();
            $days = "M,W,F";
            $time = "07:00-07:50";
            echo '<input type="checkbox" id="class1" name="class1[]" value="Comp_Architecture">';
            echo "$architect (3 hours) $days $time";
            echo '<br />';
            $days = "T,Th";
            $times = "05:00-06:15";
            echo '<input type="checkbox" id="class1" name="class2[]" value="Comp_Architecture">';
            echo "$architect (3 hours) $days $time";
            echo '<br />';
        }
    }

?>
<input type="submit" value="Submit">
</form>
</body>
</html>