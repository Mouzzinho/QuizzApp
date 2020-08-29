$(document).ready(function () {

    $('.start-wrapper__playbutton').on('click', function () {
        $('.start-page').css('display', 'none');
        $('.asnwer-page').css('display', 'block');
        initGame();
    })
    $('.answer').on('click', function () {

    })

    function initGame() {
        let QuestionNumber = 1;
        let CorrectAnswer = 0;
        QuestionDownload(QuestionNumber);


    }

    function QuestionDownload(number) {
        console.log('start');
        let QuestionText = 'Co jest stolicą Japonii?';
        let Answers = ['Tokio', 'Kioto', 'New York', 'London']
        $('.question-main').text(QuestionText);
        $('.answer.first').text(Answers[0]);
        $('.answer.second').text(Answers[1]);
        $('.answer.third').text(Answers[2]);
        $('.answer.fourth').text(Answers[3]);
        $('.question-number').text(number + '/10')
        $.ajax({
            url: '?op=get_question' + '&question=' + number,
            dataType: "json",
            success: function (response) {
                console.log('succes');
                console.log(response);
            },
            error: function (error) {
                console.log('error');
                console.log(error);
            }
        })
    }
});