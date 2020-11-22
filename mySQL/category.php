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
                <li><a href="publisher.php">Publisher</a></li>
                <li class="active"><a href="category.php">Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="book.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the category
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" id="sel1">
                <optgroup label="A">
                <option>	Academic	</option>
                <option>	Adult	</option>
                <option>	Adult	</option>
                <option>	Anthologies	</option>
                <option>	Anthologies	</option>
                <option>	Asian Art & Collectibles	</option>
                <option>	Asian Food & Cooking	</option>
                <option>	Asian History & Culture	</option>
                <option>	Asian Languages	</option>
                <option>	Asian Literature	</option>
                <option>	Autobiography	</option>
                <optgroup label="B">
                <option>	Baby Books	</option>
                <option>	Baseball	</option>
                <option>	Body & Sprit	</option>
                <option>	Buddhism	</option>
                <option>	Business Books	</option>
                <optgroup label="C">
                <option>	Children	</option>
                <option>	Children's Literature	</option>
                <option>	Christian	</option>
                <option>	Coffee table book	</option>
                <option>	Comics	</option>
                <option>	Computers	</option>
                <option>	Contemporary Romance	</option>
                <option>	Cookbooks	</option>
                <option>	Crafts & Origami	</option>
                <option>	Creative	</option>
                <optgroup label="D">
                <optgroup label="E">
                <option>	Education	</option>
                <option>	Esotericism	</option>
                <optgroup label="F">
                <option>	Faith	</option>
                <option>	Fantasy	</option>
                <option>	Fantasy	</option>
                <option>	Fiction	</option>
                <option>	Folklore	</option>
                <optgroup label="G">
                <option>	Games & Graphic Novels	</option>
                <option>	Gardening & Flower Arranging	</option>
                <option>	Genre Fiction	</option>
                <option>	GLBT	</option>
                <optgroup label="H">
                <option>	Health & Yoga	</option>
                <option>	Higher Education	</option>
                <option>	History	</option>
                <option>	Horror fiction	</option>
                <option>	Humanities	</option>
                <option>	Humor	</option>
                <option>	Humour	</option>
                <optgroup label="I">
                <option>	Interior Design & Architecture	</option>
                <optgroup label="J">
                <option>	Journal	</option>
                <optgroup label="K">
                <option>	Kids	</option>
                <optgroup label="L">
                <option>	Learning	</option>
                <option>	Literary Non fiction	</option>
                <optgroup label="M">
                <option>	Maps	</option>
                <option>	Martial Arts	</option>
                <option>	Math	</option>
                <option>	Medicines	</option>
                <option>	Mediumship	</option>
                <option>	Memoir	</option>
                <option>	Middle Grade Books	</option>
                <option>	Military	</option>
                <option>	Military History	</option>
                <option>	Mind	</option>
                <option>	Mindfulness	</option>
                <option>	Music	</option>
                <option>	Mystery	</option>
                <optgroup label="N">
                <option>	Natural History	</option>
                <option>	Nautical & Sport	</option>
                <option>	New Age	</option>
                <option>	Non fiction	</option>
                <option>	Novels	</option>
                <optgroup label="O">
                <option>	Occult	</option>
                <optgroup label="P">
                <option>	Paganism	</option>
                <option>	Paranormal	</option>
                <option>	Parapsychology	</option>
                <option>	Parenting	</option>
                <option>	Photography	</option>
                <option>	Poetry	</option>
                <option>	Professional Development	</option>
                <option>	Psychology	</option>
                <optgroup label="Q">
                <optgroup label="R">
                <option>	Regional	</option>
                <option>	Regional Art History	</option>
                <option>	Romance	</option>
                <optgroup label="S">
                <option>	Science	</option>
                <option>	Science & Natire	</option>
                <option>	Science Fiction	</option>
                <option>	Sci-Fi	</option>
                <option>	Self-help	</option>
                <option>	Self-Help & Eastern Religion	</option>
                <option>	Short Stories	</option>
                <option>	Sport	</option>
                <optgroup label="T">
                <option>	Technology	</option>
                <option>	Teen	</option>
                <option>	Thriller	</option>
                <option>	Travel	</option>
                <option>	Travel Guides	</option>
                <option>	True Crime	</option>
                <option>	True Life Stories	</option>
                <optgroup label="U">
                <optgroup label="V">
                <optgroup label="W">
                <option>	Weird Fiction	</option>
                <option>	Western	</option>
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