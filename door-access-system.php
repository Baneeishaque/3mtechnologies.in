<html>
<head>
    <title>
        3m Technologies | Door Access System
    </title>
    <link rel="shortcut icon" type="image/png" href="icon.png">
    <script type='text/javascript' src='jquery.min.js'></script>
    <script type='text/javascript' src='cycle.js'></script>
    <script type='text/javascript' src='inasdasddex.js'></script>
    <script type='text/javascript' src='jquery.dropSlideMenu.js'></script>

    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            margin: 0 auto;
            background:;
        }

        .header {
            margin-bottom:;
            background: url('hdbar.png');
            height: 105px;
            width: 100%;
            position:;

        }

        a {
            text-decoration: none;
        }

        .header .con {
            margin: 0 auto;
            width: 1000px;
            height: 100px;
            background:;
        }

        .lhead {
            margin-top: 1px;
            float: left;
            width: 400px;
            height: 95px;
            background: url('3m-logo.png');
        }

        .lhead img {
            width: 400px;
            height: 95px;
        }

        .rhead {
            margin-top: 1px;
            float: right;
            width: 600px;
            height: 100px;
            background:;
        }

        .rhead .one {
            margin-top:;
            width: 260px;
            height: 25px;
            background:;
            float: right;
            text-align: center;
            font-weight: bold;
        }

        .rhead .two {
            width: 600px;
            height: 75px;
            background:;
        }

        .menu {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            margin: 45px auto;
            width: 600px;
            height: 40px;
            background: #ffffff;
            border: 1px solid #F5F5F5;
            border-radius: 2px;
        }

        #tell {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            color: #ffffff;
            width: 200px;
            height: 22px;
            background: #68b325;
            float: right;
            padding-top: 6px;
            border: 2px;
            border-radius: 2px;

        }

        #pic {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            color: #ffffff;
            width: 50px;
            height: 28px;
            background: #68b325;
            float: left;
            padding-top:;
            border: 2px;
            border-radius: 2px;

        }

        .menu ul {
            list-style: none;
            margin: 0 auto;

        }

        .menu a {
            text-decoration: none;
            color: #444444;
            font-weight: bold;
        }

        .menu a:hover {
            text-decoration: none;
            color: #D0D0D0;
            font-weight: bold;
        }

        .menu li {
            margin-top: 5px;
            float: left;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 10px;
            padding-right: 10px;
            background:;

        }

        #home {
            border-right: 1px solid #F5F5F5;
            border-left: 1px solid #F5F5F5;

        }

        #other {
            border-right: 1px solid #F5F5F5;
        }

        #main {
            width: 1000px;
            height: 900px;
            margin: 8px auto;
            background: #ffffff;
            padding-top: 5px;
            border: 1px solid #D0D0D0;
        }

        .inmain {
            width: 1000px;
            height: 400px;
            background: #f5f5f5;
        }

        .inmain .one_main {
            width: 700px;
            height: 400px;
            float: left;
            background:;
            overflow: hidden;
        }

        .inmain .two_main {
            width: 300px;
            height: 400px;
            float: right;
            background:;
        }

        .slide_first {
            height: 280px;
            width: 700px;
            background: #F55100;
        }

        .slide_second {
            height: 100px;
            width: 700px;
            background:;
        }

        .topic {
            width: 700px;
            height: 22px;
            background: #F55100;
            padding-left: 5px;
            padding-top: 2px;
            color: #ffffff;
            font-weight: bold;
        }

        .move {
            width: 650px;
            height: 80px;
            background: #ffffff;
            margin: 5px auto;
            border: 2px solid #F55100;
            border-radius: 5px;
        }

        .ctg_main {
            width: 275px;
            height: 400px;
            background: url('ctg.gif');
            margin: 0 auto;
        }

        #map {
            width: 273px;
            height: 162px;
            border: 1px solid silver;
            border-radius: 0px;
            margin: 0px auto;
            background: url('place.png');
        }

        #topp {
            width: 275px;
            height: 26px;
            background: #F55100;
            margin-top: 25px;
            text-align: center;
            color: #ffffff;
            font-weight: bold;
            padding-top: 4px;
        }

        #adrss {
            font-family: 'Roboto Condensed', Helvetica, sans-serif;
            width: 250px;
            height: 145px;
            background: url('') #33A4C9;
            margin: 10px auto;
            border: 1px solid silver;
            text-align: center;
            padding-top: 10px;
            color: #ffffff;
        }

        .abt_main {
            width: 1000px;
            height: 200px;
            background: url('blg.gif');
            margin: 10px auto;
            padding-top: 10px;
        }

        .box {
            width: 200px;
            height: 190px;
            background:;
            border: 1px solid #e4e4e4;
            float: left;

            margin-left: 40px;
        .

        }

        .hed {
            width: 200px;
            height: 24px;
            background: url('hed.gif');
            text-align: center;
            padding-top: 6px;
            color: #ffffff;
            font-weight: bold;
        }

        table {
            border: 0px;
        }

        tr {
        }

        .bttn {
            width: 60px;
            padding-top: 5px;
            height: 22px;
            background: #33A4C9;
            text-align: center;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
        }

        #bttn_one {
            margin: 2px auto;
        }

        #bttn_two {
            margin: 27px auto;
        }

        #bttn_three {
            margin: 27px auto;
        }

        #bttn_four {
            margin: 27px auto;
        }

        .bttn a {
            text-decoration: none;
        }

        .ft {
            width: 100%;
            height: 8px;
            background: #e4e4e4;
        }

        .footer {
            width: 100%;
            height: 75px;
            background: url('ft.gif');
            border-top: 2px solid black;
            text-align: center;
            padding-top: 25px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .social_main {
            width: 655px;
            margin: 2px auto;
            height: 25px;
            background:;
            padding: 0px;
        }

        .social_in {
            width: 216px;
            float: left;
            height: 23px;
            cursor: pointer;
            border: 1px;
            border-radius: 5px;
            margin-left: 2px;
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            padding-top: 5px;
        }

        #fb {
            background: #3b5998;
        }

        #tw {
            background: #00aced;
        }

        #gp {
            background: #dd4b39;
        }

        #fb:hover {
            background: #244CA0;
        }

        #tw:hover {
            background: #13B8F7;
        }

        #gp:hover {
            background: #E84531;
        }

        .p_head {
            width: 995px;
            height: 25px;
            margin: auto;
            color: #555555;
            font-weight: bold;
            padding-left: 5px;
            background: -webkit-gradient(linear, left top, left bottom, from(#fcfcfc), to(#cfcfcf));
        }

        .p_details_main {
            width: 1000px;
            height: 300px;
            background:;
            margin: 5px auto;
        }

        .p_details_left {
            width: 750px;
            height: 150px;
            float: left;
            background: url('pbgt.gif');
        }

        .p_details_right {
            width: 250px;
            float: right;
            height: 200px;
            background:;
        }

        .p_details {
            width: 690px;
            height: 100px;
            margin: 30px auto;
            background:;
            color: #ffffff;
        }

        .p_quality_title {
            width: 220px;
            height: 20px;
            margin: 10px auto;
            background: white;
            color: #555555;
            font-weight: bold;
        }

        .p_quality_main {
            width: 220px;
            height: 150px;
            background:;
            margin: 2px auto;
        }

        .p_move {
            width: 750px;
            height: 100px;
            margin: 3px auto;
            background:;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .p_next_main {
            width: 1000px;
            height: 210px;
            background:;
            margin: 5px auto;
        }

        .p_next_left {
            width: 750px;
            height: 200px;
            float: left;

            background:;
            padding-top: 3px;
        }

        .p_next_right {
            float: right;
            background: url('p_cctv.gif');
            width: 250;
            height: 210px;
        }

        #special {
            color: #ffffff;
        }

        #size {
            font-size: 13px;
        }

        .table_back {
            width: 750px;
            height: 190px;
            background: #00559B;
        }

        .p_dvr_main {
            width: 1000px;
            height: 250px;
            background: black;
        }

        .p_dvr_main_left {
            background: url('p_dvr.gif');
            width: 300px;
            float: left;
            height: 250px;
        }

        .p_dvr_main_left_right {
            background: #00559B;
            width: 700px;
            float: right;
            height: 250px;
        }

        .p_dvr_full {
            width: 600px;
            height: 100px;
            background:;
            margin: 60px auto;
            color: #ffffff;
        }

        .p_dvr_mainn {
            width: 1000px;
            height: 250px;
            background: black;
        }

        .p_dvr_main_leftt {
            background: url('door_p.gif');
            width: 300px;
            float: right;
            height: 250px;
        }

        .p_dvr_main_left_rightt {
            background: #00559B;
            width: 700px;
            float: left;
            height: 250px;
        }

        .p_dvr_fulll {
            width: 600px;
            height: 100px;
            background:;
            margin: 60px auto;
            color: #ffffff;
        }

        #dvr {
            padding-top: 3px;
        }

        .p_dvr_mainq {
            width: 1000px;
            height: 250px;
            background: black;
        }

        .p_dvr_main_leftq {
            background: url('door_b.gif');
            width: 300px;
            float: left;
            height: 250px;
        }

        .p_dvr_main_left_rightq {
            background: #00559B;
            width: 700px;
            float: right;
            height: 250px;
        }

        .p_dvr_fullq {
            width: 600px;
            height: 100px;
            background:;
            margin: 60px auto;
            color: #ffffff;
        }
    </style>

