<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>redis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myStyle.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="../image/redis.png"
                                         style="height: 40px; width: 40px; margin-top: -10px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
            <ul class="nav navbar-nav">
                <li><a href="book.php">Book</a></li>
                <li><a href="author.php">Author</a></li>
                <li class="active"><a href="publisher.php">Publisher</a></li>
                <li><a href="category.php">Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="publisher.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the publisher
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" name="publisher">
                <option selected disabled hidden>Choose publisher here</option>
                <optgroup label="A">
                    <option value="Alchemy Press Book of Horrors">Alchemy Press Book of Horrors</option>
                    <option value="Alfresco Press">Alfresco Press</option>
                    <option value="Anchor Book Press">Anchor Book Press</option>
                    <option value="Anthem Press">Anthem Press</option>
                    <option value="Arbordale Publishing">Arbordale Publishing</option>
                    <option value="Arcade Publishing">Arcade Publishing</option>
                    <option value="Arcadia Publishing">Arcadia Publishing</option>
                    <option value="Arkham House">Arkham House</option>
                    <option value="Armida Publications">Armida Publications</option>
                    <option value="August House Publishers">August House Publishers</option>
                    <option value="Autumn House Press">Autumn House Press</option>
                <optgroup label="B">
                    <option value="B&W Publishing">B&W Publishing</option>
                    <option value="Balboa Press">Balboa Press</option>
                    <option value="Beacon Publishing">Beacon Publishing</option>
                    <option value="Biblio Publishing">Biblio Publishing</option>
                    <option value="Bloomsbury">Bloomsbury</option>
                    <option value="Blossom Spring Publishing">Blossom Spring Publishing</option>
                    <option value="Blue Manatee Press">blue manatee press</option>
                    <option value="Blue Swan Publishing">Blue Swan Publishing</option>
                    <option value="BookPress Publishing">BookPress Publishing</option>
                    <option value="Brick Cave Media">Brick Cave Media</option>
                <optgroup label="C">
                    <option value="Capstone Publishers">Capstone Publishers</option>
                    <option value="Chelsea Green Publishing">Chelsea Green Publishing</option>
                    <option value="City Lights Press">City Lights Press</option>
                    <option value="City Lights Publishers">City Lights Publishers</option>
                    <option value="CKN Christian Publishing">CKN Christian Publishing</option>
                    <option value="Coffeetown Press">Coffeetown Press</option>
                    <option value="Conundrum Press">Conundrum Press</option>
                    <option value="Coventry House Publishing">Coventry House Publishing</option>
                <optgroup label="D">
                    <option value="Divertir Publishing">Divertir Publishing</option>
                    <option value="Dorrance Publishing Company">Dorrance Publishing Company</option>
                    <option value="Dover Publications">Dover Publications</option>
                <optgroup label="E">
                    <option value="Echoic Mobile Press">Echoic Mobile Press</option>
                    <option value="Eerdmans">Eerdmans</option>
                    <option value="eLectio Publishing">eLectio Publishing</option>
                <optgroup label="F">
                    <option value="Figroot Press">Figroot Press</option>
                    <option value="Flame Tree Publishing">Flame Tree Publishing</option>
                <optgroup label="G">
                    <option value="Gantec Publishing Solutions">Gantec Publishing Solutions</option>
                    <option value="Graywolf Press">Graywolf Press</option>
                    <option value="Green Frog Publishing">Green Frog Publishing</option>
                    <option value="Grey Book Press">Grey Book Press</option>
                <optgroup label="H">
                    <option value="Harper Collins">Harper Collins</option>
                    <option value="Hidden Brook Press">Hidden Brook Press</option>
                    <option value="House of Anansi Press">House of Anansi Press</option>
                    <option value="Hydra Publications">Hydra Publications</option>
                <optgroup label="I">
                    <option value="Ink Smith Publisher">Ink Smith Publisher</option>
                    <option value="Ink Smith Publishing">Ink Smith Publishing</option>
                    <option value="Inkwater Press">Inkwater Press</option>
                <optgroup label="J">
                    <option value="John Blake Publishing">John Blake Publishing</option>
                    <option value="John Hunt Publishing">John Hunt Publishing</option>
                <optgroup label="K">
                    <option value="Kensington Publishing Corp">Kensington Publishing Corp</option>
                    <option value="Kim Dong">Kim Dong</option>
                    <option value="Korero Press">Korero Press</option>
                <optgroup label="L">
                    <option value="Lakewater Press">Lakewater Press</option>
                    <option value="Lee & Low Books">Lee & Low Books</option>
                    <option value="Leo Publishing LLC">Leo Publishing LLC</option>
                    <option value="Little Book Press">Little Book Press</option>
                    <option value="Living Springs Publishers LLP">Living Springs Publishers LLP</option>
                    <option value="Lore Lush Publishing">Lore Lush Publishing</option>
                <optgroup label="M">
                    <option value="Manning Publications">Manning Publications</option>
                    <option value="Mason J. Press">Mason J. Press</option>
                    <option value="Medknow Publications">Medknow Publications</option>
                    <option value="Moonshine Cove Publishing LLC">Moonshine Cove Publishing LLC</option>
                    <option value="Morgan James Publishing">Morgan James Publishing</option>
                    <option value="Mother Tongue Publishing">Mother Tongue Publishing</option>
                <optgroup label="N">
                    <option value="Native Ink Press">Native Ink Press</option>
                    <option value="Neverland Publishing Company">Neverland Publishing Company</option>
                    <option value="North Atlantic Books">North Atlantic Books</option>
                <optgroup label="O">
                <optgroup label="P">
                    <option value="Pan Macmillan">Pan Macmillan</option>
                    <option value="Pants On Fire Press">Pants On Fire Press</option>
                    <option value="Penguin Random House">Penguin Random House</option>
                    <option value="Phoenix Publishing and Media Company">Phoenix Publishing and Media Company</option>
                    <option value="Phoenix Yard Books">Phoenix Yard Books</option>
                <optgroup label="Q">
                    <option value="Queer Pack">Queer Pack</option>
                <optgroup label="R">
                    <option value="Reed Elsevier">Reed Elsevier</option>
                    <option value="Regal House Publishing">Regal House Publishing</option>
                    <option value="Ripple Grove Press">Ripple Grove Press</option>
                <optgroup label="S">
                    <option value="Shambhala">Shambhala</option>
                    <option value="Simon & Schuster">Simon & Schuster</option>
                    <option value="Sleepytown Press">Sleepytown Press</option>
                    <option value="Stormbird Press">Stormbird Press</option>
                <optgroup label="T">
                    <option value="Tachyon Publications">Tachyon Publications</option>
                    <option value="TCK Publishing">TCK Publishing</option>
                    <option value="The Key Publishing House Inc">The Key Publishing House Inc</option>
                    <option value="The Open Book Press">The Open Book Press</option>
                    <option value="The Wild Rose Press">The Wild Rose Press</option>
                    <option value="Tiny Fox Press">Tiny Fox Press</option>
                    <option value="Tirgearr Publishing">Tirgearr Publishing</option>
                    <option value="Torquere Press">Torquere Press</option>
                    <option value="TouchPoint Press">TouchPoint Press</option>
                    <option value="Tradewind Books">Tradewind Books</option>
                    <option value="Triplicity Publishing">Triplicity Publishing</option>
                    <option value="Tuttle Publishing">Tuttle Publishing</option>
                <optgroup label="U">
                <optgroup label="V">
                    <option value="Virgogray Press">Virgogray Press</option>
                <optgroup label="W">
                    <option value="Weasel Press">Weasel Press</option>
                    <option value="White Knuckle Press">White Knuckle Press</option>
                    <option value="Wiley">Wiley</option>
                    <option value="Wolfpack Publishing">Wolfpack Publishing</option>
                    <option value="Wordpool Press">Wordpool Press</option>
                    <option value="Writerists House">Writerists House</option>
                <optgroup label="X">
                <optgroup label="Y">
                <optgroup label="Z">
            </select>
        </div>
        <div class="col-sm-offset-9">
            <button type="submit" name="search" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['search'])){
    $publisher = $_POST['publisher'];
    $url = "http://thinhtd.ddns.net:8080/publisher?name=".$publisher;
    $url = str_replace(' ', "%20", $url);
    $result = json_decode(file_get_contents($url), true);

    echo '<br><div class="container">';
    echo '<div style="text-align: center">
                <i>'.$result["query_rows"].' result(s) in '.$result["execute_time"].' for </i><b>'.$publisher.'</b>
                </div>';

    if ($result["books"] != null){
        echo '<br><br><table class="table table-bordered">
                  <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Category</th>
                        </tr>
                  </thead>
                  <tbody>';

        foreach ($result["books"] as $row){
            echo '
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['author'].'</td>
                      <td>'.$row['category'].'</td>
                    </tr>';
        }
        echo '</tbody></table>';
    }
}