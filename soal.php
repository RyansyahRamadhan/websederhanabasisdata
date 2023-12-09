<!DOCTYPE html>
<html>
<head>
<title>Soal Basis Data</title>
<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body onload="NextQuestion(0)">
    <main>
    <!-- creating a modal untuk when quiz ends-->
        <div class="modal-container" id="score-modal">
            <div class="modal-content-container">
                <h1>Selamat Ujian Sudah Selesai</h1>
                <div class="grade-details">
                    <p>attempts :10 </p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p><span id="rewaks"></span></p>
                </div>
                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Continue</button>
                </div>

            </div>


        </div>
        <div class="game-quiz-container">
            <div class=" game-detail-container">
                <h1>Score : <span id="player-score">10</span></h1>
                <h1>Question : <span id="question-number">10</span></h1>
            </div>
            <div class="game-question-container">
                <h1 id="display-question"></h1>

            </div>
            <div class="game-options-container">
                <h1>Tolong Periksa Kembali</h1>
                <div class="modal-button-container">
                    <button onclick="closeOptionModal()">Continue</button>

                </div>
            </div>

        </div>
        <span>
            <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
            <label for="option-one" class="option" id="option-one-label"></label>

        </span>
        <span>
            <input type="radio" id="option-one" name="option" class="radio" value="optionB" />
            <label for="option-one" class="option" id="option-one-label"></label>

        </span>
        <span>
            <input type="radio" id="option-one" name="option" class="radio" value="optionC" />
            <label for="option-one" class="option" id="option-one-label"></label>

        </span>
        <span>
            <input type="radio" id="option-one" name="option" class="radio" value="optionD" />
            <label for="option-one" class="option" id="option-one-label"></label>

        </span>
</div>
<div class="next-button-container">
    <button onclick="handleNextQuestion()">NextQuestion</button>

</div>
</div>

    </main>
 <script src="index.js"></script>
</body>

</html>