</head>
<body>
<?php
require('header.php');
?>
<div id="main">
    <div class="p_head">DOOR ACCESSING SYSTEM</div>
    <div class="p_details_main">
        <div class="p_details_left">
            <div class="p_details">

                We are one of the most celebrated providers of installation of a qualitative variety of CCTVs and its
                related accessories. These services are carried out out by our well trained professionals, who are adept
                in this domain. Notable for their superlative characteristics, these products are effectively installed
                for electronic surveillance of the premises.

            </div>
            <div class="p_move">
                <div class="right_contant_down_jqry">
                    <img src="door1.gif">
                    <img src="door2.gif">
                </div>
            </div>
        </div>
        <div class="p_details_right">

            <div class="p_quality_title">Features</div>
            <div class="p_quality_main">
                <table style="width:200px; margin:1px auto;">
                    <tr>
                        <td style="width:25px;"><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>100% costume satisfy.</td>
                    </tr>
                    <tr>
                        <td><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>Life long support.</td>
                    </tr>
                    <tr>
                        <td><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>World class product.</td>
                    </tr>
                    <tr>
                        <td><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>Competitive rate</td>
                    </tr>
                    <tr>
                        <td><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>Best service.</td>
                    </tr>
                    <tr>
                        <td><img src="check.png" style="width:24px; height:30px;"></td>
                        <td>Updated technologies.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="p_head">Door Accessing system</div>
    <div class="p_dvr_mainn">
        <div class="p_dvr_main_leftt"></div>
        <div class="p_dvr_main_left_rightt">
            <div class="p_dvr_fulll">We deliver various door access control equipments. Like, Bio Online / Offline, Bio
                Finger, Bio-A1, Bio Smart, Access Control and more..<br>Features
                :<br>Solid Optical Fingerprint Sensor,Low power consumption and fast power on-time<br>Register
                Fingerprint through sensor and send to BioOffline/BioOnline<br>BioOffline have transaction storage
                capacity and BioOnline does not have transaction storage capacity.
            </div>
        </div>
    </div>
    <div class="p_head" id="dvr">Bio Metric</div>
    <div class="p_dvr_mainq">
        <div class="p_dvr_main_leftq"></div>
        <div class="p_dvr_main_left_rightq">
            <div class="p_dvr_fullq"><b>FingerDisk </b><br>The FingerDisk is Biometric Access Controlled USB Flash
                Drive, which gives fingerprint access control to the content of the USB key for secure storage of your
                data and applications.<br><b>Finger HDD </b><br>The FingerHDD is Biometric Access Controlled USB Hard
                Disk, which gives fingerprint access control to the content of the Harddisk for secure storage of your
                data and applications.
            </div>
        </div>
    </div>
</div>


<div class="ft"></div>
<div class="footer"><a href="">Powered by Bloggerindia</a></div>
</body>

</html>
