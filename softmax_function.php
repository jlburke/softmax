<?php

function softmax(array $arrVector): array {
  $expValues = array_map('exp', $arrVector);
  $sumExpValues = array_sum($expValues);
  return array_map(fn($x) => $x / $sumExpValues, $expValues);
}
