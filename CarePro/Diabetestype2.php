<html>
    
    <head>
        <title>Diabetestype2-Questionnaire</title>
        <link rel="stylesheet" href="Questionnaire.css">
        
    </head>

    <body>
        <?php
            include_once('navbar.php');
        ?>
        <header>
            <h1>Diabetestype2-Questionnaire</h1>
        </header>

        <br></br>

        <img src="https://mi-linux.wlv.ac.uk/~2214257/CarePro/Images/Illnesses_DiabetesType2.png" alt="Illnesses_Dementia_Photo" width="150" height="200" class="center">

        <form action= "Questionnaire-Complete.php" method="POST">

            <br></br>
            <p1>Question 1: Are you constantly tired ?</p1>

            <input type="radio" id="Q1:Yes" name="Question 1" value="Q1:Yes">
            <label for="Q1:Yes">Yes</label>

            <input type="radio" id="Q1:No" name="Question 1" value="Q1:No">
            <label for="Q1:No">No</label>

            <br></br>

            <p1>Question 2: Have you had diharria in the last week ?</p1>


            <input type="radio" id="Q2:Yes" name="Question 2" value="Q1:Yes">
            <label for="Q2:Yes">Yes</label>

            <input type="radio" id="Q2:No" name="Question 2" value="Q1:No">
            <label for="Q2:No">No</label>

            <br></br>

            <p1>Question 3: Do you need the toilet more often than normal ?</p1>


            <input type="radio" id="Q3:Yes" name="Question 3" value="Q3:Yes">
            <label for="Q3:Yes">Yes</label>

            <input type="radio" id="Q3:No" name="Question 3" value="Q3:No">
            <label for="Q3:No">No</label>

            <br></br>

            <p1>Question 4: Do you have a lack of concentration ?</p1>


            <input type="radio" id="Q4:Yes" name="Question 4" value="Q4:Yes">
            <label for="Q4:Yes">Yes</label>

            <input type="radio" id="Q4:No" name="Question 4" value="Q4:No">
            <label for="Q4:No">No</label>

            <br></br>

            <p1>Question 5: Are you forgetfull ?</p1>

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