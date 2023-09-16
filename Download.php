<!-- List of Uploaded Files -->
<h2>Uploaded Files:</h2>
<ul>
    <?php
    $files = scandir("uploads"); // Assuming files are stored in an "uploads" directory
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo '<li><a href="uploads/' . $file . '" download>' . $file . '</a></li>';
        }
    }
    ?>
</ul
