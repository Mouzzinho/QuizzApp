<?php
    require_once('function.php');
    session_start();

    if(isSet($_GET['op']))
        $op = $_GET['op'];
    else  {
        $op = ' ';
    }



    switch($op)	{
        case 'get_question':
            $conn = conn();

            $answer_a = $conn -> query("SELECT odpowiedzi.text FROM `odpowiedzi` INNER JOIN zestawy ON odpowiedzi.id=zestawy.answer_1_id WHERE zestawy.id = '".$_GET['question']."'");
            $answer_b = $conn -> query("SELECT odpowiedzi.text FROM `odpowiedzi` INNER JOIN zestawy ON odpowiedzi.id=zestawy.answer_2_id WHERE zestawy.id = '".$_GET['question']."'");
            $answer_c = $conn -> query("SELECT odpowiedzi.text FROM `odpowiedzi` INNER JOIN zestawy ON odpowiedzi.id=zestawy.answer_3_id WHERE zestawy.id = '".$_GET['question']."'");
            $answer_d = $conn -> query("SELECT odpowiedzi.text FROM `odpowiedzi` INNER JOIN zestawy ON odpowiedzi.id=zestawy.answer_4_id WHERE zestawy.id = '".$_GET['question']."'");
            
            echo $answer_a;
        break;
        default:
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="page start-page">
        <div class="start-wrapper">
            <div class="start-wrapper__title">Quiz APP</div>
            <div class="start-wrapper__playbutton">Graj</div>
        </div>
    </div>
    <div class="page asnwer-page" style="display: none;">
        <div class="start-wrapper-second">
            <div class="question-wrapper">
                <div class="question-header">
                    <p class="question-number">Pytanie 3/10</p>
                    <p class="question-correct">Poprawnie 2</p>
                </div>
                <div class="question-main">Miasto Tokyo jest stolicą jakiego kraju?</div>
                <div class="question-footer">Kategoria: Geografia</div>
            </div>
            <div class="answer-wrapper">
                <div class="answer first">Stanów Zjednoczonych</div>
                <div class="answer second">Niemiec</div>
                <div class="answer third">Libanu</div>
                <div class="answer fourth">Japonii</div>
            </div>
        </div>
    </div>
    <div class="page result-page" style="display: none;">
        <div class="start-wrapper">
            <div class="result-wrapper">
                <p class="correct-answers">Poprawnych odpowiedzi:</p>
                <p class="correct-number">8</p>
                <p class="score">Niezły wynik!</p>
            </div>
            <div class="play-again">
                <p class="play-again__text">Zagraj Ponownie</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>

<?php
    }
?>