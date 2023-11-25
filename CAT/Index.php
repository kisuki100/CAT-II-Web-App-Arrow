<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARROW Cat2</title>
    <link rel="stylesheet" href="CSS/style.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #005000; /* Dark green text color */
            background-color: #f4f4f4; /* Light gray background */
        }

        h3 {
            text-align: center;
            color: #005000; /* Dark green text color */
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            width: 100vw; /* Full width */
            height: 100vh; /* Full height */
            box-sizing: border-box;
        }

        .content img {
            max-width: 40%;
            margin-right: 20px;
        }

        .sidebar {
            width: 50%;
        }

        .footer {
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- top navigation starts here -->
    <?php require "navigation.php"; ?>
    <!-- top navigation ends here -->
    <div class="header">
        <h1>Welcome to the Author's House</h1>
    </div>
    <!-- the main content section starts here -->
    <div class="row">
        <div class="content">
            <img src="images/arrow.jpg" alt="Arrow Image">
            <div class="sidebar">
<p>The Author's Guild! We are thrilled to have you join our community of passionate writers and literary enthusiasts. As a member, you'll have access to a wealth of resources, support, and opportunities to enhance your writing journey.</p>

<p>Joining our guild opens doors to a vibrant network of like-minded individuals sharing their stories, experiences, and knowledge. Here, camaraderie thrives, and collaborations are encouraged, fostering an environment where creativity flourishes.</p>

<p>As part of our community, you'll gain invaluable insights through workshops, seminars, and discussions led by industry experts. Explore new writing techniques, learn about publishing trends, and refine your craft alongside fellow authors.</p>

<p>At the Author's Guild, every writer's voice matters. We celebrate diversity in storytelling, valuing each narrative's unique perspective. Whether you're a seasoned wordsmith or an aspiring writer, you'll find encouragement and inspiration here.</p>

<p>Embrace the opportunity to participate in exclusive events and literary gatherings, connecting with established authors and emerging talents. Forge friendships, seek mentorship, and grow your writing skills in an inclusive and supportive environment.</p>

                <!-- Rest of your paragraphs here -->
            </div>
        </div>
    </div>
    <div class="footer">
        Copyright &copy; DBIT 2023
    </div>
</body>

</html>
