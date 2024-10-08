<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帖子详情</title>
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
            padding: 20px;
            text-align: center;
        }

        .post-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .post-content {
            line-height: 1.6;
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

        .container {
            width: 80%;
            margin: auto;
            max-width: 800px;
            padding: 20px;
        }

        .container2 {
            width: 80%;
            margin: auto;
            max-width: 1200px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comment {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comment-form {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

            .comment-form textarea {
                width: 100%;
                padding: 10px;
                border-radius: 4px;
                border: 1px solid #ddd;
                margin-bottom: 10px;
                box-sizing: border-box;
            }

            .comment-form button {
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                background-color: #007bff;
                color: #fff;
                cursor: pointer;
            }

                .comment-form button:hover {
                    background-color: #0056b3;
                }
    </style>
</head>
<body>
    <div class="header">
        <h1>白度贴巴</h1>
    </div>
    <div class="nav">
        <a href="home.php">首页</a>
        <a href="board.php">论坛版块</a>
        <a href="about_us.php">关于我们</a>
        <a href="call_us.php">联系我们</a>
    </div>

    <div class="container2">
        <div class="post-title">
            <h1>区块链和元宇宙是什么？</h1>
        </div>
        <div class="post-content">
            <p>
                区块链（英文名：blockchain或block chain）是一种块链式存储、不可篡改、安全可信的去中心化分布式账本，它结合了分布式存储、点对点传输、共识机制、密码学等技术，通过不断增长的数据块链（Blocks）记录交易和信息，确保数据的安全和透明性。
                区块链起源于比特币（Bitcoin），最初由中本聪（Satoshi Nakamoto）在2008年提出，作为比特币的底层技术。从诞生初期的比特币网络开始，区块链逐渐演化为一项全球性技术，吸引了全球的关注和投资。随后，以太坊（Ethereum）等新一代区块链平台的出现进一步扩展了应用领域。
            </p>
            <p>
                元宇宙(Metaverse)也称为后设宇宙、形上宇宙、元界、超感空间、虚空间。钱学森将其命名为灵境。元宇宙是一个在线可与现实世界交互的虚拟空间，其中所有事件都是实时发生的，且具有永久的影响力。对于“元宇宙”的概念至今没有准确的定论，在维基百科中这样描述“元宇宙”：元宇宙是通过虚拟增强的物理现实，是呈现收敛性和物理持久性特征的、基于未来互联网的具有连接感知和共享特征的3D虚拟空间。
            </p>
        </div>
    </div>

    <div class="container">
        <div class="comment-form">
            <h2>添加评论</h2>
            <form id="comment-form">
                <textarea id="comment-content" rows="4" placeholder="请输入评论..."></textarea>
                <button type="submit">提交评论</button>
            </form>
        </div>
        <div id="comments-container">
            <!-- 评论将被动态加载到这里 -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const commentsContainer = document.getElementById('comments-container');
            const commentForm = document.getElementById('comment-form');
            const commentContent = document.getElementById('comment-content');

            // 加载评论
            function loadComments() {
                fetch('get_comments.php')
                    .then(response => response.json())
                    .then(data => {
                        commentsContainer.innerHTML = ''; // 清空评论容器
                        data.forEach(comment => {
                            const commentDiv = document.createElement('div');
                            commentDiv.className = 'comment';
                            commentDiv.innerHTML = `<p>${comment.content}</p>`;
                            commentsContainer.appendChild(commentDiv);
                        });
                    });
            }

            // 提交评论
            commentForm.addEventListener('submit', function (event) {
                event.preventDefault();
                fetch('add_comment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        content: commentContent.value
                    })
                }).then(() => {
                    commentContent.value = ''; // 清空文本框
                    loadComments(); // 重新加载评论
                });
            });

            loadComments(); // 页面加载时加载评论
        });</script>
</body>
</html>
