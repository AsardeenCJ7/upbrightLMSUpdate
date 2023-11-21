

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style>
    .result-message {
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 10px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
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


    /* Progres bar */


.container .progress {
  margin: 0 auto;
  width: 500px;
}

.progress {
  padding: 4px;
  background: #f7f7f7;
  /*border: none !important;*/
  border-radius: 30px;
}


.progress-bar {
  height: 10px;
  border: none !important;
  border-radius: 30px;
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
        background-color: #30c465; /* Green color, you can change it */
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .take-quiz-again-btn:hover {
        background-color: #076408; /* Darker green color on hover, you can change it */
    }


/*    Table css */

    table,td, th {
        /*border: 1px solid #dddddd;*/
        text-align: left;
        padding: 4px !important;
        border: none !important;
    }

    table{
        margin:auto !important;
        ;
    }

    .table-responsive {
        margin: auto;
        width: 100%;
    }

    .table-responsive table {
        width: 50%;
        border-collapse: collapse;
        text-align: center;
    }


</style>




<div class="row">
    <div class="col-lg-12" style="text-align:center">
        <?php
        $totalQuestions = count($submitted_quiz_info);
        $correctQuestions = $total_correct_answers;
        $percentageMarks = ($correctQuestions / $totalQuestions) * 100;
        ?>

        <?php if ($percentageMarks >= 60): ?>
            <div class="result-message congrats-message">
                <h5 class=""><?php echo get_phrase('Congratulations! You passed this test. You may retake the test when eligible. '); ?></h5>
                <p><?php echo get_phrase('You are now ready to go to the next level.'); ?></p>
            </div>

            <!-- Button to unlock the next level -->
            <div class="text-center mt-2">
                <a href="" name="button" class="take-quiz-again-btn">Unlocked Next Level</a>
            </div>

        <?php else: ?>
            <div class="result-message fail-message">
                <h5 class=""><?php echo get_phrase('Sorry! You have not passed the quiz. Please retake the quiz to improve and unlock next section.'); ?></h5>
                <div class="text-center" style="margin-top: 40px;">
                    <a href="javascript::" name="button" class="take-quiz-again-btn mt-2" onclick="location.reload();" style="background-color: #f63a0f; color: #fff;"><?php echo get_phrase("Retake Quiz"); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <div class="container-fluid pro-bar" style="margin-top: 20px">
            <?php
            // Set the inline style and color based on the percentageMarks
            $progressStyle = 'width: ' . $percentageMarks . '%; background-color: ';

            // Set default label color to black
            $labelColor = 'black';

            if ($percentageMarks >= 60) {
                $progressColor = '#30c465'; // green color
                $labelColor = '#30c465'; // green color
            } else {
                $progressColor = 'red'; // red color
                $labelColor = 'red'; // red color
            }

            // Get current date and time
            $currentDateTime = new DateTime();
            $completionDate = $currentDateTime->format('Y-m-d'); // Format as desired, e.g., 'Y-m-d'
            $completionTime = $currentDateTime->format('H:i:s'); // Format as desired, e.g., 'H:i:s'
            ?>



            <div id="loadingDiv" class="progress" data-toggle="tooltip" data-placement="top" title="<?php echo $percentageMarks >= 60 ? 'Pass' : 'Fail'; ?>">
                <div class="progress-bar" id="loadingBar" style="width: 0%; background-color: <?php echo $progressColor; ?>;">
                    <div id="loadingText"></div>
                </div>
            </div>


        </div>

        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th colspan="2"><p style="font-size: 65px;font-weight: 600;color: <?php echo $labelColor; ?>;"><?php echo number_format($percentageMarks / 10, 1); ?></p></th>
                </tr>
                <tr style="margin-top: -10px">
                    <td colspan="2"><p style="font-weight: bolder">Out of <?php echo $totalQuestions; ?></p></td>
                </tr>
                <tr>
                    <td>CORRECT</td>
                    <td>DATE</td>
                </tr>

                <tr>
                    <th><?php echo $correctQuestions;?> <b>/</b> <?php echo $totalQuestions; ?></th>
                    <th><?php echo date('F j, Y', strtotime($completionDate)); ?></th>
                </tr>

                <tr>
                    <td>PASSING SCORE</td>
                    <td>TRANSCRIPT ID</td>
                </tr>

                <tr>
                    <th>6.0</th>
                    <th>9673712</th>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    // Initialize Bootstrap tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>

<script>
    // JavaScript
    var loadingBar = document.getElementById("loadingBar");
    var maxWidth = parseFloat(getComputedStyle(document.getElementById("loadingDiv")).width);
    var animationFrame = null;
    var speed = 100;

    // Set the initial color to gray
    loadingBar.style.backgroundColor = 'gray';

    // Animation
    function upLoadingBar() {
        var loadingBarWidth = parseFloat(getComputedStyle(loadingBar).width);

        // Check if the loading bar width is less than the desired percentage of maxWidth
        if (loadingBarWidth < maxWidth * (<?php echo $percentageMarks; ?> / 100)) {
            // Increase the loading bar width by the speed
            loadingBar.style.width = (loadingBarWidth + speed) + "px";

        // Request the next animation frame
        animationFrame = requestAnimationFrame(upLoadingBar);
    } else {
        // Change the color to the progress color when the loading is complete
        loadingBar.style.backgroundColor = "<?php echo $progressColor; ?>";
    }
    }

    // Start the animation
    animationFrame = requestAnimationFrame(upLoadingBar);


</script>





<?php
//This is answer and questions show but it not be show

?>

<?php //foreach ($submitted_quiz_info as $each):
//    $question_details = $this->crud_model->get_quiz_question_by_id($each['question_id'])->row_array();
//    $options = json_decode($question_details['options']);
//    $correct_answers = json_decode($each['correct_answers']);
//    $submitted_answers = json_decode($each['submitted_answers']);
//    ?>
<!--        <div class="row mb-4">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="card text-left card-with-no-color-no-border">-->
<!--                    <div class="card-body">-->
<!--                        <h6 class="card-title">-->
<!--                            <img src="--><?php //echo $each['submitted_answer_status'] == 1 ? base_url('assets/frontend/default/img/green-tick.png') : base_url('assets/frontend/default/img/red-cross.png'); ?><!--" alt="" height="15px;">-->
<!--                            --><?php //echo $question_details['title']; ?>
<!--                        </h6>-->
<!--                    --><?php //for ($i = 0; $i < count($correct_answers); $i++): ?>
<!--                        <p class="card-text">-->
<!--                             <span class="submitted-answer">-->
<!--                                --><?php //echo $options[($correct_answers[$i] - 1)]; ?>
<!--                            </span>-->
<!--                            <img src="--><?php //echo in_array(($correct_answers[$i] - 1), $submitted_answers) ? base_url('assets/frontend/default/img/correct-tick.png') : base_url('assets/frontend/default/img/wrong-cross.png'); ?><!--" alt="" height="15px;">-->
<!--                        </p>-->
<!--                    --><?php //endfor; ?>
<!---->
<!--                    <p class="card-text">-->
<!--                        <strong>--><?php //echo get_phrase("submitted_answers"); ?><!--:</strong> -->
<!--                        [--><?php
//                        $submitted_answers_as_csv = "";
//                            foreach ($submitted_answers as $submitted_answer) {
//                            $answerIndex = ($submitted_answer - 1);
//                            $answerColor = $each['submitted_answer_status'] == 1 ? '#30c465' : 'red';
//                            $submitted_answers_as_csv .= '<span class="submitted-answer" style="color: ' . $answerColor . ';">' . $options[$answerIndex] . '</span>, ';
//                        }
//                        echo rtrim($submitted_answers_as_csv, ', ');
//                        ?><!--]-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<?php //endforeach; ?>


