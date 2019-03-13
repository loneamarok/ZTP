<!doctype html>
<html>
<head>
	<title>asd</title>
<style>
    .example {
         width: 80%;
         margin: 50px auto 30px auto;
    }

    .progress__container {
         width: 100%;
         background-color: #ccc;
         border-radius: 5px;
         overflow-x: hidden;
         line-height: 8px;
    }

    .progress__bar {
         height: 8px;
         background-color: #4CAF50;
         border-top-left-radius: 5px;
         border-bottom-left-radius: 5px;
         display: inline-block;
    }

    .progress__bar--failure {
         background-color: red;
    }

    .progress {
         position: relative;
    }

    .step {
         position: absolute;
         top: 10px;
         transform: translate(-50%, 0);
         text-align: center;
    }

    .step--first {
         left: 0%;
         transform: none;
         text-align: left;
    }

    .step--last {
         right: 0%;
         transform: none;
         text-align: right;
    }

    .step__content {
         display: inline-block;
         margin-top: 10px;
    }

    .step__title {
         font-size: 14px;
    }

    .step__title--status-icon {
         font-size: 13px;
         font-weight: bold;
         border-radius: 14px;
         position: absolute;
         height: 10px;
         width: 10px;
         top: -15.5px;
         left: 50%;
         color: black;
         background-color: #ccc;
         transform: translate(-50%, 0);
         padding: 5px;
         text-align: center;
    }

    .step__title--status-icon-completed {
         color: white;
         background-color: green;
    }

    .step__title--status-icon--first {
         left: -2px;
         transform: none;
    }

    .step__title--status-icon--last {
         left: auto;
         right: -2px;
         transform: none;
    }

</style>
<body>
	<div class="example">
    <div class="progress">
        <div class="progress__container">
            <div class="progress__bar" style="width: 50%">
                <div class="step step--first">
                    <div class="step__content">
                        <div class="step__title">
                            Step 1
                            <span class="step__title--status-icon step__title--status-icon--first step__title--status-icon-completed">1</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 11.11%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 22.22%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 33.33%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 44.44%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 55.55%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 66.66%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 77.77%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step" style="left: 88.88%">
                    <div class="step__content">
                        <div class="step__title">
                            Step 2
                            <span class="step__title--status-icon step__title--status-icon-completed">2</span>
                        </div>
                    </div>
                </div>

                <div class="step step--last">
                    <div class="step__content">
                        <div class="step__title">
                            Step 3
                            <span class="step__title--status-icon step__title--status-icon--last">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</head>