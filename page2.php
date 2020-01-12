<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="page2.css"> 
</head>
<body>
    <form action="page3.php" method="post">
        
    <h3 id="header">Oracle Stone</h3>
<?php
    include("schedule_builder.php");
    $name = $_POST['name'];
    $date = $_POST['date'];
    $major = $_POST['major'];
    $student = new Student();
    
    $number = 0;
    $student->setName($name);
    $student->setDate($date);
    $student->setMajor($major);
    $student->setHour($number);
    $student->setDegreeReq($number);
    
    echo "<br />";
    echo "Class List: [select classes to take]";
    echo "<br /><br /><br />";
    
    if($major == 'cs') {
        echo '<input type="checkbox" id="class1" name="class1[]" value="Operating_Systems_I"> Operating System <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="DCSP">  Distributed Client-Server Programming <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Formal_Lang"> Introduction to Formal Language <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Physics_II"> Physics II <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Biology_II"> Biology II <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Chemistry_II"> Chemistry II <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Programming_Lang"> Programming Language <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Eng_Stats"> Engineering Statistics <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Algorithms"> Introduction to Algorithms <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Ethics"> Computer Ethics <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Technical_Writing"> Technical Writing <br />';
        echo '<input type="checkbox" id="class1" name="class1[]" value="Comp_Architecture"> Computer Architecture <br />';

    }
    
    elseif($major == 'crim') {
        echo "Criminology goes here";
    }
    
    /*
    

    <br />
    
    
    
    
    <input type="checkbox" id="class1" name="class1[]" value="Intro_Social_Research"> Introduction to Social Research <br />;
    <label>Introduction to Social Research</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Criminological_Theory"> Criminological Theory <br />;
    <label>Operating Systems</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Gender_Crime_Justice"> Gender Crime Justice <br />;
    <label>Database Management System</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Race_Crime_Justice"> Race Crime Justice <br />;
    <label>Introduction to Formal Language</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Deviant_Behaviour"> Deviant Behaviour <br />;
    <label>Introduction to Algorithms</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Violence_in_US"> Violence in US <br />;
    <label>AI class 1</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Policing_and_Society"> Policing and Society <br />;
    <label>Introduction to Software Engineering</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Contemp_Issues_in_Crim_Just"> Contemporary Issues in Criminal Justice <br />;
    <label>Game Design</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Social_Research_Practice"> Social Research Practice <br />;
    <label>Operating Systems</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Juvenile_Delinquency"> Juvenile Delinquency <br />;
    <label>Database Management System</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Drugs_Crime_Control"> Drugs Crime Control <br />;
    <label>Introduction to Formal Language</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Victimology"> Victimology <br />;
    <label>Introduction to Algorithms</label> <br /> 
    <input type="checkbox" id="class1" name="class1[]" value="Media_Crime_Justice"> Media Crime Justice <br />;
    <label>AI class 1</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Correctional_Systems"> Correctional Systems <br />;
    <label>Introduction to Software Engineering</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Laws_and_Society"> Laws and Society <br />;
    <label>Game Design</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Senior_Seminar_Criminology"> Senior Seminar Criminology <br />;
    <label>Operating Systems</label> <br />
 
    <input type="checkbox" id="class1" name="class1[]" value="Public_Speaking"> Public Speaking <br />;
    <label>Introduction to Algorithms</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Intro_Communications"> Intro
    <label>AI class 1</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Eng_Comp_I">
    <label>Introduction to Software Engineering</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Accelerated_Comp_I">
    <label>Game Design</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Eng_Comp_II">
    <label>Operating Systems</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Accelerated_Comp_II">
    <label>Database Management System</label> <br />
    
    
    <input type="checkbox" id="class1" name="class1[]" value="Modern_Physics">
    <label>Introduction to Formal Language</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Electronic_Circuits">
    <label>Introduction to Algorithms</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Differential_Equations_II">
    <label>AI class 1</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Inter_Mechanics">
    <label>Introduction to Software Engineering</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Intro_Philosophy">
    <label>Game Design</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Intro_Logic">
    <label>Operating Systems</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Early_US_History">
    <label>Introduction to Algorithms</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Electromagnetic_Fields_II">
    <label>AI class 1</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Inter_Laboratory">
    <label>Introduction to Software Engineering</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Inter_Optics">
    <label>Game Design</label> <br />
    <br />
    
    <input type="checkbox" id="class1" name="class1[]" value="DCSP">
    <label>Distributed Client-Server Programming</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Formal_Lang">
    <label>Introduction to Formal Language</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Physics_II">
    <label>Physics II</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value=" Biology_II">
    <label>Biology II</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Chemistry_II">
    <label>Chemistry II</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Programming_Lang">
    <label>Programming Language</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Eng_Stats">
    <label>Engineering Statistics</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Algorithms">
    <label>Introduction to Algorithms</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Ethics">
    <label>Computer Ethics</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Technical_Writing">
    <label>Technical Writing</label> <br />
    <input type="checkbox" id="class1" name="class1[]" value="Comp_Architecture">
    <label>Computer Architecture</label> <br />";
    <input type="checkbox" id="class1" name="class1[]" value="Operating_Systems_I">
    <label>Operating Systems</label> <br />
    
    */
?>    
    
    <input type="submit" value="Submit" />

</form>
</body>
</html>