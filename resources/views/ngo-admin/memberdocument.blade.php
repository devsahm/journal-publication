<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">

        .top{
            position: relative;
            top: 0;
        }
        .header{
            text-align: center;
            position: relative;
            bottom: 250px;
            font-size:30px; 

            
        }


        .float{
            float: left;

        }

        .moveit{

            position: relative;
            bottom: 400px;
            margin-left: 80%;
            width: 200px;
                }

                table, th,td{
                    border:1px solid black;
                    border-collapse: collapse;
                    width: 80%;
                    padding: 15px;
                    margin:auto;
                    text-align:left;
                }

                th{
                    width: 50%;
                }
 .table-top{
    position: relative;
     bottom:450px;
 }
    </style>


</head>
<body style="font-style: ">
    <div class="top">
     <!--    <div style="width: 20%;">
    <img src="/public/adminassets/images/logoe.png"  alt="hsjs" style="width: 400px; height: auto;"> 
</div> -->
<h1 class="header">NIGERIAN ASSOCIATION OF<br>
CLINICAL PSYCHOLOGISTS</h1>
    <div style="width:">
<!--   @foreach($passports as $passport)
                                        <img src="/memberpassport/{{$passport->passport}}" style="width: 100px; height: auto; text-align: center;">
                                        @endforeach -->
</div>
<div style="text-align: center; position: relative; bottom: 500px;">
<p style="font-size: 20px;"><i>(Founded 1974)</i></p>
<h1>Membership Application Form</h1>
<h2><b>FORM A</b></h2>
</div>

<div>
           
  <h4 style="text-align: center;">GENERAL INFORMATION</h4>
                                            <table class="table-top">
                                          
                                            @foreach($members as $member)
                                            
                                            <tr>
                                                    <th>Title</th>
                                                    <td>{{$member->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td>{{$member->surname}} {{$member->firstname}} {{$member->othername}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Employer/ Institution or Firm</th>
                                                    <td>{{$member->employer}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Address for Correspondence</th>
                                                    <td>{{$member->correspondence}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Permanent Home Address</th>
                                                    <td>{{$member->home_address}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>{{$member->dob}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nationality</th>
                                                    <td>{{$member->nationality}}</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>{{$member->state}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Job Title</th>
                                                    <td>{{$member->job_title}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Telephone Number</th>
                                                    <td>{{$member->telephone}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Job Title</th>
                                                    <td>{{$member->job_title}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nature of Business</th>
                                                    <td>{{$member->business_nature}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nature of Work</th>
                                                    <td>{{$member->work_nature}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Field of Psychology</th>
                                                    <td>{{$member->psychology_field}}</td>
                                                </tr>
                                        
                                            @endforeach

                                            
                                        </table> 
                                        <br>
                                          <h4 style="text-align: center; text-transform: uppercase;">Academic Qualification</h4>
                                        <table class="table-top">
                                          
                                            
                                            <tr>
                                                    <th>Name of Institution</th>
                                                    <th>Certificate</th>
                                                    <th>year</th>
                                                    <th>Attachment</th>
                                                    
                                                </tr>
                                                @foreach($qualifications as $academic)
                                                <tr>
                                                    <td>{{$academic->institution}}</td>
                                                    <td>{{$academic->certificate}}</td>
                                                    <td>{{$academic->year}}</td>
                                                    <td>
                                                        <?php 
                                                            $string=$academic->attachment;
                                                            $toremove=substr($string, 0, 11);
                                                            $picture=str_replace($toremove, '', $string);
                                                            echo $picture;

                                                             ?>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table> <br>
  <h4 style="text-align: center; text-transform: uppercase;">Professional Training Attended</h4>
                                            <table class="table-top">
                                          
                                            
                                            <tr>
                                                    <th>Name of Organisers</th>
                                                    <th>Certificate</th>
                                                    <th>year</th>
                                                    <th>Attachment</th>
                                                    
                                                </tr>
                                                @foreach($trainings as $training)
                                                <tr>
                                                    <td>{{$training->organisers}}</td>
                                                    <td>{{$training->certificate}}</td>
                                                    <td>{{$training->year}}</td>
                                                    <td>
                                                        <?php 
                                                            $string=$academic->attachment;
                                                            $toremove=substr($string, 0, 11);
                                                            $picture=str_replace($toremove, '', $string);
                                                            echo $picture;

                                                             ?>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table> <br>
 <h4 style="text-align: center; text-transform: uppercase;">Employment History</h4>
                                                       <table class="table-top">
                                           
                                            
                                            <tr>
                                                    <th>Name of Organisation</th>
                                                    <th>Position</th>
                                                    <th>Date</th>
                                                    <th>Responsibility</th>
                                                    
                                                </tr>
                                                @foreach($employments as $employment)
                                                <tr>
                                                    <td>{{$employment->organisation}}</td>
                                                    <td>{{$employment->position}}</td>
                                                    <td>{{$employment->date}}</td>
                                                    <td>{{$employment->responsibility}}</td>
                                                
                                                </tr>
                                                @endforeach
                                            </table><br>
                                            <h4 style="text-align: center; text-transform: uppercase;">Sponsors and Referees</h4>
                                             <table class="table-top">
                                            
                                            
                                            <tr>
                                                    <th>Name of Referee/Sponsors</th>
                                                    <th>Membership Type</th>
                                                    <th>Address</th>
                                                    <th>Position</th>
                                                    <th>Accepted Date</th>
                                                    <th>Membership Number</th>
                                                    
                                                </tr>
                                                @foreach($sponsors as $sponsor)
                                                <tr>
                                                    <td>{{$sponsor->sponser}}</td>
                                                    <td>{{$sponsor->membership}}</td>
                                                    <td>{{$sponsor->address}}</td>
                                                    <td>{{$sponsor->position}}</td>
                                                    <td>{{$sponsor->accepted_date}}</td>
                                                    <td>{{$sponsor->membership_number}}</td>
                                                
                                                </tr>
                                                @endforeach
                                            </table><br>

                                        <h4 style="text-align: center; text-transform: uppercase;">Payment Evidence</h4>
                                            <table class="table-top">
                                           
                                            
                                            <tr>
                                                @foreach($payments as $payment)
                                                    <th>Uploaded payment Evidence</th>
                                                <td>
                                                    <?php 
                                                            $string=$payment->paymentpicture;
                                                            $toremove=substr($string, 0, 11);
                                                            $picture=str_replace($toremove, '', $string);
                                                            echo $picture;

                                                             ?>
                                                            </td>
                                                    
                                                </tr>
                                                
                                                @endforeach
                                            </table>






    
</div>
<p style="position: relative; bottom: 400px; text-align: center;"><i>Generated by NACP.ORG.NG</i></p>
</div>


</body>
</html>
