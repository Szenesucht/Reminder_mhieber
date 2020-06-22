<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reminder - New</title>
    </head>
    <body>
        

        <h1>Neues ToDo erstellen</h1>

        <br />
        <form action='index.php'><input type='submit' value='abbrechen'></form>
        <br /><br />

        <form action="create.php" method="POST">
            <input type="text" name="bez" placeholder="ToDo *" required />
            <input type="datetime" name="date" placeholder="Remind me at *" required />
            <input type="text" name="category" placeholder="Category1 *" required />
            <input type="text" name="category2" placeholder="Category2" />
            <input type="text" name="category3" placeholder="Category3" />
            <input type="submit" value="Speichern" />
        </form>

        <br />
        <p>Fill in date in format: jjjj-mm-dd hh:mm:ss</p>
        <p>Example: 2020-05-25 16:30:00

    </body>
</html>