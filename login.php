<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body class="bg-primary">

    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="margin-top: 250px;">
            <div class="card-body">
                <h4>Login Admin</h4>
                <input id="edtUsername" type="text" class="form-control mb-2" style="width: 300px;" placeholder="Masukan Username">
                <input id="edtPassword" type="password" class="form-control mb-2" style="width: 300px;" placeholder="Masukan Password">
                <button class="btn btn-primary mb-3" style="width: 100%;" onclick="login();">Login</button>
                <button class="btn btn-primary mb-3" style="width: 100%;" onclick="logout();">Logout</button>

                <h5 id="lblStatus">-</h5>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        document.getElementById('lblStatus').innerHTML = 'Status Login : ' + getCookie('username');



        function login() {
            var username = document.getElementById('edtUsername').value;
            var password = document.getElementById('edtPassword').value;
            if (username != 'admin') {
                alert('Username salah')
            } else if (password != 'admin') {
                alert('Password salah')
            } else {
                document.cookie = "username=" + username;
                alert("Berhasil login")
                window.location.reload();
            }
        }

        function logout() {
            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; ";
            window.location.reload();
        }
    </script>
</body>

</html>