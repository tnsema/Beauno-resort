
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="events.css">
</head>
<body>

<nav>
        <img src="website_images/logo.jpg" alt="Company_logo">

        <ul>
            <li> <a href="index.php"> HOME </a> </li>
            <li id="about"> ABOUT  </li>
            <li> <a href="events.php"> EVENTS </a> </li>
        </ul>
    </nav>

    <main>

        <div class="heading">

            <h1>Upcoming Events List</h1>

        </div>

        <div class="content">

            <div class="content_inside">

                <?php

                require_once 'indludes\connDatabase.php';
                require_once 'indludes\writeToDatabase.php';

                $eventList = getEvents($conn);
                //$eventList = [];
                $has_ticket = 1;
                touch("doc.pdf");


                    if (!empty($eventList)) {
                        
                        foreach($eventList as $singleEvent){

                            echo '<div class="the_event">';

                                echo '<div class="actual_event_img">';
                                    echo '<img src="website_images\BeaunoResortPic1.jpg" alt="">';
                                echo '</div>';
        
                                echo '<div class="event_info">';

                                    echo '<div class="event_info_1">';

                                        echo '<h1>' . $singleEvent["eventName"] . '</h1>';
                                        echo '<h2> Theme: ' . $singleEvent["theme"] . '</h2>';
                                        echo '<h2> Event Category: ' . $singleEvent["eventType"] . '</h2>';
                                        echo '<h3> Date: ' . $singleEvent["eventDate"] . '</h3>';
                                        echo '<h4> Time: ' . $singleEvent["startTime"] . " - " . $singleEvent["endTime"]  . '</h4>';

                                    echo '</div>';

                                    echo '<div class="event_info_2">';

                                        if ($has_ticket) {
                                            echo '<button class="has_ticket_purchase"> Purchase Ticket </button>';
                                        }else {
                                            echo '<button class="no_ticket_purchase"> Free Entrance </button>';
                                        }

                                        
                            
                                    echo '</div>';

                                echo '</div>';
                            echo '</div>';
    
                        };

                    } else {

                        echo '<div class="actual_event_notFound">';
                            echo '<h1>' . "No events found." . '</h1>';
                        echo ' </div>';
                        
                    }
                    
                ?>





            </div>

        </div>

    </main>

    <footer>

        <div class="first3">

            <div class="top3">
                <div class="topic3">The Resort</div>
                <a href="">Member log-in</a>
            </div>

        </div>

        <div class="second3">

            <div></div>
            <div></div>
            <div></div>

        </div>

    </footer>
    
</body>
</html>