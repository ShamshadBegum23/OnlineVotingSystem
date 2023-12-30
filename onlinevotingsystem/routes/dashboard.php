<?php
//include("../api/connect.php") ; 
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}
$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];
if($_SESSION['userdata']['status']==0){
$status='<b style="color:red">Not Voted</b>';
}
else{
    $status='<b style="color:green">Voted</b>';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Online Voting System-Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>

    <style>
        #backbtn {
            padding: 10px;
            border-radius: 5px;
            background-color: #48dbfb;
            color: black;
            margin: 5px;
            float: left;

        }

        #logoutbtn {
            padding: 10px;
            border-radius: 5px;
            background-color: #48dbfb;
            color: black;
            margin: 5px;
            float: right;

        }

        #profile {
            background-color: white;
            width: 30%;
            padding: 30px;
            float: left;
        }

        #Group {
            background-color: white;
            width: 60%;
            padding: 20px;
            float: right;
        }

        #votebtn {
            padding: 10px;
            border-radius: 5px;
            background-color: #48dbfb;
            color: black;
            margin: 5px;
        }

        #mainSection {
            padding: 10px;
        }
        #mainpanel{
            padding: 10px;
        }
        #voted{
            padding: 10px;
            border-radius: 5px;
            background-color: green;
            color: whitesmoke;
            margin: 5px;
        }
        
    </style>
    <div id="mainSection">
        <center>
            <div id="headerSection">
            <a href="../"><button id="backbtn">BACK</button></a>
            <a href="msg_1.php"><button id="logoutbtn">MSG</button></a>
            <a href="logout.php"><button id="logoutbtn">LOGOUT</button></a>
            </div>
            <h1>ONLINE VOTING SYSTEM</h1>
        </center>
        <hr>
        <div id="mainpanel">
            <div id="Profile">
                <center><img src="../uploadss/<?php echo $userdata['photo'] ?>" height="200" width="200"></center><br><br>
                <b>NAME:</b><?php echo $userdata['name'] ?><br><br>
                <b>MOBILE:</b><?php echo $userdata['mobile'] ?><br><br>
                <b>ADDRESS:</b><?php echo $userdata['address'] ?><br><br>
                <b>STATUS:</b><?php echo $status ?><br><br>
            </div>
            <div id="Group">
                <?php
                if ($_SESSION['groupsdata']) {
                    for ($i = 0; $i < count($groupsdata); $i++) {
                ?>
                        <div>
                            <img style="float: right;" src="../uploadss/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100"><br><br>
                            <b>CANDIDATE NAME:</b><?php echo $groupsdata[$i]['name'] ?><br><br>
                            <b>VOTES:</b><?php echo $groupsdata[$i]['votes'] ?><br><br>
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                <?php
                                if($_SESSION['userdata']['status']==0){
                                    ?>
                                    <input type="submit" name="votebtn" value="Vote" id="votebtn">
                                    <?php

                                }
                                else{
                                    ?>
                                    <button disabled type="button" name="votebtn" value="Vote" id="voted">VOTED</button>
                                    <?php
                                }
                                ?>
                               
                            </form>
                            <hr>
                        </div>

                <?php

                    }
                } else {
                }
                ?>                
            </div>
        </div>
    </div>
</body>

</html>
