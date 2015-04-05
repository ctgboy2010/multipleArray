<?php
    $movie_list=array(array('name'=>'Rise (2014)',
                            'genre'=>'Crime, Drama, News',
                            'actor'=>array('Nathan Wilson','Martin Sacks','Marty Rhone','Erin Connor','David Cuthbertson','John Regan')),

                      array('name'=>'Birdman (2014)',
                            'genre'=>'Comedy, Drama',
                            'actor'=>array('Michael Keaton','Emma Stone','Kenny Chin','Jamahl Garrison-Lowe')),

                      array('name'=>'Laggies (2014)',
                            'genre'=>'Comedy, Romance',
                            'actor'=>array('Keira Knightley','Chloë Grace Moretz','Sam Rockwell')));
    $id=1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <header class="container">

    </header>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-responsive">
                    <thead class="btn-success">
                        <tr>
                            <th class="text-center">SL No</th>
                            <th class="text-center">Movie Name</th>
                            <th class="text-center">Genre</th>
                            <th class="text-center">Actor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($movie_list as $key=>$list){?>                        
                            <tr>
                                <td class="text-center btn-sm btn-warning"><?php echo $key+1;/*$id; $id++;*/?></td>
                                <td class="btn-sm btn-danger"><?php echo $list['name']?></td>
                                <td class="btn-sm btn-primary"><?php echo $list['genre']?></td>
                                <td class="progress-bar-success progress-bar-striped">
                                    <ul>
                                        <?php foreach($list['actor'] as $actor){?>
                                            <li><?php echo $actor ?></li>
                                        <?php }?>
                                    </ul>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer class="container">

    </footer>
</body>
</html>