<html>
    
    <head>
        <title>Alzheimers-Questionnaire</title>
        <link rel="stylesheet" href="Questionnaire.css">
        
    </head>

    <body>
        <?php
            include_once('navbar.php');
        ?>
        <header>
            <h1>Alzheimers-Questionnaire</h1>
        </header>

        <br></br>

        <img src="https://mi-linux.wlv.ac.uk/~2214257/CarePro/Images/Illnesses_Alzheimers.png" alt="Illnesses_Dementia_Photo" width="150" height="200" class="center">

        <form action= "Questionnaire-Complete.php" method="POST">

            <br></br>
            <p1>Question 1: Is there 12 months in a year ?</p1>

            <input type="radio" id="Q1:Yes" name="Question 1" value="Q1:Yes">
            <label for="Q1:Yes">Yes</label>

            <input type="radio" id="Q1:No" name="Question 1" value="Q1:No">
            <label for="Q1:No">No</label>

            <br></br>

            <p1>Question 2: Are there 8 days in a week ?</p1>


            <input type="radio" id="Q2:Yes" name="Question 2" value="Q1:Yes">
            <label for="Q2:Yes">Yes</label>

            <input type="radio" id="Q2:No" name="Question 2" value="Q1:No">
            <label for="Q2:No">No</label>

            <br></br>

            <p1>Question 3: Do you use a remote controll for the television ?</p1>


            <input type="radio" id="Q3:Yes" name="Question 3" value="Q3:Yes">
            <label for="Q3:Yes">Yes</label>

            <input type="radio" id="Q3:No" name="Question 3" value="Q3:No">
            <label for="Q3:No">No</label>

            <br></br>

            <p1>Question 4: Can birds fly ?</p1>


            <input type="radio" id="Q4:Yes" name="Question 4" value="Q4:Yes">
            <label for="Q4:Yes">Yes</label>

            <input type="radio" id="Q4:No" name="Question 4" value="Q4:No">
            <label for="Q4:No">No</label>

            <br></br>

            <p1>Question 5: Is a dog a family pet ?</p1>

            <input type="radio" id="Q5:Yes" name="Question 5" value="Q5:Yes">
            <label for="Q5:Yes">Yes</label>

            <input type="radio" id="Q5:No" name="Question 5" value="Q5:No">
            <label for="Q5:No">No</label>

            <br></br>

            <input type="submit" value="Submit">

            
            <br></br>

        </form>

    </body>
</html>
