<html>
    <head>
        <title>View Booked Tables</title>
        <link rel="stylesheet" href="table.less"/>
        <style>
            .demo {
                margin: 0 auto; 
                max-width: 300px; 
                text-align: center; 
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .demo strong {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .demo input[type="number"] {
                padding: 5px;
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .demo button.btn {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            

            .demo button.btn:hover {
                background-color: #45a049;
            }
            a {
                text-decoration: none;
                color: inherit;
            }
        </style>
    </head>
    <body>
        <br><br>
        <form method="get" class="demo" autocomplete="off" action="viewtable.php">
            <strong>Enter the member id :</strong><br>
            <input type="number" required name="memid" placeholder="MemberID"><br><br>
            <button type="submit" class="btn">SEARCH</button><br><br>
            <button class="btn"><a href="afterlogin.html">BACK</a></button>
        </form>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Table no</th>
                        <th>Time</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "dbconn.php";
                    if (isset($_GET['memid'])) {
                        $memid = $_GET['memid'];
                        $sql = "SELECT tableno, time, date FROM tables WHERE memid = '".$memid."'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['tableno'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                    </tr>
                <?php
                            }
                        } else {
                ?>
                    <script>
                        alert('No data found for the provided member ID.');
                    </script>
                <?php
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
