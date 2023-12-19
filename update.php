<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vangia</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;0,600;1,500&display=swap" rel="stylesheet">
</head>
<?php
error_reporting(E_ERROR | E_PARSE);


 require_once 'connect.php';
 $Product_id = $_GET['id'];
 $Product=mysqli_query($connect,"SELECT * FROM `Product` WHERE `id`= '$Product_id';");
 $Product=mysqli_fetch_assoc($Product);



$id = $_POST['id'];
$name = $_POST['name'];
$telephone =$_POST['telephone'];
$description = $_POST['description'];
$photo = $_POST['photo'];
$supplier = $_POST['supplier'] ;
$cost = $_POST['cost'] ;
$category = $_POST['category'] ;



mysqli_query($connect, "UPDATE `Product` SET `name` = '$name', `telephone` = '$telephone', `description` = '$description', `photo` = '$photo', `cost` = '$cost', `supplier` = '$supplier', `category` = '$category' WHERE `Product`.`id` = '$id'");



?>
                        <div class="crUsluga__forGrid dg">
                            <div class="df" style="margin-left: 20px;">
                                <div class="crUsluga__half" style="margin-right: 20px;">
                                    <div class="text-field text-field_floating-3">
                                        <form action="update.php" method="post">
                                            <input type ="hidden" name ="id" value="<?=$Product['id']?>">
                                        <input class="text-field__input" type="text" placeholder="Type your name" name="name" value="<?=$Product['name']?>">
                                        <label class="text-field__label" for="name" >Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="df" style="margin-left: 20px;">
    <div class="crUsluga__half" style="margin-right: 20px;">
        <div class="text-field text-field_floating-3">
            <input class="text-field__input" id="telephone" type="number" name="telephone" value="<?= htmlspecialchars($Product['telephone']) ?>">
            <label class="text-field__label" for="telephone">Telephone</label>
        </div>
    </div>
</div>
                            <div class="crUsluga__half crUsluga__half-decr">
                                <div class="text-field text-field_floating-3 ">
                                    <textarea class="text-field__input" placeholder="Type Your Description..." name = "description" style="width: 770px;height: 133px;resize: none;"><?=$Product['description']?></textarea>
                                    <label class="text-field__label" for="description" >Your Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="df" style="margin-left: 20px;margin-top: 50px;">
                            <div class="crUsluga__half" style="margin: 0px auto;">
                                <p class="crUsluga__name">
                                    Your Photo
                                </p>
                                    <label class="input-file">
                                        <input type="text" name="photo" placeholder="Upload Your Url photo" value="<?=$Product['photo']?>">
                                    </label>
                            </div> 
<?php
$suppliers = mysqli_query($connect, "SELECT * FROM `suppliers`");
$suppliers = mysqli_fetch_all($suppliers);
?>
<form method="post" action="create.php">
        <div class="crUsluga__half" style="margin: 0px auto;">
                                <p class="crUsluga__name">
                                    Your Suppliers
                                </p>
                                <select class="crUsluga__box" name="supplier" >
                                <?php foreach ($suppliers as $supplier): ?>
                                    
                                <option value="<?=$supplier[0]?>"><?=$supplier[1]?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>   
<?php
$costs = mysqli_query($connect, "SELECT * FROM `costs`");
$costs = mysqli_fetch_all($costs);
?>
<form method="post" action="create.php">
                            <div class="crUsluga__half" style="margin: 0px auto;">
                                <p class="crUsluga__name">
                                    Your Costs
                                </p>
                                <select class="crUsluga__box" name="cost">
                                <?php foreach ($costs as $cost): ?>
                                    <option value="<?=$cost[0]?>"><?=$cost[1]?></option>
                                <?php endforeach; ?>
                                </select>
                            </div> 
                            <?php
$categories = mysqli_query($connect, "SELECT * FROM `categories`");
$categories  = mysqli_fetch_all($categories);
?>
<form method="post" action="create.php">
                            <div class="crUsluga__half" style="margin: 0px auto;">
                                <p class="crUsluga__name">
                                    Your Category
                                </p>
                                <select class="crUsluga__box" name="category">
                                <?php foreach ($categories as $category): ?>
                <option value="<?=$category[0]?>"><?=$category[1]?>
            </option>
            <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="recipes__inner-btn" style="display:flex;justify-content: center;"> 
                            <button class="Submit" type="submit" style="margin-right:30px;padding: 28px 50px;
                                                                            border: 1px solid #0F1428;
                                                                            color: #0F1428;
                                                                            font-weight: 500;
                                                                            font-size: 20px;
                                                                            line-height: 30px;cursor:pointer;border-radius:30px;
                                                                            background-color:#1cd000;"
                                                                            onmouseover="this.style.backgroundColor='#22ff00';"
                                                                            onmouseout="this.style.backgroundColor='#1cd000';">
                                    Submit !
                            </button>
                            <button class="Go__page" type="submit"  style="
                                                                            border: 1px solid #0F1428;
                                                                            color: #0F1428;
                                                                            font-weight: 500;
                                                                            font-size: 20px;
                                                                            line-height: 30px;cursor:pointer;border-radius:30px;
                                                                            background-color:#b1af00;"
                                                                            onmouseover="this.style.backgroundColor='#fffb00';"
                                                                            onmouseout="this.style.backgroundColor='#b1af00';">
                                    <a href="index.php" style="color: black;padding: 28px 50px;">
                                        Go to Page!
                                    </a>
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </section>