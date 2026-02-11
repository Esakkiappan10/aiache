<?php
include 'db.php';

// Function to create table if not exists (or recreate for Andhra)
function createTable($conn, $tableName, $drop = false) {
    if ($drop) {
        $conn->query("DROP TABLE IF EXISTS $tableName");
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        LM_NO VARCHAR(50),
        State VARCHAR(50),
        St_No VARCHAR(50),
        Name_of_the_College TEXT NOT NULL,
        Website VARCHAR(255),
        Principal_Name VARCHAR(100),
        Phone_No VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table $tableName created/checked successfully.<br>";
    } else {
        echo "Error creating table $tableName: " . $conn->error . "<br>";
    }
}

// 1. Create New Region Tables
$new_regions = ['NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'];
foreach ($new_regions as $region) {
    createTable($conn, $region);
}

// 2. Recreate ANDHRA Table with new schema
createTable($conn, "ANDHRA", true);

// 3. Populate ANDHRA Data
$andhra_data = [
    ["LM1/ AP1", "AP", "1", "ANDHRA CHRISTIAN COLLEGE GUNTUR - 522 001 ANDHRA PRADESH", "http://www.accollegeguntur.com/"],
    ["", "AP", "2", "ANDHRA CHRISTIAN COLLEGE OF LAW GUNTUR CITY - 522 001 ANDHRA PRADESH", ""],
    ["LM2/ AP3", "AP", "3", "ANDHRA LOYOLA COLLEGE VIJAYAWADA - 520 008 ANDHRA PRADESH", "http://www.andhraloyolacollege.ac.in"],
    ["LM3/ AP4", "AP", "4", "ANDHRA LUTHERAN COLLEGE OF EDUCATION P.B. NO. 228, BRODIEPET MAIN LINE GUNTUR - 522 002 ANDHRA PRADESH", "http://www.alcollegeofeducation.org"],
    ["LM4/ AP5", "AP", "5", "FATIMA COLLEGE OF EDUCATION FATIMA NAGAR POST R.E.C WARANGAL - 506 013 ANDHRA PRADESH", "http://www.fatimacoewgl.ac.in/"],
    ["", "AP", "6", "HOLY CROSS COLLEGE NGUNADELA P.O. VIJAYAWADA - 520 004 ANDHRA PRADESH", ""],
    ["", "AP", "7", "JESUS MARY JOSEPH (J.M.J) DEGREE COLLEGE FOR WOMEN KARUNAPURAM, PEDDAPENDIAL WARANGAL - 506 151 ANDHRA PRADESH", ""],
    ["LM5/ AP8", "AP", "8", "J.M.J. COLLEGE FOR WOMEN (AUTON.) MORRISPET, TENALI GUNTUR DISTRICT ANDHRA PRADESH - 522 202", "http://www.jmjcollege.ac.in"],
    ["LM6/ AP9", "AP", "9", "LOYOLA ACADEMY OLD ALWAL, SECUNDERABAD ANDHRA PRADESH - 522 010", "http://www.loyolaacademyugpg.ac.in"],
    ["LM227/AP10", "AP", "10", "LOYOLA DEGREE COLLEGE (Y.S.R.R) PULIVENDLA - 516 390 CUDDAPAH DISTRICT ANDHRA PRADESH", "https://loyoladegreecollegeysrr.ac.in/"],
    ["LM7/ AP11", "AP", "11", "MARIS STELLA COLLEGE VIJAYAWADA - 520 008 ANDHRA PRADESH", "http://www.marisstella.ac.in"],
    ["", "AP", "12", "NOBLE COLLEGE MACHILIPATNAM - 521 001 ANDHRA PRADESH", "http://noblecollegemtm.org/"],
    ["LM8/ AP13", "AP", "13", "ST. ANN`S COLLEGE FOR WOMEN SANTOSHNAGAR COLONY MEHDIPATNAM, HYDERABAD ANDHRA PRADESH - 500 028", "http://www.stannscollegehyd.com"],
    ["LM9/ AP14", "AP", "14", "ST. ANN`S COLLEGE OF EDUCATION SAROJINI DEVI ROAD SECUNDERABAD - 500 003 ANDHRA PRADESH", "http://www.stannscoe.com"],
    ["", "AP", "15", "ST. ANN`S DEGREE COLLEGE MALKAPURAM VISAKHAPATNAM - 530 001 ANDHRA PRADESH", "https://stannscollegevizag.org/"],
    ["LM10/ AP16", "AP", "16", "ST. FRANCIS COLLEGE FOR WOMEN BEGUMPET ROAD HYDERABAD - 500 016 ANDHRA PRADESH", "http://www.sfc.ac.in"],
    ["", "AP", "17", "ST.GEORGE'S DEGREE COLLEGE 5-9-263, KING KOTI RD, ABIDS HYDERABAD, TELANGANA- 500001", "https://www.stgdcw.com/"],
    ["LM11/ AP18", "AP", "18", "ST. JOSEPH`S COLLEGE OF EDUCATION FOR WOMEN SAMBASIVAPET, GUNTUR ANDHRA PRADESH - 522 004", "http://www.stjosephbedcollege.ac.in"],
    ["LM12/ AP19", "AP", "19", "ST. JOSEPH`S COLLEGE FOR WOMEN WALTAIR R.S. VISHAKAPATNAM - 530 004 ANDHRA PRADESH", "https://stjosephsvizag.com/"],
    ["LM13/ AP20", "AP", "20", "ST. MARY`S CENTENARY COLLEGE OF EDUCATION GNANAPURAM, VISHAKAPATNAM ANDHRA PRADESH", "http://smccevizag.org/"],
    ["LM14/ AP21", "AP", "21", "ST.PIOUS CHRISTIAN DEGREE AND P.G.COLLEGE FOR WOMEN SNEHAPURI COLONY NACHARAM HYDERABAD - 76 ANDHRA PRADESH", "http://www.stpiouscollege.org/"],
    ["LM15/ AP22", "AP", "22", "CH.S.D ST. THERESA`S COLLEGE FOR WOMEN,ELURU GAVARAVARAM, ELURU W.G. DISTRICT ANDHRA PRADESH - 534 003", "http://www.chsd-theresacollege.net"],
    ["", "AP", "23", "ST. VINCENT DE PAUL DEGREE COLLEGE, DE PAUL NAGAR PINAKADIMI VILLAGE WEST GODAVARI DISTRICT ANDHRA PRADESH - 534 003", "https://www.depaulelr.edu.in/"],
    ["", "AP", "24", "STANLEY DEGREE COLLEGE FOR WOMEN, CHAPEL ROAD HYDERABAD - 500 001 ANDHRA PRADESH", "http://stanley.edu.in/"],
    ["", "AP", "25", "S.T.B.C. DEGREE COLLEGE KURNOOL - 518 004 ANDHRA PRADESH", ""],
    ["", "AP", "26", "TARLUPAD COLLEGE OF EDUCATION MISSION COMPOUND TARLUPADU, PRAKASAM DISTRICT ANDHRA PRADESH - 523 332", ""],
    ["", "AP", "27", "VIDYA JYOTHI DEGREE & P.G. COLLEGE STATION GHANPUR WARANGAL - 506 144 TELANGANA", "http://vidyajyothicollege.com/"],
    ["LM16/ AP28", "AP", "28", "VIJNANANILAYAM DEGREE COLLEGE JANAMPET, VIJAYARAI ELURU - 534 475 ANDHRA PRADESH", "www.vijnananilayam.org"],
    ["", "AP", "29", "WESLEY DEGREE COLLEGE (CO-ED) 145, MCINTYRE ROAD SECUNDERABAD - 500 003 ANDRHA PRADESH ANDHRA PRADESH", "https://wesleydegreecollege.com/"],
    ["LM226/AP32", "AP", "30", "ANDHRA LOYOLA INSTITUTE OF ENGINEERING AND TECHNOLOGY POLYTECHNIC POST OFFICE VIJAYAWADA - 520 008 ANDHRA PRADESH", "https://www.aliet.ac.in/"]
];

$stmt = $conn->prepare("INSERT INTO ANDHRA (LM_NO, State, St_No, Name_of_the_College, Website) VALUES (?, ?, ?, ?, ?)");

foreach ($andhra_data as $row) {
    if (empty($row[0])) $row[0] = ""; 
    if (empty($row[4])) $row[4] = "";
    
    $stmt->bind_param("sssss", $row[0], $row[1], $row[2], $row[3], $row[4]);
    if ($stmt->execute()) {
        // Success
    } else {
        echo "Error inserting " . $row[3] . ": " . $stmt->error . "<br>";
    }
}

echo "Andhra data populated successfully.<br>";
$stmt->close();
$conn->close();
?>
