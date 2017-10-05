<!DOCTYPE html>
<html lang='pt' xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Sistema Escola do Itamaraty</title>
        <link rel="stylesheet" type="text/css" href="./secretaria/estilo.css" >
        <link rel="icon" 
            type="image/jpg" 
            href="./secretaria/imagens/timbre_escola.jpg">
    </head>
    <body>
        <form name='input' action='./ferramentas/autenticar.php' method='post'>
            <div class="login" >
                <div style="text-align: center" >
                    Sistema Escola do Itamaraty<br/>
                    Usuário:
                    <input type='text' name='usuario' maxlength="80" autofocus="" style="width: 180px;" /><br/>
                    Senha:
                    <input type='password' name='senha' maxlength="80" style="width: 180px;position: relative;left: 9px" /><br/>
                    <input type='submit' value='Entrar' />
                    <input type='reset' value='Apagar' /><br/>
                </div>
            </div>
        </form>
    </body>
</html>
