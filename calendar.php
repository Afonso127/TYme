<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Links Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
     <!-- CSS LOCAL -->
     <link rel="stylesheet" href="estilo.css"> 

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
     
     <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   
     
    
</head>

    <body>
        <header>
            <h3 class="weltit">Welcome Afonso! Planning ahead is vital...</h3>
            <h3 class="datetit">Today is 05/06/2023 you have <span>3</span> tasks</h3>    
        </header>

        <div class="background-container">

            <main>
                
                <div class="calendar-container">
                    <div class="quote-container">
                        <blockquote class="quote">
                        "É preciso andar depressa, quem anda depressa, avia-se no caminho" - Unknown
                        </blockquote>
                    </div>
                    <div class="calendar">
                        <div class="header">
                        <h2><?php echo date('F Y'); ?></h2>
                        </div>
                        <table>
                        <thead>
                            <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $daysInMonth = date('t');
                            $firstDay = date('N', strtotime(date('Y-m-01')));

                            // Generate calendar cells
                            $day = 1;
                            $isCurrentMonth = true;

                            for ($i = 0; $i < 6; $i++) {
                            echo "<tr>";
                            for ($j = 1; $j <= 7; $j++) {
                                if (($i === 0 && $j < $firstDay) || $day > $daysInMonth) {
                                echo "<td></td>";
                                } else {
                                $date = date('Y-m-d', strtotime(date('Y-m') . '-' . $day));

                                // Check if the cell represents the present day
                                $isPresentDay = ($date === date('Y-m-d'));

                                // Add additional class for the present day
                                $dayClass = $isPresentDay ? 'present-day' : '';

                                echo "<td class='{$dayClass}'>{$day}</td>";
                                $day++;
                                }
                            }
                            echo "</tr>";

                            // Break the loop if we have reached the end of the current month
                            if ($day > $daysInMonth) {
                                $isCurrentMonth = false;
                                break;
                            }
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>

                <div class="todocontainer">
           
                    <section class="todolist">
                        <header>Afonso, your current tasks!</header>
                        <div class="do">
                            <input type="checkbox" id="do1">
                            <label for="do1">
                                <i class="fa-solid fa-check"></i>
                                <span class="label">Meeting with manager</span>
                            </label>
                        </div>
                        <div class="do">
                            <input type="checkbox" id="do2">
                            <label for="do2">
                            <i class="fa-solid fa-check"></i>
                                <span class="label">Goign to the gym</span>
                            </label>
                        </div>
                        <div class="do">
                            <input type="checkbox" id="do3">
                            <label for="do3">
                            <i class="fa-solid fa-check"></i>
                                <span class="label">Calling mom</span>
                            </label>
                        </div>
                        <div class="do">
                            <input type="checkbox" id="do4">
                            <label for="do4">
                            <i class="fa-solid fa-check"></i>
                                <span class="label">Calling dad</span>
                            </label>
                        </div>
                        <div class="do">
                            <input type="checkbox" id="do5">
                            <label for="do5">
                            <i class="fa-solid fa-check"></i>
                                <span class="label">Take sally for a walk</span>
                            </label>
                        </div>

                        <footer></footer>

                    </section>
                </div>

            </main>
           

        </div>

       
        
     
    </body>
</html>


