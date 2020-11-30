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
                <li><a href="publisher.php">Publisher</a></li>
                <li class="active"><a href="category.php">Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="category.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the category
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" id="sel1" name="category">
                <option selected disabled hidden>Choose category here</option>
                <optgroup label="A">
                    <option value="Academic">Academic</option>
                    <option value="Adult">Adult</option>
                    <option value="Anthologies">Anthologies</option>
                    <option value="Anthologies">Anthologies</option>
                    <option value="Asian Art & Collectibles">Asian Art & Collectibles</option>
                    <option value="Asian Food & Cooking">Asian Food & Cooking</option>
                    <option value="Asian History & Culture">Asian History & Culture</option>
                    <option value="Asian Languages">Asian Languages</option>
                    <option value="Asian Literature">Asian Literature</option>
                    <option value="Autobiography">Autobiography</option>
                <optgroup label="B">
                    <option value="Baby Books">Baby Books</option>
                    <option value="Baseball">Baseball</option>
                    <option value="Body & Sprit">Body & Sprit</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Business Books">Business Books</option>
                <optgroup label="C">
                    <option value="Children">Children</option>
                    <option value="Children's Literature">Children's Literature</option>
                    <option value="Christian">Christian</option>
                    <option value="Coffee table book">Coffee table book</option>
                    <option value="Comics">Comics</option>
                    <option value="Computers">Computers</option>
                    <option value="Contemporary Romance">Contemporary Romance</option>
                    <option value="Cookbooks">Cookbooks</option>
                    <option value="Crafts & Origami">Crafts & Origami</option>
                    <option value="Creative">Creative</option>
                <optgroup label="E">
                    <option value="Education">Education</option>
                    <option value="Esotericism">Esotericism</option>
                <optgroup label="F">
                    <option value="Faith">Faith</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Fiction">Fiction</option>
                    <option value="Folklore">Folklore</option>
                <optgroup label="G">
                    <option value="Games & Graphic Novels">Games & Graphic Novels</option>
                    <option value="Gardening & Flower Arranging">Gardening & Flower Arranging</option>
                    <option value="Genre Fiction">Genre Fiction</option>
                    <option value="GLBT">GLBT</option>
                <optgroup label="H">
                    <option value="Health">Health</option>
                    <option value="Health & Fitness">Health & Fitness</option>
                    <option value="Health & Yoga">Health & Yoga</option>
                    <option value="Higher Education">Higher Education</option>
                    <option value="History">History</option>
                    <option value="Horror fiction">Horror fiction</option>
                    <option value="Humanities">Humanities</option>
                    <option value="Humor">Humor</option>
                    <option value="Humour">Humour</option>
                <optgroup label="I">
                    <option value="Interior Design & Architecture">Interior Design & Architecture</option>
                <optgroup label="J">
                    <option value="Journal">Journal</option>
                <optgroup label="K">
                    <option value="Kids">Kids</option>
                <optgroup label="L">
                    <option value="Learning">Learning</option>
                    <option value="Literary Non fiction">Literary Non fiction</option>
                <optgroup label="M">
                    <option value="Maps">Maps</option>
                    <option value="Martial Arts">Martial Arts</option>
                    <option value="Math">Math</option>
                    <option value="Medicines">Medicines</option>
                    <option value="Mediumship">Mediumship</option>
                    <option value="Memoir">Memoir</option>
                    <option value="Middle Grade Books">Middle Grade Books</option>
                    <option value="Military">Military</option>
                    <option value="Military History">Military History</option>
                    <option value="Mind">Mind</option>
                    <option value="Mindfulness">Mindfulness</option>
                    <option value="Music">Music</option>
                    <option value="Mystery">Mystery</option>
                <optgroup label="N">
                    <option value="Natural History">Natural History</option>
                    <option value="Nautical & Sport">Nautical & Sport</option>
                    <option value="New Age">New Age</option>
                    <option value="Non fiction">Non fiction</option>
                    <option value="Novels">Novels</option>
                <optgroup label="O">
                    <option value="Occult">Occult</option>
                <optgroup label="P">
                    <option value="Paganism">Paganism</option>
                    <option value="Paranormal">Paranormal</option>
                    <option value="Parapsychology">Parapsychology</option>
                    <option value="Parenting">Parenting</option>
                    <option value="Photography">Photography</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Professional Development">Professional Development</option>
                    <option value="Psychology">Psychology</option>
                <optgroup label="Q">
                <optgroup label="R">
                    <option value="Regional">Regional</option>
                    <option value="Regional Art History">Regional Art History</option>
                    <option value="Romance">Romance</option>
                <optgroup label="S">
                    <option value="Science">Science</option>
                    <option value="Science & Natire">Science & Natire</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Self-help">Self-help</option>
                    <option value="Self-Help & Eastern Religion">Self-Help & Eastern Religion</option>
                    <option value="Short Stories">Short Stories</option>
                    <option value="Sport">Sport</option>
                <optgroup label="T">
                    <option value="Technology">Technology</option>
                    <option value="Teen">Teen</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Travel">Travel</option>
                    <option value="Travel Guides">Travel Guides</option>
                    <option value="True Crime">True Crime</option>
                    <option value="True Life Stories">True Life Stories</option>
                <optgroup label="U">
                <optgroup label="V">
                <optgroup label="W">
                    <option value="Weird Fiction">Weird Fiction</option>
                    <option value="Western">Western</option>
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
    $category = $_POST['category'];

    $url = "http://thinhtd.ddns.net:8080/category?name=".$category;
    $url = str_replace(' ', "%20", $url);
    $result = json_decode(file_get_contents($url), true);

    echo '<br><div class="container">';
    echo '<div style="text-align: center">
                <i>'.$result["query_rows"].' result(s) in '.$result["execute_time"].' for </i><b>'.$category.'</b>
                </div>';



    if ($result["books"] != null){
        echo '<br><br><table class="table table-bordered">
                  <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Publisher</th>
                        </tr>
                  </thead>
                  <tbody>';

        foreach ($result["books"] as $row){
            echo '
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['author'].'</td>
                      <td>'.$row['publisher'].'</td>
                    </tr>';
        }
        echo '</tbody></table>';
    }
}