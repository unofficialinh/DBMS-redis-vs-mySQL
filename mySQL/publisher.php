<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myStyle.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="../image/mySQL.png"
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
    <form class="form-horizontal" action="book.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the publisher
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" id="sel1">
                <optgroup label="A">
                <option>	Alchemy Press Book of Horrors	</option>
                <option>	Alfresco Press	</option>
                <option>	Anchor Book Press	</option>
                <option>	Anthem Press	</option>
                <option>	Arbordale Publishing	</option>
                <option>	Arcade Publishing	</option>
                <option>	Arcadia Publishing	</option>
                <option>	Arkham House	</option>
                <option>	Armida Publications	</option>
                <option>	August House Publishers	</option>
                <option>	Autumn House Press	</option>
                <optgroup label="B">
                <option>	B&W Publishing	</option>
                <option>	Balboa Press	</option>
                <option>	Beacon Publishing	</option>
                <option>	Biblio Publishing	</option>
                <option>	Bloomsbury	</option>
                <option>	Blossom Spring Publishing	</option>
                <option>	blue manatee press	</option>
                <option>	Blue Swan Publishing	</option>
                <option>	BookPress Publishing	</option>
                <option>	Brick Cave Media	</option>
                <optgroup label="C">
                <option>	Capstone Publishers	</option>
                <option>	Chelsea Green Publishing	</option>
                <option>	City Lights Press	</option>
                <option>	City Lights Publishers	</option>
                <option>	CKN Christian Publishing	</option>
                <option>	Coffeetown Press	</option>
                <option>	Conundrum Press	</option>
                <option>	Coventry House Publishing	</option>
                <optgroup label="D">
                <option>	Divertir Publishing	</option>
                <option>	Dorrance Publishing Company	</option>
                <option>	Dover Publications	</option>
                <optgroup label="E">
                <option>	Echoic Mobile Press	</option>
                <option>	Eerdmans	</option>
                <option>	eLectio Publishing	</option>
                <optgroup label="F">
                <option>	Figroot Press	</option>
                <option>	Flame Tree Publishing	</option>
                <optgroup label="G">
                <option>	Gantec Publishing Solutions	</option>
                <option>	Graywolf Press	</option>
                <option>	Green Frog Publishing	</option>
                <option>	Grey Book Press	</option>
                <optgroup label="H">
                <option>	Harper Collins	</option>
                <option>	Hidden Brook Press	</option>
                <option>	House of Anansi Press	</option>
                <option>	Hydra Publications	</option>
                <optgroup label="I">
                <option>	Ink Smith Publisher	</option>
                <option>	Ink Smith Publishing	</option>
                <option>	Inkwater Press	</option>
                <optgroup label="J">
                <option>	John Blake Publishing	</option>
                <option>	John Hunt Publishing	</option>
                <optgroup label="K">
                <option>	Kensington Publishing Corp	</option>
                <option>	Kim Dong	</option>
                <option>	Korero Press	</option>
                <optgroup label="L">
                <option>	Lakewater Press	</option>
                <option>	Lee & Low Books	</option>
                <option>	Leo Publishing LLC	</option>
                <option>	Little Book Press	</option>
                <option>	Living Springs Publishers LLP	</option>
                <option>	Lore Lush Publishing	</option>
                <optgroup label="M">
                <option>	Manning Publications	</option>
                <option>	Mason J. Press	</option>
                <option>	Medknow Publications	</option>
                <option>	Moonshine Cove Publishing LLC	</option>
                <option>	Morgan James Publishing	</option>
                <option>	Mother Tongue Publishing	</option>
                <optgroup label="N">
                <option>	Native Ink Press	</option>
                <option>	Neverland Publishing Company	</option>
                <option>	North Atlantic Books	</option>
                <optgroup label="O">
                <optgroup label="P">
                <option>	Pan Macmillan	</option>
                <option>	Pants On Fire Press	</option>
                <option>	Penguin Random House	</option>
                <option>	Phoenix Publishing and Media Company	</option>
                <option>	Phoenix Yard Books	</option>
                <optgroup label="Q">
                <option>	Queer Pack	</option>
                <optgroup label="R">
                <option>	Reed Elsevier	</option>
                <option>	Regal House Publishing	</option>
                <option>	Ripple Grove Press	</option>
                <optgroup label="S">
                <option>	Shambhala	</option>
                <option>	Simon & Schuster	</option>
                <option>	Sleepytown Press	</option>
                <option>	Stormbird Press	</option>
                <optgroup label="T">
                <option>	Tachyon Publications	</option>
                <option>	TCK Publishing	</option>
                <option>	The Key Publishing House Inc	</option>
                <option>	The Open Book Press	</option>
                <option>	The Wild Rose Press	</option>
                <option>	Tiny Fox Press	</option>
                <option>	Tirgearr Publishing	</option>
                <option>	Torquere Press	</option>
                <option>	TouchPoint Press	</option>
                <option>	Tradewind Books	</option>
                <option>	Triplicity Publishing	</option>
                <option>	Tuttle Publishing	</option>
                <optgroup label="U">
                <optgroup label="V">
                <option>	Virgogray Press	</option>
                <optgroup label="W">
                <option>	Weasel Press	</option>
                <option>	White Knuckle Press	</option>
                <option>	Wiley	</option>
                <option>	Wolfpack Publishing	</option>
                <option>	Wordpool Press	</option>
                <option>	Writerists House	</option>
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