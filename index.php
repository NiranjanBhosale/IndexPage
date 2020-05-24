<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered table-hover">
    <tr>
        <th>Type</th>
        <th>Filename</th>
    </tr>
        <?php
        $filelist = glob("*");
        foreach ($filelist as $files)
        {
            $exts=preg_split("/\./", $files);
            $val = $exts[1];
            if($val == "mp4" || $val == "webm" || $val == "mpg" || $val == "oog" || $val == "avi" || $val == "mov")
            {
                ?>
                <tr>
                <td><i class="fas fa-video fa-3x"></i></td>
                <td><a href="<?php echo $files;?>"><?php echo $files;?></a></td>
                </tr>
                <?php
            }
            elseif ($val == "jpg" || $val == "png" || $val == "gif" || $val == "indd" || $val == "ai" || $val == "raw" || $val == "tiff")
            {
                ?>
                <tr>
                <td><i class="far fa-image fa-3x"></i></td>
                <td><a href="<?php echo $files;?>"><?php echo $files;?></a></td>
                </tr>
                <?php
            }
            elseif ($val == "m4a" || $val == "mp3" || $val == "flac" || $val == "wav" || $val == "wma" || $val == "aac")
            {
                ?>
                <tr>
                <td><i class="fas fa-volume-up fa-3x"></i></td>
                <td><a href="<?php echo $files;?>"><?php echo $files;?></a></td>
                </tr>
                <?php
            }
            elseif ($val == "pdf")
            {
                ?>
                <tr>
                <td><i class="far fa-file-pdf fa-3x"></i></td>
                <td><a href="<?php echo $files;?>"><?php echo $files;?></a></td>
                </tr>
                <?php
            }
        }
        ?>
</table>


</body>
</html>