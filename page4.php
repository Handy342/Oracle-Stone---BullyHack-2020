<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="page2.css"> 
</head>
<body>
<?
$max_hours = $_POST['hours'];
$semester_hour = 0;
$section1 = [];
$section2 = [];
if(isset($_POST['class1'])) {
    foreach($_POST['class1'] as $class) {
        if($class == "Operating_Systems_I") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "DCSP") {
            $semester_hour += 4;
            array_push($section1, $class);
        }
        if($class == "Formal_Lang") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Physics_II") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Biology_II") {
            $semester_hour += 4;
            array_push($section1, $class);
        }
        if($class == "Chemistry_II") {
            $semester_hour += 4;
            array_push($section1, $class);
        }
        if($class == "Programming_Lang") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Eng_Stats") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Algorithms") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Ethics") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Technical_Writing") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
        if($class == "Comp_Architecture") {
            $semester_hour += 3;
            array_push($section1, $class);
        }
    }
}


if(isset($_POST['class2'])) {
    foreach($_POST['class2'] as $class) {
        if($class == "Operating_Systems_I") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "DCSP") {
            $semester_hour += 4;
            array_push($section2, $class);
        }
        if($class == "Formal_Lang") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Physics_II") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Biology_II") {
            $semester_hour += 4;
            array_push($section2, $class);
        }
        if($class == "Chemistry_II") {
            $semester_hour += 4;
            array_push($section2, $class);
        }
        if($class == "Programming_Lang") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Eng_Stats") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Algorithms") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Ethics") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Technical_Writing") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
        if($class == "Comp_Architecture") {
            $semester_hour += 3;
            array_push($section2, $class);
        }
    }
}
echo "Hours taken: $semester_hour";
echo '<br />';
echo '<table style"width:100%">';
echo '<tr>';
echo '<th>Classes</th>';
echo '<th>Days</th>';
echo '<th>Time</th>';
echo '</tr>';

foreach($section1 as $course) {
    if($course == "Operating_Systems_I") {
        echo '<tr>';
        echo '<td>Operating System  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 09:00-09:50 </td>';
        echo '</tr>';
    }
    if($course == "DCSP") {
        echo '<tr>';
        echo '<td>Distributed Client-Server Programming  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 11:00-11:50 </td>';
        echo '</tr>';
        
    }
    if($course == "Formal_Lang") {
        echo '<tr>';
        echo '<td>Introduction to Formal Language  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 13:00-13:50';
        echo '</tr>';
    }
    if($course == "Physics_II") {
        echo '<tr>';
        echo '<td>Physics II  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 08:00-08:50';
        echo '</tr>';
    }
    if($course == "Biology_II") {
        echo '<tr>';
        echo '<td>Biology II  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 16:00-16:50';
        echo '</tr>';
    }
    if($course == "Chemistry_II") {
        echo '<tr>';
        echo '<td>Chemistry II  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 10:00-10:50';
        echo '</tr>';
    }
    if($course == "Programming_Lang") {
        echo '<tr>';
        echo '<td>Programming Language </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 15:00-15:30';
        echo '</tr>';
    }
    if($course == "Eng_Stats") {
        echo '<tr>';
        echo '<td>Engineering Statistics  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 17:00-17:50';
        echo '</tr>';
    }
    if($course == "Algorithms") {
        echo '<tr>';
        echo '<td>Introduction to Algorithms  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 14:00-14:50';
        echo '</tr>';
    }
    if($course == "Ethics") {
        echo '<tr>';
        echo '<td>Computer Ethics  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 12:00-12:50';
        echo '</tr>';
    }
    if($course == "Technical_Writing") {
        echo '<tr>';
        echo '<td>Technical Writing  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 18:00-18:50';
        echo '</tr>';
    }
    if($course == "Comp_Architecture") {
        echo '<tr>';
        echo '<td>Computer Architecture  </td>';
        echo '<td>M,W,F  </td>';
        echo '<td> 07:00-07:50';
        echo '</tr>';
    }
}

foreach($section2 as $course) {
    if($course == "Operating_Systems_I") {
        echo '<tr>';
        echo '<td>Operating System  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 08:00-09:15 </td>';
        echo '</tr>';
    }
    if($course == "DCSP") {
        echo '<tr>';
        echo '<td>Distributed Client-Server Programming  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 17:00-18:15 </td>';
        echo '</tr>';
        
    }
    if($course == "Formal_Lang") {
        echo '<tr>';
        echo '<td>Introduction to Formal Language  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 09:30-10:45';
        echo '</tr>';
    }
    if($course == "Physics_II") {
        echo '<tr>';
        echo '<td>Physics II  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 14:00-15:15';
        echo '</tr>';
    }
    if($course == "Biology_II") {
        echo '<tr>';
        echo '<td>Biology II  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 21:40-22:55';
        echo '</tr>';
    }
    if($course == "Chemistry_II") {
        echo '<tr>';
        echo '<td>Chemistry II  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 15:30-16:45';
        echo '</tr>';
    }
    if($course == "Programming_Lang") {
        echo '<tr>';
        echo '<td>Programming Languages  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 15:30-16:45';
        echo '</tr>';
    }
    if($course == "Eng_Stats") {
        echo '<tr>';
        echo '<td>Engineering Statistics  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 18:30-19:45';
        echo '</tr>';
    }
    if($course == "Algorithms") {
        echo '<tr>';
        echo '<td>Introduction to Algorithms  </td>';
        echo '<td>T, Th </td>';
        echo '<td> 20:00-21:15';
        echo '</tr>';
    }
    if($course == "Ethics") {
        echo '<tr>';
        echo '<td>Computer Ethics  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 12:30-13:45';
        echo '</tr>';
    }
    if($course == "Technical_Writing") {
        echo '<tr>';
        echo '<td>Technical Writing  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 06:30-07:45';
        echo '</tr>';
    }
    if($course == "Comp_Architecture") {
        echo '<tr>';
        echo '<td>Computer Architecture  </td>';
        echo '<td>T, Th  </td>';
        echo '<td> 05:00-06:15';
        echo '</tr>';
    }
}
?>



</body>
</html>