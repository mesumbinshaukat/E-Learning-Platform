<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
    header('location: ../college_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Students</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php") ?>

</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php") ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php"); ?>

            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Course</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Manage</li>

                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Name Of The Course</label> </b>
                            <select name="name_of_the_course" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>
                                <option value="Voice process">Voice process</option>
                                <option value="Cloud computing ">Cloud computing </option>
                                <option value="Medical Coding">Medical Coding</option>
                                <option value="Tally + GST">Tally + GST</option>
                                <option value="Web Technologies">Web Technologies</option>
                                <option value="JAVA">JAVA</option>
                                <option value="Medical Coding & Transcription">Medical Coding & Transcription</option>
                                <option value="Human resource management ">Human resource management </option>
                                <option value="Digital Marketing ">Digital Marketing </option>
                                <option value="Python">Python</option>
                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary" name="search"
                            style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
                    </div>
                </form>

                <br>
                <br>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">date of adding</th>
                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Student name</th>
                                                <th class="border-bottom-0">College name</th>
                                                <th class="border-bottom-0">Course</th>
                                                <th class="border-bottom-0">Acc type</th>
                                                <th class="border-bottom-0">payment type</th>
                                                <th class="border-bottom-0">Trainer allocation</th>
                                                <!--<th class="border-bottom-0">Trainer name</th>-->
                                                <!--<th class="border-bottom-0">Batch Name</th>-->
                                                <!--<th class="border-bottom-0">Session slot</th>-->
                                                <!--<th class="border-bottom-0">Duration</th>-->
                                                <!--<th class="border-bottom-0">Starting Date</th>-->
                                                <!--<th class="border-bottom-0">Ending Date</th>	-->
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2291</td>
                                                <td>Prasanthi Medapati </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2292</td>
                                                <td>Rayudu sri rama veni</td>
                                                <td></td>
                                                <td>Cloud computing </td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2297</td>
                                                <td>Vegesna Hemanth varma </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2301</td>
                                                <td>Kandiboyina Durga</td>
                                                <td></td>
                                                <td>Medical Coding</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2302</td>
                                                <td>Kontheti.Divya Sri Sindhu</td>
                                                <td></td>
                                                <td>Medical Coding</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2303</td>
                                                <td>BASAMSETTI VENKATA RATHNAM</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2304</td>
                                                <td>Karanam Meena </td>
                                                <td></td>
                                                <td>Medical Coding</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2305</td>
                                                <td>KOTAPALLI MUNIGEETHA</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2306</td>
                                                <td>PatnoolSamreentaj</td>
                                                <td></td>
                                                <td>Medical Coding</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>10</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2307</td>
                                                <td>Ganji Ravikanth </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2308</td>
                                                <td>DEVI VARAPRASAD DULLA</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>12</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2309</td>
                                                <td>Kadiyam Haritha </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>13</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2310</td>
                                                <td>MANDAPATI NAGA VENKATA RAVI </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>14</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2311</td>
                                                <td>Pulluri Lakshmi prasanna</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>15</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2312</td>
                                                <td>Chebrolu Sowmya </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>16</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2313</td>
                                                <td>Bandi Srilakshmi Prasanna </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>17</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2314</td>
                                                <td>Kankaraju prasanna rani </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>18</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2315</td>
                                                <td>Gurajapu Srinu </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>19</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2316</td>
                                                <td>NIDAMARTHI NAGENDRA</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>20</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2317</td>
                                                <td>MANGARAJU NACHUKA </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>21</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2318</td>
                                                <td>VISSAKODETI GAYATHRI</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>22</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2319</td>
                                                <td>VISSAKODETI GAYATHRI</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>23</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2320</td>
                                                <td>Meesala Durga prasanna</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>24</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2321</td>
                                                <td>ARIGELA RAMPRASAD</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>25</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2322</td>
                                                <td>lalitha sivani gadepalli</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>26</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2323</td>
                                                <td>Mungara Dhanalakshmi</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>27</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2324</td>
                                                <td>Durga Devi</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>28</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2325</td>
                                                <td>Udatha pavani</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>29</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2326</td>
                                                <td>Udatha pavani</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>30</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2327</td>
                                                <td>Purella Mahesh Babu </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>31</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2328</td>
                                                <td>Chodhumalla Satish </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>32</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2329</td>
                                                <td>Siva satyanarayana </td>
                                                <td></td>
                                                <td>Tally + GST</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>33</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2330</td>
                                                <td>Yandapalli Monisha </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>34</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2331</td>
                                                <td>lalitha sivani gadepalli</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>35</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2332</td>
                                                <td>S.Sadiya</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>36</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2333</td>
                                                <td>Madivili Naresh</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>37</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_2334</td>
                                                <td>Sayyad Allahbakash</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>38</td>
                                                <td>2023-06-02 13:25:44</td>
                                                <td>TRSTU_2398</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>39</td>
                                                <td>2023-06-05 16:23:45</td>
                                                <td>TRSTU_2432</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>40</td>
                                                <td>2023-08-01 18:51:48</td>
                                                <td>TRSTU_2629</td>
                                                <td>MCV degree college </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>41</td>
                                                <td>2023-08-01 19:36:28</td>
                                                <td>TRSTU_2637</td>
                                                <td>K Mahesh Kumar Reddy </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>42</td>
                                                <td>2023-08-02 14:30:36</td>
                                                <td>TRSTU_2671</td>
                                                <td>E.mounika</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>43</td>
                                                <td>2023-08-02 14:47:16</td>
                                                <td>TRSTU_2674</td>
                                                <td>Gayathri </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>44</td>
                                                <td>2023-08-02 18:42:10</td>
                                                <td>TRSTU_2706</td>
                                                <td>Asha</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>45</td>
                                                <td>2023-08-02 18:47:11</td>
                                                <td>TRSTU_2709</td>
                                                <td>Najin</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>46</td>
                                                <td>2023-08-02 18:47:20</td>
                                                <td>TRSTU_2710</td>
                                                <td>Najin</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>47</td>
                                                <td>2023-08-02 22:19:21</td>
                                                <td>TRSTU_2725</td>
                                                <td>Pogakula Shaik Abrar Ul Haq</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>48</td>
                                                <td>2023-08-03 09:52:25</td>
                                                <td>TRSTU_2740</td>
                                                <td>Deepa </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>49</td>
                                                <td>2023-08-03 10:16:01</td>
                                                <td>TRSTU_2745</td>
                                                <td>D.thirumalesh </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>50</td>
                                                <td>2023-08-03 10:49:12</td>
                                                <td>TRSTU_2752</td>
                                                <td>K Ganesh</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>51</td>
                                                <td>2023-08-03 11:06:39</td>
                                                <td>TRSTU_2758</td>
                                                <td>G Geetha</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>52</td>
                                                <td>2023-08-03 11:50:16</td>
                                                <td>TRSTU_2783</td>
                                                <td>B.kavitha</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>53</td>
                                                <td>2023-08-03 19:54:13</td>
                                                <td>TRSTU_2820</td>
                                                <td>D vikram </td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>54</td>
                                                <td>2023-08-04 12:05:15</td>
                                                <td>TRSTU_2837</td>
                                                <td>K.Bhavana</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>55</td>
                                                <td>2023-08-04 18:53:25</td>
                                                <td>TRSTU_2861</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>56</td>
                                                <td>2023-08-04 21:32:22</td>
                                                <td>TRSTU_2869</td>
                                                <td>N.seema</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>57</td>
                                                <td>2023-08-05 17:33:00</td>
                                                <td>TRSTU_2893</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>58</td>
                                                <td>2023-08-09 15:22:55</td>
                                                <td>TRSTU_2978</td>
                                                <td>Pikki adhilakshmi</td>
                                                <td></td>
                                                <td>Tally + GST</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>59</td>
                                                <td>2023-08-11 08:57:45</td>
                                                <td>TRSTU_3039</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>60</td>
                                                <td>2023-08-16 18:22:32</td>
                                                <td>TRSTU_3061</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>61</td>
                                                <td>2023-08-20 15:44:02</td>
                                                <td>TRSTU_3121</td>
                                                <td>Nalli sowmya</td>
                                                <td></td>
                                                <td>JAVA</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>62</td>
                                                <td>2023-08-24 17:32:37</td>
                                                <td>TRSTU_3143</td>
                                                <td>Shaik.Mashroon</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>63</td>
                                                <td>2023-09-25 18:53:56</td>
                                                <td>TRSTU_3199</td>
                                                <td>Renuka devj</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>64</td>
                                                <td>2023-09-25 21:25:46</td>
                                                <td>TRSTU_3209</td>
                                                <td>P.Hindu Priya </td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>65</td>
                                                <td>2023-09-25 21:47:05</td>
                                                <td>TRSTU_3210</td>
                                                <td>S fahima</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>66</td>
                                                <td>2023-09-26 09:48:55</td>
                                                <td>TRSTU_3212</td>
                                                <td>CHINTALAPUDI AISWARYA RANI</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>67</td>
                                                <td>2023-09-26 10:13:13</td>
                                                <td>TRSTU_3213</td>
                                                <td>M vanisree </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>68</td>
                                                <td>2023-09-26 10:26:18</td>
                                                <td>TRSTU_3214</td>
                                                <td>Vedaala Madhu kalyan</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>69</td>
                                                <td>2023-09-27 09:41:38</td>
                                                <td>TRSTU_3240</td>
                                                <td>GT.Aiswarya</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>70</td>
                                                <td>2023-09-27 15:30:21</td>
                                                <td>TRSTU_3289</td>
                                                <td>Razak Thanseem</td>
                                                <td></td>
                                                <td>Human resource management </td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>71</td>
                                                <td>2023-09-27 16:43:19</td>
                                                <td>TRSTU_3337</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>72</td>
                                                <td>2023-09-27 18:34:18</td>
                                                <td>TRSTU_3356</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>73</td>
                                                <td>2023-09-28 07:37:11</td>
                                                <td>TRSTU_3373</td>
                                                <td>Shaik Arshiya </td>
                                                <td></td>
                                                <td>Digital Marketing </td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>74</td>
                                                <td>2023-09-29 14:23:46</td>
                                                <td>TRSTU_3432</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>75</td>
                                                <td>2023-09-29 15:21:24</td>
                                                <td>TRSTU_3456</td>
                                                <td>C.Akhila</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>76</td>
                                                <td>2023-09-29 18:57:03</td>
                                                <td>TRSTU_3482</td>
                                                <td>G.Nandini</td>
                                                <td></td>
                                                <td>Web Technologies</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>77</td>
                                                <td>2023-09-29 20:33:56</td>
                                                <td>TRSTU_3496</td>
                                                <td>s.roshini</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>78</td>
                                                <td>2023-09-30 14:20:39</td>
                                                <td>TRSTU_3522</td>
                                                <td>S simran</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>79</td>
                                                <td>2023-10-05 14:05:57</td>
                                                <td>TRSTU_3597</td>
                                                <td>Neelima locharla </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>80</td>
                                                <td>2023-10-05 17:09:47</td>
                                                <td>TRSTU_3608</td>
                                                <td>Nageswari Katari </td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>81</td>
                                                <td>2023-10-08 18:58:32</td>
                                                <td>TRSTU_3707</td>
                                                <td>P. Mounika</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>82</td>
                                                <td>2023-10-09 12:56:43</td>
                                                <td>TRSTU_3726</td>
                                                <td>Chitturi hema devi</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>83</td>
                                                <td>2023-10-09 14:23:11</td>
                                                <td>TRSTU_3727</td>
                                                <td>Akhilyadav@</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>84</td>
                                                <td>2023-10-09 20:16:41</td>
                                                <td>TRSTU_3740</td>
                                                <td>Pagadala Naresh</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>85</td>
                                                <td>2023-10-11 18:11:47</td>
                                                <td>TRSTU_3763</td>
                                                <td>J Sanjay</td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>College</td>
                                                <td>College</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>86</td>
                                                <td>2023-10-13 14:12:11</td>
                                                <td>TRSTU_3870</td>
                                                <td>D.yasoda</td>
                                                <td></td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>87</td>
                                                <td>2023-10-20 06:46:19</td>
                                                <td>TRSTU_3972</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>88</td>
                                                <td>2023-10-20 06:46:36</td>
                                                <td>TRSTU_3973</td>
                                                <td></td>
                                                <td></td>
                                                <td>Voice process</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>89</td>
                                                <td>2023-11-02 15:37:57</td>
                                                <td>TRSTU_4112</td>
                                                <td>Peethani Ramya Sri</td>
                                                <td></td>
                                                <td>JAVA</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>90</td>
                                                <td>2023-11-02 22:36:04</td>
                                                <td>TRSTU_4116</td>
                                                <td>Polisetti Mounika Durga Lakshmi </td>
                                                <td></td>
                                                <td>JAVA</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>91</td>
                                                <td>2023-11-03 12:26:06</td>
                                                <td>TRSTU_4117</td>
                                                <td>Kavuru srivalli</td>
                                                <td></td>
                                                <td>Python</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>92</td>
                                                <td>2024-01-10 13:14:48</td>
                                                <td>TRSTU_4208</td>
                                                <td>Marella Meghana</td>
                                                <td></td>
                                                <td>Python</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>

                                            <tr>
                                                <td>93</td>
                                                <td>2024-01-10 13:50:33</td>
                                                <td>TRSTU_4210</td>
                                                <td>anand</td>
                                                <td></td>
                                                <td>Python</td>
                                                <td>Individual</td>
                                                <td>Individual</td>
                                                <td>Accepted</td>


                                            </tr>
                                            <!--<tr>-->
                                            <!--	<td>01</td>-->
                                            <!--	<td>23/11/2022 14:00:23</td>-->
                                            <!--	<td>TRSTU_1</td>-->
                                            <!--	<td>Manju Katikala</td>-->
                                            <!--	<td>Bullayya enginering college</td>-->
                                            <!--	<td>java</td>-->
                                            <!--	<td>College</td>-->
                                            <!--	<td>Individual</td>-->
                                            <!--	<td>Pending</td>-->
                                            <!--	<td>Dinesh Vinukoti</td>-->
                                            <!--	<td>AU Girl batch-01</td>-->
                                            <!--	<td>Morning Session</td>-->
                                            <!--	<td>2 Hrs</td>-->
                                            <!--	<td>12/03/2023</td>-->
                                            <!--	<td>19/04/2023</td>-->

                                            <!--</tr>-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->






            </div>
        </div>

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
    <?php include("./script.php"); ?>
</body>

</html>