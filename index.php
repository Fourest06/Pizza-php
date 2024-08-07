<?php 

    include("db_connect.php");

    $sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";
    $result = mysqli_query($connect, $sql);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connect);

?>

<!DOCTYPE html>
<html>

    <?php include("header.php"); ?>

    <h4 class="center grey-text">
        Pizzas!
    </h4>

    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza): ?>
                <div class="col s12 m6 l4">
                    <div class="card z-depth-0">
                        <img src="pizza.svg" class="pizza">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza["title"]); ?></h6>

                            <div>
                                <ul>
                                    <?php foreach(
                                    explode(",", $pizza["ingredients"]) as $ing): ?>
                                        <li>
                                            <?php echo htmlspecialchars($ing); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza["id"] ?>" class="brand-text">
                                More Info
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <?php include("footer.php"); ?>
    

</html>