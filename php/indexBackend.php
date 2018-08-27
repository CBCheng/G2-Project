<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/indexBackend.css">
    
</head>
<body>
<form action="indexBackendLogin.php" method="get" >
    <div class="backendFull">
        <div class="mask">
            <div class="wrapPanel">
                <img src="../img/phpImg/logo-backend.png" alt="">
                
                <div class="loginPanel">
                    <h2>管理員登入平台</h2>
                    <span>帳號:</span>
                    <span><input type="text" placeholder="請輸入您的帳號" onfocus="this.placeholder=''" name="mgrId"></span>
                    <span>密碼:</span>
                    <span><input type="password" placeholder="請輸入您的密碼" onfocus="this.placeholder=''" name="mgrPsw"></span>
                    <span><input type="submit" value="登入"></span>
                </div>
                
            </div>
        </div>

    </div>
</form>
</body>
</html>