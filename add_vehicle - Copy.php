<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Services Categories</title>
    <style>
        /* Custom styles for category boxes, Add Vehicles, and Posts */
        /* Your existing CSS styles here */
    </style>
</head>
<body>
    <!-- Your existing HTML content for categories and Add Vehicles section here -->

    <!-- Posts Section -->
    <div class="posts">
        <h2>Recent Posts</h2>
        <?php
        // Sample PHP code to fetch and display posts
        // Assuming $posts is an array containing post data fetched from a database or other source

        // Sample array of posts (replace with actual data retrieval)
        $posts = array(
            array("title" => "Post Title 1", "content" => "Content of the first post..."),
            array("title" => "Post Title 2", "content" => "Content of the second post...")
            // Add more posts as needed
        );

        // Loop through each post and display them
        foreach ($posts as $post) {
            echo '<div class="post">';
            echo '<h3>' . $post["title"] . '</h3>';
            echo '<p>' . $post["content"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
