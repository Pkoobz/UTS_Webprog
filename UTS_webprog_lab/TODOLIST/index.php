<?php
    require 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <div class="main-section">
        <div class="add-section"> 
            <div style="position: relative; width: 100%; display: flex;"> 
                <a style="color: black;  text-decoration: none; margin-right: 5px;" href="#">Back to</a> 
                <a style="color: #2B7021; font-weight: 600; text-decoration: none;" href="../dashboard.php"> Dashboard</a> 
            </div>
            <form action="app/add.php" method="POST" autocomplete="off">
                <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                    <input type="text"
                           name="title"
                           style="border-color: #ff6666"
                           placeholder="Fill in the blank!" />
                    <button type="submit">add &nbsp; <span>&#43;</span></button>
                
                    <?php } else { ?>
                    <input type="text"
                           name="title"
                           placeholder="What are you gonna do?" />
                    <button type="submit">add &nbsp; <span>&#43;</span></button> 
                <?php } ?>
            </form>
        </div>

        <?php
            $todos = $conn->query("SELECT * FROM todos ORDER BY checked ASC, id DESC");
        ?>

        <div class="show-todo-section">
            <?php if($todos->rowCount() <= 0){ ?> 
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/gif.gif" width="80%" >
                    </div>
                </div>
            <?php } ?>
                <div class="todo-scroll">
                    <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>    
                        <div class="todo-item">
                            <span id="<?php echo $todo['id']; ?>"
                                class="remove-to-do">x</span>
                            <?php if($todo['checked']){ ?>
                                <input type="checkbox"
                                   class="check-box"
                                   data-todo-id ="<?php echo $todo['id']; ?>"
                                   checked />
                                <h2 class="checked"><?php echo htmlspecialchars($todo['title'], ENT_QUOTES, 'UTF-8'); ?></h2>

                            <?php } else { ?>
                                <input type="checkbox"
                                   data-todo-id ="<?php echo $todo['id']; ?>"
                                   class="check-box" />
                                <h2><?php echo htmlspecialchars($todo['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                            <?php } ?>
                            <br>
                            <div class="progress-section">
                                <label for="progress-dropdown">Progress:</label>
                                    <select id="progress-dropdown">
                                        <option value="Not yet started">Not yet started</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Waiting On">Waiting On</option>
                                    </select>
                            </div>
                        <small>created: <?php echo $todo['data_time'] ?></small> 
                        </div>
                    
                    <?php } ?>
                </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(function(){
                const id = $(this).attr('id');

                $.post("app/remove.php",
                    {
                        id:id
                    },
                    (data) => {
                        if(data){
                            $(this).parent().hide(600);
                        }
                    }
                );
            });
            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php',
                    {
                        id: id
                    },
                    (data) => {
                        if(data != 'error'){
                            const h2 = $(this).next();
                            if(data === '1'){
                                h2.removeClass('checked');
                            }else {
                                h2.addClass('checked');
                            }
                        }
                    }
                );
            });
    function updateProgressStatus() {
        const dropdown = document.getElementById("progress-dropdown");
        const selectedOption = dropdown.options[dropdown.selectedIndex].value;

        const progressStatus = document.getElementById("progress-status");
        progressStatus.innerText = `Progress: ${selectedOption}`;
    }
    const dropdown = document.getElementById("progress-dropdown");
    dropdown.addEventListener("change", updateProgressStatus);
    updateProgressStatus();
        });
    </script>
</section>
</body>
</html>