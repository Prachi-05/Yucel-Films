<?php
include("includes/footer.php"); 
include("includes/header.php"); 
if(isset($_GET['id'])) {
    $crewId = $_GET['id'];
}

    $sql = "SELECT NAME, DESCRIPTION FROM crew WHERE ID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$crewId);
            $stmt->execute();
            $result = $stmt->get_result();
       $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yucel Films</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="SpecificWorksCarousel.css">

    <link rel="stylesheet" type="text/css" href="owlstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
</head>

<body>
<br><br>
<?php 
echo "
<div class='heading'>

    <h1>". $row['NAME'] ."</h1>
    <p>". $row['DESCRIPTION'] ." </p>";
    $stmt->close();
echo"
</div>
    <div class='testimonial-area'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='owl-carousel test-slides' id='testimonial-carousel'> ";
                    $sql = "SELECT W.PROJECT, W.PROJECT_TYPE, W.THUMBNAIL, W.PROJECT_LINK FROM works W WHERE W.CREW_ID = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s",$crewId);
                    $stmt->execute();
                    $result = $stmt->get_result();
                        while($row = $result->fetch_assoc()){
                       echo"     
                        <div class='item'>
                            <div class='single-testimonial'>
                                <div class='img-area'>
                                    <img src='". $row['THUMBNAIL']." '>
                                </div>
                                <div class='testi-text'>
                                    <h4>". $row['PROJECT']."</h4>
                                    <p>". $row['PROJECT_TYPE']."</p>
                                </div>
                            </div>
                        </div> 
                        "; } 
                        echo" 
                    </div>
                </div>
            </div>
        </div>
    </div>
"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script>
        $('#testimonial-carousel').owlCarousel({
    autoplay:false,
    dots:false,
    nav:true,
    loop:false,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})
    </script>
    
<!------------- JAVASCRIPT BEGINS HERE --------------->
    <script type="text/javascript">

        var contacts = document.getElementById("contacts");
        contacts.setAttribute('style', "color: black"); 

        var about = document.getElementById("about");
        about.setAttribute('style', "color: black");

        var works=document.getElementById("works");
        works.setAttribute('style', "color: #ff6238");

        </script>   
</body>
</html>