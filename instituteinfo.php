<?php
    ob_start();
?>
<head>
<link rel="shortcut icon" href="img/rguktlogo.png" type="image/x-icon">
</head>
<header>
    <?php  include_once 'includes/header.php'; ?>
    <?php  include_once 'includes/title_bar.php'; ?>

</header>

<?php  include_once 'includes/nav_bar.php'; ?>

<main>
    <?php
            if(isset($_GET['data'])){
                $data = $_GET['data'];
                switch($data){
                        
                    //padministration
                     case "pchancellor":
                        include_once 'info/padministration/p_chancellor.php';
                        break;
                    case "pVC":
                        include_once 'info/padministration/p_vc.php';
                        break;
                    case "pdirector":
                        include_once 'info/padministration/p_director.php';
                        break;
                        

                    //administration
                    case "chancellor":
                        include_once 'info/administration/chancellor.php';
                        break;
                    case "VC":
                        include_once 'info/administration/VC.php';
                        break;
                    case "director":
                        include_once 'info/administration/director.php';
                        break;
                    case "AO":
                         include_once 'info/administration/AO.php';
                          break;
                    case "OSD":
                         include_once 'info/administration/OSD.php';
                          break;
                    case "FO":
                         include_once 'info/administration/FO.php';
                         break;
                     case "DA":
                         include_once 'info/academics/DA.php';
                         break;
                    case "DSW":
                         include_once 'info/administration/DSW.php';
                         break;
                    case "COE":
                         include_once 'info/administration/COE.php';
                         break;
                    case "coordinaters":
                        include_once 'info/administration/coordinaters.php';
                         break;
                    case "contact":
                         include_once 'info/contact.php';
                         break;
                    case "tenders":
                         include_once 'info/notifications/tenders.php';
                         break;
                    case "news_updates":
                         include_once 'info/notifications/news_updates.php';
                         break;
                    case "careers":
                         include_once 'info/careers.php';
                         break;
                    case "gallery":
                         include_once 'info/about/gallery.php';
                         break;
                    //About the institute
                    case "aboutrgukt":
                         include_once 'info/about/about_rgukt.php';
                         break;
                    case "campuslife":
                         include_once 'info/about/campus_life.php';
                         break;
                     case "edusys":
                            include_once 'info/about/education_system.php';
                            break;
                    case "govcouncil":
                            include_once 'info/about/governing_council.php';
                            break;
                    case "exccouncil":
                            include_once 'info/about/executive_council.php';
                            break;
                    //Academics
                    case "AcademicPrograms":
                            include_once 'info/academics/academic_programs.php';
                            break;
                    case "AcademicCalender":
                            include_once 'info/academics/academic_calender.php';
                            break;
                    case "AcademicRegulations":
                            include_once 'info/academics/academic_regulation.php';
                            break;
                    case "curicula":
                            include_once 'info/academics/academic_curicula.php';
                            break;
                    case "departments":
                            include_once 'info/academics/departments.php';
                            break;
                    case "events_achievements":
                            include_once 'info/notifications/events_achievements.php';
                            break;
                    
                    //Departments

                    case "CSE_department":
                            include_once "info/faculty/cse.php";
                            break;
                    case "Civil_department":
                        include_once "info/faculty/civil.php";
                        break;
                    case "ECE_department":
                        include_once "info/faculty/ece.php";
                        break;
                    case "Chemical_department":
                        include_once "info/faculty/chem.php";
                        break;
                    case "Mechanical_department":
                        include_once "info/faculty/mech.php";
                        break;
                    case "MME_department":
                        include_once "info/faculty/mme.php";
                        break;
                    case "Biology_department":
                        include_once "info/faculty/biology.php";
                        break;
                    case "Chemistry_department":
                        include_once "info/faculty/chemistry.php";
                        break;
                    case "Physics_department":
                        include_once "info/faculty/physics.php";
                        break;
                    case "Math_department":
                        include_once "info/faculty/math.php";
                        break;
                    case "Psycology_department":
                        include_once "info/faculty/psycology.php";
                        break;
                    case "English_department":
                        include_once "info/faculty/english.php";
                        break;
                    case "Telugu_department":
                        include_once "info/faculty/telugu.php";
                        break;
                    case "Library_department":
                        include_once "info/faculty/library.php";
                        break;
                    case "FA_department":
                        include_once "info/faculty/fine_arts.php";
                        break;
                    case "PE_department":
                        include_once "info/faculty/physical_education.php";
                        break;
                    case "Management":
                        include_once "info/faculty/management.php";
                        break;
                    default:
                       header("Location: index.php");
                       exit();
                }
            }else{
               header("Location: index.php");
               exit();
            }
            
        ?>
</main>
<?php  include_once 'includes/footer.php';  ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/smoothscroll.js"></script>