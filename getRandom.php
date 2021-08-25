<?php

$inputData = json_decode(file_get_contents("php://input"));
echo mt_rand($inputData->minNumber, $inputData->maxNumber);
