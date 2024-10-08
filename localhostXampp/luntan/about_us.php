<?php
    session_start();

    // 如果用户未登录，则重定向到登录页面
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>关于我们</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #66ccff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .login {
            position: absolute;
            top: 10px;
            left: 10px;
        }

            .login a {
                color: #fff;
                text-decoration: none;
                font-weight: bold;
                background-color: #007bff;
                padding: 5px 10px;
                border-radius: 5px;
            }

        .nav {
            background-color: #66ccff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

            .nav a {
                color: #fff;
                margin: 0 15px;
                text-decoration: none;
            }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            max-width: 1200px;
        }

        .footer {
            background-color: #66ccff;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .section {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

            .section h2 {
                margin-top: 0;
            }

        .contact-info {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>关于我们</h1>
    </div>
    <div class="nav">
        <a href="home.php">首页</a>
        <a href="board.php">论坛版块</a>
        <a href="about_us.php">关于我们</a>
        <a href="call_us.php">联系我们</a>
    </div>
    <div class="container">
        <div class="section">
            <h2>我们的愿景与使命</h2>
            <p>我们致力于提供一个友好、互动的社区平台，汇集各界人士的智慧和经验。我们的使命是通过优质的内容和互动体验，促进知识共享和社区建设。</p>
        </div>
        <div class="section">
            <h2>团队介绍</h2>
            <p>我们的团队由一群充满激情的老师和学生组成，我们每个人都致力于推动平台的发展和优化。</p>
            <ul>
                <li><strong>陈建海</strong> - 指导教师</li>
                <li><strong>苏家豪</strong> - 组长</li>
                <li><strong>李嘉锐</strong> - 组员</li>
                <li><strong>赵伟  </strong> - 组员</li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>© 浙江大学srtp项目 版权所有.</p>
    </div>
</body>
</html>
