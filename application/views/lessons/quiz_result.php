

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style>
    .result-message {
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .congrats-message {
        color: #30c465; /* Use the official website color for success message */
    }

    .fail-message {
        color: #dc3545; /* Change to your desired red color for failure message */
    }

    .take-quiz-again-btn,
    .take-quiz-again-btn:hover {
        background-color: #30c465; /* Use the official website color for the button */
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    }

    .submitted-answer {
        color: #30c465; /* Set the color for submitted answers */
    }


    /* Progres bar */

.container {
  margin: 60px auto;
  width: 400px;
  text-align: center;
}

.container .progress {
  margin: 0 auto;
  width: 400px;
}

.progress {
  padding: 4px;
  background: #fff;
  border-radius: 6px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25),
    0 1px rgba(255, 255, 255, 0.08);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25),
    0 1px rgba(255, 255, 255, 0.08);
}

.progress-bar {
  height: -20px;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(
    top,
    rgba(255, 255, 255, 0.3),
    rgba(255, 255, 255, 0.05)
  );
  background-image: -moz-linear-gradient(
    top,
    rgba(255, 255, 255, 0.3),
    rgba(255, 255, 255, 0.05)
  );
  background-image: -o-linear-gradient(
    top,
    rgba(255, 255, 255, 0.3),
    rgba(255, 255, 255, 0.05)
  );
  background-image: linear-gradient(
    to bottom,
    rgba(255, 255, 255, 0.3),
    rgba(255, 255, 255, 0.05)
  );
  -webkit-transition: 0.4s linear;
  -moz-transition: 0.4s linear;
  -o-transition: 0.4s linear;
  transition: 0.4s linear;
  -webkit-transition-property: width, background-color;
  -moz-transition-property: width, background-color;
  -o-transition-property: width, background-color;
  transition-property: width, background-color;
  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25),
    inset 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25),
    inset 0 1px rgba(255, 255, 255, 0.1);
}

/* 
#five:checked ~ .progress > .progress-bar {
  width: 5%;
  background-color: #f63a0f; 
}

#twentyfive:checked ~ .progress > .progress-bar {
  width: 25%;
  background-color: #f27011;
}

#fifty:checked ~ .progress > .progress-bar {
  width: 50%;
  background-color: #f2b01e;
}

#seventyfive:checked ~ .progress > .progress-bar {
  width: 75%;
  background-color: #f2d31b;
}

#onehundred:checked ~ .progress > .progress-bar {
  width: 100%;
  background-color: #86e01e;
} */

.radio {
  display: none;
}

.label {
  display: inline-block;
  margin: 0 5px 20px;
  padding: 3px 8px;
  color: #aaa;
  text-shadow: 0 1px black;
  border-radius: 3px;
  cursor: pointer;
}

.radio:checked + .label {
  color: white;
  background: rgba(0, 0, 0, 0.25);
}

    /* Add styles for the "Unlocked Next Level" button */
    .take-quiz-again-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
        background-color: #4caf50; /* Green color, you can change it */
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .take-quiz-again-btn:hover {
        background-color: #45a049; /* Darker green color on hover, you can change it */
    }




/* Thumbsup */



.center {
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  max-width: 120px;
  margin: 0 auto;
  top: 50%;
  text-align: center;
  position: relative;
}
.center::after {
  clear: both;
  content: "";
  display: block;
}


.green-color {
        color:green;
        
    }


</style>

<div class="row">
<div class="col-lg-12" style="text-align:center">
    <?php
    $totalQuestions = count($submitted_quiz_info);
    $correctQuestions = $total_correct_answers;
    $percentageMarks = ($correctQuestions / $totalQuestions) * 100;
    ?>

    <!-- <?php if ($percentageMarks >= 75): ?>
        <div class="result-message congrats-message">
            <h5 class="card-title"><?php echo get_phrase('Congratulations! You have successfully passed the quiz with a score of ' . $percentageMarks . '%.'); ?></h5>
            <p><?php echo get_phrase('You are now ready to go to the next level.'); ?></p>
            <div class="text-center">
                <a href="next_level.php" name="button" class="take-quiz-again-btn mt-2">Unlocked Next Level</a>
            </div>
        </div>
    <?php else: ?>
        <div class="result-message fail-message">
            <h5 class="card-title"><?php echo get_phrase('Sorry! You have not passed the quiz. Your score is ' . $percentageMarks . '%. Please retake the quiz to improve.'); ?></h5>
            <div class="text-center">
                <a href="javascript::" name="button" class="take-quiz-again-btn mt-2" onclick="location.reload();"><?php echo get_phrase("Retake Quiz"); ?></a>
            </div>
        </div>
    <?php endif; ?> -->


    <?php if ($percentageMarks >= 75): ?>
    <!-- <div class="result-message congrats-message">
        <h5 class=""><?php echo get_phrase('Congratulations! You have successfully passed the quiz with a score of ' . $percentageMarks . '%.'); ?></h5>
        <p><?php echo get_phrase('You are now ready to go to the next level.'); ?></p>
        <div class="text-center">
            <a href="next_level.php" name="button" class="take-quiz-again-btn mt-2">Unlocked Next Level</a>

        </div>
    </div> -->


    <div class="result-message congrats-message">
    <h5 class=""><?php echo get_phrase('Congratulations! You have successfully passed the quiz with a score of ' . $percentageMarks . '%.'); ?></h5>
    <p><?php echo get_phrase('You are now ready to go to the next level.'); ?></p>

 
