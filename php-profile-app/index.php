<?php
    $name = "Faizan Naikwadi";
    $title = "DevOps Engineer";
    $bio = "Passionate about automation, containers, and cloud infrastructure. Currently learning Docker, Kubernetes, and CI/CD pipelines.";
    $skills = ["Docker", "Git", "Linux", "AWS", "Python", "Bash"];
    $currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> - Profile</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            text-align: center;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #2a5298;
            color: white;
            font-size: 40px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        h1 { color: #1e3c72; margin-bottom: 5px; }
        .title { color: #666; font-size: 16px; margin-bottom: 20px; }
        .bio { color: #444; line-height: 1.6; margin-bottom: 25px; }
        .skills { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; }
        .skill {
            background: #eef2ff;
            color: #2a5298;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        .footer { margin-top: 25px; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar"><?php echo strtoupper(substr($name, 0, 1)); ?></div>
        <h1><?php echo htmlspecialchars($name); ?></h1>
        <div class="title"><?php echo htmlspecialchars($title); ?></div>
        <p class="bio"><?php echo htmlspecialchars($bio); ?></p>
        <div class="skills">
            <?php foreach ($skills as $skill): ?>
                <span class="skill"><?php echo htmlspecialchars($skill); ?></span>
            <?php endforeach; ?>
        </div>
        <div class="footer">Served by PHP + Apache inside Docker &copy; <?php echo $currentYear; ?></div>
    </div>
</body>
</html>
