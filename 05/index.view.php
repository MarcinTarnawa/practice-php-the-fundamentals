<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
        display: block;
        }

        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
        }
    </style>

</head>
<body>
    <nav>
        <ul>
            <?= generateMenu($items) ?>
        </ul>
    </nav>

    
    <h2>Dropdown Menu</h2>

    <nav2 class="dropdown">
        <button class="dropbtn">Menu ▼ </button>
        <div class="dropdown-content">
            <ul>
                <?= generateMenu($items) ?>
            </ul>
        </div>
    </nav2>
            
        <!-- <ul>
            <?php foreach ($items as $item) : ?>
                <li><a href="<?=$item['url']?>"> <?= $item['label'] ?></a></li>
            <?php endforeach; ?>
        </ul> -->      

</body>
</html>