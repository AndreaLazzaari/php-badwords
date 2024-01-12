<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>    
    <main>
        <form action="correction.php" method='GET'>
            <label for="badwords">Inserisci la parola da censurare</label>
            <input type="text" name='badwords' id='badwords'>
            <button type="submit">Invia</button>
            <textarea name="paragrafo" id="paragrafo" cols="30" rows="10">
                Il povero uccellino non sapeva più a chi rivolgersi, ma continuò a saltellare… Lo vide un abete e gli chiese
            </textarea>
        </form>
    </main>
</body>
</html>