<!DOCTYPE html>
<html>
    <head>
        <!-- hhhhhh -->
        <meta charset="UTF-8"/>
        <title>c_strom</title>
        <meta name="description" content="thes my world" />
        
        
        <link rel="stylesheet" href="style.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
            <div class="log">
                <h1>Login</h1>
                    <form action="insert.php" method="post">
                         <div class="input-log">
                             <input type="email" name='email' placeholder="Email" required />
                             <i class='bx bxl-google'></i>
                        </div>

                        <div class="input-log">
                            <input type="password" name='password' placeholder="password"  required />
                            <i class='bx bxs-lock-alt'></i>
                        </div>

                        <div class="str">
                            <label><input type="checkbox" />Remember me</label>
                        
                                <a href="#" >Forget password?</a>
                        </div>
                        
                            <button type="submit" name="submit" class="btn-log">Login</button>
                            
                        <div class="register">
                            <p>don't have an account?<a href="#">register</a></p>
                        </div>

                    </form>
            </div>
     </body>
</html>