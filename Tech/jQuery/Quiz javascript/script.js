
//    Dánh sách câu hỏi
var questions = [{
    question: "Câu hỏi 1-1",
    choices: ["Đáp án 1", "Đáp án 2", "Đáp án 3", "Đáp án 4", "Đáp án 5"],
    correctAnswer: "Đáp án 1"
    }, {
    question: "Câu hỏi 2-6",
    choices: ["Đáp án 1", "Đáp án 2", "Đáp án 3", "Đáp án 4", "Đáp án 5", "Đáp án 6"],
    correctAnswer: "Đáp án 6"
    }, {
    question: "Câu hỏi 3-3",
    choices: ["Đáp án 1", "Đáp án 2", "Đáp án 3"],
    correctAnswer: "Đáp án 3"
    }, {
    question: "Câu hỏi 4-2",
    choices: ["Đáp án 1", "Đáp án 2", "Đáp án 3", "Đáp án 4"],
    correctAnswer: "Đáp án 2"
    }, {
    question: "Câu hỏi 5-1",
    choices: ["Đáp án 1", "Đáp án 2"],
    correctAnswer: "Đáp án 1"
    }];
//Xáo trộn câu hỏi trước khi thực hiện
shuffle(questions);

var currentQuestion = 0; //Câu hỏi hiện tại
var correctAnswers = 0; //Số câu trả lời đúng
var selections = []; //Mảng chứa câu trả lời người dùng
var selectionsStatus = []; //Mảng chứa câu trả lời người dùng
var quizOver = false; // Flag hoàn thành hết câu hỏi.

$(document).ready(function () {

    // Hiển thị câu hỏi đầu tiên
    displayCurrentQuestion();
    $(this).find(".quizMessage").hide();

    // Click next và hiển thị câu hỏi tiếp theo
    $(this).find(".nextButton").on("click", function () {
        if (!quizOver) {
            //value = $("input[type='radio']:checked").val();
            value = $("input[type='radio']:checked").val();

            selections[currentQuestion] = $("input[type='radio']:checked").val();

            //Kiểm tra đã chọn hay chưa
            if (value == undefined) {
                $(document).find(".quizMessage").text("Please select an answer");
                $(document).find(".quizMessage").show();
            } else {
                //Nếu chọn rồi thì xóa messege.
                // TODO: Remove any message -> not sure if this is efficient to call this each time....
                $(document).find(".quizMessage").hide();

                if (value == questions[currentQuestion].correctAnswer) {
                    correctAnswers++; //Phần dư thừa
                    selectionsStatus[currentQuestion] = true;
                }   else
                    selectionsStatus[currentQuestion] = false;

                currentQuestion++; // ++
                if (currentQuestion < questions.length) {
                    displayCurrentQuestion();
                } else {
                    displayScore();
                    // Change the text in the next button to ask if user wants to play again
                    $(document).find(".nextButton").text('Play again');
                    $(document).find(".backButton").text("Lùi lại");
                    $(document).find(".submit").show();
                    quizOver = true;
                    if(correctAnswers == questions.length)
                    $(document).find(".quizContainer > .result").text('Congrajulation Perfect.');
                }



                // Kiểm tra kết quả ^_^
                console.log('Số câu trả lời đúng: ' + correctAnswers);
                console.log('Câu trả lời user: ' + selections);
                console.log('Tình trạng kết quả: ' + selectionsStatus);
            }
        } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
            quizOver = false;
            $(document).find(".nextButton").text('Tiếp tục');
            resetQuiz();
            displayCurrentQuestion();
            hideScore();
            console.log('Chơi lại từ đầu');
        }
    });

    //Trở về câu hỏi trước đó
    $(this).find(".backButton").on("click", function () {
                console.log('Quay lại câu hỏi trước đó');
                if(currentQuestion > 0)
                    currentQuestion--;
                if(selectionsStatus[currentQuestion] == true)
                correctAnswers--; //Phần dư thừa
                displayCurrentQuestion();
    });

    //Nop bai va xem ket qua
    $(this).find(".submit").on("click", function () {
        $(".quizContainer").children().filter(":not(h1)").hide();
        console.log('Submit on click');
        $(".quizContainer > h1").prepend('Đáp án bài tập ')

        for(j = 0; j < questions.length; j++)
        {
            $('<h3>Câu ' + (j + 1) + ': ' + questions[j].question + '</h3><br>').appendTo('.quizContainer');
            if(selectionsStatus[j])
                $('<p>Đáp án của bạn là ' + selections[j] + ' là <b style = "color: limegreen;">Đúng</b></p>').appendTo('.quizContainer');
            else
                $('<p>Đáp án của bạn là ' + selections[j] + ' là <b style = "color: red;">Sai</b></p>').appendTo('.quizContainer');

        }

    });

});

// This displays the current question AND the choices
// Hàm hiển thị câu hỏi hiện tại và bảng các câu trả lời
function displayCurrentQuestion() {

    console.log("<br> In display current Question");

    var question = questions[currentQuestion].question;
    var questionStt = $(document).find(".quizContainer > .stt-q");
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;

    // Set the questionClass text to the current question
    $(questionStt).text("Câu: " + (currentQuestion + 1));
    $(questionClass).text(question);

    // Xóa tất cả thẻ li nếu có
    $(choiceList).find("*").remove();


    var choice;
//     Xáo trộn câu trả lời
    shuffle(questions[currentQuestion].choices);
    for (i = 0; i < numChoices; i++) {
        choice = questions[currentQuestion].choices[i];
        //$('<li><input id = answer' + i + ' type="radio" value=' + i + ' name="dynradio" /><label for = answer' + i + '>' + choice + '</label></li>').appendTo(choiceList);
        $('<li><input id = "answer' + i + '" name="dynradio" type="radio" value = "' + choice + '"/><label for = "answer' + i + '"><b>&#'+ (i + 65) + ';.</b>' + choice + '</label></li>').appendTo(choiceList);
    }

    //Hiển thị kết quả đã lưu nếu back.
    $('input[value="'+selections[currentQuestion]+'"]').attr('checked', true);

}

// Hàm reset kết quả
function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
    selections = []; //reset
    selectionsStatus = [];//reset
}


// Hàm hiển thị điểm số
function displayScore() {
    $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
    $(document).find(".quizContainer > .result").show();
}


// Hàm ẩn điểm số
function hideScore() {
    $(document).find(".result").hide();
}

// thuật toán trộn Fisher – Yates

function shuffle(array) {
    var m = array.length, t, i;
    // Chừng nào vẫn còn phần tử chưa được xáo trộn thì vẫn tiếp tục
    while (m) {
        // Lấy ra 1 phần tử
        i = Math.floor(Math.random() * m--);
        // Sau đó xáo trộn nó
        t = array[m];
        array[m] = array[i];
        array[i] = t;
    }
    return array;
}
