<?php
// Check if the user selected a career path
if (isset($_GET['path'])) {
    $careerPath = $_GET['path'];
    // Redirect or display dynamic content based on the career path
    if ($careerPath == 'home-pass') {
        header('Location: home.html'); // Redirect to 10th pass career options page
    }elseif ($careerPath == '10th-pass'){
        header('Location: 10.html'); // Redirect to 10th pass career options page
    }elseif ($careerPath == '12th-pass') {
        header('Location: 12.html'); // Redirect to 12th pass career options page
    } elseif ($careerPath == 'post-graduation') {
        header('Location: post.html'); // Redirect to Post Graduation career options page
    } else {
        // If the career path is not recognized, show an error message
        echo "Invalid career path.";
    }
} else {
    // If no career path is selected, show a default page
    echo "Please select a career path.";
}
?>
