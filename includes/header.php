<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>IIIT Ongole :: RGUKT-AP</title>
    
    <link rel="shortcut icon" href="img/rguktlogo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


    <!--    For Departments Sliders-->
    <!--    slick-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    <link rel="stylesheet" href="includes/main.css">






    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            switch($data){
                //Administration
                case "chancellor":
                    echo "Chancellor";
                    break;
                case "director":
                    echo "Director";
                    break;
                case "AO":
                    echo "Administrative Officer";
                      break;
                case "FO":
                    echo "Finance Officer";
                     break;
                 case "DA":
                    echo "Dean Of Academics";
                     break;
                case "DSW":
                     echo "Dean Student Welfare";
                     break;
                case "COE":
                     echo "Controller Of Examination";
                     break;
                case "coordinaters":
                     echo "Coordinaters";
                     break;
                case "contact":
                    echo "Contact Us";
                     break;
                case "tenders":
                     echo "Tenders";
                     break;
                case "news_updates":
                     echo "News & Updates";
                     break;
                case "careers":
                    echo "Careers";
                     break;

                //About institute

                case "aboutrgukt":
                     echo "About RGUKT";
                     break;
                case "campuslife":
                    echo "Campus Life";
                     break;
                 case "edusys":
                    echo "Education System";
                    break;
                case "govcouncil":
                    echo "Governing Council";
                    break;
                case "exccouncil":
                    echo "Executive Council";
                     break;
                case "gallery":
                     echo "Photo Gallery";
                      break;
                
                //About Aademics
                case "AcademicPrograms":
                     echo "Academic Programs";
                      break;
                case "AcademicCalender":
                      echo "Academic Calender";
                      break;
                 case "AcademicRegulations":
                      echo "Academic Regulations";
                      break;
                case "curicula":
                      echo "Academic Curicula";
                      break;
                case "departments":
                    echo "Departments";
                      break;
                //Departments
                case "CSE_department":
                    echo "Department of Computer Science Engineering";
                    break;
                case "Civil_department":
                    echo "Department of Civil Engineering";
                    break;
                case "ECE_department":
                    echo "Department of Electronics & communication Engineering";
                    break;
                case "Chemical_department":
                    echo "Department of Chemical Engineering";
                    break;
                case "Mechanical_department":
                    echo "Department of Mechanical  Engineering";
                    break;
                case "MME_department":
                    echo "Department of Metullurgical & material Engineering";
                    break;
                case "Biology_department":
                    echo "Department of Biology Engineering";
                    break;
                case "Chemistry_department":
                    echo "Department of Chemistry";
                    break;
                case "Physics_department":
                    echo "Department of Physics";
                    break;
                case "Math_department":
                    echo "Department of Mathematics";
                    break;
                case "Psycology_department":
                    echo "Department of Psycology";
                    break;
                case "English_department":
                    echo "Department of English";
                    break;
                case "Telugu_department":
                    echo "Department Telugu";
                    break;
                case "Library_department":
                    echo "Department of Library";
                    break;
                case "FA_department":
                    echo "Department of Fine Arts";
                    break;
                case "PE_department":
                    echo "Department Physical Education";
                    break;
                case "Management":
                    echo "Management";
                    break;
				case "sample":
                    echo "sample";
                    break;
                default:
                   echo "RGUKT ONGOLE";
            }
        }
         ?>

    </title>
    <link rel="shortcut icon" href="img/rguktlogo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/rguktlogo.png" type="image/x-icon" />
    
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    
    
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/instituteinfo.css">
    <link rel="stylesheet" href="css/navigation.css">
    



</head>


    