<?php include_once('includes/header.php'); ?>

<header>

    <?php include_once('includes/title_bar.php'); ?>
    
</header>

<?php include_once('includes/nav_bar.php'); ?>

<?php include_once('includes/top-notifications.php'); ?>


<?php include_once('includes/main-courosel.php'); ?>




<?php include_once('includes/admini-news-tenders.php'); ?>




<?php include_once('includes/departments.php'); ?>


<?php include_once('includes/campus_by_numbers.php'); ?>

<?php include_once('includes/explore_campus.php'); ?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

		
		$(".news-demo-down-auto").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'up',
            newsTickerInterval: 1000,
            onToDo: function () {
            }
        });


    });
</script>

<script type="text/javascript">
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
//    When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navb = document.querySelector(".main_navbar");

// Get the offset position of the navbar

    var height = document.querySelector("header").offsetHeight;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= height) {
    navb.classList.add("stick")
  } else {
    navb.classList.remove("stick");
  }
}

</script>

<?php include_once('includes/footer.php'); ?>