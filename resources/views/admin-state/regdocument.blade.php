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
    <img src="/adminassets/images/logoe.png"  alt="hsjs" style="width: 400px; height: auto;"> 
</div> -->
<h1 class="header">NIGERIAN ASSOCIATION OF<br>
CLINICAL PSYCHOLOGISTS</h1>
   <!--  <div style="width:">
<img src="/passportphoto/{{ $license->passport }}"  alt="image" class="moveit">
</div> -->
<div style="text-align: center; position: relative; bottom: 500px;">
<p style="font-size: 20px;"><i>(Founded 1974)</i></p>
<h1>Practicing License Application Form</h1>
<h2><b>FORM B (For Full Members only)</b></h2>
</div>

<div>
    
    <table class="table-top">
       

        <tr>
            <th>Email</th>
            <td>{{$license->email}}</td>
        </tr>
        
            <tr>
            <th>Title</th>
            <td>{{$license->title}}</td>
        </tr>

        <tr>
            <th>Full Name</th>
            <td>{{$license->surname}} {{$license->firstname}} {{$license->othername}}</td>
        </tr>

        <tr>
            <th>Date of Birth</th>
            <td>{{$license->dob}}</td>
        </tr>

         <tr>
            <th>Nationality</th>
            <td>{{$license->nationality}}</td>
        </tr>

        <tr>
            <th>State</th>
            <td>{{$license->state}}</td>
        </tr>

        <tr>
            <th>Name of Organisation</th>
            <td>{{$license->business_name}}</td>
        </tr>

        <tr>
            <th>Address of Organisation</th>
            <td>{{$license->business_address}}</td>
        </tr>

         <tr>
            <th>NACP Registration Number</th>
            <td>{{$license->registration}}</td>
        </tr>

        <tr>
            <th>Telephone</th>
            <td>{{$license->telephone}}</td>
        </tr>


        <tr>
            <th>Details of Workshop Attended/Year</th>
            <th>Certificates</th>
        </tr>

         <tr>
            <td>
               <?php
               $workshops= $license->workshop;
             $array=explode('*', $workshops);
              foreach ($array as $item) {
                echo"
                    <ul>
                    <li>
                   $item
                   </li>
                  </ul>
                   ";
                }


             ?> 

            </td>
            <td>
                  <?php
               $certificates= $license->cerficate;
             $array=explode('*', $certificates);
              foreach ($array as $item) {
                echo"
                    <ul>
                    <li>
                   $item
                   </li>
                  </ul>
                   ";
                }


             ?>
            </td>
        </tr>
    </table>
    
</div>
<p style="position: relative; bottom: 400px; text-align: center;"><i>Generated by NACP.ORG.NG</i></p>
</div>


</body>
</html>