</div>
    <!-- Button to unlock the next level -->
    <div class="text-center mt-2">
        <a href="next_level.php" name="button" class="take-quiz-again-btn">Unlocked Next Level</a>
    </div>
</div>


<?php else: ?>
    <div class="result-message fail-message">
        <h5 class=""><?php echo get_phrase('Sorry! You have not passed the quiz. Your score is ' . $percentageMarks . '%. Please retake the quiz to improve.'); ?></h5>
        <div class="text-center">
            <a href="javascript::" name="button" class="take-quiz-again-btn mt-2" onclick="location.reload();" style="background-color: #f63a0f; color: #fff;"><?php echo get_phrase("Retake Quiz"); ?></a>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <?php
    // Set the inline style and color based on the percentageMarks
    $progressStyle = 'width: ' . $percentageMarks . '%; background-color: ';

    // Set default label color to black
    $labelColor = 'black';

    if ($percentageMarks == 0) {
        $progressColor = 'red'; // red color
    } elseif ($percentageMarks >= 75) {
        $progressColor = '#30c465'; // dark green color
        $labelColor = '#30c465'; // dark green color
    } elseif ($percentageMarks >= 50) {
        $progressColor = 'orange'; // orange color
        $labelColor = 'orange'; // orange color
    } elseif ($percentageMarks >= 25) {
        $progressColor = 'red'; // red color
        $labelColor = 'red'; // red color
    } else {
        $progressColor = 'red'; // red color
    }

    // Get current date and time
    $currentDateTime = new DateTime();
    $completionDate = $currentDateTime->format('Y-m-d'); // Format as desired, e.g., 'Y-m-d'
    $completionTime = $currentDateTime->format('H:i:s'); // Format as desired, e.g., 'H:i:s'
    ?>

    <div class="progress">
        <div class="progress-bar" style="width: <?php echo $percentageMarks; ?>%; background-color: <?php echo $progressColor; ?>;"></div>
    </div>

    <!-- Display the date of completion and time -->

    <div class="date-time-container">
        <p>Date of Completion: <?php echo $completionDate; ?></p>
        <p>Time: <?php echo $completionTime; ?></p>
    </div>
    
    <!-- Corrected number of answers with total question -->
    <p><?php echo $correctQuestions; ?> out of <?php echo $totalQuestions; ?> questions answered</p>

    <!-- Labels with dynamically changing colors based on the progress bar -->
    <label for="twentyfive" style="color: <?php echo ($percentageMarks >= 25) ? $labelColor : 'black'; ?>;" class="label <?php echo ($percentageMarks >= 25) ? 'selected' : ''; ?>">25%</label>

    <label for="fifty" style="color: <?php echo ($percentageMarks >= 50) ? $labelColor : 'black'; ?>;" class="label <?php echo ($percentageMarks >= 50) ? 'selected' : ''; ?>">50%</label>

    <label for="seventyfive" style="color: <?php echo ($percentageMarks >= 75) ? $labelColor : 'black'; ?>;" class="label <?php echo ($percentageMarks >= 75) ? 'selected' : ''; ?>">75%</label>

    <label for="onehundred" style="color: <?php echo ($percentageMarks == 100) ? '#30c465' : 'black'; ?>;" class="label <?php echo ($percentageMarks == 100) ? 'selected' : ''; ?>">100%</label>
</div>


</div>


    </div>
<?php foreach ($submitted_quiz_info as $each):
    $question_details = $this->crud_model->get_quiz_question_by_id($each['question_id'])->row_array();
    $options = json_decode($question_details['options']);
    $correct_answers = json_decode($each['correct_answers']);
    $submitted_answers = json_decode($each['submitted_answers']);
?>
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card text-left card-with-no-color-no-border">
                <div class="card-body">
                    <h6 class="card-title">
                        <img src="<?php echo $each['submitted_answer_status'] == 1 ? base_url('assets/frontend/default/img/green-tick.png') : base_url('assets/frontend/default/img/red-cross.png'); ?>" alt="" height="15px;">
                        <?php echo $question_details['title']; ?>
                    </h6>
                    <?php for ($i = 0; $i < count($correct_answers); $i++): ?>
                        <p class="card-text">
                             <span class="submitted-answer">
                                <?php echo $options[($correct_answers[$i] - 1)]; ?>
                            </span>
                            <img src="<?php echo in_array(($correct_answers[$i] - 1), $submitted_answers) ? base_url('assets/frontend/default/img/correct-tick.png') : base_url('assets/frontend/default/img/wrong-cross.png'); ?>" alt="" height="15px;">
                        </p>
                    <?php endfor; ?>


                    <p class="card-text">
    <strong><?php echo get_phrase("submitted_answers"); ?>:</strong> [
    <?php
    $submitted_answers_as_csv = "";
    foreach ($submitted_answers as $submitted_answer) {
        $answerIndex = ($submitted_answer - 1);
        $answerColor = $each['submitted_answer_status'] == 1 ? '#30c465' : 'red';
        $submitted_answers_as_csv .= '<span class="submitted-answer" style="color: ' . $answerColor . ';">' . $options[$answerIndex] . '</span>, ';
    }
    echo rtrim($submitted_answers_as_csv, ', ');
    ?>
    ]
</p>


                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- <div class="text-center">
    <a href="javascript::" name="button" class="btn btn-sign-up mt-2" style="color: #fff;" onclick="location.reload();"><?php echo get_phrase("take_again"); ?></a>
</div> -->
